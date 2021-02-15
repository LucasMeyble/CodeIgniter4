<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Main extends BaseController
{
	public function index()
	{

		$dados = [
			'audi',
			'mercedes',
			'ferrari',
			'maclaren'
		];

		echo view('templates/header');
		echo view('pagina', [ 'dados' => $dados ]);
		echo view('templates/footer');

	}
}
?>
