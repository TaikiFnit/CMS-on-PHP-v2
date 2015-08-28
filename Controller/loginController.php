<?php

/**
* the controller class for login
*/
class loginController {

	private $sysRoot;
	private $method;

	function __construct($s, $m)
	{
		$this->sysRoot = $s;
		$this->method = $m;
	}

	public function run() {

		switch($this->method) {
			case 'GET':

				break;

			case 'POST':

				break;
		}

	}
}