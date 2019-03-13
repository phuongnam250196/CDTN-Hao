-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2019 at 03:29 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `doan`
--

-- --------------------------------------------------------

--
-- Table structure for table `calendars`
--

CREATE TABLE `calendars` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `end` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_borrow` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` int(1) DEFAULT NULL,
  `tag` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `calendar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(1) DEFAULT NULL,
  `student_id` int(10) UNSIGNED DEFAULT NULL,
  `teacher_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `calendars`
--

INSERT INTO `calendars` (`id`, `title`, `description`, `start`, `end`, `date_borrow`, `type`, `tag`, `calendar`, `url`, `status`, `student_id`, `teacher_id`, `created_at`, `updated_at`) VALUES
(9, 'Thực hành test thôi', 'abc', '26-02-2019 07:00', '26-02-2019 09:00', '26-02-2019', 1, NULL, NULL, NULL, 0, NULL, 4, '2019-02-25 02:24:25', '2019-02-25 02:24:25'),
(10, 'ab', 'd', '27-02-2019 09:30', '27-02-2019 12:30', '27-02-2019', 2, NULL, NULL, NULL, 0, NULL, 4, '2019-02-25 02:24:47', '2019-02-25 02:24:47'),
(11, 'Buổi sáng: test 2', 's', '25-02-2019 07:00', '25-02-2019 12:30', '25-02-2019', 5, NULL, NULL, NULL, 0, NULL, 4, '2019-02-25 02:27:37', '2019-02-25 02:27:37'),
(12, 'Ca 3-4-5: a', 'f', '26-02-2019 09:30', '26-02-2019 12:30', '26-02-2019', 2, NULL, NULL, NULL, 0, NULL, 4, '2019-02-25 02:37:18', '2019-02-25 02:37:18'),
(13, 'Ca 8-9: abc', 'f', '26-02-2019 15:30', '26-02-2019 17:30', '26-02-2019', 4, NULL, NULL, NULL, 0, NULL, 4, '2019-02-25 02:37:38', '2019-02-25 02:37:38'),
(14, 'Ca 1-2: a', 'a', '22-02-2019 07:00', '22-02-2019 09:00', '22-02-2019', 1, NULL, NULL, NULL, 0, NULL, 4, '2019-02-25 02:57:32', '2019-02-25 02:57:32'),
(15, 'Ca 1-2: abc', 'a', '22-02-2019 07:00', '22-02-2019 09:00', '22-02-2019', 1, NULL, NULL, NULL, 0, NULL, 4, '2019-02-25 02:57:54', '2019-02-25 02:57:54'),
(16, 'Ca 1-2: abc', 'a', '22-02-2019 07:00', '22-02-2019 09:00', '22-02-2019', 1, NULL, NULL, NULL, 0, NULL, 4, '2019-02-25 02:57:54', '2019-02-25 02:57:54'),
(17, 'Ca 3-4-5: abfdfdf', 'a', '22-02-2019 09:30', '22-02-2019 12:30', '22-02-2019', 2, NULL, NULL, NULL, 0, NULL, 4, '2019-02-25 03:13:44', '2019-02-25 03:13:44'),
(18, 'Ca 6-7: abc', 'a', '22-02-2019 13:00', '22-02-2019 15:00', '22-02-2019', 3, NULL, NULL, NULL, 0, NULL, 4, '2019-02-25 03:14:48', '2019-02-25 03:14:48'),
(19, 'Cả ngày: abca', 'a', '21-02-2019 07:00', '21-02-2019 17:30', '21-02-2019', 7, NULL, NULL, NULL, 0, NULL, 4, '2019-02-25 03:23:02', '2019-02-25 03:23:02'),
(20, 'Ca 3-4-5: ab', 'a', '28-02-2019 09:30', '28-02-2019 12:30', '28-02-2019', 2, NULL, NULL, NULL, 0, NULL, 4, '2019-02-25 18:15:44', '2019-02-25 18:15:44'),
(21, 'Cả ngày: f', 'f', '28-02-2019 07:00', '28-02-2019 17:30', '28-02-2019', 7, NULL, NULL, NULL, 0, NULL, 4, '2019-02-25 18:16:25', '2019-02-25 18:16:25'),
(22, 'Ca 8-9: f', 'f', '27-02-2019 15:30', '27-02-2019 17:30', '27-02-2019', 4, NULL, NULL, NULL, 0, NULL, 4, '2019-02-25 18:18:23', '2019-02-25 18:18:23'),
(23, 'Ca 3-4-5: Mượn chơi game', NULL, '27-02-2019 09:30', '27-02-2019 12:30', '27-02-2019', 2, NULL, NULL, NULL, 0, 6, NULL, '2019-02-25 20:11:14', '2019-02-25 20:11:14'),
(24, 'Ca 3-4-5: abc', NULL, '27-02-2019 09:30', '27-02-2019 12:30', '27-02-2019', 2, NULL, NULL, NULL, 2, 6, NULL, '2019-02-25 20:15:30', '2019-02-26 00:06:35'),
(25, 'Ca 3-4-5: fa', NULL, '27-02-2019 09:30', '27-02-2019 12:30', '27-02-2019', 2, NULL, NULL, NULL, 1, 6, NULL, '2019-02-25 20:15:51', '2019-02-26 02:10:41'),
(26, 'Buổi sáng: abc', NULL, '25-02-2019 07:00', '25-02-2019 12:30', '25-02-2019', 5, NULL, NULL, NULL, 1, 6, NULL, '2019-02-25 20:27:42', '2019-02-26 02:15:10'),
(27, 'Ca 1-2: test', 'a', '20-02-2019 07:00', '20-02-2019 09:00', '20-02-2019', 1, NULL, NULL, NULL, 1, NULL, 6, '2019-02-26 02:22:56', '2019-02-26 02:34:51');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `content`, `created_at`, `updated_at`) VALUES
(1, 'Nguyễn văn a', 'phuongnam250196@gmail.com', 'test gửi mail', '2019-02-26 01:51:41', '2019-02-26 01:51:41'),
(2, 'Nguyễn văn a', 'phuongnam250196@gmail.com', 'test gửi mail', '2019-02-26 01:52:06', '2019-02-26 01:52:06'),
(3, 'Nguyễn văn a', 'phuongnam250196@gmail.com', 'test gửi mail', '2019-02-26 01:52:14', '2019-02-26 01:52:14'),
(4, 'Nguyễn văn a', 'phuongnam250196@gmail.com', 'test gửi mail', '2019-02-26 01:54:13', '2019-02-26 01:54:13'),
(5, 'Lê thị h', 'consenicki@gmail.com', 'abc', '2019-02-26 01:54:37', '2019-02-26 01:54:37'),
(6, 'Nguyễn văn an', 'consenicki@gmail.com', 'test mail nhé', '2019-02-26 01:57:50', '2019-02-26 01:57:50'),
(7, 'Đỗ thị h', 'consenicki@gmail.com', 'test mail nhé', '2019-02-26 01:58:40', '2019-02-26 01:58:40'),
(8, 'test', 'consenicki@gmail.com', 'abc', '2019-02-26 01:59:29', '2019-02-26 01:59:29');

-- --------------------------------------------------------

--
-- Table structure for table `devices`
--

