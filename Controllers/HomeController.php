<?php
namespace Controllers;

use \Core\Controller;
use \Models\Usuarios;

class HomeController extends Controller {

	public function index() {
		
		$array = array(
			
		);

		$this->returnJson($array);

	}

	public function testando() {
		echo "123 .. testando";
	}

	

}