-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2018 at 03:27 AM
-- Server version: 10.1.8-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_nilai`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `d_jurusan` (IN `p_id` INT(11))  NO SQL
DELETE FROM tb_jurusan WHERE id_jurusan=p_id$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `d_kelas` (IN `p_id` INT(11))  NO SQL
DELETE FROM tb_kelas WHERE id_kelas=p_id$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `d_mapel` (IN `p_kode` VARCHAR(5))  NO SQL
DELETE FROM tb_mapel WHERE kode_mapel=p_kode$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `d_mutu` (IN `p_idm` INT(11))  NO SQL
DELETE FROM tb_mutu WHERE id_mutu=p_idm$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `d_nilai` (IN `p_id_nilai` INT(11))  NO SQL
DELETE FROM tb_nilai WHERE id_nilai=p_id_nilai$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `d_semester` (IN `p_id_semster` INT(11))  NO SQL
DELETE FROM tb_semester WHERE id_semester=p_id_semster$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `d_siswa` (IN `p_nis` VARCHAR(20))  NO SQL
DELETE from tb_siswa WHERE nis=p_nis$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `d_user` (IN `p_id` INT(11))  NO SQL
DELETE FROM t_user WHERE id_user=p_id$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `p_ambil_user` (IN `uname` VARCHAR(50), IN `pass` VARCHAR(255))  NO SQL
SELECT * FROM t_user WHERE username=uname AND password=sha2(pass,512)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `p_jurusan` (IN `p_id_jur` INT(11), IN `p_jurusan` VARCHAR(50))  NO SQL
INSERT INTO tb_jurusan SET id_jurusan=p_id_jur,
nama_jurusan=p_jurusan$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `p_kelas` (IN `p_id_kelas` INT(11), IN `p_nm` VARCHAR(50))  NO SQL
INSERT INTO tb_kelas SET id_kelas=p_id_kelas,
nama_kelas=p_nm$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `p_mapel` (IN `p_kode_mapel` VARCHAR(5), IN `p_mapel` VARCHAR(50), IN `p_kkm` INT(3))  NO SQL
INSERT into tb_mapel SET kode_mapel=p_kode_mapel,
nama_mapel=p_mapel,
kkm=p_kkm$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `p_mutu` (IN `p_id` INT(11), IN `p_range` VARCHAR(50), IN `p_nilai_mutu` VARCHAR(3))  NO SQL
INSERT INTO tb_mutu SET id_mutu=p_id,
range_nilai =p_range,
nilai_mutu=p_nilai_mutu$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `p_nilai` (IN `p_nis` VARCHAR(20), IN `P_kelas` INT(11), IN `p_kode_mapel` VARCHAR(5), IN `p_semester` INT(11), IN `p_kategori` VARCHAR(50), IN `p_nilai` INT(5), IN `p_tahun` VARCHAR(20))  NO SQL
INSERT into tb_nilai SET nis=p_nis,
id_kelas=p_kelas,
kode_mapel=p_kode_mapel,
id_semester=p_semester,
kategori_nilai=p_kategori,
nilai=p_nilai,
tahun_ajar=p_tahun$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `p_semester` (IN `p_id` INT(11), IN `p_semester` VARCHAR(10))  NO SQL
INSERT into tb_semester SET id_semester=p_id,
semester=p_semester$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `p_siswa` (IN `p_nis` VARCHAR(20), IN `p_nama` VARCHAR(50), IN `p_tgl` DATE, IN `p_alamat` VARCHAR(50), IN `p_jur` INT(11), IN `p_masuk` DATE, IN `p_tanggal` DATE)  NO SQL
INSERT into tb_siswa SET nis=p_nis, 
nama=p_nama, 
tanggal_lahir=p_tgl,
alamat=p_alamat, 
id_jurusan=p_jur,
tanggal_masuk=p_masuk, 
tanggal_skck=p_tanggal$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_kelas10` (IN `p_tahun` INT)  NO SQL
SELECT * from kelas10
WHERE year(tanggal_masuk)= p_tahun$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_kelas11` (IN `p_tahun` INT)  NO SQL
SELECT * from kelas11
WHERE year(tanggal_masuk)= p_tahun$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_kelas12` (IN `p_tahun` INT)  NO SQL
SELECT * from kelas12
WHERE year(tanggal_masuk)= p_tahun$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_siswa` (IN `p_tahun` INT)  NO SQL
SELECT * from data_siswaa
WHERE year(tanggal_masuk)= p_tahun$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_user` (IN `p_nama` VARCHAR(50), IN `p_username` VARCHAR(50), IN `p_password` VARCHAR(255), IN `p_level` INT(3))  NO SQL
INSERT INTO t_user SET
nama=p_nama, username=p_username,
password=SHA2(p_password,512),
level=p_level$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `up_jurusan` (IN `p_idjur` INT(11), IN `p_jur` VARCHAR(50))  NO SQL
UPDATE tb_jurusan SET nama_jurusan = p_jur WHERE id_jurusan=p_idjur$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `up_kelas` (IN `p_id_kelas` INT(11), IN `p_nm_kelas` VARCHAR(50))  NO SQL
UPDATE tb_kelas SET nama_kelas=p_nm_kelas WHERE id_kelas=p_id_kelas$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `up_mapel` (IN `p_kode_mapel` VARCHAR(5), IN `p_nm` VARCHAR(50), IN `p_kkm` INT(3))  NO SQL
UPDATE tb_mapel SET nama_mapel=p_nm, kkm=p_kkm WHERE kode_mapel=p_kode_mapel$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `up_mutu` (IN `p_id` INT(11), IN `p_range` VARCHAR(50), IN `p_mutu` VARCHAR(3))  NO SQL
UPDATE tb_mutu SET range_nilai=p_range, nilai_mutu=p_mutu WHERE id_mutu=p_id$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `up_nilai` (IN `p_id` INT(11), IN `p_nis` VARCHAR(20), IN `p_idkel` INT(11), IN `p_kode` VARCHAR(5), IN `p_ids` INT(11), IN `p_kategori` VARCHAR(50), IN `p_nilai` INT(5), IN `p_tahunajar` VARCHAR(20))  NO SQL
UPDATE tb_nilai SET nis=p_nis,
id_kelas=p_idkel,
kode_mapel=p_kode,
id_semester=p_ids,
kategori_nilai=p_kategori,
nilai=p_nilai,
tahun_ajar=p_tahunajar WHERE id_nilai=p_id$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `up_password` (IN `p_id` INT(11), IN `p_password` VARCHAR(255))  NO SQL
update t_user
set password=sha2(p_password,512)
where id_user=p_id$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `up_semester` (IN `p_id` INT(11), IN `p_semester` VARCHAR(10))  NO SQL
UPDATE tb_semester SET semester=p_semester WHERE id_semester=p_id$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `up_siswa` (IN `p_nis` VARCHAR(20), IN `p_nama` VARCHAR(50), IN `p_ttl` DATE, IN `p_alamat` VARCHAR(50), IN `p_idjur` INT(11), IN `p_masuk` DATE, IN `p_tanggal_sk` DATE)  NO SQL
UPDATE tb_siswa SET nama=p_nama,
		tanggal_lahir=p_ttl,
		alamat=p_alamat,
		id_jurusan=p_idjur,
        tanggal_masuk=p_masuk,
		tanggal_skck=p_tanggal_sk        
