# REST API
Mobile aplikasi dan API (Application Programming Interface)

Dalam tutorial ini, kita akan lihat bagaimana mewujudkan operasi 
Pangkalan Data CRUD (CREATE, READ, UPDATE, DELETE) MySQL dengan menggunakan konsep Berorientasikan Objek (_OO - Object Oriented_) PHP dan PDO.
Dalam menghasilkan rekaan _front-end_, tutorial ini menggunakan _Bootstrap framework_.



# Database & Table 

Wujudkan _database_ dan _table_ seperti dibawah

```php
-- phpMyAdmin SQL Dump


SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `db_staffs`
--
CREATE DATABASE IF NOT EXISTS `db_staffs` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `db_staffs`;

-- --------------------------------------------------------

--
-- Table structure for table `staffs`
--

DROP TABLE IF EXISTS `staffs`;
CREATE TABLE `staffs` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) DEFAULT NULL,
  `lname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `address` text,
  `gender` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staffs`
--

INSERT INTO `staffs` (`id`, `fname`, `lname`, `email`, `phone`, `address`, `gender`, `created`, `modified`) VALUES
(1, 'Ahmad', 'Zahrulnizam', 'zarul@gmail.com', '123445', 'KL', 'Perempuan', NULL, NULL),
(2, 'Mohamad', 'Zaki', 'mzms@gmail.com', '123456789', 'KL', 'Lelaki', '2017-05-24 00:00:00', '2017-05-17 00:00:00'),
(3, 'Mohd', 'Husin', 'husin@gmail.com', '12345667', 'Putrajaya', 'Lelaki', '2017-05-17 00:00:00', '2017-05-17 00:00:00'),
(4, 'Mohd', 'Jaafar', 'jaafar@gmail.com', '12345667', 'Putrajaya', 'Lelaki', '2017-05-17 00:00:00', '2017-05-17 00:00:00'),
(5, 'Mohd', 'Zahari', 'zahari@gmail.com', '12345667', 'Putrajaya', 'Lelaki', '2017-05-17 00:00:00', '2017-05-17 00:00:00'),
(6, 'Mohd', 'Johan', 'johan@gmail.com', '12345667', 'Putrajaya', 'Lelaki', '2017-05-17 00:00:00', '2017-05-17 00:00:00'),
(7, 'Saiful', 'Ahmad', 'saiful@gmail.com', '12344656', 'KL', 'Lelaki', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `staffs`
--
ALTER TABLE `staffs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `staffs`
--
ALTER TABLE `staffs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
```

#

# Config

Fail inc.config.php menyimpan parameter yang kekal atau perlu diubah mengikut konfigurasi komputer anda

```php

/**
 * Set Setting 
 * Please change this parameter follow yourselft setting
 */
$dbHost = "localhost";
$dbUser = "root";
$dbPass = "password";
$dbName = "db_php_sample";

```

# Download

Download the script by clicking following link and try it in your projects.

[Download](https://github.com/kpkt/api_sibu/archive/master.zip).
