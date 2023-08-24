-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 24, 2023 at 06:11 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth_activation_attempts`
--

CREATE TABLE `auth_activation_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups`
--

CREATE TABLE `auth_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_groups`
--

INSERT INTO `auth_groups` (`id`, `name`, `description`) VALUES
(1, 'Admin', 'Akses Admin'),
(2, 'Tamu', 'Akses Tamu');

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_permissions`
--

CREATE TABLE `auth_groups_permissions` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_groups_permissions`
--

INSERT INTO `auth_groups_permissions` (`group_id`, `permission_id`) VALUES
(1, 2),
(2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_users`
--

CREATE TABLE `auth_groups_users` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_groups_users`
--

INSERT INTO `auth_groups_users` (`group_id`, `user_id`) VALUES
(1, 3),
(2, 4),
(2, 5);

-- --------------------------------------------------------

--
-- Table structure for table `auth_logins`
--

CREATE TABLE `auth_logins` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `user_id` int(11) UNSIGNED DEFAULT NULL,
  `date` datetime NOT NULL,
  `success` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_logins`
--

INSERT INTO `auth_logins` (`id`, `ip_address`, `email`, `user_id`, `date`, `success`) VALUES
(1, '::1', 'admin01', 1, '2023-08-20 02:20:45', 0),
(2, '::1', 'admin@gmail.com', 3, '2023-08-20 02:25:17', 1),
(3, '::1', 'adistyjelahu01@gmail.com', 4, '2023-08-20 02:28:04', 1),
(4, '::1', 'adistyjelahu01@gmail.com', 4, '2023-08-20 02:30:13', 1),
(5, '::1', 'admin01', NULL, '2023-08-20 02:30:29', 0),
(6, '::1', 'admin@gmail.com', 3, '2023-08-20 02:30:37', 1),
(7, '::1', 'adistyjelahu01@gmail.com', 4, '2023-08-20 02:31:53', 1),
(8, '::1', 'admin@gmail.com', 3, '2023-08-20 02:54:18', 1),
(9, '::1', 'admin@gmail.com', 3, '2023-08-20 02:54:56', 1),
(10, '::1', 'adistyjelahu01@gmail.com', 4, '2023-08-20 02:55:28', 1),
(11, '::1', 'adistyjelahu01@gmail.com', 4, '2023-08-20 06:25:15', 1),
(12, '::1', 'admin@gmail.com', 3, '2023-08-20 11:51:17', 1),
(13, '::1', 'adistyjelahu01@gmail.com', 4, '2023-08-20 12:39:23', 1),
(14, '::1', 'admin@gmail.com', 3, '2023-08-20 12:43:49', 1),
(15, '::1', 'adistyjelahu01@gmail.com', 4, '2023-08-20 12:45:57', 1),
(16, '::1', 'admin@gmail.com', 3, '2023-08-20 12:49:07', 1),
(17, '::1', 'adistyjelahu01@gmail.com', 4, '2023-08-20 12:53:16', 1),
(18, '::1', 'admin@gmail.com', 3, '2023-08-20 12:54:36', 1),
(19, '::1', 'adistyjelahu01@gmail.com', 4, '2023-08-20 12:58:26', 1),
(20, '::1', 'admin@gmail.com', 3, '2023-08-20 13:00:15', 1),
(21, '::1', 'adistyjelahu01@gmail.com', 4, '2023-08-20 15:06:01', 1),
(22, '::1', 'adistyjelahu01@gmail.com', 4, '2023-08-20 16:22:49', 1),
(23, '::1', 'admin@gmail.com', 3, '2023-08-20 16:39:26', 1),
(24, '::1', 'adistyjelahu01@gmail.com', 4, '2023-08-24 04:16:01', 1),
(25, '::1', 'admin01', NULL, '2023-08-24 04:17:05', 0),
(26, '::1', 'admin@gmail.com', 3, '2023-08-24 04:17:24', 1),
(27, '::1', 'adistyjelahu01@gmail.com', 4, '2023-08-24 04:33:46', 1),
(28, '::1', 'admin@gmail.com', 3, '2023-08-24 04:35:53', 1),
(29, '::1', 'adistyjelahu01@gmail.com', 4, '2023-08-24 04:40:22', 1),
(30, '::1', 'adistyjelahu01@gmail.com', 4, '2023-08-24 04:45:59', 1),
(31, '::1', 'echa@gmail.comm', NULL, '2023-08-24 04:52:11', 0),
(32, '::1', 'echa@gmail.com', 5, '2023-08-24 04:52:42', 1),
(33, '::1', 'adistyjelahu01@gmail.com', 4, '2023-08-24 05:06:25', 1),
(34, '::1', 'admin@gmail.com', 3, '2023-08-24 05:08:31', 1),
(35, '::1', 'adistyjelahu01@gmail.com', 4, '2023-08-24 05:16:55', 1),
(36, '::1', 'admin@gmail.com', 3, '2023-08-24 05:18:47', 1),
(37, '::1', 'adistyjelahu01@gmail.com', 4, '2023-08-24 05:30:32', 1),
(38, '::1', 'adistyjelahu01@gmail.com', 4, '2023-08-24 05:32:27', 1),
(39, '::1', 'admin@gmail.com', 3, '2023-08-24 05:42:51', 1),
(40, '::1', 'echa@gmail.com', 5, '2023-08-24 05:54:56', 1),
(41, '::1', 'echa@gmail.com', 5, '2023-08-24 05:59:45', 1),
(42, '::1', 'echa@gmail.com', 5, '2023-08-24 06:05:14', 1);

