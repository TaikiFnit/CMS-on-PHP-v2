<?php

// このクラスではリクエストに応じて使用するコントローラーのインスタンス化を行います

class dispatcher {

	private $sysRoot;
	private $helpers;

	function __construct($s) {
		$this->sysRoot = $s;

		/* helper's func
		require_once $this->sysRoot . '/Controller/helpers.php';

		$this->helpers = new helpers($this->sysRoot);
		*/
	}

	function run() {

		// 末端の / を削除
		if($_SERVER['REQUEST_URI'] != null) {
			$param = rtrim($_SERVER['REQUEST_URI'], '/');
		}

		$params = array();	

		// パラメータを /　で分割
		if($param != '') {
			$params = explode('/', $param);
		}

		$controller = 'index';

		// controller名をセット
		if(0 < count($params)) {
			$controller = $params[1];
		}

		$controller = basename($controller, '.html');
		$controller = basename($controller, '.php');

		// Controllerのインスタンス化
		switch($controller) {
			// コントロールページの表示
			case 'index':
			case 'get':
			case 'post':
			case 'put':
			case 'delete':
				require_once $this->sysRoot . '/Controller/staticController.php';
				$controllerInstance = new staticController($this->sysRoot, $controller, $params[3]);
				break;

			case 'news':
				// newsに対するCRUD
				require_once $this->sysRoot . '/Controller/newsController.php';
				$controllerInstance = new newsController($this->sysRoot, $params[2], $_SERVER["REQUEST_METHOD"]);
				break;

			default: 
				header('Location: /');
				exit;
				break;
		}

		$controllerInstance->run();
	}
}

