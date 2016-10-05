<?php
/**
 * Created by PhpStorm.
 * User: haispdn
 * Date: 10/5/16
 * Time: 10:39 PM
 */

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class BookController extends Controller
{
  public function index(){
    return 'Display all the books';
  }
  public function example(){
    return \App::environment();
  }
}