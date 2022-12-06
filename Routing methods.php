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


Route::get('/{name?}', function ($name = null) {
    $data =compact('name');
    return view('home')-> with($data);

});


/*

Route::get('/', function () {
    return view('welcome');
});

Route::get('/demo', function () {
   return view('demo');         // return the view as result of blade
});

Route::get('/demo/{name}/{id?}', function ($name, $id = null) {   // get method for route pass data in the url
  $data = compact('name', 'id'); // used to declare and store data
   print_r($data);        // used to print data

  return view('demo')->with($data); // used for show data with page result

     echo $name ." ";
   echo $id;
});


Route::any('/Test', function () {
    echo "Testing the Route....";
});

Route::put('users/{id}', function ($id) {

});

Route::patch ();

Route::delete('users/{id}', function ($id) {

});
*/

