<?php

require_once __DIR__ . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

$app = new \Symfony\Component\Console\Application('Task-1');
$app = new \Symfony\Component\Console\Application('Task-2');
$app = new \Symfony\Component\Console\Application('Task-3');

$app->add(new App\SayHello);
$app->add(new App\ShowString);
$app->add(new App\Questionnaire);

$app->run();
