<?php


Route::get('/', function () {
  return view('welcome');
});

Route::get('/books','BookController@index')->name('books.index');
Route::get('/books/create','BookController@create')->name('books.create');
Route::post('/books','BookController@store')->name('books.store');
Route::get('/books/{title}','BookController@show')->name('books.show');
Route::get('/books/{title}/edit','BookController@edit')->name('books.edit');
Route::put('/books/{title}','BookController@update')->name('books.update');
Route::delete('/books/{title}','BookController@destroy')->name('books.destroy');


Route::get('/example', 'BookController@example');

Route::get('/debugbar',function(){
  $data=Array('foo'=>'bar');
  Debugbar::info($data);
  Debugbar::info('Current environment: '.App::environment());
  Debugbar::error('Error!');
  Debugbar::warning('Watch out...!');
  Debugbar::addMessage('Another message','myLabel');

  return 'Just demoing some of the features of Debugbar';
});

Route::get('/random',function(){
  $random=new Rych\Random\Random();
  return $random->getRandomString(8);
});

Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');