WHERE nis=p_nis$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `up_user` (IN `p_id` INT(11), IN `p_nama` VARCHAR(50), IN `p_username` VARCHAR(50))  NO SQL
UPDATE t_user SET nama=p_nama, 
username=p_username WHERE id_user=p_id$$

--
-- Functions
--
CREATE DEFINER=`root`@`localhost` FUNCTION `f_cek_login` (`f_username` VARCHAR(50), `f_password` VARCHAR(255)) RETURNS INT(11) NO SQL
BEGIN

DECLARE hasil INT(1);

SELECT COUNT(*) FROM t_user
WHERE username = f_username
AND password = SHA2(f_password,512) into hasil;

return hasil;

END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Stand-in structure for view `data_siswaa`
--
CREATE TABLE `data_siswaa` (
`nis` varchar(20)
,`nama` varchar(50)
,`tanggal_lahir` date
,`alamat` varchar(50)
,`id_jurusan` int(11)
,`nama_jurusan` varchar(50)
,`tanggal_masuk` date
,`tanggal_skck` date
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `hasil_belajar`
--
CREATE TABLE `hasil_belajar` (
`nis` varchar(20)
,`nama` varchar(50)
,`tahun_ajar` varchar(20)
,`id_kelas` int(11)
,`nama_kelas` varchar(50)
,`id_jurusan` int(11)
,`nama_jurusan` varchar(50)
,`id_semester` int(11)
,`semester` varchar(10)
,`ratarata` decimal(40,8)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `nilai`
--
CREATE TABLE `nilai` (
`nis` varchar(20)
,`nama` varchar(50)
,`nama_kelas` varchar(50)
,`nama_jurusan` varchar(50)
,`semester` varchar(10)
,`nama_mapel` varchar(50)
,`kkm` int(3)
,`Nilai` decimal(36,4)
,`tahun_ajar` varchar(20)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `nilai_siswa`
--
CREATE TABLE `nilai_siswa` (
`nis` varchar(20)
,`nama` varchar(50)
,`id_kelas` int(11)
,`nama_kelas` varchar(50)
,`id_jurusan` int(11)
,`nama_jurusan` varchar(50)
,`id_semester` int(11)
,`semester` varchar(10)
,`kode_mapel` varchar(5)
,`nama_mapel` varchar(50)
,`kkm` int(3)
,`Nilai` decimal(36,4)
,`tahun_ajar` varchar(20)
);

-- --------------------------------------------------------

--
-- Table structure for table `tb_jurusan`
--

CREATE TABLE `tb_jurusan` (
  `id_jurusan` int(11) NOT NULL,
  `nama_jurusan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_jurusan`
--

INSERT INTO `tb_jurusan` (`id_jurusan`, `nama_jurusan`) VALUES
(1, 'administrasi perkantoran');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kelas`
--

CREATE TABLE `tb_kelas` (
  `id_kelas` int(11) NOT NULL,
  `nama_kelas` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kelas`
--

INSERT INTO `tb_kelas` (`id_kelas`, `nama_kelas`) VALUES
(1, 'X'),
(2, 'XI'),
(3, 'XII');

-- --------------------------------------------------------

--
-- Table structure for table `tb_mapel`
--

CREATE TABLE `tb_mapel` (
  `kode_mapel` varchar(5) NOT NULL,
  `nama_mapel` varchar(50) NOT NULL,
  `kkm` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_mapel`
--

INSERT INTO `tb_mapel` (`kode_mapel`, `nama_mapel`, `kkm`) VALUES
('112', 'Matematika', 65),
('122', 'Bahasa Indonesia', 75);

-- --------------------------------------------------------

--
-- Table structure for table `tb_mutu`
--

CREATE TABLE `tb_mutu` (
  `id_mutu` int(11) NOT NULL,
  `range_nilai` varchar(50) NOT NULL,
  `nilai_mutu` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_mutu`
--

INSERT INTO `tb_mutu` (`id_mutu`, `range_nilai`, `nilai_mutu`) VALUES
(1, '80 - 100', 'A'),
(2, '72 - 79', 'B'),
(3, '65 -71', 'C'),
(4, '55 - 64', 'D'),
(5, '0 - 54', 'E');

-- --------------------------------------------------------

--
-- Table structure for table `tb_nilai`
--

CREATE TABLE `tb_nilai` (
  `id_nilai` int(11) NOT NULL,
  `nis` varchar(20) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `kode_mapel` varchar(5) NOT NULL,
  `id_semester` int(11) NOT NULL,
  `kategori_nilai` varchar(50) NOT NULL,
  `nilai` int(5) NOT NULL,
  `tahun_ajar` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_nilai`
--

INSERT INTO `tb_nilai` (`id_nilai`, `nis`, `id_kelas`, `kode_mapel`, `id_semester`, `kategori_nilai`, `nilai`, `tahun_ajar`) VALUES
(29, '1212111214', 1, '112', 3, 'nilai1', 80, '2017/2018'),
(30, '1212111214', 1, '112', 3, 'Nilai2', 70, '2017/2018'),
(31, '1212111214', 1, '112', 3, 'MID', 60, '2017/2018'),
(32, '1212111214', 1, '112', 3, 'nilai3', 80, '2017/2018'),
(33, '1212111214', 1, '112', 3, 'nilai4', 90, '2017/2018'),
(34, '1212111214', 1, '112', 3, 'UAS', 90, '2017/2018'),
(35, '1212111214', 1, '122', 3, 'nilai1', 90, '2017/2018'),
(36, '1212111214', 1, '122', 3, 'Nilai2', 90, '2017/2018'),
(37, '1212111214', 1, '122', 3, 'MID', 80, '2017/2018'),
(38, '1212111214', 1, '122', 3, 'nilai3', 60, '2017/2018'),
(39, '1212111214', 1, '122', 3, 'nilai4', 70, '2017/2018'),
(40, '1212111214', 1, '122', 3, 'UAS', 100, '2017/2018'),
(41, '1212111214', 1, '112', 4, 'nilai1', 90, '2017/2018'),
(42, '1212111214', 1, '112', 4, 'Nilai2', 90, '2017/2018'),
(43, '1212111214', 1, '122', 4, 'nilai1', 90, '2017/2018'),
(44, '1212111214', 0, '122', 4, 'Nilai2', 80, '2017/2018'),
(45, '1212111214', 1, '122', 4, 'Nilai2', 70, '2017/2018'),
(46, '1213124354', 2, '112', 3, 'nilai1', 80, '2017/2018'),
(47, '1213124354', 2, '112', 3, 'Nilai2', 90, '2017/2018'),
(48, '1213124354', 2, '122', 3, 'nilai1', 70, '2017/2018'),
(49, '1213124354', 2, '122', 3, 'Nilai2', 60, '2017/2018'),
(50, '1223423434', 3, '112', 3, 'nilai1', 90, '2017/2018'),
(51, '1223423434', 3, '122', 3, 'nilai1', 85, '2017/2018'),
(52, '1213124354', 3, '112', 3, 'Nilai2', 80, '2017/2018'),
(53, '1223423434', 1, '112', 3, 'MID', 80, '2017/2018'),
(54, '1223423434', 2, '112', 3, 'nilai1', 90, '2017/2018');

-- --------------------------------------------------------

--
-- Table structure for table `tb_semester`
--

CREATE TABLE `tb_semester` (
  `id_semester` int(11) NOT NULL,
  `semester` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_semester`
--

INSERT INTO `tb_semester` (`id_semester`, `semester`) VALUES
(3, 'I'),
(4, 'II');

-- --------------------------------------------------------

--
-- Table structure for table `tb_siswa`
--

CREATE TABLE `tb_siswa` (
  `nis` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `id_jurusan` int(11) NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `tanggal_skck` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_siswa`
--

INSERT INTO `tb_siswa` (`nis`, `nama`, `tanggal_lahir`, `alamat`, `id_jurusan`, `tanggal_masuk`, `tanggal_skck`) VALUES
('1212111214', 'Diana Sapta Mardiah', '1997-03-06', 'Bandar jaya', 1, '2018-01-01', NULL),
('1213124354', 'Rentawati', '1996-03-06', 'Liwa', 1, '2018-01-01', NULL),
('1223423434', 'Dewa gede sugiada', '1997-03-06', 'Tri darma yoga', 1, '2018-01-01', NULL),
('1234323242', 'Diah Santikawati', '2018-06-07', 'Pringsewu', 1, '2018-01-01', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `t_user`
--

CREATE TABLE `t_user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_user`
--

INSERT INTO `t_user` (`id_user`, `nama`, `username`, `password`, `level`) VALUES
(3, 'santikaa', 'diah', 'fe4050d3d8c23508aba39fd88fb9e692d102c32b5c12198aeda9466385343286ea3b57a18732fea80a59d77915ce6294a9bfe60fae1f26f368746d13f48e82e5', 1);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_nilai`
--
CREATE TABLE `v_nilai` (
`id_nilai` int(11)
,`nis` varchar(20)
,`nama` varchar(50)
,`id_kelas` int(11)
,`nama_kelas` varchar(50)
,`id_jurusan` int(11)
,`nama_jurusan` varchar(50)
,`id_semester` int(11)
,`semester` varchar(10)
,`kode_mapel` varchar(5)
,`nama_mapel` varchar(50)
,`kategori_nilai` varchar(50)
,`kkm` int(3)
,`nilai` int(5)
,`tahun_ajar` varchar(20)
);

-- --------------------------------------------------------

--
-- Structure for view `data_siswaa`
--
DROP TABLE IF EXISTS `data_siswaa`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `data_siswaa`  AS  select `a`.`nis` AS `nis`,`a`.`nama` AS `nama`,`a`.`tanggal_lahir` AS `tanggal_lahir`,`a`.`alamat` AS `alamat`,`c`.`id_jurusan` AS `id_jurusan`,`c`.`nama_jurusan` AS `nama_jurusan`,`a`.`tanggal_masuk` AS `tanggal_masuk`,`a`.`tanggal_skck` AS `tanggal_skck` from (`tb_siswa` `a` join `tb_jurusan` `c`) where ((`a`.`nis` <> 0) and (`a`.`id_jurusan` = `c`.`id_jurusan`)) ;

-- --------------------------------------------------------

--
-- Structure for view `hasil_belajar`
--
DROP TABLE IF EXISTS `hasil_belajar`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `hasil_belajar`  AS  select `nilai_siswa`.`nis` AS `nis`,`nilai_siswa`.`nama` AS `nama`,`nilai_siswa`.`tahun_ajar` AS `tahun_ajar`,`nilai_siswa`.`id_kelas` AS `id_kelas`,`nilai_siswa`.`nama_kelas` AS `nama_kelas`,`nilai_siswa`.`id_jurusan` AS `id_jurusan`,`nilai_siswa`.`nama_jurusan` AS `nama_jurusan`,`nilai_siswa`.`id_semester` AS `id_semester`,`nilai_siswa`.`semester` AS `semester`,avg(`nilai_siswa`.`Nilai`) AS `ratarata` from `nilai_siswa` group by `nilai_siswa`.`nis`,`nilai_siswa`.`id_semester`,`nilai_siswa`.`id_jurusan`,`nilai_siswa`.`id_kelas` ;

-- --------------------------------------------------------

--
-- Structure for view `nilai`
--
DROP TABLE IF EXISTS `nilai`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `nilai`  AS  select `v_nilai`.`nis` AS `nis`,`v_nilai`.`nama` AS `nama`,`v_nilai`.`nama_kelas` AS `nama_kelas`,`v_nilai`.`nama_jurusan` AS `nama_jurusan`,`v_nilai`.`semester` AS `semester`,`v_nilai`.`nama_mapel` AS `nama_mapel`,`v_nilai`.`kkm` AS `kkm`,(sum(`v_nilai`.`nilai`) / count(`v_nilai`.`nilai`)) AS `Nilai`,`v_nilai`.`tahun_ajar` AS `tahun_ajar` from `v_nilai` group by `v_nilai`.`kode_mapel` ;

-- --------------------------------------------------------

--
-- Structure for view `nilai_siswa`
--
DROP TABLE IF EXISTS `nilai_siswa`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `nilai_siswa`  AS  select `v_nilai`.`nis` AS `nis`,`v_nilai`.`nama` AS `nama`,`v_nilai`.`id_kelas` AS `id_kelas`,`v_nilai`.`nama_kelas` AS `nama_kelas`,`v_nilai`.`id_jurusan` AS `id_jurusan`,`v_nilai`.`nama_jurusan` AS `nama_jurusan`,`v_nilai`.`id_semester` AS `id_semester`,`v_nilai`.`semester` AS `semester`,`v_nilai`.`kode_mapel` AS `kode_mapel`,`v_nilai`.`nama_mapel` AS `nama_mapel`,`v_nilai`.`kkm` AS `kkm`,(sum(`v_nilai`.`nilai`) / count(`v_nilai`.`nilai`)) AS `Nilai`,`v_nilai`.`tahun_ajar` AS `tahun_ajar` from `v_nilai` group by `v_nilai`.`kode_mapel`,`v_nilai`.`semester`,`v_nilai`.`nama_kelas`,`v_nilai`.`nis`,`v_nilai`.`nama_jurusan` ;

-- --------------------------------------------------------

--
-- Structure for view `v_nilai`
--
DROP TABLE IF EXISTS `v_nilai`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_nilai`  AS  select `a`.`id_nilai` AS `id_nilai`,`a`.`nis` AS `nis`,`b`.`nama` AS `nama`,`a`.`id_kelas` AS `id_kelas`,`c`.`nama_kelas` AS `nama_kelas`,`d`.`id_jurusan` AS `id_jurusan`,`d`.`nama_jurusan` AS `nama_jurusan`,`f`.`id_semester` AS `id_semester`,`f`.`semester` AS `semester`,`a`.`kode_mapel` AS `kode_mapel`,`e`.`nama_mapel` AS `nama_mapel`,`a`.`kategori_nilai` AS `kategori_nilai`,`e`.`kkm` AS `kkm`,`a`.`nilai` AS `nilai`,`a`.`tahun_ajar` AS `tahun_ajar` from (((((`tb_nilai` `a` join `tb_siswa` `b`) join `tb_kelas` `c`) join `tb_jurusan` `d`) join `tb_mapel` `e`) join `tb_semester` `f`) where ((`a`.`nis` = `b`.`nis`) and (`a`.`id_kelas` = `c`.`id_kelas`) and (`b`.`id_jurusan` = `d`.`id_jurusan`) and (`a`.`id_semester` = `f`.`id_semester`) and (`a`.`kode_mapel` = `e`.`kode_mapel`)) order by `a`.`id_nilai` desc ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_jurusan`
--
ALTER TABLE `tb_jurusan`
  ADD PRIMARY KEY (`id_jurusan`);

--
-- Indexes for table `tb_kelas`
--
ALTER TABLE `tb_kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `tb_mapel`
--
ALTER TABLE `tb_mapel`
  ADD PRIMARY KEY (`kode_mapel`);

--
-- Indexes for table `tb_mutu`
--
ALTER TABLE `tb_mutu`
  ADD PRIMARY KEY (`id_mutu`);

--
-- Indexes for table `tb_nilai`
--
ALTER TABLE `tb_nilai`
  ADD PRIMARY KEY (`id_nilai`);

--
-- Indexes for table `tb_semester`
--
ALTER TABLE `tb_semester`
  ADD PRIMARY KEY (`id_semester`);

--
-- Indexes for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD PRIMARY KEY (`nis`);

--
-- Indexes for table `t_user`
--
ALTER TABLE `t_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_jurusan`
--
ALTER TABLE `tb_jurusan`
  MODIFY `id_jurusan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_kelas`
--
ALTER TABLE `tb_kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tb_mutu`
--
ALTER TABLE `tb_mutu`
  MODIFY `id_mutu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tb_nilai`
--
ALTER TABLE `tb_nilai`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
--
-- AUTO_INCREMENT for table `tb_semester`
--
ALTER TABLE `tb_semester`
  MODIFY `id_semester` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `t_user`
--
ALTER TABLE `t_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
