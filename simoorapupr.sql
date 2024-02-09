-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2023 at 05:10 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simoorapupr`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` int(3) NOT NULL,
  `nama_admin` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(10) NOT NULL,
  `jabatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `nama_admin`, `username`, `password`, `jabatan`) VALUES
(1, 'Supriadi', 'yadiurc123', 'yadiurc123', 'Sub Koordinator'),
(32, 'Roli Sopiko', 'rolisda123', 'rolisda123', 'Sub Koordinator');

-- --------------------------------------------------------

--
-- Table structure for table `tb_alternatif`
--

CREATE TABLE `tb_alternatif` (
  `id_alternatif` int(3) NOT NULL,
  `kelurahan` varchar(30) NOT NULL,
  `kecamatan` varchar(30) NOT NULL,
  `tinggi_genangan` varchar(100) NOT NULL,
  `luas_genangan` varchar(100) NOT NULL,
  `lamanya_genangan` varchar(100) NOT NULL,
  `frekuensi_genangan` varchar(100) NOT NULL,
  `kerugian_ekonomi` varchar(1000) NOT NULL,
  `gangguansosial_pemerintah` varchar(1000) NOT NULL,
  `kerugian_transportasi` varchar(1000) NOT NULL,
  `kerugian_perumahan` varchar(1000) NOT NULL,
  `hakmilikpribadi` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_alternatif`
--

