<?php

include("ayar.php");
ob_start();
session_start();

if (!isset($_SESSION["login"])) {
	header("location:girisanasayfa.php");
}
else{
	echo "<center>Admin sayfasina hosgeldiniz...! " .$_SESSION["kayitol"];
	echo "<a href=logout.php>Guvenli cikis</a></center>";
}
?>