-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Mar 2020 pada 15.30
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prak_gis`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_location`
--

CREATE TABLE `data_location` (
  `id` int(11) NOT NULL,
  `desc` varchar(255) NOT NULL,
  `lat` float(10,6) NOT NULL,
  `lon` float(10,6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_location`
--

INSERT INTO `data_location` (`id`, `desc`, `lat`, `lon`) VALUES
(1, 'Aston Hotel & Conference Center Kota Madiun', -7.639238, 111.514030),
(2, 'Amaris Hotel', -7.626478, 111.521416),
(3, 'Hotel Kharisma Madiun', -7.623566, 111.524216),
(4, 'The Sun Hotel Madiun', -7.622737, 111.537064),
(5, 'Hotel Merdeka', -7.626406, 111.519547),
(6, 'Hotel Sarangan Permai', -7.610730, 111.527748),
(7, 'Hotel Setiabudi Madiun', -7.633449, 111.521217),
(8, 'Hotel Kartika Abadi', -7.628207, 111.519348),
(9, 'Hotel Matahari', -7.620150, 111.524231),
(10, 'Hotel Madiun', -7.628762, 111.519974);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_location`
--
ALTER TABLE `data_location`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_location`
--
ALTER TABLE `data_location`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
