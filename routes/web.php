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

//Route::get('/', function () {
//    return view('login');
//});


Route::get('logout', function () {

	return redirect('login')->with(Auth::logout());

});


Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/', 'Auth\LoginController@showLoginForm')->name('login');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/dashboard1', 'DashboardController@index')->name('dashboard1');


//

Route::get('/test', 'TestController@index')->name('test');

Route::get('/jsoncheck', 'TestController@index1')->name('jsoncheck');

Route::get('/conversions', 'TestController@conversions')->name('conversions');

Route::post('/search', 'TestController@search')->name('search');

Route::post('/conversions/ajax', 'TestController@conversions_ajax');



Route::group(['prefix' => 'posts'], function() {
  Route::get('/', 'TestController@pagination');
  Route::match(['get', 'post'], 'create', 'TestController@create');
  Route::match(['get', 'put'], 'update/{id}', 'TestController@update');
  Route::get('show/{id}', 'TestController@show');
  Route::delete('delete/{id}', 'TestController@destroy');
});

Route::get('user/edit', 'UserController@edit');
Route::post('user/update', 'UserController@update');

Route::post('user/save', 'UserController@store');
