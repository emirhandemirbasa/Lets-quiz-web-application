-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 13 Eki 2025, 23:43:13
-- Sunucu sürümü: 10.4.32-MariaDB
-- PHP Sürümü: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `quizdb`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `quiz_bilgileri`
--

CREATE TABLE `quiz_bilgileri` (
  `id` int(11) NOT NULL,
  `quiz_adi` varchar(255) NOT NULL,
  `quiz_aciklama` varchar(255) NOT NULL,
  `quiz_tipi` varchar(30) NOT NULL,
  `quiz_sayisi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `quiz_bilgileri`
--

INSERT INTO `quiz_bilgileri` (`id`, `quiz_adi`, `quiz_aciklama`, `quiz_tipi`, `quiz_sayisi`) VALUES
(19, 'Temel Seviye Matematik Soruları', 'Çok temel seviye matematik sorularının bulunduğu bir testtir.', 'test', 5);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `test_quiz`
--

CREATE TABLE `test_quiz` (
  `id` int(11) NOT NULL,
  `quiz_id` int(11) NOT NULL,
  `quiz_soru` varchar(255) NOT NULL,
  `chose1` varchar(255) NOT NULL,
  `chose2` varchar(255) NOT NULL,
  `chose3` varchar(255) NOT NULL,
  `chose4` varchar(255) NOT NULL,
  `dogru_cevap` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `test_quiz`
--

INSERT INTO `test_quiz` (`id`, `quiz_id`, `quiz_soru`, `chose1`, `chose2`, `chose3`, `chose4`, `dogru_cevap`) VALUES
(29, 19, '2+2 Kaçtır?', '1', '2', '3', '4', 3),
(30, 19, '5*3 Kaçtır?', '13', '15', '12', '11', 1),
(31, 19, '4+(10*2)+(8+5) işleminin sonucu kaçtır?', '34', '35', '37', '36', 2),
(32, 19, '1/1 kaçtır?', '2', '0', '1', '2', 2),
(33, 19, '5*5 Kaçtır?', '25', '3', '4', '6', 0);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `quiz_bilgileri`
--
ALTER TABLE `quiz_bilgileri`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `test_quiz`
--
ALTER TABLE `test_quiz`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `quiz_bilgileri`
--
ALTER TABLE `quiz_bilgileri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Tablo için AUTO_INCREMENT değeri `test_quiz`
--
ALTER TABLE `test_quiz`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
