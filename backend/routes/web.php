<?php

use App\Entry;

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
    return "It`s working...";
});

// Formato mais simples, feito pelo tutorial motivacional
// $router->get('/Entry', function() use ($router) {
//     return Entry::query()->get()->all();
// });
// $router->get('/Entry/{id}', function($id) use ($router) {
//     return Entry::query()->find($id);
// });

// Esta forma é seguindo o tutorial para criar API Restful
// $router->get('api/v1/entry', 'EntryController@index');
// $router->get('api/v1/entry/{id}', 'App\Http\Controllers\EntryController@getEntry');
// $router->post('api/v1/entry', 'App\Http\Controllers\EntryController@createEntry');
// $router->put('api/v1/entry/{id}', 'App\Http\Controllers\EntryController@updateEntry');
// $router->delete('api/v1/entry/{id}', 'App\Http\Controllers\EntryController@deleteEntry');

$router->group(['prefix' => 'api/v1'], function() use ($router) {
    $router->get('entry', 'EntryController@index');
    $router->get('entry/{id}', 'EntryController@getEntry');
    $router->post('entry', 'EntryController@createEntry');
    $router->put('entry/{id}', 'EntryController@updateEntry');
    $router->delete('entry/{id}', 'EntryController@deleteEntry');
});