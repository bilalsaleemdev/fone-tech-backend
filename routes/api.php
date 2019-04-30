<?php

use Illuminate\Http\Request;
use App\User;

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


Route::post('login', 'UserController@authenticate');
Route::get('open', 'DataController@open');

Route::group(['middleware' => ['jwt.verify']], function() {
    Route::get('user', 'UserController@getAuthenticatedUser');
    Route::get('closed', 'DataController@closed');
});

Route::group(['middleware' => ['jwt.verify','superuser']], function() {
    Route::get('getalluser', 'SuperAdminController@myUsers');
    Route::post('register', 'UserController@register');

Route::get('shops','SuperAdminController@all_shops');
// Route::get('shops','SuperAdminController@all_shops');


});
