-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2026 at 10:49 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ngawigames`
--

-- --------------------------------------------------------

--
-- Table structure for table `games`
--

CREATE DATABASE ngawigames;
USE ngawigames;


CREATE TABLE `games` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(100) NOT NULL,
  `harga` int(11) NOT NULL,
  `genre` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)

) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `games`
--

INSERT INTO `games` (`id`, `judul`, `harga`, `genre`, `deskripsi`, `gambar`) VALUES
(1, 'ELDEN RING: GAME OF THE YEAR EDITION', 879000, 'Souls Like', 'Elden Ring berlatar di Lands Between (Tanah Antara), sebuah dunia fantasi yang dulunya makmur berkat Elden Ring, artefak suci yang melambangkan tatanan ilahi dan dikelola oleh Erdtree—pohon raksasa yang menjadi sumber kehidupan.\r\n\r\nSuatu hari, Elden Ring dihancurkan oleh Ratu Marika yang Abadi. Pecahannya, yang disebut Great Runes, jatuh ke tangan para demigods—keturunan setengah dewa Marika—sehingga memicu perang besar bernama Shattering. Dunia pun jatuh ke dalam kekacauan, tanpa penguasa lagi.\r\nKamu berperan sebagai Tarnished, seorang pahlawan buangan yang kehilangan berkah (grace) dan dipanggil kembali ke Tanah Antara. Tugasmu: jelajahi dunia open-world yang luas, kumpulkan semua Great Runes dengan mengalahkan para demigods, pulihkan Elden Ring, dan jadilah Elden Lord baru untuk mengembalikan keseimbangan.\r\n\r\nDi awal petualangan, kamu bertemu Melina yang menawarkan kesepakatan: bawa dia ke kaki Erdtree. Kamu juga dapat kuda spectral Torrent, bertemu sekutu aneh, dan hadapi musuh mengerikan sambil membentuk kekuatanmu sendiri. Cerita penuh misteri, pilihan akhir yang bercabang, dan lore mendalam yang dibuat oleh Hidetaka Miyazaki (FromSoftware) bersama George R.R. Martin.', 'eldenring.jpg'),
(2, 'GRAND THEFT AUTO VI', 1599000, 'Open World', 'Grand Theft Auto VI berlatar di negara bagian fiksi Leonida (mirip Florida), dengan kota Vice City yang penuh neon cerah sebagai pusat utama—tempat paling terang di Amerika, tapi menyimpan sisi tergelapnya.\r\n\r\nKamu berperan sebagai duo kriminal romantis: Jason Duval, veteran tentara yang kini jadi kurir narkoba di Leonida Keys mencari hidup mudah, dan Lucia Caminos, mantan narapidana yang baru keluar penjara dan bertekad membangun masa depan lebih baik. Mereka tahu dunia selalu stacked against them. Saat sebuah \"pekerjaan mudah\" gagal total, keduanya terjebak di tengah konspirasi kriminal raksasa yang melintasi seluruh Leonida—dipaksa saling bergantung lebih dari sebelumnya untuk bertahan hidup.\r\n\r\nJelajahi dunia open-world terbesar Rockstar sejauh ini, penuh aksi kejahatan seperti perampokan bank, perdagangan narkoba, empire musik, dan petualangan liar. Bertemu sekutu seperti Cal Hampton (hacker paranoid), Boobie Ike (raja real estate, strip club, dan musik Vice City), Dre\'Quan Priest (bos label musik), duo rapper Real Dimez, Raul Bautista (perampok bank veteran), dan Brian Heder (penggembur narkoba).\r\n\r\nCerita penuh ambisi, paranoia, adaptasi, dan survival di tengah hiruk-pikuk kota, rawa-rawa, pelabuhan, pegunungan, dan keys tropis. Dikembangkan Rockstar Games, ini evolusi paling immersive dari seri GTA.\r\n', 'gtavi.jpg'),
(3, 'FIFA 26', 699000, 'Sport', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'fifa26.jpg'),
(4, 'RED DEAD REDEMPTION', 799000, 'Open World', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'rdr2.jpg'),
(5, 'TEKKEN 8', 699000, 'Fighting', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'tekken8.jpg'),
(6, 'Call Of Duty  Modern Warfare', 995000, 'shooter', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'codmw.jpg'),
(7, 'CALL OF DUTY: WORLD AT WAR II', 660000, 'shooter', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'codww2.jpg'),
(8, 'BATTLEFIELD 1', 559000, 'shooter', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'bf1.jpg'),
(9, 'Ghost Of Yotei', 1090000, 'souls like', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'yotei.jpg'),
(10, 'ARC RAIDERS', 350000, 'shooter', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'arc.jpg'),
(11, 'MINECRAFT DUNGEONS', 679000, 'RPG', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'mcdungeons.jpg'),
(12, 'RESIDENT EVIL 7', 299000, 'survival horror', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 're7.jpg'),
(13, 'RESIDENT EVIL 8', 399000, 'survival horror', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 're8.jpg'),
(14, 'Marvel\'s Spiderman ', 799000, 'open world', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'spiderman.jpg'),
(15, 'Marvel\'s Spiderman 2', 899000, 'open world', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'spiderman2.jpg'),
(16, 'Gran Turismo 7', 899000, 'racing', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'gt7.jpg'),
(17, 'Minecraft', 499000, 'survival', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'minecraft.jpg'),
(18, 'Cyberpunk', 599000, 'open world', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'cp2077.jpg'),
(19, 'IT TAKES TWO', 399000, 'co-op', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'itt.jpg'),
(20, 'CLAIR OBSCUR: EXPEDITION 33', 499000, 'turn base', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'exp33.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
