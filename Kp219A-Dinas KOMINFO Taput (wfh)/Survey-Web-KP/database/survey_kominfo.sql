-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Agu 2020 pada 09.57
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `survey_kominfo`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `answers`
--

CREATE TABLE `answers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question_id` bigint(20) UNSIGNED NOT NULL,
  `answer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `answers`
--

INSERT INTO `answers` (`id`, `question_id`, `answer`, `created_at`, `updated_at`) VALUES
(213, 53, '1', '2020-07-31 23:52:37', '2020-07-31 23:52:37'),
(214, 53, '2', '2020-07-31 23:52:37', '2020-07-31 23:52:37'),
(215, 53, '3', '2020-07-31 23:52:37', '2020-07-31 23:52:37'),
(216, 53, '4', '2020-07-31 23:52:37', '2020-07-31 23:52:37'),
(217, 54, '1a', '2020-08-01 18:07:05', '2020-08-01 18:07:05'),
(218, 54, '2b', '2020-08-01 18:07:05', '2020-08-01 18:07:05'),
(219, 54, '3c', '2020-08-01 18:07:05', '2020-08-01 18:07:05'),
(220, 54, '4d', '2020-08-01 18:07:05', '2020-08-01 18:07:05'),
(221, 55, '1', '2020-08-01 18:40:31', '2020-08-01 18:40:31'),
(222, 55, '2', '2020-08-01 18:40:31', '2020-08-01 18:40:31'),
(223, 55, '3', '2020-08-01 18:40:31', '2020-08-01 18:40:31'),
(224, 55, '4', '2020-08-01 18:40:31', '2020-08-01 18:40:31'),
(225, 56, '4', '2020-08-01 18:40:48', '2020-08-01 18:40:48'),
(226, 56, '3', '2020-08-01 18:40:48', '2020-08-01 18:40:48'),
(227, 56, '2', '2020-08-01 18:40:48', '2020-08-01 18:40:48'),
(228, 56, '1', '2020-08-01 18:40:48', '2020-08-01 18:40:48');

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
-- Struktur dari tabel `instansi`
--

CREATE TABLE `instansi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_instansi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_pimpinan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `instansi`
--

INSERT INTO `instansi` (`id`, `nama_instansi`, `nama_pimpinan`, `alamat`, `keterangan`) VALUES
(11, 'Kominfo', 'David Sitorus', 'Tarutung', 'Aasadasda'),
(14, 'Kemendikbud', 'Fenny', 'Medan', 'asdsaa'),
(15, 'KemenPariwisata', 'John', 'medan', 'ket');

-- --------------------------------------------------------

--
-- Struktur dari tabel `layanan`
--

CREATE TABLE `layanan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `instansi_id` bigint(20) UNSIGNED NOT NULL,
  `nama_layanan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan_layanan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `layanan`
--

INSERT INTO `layanan` (`id`, `instansi_id`, `nama_layanan`, `keterangan_layanan`) VALUES
(41, 11, 'Layanan Kominfo 1', 'Keterangan Layanan Kominfo 1'),
(44, 11, 'Layanan Kominfo 2', 'Keterangan Layanan Kominfo 2'),
(45, 14, 'Layanan Kemendikbud 1', 'Keterangan  Layanan Kemendikbud 1'),
(47, 11, 'Layanan Kominfo 3', 'Keterangan Layanan Kominfo 3'),
(49, 15, 'Layanan KemenPariwisata 1', 'Keterangan Layanan KemenPariwisata 1'),
(50, 15, 'Layanan KemenPariwisata 2', 'Keterangan Layanan KemenPariwisata 2'),
(51, 14, 'Layanan Kemendikbud 2', 'Keterangan Layanan Kemendikbud 2');

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
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2020_07_01_085606_create_register_table', 1),
(4, '2020_07_01_095442_create_instansi_table', 1),
(5, '2020_07_07_065837_create_layanan_table', 1),
(6, '2020_07_12_012437_create_questionnaires_table', 2),
(7, '2020_07_12_013133_create_questionnaires_table', 3),
(8, '2014_10_12_100000_create_password_resets_table', 4),
(9, '2020_07_13_135056_create_questions_table', 4),
(10, '2020_07_13_135153_create_answers_table', 4),
(11, '2020_07_14_104530_create_surveys_table', 5),
(12, '2020_07_14_104554_create_survey_responses_table', 5);

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
-- Struktur dari tabel `questionnaires`
--

