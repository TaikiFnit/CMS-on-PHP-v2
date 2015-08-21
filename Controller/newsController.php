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

		$className = mb_strtolower($this->method) . 'Model';

		$methodModel = new $className($this->sysRoot, $this->id);

		$response = $methodModel->run();

		echo json_encode($response);
	}
}