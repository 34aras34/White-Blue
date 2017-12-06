<?php include 'header.php'; ?>

<?php include 'sidebar.php'; ?>
<!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">WhiteBlue | Hizmet Ekle </h1>

                         <?php
                                            if(@$_GET['durum'] == "ok" ){ ?>

                                                <h1 style="color: green;" class="page-subhead-line"><b>Hizmet Başarıyla Eklendi</b></h1>

                                            <?php } elseif(@$_GET['durum'] == "no"){ ?>

                                                <h1 style="color: red;" class="page-subhead-line"><b>Hizmet Ekleme Başarısız Lütfen Bilgileri Kontrol Edin !</b></h1>

                                            <?php }else {?>




                                            <?php } ?>﻿

                    </div>
                </div>
                <!-- /. ROW  -->

                <form action="netting/islem.php" method="POST">
                    <div class="form-group col-md-7">
                                            <label>Hizmet Adı</label>
                                            <input class="form-control" type="text" name="hizmet_ad" placeholder="Hizmet Adı Giriniz" ">
                                            <p class="help-block">Sitenize Menü Eklemek İçin Lütfen Bir İsim Girin !</p>
                                        </div>

                    <div class="form-group col-md-7">
                                            <label>Hizmet Linki</label>
                                            <input class="form-control" type="text" name="hizmet_link" value="http://" ">
                                            <p class="help-block">Sitenizin Menü Yönlendirmesi İçin Lütfen Link Girin !</p>
                                        </div>                    

                    

                    <div class="form-group col-md-12">
                                            <input class="btn btn-success" style="width:100%" type="submit" name="hizmetkaydett" value="Hizmet Oluştur">
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