CREATE TABLE `questionnaires` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `instansi_id` bigint(20) UNSIGNED NOT NULL,
  `layanan_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `purpose` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `due_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `questionnaires`
--

INSERT INTO `questionnaires` (`id`, `user_id`, `instansi_id`, `layanan_id`, `title`, `purpose`, `created_at`, `updated_at`, `due_date`) VALUES
(36, 6, 11, 41, 'Quesioner A', 'Tujuan A', '2020-07-31 23:52:12', '2020-08-01 18:21:22', '2020-08-15'),
(37, 6, 11, 44, 'Kuesioner B', 'Tujuan B', '2020-08-01 18:40:14', '2020-08-01 18:40:14', '2020-08-21');

-- --------------------------------------------------------

--
-- Struktur dari tabel `questions`
--

CREATE TABLE `questions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `questionnaire_id` bigint(20) UNSIGNED NOT NULL,
  `question` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `questions`
--

INSERT INTO `questions` (`id`, `questionnaire_id`, `question`, `created_at`, `updated_at`) VALUES
(53, 36, 'Pertanyaan 1?', '2020-07-31 23:52:37', '2020-07-31 23:52:37'),
(54, 36, 'Pertanyaan 2?', '2020-08-01 18:07:05', '2020-08-01 18:07:05'),
(55, 37, 'Pertanyaan Kues B?', '2020-08-01 18:40:31', '2020-08-01 18:40:31'),
(56, 37, 'Pertanyaan 2 Kues B', '2020-08-01 18:40:48', '2020-08-01 18:40:48');

-- --------------------------------------------------------

--
-- Struktur dari tabel `surveys`
--

CREATE TABLE `surveys` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `questionnaire_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `saran` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `surveys`
--

INSERT INTO `surveys` (`id`, `questionnaire_id`, `name`, `email`, `saran`, `created_at`, `updated_at`) VALUES
(21, 36, 'jona', 'jona@gmail.com', 'mantap', '2020-07-31 23:57:13', '2020-07-31 23:57:13'),
(22, 36, 'dayani', 'dayani@gmail.com', 'sukses', '2020-08-01 18:21:49', '2020-08-01 18:21:49'),
(23, 36, 'Fenny', 'fenny@gmail.com', 'keren', '2020-08-01 18:22:20', '2020-08-01 18:22:20'),
(24, 37, 'jona', 'jona@gmail.com', 'nice', '2020-08-01 18:41:27', '2020-08-01 18:41:27'),
(25, 37, 'Fenny', 'fenny@gmail.com', 'good job', '2020-08-01 18:41:59', '2020-08-01 18:41:59');

-- --------------------------------------------------------

--
-- Struktur dari tabel `survey_responses`
--

