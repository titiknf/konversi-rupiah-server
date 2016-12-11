<?php 

	header('Access-Control-Allow-Origin:*');
	
	$db 	= "konversi";
	$host 	= "localhost";
	$user  	= "root";
	$pass 	= "";
	
	$connect = mysqli_connect($host,$user,$pass,$db);
	
	if($connect){
		
		$utf = "set Names 'utf8';";
		mysqli_query($connect,$utf);
		$query = "select * from datauang";
		$result = mysqli_query($connect,$query);
		
		$data = array();
		
		while($row=$result->fetch_assoc()){
			$data[] = $row;
		}
		echo json_encode($data);
	}

?>