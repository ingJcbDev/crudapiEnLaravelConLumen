<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});


$router->get('/hola', function () use ($router) {
    return "<h1>Hola api</h1>";
});

$router->get('/libros', 'LibroController@index');

$router->post('/libros', 'LibroController@guardar');

$router->get('/libros/{id}', 'LibroController@ver');

$router->delete('/libros/{id}', 'LibroController@eliminar');

$router->post('/libros/{id}', 'LibroController@actualizar');