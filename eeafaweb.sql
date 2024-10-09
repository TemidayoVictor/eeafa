-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2024 at 11:18 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eeafaweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `applications`
--

CREATE TABLE `applications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `gender` varchar(255) NOT NULL,
  `school` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `degree` varchar(255) NOT NULL,
  `ssce` varchar(255) NOT NULL,
  `certificate` varchar(255) NOT NULL,
  `cover_letter` longtext NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `ref1` varchar(255) DEFAULT NULL,
  `ref2` varchar(255) DEFAULT NULL,
  `exam` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `applications`
--

INSERT INTO `applications` (`id`, `first_name`, `last_name`, `phone`, `address`, `gender`, `school`, `course`, `year`, `degree`, `ssce`, `certificate`, `cover_letter`, `email`, `created_at`, `updated_at`, `status`, `ref1`, `ref2`, `exam`) VALUES
(3, 'Obyoma', 'Onah', '08139943639', 'No 1, Harmony Estate', 'Female', 'Federal University of Technology Akure', 'Nursing', '2021', 'First Class', 'http://127.0.0.1:8000/ssce/1724327657.png', 'http://127.0.0.1:8000/certifications/1724327657.png', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis nostrum quod error, numquam aliquid enim quidem sit aspernatur. Commodi, fugit recusandae numquam veritatis consequuntur est adipisci quasi nostrum voluptates amet id, ipsa molestias nesciunt voluptatibus esse pariatur autem magni rem iusto quaerat. Debitis quia dignissimos illum aspernatur temporibus ex maxime.', 'obyomaonah@gmail.com', '2024-08-22 09:54:17', '2024-08-22 12:50:25', 'Unapproved', NULL, NULL, NULL),
(4, 'Christopher', 'Owusu', '08139943639', 'No 1, Harmony Estate', 'Male', 'school', 'course', 'year', 'degree', 'http://127.0.0.1:8000/ssce/1724969489.png', 'http://127.0.0.1:8000/certifications/1724969489.png', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Modi explicabo sit error dolorum ut, veritatis vero. Quidem, beatae. Iste sapiente obcaecati doloremque provident molestias cupiditate rem esse accusamus possimus quis?\r\n\r\nLorem ipsum dolor sit amet consectetur, adipisicing elit. Modi explicabo sit error dolorum ut, veritatis vero. Quidem, beatae. Iste sapiente obcaecati doloremque provident molestias cupiditate rem esse accusamus possimus quis?\r\n\r\nLorem ipsum dolor sit amet consectetur, adipisicing elit. Modi explicabo sit error dolorum ut, veritatis vero. Quidem, beatae. Iste sapiente obcaecati doloremque provident molestias cupiditate rem esse accusamus possimus quis?', 'owusuchris@gmail.com', '2024-08-29 20:11:29', '2024-08-29 20:11:29', 'Unapproved', NULL, NULL, NULL),
(6, 'Obyoma', 'Onah', '08139943639', 'No 1, Harmony Estate', 'Female', 'school', 'course', 'year', 'degree', 'http://127.0.0.1:8000/ssce/1725306990.png', 'http://127.0.0.1:8000/certifications/1725306990.jpg', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque culpa amet voluptate doloribus explicabo, voluptatibus eos, odit eligendi nam, dolorem harum architecto error! Perspiciatis labore consequatur perferendis iure consequuntur. In, rem labore dolore possimus tenetur numquam voluptatem quasi totam autem officia voluptatum delectus et commodi assumenda enim at quas eveniet.\r\n\r\n                Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque culpa amet voluptate doloribus explicabo, voluptatibus eos, odit eligendi nam, dolorem harum architecto error! Perspiciatis labore consequatur perferendis iure consequuntur. In, rem labore dolore possimus tenetur numquam voluptatem quasi totam autem officia voluptatum delectus et commodi assumenda enim at quas eveniet.\r\n\r\n                Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque culpa amet voluptate doloribus explicabo, voluptatibus eos, odit eligendi nam, dolorem harum architecto error! Perspiciatis labore consequatur perferendis iure consequuntur. In, rem labore dolore possimus tenetur numquam voluptatem quasi totam autem officia voluptatum delectus et commodi assumenda enim at quas eveniet.', 'obyomaonah2@gmail.com', '2024-09-02 17:56:30', '2024-09-02 17:56:30', 'Unapproved', NULL, NULL, NULL),
(14, 'Obianuju', 'Udechukwu', '08139943639', 'No 1, Harmony Estate', 'Female', 'school', 'course', 'year', 'degree', 'http://127.0.0.1:8000/ssce/1725546486.png', 'http://127.0.0.1:8000/certifications/1725546486001.png', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque culpa amet voluptate doloribus explicabo, voluptatibus eos, odit eligendi nam, dolorem harum architecto error! Perspiciatis labore c\r\n\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque culpa amet voluptate doloribus explicabo, voluptatibus eos, odit eligendi nam, dolorem harum architecto error! Perspiciatis labore c', 'obianuju@gmail.com', '2024-09-05 12:28:06', '2024-09-05 12:28:06', 'Unapproved', 'references/Obianuju_Udechukwu_reference1_1725546486.docx', 'references/Obianuju_Udechukwu_reference2_1725546486.pdf', 'http://127.0.0.1:8000/certifications/1725546486002.png'),
(15, 'Augustina', 'Chukwuka', '08139943639', 'No 1, Harmony Estate', 'Female', 'school', 'course', 'year', 'degree', 'http://127.0.0.1:8000/ssce/1725547369.png', 'http://127.0.0.1:8000/certifications/1725547369001.png', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque culpa amet voluptate doloribus explicabo, voluptatibus eos, odit eligendi nam, dolorem harum architecto error! Perspiciatis labore c\r\n\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque culpa amet voluptate doloribus explicabo, voluptatibus eos, odit eligendi nam, dolorem harum architecto error! Perspiciatis labore c', 'augustina@gmail.com', '2024-09-05 12:42:49', '2024-09-05 12:42:49', 'Unapproved', 'references/Augustina_Chukwuka_reference1_.docx', 'references/Augustina_Chukwuka_reference2_.pdf', 'http://127.0.0.1:8000/certifications/1725547369002.png'),
(16, 'Emeka', 'Obi', '08139943639', 'No 1, Harmony Estate', 'Male', 'school', 'course', 'year', 'degree', 'http://127.0.0.1:8000/ssce/1725981274.png', 'http://127.0.0.1:8000/certifications/1725981274001.png', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni quam porro consequatur accusamus pariatur in officia quidem harum amet beatae.\r\n\r\n    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni quam porro consequatur accusamus pariatur in officia quidem harum amet beatae.\r\n\r\n    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni quam porro consequatur accusamus pariatur in officia quidem harum amet beatae.', 'emaob@gmail.com', '2024-09-10 13:14:34', '2024-09-10 13:14:34', 'Unapproved', 'references/Emeka_Obi_reference1_.pdf', 'references/Emeka_Obi_reference2_.docx', 'http://127.0.0.1:8000/certifications/1725981274002.png'),
(17, 'Chuka', 'Amadi', '08139943639', 'No 1, Harmony Estate, Benin City', 'Male', 'school', 'course', 'year', 'degree', 'http://localhost:8000/ssce/1727950703.png', 'http://localhost:8000/certifications/1727950703001.png', '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dicta, nam! Reprehenderit, explicabo blanditiis nostrum ea ducimus autem officiis cum tempora aspernatur doloremque laboriosam? Similique a quas quis, voluptatem obcaecati animi?</p>\r\n<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dicta, nam! Reprehenderit, explicabo blanditiis nostrum ea ducimus autem officiis cum tempora aspernatur doloremque laboriosam? Similique a quas quis, voluptatem obcaecati animi?</p>\r\n<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dicta, nam! Reprehenderit, explicabo blanditiis nostrum ea ducimus autem officiis cum tempora aspernatur doloremque laboriosam? Similique a quas quis, voluptatem obcaecati animi?</p>', 'chukaamadi@gmail.com', '2024-10-03 08:18:24', '2024-10-03 08:18:24', 'Unapproved', 'references/Chuka_Amadi_reference1_.pdf', 'references/Chuka_Amadi_reference2_.docx', 'http://localhost:8000/certifications/1727950703002.png');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` longtext NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `image`, `title`, `body`, `status`, `created_at`, `updated_at`) VALUES
(1, 'http://127.0.0.1:8000/blogimages/1724364360.png', 'Article Title 1', 'Edited Copy Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquam quia dolor vero harum repellendus officia, nemo similique, saepe error deleniti iure odit accusamus architecto ea repellat cum dicta. Non aperiam eos accusantium, alias dolore quasi voluptate odio nihil consectetur odit. Quisquam veniam voluptate possimus fugit autem sit doloribus voluptas iure.\r\n\r\nLorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquam quia dolor vero harum repellendus officia, nemo similique, saepe error deleniti iure odit accusamus architecto ea repellat cum dicta. Non aperiam eos accusantium, alias dolore quasi voluptate odio nihil consectetur odit. Quisquam veniam voluptate possimus fugit autem sit doloribus voluptas iure.\r\n\r\nLorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquam quia dolor vero harum repellendus officia, nemo similique, saepe error deleniti iure odit accusamus architecto ea repellat cum dicta. Non aperiam eos accusantium, alias dolore quasi voluptate odio nihil consectetur odit. Quisquam veniam voluptate possimus fugit autem sit doloribus voluptas iure.\r\n\r\nLorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquam quia dolor vero harum repellendus officia, nemo similique, saepe error deleniti iure odit accusamus architecto ea repellat cum dicta. Non aperiam eos accusantium, alias dolore quasi voluptate odio nihil consectetur odit. Quisquam veniam voluptate possimus fugit autem sit doloribus voluptas iure.', 'Inactive', '2024-08-22 17:55:32', '2024-08-22 20:22:31'),
(2, 'http://127.0.0.1:8000/blogimages/1724357263.png', 'Article Title', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint neque eius molestias blanditiis tenetur fuga aut reiciendis soluta dolores nisi odit expedita esse accusantium inventore tempore sequi, qui perspiciatis harum vel quae. Aliquam natus eos doloremque molestiae quos, magnam quis ipsa! Id ad sint quibusdam labore laboriosam officia placeat quidem.</p>\r\n<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint neque eius molestias blanditiis tenetur fuga aut reiciendis soluta dolores nisi odit expedita esse accusantium inventore tempore sequi, qui perspiciatis harum vel quae. Aliquam natus eos doloremque molestiae quos, magnam quis ipsa! Id ad sint quibusdam labore laboriosam officia placeat quidem.</p>\r\n<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint neque eius molestias blanditiis tenetur fuga aut reiciendis soluta dolores nisi odit expedita esse accusantium inventore tempore sequi, qui perspiciatis harum vel quae. Aliquam natus eos doloremque molestiae quos, magnam quis ipsa! Id ad sint quibusdam labore laboriosam officia placeat quidem.</p>', 'Active', '2024-08-22 18:07:43', '2024-08-29 21:12:21'),
(3, 'http://127.0.0.1:8000/blogimages/1724365482.jpg', 'Nursing Opportunities In Canada', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint neque eius molestias blanditiis tenetur fuga aut reiciendis soluta dolores nisi odit expedita esse accusantium inventore tempore sequi, qui perspiciatis harum vel quae. Aliquam natus eos doloremque molestiae quos, magnam quis ipsa! Id ad sint quibusdam labore laboriosam officia placeat quidem.</p>\r\n<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint neque eius molestias blanditiis tenetur fuga aut reiciendis soluta dolores nisi odit expedita esse accusantium inventore tempore sequi, qui perspiciatis harum vel quae. Aliquam natus eos doloremque molestiae quos, magnam quis ipsa! Id ad sint quibusdam labore laboriosam officia placeat quidem.</p>\r\n<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint neque eius molestias blanditiis tenetur fuga aut reiciendis soluta dolores nisi odit expedita esse accusantium inventore tempore sequi, qui perspiciatis harum vel quae. Aliquam natus eos doloremque molestiae quos, magnam quis ipsa! Id ad sint quibusdam labore laboriosam officia placeat quidem.</p>', 'Active', '2024-08-22 19:05:21', '2024-08-29 21:12:02'),
(4, 'http://127.0.0.1:8000/blogimages/1724413092.webp', 'The Nurses Heart', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse nisi distinctio sequi harum, eos placeat repudiandae tempora ad tempore eum ea vero soluta tenetur nulla minus? Earum, veniam in saepe deserunt quia, magni dolorem tempora dolores at maxime labore atque odio cupiditate quisquam non. Nostrum expedita assumenda molestias molestiae eveniet.</p>\r\n<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse nisi distinctio sequi harum, eos placeat repudiandae tempora ad tempore eum ea vero soluta tenetur nulla minus? Earum, veniam in saepe deserunt quia, magni dolorem tempora dolores at maxime labore atque odio cupiditate quisquam non. Nostrum expedita assumenda molestias molestiae eveniet.</p>\r\n<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse nisi distinctio sequi harum, eos placeat repudiandae tempora ad tempore eum ea vero soluta tenetur nulla minus? Earum, veniam in saepe deserunt quia, magni dolorem tempora dolores at maxime labore atque odio cupiditate quisquam non. Nostrum expedita assumenda molestias molestiae eveniet.</p>', 'Active', '2024-08-23 09:38:12', '2024-08-29 21:07:11'),
(5, 'http://localhost:8000/blogimages/1727951981.png', 'Tytle', '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dicta, nam! Reprehenderit, explicabo blanditiis nostrum ea ducimus autem officiis cum tempora aspernatur doloremque laboriosam? Similique a quas quis, voluptatem obcaecati animi?</p>\r\n<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dicta, nam! Reprehenderit, explicabo blanditiis nostrum ea ducimus autem officiis cum tempora aspernatur doloremque laboriosam? Similique a quas quis, voluptatem obcaecati animi?</p>\r\n<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dicta, nam! Reprehenderit, explicabo blanditiis nostrum ea ducimus autem officiis cum tempora aspernatur doloremque laboriosam? Similique a quas quis, voluptatem obcaecati animi?</p>', 'Active', '2024-10-03 08:39:41', '2024-10-03 08:39:41');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` longtext NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `title`, `body`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Title', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint neque eius molestias blanditiis tenetur fuga aut reiciendis soluta dolores nisi odit expedita esse accusantium inventore tempore sequi, qui perspiciatis harum vel quae. Aliquam natus eos doloremque molestiae quos, magnam quis ipsa! Id ad sint quibusdam labore laboriosam officia placeat quidem.</p>\r\n<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint neque eius molestias blanditiis tenetur fuga aut reiciendis soluta dolores nisi odit expedita esse accusantium inventore tempore sequi, qui perspiciatis harum vel quae. Aliquam natus eos doloremque molestiae quos, magnam quis ipsa! Id ad sint quibusdam labore laboriosam officia placeat quidem.</p>\r\n<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint neque eius molestias blanditiis tenetur fuga aut reiciendis soluta dolores nisi odit expedita esse accusantium inventore tempore sequi, qui perspiciatis harum vel quae. Aliquam natus eos doloremque molestiae quos, magnam quis ipsa! Id ad sint quibusdam labore laboriosam officia placeat quidem.</p>', 'Active', '2024-08-22 21:22:10', '2024-08-29 21:13:50'),
(2, 'Event Title 2 Edit', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint neque eius molestias blanditiis tenetur fuga aut reiciendis soluta dolores nisi odit expedita esse accusantium inventore tempore sequi, qui perspiciatis harum vel quae. Aliquam natus eos doloremque molestiae quos, magnam quis ipsa! Id ad sint quibusdam labore laboriosam officia placeat quidem.</p>\r\n<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint neque eius molestias blanditiis tenetur fuga aut reiciendis soluta dolores nisi odit expedita esse accusantium inventore tempore sequi, qui perspiciatis harum vel quae. Aliquam natus eos doloremque molestiae quos, magnam quis ipsa! Id ad sint quibusdam labore laboriosam officia placeat quidem.</p>\r\n<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint neque eius molestias blanditiis tenetur fuga aut reiciendis soluta dolores nisi odit expedita esse accusantium inventore tempore sequi, qui perspiciatis harum vel quae. Aliquam natus eos doloremque molestiae quos, magnam quis ipsa! Id ad sint quibusdam labore laboriosam officia placeat quidem.</p>', 'Active', '2024-08-22 21:23:09', '2024-08-29 21:13:30'),
(3, 'Event Title 2', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint neque eius molestias blanditiis tenetur fuga aut reiciendis soluta dolores nisi odit expedita esse accusantium inventore tempore sequi, qui perspiciatis harum vel quae. Aliquam natus eos doloremque molestiae quos, magnam quis ipsa! Id ad sint quibusdam labore laboriosam officia placeat quidem.</p>\r\n<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint neque eius molestias blanditiis tenetur fuga aut reiciendis soluta dolores nisi odit expedita esse accusantium inventore tempore sequi, qui perspiciatis harum vel quae. Aliquam natus eos doloremque molestiae quos, magnam quis ipsa! Id ad sint quibusdam labore laboriosam officia placeat quidem.</p>\r\n<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint neque eius molestias blanditiis tenetur fuga aut reiciendis soluta dolores nisi odit expedita esse accusantium inventore tempore sequi, qui perspiciatis harum vel quae. Aliquam natus eos doloremque molestiae quos, magnam quis ipsa! Id ad sint quibusdam labore laboriosam officia placeat quidem.</p>', 'Active', '2024-08-22 21:33:09', '2024-08-29 21:13:08'),
(4, 'Event 3', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint neque eius molestias blanditiis tenetur fuga aut reiciendis soluta dolores nisi odit expedita esse accusantium inventore tempore sequi, qui perspiciatis harum vel quae. Aliquam natus eos doloremque molestiae quos, magnam quis ipsa! Id ad sint quibusdam labore laboriosam officia placeat quidem.</p>\r\n<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint neque eius molestias blanditiis tenetur fuga aut reiciendis soluta dolores nisi odit expedita esse accusantium inventore tempore sequi, qui perspiciatis harum vel quae. Aliquam natus eos doloremque molestiae quos, magnam quis ipsa! Id ad sint quibusdam labore laboriosam officia placeat quidem.</p>\r\n<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint neque eius molestias blanditiis tenetur fuga aut reiciendis soluta dolores nisi odit expedita esse accusantium inventore tempore sequi, qui perspiciatis harum vel quae. Aliquam natus eos doloremque molestiae quos, magnam quis ipsa! Id ad sint quibusdam labore laboriosam officia placeat quidem.</p>', 'Active', '2024-08-22 21:35:00', '2024-08-29 21:12:50'),
(5, 'Event Title 4 Corrected', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis expedita asperiores explicabo. Sapiente iure beatae dicta enim eaque obcaecati porro culpa dolore dolores rerum laudantium esse eveniet, explicabo, quibusdam aut, rem quasi veritatis odit sit sequi maxime? Amet voluptate quibusdam exercitationem laborum totam, pariatur sed libero mollitia nihil nam. Iusto.\r\n\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Nobis expedita asperiores explicabo. Sapiente iure beatae dicta enim eaque obcaecati porro culpa dolore dolores rerum laudantium esse eveniet, explicabo, quibusdam aut, rem quasi veritatis odit sit sequi maxime? Amet voluptate quibusdam exercitationem laborum totam, pariatur sed libero mollitia nihil nam. Iusto.\r\n\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Nobis expedita asperiores explicabo. Sapiente iure beatae dicta enim eaque obcaecati porro culpa dolore dolores rerum laudantium esse eveniet, explicabo, quibusdam aut, rem quasi veritatis odit sit sequi maxime? Amet voluptate quibusdam exercitationem laborum totam, pariatur sed libero mollitia nihil nam. Iusto.', 'Inactive', '2024-08-22 21:37:27', '2024-08-22 22:53:38');

-- --------------------------------------------------------

--
-- Table structure for table `galleryassets`
--

CREATE TABLE `galleryassets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gallery_id` bigint(20) NOT NULL,
  `asset` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleryassets`
--

INSERT INTO `galleryassets` (`id`, `gallery_id`, `asset`, `type`, `status`, `created_at`, `updated_at`) VALUES
(2, 1, 'http://127.0.0.1:8000/galleryimages/8560642.jpg', 'image', 'Active', '2024-08-22 21:22:11', '2024-08-22 21:22:11'),
(3, 1, 'http://127.0.0.1:8000/galleryimages/6231203.jpg', 'image', 'Active', '2024-08-22 21:22:11', '2024-08-22 21:22:11'),
(4, 2, 'http://127.0.0.1:8000/galleryimages/7493271.png', 'image', 'Active', '2024-08-22 22:32:48', '2024-08-22 22:32:48'),
(5, 2, 'http://127.0.0.1:8000/galleryimages/3615752.png', 'image', 'Active', '2024-08-22 22:32:48', '2024-08-22 22:32:48'),
(6, 5, 'http://127.0.0.1:8000/galleryimages/2771441.jpg', 'image', 'Active', '2024-08-22 22:33:46', '2024-08-22 22:33:46'),
(7, 5, 'http://127.0.0.1:8000/galleryimages/9935712.jpg', 'image', 'Active', '2024-08-22 22:33:46', '2024-08-22 22:33:46'),
(8, 5, 'http://127.0.0.1:8000/galleryimages/8101213.webp', 'image', 'Active', '2024-08-22 22:33:47', '2024-08-22 22:33:47'),
(9, 5, 'http://127.0.0.1:8000/galleryimages/7353444.jpg', 'image', 'Active', '2024-08-22 22:33:47', '2024-08-22 22:33:47'),
(10, 4, 'http://127.0.0.1:8000/galleryimages/7724051.png', 'image', 'Active', '2024-08-22 22:54:16', '2024-08-22 22:54:16'),
(11, 4, 'http://127.0.0.1:8000/galleryimages/1923432.png', 'image', 'Active', '2024-08-22 22:54:16', '2024-08-22 22:54:16'),
(12, 4, 'http://127.0.0.1:8000/galleryimages/5351213.png', 'image', 'Active', '2024-08-22 22:54:17', '2024-08-22 22:54:17');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mailings`
--

CREATE TABLE `mailings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mailings`
--

INSERT INTO `mailings` (`id`, `first_name`, `last_name`, `email`, `created_at`, `updated_at`) VALUES
(1, 'Temidayo', 'Faulkner', 'temidayovictor1@gmail.com', '2024-08-22 15:16:06', '2024-08-22 15:16:06'),
(2, 'Obyoma', 'Onah', 'obyomaonah@gmail.com', '2024-08-22 15:25:43', '2024-08-22 15:25:43'),
(3, 'Olubunmy', 'Folorunsho-Davyes', 'olubunmyoluekmy7@gmail.com', '2024-08-22 15:39:10', '2024-08-22 15:39:10');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_08_21_160056_add_username_to_users_table', 2),
(5, '2024_08_21_165112_create_applications_table', 3),
(6, '2024_08_22_101312_add_status_to_applications_table', 4),
(7, '2024_08_22_150911_create_mailings_table', 5),
(8, '2024_08_22_174030_create_blogs_table', 6),
(9, '2024_08_22_222838_create_gallery_table', 7),
(11, '2024_08_22_222858_create_galleryassets_table', 8),
(12, '2024_09_03_193813_add_columns_to_applications_table', 9);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('6W8lXnAUJFNGiF5iP5UxD6tXnRCWEe9X4NXBBfzP', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiakZGWFdxTE5HSGFJc0ZOVDFKb0hwZG5qV3NQNXBqOXlXQVc4Q0N0WSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hYm91dCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1728291279),
('9i2JYaWSpyXbdkb8BwORWPmjL589ppSujvZIIFzE', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'YTozOntzOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjY6Il90b2tlbiI7czo0MDoiSXhmakJ5bGdtUjlCSzlZNjl1czFyYXVqVG9kem43SFNwbnpKWjZrWSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMCI7fX0=', 1727953502),
('YHxyjcsv34cscF2qa8fZmaTTRd81X1v59sYeTgSR', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'YTozOntzOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjY6Il90b2tlbiI7czo0MDoiZDk0NkFoeGNTaTFYcWpJdklqNHNPMjdFM1RQa2FVaHJsSmdheFlYRyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9hcHBseSI7fX0=', 1727899679);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `username` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `username`) VALUES
(2, 'obiomaonah', 'eeafaadmin0@eeafa.com', NULL, '$2y$12$bFAONVfICvMALdn1yp/ov.kCgoRjV2cj9SMncMC2fGsE2k7FF6vUG', NULL, '2024-08-21 14:09:05', '2024-08-21 14:09:05', 'obiomaonah');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applications`
--
ALTER TABLE `applications`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `applications_email_unique` (`email`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleryassets`
--
ALTER TABLE `galleryassets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mailings`
--
ALTER TABLE `mailings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mailings_email_unique` (`email`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applications`
--
ALTER TABLE `applications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `galleryassets`
--
ALTER TABLE `galleryassets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mailings`
--
ALTER TABLE `mailings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
