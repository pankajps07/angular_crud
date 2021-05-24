<?php 
$db_name="mysql:host=localhost;dbname=angular_crud";
$user="root";
$pass="";

$con=new PDO($db_name,$user,$pass);

$data=json_decode(file_get_contents("php://input"));
$btname=$data->btname;

$name=$data->name;
$task=$data->task;
if ($btname=="Insert") {



	$query=$con->query("INSERT INTO ngcrud(name,task) values('$name','$task')");
	if($query){

		echo "Data Inserted";

	}
	else{
		echo "Error";
	}
}


if ($btname=="Update")
 {
	$id=$data->id;
	$query=$con->query("UPDATE ngcrud SET name='$name', task='$task' WHERE id='$id'");
	if($query)
	{
		echo 'Data Updated..';
	}
	else{
			echo "Error";
	}
}



?>
