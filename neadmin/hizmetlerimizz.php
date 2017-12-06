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
                <h1 class="page-head-line">WhiteBlue Yazılım | Hizmet Ekleme</h1>
                <h1 class="page-subhead-line">Sitenizin Hizmetlerini Buradan Değiştirebilirsiniz </h1>
            </div>
            <div class="col-md-12">
                <a href="hizmet-ekle.php"><button style="width: 100px;" class="btn btn-success"'>Hizmet Ekle</button></a>
                <hr>
            </div>
            <div class="col-md-12">
             <!--    Hover Rows  -->
             <div class="panel panel-default">
                <div class="panel-heading">
                    Ekli Olan Hizmetler
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th style="width: 400px;">Hizmet Adı</th>
                                    <th>Hizmet Link</th>
                                    <th style="width: 40px;></th>
                                    <th style="width: 40px;></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                include 'neadmin/netting/baglan.php'; 

                                $hizmetsor=mysql_query("select * from hizmetlerimiz");

                                while ($hizmetcek=mysql_fetch_assoc($hizmetsor)) {?>

                                    <tr>
                                        <td><?php echo $hizmetcek['hizmet_id']; ?></td>
                                        <td><?php echo $hizmetcek['hizmet_ad']; ?></td>
                                        <td><?php echo $hizmetcek['hizmet_link']; ?></td>
                                        <td><a href="menu-duzenle.php?menu_id=<?php echo $menucek['menu_id']; ?>"><button class="btn btn-primary">Düzenle</button></a></td>
                                        <td><a href="netting/islem.php?menu_id=<?php echo $menucek['menu_id']; ?>&menusil=ok"><button" class="btn btn-danger">Sil</button></a></td>
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