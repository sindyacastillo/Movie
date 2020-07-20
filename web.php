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
/*  otras peliculas */
$router->get('/', function () use ($router) {
    return "Sistemas distribuidos";
});

$router->get('peliculas', 'peliculasController@index');

/*  Movie*/
$router->get('movies', 'MovieController@index');
$router->get('movies/{id}', 'MovieController@showOneMovie');
$router->post('movies', 'MovieController@createMovie');