INSERT INTO `tb_alternatif` (`id_alternatif`, `kelurahan`, `kecamatan`, `tinggi_genangan`, `luas_genangan`, `lamanya_genangan`, `frekuensi_genangan`, `kerugian_ekonomi`, `gangguansosial_pemerintah`, `kerugian_transportasi`, `kerugian_perumahan`, `hakmilikpribadi`) VALUES
(324, 'Tanjung Agung', 'Sungai Serut', '3', '5', '72', 'Sangat sering (10 kali/tahun)', 'Jika genangan air/banjir memperngaruhi atau terjadi di daerah perumahan dan/atau daerah pertanian (dalam daerah perkotaan yang terbatas)', 'Jika genangan air/banjir mempengaruhi atau terjadi di daerah yang pelayanan fasilitas sosial dan fasilitas pemerintah terbatas', 'Jika genangan air/banjir terjadi pada daerah yang jaringan transportasinya padat', 'Jika genangan air/banjir terjadi pada perumahan yang kurang padat', 'Jika kerugian 80% nilai milik pribadi'),
(325, 'Tanjung Jaya', 'Sungai Serut', '1.5', '5', '48', 'Sangat sering (10 kali/tahun)', 'Jika genangan air/banjir memperngaruhi atau terjadi di daerah perumahan dan/atau daerah pertanian (dalam daerah perkotaan yang terbatas)', 'Jika genangan air/banjir terjadi di daerah yang sedikit pelayanan fasilitas sosial dan fasilitas pemerintah', 'Jika genangan air/banjir terjadi pada daerah yang jaringan transportasinya padat', 'Jika genangan air/banjir terjadi pada perumahan yang kurang padat', 'Jika kerugian 80% nilai milik pribadi'),
(326, 'Semarang', 'Sungai Serut', '1.5', '1', '48', 'Sangat sering (10 kali/tahun)', 'Jika genangan air/banjir memperngaruhi atau terjadi di daerah perumahan dan/atau daerah pertanian (dalam daerah perkotaan yang terbatas)', 'Jika genangan air/banjir terjadi di daerah yang sedikit pelayanan fasilitas sosial dan fasilitas pemerintah', 'Jika genangan air/banjir terjadi pada daerah yang jaringan transportasinya padat', 'Jika genangan air/banjir terjadi pada perumahan yang kurang padat', 'Jika kerugian 80% nilai milik pribadi'),
(327, 'Surabaya', 'Sungai Serut', '0.4', '1', '2', 'Kurang sering (3 kali/tahun)', 'Jika genangan air/banjir memperngaruhi atau terjadi di daerah perumahan dan/atau daerah pertanian (dalam daerah perkotaan yang terbatas)', 'Jika genangan air/banjir mempengaruhi atau terjadi di daerah yang pelayanan fasilitas sosial dan fasilitas pemerintah terbatas', 'Jika genangan air/bajir terjadi di daerah yang jaringan transportasinya kurang padat', 'Jika genangan air/banjir terjadi pada perumahan padat sekali', 'Jika kerugian kurang dari 40% milik pribadi'),
(328, 'Kampung Klawi', 'Sungai Serut', '1.5', '2', '96', 'Sangat sering (10 kali/tahun)', 'Jika genangan air/banjir memperngaruhi atau terjadi di daerah perumahan dan/atau daerah pertanian (dalam daerah perkotaan yang terbatas)', 'Jika genangan air/banjir mempengaruhi atau terjadi di daerah yang pelayanan fasilitas sosial dan fasilitas pemerintah terbatas', 'Jika genangan air/banjir mempengaruhi atau terjadi di daerah yang jaringan transportasinya terbatas', 'Jika genangan air/banjir terjadi pada perumahan yang kurang padat', 'Jika kerugian kurang dari 40% milik pribadi'),
(329, 'Sukamerindu (Jl. Basuki Rahmat', 'Sungai Serut', '1.5', '1', '7', 'Kurang sering (3 kali/tahun)', 'Jika genangan air/banjir memperngaruhi atau terjadi di daerah perumahan dan/atau daerah pertanian (dalam daerah perkotaan yang terbatas)', 'Jika genangan air/banjir mempengaruhi atau terjadi di daerah yang pelayanan fasilitas sosial dan fasilitas pemerintah terbatas', 'Jika genangan air/bajir terjadi di daerah yang jaringan transportasinya kurang padat', 'Jika genangan air/banjir terjadi pada perumahan yang kurang padat', 'Jika kerugian kurang dari 40% milik pribadi'),
(330, 'Sukamerindu (Jl. Jawa)', 'Sungai Serut', '0.4', '0.5', '48', 'Kurang sering (3 kali/tahun)', 'Jika genangan air/banjir terjadi di daerah industri dan daerah komersial yang kurang padat', 'Jika genangan air/banjir terjadi di daerah yang sedikit pelayanan fasilitas sosial dan fasilitas pemerintah', 'Jika genangan air/banjir mempengaruhi atau terjadi di daerah yang jaringan transportasinya terbatas', 'Jika genangan air/banjir terjadi pada perumahan yang kurang padat', 'Jika kerugian kurang dari 40% milik pribadi'),
(331, 'Sawah Lebar Baru', 'Ratu Agung', '1', '1', '24', 'Sangat sering (10 kali/tahun)', 'Jika genangan air/banjir memperngaruhi atau terjadi di daerah perumahan dan/atau daerah pertanian (dalam daerah perkotaan yang terbatas)', 'Jika genangan air/banjir mempengaruhi atau terjadi di daerah yang pelayanan fasilitas sosial dan fasilitas pemerintah terbatas', 'Jika genangan air/bajir terjadi di daerah yang jaringan transportasinya kurang padat', 'Jika genangan air/banjir terjadi pada perumahan padat sekali', 'Jika kerugian 80% nilai milik pribadi'),
(332, 'Sawah Lebar Lama', 'Ratu Agung', '1.7', '1', '48', 'Sangat sering (10 kali/tahun)', 'Jika genangan air/banjir memperngaruhi atau terjadi di daerah perumahan dan/atau daerah pertanian (dalam daerah perkotaan yang terbatas)', 'Jika genangan air/banjir terjadi di daerah yang sedikit pelayanan fasilitas sosial dan fasilitas pemerintah', 'Jika genangan air/bajir terjadi di daerah yang jaringan transportasinya kurang padat', 'Jika genangan air/banjir terjadi pada perumahan padat sekali', 'Jika kerugian kurang dari 40% milik pribadi'),
(333, 'Tanah Patah', 'Ratu Agung', '1.5', '2', '48', 'Sangat sering (10 kali/tahun)', 'Jika genangan air/banjir memperngaruhi atau terjadi di daerah perumahan dan/atau daerah pertanian (dalam daerah perkotaan yang terbatas)', 'Jika genangan air/banjir mempengaruhi atau terjadi di daerah yang pelayanan fasilitas sosial dan fasilitas pemerintah terbatas', 'Jika genangan air/bajir terjadi di daerah yang jaringan transportasinya kurang padat', 'Jika genangan air/banjir terjadi pada perumahan padat sekali', 'Jika kerugian kurang dari 40% milik pribadi'),
(334, 'Lempuing', 'Ratu Agung', '0.35', '0.5', '7', 'Kurang sering (3 kali/tahun)', 'Jika genangan air/banjir memperngaruhi atau terjadi di daerah perumahan dan/atau daerah pertanian (dalam daerah perkotaan yang terbatas)', 'Jika genangan air/banjir terjadi pada daerah yang banyak pelayanan fasilitas sosial dan fasilitas pemerintah', 'Jika genangan air/bajir terjadi di daerah yang jaringan transportasinya kurang padat', 'Jika genangan air/banjir terjadi pada perumahan yang kurang padat', 'Jika kerugian kurang dari 40% milik pribadi'),
(335, 'Kebun Tebeng', 'Ratu Agung', '1.5', '0.5', '8', 'Sangat sering (10 kali/tahun)', 'Jika genangan air/banjir memperngaruhi atau terjadi di daerah perumahan dan/atau daerah pertanian (dalam daerah perkotaan yang terbatas)', 'Jika genangan air/banjir mempengaruhi atau terjadi di daerah yang pelayanan fasilitas sosial dan fasilitas pemerintah terbatas', 'Jika genangan air/bajir terjadi di daerah yang jaringan transportasinya kurang padat', 'Jika genangan air/banjir terjadi pada perumahan padat sekali', 'Jika kerugian kurang dari 40% milik pribadi'),
(336, 'Rawa Makmur', 'Muara Bangkahulu', '2', '7', '48', 'Sangat sering (10 kali/tahun)', 'Jika genangan air/banjir terjadi di daerah industri dan daerah komersial yang kurang padat', 'Jika genangan air/banjir terjadi di daerah yang sedikit pelayanan fasilitas sosial dan fasilitas pemerintah', 'Jika genangan air/banjir terjadi pada daerah yang jaringan transportasinya padat', 'Jika genangan air/banjir terjadi pada perumahan padat sekali', 'Jika kerugian 80% nilai milik pribadi'),
(337, 'Rawa Makmur Permai', 'Muara Bangkahulu', '1.5', '1', '24', 'Sangat sering (10 kali/tahun)', 'Jika genangan air/banjir memperngaruhi atau terjadi di daerah perumahan dan/atau daerah pertanian (dalam daerah perkotaan yang terbatas)', 'Jika genangan air/banjir mempengaruhi atau terjadi di daerah yang pelayanan fasilitas sosial dan fasilitas pemerintah terbatas', 'Jika genangan air/bajir terjadi di daerah yang jaringan transportasinya kurang padat', 'Jika genangan air/banjir terjadi pada perumahan yang kurang padat', 'Jika kerugian kurang dari 40% milik pribadi'),
(338, 'Bentiring (Perum. Korpri)', 'Muara Bangkahulu', '2', '2', '72', 'Sangat sering (10 kali/tahun)', 'Jika genangan air/banjir memperngaruhi atau terjadi di daerah perumahan dan/atau daerah pertanian (dalam daerah perkotaan yang terbatas)', 'Jika genangan air/banjir terjadi di daerah yang sedikit pelayanan fasilitas sosial dan fasilitas pemerintah', 'Jika genangan air/bajir terjadi di daerah yang jaringan transportasinya kurang padat', 'Jika genangan air/banjir terjadi pada perumahan padat sekali', 'Jika kerugian 80% nilai milik pribadi'),
(339, 'Bentiring (Perum. Bumi Mas 1)', 'Muara Bangkahulu', '1', '0.6', '24', 'Sangat sering (10 kali/tahun)', 'Jika genangan air/banjir memperngaruhi atau terjadi di daerah perumahan dan/atau daerah pertanian (dalam daerah perkotaan yang terbatas)', 'Jika genangan air/banjir mempengaruhi atau terjadi di daerah yang pelayanan fasilitas sosial dan fasilitas pemerintah terbatas', 'Jika genangan air/bajir terjadi di daerah yang jaringan transportasinya kurang padat', 'Jika genangan air/banjir terjadi pada perumahan padat sekali', 'Jika kerugian kurang dari 40% milik pribadi'),
(340, 'Bentiring Permai', 'Muara Bangkahulu', '1.5', '2', '48', 'Sangat sering (10 kali/tahun)', 'Jika genangan air/banjir memperngaruhi atau terjadi di daerah perumahan dan/atau daerah pertanian (dalam daerah perkotaan yang terbatas)', 'Jika genangan air/banjir mempengaruhi atau terjadi di daerah yang pelayanan fasilitas sosial dan fasilitas pemerintah terbatas', 'Jika genangan air/bajir terjadi di daerah yang jaringan transportasinya kurang padat', 'Jika genangan air/banjir terjadi pada perumahan padat sekali', 'Jika kerugian kurang dari 40% milik pribadi'),
(341, 'Beringin Raya', 'Muara Bangkahulu', '0.45', '0.5', '8', 'Sering (6 kali/tahun)', 'Jika genangan air/banjir memperngaruhi atau terjadi di daerah perumahan dan/atau daerah pertanian (dalam daerah perkotaan yang terbatas)', 'Jika tidak ada fasilitas sosial dan fasilitas pemerintah', 'Jika genangan air/banjir mempengaruhi atau terjadi di daerah yang jaringan transportasinya terbatas', 'Jika genangan air/banjir terjadi pada perumahan yang kurang padat', 'Jika kerugian kurang dari 40% milik pribadi'),
(342, 'Kandang Limun', 'Muara Bangkahulu', '0.4', '4', '6', 'Sering (6 kali/tahun)', 'Jika genangan air/banjir memperngaruhi atau terjadi di daerah perumahan dan/atau daerah pertanian (dalam daerah perkotaan yang terbatas)', 'Jika genangan air/banjir mempengaruhi atau terjadi di daerah yang pelayanan fasilitas sosial dan fasilitas pemerintah terbatas', 'Jika genangan air/bajir terjadi di daerah yang jaringan transportasinya kurang padat', 'Jika genangan air/banjir terjadi pada perumahan padat sekali', 'Jika kerugian kurang dari 40% milik pribadi'),
(343, 'Penurunan', 'Ratu Samban', '0.25', '0.6', '2', 'Kurang sering (3 kali/tahun)', 'Jika genangan air/banjir terjadi di daerah industri dan daerah komersial yang kurang padat', 'Jika genangan air/banjir mempengaruhi atau terjadi di daerah yang pelayanan fasilitas sosial dan fasilitas pemerintah terbatas', 'Jika genangan air/banjir terjadi pada daerah yang jaringan transportasinya padat', 'Jika tidak ada perumahan pada daerah genangan air/banjir', 'Tidak ada kerugian milik pribadi'),
(344, 'Kandang Mas (Perum. Kirana)', 'Kampung Melayu', '0.2', '1', '2', 'Kurang sering (3 kali/tahun)', 'Jika genangan air/banjir memperngaruhi atau terjadi di daerah perumahan dan/atau daerah pertanian (dalam daerah perkotaan yang terbatas)', 'Jika genangan air/banjir mempengaruhi atau terjadi di daerah yang pelayanan fasilitas sosial dan fasilitas pemerintah terbatas', 'Jika genangan air/bajir terjadi di daerah yang jaringan transportasinya kurang padat', 'Jika genangan air/banjir terjadi pada perumahan padat sekali', 'Jika kerugian kurang dari 40% milik pribadi'),
(345, 'Teluk Sepang', 'Kampung Melayu', '0.6', '5', '6', 'Kurang sering (3 kali/tahun)', 'Jika genangan air/banjir memperngaruhi atau terjadi di daerah perumahan dan/atau daerah pertanian (dalam daerah perkotaan yang terbatas)', 'Jika genangan air/banjir mempengaruhi atau terjadi di daerah yang pelayanan fasilitas sosial dan fasilitas pemerintah terbatas', 'Jika genangan air/bajir terjadi di daerah yang jaringan transportasinya kurang padat', 'Jika genangan air/banjir terjadi pada perumahan yang kurang padat', 'Jika kerugian kurang dari 40% milik pribadi'),
(346, 'Padang Serai', 'Kampung Melayu', '1.2', '1.2', '48', 'Sering (6 kali/tahun)', 'Jika genangan air/banjir memperngaruhi atau terjadi di daerah perumahan dan/atau daerah pertanian (dalam daerah perkotaan yang terbatas)', 'Jika genangan air/banjir mempengaruhi atau terjadi di daerah yang pelayanan fasilitas sosial dan fasilitas pemerintah terbatas', 'Jika genangan air/bajir terjadi di daerah yang jaringan transportasinya kurang padat', 'Jika genangan air/banjir terjadi pada perumahan yang kurang padat', 'Jika kerugian kurang dari 40% milik pribadi'),
(347, 'Panorama', 'Singaran Pati', '0.4', '1.2', '8', 'Kurang sering (3 kali/tahun)', 'Jika genangan air/banjir memperngaruhi atau terjadi di daerah perumahan dan/atau daerah pertanian (dalam daerah perkotaan yang terbatas)', 'Jika tidak ada fasilitas sosial dan fasilitas pemerintah', 'Jika genangan air/bajir terjadi di daerah yang jaringan transportasinya kurang padat', 'Jika genangan air/banjir terjadi pada perumahan yang kurang padat', 'Jika kerugian kurang dari 40% milik pribadi'),
(348, 'Jembatan Kecil', 'Singaran Pati', '0.45', '2.8', '24', 'Kurang sering (3 kali/tahun)', 'Jika genangan air/banjir memperngaruhi atau terjadi di daerah perumahan dan/atau daerah pertanian (dalam daerah perkotaan yang terbatas)', 'Jika tidak ada fasilitas sosial dan fasilitas pemerintah', 'Jika genangan air/bajir terjadi di daerah yang jaringan transportasinya kurang padat', 'Jika genangan air/banjir terjadi pada perumahan yang kurang padat', 'Jika kerugian kurang dari 40% milik pribadi'),
(349, 'Dusun Besar', 'Singaran Pati', '1', '1.2', '7', 'Sering (6 kali/tahun)', 'Jika genangan air/banjir memperngaruhi atau terjadi di daerah perumahan dan/atau daerah pertanian (dalam daerah perkotaan yang terbatas)', 'Jika tidak ada fasilitas sosial dan fasilitas pemerintah', 'Jika genangan air/bajir terjadi di daerah yang jaringan transportasinya kurang padat', 'Jika genangan air/banjir terjadi pada perumahan yang kurang padat', 'Jika kerugian kurang dari 40% milik pribadi'),
(350, 'Lingkar Barat (Vila Taman Sury', 'Gading Cempaka', '1.2', '0.6', '8', 'Kurang sering (3 kali/tahun)', 'Jika genangan air/banjir memperngaruhi atau terjadi di daerah perumahan dan/atau daerah pertanian (dalam daerah perkotaan yang terbatas)', 'Jika tidak ada fasilitas sosial dan fasilitas pemerintah', 'Jika genangan air/bajir terjadi di daerah yang jaringan transportasinya kurang padat', 'Jika genangan air/banjir terjadi pada perumahan yang kurang padat', 'Jika kerugian kurang dari 40% milik pribadi'),
(351, 'Betungan', 'Selebar', '0.25', '0.4', '3', 'Kurang sering (3 kali/tahun)', 'Jika genangan air/banjir memperngaruhi atau terjadi di daerah perumahan dan/atau daerah pertanian (dalam daerah perkotaan yang terbatas)', 'Jika tidak ada fasilitas sosial dan fasilitas pemerintah', 'Jika genangan air/bajir terjadi di daerah yang jaringan transportasinya kurang padat', 'Jika genangan air/banjir terjadi pada perumahan padat sekali', 'Jika kerugian kurang dari 40% milik pribadi'),
(352, 'Pekan Sabtu', 'Selebar', '1.2', '1.1', '8', 'Kurang sering (3 kali/tahun)', 'Jika genangan air/banjir memperngaruhi atau terjadi di daerah perumahan dan/atau daerah pertanian (dalam daerah perkotaan yang terbatas)', 'Jika genangan air/banjir mempengaruhi atau terjadi di daerah yang pelayanan fasilitas sosial dan fasilitas pemerintah terbatas', 'Jika genangan air/bajir terjadi di daerah yang jaringan transportasinya kurang padat', 'Jika genangan air/banjir terjadi pada perumahan padat sekali', 'Jika kerugian kurang dari 40% milik pribadi'),
(353, 'Sukarami', 'Selebar', '1.2', '1', '48', 'Sering (6 kali/tahun)', 'Jika genangan air/banjir memperngaruhi atau terjadi di daerah perumahan dan/atau daerah pertanian (dalam daerah perkotaan yang terbatas)', 'Jika genangan air/banjir mempengaruhi atau terjadi di daerah yang pelayanan fasilitas sosial dan fasilitas pemerintah terbatas', 'Jika genangan air/bajir terjadi di daerah yang jaringan transportasinya kurang padat', 'Jika genangan air/banjir terjadi pada perumahan yang kurang padat', 'Jika kerugian 80% nilai milik pribadi');

