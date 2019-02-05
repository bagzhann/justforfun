<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\answer;
use App\commentary_hint;
use App\question;
class AnswerController extends Controller
{
    public function index($product_id,$stage_id,$amountQ,$question_order,$question_id,$answer_amount){
      return view('AddAnswers',['amountQ' => $amountQ,'question_order' => $question_order, 'stage_id' => $stage_id, 'product_id' =>$product_id, 'question_id' => $question_id, 'answer_amount'=>$answer_amount]);


    }
    public function StoreAnswers($product_id,$stage_id,$amountQ,$question_order,$question_id,$answer_amount){
      $has_comment = false;
      if(request('has_comment') ==="true"){
        $has_comment = true;
        $hint = request('CommentaryHint');
        $commentary_hint = new commentary_hint();
        $commentary_hint->title = $hint;
        $commentary_hint->question_id = $question_id;
        $commentary_hint->save();
        $question = question::find($question_id);
        $question->has_additional_comment = true;
        $question->save();
      }

      for ($i = 1; $i <= $answer_amount;$i++){

        $this->StoreFOR($product_id,$stage_id,$amountQ,$question_order,$question_id,$answer_amount,$i);
      }
      $question_order++;
      if($amountQ < $question_order){
        return redirect()->route('questions')->with('message','Вопросы были успешно добавлены');
      }
      else{
      return redirect()->route('AddQuestion',['product_id' => $product_id,
       'stage_id' => $stage_id, 'amountQ' => $amountQ, 'question_order'=>$question_order]);}

    }
    public function StoreFOR($product_id,$stage_id,$amountQ,$question_order,$question_id,$answer_amount,$i){
      $answer = new answer();
      $answer->title = request('answer_title'.$i);
      $answer->question_id = $question_id;
      $answer->answer_order = $i;
      $answer->is_comment = false;

      $answer->save();
    }
    public function StoreJustComment($product_id,$stage_id,$amountQ,$question_order,$question_id){
      $answer = new answer();
      $answer->title = "Пустое поле для комментария";
      $answer->question_id = $question_id;
      $answer->answer_order = 1;
      $answer->is_comment = true;
      $answer->save();
      $question_order++;
      if($amountQ < $question_order){
        return redirect()->route('questions')->with('message','Вопросы были успешно добавлены');
      }
      else{
      return redirect()->route('AddQuestion',['product_id' => $product_id,
       'stage_id' => $stage_id, 'amountQ' => $amountQ, 'question_order'=>$question_order]);}

    }

    public function edit($id){
      $answer = answer::find($id);
      return view('answerEdit',compact('answer'));
    }
    public function storeEdit($id){

      $answer =answer::find($id);
      $answer->title = request('answer_title');
      $question_id = $answer->question_id;
      $answer->save();
      return redirect(route('viewAnswerOptions',$question_id))->with('message','Вариант ответа был удачно изменён');
    }


    public function viewAnswerOptions($id)
    {
    $options = answer::where('question_id',$id)->orderBy('answer_order','asc')->get();
    $question = question::find($id)->title;
    $answer_type_by_number = question::find($id)->answer_type;
    if($answer_type_by_number == 1){
      $answer_type = "Ед. выбор";
    }
    elseif($answer_type_by_number == 2){
      $answer_type = "Множ. выбор";
    }
    else{
      $answer_type = "Комментарий";
    }
    $product_id = question::find($id)->getProduct_idStage_id[0]->product_id;
    $stage_id = question::find($id)->getProduct_idStage_id[0]->stage_id;
    return view('answer_options',['options'=>$options,'question'=>$question,
    'answer_type'=>$answer_type,'product_id'=>$product_id,'stage_id'=>$stage_id]);
  }
    //
}
