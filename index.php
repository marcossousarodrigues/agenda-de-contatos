<?php

// chamado do autoload de classes
require_once './vendor/autoload.php';


//  chamado as classes para a raiz da aplicação
use src\controllers\ContactController;
use src\controllers\UserController;
use src\routes\Router;


// carregando o header das paginas

include './layouts/header.php';

// carregando rotas da aplicação   

$router = new Router();

$router->routes();


// carregando o footer das paginas

require_once './layouts/footer.php';

?>