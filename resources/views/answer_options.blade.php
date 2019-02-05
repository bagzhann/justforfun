@extends('layouts.admin')
@section('content')
@if(session()->has('message'))
  <div class="alert alert-success">
      {{ session()->get('message') }}
  </div>
@endif
<h1>Вопрос :</h1>
<h3><i>{{$question}}</i></h3>

<div style="display:flex; flex-direction:row;">
<p>Продукт: {{$product_id}}</p>
<p style="margin-left:10px;">Событие: {{$stage_id}}</p>
<p style="margin-left:10px;">Тип ответа: {{$answer_type}}</p>
</div>

<hr>
<table class='table table-hover'>
  <tr>
    <th><h3>Ответы</h3></th>
    <td></td>


  </tr>
  @foreach ($options as $answer)

      <tr>
        <td>{{$answer->title}}</td>
        <td><div style="float:right;"><a href="{{url('viewAnswerOptions/'.$answer->id.'/edit')}}"><button type="button" class="btn btn-primary" name="button" style="margin-right:10px;">Изменить</button></a>
        </div></td>


      </tr>
  @endforeach

</table>
@endsection
