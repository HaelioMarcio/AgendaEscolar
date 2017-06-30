<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Professor;
use Validator;

class ProfessorController extends Controller
{
	protected $professor;

	public function __construct(Professor $professor){
		$this->professor = $professor;
	}

	public function index(){
	 	$dados = [
	 		'professores' => $this->professor,
	 	];
		return view('app.professor.index');
	}
	public function store(Request $request){
		
		$validator = Validator::make(
			$request->all(),[
				'nome' => 'required',
				'disciplina' => 'required'
			]);

	
		if(!$validator->fails()){
			//Preencher Campo Busca
			$all = $request->all();
			$all['busca'] = str_slug($all['nome']);

			$this->professor->create($request->all());
			return redirect('professor')->with('success', 'Professor salvo com sucesso.');
		}

		return redirect('professor')->with('error', 'Error');


	}

	public function edit($id){
		$professor = $this->professor->find($id);
		$dados = [
			'professor' => $professor,
		];
		return view('app.professor.index', $dados);
	}

	public function delete($id){
		$professor = $this->professor->find($id);
		$professor->delete();
		return redirect()->back()->with('success', 'Professor removido com sucesso');
	}
}
