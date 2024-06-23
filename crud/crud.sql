-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2024 at 10:41 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `peserta` (
  `id_peserta` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `universitas` varchar(50) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `no_hp` char(13) NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


INSERT INTO `peserta` (`id_peserta`, `nama`, `universitas`, `jurusan`, `no_hp`, `alamat`) VALUES
(9, 'Ady Yoga Pratama', 'Universitas pgri kediri', 'Manajemen', '0813316753131', 'RINGIN AGUNG'),
(10, 'Fatih', 'pgri kediri', 'Manajemen', '0813316753131', 'RINGIN AGUNG MEDOWO');


ALTER TABLE `peserta`
  ADD PRIMARY KEY (`id_peserta`);


ALTER TABLE `peserta`
  MODIFY `id_peserta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

