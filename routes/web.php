<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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



Route::get('/', 'HomeController@design');

Auth::routes();


Route::get('/home', 'HomeController@index')->name("home");




//reference routes
Route::get('/admin', function () {
    return redirect('/admin-facility');
});


Route::post('/addReference', 'referenceController@addReferenceExe')->middleware(['auth', 'auth.admin']);


Route::get('/facility-managment', 'HomeController@facilityManagment');

Route::get('/brandschutz-wasserloschanlagen', 'HomeController@brandSchutz');

Route::get('/belagsarbeiten-und-bodenbelage', 'HomeController@belagsArbeiten');

Route::get('/uberuns', 'HomeController@uberUns');

Route::get('/jobs', 'HomeController@jobs');



// ADMIN ROUTES
Route::get('/deleteReference/{referenceID}', 'referenceController@deleteReference')->middleware(['auth', 'auth.admin']);
Route::get('/editReference/{referenceID}', 'referenceController@editReferenceIndex')->middleware(['auth', 'auth.admin']);
Route::post('/editReferenceExe', 'referenceController@editReferenceExe')->middleware(['auth', 'auth.admin']);
Route::get('/deleteReference/{referenceID}', 'referenceController@deleteReference')->middleware(['auth', 'auth.admin']);
Route::get('/editReference/{referenceID}', 'referenceController@editReferenceIndex')->middleware(['auth', 'auth.admin']);
Route::post('/editReferenceExe', 'referenceController@editReferenceExe')->middleware(['auth', 'auth.admin']);

//jobs routes
Route::get('/adminJobs', 'jobsController@jobsIndex')->middleware(['auth', 'auth.admin']);
Route::post('/editFacility', 'jobsController@editFacility')->middleware(['auth', 'auth.admin']);
Route::post('/editBrandschutz', 'jobsController@editBrandschutz')->middleware(['auth', 'auth.admin']);
Route::post('/editBelagsarbeiten', 'jobsController@editBelagsarbeiten')->middleware(['auth', 'auth.admin']);

//public routes
Route::get('/references', 'referenceController@referencePublicIndex');
Route::get('/kontakt', 'HomeController@kontakt');

//facility routes
Route::get('/facility-references', 'facilityController@references');
Route::get('/facility-job', 'facilityController@job');
Route::post('/addFacilityReference', 'facilityController@addReference');
Route::get('/facility-managment-uberuns', function () {
    return view('userExpirience.facility.uberunsFacility');
});
Route::get('/liegenschaftsbetreuung', 'facilityController@liegenschaftsbetreuung');


//brandschutz routes
Route::get('/brandschutz-references', 'brandschutzController@references');
Route::get('/brandschutz-job', 'brandschutzController@job');

//belagsarbeiten routes
Route::get('/belagsarbeiten-references', 'belagsarbeitenController@references');
Route::get('/belagsarbeiten-job', 'belagsarbeitenController@job');


//admin routes
Route::get('/admin-facility', 'facilityController@adminIndex')->middleware(['auth', 'auth.admin']);
Route::get('/admin-brandschutz', 'brandschutzController@adminIndex')->middleware(['auth', 'auth.admin']);
Route::get('/admin-belagsarbeiten', 'belagsarbeitenController@adminIndex')->middleware(['auth', 'auth.admin']);
