<?php

/**
* postModel
*/
class putModel extends appModel
{
	private $sysRoot;
	private $dbh;
	private $id;
	private $putData;

	function __construct($s, $i)
	{
		$this->sysRoot = $s;
		$this->id = $i;
		parse_str(file_get_contents('php://input'), $this->putData);
		$this->dbh = $this->connectDB();
	}

	function run() {

		// 記事番号を取得

		echo $this->putData['fnit'];

		var_dump($this->putData);

	}
}