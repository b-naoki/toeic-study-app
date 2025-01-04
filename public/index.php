<?php

use Slim\Factory\AppFactory;
use App\Controller\HomeController;

require __DIR__ . '/../vendor/autoload.php';

$app = AppFactory::create();

$app->get('/', [HomeController::class, 'index']);

$app->run();
