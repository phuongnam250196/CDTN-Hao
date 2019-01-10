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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['namespace'=>'Admin'], function() {
	Route::group(['prefix'=>'login', 'middleware'=>'checklogin'], function() {
		Route::get('/', "LoginController@getLogin");
		Route::post('/', "LoginController@postLogin");
	});

	Route::get('/logout', 'DashboardController@getLogout');

	Route::group(['prefix'=>'admin', 'middleware'=>'checklogout'], function() {
	    Route::get('/', 'DashboardController@getHome');
	    Route::get('/home', 'DashboardController@getHome');

	    Route::resource('posts', 'PostsController');

	    Route::get('/profile', 'DashboardController@getProfile');
	    Route::get('/profile/edit', 'DashboardController@editProfile');
	    Route::post('/profile/edit', 'DashboardController@postEditProfile');

	    Route::get('/calendar', 'CalendarController@getIndex');

	    Route::group(['prefix'=>'students'], function() {
	    	Route::get('/', 'StudentsController@getIndex');
	    });

	    Route::group(['prefix'=>'teachers'], function() {
	    	Route::get('/', 'TeachersController@getIndex');
	    });

	    Route::group(['prefix'=>'devices'], function() {
	    	Route::get('/', 'DevicesController@getIndex');
	    });

	    Route::group(['prefix'=>'projects'], function() {
	    	Route::get('/', 'ProjectsController@getIndex');
	    	Route::get('/create', 'ProjectsController@getCreate');
	    	Route::post('/create', 'ProjectsController@postCreate');
	    	Route::get('/edit/{id}', 'ProjectsController@getEdit');
	    	Route::post('/edit/{id}', 'ProjectsController@postEdit');
	    	Route::get('/delete/{id}', 'ProjectsController@getDelete');
	    });
	});
});
