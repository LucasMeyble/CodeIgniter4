<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Main extends BaseController
{
	public function index(){
		// os dados do session sao guardados em cache, por isso mesmo q o email esteja comentado ele aparesce no print_r

		session()->set('usuario', 'Lucas');
		session()->set('nome', 'Pedro');
		session()->set('email', 'pedro@gmail.com');
		echo session()->get('usuario');
		echo '</br>';
		

		//forma de fazer um if perguntando se existe uma session com uma determinada chave, no caso o has
		if(session()->has('email')){
			echo 'sim';
		}else{
			echo 'nao';
		}


		$this->printSession();
	}

	public function home(){
	
	}

	//função para da um print_r com os dados da session da função q a chamar
	private function printSession(){
		echo '<pre>';
		print_r(session()->get());
	}

}
?>
