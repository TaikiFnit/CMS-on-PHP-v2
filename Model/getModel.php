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
			return $this->fetch($this->dbh, $sql, array());
		}
		else {
			$sql = 'select * from news where id = :id';
			$values = array(':id'=> $this->id);
			return $this->fetch($this->dbh, $sql, $values)[0];
		}
	}
}