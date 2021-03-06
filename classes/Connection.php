<?php

class Connection 
{
	public static function connect($config)
	{
		try {
			return new PDO('mysql:host=' . $config['database']['host'] . ';dbname=' . $config['database']['dbname'] . ';', 
				$config['database']['username'], $config['database']['password']);
		} catch(PDOException $e) {
			die("Error" . $e->getMessage());
		}
	}
}
