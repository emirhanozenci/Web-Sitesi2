<?php
if (isset($_POST["submit"])) {
	
	include'dbh.inc.php';
	$kullanıcıadı=mysqli_real_escape_string($conn,$_POST['kullanıcıadı']);
	$psw=mysqli_real_escape_string($conn,$_POST['psw']);
	if (empty($kullanıcıadı) || empty($psw)) {
		header("location: ../girisanasayfa.php?login=error");
		exit();
	}
	else{
		$sql="SELECT * FROM kayitol WHERE kullaniciadi='$kullanıcıadı'";
		$result=mysqli_query($conn,$sql);
		$resultCheck=mysqli_num_rows($result);
			if (resultCheck<1) {
				header("location: ../girisanasayfa.php?login=empty");
				exit();
			}
			else{
				if ($row=mysqli_fetch_assoc($result)) {
					
					$hashedPswCheck=password_verify($psw,$row['sifre']);
					if ($hashedPswCheck==false) {
						header("location: ../girisanasayfa.php?login=error");
						exit();
					}
					else if ($hashedPswCheck==true) {
						$_SESSION['id']=$row['id'];
						$_SESSION['email']=$row['email'];
						$_SESSION['kullaniciadi']=$row['kullaniciadi'];
						$_SESSION['sifre']=$row['sifre'];
						$_SESSION['sifretekrargir']=$row['sifretekrargir'];
						header("location: ../girisanasayfa.php?login=success");
						exit();
					}
				}
			}
	}
}else{
	header("location: ../girisanasayfa.php?login=error");
	exit();
}

?>