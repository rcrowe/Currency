<?php

namespace Currency;

class Currency
{
    public static function instance($driver = 'google', array $options = array())
    {
        $driver = new Driver;
    }
}