<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $title = "Laravel Primi Passi";
    $exempleText = "HELLO WORLD";
    $todoList = ["Fare la spesa", "Portare fuori il cane", "Portare la macchina dal meccanico", "Fare la patente"];
    return view('home', ["title"=> $title, "extext"=> $exempleText, "todoList"=> $todoList]);
});
