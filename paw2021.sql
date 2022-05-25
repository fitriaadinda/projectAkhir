-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Bulan Mei 2022 pada 22.03
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `paw2021`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `04-artikel`
--

CREATE TABLE `04-artikel` (
  `id` int(11) NOT NULL,
  `lokasi` varchar(50) NOT NULL,
  `judul_artikel` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `isi` text NOT NULL,
  `rating` float NOT NULL,
  `harga` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `04-artikel`
--

INSERT INTO `04-artikel` (`id`, `lokasi`, `judul_artikel`, `tanggal`, `isi`, `rating`, `harga`, `gambar`) VALUES
(2, 'papua', 'Raja Ampat', '2022-05-24', 'Raja Ampat adalah sebuah kabupaten dan merupakan bagian dari Propinsi Papua Barat. Untuk mencapai Kepulauan ini, kita harus menginjakkan kaki di kota Sorong terlebih dahulu. Biasanya para wisatawan banyak menggunakan penerbangan untuk sampai ke kota ini. Setelah sampai kota Sorong, kita dapat menggunakan sejenis kapal cepat yang biasa berlayar dua kali sehari menuju Waisai, ibukota kabupaten Raja Ampat. Perjalanan hanya akan memakan waktu sekitar 2-3 jam saja dari pelabuhan Sorong, hingga sampai di pelabuhan Waisai Raja Ampat.', 4.8, 10000, 'p-2.jpg'),
(3, 'Balie', 'Bedugul', '2022-05-24', 'Bedugul adalah sebuah kawasan wisata dengan danau dan gunung di Bali, Indonesia, terletak di bagian tengah pulau di dekat Danau Bratan antara Denpasar dan Singaraja. Daerah ini mencakup desa Bedugul sendiri, Candikuning, Pancasari, Pacung dan Wanagiri.\r\n\r\nBedugul terletak di Kabupaten Tabanan,48 kilometer (30 mi) di sebelah utara kota Denpasar atau 20 kilometer (12 mi) sebelah selatan Singaraja. Di daerah ini terdapat tiga danau kawah yaitu Danau Bratan, Danau Buyan, dan Danau Tamblingan.\r\n\r\nTempat wisata utama di Bedugul adalah Pura Ulun Danu Bratan dan Kebun Raya Bali. Kebun Raya Bali dibuka pada tahun 1959. Kebun raya ini memiliki luas 1.575 hektare (3.890 ekar), menjadi salah satu kebun raya terbesar di Indonesia.[2]', 4.9, 1000, 'p-3.jpg'),
(5, 'Nusa Tenggara Timur', 'Pulau Komodo', '2022-04-06', 'Taman Nasional Komodo merupakan ‘rumah’ bagi sekitar 2.500 komodo. Sobat Pesona pokoknya akan terpukau deh, melihat hewan purba dengan panjang 3 meter dan berat sekitar 70 kg bahkan lebih ini secara langsung! Meskipun begitu, Sobat Pesona hanya bisa melihat hewan ini dari jarak 300 meter, sebab komodo merupakan hewan buas. Selain itu, air liurnya pun mengandung racun. Jadi, perlu tetap waspada ya, Sobat Pesona! Nah, pengalaman langka seperti ini, hanya bisa Sobat Pesona temukan #DiIndonesiaAja!', 4.9, 90000, 'p-5.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `04-komentar`
--

CREATE TABLE `04-komentar` (
  `id` int(11) NOT NULL,
  `id_artikel` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `nama` varchar(25) NOT NULL,
  `isi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `04-komentar`
--

INSERT INTO `04-komentar` (`id`, `id_artikel`, `tanggal`, `nama`, `isi`) VALUES
(14, 2, '2022-05-24', 'dindaaa', 'menarik bukan?');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

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
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `no_hp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `no_hp`, `alamat`) VALUES
(1, 'dindaaa', 'fitriaadindaaa@student.ub.ac.id', NULL, '$2y$10$weYnYZC4jSOVGYwp3NNVo.EqpBlTIxDnzxFKWQeT2r7gJ7cfhU0Ie', NULL, '2022-05-24 11:26:36', '2022-05-24 11:35:55', '088888888883', 'malangggg'),
(3, 'Wisnu', 'wisnu@gmail.com', NULL, '$2y$10$3agSC15EgLgScQwg4NoE3em/CYPIat0e1whr/NGHhkG9hwdkOQJt.', NULL, '2022-05-24 12:32:57', '2022-05-24 12:33:23', '087879988899', 'Tulung Agung');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `04-artikel`
--
ALTER TABLE `04-artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `04-komentar`
--
ALTER TABLE `04-komentar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `04-artikel`
--
ALTER TABLE `04-artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `04-komentar`
--
ALTER TABLE `04-komentar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
