@extends('layouts.admin')

@section('content')


<div class="container" >

    <form class=""   action="{{url('viewAnswerOptions/'.$answer->id.'/storeEdit')}}" method="post" >
    	{{csrf_field()}}
		<fieldset id ="fieldset">


			<!-- Form Name -->
			<h2>Изменение варианта ответа</h2>







			<div class="form-group">
				<label class="col-md-8 control-label">Текст варианта</label>
			    <div class="col-md-4 inputGroupContainer">
			    	<div class="input-group">
			        	<span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
			        	<textarea class="form-control"  name="answer_title" placeholder="" required >{{$answer->title}}</textarea>
			  		</div>
			  	</div>
			</div>


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
