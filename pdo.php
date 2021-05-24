<?php 

$db_name="mysql:host=localhost;dbname=angular_crud";
$user="root";
$pass="";

$conn=new PDO($db_name,$user,$pass);

$sql=$conn->query("select * from ngcrud");

while($row=$sql->fetch()){

echo $row['name'];
echo "<br>";

echo $row['pass'];
echo "<br>";

}




 ?>