@extends('layouts.master')
@section('script_top')
	<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
  	<script>
		tinymce.init({
		  selector: 'textarea',
		  height: 350,
		  theme: 'modern',
		  plugins: [
		    'advlist autolink lists link image charmap print preview hr anchor pagebreak',
		    'searchreplace wordcount visualblocks visualchars code fullscreen',
		    'insertdatetime media nonbreaking save table contextmenu directionality',
		    'emoticons template paste textcolor colorpicker textpattern imagetools codesample toc help'
		  ],
		  toolbar1: 'undo redo | insert | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
		  toolbar2: 'print preview media | forecolor backcolor emoticons | codesample help',
		  image_advtab: true,
		  templates: [
		    { title: 'Test template 1', content: 'Test 1' },
		    { title: 'Test template 2', content: 'Test 2' }
		  ],
		  content_css: [
		    '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
		    '//www.tinymce.com/css/codepen.min.css'
		  ]
		 });
  	</script>
@endsection

@section('content')

	<div class="row">
		<div class="col-md-6">
			<h3>Criar Agenda</h3>
		</div>
	</div>
	<form method="post" action="{{url('dashboard/agenda/store')}}">
		<div class="row">
			<div class="form-group col-md-8">
				<label>Título</label>
				<input type="text" class="form-control">
			</div>
			<div class="form-group col-md-4">
				<label>Ações</label><br>
				<input type="submit" class="btn btn-success" value="Salvar">
				<a href="#" class="btn btn-primary">Salvar e Novo</a>
				<a href="{{url('')}}" class="btn btn-warning">Fechar</a>
			</div>
		</div>
		<div class="row">
		<div class="form-group col-md-3">
			<label>Selecione o turno</label>
			<select class="form-control">
				<option value="manha">Manhã</option>
				<option value="tarde">Tarde</option>
			</select>
		</div>
		<div class="form-group col-md-3">
			<label>Selecione a serie</label>
			<select class="form-control">
				<option value="">Manhã</option>		
			</select>
		</div>
		<div class="form-group col-md-3">
			<label>Selecione o(a) Professor(a)</label>
			<select class="form-control">
				<option value="">Ana Maria</option>		
			</select>
		</div>
		<div class="form-group col-md-3">
			<label>Informe a Data</label>
			<input id="data" type="text" name="data" class="form-control" placeholder="00/00/0000">
		</div>
		</div>
		<div class="form-group">
			<label>Descrição</label>
			<textarea class="form-control"></textarea>
		</div>	
	</form>  
    
@endsection()
@section('script_bottom')
	<script type="text/javascript" src="{{url('js/jquery.maskedinput-1.3.min.js')}}"></script>

	<script>
  		//Mascara de Campos
  		jQuery(function($){
			$("#data").mask("**/**/****");
		})
  	</script>
@endsection()