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

Route::get('sitemap.xml', 'SiteController@sitemap')->name('sitemap.xml');

$routes = function() {
//Route::group(['middleware' => ['visitors']], function () {
    Route::get('/', 'SiteController@index')->name('home'); //* DONE */
    Route::get('/about', 'SiteController@about')->name('about');
    Route::get('/contacts', 'SiteController@contacts')->name('contacts');
    Route::get('/search', 'SiteController@search')->name('search');

    Route::get('/blog', 'BlogController@list')->name('blog');
    Route::get('/blog/{alias}', 'BlogController@inner')->name('blog.inner');
    Route::get('/blog/category/{category}', 'BlogController@category')->name('blog.category');
    Route::get('/blog/tag/{tag}', 'BlogController@tag')->name('blog.tag');
//});
};

Route::domain('{localization}.' . config('app.original_domain'))->middleware('localization')->group($routes);
Route::domain(config('app.original_domain'))->middleware('localization')->group($routes);

Route::prefix('admin')->group(function () {
    Route::get('/{uri?}', function () {
        return view('react');
    })->where('uri', '(.*)');
});

//$list = Route::getRoutes();
//
//foreach ($list as $value) {
//    echo $value->uri() . '<br>';
//}
//die;
