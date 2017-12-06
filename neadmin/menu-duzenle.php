<?php 

include 'header.php'; 
include 'sidebar.php'; 


$menu_id=$_GET['menu_id'];
$menusor=mysql_query("select * from menuler where menu_id='$menu_id'");
$menucek=mysql_fetch_assoc($menusor);



?>
<!-- /. NAV SIDE  -->
<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">WhiteBlue | Menü Düzenleme Sayfası </h1>

                <?php
                if(@$_GET['durum'] == "ok" ){ ?>

                    <h1 style="color: green;" class="page-subhead-line"><b>Menü Başarıyla Düzenlendi</b></h1>

                    <?php } elseif(@$_GET['durum'] == "no"){ ?>

                        <h1 style="color: red;" class="page-subhead-line"><b>Menü Düzenleme Başarısız Lütfen Bilgileri Kontrol Edin !</b></h1>

                        <?php }else {?>




                            <?php } ?>﻿

                        </div>
                    </div>
                    <!-- /. ROW  -->

                    <form action="netting/islem.php" method="POST">
                        <div class="form-group col-md-7">
                            <label>Menü Adı</label>
                            <input class="form-control" type="text" name="menu_ad" value="<?php echo $menucek['menu_ad']; ?>" ">
                            <p class="help-block">Sitenize Menü Eklemek İçin Lütfen Bir İsim Girin !</p>
                        </div>

                        <div class="form-group col-md-7">
                            <label>Menü Linki</label>
                            <input class="form-control" type="text" name="menu_link" value="<?php echo $menucek['menu_link']; ?>" ">
                            <p class="help-block">Sitenizin Menü Yönlendirmesi İçin Lütfen Link Girin !</p>
                        </div>                    

                        

                        <div class="form-group col-md-12">
                            <input class="btn btn-success" style="width:100%" type="submit" name="menuduzenle" value="Menü Kaydet">
                        </div>  


                        <input type="hidden" name="menu_id" value="<?php echo $menucek['menu_id'];?>">                  

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