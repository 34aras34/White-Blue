<?php  
include '/netting/baglan.php'; # bunu unutmuşuz :D salaklık bende aq :D
include '/netting/islem.php'; # bunu unutmuşuz :D salaklık bende aq :D



# kullanıcı sorgu

$kullanicisor=$db->prepare("SELECT * FROM kullanici where kullanici_mail=:mail");
$kullanicisor->execute(array(
    'mail' => $_SESSION['kullanici_mail']
));
$say=$kullanicisor->rowCount();
$kullanicicek=$kullanicisor->fetch(PDO::FETCH_ASSOC);

if ($say==0) {

    Header("Location:login.php?durum=izinsiz");
    exit;

}
?>
<?php 
ob_start();
putenv("TZ=Europe/Istanbul");
session_start();
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>WhiteBLUE & Yazılım Admin Panel v1</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/bootstrap-fileupload.min.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!--CUSTOM BASIC STYLES-->
    <link href="assets/css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                
                <a class="navbar-brand" href="index.html">WhiteBLUE & Yazılım<br><b style="font-size:10px">Kaliteli Hizmet</b></a>
                </div>

                <div class="header-right">

                
                <a href="logout.php" class="btn btn-danger" title="Logout"><i class="fa fa-exclamation-circle"></i>Güvenli Çıkış</a>

                </div>
                </nav>