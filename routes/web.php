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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


Route::get('/home', 'HomeController@index')->name("home");

Route::get('/index', 'HomeController@design');


//reference routes
Route::get('/adminReferences', 'referenceController@referenceIndex');
Route::post('/addReference', 'referenceController@addReferenceExe');
Route::get('/index', 'HomeController@design');

Route::get('/deleteReference/{referenceID}', 'referenceController@deleteReference');
Route::get('/editReference/{referenceID}', 'referenceController@editReferenceIndex');
Route::post('/editReferenceExe', 'referenceController@editReferenceExe');
