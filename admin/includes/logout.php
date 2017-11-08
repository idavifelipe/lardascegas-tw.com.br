<?php
if(isset($_REQUEST['sair'])){	
	session_destroy();
	session_unset($_SESSION['usuarioldc']);
	session_unset($_SESSION['senhaldc']);	
	header("Location: index.php");	
}
?>