-- phpMyAdmin SQL Dump
-- version 4.6.6deb5ubuntu0.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: 10 Jun 2023 pada 14.15
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
(10001, 'dr Weny Inrianto, MSc. Sp. A.', 3, 0),
(10002, 'dr Ivanna Beru Brahmana, Sp.OG (K. Fer)', 2, 0),
(10003, 'dr Yane Aulia Yasmin', 1, 0),
(10004, 'drg Berty Maharani F', 4, 0),
(10005, 'dr Achwido Arjundananto', 1, 0),
(10006, 'dr Shinta Chandra Permata', 1, 0),
(10007, 'dr Arsi Palupi, Sp.OG', 2, 0),
(10008, 'dr Afiarina dhevianty, Sp.A', 3, 0),
(10009, 'dr Pramudita Putri D.M ( dr.Ega )', 1, 0),
(10010, 'dr Danny Wiguna, Sp.OG', 2, 0),
(10011, '	dr Ayu Kurnia Priyantiningrum', 1, 0),
(10012, 'dr Savitri Wijayanti', 1, 0),
(10013, 'dr Virgien Eka Merdekawati Salina', 1, 0),
(10014, 'dr Seso Sulijaya Suyono.,Sp.And', 5, 0),
(10015, 'dr HMA Ashari, Sp.OG (K.Fer)', 2, 0),
(10016, 'dr Agung Dewanto, Sp.OG (K. Fer)., PhD', 2, 0),
(10017, '	dr Ria Rossi', 1, 0),
(10018, 'dr Rinansita Warihwati', 1, 0),
(10019, 'drg Maura Kurnia Uki A', 4, 0),
(10020, 'dr Rakano Kautsar, Sp.OG', 2, 0),
(10021, '	dr Braghmandita Widya I.,M,Sc.,Sp.A', 3, 0),
(10022, 'Dr.dr.Dicky Moch Rizal.,Mkes,Sp.And,AIFM', 5, 0),
(10023, 'drg T. Dian Arisanti', 4, 0),
(10024, 'drg Elfira Maharani, MPH, Sp.Ort', 4, 0),
(10025, '	drg Sigit Aprianto', 4, 0),
(10026, 'dr Desy R. Ningtyas.,M.Sc.,Sp.A (K)', 3, 0),
(10027, 'dr Ade Febrina L.,M.Sc.,Sp.A', 3, 0),
(10028, 'dr Nini Rahmani, Sp.A', 3, 0),
(10029, 'dr Ayu Wityasti, Sp.OG', 2, 0),
(10030, 'dr Arief Kurnia, Sp.OG', 2, 0),
(10031, 'dr Supriyatiningsih, Sp.OG (upik)', 2, 0),
(10032, 'dr Ariesta Christiawanti, Sp.OG', 2, 0),
(10033, 'dr Sari Kusumastuti, Sp.A', 3, 0),
(10034, 'dr Dwikisworo Setyowireni, Sp.A (K)', 3, 0),
(10035, 'dr Oktavianus Wahyu PTP, Sp.OG', 2, 0),
(10036, 'dr Yasmini Fitriyati, Sp.OG', 2, 0),
(10037, 'Dr.dr. Dwi Hariyadi,Sp.OG subsp.FER', 2, 0),
(10038, 'dr Hasto Wardoyo, Sp.OG (K. Fer)', 2, 0),
(10039, 'dr Shofwal Widad, Sp.OG (K. Fer)', 2, 0),
(10040, 'dr Myggi Rizdwike Nanda', 1, 0),
(10041, 'dr Danny Sulistyowati', 1, 0),
(10042, 'dr Octavianus W PTP,Sp.OG', 2, 0),
(10043, 'dr Emanuel Priharso, Sp.PD', 6, 0);

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
(5, 'Poli Andrologi'),
(6, 'Penyakit Dalam');

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
('12345678', 'Fajardika Dwi Yulianto', '$2y$10$i4PEw3.CiTYxUwFG/.NwiOELTgBv5pDGUPeeKLnqmbqS9F6ktd.KO', 1, '2023-05-23');

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
-- Stand-in structure for view `vw_dokter`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `vw_dokter` (
`kd_dokter` int(5)
,`nm_dokter` varchar(250)
,`kd_sps` int(5)
,`nm_sps` varchar(250)
,`status_aktif` tinyint(1)
);

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
-- Struktur untuk view `vw_dokter`
--
DROP TABLE IF EXISTS `vw_dokter`;

CREATE ALGORITHM=UNDEFINED DEFINER=`fajar`@`%` SQL SECURITY DEFINER VIEW `vw_dokter`  AS  select `dokter`.`kd_dokter` AS `kd_dokter`,`dokter`.`nm_dokter` AS `nm_dokter`,`dokter`.`kd_sps` AS `kd_sps`,`spesialis`.`nm_sps` AS `nm_sps`,`dokter`.`status_aktif` AS `status_aktif` from (`dokter` join `spesialis`) where (`spesialis`.`kd_sps` = `dokter`.`kd_sps`) ;

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
  MODIFY `kd_bangsal` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1006;
--
-- AUTO_INCREMENT for table `dokter`
--
ALTER TABLE `dokter`
  MODIFY `kd_dokter` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10044;
--
-- AUTO_INCREMENT for table `jawaban_survey_igd`
--
ALTER TABLE `jawaban_survey_igd`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=193;
--
-- AUTO_INCREMENT for table `jawaban_survey_ralan`
--
ALTER TABLE `jawaban_survey_ralan`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=352;
--
-- AUTO_INCREMENT for table `jawaban_survey_ranap`
--
ALTER TABLE `jawaban_survey_ranap`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;
--
-- AUTO_INCREMENT for table `spesialis`
--
ALTER TABLE `spesialis`
  MODIFY `kd_sps` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
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
