<?php

use Illuminate\Http\Request;
use App\Recipes;

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


    Route::get('recipes','RecipesController@index');
    Route::get('recipes/{recipes}','RecipesController@show');
    Route::post('recipes','RecipesController@store');
    Route::put('recipes/{recipes}','RecipesController@update');
    Route::delete('recipes/{recipes}','RecipesController@delete');
    Route::post('register','Auth\RegisterController@register');
    Route::post('login','Auth\LoginController@login');
    Route::post('logout','Auth\LoginController@logout');






Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
