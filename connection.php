<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "affiliate";

$conn = mysqli_connect($servername,$username,$password,$dbname);
if($conn){
    //echo "Connection Done";
}else{
    echo "Connection Failed".mysqli_connect_error();
}
?>
