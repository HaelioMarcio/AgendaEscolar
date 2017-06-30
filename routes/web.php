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
//use Vinkla\Pusher\Facades\Pusher;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/agenda','SiteController@agenda');
Route::get('/login','SiteController@login');
Route::post('/authenticate','UserController@authenticate');

Route::group(['prefix' => 'dashboard'],function(){
	Route::get('/','DashboardController@index');

	//Agenda
	Route::get('/agenda/nova','AgendaController@index');
	Route::post('/agenda/store','AgendaController@store');
	Route::post('/agenda/update/{id}','AgendaController@update');
	Route::get('/agenda/delete/{id}','AgendaController@delete');
	Route::get('/agenda/edit/{id}','AgendaController@edit');

	//Professores
	Route::get('/professor','ProfessorController@index');
	Route::get('/professor/edit/{id}','ProfessorController@edit');
	Route::get('/professor/delete/{id}','ProfessorController@delete');
	Route::post('/professor/store','ProfessorController@store');

	//Serie
	Route::get('/serie','SerieController@index');
	Route::get('/serie/edit/{id}','SerieController@edit');
	Route::get('/serie/delete/{id}','SerieController@delete');
	Route::post('/serie/store','SerieController@store');

});



//Canal
Route::get('/lista', function () {
   return view('lista');
});

Route::get('/create','SiteController@index');


