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


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['namespace'=>'TrangChu'], function() {
	Route::get('/user/login', 'LoginController@getLogin');

	Route::get('/', 'HomeController@getIndex');

	Route::get('/contact', 'HomeController@getContact');
	Route::get('/intro', 'HomeController@getIntro');

	Route::get('/news', 'HomeController@getNews');
	Route::get('/device', 'HomeController@getDevice');
	Route::get('/project', 'HomeController@getProject');
});


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
	    Route::get('post/allow', "PostsController@getAllowList");
	    Route::get('posts/allow/{id}', "PostsController@getAllow");
	    Route::get('post/deny', "PostsController@getDenyList");
	    Route::get('posts/deny/{id}', "PostsController@getDeny");

	    Route::get('/profile', 'DashboardController@getProfile');
	    Route::get('/profile/edit', 'DashboardController@editProfile');
	    Route::post('/profile/edit', 'DashboardController@postEditProfile');

	    Route::get('/calendar', 'CalendarController@getIndex');

	    Route::group(['prefix'=>'students'], function() {
	    	Route::get('/', 'StudentsController@getIndex');
	    	Route::get('/create', 'StudentsController@getCreate');
	    	Route::post('/create', 'StudentsController@postCreate');
	    	Route::get('/edit/{id}', 'StudentsController@getEdit');
	    	Route::post('/edit/{id}', 'StudentsController@postEdit');
	    	Route::get('/delete/{id}', 'StudentsController@getDelete');
	    });

	    Route::group(['prefix'=>'teachers'], function() {
	    	Route::get('/', 'TeachersController@getIndex');
	    	Route::get('/create', 'TeachersController@getCreate');
	    	Route::post('/create', 'TeachersController@postCreate');
	    	Route::get('/edit/{id}', 'TeachersController@getEdit');
	    	Route::post('/edit/{id}', 'TeachersController@postEdit');
	    	Route::get('/delete/{id}', 'TeachersController@getDelete');
	    });

	    Route::group(['prefix'=>'devices'], function() {
	    	Route::get('/', 'DevicesController@getIndex');
	    	Route::get('/create', 'DevicesController@getCreate');
	    	Route::post('/create', 'DevicesController@postCreate');
	    	Route::get('/edit/{id}', 'DevicesController@getEdit');
	    	Route::post('/edit/{id}', 'DevicesController@postEdit');
	    	Route::get('/delete/{id}', 'DevicesController@getDelete');

	    	Route::get('/borrow', "DevicesController@getBorrow");
	    	Route::get('/return', "DevicesController@getReturn");
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
