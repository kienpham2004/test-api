<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ApiController;
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

Route::get('/', function () {
    return view('welcome');
});


Route::get('getAllStudent', 'Api\ApiController@getAllStudents');
Route::get('getStudent/{id}', 'Api\ApiController@getStudent');
Route::get('getpost', 'PostController@getpost');
Route::get('addPost', 'PostController@addPost');