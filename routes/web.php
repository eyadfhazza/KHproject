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
    Route::get('show_users','User@index')->name('users');

    //Categories
    Route::get('show_cats','CategoriesController@index')->name('categories');

    //meals
    Route::get('show_meals','MealController@index')->name('meals');

    //address
    Route::get('show_address','AddressController@index')->name('address');

    //reviews
    Route::get('show_reviewes','ReviewController@index')->name('reviwes');

    //roles
    Route::get('show_roles','RoleController@index')->name('roles');

    //payments
    Route::get('show_payments','PaymentController@index')->name('payments');


});



