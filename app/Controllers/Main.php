<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Main extends BaseController
{
	public function index(){
		echo 'index';
		$this->printSession();
	}

	//-----------------------------------------------------------------------------
	public function login(){
		session()->set([
			'nome' => 'Lucas',
			'email' => 'lucas@gmail.com'
		]);

		echo 'login';
		$this->printSession();
	}

	//-----------------------------------------------------------------------------
	public function usuario(){
		if(session()->has('nome')){
			echo 'Existe usuario: '. session()->get('nome');
		}else{
			echo 'Nao existe o usuario';
		}
	}

	//-----------------------------------------------------------------------------
	public function logOut(){
		session()->destroy();
		return redirect()->to(site_url('main'));
	}

	//-----------------------------------------------------------------------------
	//função para da um print_r com os dados da session da função q a chamar
	private function printSession(){
		echo '<pre>';
		print_r(session()->get());
	}

}
?>
