<?php
try{
	$source = 'mysql:host=127.0.0.1;dbname=Lokaverkefni';
	$user = 'root';
	$password = 'galtalind9';

	$pdo = new PDO($source, $user, $password);

	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	$pdo->exec('SET NAMES "utf8"');
}
catch (PDOException $e){
	echo "tenging tókst ekki". "<br>" . $e->getMessage();
}
?>