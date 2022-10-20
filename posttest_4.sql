-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Okt 2022 pada 16.50
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `posttest 4`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `characters`
--

CREATE TABLE `characters` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `Damage` varchar(255) NOT NULL,
  `Health` varchar(255) NOT NULL,
  `Rank` varchar(255) NOT NULL,
  `Promotion` varchar(255) NOT NULL,
  `Price` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `characters`
--

INSERT INTO `characters` (`id`, `nama`, `Damage`, `Health`, `Rank`, `Promotion`, `Price`, `Description`) VALUES
(1, 'Batman', '46000', '89000', 'gold', 'VII', '500000', 'batman ninja'),
(2, 'Bane', '12312', '13122', 'gold', 'none', '123213', 'wqeqew');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `characters`
--
ALTER TABLE `characters`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `characters`
--
ALTER TABLE `characters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
