<?php

use Illuminate\Http\Request;
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

Route::get('test', function () {
    return response()->json(['status' => 'ok METHOD GET', 'data' => '']);
});

Route::post('test', function (Request $request) {
    $title = $request->input('title');
    return response()->json(['status' => 'ok METHOD POST', 'data' => $title]);
});

Route::put('test', function (Request $request) {
    $title = $request->input('title');
    return response()->json(['status' => 'ok METHOD PUT', 'data' => $title]);
});

Route::delete('test', function (Request $request) {
    $title = $request->input('title');
    return response()->json(['status' => 'ok METHOD DELETE', 'data' => $title]);
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
