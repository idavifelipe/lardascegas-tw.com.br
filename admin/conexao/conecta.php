<?php
	try{
		$conexao = new PDO('mysql:host=mysql762.umbler.com;dbname=lardascegas', 'lardascegas', 'fXX9P_K/zw9');
		$conexao ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}catch(PDOException $e){
		echo 'ERROR: ' . $e->getMessage();
	}
?>