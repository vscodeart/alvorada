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

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('page.home');
Route::get('/services', [\App\Http\Controllers\ServiceController::class, 'index'])->name('page.services');
Route::get('/services/{slug}', [\App\Http\Controllers\ServiceController::class, 'children'])->name('page.services.children');
Route::get('/services/{slug}/{subslug}', [\App\Http\Controllers\ServiceController::class, 'getSubChilds'])->name('page.services.children.sub');

Route::get('/lang/change', [\App\Http\Controllers\MainController::class, 'change'])->name('changeLang');
Route::group(['prefix' => 'cadmin'], function () {
    Voyager::routes();
});
