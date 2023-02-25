<?php
declare(strict_types=1);

require __DIR__ . './vendor/autoload.php';

use Exam_PHP_OOP\Frameworks\DIContainer;
USE Exam_PHP_OOP\Frameworks\Router;

$container = new DIContainer();
$router = new Router($container);
$router->process($_SERVER['REQUEST_URI'], $_SERVER['REQUEST_METHOD']);