-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2020. Máj 12. 23:34
-- Kiszolgáló verziója: 10.4.11-MariaDB
-- PHP verzió: 7.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `haldb`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `felhasznalok`
--

CREATE TABLE `felhasznalok` (
  `id` int(11) NOT NULL,
  `keresztnev` varchar(64) NOT NULL,
  `vezeteknev` varchar(64) NOT NULL,
  `email` varchar(250) NOT NULL,
  `jelszo` varchar(250) NOT NULL,
  `jogosultsag` int(1) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- A tábla adatainak kiíratása `felhasznalok`
--

INSERT INTO `felhasznalok` (`id`, `keresztnev`, `vezeteknev`, `email`, `jelszo`, `jogosultsag`) VALUES
(0, 'László', 'Kóder', 'koder.laci67@gmail.com', '85136c79cbf9fe36bb9d05d0639c70c265c18d37', 0),
(2, 'Robert', 'Asztalos', 'asztalos.robert@gmail.com', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', 1);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `halak`
--

CREATE TABLE `halak` (
  `id` int(11) NOT NULL,
  `halnev` varchar(64) NOT NULL,
  `haltap` varchar(64) NOT NULL,
  `szarmazas` varchar(64) NOT NULL,
  `halfaj` varchar(64) NOT NULL,
  `szin` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- A tábla adatainak kiíratása `halak`
--

INSERT INTO `halak` (`id`, `halnev`, `haltap`, `szarmazas`, `halfaj`, `szin`) VALUES
(1, 'Bajszos Harcsa', 'Gombás', 'Európa', 'Harcsaféle', 'Barna'),
(2, 'Szürke Ponty', 'Gombás', 'Európa', 'Pontyféle', 'Szürke'),
(3, 'Sebes Pisztráng', 'Kolbászos', 'Izland', 'Lazacféle', 'Pöttyös'),
(4, 'Bohóchal', 'Sajtos', 'Vörös-tenger', 'Sügéralakú', 'Narancssárga'),
(5, 'Fehér Cápa', 'Kolbászos', 'Nyílt víz', 'Porcos hal', 'Fehér'),
(7, 'Rája', 'Sajtos', 'Jeges-tenger', 'rájaszerűek', 'világosbarna');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `tap`
--

CREATE TABLE `tap` (
  `id` int(11) NOT NULL,
  `tapnev` varchar(64) NOT NULL,
  `lejaratidatum` date NOT NULL,
  `izesites` varchar(64) NOT NULL,
  `allag` varchar(64) NOT NULL,
  `ar` int(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- A tábla adatainak kiíratása `tap`
--

INSERT INTO `tap` (`id`, `tapnev`, `lejaratidatum`, `izesites`, `allag`, `ar`) VALUES
(1, 'Aquario', '2025-11-01', 'Kolbászos', 'Lágy', 1000),
(2, 'YOYO', '2023-06-12', 'Gombás', 'Kemény', 2000),
(3, 'Tetra Pro', '2021-05-04', 'Sajtos', 'Ropogós', 2500);

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `halak`
--
ALTER TABLE `halak`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `tap`
--
ALTER TABLE `tap`
  ADD PRIMARY KEY (`id`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `halak`
--
ALTER TABLE `halak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT a táblához `tap`
--
ALTER TABLE `tap`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
