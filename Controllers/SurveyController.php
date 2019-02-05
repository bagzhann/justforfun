<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;


class SurveyController extends Controller
{
	public function store(Request $request){
            return view('question',['amount'=>$amount, 'product_id'=>$product, 'stage'=>$stage]);

    }
    public function index(){
        return view('create');
    }
		





}
