<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Main extends BaseController
{
		public function index(){
			echo view('templates/header');
			echo view('formulario');
			echo view('templates/footer');
	}

	public function save(){

		$params = [
			'nome' => $this->request->getPost('nome'),
			'email' => $this->request->getPost('email')
		];

		$db = db_connect();
		//coloca 0 no id quando o campo é auto increment la na tabela
		$db->query("INSERT INTO cliente_tbl VALUES(
			0,
			:nome:,
			:email:
		)", $params);
		$db->close();

	}
}
?>
