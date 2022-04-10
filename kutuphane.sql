-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 09 Nis 2022, 14:55:21
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
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `admin`
--

INSERT INTO `admin` (`k_id`, `k_adi`, `k_sifre`) VALUES
(1, 'root', '123456');

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
  PRIMARY KEY (`istek_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

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
  PRIMARY KEY (`kitap_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
