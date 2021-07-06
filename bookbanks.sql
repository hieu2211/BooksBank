-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 03, 2021 lúc 09:22 AM
-- Phiên bản máy phục vụ: 10.4.17-MariaDB
-- Phiên bản PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `bookbanks`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `authors`
--

CREATE TABLE `authors` (
  `id` int(10) UNSIGNED NOT NULL,
  `avartar` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `born_address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `born_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `died` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `social` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `genre` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `athore_type` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `authors`
--

INSERT INTO `authors` (`id`, `avartar`, `name`, `born_address`, `born_date`, `died`, `social`, `genre`, `content`, `athore_type`, `created_at`, `updated_at`) VALUES
(1, 'authors\\July2021\\9k0UPWHZsXgC8OLCgeXa.jpg', 'Fujiko F. Fujioo', NULL, NULL, NULL, NULL, '2', NULL, NULL, '2021-07-02 06:41:18', '2021-07-02 06:52:29');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `booknames`
--

CREATE TABLE `booknames` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avartar` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `genre_id` int(11) DEFAULT NULL,
  `author_id` int(11) DEFAULT NULL,
  `publisher_id` int(11) DEFAULT NULL,
  `borrow_the_most` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `booknames`
--

INSERT INTO `booknames` (`id`, `name`, `avartar`, `content`, `genre_id`, `author_id`, `publisher_id`, `borrow_the_most`, `created_at`, `updated_at`) VALUES
(1, 'Doraemon Tập 1', 'booknames\\July2021\\WmB8HAhlFuzYIUTIeNGr.jpg', NULL, 2, 1, 2, NULL, '2021-07-02 06:51:17', '2021-07-02 06:51:17'),
(2, 'Doraemon Tập 2', 'booknames\\July2021\\eDM8RqFACZtLiyYghSGD.jpg', NULL, 2, 1, 2, NULL, '2021-07-02 08:00:11', '2021-07-02 08:00:11'),
(3, 'quyen 2', 'booknames\\July2021\\VDvPely2fYJ3EdwxoUkI.jpg', '123', 1, 1, 1, 12312, '2021-07-03 00:09:32', '2021-07-03 00:09:32');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `books`
--

CREATE TABLE `books` (
  `id` int(10) UNSIGNED NOT NULL,
  `bookname_id` int(11) DEFAULT NULL,
  `library_id` int(11) DEFAULT NULL,
  `Quantity` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `books`
--

INSERT INTO `books` (`id`, `bookname_id`, `library_id`, `Quantity`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 20000, '2021-07-02 06:55:49', '2021-07-02 06:55:49'),
(2, 2, 1, 20000, '2021-07-02 08:00:25', '2021-07-02 08:00:25'),
(3, 3, 2, 2312322, '2021-07-03 00:09:44', '2021-07-03 00:09:44'),
(4, 3, 1, 200000, '2021-07-03 00:10:31', '2021-07-03 00:10:31');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `data_rows`
--

CREATE TABLE `data_rows` (
  `id` int(10) UNSIGNED NOT NULL,
  `data_type_id` int(10) UNSIGNED NOT NULL,
  `field` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `required` tinyint(1) NOT NULL DEFAULT 0,
  `browse` tinyint(1) NOT NULL DEFAULT 1,
  `read` tinyint(1) NOT NULL DEFAULT 1,
  `edit` tinyint(1) NOT NULL DEFAULT 1,
  `add` tinyint(1) NOT NULL DEFAULT 1,
  `delete` tinyint(1) NOT NULL DEFAULT 1,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `data_rows`
--

INSERT INTO `data_rows` (`id`, `data_type_id`, `field`, `type`, `display_name`, `required`, `browse`, `read`, `edit`, `add`, `delete`, `details`, `order`) VALUES
(1, 1, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, '{}', 1),
(2, 1, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, '{}', 3),
(3, 1, 'email', 'text', 'Email', 1, 1, 1, 1, 1, 1, '{}', 4),
(4, 1, 'password', 'password', 'Password', 1, 0, 0, 1, 1, 0, '{}', 6),
(5, 1, 'remember_token', 'text', 'Remember Token', 0, 0, 0, 0, 0, 0, '{}', 7),
(6, 1, 'created_at', 'timestamp', 'Created At', 0, 0, 1, 0, 0, 0, '{}', 8),
(7, 1, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 10),
(8, 1, 'avatar', 'image', 'Avatar', 0, 1, 1, 1, 1, 1, '{}', 2),
(9, 1, 'user_belongsto_role_relationship', 'relationship', 'Role', 0, 0, 1, 1, 1, 0, '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsTo\",\"column\":\"role_id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"roles\",\"pivot\":\"0\",\"taggable\":\"0\"}', 12),
(10, 1, 'user_belongstomany_role_relationship', 'relationship', 'Roles', 0, 1, 1, 1, 1, 0, '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsToMany\",\"column\":\"id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"user_roles\",\"pivot\":\"1\",\"taggable\":\"0\"}', 13),
(11, 1, 'settings', 'hidden', 'Settings', 0, 0, 0, 0, 0, 0, '{}', 14),
(12, 2, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(13, 2, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(14, 2, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 3),
(15, 2, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4),
(16, 3, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, '{}', 1),
(17, 3, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, '{}', 2),
(18, 3, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, '{}', 3),
(19, 3, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 4),
(20, 3, 'display_name', 'text', 'Display Name', 1, 1, 1, 1, 1, 1, '{}', 5),
(21, 1, 'role_id', 'text', 'Role', 0, 0, 1, 1, 1, 1, '{}', 11),
(22, 1, 'email_verified_at', 'timestamp', 'Email Verified At', 0, 0, 1, 0, 0, 0, '{}', 9),
(23, 1, 'date_of_birth', 'text', 'Ngày sinh', 0, 1, 1, 1, 1, 1, '{}', 5),
(24, 1, 'address', 'text', 'Địa chỉ', 0, 0, 1, 1, 1, 1, '{}', 15),
(25, 1, 'phone_number', 'text', 'SĐT', 0, 1, 1, 1, 1, 1, '{}', 16),
(26, 1, 'citi_id', 'text', 'Citi Id', 0, 1, 1, 1, 1, 1, '{}', 18),
(28, 1, 'ward_id', 'text', 'Ward Id', 0, 1, 1, 1, 1, 1, '{}', 19),
(29, 1, 'district_id', 'text', 'District Id', 0, 1, 1, 1, 1, 1, '{}', 17),
(30, 6, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(31, 6, 'name', 'text', 'Name', 0, 1, 1, 1, 1, 1, '{}', 2),
(32, 6, 'content', 'image', 'Content', 0, 1, 1, 1, 1, 1, '{}', 3),
(33, 6, 'open_time', 'text', 'Open Time', 0, 1, 1, 1, 1, 1, '{}', 4),
(34, 6, 'feautured_image', 'text', 'Feautured Image', 0, 1, 1, 1, 1, 1, '{}', 5),
(35, 6, 'gallery', 'text', 'Gallery', 0, 1, 1, 1, 1, 1, '{}', 6),
(36, 6, 'phone_number', 'text', 'Phone Number', 0, 0, 1, 1, 1, 1, '{}', 7),
(37, 6, 'email', 'text', 'Email', 0, 0, 1, 1, 1, 1, '{}', 8),
(38, 6, 'addresss', 'text', 'Addresss', 0, 0, 1, 1, 1, 1, '{}', 9),
(39, 6, 'full_name', 'text', 'Full Name', 0, 0, 1, 1, 1, 1, '{}', 10),
(40, 6, 'map_location', 'text', 'Map Location', 0, 1, 1, 1, 1, 1, '{}', 11),
(41, 6, 'ward_id', 'text', 'Ward Id', 0, 1, 1, 1, 1, 1, '{}', 12),
(42, 6, 'district_id', 'text', 'District Id', 0, 1, 1, 1, 1, 1, '{}', 13),
(43, 6, 'citi_id', 'text', 'Citi Id', 0, 1, 1, 1, 1, 1, '{}', 14),
(44, 6, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 15),
(45, 6, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 16),
(46, 8, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(47, 8, 'user_id', 'text', 'User Id', 0, 1, 1, 1, 1, 1, '{}', 2),
(48, 8, 'library_id', 'text', 'Library Id', 0, 1, 1, 1, 1, 1, '{}', 5),
(49, 8, 'created_at', 'timestamp', 'Created At', 0, 0, 1, 0, 0, 1, '{}', 6),
(50, 8, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 7),
(51, 10, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(52, 10, 'name', 'text', 'Name', 0, 1, 1, 1, 1, 1, '{}', 2),
(53, 10, 'description', 'text', 'Description', 0, 1, 1, 1, 1, 1, '{}', 3),
(54, 10, 'created_at', 'timestamp', 'Created At', 0, 1, 0, 0, 0, 0, '{}', 4),
(55, 10, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 5),
(56, 13, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(57, 13, 'avartar', 'image', 'Avartar', 0, 1, 1, 1, 1, 1, '{}', 7),
(58, 13, 'name', 'text', 'Tên', 0, 1, 1, 1, 1, 1, '{}', 2),
(59, 13, 'born_address', 'text', 'Born Address', 0, 1, 1, 1, 1, 1, '{}', 5),
(60, 13, 'born_date', 'text', 'Born Date', 0, 1, 1, 1, 1, 1, '{}', 6),
(61, 13, 'died', 'text', 'Died', 0, 1, 1, 1, 1, 1, '{}', 8),
(62, 13, 'social', 'text', 'Social', 0, 1, 1, 1, 1, 1, '{}', 9),
(63, 13, 'genre', 'text', 'Genre', 0, 1, 1, 1, 1, 1, '{}', 3),
(64, 13, 'content', 'text', 'Content', 0, 1, 1, 1, 1, 1, '{}', 10),
(65, 13, 'athore_type', 'text', 'Athore Type', 0, 1, 1, 1, 1, 1, '{}', 11),
(66, 13, 'created_at', 'timestamp', 'Created At', 0, 1, 0, 0, 0, 0, '{}', 12),
(67, 13, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 13),
(68, 16, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(69, 16, 'name', 'text', 'Name', 0, 1, 1, 1, 1, 1, '{}', 2),
(70, 16, 'icon', 'text', 'Icon', 0, 1, 1, 1, 1, 1, '{}', 3),
(71, 16, 'parent_id', 'text', 'Parent Id', 0, 1, 1, 1, 1, 1, '{}', 4),
(72, 16, 'descripttion', 'text', 'Descripttion', 0, 1, 1, 1, 1, 1, '{}', 5),
(73, 16, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, '{}', 6),
(74, 16, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 7),
(75, 17, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(76, 17, 'name', 'text', 'Tên', 0, 1, 1, 1, 1, 1, '{}', 2),
(77, 17, 'avartar', 'image', 'Hình ảnh', 0, 1, 1, 1, 1, 1, '{}', 3),
(78, 17, 'content', 'text', 'Content', 0, 1, 1, 1, 1, 1, '{}', 7),
(79, 17, 'genre_id', 'text', 'Genre Id', 0, 1, 1, 1, 1, 1, '{}', 8),
(80, 17, 'author_id', 'text', 'Author Id', 0, 1, 1, 1, 1, 1, '{}', 9),
(81, 17, 'publisher_id', 'text', 'Publisher Id', 0, 1, 1, 1, 1, 1, '{}', 10),
(82, 17, 'borrow_the_most', 'text', 'Borrow The Most', 0, 1, 1, 1, 1, 1, '{}', 11),
(83, 17, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, '{}', 12),
(84, 17, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 13),
(85, 18, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(86, 18, 'bookname_id', 'text', 'Bookname Id', 0, 1, 1, 1, 1, 1, '{}', 4),
(87, 18, 'library_id', 'text', 'Library Id', 0, 1, 1, 1, 1, 1, '{}', 5),
(88, 18, 'Quantity', 'text', 'Giá tiền', 0, 1, 1, 1, 1, 1, '{}', 6),
(89, 18, 'created_at', 'timestamp', 'Created At', 0, 1, 0, 0, 0, 0, '{}', 7),
(90, 18, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 8),
(91, 19, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(92, 19, 'code', 'text', 'Code', 0, 1, 1, 1, 1, 1, '{}', 2),
(93, 19, 'customer_id', 'text', 'Customer Id', 0, 1, 1, 1, 1, 1, '{}', 3),
(94, 19, 'staff_id', 'text', 'Staff Id', 0, 1, 1, 1, 1, 1, '{}', 4),
(95, 19, 'note', 'text', 'Note', 0, 1, 1, 1, 1, 1, '{}', 5),
(96, 19, 'book_id', 'text', 'Book Id', 0, 1, 1, 1, 1, 1, '{}', 6),
(97, 19, 'Quantity', 'text', 'Quantity', 0, 1, 1, 1, 1, 1, '{}', 7),
(98, 19, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 8),
(99, 19, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 9),
(100, 20, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(101, 20, 'customer_id', 'text', 'Customer Id', 0, 1, 1, 1, 1, 1, '{}', 2),
(102, 20, 'content', 'text', 'Content', 0, 1, 1, 1, 1, 1, '{}', 3),
(103, 20, 'book_id', 'text', 'Book Id', 0, 1, 1, 1, 1, 1, '{}', 4),
(104, 20, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 5),
(105, 20, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 6),
(106, 23, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(107, 23, 'customer_d', 'text', 'Customer D', 0, 1, 1, 1, 1, 1, '{}', 2),
(108, 23, 'content', 'text', 'Content', 0, 1, 1, 1, 1, 1, '{}', 3),
(109, 23, 'library_id', 'text', 'Library Id', 0, 1, 1, 1, 1, 1, '{}', 4),
(110, 23, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 5),
(111, 23, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 6),
(112, 8, 'staff_hasone_user_relationship', 'relationship', 'Tên nhân viên', 0, 1, 1, 1, 1, 1, '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\User\",\"table\":\"users\",\"type\":\"belongsTo\",\"column\":\"user_id\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"authors\",\"pivot\":\"0\",\"taggable\":\"0\"}', 3),
(113, 8, 'staff_belongsto_library_relationship', 'relationship', 'Tên thư viện', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\Library\",\"table\":\"libraries\",\"type\":\"belongsTo\",\"column\":\"library_id\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"authors\",\"pivot\":\"0\",\"taggable\":\"0\"}', 4),
(114, 13, 'author_belongsto_genre_relationship', 'relationship', 'Thể loại', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\Genre\",\"table\":\"genres\",\"type\":\"belongsTo\",\"column\":\"genre\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"authors\",\"pivot\":\"0\",\"taggable\":\"0\"}', 4),
(115, 17, 'bookname_belongsto_genre_relationship', 'relationship', 'Thể loại', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\Genre\",\"table\":\"genres\",\"type\":\"belongsTo\",\"column\":\"genre_id\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"authors\",\"pivot\":\"0\",\"taggable\":\"0\"}', 5),
(116, 17, 'bookname_belongsto_publisher_relationship', 'relationship', 'Nhà xuất bản', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\Publisher\",\"table\":\"publishers\",\"type\":\"belongsTo\",\"column\":\"publisher_id\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"authors\",\"pivot\":\"0\",\"taggable\":\"0\"}', 6),
(117, 17, 'bookname_belongsto_author_relationship', 'relationship', 'Tác giả', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\Author\",\"table\":\"authors\",\"type\":\"belongsTo\",\"column\":\"author_id\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"authors\",\"pivot\":\"0\",\"taggable\":\"0\"}', 4),
(118, 18, 'book_belongsto_bookname_relationship', 'relationship', 'Tên sách', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\Bookname\",\"table\":\"booknames\",\"type\":\"belongsTo\",\"column\":\"bookname_id\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"authors\",\"pivot\":\"0\",\"taggable\":\"0\"}', 2),
(119, 18, 'book_belongsto_library_relationship', 'relationship', 'Thư viện', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\Library\",\"table\":\"libraries\",\"type\":\"belongsTo\",\"column\":\"library_id\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"authors\",\"pivot\":\"0\",\"taggable\":\"0\"}', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `data_types`
--

CREATE TABLE `data_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_singular` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_plural` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `policy_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `controller` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `generate_permissions` tinyint(1) NOT NULL DEFAULT 0,
  `server_side` tinyint(4) NOT NULL DEFAULT 0,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `data_types`
--

INSERT INTO `data_types` (`id`, `name`, `slug`, `display_name_singular`, `display_name_plural`, `icon`, `model_name`, `policy_name`, `controller`, `description`, `generate_permissions`, `server_side`, `details`, `created_at`, `updated_at`) VALUES
(1, 'users', 'users', 'Tài khoản', 'Tài khoản', 'voyager-person', 'TCG\\Voyager\\Models\\User', 'TCG\\Voyager\\Policies\\UserPolicy', 'TCG\\Voyager\\Http\\Controllers\\VoyagerUserController', 'Tài khoản', 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"desc\",\"default_search_key\":null,\"scope\":null}', '2021-06-27 00:58:41', '2021-07-02 05:46:59'),
(2, 'menus', 'menus', 'Menu', 'Menus', 'voyager-list', 'TCG\\Voyager\\Models\\Menu', NULL, '', '', 1, 0, NULL, '2021-06-27 00:58:41', '2021-06-27 00:58:41'),
(3, 'roles', 'roles', 'Phân Quyền', 'Phân Quyền', 'voyager-lock', 'TCG\\Voyager\\Models\\Role', NULL, 'TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController', NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"desc\",\"default_search_key\":null,\"scope\":null}', '2021-06-27 00:58:41', '2021-06-27 01:43:53'),
(5, 'librarys', 'librarys', 'Library', 'Libraries', NULL, 'App\\Library', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}', '2021-07-01 23:36:12', '2021-07-01 23:36:12'),
(6, 'libraries', 'libraries', 'Thư viện', 'Thư viện', NULL, 'App\\Library', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2021-07-01 23:37:55', '2021-07-03 00:07:57'),
(7, 'staffs', 'staffs', 'Nhân viên', 'Nhân viên', NULL, 'App\\Staff', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}', '2021-07-01 23:42:41', '2021-07-01 23:42:41'),
(8, 'staff', 'staff', 'Nhân viên', 'Nhân viên', 'voyager-people', 'App\\Staff', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2021-07-01 23:43:58', '2021-07-02 06:26:25'),
(9, 'publisher', 'publisher', 'Nhà xuất bản', 'Nhà xuất bản', 'voyager-company', 'App\\Publisher', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}', '2021-07-01 23:47:04', '2021-07-01 23:47:04'),
(10, 'publishers', 'publishers', 'Nhà xuất bản', 'Nhà xuất bản', 'voyager-company', 'App\\Publisher', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2021-07-01 23:47:56', '2021-07-02 07:23:42'),
(12, 'author', 'author', 'Author', 'Authors', NULL, 'App\\Author', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}', '2021-07-02 00:00:22', '2021-07-02 00:00:22'),
(13, 'authors', 'authors', 'Tác giả', 'Tác giả', NULL, 'App\\Author', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2021-07-02 00:01:00', '2021-07-02 07:24:32'),
(15, 'genre', 'genre', 'Thể loại', 'Thể loại', NULL, 'App\\Genre', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}', '2021-07-02 00:12:36', '2021-07-02 00:12:36'),
(16, 'genres', 'genres', 'Thể loại', 'Thể loại', 'voyager-categories', 'App\\Genre', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2021-07-02 00:13:24', '2021-07-02 07:24:20'),
(17, 'booknames', 'booknames', 'Tên Sách', 'Tên Sách', 'voyager-logbook', 'App\\Bookname', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2021-07-02 00:18:14', '2021-07-02 06:53:26'),
(18, 'books', 'books', 'Sách', 'Sách', NULL, 'App\\Book', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2021-07-02 00:22:02', '2021-07-02 07:26:10'),
(19, 'requestloans', 'requestloans', 'Yêu cầu cho mượn', 'Yêu cầu cho mượn', NULL, 'App\\Requestloan', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2021-07-02 00:25:33', '2021-07-02 00:42:24'),
(20, 'reviewbooks', 'reviewbooks', 'Nhận xét sách', 'Nhận xét sách', NULL, 'App\\Reviewbook', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2021-07-02 00:26:57', '2021-07-02 00:41:21'),
(21, 'reviewlibraries', 'reviewlibraries', 'Reviewlibrary', 'Reviewlibraries', NULL, 'App\\Reviewlibrary', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}', '2021-07-02 00:28:31', '2021-07-02 00:28:31'),
(23, 'reviewslibraries', 'reviewslibraries', 'Nhận xét thư viện', 'Nhận xét thư viện', NULL, 'App\\Reviewslibrary', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2021-07-02 00:31:39', '2021-07-02 00:41:08');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
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
-- Cấu trúc bảng cho bảng `genres`
--

CREATE TABLE `genres` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `descripttion` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `genres`
--

INSERT INTO `genres` (`id`, `name`, `icon`, `parent_id`, `descripttion`, `created_at`, `updated_at`) VALUES
(1, 'Sách giáo khoa', NULL, NULL, 'Nhà xuất bản bộ giáo dục và đào tạo', '2021-07-02 06:33:06', '2021-07-02 06:33:06'),
(2, 'Truyện Doraemon', NULL, NULL, NULL, '2021-07-02 06:33:00', '2021-07-02 06:52:16');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `libraries`
--

CREATE TABLE `libraries` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `open_time` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `feautured_image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gallery` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `addresss` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `full_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `map_location` int(11) DEFAULT NULL,
  `ward_id` int(11) DEFAULT NULL,
  `district_id` int(11) DEFAULT NULL,
  `citi_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `libraries`
--

INSERT INTO `libraries` (`id`, `name`, `content`, `open_time`, `feautured_image`, `gallery`, `phone_number`, `email`, `addresss`, `full_name`, `map_location`, `ward_id`, `district_id`, `citi_id`, `created_at`, `updated_at`) VALUES
(1, 'Thư viện Trí Cẩm Lệ nè', 'libraries\\July2021\\cRSCbs59FDphWHsbdE1y.jpg', '7h-9h', 'sad', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-07-02 06:23:00', '2021-07-03 00:08:11'),
(2, 'Thư viện Trí', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-07-03 00:04:43', '2021-07-03 00:04:43');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `menus`
--

CREATE TABLE `menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `menus`
--

INSERT INTO `menus` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2021-06-27 00:58:41', '2021-06-27 00:58:41');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `menu_items`
--

CREATE TABLE `menu_items` (
  `id` int(10) UNSIGNED NOT NULL,
  `menu_id` int(10) UNSIGNED DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `target` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '_self',
  `icon_class` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `order` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `route` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parameters` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `menu_items`
--

INSERT INTO `menu_items` (`id`, `menu_id`, `title`, `url`, `target`, `icon_class`, `color`, `parent_id`, `order`, `created_at`, `updated_at`, `route`, `parameters`) VALUES
(1, 1, 'Bảng điều khiển', '', '_self', 'voyager-boat', '#000000', NULL, 1, '2021-06-27 00:58:41', '2021-06-27 01:39:19', 'voyager.dashboard', 'null'),
(2, 1, 'Media', '', '_self', 'voyager-images', NULL, NULL, 9, '2021-06-27 00:58:41', '2021-07-02 07:42:17', 'voyager.media.index', NULL),
(3, 1, 'Tài khoản', '', '_self', 'voyager-person', '#000000', 21, 2, '2021-06-27 00:58:41', '2021-07-02 06:35:03', 'voyager.users.index', NULL),
(4, 1, 'Phân quyền', '', '_self', 'voyager-lock', '#000000', 21, 3, '2021-06-27 00:58:41', '2021-07-02 06:35:03', 'voyager.roles.index', 'null'),
(5, 1, 'Cài đặt', '', '_self', 'voyager-tools', '#000000', NULL, 10, '2021-06-27 00:58:41', '2021-07-02 07:42:17', NULL, ''),
(6, 1, 'Đường dẫn', '', '_self', 'voyager-list', '#000000', 5, 1, '2021-06-27 00:58:41', '2021-07-02 00:44:12', 'voyager.menus.index', 'null'),
(7, 1, 'Database', '', '_self', 'voyager-data', NULL, 5, 2, '2021-06-27 00:58:41', '2021-07-01 23:38:19', 'voyager.database.index', NULL),
(8, 1, 'Compass', '', '_self', 'voyager-compass', NULL, 5, 3, '2021-06-27 00:58:41', '2021-07-01 23:38:19', 'voyager.compass.index', NULL),
(9, 1, 'BREAD', '', '_self', 'voyager-bread', NULL, 5, 4, '2021-06-27 00:58:41', '2021-07-01 23:38:19', 'voyager.bread.index', NULL),
(10, 1, 'Thiết lập', '', '_self', 'voyager-settings', '#000000', NULL, 11, '2021-06-27 00:58:41', '2021-07-02 07:42:17', 'voyager.settings.index', 'null'),
(11, 1, 'Hooks', '', '_self', 'voyager-hook', NULL, 5, 5, '2021-06-27 00:58:41', '2021-07-01 23:38:19', 'voyager.hooks', NULL),
(14, 1, 'Quản lý thư viện', '', '_self', 'voyager-book', '#000000', NULL, 5, '2021-07-01 23:37:55', '2021-07-02 07:44:07', 'voyager.libraries.index', 'null'),
(16, 1, 'Nhân viên', '', '_self', 'voyager-people', NULL, 21, 1, '2021-07-01 23:43:58', '2021-07-02 06:35:03', 'voyager.staff.index', NULL),
(18, 1, 'Nhà xuất bản', '', '_self', 'voyager-company', '#000000', 22, 4, '2021-07-01 23:47:56', '2021-07-02 06:35:03', 'voyager.publishers.index', 'null'),
(20, 1, 'Tác giả', '', '_self', 'voyager-people', '#000000', 22, 3, '2021-07-02 00:01:00', '2021-07-02 06:35:03', 'voyager.authors.index', 'null'),
(22, 1, 'Quản lý sách', '', '_self', 'voyager-logbook', '#000000', NULL, 6, '2021-07-02 00:07:52', '2021-07-02 07:44:07', NULL, ''),
(24, 1, 'Thể loại', '', '_self', 'voyager-categories', NULL, 22, 5, '2021-07-02 00:13:24', '2021-07-02 06:35:03', 'voyager.genres.index', NULL),
(25, 1, 'Tên Sách', '', '_self', 'voyager-logbook', '#000000', 22, 2, '2021-07-02 00:18:14', '2021-07-02 00:22:29', 'voyager.booknames.index', 'null'),
(26, 1, 'Sách', '', '_self', 'voyager-bookmark', '#000000', 22, 1, '2021-07-02 00:22:02', '2021-07-02 00:23:02', 'voyager.books.index', 'null'),
(27, 1, 'Yêu cầu cho mượn', '', '_self', 'voyager-resize-small', '#000000', 32, 1, '2021-07-02 00:25:33', '2021-07-02 00:42:08', 'voyager.requestloans.index', 'null'),
(28, 1, 'Sách', '', '_self', 'voyager-logbook', '#000000', 31, 1, '2021-07-02 00:26:57', '2021-07-02 00:39:13', 'voyager.reviewbooks.index', 'null'),
(30, 1, 'Thư viện', '', '_self', 'voyager-wallet', '#000000', 31, 2, '2021-07-02 00:31:39', '2021-07-02 00:40:09', 'voyager.reviewslibraries.index', 'null'),
(31, 1, 'Quản lý nhận xét', '', '_self', 'voyager-smile', '#000000', NULL, 8, '2021-07-02 00:33:20', '2021-07-02 07:43:14', NULL, ''),
(32, 1, 'Quản lý yêu cầu', '', '_self', 'voyager-chat', '#000000', NULL, 7, '2021-07-02 00:37:12', '2021-07-02 07:43:55', NULL, ''),
(33, 1, 'Quản lý tài khoản', '', '_self', 'voyager-person', '#000000', NULL, 2, '2021-07-02 07:38:03', '2021-07-02 07:38:16', 'voyager.users.index', NULL),
(34, 1, 'Quản lý nhân viên', '', '_self', 'voyager-people', '#000000', NULL, 3, '2021-07-02 07:39:19', '2021-07-02 07:39:30', 'voyager.staff.index', NULL),
(35, 1, 'Quản lý phân quyền', '', '_self', 'voyager-lock', '#000000', NULL, 4, '2021-07-02 07:41:59', '2021-07-02 07:42:25', 'voyager.roles.index', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2016_01_01_000000_add_voyager_user_fields', 1),
(4, '2016_01_01_000000_create_data_types_table', 1),
(5, '2016_05_19_173453_create_menu_table', 1),
(6, '2016_10_21_190000_create_roles_table', 1),
(7, '2016_10_21_190000_create_settings_table', 1),
(8, '2016_11_30_135954_create_permission_table', 1),
(9, '2016_11_30_141208_create_permission_role_table', 1),
(10, '2016_12_26_201236_data_types__add__server_side', 1),
(11, '2017_01_13_000000_add_route_to_menu_items_table', 1),
(12, '2017_01_14_005015_create_translations_table', 1),
(13, '2017_01_15_000000_make_table_name_nullable_in_permissions_table', 1),
(14, '2017_03_06_000000_add_controller_to_data_types_table', 1),
(15, '2017_04_21_000000_add_order_to_data_rows_table', 1),
(16, '2017_07_05_210000_add_policyname_to_data_types_table', 1),
(17, '2017_08_05_000000_add_group_to_settings_table', 1),
(18, '2017_11_26_013050_add_user_role_relationship', 1),
(19, '2017_11_26_015000_create_user_roles_table', 1),
(20, '2018_03_11_000000_add_user_settings', 1),
(21, '2018_03_14_000000_add_details_to_data_types_table', 1),
(22, '2018_03_16_000000_make_settings_value_nullable', 1),
(23, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `table_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `permissions`
--

INSERT INTO `permissions` (`id`, `key`, `table_name`, `created_at`, `updated_at`) VALUES
(1, 'browse_admin', NULL, '2021-06-27 00:58:41', '2021-06-27 00:58:41'),
(2, 'browse_bread', NULL, '2021-06-27 00:58:41', '2021-06-27 00:58:41'),
(3, 'browse_database', NULL, '2021-06-27 00:58:41', '2021-06-27 00:58:41'),
(4, 'browse_media', NULL, '2021-06-27 00:58:41', '2021-06-27 00:58:41'),
(5, 'browse_compass', NULL, '2021-06-27 00:58:41', '2021-06-27 00:58:41'),
(6, 'browse_menus', 'menus', '2021-06-27 00:58:41', '2021-06-27 00:58:41'),
(7, 'read_menus', 'menus', '2021-06-27 00:58:41', '2021-06-27 00:58:41'),
(8, 'edit_menus', 'menus', '2021-06-27 00:58:41', '2021-06-27 00:58:41'),
(9, 'add_menus', 'menus', '2021-06-27 00:58:41', '2021-06-27 00:58:41'),
(10, 'delete_menus', 'menus', '2021-06-27 00:58:41', '2021-06-27 00:58:41'),
(11, 'browse_roles', 'roles', '2021-06-27 00:58:41', '2021-06-27 00:58:41'),
(12, 'read_roles', 'roles', '2021-06-27 00:58:41', '2021-06-27 00:58:41'),
(13, 'edit_roles', 'roles', '2021-06-27 00:58:41', '2021-06-27 00:58:41'),
(14, 'add_roles', 'roles', '2021-06-27 00:58:41', '2021-06-27 00:58:41'),
(15, 'delete_roles', 'roles', '2021-06-27 00:58:41', '2021-06-27 00:58:41'),
(16, 'browse_users', 'users', '2021-06-27 00:58:41', '2021-06-27 00:58:41'),
(17, 'read_users', 'users', '2021-06-27 00:58:41', '2021-06-27 00:58:41'),
(18, 'edit_users', 'users', '2021-06-27 00:58:41', '2021-06-27 00:58:41'),
(19, 'add_users', 'users', '2021-06-27 00:58:41', '2021-06-27 00:58:41'),
(20, 'delete_users', 'users', '2021-06-27 00:58:41', '2021-06-27 00:58:41'),
(21, 'browse_settings', 'settings', '2021-06-27 00:58:41', '2021-06-27 00:58:41'),
(22, 'read_settings', 'settings', '2021-06-27 00:58:41', '2021-06-27 00:58:41'),
(23, 'edit_settings', 'settings', '2021-06-27 00:58:41', '2021-06-27 00:58:41'),
(24, 'add_settings', 'settings', '2021-06-27 00:58:41', '2021-06-27 00:58:41'),
(25, 'delete_settings', 'settings', '2021-06-27 00:58:41', '2021-06-27 00:58:41'),
(26, 'browse_hooks', NULL, '2021-06-27 00:58:41', '2021-06-27 00:58:41'),
(32, 'browse_librarys', 'librarys', '2021-07-01 23:36:12', '2021-07-01 23:36:12'),
(33, 'read_librarys', 'librarys', '2021-07-01 23:36:12', '2021-07-01 23:36:12'),
(34, 'edit_librarys', 'librarys', '2021-07-01 23:36:12', '2021-07-01 23:36:12'),
(35, 'add_librarys', 'librarys', '2021-07-01 23:36:12', '2021-07-01 23:36:12'),
(36, 'delete_librarys', 'librarys', '2021-07-01 23:36:12', '2021-07-01 23:36:12'),
(37, 'browse_libraries', 'libraries', '2021-07-01 23:37:55', '2021-07-01 23:37:55'),
(38, 'read_libraries', 'libraries', '2021-07-01 23:37:55', '2021-07-01 23:37:55'),
(39, 'edit_libraries', 'libraries', '2021-07-01 23:37:55', '2021-07-01 23:37:55'),
(40, 'add_libraries', 'libraries', '2021-07-01 23:37:55', '2021-07-01 23:37:55'),
(41, 'delete_libraries', 'libraries', '2021-07-01 23:37:55', '2021-07-01 23:37:55'),
(42, 'browse_staffs', 'staffs', '2021-07-01 23:42:41', '2021-07-01 23:42:41'),
(43, 'read_staffs', 'staffs', '2021-07-01 23:42:41', '2021-07-01 23:42:41'),
(44, 'edit_staffs', 'staffs', '2021-07-01 23:42:41', '2021-07-01 23:42:41'),
(45, 'add_staffs', 'staffs', '2021-07-01 23:42:41', '2021-07-01 23:42:41'),
(46, 'delete_staffs', 'staffs', '2021-07-01 23:42:41', '2021-07-01 23:42:41'),
(47, 'browse_staff', 'staff', '2021-07-01 23:43:58', '2021-07-01 23:43:58'),
(48, 'read_staff', 'staff', '2021-07-01 23:43:58', '2021-07-01 23:43:58'),
(49, 'edit_staff', 'staff', '2021-07-01 23:43:58', '2021-07-01 23:43:58'),
(50, 'add_staff', 'staff', '2021-07-01 23:43:58', '2021-07-01 23:43:58'),
(51, 'delete_staff', 'staff', '2021-07-01 23:43:58', '2021-07-01 23:43:58'),
(52, 'browse_publisher', 'publisher', '2021-07-01 23:47:04', '2021-07-01 23:47:04'),
(53, 'read_publisher', 'publisher', '2021-07-01 23:47:04', '2021-07-01 23:47:04'),
(54, 'edit_publisher', 'publisher', '2021-07-01 23:47:05', '2021-07-01 23:47:05'),
(55, 'add_publisher', 'publisher', '2021-07-01 23:47:05', '2021-07-01 23:47:05'),
(56, 'delete_publisher', 'publisher', '2021-07-01 23:47:05', '2021-07-01 23:47:05'),
(57, 'browse_publishers', 'publishers', '2021-07-01 23:47:56', '2021-07-01 23:47:56'),
(58, 'read_publishers', 'publishers', '2021-07-01 23:47:56', '2021-07-01 23:47:56'),
(59, 'edit_publishers', 'publishers', '2021-07-01 23:47:56', '2021-07-01 23:47:56'),
(60, 'add_publishers', 'publishers', '2021-07-01 23:47:56', '2021-07-01 23:47:56'),
(61, 'delete_publishers', 'publishers', '2021-07-01 23:47:56', '2021-07-01 23:47:56'),
(62, 'browse_author', 'author', '2021-07-02 00:00:22', '2021-07-02 00:00:22'),
(63, 'read_author', 'author', '2021-07-02 00:00:22', '2021-07-02 00:00:22'),
(64, 'edit_author', 'author', '2021-07-02 00:00:22', '2021-07-02 00:00:22'),
(65, 'add_author', 'author', '2021-07-02 00:00:22', '2021-07-02 00:00:22'),
(66, 'delete_author', 'author', '2021-07-02 00:00:22', '2021-07-02 00:00:22'),
(67, 'browse_authors', 'authors', '2021-07-02 00:01:00', '2021-07-02 00:01:00'),
(68, 'read_authors', 'authors', '2021-07-02 00:01:00', '2021-07-02 00:01:00'),
(69, 'edit_authors', 'authors', '2021-07-02 00:01:00', '2021-07-02 00:01:00'),
(70, 'add_authors', 'authors', '2021-07-02 00:01:00', '2021-07-02 00:01:00'),
(71, 'delete_authors', 'authors', '2021-07-02 00:01:00', '2021-07-02 00:01:00'),
(72, 'browse_genre', 'genre', '2021-07-02 00:12:37', '2021-07-02 00:12:37'),
(73, 'read_genre', 'genre', '2021-07-02 00:12:37', '2021-07-02 00:12:37'),
(74, 'edit_genre', 'genre', '2021-07-02 00:12:37', '2021-07-02 00:12:37'),
(75, 'add_genre', 'genre', '2021-07-02 00:12:37', '2021-07-02 00:12:37'),
(76, 'delete_genre', 'genre', '2021-07-02 00:12:37', '2021-07-02 00:12:37'),
(77, 'browse_genres', 'genres', '2021-07-02 00:13:24', '2021-07-02 00:13:24'),
(78, 'read_genres', 'genres', '2021-07-02 00:13:24', '2021-07-02 00:13:24'),
(79, 'edit_genres', 'genres', '2021-07-02 00:13:24', '2021-07-02 00:13:24'),
(80, 'add_genres', 'genres', '2021-07-02 00:13:24', '2021-07-02 00:13:24'),
(81, 'delete_genres', 'genres', '2021-07-02 00:13:24', '2021-07-02 00:13:24'),
(82, 'browse_booknames', 'booknames', '2021-07-02 00:18:14', '2021-07-02 00:18:14'),
(83, 'read_booknames', 'booknames', '2021-07-02 00:18:14', '2021-07-02 00:18:14'),
(84, 'edit_booknames', 'booknames', '2021-07-02 00:18:14', '2021-07-02 00:18:14'),
(85, 'add_booknames', 'booknames', '2021-07-02 00:18:14', '2021-07-02 00:18:14'),
(86, 'delete_booknames', 'booknames', '2021-07-02 00:18:14', '2021-07-02 00:18:14'),
(87, 'browse_books', 'books', '2021-07-02 00:22:02', '2021-07-02 00:22:02'),
(88, 'read_books', 'books', '2021-07-02 00:22:02', '2021-07-02 00:22:02'),
(89, 'edit_books', 'books', '2021-07-02 00:22:02', '2021-07-02 00:22:02'),
(90, 'add_books', 'books', '2021-07-02 00:22:02', '2021-07-02 00:22:02'),
(91, 'delete_books', 'books', '2021-07-02 00:22:02', '2021-07-02 00:22:02'),
(92, 'browse_requestloans', 'requestloans', '2021-07-02 00:25:33', '2021-07-02 00:25:33'),
(93, 'read_requestloans', 'requestloans', '2021-07-02 00:25:33', '2021-07-02 00:25:33'),
(94, 'edit_requestloans', 'requestloans', '2021-07-02 00:25:33', '2021-07-02 00:25:33'),
(95, 'add_requestloans', 'requestloans', '2021-07-02 00:25:33', '2021-07-02 00:25:33'),
(96, 'delete_requestloans', 'requestloans', '2021-07-02 00:25:33', '2021-07-02 00:25:33'),
(97, 'browse_reviewbooks', 'reviewbooks', '2021-07-02 00:26:57', '2021-07-02 00:26:57'),
(98, 'read_reviewbooks', 'reviewbooks', '2021-07-02 00:26:57', '2021-07-02 00:26:57'),
(99, 'edit_reviewbooks', 'reviewbooks', '2021-07-02 00:26:57', '2021-07-02 00:26:57'),
(100, 'add_reviewbooks', 'reviewbooks', '2021-07-02 00:26:57', '2021-07-02 00:26:57'),
(101, 'delete_reviewbooks', 'reviewbooks', '2021-07-02 00:26:57', '2021-07-02 00:26:57'),
(102, 'browse_reviewlibraries', 'reviewlibraries', '2021-07-02 00:28:31', '2021-07-02 00:28:31'),
(103, 'read_reviewlibraries', 'reviewlibraries', '2021-07-02 00:28:31', '2021-07-02 00:28:31'),
(104, 'edit_reviewlibraries', 'reviewlibraries', '2021-07-02 00:28:31', '2021-07-02 00:28:31'),
(105, 'add_reviewlibraries', 'reviewlibraries', '2021-07-02 00:28:31', '2021-07-02 00:28:31'),
(106, 'delete_reviewlibraries', 'reviewlibraries', '2021-07-02 00:28:31', '2021-07-02 00:28:31'),
(107, 'browse_reviewslibraries', 'reviewslibraries', '2021-07-02 00:31:39', '2021-07-02 00:31:39'),
(108, 'read_reviewslibraries', 'reviewslibraries', '2021-07-02 00:31:39', '2021-07-02 00:31:39'),
(109, 'edit_reviewslibraries', 'reviewslibraries', '2021-07-02 00:31:39', '2021-07-02 00:31:39'),
(110, 'add_reviewslibraries', 'reviewslibraries', '2021-07-02 00:31:39', '2021-07-02 00:31:39'),
(111, 'delete_reviewslibraries', 'reviewslibraries', '2021-07-02 00:31:39', '2021-07-02 00:31:39');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1, 1),
(1, 3),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(32, 1),
(33, 1),
(34, 1),
(35, 1),
(36, 1),
(37, 1),
(38, 1),
(39, 1),
(40, 1),
(41, 1),
(42, 1),
(43, 1),
(44, 1),
(45, 1),
(46, 1),
(47, 1),
(48, 1),
(49, 1),
(50, 1),
(51, 1),
(52, 1),
(52, 3),
(53, 1),
(53, 3),
(54, 1),
(54, 3),
(55, 1),
(55, 3),
(56, 1),
(56, 3),
(57, 1),
(57, 3),
(58, 1),
(58, 3),
(59, 1),
(59, 3),
(60, 1),
(60, 3),
(61, 1),
(61, 3),
(62, 1),
(62, 3),
(63, 1),
(63, 3),
(64, 1),
(64, 3),
(65, 1),
(65, 3),
(66, 1),
(66, 3),
(67, 1),
(67, 3),
(68, 1),
(68, 3),
(69, 1),
(69, 3),
(70, 1),
(70, 3),
(71, 1),
(71, 3),
(72, 1),
(72, 3),
(73, 1),
(73, 3),
(74, 1),
(74, 3),
(75, 1),
(75, 3),
(76, 1),
(76, 3),
(77, 1),
(77, 3),
(78, 1),
(78, 3),
(79, 1),
(79, 3),
(80, 1),
(80, 3),
(81, 1),
(81, 3),
(82, 1),
(82, 3),
(83, 1),
(83, 3),
(84, 1),
(84, 3),
(85, 1),
(85, 3),
(86, 1),
(86, 3),
(87, 1),
(87, 3),
(88, 1),
(88, 3),
(89, 1),
(89, 3),
(90, 1),
(90, 3),
(91, 1),
(91, 3),
(92, 1),
(92, 3),
(93, 1),
(93, 3),
(94, 1),
(94, 3),
(95, 1),
(95, 3),
(96, 1),
(96, 3),
(97, 1),
(97, 3),
(98, 1),
(98, 3),
(99, 1),
(99, 3),
(100, 1),
(100, 3),
(101, 1),
(101, 3),
(102, 1),
(102, 3),
(103, 1),
(103, 3),
(104, 1),
(104, 3),
(105, 1),
(105, 3),
(106, 1),
(106, 3),
(107, 1),
(107, 3),
(108, 1),
(108, 3),
(109, 1),
(109, 3),
(110, 1),
(110, 3),
(111, 1),
(111, 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `publishers`
--

CREATE TABLE `publishers` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `publishers`
--

INSERT INTO `publishers` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Bộ giáo dục và đào tạo', NULL, '2021-07-02 06:33:42', '2021-07-02 06:33:42'),
(2, 'Nguyễn Huyền Trí', NULL, '2021-07-02 06:33:00', '2021-07-02 06:52:46');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `requestloans`
--

CREATE TABLE `requestloans` (
  `id` int(10) UNSIGNED NOT NULL,
  `code` int(11) DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `staff_id` int(11) DEFAULT NULL,
  `note` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `book_id` int(11) DEFAULT NULL,
  `Quantity` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `reviewbooks`
--

CREATE TABLE `reviewbooks` (
  `id` int(10) UNSIGNED NOT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `book_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `reviewslibraries`
--

CREATE TABLE `reviewslibraries` (
  `id` int(10) UNSIGNED NOT NULL,
  `customer_d` int(11) DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `library_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Admin', '2021-06-27 00:58:41', '2021-07-02 05:48:32'),
(2, 'user', 'Author', '2021-06-27 00:58:41', '2021-07-02 05:48:45'),
(3, 'staff', 'Staff', '2021-07-02 05:24:34', '2021-07-02 05:48:21');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(11) NOT NULL DEFAULT 1,
  `group` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `settings`
--

INSERT INTO `settings` (`id`, `key`, `display_name`, `value`, `details`, `type`, `order`, `group`) VALUES
(1, 'site.title', 'Site Title', 'Book Banks', '', 'text', 1, 'Site'),
(2, 'site.description', 'Site Description', 'Site Description', '', 'text', 2, 'Site'),
(3, 'site.logo', 'Site Logo', '', '', 'image', 3, 'Site'),
(4, 'site.google_analytics_tracking_id', 'Google Analytics Tracking ID', NULL, '', 'text', 4, 'Site'),
(5, 'admin.bg_image', 'Admin Background Image', 'settings\\June2021\\K7xlvmGwkATDI0cO2Y4b.jpg', '', 'image', 5, 'Admin'),
(6, 'admin.title', 'Admin Title', 'Book Banks', '', 'text', 1, 'Admin'),
(7, 'admin.description', 'Admin Description', 'Chào mừng bạn đến Admin BookBanks By Team FixBug', '', 'text', 2, 'Admin'),
(8, 'admin.loader', 'Admin Loader', 'settings\\June2021\\52eiwUCOQHqtbjozBlCD.png', '', 'image', 3, 'Admin'),
(9, 'admin.icon_image', 'Admin Icon Image', 'settings\\June2021\\mz4BVeckwukf6Y0yD5Db.png', '', 'image', 4, 'Admin');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `staff`
--

CREATE TABLE `staff` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `library_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `staff`
--

INSERT INTO `staff` (`id`, `user_id`, `library_id`, `created_at`, `updated_at`) VALUES
(1, 4, 1, '2021-07-02 05:41:00', '2021-07-02 06:26:31');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `translations`
--

CREATE TABLE `translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `table_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `column_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foreign_key` int(10) UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'users/default.png',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `settings` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `date_of_birth` datetime DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `citi_id` int(11) DEFAULT NULL,
  `district_id` int(11) DEFAULT NULL,
  `ward_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `email`, `avatar`, `email_verified_at`, `password`, `remember_token`, `settings`, `created_at`, `updated_at`, `date_of_birth`, `address`, `phone_number`, `citi_id`, `district_id`, `ward_id`) VALUES
(3, 1, 'Team Fixbug', 'fixbug@team.com', 'users/default.png', NULL, '$2y$10$C9jskd4BvY0kAXX.WbdF4.SPcPQtH6DDZ/4bt07y/E7dEXo5WJR2m', 'Oqm1vKsN2sRPMN5ofqTMuzmanDS7QoZzOoAelfCTiOFdeCc500v6JX0t58CO', '{\"locale\":\"vi\"}', '2021-06-27 01:06:54', '2021-06-27 02:00:13', NULL, NULL, NULL, NULL, NULL, NULL),
(4, 3, 'Nhân viên Huyền Trí', 'tri@gmail.com', 'users/default.png', NULL, '$2y$10$G5ErgJ1/9MJD0sN64XAne.LOelIUqAl5yoTAAm35MGQ6YMlO8vYZy', NULL, '{\"locale\":\"vi\"}', '2021-07-02 05:25:48', '2021-07-02 05:44:52', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user_roles`
--

CREATE TABLE `user_roles` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user_roles`
--

INSERT INTO `user_roles` (`user_id`, `role_id`) VALUES
(3, 1),
(3, 2),
(4, 2),
(4, 3);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `booknames`
--
ALTER TABLE `booknames`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `data_rows`
--
ALTER TABLE `data_rows`
  ADD PRIMARY KEY (`id`),
  ADD KEY `data_rows_data_type_id_foreign` (`data_type_id`);

--
-- Chỉ mục cho bảng `data_types`
--
ALTER TABLE `data_types`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `data_types_name_unique` (`name`),
  ADD UNIQUE KEY `data_types_slug_unique` (`slug`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `genres`
--
ALTER TABLE `genres`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `libraries`
--
ALTER TABLE `libraries`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `menus_name_unique` (`name`);

--
-- Chỉ mục cho bảng `menu_items`
--
ALTER TABLE `menu_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menu_items_menu_id_foreign` (`menu_id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permissions_key_index` (`key`);

--
-- Chỉ mục cho bảng `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_permission_id_index` (`permission_id`),
  ADD KEY `permission_role_role_id_index` (`role_id`);

--
-- Chỉ mục cho bảng `publishers`
--
ALTER TABLE `publishers`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `requestloans`
--
ALTER TABLE `requestloans`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `reviewbooks`
--
ALTER TABLE `reviewbooks`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `reviewslibraries`
--
ALTER TABLE `reviewslibraries`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Chỉ mục cho bảng `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `settings_key_unique` (`key`);

--
-- Chỉ mục cho bảng `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `translations`
--
ALTER TABLE `translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `translations_table_name_column_name_foreign_key_locale_unique` (`table_name`,`column_name`,`foreign_key`,`locale`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- Chỉ mục cho bảng `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`user_id`,`role_id`),
  ADD KEY `user_roles_user_id_index` (`user_id`),
  ADD KEY `user_roles_role_id_index` (`role_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `authors`
--
ALTER TABLE `authors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `booknames`
--
ALTER TABLE `booknames`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `books`
--
ALTER TABLE `books`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `data_rows`
--
ALTER TABLE `data_rows`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=120;

--
-- AUTO_INCREMENT cho bảng `data_types`
--
ALTER TABLE `data_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `genres`
--
ALTER TABLE `genres`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `libraries`
--
ALTER TABLE `libraries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `menu_items`
--
ALTER TABLE `menu_items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT cho bảng `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT cho bảng `publishers`
--
ALTER TABLE `publishers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `requestloans`
--
ALTER TABLE `requestloans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `reviewbooks`
--
ALTER TABLE `reviewbooks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `reviewslibraries`
--
ALTER TABLE `reviewslibraries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `translations`
--
ALTER TABLE `translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `data_rows`
--
ALTER TABLE `data_rows`
  ADD CONSTRAINT `data_rows_data_type_id_foreign` FOREIGN KEY (`data_type_id`) REFERENCES `data_types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `menu_items`
--
ALTER TABLE `menu_items`
  ADD CONSTRAINT `menu_items_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);

--
-- Các ràng buộc cho bảng `user_roles`
--
ALTER TABLE `user_roles`
  ADD CONSTRAINT `user_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_roles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
