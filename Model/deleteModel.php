<?php

/**
* deleteModel
*/
class deleteModel extends appModel
{
	private $id;
	private $dbh;

	function __construct($s, $i)
	{
		$this->id = $i;
		$this->dbh = $this->connectDB();
	}

	function run() {

	}
}