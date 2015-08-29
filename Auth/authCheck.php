<?php

/**
* the class for authoraization check
*/
class authCheck {

	private $controller;
	
	function __construct($c) {
		$this->controller = $c;
	}

	public function isLogined()
	{
		// check Logined

		session_start();

		if(isset($_SESSION['id'])) {
			// this user is already logged in.
			return true;
		}

		// this user is not logged in.

		if ($this->controller == 'login') {
			// this user try to login
			return true;
		}

		// but access
		header('Location: /login');
		return false;
	}
}