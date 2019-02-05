<?php


Route::get('/','IndexController@index')->name('home');
Route::get('AddDetails','SurveyController@index');
Route::post('StoreDetails','QuestionController@StoreDetails');
Route::get('AddQuestion/{product_id}/{stage_id}/{amountQ}/{question_order}','QuestionController@index')->name('AddQuestion');
Route::post('StoreQuestion/{product_id}/{stage_id}/{amountQ}/{question_order}','QuestionController@StoreQuestion');
Route::get('AddJustComment/{product_id}/{stage_id}/{amountQ}/{question_order}/{question_id}','AnswerController@StoreJustComment')->name('AddJustComment');
Route::get('AddAnswers/{product_id}/{stage_id}/{amountQ}/{question_order}/{question_id}/{answer_amount}','AnswerController@index')->name('AddAnswers');
Route::post('StoreAnswers/{product_id}/{stage_id}/{amountQ}/{question_order}/{question_id}/{answer_amount}','AnswerController@StoreAnswers');
// Route::get('/testtest/{id}/{go}','TestController@testcase');
Route::get('testtesttest','TestController@index');
Route::get('questions/{id}/edit','QuestionController@edit');
Route::post('questions/{id}/{answer_count}/storeEdit','QuestionController@storeEdit');
Route::get('questions/{id}/delete','QuestionController@delete');
// Route::get('/index','IndexController@index')->name('home');
Route::get('viewAnswerOptions/{id}/edit','AnswerController@edit');
Route::post('viewAnswerOptions/{id}/storeEdit','AnswerController@storeEdit');
Route::get('viewAnswerOptions/{id}/delete','AnswerController@delete');
Route::get('NPS/{product_id}/{stage_id}','NPSController@index');
Route::get('filterQuestion','IndexController@filterQuestion');
Route::post('/','IndexController@check');
Route::get('questionMore/{question_id}','QuestionController@questionMore');
Route::get('/how',function(){return view('index2');});


Route::get('/questions','QuestionController@viewAllQuestions')->name('questions');


Route::get('/viewAnswerOptions/{id}','AnswerController@viewAnswerOptions')->name('viewAnswerOptions');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('passports','PassportController') ;
