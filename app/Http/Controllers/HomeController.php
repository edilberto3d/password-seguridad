<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //creamos la funcion
    public function __invoke()
    {
      return view('home');
    }
}
