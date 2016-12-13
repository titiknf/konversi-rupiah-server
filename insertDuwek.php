<?php

	header("Access-Control-Allow-Origin:*");
	header("Access-Control-Allow-Method:PUT,GET,DELETE,POST,OPTIONS");
	header("Access-Control-Allow-Headers:Content-type,x-xsrf-token");
	

$con = mysqli_connect("localhost","root","","konversi");

$data = json_decode(file_get_contents("php://input"));//decode itu biar convert data dari yang array agar bisa di kasih pointer

if(isset($data)){
	$id = mysqli_real_escape_string($con,$data->id);
	$MataUang = mysqli_real_escape_string($con,$data->MataUang);
	$nilai = mysqli_real_escape_string($con,$data->nilai);
	$query = mysqli_query($con,"SELECT * from datauang where id='$id'");
		if($query->num_rows > 0){
			$status = 2;//jka dia primary key

		}
		else{
			$query = mysqli_query($con,"insert into datauang (id, MataUang, nilai)
			values('$id','$MataUang','$nilai')");

			if($query){
				$status = 1;
			}
			else{
				$status = 0;
			}
		}
		echo $status;
}
?>