<?php 
include 'header.php';
include 'sidebar.php';


$haber_id=$_GET['haber_id'];
$habersor=mysql_query("select * from haber where haber_id='$haber_id'");
$habercek=mysql_fetch_assoc($habersor); 

?>

<!-- İndex Göbek -->

<!-- /. NAV SIDE  -->

<head>

    <script src="//cdn.ckeditor.com/4.5.11/standard/ckeditor.js"></script>

</head>
<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">WhiteBlue Yazılım | Haber Düzenleme</h1>
                

                <?php

                if ($_GET['durum']=="ok") { ?>


                <h1 style="color:green;" class="page-subhead-line">Haber başarıyla düzenlendi... </h1>


                <?php } elseif ($_GET['durum']=="no") { ?>


                <h1 style="color:red;" class="page-subhead-line">Haber düzenlenemedi... </h1>


                <?php  } else {?>

                <h1 class="page-subhead-line">Düzenlemeyi yapıp kaydedin</h1>

                <?php   }

                ?>





            </div>
        </div>
        <!-- /. ROW  -->

        <form action="netting/islem.php" method="POST">

          <div class="col-md-12">

            <div  class="form-group col-md-3">

                <input style="width:100%" class="btn btn-success" type="submit" name="haberduzenle" value="Haber Düzenle">
            </div>


        </div>

        <input class="form-control" type="hidden" name="haber_id" value="<?php echo $habercek['haber_id'];?>">

        <div class="col-md-12">
            <div  class="form-group col-md-6">
                <label>Haber Adı</label>
                <input class="form-control" type="text" name="haber_ad" value="<?php echo $habercek['haber_ad'];?>" >
            </div>
        </div>


        <div class="col-md-12">
            <div  class="form-group col-md-12">
                <label>Haber İçerik</label>
                <textarea name="haber_detay" class="ckeditor"><?php echo $habercek['haber_detay'];?></textarea>
            </div>
        </div>

        <div class="col-md-12">
            <div  class="form-group col-md-6">
                <label>Haber Sıra</label>
                <input class="form-control" type="text" name="haber_id" value="<?php echo $habercek['haber_id'];?>" ">
            </div>
        </div>

                </select>
            </div>
        </div>






    </form>


</div>
<!-- /. PAGE INNER  -->
</div>
<!-- /. PAGE WRAPPER  -->



<?php include 'footer.php'; ?>