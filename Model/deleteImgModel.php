<?php

/**
* deleteImgModel
*/
class deleteImgModel extends appModel
{
	private $sysRoot;
	private $imgName;

	function __construct($s, $i)
	{
		$this->sysRoot = $s;
		$this->imgName = $i;
	}

	function run() {

		$path = $this->sysRoot . '/public' . NEWS_IMAGE_PATH . $this->imgName;

		return array('result'=> unlink($path));
	}
}