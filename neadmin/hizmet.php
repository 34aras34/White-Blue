<?php include 'header.php'; ?>

<?php include 'sidebar.php'; ?>
<!-- /. NAV SIDE  -->

<?php 

$hizmet_id=$_GET['hizmet_id'];
$hizmetsor=mysql_query("select * from hizmetlerimiz where hizmet_id='$hizmet_id'");
$hizmetcek=mysql_fetch_assoc($hizmetsor);

?>

<head>
    <script src="https://cdn.ckeditor.com/4.7.3/standard/ckeditor.js"></script>

</head>
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">WhiteBlue | Sitenizin Hizmetlerimiz Ayarları </h1>

                         <?php
                                            if(@$_GET['durum'] == "basarili" ){ ?>

                                                <div class="alert alert-success">
                                                    Güncelleme işlemi başarıyla gerçekleşti. <a href="../tr/index.php" class="alert-link">Siteyi Görüntüle</a>.
                                                </div>

                                            <?php }elseif(@$_GET['durum'] == "basarisiz"){ ?>

                                                <div class="alert alert-danger">
                                                    Güncelleme gerçekleşmedi, değişiklik yapmamış olabilirsiniz. <a href="../tr/index.php" class="alert-link">Siteyi Görüntüle</a>.
                                                </div>

                                            <?php }else {?>




                                            <?php } ?>﻿

                    </div>
                </div>
                <!-- /. ROW  -->

                <form action="netting/islem.php" method="POST">
                    <div class="form-group col-md-7">
                                            <label>Hizmet Adı</label>
                                            <input class="form-control" type="text" name="hizmet_ad" value="<?php echo $hizmetcek[hizmet_ad]; ?>">
                                            <p class="help-block">Sitenizin Hizmetlerimiz Bölümünü Buradan Değiştirebilirsiniz</p>
                                        </div>


                    <div class="form-group col-md-12">
                            <label>Hizmet Açıklaması</label>
                           <textarea name="hizmet_aciklama" class="ckeditor"><?php echo $hizmetcek[hizmet_aciklama]; ?></textarea>
                            <p class="help-block">Hizmet Açıklaması</p>
                        </div> 
       
              

                    <div class="form-group col-md-12">
                                            <input class="btn btn-success" style="width:100%" type="submit" name="hizmetkaydet" value="Ayarları Kaydet">
                                        </div>                    

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