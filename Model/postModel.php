<?php

/**
* postModel
*/
class postModel extends appModel
{
	private $sysRoot;
	private $dbh;
	private $id;
	private $postData;

	function __construct($s, $i)
	{
		$this->sysRoot = $s;
		$this->id = $i;
		$this->postData = $_POST;
		$this->dbh = $this->connectDB();
	}

	function run() {

		echo "fnit";

		$updir = $this->sysRoot . '/public/news_image/';

		// 画像をpublic/news_images/にほぞんする　
		$imageName1 = $_FILES['data']['image1'];
		move_uploaded_file($_FILES['data']['tmp_name'], $updir . $imageName1);

		echo $_FILES['data']['error'];

		$checkNewsId = 'select max(news_id) as id from news where date_format(`created`, "%Y") = ' . date('Y', strtotime($this->postData['created'])) . ';';

		$id = $this->fetch($this->dbh, $checkNewsId)[0]['id'];

		if($id != null) {
			// news番号をインクリメント
			$id += 1;
		}

		$sql = 'insert into news(news_id, title, content, team, images, image_src1, image_src2, image_alt1, image_alt2) values(:news_id, :title, :content, :team, :images, :image_src1, :image_src2, :image_alt1, :image_alt2)';	


		exit;

	}
}