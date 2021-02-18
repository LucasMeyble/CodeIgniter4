<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Main extends BaseController
{
	public function index()
	{
		
		$parser = \Config\Services::parser();

		$data = [
			'frase' => 'essa frase aqui'
		];

		echo $parser->setData($data)->render('parce');

	}
}
?>
