<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('homepage');
});

Route::get('/about', function () {
    return view('aboutme');
});

Route::get('/project', function () {
    return view('project_detail');
});

Route::get('/sandbox', function () {
    return view('sandbox');
});
