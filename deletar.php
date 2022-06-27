<?php 
	include 'conexaoBD.php';

	$id = $_GET["id"];
	
	if(isset($_GET['id'])){
	$sql = mysqli_query($conectar, "DELETE FROM fun_ousadia_tb WHERE id = {$id} ") 
	   	or die(mysqli_error($conectar));

	header('location: table.php');
	}
?>