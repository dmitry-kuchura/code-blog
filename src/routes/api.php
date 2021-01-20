<?php

use Illuminate\Http\Request;

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

// React Dashboard
Route::prefix('v1')->group(function () {
    Route::group(['middleware' => 'guest:api'], function () {
        Route::namespace('Api\Auth')->group(function () {
            Route::post('login', 'LoginController')->name('login');
            Route::post('register', 'RegisterController')->name('register');

            Route::post('password/email', 'ForgotPasswordController@sendResetLinkEmail');
            Route::post('password/reset', 'ResetPasswordController@reset');
        });
    });

    Route::middleware('auth:api')->group(function () {
        Route::namespace('Api\Auth')->group(function () {
            Route::get('profile', 'ProfileController@profile')->name('profile');
            Route::post('logout', 'LogoutController@logout')->name('logout');
        });

        Route::prefix('blog')->group(function () {
            Route::namespace('Api')->group(function () {
                Route::get('/', 'BlogController@list')->name('blog.list');
                Route::put('/{id}', 'BlogController@update')->name('blog.update');
                Route::get('/{id}', 'BlogController@inner')->name('blog.inner');
                Route::get('/tag/{tag}', 'BlogController@tag')->name('blog.tag');
                Route::get('/category/{category}', 'BlogController@category')->name('blog.category');
            });
        });

        Route::prefix('categories')->group(function () {
            Route::namespace('Api')->group(function () {
                Route::get('/', 'CategoryController@list')->name('category.list');
                Route::get('/short', 'CategoryController@short')->name('category.short');
                Route::put('/{id}', 'CategoryController@update')->name('category.update');
                Route::get('/{id}', 'CategoryController@inner')->name('category.inner');
            });
        });
    });
});
