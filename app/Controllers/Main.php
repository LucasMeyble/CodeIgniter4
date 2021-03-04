<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Main extends BaseController
{
	public function index($id, $nome){
		
		$params = [
			'id' => $id,
			'nome' => $nome
		];
		$db = db_connect();
		$dados = $db->query("SELECT * FROM cliente_tbl where id = :id: and nome = :nome:", $params)->getResultObject();
		$db->close();

		echo '<pre>';
		echo print_r($dados);

}
}
?>
