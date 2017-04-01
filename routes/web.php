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

Route::get('logout', 'Auth\LoginController@logout');

Auth::routes();

Route::get('/', 'PagesController@home');

Route::post('issues/{id}/comments', 'IssuesController@storeComment');
Route::resource('issues', 'IssuesController');

Route::get('test', function() {
    $issue = App\Issue::where('id', 31)->first();
    dd($issue->comments);
});