<?php

if(isset($_GET['id'])) {
	
	$id = $_GET['id'];
	require("connect.php");
	
	$query = "DELETE FROM namirnice WHERE id = {$id}";
	
	mysqli_query($connection,$query);
	
	header("Location: ../remove.php");
	
	
}