<?php
header('Access-Control-Allow-Origin: *');
$connect = mysqli_connect("localhost","root","","konversi");
$result = mysqli_query($connect, "SELECT * FROM datauang");
$data = array();
// if(!$result){
// 	printf("Error: %s\n", mysqli_error($connect));
// }
while ($row = mysqli_fetch_array($result)){
	$data[] = $row;
}

print json_encode($data);
?>