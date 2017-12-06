<?php include 'header.php'; ?>

<?php include 'sidebar.php'; ?>

<!-- İndex Göbek -->
<head>
    <script src="https://cdn.ckeditor.com/4.7.3/standard/ckeditor.js"></script>

</head>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Responsive Bootstrap Advance Admin Template</title>

    <!-- /. NAV SIDE  -->
    <div id="page-wrapper">
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-head-line">WhiteBlue | Haber Ekleme Sayfası</h1>
                    <hr>
                    <div>
                     <p style="color: red; font-size: 20px; text-align:  center;" >! Ekliyiceğiniz Haber Boyutu 200x200 Olmak Zorundadır !</p>
                 </div>
                 <hr>


                 <?php

                 if ($_GET['durum']=="ok") { ?>


                    <h1 style="color:green;" class="page-subhead-line">Haber başarıyla eklendi... </h1>


                    <?php } elseif ($_GET['durum']=="no") { ?>


                        <h1 style="color:red;" class="page-subhead-line">Haber eklenemedi... </h1>


                        <?php  } else {?>

                            <h1 class="page-subhead-line">Sitenize Haber ekliyorsunuz...</h1>

                            <?php   }

                            ?>





                        </div>
                    </div>
                    <!-- /. ROW  -->

                    <form action="netting/islem.php" method="POST" enctype="multipart/form-data">

                      <div class="col-md-12">

                        <div  class="form-group col-md-3">

                            <input style="width:100%" class="btn btn-success" type="submit" name="haberekle" value="Haber Kaydet">
                        </div>


                    </div>
                    <div class="col-md-12">


                        <div class="form-group">
                            <label class="control-label col-lg-4">Haber Resim</label>
                            <div class="">
                                <div class="fileupload fileupload-new" data-provides="fileupload">
                                    <span class="btn btn-file btn-default">
                                        <span class="fileupload-new">Resim Seç</span>
                                        <span class="fileupload-exists">Değiştir</span>
                                        <input type="file" name="haber_resimyol">
                                    </span>
                                    <span class="fileupload-preview"></span>
                                    <a href="#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none">×</a>
                                </div>
                            </div>
                        </div>



                    </div>


                    <div align="left" >
                        <div style="width: 100%;" class="form-group col-md-12">
                            <label>Haber Adı</label>
                            <input class="form-control" type="text" name="haber_ad" placeholder="Haber Adı Giriniz">
                        </div>
                    </div>


                    <div style=":100%" class="form-group col-md-12">
                        <label>Haber İçerik</label>
                        <textarea name="haber_detay" class="ckeditor"></textarea>
                        <p class="help-block">Sitenizin İçerik Eklemeyi Unutmayın !</p>
                    </div> 

                    <div class="col-md-12">
                        <div>
                            <label>Haber Sıra</label>
                            <input class="form-control" type="number" name="haber_id" placeholder="Slider Sırasını Giriniz" >
                        </div>
                        <br>

                    </div>

                     <div class="col-md-12">
                        <div>
                            <label>Haber Url</label>
                            <input class="form-control" type="text" name="haber_url" value="http://" >
                            <p class="help-block">Haber Yönlendirmek İstediğiniz URL (NOT: BOŞ BIRAKILABİLİR) !</p>
                        </div>
                    </div>







                </form>


            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->



        <?php include 'footer.php'; ?>