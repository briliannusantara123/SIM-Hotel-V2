-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Jun 2021 pada 04.51
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotelwk`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `booking`
--

CREATE TABLE `booking` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telepon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `namakamar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fasilitas` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_tipekamar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlahkamar` int(11) NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `hargakamar` int(11) NOT NULL,
  `jumlahhari` int(11) NOT NULL,
  `jumlah_orang` int(11) NOT NULL,
  `tanggal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_keluar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `booking`
--

INSERT INTO `booking` (`id`, `nama`, `telepon`, `alamat`, `namakamar`, `fasilitas`, `id_tipekamar`, `jumlahkamar`, `deskripsi`, `hargakamar`, `jumlahhari`, `jumlah_orang`, `tanggal`, `tanggal_keluar`, `total`, `email`, `created_at`, `updated_at`) VALUES
(31, 'bery', '081295229466', 'cicurug', 'Kamar 1', 'kamar,ac,tv', 'VIP', 1, 'Nyaman', 2000000, 1, 2, '2021-06-09', '2021-06-11', '2000000', 'beryprima1007@gmail.com', '2021-06-08 19:18:40', '2021-06-08 19:18:40'),
(32, 'bery', '081295229466', 'Cicurug', 'Kamar 1', 'kamar,ac,tv', 'VIP', 1, 'Nyaman', 2000000, 2, 2, '2021-06-09', '2021-06-11', '4000000', 'beryprima1007@gmail.com', '2021-06-08 19:25:59', '2021-06-08 19:25:59'),
(33, 'bery', '081295229466', 'ccrg', 'Kamar 1', 'kamar,ac,tv', 'VIP', 1, 'Nyaman', 2000000, 2, 2, '2021-06-09', '2021-06-11', '4000000', 'beryprima1007@gmail.com', '2021-06-09 07:43:31', '2021-06-09 07:43:31');

--
-- Trigger `booking`
--
DELIMITER $$
CREATE TRIGGER `booking` AFTER INSERT ON `booking` FOR EACH ROW BEGIN
	UPDATE kamar SET   jumlahkamar=jumlahkamar-NEW.jumlahkamar
    WHERE namakamar=NEW.namakamar;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `databooking`
--

CREATE TABLE `databooking` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telepon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `namakamar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fasilitas` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_tipekamar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlahkamar` int(11) NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `hargakamar` int(11) NOT NULL,
  `jumlahhari` int(11) NOT NULL,
  `jumlah_orang` int(11) NOT NULL,
  `tanggal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_keluar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `databooking`
--

INSERT INTO `databooking` (`id`, `nama`, `telepon`, `alamat`, `namakamar`, `fasilitas`, `id_tipekamar`, `jumlahkamar`, `deskripsi`, `hargakamar`, `jumlahhari`, `jumlah_orang`, `tanggal`, `tanggal_keluar`, `total`, `email`, `created_at`, `updated_at`) VALUES
(14, 'bery', '081295229466', 'cicurug', 'Kamar 2', 'kamar,ac,tv', 'VVIP', 1, 'Nyaman Pisan', 10, 2, 2, '2021-06-09', '2021-06-11', '20', 'beryprima1007@gmail.com', '2021-06-08 19:11:37', '2021-06-08 19:11:37'),
(15, 'bery', '081295229466', 'cicurug', 'Kamar 1', 'kamar,ac,tv', 'VIP', 1, 'Nyaman', 2000000, 1, 2, '2021-06-09', '2021-06-11', '2000000', 'beryprima1007@gmail.com', '2021-06-08 19:18:40', '2021-06-08 19:18:40'),
(16, 'bery', '081295229466', 'Cicurug', 'Kamar 1', 'kamar,ac,tv', 'VIP', 1, 'Nyaman', 2000000, 2, 2, '2021-06-09', '2021-06-11', '4000000', 'beryprima1007@gmail.com', '2021-06-08 19:25:59', '2021-06-08 19:25:59'),
(17, 'bery', '081295229466', 'ccrg', 'Kamar 1', 'kamar,ac,tv', 'VIP', 1, 'Nyaman', 2000000, 2, 2, '2021-06-09', '2021-06-11', '4000000', 'beryprima1007@gmail.com', '2021-06-09 07:43:30', '2021-06-09 07:43:30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `datatamu`
--

CREATE TABLE `datatamu` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `room` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `arrival_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `departure_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah_orang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `market` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `histori`
--

CREATE TABLE `histori` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telepon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_masuk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_keluar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `namakamar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hargakamar` int(11) NOT NULL,
  `total_kamar` int(11) NOT NULL,
  `hargalaundry` int(11) DEFAULT NULL,
  `jumlahlaundry` int(11) DEFAULT NULL,
  `totallaundry` int(11) DEFAULT NULL,
  `totalbayar` int(11) DEFAULT NULL,
  `bayar` int(11) DEFAULT NULL,
  `kembalian` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `histori`
--

INSERT INTO `histori` (`id`, `nama`, `telepon`, `alamat`, `tanggal_masuk`, `tanggal_keluar`, `namakamar`, `hargakamar`, `total_kamar`, `hargalaundry`, `jumlahlaundry`, `totallaundry`, `totalbayar`, `bayar`, `kembalian`, `created_at`, `updated_at`) VALUES
(11, 'bery', '081295229466', 'cicurug', '09 June 2021', '09 June 2021', 'Kamar 2', 10, 20, 12000, 2, 24000, NULL, NULL, NULL, '2021-06-08 19:14:13', '2021-06-08 19:14:13');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kamar`
--

