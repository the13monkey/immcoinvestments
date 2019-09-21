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

Route::get('/', 'PageController@index');
Route::get('/about-us', 'PageController@about');
Route::get('/our-business', 'PageController@business');
Route::get('/our-partners', 'PageController@partners');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/*
Route::resource('project', 'ProjectController');

Route::resource('biz', 'BizController');

Route::resource('leader', 'LeaderController');

Route::resource('partner', 'PartnerController'); */

Route::resources([
    'project' => 'ProjectController',
    'biz' => 'BizController',
    'leader' => 'LeaderController',
    'partner' => 'PartnerController',
]);



