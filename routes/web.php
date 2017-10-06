<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

route::get('/','WelcomeController@index');
route::get('/support','WelcomeController@support');
route::get('/about','WelcomeController@about');
route::get('/blog','WelcomeController@blog');
route::get('/contact','WelcomeController@contact');
