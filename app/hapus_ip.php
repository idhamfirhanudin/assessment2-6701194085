<?php 
	include '../config.php';

	$conn = new mysqli($host, $username, $password, $dbname);

	$id_ip = $_GET['id_ip'];
	$sql = "DELETE FROM `ip` WHERE id_ip='$id_ip'";
	$result = $conn->query($sql); 
	echo "<script> alert('Data terhapus');</script>";
	echo "<script> location='ip.php'; </script>";
?>