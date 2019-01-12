-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2019 at 10:01 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `azaruniv_bookstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `bank_orders`
--

CREATE TABLE IF NOT EXISTS `bank_orders` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cart_id` int(10) unsigned NOT NULL,
  `address` text,
  `phone` varchar(255) NOT NULL,
  `postal_code` varchar(255) DEFAULT NULL,
  `amount` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `bank_orders_cart_id_foreign` (`cart_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `bank_orders`
--

INSERT INTO `bank_orders` (`id`, `cart_id`, `address`, `phone`, `postal_code`, `amount`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 2, 'تبریز-خطیب', '03215469998', '2546523655', 60000, '2019-01-09 14:37:26', '2019-01-09 14:37:26', NULL),
(2, 2, 'تبریز خطیب-شهید رجایی', '09145821998', '5555555555', 60000, '2019-01-09 14:46:33', '2019-01-09 14:46:33', NULL),
(3, 1, 'fdfjdjfdklfj', '09145821998', '567866', 96000, '2019-01-09 15:11:32', '2019-01-09 15:11:32', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE IF NOT EXISTS `books` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `publisher` varchar(255) NOT NULL,
  `publication_date` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `name`, `author`, `description`, `publisher`, `publication_date`, `price`, `stock`, `image_path`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'ریاضی 2', 'توماس', 'لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.', 'انتشارات شهید مدنی', '1397', 50000, 0, '/img/book1.jpg', '2018-12-14 20:30:00', '2018-12-14 20:30:00', NULL),
(2, 'فیزیک2', 'هالیدی', 'لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.', 'انتشارات شهید مدنی', '1397', 30, 10, '/img/book1.jpg', '2018-12-14 20:30:00', '2018-12-14 20:30:00', NULL),
(3, 'فیزیک2', 'هالیدی', 'لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.', 'انتشارات شهید مدنی', '1397', 21000, 10, '/img/book1.jpg', '2018-12-14 20:30:00', '2018-12-14 20:30:00', NULL),
(4, 'فیزیک2', 'هالیدی', 'لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.', 'انتشارات شهید مدنی', '1397', 22000, 10, '/img/book1.jpg', '2018-12-14 20:30:00', '2018-12-14 20:30:00', NULL),
(5, 'فیزیک2', 'هالیدی', 'لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.', 'انتشارات شهید مدنی', '1397', 20000, 10, '/img/book1.jpg', '2018-12-14 20:30:00', '2018-12-14 20:30:00', NULL),
(6, 'روانشناسی1111', 'دکتر احمدی1111', '11111111111لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.', 'دانشگاه شهید مدنی1111111', '139611111111', 32000, 3, 'uploads/images/books/2019/01/09d02h14m1CHn4OLpeX.png', '2019-01-09 10:15:42', '2019-01-09 14:54:09', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE IF NOT EXISTS `carts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `carts_user_id_foreign` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `user_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, '2019-01-07 20:30:00', '2019-01-07 20:30:00', NULL),
(2, 3, '2019-01-09 11:04:32', '2019-01-09 11:04:32', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cart_contents`
--

CREATE TABLE IF NOT EXISTS `cart_contents` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cart_id` int(10) unsigned NOT NULL,
  `book_id` int(10) unsigned NOT NULL,
  `count` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `cart_contents_cart_id_foreign` (`cart_id`),
  KEY `cart_contents_book_id_foreign` (`book_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `cart_contents`
--

INSERT INTO `cart_contents` (`id`, `cart_id`, `book_id`, `count`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 2, 1, 1, '2019-01-07 20:30:00', '2019-01-09 12:29:00', '2019-01-09 12:29:00'),
(2, 2, 2, 6, '2019-01-09 11:41:04', '2019-01-09 12:55:37', '2019-01-09 12:55:37'),
(3, 2, 3, 5, '2019-01-09 11:43:20', '2019-01-09 13:16:37', '2019-01-09 13:16:37'),
(4, 2, 6, 5, '2019-01-09 11:58:43', '2019-01-09 13:16:38', '2019-01-09 13:16:38'),
(5, 2, 2, 1, '2019-01-09 13:16:46', '2019-01-09 13:20:15', '2019-01-09 13:20:15'),
(6, 2, 2, 2, '2019-01-09 13:29:28', '2019-01-11 20:57:10', '2019-01-11 20:57:10'),
(7, 1, 4, 4, '2019-01-09 15:00:45', '2019-01-09 15:05:28', '2019-01-09 15:05:28'),
(8, 1, 6, 1, '2019-01-09 15:10:22', '2019-01-09 18:58:10', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=15 ;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_12_12_100131_create_books_table', 2),
(4, '2018_12_12_101832_create_sliders_table', 2),
(5, '2018_12_12_102300_create_payments_table', 2),
(6, '2018_12_12_102315_create_carts_table', 2),
(7, '2018_12_12_110429_create_cart_contents_table', 2),
(8, '2018_12_12_110557_create_orders_table', 2),
(9, '2018_12_12_111055_create_order_contents_table', 2),
(10, '2019_01_08_100808_add_role_to_users_table', 3),
(11, '2019_01_08_105232_add_some_fields_to_orders_table', 4),
(12, '2019_01_08_203911_add_post_trace_number_to_orders_table', 5),
(13, '2019_01_08_205407_add_price_to_order_contents_table', 6),
(14, '2019_01_09_171736_create_bank_orders_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `payment_id` int(10) unsigned NOT NULL,
  `address` text NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `postal_code` varchar(255) DEFAULT NULL,
  `is_sent` tinyint(1) NOT NULL,
  `trace_no` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `orders_user_id_foreign` (`user_id`),
  KEY `orders_payment_id_foreign` (`payment_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `payment_id`, `address`, `phone`, `postal_code`, `is_sent`, `trace_no`, `created_at`, `updated_at`, `deleted_at`) VALUES
(3, 3, 1, 'تبریز-راه آهن-میدان خطیب-کوی گلستان-کوچه نیلوفر-پلاک66', '09787678988', '2222222222', 1, '34343', '2019-01-07 20:30:00', '2019-01-09 10:49:11', NULL),
(4, 3, 1, 'تبریز-راه آهن-میدان خطیب-کوی گلستان-کوچه نیلوفر-پلاک66', '09787678988', '2222222222', 1, '12323', '2019-01-07 20:30:00', '2019-01-07 20:30:00', NULL),
(5, 3, 1, 'تبریز-راه آهن-میدان خطیب-کوی گلستان-کوچه نیلوفر-پلاک66', '09787678988', '2222222222', 0, ' ', '2019-01-07 20:30:00', '2019-01-09 19:01:17', NULL),
(6, 3, 1, 'تبریز-راه آهن-میدان خطیب-کوی گلستان-کوچه نیلوفر-پلاک66', '09787678988', '2222222222', 0, '', '2019-01-07 20:30:00', '2019-01-09 14:55:05', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `order_contents`
--

CREATE TABLE IF NOT EXISTS `order_contents` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` int(10) unsigned NOT NULL,
  `book_id` int(10) unsigned NOT NULL,
  `count` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `order_contents_order_id_foreign` (`order_id`),
  KEY `order_contents_book_id_foreign` (`book_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `order_contents`
--

INSERT INTO `order_contents` (`id`, `order_id`, `book_id`, `count`, `price`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 3, 1, 10, 89000, '2019-01-07 20:30:00', '2019-01-07 20:30:00', NULL),
(2, 3, 1, 5, 44500, '2019-01-07 20:30:00', '2019-01-07 20:30:00', NULL),
(3, 4, 1, 10, 89000, '2019-01-07 20:30:00', '2019-01-07 20:30:00', NULL),
(4, 4, 1, 5, 44500, '2019-01-07 20:30:00', '2019-01-07 20:30:00', NULL),
(5, 5, 1, 5, 44500, '2019-01-07 20:30:00', '2019-01-07 20:30:00', NULL),
(6, 6, 1, 5, 44500, '2019-01-07 20:30:00', '2019-01-07 20:30:00', NULL),
(7, 4, 1, 2, 22000, '2019-01-07 20:30:00', '2019-01-07 20:30:00', NULL),
(8, 4, 2, 2, 22000, '2019-01-07 20:30:00', '2019-01-07 20:30:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE IF NOT EXISTS `payments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `amount` int(11) NOT NULL,
  `is_success` tinyint(1) NOT NULL,
  `retrival_ref_no` varchar(255) NOT NULL,
  `system_trace_no` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `payments_user_id_foreign` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `user_id`, `amount`, `is_success`, `retrival_ref_no`, `system_trace_no`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 10000, 1, '123', '123', '2019-01-07 20:30:00', '2019-01-07 20:30:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE IF NOT EXISTS `sliders` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `image_path` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `image_path`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'uploads/images/sliders/2019/01/08d11h53mXym3nnktHD.jpg', '2019-01-08 20:23:23', '2019-01-08 20:23:47', '2019-01-08 20:23:47'),
(2, 'uploads/images/sliders/2019/01/08d11h54mUQlF4VaSqo.jpg', '2019-01-08 20:24:08', '2019-01-09 09:52:56', '2019-01-09 09:52:56'),
(3, 'uploads/images/sliders/2019/01/08d11h54mATF64NdiC9.jpg', '2019-01-08 20:24:14', '2019-01-08 20:24:14', NULL),
(4, 'uploads/images/sliders/2019/01/09d01h23mUMFUuQKMRZ.jpg', '2019-01-09 09:53:10', '2019-01-09 09:53:10', NULL),
(5, 'uploads/images/sliders/2019/01/09d06h19mTb7u1z05lH.png', '2019-01-09 14:49:35', '2019-01-09 14:49:35', NULL),
(6, 'uploads/images/sliders/2019/01/09d10h33m0BQK0vcBGB.jpg', '2019-01-09 19:03:40', '2019-01-09 19:03:40', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  UNIQUE KEY `users_phone_unique` (`phone`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `role`, `password`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'محسن فرجامی', 'mohsen1@gmail.com', '03654595522', 'user', '$2y$10$cQ1Ec.iEFyi42oQ/ZUy0Me2ElaZAhmKcChR9eRMdMT4EOA/QZY47.', 'MB2OPzcxsP4oL9OJVqSldctidpqskUwBEmJ2LlHwQoOUoS2lg5LE8mZFwD6O', '2018-12-14 20:30:00', '2018-12-14 20:30:00', NULL),
(2, 'محسن فرجامی', 'mohsen@gmail.com', '09090900000', 'admin', '$2y$10$cQ1Ec.iEFyi42oQ/ZUy0Me2ElaZAhmKcChR9eRMdMT4EOA/QZY47.', 'Nd2mQlkRR1HWUXnFfj8mcnAcWLUEmA7FqtpTz8Jk5aOgS3oOq1auKjHmwZli', '2019-01-08 16:36:44', '2019-01-08 16:36:44', NULL),
(3, 'محسن فرجامی', 'mohsen2@gmail.com', '02154546545', 'user', '$2y$10$ImbJQHOTzjGnhP1PgpzpIuo4xeIxSA4UkOj/LJ/ZaG7HxNsx8aWPq', 'qIM4Bv8uMJooHnSIdoV0brFzdH5meivVhMm9cJshp5fdYQwWeImtfg0VjiiO', '2019-01-09 11:04:32', '2019-01-09 11:04:32', NULL);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bank_orders`
--
ALTER TABLE `bank_orders`
  ADD CONSTRAINT `bank_orders_cart_id_foreign` FOREIGN KEY (`cart_id`) REFERENCES `carts` (`id`);

--
-- Constraints for table `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `cart_contents`
--
ALTER TABLE `cart_contents`
  ADD CONSTRAINT `cart_contents_book_id_foreign` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`),
  ADD CONSTRAINT `cart_contents_cart_id_foreign` FOREIGN KEY (`cart_id`) REFERENCES `carts` (`id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_payment_id_foreign` FOREIGN KEY (`payment_id`) REFERENCES `payments` (`id`),
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `order_contents`
--
ALTER TABLE `order_contents`
  ADD CONSTRAINT `order_contents_book_id_foreign` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`),
  ADD CONSTRAINT `order_contents_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`);

--
-- Constraints for table `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `payments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
