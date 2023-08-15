<?php
if (isset($_POST['gonder']))
{
	
	include_once'sıteparcala/includes/dbh.inc.php';

	$Cinsiyet=mysqli_real_escape_string($conn,$POST['Cinsiyet']);
	$yas=mysqli_real_escape_string($conn,$POST['yas']);
	$menuyetermi=mysqli_real_escape_string($conn,$POST['menuyetermi']);
	$eklemekistedikleriniz=mysqli_real_escape_string($conn,$POST['eklemekistedikleriniz']);
	$eklemekistedikleriniz=mysqli_real_escape_string($conn,$POST['eklemekistedikleriniz']);
	$hamburgeryemek=mysqli_real_escape_string($conn,$POST['hamburgeryemek']);
	$yemekporsiyonlari=mysqli_real_escape_string($conn,$POST['yemekporsiyonlari']);
	$yemekkalitesi=mysqli_real_escape_string($conn,$POST['yemekkalitesi']);
	$fizikikapasite=mysqli_real_escape_string($conn,$POST['fizikikapasite']);
	$calisanmemnuniyeti=mysqli_real_escape_string($conn,$POST['calisanmemnuniyeti']);
	$temizlik=mysqli_real_escape_string($conn,$POST['temizlik']);
	$paketservis=mysqli_real_escape_string($conn,$POST['paketservis']);
	$sunum=mysqli_real_escape_string($conn,$POST['sunum']);
	$yiyecekmemnun=mysqli_real_escape_string($conn,$POST['yiyecekmemnun']);
	$isiklandirma=mysqli_real_escape_string($conn,$POST['isiklandirma']);
	$eklemekistedikleriniz=mysqli_real_escape_string($conn,$POST['eklemekistedikleriniz']);

	if (empty($Cinsiyet)|| empty($yas)|| empty($menuyetermi)|| empty($eklemekistedikleriniz)|| empty($eklemekistedikleriniz)|| empty($hamburgeryemek)|| empty($yemekporsiyonlari)|| empty($yemekkalitesi)|| empty($fizikikapasite)|| 
		empty($calisanmemnuniyeti)|| empty($temizlik)|| empty($paketservis)|| empty($sunum)|| empty($yiyecekmemnun)|| 
		empty($isiklandirma)|| empty($eklemekistedikleriniz)) 
	{
		echo "lütfen tüm soruları eksiksiz doldurunuz.";
		header("Location: anketanasayfa.php?empty")	
		exit();
	}
	else
	{
		$sql=" INSERT INTO anketanasayfa(Cinsiyet,yas,menuyetermi,eklemekistedikleriniz,eklemekistedikleriniz,
		hamburgeryemek,yemekporsiyonlari,yemekkalitesi,fizikikapasite,calisanmemnuniyeti,temizlik,paketservis,sunum,
		yiyecekmemnun,isiklandirma,eklemekistedikleriniz,text) 
		VALUES ('$Cinsiyet','$yas','$menuyetermi','$eklemekistedikleriniz',
		'$eklemekistedikleriniz','$hamburgeryemek','$yemekporsiyonlari','$yemekkalitesi','$fizikikapasite','$calisanmemnuniyeti','$temizlik','$paketservis','$sunum',
		'$yiyecekmemnun','$isiklandirma','$eklemekistedikleriniz');";
			mysql_query($conn,$sql);
			header("Location: anketanasayfa.php?send=success");
			exit();
	}
}
else
{
	echo "butonda veri mevcut değildir.";
}
?>