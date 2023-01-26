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

Route::get('test-sqlInjection', [\App\Http\Controllers\VulnController::class, 'sqlInjection']);
Route::get('test-traversal', [\App\Http\Controllers\VulnController::class, 'traversal']);
Route::get('test-openRedirection', [\App\Http\Controllers\VulnController::class, 'openRedirection']);
Route::get('test-commandInjection', [\App\Http\Controllers\VulnController::class, 'commandInjection']);

Route::get('/', function () {
    return view('welcome');
});
