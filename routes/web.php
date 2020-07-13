<?php

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
Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', function () {
    return view('welcome');

});

Route::group(['auth','user_is_admin'] ,function() {
    //Users
    Route::get('users','User@index')->name('users');
    Route::post('users','User@store')->name('users');
    Route::delete('users','User@delete')->name('users');

    //Categories
    Route::get('categories','CategoriesController@index')->name('categories');
    Route::post('categories','CategoriesController@store')->name('categories');
    Route::delete('categories', 'CategoriesController@delete')->name('categories');

    //meals
    Route::get('meals','MealController@index')->name('meals');
    Route::post('meals','MealController@store')->name('meals');
    Route::delete('meals','MealController@delete')->name('meals');

    //address
    Route::get('address','AddressController@index')->name('address');
    Route::post('address','AddressController@store')->name('address');
    Route::delete('address','AddressController@delete')->name('address');

    //reviews
    Route::get('reviews','ReviewController@index')->name('reviews');
    Route::post('reviews','ReviewController@store')->name('reviews');
    Route::delete('reviews','ReviewController@delete')->name('reviews');

    //roles
    Route::get('roles','RoleController@index')->name('roles');
    Route::post('roles','RoleController@store')->name('roles');
    Route::delete('roles','RoleController@delete')->name('roles');

    //payments
    Route::get('payments','PaymentController@index')->name('payments');
    Route::post('payments','PaymentController@store')->name('payments');
    Route::delete('payments','PaymentController@delete')->name('payments');


});



