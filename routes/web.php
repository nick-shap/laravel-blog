<?php

use Illuminate\Support\Facades\Route;

//Route::view('/404','404');//возвращает простую страницу без данных

Route::get('/', function () {
    return view('welcome');
});

