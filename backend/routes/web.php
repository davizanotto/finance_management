<?php

use App\Models\Entry;

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

$router->get('/Entry', function() use ($router) {
    return Entry::query()->get()->all();
});
$router->get('/Entry/{id}', function($id) use ($router) {
    return Entry::query()->find($id);
});
