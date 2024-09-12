<?php 
$hostname = "localhost";
$username = 'root';
$password = "";
$database = "students";
$conn= new mysqli($hostname,$username,$password,$database);
if($conn){
    echo "";
}
else{
    echo "not connected".$conn->connect_error;
}
?>