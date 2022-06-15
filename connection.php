<?php 
$host ="localhost";
$user = "root";
$password = "";
$db ="demo";

$conn = mysqli_connect($host,$user,$password,$db);

if($conn){
    echo "successfully connected";
}else{
    echo "Could not connected";
}
?>