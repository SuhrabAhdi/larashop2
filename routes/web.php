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

Route::get('/', function () {
    return view('welcome');
})->name('home');

// Route::get('/admin/{name?}', function($name=null){
// return $name==null?'List all product categories':"List $name category";
// })->name('hello');
// Route::view('hello','hello');

Route::get('/client',function(){
return redirect(route('home'));
})->middleware('after','before');

Route::get('admin/{id}',function($id){
    return 'your id is '.$id;
})->where('id','[a-zA-Z]+');