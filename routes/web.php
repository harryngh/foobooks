<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

//Route::get('/', function () {
//  return view('welcome');
//});
//
//Route::get('/books',function(){
//  return 'Here are all the books';
//});
//
//Route::get('/books/create',function(){
//  $view='<form method="POST" action="/books/create"';
//  $view.='<label>Title: <input type="text" name="title"></label>';
//  $view.=csrf_field();
//  $view.='<input type="submit">';
//  $view.='</form>';
//  return $view;
//});
//
//Route::post('/books/create',function(){
//  dd(Request::all());
//});
//
//Route::get('books/show/{title?}',function($title=''){
//  if($title=='')
//    return 'Your request did not include a title';
//  return 'Results for the book: '. $title;
//})->name('books.show');

Route::get('/', function () {
  return view('welcome');
});

Route::get('/books','BookController@index')->name('books.index');

Route::get('/books/create',function(){

})->name('books.create');

Route::post('/books',function(){

})->name('books.store');

Route::get('/books/{book}',function(){

})->name('books.show');

Route::get('/books/{book}/edit',function(){

})->name('books.edit');

Route::put('/books/{book}',function(){

})->name('books.update');

Route::delete('/books/{book}',function(){

})->name('books.destroy');

Route::get('/example', 'BookController@example');