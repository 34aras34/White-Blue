<?php  
include '/netting/baglan.php'; # bunu unutmuşuz :D salaklık bende aq :D
include '/netting/islem.php'; # bunu unutmuşuz :D salaklık bende aq :D

$ayarsor=$db->prepare("select * from ayarlar where ayar_id=:id");
$ayarsor->execute(array('id'=>0));
$ayarcek=$ayarsor->fetch(PDO::FETCH_ASSOC);
?>
<?php 
ob_start();
session_start();
?>
<!--SİDEBAR-- >
    <!-- /. NAV TOP  -->
    <nav class="navbar-default navbar-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav" id="main-menu">
                <li>
                    <div class="user-img-div">
                        <img src="assets/img/user.png" class="img-thumbnail" />

                        <div class="inner-text">
                            Hoşgeldin <?php echo $_SESSION['kullanici_mail']; {
                                    # code...
                            }  ?>
                            <br />
                            <small>Last Login : 2 Weeks Ago </small>
                        </div>
                    </div>

                </li>


                <li>
                    <a class="active-menu" href="index.php"><i class="fa fa-home "></i>Ana Sayfa</a>
                </li>

                <li>
                        <a href="#"><i class="fa fa-yelp "></i>Ayarlar <span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                            <li>
                                <a href="ayarlar.php"><i class="fa fa-wrench"></i>Site Genel Ayarları</a>
                            </li>
                            <li>
                                <a href="site-index.php"><i class="fa fa-flash "></i>Site İndex Ayarları</a>
                            </li>
                             <li>
                                <a href="seo.php"><i class="fa fa-key "></i>SEO Ayarları</a>
                            </li>
                            <li>
                                <a href="statik.php"><i class="fa fa-key "></i>İstatistik</a>
                            </li>
                             <li>
                                <a href="sosyal.php"><i class="fa fa-send "></i>Sosyal Ağ Ayarları</a>
                            </li>
                            
                            
                           
                        </ul>
                    </li>

                <li>
                    <a class="" href="yorum.php"><i class="fa fa-bars "></i>Müşteri Yorumları</a>
                </li>

                <li>
                    <a class="" href="calisma.php"><i class="fa fa-bars "></i>Çalışmalar</a>
                </li>
                    
            </ul>

        </div>

    </nav>