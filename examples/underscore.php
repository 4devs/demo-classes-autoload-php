<?php

// our underscore autoload function
require_once __DIR__ . '/../src/Autoloader/underscore.php';
 
// autoload in action
$article = new Model_Article('Autoloaders in PHP');
$article->setContent('Some very interesting stuff here...');

echo $article->getTitle();