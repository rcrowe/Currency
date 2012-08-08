<?php

class GoogleTest extends PHPUnit_Framework_TestCase
{
    public function testUnknownConfig()
    {
        $this->assertEquals('test', 'test');
    }
}