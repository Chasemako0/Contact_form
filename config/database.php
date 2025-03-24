<?php

$servername="localhost";
$username="root";
$password="";
$dbname="college_data";

$conn=mysqli_connect($servername,$username,$password,$dbname);

if($conn->connect_error){
    die("Connection Failed".$conn->connect_error);
}else{
//    echo "Connection Successful";
}