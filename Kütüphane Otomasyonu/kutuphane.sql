-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 18 May 2022, 17:26:06
-- Sunucu sürümü: 5.7.36
-- PHP Sürümü: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `kutuphane`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `k_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `k_adi` varchar(255) COLLATE utf8mb4_turkish_ci NOT NULL,
  `k_sifre` varchar(255) COLLATE utf8mb4_turkish_ci NOT NULL,
  PRIMARY KEY (`k_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `admin`
--

INSERT INTO `admin` (`k_id`, `k_adi`, `k_sifre`) VALUES
(1, 'root@root', '123456'),
(2, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `istekoneri`
--

DROP TABLE IF EXISTS `istekoneri`;
CREATE TABLE IF NOT EXISTS `istekoneri` (
  `istek_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `eposta` varchar(255) COLLATE utf8mb4_turkish_ci NOT NULL,
  `konu` varchar(255) COLLATE utf8mb4_turkish_ci NOT NULL,
  `icerik` varchar(255) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `adi` varchar(225) COLLATE utf8mb4_turkish_ci NOT NULL,
  PRIMARY KEY (`istek_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `istekoneri`
--

INSERT INTO `istekoneri` (`istek_id`, `eposta`, `konu`, `icerik`, `adi`) VALUES
(1, 'keremkaplan633@gmail.com', 'Merhaba', 'Deneme Yazısı Bana Ulaşırmısınız acaba ?', 'Kerem'),
(2, 'keremkaplan633@gmail.com', 'Merhaba', 'Merhaba', 'Kerem'),
(3, 'keremkaplan633@gmail.com', 'Merhaba', '6849r347/5*235/4*23/4*23/523/4/*82*348/*-234/-2*34-234Ã©\'!+)?==*', 'Kerem');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kitap`
--

DROP TABLE IF EXISTS `kitap`;
CREATE TABLE IF NOT EXISTS `kitap` (
  `kitap_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `kitap_adi` varchar(255) COLLATE utf8mb4_turkish_ci NOT NULL,
  `kitap_yazari` varchar(255) COLLATE utf8mb4_turkish_ci NOT NULL,
  `kitap_aciklama` longtext COLLATE utf8mb4_turkish_ci,
  `kitap_resim` text COLLATE utf8mb4_turkish_ci,
  `kitap_durumu` varchar(225) COLLATE utf8mb4_turkish_ci NOT NULL,
  PRIMARY KEY (`kitap_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `kitap`
--

INSERT INTO `kitap` (`kitap_id`, `kitap_adi`, `kitap_yazari`, `kitap_aciklama`, `kitap_resim`, `kitap_durumu`) VALUES
(2, ' SIFIRDAN Ä°LERÄ° SEVÄ°YEYE PHP WEB PROGRAMLAMA', 'Emrah YÃœKSEL, KODLAB YAYIN', 'MesleÄŸiniz farklÄ± olabilir, Web Programlama konusunda hiÃ§bir bilginiz olmayabilir, daha Ã¶nce deneyip vazgeÃ§miÅŸ olabilirsiniz... Bu kitap, size PHP ile Web GeliÅŸtirme dÃ¼nyasÄ±nÄ±n kapÄ±larÄ±nÄ± aÃ§arak, hayal ettiÄŸiniz projeleri kodlamanÄ±z iÃ§in gerekli olan tÃ¼m bilgi, uygulama ve yÃ¶nlendirmeleri iÃ§ermektedir. Kitapta, asÄ±l amacÄ±mÄ±z PHP programlama dilini Ã¶ÄŸrenmek olsa da PHP ile web tabanlÄ± projeler iÃ§erisinde olacaÄŸÄ±mÄ±z iÃ§in Temel HTML ve Temel CSS bÃ¶lÃ¼mlerine de yer verilmiÅŸtir.\r\n\r\nVerdiÄŸim tÃ¼m eÄŸitimlerde Ã¶ÄŸrencilerime tavsiyem bir â€œBaÅŸucu Defterleriâ€nin olmasÄ± ve Ã¶nemli gÃ¶rÃ¼p hatÄ±rlamak isteyeceklerini bu deftere not etmeleriydi. Bu kitap aslÄ±nda o baÅŸucu defterinin hazÄ±rlanmÄ±ÅŸ halidir. Birlikte baÅŸarmak iÃ§in hadi hemen baÅŸlayalÄ±m...\r\n\r\n\r\n\r\nâ€¢ BaÅŸlarken Ä°htiyacÄ±nÄ±z Olanlar\r\n\r\nâ€¢ Lokal Sunucu ve EditÃ¶r Kurulumu\r\n\r\nâ€¢ Temel HTML\r\n\r\nâ€¢ Temel CSS\r\n\r\nâ€¢ PHP GiriÅŸ\r\n\r\nâ€¢ DeÄŸiÅŸkenler ve OperatÃ¶rler\r\n\r\nâ€¢ Diziler\r\n\r\nâ€¢ Denetim YapÄ±larÄ±\r\n\r\nâ€¢ HTML Formlar ile Ã‡alÄ±ÅŸma\r\n\r\nâ€¢ Fonksiyonlar\r\n\r\nâ€¢ Zaman Ä°ÅŸlemleri\r\n\r\nâ€¢ Hata Ä°stisna YÃ¶netimi\r\n\r\nâ€¢ DÃ¼zenli Ä°fadeler\r\n\r\nâ€¢ Dosya Sistemi\r\n\r\nâ€¢ MySQL VeritabanÄ±\r\n\r\nâ€¢ PDO\r\n\r\nâ€¢ Bootstrap & CRUD Ä°ÅŸlemleri Proje\r\n\r\nâ€¢ OOP\r\n\r\nâ€¢ cURL\r\n\r\nâ€¢ PHP Simple HTML Dom Parser\r\n\r\nâ€¢ Filtreleme ve DoÄŸrulama\r\n\r\nâ€¢ Åžifreleme Veri GÃ¼venliÄŸi\r\n\r\nâ€¢ URL Ä°ÅŸlevleri\r\n\r\nâ€¢ GÃ¼venlik\r\n\r\nâ€¢ SEF .htaccess YapÄ±landÄ±rmasÄ±\r\n\r\nâ€¢ PHPMailer ile E-Posta', 'images/kitap_resimleri/content (1).jpg', 'Mevcut DeÄŸil'),
(3, 'Åžeker PortakalÄ±', 'JosÃ© Mauro de Vasconcelos', 'Åžeker PortakalÄ±, BrezilyalÄ± yazar JosÃ© Mauro de Vasconcelos\'un tÃ¼m dÃ¼nyayÄ± etkisi altÄ±na almayÄ± baÅŸaran 1968 tarihli dram ve Ã§ocukluk romanÄ±dÄ±r. Brezilya\'nÄ±n Minas Gerais bÃ¶lgesinde yaÅŸayan fakir bir ailenin beÅŸ yaÅŸÄ±ndaki oÄŸlu olan ve hayal gÃ¼cÃ¼ Ã§ok geliÅŸmiÅŸ olan Zeze adlÄ± bir Ã§ocuÄŸun baÅŸÄ±ndan geÃ§enleri konu edinir.', 'images/kitap_resimleri/indir.jpg', 'Mevcut');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kitap_bagisi`
--

DROP TABLE IF EXISTS `kitap_bagisi`;
CREATE TABLE IF NOT EXISTS `kitap_bagisi` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `bagisyapanadi` varchar(225) COLLATE utf8mb4_turkish_ci NOT NULL,
  `bagisyapaneposta` varchar(225) COLLATE utf8mb4_turkish_ci NOT NULL,
  `bagiskitapadi` varchar(225) COLLATE utf8mb4_turkish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `kitap_bagisi`
--

INSERT INTO `kitap_bagisi` (`id`, `bagisyapanadi`, `bagisyapaneposta`, `bagiskitapadi`) VALUES
(1, 'Kerem Kaplan', 'keremkaplan633@gmail.com', 'Milenaya Mektuplar');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kitap_grscks`
--

DROP TABLE IF EXISTS `kitap_grscks`;
CREATE TABLE IF NOT EXISTS `kitap_grscks` (
  `alan_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `aldigi_kitap` varchar(225) COLLATE utf8mb4_turkish_ci NOT NULL,
  `verecegi_tarih` varchar(225) COLLATE utf8mb4_turkish_ci NOT NULL,
  `aldigi_tarih` varchar(225) COLLATE utf8mb4_turkish_ci NOT NULL,
  PRIMARY KEY (`alan_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `kitap_grscks`
--

INSERT INTO `kitap_grscks` (`alan_id`, `aldigi_kitap`, `verecegi_tarih`, `aldigi_tarih`) VALUES
(1, 'Milena ya Mektuplar', '01.02.2022', '22.01.2022'),
(6, 'Milena ya Mektuplar', '01.02.2022', '22.01.2022');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `uyeistegi`
--

DROP TABLE IF EXISTS `uyeistegi`;
CREATE TABLE IF NOT EXISTS `uyeistegi` (
  `uyeistegi_eposta` varchar(225) COLLATE utf8mb4_turkish_ci NOT NULL,
  `istek_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`istek_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `uyeistegi`
--

INSERT INTO `uyeistegi` (`uyeistegi_eposta`, `istek_id`) VALUES
('keremkaplan633@gmail.com', 1),
('keremkaplan633@gmail.com', 2),
('rukensahin@gmail.com', 3);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `uyeler`
--

DROP TABLE IF EXISTS `uyeler`;
CREATE TABLE IF NOT EXISTS `uyeler` (
  `uye_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uye_adi` varchar(225) COLLATE utf8mb4_turkish_ci NOT NULL,
  `uye_soyadi` varchar(225) COLLATE utf8mb4_turkish_ci NOT NULL,
  `uye_posta` varchar(225) COLLATE utf8mb4_turkish_ci NOT NULL,
  `uye_durumu` varchar(225) COLLATE utf8mb4_turkish_ci NOT NULL,
  `uye_ceza` varchar(225) COLLATE utf8mb4_turkish_ci NOT NULL,
  PRIMARY KEY (`uye_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `uyeler`
--

INSERT INTO `uyeler` (`uye_id`, `uye_adi`, `uye_soyadi`, `uye_posta`, `uye_durumu`, `uye_ceza`) VALUES
(1, 'Kerem', 'Kaplan', 'keremkaplan633@gmail.com', 'pasif', 'Ceza Yok'),
(2, 'Mehmet', 'DemircioÄŸlu', 'mehmetdemircioglu@gmail.com', 'Ä°naktif', '0'),
(3, 'can', 'Demir', 'mehmetdemircioglua@gmail.com', 'Aktif', '0'),
(4, 'Caner', 'Aslan', 'caneraslan@hotmail.com', 'Ä°naktif', '0'),
(5, 'Eren', 'Demir', 'erendemir@gmail.com', 'Aktif', '0'),
(6, 'Ruken', 'Åžahin', 'rukensahin@gmail.com', 'Aktif', '0');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
