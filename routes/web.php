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

$app->get('/', 'SuspiciousController@index');

// Catch-all
$app->get('{page}', function($page) {
    $page = str_replace('/', ".", $page);
    return view("static.{$page}");
});