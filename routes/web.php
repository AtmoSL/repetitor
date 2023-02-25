<?php

use App\Http\Controllers\Admin\Landing\LandingAdminController;
use App\Http\Controllers\Landing\LandingController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::resource('/', LandingController::class);


//Админка лендинга 
$groupData = [
    'namespace' => 'App\Http\Controllers\Admin\Landing',
    'prefix' => 'admin/landing',
];

//Пути для админки
Route::group($groupData, function () {

    //Заявки
    $feedbacks_methods = ['index', 'update',];
    Route::resource('/feedbacks', "LandingFeedBackAdminController")
        ->only($feedbacks_methods)
        ->names('admin.landing.feedbacks');

    //Отзывы
    $reviews_methods = ['index', 'update','edit', 'create'];
    Route::resource('/reviews', "LandingReviewAdminController")
        ->only($reviews_methods)
        ->names('admin.landing.reviews');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
