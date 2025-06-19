-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Jun 2025 pada 04.12
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cuci_mobil`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `booking`
--

CREATE TABLE `booking` (
  `id_booking` int(11) NOT NULL,
  `nama_pelanggan` varchar(100) NOT NULL,
  `nomor_plat` varchar(20) NOT NULL,
  `jenis_layanan` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` varchar(20) NOT NULL DEFAULT 'Pending',
  `tempat_cuci` varchar(50) NOT NULL DEFAULT 'DefaultCuci'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `booking`
--

INSERT INTO `booking` (`id_booking`, `nama_pelanggan`, `nomor_plat`, `jenis_layanan`, `tanggal`, `jam`, `created_at`, `status`, `tempat_cuci`) VALUES
(1, 'Kaze', 'BE1132JK', 'Cuci Lengkap', '2025-06-25', '12:30:00', '2025-06-07 13:17:24', 'Selesai', 'DefaultCuci'),
(2, 'Sleepy', 'B 1001 ZZZ', 'Cuci Lengkap', '2025-06-10', '07:00:00', '2025-06-08 11:00:33', 'Selesai', 'Cabang 2 Car Wash'),
(3, 'Miro', 'B 7070 H', 'Cuci Lengkap', '2025-06-30', '10:30:00', '2025-06-11 15:41:38', 'Proses', 'Cabang Utama Car Wash'),
(4, 'Sleepy', 'BE1139UI', 'Cuci Lengkap', '2025-07-15', '13:30:00', '2025-06-11 17:32:32', 'Proses', 'Cabang 3 Car Wash');

-- --------------------------------------------------------

--
-- Struktur dari tabel `carwash_request`
--

CREATE TABLE `carwash_request` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `carwash_request`
--

INSERT INTO `carwash_request` (`id`, `name`, `email`, `description`, `created_at`) VALUES
(1, 'miro', 'anomali@gmail.com', 'bisa ga kakak aja yang dateng ke rumah saya', '2025-06-08 14:06:39');

-- --------------------------------------------------------

--
-- Struktur dari tabel `komentar`
--

CREATE TABLE `komentar` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `pesan` text NOT NULL,
  `tanggal` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `komentar`
--

INSERT INTO `komentar` (`id`, `nama`, `email`, `pesan`, `tanggal`) VALUES
(1, 'SleepOut', 'kiahanabil@gmail.com', 'Aku sangat menyarankan memesan layanan cuci mobil disini!', '2025-06-07 19:59:15'),
(2, 'Miro', 'unilahimatro@gmail.com', 'Pelayanan sangat oke dan cepat!', '2025-06-08 09:01:26');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','user') NOT NULL DEFAULT 'user',
  `nama` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`, `nama`, `email`) VALUES
(1, 'admin', '0192023a7bbd73250516f069df18b500', 'admin', 'Admin Sistem', 'admin@cuci-mobil.com'),
(2, 'siti', '5c2e4a2563f9f4427955422fe1402762', 'user', 'Siti Rohmah', 'siti@example.com'),
(3, 'Jihan', '$2y$10$WOiN6vrLCJbjs8dqTlEmD..ejxEhe5KoC2p8UjYw4GElav9KF6yOq', 'user', NULL, 'kiahanabil@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indeks untuk tabel `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id_booking`);

--
-- Indeks untuk tabel `carwash_request`
--
ALTER TABLE `carwash_request`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `booking`
--
ALTER TABLE `booking`
  MODIFY `id_booking` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `carwash_request`
--
ALTER TABLE `carwash_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

use cuci_mobil;

-- Relasi users ke booking
ALTER TABLE booking
ADD FOREIGN KEY (user_id) REFERENCES users(id);

-- Relasi users ke komentar
ALTER TABLE komentar
ADD FOREIGN KEY (user_id) REFERENCES users(id);

-- Relasi users ke carwash_request
ALTER TABLE carwash_request
ADD FOREIGN KEY (user_id) REFERENCES users(id);

-- Relasi admin ke carwash_request
ALTER TABLE carwash_request
ADD FOREIGN KEY (admin_id) REFERENCES admin(id);

ALTER TABLE booking
ADD FOREIGN KEY (admin_id) REFERENCES admin(id);


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
