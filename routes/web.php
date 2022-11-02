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
Route::get('/name/{name}', function ($name) {
    return "Hello " . $name;
})->where('name', '[A-Za-z]+');

Route::get('/data/{data?}', function ($data = "Kosong"){
    return "Isi Parameter = " . $data;
});

Route::get('/data/{nrp}/{nama}', function ($nrp, $nama) {
    return "Hello " . $nama . "</br>"  . " NRP : " . $nrp;
})->where('nrp', '[0-9]+') ->where('nama', '[A-Za-z]+');

Route::get('/person', 'PersonController@index')->name('person.index');
Route::get('/person/send-data', 'PersonController@sendData');
Route::get('/person/mycourse/{course}/{task}/{quiz}/{mid_ter}/{final}', 'PersonController@myCourse');
Route::get('/person/data', 'PersonController@data');

Route::get('/person/show/{param}', 'PersonController@show');

Route::resource('/student', 'StudentController');

Route::get('/homepage', function () {
    return view('home' , ["name" => "Ripky Rizkia F"]);
});
