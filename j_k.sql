-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 29 okt 2025 om 15:20
-- Serverversie: 10.4.21-MariaDB
-- PHP-versie: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `j_k`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `contactberichten`
--

CREATE TABLE `contactberichten` (
  `id` int(11) NOT NULL,
  `naam` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telefoon` varchar(20) NOT NULL,
  `bericht` text NOT NULL,
  `datum` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `contactberichten`
--

INSERT INTO `contactberichten` (`id`, `naam`, `email`, `telefoon`, `bericht`, `datum`) VALUES
(1, 'Kris Delver', 'test@gmail.com', '0612345678', 'test', '2025-10-28 14:36:10'),
(2, 'Kris Delver', 'test@gmail.com', '0612345678', 'Hallo wereld', '2025-10-28 16:34:31');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `ocassions`
--

CREATE TABLE `ocassions` (
  `id` int(11) NOT NULL,
  `merk` varchar(100) NOT NULL,
  `model` varchar(100) NOT NULL,
  `bouwjaar` varchar(4) NOT NULL,
  `kilometerstand` varchar(11) NOT NULL,
  `prijs` decimal(10,2) NOT NULL,
  `afbeelding` varchar(255) NOT NULL,
  `beschrijving` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `ocassions`
--

INSERT INTO `ocassions` (`id`, `merk`, `model`, `bouwjaar`, `kilometerstand`, `prijs`, `afbeelding`, `beschrijving`) VALUES
(1, 'Volkswagen', 'Golf', '2019', '25000', '18500.00', 'vwg2019.png', 'Deze betrouwbare en veelzijdige hatchback combineert Duitse degelijkheid met moderne technologie. Met slechts 25.000 km op de teller en een scherpe prijs van €18.500 is dit een uitstekende keuze voor wie op zoek is naar een jonge occasion met lage kilometerstand. De Golf biedt een comfortabel interieur, zuinige motorisering en geavanceerde rijtechnologieën. Ideaal voor dagelijks gebruik en lange ritten.'),
(2, 'BMW', '3 serie', '2018', '40000', '22000.00', 'bmw3s2018.png', 'Deze sportieve en stijlvolle sedan combineert luxe met rijplezier. Met slechts 40.000 km op de teller en een vraagprijs van €22.000 verkeert deze auto in uitstekende staat. Voorzien van moderne technologie, comfortabele interieurafwerking en krachtige, zuinige motor. Ideaal voor wie premium kwaliteit zoekt met betrouwbare prestaties en een elegante uitstraling.'),
(3, 'Ford', 'Focus', '2020', '15000', '16500.00', 'FF2020.png', 'Deze moderne en zuinige hatchback biedt een uitstekende rijervaring met een lage kilometerstand van slechts 15.000 km en een aantrekkelijke prijs van €16.500. Met zijn strakke design, efficiënte motor en comfortabele interieur is de Focus ideaal voor zowel dagelijks gebruik als langere ritten. De auto is uitgerust met moderne technologieën en veiligheidsvoorzieningen, waardoor hij zowel praktisch als plezierig in gebruik is. Een uitstekende keuze voor wie op zoek is naar een betrouwbare en betaalbare auto.'),
(4, 'Audi', 'A4', '2017', '60000', '21000.00', 'audi-a4-2014.png', 'Deze elegante en technisch geavanceerde sedan biedt een premium rijervaring. Met een kilometerstand van 60.000 km en een prijs van €21.000 is dit model aantrekkelijk geprijsd in de occasionmarkt. De A4 combineert verfijnde afwerking met krachtige prestaties en geavanceerde technologieën. Een uitstekende keuze voor wie op zoek is naar luxe, comfort en betrouwbaarheid.'),
(5, 'Mercedes', 'C-Klasse', '2019', '30000', '24500.00', 'MC-2019.png', 'Deze elegante en luxueuze sedan biedt een verfijnde rijervaring met moderne technologieën en een stijlvol ontwerp. Met slechts 30.000 km op de teller en een prijs van €24.500 is dit model aantrekkelijk geprijsd in de occasionmarkt. De C-Klasse combineert comfort, prestaties en geavanceerde veiligheidsvoorzieningen, waardoor het een uitstekende keuze is voor wie op zoek is naar een premium voertuig.'),
(6, 'Opel', 'Astra', '2020', '20000', '17000.00', 'opelastra2020.png', 'Deze moderne hatchback biedt een uitstekende balans tussen comfort, technologie en rijplezier. Met slechts 20.000 km op de teller en een scherpe prijs van €17.000 is dit model een aantrekkelijke keuze voor wie op zoek is naar een betrouwbare en zuinige auto. De Astra is uitgerust met efficiënte motoren, een ruim interieur en geavanceerde veiligheidsvoorzieningen. Ideaal voor zowel stadsgebruik als langere ritten.'),
(7, 'Peugeot', '208', '2021', '10000', '15500.00', 'pgt208-2021.png', 'Deze moderne en stijlvolle hatchback biedt een uitstekende rijervaring met een scherp geprijsde occasion van €15.500 en slechts 10.000 km op de teller. Met zijn compacte afmetingen is de 208 ideaal voor stadsverkeer, terwijl hij dankzij zijn efficiënte motor en comfortabele interieur ook geschikt is voor langere ritten. De auto is uitgerust met moderne technologieën en veiligheidsvoorzieningen, waardoor hij zowel praktisch als plezierig in gebruik is.'),
(8, 'Toyota', 'Corolla', '2018', '35000', '19000.00', 'tytcor2018.png', 'Deze betrouwbare en zuinige hatchback biedt een uitstekende rijervaring met een lage kilometerstand van slechts 35.000 km en een scherpe prijs van €19.000. Met zijn moderne technologieën, comfortabele interieur en efficiënte motor is de Corolla ideaal voor zowel stadsverkeer als lange ritten. De auto is uitgerust met geavanceerde veiligheidsvoorzieningen en biedt een uitstekende brandstofefficiëntie.'),
(9, 'Renault', 'Clio', '2019', '22000', '14500.00', 'renaultclio2019.png', 'Deze compacte en stijlvolle hatchback biedt een uitstekende rijervaring met een lage kilometerstand van slechts 22.000 km en een scherpe prijs van €14.500. Met zijn moderne technologieën, comfortabele interieur en zuinige motor is de Clio ideaal voor zowel stadsverkeer als langere ritten. De auto is uitgerust met geavanceerde veiligheidsvoorzieningen en biedt een uitstekende brandstofefficiëntie.');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `contactberichten`
--
ALTER TABLE `contactberichten`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `ocassions`
--
ALTER TABLE `ocassions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `contactberichten`
--
ALTER TABLE `contactberichten`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT voor een tabel `ocassions`
--
ALTER TABLE `ocassions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
