<?php
require_once './vendor/autoload.php';

use src\controllers\ContactController;
use src\controllers\UserController;
use src\routes\Router;

$contact = new ContactController();
$user = new UserController();

$router = new Router();

$router->routes();

?>