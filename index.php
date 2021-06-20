<?php

ini_set('display_errors' ,true);

spl_autoload_register(function ($class) {
    $path = str_replace('\\', '/', $class.'.php');
    if (file_exists($path)) {
        require_once $path;
    }
});

require_once __DIR__ . "\\vendor\autoload.php";
require_once __DIR__ . "\\public\index.php";
