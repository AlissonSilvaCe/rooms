<?php

$router->get('/', function () use ($router) {
    return $router->app->version();
});

//cadastra a presenca das salas
$router->post('/presence/create', 'PresenceController@store');

//devolve a lista de sala
$router->get('/presence/list', 'PresenceController@list');

//cadastra um novo usuario logado
$router->post('/user/create', 'UserController@store');

//retorna a lista de usuarios
$router->get('/user/list', 'UserController@list');
