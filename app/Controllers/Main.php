<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Main extends BaseController
{
	public function index()
	{
		echo view('templates/header');
		echo view('pagina');
		echo view('templates/footer');

	}
}
?>
