<?php
ob_start(); 
session_start();
?>
<?php 
include 'baglan.php';

if(!isset($_SESSION['login'])) {

	$admin_kadi=$_POST['admin_kadi'];
	$admin_sifre=md5($_POST['admin_sifre']);

	if ($admin_kadi && $admin_sifre) {

		$sorgula=mysql_query("select * from admin where admin_kadi='$admin_kadi' and admin_sifre='$admin_sifre'");
		$verisay=mysql_num_rows($sorgula);
		if($verisay> 0 ){
			$_SESSION['admin_kadi']=$admin_kadi;
			
			header('Location:../index.php');
		} else {


			header('Location:../login.php?login=no');

		}

	}

}



?>




