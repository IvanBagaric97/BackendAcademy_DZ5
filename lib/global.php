<?php

require_once dirname(__FILE__) . '/htmlLibrary.php';
require_once dirname(__FILE__) . '/functions.php';

spl_autoload_register(function($classname) {
    $fileName = "./" .
        str_replace("\\", "/", $classname) .
        ".php";
    #echo $fileName;
    if (!is_readable($fileName)) {
        return false ;
    }
    require_once $fileName;
    return true;
}
);