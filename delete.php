<?php
	header('Access-Control-Allow-Origin:*');

	$id = $_GET['id'];

	$con = mysqli_connect("localhost","root","","konversi");

	if($con){

		$sql = "delete from datauang where id='$id'";
		$query = mysqli_query($con,$sql);

		if($query){
			$status = "1";
		}
		else{
			$status = "0";
		}

		echo $status;
	}

?>