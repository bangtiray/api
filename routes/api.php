<?php


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::group(['namespace' => 'Api\V2', 'prefix' => 'v2', 'as' => 'v2.'], function () {
    Route::group(['prefix' => 'guest'], function () {
        Route::get('news', 'NewsController@getNews');
        Route::get('data/{kode}', 'NewsController@getData');
        Route::get('products/info/{slug}', 'NewsController@showProducts');
        Route::get('updatestatus/{order_id}/{type}/{status}/{setlementdatetime}', 'SppaController@updateStatus');
        Route::get('cetak', 'SppaController@print');
        Route::post('notif', 'SnapController@notification');
        
    });
    Route::group(['middleware' => ['jwt.auth']], function () {
        Route::group(['prefix' => 'guest'], function () {
            Route::post('savestatus', 'SppaController@saveStatus');
            Route::get('temp', 'SppaController@cashplanTempData');
            Route::get('sumtemp', 'SppaController@cashplanTempDataSummary');
            Route::get('temp/id/{id}', 'SppaController@cashplanTempDataByID');
            Route::post('cashplantemp', 'SppaController@saveCashPlanTemp');
            Route::post('deltempid', 'SppaController@deleteCashPlanTempId');
            Route::post('cashplan', 'SppaController@cashplanMaster');
            Route::post('cashplan_details', 'SppaController@cashplanDetail');
        });
    });
});
Route::group(['namespace' => 'Api\V1', 'prefix' => 'v1', 'as' => 'v1.'], function () {
    Route::group(['prefix' => 'auth'], function () {
        Route::post('register', 'RegisterController@register');
        Route::post('login', 'AuthController@login');
    
    });
    Route::group(['middleware' => ['jwt.auth']], function () {
        Route::group(['prefix' => 'auth'], function () {
            Route::post('logout', 'AuthController@logout');
            Route::post('refresh', 'AuthController@refresh');
            Route::post('users', 'AuthController@getUsers');
            // Password Reset Routes
            Route::post('password/email', 'ForgotPasswordController@sendResetLinkEmail');
            // Route::post('password/reset', 'ResetPasswordController@reset')->name('password.reset');
        });
        // Users
        Route::resource('users', 'UsersController', ['except' => ['create', 'edit']]);
        Route::post('users/delete-all', 'UsersController@deleteAll');
        //@todo need to change the route name and related changes
        Route::get('deactivated-users', 'DeactivatedUsersController@index');
        Route::get('deleted-users', 'DeletedUsersController@index');

        // Roles
        Route::resource('roles', 'RolesController', ['except' => ['create', 'edit']]);
        Route::post('roles/delete-all', 'RolesController@deleteAll');

        // Permission
        Route::resource('permissions', 'PermissionController', ['except' => ['create', 'edit']]);

        // Page
        Route::resource('pages', 'PagesController', ['except' => ['create', 'edit']]);

        // Faqs
        Route::resource('faqs', 'FaqsController', ['except' => ['create', 'edit']]);

        // Blog Categories
        Route::resource('blog_categories', 'BlogCategoriesController', ['except' => ['create', 'edit']]);

        // Blog Tags
        Route::resource('blog_tags', 'BlogTagsController', ['except' => ['create', 'edit']]);

        // Blogs
        Route::resource('blogs', 'BlogsController', ['except' => ['create', 'edit']]);
    });
});
