<?php try {
	$db=new PDO("mysql:host=localhost;dbname=whitemmo_aras;charset=utf8",'whitemmo_blue','1478963aras');
	#echo "Başarıyla Veritabanına Bağlandınız";

} catch (PDOException $e) {
	echo $e->getMessage();
} ?>


