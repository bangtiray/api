<?php

/**
 * Frontend Controllers
 * All route names are prefixed with 'frontend.'.
 */
Route::get('/', 'FrontendController@index')->name('index');
Route::post('/get/states', 'FrontendController@getStates')->name('get.states');
Route::post('/get/cities', 'FrontendController@getCities')->name('get.cities');

/*
 * These frontend controllers require the user to be logged in
 * All route names are prefixed with 'frontend.'
 */
Route::group(['middleware' => 'auth'], function () {
    Route::group(['namespace' => 'User', 'as' => 'user.'], function () {
        /*
         * User Dashboard Specific
         */
        Route::get('dashboard', 'DashboardController@index')->name('dashboard');

        /*
         * User Account Specific
         */
        Route::get('account', 'AccountController@index')->name('account');

        /*
         * User Profile Specific
         */
        Route::patch('profile/update', 'ProfileController@update')->name('profile.update');

        /*
         * User Profile Picture
         */
        Route::patch('profile-picture/update', 'ProfileController@updateProfilePicture')->name('profile-picture.update');
    });
});

/*
* Show pages
*/
Route::get('pages/{slug}', 'FrontendController@showPage')->name('pages.show');
/*
* blogs details
*/
Route::get('read/info/{slug}', 'FrontendController@showBlog')->name('blogs.show');

Route::get('read/salvage/info/detail/{slug}', 'FrontendController@showSalvage')->name('salvages.show');

Route::get('show/news/all/name/{name}','FrontendController@showSubNews')->name('news.show');
Route::get('show/news/all','FrontendController@showAllNews')->name('news.show');
Route::get('show/faq-asuransi-jastan','FrontendController@frequency');
Route::get('page/carrier','FrontendController@carrier');
Route::get('page/services','FrontendController@services');
Route::get('page/management','FrontendController@structure');
Route::get('page/appraisement','FrontendController@appraisement')->name('appraisement');
Route::get('page/gallery','FrontendController@gallery');
Route::get('page/annual-report','FrontendController@annualreport');
Route::get('/search','FrontendController@Pencarian');
Route::get('tags/selection/{name}','FrontendController@Tag');
Route::get('page/announcement','FrontendController@pengumuman');
Route::get('page/products/standard','FrontendController@StandardProduct')->name('product.standard');
Route::get('page/products/development','FrontendController@PengembanganProduct')->name('product.development');
Route::post('/posting', 'FrontendController@postRequest');
/*
* change language
*/
Route::post('/selectkabupaten', 'FrontendController@fetchkab');
Route::post('/selectkecamatan', 'FrontendController@fetchkec');
Route::post('/selectkelurahan', 'FrontendController@fetchkel');
Route::post('/language-chooser', 'FrontendController@ChangeLanguage');
Route::post('language/', array(
    'before'    =>'csrf',
    'as'        => 'language-chooser',
    'uses'      => 'FrontendController@ChangeLanguage',
));
