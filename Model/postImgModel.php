<?php

/**
* postImgModel
*/
class postImgModel extends appModel
{
	private $sysRoot;
	private $postData;

	function __construct($s, $i)
	{
		$this->sysRoot = $s;
		$this->postData = $_POST;
	}

	function run() {

		$updir = $this->sysRoot . '/public/' . NEWS_IMAGE_PATH;

		// 画像をpublic/news_images/にsave
		return array('result'=> move_uploaded_file($_FILES['image']['tmp_name'], $updir . $_FILES['image']['name']));
	}
}