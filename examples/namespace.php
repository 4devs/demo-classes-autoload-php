<?php

require_once __DIR__ . '/../src/Autoloader/NamespaceAutoloader.php';
 
$autoloader = new NamespaceAutoloader();
$autoloader->addNamespace('Model', __DIR__ . '/../src/Model');
$autoloader->register();

// autoload in action
use Model as Alias;

$robot = new Alias\Robot('Bender');
$robot->extendVocabulary("Lets face it, comedy's a dead art form. Now tragedy! Ha ha ha, that's funny.");
$robot->extendVocabulary("Congratulations, Fry! You snagged the perfect girlfriend. Amy's rich, she probably has got other characteristics...");
$robot->extendVocabulary("I'm a real toughie!");

echo $robot->getName() . ': ' . $robot->saySomething();