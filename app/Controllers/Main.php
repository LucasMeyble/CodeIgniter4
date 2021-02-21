<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Main extends BaseController
{
	public function index()
	{
		
		echo view('templates/header');
		echo view('home');
		echo view('templates/footer');

	}

	public function servicos()
	{

		$a = true;

		if($a){
			return redirect()->to('redirecionamento');
		}

		echo view('templates/header');
		echo view('servicos');
		echo view('templates/footer');
	}
	
	public function redirecionamento(){
		echo 'vc foi redirecionado';
	}


}
?>