-- --------------------------------------------------------

--
-- Table structure for table `auth_permissions`
--

CREATE TABLE `auth_permissions` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_permissions`
--

INSERT INTO `auth_permissions` (`id`, `name`, `description`) VALUES
(1, 'home', 'Menu'),
(2, 'dashboard', 'Dashboard Admin');

-- --------------------------------------------------------

--
-- Table structure for table `auth_reset_attempts`
--

CREATE TABLE `auth_reset_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_tokens`
--

CREATE TABLE `auth_tokens` (
  `id` int(11) UNSIGNED NOT NULL,
  `selector` varchar(255) NOT NULL,
  `hashedValidator` varchar(255) NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `expires` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_users_permissions`
--

CREATE TABLE `auth_users_permissions` (
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `deluxe_room`
--

CREATE TABLE `deluxe_room` (
  `id` int(100) NOT NULL,
  `id_kamar` varchar(100) NOT NULL,
  `id_user` int(100) NOT NULL,
  `jumlah_pesan` varchar(100) NOT NULL,
  `tgl_pemesanan` datetime NOT NULL,
  `tgl_bayar` datetime DEFAULT NULL,
  `check_in` datetime NOT NULL,
  `check_out` datetime NOT NULL,
  `bukti_pembayaran` varchar(100) DEFAULT NULL,
  `status` varchar(100) NOT NULL,
  `total_payment` varchar(100) DEFAULT NULL,
  `selesai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `deluxe_room`
--

INSERT INTO `deluxe_room` (`id`, `id_kamar`, `id_user`, `jumlah_pesan`, `tgl_pemesanan`, `tgl_bayar`, `check_in`, `check_out`, `bukti_pembayaran`, `status`, `total_payment`, `selesai`) VALUES
(1, '2', 5, '2', '2023-08-24 12:55:34', '2023-08-24 13:09:11', '2023-08-24 07:55:33', '2023-08-26 07:55:33', NULL, 'Pending', '3.200.000', 0);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2017-11-20-223112', 'Myth\\Auth\\Database\\Migrations\\CreateAuthTables', 'default', 'Myth\\Auth', 1692469134, 1);

-- --------------------------------------------------------

--
-- Table structure for table `reguler_room`
--

CREATE TABLE `reguler_room` (
  `id` int(100) NOT NULL,
  `id_kamar` varchar(100) NOT NULL,
  `id_user` int(100) NOT NULL,
  `jumlah_pesan` varchar(100) NOT NULL,
  `tgl_pemesanan` datetime NOT NULL,
  `tgl_bayar` datetime DEFAULT NULL,
  `check_in` varchar(100) NOT NULL,
  `check_out` varchar(100) NOT NULL,
  `bukti_pembayaran` varchar(100) DEFAULT NULL,
  `total_payment` varchar(500) DEFAULT NULL,
  `selesai` int(11) NOT NULL,
  `status_booking` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reguler_room`
--

INSERT INTO `reguler_room` (`id`, `id_kamar`, `id_user`, `jumlah_pesan`, `tgl_pemesanan`, `tgl_bayar`, `check_in`, `check_out`, `bukti_pembayaran`, `total_payment`, `selesai`, `status_booking`) VALUES
(1, '1', 4, '1', '2023-08-24 12:59:17', '2023-08-24 21:45:12', '2023-08-22', '2023-08-23', NULL, '350', 0, 'Pembayaran'),
(2, '2', 4, '2', '2023-08-24 04:35:15', NULL, '2023-08-25', '2023-08-27', NULL, '1400', 0, 'Konfirmasi'),
(3, '1', 4, '2', '2023-08-24 05:35:35', NULL, '2023-08-24', '2023-08-26', NULL, '1400', 0, 'Pending'),
(4, '2', 4, '2', '2023-08-24 05:39:25', NULL, '2023-08-24', '2023-08-26', NULL, '3200', 0, ''),
(5, '2', 5, '2', '2023-08-24 06:07:13', NULL, '2023-08-24', '2023-08-26', NULL, '3200', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `superior_room`
--

CREATE TABLE `superior_room` (
  `id` int(100) NOT NULL,
  `id_kamar` varchar(100) NOT NULL,
  `id_user` int(100) NOT NULL,
  `jumlah_pesan` varchar(100) NOT NULL,
  `tgl_pemesanan` datetime NOT NULL,
  `tgl_bayar` datetime DEFAULT NULL,
  `check_in` datetime NOT NULL,
  `check_out` datetime NOT NULL,
  `bukti_pembayaran` varchar(100) DEFAULT NULL,
  `status` varchar(100) NOT NULL,
  `total_payment` varchar(500) DEFAULT NULL,
  `selesai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_kamar`
--

CREATE TABLE `tb_kamar` (
  `id` int(100) NOT NULL,
  `jenis_kamar` varchar(100) NOT NULL,
  `total` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_kamar`
--

INSERT INTO `tb_kamar` (`id`, `jenis_kamar`, `total`) VALUES
(1, 'Reguler Room', '10'),
(2, 'Deluxe Room', '10'),
(3, 'Superior Room', '10'),
(4, 'President Room', '10');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `nama_tamu` varchar(100) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `reset_hash` varchar(255) DEFAULT NULL,
  `reset_at` datetime DEFAULT NULL,
  `reset_expires` datetime DEFAULT NULL,
  `activate_hash` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `status_message` varchar(255) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `force_pass_reset` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `nama_tamu`, `no_hp`, `password_hash`, `reset_hash`, `reset_at`, `reset_expires`, `activate_hash`, `status`, `status_message`, `active`, `force_pass_reset`, `created_at`, `updated_at`, `deleted_at`) VALUES
(3, 'admin@gmail.com', 'adminhotel', 'Admin', '081545456', '$2y$10$Y45a5.nRXkS9gJYbs6UINOI3hS.FjFfuxEZVa.8m3HtXlXp94RmeC', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2023-08-20 02:25:06', '2023-08-20 02:25:06', NULL),
(4, 'adistyjelahu01@gmail.com', 'adisty01', 'Adisty Jelahu', '08255454645', '$2y$10$jfJwcviHVEIW89v4akyDwOTVS3EdrW6q7PEE8Kpfr6dEGRS9cQFJG', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2023-08-20 02:27:55', '2023-08-20 02:27:55', NULL),
(5, 'echa@gmail.com', 'echa01', 'Echa Balut', '08225550011', '$2y$10$Gllv/5k5k2J7AZzH9GLCt.4fZfRQLvacZGvseBxDl.zqrpQ5WWNhC', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2023-08-24 04:51:48', '2023-08-24 04:51:48', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_groups`
--
ALTER TABLE `auth_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD KEY `auth_groups_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `group_id_permission_id` (`group_id`,`permission_id`);

--
-- Indexes for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD KEY `auth_groups_users_user_id_foreign` (`user_id`),
  ADD KEY `group_id_user_id` (`group_id`,`user_id`);

--
-- Indexes for table `auth_logins`
--
ALTER TABLE `auth_logins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auth_tokens_user_id_foreign` (`user_id`),
  ADD KEY `selector` (`selector`);

--
-- Indexes for table `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD KEY `auth_users_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `user_id_permission_id` (`user_id`,`permission_id`);

--
-- Indexes for table `deluxe_room`
--
ALTER TABLE `deluxe_room`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reguler_room`
--
ALTER TABLE `reguler_room`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `superior_room`
--
ALTER TABLE `superior_room`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_kamar`
--
ALTER TABLE `tb_kamar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_groups`
--
ALTER TABLE `auth_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `auth_logins`
--
ALTER TABLE `auth_logins`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `deluxe_room`
--
ALTER TABLE `deluxe_room`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `reguler_room`
--
ALTER TABLE `reguler_room`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `superior_room`
--
ALTER TABLE `superior_room`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_kamar`
--
ALTER TABLE `tb_kamar`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD CONSTRAINT `auth_groups_permissions_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD CONSTRAINT `auth_groups_users_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD CONSTRAINT `auth_tokens_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD CONSTRAINT `auth_users_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_users_permissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
