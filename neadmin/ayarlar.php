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
                        <h1 class="page-head-line">WhiteBlue | Sitenizin Genel Ayarları </h1>

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
                                            <label>Faks Numaranız</label>
                                            <input class="form-control" type="text" name="ayar_fax" value="<?php echo $ayarcek[ayar_fax]; ?>">
                                            <p class="help-block">Sitenizin Faks Numarasını Bu Bölümden Değiştirebilirsiniz</p>
                                        </div>

                    <div class="form-group col-md-7">
                                            <label>Mail Adresiniz</label>
                                            <input class="form-control" type="text" name="ayar_mail" value="<?php echo $ayarcek[ayar_mail]; ?>">
                                            <p class="help-block">Sitenizin Mail Adresini Bu Bölümden Değiştirebilirsiniz</p>
                                        </div>

                    <div class="form-group col-md-7">
                                            <label>Adres</label>
                                            <input class="form-control" type="text" name="ayar_adres" value="<?php echo $ayarcek[ayar_adres]; ?>">
                                            <p class="help-block">Firmanızın Adresini Girin (İletisim Bölümünde Gösterilcek)</p>
                                        </div>                    

                    <div class="form-group col-md-9">
                                            <label>Footer Ayarı (ALT AÇIKLAMA KISMI)</label>
                                            <input class="form-control" type="text" name="ayar_footer" value="<?php echo $ayarcek[ayar_footer]; ?>">
                                            <p class="help-block">Sitenizin Footer'nı (ALT AÇIKLAMA KISMI) Bu Bölümden Değiştirebilirsiniz</p>
                                        </div>


                    <div class="form-group col-md-7">
                                            <label>Twitter Adresi</label>
                                            <input class="form-control" type="text" name="ayar_twitter" value="<?php echo $ayarcek[ayar_twitter]; ?>">
                                            <p class="help-block">Sitenizin Twitter Adresini Bu Bölümden Değiştirebilirsiniz</p>
                                        </div>


                    <div class="form-group col-md-7">
                                            <label>Facebook Adresi</label>
                                            <input class="form-control" type="text" name="ayar_facebook" value="<?php echo $ayarcek[ayar_facebook]; ?>">
                                            <p class="help-block">Sitenizin Facebook Adresini Bu Bölümden Değiştirebilirsiniz</p>
                                        </div>


                    <div class="form-group col-md-11">
                                            <label>Site KeyWords (Anahtar Kelime)</label>
                                            <input class="form-control" type="text" name="ayar_keywords" value="<?php echo $ayarcek[ayar_keywords]; ?>">
                                            <p class="help-block">Sitenizin KeyWord'ünü (Anahtar Kelime) Bu Bölümden Değiştirebilirsiniz</p>
                                        </div>


                    <div class="form-group col-md-11">
                                            <label>Site Açıklaması</label>
                                            <input class="form-control" type="text" name="ayar_description" value="<?php echo $ayarcek[ayar_description]; ?>">
                                            <p class="help-block">Sitenizin Açıklamasını Bu Bölümden Değiştirebilirsiniz</p>
                                        </div>





                    <div class="form-group col-md-8">
                                            <label>Site Başlığı</label>
                                            <input class="form-control" type="text" name="ayar_title" value="<?php echo $ayarcek[ayar_title]; ?>">
                                            <p class="help-block">Sitenizdeki Başlığı Bu Bölümden Değiştirebilirsiniz</p>
                                        </div>





                    <div class="form-group col-md-3">
                                            <label>Telefon Numaranız</label>
                                            <input class="form-control" type="text" name="ayar_telefon" value="<?php echo $ayarcek[ayar_telefon]; ?>">
                                            <p class="help-block">Sitenizdeki Telefon Numaranızı Bu Bölümden Değiştirebilirsiniz.</p>
                                        </div>

                    <div class="form-group col-md-12">
                            <label>Sayfa İçerik</label>
                           <textarea name="ayar_icerik" class="ckeditor"><?php echo $ayarcek[ayar_icerik]; ?></textarea>
                            <p class="help-block">Ana Sayfa İçerik Bölümü!</p>
                        </div> 


                    <div class="form-group col-md-12">
                            <label>Hakkımızda</label>
                           <textarea name="ayar_hakkimda" class="ckeditor"><?php echo $ayarcek[ayar_hakkimda]; ?></textarea>
                            <p class="help-block">Hakkımızda Bölümündeki Yer!</p>
                        </div>           
              

                    <div class="form-group col-md-12">
                                            <input class="btn btn-success" style="width:100%" type="submit" name="ayarkaydet" value="Ayarları Kaydet">
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