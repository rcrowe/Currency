<?php

// Make sure we have the vendor directory available
if (!file_exists(__DIR__.'/../vendor/'))
{
    $msg  = "Unable to locate vendor directory. Have you installed composer dependencies.\n";
    echo "\033[31m".$msg."\033[37m\r\n";
    exit(1);
}

// Include the composer autoloader
include __DIR__.'/../vendor/autoload.php';