CREATE TABLE `devices` (
  `id` int(10) UNSIGNED NOT NULL,
  `device_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `device_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `device_count` int(11) NOT NULL,
  `device_count_change` int(10) DEFAULT NULL,
  `device_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `device_description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `device_status` tinyint(4) DEFAULT NULL,
  `device_img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `devices`
--

INSERT INTO `devices` (`id`, `device_code`, `device_name`, `device_count`, `device_count_change`, `device_type`, `device_description`, `device_status`, `device_img`, `created_at`, `updated_at`) VALUES
(1, 'm3244', 'sdfds', 12, 7, 'fsd', '<p>fsd</p>', 0, 'uploads/devices/1/1549960824-banner-chan-may-anh-benro-t880ex-1.jpg', '2019-01-10 20:56:33', '2019-02-12 01:40:24'),
(3, 'dell20', 'Máy tính dell 20', 23, 18, 'Đen', '<p>fdsfds</p>', 0, 'uploads/devices/3/1549960812-bestbuylenovolaptop-100742402-large.jpg', '2019-01-12 22:49:46', '2019-02-12 01:40:12'),
(4, 'MH2201', 'Máy đánh trứng tự động không cần trứng', 2, 0, '2dsf', '<p>f</p>', 0, 'uploads/devices/4/1549960802-61evshtZl1L._SX355_.jpg', '2019-01-12 22:50:52', '2019-02-12 01:40:02');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_01_08_044157_create_posts_table', 2),
(4, '2019_01_10_091326_create_students_table', 3),
(5, '2019_01_10_091347_create_teachers_table', 3),
(6, '2019_01_10_091410_create_devices_table', 3),
(7, '2019_01_10_092642_create_projects_table', 3),
(8, '2019_01_13_055457_create_user_devices_table', 4),
(9, '2019_01_14_042602_create_calendars_table', 5),
(10, '2019_02_25_020543_create_contacts_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `post_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_img` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_content` longtext COLLATE utf8mb4_unicode_ci,
  `post_status` int(11) DEFAULT NULL,
  `student_id` int(10) DEFAULT NULL,
  `teacher_id` int(10) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `post_title`, `post_slug`, `post_img`, `post_content`, `post_status`, `student_id`, `teacher_id`, `created_at`, `updated_at`) VALUES
