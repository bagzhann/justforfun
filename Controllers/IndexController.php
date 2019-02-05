<?php

namespace App\Http\Controllers;
use App\answer;
use App\nps;

class IndexController extends Controller
{
    public function index()
    {
        $one_one = nps::all()->where('product_id',1)->where('stage_id',1)->where('created_at', '<=', now())->pluck('nps')->toJson();
        $one_three = nps::all()->where('product_id',1)->where('stage_id',3)->where('created_at', '<=', now())->pluck('nps')->toJson();
        $one_five = nps::all()->where('product_id',1)->where('stage_id',5)->where('created_at', '<=', now())->pluck('nps')->toJson();
        $two_one = nps::all()->where('product_id',2)->where('stage_id',1)->where('created_at', '<=', now())->pluck('nps')->toJson();
        $two_two = nps::all()->where('product_id',2)->where('stage_id',2)->where('created_at', '<=', now())->pluck('nps')->toJson();
        $two_three = nps::all()->where('product_id',2)->where('stage_id',3)->where('created_at', '<=', now())->pluck('nps')->toJson();
        $two_five = nps::all()->where('product_id',2)->where('stage_id',5)->where('created_at', '<=', now())->pluck('nps')->toJson();
        $three_one = nps::all()->where('product_id',3)->where('stage_id',1)->where('created_at', '<=', now())->pluck('nps')->toJson();
        $three_two = nps::all()->where('product_id',3)->where('stage_id',2)->where('created_at', '<=', now())->pluck('nps')->toJson();
        $three_five = nps::all()->where('product_id',3)->where('stage_id',5)->where('created_at', '<=', now())->pluck('nps')->toJson();
        $four_four = nps::all()->where('product_id',4)->where('stage_id',4)->where('created_at', '<=', now())->pluck('nps')->toJson();
        $five_one = nps::all()->where('product_id',5)->where('stage_id',1)->where('created_at', '<=', now())->pluck('nps')->toJson();
        $five_five = nps::all()->where('product_id',5)->where('stage_id',5)->where('created_at', '<=', now())->pluck('nps')->toJson();
        $six_one = nps::all()->where('product_id',6)->where('stage_id',1)->where('created_at', '<=', now())->pluck('nps')->toJson();
        $six_five = nps::all()->where('product_id',6)->where('stage_id',5)->where('created_at', '<=', now())->pluck('nps')->toJson();
        $seven_five = nps::all()->where('product_id',7)->where('stage_id',5)->where('created_at', '<=', now())->pluck('nps')->toJson();

        return view('index',['one_one'=>$one_one,'one_three'=>$one_three,'one_five'=>$one_five,'two_one'=>$two_one,'two_two'=>$two_two,
        'two_three'=>$two_three,'two_five'=>$two_five,'three_one'=>$three_one,'three_two'=>$three_two,'three_five'=>$three_five,'four_four'=>$four_four,
        'five_one'=>$five_one,'five_five'=>$five_five,'six_one'=>$six_one,'six_five'=>$six_five,'seven_five'=>$seven_five]);
    }

    public function filterQuestion(){
      return view('filterQuestion');
    }

    public function check(){
      $question = request('question');
      if($question==0){
        return view('index');
      }
      else{
        return view('filterQuestion');
      }
    }
}
