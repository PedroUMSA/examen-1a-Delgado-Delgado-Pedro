<?php namespace App\Controllers;

use CodeIgniter\HTTP\Request;

class Home extends BaseController
{
	public function guarda(){
		//$request=\Config\Services::request();
		//var_dump($request);
		//echo $_POST['name'].'<br>';
		//echo $_POST['email'];
		$c=validar_usuario($_GET['user'],$_GET['pass']);
		if($c!='false'){
			return view('estructura/header').view('estructura/body',array('var'=>$c));
		}else{
			return view('estructura/header').view('estructura/login',array('var'=>true));
		}
		
	}
	public function refres(){
		return view('estructura/header').view('estructura/body');
	}
	public function index()
	{
		return view('estructura/header').view('estructura/login');
	}
	
	//--------------------------------------------------------------------

}