(1, 'Mờ ảo', 'mo-ao', 'uploads/posts/1/1546998068-razer_adaro_headphones_stereo_headphones_glare_99445_1366x768.jpg', '<p>Tottenham bước v&agrave;o trận đấu n&agrave;y với đội h&igrave;nh kh&aacute; mạnh khi ngo&agrave;i thủ m&ocirc;n Gazzaniga ra th&igrave; c&aacute;c vị tr&iacute; c&ograve;n lại đều l&agrave; cầu thủ đ&aacute; ch&iacute;nh. Trong khi đ&oacute; HLV Maurizio Sarri chọn d&ugrave;ng Eden Hazard đ&aacute; cắm với Willian v&agrave; Callum Hudson-Odoi yểm trợ ph&iacute;a sau.</p>\r\n\r\n<p><img alt=\"Tottenham - Chelsea: Bàn thắng của VAR, siêu sao lên tiếng - 1\" src=\"https://cdn.24h.com.vn/upload/1-2019/images/2019-01-09/1546979550010_lc_galleryimage_london_england_january_08-660-1546984924-370-width660height443.jpg\" /></p>\r\n\r\n<p>Kane mở tỷ số cho&nbsp;<a href=\"https://www.24h.com.vn/tottenham-hotspur-c48e4412.html\">Tottenham</a>&nbsp;sau một pha b&oacute;ng đầy tranh c&atilde;i</p>\r\n\r\n<p>S&oacute;ng gi&oacute; đ&atilde; bắt đầu xuất hiện cho&nbsp;<a href=\"https://www.24h.com.vn/chelsea-c48e1505.html\">Chelsea</a>&nbsp;ngay ph&uacute;t thứ 5 khi Harry Kane su&yacute;t ghi b&agrave;n từ một c&uacute; ngả b&agrave;n đ&egrave;n, nhưng b&agrave;n thắng mở tỷ số xảy ra một c&aacute;ch hết sức tranh c&atilde;i. Kane ban đầu được x&aacute;c định đ&atilde; việt vị trước khi bị Kepa phạm lỗi trong pha băng xuống, nhưng c&ocirc;ng nghệ VAR x&aacute;c định Kane chưa việt vị v&agrave; anh được hưởng penalty, một cơ hội m&agrave; Kane kh&ocirc;ng thể bỏ lỡ để Spurs dẫn trước ph&uacute;t 27.</p>\r\n\r\n<p>Chelsea buộc phải tr&agrave;n l&ecirc;n v&agrave; trong phần c&ograve;n lại của hiệp 1 Kante với Hudson-Odoi đ&atilde; bị cột dọc từ chối c&aacute;c c&uacute; dứt điểm của m&igrave;nh. Sang hiệp 2, hai b&ecirc;n ăn miếng trả miếng kh&aacute; dữ dội v&agrave; ở ph&uacute;t 58 trung vệ Christensen lẽ ra đ&atilde; lập c&ocirc;ng nếu như kh&ocirc;ng đ&aacute;nh đầu chệch cột từ một vị tr&iacute; thoải m&aacute;i.</p>\r\n\r\n<p>Sarri tung th&ecirc;m Pedro, Kovacic v&agrave; Giroud v&agrave;o s&acirc;n nhưng HLV Pochettino đổ r&agrave;o ph&ograve;ng thủ chặt chẽ kh&ocirc;ng cho Chelsea nhiều cơ hội. Ph&uacute;t 87, một pha đột ph&aacute; của Hazard đ&atilde; khiến h&agrave;ng thủ Tottenham luống cuống, nhưng may mắn họ kh&ocirc;ng bị ghi b&agrave;n.</p>', 2, NULL, NULL, '2019-01-08 09:07:05', '2019-01-10 23:32:36'),
(2, 'abc22', 'abc22', 'uploads/posts/2/1546997881-waterfall_lake_summer_sunset_grass_92509_1366x768.jpg', '<p>&agrave;fdsfsdf</p>', 2, NULL, NULL, '2019-01-08 09:31:29', '2019-01-10 22:00:13'),
(3, 'test', 'test', 'uploads/posts/3/1547182223-waterfall_lake_summer_sunset_grass_92509_1366x768.jpg', '<p>s</p>', 2, NULL, NULL, '2019-01-10 21:50:23', '2019-02-12 00:17:02'),
(4, 'fdsf', 'fdsf', 'uploads/posts/4/1547189856-razer_adaro_headphones_stereo_headphones_glare_99445_1366x768.jpg', '<p>fsdf</p>', 0, NULL, NULL, '2019-01-10 23:57:36', '2019-01-10 23:57:36'),
(5, 'Viết bài test', 'viet-bai-test', 'uploads/posts/5/1547354821-waterfall_lake_summer_sunset_grass_92509_1366x768.jpg', '<p>abc</p>', 2, 6, NULL, '2019-01-12 21:47:01', '2019-02-12 00:16:58'),
(6, 'Tạo bài check phát nhể', 'tao-bai-check-phat-nhe', 'uploads/posts/6/1547355489-waterfall_lake_summer_sunset_grass_92509_1366x768.jpg', '<p>fdsf</p>', 2, 6, NULL, '2019-01-12 21:58:09', '2019-01-12 22:17:44'),
(7, 'hya đó', 'hya-do', 'uploads/posts/7/1547355650-razer_adaro_headphones_stereo_headphones_glare_99445_1366x768.jpg', '<p>fs</p>', 0, 6, NULL, '2019-01-12 22:00:50', '2019-01-12 22:29:01'),
(8, 'Test viết bài giáo viên', 'test-viet-bai-giao-vien', 'uploads/posts/8/1547547616-razer_adaro_headphones_stereo_headphones_glare_99445_1366x768.jpg', '<h1>Publish your work</h1>\r\n\r\n<p>When you&#39;re finished working on your project, you should publish it to create the final set of files.</p>\r\n\r\n<p>Before you publish an ad, you can verify in the Summary section of the publish dialog that your ad passes all&nbsp;<a href=\"https://support.google.com/webdesigner/answer/7375764#checks\">validation checks</a>.</p>', 0, NULL, 4, '2019-01-15 03:20:16', '2019-01-15 03:22:52'),
(9, 'Thông báo Thi vượt cấp tiếng Anh cho sinh viên khóa mới', 'thong-bao-thi-vuot-cap-tieng-anh-cho-sinh-vien-khoa-moi', 'uploads/posts/9/1549954814-31(1).png', '<p><strong>I. Mục đ&iacute;ch</strong></p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - X&aacute;c định tr&igrave;nh độ tiếng Anh hiện tại của sinh vi&ecirc;n nhằm gi&uacute;p việc ph&acirc;n loại v&agrave; xếp lớp ph&ugrave; hợp cho từng đối tượng theo học chương tr&igrave;nh đ&agrave;o tạo Tiếng Anh của trường.</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - Gi&uacute;p sinh vi&ecirc;n c&oacute; tr&igrave;nh độ tiếng Anh đạt hoặc vượt c&aacute;c tr&igrave;nh độ qui định trong chương tr&igrave;nh x&acirc;y dựng kế hoạch học tập, x&aacute;c định mục ti&ecirc;u, tiết kiệm thời gian v&agrave; chi ph&iacute;.</p>\r\n\r\n<p><strong>II. Đối tượng</strong></p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - Tất cả sinh vi&ecirc;n kh&oacute;a 31 (trừ ng&agrave;nh Ng&ocirc;n ngữ Anh).</p>\r\n\r\n<p><strong><em>Lưu &yacute;:</em></strong></p>\r\n\r\n<p>- Sinh vi&ecirc;n c&oacute;&nbsp;<em>chứng chỉ tiếng Anh quốc tế</em>&nbsp;được cấp bởi một trong c&aacute;c trung t&acirc;m đại diện cho c&aacute;c tổ chức ETS (Hoa Kỳ), British Council (Anh), ESOL (Anh), IDP (&Uacute;c) c&oacute; thời hạn 2 năm kể từ ng&agrave;y cấp chứng chỉ đến ng&agrave;y đăng k&yacute; dự thi sẽ được miễn thi c&aacute;c cấp độ sau:</p>\r\n\r\n<p>+&nbsp;C<em>hứng chỉ</em>&nbsp;tiếng Anh quốc tế tương đương tr&igrave;nh độ&nbsp;<em>A2 được miễn thi 3 cấp độ tr&igrave;nh độ sơ cấp (Tiếng Anh sơ cấp 1, Tiếng Anh sơ cấp 2, Tiếng Anh sơ cấp 3);</em></p>\r\n\r\n<p><em>+&nbsp;</em>C<em>hứng chỉ</em>&nbsp;tiếng Anh quốc tế tương đương tr&igrave;nh độ<em>&nbsp;B1 được miễn thi 6 cấp độ tr&igrave;nh độ sơ cấp v&agrave; sơ trung cấp (Tiếng Anh sơ cấp 1, Tiếng Anh sơ cấp 2, Tiếng Anh sơ cấp 3,&nbsp;</em>Tiếng Anh sơ trung cấp 1, Tiếng Anh sơ trung cấp 2, Tiếng Anh sơ trung cấp 3).</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - Sinh vi&ecirc;n được miễn thi đến cấp độ n&agrave;o sẽ được&nbsp;xếp v&agrave;o lớp tiếng Anh ở cấp độ đ&oacute; v&agrave; điểm tổng kết c&aacute;c học phần miễn thi l&agrave; 6 điểm; sinh vi&ecirc;n muốn c&oacute; điểm t&iacute;ch lũy cao phải đăng k&yacute; thi n&acirc;ng điểm tại Trường.</p>\r\n\r\n<p><strong>III. C&aacute;c học phần Tiếng Anh đại cương gồm 06 cấp độ sau</strong></p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - Tiếng Anh sơ cấp 1 (TASC1);</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - Tiếng Anh sơ cấp 2 (TASC2);</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - Tiếng Anh sơ cấp 3 (TASC3);</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - Tiếng Anh sơ trung cấp 1 (TASTC1);</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - Tiếng Anh sơ trung cấp 2 (TASTC2);</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - Tiếng Anh sơ trung cấp 3 (TASTC3).</p>\r\n\r\n<p>Hết s&aacute;u cấp độ tr&ecirc;n sinh vi&ecirc;n sẽ học ba học phần tiếng Anh trung cấp 1, tiếng Anh trung cấp 2 v&agrave; tiếng Anh trung cấp 3 để ho&agrave;n th&agrave;nh chương tr&igrave;nh đ&agrave;o tạo tiếng Anh tại trường.</p>\r\n\r\n<p><strong>IV. Cấu tr&uacute;c đề thi v&agrave; h&igrave;nh thức thi</strong></p>\r\n\r\n<p><strong><em>1. B&agrave;i thi tr&igrave;nh độ Sơ cấp (ph&acirc;n loại 03 cấp độ TASC1, TASC2, TASC3), gồm 01 đề thi với c&aacute;c phần Nghe, Đọc, Viết</em></strong></p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<em>a. Cấu tr&uacute;c đề thi bao gồm:</em></p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - Nghe: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; gồm 25 c&acirc;u hỏi (dạng trắc nghiệm, điền khuyết, gh&eacute;p nối, &hellip;);</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - Đọc hiểu: &nbsp;&nbsp;&nbsp;&nbsp; gồm 40 c&acirc;u hỏi (dạng trắc nghiệm, điền khuyết, gh&eacute;p nối, &hellip;);</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - Viết:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; gồm 16 c&acirc;u hỏi với c&aacute;c dạng b&agrave;i sau: điền từ c&ograve;n thiếu v&agrave;o một văn bản (10 chỗ trống), từ kh&ocirc;ng được cho sẵn; chọn lọc th&ocirc;ng tin từ c&aacute;c tờ quảng c&aacute;o, th&ocirc;ng b&aacute;o, email... để điền v&agrave;o mẫu; viết một email, bức thư ngắn, lời nhắn, bưu thiếp...</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<em>b. Thời gian thi:</em>&nbsp;90 ph&uacute;t.</p>', 1, NULL, 4, '2019-02-12 00:00:14', '2019-02-12 00:00:24'),
(10, 'Quyết định điểm trúng tuyển thạc sĩ năm 2018 đợt 1', 'quyet-dinh-diem-trung-tuyen-thac-si-nam-2018-dot-1', 'uploads/posts/10/1549954951-14(2).jpg', '<p>Căn cứ Luật Gi&aacute;o dục Đại học số 08/2012/QH13 ng&agrave;y 18/6/2012;</p>\r\n\r\n<p>Căn cứ Nghị định số 141/2013/ NĐ- CP ng&agrave;y 24/10/2013 về việc Quy định chi tiết v&agrave; hướng dẫn thi h&agrave;nh một số điều của Luật Gi&aacute;o dục Đại học;</p>\r\n\r\n<p>Căn cứ Điều lệ trường đại học ban h&agrave;nh k&egrave;m theo Quyết định số 70/2014 QĐ/TTg ng&agrave;y 10/12/2014 của Thủ tướng Ch&iacute;nh phủ;</p>\r\n\r\n<p>Căn cứ Quy chế tổ chức v&agrave; hoạt động của Trường Đại học Thăng Long ban h&agrave;nh k&egrave;m theo Quyết định số 09/QĐHĐQT-ĐHTL ng&agrave;y 05/8/2015;</p>\r\n\r\n<p>Căn cứ quy chế Đ&agrave;o tạo tr&igrave;nh độ thạc sĩ của Trường Đại học Thăng Long ban h&agrave;nh k&egrave;m theo Quyết định số 253B/QĐ-ĐHTL ng&agrave;y 23/09/2014;</p>\r\n\r\n<p>Căn cứ kết quả tuyển sinh đ&agrave;o tạo tr&igrave;nh độ thạc sĩ năm 2018 (đợt 1) của Trường Đại học Thăng Long;</p>\r\n\r\n<p>Căn cứ Bi&ecirc;n bản Họp hội đồng tuyển sinh x&eacute;t điểm tr&uacute;ng tuyển thạc sĩ năm 2018 (đợt 1) ng&agrave;y 06/08/2018;</p>\r\n\r\n<p>Theo đề nghị của &Ocirc;ng Chủ tịch Hội đồng tuyển sinh,</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>QUYẾT ĐỊNH:</strong></p>\r\n\r\n<p><strong>Điều 1:</strong>&nbsp;Điểm tr&uacute;ng tuyển v&agrave;o c&aacute;c chuy&ecirc;n ng&agrave;nh đ&agrave;o tạo tr&igrave;nh độ thạc sĩ kh&oacute;a 7 của Trường Đại học Thăng Long, kỳ thi tuyển sinh đợt 1, th&aacute;ng 06 năm 2018 như sau:</p>\r\n\r\n<p><a name=\"_Hlk521488337\"></a>&nbsp;&nbsp;&nbsp;Điều kiện x&eacute;t tuyển: Điểm tiếng Anh &ge; 5; C&aacute;c m&ocirc;n thi chủ chốt v&agrave; chuy&ecirc;n ng&agrave;nh &ge;5;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<table border=\"1\" cellspacing=\"0\" style=\"width:707px\">\r\n	<tbody>\r\n		<tr>\r\n			<td style=\"background-color:white; width:49.75pt\">\r\n			<p><strong>TT</strong></p>\r\n			</td>\r\n			<td style=\"background-color:white; width:7cm\">\r\n			<p><strong>CHUY&Ecirc;N NG&Agrave;NH</strong></p>\r\n			</td>\r\n			<td style=\"background-color:white; width:7cm\">\r\n			<p><strong>ĐIỂM TR&Uacute;NG TUYỂN</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"background-color:white; width:49.75pt\">\r\n			<p>1</p>\r\n			</td>\r\n			<td style=\"background-color:white; width:7cm\">\r\n			<p>Y tế c&ocirc;ng cộng</p>\r\n			</td>\r\n			<td style=\"background-color:white; width:7cm\">\r\n			<p>13,25</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"background-color:white; width:49.75pt\">\r\n			<p>2</p>\r\n			</td>\r\n			<td style=\"background-color:white; width:7cm\">\r\n			<p>Điều dưỡng</p>\r\n			</td>\r\n			<td style=\"background-color:white; width:7cm\">\r\n			<p>16.50</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Điều 2:</strong>&nbsp;Quyết định n&agrave;y c&oacute; hiệu lực thi h&agrave;nh từ ng&agrave;y k&yacute;.</p>\r\n\r\n<p><strong>Điều&nbsp;</strong><strong>3</strong><strong>:</strong>&nbsp;C&aacute;c &ocirc;ng (b&agrave;) Trưởng ph&ograve;ng Sau Đại học v&agrave; Quản l&yacute; khoa học, Trưởng c&aacute;c ph&ograve;ng ban li&ecirc;n quan v&agrave; c&aacute;c th&iacute; sinh&nbsp;dự thi tuyển sinh đ&agrave;o tạo tr&igrave;nh độ thạc sĩ kh&oacute;a 7 (kỳ thi tuyển sinh đợt 1 năm 2018)&nbsp;chịu tr&aacute;ch nhiệm thi h&agrave;nh&nbsp;Quyết định n&agrave;y.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<table cellspacing=\"0\" style=\"width:638px\">\r\n	<tbody>\r\n		<tr>\r\n			<td style=\"width:224.4pt\">\r\n			<p><strong><em>Nơi nhận:</em></strong></p>\r\n\r\n			<p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Như điều 2;</p>\r\n\r\n			<p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lưu Ban Thư k&yacute;;</p>\r\n\r\n			<p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lưu Ph&ograve;ng SĐH &amp; QLKH;</p>\r\n\r\n			<p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lưu HCTH.</p>\r\n			</td>\r\n			<td style=\"width:253.8pt\">\r\n			<p><strong>HIỆU TRƯỞNG</strong></p>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p>&nbsp;(đ&atilde; k&iacute;)</p>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p><strong>PHAN HUY PH&Uacute;</strong></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', 1, NULL, 4, '2019-02-12 00:02:31', '2019-02-12 00:02:59'),
(11, 'Công bố điểm tổng kết các môn thi HKI, nhóm 3', 'cong-bo-diem-tong-ket-cac-mon-thi-hki-nhom-3', 'uploads/posts/11/1549955574-7(3).png', '<p><strong><em>C&ocirc;ng bố&nbsp;</em></strong><strong><em>điểm&nbsp;</em></strong><strong><em>tổng kết c&aacute;c m&ocirc;n&nbsp;</em></strong><strong><em>thi HK</em></strong><strong><em>I</em></strong><strong><em>, nh&oacute;m&nbsp;</em></strong><strong><em>3</em></strong><strong><em>, năm học 201</em></strong><strong><em>8</em></strong><strong><em>-</em></strong><strong><em>201</em></strong><strong><em>9&nbsp;</em></strong><strong><em>(Kh&oacute;a 31)</em></strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Ng&agrave;y&nbsp;<strong>11/1/2019</strong>, nh&agrave; trường c&ocirc;ng bố điểm tổng kết c&aacute;c m&ocirc;n thi HKI, nh&oacute;m 3, năm học 2018 - 2019 của sinh vi&ecirc;n tr&ecirc;n trang web&nbsp;<strong><a href=\"http://thanglong.edu.vn/\">http://thanglong.edu.vn</a>&nbsp;</strong>qua&nbsp;<strong>Banner Đăng k&yacute; học</strong><strong>.</strong></p>\r\n\r\n<p>C&aacute;ch xem: v&agrave;o phần&nbsp;<strong>G&oacute;c sinh vi&ecirc;n</strong>&rarr; chọn mục&nbsp;<strong>Phiếu b&aacute;o điểm</strong>&rarr;&nbsp;<strong>Chọn học kỳ</strong>&rarr;&nbsp;<strong>Gửi đi</strong>.</p>', 1, NULL, 4, '2019-02-12 00:12:54', '2019-02-12 00:13:03'),
(12, 'Hoành tráng đêm Đại nhạc hội Thăng Long Galaxy 2015', 'hoanh-trang-dem-dai-nhac-hoi-thang-long-galaxy-2015', 'uploads/posts/12/1549955921-Galaxy2015_02.jpg', '<p><strong><em>Tối 15/12/2015, tại Quảng trường Tri thức &ndash; Trường Đại học Thăng Long đ&atilde; diễn ra đ&ecirc;m Đại nhạc hội &ldquo;Thăng Long Galaxy 2015&rdquo;. Sự kiện điểm nhấn ấn tượng nhất trong chuỗi c&aacute;c hoạt động kỷ niệm 27 năm th&agrave;nh lập trường. Chương tr&igrave;nh đ&atilde; c&oacute; sức h&uacute;t m&atilde;nh liệt tới đ&ocirc;ng đảo c&aacute;n bộ, giảng vi&ecirc;n v&agrave; sinh vi&ecirc;n, cựu sinh vi&ecirc;n trong trường.</em></strong></p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Hằng năm, cứ v&agrave;o dịp sinh nhật Trường Đại học Thăng Long lại rộn r&agrave;ng với nhiều hoạt động v&ocirc; c&ugrave;ng &yacute; nghĩa. Trong đ&oacute; đ&ecirc;m Đại nhạc hội đ&atilde; trở th&agrave;nh t&acirc;m điểm kh&ocirc;ng chỉ đối với những ai đ&atilde; từng gắn b&oacute; với m&aacute;i trường y&ecirc;u dấu n&agrave;y, m&agrave; n&oacute; c&ograve;n l&agrave; điểm đến của tất cả những ai c&oacute; t&igrave;nh y&ecirc;u với nghệ thuật. Kỷ niệm 27 tuổi, nh&agrave; trường rất vui mừng v&agrave; vinh dự được hợp t&aacute;c c&ugrave;ng trường đại học đ&agrave;o tạo nghệ thuật h&agrave;ng đầu của H&agrave;n Quốc&nbsp; - Trường Đại học Scau Sart.</p>\r\n\r\n<p><img alt=\"Galaxy2015 01\" src=\"http://thanglong.edu.vn/images/QHCC/Galaxy2015_01.jpg\" /></p>\r\n\r\n<p><em>S&acirc;n khấu v&ocirc; c&ugrave;ng ho&agrave;ng tr&aacute;ng của Thăng Long&rsquo;s Galaxy</em></p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Với chủ đề Thăng Long Galaxy c&oacute; nghĩa l&agrave; dải ng&acirc;n h&agrave;, nơi quy tụ những v&igrave; sao tinh t&uacute;y nhất, t&agrave;i năng nhất lu&ocirc;n tỏa s&aacute;ng c&ugrave;ng TLU. Mở đầu đ&ecirc;m Đại nhạc hội l&agrave; m&agrave;n tr&igrave;nh diễn thời trang Thăng Long&rsquo;s Fashion show, to&agrave;n bộ kh&aacute;n giả tại đ&ecirc;m Đại nhạc hội đ&atilde; được thưởng thức một &ldquo;bữa tiệc&rdquo; thời trang v&ocirc; c&ugrave;ng ấn tượng, trẻ trung v&agrave; hiện đại. Ngo&agrave;i c&aacute;c thiết kế trang phục mới nhất, điểm đặc biệt l&agrave; d&agrave;n người mẫu được tuyển chọn từ ch&iacute;nh tập thể sinh vi&ecirc;n TLU. Trải qua sự hỗ trợ đ&agrave;o tạo của C&ocirc;ng ty người mẫu BB PLus, sinh vi&ecirc;n TLU đ&atilde; thể hiện khả năng tr&igrave;nh diễn vượt trội, kh&ocirc;ng thua k&eacute;m những người mẫu chuy&ecirc;n nghiệp. Tr&ecirc;n nền nhạc s&ocirc;i động của nh&oacute;m Kick Off, với sự kết hợp ăn &yacute; khiến cho kh&aacute;n giả như bị lạc v&agrave;o thế giới của Next Top Model.</p>\r\n\r\n<p><img alt=\"Galaxy2015 02\" src=\"http://thanglong.edu.vn/images/QHCC/Galaxy2015_02.jpg\" /></p>\r\n\r\n<p><img alt=\"Galaxy2015 03\" src=\"http://thanglong.edu.vn/images/QHCC/Galaxy2015_03.jpg\" /></p>\r\n\r\n<p><img alt=\"Galaxy2015 04\" src=\"http://thanglong.edu.vn/images/QHCC/Galaxy2015_04.jpg\" /></p>\r\n\r\n<p><img alt=\"Galaxy2015 05\" src=\"http://thanglong.edu.vn/images/QHCC/Galaxy2015_05.jpg\" /></p>\r\n\r\n<p><em>Những tiết mục thời trang hấp dẫn</em></p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Kh&ocirc;ng gian nơi Quảng trường tri thức ng&agrave;y c&agrave;ng n&oacute;ng l&ecirc;n bởi &acirc;m thanh sắc ngọt, &aacute;nh s&aacute;ng lung linh huyền diệu, m&ecirc; hoặc khiến cho b&agrave;n tay buốt lạnh của &ldquo;chị gi&oacute;&rdquo; m&ugrave;a đ&ocirc;ng bất lực trước &ldquo;hơi thở&rdquo; của s&acirc;n khấu. C&aacute;c tiết mục nghệ thuật đặc sắc của sinh vi&ecirc;n TLU đ&atilde; đem đến cho kh&aacute;n giả một bữa tiệc ho&agrave;nh tr&aacute;ng nhất xứ Bắc &ndash; Một kh&ocirc;ng gian &acirc;m nhạc đậm chất ch&acirc;u &Acirc;u giữa l&ograve;ng Trường Đại học Thăng Long.</p>\r\n\r\n<p><img alt=\"Galaxy2015 06\" src=\"http://thanglong.edu.vn/images/QHCC/Galaxy2015_06.jpg\" /></p>\r\n\r\n<p><img alt=\"Galaxy2015 07\" src=\"http://thanglong.edu.vn/images/QHCC/Galaxy2015_07.jpg\" /></p>\r\n\r\n<p><em>M&agrave;n tr&igrave;nh diễn thời trang n&oacute;ng bỏng của sinh vi&ecirc;n TLU</em></p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Sinh vi&ecirc;n TLU năng động, s&aacute;ng tạo với niềm đam m&ecirc; nghệ thuật ch&aacute;y bỏng, c&aacute;c v&igrave; sao đ&atilde; tỏa s&aacute;ng c&ugrave;ng Vietnam Idol như Đồng Thủy Ti&ecirc;n một giọng h&aacute;t đầy nội lực; Phạm Duy Anh The voice; Phạm V&acirc;n Anh từng l&agrave; gương mặt khả &aacute;i trong live show giọng h&aacute;t Việt 2015. V&agrave; h&ocirc;m nay những t&agrave;i năng đ&oacute; lại l&agrave; m&oacute;n qu&agrave; tuyệt vời gửi đến thầy c&ocirc; v&agrave; c&aacute;c bạn sinh vi&ecirc;n với chất giọng cao v&uacute;t quyến rũ, h&igrave;nh b&oacute;ng của &ldquo;bước nhảy ho&agrave;n vũ&rdquo; khiến qu&yacute; vị kh&aacute;n giả kh&ocirc;ng thể rời mắt nổi s&acirc;n khấu bởi những vũ điệu nhịp nh&agrave;ng, uyển chuyển đi&ecirc;u luyện, mềm mại ngo&agrave;i sức tưởng tượng của sinh vi&ecirc;n TLU được c&acirc;u lạc bộ Dancing v&agrave; Music chuẩn bị rất c&ocirc;ng phu, kỹ lưỡng.</p>\r\n\r\n<p><img alt=\"Galaxy2015 08\" src=\"http://thanglong.edu.vn/images/QHCC/Galaxy2015_08.jpg\" /></p>\r\n\r\n<p><img alt=\"Galaxy2015 09\" src=\"http://thanglong.edu.vn/images/QHCC/Galaxy2015_09.jpg\" /></p>\r\n\r\n<p><img alt=\"Galaxy2015 10\" src=\"http://thanglong.edu.vn/images/QHCC/Galaxy2015_10.jpg\" /></p>\r\n\r\n<p><img alt=\"Galaxy2015 11\" src=\"http://thanglong.edu.vn/images/QHCC/Galaxy2015_11.jpg\" /></p>\r\n\r\n<p><img alt=\"Galaxy2015 12\" src=\"http://thanglong.edu.vn/images/QHCC/Galaxy2015_12.jpg\" /></p>\r\n\r\n<p><em>Những ca sĩ kh&ocirc;ng chuy&ecirc;n đ&atilde; thể hiện hết m&igrave;nh</em></p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Đ&ecirc;m Đại nhạc hội c&agrave;ng s&ocirc;i động hơn với phần biểu diễn của sinh vi&ecirc;n Trường Đại học Scau Sart &ndash; H&agrave;n Quốc, ca kh&uacute;c Moment một nhạc phẩm trong bộ phim nổi tiếng &ldquo; Người thừa kế&rdquo; của xứ sở Kim chi xinh đẹp đ&atilde; từng l&agrave;m thổn thức tr&aacute;i tim của bao c&ocirc; g&aacute;i. Một lần nữa kh&aacute;n giả lại bị đắm m&igrave;nh trong vườn thi&ecirc;n đ&agrave;ng với vũ điệu Bale của sinh vi&ecirc;n TLU. Đ&acirc;y l&agrave; cơ hội gi&uacute;p cho sinh vi&ecirc;n TLU giao lưu hội nhập, ph&aacute;t triển mạnh hơn nữa về c&aacute;c hoạt động văn h&oacute;a, nghệ thuật.</p>', 1, NULL, 4, '2019-02-12 00:18:41', '2019-02-12 00:19:09'),
(13, 'Lễ trao bằng tốt nghiệp Cử nhân và Thạc sỹ Đợt kỷ niệm 27 năm thành lập Trường Đại học Thăng Long', 'le-trao-bang-tot-nghiep-cu-nhan-va-thac-sy-dot-ky-niem-27-nam-thanh-lap-truong-dai-hoc-thang-long', 'uploads/posts/13/1549956053-TBTN122015_02.jpg', '<p><strong><em>Ng&agrave;y 14/12/2015, trong kh&ocirc;ng kh&iacute; phấn khởi kỷ niệm 27 năm ng&agrave;y th&agrave;nh lập trường. Trường Đại học Thăng Long đ&atilde; long trọng tổ chức th&agrave;nh c&ocirc;ng buổi Lễ trao bằng tốt nghiệp cho những sinh vi&ecirc;n tốt nghiệp loại Xuất sắc v&agrave; Giỏi đợt th&aacute;ng 12/2015 v&agrave; trao bằng tốt nghiệp cho học vi&ecirc;n Cao học kh&oacute;a I. Sự kiện n&agrave;y c&oacute; &yacute; nghĩa đ&aacute;nh dấu sự trưởng th&agrave;nh của c&aacute;c t&acirc;n cử nh&acirc;n v&agrave; t&acirc;n Thạc sỹ tr&ecirc;n con đường tương lai, hướng tới ch&acirc;n trời mới.</em></strong></p>\r\n\r\n<p>Tham dự buổi lễ c&oacute; sự hiện diện của GS.TSKH Ho&agrave;ng Xu&acirc;n S&iacute;nh &ndash; Chủ tịch Hội đồng Quản trị, TS.Phan Huy Ph&uacute; &ndash; Hiệu trưởng, c&aacute;c thầy trong HĐQT, BGH c&ugrave;ng l&atilde;nh đạo c&aacute;c Ph&ograve;ng ban, Khoa, Bộ m&ocirc;n, giảng vi&ecirc;n, học vi&ecirc;n, sinh vi&ecirc;n trong trường v&agrave; đại diện c&aacute;c nh&agrave; t&agrave;i trợ.</p>\r\n\r\n<p><img alt=\"TBTN122015 01\" src=\"http://thanglong.edu.vn/images/CTSV/TBTN122015_01.jpg\" style=\"margin:0px\" /></p>\r\n\r\n<p><em>C&ocirc; Nguyễn Hải H&agrave; &ndash; Ph&oacute; trưởng Ph&ograve;ng C&ocirc;ng t&aacute;c Sinh vi&ecirc;n c&ocirc;ng bố Quyết định &nbsp;tặng học bổng cho sinh vi&ecirc;n c&oacute; th&agrave;nh t&iacute;ch xuất sắc trong học tập, r&egrave;n luyện v&agrave; khen thưởng sinh vi&ecirc;n tốt nghiệp đại học ch&iacute;nh quy</em></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Mở đầu buổi lễ C&ocirc; Nguyễn Hải H&agrave; &ndash; Ph&oacute; Trưởng ph&ograve;ng C&ocirc;ng t&aacute;c Sinh vi&ecirc;n c&ocirc;ng bố Quyết định tặng học bổng cho sinh vi&ecirc;n c&oacute; th&agrave;nh t&iacute;ch xuất sắc trong học tập, r&egrave;n luyện v&agrave; Quyết định khen thưởng sinh vi&ecirc;n tốt nghiệp đại học ch&iacute;nh quy đợt ch&agrave;o mừng kỷ niệm ng&agrave;y th&agrave;nh lập trường. Trong đợt x&eacute;t tốt nghiệp lần n&agrave;y c&oacute; 05 sinh vi&ecirc;n tốt nghiệp loại Xuất sắc, 58 sinh vi&ecirc;n tốt nghiệp loại giỏi được nhận giấy khen v&agrave; phần thưởng của nh&agrave; trường.</p>\r\n\r\n<p><img alt=\"TBTN122015\" src=\"http://thanglong.edu.vn/images/CTSV/TBTN122015.jpg\" style=\"margin:0px\" /></p>\r\n\r\n<p><em>TS. Phan Huy Ph&uacute; &ndash; Hiệu trưởng nh&agrave; trường trao phần thưởng</em></p>\r\n\r\n<p><em>&nbsp;cho sinh vi&ecirc;n tốt nghiệp loại xuất sắc</em></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Đặc biệt, trong đợt trao bằng tốt nghiệp lần n&agrave;y gắn với ng&agrave;y kỷ niệm 27 năm &nbsp;th&agrave;nh lập Trường Đại học Thăng Long, hằng năm GS.TSKH Ho&agrave;ng Xu&acirc;n S&iacute;nh &ndash; Chủ tịch Hội đồng Quản trị lu&ocirc;n gi&agrave;nh 03 suất học bổng d&agrave;nh cho sinh vi&ecirc;n c&oacute; th&agrave;nh t&iacute;ch học tập cao nhất. Học bổng n&agrave;y thể hiện sự quan t&acirc;m, kh&iacute;ch lệ của GS.TSKH Ho&agrave;ng Xu&acirc;n S&iacute;nh trong việc nu&ocirc;i dưỡng nh&acirc;n t&agrave;i cho đất nước, học bổng kh&ocirc;ng chỉ&nbsp; l&agrave; m&oacute;n qu&agrave; v&ocirc; gi&aacute; m&agrave; c&ograve;n l&agrave; nguồn động vi&ecirc;n tinh thần rất lớn đối với c&aacute;c t&acirc;n cử nh&acirc;n vững bước tr&ecirc;n con đường sự nghiệp của m&igrave;nh, đồng thời l&agrave; ti&ecirc;u ch&iacute; phấn đấu học tập, r&egrave;n luyện cho c&aacute;c bạn sinh vi&ecirc;n kh&oacute;a sau của nh&agrave; trường.</p>\r\n\r\n<p><img alt=\"TBTN122015 02\" src=\"http://thanglong.edu.vn/images/CTSV/TBTN122015_02.jpg\" style=\"margin:0px\" /></p>\r\n\r\n<p><em>GS.TSKH Ho&agrave;ng Xu&acirc;n S&iacute;nh trao học bổng cho sinh vi&ecirc;n đạt th&agrave;nh t&iacute;ch học tập cao nhất</em></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Được ủy quyền của Hiệu trưởng, thầy Nguyễn Văn Th&aacute;i &ndash; Trưởng ph&ograve;ng H&agrave;nh ch&iacute;nh-Tổng hợp c&ocirc;ng bố Quyết định c&ocirc;ng nhận tốt nghiệp đại học hệ ch&iacute;nh quy v&agrave; tốt nghiệp Thạc sĩ cho học vi&ecirc;n Cao học kh&aacute;o I, II đợt th&aacute;ng 12 năm 2015. Trong đợt x&eacute;t tốt nghiệp lần n&agrave;y c&oacute; 63 sinh vi&ecirc;n được c&ocirc;ng nhận x&eacute;t tốt nghiệp, trong đ&oacute; c&oacute; 05 sinh vi&ecirc;n tốt nghiệp loại Xuất sắc, 58 sinh vi&ecirc;n tốt nghiệp loại Giỏi, 89 học vi&ecirc;n Cao học chuy&ecirc;n ng&agrave;nh Quản trị Kinh doanh v&agrave; T&agrave;i ch&iacute;nh ng&acirc;n h&agrave;ng.</p>\r\n\r\n<p><img alt=\"TBTN122015 03\" src=\"http://thanglong.edu.vn/images/CTSV/TBTN122015_03.jpg\" style=\"margin:0px\" /></p>\r\n\r\n<p><em>Thầy Nguyễn Văn Th&aacute;i &ndash; Trưởng Ph&ograve;ng H&agrave;nh ch&iacute;nh &ndash; Tổng hợp c&ocirc;ng bố Quyết định tốt nghiệp đại học ch&iacute;nh quy v&agrave; tốt nghiệp thạc sĩ</em></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Trong kh&ocirc;ng kh&iacute; trang nghi&ecirc;m, phấn khởi của buổi lễ, TS. Phan Huy Ph&uacute; &ndash; Hiệu trưởng nh&agrave; trường đ&atilde; trao tận tay c&aacute;c t&acirc;n cử nh&acirc;n, t&acirc;n Thạc sỹ tấm bằng danh gi&aacute;, th&agrave;nh quả m&agrave; c&aacute;c sinh vi&ecirc;n, học vi&ecirc;n đ&atilde; miệt m&agrave;i, phấn đấu, r&egrave;n luyện trong thời gian học tập tại trường. Một niềm vinh dự, tự h&agrave;o đối với c&aacute;c t&acirc;n cử nh&acirc;n, t&acirc;n Thạc sĩ l&agrave; được trao bằng tốt nghiệp v&agrave;o dịp kỷ niệm 27 năm ng&agrave;y th&agrave;nh lập trường, đ&oacute; l&agrave; thời khắc đ&aacute;ng nhớ của tất cả sinh vi&ecirc;n, học vi&ecirc;n đ&atilde; từng gắn b&oacute; với ng&ocirc;i trường Đại học Thăng Long th&acirc;n y&ecirc;u.</p>\r\n\r\n<p><img alt=\"TBTN122015 04\" src=\"http://thanglong.edu.vn/images/CTSV/TBTN122015_04.jpg\" style=\"margin:0px\" /></p>\r\n\r\n<p><img alt=\"TBTN122015 05\" src=\"http://thanglong.edu.vn/images/CTSV/TBTN122015_05.jpg\" style=\"margin:0px\" /></p>\r\n\r\n<p><img alt=\"TBTN122015 06\" src=\"http://thanglong.edu.vn/images/CTSV/TBTN122015_06.jpg\" style=\"margin:0px\" /></p>\r\n\r\n<p><em>TS. Phan Huy Ph&uacute; &ndash; Hiệu trưởng nh&agrave; trường&nbsp;</em><em>trao bằng tốt nghiệp cho c&aacute;c t&acirc;n cử nh&acirc;n v&agrave; t&acirc;n thạc sĩ</em></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Đại diện cho 63 sinh vi&ecirc;n được nhận bằng tốt nghiệp, sinh vi&ecirc;n Nguyễn V&acirc;n Anh &ndash; A20931 ph&aacute;t biểu cảm nghĩ, gửi lời tri &acirc;n tới nh&agrave; trường v&agrave; gia đ&igrave;nh: &ldquo;<em>Em cảm thấy rất vui mừng phấn khởi, tự h&agrave;o khi nhận tấm bằng tr&ecirc;n tay. Em hi vọng rằng tấm bằng v&agrave; kiến thức học được sẽ l&agrave; ch&igrave;a kh&oacute;a mở cửa, gi&uacute;p em vững bước tr&ecirc;n con đường c&ocirc;ng danh của m&igrave;nh sắp tới. Em xin ch&acirc;n th&agrave;nh cảm ơn tới sự d&igrave;u dắt tận t&igrave;nh cảu thầy c&ocirc; gi&aacute;o, c&ugrave;ng sự tạo điều kiện tối đa của nh&agrave; trường v&agrave; gia đ&igrave;nh để em c&oacute; được th&agrave;nh quả như h&ocirc;m nay&rdquo;.</em></p>', 1, NULL, 4, '2019-02-12 00:20:53', '2019-02-12 00:21:03');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(10) UNSIGNED NOT NULL,
  `project_instructor` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `project_confectioner` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `project_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `project_img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `project_content` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `project_data_start` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `project_data_finish` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `project_gallery` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `project_type` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `project_instructor`, `project_confectioner`, `project_name`, `project_img`, `project_content`, `project_data_start`, `project_data_finish`, `project_gallery`, `project_type`, `created_at`, `updated_at`) VALUES
