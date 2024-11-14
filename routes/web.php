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

Route::get('/our-team', [\App\Http\Controllers\OurTeamController::class, 'index'])->name('page.our.team');
Route::get('/gallery', [\App\Http\Controllers\GalleryController::class, 'index'])->name('page.gallery');
Route::get('/brands', [\App\Http\Controllers\BrandController::class, 'index'])->name('page.brands');
Route::get('/who-we-are', [\App\Http\Controllers\WhoWeAreController::class, 'index'])->name('page.whoweare');
Route::get('/vouchers', [\App\Http\Controllers\VoucherController::class, 'index'])->name('page.voucher');
Route::get('/blog', [\App\Http\Controllers\BlogController::class, 'index'])->name('page.blog.index');
Route::get('/blog/{slug}', [\App\Http\Controllers\BlogController::class, 'full'])->name('page.blog.full');
Route::get('/contact', [\App\Http\Controllers\ContactController::class, 'index'])->name('page.contact.index');
Route::post('/contact-form', [\App\Http\Controllers\ContactController::class, 'store'])->name('page.contact.store');


Route::get('/lang/change', [\App\Http\Controllers\MainController::class, 'change'])->name('changeLang');
Route::group(['prefix' => 'cadmin'], function () {
    Voyager::routes();
});
