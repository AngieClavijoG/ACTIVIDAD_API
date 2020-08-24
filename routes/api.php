<?php

use App\Employee;
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

Route::middleware('auth:api')->get('/employees', function (Request $request) {
    return $request->employees();
});

Route::resource('employee', 'EmployeesController',['only'=>['show', 'index']]);
Route::resource('profile', 'ProfilesController',['only'=>['show', 'index']]);
Route::resource('work-experience', 'WExperiencesController',['only'=>['show', 'index']]);

