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
                <h1 class="page-head-line">WhiteBlue Yazılım | Sayfalar</h1>
                <h1 class="page-subhead-line">Sitenizin Sitenizin Sayfalarını Bu Bölümden Yönetebilirsiniz </h1>
            </div>
            <div class="col-md-12">
                <a href="sayfa-ekle.php"><button style="width: 100px;" class="btn btn-success"'>Sayfa Ekle</button></a>
                <hr>
            </div>
            <div class="col-md-12">
               <!--    Hover Rows  -->
               <div class="panel panel-default">
                <div class="panel-heading">
                    Mevcut Sayfalar
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Sayfa Ad</th>
                                    <th>Sayfa Tarih</th>
                                    <th>Ana Sayfada Göster</th>
                                    <th style="width: 40px;></th>
                                    <th style="width: 40px;></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                include 'neadmin/netting/baglan.php'; 

                                $sayfasor=mysql_query("select * from sayfalar");

                                while ($sayfacek=mysql_fetch_assoc($sayfasor)) {?>

                                    <tr>
                                        <td><?php echo $sayfacek['sayfa_id']; ?></td>
                                        <td><?php echo $sayfacek['sayfa_ad']; ?></td>
                                        <td><?php echo $sayfacek['sayfa_tarih']; ?></td>
                                        <td><?php 

                                        if ($sayfacek['sayfa_anasayfa']==0) {

                                            echo "Hayır";

                                        } elseif ($sayfacek['sayfa_anasayfa']==1) {

                                            echo "Evet";

                                        }


                                        ?></td>
                                        
                                        <td><a href="sayfa-duzenle.php?sayfa_id=<?php echo $sayfacek['sayfa_id']; ?>"><button class="btn btn-primary">Düzenle</button></a></td>
                                        <td><a href="netting/islem.php?sayfa_id=<?php echo $sayfacek['sayfa_id']; ?>&sayfasil=ok"><button" class="btn btn-danger">Sil</button></a></td>
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