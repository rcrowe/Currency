<?php

use Currency\Driver\Google;

class InstanceTest extends PHPUnit_Framework_TestCase
{
    public function testUnknownConfig()
    {
        $driver = new Currency\Driver\Google;
        $this->assertTrue(true);
    }
}