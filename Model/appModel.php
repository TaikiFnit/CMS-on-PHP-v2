<?php

/**
* appModel
*/
class appModel
{
	
	protected function connectDB()
	{
		try {

			$options = array(
				PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
			);

			return new PDO(DSN, DB_USER, DB_PASSWORD, $options);
			
		} catch (PDOException $e) {
			$e->getMessage();
			exit;	
		}
	}

	protected function fetch($dbh, $sql, $values) {

		$stmt = $dbh->prepare($sql);

		foreach ($values as $key => $value) {
			$stmt->bindValue($key, $value);
		}

		$stmt->execute();

		return $stmt->fetchAll();
	}

	protected function insert($dbh, $sql, $values) {

		$stmt = $dbh->prepare($sql);

		foreach ($values as $key => $value) {
			$stmt->bindValue($key, $value);
		}

		return $stmt->execute();
	}
}