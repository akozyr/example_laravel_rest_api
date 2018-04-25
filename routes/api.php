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

Route::get('/', function () {
    echo 'hello world from api';
});

Route::namespace('API')->group(function () {
    Route::post('pdfs/store', 'PdfController@storeAllTypes');
    Route::apiResource('pdfs', 'PdfController', ['except' => ['store']]);
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});