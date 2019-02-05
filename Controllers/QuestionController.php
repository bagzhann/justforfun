<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;
use App\question;
use App\periodic_table;
use App\answer;


class QuestionController extends Controller
{

    public function index($product_id,$stage_id,$amountQ,$question_order){
      return view('AddQuestion',['amountQ' => $amountQ,'question_order' => $question_order, 'stage_id' => $stage_id, 'product_id' =>$product_id]);
      // return view('question');
    }

    public function StoreDetails(Request $request){
      $amountQ = $request->post('amount');
      $product = $request->post('product');
      $stage = $request->post('stage');
      $question_order = 1;
      $surveyDetails = ['amountQ' => $amountQ,'question_order' => $question_order, 'stage' => $stage, 'product' =>$product];

      return redirect('AddQuestion/'.$product.'/'.$stage.'/'.$amountQ.'/'.$question_order)->with($surveyDetails);

    }

    public function StoreQuestion($product_id,$stage_id,$amountQ,$question_order){
      $question_title = request('question_title');
      $answer_amount = request('answer_amount');

      $question_save = new question;
      $question_save->title = $question_title;
      $question_save->question_order = $question_order;
      $question_save->company_id = 1;
      if($answer_amount>1){
        $answer_type = request('answer_type');
        $question_save->answer_type = $answer_type;
      }
      $question_save->has_additional_comment = false;
      // redirect()->route('home');
      $question_save->save();



      // dd('hello');
      return $this->StoreIntoPeriodicTable($product_id,$stage_id,$amountQ,$question_order,$answer_amount);
    }

    public function StoreIntoPeriodicTable($product_id,$stage_id,$amountQ,$question_order,$answer_amount){
      $question_id = question::orderBy('created_at', 'desc')->first()->id;

      $periodic_table_save = new periodic_table;
      $periodic_table_save->question_id = $question_id;
      $periodic_table_save->product_id = $product_id;
      $periodic_table_save->stage_id = $stage_id;

      $periodic_table_save->save();
      if($answer_amount !=1){

      return  redirect()->route('AddAnswers',['amountQ' => $amountQ,'question_order' => $question_order,
       'stage_id' => $stage_id, 'product_id' =>$product_id,'question_id'=>$question_id,
       'answer_amount'=>$answer_amount]);}
       else{
         return  redirect()->route('AddJustComment',['amountQ' => $amountQ,'question_order' => $question_order,
          'stage_id' => $stage_id, 'product_id' =>$product_id,'question_id'=>$question_id]);
       }

    }


    public function edit($id){
      $question = question::find($id);
      $answers = $question->getAnswers;

      $answer_count = count($answers);
      return view('editQuestion',['question'=>$question,'answers'=>$answers,'answer_count'=>$answer_count]);
    }
    public function storeEdit($id,$answer_count){

      $question =question::find($id);
      $question->title = request('question_title');
      for($i = 1;$i < $answer_count;$i++){
        $answer_title = request('answer_order'.$i);
        $answer = answer::where('question_id',$id)->where('answer_order',$i)->first();
        $answer->title = $answer_title;
        $answer->save();
      }

      $question->save();
      return redirect('questions')->with('message','Вопрос был удачно изменён');
    }
    public function delete($id){
      $question = question::find($id);
      $question->delete();
      return redirect('questions')->with('message','Вопрос был удачно удалён');
    }
		public function viewAllQuestions(){
			$questions = question::orderBy('question_order','asc')->get();
			return view('questions',compact('questions'));
		}

    public function questionMore($question_id){
      return view('questionMore');
    }






}
