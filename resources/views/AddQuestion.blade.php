@extends('layouts.admin')

@section('content')


<div class="container" >

    <form class=""   action="{{url('StoreQuestion/'.$product_id.'/'.$stage_id.'/'.$amountQ.'/'.$question_order)}}" method="post" >
    	{{csrf_field()}}
		<fieldset id ="fieldset">


			<!-- Form Name -->
			<h2>Добавление вопросов</h2>
			<label class="col-md-4 control-label"><h3>Номер вопроса: <strong>{{$question_order}}/{{$amountQ }}</strong></h3></label>






			<div class="form-group">
				<label class="col-md-8 control-label">Текст вопроса</label>
			    <div class="col-md-4 inputGroupContainer">
			    	<div class="input-group">
			        	<span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
			        	<textarea class="form-control"  name="question_title" placeholder="" required ></textarea>
			  		</div>
			  	</div>
			</div>

			<div class="form-group">
			  	<label class="col-md-4 control-label">Количество ответов</label>
			  	<div class="col-md-4 inputGroupContainer">
				  	<div class="input-group">
					  	<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
					  	<input  id = "answer_amount" name="answer_amount" placeholder="" class="form-control number_valid" onclick="removeType();"  type="number" required>
				    </div>
				</div>
			</div>
      <div class="form-group" id="toRemove">
			  	<label class="col-md-4 control-label">Тип ответа</label>
				<div class="col-md-4 selectContainer">
				    <div class="input-group">
				        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
					    <select name="answer_type"  class="form-control selectpicker" required  id="required">
					      <option value="" >Пожалуйста выберите какого типа должен быть ответ</option>
					      <option value="1">Ед. выбор</option>
					      <option value="2">Множ. выбор</option>
					    </select>
				  	</div>
				</div>
			</div>
			<!-- Select Basic -->



				<!-- <button>ads</button> -->
			<!-- Button -->
			<div class="" id = "">
			  <label class="col-md-4 control-label"></label>
				  <div class="col-md-4">
				   <input type="submit" name="" onclick="return removeType();" value="Добавить варианты ответов" class="btn btn-success">
				  </div>
			</div>


	</form>
</div>
<script type="text/javascript">

function removeType() {
  var a = document.getElementById("answer_amount").value;
  if(a == 1){
     document.getElementById("toRemove").style.display = "none";
     document.getElementById("required").required = false;

   }
  else{
    document.getElementById("toRemove").style.display = "block";
    document.getElementById("required").required = true;
  }
}
</script>



@endsection
