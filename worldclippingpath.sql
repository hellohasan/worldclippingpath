-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 06, 2022 at 06:06 PM
-- Server version: 10.3.35-MariaDB-log
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `worldclippingpath`
--

-- --------------------------------------------------------

--
-- Table structure for table `basic_settings`
--

CREATE TABLE `basic_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `currency` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `symbol` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verification` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `basic_settings`
--

INSERT INTO `basic_settings` (`id`, `title`, `currency`, `symbol`, `phone`, `email`, `address`, `email_verification`, `created_at`, `updated_at`) VALUES
(1, 'Laravel 9 CMS', 'USD', '$', '01571118839', 'softwarezon@hotmail.com', 'Mirpur Dhaka, 1216', 1, '2022-06-05 20:48:48', '2022-06-05 20:48:48');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `featured` tinyint(1) NOT NULL DEFAULT 0,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `featured`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Clipping Path', 'clipping-path', 1, 1, '2022-09-17 10:41:40', '2022-09-20 05:06:21'),
(2, 'Masking', 'masking', 1, 1, '2022-09-17 10:42:33', '2022-09-17 10:42:33');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `collection_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mime_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `disk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `conversions_disk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` bigint(20) UNSIGNED NOT NULL,
  `manipulations` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `custom_properties` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `generated_conversions` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `responsive_images` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `order_column` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `model_type`, `model_id`, `uuid`, `collection_name`, `name`, `file_name`, `mime_type`, `disk`, `conversions_disk`, `size`, `manipulations`, `custom_properties`, `generated_conversions`, `responsive_images`, `order_column`, `created_at`, `updated_at`) VALUES
