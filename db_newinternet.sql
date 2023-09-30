-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Jan 2022 pada 13.27
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_newinternet`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_paket`
--

CREATE TABLE `tb_paket` (
  `id_paket` int(6) NOT NULL,
  `paket` varchar(20) NOT NULL,
  `tarif` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_paket`
--

INSERT INTO `tb_paket` (`id_paket`, `paket`, `tarif`) VALUES
(1, '3 Mbps', 150000),
(2, '5 Mbps', 250000),
(3, '10 Mbps', 400000),
(4, '20 Mbps', 500000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pelanggan`
--

CREATE TABLE `tb_pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL DEFAULT '',
  `level` varchar(10) NOT NULL DEFAULT '',
  `id_paket` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_pelanggan`
--

INSERT INTO `tb_pelanggan` (`id_pelanggan`, `nama`, `alamat`, `no_hp`, `email`, `password`, `level`, `id_paket`) VALUES
(2, 'Muhammad Sofiyan Hadi', 'Wonogiri', '081226847843', 'muhammad.sofiyan.h@gmail.com', '702bc8e16a26e4b08edcac4b81d64cee', 'client', 4),
(4, 'Ahya Ihsan', 'Ambarawa', '085156637279', 'l200190208@student.ums.ac.id', '', '', 4),
(6, 'Ady Prasetya', 'Klaten', '081234567', 'ilhanramadhan@gmail.com', '', '', 4),
(7, 'Sukma Aji Pratama', 'Wonogiri', '082245678543', 'sukmaaji@gmail.com', 'fcfce9432eb70d62ea41d979f1576b00', '', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pengguna`
--

CREATE TABLE `tb_pengguna` (
  `id_pengguna` int(11) NOT NULL,
  `nama_pengguna` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_pengguna`
--

INSERT INTO `tb_pengguna` (`id_pengguna`, `nama_pengguna`, `username`, `password`, `level`) VALUES
(1, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(5, 'Muhammad Sofiyan Hadi', 'sopi', '702bc8e16a26e4b08edcac4b81d64cee', 'client'),
(6, 'Sukma Aji Pratama', 'sukma', 'fcfce9432eb70d62ea41d979f1576b00', 'client');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_tagihan`
--

CREATE TABLE `tb_tagihan` (
  `id_tagihan` int(11) NOT NULL,
  `bulan` varchar(20) NOT NULL,
  `tahun` year(4) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `tagihan` int(11) NOT NULL,
  `status` enum('BL','LS') NOT NULL,
  `tgl_bayar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_tagihan`
--

INSERT INTO `tb_tagihan` (`id_tagihan`, `bulan`, `tahun`, `id_pelanggan`, `tagihan`, `status`, `tgl_bayar`) VALUES
(4, 'Desember', 2021, 4, 250000, 'LS', '2022-01-06'),
(6, 'Desember', 2021, 2, 500000, 'LS', '2022-01-06'),
(7, 'Maret', 2021, 4, 250000, 'LS', '2022-01-06'),
(9, 'Maret', 2021, 2, 500000, 'BL', '0000-00-00'),
(10, 'November', 2021, 4, 250000, 'BL', '0000-00-00'),
(12, 'November', 2021, 2, 500000, 'BL', '0000-00-00'),
(13, 'Januari', 2022, 4, 250000, 'LS', '2022-01-09'),
(14, 'Januari', 2022, 2, 500000, 'LS', '2022-01-06'),
(16, 'Agustus', 2021, 2, 500000, 'BL', '0000-00-00'),
(17, 'Agustus', 2021, 4, 500000, 'BL', '0000-00-00'),
(19, 'Agustus', 2021, 6, 500000, 'BL', '0000-00-00'),
(20, 'Februari', 2022, 7, 400000, 'LS', '2022-01-11'),
(21, 'Februari', 2022, 2, 500000, 'BL', '0000-00-00'),
(22, 'Februari', 2022, 4, 500000, 'BL', '0000-00-00'),
(23, 'Februari', 2022, 6, 500000, 'BL', '0000-00-00'),
(24, 'Maret', 2022, 7, 400000, 'BL', '0000-00-00'),
(25, 'Maret', 2022, 2, 500000, 'BL', '0000-00-00'),
(26, 'Maret', 2022, 4, 500000, 'BL', '0000-00-00'),
(27, 'Maret', 2022, 6, 500000, 'BL', '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_paket`
--
ALTER TABLE `tb_paket`
  ADD PRIMARY KEY (`id_paket`);

--
-- Indeks untuk tabel `tb_pelanggan`
--
ALTER TABLE `tb_pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`),
  ADD KEY `id_paket` (`id_paket`);

--
-- Indeks untuk tabel `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indeks untuk tabel `tb_tagihan`
--
ALTER TABLE `tb_tagihan`
  ADD PRIMARY KEY (`id_tagihan`),
  ADD KEY `id_pelanggan` (`id_pelanggan`),
  ADD KEY `bulan` (`bulan`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_pelanggan`
--
ALTER TABLE `tb_pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_tagihan`
--
ALTER TABLE `tb_tagihan`
  MODIFY `id_tagihan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_pelanggan`
--
ALTER TABLE `tb_pelanggan`
  ADD CONSTRAINT `tb_pelanggan_ibfk_1` FOREIGN KEY (`id_paket`) REFERENCES `tb_paket` (`id_paket`);

--
-- Ketidakleluasaan untuk tabel `tb_tagihan`
--
ALTER TABLE `tb_tagihan`
  ADD CONSTRAINT `tb_tagihan_ibfk_1` FOREIGN KEY (`id_pelanggan`) REFERENCES `tb_pelanggan` (`id_pelanggan`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
