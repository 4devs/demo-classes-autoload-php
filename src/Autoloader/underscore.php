<?php

// autoloader for underscore class names (Zend/Twig naming convention style)

function __autoload($class)
{
    $baseDir = __DIR__ . '/../';
    $path = $baseDir . str_replace('_', '/', $class) . '.php';
    if (file_exists($path)) {
        require_once($path);
        return true;
    }
    
    return false;
}