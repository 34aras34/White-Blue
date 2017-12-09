<?php include 'header.php';
include "sidebar.php"; ?>

<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">Genel Ayarlar Paneline Hoşgeldin <?php echo $ayarcek[login_kadi]; ?></h1>
                <h1 class="page-subhead-line">Bu Panelden Sitenizin Genel Ayarlarını Değiştirebilirsiniz. </h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
               <div class="panel panel-info">
                <div class="panel-heading">
                   Genel Ayarlar
               </div>
               <div class="panel-body">
                <form role="form">
                    <div class="form-group">
                        <label>1. Bolme</label>
                        <input class="form-control" type="text">
                        <p class="help-block">1. Help</p>
                    </div>
                    <div class="form-group">
                        <label>2. Bolme</label>
                        <input class="form-control" type="text">
                        <p class="help-block">2. Help</p>
                    </div>
                    <center><button type="submit" style="width: 50%" class="btn btn-info">Ayarla</button>

                </form>
            </div>
        </div>
    </div>
</div>
</div>
<!-- /. PAGE INNER  -->
</div>
<!-- /. PAGE WRAPPER  -->
</div>
<!-- /. WRAPPER  -->

<?php include 'footer.php'; ?>