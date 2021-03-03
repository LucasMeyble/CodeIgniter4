<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Main extends BaseController
{
	public function index(){
		$db = \Config\Database::connect();
		                                                  //getResultArray
		$results = $db->query("SELECT * FROM cliente_tbl");
		$db->close();

		//oq quero mostrar com isso é que podemos obter o mesmo resultado de vavrias formas, vai de cada um escoher 
		//o metodo a ser ultilizado
		foreach ($results->getResult() as $row){
			echo '<p>'. $row->nome . ' - '. $row->email .'</p>';
		}

		foreach ($results->getResult('array') as $row){
			echo '<p>'. $row['nome'] . ' - '. $row['email'] .'</p>';
		}

	
}
}
?>
