@extends('layouts.master')
@section('content')
	<ul>
		<li><a href="{{url('dashboard/agenda/nova')}}">Nova Agenda</a></li>
	</ul>
	<div class="row">
		<div class="col-md-2 text-center">
			<a href="{{url('dashboard/agenda/nova')}}"><img width="150px" src="{{url('images/agenda.png')}}"></a>
			<h4>Cadastrar Agenda</h4>
		</div>
		<div class="col-md-2 text-center">
			<a href=""><img width="150px" src="{{url('images/professores.png')}}"></a>
			<h4>Cadastrar Professores</h4>
		</div>
		<div class="col-md-2 text-center">
			<a href=""><img width="150px" src="{{url('images/series.png')}}"></a>
			<h4>Cadastrar Serie</h4>
		</div>
	</div>
	    
@endsection()