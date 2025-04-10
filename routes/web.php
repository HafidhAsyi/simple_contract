<?php

use App\Http\Controllers\StafController;
use App\Http\Controllers\UsahaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::resource('stafs', StafController::class);

Route::resource('usahas', UsahaController::class);

// Route::get('/usahas/{category}', UsahaController::class, 'categoryIndex');

// Route::get('/usahas/{year}', UsahaController::class, 'yearIndex');

// Route::get('/category', function () {
//     return view('categoryPage');
// });

// Route::get('/year', function () {
//     return view('yearPage');
// });

// Route::get('/detail', function () {
//     return view('detailPage');
// });

// Route::get('/alarmHistory', function () {
//     return view('alarmHistoryPage');
// });

// Route::get('/reportHistory', function () {
//     return view('reportHistoryPage');
// });

// Route::get('/edit', function () {
//     return view('editPage');
// });

// Route::get('/add', function () {
//     return view('addPage');
// });

// Route::get('/welcome', function () {
//     return view('wellcome');
// });

