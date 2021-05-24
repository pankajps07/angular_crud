<?php 
$con=mysqli_connect("localhost","root","","angular_crud");

$data=json_decode(file_get_contents("php://input"));
$email=$data->email;
$pass=$data->pass;
$output=array();
$qu="SELECT * FROM adminlogin where email='$email' AND pass='$pass' ";

$res=mysqli_query($con,$qu);

if(mysqli_num_rows($res) > 0){


$output[]=1;

}
else
{
	
$output[]=2;
}

echo json_encode($output);

 ?>

