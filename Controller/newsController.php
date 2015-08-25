<?php 

/**
* newsController
*/
class newsController
{
	private $sysRoot;
	private $id;
	private $method;
	
	function __construct($s, $i, $m)
	{
		$this->sysRoot = $s;
		$this->id = $i;
		$this->method = $m;
	}

	function run() {

		require_once $this->sysRoot . '/Model/appModel.php';

		// HTTP METHOD に対応したModelをインスタンス化
		require_once $this->sysRoot . '/Model/' . mb_strtolower($this->method) . 'Model.php';

		// define class name
		$className = mb_strtolower($this->method) . 'Model';

		// instance the model
		$methodModel = new $className($this->sysRoot, $this->id);

		// run the func
		$response = $methodModel->run();

		// display the data as json
		echo json_encode($response);
	}
}