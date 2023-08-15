<?php
$host="localhost";
$db="phpsite";
$user="root";
$pass="";
$conn=mysqli_connect($host,$user,$pass) or die("Mysql Baglanamadi");

mysqli_select_db($conn,$db) or die("Veritabanina Baglanamadi");
mysqli_set_charset('latin5',$conn);

?>