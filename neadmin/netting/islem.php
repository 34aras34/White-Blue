<?php
ob_start(); 
session_start();
?>
<?php 
include 'baglan.php';

if(isset($_POST['ayarkaydet'])) {

	$id=0;

	$ayarkaydet=mysql_query("update ayarlar set ayar_title='".$_POST['ayar_title']."',ayar_fax='".$_POST['ayar_fax']."',ayar_facebook='".$_POST['ayar_facebook']."',ayar_mail='".$_POST['ayar_mail']."',ayar_footer='".$_POST['ayar_footer']."',ayar_keywords='".$_POST['ayar_keywords']."',ayar_description='".$_POST['ayar_description']."',ayar_telefon='".$_POST['ayar_telefon']."',ayar_icerik='".$_POST['ayar_icerik']."',ayar_adres='".$_POST['ayar_adres']."',ayar_hakkimda='".$_POST['ayar_hakkimda']."' where ayar_id='$id'");

	if(mysql_affected_rows())

	{
		header("Location:../ayarlar.php?durum=basarili");

	}
	else {

		header("Location:../ayarlar.php?durum=basarisiz");

	}
}

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


if (isset($_POST['menukaydet'])) {


	$menuekle=mysql_query("insert into menuler (menu_ad,menu_link) VALUES ('".$_POST['menu_ad']."','".$_POST['menu_link']."')");



	if (mysql_affected_rows()) {

		header("Location:../menu-ekle.php?durum=ok");
	}
	else {

		header("Location:../menu-ekle.php?durum=no");

	}

}

if (isset($_POST['hizmetkaydett'])) {


	$hizmetekle=mysql_query("insert into hizmetlerimiz (hizmet_ad,hizmet_link) VALUES ('".$_POST['hizmet_ad']."','".$_POST['hizmet_link']."')");



	if (mysql_affected_rows()) {

		header("Location:../hizmet-ekle.php?durum=ok");
	}
	else {

		header("Location:../hizmet-ekle.php?durum=no");

	}

}

if (isset($_POST['hizmetkaydet'])) {


	$menuekle=mysql_query("insert into hizmetlerimiz (hizmet_ad,hizmet_link) VALUES ('".$_POST['hizmet_ad']."','".$_POST['hizmet_aciklama']."')");



	if (mysql_affected_rows()) {

		header("Location:../menu-ekle.php?durum=ok");
	}
	else {

		header("Location:../menu-ekle.php?durum=no");

	}

}

if (isset($_POST['sayfakaydet'])) {


	$zaman=date('Y.m.d H:1');


	$sayfaekle=mysql_query("insert into sayfalar (sayfa_ad,sayfa_sira,sayfa_icerik,sayfa_anasayfa,sayfa_tarih) VALUES ('".$_POST['sayfa_ad']."','".$_POST['sayfa_sira']."','".$_POST['sayfa_icerik']."','".$_POST['sayfa_anasayfa']."','".$zaman."')");



	if (mysql_affected_rows()) {

		header("Location:../sayfalar.php?durum=ok");
	}
	else {

		header("Location:../sayfalar.php?durum=no");

	}

}

if (isset($_POST['menuduzenle'])) {

	$menu_id=$_POST['menu_id'];
	

	$menuduzenle=mysql_query("update menuler set menu_ad='".$_POST['menu_ad']."',menu_link='".$_POST['menu_link']."' where menu_id='$menu_id'");

	if (mysql_affected_rows())

	{
		header("Location:../menu-duzenle.php?durum=ok");

	}
	
	else {

		header("Location:../menu-duzenle.php?durum=no");

	}
}﻿

?>

<?php  
if($_GET['menusil']=="ok") {
	
	$menusil=mysql_query("delete from menuler where menu_id='".$_GET['menu_id']."'");

	if (mysql_affected_rows()) 
	{
		

		header('Location:../menuler.php?durum=ok');

	} else {

		header('Location:../menuler.php?durum=no');
	}
}

if($_GET['habersil']=="ok") {
	
	$menusil=mysql_query("delete from haber where haber_id='".$_GET['haber_id']."'");

	if (mysql_affected_rows()) 
	{
		

		header('Location:../haberler.php?durum=ok');

	} else {

		header('Location:../haberler.php?durum=no');
	}
}

