<?php session_start(); ?>

<?php 
	$_SESSION['username'] = null;
	$_SESSION['password'] = null;
	$_SESSION['tipo'] = null;

	header("Location: ../admin/index.php");
?>