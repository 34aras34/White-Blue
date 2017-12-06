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
                            Hoşgeldin <?php echo $_SESSION['admin_kadi']; {
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
                    <a class="" href="ayarlar.php"><i class="fa fa-wrench "></i>Ayarlar</a>
                </li>

                <li>
                    <a class="" href="menuler.php"><i class="fa fa-bars  "></i>Menüler</a>
                </li>

                <li>
                    <a class="" href="slider.php"><i class="fa fa-sliders "></i>Slider</a>
                </li>
                <li>
                    <a class="" href="sayfalar.php"><i class="fa fa-paperclip "></i>Sayfalar</a>
                </li>
                <li>
                    <a class="" href="haberler.php"><i class="fa fa-newspaper-o "></i>Haberler</a>
                </li>
                <li>
                    <a class="" href="hizmetlerimizz.php"><i class="fa fa-info-circle "></i>Hizmetlerimiz</a>
                </li>
            </ul>

        </div>

    </nav>