-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Bulan Mei 2020 pada 15.43
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
-- Database: `tubes_193040122`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `makanan`
--

CREATE TABLE `makanan` (
  `id` int(11) NOT NULL,
  `img` varchar(20) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `asal` varchar(20) NOT NULL,
  `harga_pasaran` varchar(20) NOT NULL,
  `bahan_dasar` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `makanan`
--

INSERT INTO `makanan` (`id`, `img`, `nama`, `asal`, `harga_pasaran`, `bahan_dasar`) VALUES
(1, '1.jpg', 'Sate Padang', 'Padang', 'Rp. 25.000', 'Daging/Lidah Sapi'),
(2, '2.jpg', 'Soto Ayam', 'Madura', 'Rp. 15.000', 'Ayam'),
(3, '3.jpg', 'Kikil', 'Padang', 'Rp. 20.000', 'Kaki Sapi'),
(4, '4.jpg', 'Indomie Goreng', 'Indonesia', 'Rp. 10.000', 'Tepung Terigu'),
(5, '5.jpg', 'Brownise', 'Bandung', 'Rp. 40.000', 'Tepung Terigu'),
(6, '6.jpg', 'Ice Cream', 'Italia', 'Rp. 20.000 - 50.000', 'Susu'),
(7, '7.jpg', 'Rendang', 'Padang', 'Rp. 15.000', 'Daging Sapi'),
(8, '8.jpg', 'Ayam Goreng Buimas', 'Bandung', 'Rp. 15.000', 'Ayam'),
(9, '9.jpg', 'Iga Bakar', 'Surabaya', 'Rp. 45.000', 'Daging Sapi'),
(10, '10.jpg', 'Aromanis', 'Inggris', 'Rp. 10.000', 'Gula');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `makanan`
--
ALTER TABLE `makanan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `makanan`
--
ALTER TABLE `makanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
