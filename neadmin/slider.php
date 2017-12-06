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
                <h1 class="page-head-line">WhiteBlue Yazılım | Slider Kontrol Paneli</h1>
                <h1 class="page-subhead-line">Sitenizdeki Slider Bölümünü Bu Bölümde Değiştirebilirsiniz </h1>
            </div>
            <div class="col-md-12">
                <a href="slider-ekle.php"><button style="width: 100px;" class="btn btn-success"'>Slider Ekle</button></a>
                <hr>
            </div>
            <div class="col-md-12">
               <!--    Hover Rows  -->
               <div class="panel panel-default">
                <div class="panel-heading">
                    Ekli Olan Sliderlar
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Slider Adı</th>
                                    <th>Slider Resmi</th>
                                    <th>Slider Link</th>
                                    <th>Slider Sıra</th>
                                    <th style="width: 40px;></th>
                                    <th style="width: 40px;></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                include 'neadmin/netting/baglan.php'; 

                                $slidersor=mysql_query("select * from slider");

                                while ($slidercek=mysql_fetch_assoc($slidersor)) {?>

                                    <tr>
                                        <td><?php echo $slidercek['slider_id']; ?></td>
                                        <td><?php echo $slidercek['slider_ad']; ?></td>
                                        <td>

                                            <img width="200" src="<?php echo $slidercek['slider_resimyol']; ?>">

                                            </td>
                                        <td><?php echo $slidercek['slider_url']; ?></td> 
                                        <td><?php echo $slidercek['slider_sira']; ?></td> 


                                        <td><a href="netting/islem.php?slider_id=<?php echo $slidercek['slider_id']; ?>&slidersil=ok"><button" class="btn btn-danger">Sil</button></a></td>
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