(2, 'Cường', 'Quân', 'Tập bơi', NULL, '<p>fsa</p>', '2019-01-25', '2019-02-03', NULL, NULL, '2019-01-10 03:19:51', '2019-01-10 03:19:51'),
(3, 'dsfdsf', 'fdsfds', 'fsdfdsfsf', NULL, '<p>fds</p>', '2019-01-12', '2019-01-18', NULL, NULL, '2019-01-14 21:31:01', '2019-01-14 21:31:01'),
(4, 'fdsfdsf', 'fdsfdsf', 'dsfdff', NULL, '<p>fds</p>', '2019-01-16', '2019-01-20', NULL, NULL, '2019-01-14 21:31:41', '2019-01-14 21:31:41'),
(5, 'fffffffffs', 'fdfdf', 'fffffff', 'uploads/projects/5/1552050034-31(1).png', '<p>fd</p>', '2019-01-11', '2019-01-18', 'projects/5/messages/8noP0GcT2WFS6U5IA4KgsO9H11iFAvFb0m7MhiPq.png', 'kltn', '2019-01-14 21:33:29', '2019-03-08 06:00:34'),
(6, 'Mai Thúy Nga', 'Đậu Minh Quân', 'Hệ thống kết nối đại học thăng long với uec', 'uploads/projects/6/1549958155-48923824_1972709192842145_1513714691799515136_n.jpg', '<p>đ&atilde; ho&agrave;n th&agrave;nh.</p>', '2019-01-02', '2019-01-31', NULL, NULL, '2019-02-12 00:55:55', '2019-02-12 00:55:55'),
(7, 'Nguyễn Minh Hòa', 'Nguyễn Thọ Việt', 'Lập trình hệ thống hỗ trợ kết nối trên nền tảng java', 'uploads/projects/7/1549961098-46459181_1689740161130121_3947295371335565312_n.jpg', '<p>Đ&atilde; ho&agrave;n th&agrave;nh.</p>', '2019-01-28', '2019-02-23', NULL, NULL, '2019-02-12 01:44:58', '2019-02-12 01:44:58');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(10) UNSIGNED NOT NULL,
  `student_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `student_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `student_phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `student_avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `student_name`, `student_code`, `student_email`, `student_phone`, `student_avatar`, `created_at`, `updated_at`) VALUES
