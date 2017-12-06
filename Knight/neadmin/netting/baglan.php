whitemmo_blue<?php try {
	$db=new PDO("mysql:host=localhost;dbname=whitemmo_blue;charset=utf8", '
whitemmo_bluee','123aras123');
	#echo "Başarıyla Veritabanına Bağlandınız";

} catch (PDOException $e) {
	echo $e->getMessage();
} ?>


