-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost
-- Üretim Zamanı: 04 Haz 2022, 20:59:48
-- Sunucu sürümü: 10.1.38-MariaDB
-- PHP Sürümü: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `projectdb`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `prisons`
--

CREATE TABLE `prisons` (
  `pname` char(50) NOT NULL,
  `population` int(11) DEFAULT NULL,
  `location` char(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `prisons`
--

INSERT INTO `prisons` (`pname`, `population`, `location`) VALUES
('a', 1, 'abc'),
('Develi Ceza Infaz Kurumu', 600, 'Kayseri'),
('Erzurum Ceza Infaz Kurumu', 1000, 'Erzurum'),
('Eskisehir Ceza Infaz Kurumu', 1000, 'Eskisehir'),
('Gaziantep Ceza Infaz Kurumu', 1200, 'Gaziantep'),
('Kalecik Ceza Infaz Kurumu', 2000, 'Ankara'),
('Kartal Ceza Infaz Kurumu', 700, 'Istanbul');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `prisons`
--
ALTER TABLE `prisons`
  ADD PRIMARY KEY (`pname`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
