<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('homePage');
});

Route::get('/category', function () {
    return view('categoryPage');
});

Route::get('/year', function () {
    return view('yearPage');
});

Route::get('/detail', function () {
    return view('detailPage');
});

Route::get('/alarmHistory', function () {
    return view('alarmHistoryPage');
});

Route::get('/reportHistory', function () {
    return view('reportHistoryPage');
});

Route::get('/edit', function () {
    return view('editPage');
});

Route::get('/add', function () {
    return view('addPage');
});

Route::get('/welcome', function () {
    return view('wellcome');
});

