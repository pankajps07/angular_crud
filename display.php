<?php 

$connect=mysqli_connect("localhost","root","","angular_crud");

$output=array();
$sql="SELECT * FROM ngcrud";
$res=mysqli_query($connect,$sql);
if(mysqli_num_rows($res) > 0)
{
	while($row=mysqli_fetch_array($res))
	{
		$output[]=$row;
	}
echo json_encode($output);
}


 ?>