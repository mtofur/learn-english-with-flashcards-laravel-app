-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 26 Ağu 2021, 19:25:09
-- Sunucu sürümü: 10.4.19-MariaDB
-- PHP Sürümü: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `words`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `words`
--

CREATE TABLE `words` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `englishword` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `englishsentence` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `turkishword` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `words`
--

INSERT INTO `words` (`id`, `image`, `englishword`, `englishsentence`, `turkishword`, `created_at`, `updated_at`) VALUES
(2, 'dene1.jpeg', 'instruction', 'This place is more convenient, you can find and reach everything here.', 'talimat', '2021-08-05 07:43:41', '2021-08-16 23:04:30'),
(3, 'image.png', 'convenient', 'This place is more convenient, you can find and reach everything here.', 'elverişli, uygun', '2021-08-05 07:43:41', '2021-08-05 07:43:41'),
(4, 'image.png', 'convenient', 'This place is more convenient, you can find and reach everything here.', 'elverişli, uygun', '2021-08-05 07:50:21', '2021-08-05 07:50:21'),
(5, 'image.png', 'convenient', 'This place is more convenient, you can find and reach everything here.', 'elverişli, uygun', '2021-08-05 07:50:21', '2021-08-05 07:50:21'),
(7, 'image.png', 'convenient', 'This place is more convenient, you can find and reach everything here.', 'elverişli, uygun', '2021-08-05 07:55:22', '2021-08-05 07:55:22'),
(8, 'image.png', 'sfddg', 'This place is more convenient, you can find and reach everything here.', 'elverişli, uygun', '2021-08-05 07:55:22', '2021-08-05 07:55:22'),
(9, 'image.png', 'turtle', 'This place is more convenient, you can find and reach everything here.', 'kaplumbaga', '2021-08-06 07:55:22', '2021-08-05 07:55:22'),
(10, 'renn.jpg', 'deer', 'when i was on university, i went trekking. I was walking in the forrest suddenly i saw a deer.', 'geyik', '2021-08-15 04:56:33', '2021-08-16 22:39:41');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `words`
--
ALTER TABLE `words`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `words`
--
ALTER TABLE `words`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
