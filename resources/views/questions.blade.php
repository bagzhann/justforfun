@extends('layouts.admin')
@section('content')
<center>
	@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif
	<div class="form-group" id = "btn-add-answer">
		<label class="col-md-4 control-label"></label>
			<div class="col-md-4">
				<a  href = "{{url('/AddDetails/')}}">
				<button type = "button"  class="btn btn-success" onclick="" >Добавить Опрос</button></a>
			</div>
	</div>
	<table class='table table-hover'>
		<tr>

			<th style="width:100px;"><h4>Вопрос</h4></th>
			<th><h4>Очередь вопроса</h4></th>

			<th><h4>Создан</h4></col>
			<th><h4>Продукт</h4></col>
			<th><h4>Событие</h4></col>
			<th style="width:215px;"></th>
		</tr>
		@foreach ($questions as $question)


				<tr>

					<td><a href="{{url('viewAnswerOptions/'.$question->id)}}">{{$question->title}}</a></td>
					<td>{{$question->question_order}}</td>
					<td>{{$question->created_at}}</td>
					<td>{{$question->getProduct_idStage_id[0]->product_id}}</td>
					<td>{{$question->getProduct_idStage_id[0]->stage_id}}</td>
					<td><div style="float:right;"><a href="{{url('questions/'.$question->id.'/edit')}}"><button type="button" class="btn btn-primary" name="button" style="margin-right:0px;">Изменить</button></a>
						<a href="{{url('questions/'.$question->id.'/delete')}}"><button onclick="return confirm('Вы уверены что хотите удалить этот вопрос?')" type="button" id ="delete" class="btn btn-danger" name="button">Удалить</button></a></td>
					</div>
				</tr>

		@endforeach

	</table>
</center>
<script>
    $(".delete").on("submit", function(){
        return confirm("Вы действительно хотите удалить?");
    });
</script>


@endsection
