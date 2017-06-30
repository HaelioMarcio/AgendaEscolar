@extends('layouts.master')
@section('content')
    <h3>Professores</h3>
    <h4>Adicionar Novo(a) Professor(a)</h4>
    <form action="{{url('professor/store')}}" method="POST" class="row">
    	<div class="form-group col-md-3">
    		<input type="hidden" name="_token" value="{{csrf_token()}}">
    		<input type="text" name="nome" placeholder="Nome" class="form-control">
    	</div>
    	<div class="form-group col-md-6">
    		<input type="text" name="disciplina" placeholder="Disciplinas" class="form-control">
    	</div>
    	<div class="form-group col-md-3">
    		<input type="submit" class="btn btn-success" value="Salvar">
    	</div>
    </form>
    <hr>
    <h4>Lista de Professores</h4>
    <ul>
    	<li><a href="#"></a></li>
    </ul>
@endsection()