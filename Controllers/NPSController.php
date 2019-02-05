<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NPSController extends Controller

{
  public function index($product_id, $stage_id){
    return view('NPS');
  }
    //
}
