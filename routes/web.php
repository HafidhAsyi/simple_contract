<?php

use App\Http\Controllers\StafController;
use App\Http\Controllers\UsahaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::resource('stafs', StafController::class);

// Route::resource('usahas', UsahaController::class);
Route::get('usahas', [UsahaController::class, 'index'])->name('usahas.index');
Route::get('usahas/category', [UsahaController::class, 'categoryIndex'])->name('usahas.categoryIndex');
Route::get('usahas/year', [UsahaController::class, 'yearIndex'])->name('usahas.yearIndex');
Route::delete('usahas/{id}', [UsahaController::class, 'destroy'])->name('usahas.destroy');
Route::get('usahas/{id}', [UsahaController::class, 'show'])->name('usahas.show');
Route::get('usahas/edit/{id}', [UsahaController::class, 'edit'])->name('usahas.edit');



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

