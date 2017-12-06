<?php try {
	$db=new PDO("mysql:host=localhost;dbname=bluee;charset=utf8", '
whitemmo_blueee','123aras123');
	#echo "Başarıyla Veritabanına Bağlandınız";

} catch (PDOException $e) {
	echo $e->getMessage();
} ?>


