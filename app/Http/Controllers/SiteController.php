<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class SiteController extends Controller
{

	public function agenda(){
		return view('agenda');
	}

	public function login(){
		return view('login');
	}
	
    public function index(){
    	
    	$message = [
    		'name' => 'Haelio Marcio'
	    ];
	    $dados = [
	    	'name' => 'Haelio Márcio',
	    ];
	    $post = Post::create($dados);
	    
	    //Pusher::trigger('post_channel', 'my-event', ['message' => $message]);
	    event(new \App\Events\CreatePost($post));

	    //Pusher::trigger('post_channel', 'my-event', ['message' => $message]);
	    
	    $app_id = '346729';
		$app_key = 'cd145b7c029995a46ae4';
		$app_secret = '9b09dc5eeed8bef6f957';
	    return "Sucesso";
		//$pusher = new Pusher( $app_key, $app_secret, $app_id );
		
    }
}
