<?php
if (isset($POST['submit'])) {
	include_once'dbh.inc.php';

	$email=mysqli_real_escape_string($conn,$_POST['email']);
	$kullanıcıadı=mysqli_real_escape_string($conn,$_POST['kullanıcıadı']);
	$psw=mysqli_real_escape_string($conn,$_POST['psw']);
	$pswrepeat=mysqli_real_escape_string($conn,$_POST['pswrepeat']);

	if (empty($kullanıcıadı)||empty($email)||empty($psw)||empty($pswrepeat)) {
		header("Location: ../kayıtanasayfa.php?signup=empty");
		exit();
	}else{
		if (!preg_match("/^[a-zA-Z]*$/",$kullanıcıadı)) {
			header("Location: ../kayıtanasayfa.php?signup=invalid");
			exit();
		}else{
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				header("Location: ../kayıtanasayfa.php?signup=email")
				exit();
			}else{

				$sql="SELECT * FROM users WHERE user_kullanıcıadı='$kullanıcıadı'";
				$result=mysqli_query($conn,$sql);
				$resulCheck=mysqli_num_rows($result);
				if ($resulCheck>0) {
					header("Location: ../kayıtanasayfa.php?signup=usertaken");
					exit();
				}else{
					$sql="INSERT INTO users(user_email,user_kullanıcıadı,user_psw,user_repeatpsw) VALUES ('$email','$kullanıcıadı','$psw','$pswrepeat');";
					mysqli_query($conn,$sql);
					header("Llocation: ../kayıtanasayfa.php?signup=success");
						exit();
				}

			}
		}
	}
}
else{
	header("Location: ../kayıtanasayfa.php");
	exit();
}

?>