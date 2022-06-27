<?php 
	include 'conexaoBD.php';
    

	if (isset($_GET['id'])) {
		$id = $_GET['id'];
		$sql = mysqli_query($conectar, "SELECT * FROM fun_ousadia_tb WHERE id=$id ");
	}
?>