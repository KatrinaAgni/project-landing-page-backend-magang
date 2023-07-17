-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Jul 2023 pada 16.52
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pmi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_rpl`
--

CREATE TABLE `tb_rpl` (
  `id_siswa` int(11) NOT NULL,
  `Nama_Siswa` text NOT NULL,
  `Kelas` varchar(11) NOT NULL,
  `Jenis_Kelamin` text NOT NULL,
  `Umur` int(11) NOT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_rpl`
--

INSERT INTO `tb_rpl` (`id_siswa`, `Nama_Siswa`, `Kelas`, `Jenis_Kelamin`, `Umur`, `updated_at`, `created_at`) VALUES
(1, 'Adam Raga', 'XI RPL 2', 'Laki-laki', 17, '2023-07-12 17:34:18', '2023-07-12 17:34:18'),
(2, 'Amanda Putri Larasati', 'XI RPL 2', 'Perempuan', 17, '2023-07-12 17:34:18', '2023-07-12 17:34:18'),
(3, 'Amanda Wihan Qirania', 'XI RPL 2', 'Perempuan', 17, '2023-07-12 17:34:18', '2023-07-12 17:34:18'),
(4, 'Anindita Putri Maharani', 'XI RPL 2', 'Perempuan', 17, '2023-07-12 17:34:18', '2023-07-12 17:34:18'),
(5, 'Anindya Putri Ramadani', 'XI RPL 2', 'Perempuan', 17, '2023-07-12 17:34:18', '2023-07-12 17:34:18'),
(6, 'Artamevia Aenjel Yassa', 'XI RPL 2', 'Perempuan', 16, '2023-07-12 17:34:18', '2023-07-12 17:34:18'),
(7, 'Aurel Fitri Wardhana', 'XI RPL 2', 'Perempuan', 17, '2023-07-12 17:34:18', '2023-07-12 17:34:18'),
(8, 'Azzahra Early Ferundira', 'XI RPL 2', 'Perempuan', 17, '2023-07-12 17:34:18', '2023-07-12 17:34:18'),
(9, 'Bima Zulfikar Apriyanto', 'XI RPL 2', 'Laki-laki', 17, '2023-07-12 17:34:18', '2023-07-12 17:34:18'),
(10, 'Cahaya Putri Kamila', 'XI RPL 2', 'Perempuan', 16, '2023-07-12 17:34:18', '2023-07-12 17:34:18'),
(11, 'Cindi Aulia Choirunisa', 'XI RPL 2', 'Perempuan', 16, '2023-07-12 17:34:18', '2023-07-12 17:34:18'),
(12, 'Delia Eva Prabowo', 'XI RPL 2', 'Perempuan', 17, '2023-07-12 17:34:18', '2023-07-12 17:34:18'),
(13, 'Dinda Ralla Syafira', 'XI RPL 2', 'Perempuan', 17, '2023-07-12 17:34:18', '2023-07-12 17:34:18'),
(14, 'Dzihni Nisrina Halimah', 'XI RPL 2', 'Perempuan', 16, '2023-07-12 17:34:18', '2023-07-12 17:34:18'),
(15, 'Fernanda Ayu Putri Septifanny', 'XI RPL 2', 'Perempuan', 17, '2023-07-12 17:34:18', '2023-07-12 17:34:18'),
(16, 'Hanugra Chrismanuel Liejaya', 'XI RPL 2', 'Laki-laki', 17, '2023-07-12 17:34:18', '2023-07-12 17:34:18'),
(17, 'Katrina Agni Hartanto', 'XI RPL 2', 'Perempuan', 16, '2023-07-12 17:34:18', '2023-07-12 17:34:18'),
(18, 'Keisha Nadhira Putri Santosa', 'XI RPL 2', 'Perempuan', 17, '2023-07-12 17:34:18', '2023-07-12 17:34:18'),
(19, 'Maulinda Rizky Ananta', 'XI RPL 2', 'Perempuan', 17, '2023-07-12 17:34:18', '2023-07-12 17:34:18'),
(20, 'Melfita Rahmawati', 'XI RPL 2', 'Perempuan', 17, '2023-07-12 17:34:18', '2023-07-12 17:34:18'),
(21, 'Muhammad Fachrian Mulayudha', 'XI RPL 2', 'Laki-laki', 17, '2023-07-12 17:34:18', '2023-07-12 17:34:18'),
(22, 'Muhammad Rizqi Hamsyah', 'XI RPL 2', 'Laki-laki', 17, '2023-07-12 17:34:18', '2023-07-12 17:34:18'),
(23, 'Nabila Mayang Putri', 'XI RPL 2', 'Perempuan', 16, '2023-07-12 17:34:18', '2023-07-12 17:34:18'),
(24, 'Nadda Afra Arnidya', 'XI RPL 2', 'Perempuan', 17, '2023-07-12 17:34:18', '2023-07-12 17:34:18'),
(25, 'Narendra Sakya Tanaya', 'XI RPL 2', 'Perempuan', 17, '2023-07-12 17:34:18', '2023-07-12 17:34:18'),
(26, 'Nilam Ramadhani', 'XI RPL 2', 'Perempuan', 17, '2023-07-12 17:34:18', '2023-07-12 17:34:18'),
(27, 'Oryza Nazwa Erowati', 'XI RPL 2', 'Perempuan', 16, '2023-07-12 17:34:18', '2023-07-12 17:34:18'),
(28, 'Pramudya Rizki Wahyudi', 'XI RPL 2', 'Laki-laki', 17, '2023-07-12 17:34:18', '2023-07-12 17:34:18'),
(29, 'Rajendra Raffi Samudra', 'XI RPL 2', 'Laki-laki', 17, '2023-07-12 17:34:18', '2023-07-12 17:34:18'),
(30, 'Rina Nur Hidayah', 'XI RPL 2', 'Perempuan', 17, '2023-07-12 17:34:18', '2023-07-12 17:34:18'),
(31, 'Rosita Agustin Pujiyanti', 'XI RPL 2', 'Perempuan', 17, '2023-07-12 17:34:18', '2023-07-12 17:34:18'),
(32, 'Sindi Aprilia Hapsari', 'XI RPL 2', 'Perempuan', 17, '2023-07-12 17:34:18', '2023-07-12 17:34:18'),
(33, 'Tiara Hanum Hapsari', 'XI RPL 2', 'Perempuan', 16, '2023-07-12 17:34:18', '2023-07-12 17:34:18'),
(34, 'Vamsa Sharira Puppa Vagga', 'XI RPL 2', 'Perempuan', 16, '2023-07-12 17:34:18', '2023-07-12 17:34:18'),
(35, 'Wahyu Prasetyo Wibowo', 'XI RPL 2', 'Laki-laki', 16, '2023-07-12 17:34:18', '2023-07-12 17:34:18');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Katrina', 'agnikatrina@gmail.com', NULL, '$2y$10$zkR7qdapbccKbj5Iwzjyfe5ymSi7VBzShPPGg.k7UVQA4RMq3Vs.W', NULL, '2023-07-11 05:53:26', '2023-07-11 05:53:26');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_rpl`
--
ALTER TABLE `tb_rpl`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_rpl`
--
ALTER TABLE `tb_rpl`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
