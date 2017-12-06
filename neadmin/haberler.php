<?php 
ob_start();
session_start();
?>
<?php 
include 'header.php'; 

include 'sidebar.php'; ?>

?>
<?php
if(!isset($_SESSION['admin_kadi'])) {
    header("Location:login.php");
}
?>

<!-- /. NAV SIDE  -->
<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">WhiteBlue Yazılım | Haber Kontrol Paneli</h1>
                <h1 class="page-subhead-line">Sitenizdeki Haber Bölümünü Bu Bölümde Değiştirebilirsiniz </h1>
            </div>
            <div class="col-md-12">
                <a href="haber-ekle.php"><button style="width: 100px;" class="btn btn-success"'>Haber Ekle</button></a>
                <hr>
            </div>
            <div class="col-md-12">
             <!--    Hover Rows  -->
             <div class="panel panel-default">
                <div class="panel-heading">
                    Ekli Olan Haberler
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Haber Ad</th>
                                    <th>Haber Hit</th>
                                    <th>Haber URL</th>
                                    <th>Haber Resim</th>
                                    <th style="width: 40px;></th>
                                    <th style="width: 40px;></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                include 'neadmin/netting/baglan.php'; 

                                $habersor=mysql_query("select * from haber");

                                while ($habercek=mysql_fetch_assoc($habersor)) {?>

                                    <tr>
                                        <td style="width: 150px;"><?php echo $habercek['haber_id']; ?></td>
                                        <td style="width: 150px;"><?php echo $habercek['haber_ad']; ?></td>
                                        <td style="width: 150px;"><?php echo $habercek['haber_hit']; ?></td> 
                                        <td style="width: 150px;"><?php echo $habercek['haber_url']; ?></td> 
                                        <td>

                                            <img width="200" src="<?php echo $habercek['haber_resimyol']; ?>">

                                            </td>

                                        <td style="width: 40px;"><a href="haber-duzenle.php?haber_id=<?php echo $habercek['haber_id']; ?>&habersil=ok"><button" class="btn btn-primary">Düzenle</button></a></td>
                                        <td style="width: 40px;"><a href="netting/islem.php?haber_id=<?php echo $habercek['haber_id']; ?>&habersil=ok"><button" class="btn btn-danger">Sil</button></a></td>
                                    </tr>

                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- End  Hover Rows  -->
            </div>
        </div>
        <!-- /. ROW  -->
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-info">
                    WhiteBlue Admin Panelinin Tüm Hakları Saklıdır Kullanılması Dahilinde Hukuk-i İşlem Başlatılır | Copright 13.11.2017 
                    <br />
                    Yapımcı : Aras Doğukan Yiğit <a href="http://whitemmo.com/" target="_blank">WhiteBlue Yazılım</a>
                </div>
            </div>
        </div>

    </div>





    <?php include 'footer.php'; ?>