if(isset($_POST['sliderekle'])) {


	$uploads_dir = '../uploads';

	@$tmp_name = $_FILES['slidegorsel']["tmp_name"];

	@$name = $_FILES['slidegorsel']["name"];

	$benzersizsayi1=rand(20000,32000);

	$benzersizsayi2=rand(20000,32000);

	$benzersizsayi3=rand(20000,32000);

	$benzersizsayi4=rand(20000,32000);

	$benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;

	$refimgyol=substr($uploads_dir, 3)."/".$benzersizad.$name;

	@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");


	$sliderekle=mysql_query("insert into slider (slider_resimyol,slider_url,slider_sira,slider_ad) 
		VALUES ('".$refimgyol."','".$_POST['slider_url']."','".$_POST['slider_sira']."','".$_POST['slider_ad']."')");

	
	
	if(mysql_affected_rows()) 



		{ header("Location:../slider-ekle.php?durum=ok");}

	else {

		header("Location:../slider-ekle.php?durum=no");

	}

}

if(isset($_POST['haberekle'])) {


	$uploads_dir = '../uploads/haberler';

	@$tmp_name = $_FILES['haber_resimyol']["tmp_name"];

	@$name = $_FILES['haber_resimyol']["name"];

	$benzersizsayi1=rand(20000,32000);

	$benzersizsayi2=rand(20000,32000);

	$benzersizsayi3=rand(20000,32000);

	$benzersizsayi4=rand(20000,32000);

	$benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;

	$refimgyol=substr($uploads_dir, 3)."/".$benzersizad.$name;

	@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");

	$haber_zaman=date('Y.m.d H:1');

	$haberekle=mysql_query("insert into haber (haber_resimyol,haber_url,haber_id,haber_ad,haber_detay,haber_zaman) 
		VALUES ('".$refimgyol."','".$_POST['haber_url']."','".$_POST['haber_id']."','".$_POST['haber_ad']."','".$_POST['haber_detay']."','".$_POST['haber_zaman']."')");

	
	
	if(mysql_affected_rows()) 



		{ header("Location:../haber-ekle.php?durum=ok");}

	else {

		header("Location:../haber-ekle.php?durum=no");

	}

}

if($_GET['slidersil']=="ok") {
	
	$slidersil=mysql_query("delete from slider where slider_id='".$_GET['slider_id']."'");

	if (mysql_affected_rows()) 
	{
		

		header('Location:../slider.php?durum=ok');

	} else {

		header('Location:../slider.php?durum=no');
	}
}

if($_GET['sayfasil']=="ok") { 

	$sayfasil=mysql_query("delete from sayfalar where sayfa_id='".$_GET['sayfa_id']."'");

	if(mysql_affected_rows()) 
	{ 

		header('Location:../sayfalar.php?durum=ok');

	} else {

		header('Location:../sayfalar.php?durum=no');


	}

}

if(isset($_POST['sayfaduzenle'])) {


	$sayfa_id=$_POST['sayfa_id'];
	

	$sayfaduzenle=mysql_query("update sayfalar set sayfa_ad='".$_POST['sayfa_ad']."',sayfa_icerik='".$_POST['sayfa_icerik']."',sayfa_sira='".$_POST['sayfa_sira']."',sayfa_anasayfa='".$_POST['sayfa_anasayfa']."' where sayfa_id='$sayfa_id'");




	if(mysql_affected_rows()) 



	{ 

		header("Location:../sayfa-duzenle.php?durum=ok&sayfa_id=$sayfa_id");

	}

	else {

		header("Location:../sayfa-duzenle.php?durum=no&sayfa_id=$sayfa_id");

	}

}

if (isset($_POST['haberduzenle'])) {

	$haber_id=$_POST['haber_id'];
	

	$haberduzenle=mysql_query("update haber set haber_ad='".$_POST['haber_ad']."',haber_detay='".$_POST['haber_detay']."' where haber_id='$haber_id'");

	if (mysql_affected_rows())

	{
		header("Location:../haber-duzenle.php?durum=ok");

	}
	
	else {

		header("Location:../haber-duzenle.php?durum=no");

	}
}﻿

?>




