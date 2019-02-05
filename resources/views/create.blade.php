@extends('layouts.admin')

@section('content')

<div class="container">


    <form class=""  id = "BeginSurvey" action="{{url('StoreDetails')}}" method="post" >
    	{{csrf_field()}}
		<fieldset>

			<!-- Form Naem -->
			<h2>Детали Опроса</h2>

			<!-- Text input-->




			<!-- Select Basic -->

			<div class="form-group">
			  	<label class="col-md-4 control-label">Продукт</label>
				<div class="col-md-4 selectContainer">
				    <div class="input-group">
				        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
					    <select name="product" class="form-control selectpicker" required >
					      <option value="" >Пожалуйста выберите продукт</option>
					      <option value="1">PayDa</option>
					      <option value="2">Дебетная карта</option>
					    </select>
				  	</div>
				</div>
			</div>

			<div class="form-group">
			  	<label class="col-md-4 control-label">Событие</label>
				<div class="col-md-4 selectContainer">
				    <div class="input-group">
				        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
					    <select name="stage" id = "stage" class="form-control selectpicker" required>
						      <option value="">Пожалуйста выберите событие</option>
						      <option value="1">I Join</option>
						      <option value="2">I Use</option>
					    </select>
				  	</div>
				</div>
			</div>
      <div class="form-group">
			  	<label class="col-md-4 control-label">Количество вопросов</label>
				  	<div class="col-md-4 inputGroupContainer">
					  	<div class="input-group">
						  	<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
						  	<input  name="amount" id="amount" placeholder="" class="form-control number_valid"  type="number" min="1" required>
					    </div>
					</div>
			</div>

			<!-- Button -->
			<div class="form-group">
			  <label class="col-md-4 control-label"></label>
				  <div class="col-md-4">
				    <button type="submit" class="btn btn-success" >Перейти к вопросам</button>
				  </div>
			</div>

		</fieldset>
	</form>
</div>

@endsection
