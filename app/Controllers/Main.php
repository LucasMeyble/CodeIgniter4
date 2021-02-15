<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Main extends BaseController
{
	public function index()
	{

		$dados = [
			'nome' => 'Lucas meyble',
			'idade' => 19
		];

		echo view('templates/header');
		echo view('pagina', $dados);
		echo view('templates/footer');

	}
}
?>
