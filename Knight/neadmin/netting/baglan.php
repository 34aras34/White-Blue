<?php try {
	$db=new PDO("mysql:host=localhost;dbname=blue;charset=utf8", '
whitemmo_bluee','123aras123');
	#echo "Başarıyla Veritabanına Bağlandınız";

} catch (PDOException $e) {
	echo $e->getMessage();
} ?>


