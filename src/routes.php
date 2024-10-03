<?php
use core\Router;

$router = new Router();

// Rotas da pasta principal
$router->get('/', 'HomeController@index');
$router->get('/sobre/{nome}', 'HomeController@sobreP');
$router->get('/sobre', 'HomeController@sobre');


// Rotas do Gestor
$router->get('/ceo/home', 'GestorController@gestor');


// Rotas do Coordenador
$router->get('/home', 'CoordenadorController@coordenador');

