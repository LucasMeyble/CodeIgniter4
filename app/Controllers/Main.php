<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Main extends BaseController
{
	public function index(){
		$db = \Config\Database::connect();
		                                                  //getResultArray
		$results = $db->query("SELECT * FROM cliente_tbl")->getResultObject();
		$db->close();

		echo '<pre>';
		var_dump($results);
}
}
?>
