-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Apr 2019 pada 10.50
-- Versi server: 10.1.34-MariaDB
-- Versi PHP: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ujikom`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `departements`
--

CREATE TABLE `departements` (
  `id` int(10) UNSIGNED NOT NULL,
  `status` varchar(110) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `departements`
--

INSERT INTO `departements` (`id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'guru', NULL, NULL),
(2, 'siswa', NULL, NULL),
(3, 'petugas sekolah', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `inventaris`
--

CREATE TABLE `inventaris` (
  `id_inven` int(10) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kondisi` enum('baik','kurang baik') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlah` int(11) UNSIGNED NOT NULL,
  `id_jenis` int(11) NOT NULL,
  `tanggal_register` date NOT NULL,
  `id_ruang` int(11) NOT NULL,
  `kode_inventaris` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_petugas` int(11) NOT NULL,
  `status` enum('ada','pinjam') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'ada',
  `pinjam` int(11) DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `inventaris`
--

INSERT INTO `inventaris` (`id_inven`, `nama`, `kondisi`, `jumlah`, `id_jenis`, `tanggal_register`, `id_ruang`, `kode_inventaris`, `id_petugas`, `status`, `pinjam`, `created_at`, `updated_at`) VALUES
(1, 'komputer', 'baik', 36, 3, '2019-03-16', 3, 'B4', 1, 'ada', 0, NULL, '2019-04-04'),
(3, 'tandu', 'baik', 5, 5, '2019-03-16', 14, 'B6', 3, 'ada', NULL, NULL, '2019-04-04'),
(4, 'bola tenis', 'baik', 11, 1, '2019-03-12', 2, 'B2', 0, 'ada', 0, '2019-03-16', '2019-04-04'),
(5, 'bola pimpong', 'baik', 0, 1, '2019-03-28', 2, 'B3', 2, 'ada', 2, '2019-03-28', '2019-04-04'),
(6, 'bola voli', 'baik', 6, 2, '2019-04-03', 2, 'B1', 1, 'ada', 0, '2019-02-20', '2019-03-05'),
(7, 'bola kasti', 'baik', 5, 1, '2019-04-05', 2, 'B5', 2, 'ada', NULL, '2019-04-03', '2019-04-03');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis`
--

CREATE TABLE `jenis` (
  `id_jenis` int(10) UNSIGNED NOT NULL,
  `nama_jenis` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_jenis` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `jenis`
--

INSERT INTO `jenis` (`id_jenis`, `nama_jenis`, `kode_jenis`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 'alat olahraga', '001', '', NULL, NULL),
(2, 'alat kebersihan', '002', '', NULL, NULL),
(3, 'alat praktek', '003', '', NULL, NULL),
(4, 'alat musik', '004', '', NULL, NULL),
(5, 'alat kesehatan', '005', 'alat kesehatan', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporan`
--

CREATE TABLE `laporan` (
  `id` int(11) DEFAULT NULL,
  `peminjam` int(11) DEFAULT NULL,
  `id_inventaris` int(11) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `tgl_pinjam` date DEFAULT NULL,
  `id_petugas` int(11) DEFAULT NULL,
  `tgl_kembali` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_03_08_090050_create_jenis_table', 1),
(4, '2019_03_08_090224_create_ruang_table', 1),
(5, '2019_03_08_090326_create_inventaris_table', 1),
(6, '2019_03_08_090636_create_petugas_table', 1),
(7, '2019_03_08_090842_create_pinjam_table', 1),
(8, '2019_03_08_090939_create_peminjaman_table', 1),
(9, '2019_03_08_091241_create_pegawai_table', 1),
(10, '2019_03_08_092159_create_status_table', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE `pegawai` (
  `id_pegawai` int(11) NOT NULL,
  `nama_pegawai` varchar(110) NOT NULL,
  `nip` int(11) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `nama_pegawai`, `nip`, `alamat`) VALUES
(1, 'aholll', 123456, 'jln padasuka indah 2 blok f no.22'),
(2, 'asrul', 234567, 'jln.gadobangkong');

-- --------------------------------------------------------

--
-- Struktur dari tabel `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id_peminjaman` int(10) UNSIGNED NOT NULL,
  `id_peminjam` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `tanggal_pinjam` date NOT NULL,
  `tanggal_kembali` date DEFAULT NULL,
  `id_pegawai` int(11) DEFAULT NULL,
  `id_inventaris` int(11) DEFAULT NULL,
  `jumlahpinjam` int(11) NOT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `persetujuan` enum('setuju','tolak','kirim') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'kirim',
  `pesan` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `peminjaman`
--

INSERT INTO `peminjaman` (`id_peminjaman`, `id_peminjam`, `created_at`, `updated_at`, `tanggal_pinjam`, `tanggal_kembali`, `id_pegawai`, `id_inventaris`, `jumlahpinjam`, `keterangan`, `persetujuan`, `pesan`) VALUES
(18, 4, '2019-04-04 00:27:52', '2019-04-04 00:27:57', '2019-04-04', NULL, 2, 5, 2, 'ket', 'setuju', NULL),
(19, 4, '2019-04-04 00:32:48', '2019-04-04 00:33:07', '2019-04-04', NULL, 2, 4, 2, 'keterangan', 'setuju', NULL),
(20, 4, '2019-04-04 00:38:03', '2019-04-04 00:38:14', '2019-04-04', NULL, 2, 4, 2, 'keterangan', 'setuju', NULL),
(21, 4, '2019-04-04 00:38:49', '2019-04-04 01:18:35', '2019-04-04', NULL, 2, 5, 1, 'jjjj', 'setuju', NULL),
(22, 4, '2019-04-04 00:44:03', '2019-04-04 00:44:14', '2019-04-04', NULL, 2, 7, 6, 'k', 'setuju', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesan`
--

CREATE TABLE `pesan` (
  `id_pesan` int(11) NOT NULL,
  `pengirim` enum('admin','operator') NOT NULL,
  `subject` varchar(225) NOT NULL,
  `pesan` text NOT NULL,
  `id_penerima` int(11) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pesan`
--

INSERT INTO `pesan` (`id_pesan`, `pengirim`, `subject`, `pesan`, `id_penerima`, `updated_at`, `created_at`) VALUES
(1, 'operator', 'penolakan data', 'maaf permintaan anda kami tolak, karna alasan tertentu. untuk info lebih lanjut bisa langsung hubungi kami', 4, '2019-04-03 19:53:53', '2019-04-03 19:53:53'),
(2, 'operator', 'Penerimaan data', 'permintaan peminjaman anda, kami terima', 4, '2019-04-03 19:55:53', '2019-04-03 19:55:53'),
(3, 'admin', 'Penerimaan data', 'permintaan peminjaman anda, kami terima', 4, '2019-04-03 20:25:23', '2019-04-03 20:25:23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `petugas`
--

CREATE TABLE `petugas` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` int(11) NOT NULL,
  `status` enum('active','nonactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `gender` enum('laki-laki','perempuan') COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `petugas`
--

INSERT INTO `petugas` (`id`, `name`, `username`, `email`, `password`, `role_id`, `status`, `gender`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'auliya', 'aholll', 'ahol@gmail.com', '$2y$10$5x2pjSKkaOyQ9cDwL.0i9OWoyn1I5iLQ8.gz8/.lsM0T8Reyj/PQC', 1, 'active', 'laki-laki', 'NEfmOmWhzauLYfZWFd2Vc6mNOLUW2jXK4qynTp06WlKz1zbbUxmuZjJ1Lp3u', '2019-03-09 04:12:34', '2019-04-03 18:35:27'),
(3, 'asrul', 'peminjam', 'peminjam@gmail.com', '$2y$10$D/G2tUmtQyi/gjCnzcjxBehoLgAdaqcUW9ke7qrUTMK6UnoiWCxmS', 3, 'active', 'laki-laki', 'B3Q2U9Z6vx8Oqa9xWXdyXvL9tZlEJgAXtHObFWnKEd3xYdRJF34wzgSzXZwS', '2019-03-12 07:54:27', '2019-03-28 08:26:14'),
(4, 'asri', 'operator', 'operator@gmail.com', '$2y$10$CqQFd3n6ccoTuaAjDNSS4elHT6Rw3ypF82UipQIPBJd.GSCgicBM2', 2, 'active', 'laki-laki', 'CatNeFGvrFimZNigvSgLYyo1ATzSQ78sZUQiwNEBHQXDMdIyIfop2C48G30h', '2019-03-12 07:55:01', '2019-03-12 07:55:01'),
(5, 'asri', 'asrull', 'asrul@gmail.com', '$2y$10$5c160JmIgKLMmJokuysNp.pXvemGFHgQ/HyoHN1mPwMdi6SjPuSGa', 1, 'active', 'laki-laki', 'DpfLOErvzjni6tpCqovC5D78aXAGU8CB8MOITzRVbOLO4ZDq3QgLuR6vR9WQ', '2019-04-03 20:04:30', '2019-04-03 20:04:30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pinjam`
--

CREATE TABLE `pinjam` (
  `id_pinjam` int(10) UNSIGNED NOT NULL,
  `id_inventaris` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pinjam`
--

INSERT INTO `pinjam` (`id_pinjam`, `id_inventaris`, `jumlah`, `created_at`, `updated_at`) VALUES
(1, 4, 2, '2019-04-03 17:03:53', '2019-04-03 17:03:53'),
(2, 4, 1, '2019-04-03 17:06:14', '2019-04-03 17:06:14'),
(3, 5, 1, '2019-04-03 17:10:10', '2019-04-03 17:10:10'),
(4, 4, 2, '2019-04-03 18:45:12', '2019-04-03 18:45:12'),
(5, 4, 1, '2019-04-03 18:48:42', '2019-04-03 18:48:42'),
(6, 5, 1, '2019-04-03 20:35:17', '2019-04-03 20:35:17'),
(7, 4, 1, '2019-04-03 20:39:50', '2019-04-03 20:39:50'),
(8, 4, 1, '2019-04-03 20:43:37', '2019-04-03 20:43:37'),
(9, 4, 2, '2019-04-03 21:07:52', '2019-04-03 21:07:52'),
(10, 5, 2, '2019-04-03 21:12:18', '2019-04-03 21:12:18'),
(11, 4, 2, '2019-04-03 21:36:49', '2019-04-03 21:36:49'),
(12, 4, 2, '2019-04-03 23:52:01', '2019-04-03 23:52:01'),
(13, 5, 3, '2019-04-04 00:00:35', '2019-04-04 00:00:35'),
(14, 4, 2, '2019-04-04 00:21:11', '2019-04-04 00:21:11'),
(15, 4, 2, '2019-04-04 00:26:44', '2019-04-04 00:26:44'),
(16, 5, 2, '2019-04-04 00:27:58', '2019-04-04 00:27:58'),
(17, 4, 2, '2019-04-04 00:33:07', '2019-04-04 00:33:07'),
(18, 4, 2, '2019-04-04 00:38:14', '2019-04-04 00:38:14'),
(19, 7, 6, '2019-04-04 00:44:14', '2019-04-04 00:44:14'),
(20, 5, 1, '2019-04-04 01:18:36', '2019-04-04 01:18:36');

-- --------------------------------------------------------

--
-- Struktur dari tabel `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `namaRule` enum('admin','operator','peminjam') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `roles`
--

INSERT INTO `roles` (`id`, `namaRule`, `created_at`, `updated_at`) VALUES
(1, 'admin', NULL, NULL),
(2, 'operator', NULL, NULL),
(3, 'peminjam', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `ruang`
--

CREATE TABLE `ruang` (
  `id_ruang` int(10) UNSIGNED NOT NULL,
  `nama_ruang` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_ruang` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keterangan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('tersedia','tidak tersedia') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'tersedia',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `ruang`
--

INSERT INTO `ruang` (`id_ruang`, `nama_ruang`, `kode_ruang`, `keterangan`, `status`, `created_at`, `updated_at`) VALUES
(1, 'ruang senii', 'RS01', 'gedung A', 'tersedia', NULL, '2019-04-02 16:24:00'),
(2, 'ruang olahraga', 'RO01', 'gedung B', 'tersedia', NULL, NULL),
(3, 'Ruang komputer 01', 'RK01', 'gedung 3 lantai 1', 'tersedia', NULL, NULL),
(5, 'Ruang alat RPL', 'RJ01', 'Gedung Rekayasa Perangkat Lunak', 'tersedia', NULL, NULL),
(6, 'Ruang alat TKJ', 'RJ02', 'Gedung Teknik Komputer dan jaringan', 'tersedia', NULL, NULL),
(7, 'Ruang alat TP4', 'RJ03', 'Gedung TP4', 'tersedia', NULL, NULL),
(8, 'ruang alat TEK', 'RJ04', 'Gedung Teknik Elektronika Komunikasi', 'tersedia', NULL, NULL),
(9, 'Ruang alat TEI', 'RJ05', 'Gedung Teknik Elektronika Industri', 'tersedia', NULL, NULL),
(10, 'Ruang alat TP', 'RJ06', 'Gedung Teknik Pendingin', 'tersedia', NULL, NULL),
(11, 'Ruang alat TOI', 'RJ07', 'Gedung Teknik Otomasi Industri', 'tersedia', NULL, NULL),
(12, 'Ruang alat KP', 'RJ08', 'Gedung Kontrol Proses', 'tersedia', NULL, NULL),
(13, 'Ruang alat KM', 'RJ09', 'Gedung Kontrol Mekanik', 'tersedia', NULL, NULL),
(14, 'Ruang kesehatan', 'R01', 'Gedung C', 'tersedia', NULL, NULL),
(15, 'ruang kesiswaan', NULL, 'ruang kesiswaan', 'tersedia', '2019-04-01 16:43:39', '2019-04-01 16:43:39'),
(16, 'ruang osis', NULL, 'gedung B', 'tersedia', '2019-04-02 20:41:09', '2019-04-02 20:41:09'),
(17, 'ruang senii', '16', 'a', 'tersedia', '2019-04-02 20:44:09', '2019-04-02 20:44:09'),
(18, 'gudang', '1', 'dekat lapang 1', 'tersedia', '2019-04-02 21:04:14', '2019-04-02 21:04:14'),
(19, 'gudang1', '18', 'lantai 2 gedung b', 'tersedia', '2019-04-02 21:06:39', '2019-04-02 21:06:39'),
(20, 'wc wanita', 'R18', 'gedung c', 'tersedia', '2019-04-03 18:38:51', '2019-04-03 18:38:51'),
(21, 'ruang kepala sekolah', 'R19', 'gedung A', 'tersedia', '2019-04-03 18:39:50', '2019-04-03 18:39:50');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `departements`
--
ALTER TABLE `departements`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `inventaris`
--
ALTER TABLE `inventaris`
  ADD PRIMARY KEY (`id_inven`);

--
-- Indeks untuk tabel `jenis`
--
ALTER TABLE `jenis`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indeks untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id_peminjaman`);

--
-- Indeks untuk tabel `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indeks untuk tabel `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_index` (`role_id`);

--
-- Indeks untuk tabel `pinjam`
--
ALTER TABLE `pinjam`
  ADD PRIMARY KEY (`id_pinjam`);

--
-- Indeks untuk tabel `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `ruang`
--
ALTER TABLE `ruang`
  ADD PRIMARY KEY (`id_ruang`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `departements`
--
ALTER TABLE `departements`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `inventaris`
--
ALTER TABLE `inventaris`
  MODIFY `id_inven` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `jenis`
--
ALTER TABLE `jenis`
  MODIFY `id_jenis` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id_pegawai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id_peminjaman` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `pinjam`
--
ALTER TABLE `pinjam`
  MODIFY `id_pinjam` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `ruang`
--
ALTER TABLE `ruang`
  MODIFY `id_ruang` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
