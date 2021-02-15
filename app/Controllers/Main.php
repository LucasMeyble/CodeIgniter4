<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Main extends BaseController
{
	public function index()
	{

		$dados = [
			[
				'nome' => 'lucas',
				'email' => 'lucas_meyble@hotmail.com	'
			], 

			[
				'nome' => 'pedro',
				'email' => 'pedro@hotmail.com	'
			],

			[
				'nome' => 'joao',
				'email' => 'joao@hotmail.com	'
			]
		];

		echo view('templates/header');
		echo view('pagina', [ 'dados' => $dados ]);
		echo view('templates/footer');

	}
}
?>
