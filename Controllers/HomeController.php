<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
    public function getData(){
        $data['data'] = DB::select('select * from questions');
        if(count($data)>0){
        return view('Surveys',$data);
        }
        else{
            return view('Surveys');
        }
    }
}
