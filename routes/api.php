<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
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


Route::post('insert_sim','App\Http\Controllers\SimsController@createSim');
Route::post('update_sim/{id}','App\Http\Controllers\SimsController@updateSim');
Route::post('delete_sim','App\Http\Controllers\SimsController@deleteSim');
// Roles 
Route::post('create_roles','App\Http\Controllers\RolController@createRol');
Route::get('get_Rols','App\Http\Controllers\RolController@getRols');
// Permisos
Route::post('create_permiso','App\Http\Controllers\PermisoController@create');
Route::get('get_Permisos','App\Http\Controllers\PermisoController@getPermisos');
// Permisos y Roles
Route::post('create_permiso_rol','App\Http\Controllers\GsApiRolePermissionsController@create');
Route::get('get_Permisos_rol','App\Http\Controllers\GsApiRolePermissionsController@getRolePermissions');
// permisos en rol
Route::get('get_Permisos_rol','App\Http\Controllers\RolController@getRols');
// Users
Route::post('/register', [App\Http\Controllers\API\AuthController::class, 'register']);
Route::post('/login', [App\Http\Controllers\API\AuthController::class, 'login']);
Route::get('get_users','App\Http\Controllers\UserController@show');
// User and Rols
Route::post('create_user_rol','App\Http\Controllers\GsApiUserRolesController@create');
Route::get('get_user_rol','App\Http\Controllers\GsApiUserRolesController@getRoleUser');
// Test users and permisos
Route::get('get_user_permisos','App\Http\Controllers\UserController@getuserpermisos');

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


//Protecting Routes
Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('/profile', function(Request $request) {
        return auth()->user();
    });
    Route::get('get_sims','App\Http\Controllers\SimsController@getSims');
    Route::post('/logout', [App\Http\Controllers\API\AuthController::class, 'logout']);
});