-- --------------------------------------------------------

--
-- Table structure for table `tb_datanilaikriteria`
--

CREATE TABLE `tb_datanilaikriteria` (
  `id_datanilaikriteria` int(3) NOT NULL,
  `id_alternatif` int(3) NOT NULL,
  `tinggi_genangan` int(10) NOT NULL,
  `luas_genangan` int(10) NOT NULL,
  `lamanya_genangan` int(10) NOT NULL,
  `frekuensi_genangan` int(10) NOT NULL,
  `kerugian_ekonomi` varchar(100) NOT NULL,
  `gangguansosial_pemerintah` varchar(100) NOT NULL,
  `kerugian_transportasi` varchar(100) NOT NULL,
  `kerugian_perumahan` varchar(100) NOT NULL,
  `hakmilikpribadi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_hasil`
--

CREATE TABLE `tb_hasil` (
  `id_hasil` int(3) NOT NULL,
  `id_optimalisasi` int(3) NOT NULL,
  `cost` float NOT NULL,
  `benefit` float NOT NULL,
  `hasil` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_hasil`
--

INSERT INTO `tb_hasil` (`id_hasil`, `id_optimalisasi`, `cost`, `benefit`, `hasil`) VALUES
(71, 83, 0, 0.2162, 0.2162),
(72, 84, 0, 0.2229, 0.2229),
(73, 85, 0, 0.2006, 0.2006),
(74, 86, 0, 0.1555, 0.1555),
(75, 87, 0, 0.1892, 0.1892),
(76, 88, 0, 0.1634, 0.1634),
(77, 89, 0, 0.1613, 0.1613),
(78, 90, 0, 0.1935, 0.1935),
(79, 91, 0, 0.1937, 0.1937),
(80, 92, 0, 0.1982, 0.1982),
(81, 93, 0, 0.1596, 0.1596),
(82, 94, 0, 0.1697, 0.1697),
(83, 95, 0, 0.234, 0.234),
(84, 96, 0, 0.1828, 0.1828),
(85, 97, 0, 0.2113, 0.2113),
(86, 98, 0, 0.1759, 0.1759),
(87, 99, 0, 0.1982, 0.1982),
(88, 100, 0, 0.1415, 0.1415),
(89, 101, 0, 0.1906, 0.1906),
(90, 102, 0, 0.1308, 0.1308),
(91, 103, 0, 0.1496, 0.1496),
(92, 104, 0, 0.1857, 0.1857),
(93, 105, 0, 0.1761, 0.1761),
(94, 106, 0, 0.1508, 0.1508),
(95, 107, 0, 0.1681, 0.1681),
(96, 108, 0, 0.1633, 0.1633),
(97, 109, 0, 0.1455, 0.1455),
(98, 110, 0, 0.1318, 0.1318),
(99, 111, 0, 0.1676, 0.1676),
(100, 112, 0, 0.1826, 0.1826);

-- --------------------------------------------------------

--
-- Table structure for table `tb_hasilhitungmoora`
--

CREATE TABLE `tb_hasilhitungmoora` (
  `id_hasilhitungmoora` int(5) NOT NULL,
  `nilai` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_kriteria`
--

CREATE TABLE `tb_kriteria` (
  `id_kriteria` int(3) NOT NULL,
  `kode_kriteria` varchar(3) NOT NULL,
  `nama_kriteria` varchar(50) NOT NULL,
  `bobot` int(3) NOT NULL,
  `jenis` varchar(10) NOT NULL,
  `alias` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_kriteria`
--

INSERT INTO `tb_kriteria` (`id_kriteria`, `kode_kriteria`, `nama_kriteria`, `bobot`, `jenis`, `alias`) VALUES
(1, 'K1', 'Tinggi Genangan', 15, 'Benefit', 'tinggi_genangan'),
(2, 'K2', 'Luas Genangan', 15, 'Benefit', 'luas_genangan'),
(3, 'K3', 'Lamanya Genangan', 15, 'Benefit', 'lamanya_genangan'),
(4, 'K4', 'Frekuensi Genangan', 15, 'Benefit', 'frekuensi_genangan'),
(5, 'K5', 'Kerugian Ekonomi', 8, 'Benefit', 'kerugian_ekonomi'),
(6, 'K6', 'Gangguan Sosial dan Fasilitas Pemerintah', 8, 'Benefit', 'gangguansosial_pemerintah'),
(7, 'K7', 'Kerugian dan Gangguan Transportasi', 8, 'Benefit', 'kerugian_transportasi'),
(8, 'K8', 'Kerugian Pada Daerah Perumahan', 8, 'Benefit', 'kerugian_perumahan'),
(9, 'K9', 'Kerugian Hak Milik Pribadi', 8, 'Benefit', 'hakmilikpribadi');

-- --------------------------------------------------------

--
-- Table structure for table `tb_nilairating`
--

CREATE TABLE `tb_nilairating` (
  `id_nilairating` int(3) NOT NULL,
  `id_alternatif` int(3) NOT NULL,
  `k1` int(10) DEFAULT NULL,
  `k2` int(10) DEFAULT NULL,
  `k3` int(10) DEFAULT NULL,
  `k4` int(10) DEFAULT NULL,
  `k5` int(5) DEFAULT NULL,
  `k6` int(10) DEFAULT NULL,
  `k7` int(10) DEFAULT NULL,
  `k8` int(10) DEFAULT NULL,
  `k9` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_nilairating`
--

INSERT INTO `tb_nilairating` (`id_nilairating`, `id_alternatif`, `k1`, `k2`, `k3`, `k4`, `k5`, `k6`, `k7`, `k8`, `k9`) VALUES
(181, 324, 5, 4, 5, 5, 2, 2, 4, 3, 3),
(182, 325, 5, 4, 5, 5, 2, 3, 4, 3, 3),
(183, 326, 5, 2, 5, 5, 2, 3, 4, 3, 3),
(184, 327, 4, 2, 3, 3, 2, 2, 3, 4, 2),
(185, 328, 5, 3, 5, 5, 2, 2, 2, 3, 2),
(186, 329, 5, 2, 4, 3, 2, 2, 3, 3, 2),
(187, 330, 4, 1, 5, 3, 3, 3, 2, 3, 2),
(188, 331, 5, 2, 5, 5, 2, 2, 3, 4, 3),
(189, 332, 5, 2, 5, 5, 2, 3, 3, 4, 2),
(190, 333, 5, 3, 5, 5, 2, 2, 3, 4, 2),
(191, 334, 4, 1, 4, 3, 2, 4, 3, 3, 2),
(192, 335, 5, 1, 4, 5, 2, 2, 3, 4, 2),
(193, 336, 5, 4, 5, 5, 3, 3, 4, 4, 3),
(194, 337, 5, 2, 5, 5, 2, 2, 3, 3, 2),
(195, 338, 5, 3, 5, 5, 2, 3, 3, 4, 3),
(196, 339, 5, 1, 5, 5, 2, 2, 3, 4, 2),
(197, 340, 5, 3, 5, 5, 2, 2, 3, 4, 2),
(198, 341, 4, 1, 4, 4, 2, 1, 2, 3, 2),
(199, 342, 4, 4, 4, 4, 2, 2, 3, 4, 2),
(200, 343, 3, 1, 3, 3, 3, 2, 4, 1, 1),
(201, 344, 3, 2, 3, 3, 2, 2, 3, 4, 2),
(202, 345, 5, 4, 4, 3, 2, 2, 3, 3, 2),
(203, 346, 5, 2, 5, 4, 2, 2, 3, 3, 2),
(204, 347, 4, 2, 4, 3, 2, 1, 3, 3, 2),
(205, 348, 4, 3, 5, 3, 2, 1, 3, 3, 2),
(206, 349, 5, 2, 4, 4, 2, 1, 3, 3, 2),
(207, 350, 5, 1, 4, 3, 2, 1, 3, 3, 2),
(208, 351, 3, 1, 3, 3, 2, 1, 3, 4, 2),
(209, 352, 5, 2, 4, 3, 2, 2, 3, 4, 2),
(210, 353, 5, 2, 5, 4, 2, 2, 3, 3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `tb_normalisasi`
--

CREATE TABLE `tb_normalisasi` (
  `id_normalisasi` int(3) NOT NULL,
  `id_nilairating` int(3) NOT NULL,
  `k1_normalisasi` float NOT NULL,
  `k2_normalisasi` float NOT NULL,
  `k3_normalisasi` float NOT NULL,
  `k4_normalisasi` float NOT NULL,
  `k5_normalisasi` float NOT NULL,
  `k6_normalisasi` float NOT NULL,
  `k7_normalisasi` float NOT NULL,
  `k8_normalisasi` float NOT NULL,
  `k9_normalisasi` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_normalisasi`
--

INSERT INTO `tb_normalisasi` (`id_normalisasi`, `id_nilairating`, `k1_normalisasi`, `k2_normalisasi`, `k3_normalisasi`, `k4_normalisasi`, `k5_normalisasi`, `k6_normalisasi`, `k7_normalisasi`, `k8_normalisasi`, `k9_normalisasi`) VALUES
(91, 181, 0.197797, 0.297318, 0.204808, 0.220755, 0.172133, 0.166667, 0.234888, 0.159674, 0.243332),
(92, 182, 0.197797, 0.297318, 0.204808, 0.220755, 0.172133, 0.25, 0.234888, 0.159674, 0.243332),
(93, 183, 0.197797, 0.148659, 0.204808, 0.220755, 0.172133, 0.25, 0.234888, 0.159674, 0.243332),
(94, 184, 0.158238, 0.148659, 0.122885, 0.132453, 0.172133, 0.166667, 0.176166, 0.212899, 0.162221),
(95, 185, 0.197797, 0.222988, 0.204808, 0.220755, 0.172133, 0.166667, 0.117444, 0.159674, 0.162221),
(96, 186, 0.197797, 0.148659, 0.163846, 0.132453, 0.172133, 0.166667, 0.176166, 0.159674, 0.162221),
(97, 187, 0.158238, 0.0743294, 0.204808, 0.132453, 0.258199, 0.25, 0.117444, 0.159674, 0.162221),
(98, 188, 0.197797, 0.148659, 0.204808, 0.220755, 0.172133, 0.166667, 0.176166, 0.212899, 0.243332),
(99, 189, 0.197797, 0.148659, 0.204808, 0.220755, 0.172133, 0.25, 0.176166, 0.212899, 0.162221),
(100, 190, 0.197797, 0.222988, 0.204808, 0.220755, 0.172133, 0.166667, 0.176166, 0.212899, 0.162221),
(101, 191, 0.158238, 0.0743294, 0.163846, 0.132453, 0.172133, 0.333333, 0.176166, 0.159674, 0.162221),
(102, 192, 0.197797, 0.0743294, 0.163846, 0.220755, 0.172133, 0.166667, 0.176166, 0.212899, 0.162221),
(103, 193, 0.197797, 0.297318, 0.204808, 0.220755, 0.258199, 0.25, 0.234888, 0.212899, 0.243332),
(104, 194, 0.197797, 0.148659, 0.204808, 0.220755, 0.172133, 0.166667, 0.176166, 0.159674, 0.162221),
(105, 195, 0.197797, 0.222988, 0.204808, 0.220755, 0.172133, 0.25, 0.176166, 0.212899, 0.243332),
(106, 196, 0.197797, 0.0743294, 0.204808, 0.220755, 0.172133, 0.166667, 0.176166, 0.212899, 0.162221),
(107, 197, 0.197797, 0.222988, 0.204808, 0.220755, 0.172133, 0.166667, 0.176166, 0.212899, 0.162221),
(108, 198, 0.158238, 0.0743294, 0.163846, 0.176604, 0.172133, 0.0833333, 0.117444, 0.159674, 0.162221),
(109, 199, 0.158238, 0.297318, 0.163846, 0.176604, 0.172133, 0.166667, 0.176166, 0.212899, 0.162221),
(110, 200, 0.118678, 0.0743294, 0.122885, 0.132453, 0.258199, 0.166667, 0.234888, 0.0532246, 0.0811107),
(111, 201, 0.118678, 0.148659, 0.122885, 0.132453, 0.172133, 0.166667, 0.176166, 0.212899, 0.162221),
(112, 202, 0.197797, 0.297318, 0.163846, 0.132453, 0.172133, 0.166667, 0.176166, 0.159674, 0.162221),
(113, 203, 0.197797, 0.148659, 0.204808, 0.176604, 0.172133, 0.166667, 0.176166, 0.159674, 0.162221),
(114, 204, 0.158238, 0.148659, 0.163846, 0.132453, 0.172133, 0.0833333, 0.176166, 0.159674, 0.162221),
(115, 205, 0.158238, 0.222988, 0.204808, 0.132453, 0.172133, 0.0833333, 0.176166, 0.159674, 0.162221),
(116, 206, 0.197797, 0.148659, 0.163846, 0.176604, 0.172133, 0.0833333, 0.176166, 0.159674, 0.162221),
(117, 207, 0.197797, 0.0743294, 0.163846, 0.132453, 0.172133, 0.0833333, 0.176166, 0.159674, 0.162221),
(118, 208, 0.118678, 0.0743294, 0.122885, 0.132453, 0.172133, 0.0833333, 0.176166, 0.212899, 0.162221),
(119, 209, 0.197797, 0.148659, 0.163846, 0.132453, 0.172133, 0.166667, 0.176166, 0.212899, 0.162221),
(120, 210, 0.197797, 0.148659, 0.204808, 0.176604, 0.172133, 0.166667, 0.176166, 0.159674, 0.243332);

-- --------------------------------------------------------

--
-- Table structure for table `tb_optimalisasi`
--

CREATE TABLE `tb_optimalisasi` (
  `id_optimalisasi` int(3) NOT NULL,
  `id_normalisasi` int(3) NOT NULL,
  `k1_optimalisasi` float NOT NULL,
  `k2_optimalisasi` float NOT NULL,
  `k3_optimalisasi` float NOT NULL,
  `k4_optimalisasi` float NOT NULL,
  `k5_optimalisasi` float NOT NULL,
  `k6_optimalisasi` float NOT NULL,
  `k7_optimalisasi` float NOT NULL,
  `k8_optimalisasi` float NOT NULL,
  `k9_optimalisasi` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_optimalisasi`
--

INSERT INTO `tb_optimalisasi` (`id_optimalisasi`, `id_normalisasi`, `k1_optimalisasi`, `k2_optimalisasi`, `k3_optimalisasi`, `k4_optimalisasi`, `k5_optimalisasi`, `k6_optimalisasi`, `k7_optimalisasi`, `k8_optimalisasi`, `k9_optimalisasi`) VALUES
(83, 91, 0.0296695, 0.0445977, 0.0307212, 0.0331132, 0.0137706, 0.0133334, 0.018791, 0.0127739, 0.0194666),
(84, 92, 0.0296695, 0.0445977, 0.0307212, 0.0331132, 0.0137706, 0.02, 0.018791, 0.0127739, 0.0194666),
(85, 93, 0.0296695, 0.0222989, 0.0307212, 0.0331132, 0.0137706, 0.02, 0.018791, 0.0127739, 0.0194666),
(86, 94, 0.0237357, 0.0222989, 0.0184327, 0.0198679, 0.0137706, 0.0133334, 0.0140933, 0.0170319, 0.0129777),
(87, 95, 0.0296695, 0.0334482, 0.0307212, 0.0331132, 0.0137706, 0.0133334, 0.00939552, 0.0127739, 0.0129777),
(88, 96, 0.0296695, 0.0222989, 0.0245769, 0.0198679, 0.0137706, 0.0133334, 0.0140933, 0.0127739, 0.0129777),
(89, 97, 0.0237357, 0.0111494, 0.0307212, 0.0198679, 0.0206559, 0.02, 0.00939552, 0.0127739, 0.0129777),
(90, 98, 0.0296695, 0.0222989, 0.0307212, 0.0331132, 0.0137706, 0.0133334, 0.0140933, 0.0170319, 0.0194666),
(91, 99, 0.0296695, 0.0222989, 0.0307212, 0.0331132, 0.0137706, 0.02, 0.0140933, 0.0170319, 0.0129777),
(92, 100, 0.0296695, 0.0334482, 0.0307212, 0.0331132, 0.0137706, 0.0133334, 0.0140933, 0.0170319, 0.0129777),
(93, 101, 0.0237357, 0.0111494, 0.0245769, 0.0198679, 0.0137706, 0.0266666, 0.0140933, 0.0127739, 0.0129777),
(94, 102, 0.0296695, 0.0111494, 0.0245769, 0.0331132, 0.0137706, 0.0133334, 0.0140933, 0.0170319, 0.0129777),
(95, 103, 0.0296695, 0.0445977, 0.0307212, 0.0331132, 0.0206559, 0.02, 0.018791, 0.0170319, 0.0194666),
(96, 104, 0.0296695, 0.0222989, 0.0307212, 0.0331132, 0.0137706, 0.0133334, 0.0140933, 0.0127739, 0.0129777),
(97, 105, 0.0296695, 0.0334482, 0.0307212, 0.0331132, 0.0137706, 0.02, 0.0140933, 0.0170319, 0.0194666),
(98, 106, 0.0296695, 0.0111494, 0.0307212, 0.0331132, 0.0137706, 0.0133334, 0.0140933, 0.0170319, 0.0129777),
(99, 107, 0.0296695, 0.0334482, 0.0307212, 0.0331132, 0.0137706, 0.0133334, 0.0140933, 0.0170319, 0.0129777),
(100, 108, 0.0237357, 0.0111494, 0.0245769, 0.0264906, 0.0137706, 0.00666666, 0.00939552, 0.0127739, 0.0129777),
(101, 109, 0.0237357, 0.0445977, 0.0245769, 0.0264906, 0.0137706, 0.0133334, 0.0140933, 0.0170319, 0.0129777),
(102, 110, 0.0178017, 0.0111494, 0.0184327, 0.0198679, 0.0206559, 0.0133334, 0.018791, 0.00425797, 0.00648886),
(103, 111, 0.0178017, 0.0222989, 0.0184327, 0.0198679, 0.0137706, 0.0133334, 0.0140933, 0.0170319, 0.0129777),
(104, 112, 0.0296695, 0.0445977, 0.0245769, 0.0198679, 0.0137706, 0.0133334, 0.0140933, 0.0127739, 0.0129777),
(105, 113, 0.0296695, 0.0222989, 0.0307212, 0.0264906, 0.0137706, 0.0133334, 0.0140933, 0.0127739, 0.0129777),
(106, 114, 0.0237357, 0.0222989, 0.0245769, 0.0198679, 0.0137706, 0.00666666, 0.0140933, 0.0127739, 0.0129777),
(107, 115, 0.0237357, 0.0334482, 0.0307212, 0.0198679, 0.0137706, 0.00666666, 0.0140933, 0.0127739, 0.0129777),
(108, 116, 0.0296695, 0.0222989, 0.0245769, 0.0264906, 0.0137706, 0.00666666, 0.0140933, 0.0127739, 0.0129777),
(109, 117, 0.0296695, 0.0111494, 0.0245769, 0.0198679, 0.0137706, 0.00666666, 0.0140933, 0.0127739, 0.0129777),
(110, 118, 0.0178017, 0.0111494, 0.0184327, 0.0198679, 0.0137706, 0.00666666, 0.0140933, 0.0170319, 0.0129777),
(111, 119, 0.0296695, 0.0222989, 0.0245769, 0.0198679, 0.0137706, 0.0133334, 0.0140933, 0.0170319, 0.0129777),
(112, 120, 0.0296695, 0.0222989, 0.0307212, 0.0264906, 0.0137706, 0.0133334, 0.0140933, 0.0127739, 0.0194666);

-- --------------------------------------------------------

--
-- Table structure for table `tb_rangking`
--

CREATE TABLE `tb_rangking` (
  `id_rangking` int(3) NOT NULL,
  `id_alternatif` int(3) NOT NULL,
  `nilai_yi` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_subkriteria`
--

CREATE TABLE `tb_subkriteria` (
  `id_subkriteria` int(3) NOT NULL,
  `id_kriteria` int(3) NOT NULL,
  `nama_subkriteria` varchar(1000) NOT NULL,
  `nilai` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_subkriteria`
--

INSERT INTO `tb_subkriteria` (`id_subkriteria`, `id_kriteria`, `nama_subkriteria`, `nilai`) VALUES
(1, 1, '> 0,50 m', 5),
(2, 1, '0,30 m - 0,50 m', 4),
(3, 1, '0,20 m - < 0,30 m', 3),
(4, 1, '0,10 m - < 0,20 m', 2),
(5, 1, '< 0,10 m', 1),
(6, 2, '> 8 ha', 5),
(7, 2, '4 - 8 ha', 4),
(8, 2, '2 - < 4 ha', 3),
(9, 2, '1 - < 2 ha ', 2),
(10, 2, '< 1 ha', 1),
(11, 3, '> 8 jam', 5),
(12, 3, '4 - 8 jam', 4),
(13, 3, '2 - < 4 jam', 3),
(14, 3, '1 - 2 jam', 2),
(15, 3, '< 1 jam', 1),
(16, 4, 'Sangat sering (10 kali/tahun)', 5),
(17, 4, 'Sering (6 kali/tahun)', 4),
(18, 4, 'Kurang sering (3 kali/tahun)', 3),
(19, 4, 'Jarang (1 kali/tahun)', 2),
(20, 4, 'Tidak pernah', 1),
(21, 5, 'Jika genangan air/banjir terjadi pada daerah industri, daerah komersial dan daerah perkantoran padat', 4),
(22, 5, 'Jika genangan air/banjir terjadi di daerah industri dan daerah komersial yang kurang padat', 3),
(23, 5, 'Jika genangan air/banjir memperngaruhi atau terjadi di daerah perumahan dan/atau daerah pertanian (dalam daerah perkotaan yang terbatas)', 2),
(24, 5, 'Jika terjadi genangan pada daerah yang jarang penduduknya dan daerah yang tidak produktif', 1),
(25, 6, 'Jika genangan air/banjir terjadi pada daerah yang banyak pelayanan fasilitas sosial dan fasilitas pemerintah', 4),
(26, 6, 'Jika genangan air/banjir terjadi di daerah yang sedikit pelayanan fasilitas sosial dan fasilitas pemerintah', 3),
(27, 6, 'Jika genangan air/banjir mempengaruhi atau terjadi di daerah yang pelayanan fasilitas sosial dan fasilitas pemerintah terbatas', 2),
(28, 6, 'Jika tidak ada fasilitas sosial dan fasilitas pemerintah', 1),
(29, 7, 'Jika genangan air/banjir terjadi pada daerah yang jaringan transportasinya padat', 4),
(30, 7, 'Jika genangan air/bajir terjadi di daerah yang jaringan transportasinya kurang padat', 3),
(31, 7, 'Jika genangan air/banjir mempengaruhi atau terjadi di daerah yang jaringan transportasinya terbatas', 2),
(32, 7, 'Jika tidak ada jaringan jalan', 1),
(33, 8, 'Jika genangan air/banjir terjadi pada perumahan padat sekali', 4),
(34, 8, 'Jika genangan air/banjir terjadi pada perumahan yang kurang padat', 3),
(35, 8, 'Jika genangan air/banjir mempengaruhi atau terjadi di daerah yang hanya pada beberapa bangunan perumahan', 2),
(36, 8, 'Jika tidak ada perumahan pada daerah genangan air/banjir', 1),
(37, 9, 'Jika kerugian lebih dari 80% nilai milik pribadi', 4),
(38, 9, 'Jika kerugian 80% nilai milik pribadi', 3),
(39, 9, 'Jika kerugian kurang dari 40% milik pribadi', 2),
(40, 9, 'Tidak ada kerugian milik pribadi', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tb_alternatif`
--
ALTER TABLE `tb_alternatif`
  ADD PRIMARY KEY (`id_alternatif`);

--
-- Indexes for table `tb_datanilaikriteria`
--
ALTER TABLE `tb_datanilaikriteria`
  ADD PRIMARY KEY (`id_datanilaikriteria`),
  ADD KEY `id_alternatif` (`id_alternatif`);

--
-- Indexes for table `tb_hasil`
--
ALTER TABLE `tb_hasil`
  ADD PRIMARY KEY (`id_hasil`),
  ADD KEY `id_optimalisasi` (`id_optimalisasi`);

--
-- Indexes for table `tb_hasilhitungmoora`
--
ALTER TABLE `tb_hasilhitungmoora`
  ADD PRIMARY KEY (`id_hasilhitungmoora`);

--
-- Indexes for table `tb_kriteria`
--
ALTER TABLE `tb_kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indexes for table `tb_nilairating`
--
ALTER TABLE `tb_nilairating`
  ADD PRIMARY KEY (`id_nilairating`),
  ADD KEY `id_alternatif` (`id_alternatif`);

--
-- Indexes for table `tb_normalisasi`
--
ALTER TABLE `tb_normalisasi`
  ADD PRIMARY KEY (`id_normalisasi`),
  ADD KEY `id_nilairating` (`id_nilairating`);

--
-- Indexes for table `tb_optimalisasi`
--
ALTER TABLE `tb_optimalisasi`
  ADD PRIMARY KEY (`id_optimalisasi`),
  ADD KEY `id_normalisasi` (`id_normalisasi`);

--
-- Indexes for table `tb_rangking`
--
ALTER TABLE `tb_rangking`
  ADD PRIMARY KEY (`id_rangking`);

--
-- Indexes for table `tb_subkriteria`
--
ALTER TABLE `tb_subkriteria`
  ADD PRIMARY KEY (`id_subkriteria`),
  ADD KEY `id_kriteria` (`id_kriteria`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_admin` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `tb_alternatif`
--
ALTER TABLE `tb_alternatif`
  MODIFY `id_alternatif` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=354;

--
-- AUTO_INCREMENT for table `tb_datanilaikriteria`
--
ALTER TABLE `tb_datanilaikriteria`
  MODIFY `id_datanilaikriteria` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_hasil`
--
ALTER TABLE `tb_hasil`
  MODIFY `id_hasil` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `tb_hasilhitungmoora`
--
ALTER TABLE `tb_hasilhitungmoora`
  MODIFY `id_hasilhitungmoora` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_kriteria`
--
ALTER TABLE `tb_kriteria`
  MODIFY `id_kriteria` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `tb_nilairating`
--
ALTER TABLE `tb_nilairating`
  MODIFY `id_nilairating` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=211;

--
-- AUTO_INCREMENT for table `tb_normalisasi`
--
ALTER TABLE `tb_normalisasi`
  MODIFY `id_normalisasi` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

--
-- AUTO_INCREMENT for table `tb_optimalisasi`
--
ALTER TABLE `tb_optimalisasi`
  MODIFY `id_optimalisasi` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT for table `tb_rangking`
--
ALTER TABLE `tb_rangking`
  MODIFY `id_rangking` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_subkriteria`
--
ALTER TABLE `tb_subkriteria`
  MODIFY `id_subkriteria` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_datanilaikriteria`
--
ALTER TABLE `tb_datanilaikriteria`
  ADD CONSTRAINT `tb_datanilaikriteria_ibfk_1` FOREIGN KEY (`id_alternatif`) REFERENCES `tb_alternatif` (`id_alternatif`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_hasil`
--
ALTER TABLE `tb_hasil`
  ADD CONSTRAINT `tb_hasil_ibfk_1` FOREIGN KEY (`id_optimalisasi`) REFERENCES `tb_optimalisasi` (`id_optimalisasi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_nilairating`
--
ALTER TABLE `tb_nilairating`
  ADD CONSTRAINT `tb_nilairating_ibfk_1` FOREIGN KEY (`id_alternatif`) REFERENCES `tb_alternatif` (`id_alternatif`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_normalisasi`
--
ALTER TABLE `tb_normalisasi`
  ADD CONSTRAINT `tb_normalisasi_ibfk_1` FOREIGN KEY (`id_nilairating`) REFERENCES `tb_nilairating` (`id_nilairating`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_optimalisasi`
--
ALTER TABLE `tb_optimalisasi`
  ADD CONSTRAINT `tb_optimalisasi_ibfk_1` FOREIGN KEY (`id_normalisasi`) REFERENCES `tb_normalisasi` (`id_normalisasi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_subkriteria`
--
ALTER TABLE `tb_subkriteria`
  ADD CONSTRAINT `tb_subkriteria_ibfk_1` FOREIGN KEY (`id_kriteria`) REFERENCES `tb_kriteria` (`id_kriteria`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
