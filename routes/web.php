<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\TeachersController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\Auth\RegisterController;



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

// Route::get('/', function () {
//     return view('welcome');

// });

Route::controller(RegisterController::class)->group(function () {
    Route::get('/register', 'register')->name('register');
    Route::post('/store', 'store')->name('store');
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

//pages routes
Route::get('/about', function () {
    $aboutPage = App\Models\Page::find(2);
    return view('about', compact('aboutPage'));
});

Route::get('/faq', function () {
    $faqPage = App\Models\Page::find(1);
    return view('faq', compact('faqPage'));
});
// Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/contact', function () {
    $contactPage = App\Models\Page::find(3);
    return view('contact', compact('contactPage'));
});
// MAP
Route::get('/map', 'App\Http\Controllers\MapController@showMap');


Route::get('/', [WelcomeController::class, 'index'])->name('teachers.index');
