<?php

$srcDir = __DIR__ . '/../src';

require_once $srcDir . '/Autoloader/MapAutoloader.php';
 
$autoloader = new MapAutoloader();

// register our map autoloader
spl_autoload_register(array($autoloader, 'autoload'));
 
// fill autoload map with needed classes
$autoloader->registerClass('User', $srcDir . '/Model/User.php');
$autoloader->registerClass('Task', $srcDir . '/Model/Task.php');

// autoload in action
$user = new User('Victor', 'Melnik');
$task = new Task('Write about autoloaders in PHP');

echo $user . ' task is: "' . $task . '"';
// result is:
// Melnik Victor task is: "Write about autoloaders in PHP"