<?php
/**
 * Created by PhpStorm.
 * User: haispdn
 * Date: 10/5/16
 * Time: 10:39 PM
 */

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Jenssegers\Date\Date;

class BookController extends Controller
{
  public function index(){
  return 'Display all the books';
}
  public function example(){
    return \App::environment();
  }
  public function show($title){
    return view('book.show')->with('title',$title);
  }

  public function create(){
    Date::setLocale('vi');
    $current_date= Date::now()->format('l j F Y H:i:s');
    return view('book.create')->with('current_date',$current_date);
  }

  public function edit($title){
    return view('book.edit')->with('title',$title);
  }
}