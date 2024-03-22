<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', [App\Http\Controllers\FrontendController::class, 'index'])->name('index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/myself', [App\Http\Controllers\MySelfController::class, 'myself'])->name('myself');
Route::post('/myself_info', [App\Http\Controllers\MySelfController::class, 'myself_info'])->name('myself_info');
Route::get('/about', [App\Http\Controllers\AboutController::class, 'about'])->name('about');
Route::post('/about_info', [App\Http\Controllers\AboutController::class, 'about_info'])->name('about_info');
Route::get('/service', [App\Http\Controllers\ServiceController::class, 'service'])->name('service');
Route::get('/edit_service/{id}', [App\Http\Controllers\ServiceController::class, 'edit_service'])->name('edit_service');
Route::get('/delete_service/{id}', [App\Http\Controllers\ServiceController::class, 'delete_service'])->name('delete_service');
Route::post('/edit_service_info', [App\Http\Controllers\ServiceController::class, 'edit_service_info'])->name('edit_service_info');
Route::post('/service_info', [App\Http\Controllers\ServiceController::class, 'service_info'])->name('service_info');
Route::get('/product', [App\Http\Controllers\ProductController::class, 'product'])->name('product');
Route::post('/product_info', [App\Http\Controllers\ProductController::class, 'product_info'])->name('product_info');
Route::get('/edit_product/{id}', [App\Http\Controllers\ProductController::class, 'edit_product'])->name('edit_product');
Route::get('/delete_product/{id}', [App\Http\Controllers\ProductController::class, 'delete_product'])->name('delete_product');
Route::post('/edit_product_info', [App\Http\Controllers\ProductController::class, 'edit_product_info'])->name('edit_product_info');
Route::post('/cv_info', [App\Http\Controllers\CVUploadController::class, 'cv_info'])->name('cv_info');
Route::get('/cv', [App\Http\Controllers\CVUploadController::class, 'cv'])->name('cv');
Route::get('/view_cv', [App\Http\Controllers\CVUploadController::class, 'view_cv'])->name('view_cv');
Route::get('/download/{cv}', [App\Http\Controllers\CVUploadController::class, 'download'])->name('download');
Route::get('/view/{id}', [App\Http\Controllers\CVUploadController::class, 'view'])->name('view');
Route::get('/frontend_download/{cv}', [App\Http\Controllers\FrontendController::class, 'frontend_download'])->name('frontend_download');
Route::get('/frontend_view/{id}', [App\Http\Controllers\FrontendController::class, 'frontend_view'])->name('frontend_view');
Route::post('/customer_review', [App\Http\Controllers\FrontendController::class, 'customer_review'])->name('customer_review');
Route::get('/customer_review_show', [App\Http\Controllers\FrontendController::class, 'customer_review_show'])->name('customer_review_show');
Route::get('/delete_customer_reviews/{id}', [App\Http\Controllers\FrontendController::class, 'delete_customer_reviews'])->name('delete_customer_reviews');
Route::get('/brand_logo', [App\Http\Controllers\BrandLogoController::class, 'brand_logo'])->name('brand_logo');
Route::post('/brand_logo_info', [App\Http\Controllers\BrandLogoController::class, 'brand_logo_info'])->name('brand_logo_info');
Route::get('/delete_brand/{id}', [App\Http\Controllers\BrandLogoController::class, 'delete_brand'])->name('delete_brand');
Route::get('/edit_brand/{id}', [App\Http\Controllers\BrandLogoController::class, 'edit_brand'])->name('edit_brand');
Route::post('/brand_logo_edit', [App\Http\Controllers\BrandLogoController::class, 'brand_logo_edit'])->name('brand_logo_edit');


