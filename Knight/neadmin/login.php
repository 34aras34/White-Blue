﻿<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Responsive Bootstrap Advance Admin Template</title>

  <!-- BOOTSTRAP STYLES-->
  <link href="assets/css/bootstrap.css" rel="stylesheet" />
  <!-- FONTAWESOME STYLES-->
  <link href="assets/css/font-awesome.css" rel="stylesheet" />
  <!-- GOOGLE FONTS-->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

  <style>
</style>
</head>
<body >
  <div class="container">
    <div class="row text-center " style="padding-top:100px;">
      <div class="col-md-12">
        <img src="assets/img/logom.png" />
      </div>
    </div>
    <div class="row ">

      <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">

        <div class="panel-body">
          <form action="netting/islem.php" method="POST">
            <hr />
            <center><h3>Giriş sayfası</h3>
              <br />
              <div class="form-group input-group">
                <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                <input type="text" name="login_kadi" class="form-control" placeholder="Kullanıcı adı" />
              </div>
              <div class="form-group input-group">
                <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                <input type="password" name="login_sifre" class="form-control"  placeholder="Şifre" />
              </div>
              <button style="width:100%" name="login" type="submit" class="btn btn-success ">Giriş yap</button>
            </form>
          </div>

        </div>


      </div>
    </div>

  </body>
  </html>