(12, 'App\\Models\\Service', 8, '11073ea7-e05d-4e2f-9ff0-8a3d428eb0dc', 'services', 'clipping-path', 'clipping-path.png', 'image/png', 'media', 'media', 16366, '[]', '[]', '{\"small\":true,\"medium\":true}', '[]', 3, '2022-09-21 10:08:29', '2022-09-21 10:08:30'),
(13, 'App\\Models\\Service', 7, '4c555269-5629-4669-9a2d-f2ede8ae35da', 'services', 'catalogue-making', 'catalogue-making.png', 'image/png', 'media', 'media', 12207, '[]', '[]', '{\"small\":true,\"medium\":true}', '[]', 2, '2022-09-21 10:09:01', '2022-09-21 10:09:02'),
(14, 'App\\Models\\Service', 6, 'ef41e6ec-3004-40aa-9c62-7ffd56e7cd8b', 'services', 'background-removal', 'background-removal.png', 'image/png', 'media', 'media', 20037, '[]', '[]', '{\"small\":true,\"medium\":true}', '[]', 2, '2022-09-21 10:09:40', '2022-09-21 10:09:40'),
(15, 'App\\Models\\Service', 5, '1809c0de-b374-4105-b37c-a28a26a4eeae', 'services', 'shadow-making', 'shadow-making.png', 'image/png', 'media', 'media', 8587, '[]', '[]', '{\"small\":true,\"medium\":true}', '[]', 2, '2022-09-21 10:10:10', '2022-09-21 10:10:11'),
(16, 'App\\Models\\Service', 4, 'ac289ac6-f4b9-4d23-b780-5708a20e800c', 'services', 'multi-clipping-path', 'multi-clipping-path.png', 'image/png', 'media', 'media', 23673, '[]', '[]', '{\"small\":true,\"medium\":true}', '[]', 2, '2022-09-21 10:10:39', '2022-09-21 10:10:40'),
(27, 'App\\Models\\ServiceCategory', 1, 'b72f052a-c345-45d1-9d86-5dee7fb0854c', 'service-category-before', 'Simple-Image', 'deserunt-consequatur_before.jpg', 'image/jpeg', 'media', 'media', 27840, '[]', '[]', '{\"thumb\":true,\"large\":true}', '[]', 3, '2022-09-21 16:34:09', '2022-09-21 16:34:10'),
(28, 'App\\Models\\ServiceCategory', 1, '74b4ee67-2e2c-4651-8074-f14646353877', 'service-category-after', 'Simple-Image-', 'deserunt-consequatur_after.jpg', 'image/jpeg', 'media', 'media', 46281, '[]', '[]', '{\"thumb\":true,\"large\":true}', '[]', 4, '2022-09-21 16:34:10', '2022-09-21 16:34:10'),
(31, 'App\\Models\\ServiceCategory', 3, '37463178-8317-45c6-8cf1-bff3e7d690ea', 'service-category-before', 'Complex-Image-Before', 'complex-photo-clipping_before.png', 'image/png', 'media', 'media', 48065, '[]', '[]', '{\"thumb\":true,\"large\":true}', '[]', 3, '2022-09-21 16:51:15', '2022-09-21 16:51:16'),
(32, 'App\\Models\\ServiceCategory', 3, 'e1af2441-7f89-4016-9a4e-0b0622a773d0', 'service-category-after', 'Complex-Image-After', 'complex-photo-clipping_after.png', 'image/png', 'media', 'media', 68056, '[]', '[]', '{\"thumb\":true,\"large\":true}', '[]', 4, '2022-09-21 16:51:16', '2022-09-21 16:51:17'),
(33, 'App\\Models\\ServiceCategory', 4, '42d9b01e-92c1-436f-95f5-15a4821def9c', 'service-category-before', 'Super-Complex-Before', 'super-complex-image-clipping_before.png', 'image/png', 'media', 'media', 29260, '[]', '[]', '{\"thumb\":true,\"large\":true}', '[]', 1, '2022-09-21 16:53:04', '2022-09-21 16:53:04'),
(34, 'App\\Models\\ServiceCategory', 4, '16e896cc-10d2-4867-84ce-8542a05983b1', 'service-category-after', 'Super-Complex-After', 'super-complex-image-clipping_after.png', 'image/png', 'media', 'media', 48983, '[]', '[]', '{\"thumb\":true,\"large\":true}', '[]', 2, '2022-09-21 16:53:04', '2022-09-21 16:53:05'),
(35, 'App\\Models\\ServiceCategory', 5, 'f9a3b62c-49d3-474c-9ae4-d1dd1a42997d', 'service-category-before', '80', 'testy_before.png', 'image/png', 'media', 'media', 2611, '[]', '[]', '{\"thumb\":true,\"large\":true}', '[]', 1, '2022-09-21 17:00:33', '2022-09-21 17:00:33'),
(36, 'App\\Models\\ServiceCategory', 5, '549a069b-5d65-447b-9afa-d9a012827114', 'service-category-after', '80-x-80', 'testy_after.png', 'image/png', 'media', 'media', 2076, '[]', '[]', '{\"thumb\":true,\"large\":true}', '[]', 2, '2022-09-21 17:00:33', '2022-09-21 17:00:34'),
(41, 'App\\Models\\ServicePortfolio', 4, '5f573e04-d47a-4455-a793-6ed21c11c517', 'service-portfolio-before', 'Complex-Image-Before', 'clipping-path1663832593_before.png', 'image/png', 'media', 'media', 48065, '[]', '[]', '{\"thumb\":true}', '{\"media_library_original\":{\"urls\":[\"clipping-path1663832593_before___media_library_original_450_525.png\",\"clipping-path1663832593_before___media_library_original_376_439.png\",\"clipping-path1663832593_before___media_library_original_315_368.png\",\"clipping-path1663832593_before___media_library_original_263_307.png\",\"clipping-path1663832593_before___media_library_original_220_257.png\"],\"base64svg\":\"data:image\\/svg+xml;base64,PCFET0NUWVBFIHN2ZyBQVUJMSUMgIi0vL1czQy8vRFREIFNWRyAxLjEvL0VOIiAiaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkIj4KPHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHg9IjAiCiB5PSIwIiB2aWV3Qm94PSIwIDAgNDUwIDUyNSI+Cgk8aW1hZ2Ugd2lkdGg9IjQ1MCIgaGVpZ2h0PSI1MjUiIHhsaW5rOmhyZWY9ImRhdGE6aW1hZ2UvanBlZztiYXNlNjQsLzlqLzRBQVFTa1pKUmdBQkFRRUFZQUJnQUFELy9nQTdRMUpGUVZSUFVqb2daMlF0YW5CbFp5QjJNUzR3SUNoMWMybHVaeUJKU2tjZ1NsQkZSeUIyT1RBcExDQnhkV0ZzYVhSNUlEMGdPVEFLLzlzQVF3QURBZ0lEQWdJREF3TURCQU1EQkFVSUJRVUVCQVVLQndjR0NBd0tEQXdMQ2dzTERRNFNFQTBPRVE0TEN4QVdFQkVURkJVVkZRd1BGeGdXRkJnU0ZCVVUvOXNBUXdFREJBUUZCQVVKQlFVSkZBMExEUlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVS84QUFFUWdBSlFBZ0F3RWlBQUlSQVFNUkFmL0VBQjhBQUFFRkFRRUJBUUVCQUFBQUFBQUFBQUFCQWdNRUJRWUhDQWtLQy8vRUFMVVFBQUlCQXdNQ0JBTUZCUVFFQUFBQmZRRUNBd0FFRVFVU0lURkJCaE5SWVFjaWNSUXlnWkdoQ0NOQ3NjRVZVdEh3SkROaWNvSUpDaFlYR0JrYUpTWW5LQ2txTkRVMk56ZzVPa05FUlVaSFNFbEtVMVJWVmxkWVdWcGpaR1ZtWjJocGFuTjBkWFozZUhsNmc0U0Zob2VJaVlxU2s1U1ZscGVZbVpxaW82U2xwcWVvcWFxeXM3UzF0cmU0dWJyQ3c4VEZ4c2ZJeWNyUzA5VFYxdGZZMmRyaDR1UGs1ZWJuNk9ucThmTHo5UFgyOS9qNSt2L0VBQjhCQUFNQkFRRUJBUUVCQVFFQUFBQUFBQUFCQWdNRUJRWUhDQWtLQy8vRUFMVVJBQUlCQWdRRUF3UUhCUVFFQUFFQ2R3QUJBZ01SQkFVaE1RWVNRVkVIWVhFVElqS0JDQlJDa2FHeHdRa2pNMUx3RldKeTBRb1dKRFRoSmZFWEdCa2FKaWNvS1NvMU5qYzRPVHBEUkVWR1IwaEpTbE5VVlZaWFdGbGFZMlJsWm1kb2FXcHpkSFYyZDNoNWVvS0RoSVdHaDRpSmlwS1RsSldXbDVpWm1xS2pwS1dtcDZpcHFyS3p0TFcydDdpNXVzTER4TVhHeDhqSnl0TFQxTlhXMTlqWjJ1TGo1T1htNStqcDZ2THo5UFgyOS9qNSt2L2FBQXdEQVFBQ0VRTVJBRDhBL1ZPdVY4ZFdWOWVhVzYyTGJaYTZnc0JWZTVsajhzZ3NCOVRVVGlweGNXWENUakpTUnlYdzhzTlR0TE0vMmcyNXMxMnc2VlRzNVl3bUF3L09yWWNIcFUwNEtuRlJRNXljNU9UUE9maVg4UlI0VGdLeGtlWVJYZ0dwL0huVXA3cGdKeXE1NkExcC90QjZqY0hVWkJoZ29GZk10NXFmazNSWjNQV3ZrOGJpYTBxcmpGMlNQcjhEaEtLcEtVbGRzOS91ZmpickZuQUpVdUNSMTYxN1g4RVBpcEo0M3RESGNIOThsZkR0eDQzdFd0ZktZRWtEQXIydjlsYlc1bTExZ2lQNWJkOGNWcmc2MVdOUmN6MFpHTncxSjBaTkt6UjlPZVBmaDdwUGlXMWMzVVh6WSs4Qlh6SDR1K0J1aHgzY20yU1ZlZlNpaXZkcjBvUFZvOExEVmFpMFVobmhMOW52dzdxRjJ2bnRLL1BRaXZwejRlZkRIUS9CMW9uMkMyQ3RqN3hITkZGVlFwd1dxUk9KcXprN05uLy8yUT09Ij4KCTwvaW1hZ2U+Cjwvc3ZnPg==\"}}', 1, '2022-09-22 07:43:13', '2022-09-22 07:43:16'),
(42, 'App\\Models\\ServicePortfolio', 4, '619a42a4-cd32-428f-8a72-c888fa663fd3', 'service-portfolio-after', 'Complex-Image-After', 'clipping-path1663832596_after.png', 'image/png', 'media', 'media', 68056, '[]', '[]', '{\"thumb\":true}', '{\"media_library_original\":{\"urls\":[\"clipping-path1663832596_after___media_library_original_450_525.png\",\"clipping-path1663832596_after___media_library_original_376_439.png\",\"clipping-path1663832596_after___media_library_original_315_368.png\",\"clipping-path1663832596_after___media_library_original_263_307.png\",\"clipping-path1663832596_after___media_library_original_220_257.png\",\"clipping-path1663832596_after___media_library_original_184_215.png\"],\"base64svg\":\"data:image\\/svg+xml;base64,PCFET0NUWVBFIHN2ZyBQVUJMSUMgIi0vL1czQy8vRFREIFNWRyAxLjEvL0VOIiAiaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkIj4KPHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHg9IjAiCiB5PSIwIiB2aWV3Qm94PSIwIDAgNDUwIDUyNSI+Cgk8aW1hZ2Ugd2lkdGg9IjQ1MCIgaGVpZ2h0PSI1MjUiIHhsaW5rOmhyZWY9ImRhdGE6aW1hZ2UvanBlZztiYXNlNjQsLzlqLzRBQVFTa1pKUmdBQkFRRUFZQUJnQUFELy9nQTdRMUpGUVZSUFVqb2daMlF0YW5CbFp5QjJNUzR3SUNoMWMybHVaeUJKU2tjZ1NsQkZSeUIyT1RBcExDQnhkV0ZzYVhSNUlEMGdPVEFLLzlzQVF3QURBZ0lEQWdJREF3TURCQU1EQkFVSUJRVUVCQVVLQndjR0NBd0tEQXdMQ2dzTERRNFNFQTBPRVE0TEN4QVdFQkVURkJVVkZRd1BGeGdXRkJnU0ZCVVUvOXNBUXdFREJBUUZCQVVKQlFVSkZBMExEUlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVS84QUFFUWdBSlFBZ0F3RWlBQUlSQVFNUkFmL0VBQjhBQUFFRkFRRUJBUUVCQUFBQUFBQUFBQUFCQWdNRUJRWUhDQWtLQy8vRUFMVVFBQUlCQXdNQ0JBTUZCUVFFQUFBQmZRRUNBd0FFRVFVU0lURkJCaE5SWVFjaWNSUXlnWkdoQ0NOQ3NjRVZVdEh3SkROaWNvSUpDaFlYR0JrYUpTWW5LQ2txTkRVMk56ZzVPa05FUlVaSFNFbEtVMVJWVmxkWVdWcGpaR1ZtWjJocGFuTjBkWFozZUhsNmc0U0Zob2VJaVlxU2s1U1ZscGVZbVpxaW82U2xwcWVvcWFxeXM3UzF0cmU0dWJyQ3c4VEZ4c2ZJeWNyUzA5VFYxdGZZMmRyaDR1UGs1ZWJuNk9ucThmTHo5UFgyOS9qNSt2L0VBQjhCQUFNQkFRRUJBUUVCQVFFQUFBQUFBQUFCQWdNRUJRWUhDQWtLQy8vRUFMVVJBQUlCQWdRRUF3UUhCUVFFQUFFQ2R3QUJBZ01SQkFVaE1RWVNRVkVIWVhFVElqS0JDQlJDa2FHeHdRa2pNMUx3RldKeTBRb1dKRFRoSmZFWEdCa2FKaWNvS1NvMU5qYzRPVHBEUkVWR1IwaEpTbE5VVlZaWFdGbGFZMlJsWm1kb2FXcHpkSFYyZDNoNWVvS0RoSVdHaDRpSmlwS1RsSldXbDVpWm1xS2pwS1dtcDZpcHFyS3p0TFcydDdpNXVzTER4TVhHeDhqSnl0TFQxTlhXMTlqWjJ1TGo1T1htNStqcDZ2THo5UFgyOS9qNSt2L2FBQXdEQVFBQ0VRTVJBRDhBL1F1dWY4VjIxM2NXREMwYmJKVytXQXFDZDAySEpBck9jRk9MaStwY0pPTWxKSFBlRGJTL3Q3WS9iRzNOWFVEcFZhM2RBdUFSVSs0TjBwVTRLbkZRVDJIVWs1eWNtY2g0MDhZRFFJVHRQellyeC9VUGk5ZHlYVEtKc0RQVE5YL2pIZnpDNWtISVhGZlBkNXFYbFhSWjM2SDFyNVBHNG10S3E0eGRrajYvQTRTaXFTbEpYYlBicno0cTZqYlFDUkpqK2RlbWZDbjRndjRydGlzeC9lTFh5VmNlTkxacmJ5bXlUakFyMWI5blhXcEpOVllLcmJHOXExd2RhcXFpVW5kTW5HNGVrNk1tbFpvOTg4WWVEdFAxMjJmN1FuT09vRmZQdmlmNFNhU0xwOFBJT2FLSzkydlNnM2RvOEhEVnFpMFVpTHczOEU5RHZibGZPYVIrZTRyNkI4RWZEL1NQQzFzdjJPQUtjZFNPYUtLcWhUZ3RVaWNUVm05R3ovL1oiPgoJPC9pbWFnZT4KPC9zdmc+\"}}', 2, '2022-09-22 07:43:16', '2022-09-22 07:43:20'),
(43, 'App\\Models\\ServicePortfolio', 3, '217958d3-e527-49eb-8f81-8a30289c8298', 'service-portfolio-before', 'Super-Complex-Before', 'eveniet-recusandae1663832633_before.png', 'image/png', 'media', 'media', 29260, '[]', '[]', '{\"thumb\":true}', '{\"media_library_original\":{\"urls\":[\"eveniet-recusandae1663832633_before___media_library_original_450_525.png\",\"eveniet-recusandae1663832633_before___media_library_original_376_439.png\",\"eveniet-recusandae1663832633_before___media_library_original_315_368.png\"],\"base64svg\":\"data:image\\/svg+xml;base64,PCFET0NUWVBFIHN2ZyBQVUJMSUMgIi0vL1czQy8vRFREIFNWRyAxLjEvL0VOIiAiaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkIj4KPHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHg9IjAiCiB5PSIwIiB2aWV3Qm94PSIwIDAgNDUwIDUyNSI+Cgk8aW1hZ2Ugd2lkdGg9IjQ1MCIgaGVpZ2h0PSI1MjUiIHhsaW5rOmhyZWY9ImRhdGE6aW1hZ2UvanBlZztiYXNlNjQsLzlqLzRBQVFTa1pKUmdBQkFRRUFZQUJnQUFELy9nQTdRMUpGUVZSUFVqb2daMlF0YW5CbFp5QjJNUzR3SUNoMWMybHVaeUJKU2tjZ1NsQkZSeUIyT1RBcExDQnhkV0ZzYVhSNUlEMGdPVEFLLzlzQVF3QURBZ0lEQWdJREF3TURCQU1EQkFVSUJRVUVCQVVLQndjR0NBd0tEQXdMQ2dzTERRNFNFQTBPRVE0TEN4QVdFQkVURkJVVkZRd1BGeGdXRkJnU0ZCVVUvOXNBUXdFREJBUUZCQVVKQlFVSkZBMExEUlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVS84QUFFUWdBSlFBZ0F3RWlBQUlSQVFNUkFmL0VBQjhBQUFFRkFRRUJBUUVCQUFBQUFBQUFBQUFCQWdNRUJRWUhDQWtLQy8vRUFMVVFBQUlCQXdNQ0JBTUZCUVFFQUFBQmZRRUNBd0FFRVFVU0lURkJCaE5SWVFjaWNSUXlnWkdoQ0NOQ3NjRVZVdEh3SkROaWNvSUpDaFlYR0JrYUpTWW5LQ2txTkRVMk56ZzVPa05FUlVaSFNFbEtVMVJWVmxkWVdWcGpaR1ZtWjJocGFuTjBkWFozZUhsNmc0U0Zob2VJaVlxU2s1U1ZscGVZbVpxaW82U2xwcWVvcWFxeXM3UzF0cmU0dWJyQ3c4VEZ4c2ZJeWNyUzA5VFYxdGZZMmRyaDR1UGs1ZWJuNk9ucThmTHo5UFgyOS9qNSt2L0VBQjhCQUFNQkFRRUJBUUVCQVFFQUFBQUFBQUFCQWdNRUJRWUhDQWtLQy8vRUFMVVJBQUlCQWdRRUF3UUhCUVFFQUFFQ2R3QUJBZ01SQkFVaE1RWVNRVkVIWVhFVElqS0JDQlJDa2FHeHdRa2pNMUx3RldKeTBRb1dKRFRoSmZFWEdCa2FKaWNvS1NvMU5qYzRPVHBEUkVWR1IwaEpTbE5VVlZaWFdGbGFZMlJsWm1kb2FXcHpkSFYyZDNoNWVvS0RoSVdHaDRpSmlwS1RsSldXbDVpWm1xS2pwS1dtcDZpcHFyS3p0TFcydDdpNXVzTER4TVhHeDhqSnl0TFQxTlhXMTlqWjJ1TGo1T1htNStqcDZ2THo5UFgyOS9qNSt2L2FBQXdEQVFBQ0VRTVJBRDhBL1ZKamdWd2ZqYnhEYjI4NjIwa29UMTVydGIyWHlMZVIvd0M2cE5mSDNqdnhyZTMvQUkvdUlzRm9rYkE1clNFSE4yUnoxNjhLRWVhZXg5VStGZFR0N3V4UllaQStCMk5iNE9SWGhYdzcxYVN3dUxmYzJGa3hrWnIzR0J4SkdyRHVLaHF6c2JSa3BKU1JCcXNSbXNaa1hxVk9LK0FmaXROcUhoeng1ZHErNk1NNUtzUlgzL2VYSXQ0eXhHYThTK0t2Z3JTZkVsd3QzZFdXNXVtUU9hNktGWDJVcnRYUEx6SEJQSFV2WnFYS3o1NjhCL0VmVXBOWHRiVXplYVM0QUFyN284TlN2UG85czhuM3lnem12Qi9oL3dEQnp3N29lb0pxWDJadytjZ01PbGZRT255eE5ib0llRUF3QlZZaXRHczd4all5eXZBMXNGVGNhdFRtdVRQRXNnd3d6WE5lSWJhT1c4dDR5bzJFOU1VVVZ5SHRtM0hwMXY4QVoxWHlsQXg2Vk5hMjZXNjdVR0JSUlFCLy85az0iPgoJPC9pbWFnZT4KPC9zdmc+\"}}', 3, '2022-09-22 07:43:53', '2022-09-22 07:43:55'),
(44, 'App\\Models\\ServicePortfolio', 3, 'fd3cc483-6195-4072-b10e-3d476db89891', 'service-portfolio-after', 'Super-Complex-After', 'eveniet-recusandae1663832635_after.png', 'image/png', 'media', 'media', 48983, '[]', '[]', '{\"thumb\":true}', '{\"media_library_original\":{\"urls\":[\"eveniet-recusandae1663832635_after___media_library_original_450_525.png\",\"eveniet-recusandae1663832635_after___media_library_original_376_439.png\",\"eveniet-recusandae1663832635_after___media_library_original_315_368.png\",\"eveniet-recusandae1663832635_after___media_library_original_263_307.png\",\"eveniet-recusandae1663832635_after___media_library_original_220_257.png\"],\"base64svg\":\"data:image\\/svg+xml;base64,PCFET0NUWVBFIHN2ZyBQVUJMSUMgIi0vL1czQy8vRFREIFNWRyAxLjEvL0VOIiAiaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkIj4KPHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHg9IjAiCiB5PSIwIiB2aWV3Qm94PSIwIDAgNDUwIDUyNSI+Cgk8aW1hZ2Ugd2lkdGg9IjQ1MCIgaGVpZ2h0PSI1MjUiIHhsaW5rOmhyZWY9ImRhdGE6aW1hZ2UvanBlZztiYXNlNjQsLzlqLzRBQVFTa1pKUmdBQkFRRUFZQUJnQUFELy9nQTdRMUpGUVZSUFVqb2daMlF0YW5CbFp5QjJNUzR3SUNoMWMybHVaeUJKU2tjZ1NsQkZSeUIyT1RBcExDQnhkV0ZzYVhSNUlEMGdPVEFLLzlzQVF3QURBZ0lEQWdJREF3TURCQU1EQkFVSUJRVUVCQVVLQndjR0NBd0tEQXdMQ2dzTERRNFNFQTBPRVE0TEN4QVdFQkVURkJVVkZRd1BGeGdXRkJnU0ZCVVUvOXNBUXdFREJBUUZCQVVKQlFVSkZBMExEUlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVS84QUFFUWdBSlFBZ0F3RWlBQUlSQVFNUkFmL0VBQjhBQUFFRkFRRUJBUUVCQUFBQUFBQUFBQUFCQWdNRUJRWUhDQWtLQy8vRUFMVVFBQUlCQXdNQ0JBTUZCUVFFQUFBQmZRRUNBd0FFRVFVU0lURkJCaE5SWVFjaWNSUXlnWkdoQ0NOQ3NjRVZVdEh3SkROaWNvSUpDaFlYR0JrYUpTWW5LQ2txTkRVMk56ZzVPa05FUlVaSFNFbEtVMVJWVmxkWVdWcGpaR1ZtWjJocGFuTjBkWFozZUhsNmc0U0Zob2VJaVlxU2s1U1ZscGVZbVpxaW82U2xwcWVvcWFxeXM3UzF0cmU0dWJyQ3c4VEZ4c2ZJeWNyUzA5VFYxdGZZMmRyaDR1UGs1ZWJuNk9ucThmTHo5UFgyOS9qNSt2L0VBQjhCQUFNQkFRRUJBUUVCQVFFQUFBQUFBQUFCQWdNRUJRWUhDQWtLQy8vRUFMVVJBQUlCQWdRRUF3UUhCUVFFQUFFQ2R3QUJBZ01SQkFVaE1RWVNRVkVIWVhFVElqS0JDQlJDa2FHeHdRa2pNMUx3RldKeTBRb1dKRFRoSmZFWEdCa2FKaWNvS1NvMU5qYzRPVHBEUkVWR1IwaEpTbE5VVlZaWFdGbGFZMlJsWm1kb2FXcHpkSFYyZDNoNWVvS0RoSVdHaDRpSmlwS1RsSldXbDVpWm1xS2pwS1dtcDZpcHFyS3p0TFcydDdpNXVzTER4TVhHeDhqSnl0TFQxTlhXMTlqWjJ1TGo1T1htNStqcDZ2THo5UFgyOS9qNSt2L2FBQXdEQVFBQ0VRTVJBRDhBL1FvbkFyalBGdXR3UXpMQkpJRTlhNjY3bDhtQjM5Qm12bUR4ZDRwdTczeHJQR1FXalZzQ3JoQnpka2M5ZXZERHg1cDdIMFY0YzFDQzVzMEVVZ2JGYlFPUlhqL2dqVW5zWjRkekVLK01qTmV1UlA1a2FzTzRxV3JPeHRHU21sSkVXb3htVzBsVWRTcHI0MStJVTEzb1hqRzRWeVUzTVNDYSt5N3VjUUlTUm12SlBpUDRUMDdYcDF1cmkwTE4weUJYUlFxK3lsZHE1NWVZNEo0Nmo3T011Vm5qbmhIeHpldHFOdmJtWHpDWEdBSyt0dEJrZWJUSUdjZk1WR2E4YThGL0N6UTlKdmx2L0lmZm5JRGRxOXNzWkkyaFVSZmRBd0JWWWl0R3E3eGpZeXl2QTFzRFRjYXRUbXVTeVJoK296V0RyVnVrdHpDaktOdWVsRkZjaDdacXBZUUNFTDVZeGowcWEzZ1NBWVFZRkZGQUgvL1oiPgoJPC9pbWFnZT4KPC9zdmc+\"}}', 4, '2022-09-22 07:43:55', '2022-09-22 07:43:58'),
(53, 'App\\Models\\ServiceTestimonial', 12, '526d4118-8432-4d9d-b438-a2514087493e', 'service-testimonial', 'tatiana-moody-1663843975', 'tatiana-moody-1663843975.png', 'image/png', 'media', 'media', 8596, '[]', '[]', '{\"thumb\":true}', '[]', 1, '2022-09-22 10:52:55', '2022-09-22 10:52:55'),
(54, 'App\\Models\\ServiceTestimonial', 13, 'a858eb79-8bf1-4e50-b9aa-506ef595a3c1', 'service-testimonial', 'brendan-hurley-1663844065', 'brendan-hurley-1663844065.png', 'image/png', 'media', 'media', 2076, '[]', '[]', '{\"thumb\":true}', '[]', 1, '2022-09-22 10:54:25', '2022-09-22 10:54:25'),
(55, 'App\\Models\\ServiceTestimonial', 14, 'de4d6b11-b18b-40cb-8ab4-b0ed47a09307', 'service-testimonial', 'minerva-cherry-1663844076', 'minerva-cherry-1663844076.jpg', 'image/jpeg', 'media', 'media', 978070, '[]', '[]', '{\"thumb\":true}', '[]', 1, '2022-09-22 10:54:36', '2022-09-22 10:54:36'),
(57, 'App\\Models\\ServicePortfolio', 3, '6257c3e6-be30-4922-935f-3c58ec0b6356', 'service-portfolio', 'Complex-Image-After', 'eveniet-recusandae1664210405_both.png', 'image/png', 'media', 'media', 68056, '[]', '[]', '{\"thumb\":true}', '{\"media_library_original\":{\"urls\":[\"eveniet-recusandae1664210405_both___media_library_original_450_525.png\",\"eveniet-recusandae1664210405_both___media_library_original_376_439.png\",\"eveniet-recusandae1664210405_both___media_library_original_315_368.png\",\"eveniet-recusandae1664210405_both___media_library_original_263_307.png\",\"eveniet-recusandae1664210405_both___media_library_original_220_257.png\",\"eveniet-recusandae1664210405_both___media_library_original_184_215.png\"],\"base64svg\":\"data:image\\/svg+xml;base64,PCFET0NUWVBFIHN2ZyBQVUJMSUMgIi0vL1czQy8vRFREIFNWRyAxLjEvL0VOIiAiaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkIj4KPHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHg9IjAiCiB5PSIwIiB2aWV3Qm94PSIwIDAgNDUwIDUyNSI+Cgk8aW1hZ2Ugd2lkdGg9IjQ1MCIgaGVpZ2h0PSI1MjUiIHhsaW5rOmhyZWY9ImRhdGE6aW1hZ2UvanBlZztiYXNlNjQsLzlqLzRBQVFTa1pKUmdBQkFRRUFZQUJnQUFELy9nQTdRMUpGUVZSUFVqb2daMlF0YW5CbFp5QjJNUzR3SUNoMWMybHVaeUJKU2tjZ1NsQkZSeUIyT1RBcExDQnhkV0ZzYVhSNUlEMGdPVEFLLzlzQVF3QURBZ0lEQWdJREF3TURCQU1EQkFVSUJRVUVCQVVLQndjR0NBd0tEQXdMQ2dzTERRNFNFQTBPRVE0TEN4QVdFQkVURkJVVkZRd1BGeGdXRkJnU0ZCVVUvOXNBUXdFREJBUUZCQVVKQlFVSkZBMExEUlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVS84QUFFUWdBSlFBZ0F3RWlBQUlSQVFNUkFmL0VBQjhBQUFFRkFRRUJBUUVCQUFBQUFBQUFBQUFCQWdNRUJRWUhDQWtLQy8vRUFMVVFBQUlCQXdNQ0JBTUZCUVFFQUFBQmZRRUNBd0FFRVFVU0lURkJCaE5SWVFjaWNSUXlnWkdoQ0NOQ3NjRVZVdEh3SkROaWNvSUpDaFlYR0JrYUpTWW5LQ2txTkRVMk56ZzVPa05FUlVaSFNFbEtVMVJWVmxkWVdWcGpaR1ZtWjJocGFuTjBkWFozZUhsNmc0U0Zob2VJaVlxU2s1U1ZscGVZbVpxaW82U2xwcWVvcWFxeXM3UzF0cmU0dWJyQ3c4VEZ4c2ZJeWNyUzA5VFYxdGZZMmRyaDR1UGs1ZWJuNk9ucThmTHo5UFgyOS9qNSt2L0VBQjhCQUFNQkFRRUJBUUVCQVFFQUFBQUFBQUFCQWdNRUJRWUhDQWtLQy8vRUFMVVJBQUlCQWdRRUF3UUhCUVFFQUFFQ2R3QUJBZ01SQkFVaE1RWVNRVkVIWVhFVElqS0JDQlJDa2FHeHdRa2pNMUx3RldKeTBRb1dKRFRoSmZFWEdCa2FKaWNvS1NvMU5qYzRPVHBEUkVWR1IwaEpTbE5VVlZaWFdGbGFZMlJsWm1kb2FXcHpkSFYyZDNoNWVvS0RoSVdHaDRpSmlwS1RsSldXbDVpWm1xS2pwS1dtcDZpcHFyS3p0TFcydDdpNXVzTER4TVhHeDhqSnl0TFQxTlhXMTlqWjJ1TGo1T1htNStqcDZ2THo5UFgyOS9qNSt2L2FBQXdEQVFBQ0VRTVJBRDhBL1F1dWY4VjIxM2NXREMwYmJKVytXQXFDZDAySEpBck9jRk9MaStwY0pPTWxKSFBlRGJTL3Q3WS9iRzNOWFVEcFZhM2RBdUFSVSs0TjBwVTRLbkZRVDJIVWs1eWNtY2g0MDhZRFFJVHRQellyeC9VUGk5ZHlYVEtKc0RQVE5YL2pIZnpDNWtISVhGZlBkNXFYbFhSWjM2SDFyNVBHNG10S3E0eGRrajYvQTRTaXFTbEpYYlBicno0cTZqYlFDUkpqK2RlbWZDbjRndjRydGlzeC9lTFh5VmNlTkxacmJ5bXlUakFyMWI5blhXcEpOVllLcmJHOXExd2RhcXFpVW5kTW5HNGVrNk1tbFpvOTg4WWVEdFAxMjJmN1FuT09vRmZQdmlmNFNhU0xwOFBJT2FLSzkydlNnM2RvOEhEVnFpMFVpTHczOEU5RHZibGZPYVIrZTRyNkI4RWZEL1NQQzFzdjJPQUtjZFNPYUtLcWhUZ3RVaWNUVm05R3ovL1oiPgoJPC9pbWFnZT4KPC9zdmc+\"}}', 5, '2022-09-26 16:40:05', '2022-09-26 16:40:08'),
(58, 'App\\Models\\ServicePortfolio', 4, 'b0851278-15cf-4859-a9eb-319433ae9e43', 'service-portfolio', 'Super-Complex-Before', 'clipping-path1664210495_both.png', 'image/png', 'media', 'media', 29260, '[]', '[]', '{\"thumb\":true}', '{\"media_library_original\":{\"urls\":[\"clipping-path1664210495_both___media_library_original_450_525.png\",\"clipping-path1664210495_both___media_library_original_376_439.png\",\"clipping-path1664210495_both___media_library_original_315_368.png\"],\"base64svg\":\"data:image\\/svg+xml;base64,PCFET0NUWVBFIHN2ZyBQVUJMSUMgIi0vL1czQy8vRFREIFNWRyAxLjEvL0VOIiAiaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkIj4KPHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHg9IjAiCiB5PSIwIiB2aWV3Qm94PSIwIDAgNDUwIDUyNSI+Cgk8aW1hZ2Ugd2lkdGg9IjQ1MCIgaGVpZ2h0PSI1MjUiIHhsaW5rOmhyZWY9ImRhdGE6aW1hZ2UvanBlZztiYXNlNjQsLzlqLzRBQVFTa1pKUmdBQkFRRUFZQUJnQUFELy9nQTdRMUpGUVZSUFVqb2daMlF0YW5CbFp5QjJNUzR3SUNoMWMybHVaeUJKU2tjZ1NsQkZSeUIyT1RBcExDQnhkV0ZzYVhSNUlEMGdPVEFLLzlzQVF3QURBZ0lEQWdJREF3TURCQU1EQkFVSUJRVUVCQVVLQndjR0NBd0tEQXdMQ2dzTERRNFNFQTBPRVE0TEN4QVdFQkVURkJVVkZRd1BGeGdXRkJnU0ZCVVUvOXNBUXdFREJBUUZCQVVKQlFVSkZBMExEUlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVS84QUFFUWdBSlFBZ0F3RWlBQUlSQVFNUkFmL0VBQjhBQUFFRkFRRUJBUUVCQUFBQUFBQUFBQUFCQWdNRUJRWUhDQWtLQy8vRUFMVVFBQUlCQXdNQ0JBTUZCUVFFQUFBQmZRRUNBd0FFRVFVU0lURkJCaE5SWVFjaWNSUXlnWkdoQ0NOQ3NjRVZVdEh3SkROaWNvSUpDaFlYR0JrYUpTWW5LQ2txTkRVMk56ZzVPa05FUlVaSFNFbEtVMVJWVmxkWVdWcGpaR1ZtWjJocGFuTjBkWFozZUhsNmc0U0Zob2VJaVlxU2s1U1ZscGVZbVpxaW82U2xwcWVvcWFxeXM3UzF0cmU0dWJyQ3c4VEZ4c2ZJeWNyUzA5VFYxdGZZMmRyaDR1UGs1ZWJuNk9ucThmTHo5UFgyOS9qNSt2L0VBQjhCQUFNQkFRRUJBUUVCQVFFQUFBQUFBQUFCQWdNRUJRWUhDQWtLQy8vRUFMVVJBQUlCQWdRRUF3UUhCUVFFQUFFQ2R3QUJBZ01SQkFVaE1RWVNRVkVIWVhFVElqS0JDQlJDa2FHeHdRa2pNMUx3RldKeTBRb1dKRFRoSmZFWEdCa2FKaWNvS1NvMU5qYzRPVHBEUkVWR1IwaEpTbE5VVlZaWFdGbGFZMlJsWm1kb2FXcHpkSFYyZDNoNWVvS0RoSVdHaDRpSmlwS1RsSldXbDVpWm1xS2pwS1dtcDZpcHFyS3p0TFcydDdpNXVzTER4TVhHeDhqSnl0TFQxTlhXMTlqWjJ1TGo1T1htNStqcDZ2THo5UFgyOS9qNSt2L2FBQXdEQVFBQ0VRTVJBRDhBL1ZKamdWd2ZqYnhEYjI4NjIwa29UMTVydGIyWHlMZVIvd0M2cE5mSDNqdnhyZTMvQUkvdUlzRm9rYkE1clNFSE4yUnoxNjhLRWVhZXg5VStGZFR0N3V4UllaQStCMk5iNE9SWGhYdzcxYVN3dUxmYzJGa3hrWnIzR0J4SkdyRHVLaHF6c2JSa3BKU1JCcXNSbXNaa1hxVk9LK0FmaXROcUhoeng1ZHErNk1NNUtzUlgzL2VYSXQ0eXhHYThTK0t2Z3JTZkVsd3QzZFdXNXVtUU9hNktGWDJVcnRYUEx6SEJQSFV2WnFYS3o1NjhCL0VmVXBOWHRiVXplYVM0QUFyN284TlN2UG85czhuM3lnem12Qi9oL3dEQnp3N29lb0pxWDJadytjZ01PbGZRT255eE5ib0llRUF3QlZZaXRHczd4all5eXZBMXNGVGNhdFRtdVRQRXNnd3d6WE5lSWJhT1c4dDR5bzJFOU1VVVZ5SHRtM0hwMXY4QVoxWHlsQXg2Vk5hMjZXNjdVR0JSUlFCLy85az0iPgoJPC9pbWFnZT4KPC9zdmc+\"}}', 4, '2022-09-26 16:41:35', '2022-09-26 16:41:37');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_06_03_195551_create_permission_tables', 1),
(6, '2022_06_05_223353_create_basic_settings_table', 1),
(8, '2022_09_17_122346_create_categories_table', 2),
(9, '2022_09_20_140240_create_media_table', 3),
(10, '2022_09_20_223915_create_services_table', 4),
(12, '2022_09_21_183222_create_service_categories_table', 5),
(13, '2022_09_22_121346_create_service_portfolios_table', 6),
(14, '2022_09_22_151534_create_service_testimonials_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(2, 'App\\Models\\User', 2),
(2, 'App\\Models\\User', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('super-admin@gmail.com', '$2y$10$GOzgndwf.CNc6Mzu2IRPweNfm3BEME1sPQZb2Nv5.AaN5MDQ3NQAO', '2022-09-14 09:58:24');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'role-list', 'web', '2022-06-05 20:48:47', '2022-06-05 20:48:47'),
(2, 'role-create', 'web', '2022-06-05 20:48:47', '2022-06-05 20:48:47'),
(3, 'role-store', 'web', '2022-06-05 20:48:47', '2022-06-05 20:48:47'),
(4, 'role-edit', 'web', '2022-06-05 20:48:47', '2022-06-05 20:48:47'),
(5, 'role-update', 'web', '2022-06-05 20:48:47', '2022-06-05 20:48:47'),
(6, 'role-delete', 'web', '2022-06-05 20:48:47', '2022-06-05 20:48:47'),
(7, 'permission-list', 'web', '2022-06-05 20:48:47', '2022-06-05 20:48:47'),
(8, 'permission-create', 'web', '2022-06-05 20:48:47', '2022-06-05 20:48:47'),
(9, 'permission-store', 'web', '2022-06-05 20:48:47', '2022-06-05 20:48:47'),
(10, 'permission-edit', 'web', '2022-06-05 20:48:47', '2022-06-05 20:48:47'),
(11, 'permission-update', 'web', '2022-06-05 20:48:48', '2022-06-05 20:48:48'),
(12, 'permission-delete', 'web', '2022-06-05 20:48:48', '2022-06-05 20:48:48'),
(13, 'users', 'web', '2022-06-06 18:41:43', '2022-06-06 18:41:43'),
(14, 'users-create', 'web', '2022-06-06 18:41:53', '2022-06-06 18:41:53'),
(15, 'users-store', 'web', '2022-06-06 18:42:02', '2022-06-06 18:42:02'),
(16, 'users-edit', 'web', '2022-06-06 18:42:10', '2022-06-06 18:42:10'),
(17, 'users-update', 'web', '2022-06-06 18:42:16', '2022-06-06 18:42:16'),
(18, 'users-destroy', 'web', '2022-06-06 18:42:23', '2022-06-06 18:42:23'),
(25, 'categories', 'web', '2022-09-17 06:11:55', '2022-09-17 06:11:55'),
(26, 'categories-create', 'web', '2022-09-17 06:11:55', '2022-09-17 06:11:55'),
(27, 'categories-store', 'web', '2022-09-17 06:11:55', '2022-09-17 06:11:55'),
(28, 'categories-edit', 'web', '2022-09-17 06:11:55', '2022-09-17 06:11:55'),
(29, 'categories-update', 'web', '2022-09-17 06:11:55', '2022-09-17 06:11:55'),
(30, 'categories-destroy', 'web', '2022-09-17 06:11:55', '2022-09-17 06:11:55'),
(31, 'services', 'web', '2022-09-20 16:41:11', '2022-09-20 16:41:11'),
(32, 'services-create', 'web', '2022-09-20 16:41:11', '2022-09-20 16:41:11'),
(33, 'services-store', 'web', '2022-09-20 16:41:11', '2022-09-20 16:41:11'),
(34, 'services-edit', 'web', '2022-09-20 16:41:11', '2022-09-20 16:41:11'),
(35, 'services-update', 'web', '2022-09-20 16:41:11', '2022-09-20 16:41:11'),
(36, 'services-destroy', 'web', '2022-09-20 16:41:11', '2022-09-20 16:41:11'),
(37, 'service-category', 'web', '2022-09-21 12:36:14', '2022-09-21 12:36:14'),
(38, 'service-category-create', 'web', '2022-09-21 12:36:14', '2022-09-21 12:36:14'),
(39, 'service-category-store', 'web', '2022-09-21 12:36:14', '2022-09-21 12:36:14'),
(40, 'service-category-edit', 'web', '2022-09-21 12:36:14', '2022-09-21 12:36:14'),
(41, 'service-category-update', 'web', '2022-09-21 12:36:14', '2022-09-21 12:36:14'),
(42, 'service-category-destroy', 'web', '2022-09-21 12:36:14', '2022-09-21 12:36:14'),
(43, 'service-portfolio', 'web', '2022-09-22 06:24:50', '2022-09-22 06:24:50'),
(44, 'service-portfolio-create', 'web', '2022-09-22 06:24:50', '2022-09-22 06:24:50'),
(45, 'service-portfolio-store', 'web', '2022-09-22 06:24:50', '2022-09-22 06:24:50'),
(46, 'service-portfolio-edit', 'web', '2022-09-22 06:24:50', '2022-09-22 06:24:50'),
(47, 'service-portfolio-update', 'web', '2022-09-22 06:24:50', '2022-09-22 06:24:50'),
(48, 'service-portfolio-destroy', 'web', '2022-09-22 06:24:50', '2022-09-22 06:24:50'),
(49, 'service-testimonial', 'web', '2022-09-22 09:17:02', '2022-09-22 09:17:02'),
(50, 'service-testimonial-create', 'web', '2022-09-22 09:17:02', '2022-09-22 09:17:02'),
(51, 'service-testimonial-store', 'web', '2022-09-22 09:17:02', '2022-09-22 09:17:02'),
(52, 'service-testimonial-edit', 'web', '2022-09-22 09:17:02', '2022-09-22 09:17:02'),
(53, 'service-testimonial-update', 'web', '2022-09-22 09:17:02', '2022-09-22 09:17:02'),
(54, 'service-testimonial-destroy', 'web', '2022-09-22 09:17:02', '2022-09-22 09:17:02');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
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
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'web', '2022-06-05 20:48:47', '2022-06-05 20:48:47'),
(2, 'Admin', 'web', '2022-06-06 18:34:05', '2022-06-06 18:34:05');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
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
(14, 2),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(25, 1),
(26, 1),
(27, 1),
(28, 1),
(29, 1),
(30, 1),
(31, 1),
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
(53, 1),
(54, 1);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price_usd` double(8,2) NOT NULL,
  `price_eur` double(8,2) NOT NULL,
  `featured` tinyint(1) NOT NULL DEFAULT 0,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `slug`, `category_id`, `short_description`, `price_usd`, `price_eur`, `featured`, `status`, `created_at`, `updated_at`) VALUES
(4, 'Multi-Clipping Path', 'multi-clipping-path', 2, 'Sed ut perspiciatis unde omnis iste natus error voluptatem accusantium dolore mque.', 0.53, 0.73, 1, 1, '2022-09-20 20:55:07', '2022-09-21 10:10:39'),
(5, 'Shadow Making', 'shadow-making', 2, 'Sed ut perspiciatis unde omnis iste natus error voluptatem accusantium dolore mque.', 0.82, 0.55, 1, 1, '2022-09-20 20:59:42', '2022-09-21 10:10:10'),
(6, 'Background Removal', 'background-removal', 1, 'Sed ut perspiciatis unde omnis iste natus error voluptatem accusantium dolore mque.', 0.86, 0.82, 1, 1, '2022-09-20 21:17:04', '2022-09-21 10:09:40'),
(7, 'Catalogue Making', 'catalogue-making', 1, 'Sed ut perspiciatis unde omnis iste natus error voluptatem accusantium dolore mque.', 0.75, 0.72, 1, 1, '2022-09-20 21:30:46', '2022-09-21 10:09:01'),
(8, 'Clipping Path', 'clipping-path', 1, 'Sed ut perspiciatis unde omnis iste natus error voluptatem accusantium dolore mque.', 0.59, 0.69, 1, 1, '2022-09-20 21:32:17', '2022-09-21 10:08:29');

-- --------------------------------------------------------

--
-- Table structure for table `service_categories`
--

CREATE TABLE `service_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `service_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `featured` tinyint(1) NOT NULL DEFAULT 0,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `service_categories`
--

INSERT INTO `service_categories` (`id`, `service_id`, `title`, `description`, `featured`, `status`, `created_at`, `updated_at`) VALUES
(1, 8, 'Simple Image Clipping', 'Images with straight edges and very few curves require a simple clipping path service. It takes almost no time for our photoshop experts to complete creating paths around the edges of a product image that falls into this category. Products like boxes, bracelets, bottles, and balls are the best candidates for simple or basic image clipping. The price for this category is what the clipping paths service starts at, which is 0.39$.', 1, 1, '2022-09-21 15:40:20', '2022-09-21 16:38:03'),
(3, 4, 'Complex Photo Clipping', 'From this category, the image clipping starts becoming complex as the products that fall into this can contain many petite and curvy edges. A group of shoes, watches, motor parts, rings,  shoes, foods, a chain, people, furniture, etc.… are suitable for medium image clipping service. Some of the images might have tiny and noisy backgrounds, and experts need to zoom in multiple times to get there.', 1, 1, '2022-09-21 16:51:15', '2022-09-21 16:51:15'),
(4, 8, 'Super Complex Image Clipping', 'This category is the toughest of them all, which is why in this category, images have super complex edges and curves. Experts create paths in multiple layers for a single product in this image cut-out solution, and to capture every single detail of a super complex product, experts have to give more time to the process. To clip successfully and accurately images such as machinery and jewelry, Tradexcel Graphic includes fast selection, pen tools, canal masking, and various tools and techniques.', 1, 1, '2022-09-21 16:53:04', '2022-09-21 16:53:04');

-- --------------------------------------------------------

--
-- Table structure for table `service_portfolios`
--

CREATE TABLE `service_portfolios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `service_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `featured` tinyint(1) NOT NULL DEFAULT 0,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `service_portfolios`
--

INSERT INTO `service_portfolios` (`id`, `service_id`, `title`, `featured`, `status`, `created_at`, `updated_at`) VALUES
(3, 7, 'Eveniet recusandae', 1, 1, '2022-09-22 07:31:25', '2022-09-22 07:41:08'),
(4, 8, 'Clipping Path', 1, 1, '2022-09-22 07:43:13', '2022-09-22 07:43:13');

-- --------------------------------------------------------

--
-- Table structure for table `service_testimonials`
--

CREATE TABLE `service_testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `service_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `service_testimonials`
--

INSERT INTO `service_testimonials` (`id`, `service_id`, `name`, `country`, `message`, `status`, `created_at`, `updated_at`) VALUES
(12, 7, 'Tatiana Moody', 'Consequatur cupidit', 'Velit consequuntur', 1, '2022-09-22 10:52:55', '2022-09-22 10:54:12'),
(13, 6, 'Brendan Hurley', 'Sed ipsum do digniss', 'Odio modi aliqua Au', 1, '2022-09-22 10:54:25', '2022-09-22 10:54:25'),
(14, 4, 'Minerva Cherry', 'Exercitationem iusto', 'Molestiae reiciendis', 1, '2022-09-22 10:54:36', '2022-09-22 10:54:49');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `avatar` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'avatar.png',
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `avatar`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'super-admin@gmail.com', NULL, '1663148953.png', '$2y$10$b76BYdFLwN2B6l.3PjC0BO5kmQEEhSzzUETZ8XGmj3gkjKbXwNMHO', NULL, '2022-06-05 20:48:47', '2022-09-14 09:49:13'),
(2, 'Tamekah Shields', 'xudad@mailinator.com', NULL, 'avatar.png', '$2y$10$CL.gGk.J.vCXv9UuSoTaTOc.Ux/RWl3IFcTLDWrQ2pkViv8HiIOCy', NULL, '2022-06-06 20:08:09', '2022-06-06 20:08:09'),
(3, 'Admin User', 'admin@gmail.com', NULL, 'avatar.png', '$2y$10$3YOFpKdeHZjovfOsW5C4wuJqlhft.WFfv32z70YyTa6w.vNlQ3CRG', NULL, '2022-09-17 07:29:30', '2022-09-17 07:29:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `basic_settings`
--
ALTER TABLE `basic_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `media_uuid_unique` (`uuid`),
  ADD KEY `media_model_type_model_id_index` (`model_type`,`model_id`),
  ADD KEY `media_order_column_index` (`order_column`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`),
  ADD KEY `services_category_id_foreign` (`category_id`);

--
-- Indexes for table `service_categories`
--
ALTER TABLE `service_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `service_categories_service_id_foreign` (`service_id`);

--
-- Indexes for table `service_portfolios`
--
ALTER TABLE `service_portfolios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `service_portfolios_service_id_foreign` (`service_id`);

--
-- Indexes for table `service_testimonials`
--
ALTER TABLE `service_testimonials`
  ADD PRIMARY KEY (`id`),
  ADD KEY `service_testimonials_service_id_foreign` (`service_id`);

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
-- AUTO_INCREMENT for table `basic_settings`
--
ALTER TABLE `basic_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `service_categories`
--
ALTER TABLE `service_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `service_portfolios`
--
ALTER TABLE `service_portfolios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `service_testimonials`
--
ALTER TABLE `service_testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `services`
--
ALTER TABLE `services`
  ADD CONSTRAINT `services_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `service_categories`
--
ALTER TABLE `service_categories`
  ADD CONSTRAINT `service_categories_service_id_foreign` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `service_portfolios`
--
ALTER TABLE `service_portfolios`
  ADD CONSTRAINT `service_portfolios_service_id_foreign` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `service_testimonials`
--
ALTER TABLE `service_testimonials`
  ADD CONSTRAINT `service_testimonials_service_id_foreign` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
