<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon;
use App\Professor, App\Serie;

class AgendaController extends Controller
{
	protected $professores;
	//protected $series;

	public function __construct(Professor $professores){		
		$this->professores = $professores;
		//$this->series = $series;
	}

    public function index(){
    	
    	//$dados = [
    	//	'professores' => $this->professores->all(),
    	// 'series' => $this->series->all()
    	//];

    	return view('app.agenda.index');

    }

    public function store(Request $request){
    	$data = Carbon::createFromFormat('d/m/Y', $request->data);
    }

}

