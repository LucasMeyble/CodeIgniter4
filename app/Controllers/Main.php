<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Main extends BaseController
{
	public function index()
	{
		$table = new \CodeIgniter\View\Table();

		$template = [
			'table_open'         => '<table class="table table-striped">',
			'thead_open'         => '<thead class="thead-dark">',
			'thead_close'        => '</thead>',
];

$table->setTemplate($template);

		$data = [
			['Name', 'Color', 'Size'],
			['Fred', 'Blue',  'Small'],
			['Mary', 'Red',   'Large'],
			['John', 'Green', 'Medium'],
			['luquinhas', 'felipp', 'rafa']
		];


		echo view('templates/header');
		echo view('table', ['table' => $table->generate($data)]);
		echo view('templates/footer');

	}
}
?>
