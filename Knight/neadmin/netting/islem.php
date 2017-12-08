<?php
ob_start(); 
session_start();
?>
<?php 

include"baglan.php";

if (isset($_POST['login'])) {

	$login_kadi=$_POST['login_kadi'];
	$login_sifre=md5($_POST['login_sifre']);

	$kullanicisor=$db->prepare("SELECT * FROM login where login_kadi=:kadi and login_sifre=:password");
	$kullanicisor->execute(array(
		'kadi' => $login_kadi,
		'password' => $login_sifre
	));

	echo $say=$kullanicisor->rowCount();

	if ($say==1) {

		$_SESSION['login_kadi']=$login_kadi;
		header("Location:../index.php");
		



	} else {

		header("Location:../login.php?durum=no");
		
	}
	

}





 ?>