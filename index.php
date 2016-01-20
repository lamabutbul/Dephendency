<?php

function dephendency($class) {
    $class = str_replace("\\", '/', $class);
    if (is_file(__DIR__.'/../'.$class.'.php')) {
        require_once(__DIR__.'/../'.$class.'.php');
    }
    else {
        require_once(__DIR__.'/../../../'.$class.'.php');
    }
}

spl_autoload_register('dephendency');
