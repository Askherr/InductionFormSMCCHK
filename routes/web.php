<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin;
// use GuzzleHttp\Psr7\Request;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use function GuzzleHttp\Promise\all;

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

Route::get('/', function () {
    return view('index');
});



// Route Register
Route::get('/register', 'App\Http\Controllers\RegisterController@index')->name('register')->middleware('guest');
Route::post('/register', 'App\Http\Controllers\RegisterController@store');

// Route Login
Route::get('/login', 'App\Http\Controllers\LoginController@index')->name('login')->middleware('guest');
Route::post('/login', 'App\Http\Controllers\LoginController@authenticate');
Route::post('/logout', 'App\Http\Controllers\LoginController@logout');

// Route About
Route::get('/about', function () {
    return view('about');
});

// Route After User Login
Route::get('/dashboard','App\Http\Controllers\DashboardController@index')->middleware('auth');
Route::post('/dashboard','App\Http\Controllers\DashboardController@postUser');

// Route Admin
Route::group([
    'prefix'=>config('admin.prefix'),
    'namespace'=>'App\\Http\\Controllers',
],function () {

    // Route Login Admin
    Route::get('loginAdmin','LoginAdminController@formLogin')->name('admin.login');
    Route::post('loginAdmin','LoginAdminController@loginAdmin');

    // Route View database user 
    Route::get('data-post','AdminController@index')->middleware(['auth:admin']);

    // Route View Graphic
    Route::get('grafik','AdminController@graph')->middleware(['auth:admin']);

    // Delete UserPost
    Route::post('destroy/{id}','AdminController@destroy')->name('admin.destroy');

    // Menampilkan View
    Route::get('view','AdminController@view')->middleware(['auth:admin']);
    Route::post('view/{id}','AdminController@view')->middleware(['auth:admin']);
    Route::get('view/{id}','AdminController@view')->middleware(['auth:admin']);

    // Menampilkan detail Form 
    Route::get('detail','AdminController@detail')->middleware(['auth:admin']);
    // Route::post('detail/{id}','AdminController@detail')->middleware(['auth:admin']);
    Route::get('detail/{id}','AdminController@detail')->middleware(['auth:admin']);

    // Update Data Post-User
    Route::get('edit/{id}','AdminController@edit')->middleware(['auth:admin']);

    Route::post('edit/{id}','AdminController@update')->middleware(['auth:admin']);





    
    // Route Template print database User
    
    Route::middleware(['auth:admin'])->group(function () {
        Route::post('logout','LoginAdminController@logout')->name('admin.logout');
        // Route::post('destroy','LoginAdminController@destroy');
        Route::view('/','dashboard')->name('dashboard');
        // Route::view('/post','data-post')->name('post')->middleware('can:role,"admin","editor"');
        // View
        // Route::view('/admin','data-admin')->name('admin')->middleware('can:role,"admin"');
    });
});

