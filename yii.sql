-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 22, 2016 at 12:50 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `yii`
--

-- --------------------------------------------------------

--
-- Table structure for table `karya`
--

CREATE TABLE IF NOT EXISTS `karya` (
`id_karya` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_karya` varchar(100) NOT NULL,
  `tahun_karya` int(11) NOT NULL,
  `keterangan_karya` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `karya`
--

INSERT INTO `karya` (`id_karya`, `id_kelas`, `id_user`, `nama_karya`, `tahun_karya`, `keterangan_karya`) VALUES
(1, 1, 3, 'web', 2016, 'ksdfksdjf sdkfjskdjf sf.sdfsfj slefjbse '),
(2, 2, 19, 'jaringan anti hacker', 2016, 'wkwk wkwk wkwkw wwkkw. hoax');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE IF NOT EXISTS `kelas` (
`id_kelas` int(11) NOT NULL,
  `nama_kelas` varchar(225) NOT NULL,
  `jurusan_kelas` varchar(225) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `nama_kelas`, `jurusan_kelas`) VALUES
(1, 'D3 IT A', 'Informatika'),
(2, 'D4 IT A', 'Informatika');

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE IF NOT EXISTS `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1474198859),
('m130524_201442_init', 1474198864);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id` int(11) NOT NULL,
  `first_name` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `id_karya` int(11) NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `first_name`, `last_name`, `username`, `address`, `id_kelas`, `id_karya`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, '', '', 'reyno', '', 0, 0, 'X897YYSGK2x8ceIEAqoambbfeWBBDADg', '$2y$13$XdL1njU.p6McGcMptNGR3e4i2bg2yr2pzx25l99wPmMzvi5.heBWi', NULL, 'reyno@a.a', 10, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Simson', 'Rinekso', 'Simson', 'Sukorame', 0, 0, '5YDS-ngL5N-JFGdJZ2bwNfcns3o36N18', '$2y$13$5RxXsTBdY0TVNUk3jwpKouNRB00W6O3ceL4/0GsYnxpmmz29aCRsa', '', 'Simson@333.333', 10, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'coba', 'oke', 'none', 'asd asd as da sd', 0, 0, 'q49WyVdQ3qn2ZSL5GyWdZSC9CTHD2NEq', '$2y$13$lr72HyOLaC7SSIWnTykN3.nBcP1adsZva45TR8BnkFCEiZLWxQzGy', NULL, 'non@n.com', 10, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, 'ksh', 'kjhsd', 'kjshdf', 'kjhd', 0, 0, 'DxD7kyDoxPk1irCKSKPFDpwURTIXGa5d', '$2y$13$PeCeyTsHqAO29GVrjPbPjOSSzO782WCNrmsIwbeYQCVtuewBGdhIy', NULL, 'a@a.c', 10, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18, 'knfnd', 'dbf', 'asd', 'jdf', 0, 0, 'suXtutz6L9pEfXMF5GHW-8fWiLBMHPz2', '$2y$13$rTf5EvtaEOP/oEHZZ3G8bey..QNNe27RTqZa8t6WQAg4IHHdLjVYi', NULL, 'kdjfg@d.v', 10, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(19, 'asd', ',vjr', 'slfh', ',,xf', 0, 0, 'wUKy_E2MVXC1E6mcMCkIJI5rvRzkOSts', '$2y$13$Jt2vhovnJD6DO9hu1BNqGOz5Ga9PTQ.ti0aYhYdP6lGqG5IuC7dIK', NULL, 'sjhf@d.c', 10, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(20, 'asd', 'dkhf', 'sdhf', 'kjsdkf', 0, 0, 'Wnvt0eVQfy8BIlEkUVlHBQcqcJHuBJLD', '$2y$13$p505MFY8fx4HF91pnbrSTOXITHPmsivhaYjcmFJJ93jEdUSjr8UEC', NULL, 'jdjhf@d.d', 10, '2016-09-19 15:58:43', '2016-09-19 15:58:43'),
(21, 'aldjfhjgf', 'lkjsfg', 'lksdjfg', 'lksjfgf', 0, 0, 'UZTOdWUDAOxY5SwIKBFMhqttyVdgZo9Q', '$2y$13$xHJd4drx.ZYHTfHWIIeoWOf3CRKXFOp/6R9uElPw8lS4L9rHljBwG', NULL, 'asd@flkjg.c', 10, '2016-09-19 16:00:29', '0000-00-00 00:00:00'),
(22, 'lsdhf', 'lshf', 'ljshdf', 'lhshdf', 0, 0, 'wSk29VbMCPUicT2iz0hUog_a-ZWQi0nN', '$2y$13$JD2Slc.MTYcmEpaYBV.Viucg3mFu4dh5Gm2dkGnfcBhgloney090K', NULL, 'ksjhdf@djhf.v', 10, '2016-09-19 16:02:17', '0000-00-00 00:00:00'),
(23, ',mdhfg', 'ljsdfs', 'lkjdssf', 'ljsdf', 0, 0, 'mXdEk-wQ7lmyQ4JT_ZJB0O8g--2DZh7Y', '$2y$13$ey1eC8OD07WBOzh01cwcNuFh6Zx3UEKBao45wfsYizGMy8h6RMnKS', NULL, 'jdh@d.d', 10, '2016-09-19 16:03:38', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `karya`
--
ALTER TABLE `karya`
 ADD PRIMARY KEY (`id_karya`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
 ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
 ADD PRIMARY KEY (`version`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `username` (`username`), ADD UNIQUE KEY `email` (`email`), ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `karya`
--
ALTER TABLE `karya`
MODIFY `id_karya` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
