<?php

// composer autoloading for vendor components
include __DIR__ . '/../vendor/autoload.php';

$config = include __DIR__ . '/../config/app.php';

(new Orno\Mvc\Application($config))->run();
