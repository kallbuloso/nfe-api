<?php
namespace NFe\Logger;

class LogTest extends \PHPUnit_Framework_TestCase
{
    protected function setUp()
    {
        // Log::getInstance()->setHandler(new \Monolog\Handler\NullHandler());
    }

    protected function tearDown()
    {
        Log::getInstance()->setHandler(null);
    }

    public function testLogs()
    {
        Log::getInstance()->fromArray(Log::getInstance());
        Log::getInstance()->fromArray(Log::getInstance()->toArray());
        Log::getInstance()->fromArray(null);
        Log::error('Error Test');
        Log::warning('Warning Test');
        Log::debug('Debug Test');
        Log::info('Information Test');
    }
}
