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

Route::get('/debug', function() {

  echo '<pre>';

  echo '<h1>Environment</h1>';
  echo App::environment().'</h1>';

  echo '<h1>Debugging?</h1>';
  if(config('app.debug')) echo "Yes"; else echo "No";

  echo '<h1>Database Config</h1>';
  /*
  The following line will output your MySQL credentials.
  Uncomment it only if you're having a hard time connecting to the database and you
  need to confirm your credentials.
  When you're done debugging, comment it back out so you don't accidentally leave it
  running on your live server, making your credentials public.
  */
  //print_r(config('database.connections.mysql'));

  echo '<h1>Test Database Connection</h1>';
  try {
    $results = DB::select('SHOW DATABASES;');
    echo '<strong style="background-color:green; padding:5px;">Connection confirmed</strong>';
    echo "<br><br>Your Databases:<br><br>";
    print_r($results);
  }
  catch (Exception $e) {
    echo '<strong style="background-color:crimson; padding:5px;">Caught exception: ', $e->getMessage(), "</strong>\n";
  }

  echo '</pre>';

});
