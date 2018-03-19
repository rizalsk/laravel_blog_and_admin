<?php

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
/*
Route::get('/', function () {
    return view('welcome');
});
*/
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


Route::get('theme', function(){
    return view('theme::about');
});
Route::get('/', 'BlogController@index');
Route::get('contact' , function(){
    return view('theme::contact');
});



Route::get('post/{slug}', 'BlogController@show');


Route::get('{slug}','pagesController@show');

Route::post('contact', function(Request $request){
    dd($request);
});




