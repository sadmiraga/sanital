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
Route::get('/admin', 'referenceController@referenceIndex');
Route::post('/addReference', 'referenceController@addReferenceExe');
Route::get('/index', 'HomeController@design');

Route::get('/facility-managment', 'HomeController@facilityManagment');

Route::get('/brandschutz', 'HomeController@brandSchutz');

Route::get('/belagsarbeiten', 'HomeController@belagsArbeiten');

Route::get('/uberuns', 'HomeController@uberUns');

Route::get('/jobs', 'HomeController@jobs');




Route::get('/deleteReference/{referenceID}', 'referenceController@deleteReference');
Route::get('/editReference/{referenceID}', 'referenceController@editReferenceIndex');
Route::post('/editReferenceExe', 'referenceController@editReferenceExe');
Route::get('/deleteReference/{referenceID}', 'referenceController@deleteReference');
Route::get('/editReference/{referenceID}', 'referenceController@editReferenceIndex');
Route::post('/editReferenceExe', 'referenceController@editReferenceExe');

//jobs routes
Route::get('/adminJobs', 'jobsController@jobsIndex');
Route::post('/editFacility', 'jobsController@editFacility');
Route::post('/editBrandschutz', 'jobsController@editBrandschutz');
Route::post('/editBelagsarbeiten', 'jobsController@editBelagsarbeiten');

//public routes
Route::get('/references', 'referenceController@referencePublicIndex');
Route::get('/kontakt', 'HomeController@kontakt');

//facility routs
Route::get('/facility-references', 'facilityController@references');

//brandschutz routes
Route::get('/brandschutz-references', 'brandschutzController@references');

//belagsarbeiten routes
Route::get('/belagsarbeiten-references', 'belagsarbeitenController@references');


//admin routes
Route::get('/admin-facility', 'facilityController@adminIndex');
Route::get('/admin-brandschutz', 'brandschutzController@adminIndex');
Route::get('/admin-belagsarbeiten', 'belagsarbeitenController@adminIndex');
