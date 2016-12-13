<?php 

	header('Access-Control-Allow-Origin:*');
	
	$user = $_GET['user'];//user dapat dari url yang ada di controler
	$pass = $_GET['pass'];//pass dapat dari url yang ada di controler
	$con = mysqli_connect("localhost","root","","konversi");
	
	if($con){
		
		$sql 	= "select * from user where nama='$user' and password='$pass'";
		$query 	= mysqli_query($con,$sql);

		if($query->num_rows> 0){
			$status = "1";
		}
		else{
			$status = "0";
		}

		echo $status;
	}

?>