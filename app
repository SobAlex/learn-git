<?php

require_once __DIR__ . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

$app = new \Symfony\Component\Console\Application('Task-1');

$app->add(new App\SayHello);

$app->run();
$app = new \Symfony\Component\Console\Application('Task-2');

$app->add(new App\ShowString);

$app->run();