CREATE TABLE `kamar` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `namakamar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_tipekamar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlahkamar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_fasilitaskamar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `hargakamar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kamar`
--

INSERT INTO `kamar` (`id`, `namakamar`, `id_tipekamar`, `jumlahkamar`, `id_fasilitaskamar`, `deskripsi`, `hargakamar`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Kamar 1', 'VIP', '1', 'kamar,ac,tv', 'Nyaman', '2000000', 'storage/1622643996Desain-Kamar-Tidur-Ukuran-3x3-Sederhana-dan-Cantik.jpg', '2021-06-02 07:26:36', '2021-06-09 07:42:45');

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporan`
--

CREATE TABLE `laporan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `namakamar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipekamar` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `laundry`
--

CREATE TABLE `laundry` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `laundry`
--

INSERT INTO `laundry` (`id`, `nama`, `harga`, `created_at`, `updated_at`) VALUES
(1, 'Paket Lengkap', 12000, '2021-06-03 06:45:24', '2021-06-03 06:45:24'),
(2, 'Paket Hemat', 6000, '2021-06-03 08:06:51', '2021-06-03 08:06:51');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_03_02_003143_create_kamar_table', 1),
(5, '2021_03_02_003515_create_tipekamar_table', 1),
(6, '2021_03_04_160856_create_reservationdiary_table', 1),
(7, '2021_03_08_124451_create_datatamu_table', 1),
(8, '2021_03_08_141506_create_booking_table', 1),
(9, '2021_04_23_031745_create_laundry_table', 1),
(10, '2021_04_27_020753_create_transaksi_table', 1),
(11, '2021_04_28_040034_create_laporan_table', 1),
(13, '2021_06_02_055558_create_histori_table', 2),
(14, '2021_06_08_030422_create_databooking_table', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `reservationdiary`
--

CREATE TABLE `reservationdiary` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `rsv_date` date NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adress` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_guest` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `person_guest` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_in` date NOT NULL,
  `date_out` date NOT NULL,
  `room_night` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `room_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remarks` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tipekamar`
--

CREATE TABLE `tipekamar` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tipekamar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tipekamar`
--

