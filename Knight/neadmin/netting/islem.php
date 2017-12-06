<?php
ob_start(); 
session_start();
?>
<?php 
include 'baglan.php';

if (isset($_POST['ayarkaydet'])) {
	
	$kaydet=$db->prepare("UPDATE ayarlar set
		ayar_title=:ayar_title,
		ayar_copright=:ayar_copright,
		ayar_telefon=:ayar_telefon,
		ayar_email=:ayar_email,
		ayar_acilis=:ayar_acilis
		
		
		WHERE ayar_id=0");
	

	$update=$kaydet->execute(array(
		'ayar_title' => $_POST['ayar_title'],
		'ayar_copright' => $_POST['ayar_copright'],
		'ayar_telefon' => $_POST['ayar_telefon'],
		'ayar_email' => $_POST['ayar_email'],
		'ayar_acilis' => $_POST['ayar_acilis']
		

		
		
		
		
	));

	

	if ($update) {
		
		//echo "kayıt başarılı";

		Header("Location:../ayarlar.php?durum=ok");


	} else {

		//echo "kayıt başarısız";
		Header("Location:../ayarlar.php?durum=no");

	}



}

if (isset($_POST['admingiris'])) {

	$kullanici_mail=$_POST['kullanici_mail'];
	$kullanici_password=md5($_POST['kullanici_password']);

	$kullanicisor=$db->prepare("SELECT * FROM kullanici where kullanici_mail=:mail and kullanici_password=:password and kullanici_yetki=:yetki");
	$kullanicisor->execute(array(
		'mail' => $kullanici_mail,
		'password' => $kullanici_password,
		'yetki' => 5
	));

	echo $say=$kullanicisor->rowCount();

	if ($say==1) {

		$_SESSION['kullanici_mail']=$kullanici_mail;
		header("Location:../index.php");
		exit;



	} else {

		header("Location:../login.php?durum=no");
		exit;
	}
	

}
if (isset($_POST['sosyalkaydet'])) {
	
	$kaydet=$db->prepare("UPDATE ayarlar set
		ayar_twitter=:ayar_twitter,
		ayar_facebook=:ayar_facebook,
		ayar_instagram=:ayar_instagram
		
		WHERE ayar_id=0");
	

	$update=$kaydet->execute(array(
		'ayar_twitter' => $_POST['ayar_twitter'],
		'ayar_facebook' => $_POST['ayar_facebook'],
		'ayar_instagram' => $_POST['ayar_instagram']

		
		
		
		
	));

	

	if ($update) {
		
		//echo "kayıt başarılı";

		Header("Location:../sosyal.php?durum=ok");


	} else {

		//echo "kayıt başarısız";
		Header("Location:../sosyal.php?durum=no");

	}



}
if (isset($_POST['seokaydet'])) {
	
	$kaydet=$db->prepare("UPDATE ayarlar set
		ayar_keywords=:ayar_keywords,
		ayar_desc=:ayar_desc
		
		
		WHERE ayar_id=0");
	

	$update=$kaydet->execute(array(
		'ayar_keywords' => $_POST['ayar_keywords'],
		'ayar_desc' => $_POST['ayar_desc'],


		
		
		
		
	));

	

	if ($update) {
		
		//echo "kayıt başarılı";

		Header("Location:../seo.php?durum=ok");


	} else {

		//echo "kayıt başarısız";
		Header("Location:../seo.php?durum=no");

	}



}
if (isset($_POST['icerikkaydet'])) {
	
	$kaydet=$db->prepare("UPDATE ayarlar set
		ayar_hakk=:ayar_hakk
		
		
		
		WHERE ayar_id=0");
	

	$update=$kaydet->execute(array(
		'ayar_hakk' => $_POST['ayar_hakk']
		


		
		
		
		
	));

	

	if ($update) {
		
		//echo "kayıt başarılı";

		Header("Location:../site-index.php?durum=ok");


	} else {

		//echo "kayıt başarısız";
		Header("Location:../site-index.php?durum=no");

	}



}
if($_GET['menusil']=="ok") {
	

	$sil=$db->prepare("DELETE from yorumlar where yorum_id=:id");
	$kontrol=$sil->execute(array(
		'id' => $_GET['yorum_id']
	));

	if ($kontrol) {
		
		//echo "kayıt başarılı";

		Header("Location:../yorum.php?durum=ok");
		exit;

	} else {

		//echo "kayıt başarısız";
		Header("Location:../yorum.php?durum=no");
		exit;
	}


}
if (isset($_POST['yorumduzenle'])) {
	
	$yorum_id=$_POST['yorum_id'];

	$kaydet=$db->prepare("UPDATE yorumlar set
		yorum_isim=:yorum_isim,
		yorum_yorum=:yorum_yorum
		where yorum_id={$_POST['yorum_id']}
		");

	$insert=$kaydet->execute(array(

		'yorum_isim' => $_POST['yorum_isim'],
		'yorum_yorum' => $_POST['yorum_yorum']
	));

	

	if ($insert) {
		
		//echo "kayıt başarılı";

		Header("Location:../yorum-duzenle.php?durum=ok&yorum_id=$yorum_id");
		exit;

	} else {

		//echo "kayıt başarısız";
		Header("Location:../yorum-duzenle.php?durum=no&yorum_id=$yorum_id");
		exit;
	}



}
if (isset($_POST['yorumkaydet'])) {
	


	$kaydet=$db->prepare("INSERT into yorumlar set
		yorum_isim=:yorum_isim,
		yorum_yorum=:yorum_yorum
		
		");

	$insert=$kaydet->execute(array(
		'yorum_isim' => $_POST['yorum_isim'],
		'yorum_yorum' => $_POST['yorum_yorum']
	));

	

	if ($insert) {
		
		//echo "kayıt başarılı";

		Header("Location:../menu-ekle.php?durum=ok");
		exit;

	} else {

		//echo "kayıt başarısız";
		Header("Location:../menu-ekle.php?durum=no");
		exit;
	}



}
if (isset($_POST['statikkaydet'])) {
	
	$kaydet=$db->prepare("UPDATE ayarlar set
		ayar_cup=:ayar_cup,
		ayar_projects=:ayar_projects,
		ayar_happy=:ayar_happy,
		ayar_work=:ayar_work
		
		
		
		WHERE ayar_id=0");
	

	$update=$kaydet->execute(array(
		'ayar_cup' => $_POST['ayar_cup'],
		'ayar_projects' => $_POST['ayar_projects'],
		'ayar_happy' => $_POST['ayar_happy'],
		'ayar_work' => $_POST['ayar_work']
		


		
		
		
		
	));

	

	if ($update) {
		
		//echo "kayıt başarılı";

		Header("Location:../statik.php?durum=ok");


	} else {

		//echo "kayıt başarısız";
		Header("Location:../statik.php?durum=no");

	}



}
if (isset($_POST['calismakaydet'])) {
	
	$uploads_dir = '../../neadmin/uploads';
	@$tmp_name = $_FILES['calisma_resimyol']["tmp_name"];
	@$name = $_FILES['calisma_resimyol']["name"];
	//resmin isminin benzersiz olması
	$benzersizsayi1=rand(20000,32000);
	$benzersizsayi2=rand(20000,32000);
	$benzersizsayi3=rand(20000,32000);
	$benzersizsayi4=rand(20000,32000);	
	$benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
	$refimgyol=substr($uploads_dir, 6)."/".$benzersizad.$name;

	@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");


	$kaydet=$db->prepare("INSERT into calisma set
		calisma_resimyol=:calisma_resimyol,
		calisma_title=:calisma_title
		
		");

	$insert=$kaydet->execute(array(
		'calisma_resimyol' => $refimgyol,
		'calisma_title' => $_POST['calisma_title']
	));

	

	if ($insert) {
		
		//echo "kayıt başarılı";

		Header("Location:../calisma.php?durum=ok");
		

	} else {

		//echo "kayıt başarısız";
		Header("Location:../calisma.php?durum=no");
		
	}



}


?>




