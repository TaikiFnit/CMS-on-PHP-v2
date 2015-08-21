<?php

/**
* getModel
*/
class getModel extends appModel
{
	private $dbh;
	private $id;

	function __construct($s, $i)
	{
		$this->id = $i;
		$this->dbh = $this->connectDB();
	}

	function run() {

		if($this->id == '*') {
			$sql = 'select * from news';
			return $this->fetch($this->dbh, $sql);
		}
		else {
			$sql = 'select * from news where id = ' . $this->id;
			return $this->fetch($this->dbh, $sql)[0];
		}
	}
}