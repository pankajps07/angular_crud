<?php 

$connect=mysqli_connect("localhost","root","","angular_crud");
$data=json_decode(file_get_contents("php://input"));
 
	
$id=$data->id;
$query="DELETE FROM ngcrud WHERE id='$id'";
if(mysqli_query($connect,$query)){
	echo "Data Deleted";
}
else{
	echo "Error";
}



?>