(1, 'Hạ Văn Lương', 'a23465', 'hvl@gmail.com', '4234324', 'uploads/students/1/1547136369-waterfall_lake_summer_sunset_grass_92509_1366x768.jpg', '2019-01-10 09:06:08', '2019-01-10 09:06:09'),
(3, 'fdsf', 'aaaaaaaaa', 'haoti27@gmail.com', 'fdsf', 'uploads/students/3/1547136615-waterfall_lake_summer_sunset_grass_92509_1366x768.jpg', '2019-01-10 09:10:15', '2019-01-10 09:10:15'),
(4, 'trav va', 'a25288', 'tpn250196@gmail.com', '2432432432', 'uploads/students/4/1547346940-waterfall_lake_summer_sunset_grass_92509_1366x768.jpg', '2019-01-12 19:35:40', '2019-01-12 19:35:40'),
(6, 'Trần Đức Minh', 'a123123', 'consenicki@gmail.com', '324324', 'uploads/students/6/1547350899-waterfall_lake_summer_sunset_grass_92509_1366x768.jpg', '2019-01-12 20:41:39', '2019-01-12 21:09:03');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` int(10) UNSIGNED NOT NULL,
  `teacher_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `teacher_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `teacher_phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `teacher_avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `teacher_name`, `teacher_email`, `teacher_phone`, `teacher_avatar`, `created_at`, `updated_at`) VALUES
(2, 'fsdf', 'a@gmail.com', 'fdsf', 'uploads/teachers/2/1547138531-waterfall_lake_summer_sunset_grass_92509_1366x768.jpg', '2019-01-10 09:36:19', '2019-01-10 09:42:11'),
(3, 'fsdfsdf', 'hfsdfaoti27@gmail.com', 'fsdfs', 'uploads/teachers/3/1547138369-razer_adaro_headphones_stereo_headphones_glare_99445_1366x768.jpg', '2019-01-10 09:39:29', '2019-01-10 09:39:29'),
(4, 'Lê Thị T', 'gv@gmail.com', '0978665443', NULL, '2019-01-12 20:43:16', '2019-01-22 02:54:12'),
(6, 'Đỗ Nhật Anh', 'consenicki@gmail.com', '423423', NULL, '2019-02-26 02:19:41', '2019-02-26 02:19:41');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` tinyint(1) DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci,
  `student_id` int(10) DEFAULT NULL,
  `teacher_id` int(10) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `level`, `avatar`, `content`, `student_id`, `teacher_id`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'nam tran', 'phuongnam250196@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$jjgxNnfE05Ldpn/OV.UUZui.d5aBaDptKq5B6Ses1Yt.snnbgCDTC', NULL, '2019-01-07 09:52:38', '2019-01-07 09:52:38'),
