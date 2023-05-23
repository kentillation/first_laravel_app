<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\StocksController;
use App\Http\Controllers\UsersController;

Route::get('/', function(){
    if (Auth::check())
    {
        return redirect('tbl_users');
    }
    return redirect('index');
});

//AUTH CONTROLLER
Route::get('/index', 'AuthController@login')->name('index');
Route::post('/index', 'AuthController@loginPost')->name('login');
Route::get('/signup', 'AuthController@signup')->name('signup');
Route::post('/save-user', 'AuthController@save_user')->name('save-user');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', 'StocksController@dashboard');
    Route::delete('/logout', 'AuthController@logout')->name('logout');
});

//USERS CONTROLLER
Route::get('/users_list', 'UsersController@users_list')->name('users_list');
Route::get('/print_users_list', 'UsersController@print_users_list')->name('print-users_list');
Route::get('user-edit/{id}', 'UsersController@edit_user')->name('user-edit');
Route::post('user-update/{id}', 'UsersController@user_update')->name('user-update');
Route::get('user-remove/{id}','UsersController@remove_user')->name('user-remove');
Route::get('/action','UsersController@live_search')->name('live-search');


//STOCKS CONTROLLER
Route::get('/dashboard', 'StocksController@dashboard')->name('dashboard');
Route::get('stock-edit/{id}', 'StocksController@edit_stock')->name('stock-edit');
Route::post('stock-edit/{id}', 'StocksController@update_stock')->name('stock-update');
Route::get('delete/{id}','StocksController@remove_stock')->name('stock-remove');
Route::get('/pending', 'StocksController@pending')->name('pending');
Route::get('/on-progress', 'StocksController@onprogress')->name('onprogress');
Route::get('/delivered', 'StocksController@delivered')->name('delivered');
Route::get('/cancelled', 'StocksController@cancelled')->name('cancelled');
Route::get('/statistics', 'StocksController@statistics')->name('statistics');
Route::get('/financial-summary', 'StocksController@financialSummary')->name('financialSummary');
Route::get('/account', 'StocksController@account')->name('account');
Route::get('/about', 'StocksController@about')->name('about');

