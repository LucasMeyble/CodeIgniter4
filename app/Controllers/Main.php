<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Main extends BaseController
{
	public function index()
	{
		
		$parser = \Config\Services::parser();

		$data = [
			'frase' => 'essa frase aqui',
			'nomes' => [
				['nome' => 'lucas'],
				['nome' => 'pedro'],
				['nome' => 'joao']
			],
			'admin' => true,
			'texto ' => 'texto'
		];

		echo $parser->setData($data)->render('parce');

	}
}
?>