(2, 'abc', 'ti27g1@gmail.com', 1, NULL, NULL, NULL, NULL, NULL, '123456', NULL, NULL, NULL),
(3, NULL, 'haoti27@gmail.com', 1, 'uploads/admin/3/1547019523-razer_adaro_headphones_stereo_headphones_glare_99445_1366x768.jpg', '<p>fafs</p>', NULL, NULL, NULL, '$2y$10$pMf/jGuSJHY4t7EoW1oYaurzhvIkqeO2IG8OYVKjXi27.3S5pT/QG', 'F6IWJYrITQbMk6yD6fGTA3aFIWXpaPwfVyYEny7SWH5EWiL9JQWgArwQMkbt', NULL, '2019-01-09 00:38:43'),
(4, 'a23465', 'hvl@gmail.com', 2, NULL, NULL, NULL, NULL, NULL, '$2y$10$kyN9fIdbfPdrURpb3bo75O1BTOm6QI3PYCLDkEnqX6cXU0L65Qrsi', NULL, '2019-01-10 09:07:08', '2019-01-10 09:07:08'),
(6, 'aaaaaaaaa', 'haoti27@fdfdgmail.com', 2, NULL, NULL, NULL, NULL, NULL, '$2y$10$2YJbcNOGPYS5cg6Z827LXO4mARymdWeNenOpnu8b66xGAVP.sRdim', NULL, '2019-01-10 09:10:25', '2019-01-10 09:10:25'),
(7, 'aaaaaaasffds', 'haotia27@gmail.com', 2, NULL, NULL, NULL, NULL, NULL, '$2y$10$UpltWXkLsQd5OdnxnS/uS.YgR5gHqD2K1mTNHfrPEt.DLbxFA7t0K', NULL, '2019-01-10 09:12:23', '2019-01-10 09:12:23'),
(8, 'C:\\xampp\\tmp\\php3954.tmp', 'C:\\xampp\\tmp\\php3954.tmp', 3, NULL, NULL, NULL, NULL, NULL, '$2y$10$vomF5UHdnn37DFNVH8yvUOg4dVEUAgZfO.m4sls4rcQmw2Lmpzuvm', NULL, '2019-01-10 09:34:55', '2019-01-10 09:34:55'),
(9, 'C:\\xampp\\tmp\\php8285.tmp', 'C:\\xampp\\tmp\\php8285.tmp', 3, NULL, NULL, NULL, NULL, NULL, '$2y$10$9FeQ4CIqBhCR1GrqdJz/H.d4FkAU9vJx.Q2Qc9dtAAoQdilgivDUq', NULL, '2019-01-10 09:36:19', '2019-01-10 09:36:19'),
(10, 'hfsdfaoti27@gmail.com', 'hfsdfaoti27@gmail.com', 3, NULL, NULL, NULL, NULL, NULL, '$2y$10$18bjPEKl7Rq5LxDdluyXxev99tFSzr6O3LKZz6jA7A8DdZekNa3TO', NULL, '2019-01-10 09:39:29', '2019-01-10 09:39:29'),
(12, 'a25288', 'tpn250196@gmail.com', 2, NULL, NULL, NULL, NULL, NULL, '$2y$10$0Y3ULuKyH54lkGdeAVm4weFHcLNtvwBtI3fzkfON31HWIYQEkVY66', 'RtBzKlp9d1SSxc2hAU7ao3Hn8uMSQIrA7gKmghkPfxU2a4unG0v6Y1qdCjSM', '2019-01-12 19:35:40', '2019-01-12 19:35:40'),
(13, 'a123123', 'haotfsfsfi27@gmail.com', 2, NULL, NULL, 6, NULL, NULL, '$2y$10$owxcb5HDUvrZcL9.sjnE6uinuMtIb6TqH91VRhmM6ZVK40NiA0JN2', 'BZTQItWFZvMadJm8VFolKDRweOxM67srECdGff39lrCFNZj6PpkqIcTrO1mg', '2019-01-12 20:41:39', '2019-02-11 23:34:11'),
(14, 'gv@gmail.com', 'gv@gmail.com', 3, NULL, NULL, NULL, 4, NULL, '$2y$10$MxNyfz2n.4R7ug0w36g3DOH20kkgZp/Tnt4zAFG/bl5RBKMBt9ane', '9fZopfbe18s70K25zkeZh1HLGNywgN4CP02QUZ3o7LmM2fRgHt6B3iUGR6vB', '2019-01-12 20:43:16', '2019-01-12 20:43:16'),
(16, 'consenicki@gmail.com', 'consenicki@gmail.com', 3, NULL, NULL, NULL, 6, NULL, '$2y$10$9u5MniF6yiKAko2dkPxGJuhNxAFzJAVCgLvnEz2dgT/iTRQOyBl76', NULL, '2019-02-26 02:19:41', '2019-02-26 02:19:41');

