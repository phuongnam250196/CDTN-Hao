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

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['namespace'=>'TrangChu'], function() {
	Route::get('/user/login', 'LoginController@getLogin');
	Route::post('/user/login', 'LoginController@postLogin');

	Route::get('/user/logout', 'LoginController@getLogout');

	Route::get('/', 'HomeController@getIndex');

	Route::get('/contact', 'HomeController@getContact');
	Route::post('/contact', 'HomeController@postContact');
	Route::get('/intro', 'HomeController@getIntro');

	Route::get('/search', 'HomeController@getSearch');

	Route::get('/news', 'HomeController@getNews');
	Route::get('/news/{id}', 'HomeController@getNewsDetail');
	Route::get('/device', 'HomeController@getDevice');
	Route::get('/device/{id}', 'HomeController@getDeviceDetail');
	Route::get('/project', 'HomeController@getProject');
	Route::get('/project/{id}', 'HomeController@getProjectDetail');

	Route::group(['prefix'=>'student', 'middleware'=>['checkstudent']], function() {
		Route::get('/', 'StudentsController@getIndex');
		Route::get('/change', 'StudentsController@getChange');
		Route::post('/change', 'StudentsController@postChange');

		Route::group(['prefix'=>'info'], function() {
			Route::get('/', 'StudentsController@getInfo');
			Route::post('/', 'StudentsController@postInfo');
			Route::get('/update', 'StudentsController@getUpdateInfo');
			Route::post('/update', 'StudentsController@postUpdateInfo');
		});

		Route::group(['prefix'=>'posts'], function() {
			Route::get('/', 'StudentsController@listPosts');
			Route::get('/create', 'StudentsController@getCreatePosts');
			Route::post('/create', 'StudentsController@postCreatePosts');
			Route::get('/edit/{id}', 'StudentsController@getEditPosts');
			Route::post('/edit/{id}', 'StudentsController@postEditPosts');
			Route::get('/delete/{id}', 'StudentsController@getDeletePosts');
		});

		Route::group(['prefix'=>'devices'], function() {
			Route::get('/', 'StudentsController@listDevices');
			Route::get('/all', 'StudentsController@allDevices');
			Route::get('/{id}', 'StudentsController@getDevices');
			Route::post('/{id}', 'StudentsController@postDevices');
		});

		Route::group(['prefix'=>'calendars'], function() {
			Route::get('/', 'StudentsController@listCalendars');
			Route::get('/register', 'StudentsController@registerCalendars');
			Route::post('/register', 'StudentsController@registerPostCalendars');

			Route::get('/change_date/{date}', 'StudentsController@changeDate');
		});
	});

	Route::group(['prefix'=>'teacher', 'middleware'=>['checkteacher']], function() {
		Route::get('/', 'TeachersController@getIndex');

		Route::group(['prefix'=>'info'], function() {
			Route::get('/', 'TeachersController@getInfo');
			Route::post('/', 'TeachersController@postInfo');
			Route::get('/update', 'TeachersController@getUpdateInfo');
			Route::post('/update', 'TeachersController@postUpdateInfo');
		});

		Route::group(['prefix'=>'posts'], function() {
			Route::get('/', 'TeachersController@listPosts');
			Route::get('/create', 'TeachersController@getCreatePosts');
			Route::post('/create', 'TeachersController@postCreatePosts');
			Route::get('/edit/{id}', 'TeachersController@getEditPosts');
			Route::post('/edit/{id}', 'TeachersController@postEditPosts');
			Route::get('/delete/{id}', 'TeachersController@getDeletePosts');
		});

		Route::group(['prefix'=>'devices'], function() {
			Route::get('/', 'TeachersController@listDevices');
			Route::get('/all', 'TeachersController@allDevices');
			Route::get('/{id}', 'TeachersController@getDevices');
			Route::post('/{id}', 'TeachersController@postDevices');
			// Route::get('/{id}', 'TeachersController@getDevicesAdd');
		});

		Route::group(['prefix'=>'calendars'], function() {
			Route::get('/', 'TeachersController@listCalendars');
			Route::get('/register', 'TeachersController@registerCalendars');
			Route::post('/register', 'TeachersController@registerPostCalendars');
		});
	});
});


Route::group(['namespace'=>'Admin'], function() {
	Route::group(['prefix'=>'login', 'middleware'=>'checklogin'], function() {
		Route::get('/', "LoginController@getLogin");
		Route::post('/', "LoginController@postLogin");
	});

	Route::get('/logout', 'DashboardController@getLogout');

	Route::group(['prefix'=>'admin', 'middleware'=>['checklogout', 'checkadmin']], function() {
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

	    
	    Route::group(['prefix'=>'calendars'], function() {
	    	Route::get('/', 'CalendarController@getIndex');	
	    	Route::get('/list_teacher', 'CalendarController@getCalendarListTeacher');

	    	Route::get('/show/{id}', 'CalendarController@getShowCalendar');

	    	Route::get('/edit/{id}', 'CalendarController@getEditCalendar');
	    	Route::get('/delete/{id}', 'CalendarController@getDeleteCalendar');
	    });

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
	    	Route::get('/borrow/{id}', "DevicesController@getBorrowUpdate");
	    	Route::get('/return/{id}', "DevicesController@getReturnUpdate");
	    	Route::post('/return/{id}', "DevicesController@postReturnUpdate");
	    	Route::get('/borrow_del/{id}', "DevicesController@getBorrowDel");
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
