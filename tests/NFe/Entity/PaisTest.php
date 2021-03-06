<?php
namespace NFe\Entity;

class PaisTest extends \PHPUnit_Framework_TestCase
{
    protected function setUp()
    {
    }

    public function testPais()
    {
        $pais = new \NFe\Entity\Pais();
        $pais->setCodigo(1058);
        $pais->setNome('Brasil');
        $pais->fromArray($pais);
        $pais->fromArray($pais->toArray());
        $pais->fromArray(null);

        $this->assertEquals(1058, $pais->getCodigo());
        $this->assertEquals('Brasil', $pais->getNome());
    }
}
