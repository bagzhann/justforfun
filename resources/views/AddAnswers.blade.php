@extends('layouts.admin')

@section('content')


<div class="container" >
    
    <form class="" id = "ContinueSurvey"  action="{{url('StoreAnswers/'.$product_id.'/'.$stage_id.'/'.$amountQ.'/'.$question_order.'/'.$question_id.'/'.$answer_amount)}}" method="post" >
    	{{csrf_field()}}
		<fieldset id ="fieldset">


			<!-- Form Name -->
			<h2>Добавление вариантов ответа к вопросу №:{{$question_order}}</h2>


      @for ($i = 1; $i <= $answer_amount; $i++)
      <div class="form-group">
        <label class="col-md-8 control-label">Вариант {{$i}}</label>
          <div class="col-md-4 inputGroupContainer">
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                <textarea class="form-control" "question_text" name="answer_title{{$i}}" placeholder="" rows="1" required ></textarea>
            </div>
          </div>
      </div>
@endfor
<label for="" style="font-family:arials; font-size:16px;"><i>Будет ли возможность комментировать ответ?</i>
<input type="radio" name="has_comment" value="true" required onclick="showCommentaryHint()">да
<input type="radio" name="has_comment" value="false" required onclick="removeDummy()">нет
</label>





  <div id="showCommentaryHint" style="display:none;">
    <textarea name="CommentaryHint" rows="2" cols="50" placeholder="Подсказка для комментария" ></textarea>

  </div>



				<!-- <button>ads</button> -->
			<!-- Button -->
			<div class="form-group" id = "btn-add-answer">
			  <label class="col-md-4 control-label"></label>
				  <div class="col-md-4">
				   <input type="submit" name="" value="Перейти к следующему вопросу" class="btn btn-success">
				  </div>
			</div>

		</fieldset>

	</form>
</div>
<script type="text/javascript">
function showCommentaryHint(){
  document.getElementById("showCommentaryHint").style.display = "block";
}
function removeDummy() {
     document.getElementById("showCommentaryHint").style.display = "none";
}

</script>

@endsection
