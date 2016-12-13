<?php

	error_reporting(E_ALL & ~E_NOTICE);	
	header("Acces-Control-Allow-Origin:*");

	$con = mysqli_connect("localhost","root","","konversi");

	$nim = $_GET['id'];

	if($con){
		$query = mysqli_query($con,"select * from datauang where id='$id'");

		if($query->num_rows > 0){

			$data = array();
			while($row=$query->fetch_assoc()){
				$data[] = $row;
			}
			echo json_encode($data);
		}
	}


?>