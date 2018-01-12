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

Route::get('home',function(){
   return Recipes::all();
});

Route::get('home/{id}',function($id){
    return Recipes::find($id);
});

Route::post('home', function(Request $request) {
    return Recipes::create($request->all);
});

Route::put('home/{id}', function(Request $request, $id) {
    $recipes = Recipes::findOrFail($id);
    $recipes->update($request->all());

    return $recipes;
});

Route::delete('home/{id}', function($id) {
    Recipes::find($id)->delete();

    return 204;
});


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
