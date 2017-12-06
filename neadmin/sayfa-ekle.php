<?php include 'header.php'; ?>

<?php include 'sidebar.php'; ?>
<!-- /. NAV SIDE  -->

<head>
    <script src="https://cdn.ckeditor.com/4.7.3/standard/ckeditor.js"></script>

</head>
<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">WhiteBlue | Sayfa Ekliyorsunuz </h1>

                <?php
                if(@$_GET['durum'] == "ok" ){ ?>

                    <h1 style="color: green;" class="page-subhead-line"><b>Sayfa Başarıyla Eklendi</b></h1>

                    <?php } elseif(@$_GET['durum'] == "no"){ ?>

                        <h1 style="color: red;" class="page-subhead-line"><b>Sayfa Ekleme Başarısız Lütfen Bilgileri Kontrol Edin !</b></h1>

                        <?php }else {?>




                            <?php } ?>﻿

                        </div>
                    </div>
                    <!-- /. ROW  -->

                    <form action="netting/islem.php" method="POST">
                        <div class="form-group col-md-7">
                            <label>Sayfa Adı</label>
                            <input class="form-control" type="text" name="sayfa_ad" placeholder="Sayfa Adı Giriniz" ">
                            <p class="help-block">Sitenize Sayfa Eklemek İçin Lütfen Bir İsim Girin !</p>
                        </div>

                        <div class="form-group col-md-7">
                            <label>Sayfa Sira</label>
                            <input class="form-control" type="number" name="sayfa_sira" placeholder="1" ">
                            <p class="help-block">Sitenizin Sayfa Sirasını Belirlemek İçin Lütfen Sayı Giriniz !</p>
                        </div>  

                        <div class="form-group col-md-12">
                            <label>Sayfa İçerik</label>
                           <textarea name="sayfa_icerik" class="ckeditor"></textarea>
                            <p class="help-block">Sitenizin İçerik Eklemeyi Unutmayın !</p>
                        </div>      

                        <div class="form-group col-md-7">
                            <label>Ana Sayfada Gösterilsinmi ?</label>
                            <select name="sayfa_anasayfa" class="form-control">
                                <option value="0">Evet</option>
                                <option value="1">Hayır</option>
                            </select>
                        </div>                                                                           



                        <div class="form-group col-md-12">
                            <input class="btn btn-success" style="width:100%" type="submit" name="sayfakaydet" value="Sayfa Oluştur">
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