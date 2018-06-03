-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 03 Cze 2018, 14:51
-- Wersja serwera: 10.1.29-MariaDB
-- Wersja PHP: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `bookgym`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `category`
--

CREATE TABLE `category` (
  `IDcategory` int(11) NOT NULL,
  `name` varchar(30) COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `category`
--

INSERT INTO `category` (`IDcategory`, `name`) VALUES
(1, 'basen'),
(2, 'siłownia'),
(3, 'kręgielnia'),
(4, 'strzelnica'),
(5, 'ścianka wspinaczkowa'),
(6, 'bilard'),
(7, 'hala sportowa'),
(8, 'tenis ziemny'),
(9, 'tenis stołowy'),
(10, 'centrum Rekreacyjno-Sportowe'),
(11, 'minigolf');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `reservation`
--

CREATE TABLE `reservation` (
  `IDreservation` int(11) NOT NULL,
  `type` varchar(11) COLLATE utf8_polish_ci NOT NULL,
  `price` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `ID_user2` int(11) NOT NULL,
  `ID_service` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `reservation`
--

INSERT INTO `reservation` (`IDreservation`, `type`, `price`, `amount`, `date`, `ID_user2`, `ID_service`) VALUES
(4, 'Normalny', 24, 4, '0000-00-00 00:00:00', 4, 1),
(5, 'Normalny', 0, 1, '0000-00-00 00:00:00', 1, 2),
(6, 'Normalny', 6, 1, '0000-00-00 00:00:00', 1, 1),
(7, 'Ulgowy', 3, 1, '0000-00-00 00:00:00', 1, 1),
(8, 'Ulgowy', 0, 1, '0000-00-00 00:00:00', 1, 6),
(9, 'Normalny', 6, 1, '0000-00-00 00:00:00', 1, 1),
(10, 'Normalny', 6, 1, '0000-00-00 00:00:00', 1, 1),
(11, 'Ulgowy', 12, 4, '0000-00-00 00:00:00', 4, 1),
(12, 'Ulgowy', 3, 1, '0000-00-00 00:00:00', 1, 1),
(13, 'Normalny', 6, 1, '0000-00-00 00:00:00', 1, 1),
(14, 'Normalny', 6, 1, '0000-00-00 00:00:00', 1, 1),
(15, 'Normalny', 6, 1, '0000-00-00 00:00:00', 1, 1),
(16, 'Normalny', 6, 1, '0000-00-00 00:00:00', 1, 1),
(17, 'Normalny', 0, 1, '0000-00-00 00:00:00', 1, 2),
(18, 'Normalny', 0, 1, '0000-00-00 00:00:00', 1, 3),
(19, 'Normalny', 6, 1, '0000-00-00 00:00:00', 1, 1),
(20, 'Normalny', 6, 1, '0000-00-00 00:00:00', 1, 1),
(21, 'Normalny', 6, 1, '0000-00-00 00:00:00', 1, 1),
(22, 'Normalny', 6, 1, '0000-00-00 00:00:00', 1, 1),
(23, 'Normalny', 0, 1, '0000-00-00 00:00:00', 1, 2),
(24, 'Normalny', 6, 1, '0000-00-00 00:00:00', 1, 1),
(25, 'Normalny', 6, 1, '0000-00-00 00:00:00', 1, 1),
(26, 'Normalny', 6, 1, '0000-00-00 00:00:00', 1, 1),
(27, 'Normalny', 6, 1, '0000-00-00 00:00:00', 1, 1),
(28, 'Normalny', 6, 1, '0000-00-00 00:00:00', 1, 1),
(29, 'Normalny', 6, 1, '0000-00-00 00:00:00', 1, 1),
(30, 'Normalny', 6, 1, '0000-00-00 00:00:00', 1, 1),
(31, 'Normalny', 6, 1, '0000-00-00 00:00:00', 1, 1),
(32, 'Normalny', 6, 1, '0000-00-00 00:00:00', 1, 1),
(33, 'Normalny', 6, 1, '0000-00-00 00:00:00', 1, 1),
(34, 'Normalny', 6, 1, '0000-00-00 00:00:00', 1, 1),
(35, 'Normalny', 6, 1, '0000-00-00 00:00:00', 1, 1),
(36, 'Normalny', 6, 1, '0000-00-00 00:00:00', 1, 1),
(37, 'Normalny', 6, 1, '0000-00-00 00:00:00', 1, 1),
(38, 'Normalny', 0, 1, '0000-00-00 00:00:00', 1, 3),
(39, 'Normalny', 6, 1, '0000-00-00 00:00:00', 1, 1),
(40, 'Normalny', 12, 2, '0000-00-00 00:00:00', 2, 1),
(41, 'Normalny', 6, 1, '0000-00-00 00:00:00', 1, 2),
(45, 'Normalny', 6, 1, '0000-00-00 00:00:00', 1, 1),
(46, 'Ulgowy', 4, 2, '0000-00-00 00:00:00', 2, 2),
(47, 'Normalny', 6, 1, '0000-00-00 00:00:00', 1, 2),
(48, 'Ulgowy', 0, 2, '0000-00-00 00:00:00', 47, 4),
(49, 'Normalny', 60, 10, '0000-00-00 00:00:00', 47, 2),
(50, 'Normalny', 6, 1, '0000-00-00 00:00:00', 47, 1),
(51, '1', 3, 4, '2018-01-02 00:00:00', 2, 2),
(52, '1', 3, 3, '2018-01-10 06:21:24', 47, 6),
(53, 'Ulgowy', 0, 1, '2018-01-17 12:35:58', 47, 5),
(54, 'Normalny', 6, 1, '2018-01-17 12:51:24', 47, 1),
(55, 'Normalny', 6, 1, '2018-01-17 12:52:15', 47, 1),
(56, 'Normalny', 6, 1, '2018-01-17 12:53:06', 47, 1),
(57, 'Normalny', 6, 1, '2018-01-17 12:53:11', 47, 1),
(58, 'Normalny', 6, 1, '2018-01-17 12:53:42', 47, 1),
(59, 'Normalny', 6, 1, '2018-01-17 12:54:56', 47, 1),
(60, 'Normalny', 6, 1, '2018-01-17 12:55:07', 47, 1),
(61, 'Normalny', 6, 1, '2018-01-17 12:55:13', 47, 1),
(62, 'Normalny', 6, 1, '2018-01-17 12:55:39', 47, 1),
(63, 'Normalny', 6, 1, '2018-01-17 12:56:12', 47, 1),
(64, 'Ulgowy', 3, 1, '2018-01-17 12:56:17', 47, 1),
(65, 'Ulgowy', 3, 1, '2018-01-17 12:56:39', 47, 1),
(66, 'Normalny', 6, 1, '2018-01-17 13:00:07', 47, 1),
(67, 'Normalny', 6, 1, '2018-01-17 13:00:21', 47, 1),
(68, 'Normalny', 0, 1, '2018-01-17 13:02:27', 48, 6),
(69, 'Normalny', 5, 1, '2018-01-17 13:05:13', 48, 3),
(70, 'Normalny', 6, 1, '2018-01-24 08:35:22', 4, 1),
(71, 'Normalny', 6, 1, '2018-01-24 10:30:59', 49, 2),
(72, 'Ulgowy', 3, 1, '2018-01-25 07:52:36', 50, 1),
(73, 'Ulgowy', 2, 1, '2018-01-25 08:24:53', 46, 2);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `services`
--

CREATE TABLE `services` (
  `IDservice` int(11) NOT NULL,
  `name` varchar(64) COLLATE utf8_polish_ci NOT NULL,
  `description` varchar(1024) COLLATE utf8_polish_ci NOT NULL,
  `ID_category` int(11) NOT NULL,
  `ID_service_card` int(11) NOT NULL,
  `price_normal` decimal(10,0) NOT NULL,
  `price_reduced` decimal(10,0) NOT NULL,
  `spot_max` int(11) NOT NULL,
  `spot_free` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `services`
--

INSERT INTO `services` (`IDservice`, `name`, `description`, `ID_category`, `ID_service_card`, `price_normal`, `price_reduced`, `spot_max`, `spot_free`) VALUES
(1, 'basen', 'Opis uslugi, bez czepka.', 1, 1, '6', '3', 5, 75),
(2, 'hala sportowa', 'hala', 7, 1, '6', '2', 6, 134),
(3, 'hala sportowa', 'hala', 7, 1, '5', '5', 0, -1),
(4, 'hala sportowa', 'hala', 7, 1, '0', '0', 0, 298),
(5, 'hala sportowa', 'hala', 7, 1, '0', '0', 0, 149),
(6, 'Basen', 'Basen taki', 1, 2, '0', '0', 0, 149);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `service_card`
--

CREATE TABLE `service_card` (
  `IDservice_card` int(11) NOT NULL,
  `name` varchar(48) COLLATE utf8_polish_ci NOT NULL,
  `description` varchar(1024) COLLATE utf8_polish_ci NOT NULL,
  `ID_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `service_card`
--

INSERT INTO `service_card` (`IDservice_card`, `name`, `description`, `ID_user`) VALUES
(1, 'Krokus - ul. Bora-Komorowskiego', 'Opis ośrodka, który prowadzi usługę.', 4),
(2, 'Kowalski&Son', 'Firma taka i taka', 2);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `IDuser` int(11) NOT NULL,
  `login` varchar(64) COLLATE utf8_polish_ci NOT NULL,
  `password` varchar(128) COLLATE utf8_polish_ci NOT NULL,
  `email` varchar(320) COLLATE utf8_polish_ci NOT NULL,
  `name` varchar(128) COLLATE utf8_polish_ci NOT NULL,
  `surname` varchar(128) COLLATE utf8_polish_ci NOT NULL,
  `address` varchar(128) COLLATE utf8_polish_ci NOT NULL,
  `ID_user_type` int(11) NOT NULL,
  `city` varchar(64) COLLATE utf8_polish_ci NOT NULL,
  `postalcode` varchar(16) COLLATE utf8_polish_ci NOT NULL,
  `country` varchar(32) COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`IDuser`, `login`, `password`, `email`, `name`, `surname`, `address`, `ID_user_type`, `city`, `postalcode`, `country`) VALUES
(1, 'jkowalskiii', 'zaq1@WSX', 'jkowalski@gmai.com', 'Jan', 'Kowalski', 'ul. Warszawska 22', 1, 'Krak', '30-300', 'Poland'),
(2, 'amalys', 'zaq1@WS', 'amalysz@gmail.co', 'Ada', 'Małys', 'ul. Lubicka 6', 2, 'Krak', '30-30', 'Polan'),
(4, 'wmalinowski', 'zaq1@WSX', 'wojciech.malinowski@gmail.com', 'Wojciech', 'Malinowski', 'ul. Kolna 2', 3, 'Krak', '30-381', 'Polska'),
(46, 'a', 'a', 'a', 'Jacek', 'Kasinski', 'Jacusiek 55', 1, 'Krakow', '45-654', 'Polska'),
(47, 'jacek', 'haslo', 'email@gmail.com', 'Jacek', 'Kasinski', 'Jacusiek 55', 1, 'Krakow', '45-654', 'Polska'),
(48, 'adam', 'zaq1', '', 'Jacek', 'Kasinski', 'Jacusiek 55', 1, 'Krakow', '45-654', 'Polska'),
(49, 'kamil', 'kamil', '', 'Jacek', 'Kasinski', 'Jacusiek 55', 1, 'Krakow', '45-654', 'Polska'),
(50, 'admin', 'admin', '', '', '', '', 2, '', '', '');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `user_type`
--

CREATE TABLE `user_type` (
  `IDuser_type` int(11) NOT NULL,
  `name` varchar(20) COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `user_type`
--

INSERT INTO `user_type` (`IDuser_type`, `name`) VALUES
(1, 'normal'),
(2, 'admin'),
(3, 'company');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`IDcategory`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`IDreservation`),
  ADD KEY `ID_service` (`ID_service`),
  ADD KEY `ID_user2` (`ID_user2`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`IDservice`),
  ADD KEY `ID_category` (`ID_category`),
  ADD KEY `Id_service_card` (`ID_service_card`);

--
-- Indexes for table `service_card`
--
ALTER TABLE `service_card`
  ADD PRIMARY KEY (`IDservice_card`),
  ADD KEY `ID_user` (`ID_user`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`IDuser`),
  ADD KEY `IDuser_type` (`ID_user_type`);

--
-- Indexes for table `user_type`
--
ALTER TABLE `user_type`
  ADD PRIMARY KEY (`IDuser_type`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `category`
--
ALTER TABLE `category`
  MODIFY `IDcategory` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT dla tabeli `reservation`
--
ALTER TABLE `reservation`
  MODIFY `IDreservation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT dla tabeli `services`
--
ALTER TABLE `services`
  MODIFY `IDservice` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT dla tabeli `service_card`
--
ALTER TABLE `service_card`
  MODIFY `IDservice_card` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `IDuser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT dla tabeli `user_type`
--
ALTER TABLE `user_type`
  MODIFY `IDuser_type` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `ID_service` FOREIGN KEY (`ID_service`) REFERENCES `services` (`IDservice`),
  ADD CONSTRAINT `ID_user2` FOREIGN KEY (`ID_user2`) REFERENCES `users` (`IDuser`);

--
-- Ograniczenia dla tabeli `services`
--
ALTER TABLE `services`
  ADD CONSTRAINT `ID_category` FOREIGN KEY (`ID_category`) REFERENCES `category` (`IDcategory`),
  ADD CONSTRAINT `Id_service_card` FOREIGN KEY (`ID_service_card`) REFERENCES `service_card` (`IDservice_card`);

--
-- Ograniczenia dla tabeli `service_card`
--
ALTER TABLE `service_card`
  ADD CONSTRAINT `ID_user` FOREIGN KEY (`ID_user`) REFERENCES `users` (`IDuser`);

--
-- Ograniczenia dla tabeli `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `IDuser_type` FOREIGN KEY (`ID_user_type`) REFERENCES `user_type` (`IDuser_type`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
