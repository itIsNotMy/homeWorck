<?php

require_once __DIR__ . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

$app = new \Symfony\Component\Console\Application('demo application');

<<<<<<< HEAD
$app->add(new \App\Command1());
=======
$app->add(new \App\Command2());
>>>>>>> command2

$app->run();