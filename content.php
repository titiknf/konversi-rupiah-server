<?php

	error_reporting(E_ALL & ~E_NOTICE);	
	header("Acces-Control-Allow-Origin:*");

	$con = mysqli_connect("localhost","root","","konversi");

	$id = $_GET['id'];

	$result = pf_query($con, "SELECT * FROM datauang ORDER BY NamaUang ASC")
	echo json_encode(pg_fetch_assoc($result));

?>
