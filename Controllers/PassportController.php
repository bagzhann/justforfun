<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;

class PassportController extends Controller
{
    public function create(){
      return view('passports/create');
    }

    public function store(Request $request){
      $result = User::create([
          'name' => $_POST['name'],
          'email' => $_POST['email'],
          'password' => Hash::make($_POST['password']),
      ]);

      return redirect('passports')->with('success', 'Information has been added');
    }


    public function index (){
      $passports = User::all();
    
      return view('passports/index', compact('passports'));

    }
}
