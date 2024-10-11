-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2024. Okt 11. 13:51
-- Kiszolgáló verziója: 10.4.32-MariaDB
-- PHP verzió: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

create database shop;

use shop;
/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `shop`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `gyarto`
--

CREATE TABLE `gyarto` (
  `id` int(100) NOT NULL,
  `nev` varchar(100) NOT NULL,
  `kep` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `gyarto`
--

INSERT INTO `gyarto` (`id`, `nev`, `kep`) VALUES
(1, 'Asus', 'img/gyartok/1.jpg'),
(2, 'Dell', 'img/gyartok/2.jpg'),
(4, 'Lg', 'img/gyartok/4.jpg'),
(5, 'Samsung', 'img/gyartok/5.jpg'),
(6, 'AOC', 'img/gyartok/6.jpg'),
(7, 'Fujitsu', 'img/gyartok/7.jpg');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `laptop`
--

CREATE TABLE `laptop` (
  `id` int(10) NOT NULL,
  `gyarto` varchar(20) NOT NULL,
  `nev` varchar(100) NOT NULL,
  `processor` varchar(200) NOT NULL,
  `memoria` varchar(20) NOT NULL,
  `memoria2` varchar(20) NOT NULL,
  `videokartya` varchar(100) NOT NULL,
  `kijelzomeret` varchar(5) NOT NULL,
  `felbontasszelesseg` varchar(4) NOT NULL,
  `felbontasmagassag` varchar(4) NOT NULL,
  `tipus` varchar(10) NOT NULL,
  `hattertar1` varchar(20) NOT NULL,
  `hattertar2` varchar(20) NOT NULL,
  `oprendszer` varchar(30) NOT NULL,
  `optikaimeghajto` varchar(5) NOT NULL,
  `usba` varchar(5) NOT NULL,
  `usbc` varchar(5) NOT NULL,
  `vga` varchar(5) NOT NULL,
  `dvid` varchar(5) NOT NULL,
  `hdmi` varchar(5) NOT NULL,
  `display` varchar(5) NOT NULL,
  `rj45` varchar(5) NOT NULL,
  `fullhallgato` varchar(5) NOT NULL,
  `mikrofon` varchar(5) NOT NULL,
  `garancia` varchar(20) NOT NULL,
  `hiba` varchar(200) NOT NULL,
  `keszlet` varchar(5) NOT NULL,
  `ar` varchar(8) NOT NULL,
  `kep` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `laptop`
--

INSERT INTO `laptop` (`id`, `gyarto`, `nev`, `processor`, `memoria`, `memoria2`, `videokartya`, `kijelzomeret`, `felbontasszelesseg`, `felbontasmagassag`, `tipus`, `hattertar1`, `hattertar2`, `oprendszer`, `optikaimeghajto`, `usba`, `usbc`, `vga`, `dvid`, `hdmi`, `display`, `rj45`, `fullhallgato`, `mikrofon`, `garancia`, `hiba`, `keszlet`, `ar`, `kep`) VALUES
(1, '5', 'dsfds', 'Intel Core I5 ', '4 Gb DDR2', '8 Gb DDR1', 'intel uhd 620', '17', '800', '600', 'IPS', '256 Gb SSD', '240 Gb SSD ', 'Windows 10 Home', 'Nincs', 'Van', 'Van', 'Van', 'Van', 'Van', 'Van', 'Van', 'Van', 'Van', 'Nincs', 'Nincs', 'Van', '211000', 'img/laptop/1/WIN_20240523_14_46_44_Pro.jpg;img/laptop/1/WIN_20240523_14_46_44_Pro.jpg;img/laptop/1/WIN_20240523_14_47_56_Pro.jpg;'),
(2, '1', 'Csabi', 'AMD ', '64 Gb DDR5', '64 Gb DDR5', 'intel uhd 620', '16', '1920', '1200', 'Full Hd', '128 Gb HDD', 'ee', 'FreeDos', 'Van', 'Van', 'Van', 'Van', 'Van', 'Van', 'Van', 'Van', 'Van', 'Van', 'Van', 'Csak négy napot dolgozik', 'Van', '20000000', 'img/laptop/2/WIN_20240523_07_15_53_Pro.jpg;'),
(3, '4', 'Csabi', 'AMD ', '32 Gb DDR5', '64 Gb DDR4', 'ATI Radeon 910', '18.4', '1400', '600', 'HD', '240 Gb SSD', '500 Gb HDD ', 'Windows 10 Home', 'Van', 'Van', 'Van', 'Van', 'Van', 'Van', 'Van', 'Van', 'Van', 'Van', 'Van', 'Csak négy napot dolgozik', 'Van', '20000000', ''),
(4, '5', 'Csabi', 'AMD  Ryzen 9000000000', '32 Gb DDR5', 'e e', 'ATI Radeon 910', '16', '1920', '1200', 'Full Hd', '128 Gb SSD', '1 Tb GB  HDD ', 'Windows 11 Pro', 'Nincs', 'Van', 'Nincs', 'Nincs', 'Nincs', 'Nincs', 'Nincs', 'Nincs', 'Nincs', 'Nincs', 'Van', 'Csak négy napot dolgozik', 'Van', '211000', '');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `monitor`
--

CREATE TABLE `monitor` (
  `id` int(10) NOT NULL,
  `gyarto` int(11) NOT NULL,
  `nev` varchar(300) NOT NULL,
  `tipus` varchar(100) NOT NULL,
  `keparany` varchar(20) NOT NULL,
  `felbontas` varchar(20) NOT NULL,
  `pixel_meret` varchar(100) NOT NULL,
  `frissitesi_ido` varchar(6) NOT NULL,
  `max_fogyasztas` varchar(5) NOT NULL,
  `kep_frissites` varchar(200) NOT NULL,
  `szelesseg` varchar(10) NOT NULL,
  `magassag` varchar(10) NOT NULL,
  `melyseg` varchar(10) NOT NULL,
  `suly` varchar(10) NOT NULL,
  `usba` varchar(6) NOT NULL,
  `usbc` varchar(6) NOT NULL,
  `vga` varchar(6) NOT NULL,
  `hdmi` varchar(6) NOT NULL,
  `dvid` varchar(7) NOT NULL,
  `display_port` varchar(6) NOT NULL,
  `fullhallgato` varchar(6) NOT NULL,
  `mikrofon` varchar(6) NOT NULL,
  `kep` varchar(700) NOT NULL,
  `garancia` varchar(30) NOT NULL,
  `keszlet` varchar(6) NOT NULL,
  `hibak` varchar(700) NOT NULL,
  `ar` varchar(10) NOT NULL,
  `hangszoro` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `monitor`
--

INSERT INTO `monitor` (`id`, `gyarto`, `nev`, `tipus`, `keparany`, `felbontas`, `pixel_meret`, `frissitesi_ido`, `max_fogyasztas`, `kep_frissites`, `szelesseg`, `magassag`, `melyseg`, `suly`, `usba`, `usbc`, `vga`, `hdmi`, `dvid`, `display_port`, `fullhallgato`, `mikrofon`, `kep`, `garancia`, `keszlet`, `hibak`, `ar`, `hangszoro`) VALUES
(1, 1, 'AAAA', 'HD', ' 16:9', '1024 x 768', '1', '3 ms', '21', '5', '1', '2.54', '2.54', '0.54', 'Van', 'Van', 'Van', 'Van', 'Van', 'Van', 'Van', 'Van', 'img/monitor/1/WIN_20240523_14_46_44_Pro.jpg;img/monitor/1/WIN_20240523_14_47_09_Pro.jpg;img/monitor/1/WIN_20240523_08_34_59_Pro.jpg;img/monitor/1/WIN_20240523_08_13_21_Pro.jpg;', 'Van', 'Van', 'Nem ismert', '12000', ''),
(2, 2, 'X342BC', ' Full Hd', ' 16:9', '800 x 600', '1', '3 ms', '11', '11', '2.54', '2.54', '2.54', '0.54', 'Van', 'Van', 'Van', 'Van', 'Van', 'Van', 'Van', 'Van', 'img/monitor/2/WIN_20240523_14_47_56_Pro.jpg;', 'Van', 'Van', 'Nem ismert', '21100', ''),
(3, 6, 'Rock 20', 'Full Hd', ' 16:10', '800 x 600', '1', '3 ms', '1', '32', '1', '2.54', '2.54', '0.54', 'Van', 'Van', 'Van', 'Van', 'Van', 'Van', 'Van', 'Van', 'img/monitor/3/WIN_20240523_14_47_09_Pro.jpg;', 'Van', 'Van', 'Nem ismert', '20000', '');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `pc`
--

CREATE TABLE `pc` (
  `id` int(100) NOT NULL,
  `gyarto` varchar(20) NOT NULL,
  `nev` varchar(100) NOT NULL,
  `processor` varchar(100) NOT NULL,
  `memoria` varchar(100) NOT NULL,
  `videokartya` varchar(100) NOT NULL,
  `hattertar` varchar(100) NOT NULL,
  `hattertar2` varchar(20) DEFAULT NULL,
  `optikaimeghajto` varchar(10) NOT NULL,
  `usba` varchar(10) NOT NULL,
  `usbc` varchar(10) NOT NULL,
  `hdmi` varchar(10) NOT NULL,
  `vga` varchar(10) NOT NULL,
  `dvid` varchar(10) NOT NULL,
  `display` varchar(10) NOT NULL,
  `rj45` varchar(10) NOT NULL,
  `fullhalgato` varchar(10) NOT NULL,
  `mikrofon` varchar(10) NOT NULL,
  `hiba` varchar(100) NOT NULL,
  `ar` varchar(15) NOT NULL,
  `garancia` varchar(20) NOT NULL,
  `kep` varchar(700) NOT NULL,
  `oprendszer` varchar(100) NOT NULL,
  `keszlet` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `pc`
--

INSERT INTO `pc` (`id`, `gyarto`, `nev`, `processor`, `memoria`, `videokartya`, `hattertar`, `hattertar2`, `optikaimeghajto`, `usba`, `usbc`, `hdmi`, `vga`, `dvid`, `display`, `rj45`, `fullhalgato`, `mikrofon`, `hiba`, `ar`, `garancia`, `kep`, `oprendszer`, `keszlet`) VALUES
(1, '5', 'koojl', 'Intel Core I3 7600', '8 GB DDR1 8GB DDR2', 'Intel UHD 650', '128 Gb GB  SSD', 'e GB e', 'Nincs', 'Nincs', 'Nincs', 'Nincs', 'Nincs', 'Nincs', 'Nincs', 'Van', 'Nincs', 'Nincs', 'Karcos hátlap', '21200', 'Nincs', 'img/pc/1/WIN_20240523_14_46_44_Pro.jpg;img/pc/1/WIN_20240523_14_46_44_Pro.jpg;img/pc/1/WIN_20240523_14_47_09_Pro.jpg;', 'Windows 11 Home', 'Van'),
(2, '1', 'Sinus A38778', 'AMD A230', '6 Gb DDR2,8 Gb', 'ntel UHD', '240 Gb SSD', '240 Gb HDD ', 'Van', 'Van', 'Van', 'Van', 'Van', '', 'Van', 'Van', 'Van', 'Van', 'Nem ismert', '21100', 'Van', 'img/pc/1/WIN_20240523_14_46_44_Pro.jpg;img/pc/1/WIN_20240523_14_46_44_Pro.jpg;img/pc/1/WIN_20240523_14_47_09_Pro.jpg;', 'Windows 10 Home', 'Van'),
(3, '1', 'Sinus A38778', 'Intel Core I5 2001', '6 Gb DDR2,8 Gb', 'ntel UHD', '240 Gb SSD', '240 Gb HDD ', 'Van', 'Van', 'Van', 'Van', 'Van', '', 'Van', 'Van', 'Van', 'Van', 'Nem ismert', '21100', 'Van', 'img/pc/1/WIN_20240523_14_46_44_Pro.jpg;img/pc/1/WIN_20240523_14_46_44_Pro.jpg;img/pc/1/WIN_20240523_14_47_09_Pro.jpg;', 'Windows 10 Home', 'Van'),
(4, '1', 'Sinus A38778', 'Intel Core I5 231', '6 Gb DDR2,4 Gb', 'ntel UHD', '240 Gb SSD', '240 Gb HDD ', 'Van', 'Van', 'Van', 'Van', 'Van', '', 'Van', 'Van', 'Van', 'Van', 'Nem ismert', '21100', 'Van', 'img/pc/1/WIN_20240523_14_46_44_Pro.jpg;img/pc/1/WIN_20240523_14_46_44_Pro.jpg;img/pc/1/WIN_20240523_14_47_09_Pro.jpg;', 'Windows 10 Home', 'Van'),
(5, '1', 'Sinus A22222', 'Intel Core I7 1', '8 Gb DDR4,16 GbDDR4', 'ntel UHD', '240 Gb SSD', '240 Gb HDD ', 'Nincs', 'Van', 'Van', 'Van', 'Van', '', 'Van', 'Van', 'Van', 'Van', 'Nem ismert', '21100', 'Van', 'img/pc/1/WIN_20240523_14_46_44_Pro.jpg;img/pc/1/WIN_20240523_14_46_44_Pro.jpg;img/pc/1/WIN_20240523_14_47_09_Pro.jpg;', 'Windows 10 Home', 'Van'),
(6, '1', 'A20', 'Intel Core I3 1212', '4 GB DDR2 6GB DDR2', 'Intel UHD 650', '128 Gb M.2', '1 Tb HDD ', 'Van', 'Nincs', 'Nincs', 'Nincs', 'Nincs', 'Van', 'Nincs', 'Nincs', 'Nincs', 'Nincs', 'Karcos hátlap', '10000', 'Nincs', 'img/pc/6/WIN_20240523_08_13_21_Pro.jpg;', 'Windows 11 Home', 'Van'),
(7, '1', '', 'Intel Core I3 e', 'e e,e e', '', 'ee', 'ee', 'Van', 'Van', 'Van', 'Van', 'Van', 'Van', 'Van', 'Van', 'Van', 'Van', '', '', 'Van', '', 'Windows 10 Home', 'Van');

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `gyarto`
--
ALTER TABLE `gyarto`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `laptop`
--
ALTER TABLE `laptop`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `monitor`
--
ALTER TABLE `monitor`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `pc`
--
ALTER TABLE `pc`
  ADD PRIMARY KEY (`id`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `gyarto`
--
ALTER TABLE `gyarto`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT a táblához `laptop`
--
ALTER TABLE `laptop`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT a táblához `monitor`
--
ALTER TABLE `monitor`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT a táblához `pc`
--
ALTER TABLE `pc`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
