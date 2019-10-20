-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Okt 2019 pada 15.27
-- Versi server: 10.1.9-MariaDB
-- Versi PHP: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pahlawan`
--

CREATE TABLE `pahlawan` (
  `no` int(15) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `asal` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pahlawan`
--

INSERT INTO `pahlawan` (`no`, `nama`, `asal`) VALUES
(6, 'ini baru edit', 'di edit lagi lho'),
(8, '1324t', 'qwe'),
(10, 'asdqawe', 'qwe1'),
(12, 'capee', 'asdq'),
(19, 'qwedqwas', 'asdqweq'),
(25, 'ini baru lhooo', 'baru di edit nih');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pahlawan`
--
ALTER TABLE `pahlawan`
  ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pahlawan`
--
ALTER TABLE `pahlawan`
  MODIFY `no` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
