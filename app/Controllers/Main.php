<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Main extends BaseController
{
	public function index(){

		// os dados do session sao guardados em cache, por isso mesmo q o email esteja comentado ele aparesce no print_r

		session()->set('email', 'test@example.com');
		session()->set('nome', 'Lucas');

		echo '<pre>';
		print_r(session()->get('nome'));
		echo '</br>';
		print_r(session()->get('email'));

		return redirect()->to('main/teste');

	}

	public function teste(){
		echo 'o nome do usuario é: ' . session()->get('nome');
		echo '</br>';
		echo 'o email do usuario é: ' . session()->get('email'); 
	}
}
?>