-- --------------------------------------------------------

--
-- Table structure for table `user_device`
--

CREATE TABLE `user_device` (
  `id` int(10) UNSIGNED NOT NULL,
  `count` int(11) DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(10) DEFAULT NULL,
  `device_id` int(10) UNSIGNED DEFAULT NULL,
  `student_id` int(10) UNSIGNED DEFAULT NULL,
  `teacher_id` int(10) UNSIGNED DEFAULT NULL,
  `date_finish` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_device`
--

INSERT INTO `user_device` (`id`, `count`, `type`, `status`, `device_id`, `student_id`, `teacher_id`, `date_finish`, `created_at`, `updated_at`) VALUES
(7, 1, NULL, 2, 1, 6, NULL, NULL, '2019-01-13 03:19:25', '2019-01-13 08:29:33'),
(8, 1, NULL, 0, 4, 6, NULL, NULL, '2019-01-13 03:25:08', '2019-01-13 08:24:31'),
(9, 1, NULL, 1, 1, 6, NULL, NULL, '2019-01-13 06:55:50', '2019-01-13 08:24:12'),
(10, 1, NULL, 3, 4, 6, NULL, '2019-01-23', '2019-01-15 02:19:40', '2019-01-22 03:10:12'),
(11, 1, NULL, 0, 3, 6, NULL, NULL, '2019-01-21 02:27:16', '2019-01-21 02:27:16'),
(12, 2, 'Cảm biến nhiệt', 2, 3, 6, NULL, '2019-01-18', '2019-01-21 02:53:44', '2019-01-21 20:52:26'),
(13, 2, 'Cảm biến nhiệt', 0, 4, 6, NULL, NULL, '2019-01-21 20:34:11', '2019-01-21 20:34:11'),
(14, 2, 'Cảm biến nhiệt', 1, 3, 6, NULL, NULL, '2019-01-21 21:16:41', '2019-01-21 21:16:53'),
(15, 2, 'Cảm biến nhiệt', 3, 3, NULL, 4, '2019-01-04', '2019-01-22 03:02:30', '2019-01-22 03:18:40'),
(16, 3, 'Cảm biến nhiệt', 1, 1, NULL, 4, NULL, '2019-01-22 03:29:01', '2019-01-22 03:29:12'),
(17, 3, 'Cảm biến ẩm', 3, 1, NULL, 4, '2019-01-18', '2019-01-22 03:33:14', '2019-01-22 03:33:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `calendars`
--
ALTER TABLE `calendars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `devices`
--
ALTER TABLE `devices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_device`
--
ALTER TABLE `user_device`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `calendars`
--
ALTER TABLE `calendars`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `devices`
--
ALTER TABLE `devices`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user_device`
--
ALTER TABLE `user_device`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
