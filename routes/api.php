<?php

use App\Models\EmailContact;
use GuzzleHttp\Middleware;
use Illuminate\Http\Request;
use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::group(['prefix' => 'v1', 'middleware' => ['cors']], function () {

    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::post('register', 'AuthController@register');
    Route::get('email-contact', 'EmailContactController@getActiveMail');
    Route::get('sede', 'SedeController@index');
    Route::middleware(['auth:api'])->group(function () {

        Route::post('admin/import', 'UserController@store');
        Route::post('users/search', 'UserController@search');
    });
});
