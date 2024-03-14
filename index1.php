<?php
echo " Mysql work on the php server <br>";
$servername = "localhost:3325";
$username = "root";
$password = "";
$database = "mohit2";

$conn = mysqli_connect($servername, $username, $password, $database);
if(!$conn){
die("sorry we failed to connect: " . mysqli_connect_error());
}
else{

echo "The connection was succesfull<br>";
}

$sql = "create table phptable (sno int(20) not null auto_increment , name varchar(20) not null , dest varchar(8) not null , primary key(sno))";

$result = mysqli_query($conn , $sql);
if($result){
echo "table was make succesfully! ";
}
else{
echo "Table was not succesfully created !" . mysqli_error($conn);
}



?>
