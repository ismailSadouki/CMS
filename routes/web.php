<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'App\Http\Controllers\PostController@index');

Route::resource('post', 'App\Http\Controllers\PostController')->except(['index'])->middleware('verified');


Route::get('{id}/{slug}','App\Http\Controllers\PostController@getByCategory')->name('category')->where('id','[0-9]+');

Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/search','App\Http\Controllers\PostController@search')->name('search');

Route::post('/updateApproved','App\Http\Controllers\admin\PostController@updateApproved')->name('updateApproved');

Route::resource('comment','App\Http\Controllers\CommentController');

Route::get('user/{id}','App\Http\Controllers\ProfileController@getByUser')->name('profile');

Route::get('user/{id}/comments','App\Http\Controllers\ProfileController@getCommentsByUser');

Route::get('settings','App\Http\Controllers\ProfileController@settings')->name('settings');

Route::post('settings','App\Http\Controllers\ProfileController@UpdateProfile')->name('settings');



Route::get('dashboard', ['as' => 'dashboard','uses' => 'App\Http\Controllers\admin\DashboardController@index'])->middleware('Admin');

Route::group(['prefix' => 'admin','middleware' => 'Admin'],function(){
    Route::resource('posts','App\Http\Controllers\admin\PostController');
    Route::get('permissions','App\Http\Controllers\admin\PermissionController@index')->name('permissions');
    Route::post('permissions','App\Http\Controllers\admin\RoleController@store')->name('permissions');
    Route::resource('users', 'App\Http\Controllers\admin\UserController');
});

Route::post('permission/byRole', ['as'=>'permission_byRole','uses'=>'App\Http\Controllers\admin\RoleController@getByRole'])->middleware('Admin');;
Route::resource('page', 'App\Http\Controllers\admin\PageController');
