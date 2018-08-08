-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 06 Agu 2018 pada 12.04
-- Versi Server: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `saw`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `user` varchar(250) NOT NULL,
  `pass` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `user`, `pass`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kriteria`
--

CREATE TABLE `kriteria` (
  `nip` int(12) NOT NULL,
  `kemampuan` varchar(250) NOT NULL,
  `miliki` varchar(250) NOT NULL,
  `ket` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kriteria`
--

INSERT INTO `kriteria` (`nip`, `kemampuan`, `miliki`, `ket`) VALUES
(1111, 'Excel', '1', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE `pegawai` (
  `nip` int(12) NOT NULL,
  `nik` int(12) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `jk` enum('L','P') NOT NULL,
  `alamat` varchar(250) NOT NULL,
  `tempat` varchar(250) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `pendidikan` int(11) NOT NULL,
  `tgl_kerja` date NOT NULL,
  `thn_kerja` int(11) NOT NULL,
  `ket` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`nip`, `nik`, `nama`, `jk`, `alamat`, `tempat`, `tgl_lahir`, `pendidikan`, `tgl_kerja`, `thn_kerja`, `ket`) VALUES
(1, 1, 'Dominggus Lango Pele', 'L', 'oebobo', 'kupang', '2018-08-03', 30, '2009-01-01', 75, 40),
(2, 2, 'Dunga Padaka', 'L', 'oebobo', 'kupang', '2018-08-04', 30, '2009-01-02', 75, 50),
(3, 3, 'Noviana Seran', 'L', 'oebobo', 'kupang', '2018-08-05', 30, '2009-01-03', 75, 50),
(4, 4, 'Andre R. Bani', 'L', 'oebobo', 'kupang', '2018-08-06', 30, '2009-01-04', 75, 50),
(5, 5, 'Jeni Lali Pora', 'L', 'oebobo', 'kupang', '2018-08-07', 30, '2009-01-05', 75, 50),
(6, 6, 'Maria Alu Here', 'L', 'oebobo', 'kupang', '2018-08-08', 30, '2009-01-06', 75, 50),
(7, 7, 'Sahban A. U. Nay', 'L', 'oebobo', 'kupang', '2018-08-09', 30, '2009-01-07', 75, 50),
(8, 8, 'Paskana B. D.Manek,SE', 'L', 'oebobo', 'kupang', '2018-08-10', 40, '2009-01-08', 75, 50),
(9, 9, 'Haryanto Boro', 'L', 'oebobo', 'kupang', '2018-08-11', 30, '2009-01-09', 75, 50),
(10, 10, 'Noviati Lince Jati', 'L', 'oebobo', 'kupang', '2018-08-12', 30, '2009-01-10', 75, 50),
(11, 11, 'Yomince U. Robaka', 'L', 'oebobo', 'kupang', '2018-08-13', 30, '2010-01-11', 70, 50),
(12, 12, 'Andreas Andri Susanto', 'L', 'oebobo', 'kupang', '2018-08-14', 30, '2010-01-12', 70, 50),
(13, 13, 'Dato Kadi Wanno', 'L', 'oebobo', 'kupang', '2018-08-15', 30, '2010-01-13', 70, 50),
(14, 14, 'Gode Mawo Kaza', 'L', 'oebobo', 'kupang', '2018-08-16', 30, '2011-01-14', 65, 30),
(15, 15, 'Jeniaty D. Malika', 'L', 'oebobo', 'kupang', '2018-08-17', 30, '2012-01-01', 50, 50),
(16, 16, 'Betseba S. Awang', 'L', 'oebobo', 'kupang', '2018-08-18', 30, '2013-01-01', 40, 50),
(17, 17, 'Fredrik B. R. Tana', 'L', 'oebobo', 'kupang', '2018-08-19', 30, '0000-00-00', 50, 50),
(18, 18, 'Dorkas Pudu Mala', 'L', 'oebobo', 'kupang', '2018-08-20', 30, '2013-01-01', 40, 50),
(19, 19, 'Dominggus Soba', 'L', 'oebobo', 'kupang', '2018-08-21', 30, '2012-01-01', 50, 50),
(20, 20, 'Yosua T. Kopi', 'L', 'oebobo', 'kupang', '2018-08-22', 30, '2015-01-01', 30, 50),
(21, 21, 'Yeremias Saingo', 'L', 'oebobo', 'kupang', '2018-08-23', 30, '2015-01-02', 30, 50),
(22, 22, 'Yeni Marlina Bole, SE', 'L', 'oebobo', 'kupang', '2018-08-24', 40, '2015-01-03', 30, 50),
(23, 23, 'Ningsiana Inna', 'L', 'oebobo', 'kupang', '2018-08-25', 30, '2015-01-04', 30, 50),
(24, 24, 'Ferdi Tadu Kahale', 'L', 'oebobo', 'kupang', '2018-08-26', 30, '2015-01-05', 30, 50),
(25, 25, 'Wilhelmina M. Lango Pele,S.Km', 'L', 'oebobo', 'kupang', '2018-08-27', 40, '2016-01-01', 20, 50),
(26, 26, 'Yosep Lede', 'L', 'oebobo', 'kupang', '2018-08-28', 30, '2016-01-02', 20, 50),
(27, 27, 'Maria Stevani Pewali', 'L', 'oebobo', 'kupang', '2018-08-29', 30, '2016-01-03', 20, 50),
(28, 28, 'Sarika Dewi', 'L', 'oebobo', 'kupang', '2018-08-30', 30, '2016-08-01', 20, 20),
(29, 29, 'Yohanis U. D. Kariam', 'L', 'oebobo', 'kupang', '2018-08-31', 30, '2017-01-01', 10, 10),
(30, 30, 'Thomas Lero Djaga', 'L', 'oebobo', 'kupang', '2018-09-01', 30, '2018-01-01', 10, 10),
(1111, 1111, 'iwan', 'L', 'oebobo', 'bajawa', '2018-08-03', 40, '2018-08-24', 70, 40),
(111115, 111113, 'ABC', 'L', 'sdsd', 'bajawa', '2018-08-03', 30, '2018-08-23', 70, 40);

-- --------------------------------------------------------

--
-- Struktur dari tabel `penempatan`
--

CREATE TABLE `penempatan` (
  `nip` varchar(12) NOT NULL,
  `posisi` varchar(250) NOT NULL,
  `bagian` varchar(250) NOT NULL,
  `ket` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `penempatan`
--

INSERT INTO `penempatan` (`nip`, `posisi`, `bagian`, `ket`) VALUES
('1111', 'asasa', 'asasas', 'asasasasa'),
('1111', 'assa', 'asas', 'asasa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_normal`
--

CREATE TABLE `t_normal` (
  `id_normal` int(11) NOT NULL,
  `nip` int(12) NOT NULL,
  `c1` int(11) NOT NULL,
  `c2` int(11) NOT NULL,
  `c3` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_normal`
--

INSERT INTO `t_normal` (`id_normal`, `nip`, `c1`, `c2`, `c3`) VALUES
(1, 1, 30, 75, 40),
(2, 2, 30, 75, 50),
(3, 3, 30, 75, 50),
(4, 4, 30, 75, 50),
(5, 5, 30, 75, 50),
(6, 6, 30, 75, 50),
(7, 7, 30, 75, 50),
(8, 8, 40, 75, 50),
(9, 9, 30, 75, 50),
(10, 10, 30, 75, 50),
(11, 11, 30, 70, 50),
(12, 12, 30, 70, 50),
(13, 13, 30, 70, 50),
(14, 14, 30, 65, 30),
(15, 15, 30, 50, 50),
(16, 16, 30, 40, 50),
(17, 17, 30, 50, 50),
(18, 18, 30, 40, 50),
(19, 19, 30, 50, 50),
(20, 20, 30, 30, 50),
(21, 21, 30, 30, 50),
(22, 22, 40, 30, 50),
(23, 23, 30, 30, 50),
(24, 24, 30, 30, 50),
(25, 25, 40, 20, 50),
(26, 26, 30, 20, 50),
(27, 27, 30, 20, 50),
(28, 28, 30, 20, 20),
(29, 29, 30, 10, 10),
(30, 30, 30, 10, 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `t_normal`
--
ALTER TABLE `t_normal`
  ADD PRIMARY KEY (`id_normal`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `t_normal`
--
ALTER TABLE `t_normal`
  MODIFY `id_normal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
