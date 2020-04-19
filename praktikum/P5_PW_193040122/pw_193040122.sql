-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Apr 2020 pada 11.18
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw_193040122`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tugas`
--

CREATE TABLE `tugas` (
  `id` int(10) NOT NULL,
  `img` varchar(100) NOT NULL,
  `nama` text NOT NULL,
  `asal` text NOT NULL,
  `harga_pasaran` varchar(20) NOT NULL,
  `rating` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tugas`
--

INSERT INTO `tugas` (`id`, `img`, `nama`, `asal`, `harga_pasaran`, `rating`) VALUES
(3, '1.jpg', 'Padang', 'Padang', 'Rp. 25.000', 9),
(4, '2.jpg', 'Soto Ayam', 'Madura', 'Rp. 15.000', 8),
(5, '3.jpg', 'Kikil', 'Padang', 'Rp. 20.000', 9),
(6, '4.jpg', 'Indomie Goreng', 'Indonesia', 'Rp. 10.000', 8),
(7, '5.jpg', 'Brownise', 'Bandung', 'Rp. 40.000', 7),
(8, '6.jpg', 'Ice Cream', 'Italia', 'Rp. 20.000 - 50.000', 10),
(9, '7.jpg', 'Rendang', 'Padang', 'Rp. 15.000', 9),
(10, '8.jpg', 'Ayam Goreng Ibu Imas', 'Bandung', 'Rp. 15.000', 8),
(11, '9.jpg', 'Iga Bakar', 'Surabaya', 'Rp. 45.000', 9),
(12, '10.jpg', 'Gulali', 'Inggris', 'Rp. 10.000', 10);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tugas`
--
ALTER TABLE `tugas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tugas`
--
ALTER TABLE `tugas`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
