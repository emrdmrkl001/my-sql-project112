-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 12 Haz 2024, 17:47:41
-- Sunucu sürümü: 5.7.9
-- PHP Sürümü: 5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `database`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanicilar`
--

DROP TABLE IF EXISTS `kullanicilar`;
CREATE TABLE IF NOT EXISTS `kullanicilar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `isim` varchar(50) NOT NULL,
  `soyisim` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `parola` varchar(15) NOT NULL,
  `dtarih` date NOT NULL,
  `cinsiyet` varchar(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `kullanicilar`
--

INSERT INTO `kullanicilar` (`id`, `isim`, `soyisim`, `email`, `parola`, `dtarih`, `cinsiyet`) VALUES
(1, 'Sadık', 'Yücel', 'siwaslee@gmail.com', 'tavukdoner', '1999-01-01', 'Erkek'),
(2, 'Osman', 'Tunar', 'tunarosman@gmail.com', 'babayim', '1999-01-01', 'Erkek'),
(3, 'Berat', 'Can', 'canberat@gmail.com', 'aynenknk', '1999-01-01', 'Erkek'),
(4, 'Emre', 'Demirkol', 'emredemirkol@gmail.com', 'beypazari', '1999-01-01', 'Erkek'),
(5, 'Fatih', 'Çolak', 'colakfatih@gmail.com', 'olukludag', '1999-01-01', 'Erkek'),
(6, 'Uğur', 'Çakır', 'ugurcakir@gmail.com', '01230456', '1999-01-01', 'Erkek'),
(7, 'Zafarbek', 'Jumaniyazov', 'zaferjum@gmail.com', 'lethalcomp', '1999-01-01', 'Erkek');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
