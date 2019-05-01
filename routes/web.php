<?php

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

// $router->group([], function () use ($router)
// {
//     require(__DIR__ . "/Frontend/frontend.php");
// });
Route::get('/admin','Auth\LoginController@showLoginForm')->name('login');
Route::get('logout', 'Auth\LoginController@logout');
Auth::routes();
//Route::get('/register','HomeController@register');
Route::get('/home', 'HomeController@index')->name('home');


//for dashboard
Route::get('admin/dashboard', 'DashboardController@index')->name('dashboard');