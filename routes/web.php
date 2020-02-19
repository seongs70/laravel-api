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

Route::get('/', function () {
    $books = [
        'Harry potter',
        'laravel'
    ];
    return view('welcome')->withBooks(['books' => $books]);
});

Route::get('/todo', function () {
    return view('todo.todoList');
});

Route::get('/hello', function () {
    return view('hello');
});

Route::get('/contact', function () {
    return view('contact');
});
