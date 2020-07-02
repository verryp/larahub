<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('simple-table');
})->name('dt-1');

Route::get('/data-tables', function () {
    return view('data-tables');
})->name('dt-2');

Route::get('/pertanyaan', 'QuestionController@index')->name('question.index');
Route::get('/pertanyaan/create', 'QuestionController@create')->name('question.create');
Route::post('/pertanyaan', 'QuestionController@store')->name('question.store');

Route::get('/jawaban/{pertanyaan_id}', 'AnswerController@index');
