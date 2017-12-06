<?php
ob_start();
session_start(); 
error_reporting(0);
?>


<?php

$username="root";
$password="123aras123";
$sunucu="localhost";
$database="whiteblue";

$baglan=mysql_connect($sunucu,$username,$password);
mysql_query("SET NAMES UTF8");
if(!$baglan)
{
mysql_close($baglan);
echo  "Bağlantı Hatası";
 exit();
}


$db=mysql_select_db($database);
if(!$db) { echo "Veritabanı hatası:".mysql_error(); echo "<br>";

echo  "Bağlantı Hatası";
 

 exit();


  }

?>﻿
