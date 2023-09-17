<?php

$routes = [
    'confirmacao' => 'ConfirmacaoController@index',
    'inscritos' => 'InscricaoController@listarInscritos'
];


//Define the main page default
$action = 'confirmacao';
if (isset($_GET['page'])) {

    // verifica se a ação existe nas rotas
    if (!key_exists($_GET['page'], $routes)) {
        $action = 'confirmacao';
    } else {
        $action = $_GET['page'];
    }
}

//Separa a View do Controller
$splitedRoute = explode('@', $routes[$action]);

//Separa o nome da View do Nome do Método no controler. Ambos em String.
$controllerName = 'core\\controllers\\' . $splitedRoute[0];
$metodoController = $splitedRoute[1];

//Instancia o controller e chama o método da requisição
$controller = new $controllerName();
$controller->$metodoController();
