-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 20 Jan 2018 pada 11.13
-- Versi Server: 5.5.32
-- Versi PHP: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `dbuser`
--
CREATE DATABASE IF NOT EXISTS `dbuser` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `dbuser`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_pengguna` int(10) NOT NULL AUTO_INCREMENT,
  `id_tingkat` int(10) NOT NULL,
  `id_dealer` int(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `email` varchar(12) NOT NULL,
  PRIMARY KEY (`id_pengguna`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_pengguna`, `id_tingkat`, `id_dealer`, `nama`, `username`, `password`, `email`) VALUES
(1, 1, 1, 'admin', 'bap', 'bap123', ''),
(2, 3, 1, 'demo', 'demo', 'demo123', ''),
(3, 2, 2, 'makin', 'makin', 'makinjakartagroup', ''),
(4, 2, 2, 'sujarwanto', 'sujarwanto@makingroup.com', 'makin1234', ''),
(5, 3, 2, 'supriadi', 'supriadi@makingroup.com', 'sprdmkn', ''),
(6, 3, 2, 'hendryck', 'hendryck.simanjuntak@makingroup.com', 'simanjuntak', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
