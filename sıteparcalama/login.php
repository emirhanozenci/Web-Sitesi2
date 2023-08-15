<?php

include("ayar.php");
ob_start();
session_start();

$uname = $_POST["uname"];
$psw = $_POST["psw"];

$sql_check = mysqli_query("select * from kayitol where kullaniciadi='".$uname."' and sifre='".$psw."' ") or die(mysqli_error());

if (mysqli_num_rows($sql_check)) {
	$_SESSION["login"] = "true";
	$_SESSION["text"] = $uname;
	$_SESSION["password"] = $psw;
	header("locotion:admin.php");
}


ob_end_flush();

?>