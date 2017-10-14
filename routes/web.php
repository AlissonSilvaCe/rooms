<?php

$router->get('/', function () use ($router) {
    return $router->app->version();
});


$router->post('/room/presence', 'PresenceController@create');

//devolve a lista de sala
$router->get('/room/list', 'PresenceController@list');

//devolve o usuario logado