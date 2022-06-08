-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 06 Haz 2022, 18:50:44
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
-- Tablo için tablo yapısı `cells`
--

CREATE TABLE `cells` (
  `cell_no` int(11) NOT NULL,
  `capacity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `cells`
--

INSERT INTO `cells` (`cell_no`, `capacity`) VALUES
(1, 1),
(3, 1),
(22, 7),
(37, 4),
(76, 10),
(94, 4);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `contain`
--

CREATE TABLE `contain` (
  `pname` char(50) NOT NULL,
  `cell_no` int(11) NOT NULL,
  `number_of` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `contain`
--

INSERT INTO `contain` (`pname`, `cell_no`, `number_of`) VALUES
('Kartal Ceza Infaz Kurumu', 22, 1313),
('Gaziantep Ceza Infaz Kurumu', 1, 818),
('Kalecik Ceza Infaz Kurumu', 76, 125),
('Eskisehir Ceza Infaz Kurumu', 37, 2200),
('Kartal Ceza Infaz Kurumu', 3, 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `criminals`
--

CREATE TABLE `criminals` (
  `cid` int(11) NOT NULL,
  `cname` char(20) DEFAULT NULL,
  `crime` char(50) DEFAULT NULL,
  `punishment` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `criminals`
--

INSERT INTO `criminals` (`cid`, `cname`, `crime`, `punishment`) VALUES
(1, 'Ece', 'cybercrime', 3),
(2, 'Baris', 'cybercrime', 3),
(3, 'Ali', 'theft', 7),
(4, 'Ayse', 'homicide', 50),
(5, 'Fatma', 'drugs', 16),
(6, 'Veli', 'traffic offense', 2);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `defended_by`
--

CREATE TABLE `defended_by` (
  `lid` int(11) NOT NULL,
  `cid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `defended_by`
--

INSERT INTO `defended_by` (`lid`, `cid`) VALUES
(9, 1),
(13, 2),
(22, 3),
(55, 4),
(47, 6);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `guardians`
--

CREATE TABLE `guardians` (
  `gid` int(11) NOT NULL,
  `gname` char(20) DEFAULT NULL,
  `working_hours` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `guardians`
--

INSERT INTO `guardians` (`gid`, `gname`, `working_hours`) VALUES
(1, 'Jack', 8),
(2, 'Robert', 12),
(3, 'Emma', 4),
(4, 'Amy', 10),
(5, 'James', 5),
(6, 'Olivia', 10);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `have`
--

CREATE TABLE `have` (
  `cid` int(11) NOT NULL,
  `vid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `have`
--

INSERT INTO `have` (`cid`, `vid`) VALUES
(3, 435),
(1, 48),
(2, 34),
(5, 769),
(6, 567);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `lawyers`
--

CREATE TABLE `lawyers` (
  `lid` int(11) NOT NULL,
  `cost` int(11) DEFAULT NULL,
  `name` char(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `lawyers`
--

INSERT INTO `lawyers` (`lid`, `cost`, `name`) VALUES
(9, 1250, 'Davut'),
(13, 1000, 'David'),
(22, 2500, 'Charles'),
(47, 3750, 'Patricia'),
(55, 2500, 'Mary'),
(567, 8000, 'Melahat');

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
('Develi Ceza Infaz Kurumu', 600, 'Kayseri'),
('Eskisehir Ceza Infaz Kurumu', 1000, 'Eskisehir'),
('Gaziantep Ceza Infaz Kurumu', 1200, 'Gaziantep'),
('Kalecik Ceza Infaz Kurumu', 2000, 'Ankara'),
('Kartal Ceza Infaz Kurumu', 700, 'Istanbul');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `protected_by`
--

CREATE TABLE `protected_by` (
  `pname` char(50) NOT NULL,
  `gid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `protected_by`
--

INSERT INTO `protected_by` (`pname`, `gid`) VALUES
('Gaziantep Ceza Infaz Kurumu', 6),
('Kartal Ceza Infaz Kurumu', 4),
('Kalecik Ceza Infaz Kurumu', 3),
('Develi Ceza Infaz Kurumu', 2),
('Eskisehir Ceza Infaz Kurumu', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `stay_in`
--

CREATE TABLE `stay_in` (
  `cid` int(11) NOT NULL,
  `cell_no` int(11) NOT NULL,
  `since` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `stay_in`
--

INSERT INTO `stay_in` (`cid`, `cell_no`, `since`) VALUES
(1, 1, '2001-01-08'),
(2, 3, '2005-01-01'),
(3, 37, '1990-06-23'),
(4, 76, '2020-09-18'),
(5, 94, '2021-12-30');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `visitors`
--

CREATE TABLE `visitors` (
  `vid` int(11) NOT NULL,
  `visiting_time` int(11) DEFAULT NULL,
  `relation` char(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `visitors`
--

INSERT INTO `visitors` (`vid`, `visiting_time`, `relation`) VALUES
(34, 17, 'father'),
(48, 9, 'father'),
(435, 12, 'friend'),
(567, 13, 'daughter'),
(769, 8, 'mother');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `cells`
--
ALTER TABLE `cells`
  ADD PRIMARY KEY (`cell_no`);

--
-- Tablo için indeksler `contain`
--
ALTER TABLE `contain`
  ADD KEY `pname` (`pname`),
  ADD KEY `cell_no` (`cell_no`);

--
-- Tablo için indeksler `criminals`
--
ALTER TABLE `criminals`
  ADD PRIMARY KEY (`cid`);

--
-- Tablo için indeksler `defended_by`
--
ALTER TABLE `defended_by`
  ADD KEY `cid` (`cid`),
  ADD KEY `lid` (`lid`);

--
-- Tablo için indeksler `guardians`
--
ALTER TABLE `guardians`
  ADD PRIMARY KEY (`gid`);

--
-- Tablo için indeksler `have`
--
ALTER TABLE `have`
  ADD KEY `cid` (`cid`),
  ADD KEY `vid` (`vid`);

--
-- Tablo için indeksler `lawyers`
--
ALTER TABLE `lawyers`
  ADD PRIMARY KEY (`lid`);

--
-- Tablo için indeksler `prisons`
--
ALTER TABLE `prisons`
  ADD PRIMARY KEY (`pname`);

--
-- Tablo için indeksler `protected_by`
--
ALTER TABLE `protected_by`
  ADD KEY `pname` (`pname`);

--
-- Tablo için indeksler `stay_in`
--
ALTER TABLE `stay_in`
  ADD KEY `cid` (`cid`),
  ADD KEY `cell_no` (`cell_no`);

--
-- Tablo için indeksler `visitors`
--
ALTER TABLE `visitors`
  ADD PRIMARY KEY (`vid`);

--
-- Dökümü yapılmış tablolar için kısıtlamalar
--

--
-- Tablo kısıtlamaları `contain`
--
ALTER TABLE `contain`
  ADD CONSTRAINT `contain_ibfk_1` FOREIGN KEY (`pname`) REFERENCES `prisons` (`pname`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `contain_ibfk_2` FOREIGN KEY (`cell_no`) REFERENCES `cells` (`cell_no`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Tablo kısıtlamaları `defended_by`
--
ALTER TABLE `defended_by`
  ADD CONSTRAINT `defended_by_ibfk_1` FOREIGN KEY (`cid`) REFERENCES `criminals` (`cid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `defended_by_ibfk_2` FOREIGN KEY (`lid`) REFERENCES `lawyers` (`lid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Tablo kısıtlamaları `have`
--
ALTER TABLE `have`
  ADD CONSTRAINT `have_ibfk_1` FOREIGN KEY (`cid`) REFERENCES `criminals` (`cid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `have_ibfk_2` FOREIGN KEY (`vid`) REFERENCES `visitors` (`vid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Tablo kısıtlamaları `protected_by`
--
ALTER TABLE `protected_by`
  ADD CONSTRAINT `protected_by_ibfk_1` FOREIGN KEY (`pname`) REFERENCES `prisons` (`pname`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `protected_by_ibfk_2` FOREIGN KEY (`pname`) REFERENCES `prisons` (`pname`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Tablo kısıtlamaları `stay_in`
--
ALTER TABLE `stay_in`
  ADD CONSTRAINT `stay_in_ibfk_1` FOREIGN KEY (`cid`) REFERENCES `criminals` (`cid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `stay_in_ibfk_2` FOREIGN KEY (`cell_no`) REFERENCES `cells` (`cell_no`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
