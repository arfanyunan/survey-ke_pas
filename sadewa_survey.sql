-- phpMyAdmin SQL Dump
-- version 4.6.6deb5ubuntu0.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: 06 Jun 2023 pada 08.58
-- Versi Server: 10.1.48-MariaDB-0ubuntu0.18.04.1
-- PHP Version: 7.4.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sadewa_survey`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bangsal`
--

CREATE TABLE `bangsal` (
  `kd_bangsal` int(4) NOT NULL,
  `nm_bangsal` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bangsal`
--

INSERT INTO `bangsal` (`kd_bangsal`, `nm_bangsal`) VALUES
(1001, 'Alengka'),
(1002, 'Amarta'),
(1003, 'Astina'),
(1004, 'Astina VIP'),
(1005, 'Ayodya');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dokter`
--

CREATE TABLE `dokter` (
  `kd_dokter` int(5) NOT NULL,
  `nm_dokter` varchar(250) NOT NULL,
  `kd_sps` int(5) NOT NULL,
  `status_aktif` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dokter`
--

INSERT INTO `dokter` (`kd_dokter`, `nm_dokter`, `kd_sps`, `status_aktif`) VALUES
(3, 'dr. Danny Sulistyowa', 1, 0),
(4, 'dr. Myggi Rizdwike N', 1, 0),
(5, 'dr. Shofwal Widad, S', 2, 0),
(6, 'dr. Hasto Wardoyo, S', 2, 0),
(7, 'dr. Dwikisworo Setyo', 3, 0),
(8, 'dr. Sari Kusumastuti', 3, 0),
(9, 'drg. Wiwik Lestari', 4, 0),
(10, 'drg. Sigit Aprianto', 4, 0),
(11, 'dr. Seso Sulijaya Su', 5, 0),
(12, 'dr. Devi Anggraeni', 1, 0),
(13, 'dr. Nur Noviana (dr ', 1, 0),
(14, 'dr. Fadilla Tiaranis', 1, 0),
(15, 'dr. Dinda Rizki Huta', 1, 0),
(16, 'dr. Amanda Arta M. S', 1, 0),
(17, 'dr. Rinansita Warihw', 1, 0),
(18, 'dr. Ria Rossi (dr Ro', 1, 0),
(19, 'dr. Dyah Listya Palu', 1, 0),
(20, 'dr. Virgien Eka Merd', 1, 0),
(21, 'dr. Ayu Kurnia P (Ni', 1, 0),
(22, 'dr. Achwido Arjundan', 1, 0),
(23, 'dr. Satrio Wicaksono', 1, 0),
(24, 'dr. Ayu Sari Malinda', 1, 0),
(25, 'dr. Seftiandar Mega ', 1, 0),
(26, 'dr. Fendy Andra Fahr', 1, 0),
(27, 'dr. Yane Aulia Yasmi', 1, 0),
(28, 'dr. Ajrina Rarasrum', 1, 0),
(29, 'dr. Sapto', 1, 0),
(30, 'dr. Fauzi Ramadhan', 1, 0),
(31, 'dr. Basar Riyanti', 1, 0),
(32, 'dr. Muh. Taufik Khat', 1, 0),
(33, 'dr. Syamsul Arifin', 1, 0),
(34, 'dr. Destriyanti Rukm', 1, 0),
(35, 'dr. Dewi Retno Sari ', 1, 0),
(36, 'dr. Rahadyan Whisnu ', 1, 0),
(37, 'dr. Nisa', 1, 0),
(38, 'dr. Romzy Azmy Lazua', 1, 0),
(39, 'Suhartati', 4, 0),
(40, 'drg. Elfira Maharani', 4, 0),
(41, 'drg. T. Dian Arisant', 4, 0),
(42, 'drg. Maura Kurnia Uk', 4, 0),
(43, 'drg. Lingga', 4, 0),
(44, 'drg. Ridwan', 4, 0),
(45, 'dr. Hendargo', 4, 0),
(46, 'drg. Berty Maharani ', 4, 0),
(47, 'drg. Gebby A', 4, 0),
(48, 'drg. Bachrul, Sp.BM', 4, 0),
(49, 'dr. Ade Febrina Lest', 3, 0),
(50, 'dr. Desy R Ningtyas ', 3, 0),
(51, 'dr. Braghmandita Wid', 3, 0),
(52, 'dr. Afiarina Dhevian', 3, 0),
(53, 'dr. Th Noor Widiastu', 3, 0),
(54, 'dr. Kurnia Febriana,', 3, 0),
(55, 'dr. Neti Sp.A ', 3, 0),
(56, 'dr. Devie Kristiani,', 3, 0),
(57, 'dr. Weny Inrianto, M', 3, 0),
(58, 'dr. Wahyu Damayanti,', 3, 0),
(59, 'dr. Frecilliaa Regin', 3, 0),
(60, 'dr. Uji, S.PA', 3, 0),
(61, 'dr. Sumadiono, Sp. A', 3, 0),
(62, 'dr. Ahmad Lubaid,M.S', 3, 0),
(63, 'dr. Arta Cristin Yul', 3, 0),
(64, 'dr.  Kurnia Febriana', 3, 0),
(65, 'dr. Vita Susianawati', 3, 0),
(66, 'dr. Retno Palupi,Sp.', 3, 0),
(67, 'dr. Th Noor Widiastu', 3, 0),
(68, 'dr. Dwi Hariyadi,Sp.', 2, 0),
(69, 'dr. Yasmini Fitriyat', 2, 0),
(70, 'dr. Oktavianus Wahyu', 2, 0),
(71, 'dr. Ariesta Christia', 2, 0),
(72, 'dr. Supriyatiningsih', 2, 0),
(73, 'dr. Arief Kurnia, Sp', 2, 0),
(74, 'dr. E Phyowai G, SpO', 2, 0),
(75, 'dr. Ayu Wityasti W, ', 2, 0),
(76, 'dr. dr Dicky Moch Ri', 2, 0),
(77, 'dr. Brian Prima Arth', 2, 0),
(78, 'dr. Fahmi, Sp.OG', 2, 0),
(79, 'dr. Rakano Kautsar, ', 2, 0),
(80, 'dr. Mahindria Vici V', 2, 0),
(81, 'dr. Heru, Sp.OG(K)', 2, 0),
(82, 'dr. Hermawan, SpOG', 2, 0),
(83, 'Dr. dr. HMA. Ashari.', 2, 0),
(84, 'dr. Danny Wiguna, Sp', 2, 0),
(85, 'dr. Arsi Palupi, Sp.', 2, 0),
(86, 'dr. Ardhanu, Sp. OG.', 2, 0),
(87, 'dr. zamzuri hudaya.S', 2, 0),
(88, 'dr. Ivana Beru Brahm', 2, 0),
(89, 'DR. Yunita Erlina Sp', 2, 0),
(90, 'dr. Enny S Pamuji, S', 2, 0),
(91, 'dr. Mitha , SpOG', 2, 0),
(92, 'Prof .dr. Jusuf S.', 2, 0),
(93, 'dr. Budi Susetyo, Sp', 2, 0),
(94, 'dr. Intan, SpOG', 2, 0),
(95, 'dr. TA Ririel Kusumo', 2, 0),
(96, 'dr. Lusiana Irene, S', 2, 0),
(97, 'dr. Bambang Triono ,', 2, 0),
(98, 'dr. Intan Titiasari,', 2, 0),
(99, 'dr. Zahmuri Hudaya, ', 2, 0),
(100, 'dr. Dian Sp.OG', 2, 0),
(101, 'dr. Erick Yuane, SPO', 2, 0),
(102, 'dr. Alfaina Wahyuni,', 2, 0),
(103, 'dr. Ririel, Sp.OG', 2, 0),
(104, 'dr. Lusiana Irene, S', 2, 0),
(105, 'dr. Ardanu, SpOG (K)', 2, 0),
(106, 'dr. Ivanna Beru Brah', 2, 0),
(107, 'dr. lydia olivia Sp.', 2, 0),
(108, 'Prof dr. Ova E. Mmed', 2, 0),
(109, 'Puri Adistya', 2, 0),
(110, 'dr. Mitta Prana M, S', 2, 0),
(111, 'dr. Edwin Kurniawan ', 2, 0),
(112, 'dr. Addin Trirahmant', 2, 0),
(113, 'dr. Doddy , Sp.OG, M', 2, 0),
(114, 'dr. Rukmono Siswisha', 2, 0),
(115, 'dr. Agus Wahyu, Sp.O', 2, 0),
(116, 'dr. Irwan , Sp.OG', 2, 0),
(117, 'dr. Mitta Prana M, S', 2, 0),
(118, 'zamzuri, Sp.Og', 2, 0),
(119, 'dr. Theresia Avilla ', 2, 0),
(120, 'dr. Eka Sp.OG ( K', 2, 0),
(121, 'dr. Doddy Budi Laksa', 2, 0),
(122, 'dr  Chairul Rijal, S', 2, 0),
(123, 'dr. Detty S Nurdiant', 2, 0),
(124, 'dr. Detty Nurdiati, ', 2, 0),
(125, 'dr. Mita Prana Mita,', 2, 0),
(126, 'dr. Erick Yuane,Sp.O', 2, 0),
(127, 'dr. Estya Dewi Widya', 2, 0),
(128, 'dr. Diah Hydrawati S', 2, 0),
(129, 'dr. Irwan Taufiqur R', 2, 0),
(130, 'dr. Erick Yuang, Sp.', 2, 0),
(131, 'dr. Hj. Ivo Fitrian ', 2, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jawaban_survey_igd`
--

CREATE TABLE `jawaban_survey_igd` (
  `id` int(5) NOT NULL,
  `tgl_isi` datetime NOT NULL,
  `tgl_periksa` date NOT NULL,
  `pasien` varchar(250) NOT NULL,
  `petugas` varchar(250) DEFAULT '-',
  `p1` varchar(50) NOT NULL,
  `p2` varchar(50) NOT NULL,
  `p3` varchar(50) NOT NULL,
  `p4` varchar(50) NOT NULL,
  `p5` varchar(50) NOT NULL,
  `saran` text,
  `kritik` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jawaban_survey_igd`
--

INSERT INTO `jawaban_survey_igd` (`id`, `tgl_isi`, `tgl_periksa`, `pasien`, `petugas`, `p1`, `p2`, `p3`, `p4`, `p5`, `saran`, `kritik`) VALUES
(1, '2022-01-01 00:01:00', '2022-01-01', 'Data Dummy', 'Data Dummy', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak Ada', 'Tidak Ada'),
(2, '2022-01-01 00:01:00', '2022-01-01', 'Data Dummy', 'Data Dummy', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak Ada', 'Tidak Ada'),
(3, '2022-01-01 00:01:00', '2022-01-01', 'Data Dummy', 'Data Dummy', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak Ada', 'Tidak Ada'),
(4, '2022-01-01 00:01:00', '2022-01-01', 'Data Dummy', 'Data Dummy', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak Ada', 'Tidak Ada'),
(5, '2022-01-01 00:01:00', '2022-01-01', 'Data Dummy', 'Data Dummy', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak Ada', 'Tidak Ada'),
(6, '2022-01-01 00:01:00', '2022-01-01', 'Data Dummy', 'Data Dummy', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak Ada', 'Tidak Ada'),
(7, '2022-01-01 00:01:00', '2022-01-01', 'Data Dummy', 'Data Dummy', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak Ada', 'Tidak Ada'),
(8, '2022-01-01 00:01:00', '2022-01-01', 'Data Dummy', 'Data Dummy', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak Ada', 'Tidak Ada'),
(9, '2022-01-01 00:01:00', '2022-01-01', 'Data Dummy', 'Data Dummy', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak Ada', 'Tidak Ada'),
(10, '2022-01-01 00:01:00', '2022-01-01', 'Data Dummy', 'Data Dummy', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak Ada', 'Tidak Ada'),
(11, '2022-01-01 00:01:00', '2022-01-01', 'Data Dummy', 'Data Dummy', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak Ada', 'Tidak Ada'),
(12, '2022-01-01 00:01:00', '2022-01-01', 'Data Dummy', 'Data Dummy', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak Ada', 'Tidak Ada'),
(13, '2022-01-01 00:01:00', '2022-01-01', 'Data Dummy', 'Data Dummy', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak Ada', 'Tidak Ada'),
(14, '2022-01-01 00:01:00', '2022-01-01', 'Data Dummy', 'Data Dummy', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak Ada', 'Tidak Ada'),
(15, '2022-01-01 00:01:00', '2022-01-01', 'Data Dummy', 'Data Dummy', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak Ada', 'Tidak Ada'),
(16, '2022-01-01 00:01:00', '2022-01-01', 'Data Dummy', 'Data Dummy', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak Ada', 'Tidak Ada'),
(17, '2022-01-01 00:01:00', '2022-01-01', 'Data Dummy', 'Data Dummy', 'Ya', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak Ada', 'Tidak Ada'),
(18, '2022-01-01 00:01:00', '2022-01-01', 'Data Dummy', 'Data Dummy', 'Ya', 'Ya', 'Ya', 'Tidak', 'Tidak', 'Tidak Ada', 'Tidak Ada'),
(19, '2022-01-01 00:01:00', '2022-01-01', 'Data Dummy', 'Data Dummy', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak', 'Tidak Ada', 'Tidak Ada'),
(20, '2022-01-01 00:01:00', '2022-01-01', 'Data Dummy', 'Data Dummy', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak Ada', 'Tidak Ada'),
(21, '2022-02-01 00:01:00', '2022-02-01', 'Data Dummy', 'Data Dummy', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak Ada', 'Tidak Ada'),
(22, '2022-02-01 00:01:00', '2022-02-01', 'Data Dummy', 'Data Dummy', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak Ada', 'Tidak Ada'),
(23, '2022-02-01 00:01:00', '2022-02-01', 'Data Dummy', 'Data Dummy', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak Ada', 'Tidak Ada'),
(24, '2022-02-01 00:01:00', '2022-02-01', 'Data Dummy', 'Data Dummy', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak Ada', 'Tidak Ada'),
(25, '2022-02-01 00:01:00', '2022-02-01', 'Data Dummy', 'Data Dummy', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak Ada', 'Tidak Ada'),
(26, '2022-02-01 00:01:00', '2022-02-01', 'Data Dummy', 'Data Dummy', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak Ada', 'Tidak Ada'),
(27, '2022-02-01 00:01:00', '2022-02-01', 'Data Dummy', 'Data Dummy', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak Ada', 'Tidak Ada'),
(28, '2022-02-01 00:01:00', '2022-02-01', 'Data Dummy', 'Data Dummy', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak Ada', 'Tidak Ada'),
(29, '2022-02-01 00:01:00', '2022-02-01', 'Data Dummy', 'Data Dummy', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak Ada', 'Tidak Ada'),
(30, '2022-02-01 00:01:00', '2022-02-01', 'Data Dummy', 'Data Dummy', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak Ada', 'Tidak Ada'),
(31, '2022-02-01 00:01:00', '2022-02-01', 'Data Dummy', 'Data Dummy', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak Ada', 'Tidak Ada'),
(32, '2022-02-01 00:01:00', '2022-02-01', 'Data Dummy', 'Data Dummy', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak Ada', 'Tidak Ada'),
(33, '2022-02-01 00:01:00', '2022-02-01', 'Data Dummy', 'Data Dummy', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak Ada', 'Tidak Ada'),
(34, '2022-02-01 00:01:00', '2022-02-01', 'Data Dummy', 'Data Dummy', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak Ada', 'Tidak Ada'),
(35, '2022-02-01 00:01:00', '2022-02-01', 'Data Dummy', 'Data Dummy', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak Ada', 'Tidak Ada'),
(36, '2022-03-01 00:01:00', '2022-03-01', 'Data Dummy', 'Data Dummy', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak Ada', 'Tidak Ada'),
(37, '2022-03-01 00:01:00', '2022-03-01', 'Data Dummy', 'Data Dummy', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak Ada', 'Tidak Ada'),
(38, '2022-03-01 00:01:00', '2022-03-01', 'Data Dummy', 'Data Dummy', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak Ada', 'Tidak Ada'),
(39, '2022-03-01 00:01:00', '2022-03-01', 'Data Dummy', 'Data Dummy', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak Ada', 'Tidak Ada'),
(40, '2022-03-01 00:01:00', '2022-03-01', 'Data Dummy', 'Data Dummy', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak Ada', 'Tidak Ada'),
(41, '2022-04-01 00:01:00', '2022-04-01', 'Data Dummy', 'Data Dummy', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak Ada', 'Tidak Ada'),
(42, '2022-04-01 00:01:00', '2022-04-01', 'Data Dummy', 'Data Dummy', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak Ada', 'Tidak Ada'),
(43, '2022-04-01 00:01:00', '2022-04-01', 'Data Dummy', 'Data Dummy', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak Ada', 'Tidak Ada'),
(44, '2022-04-01 00:01:00', '2022-04-01', 'Data Dummy', 'Data Dummy', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak Ada', 'Tidak Ada'),
(45, '2022-04-01 00:01:00', '2022-04-01', 'Data Dummy', 'Data Dummy', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak Ada', 'Tidak Ada'),
(46, '2022-04-01 00:01:00', '2022-04-01', 'Data Dummy', 'Data Dummy', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak Ada', 'Tidak Ada'),
(47, '2022-04-01 00:01:00', '2022-04-01', 'Data Dummy', 'Data Dummy', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak Ada', 'Tidak Ada'),
(48, '2022-04-01 00:01:00', '2022-04-01', 'Data Dummy', 'Data Dummy', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak Ada', 'Tidak Ada'),
(49, '2022-04-01 00:01:00', '2022-04-01', 'Data Dummy', 'Data Dummy', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak Ada', 'Tidak Ada'),
(50, '2022-04-01 00:01:00', '2022-04-01', 'Data Dummy', 'Data Dummy', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak Ada', 'Tidak Ada'),
(51, '2022-05-01 00:01:00', '2022-05-01', 'Data Dummy', 'Data Dummy', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak Ada', 'Tidak Ada'),
(52, '2022-05-01 00:01:00', '2022-05-01', 'Data Dummy', 'Data Dummy', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak Ada', 'Tidak Ada'),
(53, '2022-05-01 00:01:00', '2022-05-01', 'Data Dummy', 'Data Dummy', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak Ada', 'Tidak Ada'),
(54, '2022-05-01 00:01:00', '2022-05-01', 'Data Dummy', 'Data Dummy', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak Ada', 'Tidak Ada'),
(55, '2022-05-01 00:01:00', '2022-05-01', 'Data Dummy', 'Data Dummy', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak Ada', 'Tidak Ada'),
(56, '2022-05-01 00:01:00', '2022-05-01', 'Data Dummy', 'Data Dummy', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak Ada', 'Tidak Ada'),
(57, '2022-05-01 00:01:00', '2022-05-01', 'Data Dummy', 'Data Dummy', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak Ada', 'Tidak Ada'),
(58, '2022-05-01 00:01:00', '2022-05-01', 'Data Dummy', 'Data Dummy', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak Ada', 'Tidak Ada'),
(59, '2022-05-01 00:01:00', '2022-05-01', 'Data Dummy', 'Data Dummy', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak Ada', 'Tidak Ada'),
(60, '2022-05-01 00:01:00', '2022-05-01', 'Data Dummy', 'Data Dummy', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak Ada', 'Tidak Ada'),
(61, '2022-06-01 00:01:00', '2022-06-01', 'Data Dummy', 'Data Dummy', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak Ada', 'Tidak Ada'),
(62, '2022-06-01 00:01:00', '2022-06-01', 'Data Dummy', 'Data Dummy', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak Ada', 'Tidak Ada'),
(63, '2022-06-01 00:01:00', '2022-06-01', 'Data Dummy', 'Data Dummy', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak Ada', 'Tidak Ada'),
(64, '2022-06-01 00:01:00', '2022-06-01', 'Data Dummy', 'Data Dummy', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak Ada', 'Tidak Ada'),
(65, '2022-06-01 00:01:00', '2022-06-01', 'Data Dummy', 'Data Dummy', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak Ada', 'Tidak Ada'),
(66, '2022-07-01 00:01:00', '2022-07-01', 'Data Dummy', 'Data Dummy', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak Ada', 'Tidak Ada'),
(67, '2022-07-01 00:01:00', '2022-07-01', 'Data Dummy', 'Data Dummy', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak Ada', 'Tidak Ada'),
(68, '2022-07-01 00:01:00', '2022-07-01', 'Data Dummy', 'Data Dummy', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak Ada', 'Tidak Ada'),
(69, '2022-07-01 00:01:00', '2022-07-01', 'Data Dummy', 'Data Dummy', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak Ada', 'Tidak Ada'),
(70, '2022-07-01 00:01:00', '2022-07-01', 'Data Dummy', 'Data Dummy', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak Ada', 'Tidak Ada'),
(71, '2022-07-01 00:01:00', '2022-07-01', 'Data Dummy', 'Data Dummy', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak Ada', 'Tidak Ada'),
(72, '2022-07-01 00:01:00', '2022-07-01', 'Data Dummy', 'Data Dummy', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak Ada', 'Tidak Ada'),
(73, '2022-07-01 00:01:00', '2022-07-01', 'Data Dummy', 'Data Dummy', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak Ada', 'Tidak Ada'),
(74, '2022-07-01 00:01:00', '2022-07-01', 'Data Dummy', 'Data Dummy', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak Ada', 'Tidak Ada'),
(75, '2022-07-01 00:01:00', '2022-07-01', 'Data Dummy', 'Data Dummy', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak Ada', 'Tidak Ada'),
(76, '2022-08-01 00:01:00', '2022-08-01', 'Data Dummy', 'Data Dummy', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak Ada', 'Tidak Ada'),
(77, '2022-08-01 00:01:00', '2022-08-01', 'Data Dummy', 'Data Dummy', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak Ada', 'Tidak Ada'),
(78, '2022-08-01 00:01:00', '2022-08-01', 'Data Dummy', 'Data Dummy', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak Ada', 'Tidak Ada'),
(79, '2022-08-01 00:01:00', '2022-08-01', 'Data Dummy', 'Data Dummy', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak Ada', 'Tidak Ada'),
(80, '2022-08-01 00:01:00', '2022-08-01', 'Data Dummy', 'Data Dummy', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak Ada', 'Tidak Ada'),
(81, '2022-09-01 00:01:00', '2022-09-01', 'Data Dummy', 'Data Dummy', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak Ada', 'Tidak Ada'),
(82, '2022-09-01 00:01:00', '2022-09-01', 'Data Dummy', 'Data Dummy', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak Ada', 'Tidak Ada'),
(83, '2022-09-01 00:01:00', '2022-09-01', 'Data Dummy', 'Data Dummy', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak Ada', 'Tidak Ada'),
(84, '2022-09-01 00:01:00', '2022-09-01', 'Data Dummy', 'Data Dummy', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak Ada', 'Tidak Ada'),
(85, '2022-09-01 00:01:00', '2022-09-01', 'Data Dummy', 'Data Dummy', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak Ada', 'Tidak Ada'),
(86, '2022-09-01 00:01:00', '2022-09-01', 'Data Dummy', 'Data Dummy', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak Ada', 'Tidak Ada'),
(87, '2022-09-01 00:01:00', '2022-09-01', 'Data Dummy', 'Data Dummy', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak Ada', 'Tidak Ada'),
(88, '2022-09-01 00:01:00', '2022-09-01', 'Data Dummy', 'Data Dummy', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak Ada', 'Tidak Ada'),
(89, '2022-09-01 00:01:00', '2022-09-01', 'Data Dummy', 'Data Dummy', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak Ada', 'Tidak Ada'),
(90, '2022-09-01 00:01:00', '2022-09-01', 'Data Dummy', 'Data Dummy', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak Ada', 'Tidak Ada'),
(91, '2022-10-01 00:01:00', '2022-10-01', 'Data Dummy', 'Data Dummy', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak Ada', 'Tidak Ada'),
(92, '2022-10-01 00:01:00', '2022-10-01', 'Data Dummy', 'Data Dummy', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak Ada', 'Tidak Ada'),
(93, '2022-10-01 00:01:00', '2022-10-01', 'Data Dummy', 'Data Dummy', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak Ada', 'Tidak Ada'),
(94, '2022-10-01 00:01:00', '2022-10-01', 'Data Dummy', 'Data Dummy', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak Ada', 'Tidak Ada'),
(95, '2022-10-01 00:01:00', '2022-10-01', 'Data Dummy', 'Data Dummy', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak Ada', 'Tidak Ada'),
(96, '2022-10-01 00:01:00', '2022-10-01', 'Data Dummy', 'Data Dummy', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak Ada', 'Tidak Ada'),
(97, '2022-10-01 00:01:00', '2022-10-01', 'Data Dummy', 'Data Dummy', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak Ada', 'Tidak Ada'),
(98, '2022-10-01 00:01:00', '2022-10-01', 'Data Dummy', 'Data Dummy', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak Ada', 'Tidak Ada'),
(99, '2022-10-01 00:01:00', '2022-10-01', 'Data Dummy', 'Data Dummy', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak Ada', 'Tidak Ada'),
(100, '2022-10-01 00:01:00', '2022-10-01', 'Data Dummy', 'Data Dummy', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak Ada', 'Tidak Ada'),
(101, '2022-11-01 00:01:00', '2022-11-01', 'Data Dummy', 'Data Dummy', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak Ada', 'Tidak Ada'),
(102, '2022-11-01 00:01:00', '2022-11-01', 'Data Dummy', 'Data Dummy', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak Ada', 'Tidak Ada'),
(103, '2022-11-01 00:01:00', '2022-11-01', 'Data Dummy', 'Data Dummy', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak Ada', 'Tidak Ada'),
(104, '2022-11-01 00:01:00', '2022-11-01', 'Data Dummy', 'Data Dummy', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak Ada', 'Tidak Ada'),
(105, '2022-11-01 00:01:00', '2022-11-01', 'Data Dummy', 'Data Dummy', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak Ada', 'Tidak Ada'),
(106, '2022-12-01 00:01:00', '2022-12-01', 'Data Dummy', 'Data Dummy', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak Ada', 'Tidak Ada'),
(107, '2022-12-01 00:01:00', '2022-12-01', 'Data Dummy', 'Data Dummy', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak Ada', 'Tidak Ada'),
(108, '2022-12-01 00:01:00', '2022-12-01', 'Data Dummy', 'Data Dummy', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak Ada', 'Tidak Ada'),
(109, '2022-12-01 00:01:00', '2022-12-01', 'Data Dummy', 'Data Dummy', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak Ada', 'Tidak Ada'),
(110, '2022-12-01 00:01:00', '2022-12-01', 'Data Dummy', 'Data Dummy', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak Ada', 'Tidak Ada'),
(111, '2022-12-01 00:01:00', '2022-12-01', 'Data Dummy', 'Data Dummy', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak Ada', 'Tidak Ada'),
(112, '2022-12-01 00:01:00', '2022-12-01', 'Data Dummy', 'Data Dummy', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak Ada', 'Tidak Ada'),
(113, '2022-12-01 00:01:00', '2022-12-01', 'Data Dummy', 'Data Dummy', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak Ada', 'Tidak Ada'),
(114, '2022-12-01 00:01:00', '2022-12-01', 'Data Dummy', 'Data Dummy', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak Ada', 'Tidak Ada'),
(115, '2022-12-01 00:01:00', '2022-12-01', 'Data Dummy', 'Data Dummy', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak Ada', 'Tidak Ada'),
(177, '2023-05-26 08:49:16', '2023-05-10', 'Yulianti', 'Dika', 'Tidak, Tidak puas ', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak Ada', 'Tidak Ada'),
(178, '2023-05-29 11:18:29', '2023-05-01', 'Yulianti', 'Dika', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak Ada', 'Tidak Ada'),
(179, '2023-05-29 11:19:20', '2023-05-01', 'Yulianti', 'Dika', 'Tidak, Tidak Puas', 'Tidak, Tidak Puas', 'Tidak, Tidak Puas', 'Tidak, Tidak Puas', 'Tidak, Tidak Puas', 'Tidak Ada', 'Tidak Ada'),
(180, '2023-05-29 12:45:31', '2023-05-01', 'Yulianti', '', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', '', ''),
(181, '2023-05-29 12:49:12', '2023-05-01', 'Yulianti', '', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', '', ''),
(182, '2023-05-29 14:22:20', '2023-05-01', 'Yulianti', 'Dika', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', '', ''),
(183, '2023-05-31 08:28:59', '2023-05-01', 'Dwi', 'Fajardika', 'Tidak, Tidak puas', 'Tidak, Tidak puas', 'Tidak, Tidak puas', 'Tidak, Tidak puas', 'Tidak, Tidak puas', 'Tidak puas', 'Tidak puas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jawaban_survey_ralan`
--

CREATE TABLE `jawaban_survey_ralan` (
  `id` int(5) NOT NULL,
  `tgl_isi` datetime NOT NULL,
  `tgl_periksa` date NOT NULL,
  `kd_sps` int(5) NOT NULL,
  `kd_dokter` int(5) NOT NULL,
  `nm_pasien` varchar(250) NOT NULL,
  `nm_petugas` varchar(250) DEFAULT '-',
  `p1` varchar(50) NOT NULL,
  `p2` varchar(50) NOT NULL,
  `p3` varchar(50) NOT NULL,
  `p4` varchar(50) NOT NULL,
  `p5` varchar(50) NOT NULL,
  `saran` text,
  `kritik` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jawaban_survey_ralan`
--

INSERT INTO `jawaban_survey_ralan` (`id`, `tgl_isi`, `tgl_periksa`, `kd_sps`, `kd_dokter`, `nm_pasien`, `nm_petugas`, `p1`, `p2`, `p3`, `p4`, `p5`, `saran`, `kritik`) VALUES
(1, '2022-01-01 00:01:00', '2022-01-01', 1, 3, 'Data Dummy', 'Data Dummy', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Tidak Ada', 'Tidak Ada'),
(2, '2022-01-01 00:01:00', '2022-01-01', 1, 3, 'Data Dummy', 'Data Dummy', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Tidak Ada', 'Tidak Ada'),
(3, '2022-01-01 00:01:00', '2022-01-01', 1, 3, 'Data Dummy', 'Data Dummy', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Tidak Ada', 'Tidak Ada'),
(4, '2022-01-01 00:01:00', '2022-01-01', 1, 3, 'Data Dummy', 'Data Dummy', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Tidak Ada', 'Tidak Ada'),
(5, '2022-01-01 00:01:00', '2022-01-01', 1, 3, 'Data Dummy', 'Data Dummy', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Tidak Ada', 'Tidak Ada'),
(6, '2022-02-01 00:01:00', '2022-02-01', 1, 3, 'Data Dummy', 'Data Dummy', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Tidak Ada', 'Tidak Ada'),
(7, '2022-02-01 00:01:00', '2022-02-01', 1, 3, 'Data Dummy', 'Data Dummy', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Tidak Ada', 'Tidak Ada'),
(8, '2022-02-01 00:01:00', '2022-02-01', 1, 3, 'Data Dummy', 'Data Dummy', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Tidak Ada', 'Tidak Ada'),
(9, '2022-02-01 00:01:00', '2022-02-01', 1, 3, 'Data Dummy', 'Data Dummy', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Tidak Ada', 'Tidak Ada'),
(10, '2022-02-01 00:01:00', '2022-02-01', 1, 3, 'Data Dummy', 'Data Dummy', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Tidak Ada', 'Tidak Ada'),
(11, '2022-02-01 00:01:00', '2022-02-01', 1, 3, 'Data Dummy', 'Data Dummy', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Tidak Ada', 'Tidak Ada'),
(12, '2022-02-01 00:01:00', '2022-02-01', 1, 3, 'Data Dummy', 'Data Dummy', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Tidak Ada', 'Tidak Ada'),
(13, '2022-02-01 00:01:00', '2022-02-01', 1, 3, 'Data Dummy', 'Data Dummy', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Tidak Ada', 'Tidak Ada'),
(14, '2022-02-01 00:01:00', '2022-02-01', 1, 3, 'Data Dummy', 'Data Dummy', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Tidak Ada', 'Tidak Ada'),
(15, '2022-02-01 00:01:00', '2022-02-01', 1, 3, 'Data Dummy', 'Data Dummy', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Tidak Ada', 'Tidak Ada'),
(16, '2022-02-01 00:01:00', '2022-02-01', 1, 3, 'Data Dummy', 'Data Dummy', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Tidak Ada', 'Tidak Ada'),
(17, '2022-03-01 00:01:00', '2022-03-01', 1, 3, 'Data Dummy', 'Data Dummy', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Tidak Ada', 'Tidak Ada'),
(18, '2022-03-01 00:01:00', '2022-03-01', 1, 3, 'Data Dummy', 'Data Dummy', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Tidak Ada', 'Tidak Ada'),
(19, '2022-03-01 00:01:00', '2022-03-01', 1, 3, 'Data Dummy', 'Data Dummy', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Tidak Ada', 'Tidak Ada'),
(20, '2022-03-01 00:01:00', '2022-03-01', 1, 3, 'Data Dummy', 'Data Dummy', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Tidak Ada', 'Tidak Ada'),
(21, '2022-03-01 00:01:00', '2022-03-01', 1, 3, 'Data Dummy', 'Data Dummy', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Tidak Ada', 'Tidak Ada'),
(22, '2022-04-01 00:01:00', '2022-04-01', 1, 3, 'Data Dummy', 'Data Dummy', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Tidak Ada', 'Tidak Ada'),
(23, '2022-04-01 00:01:00', '2022-04-01', 1, 3, 'Data Dummy', 'Data Dummy', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Tidak Ada', 'Tidak Ada'),
(24, '2022-04-01 00:01:00', '2022-04-01', 1, 3, 'Data Dummy', 'Data Dummy', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Tidak Ada', 'Tidak Ada'),
(25, '2022-04-01 00:01:00', '2022-04-01', 1, 3, 'Data Dummy', 'Data Dummy', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Tidak Ada', 'Tidak Ada'),
(26, '2022-04-01 00:01:00', '2022-04-01', 1, 3, 'Data Dummy', 'Data Dummy', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Tidak Ada', 'Tidak Ada'),
(27, '2022-04-01 00:01:00', '2022-04-01', 1, 3, 'Data Dummy', 'Data Dummy', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Tidak Ada', 'Tidak Ada'),
(28, '2022-04-01 00:01:00', '2022-04-01', 1, 3, 'Data Dummy', 'Data Dummy', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Tidak Ada', 'Tidak Ada'),
(29, '2022-04-01 00:01:00', '2022-04-01', 1, 3, 'Data Dummy', 'Data Dummy', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Tidak Ada', 'Tidak Ada'),
(30, '2022-04-01 00:01:00', '2022-04-01', 1, 3, 'Data Dummy', 'Data Dummy', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Tidak Ada', 'Tidak Ada'),
(31, '2022-04-01 00:01:00', '2022-04-01', 1, 3, 'Data Dummy', 'Data Dummy', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Tidak Ada', 'Tidak Ada'),
(32, '2022-04-01 00:01:00', '2022-04-01', 1, 3, 'Data Dummy', 'Data Dummy', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Tidak Ada', 'Tidak Ada'),
(33, '2022-04-01 00:01:00', '2022-04-01', 1, 3, 'Data Dummy', 'Data Dummy', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Tidak Ada', 'Tidak Ada'),
(34, '2022-04-01 00:01:00', '2022-04-01', 1, 3, 'Data Dummy', 'Data Dummy', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Tidak Ada', 'Tidak Ada'),
(35, '2022-04-01 00:01:00', '2022-04-01', 1, 3, 'Data Dummy', 'Data Dummy', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Tidak Ada', 'Tidak Ada'),
(36, '2022-04-01 00:01:00', '2022-04-01', 1, 3, 'Data Dummy', 'Data Dummy', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Tidak Ada', 'Tidak Ada'),
(37, '2022-05-01 00:01:00', '2022-05-01', 1, 3, 'Data Dummy', 'Data Dummy', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Tidak Ada', 'Tidak Ada'),
(38, '2022-05-01 00:01:00', '2022-05-01', 1, 3, 'Data Dummy', 'Data Dummy', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Tidak Ada', 'Tidak Ada'),
(39, '2022-05-01 00:01:00', '2022-05-01', 1, 3, 'Data Dummy', 'Data Dummy', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Tidak Ada', 'Tidak Ada'),
(40, '2022-05-01 00:01:00', '2022-05-01', 1, 3, 'Data Dummy', 'Data Dummy', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Tidak Ada', 'Tidak Ada'),
(41, '2022-05-01 00:01:00', '2022-05-01', 1, 3, 'Data Dummy', 'Data Dummy', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Tidak Ada', 'Tidak Ada'),
(42, '2022-06-01 00:01:00', '2022-06-01', 1, 3, 'Data Dummy', 'Data Dummy', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Tidak Ada', 'Tidak Ada'),
(43, '2022-06-01 00:01:00', '2022-06-01', 1, 3, 'Data Dummy', 'Data Dummy', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Tidak Ada', 'Tidak Ada'),
(44, '2022-06-01 00:01:00', '2022-06-01', 1, 3, 'Data Dummy', 'Data Dummy', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Tidak Ada', 'Tidak Ada'),
(45, '2022-06-01 00:01:00', '2022-06-01', 1, 3, 'Data Dummy', 'Data Dummy', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Tidak Ada', 'Tidak Ada'),
(46, '2022-06-01 00:01:00', '2022-06-01', 1, 3, 'Data Dummy', 'Data Dummy', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Tidak Ada', 'Tidak Ada'),
(47, '2022-06-01 00:01:00', '2022-06-01', 1, 3, 'Data Dummy', 'Data Dummy', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Tidak Ada', 'Tidak Ada'),
(48, '2022-06-01 00:01:00', '2022-06-01', 1, 3, 'Data Dummy', 'Data Dummy', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Tidak Ada', 'Tidak Ada'),
(49, '2022-06-01 00:01:00', '2022-06-01', 1, 3, 'Data Dummy', 'Data Dummy', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Tidak Ada', 'Tidak Ada'),
(50, '2022-06-01 00:01:00', '2022-06-01', 1, 3, 'Data Dummy', 'Data Dummy', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Tidak Ada', 'Tidak Ada'),
(51, '2022-06-01 00:01:00', '2022-06-01', 1, 3, 'Data Dummy', 'Data Dummy', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Tidak Ada', 'Tidak Ada'),
(52, '2022-07-01 00:01:00', '2022-07-01', 1, 3, 'Data Dummy', 'Data Dummy', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Tidak Ada', 'Tidak Ada'),
(53, '2022-07-01 00:01:00', '2022-07-01', 1, 3, 'Data Dummy', 'Data Dummy', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Tidak Ada', 'Tidak Ada'),
(54, '2022-07-01 00:01:00', '2022-07-01', 1, 3, 'Data Dummy', 'Data Dummy', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Tidak Ada', 'Tidak Ada'),
(55, '2022-07-01 00:01:00', '2022-07-01', 1, 3, 'Data Dummy', 'Data Dummy', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Tidak Ada', 'Tidak Ada'),
(56, '2022-07-01 00:01:00', '2022-07-01', 1, 3, 'Data Dummy', 'Data Dummy', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Tidak Ada', 'Tidak Ada'),
(57, '2022-07-01 00:01:00', '2022-07-01', 1, 3, 'Data Dummy', 'Data Dummy', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Tidak Ada', 'Tidak Ada'),
(58, '2022-07-01 00:01:00', '2022-07-01', 1, 3, 'Data Dummy', 'Data Dummy', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Tidak Ada', 'Tidak Ada'),
(59, '2022-08-01 00:01:00', '2022-08-01', 1, 3, 'Data Dummy', 'Data Dummy', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Tidak Ada', 'Tidak Ada'),
(60, '2022-08-01 00:01:00', '2022-08-01', 1, 3, 'Data Dummy', 'Data Dummy', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Tidak Ada', 'Tidak Ada'),
(61, '2022-08-01 00:01:00', '2022-08-01', 1, 3, 'Data Dummy', 'Data Dummy', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Tidak Ada', 'Tidak Ada'),
(62, '2022-08-01 00:01:00', '2022-08-01', 1, 3, 'Data Dummy', 'Data Dummy', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Tidak Ada', 'Tidak Ada'),
(63, '2022-08-01 00:01:00', '2022-08-01', 1, 3, 'Data Dummy', 'Data Dummy', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Tidak Ada', 'Tidak Ada'),
(64, '2022-08-01 00:01:00', '2022-08-01', 1, 3, 'Data Dummy', 'Data Dummy', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Tidak Ada', 'Tidak Ada'),
(65, '2022-08-01 00:01:00', '2022-08-01', 1, 3, 'Data Dummy', 'Data Dummy', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Tidak Ada', 'Tidak Ada'),
(66, '2022-08-01 00:01:00', '2022-08-01', 1, 3, 'Data Dummy', 'Data Dummy', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Tidak Ada', 'Tidak Ada'),
(67, '2022-08-01 00:01:00', '2022-08-01', 1, 3, 'Data Dummy', 'Data Dummy', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Tidak Ada', 'Tidak Ada'),
(68, '2022-08-01 00:01:00', '2022-08-01', 1, 3, 'Data Dummy', 'Data Dummy', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Tidak Ada', 'Tidak Ada'),
(69, '2022-09-01 00:01:00', '2022-09-01', 1, 3, 'Data Dummy', 'Data Dummy', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Tidak Ada', 'Tidak Ada'),
(70, '2022-09-01 00:01:00', '2022-09-01', 1, 3, 'Data Dummy', 'Data Dummy', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Tidak Ada', 'Tidak Ada'),
(71, '2022-09-01 00:01:00', '2022-09-01', 1, 3, 'Data Dummy', 'Data Dummy', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Tidak Ada', 'Tidak Ada'),
(72, '2022-09-01 00:01:00', '2022-09-01', 1, 3, 'Data Dummy', 'Data Dummy', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Tidak Ada', 'Tidak Ada'),
(73, '2022-09-01 00:01:00', '2022-09-01', 1, 3, 'Data Dummy', 'Data Dummy', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Tidak Ada', 'Tidak Ada'),
(74, '2022-10-01 00:01:00', '2022-10-01', 1, 3, 'Data Dummy', 'Data Dummy', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Tidak Ada', 'Tidak Ada'),
(75, '2022-10-01 00:01:00', '2022-10-01', 1, 3, 'Data Dummy', 'Data Dummy', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Tidak Ada', 'Tidak Ada'),
(76, '2022-10-01 00:01:00', '2022-10-01', 1, 3, 'Data Dummy', 'Data Dummy', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Tidak Ada', 'Tidak Ada'),
(77, '2022-10-01 00:01:00', '2022-10-01', 1, 3, 'Data Dummy', 'Data Dummy', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Tidak Ada', 'Tidak Ada'),
(78, '2022-10-01 00:01:00', '2022-10-01', 1, 3, 'Data Dummy', 'Data Dummy', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Tidak Ada', 'Tidak Ada'),
(79, '2022-11-01 00:01:00', '2022-11-01', 1, 3, 'Data Dummy', 'Data Dummy', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Tidak Ada', 'Tidak Ada'),
(80, '2022-11-01 00:01:00', '2022-11-01', 1, 3, 'Data Dummy', 'Data Dummy', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Tidak Ada', 'Tidak Ada'),
(81, '2022-11-01 00:01:00', '2022-11-01', 1, 3, 'Data Dummy', 'Data Dummy', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Tidak Ada', 'Tidak Ada'),
(82, '2022-11-01 00:01:00', '2022-11-01', 1, 3, 'Data Dummy', 'Data Dummy', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Tidak Ada', 'Tidak Ada'),
(83, '2022-11-01 00:01:00', '2022-11-01', 1, 3, 'Data Dummy', 'Data Dummy', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Tidak Ada', 'Tidak Ada'),
(84, '2022-11-01 00:01:00', '2022-11-01', 1, 3, 'Data Dummy', 'Data Dummy', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Tidak Ada', 'Tidak Ada'),
(85, '2022-11-01 00:01:00', '2022-11-01', 1, 3, 'Data Dummy', 'Data Dummy', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Tidak Ada', 'Tidak Ada'),
(86, '2022-11-01 00:01:00', '2022-11-01', 1, 3, 'Data Dummy', 'Data Dummy', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Tidak Ada', 'Tidak Ada'),
(87, '2022-12-01 00:01:00', '2022-12-01', 1, 3, 'Data Dummy', 'Data Dummy', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Tidak Ada', 'Tidak Ada'),
(88, '2022-12-01 00:01:00', '2022-12-01', 1, 3, 'Data Dummy', 'Data Dummy', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Tidak Ada', 'Tidak Ada'),
(89, '2022-12-01 00:01:00', '2022-12-01', 1, 3, 'Data Dummy', 'Data Dummy', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Tidak Ada', 'Tidak Ada'),
(90, '2022-12-01 00:01:00', '2022-12-01', 1, 3, 'Data Dummy', 'Data Dummy', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Tidak Ada', 'Tidak Ada'),
(91, '2022-12-01 00:01:00', '2022-12-01', 1, 3, 'Data Dummy', 'Data Dummy', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Tidak Ada', 'Tidak Ada'),
(92, '2022-12-01 00:01:00', '2022-12-01', 1, 3, 'Data Dummy', 'Data Dummy', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Tidak Ada', 'Tidak Ada'),
(93, '2022-12-01 00:01:00', '2022-12-01', 1, 3, 'Data Dummy', 'Data Dummy', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Tidak Ada', 'Tidak Ada'),
(94, '2022-12-01 00:01:00', '2022-12-01', 1, 3, 'Data Dummy', 'Data Dummy', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Tidak Ada', 'Tidak Ada'),
(95, '2022-12-01 00:01:00', '2022-12-01', 1, 3, 'Data Dummy', 'Data Dummy', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Tidak Ada', 'Tidak Ada'),
(96, '2022-12-01 00:01:00', '2022-12-01', 1, 3, 'Data Dummy', 'Data Dummy', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Tidak Ada', 'Tidak Ada'),
(336, '2023-05-26 08:50:22', '2023-05-30', 2, 70, 'Yulianti', 'Dika', 'Baik', 'Baik', 'Baik', 'Cukup', 'Baik', 'Tidak Ada', 'Tidak Ada'),
(337, '2023-05-29 11:25:45', '2023-05-01', 5, 11, 'Yulianti', 'Dika', 'Baik Sekali', 'Baik Sekali', 'Baik Sekali', 'Baik Sekali', 'Baik Sekali', 'Tidak Ada', 'Tidak Ada'),
(338, '2023-05-29 11:26:23', '2023-05-01', 3, 50, 'Yulianti', 'Dika', 'Baik Sekali', 'Baik Sekali', 'Baik Sekali', 'Baik Sekali', 'Baik Sekali', 'Tidak Ada', 'Tidak Ada'),
(339, '2023-05-29 11:42:20', '2023-05-30', 1, 4, 'Yulianti', '', 'Baik Sekali', 'Baik Sekali', 'Baik Sekali', 'Baik Sekali', 'Baik Sekali', '', ''),
(340, '2023-05-29 12:50:12', '2023-05-01', 5, 11, 'Yulianti', '', 'Baik', 'Cukup', 'Cukup', 'Kurang', 'Cukup', '', ''),
(341, '2023-05-29 14:22:46', '2023-05-16', 1, 12, 'Yulianti', 'Dika', 'Baik Sekali', 'Baik Sekali', 'Baik Sekali', 'Baik Sekali', 'Baik Sekali', '', ''),
(342, '2023-05-29 14:58:07', '2023-05-31', 1, 12, 'Yulianti', 'Dika', 'Baik Sekali', 'Baik Sekali', 'Baik Sekali', 'Baik Sekali', 'Baik Sekali', '', ''),
(343, '2023-05-31 08:30:27', '2023-05-01', 1, 3, 'Dwi', 'Fajardika', 'Baik Sekali', 'Baik Sekali', 'Baik Sekali', 'Baik Sekali', 'Baik Sekali', 'Puas', 'Puas'),
(344, '2023-06-05 13:15:18', '2023-06-05', 4, 10, 'adaaaa', 'sari', 'Baik', 'Baik', 'Baik', 'Cukup', 'Cukup', 'saranya apa ngga tau', 'Belum nemu yang mau di kritik');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jawaban_survey_ranap`
--

CREATE TABLE `jawaban_survey_ranap` (
  `id` int(5) NOT NULL,
  `tgl_isi` datetime NOT NULL,
  `tgl_ranap` date NOT NULL,
  `pasien` varchar(250) NOT NULL,
  `petugas` varchar(250) DEFAULT '-',
  `bangsal` varchar(250) NOT NULL,
  `p1` text NOT NULL,
  `p2` text NOT NULL,
  `p3` text NOT NULL,
  `p4` text NOT NULL,
  `p5` text NOT NULL,
  `p6` text NOT NULL,
  `p7` text NOT NULL,
  `p8a` varchar(50) DEFAULT NULL,
  `p8b` varchar(50) DEFAULT NULL,
  `p8c` varchar(50) DEFAULT NULL,
  `p8d` varchar(50) DEFAULT NULL,
  `saran` text,
  `kritik` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jawaban_survey_ranap`
--

INSERT INTO `jawaban_survey_ranap` (`id`, `tgl_isi`, `tgl_ranap`, `pasien`, `petugas`, `bangsal`, `p1`, `p2`, `p3`, `p4`, `p5`, `p6`, `p7`, `p8a`, `p8b`, `p8c`, `p8d`, `saran`, `kritik`) VALUES
(1, '2023-06-01 00:00:00', '2023-06-01', 'Data Dummy', 'Data Dummy', 'Alengka', 'Baik Sekali', 'Baik Sekali', 'Baik Sekali', 'Baik Sekali', 'Ya', 'Ya', 'Ya', NULL, NULL, NULL, NULL, NULL, NULL),
(2, '2023-06-01 00:00:00', '2023-06-01', 'Data Dummy', 'Data Dummy', 'Alengka', 'Baik Sekali', 'Baik Sekali', 'Baik Sekali', 'Baik Sekali', 'Ya', 'Ya', 'Ya', NULL, NULL, NULL, NULL, NULL, NULL),
(3, '2023-06-01 00:00:00', '2023-06-01', 'Data Dummy', 'Data Dummy', 'Alengka', 'Baik Sekali', 'Baik Sekali', 'Baik Sekali', 'Baik Sekali', 'Ya', 'Ya', 'Ya', NULL, NULL, NULL, NULL, NULL, NULL),
(4, '2023-06-01 00:00:00', '2023-06-01', 'Data Dummy', 'Data Dummy', 'Alengka', 'Baik Sekali', 'Baik Sekali', 'Baik Sekali', 'Baik Sekali', 'Ya', 'Ya', 'Ya', NULL, NULL, NULL, NULL, NULL, NULL),
(5, '2023-06-01 00:00:00', '2023-06-01', 'Data Dummy', 'Data Dummy', 'Alengka', 'Baik Sekali', 'Baik Sekali', 'Baik Sekali', 'Baik Sekali', 'Ya', 'Ya', 'Ya', NULL, NULL, NULL, NULL, NULL, NULL),
(6, '2023-06-01 00:00:00', '2023-06-01', 'Data Dummy', 'Data Dummy', 'Alengka', 'Baik', 'Baik', 'Baik', 'Baik', 'Ya', 'Ya', 'Ya', NULL, NULL, NULL, NULL, NULL, NULL),
(7, '2023-06-01 00:00:00', '2023-06-01', 'Data Dummy', 'Data Dummy', 'Alengka', 'Baik', 'Baik', 'Baik', 'Baik', 'Ya', 'Ya', 'Ya', NULL, NULL, NULL, NULL, NULL, NULL),
(8, '2023-06-01 00:00:00', '2023-06-01', 'Data Dummy', 'Data Dummy', 'Alengka', 'Baik', 'Baik', 'Baik', 'Baik', 'Ya', 'Ya', 'Ya', NULL, NULL, NULL, NULL, NULL, NULL),
(9, '2023-06-01 00:00:00', '2023-06-01', 'Data Dummy', 'Data Dummy', 'Alengka', 'Baik', 'Baik', 'Baik', 'Baik', 'Ya', 'Ya', 'Ya', NULL, NULL, NULL, NULL, NULL, NULL),
(10, '2023-06-01 00:00:00', '2023-06-01', 'Data Dummy', 'Data Dummy', 'Alengka', 'Cukup', 'Cukup', 'Cukup', 'Cukup', 'Ya', 'Ya', 'Ya', NULL, NULL, NULL, NULL, NULL, NULL),
(11, '2023-06-01 00:00:00', '2023-06-01', 'Data Dummy', 'Data Dummy', 'Alengka', 'Cukup', 'Cukup', 'Cukup', 'Cukup', 'Ya', 'Ya', 'Ya', NULL, NULL, NULL, NULL, NULL, NULL),
(12, '2023-06-01 00:00:00', '2023-06-01', 'Data Dummy', 'Data Dummy', 'Alengka', 'Cukup', 'Cukup', 'Cukup', 'Cukup', 'Ya', 'Ya', 'Ya', NULL, NULL, NULL, NULL, NULL, NULL),
(13, '2023-06-01 00:00:00', '2023-06-01', 'Data Dummy', 'Data Dummy', 'Alengka', 'Kurang', 'Kurang', 'Kurang', 'Kurang', 'Ya', 'Ya', 'Ya', NULL, NULL, NULL, NULL, NULL, NULL),
(14, '2023-06-01 00:00:00', '2023-06-01', 'Data Dummy', 'Data Dummy', 'Alengka', 'Kurang Sekali', 'Kurang', 'Kurang', 'Kurang', 'Ya', 'Ya', 'Ya', NULL, NULL, NULL, NULL, NULL, NULL),
(15, '2023-06-01 00:00:00', '2023-06-01', 'Data Dummy', 'Data Dummy', 'Alengka', 'Kurang Sekali', 'Kurang Sekali', 'Kurang Sekali', 'Kurang Sekali', 'Ya', 'Ya', 'Ya', NULL, NULL, NULL, NULL, NULL, NULL),
(16, '2023-06-01 00:00:00', '2023-06-01', 'Data Dummy', 'Data Dummy', 'Amarta', 'Baik Sekali', 'Baik Sekali', 'Baik Sekali', 'Baik Sekali', 'Ya', 'Ya', 'Ya', NULL, NULL, NULL, NULL, NULL, NULL),
(17, '2023-06-01 00:00:00', '2023-06-01', 'Data Dummy', 'Data Dummy', 'Amarta', 'Baik Sekali', 'Baik Sekali', 'Baik Sekali', 'Baik Sekali', 'Ya', 'Ya', 'Ya', NULL, NULL, NULL, NULL, NULL, NULL),
(18, '2023-06-01 00:00:00', '2023-06-01', 'Data Dummy', 'Data Dummy', 'Amarta', 'Baik Sekali', 'Baik Sekali', 'Baik Sekali', 'Baik Sekali', 'Ya', 'Ya', 'Ya', NULL, NULL, NULL, NULL, NULL, NULL),
(19, '2023-06-01 00:00:00', '2023-06-01', 'Data Dummy', 'Data Dummy', 'Amarta', 'Baik Sekali', 'Baik Sekali', 'Baik Sekali', 'Baik Sekali', 'Ya', 'Ya', 'Ya', NULL, NULL, NULL, NULL, NULL, NULL),
(20, '2023-06-01 00:00:00', '2023-06-01', 'Data Dummy', 'Data Dummy', 'Amarta', 'Baik Sekali', 'Baik Sekali', 'Baik Sekali', 'Baik Sekali', 'Ya', 'Ya', 'Ya', NULL, NULL, NULL, NULL, NULL, NULL),
(21, '2023-06-01 00:00:00', '2023-06-01', 'Data Dummy', 'Data Dummy', 'Amarta', 'Baik', 'Baik', 'Baik', 'Baik', 'Ya', 'Ya', 'Ya', NULL, NULL, NULL, NULL, NULL, NULL),
(22, '2023-06-01 00:00:00', '2023-06-01', 'Data Dummy', 'Data Dummy', 'Amarta', 'Baik', 'Baik', 'Baik', 'Baik', 'Ya', 'Ya', 'Ya', NULL, NULL, NULL, NULL, NULL, NULL),
(23, '2023-06-01 00:00:00', '2023-06-01', 'Data Dummy', 'Data Dummy', 'Amarta', 'Baik', 'Baik', 'Baik', 'Baik', 'Ya', 'Ya', 'Ya', NULL, NULL, NULL, NULL, NULL, NULL),
(24, '2023-06-01 00:00:00', '2023-06-01', 'Data Dummy', 'Data Dummy', 'Amarta', 'Baik', 'Baik', 'Baik', 'Baik', 'Ya', 'Ya', 'Ya', NULL, NULL, NULL, NULL, NULL, NULL),
(25, '2023-06-01 00:00:00', '2023-06-01', 'Data Dummy', 'Data Dummy', 'Amarta', 'Cukup', 'Cukup', 'Cukup', 'Cukup', 'Ya', 'Ya', 'Ya', NULL, NULL, NULL, NULL, NULL, NULL),
(26, '2023-06-01 00:00:00', '2023-06-01', 'Data Dummy', 'Data Dummy', 'Amarta', 'Cukup', 'Cukup', 'Cukup', 'Cukup', 'Ya', 'Ya', 'Ya', NULL, NULL, NULL, NULL, NULL, NULL),
(27, '2023-06-01 00:00:00', '2023-06-01', 'Data Dummy', 'Data Dummy', 'Amarta', 'Cukup', 'Cukup', 'Cukup', 'Cukup', 'Ya', 'Ya', 'Ya', NULL, NULL, NULL, NULL, NULL, NULL),
(28, '2023-06-01 00:00:00', '2023-06-01', 'Data Dummy', 'Data Dummy', 'Amarta', 'Kurang', 'Kurang', 'Kurang', 'Kurang', 'Ya', 'Ya', 'Ya', NULL, NULL, NULL, NULL, NULL, NULL),
(29, '2023-06-01 00:00:00', '2023-06-01', 'Data Dummy', 'Data Dummy', 'Amarta', 'Kurang', 'Kurang', 'Kurang', 'Kurang', 'Ya', 'Ya', 'Ya', NULL, NULL, NULL, NULL, NULL, NULL),
(30, '2023-06-01 00:00:00', '2023-06-01', 'Data Dummy', 'Data Dummy', 'Amarta', 'Kurang Sekali', 'Kurang Sekali', 'Kurang Sekali', 'Kurang Sekali', 'Ya', 'Ya', 'Ya', NULL, NULL, NULL, NULL, NULL, NULL),
(31, '2023-06-01 00:00:00', '2023-06-01', 'Data Dummy', 'Data Dummy', 'Astina', 'Baik Sekali', 'Baik Sekali', 'Baik Sekali', 'Baik Sekali', 'Ya', 'Ya', 'Ya', NULL, NULL, NULL, NULL, NULL, NULL),
(32, '2023-06-01 00:00:00', '2023-06-01', 'Data Dummy', 'Data Dummy', 'Astina', 'Baik Sekali', 'Baik Sekali', 'Baik Sekali', 'Baik Sekali', 'Ya', 'Ya', 'Ya', NULL, NULL, NULL, NULL, NULL, NULL),
(33, '2023-06-01 00:00:00', '2023-06-01', 'Data Dummy', 'Data Dummy', 'Astina', 'Baik Sekali', 'Baik Sekali', 'Baik Sekali', 'Baik Sekali', 'Ya', 'Ya', 'Ya', NULL, NULL, NULL, NULL, NULL, NULL),
(34, '2023-06-01 00:00:00', '2023-06-01', 'Data Dummy', 'Data Dummy', 'Astina', 'Baik Sekali', 'Baik Sekali', 'Baik Sekali', 'Baik Sekali', 'Ya', 'Ya', 'Ya', NULL, NULL, NULL, NULL, NULL, NULL),
(35, '2023-06-01 00:00:00', '2023-06-01', 'Data Dummy', 'Data Dummy', 'Astina', 'Baik Sekali', 'Baik Sekali', 'Baik Sekali', 'Baik Sekali', 'Ya', 'Ya', 'Ya', NULL, NULL, NULL, NULL, NULL, NULL),
(36, '2023-06-01 00:00:00', '2023-06-01', 'Data Dummy', 'Data Dummy', 'Astina', 'Baik', 'Baik', 'Baik', 'Baik', 'Ya', 'Ya', 'Ya', NULL, NULL, NULL, NULL, NULL, NULL),
(37, '2023-06-01 00:00:00', '2023-06-01', 'Data Dummy', 'Data Dummy', 'Astina', 'Baik', 'Baik', 'Baik', 'Baik', 'Ya', 'Ya', 'Ya', NULL, NULL, NULL, NULL, NULL, NULL),
(38, '2023-06-01 00:00:00', '2023-06-01', 'Data Dummy', 'Data Dummy', 'Astina', 'Baik', 'Baik', 'Baik', 'Baik', 'Ya', 'Ya', 'Ya', NULL, NULL, NULL, NULL, NULL, NULL),
(39, '2023-06-01 00:00:00', '2023-06-01', 'Data Dummy', 'Data Dummy', 'Astina', 'Baik', 'Baik', 'Baik', 'Baik', 'Ya', 'Ya', 'Ya', NULL, NULL, NULL, NULL, NULL, NULL),
(40, '2023-06-01 00:00:00', '2023-06-01', 'Data Dummy', 'Data Dummy', 'Astina', 'Cukup', 'Cukup', 'Cukup', 'Cukup', 'Ya', 'Ya', 'Ya', NULL, NULL, NULL, NULL, NULL, NULL),
(41, '2023-06-01 00:00:00', '2023-06-01', 'Data Dummy', 'Data Dummy', 'Astina', 'Cukup', 'Cukup', 'Cukup', 'Cukup', 'Ya', 'Ya', 'Ya', NULL, NULL, NULL, NULL, NULL, NULL),
(42, '2023-06-01 00:00:00', '2023-06-01', 'Data Dummy', 'Data Dummy', 'Astina', 'Cukup', 'Cukup', 'Cukup', 'Cukup', 'Ya', 'Ya', 'Ya', NULL, NULL, NULL, NULL, NULL, NULL),
(43, '2023-06-01 00:00:00', '2023-06-01', 'Data Dummy', 'Data Dummy', 'Astina', 'Kurang', 'Kurang', 'Kurang', 'Kurang', 'Ya', 'Ya', 'Ya', NULL, NULL, NULL, NULL, NULL, NULL),
(44, '2023-06-01 00:00:00', '2023-06-01', 'Data Dummy', 'Data Dummy', 'Astina', 'Kurang', 'Kurang', 'Kurang', 'Kurang', 'Ya', 'Ya', 'Ya', NULL, NULL, NULL, NULL, NULL, NULL),
(45, '2023-06-01 00:00:00', '2023-06-01', 'Data Dummy', 'Data Dummy', 'Astina', 'Kurang Sekali', 'Kurang Sekali', 'Kurang Sekali', 'Kurang Sekali', 'Ya', 'Ya', 'Ya', NULL, NULL, NULL, NULL, NULL, NULL),
(46, '2023-06-01 00:00:00', '2023-06-01', 'Data Dummy', 'Data Dummy', 'Ayodya', 'Baik Sekali', 'Baik Sekali', 'Baik Sekali', 'Baik Sekali', 'Ya', 'Ya', 'Ya', NULL, NULL, NULL, NULL, NULL, NULL),
(47, '2023-06-01 00:00:00', '2023-06-01', 'Data Dummy', 'Data Dummy', 'Ayodya', 'Baik Sekali', 'Baik Sekali', 'Baik Sekali', 'Baik Sekali', 'Ya', 'Ya', 'Ya', NULL, NULL, NULL, NULL, NULL, NULL),
(48, '2023-06-01 00:00:00', '2023-06-01', 'Data Dummy', 'Data Dummy', 'Ayodya', 'Baik Sekali', 'Baik Sekali', 'Baik Sekali', 'Baik Sekali', 'Ya', 'Ya', 'Ya', NULL, NULL, NULL, NULL, NULL, NULL),
(49, '2023-06-01 00:00:00', '2023-06-01', 'Data Dummy', 'Data Dummy', 'Ayodya', 'Baik Sekali', 'Baik Sekali', 'Baik Sekali', 'Baik Sekali', 'Ya', 'Ya', 'Ya', NULL, NULL, NULL, NULL, NULL, NULL),
(50, '2023-06-01 00:00:00', '2023-06-01', 'Data Dummy', 'Data Dummy', 'Ayodya', 'Baik Sekali', 'Baik Sekali', 'Baik Sekali', 'Baik Sekali', 'Ya', 'Ya', 'Ya', NULL, NULL, NULL, NULL, NULL, NULL),
(51, '2023-06-01 00:00:00', '2023-06-01', 'Data Dummy', 'Data Dummy', 'Ayodya', 'Baik', 'Baik', 'Baik', 'Baik', 'Ya', 'Ya', 'Ya', NULL, NULL, NULL, NULL, NULL, NULL),
(52, '2023-06-01 00:00:00', '2023-06-01', 'Data Dummy', 'Data Dummy', 'Ayodya', 'Baik', 'Baik', 'Baik', 'Baik', 'Ya', 'Ya', 'Ya', NULL, NULL, NULL, NULL, NULL, NULL),
(53, '2023-06-01 00:00:00', '2023-06-01', 'Data Dummy', 'Data Dummy', 'Ayodya', 'Baik', 'Baik', 'Baik', 'Baik', 'Ya', 'Ya', 'Ya', NULL, NULL, NULL, NULL, NULL, NULL),
(54, '2023-06-01 00:00:00', '2023-06-01', 'Data Dummy', 'Data Dummy', 'Ayodya', 'Baik', 'Baik', 'Baik', 'Baik', 'Ya', 'Ya', 'Ya', NULL, NULL, NULL, NULL, NULL, NULL),
(55, '2023-06-01 00:00:00', '2023-06-01', 'Data Dummy', 'Data Dummy', 'Ayodya', 'Cukup', 'Cukup', 'Cukup', 'Cukup', 'Ya', 'Ya', 'Ya', NULL, NULL, NULL, NULL, NULL, NULL),
(56, '2023-06-01 00:00:00', '2023-06-01', 'Data Dummy', 'Data Dummy', 'Ayodya', 'Cukup', 'Cukup', 'Cukup', 'Cukup', 'Ya', 'Ya', 'Ya', NULL, NULL, NULL, NULL, NULL, NULL),
(57, '2023-06-01 00:00:00', '2023-06-01', 'Data Dummy', 'Data Dummy', 'Ayodya', 'Cukup', 'Cukup', 'Cukup', 'Cukup', 'Ya', 'Ya', 'Ya', NULL, NULL, NULL, NULL, NULL, NULL),
(58, '2023-06-01 00:00:00', '2023-06-01', 'Data Dummy', 'Data Dummy', 'Ayodya', 'Kurang', 'Kurang', 'Kurang', 'Kurang', 'Ya', 'Ya', 'Ya', NULL, NULL, NULL, NULL, NULL, NULL),
(59, '2023-06-01 00:00:00', '2023-06-01', 'Data Dummy', 'Data Dummy', 'Ayodya', 'Kurang', 'Kurang', 'Kurang', 'Kurang', 'Ya', 'Ya', 'Ya', NULL, NULL, NULL, NULL, NULL, NULL),
(60, '2023-06-01 00:00:00', '2023-06-01', 'Data Dummy', 'Data Dummy', 'Ayodya', 'Kurang Sekali', 'Kurang Sekali', 'Kurang Sekali', 'Kurang Sekali', 'Ya', 'Ya', 'Ya', NULL, NULL, NULL, NULL, NULL, NULL),
(61, '2023-06-01 00:00:00', '2023-06-01', 'Data Dummy', 'Data Dummy', 'Astina VIV', 'Baik Sekali', 'Baik Sekali', 'Baik Sekali', 'Baik Sekali', 'Ya', 'Ya', 'Ya', NULL, NULL, NULL, NULL, NULL, NULL),
(62, '2023-06-01 00:00:00', '2023-06-01', 'Data Dummy', 'Data Dummy', 'Astina VIV', 'Baik Sekali', 'Baik Sekali', 'Baik Sekali', 'Baik Sekali', 'Ya', 'Ya', 'Ya', NULL, NULL, NULL, NULL, NULL, NULL),
(63, '2023-06-01 00:00:00', '2023-06-01', 'Data Dummy', 'Data Dummy', 'Astina VIV', 'Baik Sekali', 'Baik Sekali', 'Baik Sekali', 'Baik Sekali', 'Ya', 'Ya', 'Ya', NULL, NULL, NULL, NULL, NULL, NULL),
(64, '2023-06-01 00:00:00', '2023-06-01', 'Data Dummy', 'Data Dummy', 'Astina VIV', 'Baik Sekali', 'Baik Sekali', 'Baik Sekali', 'Baik Sekali', 'Ya', 'Ya', 'Ya', NULL, NULL, NULL, NULL, NULL, NULL),
(65, '2023-06-01 00:00:00', '2023-06-01', 'Data Dummy', 'Data Dummy', 'Astina VIV', 'Baik Sekali', 'Baik Sekali', 'Baik Sekali', 'Baik Sekali', 'Ya', 'Ya', 'Ya', NULL, NULL, NULL, NULL, NULL, NULL),
(66, '2023-06-01 00:00:00', '2023-06-01', 'Data Dummy', 'Data Dummy', 'Astina VIV', 'Baik', 'Baik', 'Baik', 'Baik', 'Ya', 'Ya', 'Ya', NULL, NULL, NULL, NULL, NULL, NULL),
(67, '2023-06-01 00:00:00', '2023-06-01', 'Data Dummy', 'Data Dummy', 'Astina VIV', 'Baik', 'Baik', 'Baik', 'Baik', 'Ya', 'Ya', 'Ya', NULL, NULL, NULL, NULL, NULL, NULL),
(68, '2023-06-01 00:00:00', '2023-06-01', 'Data Dummy', 'Data Dummy', 'Astina VIV', 'Baik', 'Baik', 'Baik', 'Baik', 'Ya', 'Ya', 'Ya', NULL, NULL, NULL, NULL, NULL, NULL),
(69, '2023-06-01 00:00:00', '2023-06-01', 'Data Dummy', 'Data Dummy', 'Astina VIV', 'Baik', 'Baik', 'Baik', 'Baik', 'Ya', 'Ya', 'Ya', NULL, NULL, NULL, NULL, NULL, NULL),
(70, '2023-06-01 00:00:00', '2023-06-01', 'Data Dummy', 'Data Dummy', 'Astina VIV', 'Cukup', 'Cukup', 'Cukup', 'Cukup', 'Ya', 'Ya', 'Ya', NULL, NULL, NULL, NULL, NULL, NULL),
(71, '2023-06-01 00:00:00', '2023-06-01', 'Data Dummy', 'Data Dummy', 'Astina VIV', 'Cukup', 'Cukup', 'Cukup', 'Cukup', 'Ya', 'Ya', 'Ya', NULL, NULL, NULL, NULL, NULL, NULL),
(72, '2023-06-01 00:00:00', '2023-06-01', 'Data Dummy', 'Data Dummy', 'Astina VIV', 'Cukup', 'Cukup', 'Cukup', 'Cukup', 'Ya', 'Ya', 'Ya', NULL, NULL, NULL, NULL, NULL, NULL),
(73, '2023-06-01 00:00:00', '2023-06-01', 'Data Dummy', 'Data Dummy', 'Astina VIV', 'Kurang', 'Kurang', 'Kurang', 'Kurang', 'Ya', 'Ya', 'Ya', NULL, NULL, NULL, NULL, NULL, NULL),
(74, '2023-06-01 00:00:00', '2023-06-01', 'Data Dummy', 'Data Dummy', 'Astina VIV', 'Kurang', 'Kurang', 'Kurang', 'Kurang', 'Ya', 'Ya', 'Ya', NULL, NULL, NULL, NULL, NULL, NULL),
(75, '2023-06-01 00:00:00', '2023-06-01', 'Data Dummy', 'Data Dummy', 'Astina VIV', 'Kurang Sekali', 'Kurang Sekali', 'Kurang Sekali', 'Kurang Sekali', 'Ya', 'Ya', 'Ya', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `spesialis`
--

CREATE TABLE `spesialis` (
  `kd_sps` int(5) NOT NULL,
  `nm_sps` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `spesialis`
--

INSERT INTO `spesialis` (`kd_sps`, `nm_sps`) VALUES
(1, 'Dokter Umum'),
(2, 'Poli Obsgyn'),
(3, 'Poli Anak'),
(4, 'Poli Gigi'),
(5, 'Poli Andrologi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `nik` varchar(8) NOT NULL,
  `nama` varchar(256) CHARACTER SET utf8mb4 NOT NULL,
  `password` varchar(256) CHARACTER SET utf8mb4 NOT NULL,
  `role_id` int(11) NOT NULL,
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`nik`, `nama`, `password`, `role_id`, `date_created`) VALUES
('10000001', 'Dwi', '$2y$10$QNCO2tGrfYxP5BPz5A2F2.UoZ47QsePmn7e9.VxxSv/xUCUa4D47S', 1, '2023-05-25'),
('12345678', 'Fajardika Dwi Yulianto', '$2y$10$i4PEw3.CiTYxUwFG/.NwiOELTgBv5pDGUPeeKLnqmbqS9F6ktd.KO', 1, '2023-05-23'),
('12345679', 'Yulianto', '$2y$10$jmguT77tGL9NyZzKHSiOa.hfdnxg.NID8mnZxv0ufnyZLxO3nw1wu', 1, '2023-05-24');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Admin');

-- --------------------------------------------------------

--
-- Stand-in structure for view `vw_jawaban_survey_ralan`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `vw_jawaban_survey_ralan` (
`id` int(5)
,`tgl_isi` datetime
,`tgl_periksa` date
,`kd_sps` int(5)
,`nm_sps` varchar(250)
,`kd_dokter` int(5)
,`nm_dokter` varchar(250)
,`nm_pasien` varchar(250)
,`nm_petugas` varchar(250)
,`p1` varchar(50)
,`p2` varchar(50)
,`p3` varchar(50)
,`p4` varchar(50)
,`p5` varchar(50)
,`saran` text
,`kritik` text
);

-- --------------------------------------------------------

--
-- Struktur untuk view `vw_jawaban_survey_ralan`
--
DROP TABLE IF EXISTS `vw_jawaban_survey_ralan`;

CREATE ALGORITHM=UNDEFINED DEFINER=`fajar`@`%` SQL SECURITY DEFINER VIEW `vw_jawaban_survey_ralan`  AS  select `jawaban_survey_ralan`.`id` AS `id`,`jawaban_survey_ralan`.`tgl_isi` AS `tgl_isi`,`jawaban_survey_ralan`.`tgl_periksa` AS `tgl_periksa`,`jawaban_survey_ralan`.`kd_sps` AS `kd_sps`,`spesialis`.`nm_sps` AS `nm_sps`,`jawaban_survey_ralan`.`kd_dokter` AS `kd_dokter`,`dokter`.`nm_dokter` AS `nm_dokter`,`jawaban_survey_ralan`.`nm_pasien` AS `nm_pasien`,`jawaban_survey_ralan`.`nm_petugas` AS `nm_petugas`,`jawaban_survey_ralan`.`p1` AS `p1`,`jawaban_survey_ralan`.`p2` AS `p2`,`jawaban_survey_ralan`.`p3` AS `p3`,`jawaban_survey_ralan`.`p4` AS `p4`,`jawaban_survey_ralan`.`p5` AS `p5`,`jawaban_survey_ralan`.`saran` AS `saran`,`jawaban_survey_ralan`.`kritik` AS `kritik` from ((`jawaban_survey_ralan` join `spesialis`) join `dokter`) where ((`jawaban_survey_ralan`.`kd_sps` = `spesialis`.`kd_sps`) and (`spesialis`.`kd_sps` = `dokter`.`kd_sps`)) group by `jawaban_survey_ralan`.`id` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bangsal`
--
ALTER TABLE `bangsal`
  ADD PRIMARY KEY (`kd_bangsal`);

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`kd_dokter`),
  ADD KEY `kd_sps` (`kd_sps`);

--
-- Indexes for table `jawaban_survey_igd`
--
ALTER TABLE `jawaban_survey_igd`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jawaban_survey_ralan`
--
ALTER TABLE `jawaban_survey_ralan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jawaban_survey_ralan_ibfk_1` (`kd_dokter`),
  ADD KEY `kd_sps` (`kd_sps`);

--
-- Indexes for table `jawaban_survey_ranap`
--
ALTER TABLE `jawaban_survey_ranap`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `spesialis`
--
ALTER TABLE `spesialis`
  ADD PRIMARY KEY (`kd_sps`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`nik`),
  ADD KEY `role_id` (`role_id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bangsal`
--
ALTER TABLE `bangsal`
  MODIFY `kd_bangsal` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1014;
--
-- AUTO_INCREMENT for table `dokter`
--
ALTER TABLE `dokter`
  MODIFY `kd_dokter` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=133;
--
-- AUTO_INCREMENT for table `jawaban_survey_igd`
--
ALTER TABLE `jawaban_survey_igd`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=184;
--
-- AUTO_INCREMENT for table `jawaban_survey_ralan`
--
ALTER TABLE `jawaban_survey_ralan`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=345;
--
-- AUTO_INCREMENT for table `jawaban_survey_ranap`
--
ALTER TABLE `jawaban_survey_ranap`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;
--
-- AUTO_INCREMENT for table `spesialis`
--
ALTER TABLE `spesialis`
  MODIFY `kd_sps` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `dokter`
--
ALTER TABLE `dokter`
  ADD CONSTRAINT `dokter_ibfk_1` FOREIGN KEY (`kd_sps`) REFERENCES `spesialis` (`kd_sps`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `jawaban_survey_ralan`
--
ALTER TABLE `jawaban_survey_ralan`
  ADD CONSTRAINT `jawaban_survey_ralan_ibfk_1` FOREIGN KEY (`kd_sps`) REFERENCES `spesialis` (`kd_sps`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `user_role` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
