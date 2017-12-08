<?php 

include"baglan.php";

if(isset($_POST['loggin'])){

	$login_kadi = $_POST['login_kadi'];
	$login_sifre = $_POST['login_sifre'];

	if($login_sifre && $login_kadi){

		$ara = $db->prepare("SELECT count(*) from login where login_kadi = '$login_kadi', login_sifre = '$login_sifre' ");
		$saya = $ara->execute(array('login_kadi' => $login_kadi, 'login_sifre' => $login_sifre));
		$say = $saya->rowCount();

		if($say > 0){

			$_SESSION['login_kadi'] = $login_kadi;

			header("Location:../index.php");
		}
		else {
			header("Location:../login.php?login=no");
		}
	}

}



 ?>