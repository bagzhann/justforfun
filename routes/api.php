<?php

use Illuminate\Http\Request;
use App\Users;

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



Route::get('users', 'UsersController@index');
Route::get('users/{id}', 'UsersController@show');
Route::post('users', 'UsersController@store');
Route::put('users/{id}', 'UsersController@update');
Route::delete('users/{id}', 'UsersController@delete');

Route::get('names', function()
{
    return array(
      1 => "John",
      2 => "Mary",
      3 => "Steven"
    );
});



Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();

});
?>
