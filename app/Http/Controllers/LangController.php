<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class LangController extends Controller
{
 	
    public function index($locale){

      \Session::put('locale', $locale);
      App::setLocale($locale);
    return redirect()->back();
}
}