CREATE TABLE `survey_responses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question_id` bigint(20) UNSIGNED NOT NULL,
  `survey_id` bigint(20) UNSIGNED NOT NULL,
  `answer_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `survey_responses`
--

INSERT INTO `survey_responses` (`id`, `question_id`, `survey_id`, `answer_id`, `created_at`, `updated_at`) VALUES
(43, 53, 21, 216, '2020-07-31 23:57:13', '2020-07-31 23:57:13'),
(44, 53, 22, 215, '2020-08-01 18:21:49', '2020-08-01 18:21:49'),
(45, 54, 22, 219, '2020-08-01 18:21:49', '2020-08-01 18:21:49'),
(46, 53, 23, 214, '2020-08-01 18:22:20', '2020-08-01 18:22:20'),
(47, 54, 23, 218, '2020-08-01 18:22:20', '2020-08-01 18:22:20'),
(48, 55, 24, 221, '2020-08-01 18:41:27', '2020-08-01 18:41:27'),
(49, 56, 24, 225, '2020-08-01 18:41:27', '2020-08-01 18:41:27'),
(50, 55, 25, 224, '2020-08-01 18:41:59', '2020-08-01 18:41:59'),
(51, 56, 25, 228, '2020-08-01 18:41:59', '2020-08-01 18:41:59');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `nik` varchar(100) NOT NULL,
  `role` varchar(45) NOT NULL,
  `password` varchar(100) NOT NULL,
  `remember_token` varchar(250) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `nik`, `role`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(6, 'Ruben', '123123123123', 'admin', '$2y$10$nHXY6BH4r7aiSPgiWqNp/uxG7ALwVTumV63EzfN0PC40i/U97ResO', 'SGNKoyaTHLGtdeamzAh7uvuN4MfEaGY6jvHEAmBHxerf7nnJdYHSzR9TrBJb', '2020-08-02 07:56:35', '2020-07-12'),
(14, 'david', '12345678912345678', 'pengguna', '$2y$10$Qr3dVeNBcavXUafGwDCZCuctKekCMZJd4kO7gMOLDLXtPldJnFh1u', 'HRDlHsPCjUfhNsqSndMeRWEyWY8Ago470KOzjvGeukEaPX4J146WN0MkTVtK', '2020-07-31 04:25:13', '2020-07-15'),
(17, 'dayani', '4455687867867', 'pengguna', '$2y$10$f0a52RuNYMAY64UREXZfM.AJUed2oR.VV9wy4v2sySgAMAMTrDUxq', '2E9ql94QblCA4APgetSmGOCC91SykKQVaiJiC8N1ApgvlFFnVJny5tzpi1U3', '2020-08-02 01:22:01', '2020-07-15'),
(22, 'Fenny', '12312312312312312', 'pengguna', '$2y$10$lVnh8qD6AIELanlgXY5Sg.AjVkn8aDX4evFLyKfXAdRQ150XI0G8S', 'ugr2n8JzKEYfTHT40UWmvgG6MO3v2FmbQ7C9LGKQE8bJX4dZBdKkHAqYka9O', '2020-08-02 01:42:06', '2020-07-15'),
(23, 'jona', '313123143242343241', 'pengguna', '$2y$10$3eJ9fyr0/ZNupI6Wt3N7yusnQq/v2dIvc797x7zpjF9SxM2SY9l/6', '6ggViaPhXy1oI1jeWRMbJlZ8thhrG9ZUKEE3EiixOC32bF2plvziBXVXVOW3', '2020-08-02 01:41:31', '2020-07-26'),
(24, 'amsal', '1112223331231231231231231312', 'pengguna', '$2y$10$9Yr9vCRJd7u1CGUogFA.5OfGEjNHnUdA9TJeWyynYKI/3.8mY0GQS', 'rQEapyiCWavjQ1ay5ZHAS3aQGeDjIiOXYSl7vJPpOx3l1pR7tmgJVCv3wEjx', '2020-07-30 06:18:31', '2020-07-27'),
(25, 'Citra', '2123244252423416', 'pengguna', '$2y$10$hVGkdJAQ7VKAKkRcdkwGZu5zxgsukBc4XRb/XGiWUulaNCQpO5YKi', '3ztoA3GbEzVUAb3ohzn73cvBM8fc8ZWib7tAwduNynDbmxljWD72FoG8m9O3', '2020-08-01 20:36:09', '2020-08-02');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Question` (`question_id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `instansi`
--
ALTER TABLE `instansi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `layanan`
--
ALTER TABLE `layanan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Instansi` (`instansi_id`);

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
-- Indeks untuk tabel `questionnaires`
--
ALTER TABLE `questionnaires`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Layanan` (`layanan_id`),
  ADD KEY `User` (`user_id`);

--
-- Indeks untuk tabel `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Questionneire` (`questionnaire_id`);

--
-- Indeks untuk tabel `surveys`
--
ALTER TABLE `surveys`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `survey_responses`
--
ALTER TABLE `survey_responses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Answer` (`answer_id`),
  ADD KEY `Survey` (`survey_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `answers`
--
ALTER TABLE `answers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=229;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `instansi`
--
ALTER TABLE `instansi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `layanan`
--
ALTER TABLE `layanan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `questionnaires`
--
ALTER TABLE `questionnaires`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT untuk tabel `questions`
--
ALTER TABLE `questions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT untuk tabel `surveys`
--
ALTER TABLE `surveys`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `survey_responses`
--
ALTER TABLE `survey_responses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `answers`
--
ALTER TABLE `answers`
  ADD CONSTRAINT `Question` FOREIGN KEY (`question_id`) REFERENCES `questions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `layanan`
--
ALTER TABLE `layanan`
  ADD CONSTRAINT `Instansi` FOREIGN KEY (`instansi_id`) REFERENCES `instansi` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `questionnaires`
--
ALTER TABLE `questionnaires`
  ADD CONSTRAINT `Layanan` FOREIGN KEY (`layanan_id`) REFERENCES `layanan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `User` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `Questionneire` FOREIGN KEY (`questionnaire_id`) REFERENCES `questionnaires` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `survey_responses`
--
ALTER TABLE `survey_responses`
  ADD CONSTRAINT `Answer` FOREIGN KEY (`answer_id`) REFERENCES `answers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Survey` FOREIGN KEY (`survey_id`) REFERENCES `surveys` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
