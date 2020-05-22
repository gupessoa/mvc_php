<?php
	require 'environment.php';

	$config = array();

	if(ENVIRONMENT == 'development'){
		define('BASE_URL', 'http://localhost/mvc.dev/');
		$config['dbname'] = 'mvc';
		$config['host'] = 'localhost';
		$config['dbuser'] = 'root';
		$config['dbpass'] = 'gust@v000';
	}else{
		define('BASE_URL', 'http://localhost/mvc.dev/');
		$config['dbname'] = 'mvc';
		$config['host'] = 'localhost';
		$config['dbuser'] = 'gupessoa';
		$config['dbpass'] = 'gust@v000';
	}

	global $db;
	try{
		$db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'], $config['dbuser'], $config['dbpass']);
	}catch(PDOException $e){
		echo "ERRO: ".$e->getMessage();
		exit;
	}