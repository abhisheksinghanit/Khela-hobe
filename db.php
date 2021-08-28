<?php
$server= "127.0.0.1";
$user= "root";
$password="";
$dbname="project";
$con = mysqli_connect($server, $user, $password, $dbname);
if(!$con){
    die("Connection Error" . mysqli_connect_error());
}
?>