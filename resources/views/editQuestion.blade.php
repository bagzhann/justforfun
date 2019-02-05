@extends('layouts.admin')

@section('content')


<div class="container" >

    <form class=""   action="{{url('questions/'.$question->id.'/'.$answer_count.'/storeEdit')}}" method="post" >
    	{{csrf_field()}}
		<fieldset id ="fieldset">


			<!-- Form Name -->
			<h2>Изменение вопроса</h2>
			<div class="form-group">
				<label class="col-md-8 control-label">Текст вопроса</label>
			    <div class="col-md-4 inputGroupContainer">
			    	<div class="input-group">
			        	<span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
			        	<textarea class="form-control"  name="question_title" placeholder="" required >{{$question->title}}</textarea>
			  		</div>
			  	</div>
			</div>
      <h2>Изменение вариантов ответа</h2>
      @foreach ($answers as $answer)

      <?php $name = "answer_order".$answer->answer_order; ?>
			<div class="form-group">
				<label class="col-md-8 control-label">Текст варианта</label>
			    <div class="col-md-4 inputGroupContainer">
			    	<div class="input-group">
			        	<span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
			        	<textarea class="form-control"  name={{$name}} placeholder="" required >{{$answer->title}}</textarea>
			  		</div>
			  	</div>
			</div>

      @endforeach


			<!-- Select Basic -->



				<!-- <button>ads</button> -->
			<!-- Button -->
			<div class="" id = "">
			  <label class="col-md-4 control-label"></label>
				  <div class="col-md-4">
				   <input type="submit" name="" value="Сохранить" class="btn btn-success">
				  </div>
			</div>


	</form>
</div>

@endsection