INSERT INTO `tipekamar` (`id`, `tipekamar`, `created_at`, `updated_at`) VALUES
(1, 'VIP', '2021-06-02 07:24:07', '2021-06-02 07:24:07'),
(2, 'VVIP', '2021-06-02 07:24:14', '2021-06-02 07:24:14');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telepon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `namakamar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlahkamar` int(11) NOT NULL,
  `hargakamar` int(11) NOT NULL,
  `tanggal_masuk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_keluar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_kamar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paketlaundry` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlahlaundry` int(9) DEFAULT NULL,
  `totallaundry` int(20) DEFAULT NULL,
  `totalbayar` int(20) DEFAULT NULL,
  `bayar` int(20) DEFAULT NULL,
  `kembalian` int(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Trigger `transaksi`
--
DELIMITER $$
CREATE TRIGGER `batal_booking` BEFORE DELETE ON `transaksi` FOR EACH ROW UPDATE kamar set kamar.jumlahkamar = kamar.jumlahkamar + old.jumlahkamar WHERE kamar.namakamar = old.namakamar
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin', NULL, '$2y$10$W4fpixWN8E9rJMMJtD1uCOsOnDuhomMW3p531JgELruD7VWEYId86', '1sb1jRHyxe2W6hTCPcnsocfDXYzkw6oA4D5CNipnQr7afXAf6J2r9mMMZy2n', '2021-06-02 07:18:15', '2021-06-02 07:18:15'),
(2, 'customer', 'customer@gmail.com', 'customer', NULL, '$2y$10$UGAK/Xuyz5WQgMUxNIXwQ.mz5wUDV1MsE.soTkdfGBuEZbra6QRhe', 'ZfC1Qp7ELoBfDWD4NXDrLSs0Q7Oyr4meUX7d0pGfvdVimrpriWfycv2fyphO', '2021-06-02 07:19:04', '2021-06-02 07:19:04'),
(3, 'brilian', 'briliannusantara123@gmail.com', 'customer', NULL, '$2y$10$yiqlxdjBlbzgfuUzF0oe2O4jcTmEO/NPparkKzLxDil0icNEz4PrG', 'HbeCunuka6o7mRRB2X5VMULCLMZSDYov8WSoQl7ZkNpINYCd3NJ81GPUF1aW', '2021-06-07 20:24:38', '2021-06-07 20:24:38'),
(4, 'bery', 'beryprima1007@gmail.com', 'customer', NULL, '$2y$10$UPM14Xa38GhGZjIlU6U9d.PQBtOvJT8Euan72npV/pa7y76CwWEE2', 's50z8RqzeITRdqHXzETWSpxK7PQkWnNdO2EEB7XYcWshsw1WTYaB8bqWefpa', '2021-06-07 21:25:32', '2021-06-07 21:25:32'),
(5, 'satria', 'beryprima1007@gmail.com', 'customer', NULL, '$2y$10$csBachh9HPGgFYtgsjC6LeIOWASs5hyNnhpCrYb4iEgwMWtS0eB8K', '$2y$10$rp/lqT3e5fgeChyh5mv2o.1lC9XMId/aUGuKOglWu7JIwxBwfNPCm', '2021-06-08 19:18:02', '2021-06-08 19:18:02');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `databooking`
--
ALTER TABLE `databooking`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `datatamu`
--
ALTER TABLE `datatamu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `histori`
--
ALTER TABLE `histori`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kamar`
--
ALTER TABLE `kamar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `laundry`
--
ALTER TABLE `laundry`
  ADD PRIMARY KEY (`id`);

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
-- Indeks untuk tabel `reservationdiary`
--
ALTER TABLE `reservationdiary`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tipekamar`
--
ALTER TABLE `tipekamar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `booking`
--
ALTER TABLE `booking`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT untuk tabel `databooking`
--
ALTER TABLE `databooking`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `datatamu`
--
ALTER TABLE `datatamu`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `histori`
--
ALTER TABLE `histori`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `kamar`
--
ALTER TABLE `kamar`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `laporan`
--
ALTER TABLE `laporan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `laundry`
--
ALTER TABLE `laundry`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `reservationdiary`
--
ALTER TABLE `reservationdiary`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tipekamar`
--
ALTER TABLE `tipekamar`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
