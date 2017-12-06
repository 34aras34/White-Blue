-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost
-- Üretim Zamanı: 06 Ara 2017, 23:01:38
-- Sunucu sürümü: 5.7.17-log
-- PHP Sürümü: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `blue`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ayarlar`
--

CREATE TABLE `ayarlar` (
  `ayar_id` int(11) NOT NULL,
  `ayar_logo` varchar(6000) NOT NULL,
  `ayar_telefon` varchar(500) NOT NULL,
  `ayar_email` varchar(3000) NOT NULL,
  `ayar_acilis` varchar(1000) NOT NULL,
  `ayar_facebook` varchar(1000) NOT NULL,
  `ayar_twitter` varchar(1000) NOT NULL,
  `ayar_instagram` varchar(1000) NOT NULL,
  `ayar_copright` varchar(1000) NOT NULL,
  `ayar_title` varchar(2000) NOT NULL,
  `ayar_keywords` varchar(5000) NOT NULL,
  `ayar_desc` varchar(150) NOT NULL,
  `ayar_baslik` varchar(50) NOT NULL,
  `ayar_aciklama` varchar(50) NOT NULL,
  `ayar_hakk` text NOT NULL,
  `ayar_cup` varchar(10) NOT NULL,
  `ayar_projects` varchar(24) NOT NULL,
  `ayar_happy` varchar(10) NOT NULL,
  `ayar_work` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `ayarlar`
--

INSERT INTO `ayarlar` (`ayar_id`, `ayar_logo`, `ayar_telefon`, `ayar_email`, `ayar_acilis`, `ayar_facebook`, `ayar_twitter`, `ayar_instagram`, `ayar_copright`, `ayar_title`, `ayar_keywords`, `ayar_desc`, `ayar_baslik`, `ayar_aciklama`, `ayar_hakk`, `ayar_cup`, `ayar_projects`, `ayar_happy`, `ayar_work`) VALUES
(0, '', '0533 392 6708', 'info@whitemmo.com', '7/24 Canlı Destek Hizmeti', 'https://facebook.com', 'https://twitter.com', 'https://instagram.com/_cicek_abbas_', '© Copyright 2017 White&Blue Yazılım', 'White&Blue Website Developer ', 'whiteblue,yazılım,firma', 'White&Blue Yazılım Firması', 'White&Blue Yazılım', '', '<p>White&amp;Blue Yazılım 2016&nbsp;Hizmet Vermeye Başlamış Bir Site Yazılımları Geliştirme Firmasıdır. Siz Hayal Edin Biz Tasarlıyalım Felsefesiyle<br />\r\n&Ccedil;ıktıgımız Bu Yolda&nbsp; , Hayatımızın Her B&ouml;l&uuml;m&uuml;ne Giren Teknolojinin Gerek Kişisel Gerek Ticari İşlevselliği &Ouml;nderliğinde İş , Sanat , Medya&nbsp;<br />\r\nKişisel Blog , E-Ticaret , Teknoloji D&uuml;nyasına A&ccedil;ılacak Her Kapıda Atacağınız Adımda Yanınızdayız.<br />\r\n&nbsp;</p>\r\n', '60', '4', '24', '180');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `calisma`
--

CREATE TABLE `calisma` (
  `calisma_id` int(11) NOT NULL,
  `calisma_resimyol` varchar(500) NOT NULL,
  `calisma_title` varchar(500) NOT NULL,
  `calisma_calisma` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `calisma`
--

INSERT INTO `calisma` (`calisma_id`, `calisma_resimyol`, `calisma_title`, `calisma_calisma`) VALUES
(14, 'neadmin/uploads/236232533527179293042.jpg', 'Genel', '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanici`
--

CREATE TABLE `kullanici` (
  `kullanici_id` int(11) NOT NULL,
  `kullanici_zaman` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `kullanici_resim` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_bakiye` int(11) NOT NULL,
  `kullanici_tc` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_ad` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_mail` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_gsm` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_password` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_adsoyad` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_adres` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_il` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_ilce` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_unvan` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_yetki` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_durum` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kullanici`
--

INSERT INTO `kullanici` (`kullanici_id`, `kullanici_zaman`, `kullanici_resim`, `kullanici_bakiye`, `kullanici_tc`, `kullanici_ad`, `kullanici_mail`, `kullanici_gsm`, `kullanici_password`, `kullanici_adsoyad`, `kullanici_adres`, `kullanici_il`, `kullanici_ilce`, `kullanici_unvan`, `kullanici_yetki`, `kullanici_durum`) VALUES
(1, '2017-12-04 16:32:35', '', 0, '123', '123', 'info@demo.com', '5555555555555', 'c0dc0beebc1dcf44857bb5bbadab3fab', 'demo demo', 'demo ', 'demo', 'demo', 'admin', '5', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `urunler`
--

CREATE TABLE `urunler` (
  `urun_id` int(11) NOT NULL,
  `urun_ad` varchar(150) NOT NULL,
  `urun_fiyat` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `urunler`
--

INSERT INTO `urunler` (`urun_id`, `urun_ad`, `urun_fiyat`) VALUES
(1, 'instagram 10 k takipçi', '50'),
(2, 'instagram 20 k takipçi', '100');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yorumlar`
--

CREATE TABLE `yorumlar` (
  `yorum_id` int(11) NOT NULL,
  `yorum_isim` varchar(100) NOT NULL,
  `yorum_yorum` varchar(500) NOT NULL,
  `yorum_resimyol` varchar(3000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `yorumlar`
--

INSERT INTO `yorumlar` (`yorum_id`, `yorum_isim`, `yorum_yorum`, `yorum_resimyol`) VALUES
(1, 'Çiğdem Bulut', 'Kaliteli Hizmet Ve Kaliteli Projeler Tercih Edilmeli.', ''),
(2, 'Mustafa Çetin', 'Kaliteli Bir Firma Herkese Tavsiye Ederim', '');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `ayarlar`
--
ALTER TABLE `ayarlar`
  ADD PRIMARY KEY (`ayar_id`);

--
-- Tablo için indeksler `calisma`
--
ALTER TABLE `calisma`
  ADD PRIMARY KEY (`calisma_id`);

--
-- Tablo için indeksler `kullanici`
--
ALTER TABLE `kullanici`
  ADD PRIMARY KEY (`kullanici_id`);

--
-- Tablo için indeksler `urunler`
--
ALTER TABLE `urunler`
  ADD PRIMARY KEY (`urun_id`);

--
-- Tablo için indeksler `yorumlar`
--
ALTER TABLE `yorumlar`
  ADD PRIMARY KEY (`yorum_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `calisma`
--
ALTER TABLE `calisma`
  MODIFY `calisma_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- Tablo için AUTO_INCREMENT değeri `kullanici`
--
ALTER TABLE `kullanici`
  MODIFY `kullanici_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Tablo için AUTO_INCREMENT değeri `urunler`
--
ALTER TABLE `urunler`
  MODIFY `urun_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Tablo için AUTO_INCREMENT değeri `yorumlar`
--
ALTER TABLE `yorumlar`
  MODIFY `yorum_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
