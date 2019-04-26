-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 26, 2019 at 02:31 PM
-- Server version: 5.6.41-84.1
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `heads241_dev`
--

-- --------------------------------------------------------

--
-- Table structure for table `consumer`
--

CREATE TABLE `consumer` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `business_legal_name` varchar(255) NOT NULL,
  `business_dba_name` varchar(255) NOT NULL,
  `business_structure` varchar(255) NOT NULL,
  `home_based` int(11) NOT NULL,
  `business_legal_address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `zip` varchar(255) NOT NULL,
  `business_physical_address` varchar(255) DEFAULT NULL,
  `pcity` varchar(255) DEFAULT NULL,
  `pstate` varchar(255) DEFAULT NULL,
  `pzip` varchar(255) DEFAULT NULL,
  `federal_tax_id` int(255) NOT NULL,
  `merchant_duns_number` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `telephone_number` varchar(255) NOT NULL,
  `toll_free_number` varchar(255) DEFAULT NULL,
  `fax_number` varchar(255) NOT NULL,
  `mobile_number` varchar(255) DEFAULT NULL,
  `email_address` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `consumer`
--

INSERT INTO `consumer` (`id`, `user_id`, `business_legal_name`, `business_dba_name`, `business_structure`, `home_based`, `business_legal_address`, `city`, `state`, `zip`, `business_physical_address`, `pcity`, `pstate`, `pzip`, `federal_tax_id`, `merchant_duns_number`, `first_name`, `middle_name`, `last_name`, `telephone_number`, `toll_free_number`, `fax_number`, `mobile_number`, `email_address`, `created_at`) VALUES
(6, 2, 'bn', 'bnb', 'Sole Proprietorship', 0, 'bnbn', 'bnb', 'bnbn', 'bnbnb', 'bnbn', 'bnbn', 'bnbn', 'bnbn', 56565, 'vbvb', 'vbvb', 'vbvb', '', 'ghgh', 'ghg', 'ghgh', 'hghgh', 'ghgh', '2019-04-25 12:40:01');

-- --------------------------------------------------------

--
-- Table structure for table `industries`
--

CREATE TABLE `industries` (
  `ind_id` int(11) NOT NULL,
  `industry` varchar(45) DEFAULT NULL,
  `approved` char(1) DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `industries`
--

INSERT INTO `industries` (`ind_id`, `industry`, `approved`) VALUES
(1, 'IT', 'N'),
(2, 'Telecom', 'Y'),
(3, 'Power', 'Y'),
(4, 'Control Industry', 'Y'),
(5, 'Pharmaceutical', 'Y'),
(6, 'Banking', 'Y'),
(7, 'Health Products', 'Y'),
(8, 'Beauty Products', 'Y'),
(9, 'Automobile', 'Y'),
(10, 'Cellular', 'Y'),
(11, 'Telecommunication', 'Y'),
(12, 'Agriculture', 'Y'),
(13, 'Consumer Goods', 'Y'),
(14, 'Production', 'Y'),
(15, 'Education', 'Y'),
(16, 'Health', 'N'),
(17, 'NGO', 'N'),
(21, 'Others', 'Y'),
(22, 'Engineering', 'Y'),
(23, 'Accounting', 'Y'),
(24, 'Education', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `ownership_information`
--

CREATE TABLE `ownership_information` (
  `owner_id` int(11) NOT NULL,
  `owner_partner` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `social_security_number` varchar(255) NOT NULL,
  `title_in_business` varchar(255) NOT NULL,
  `telephone_number` varchar(255) NOT NULL,
  `ownership_percentage` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `home_address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `zip` varchar(255) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `number_of_employees` varchar(255) NOT NULL,
  `sales_per_month` varchar(255) NOT NULL,
  `merchant_bank` varchar(255) NOT NULL,
  `account_manager_fn` varchar(255) NOT NULL,
  `physical_address` varchar(255) NOT NULL,
  `pcity` varchar(255) NOT NULL,
  `pstate` varchar(255) NOT NULL,
  `pzip` varchar(255) NOT NULL,
  `account_manager_email_address` varchar(255) NOT NULL,
  `industry` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ownership_information`
--

INSERT INTO `ownership_information` (`owner_id`, `owner_partner`, `first_name`, `middle_name`, `last_name`, `social_security_number`, `title_in_business`, `telephone_number`, `ownership_percentage`, `dob`, `home_address`, `city`, `state`, `zip`, `customer_id`, `number_of_employees`, `sales_per_month`, `merchant_bank`, `account_manager_fn`, `physical_address`, `pcity`, `pstate`, `pzip`, `account_manager_email_address`, `industry`) VALUES
(1, 'Owner', 'ghgh', 'ghgh', 'ghgh', 'ghgh', 'ghgh', 'ghgh', 'dfdf', '2019-04-25', 'ghgh', 'ghg', 'ghgh', 'hghg', 6, '50001-10000', '$1,000,000-$3,000,000', 'ghg', 'ghg', 'ghgh', 'ghgh', 'ghgh', 'hghg', 'ghgh', 9);

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(11) NOT NULL,
  `payee_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `transaction_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `payee_id`, `amount`, `transaction_date`, `description`) VALUES
(12, 2, 10000, '2019-04-26 10:04:01', 'Solomon Maithya payment');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_type` int(11) NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `verification_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `terms_and_conditions` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `user_type`, `status`, `created_at`, `updated_at`, `verification_token`, `terms_and_conditions`) VALUES
(2, 'solomon', 'Wsqiv_b0ANyovsq2-Pnqcz8iA-vTjv4F', '$2y$13$u/5LAtyXizAZwl4XDqZGee3RXglRYCTfaDP/iw7UsW9ZVIGkTLD66', NULL, 'maithyakavyu@outlook.com', 3, 10, 1555619871, 1555619930, 'mQ9vFaExcYEQSdT3vLt3UTV580NvfP-k_1555619871', 1),
(3, 'maithya', 'KUuT3vD1dDREw1_TkekezaNeKjV0Yhjs', '$2y$13$Df4cAWdIMEGAtTT1azm7OOcFzkTX9.LB1e0MMjJdWjp.00w5HxjmG', NULL, 'rtr@outlookl.tghty', 1, 9, 1556174072, 1556174072, 'C8GMQxdsz8YBBKbl0z0cn_dqU90vwTHs_1556174072', 1),
(4, 'solomonaa', 'u99AKlZ9SHCztnO-0D37u8_vM-iZGAGq', '$2y$13$aUPCvyfl.4gD9LP2uOxXKOZDe3wyDagocr0qkQl2.6BTi60rUKKu6', NULL, 'solo.maithya@gmaffgfgfil.com', 1, 9, 1556174798, 1556174798, 'k4xAQfZ_97VL2u4UVV8-JodvYuGCCcbW_1556174798', 1),
(5, 'DRDERE', '1KuxCxvB2TghaQZpJoTT_Gm-lDNEEhyS', '$2y$13$d2RhuSv43swOG6CLeQG.wuyl80qj8RMScmGy.x1XxNuTYwCzYFavC', NULL, 'sdfdfd@ffrtyryfg.ghg', 1, 9, 1556175786, 1556175786, 'BclxqijLaesmNHu9nlOVyGToN-rN7ciq_1556175786', 1),
(6, 'dfrdfd', 'Ofb4MavDiS1RHdcyY8Ne2wcXnrpE_HS3', '$2y$13$aZCOhkS8UPLTt/QvnIe35Ojbml8T1EM6vPJ4N19AbnZ4EYleUVX3G', NULL, 'kalidegi@3mail.rocks', 1, 10, 1556175905, 1556175964, 'M1ybTZwg9EKHrgIj5_86cZDvewANfP30_1556175905', 1),
(7, 'dfdfddfdf', '4Eaj9FeV8yEC6QljxrZMAjuwvNfj0F_r', '$2y$13$0In9i7rrAiBrfzkac3km1e3HVVLD1mfPqHFepbQopKCVJ9dFyM5p.', NULL, 'cowohiwako@stattech.info', 1, 9, 1556176036, 1556176036, '64BYih8p7ntgd3gHCzhYpf9OuyA3zsqt_1556176036', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_types`
--

CREATE TABLE `user_types` (
  `type_id` int(11) NOT NULL,
  `user_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_types`
--

INSERT INTO `user_types` (`type_id`, `user_type`) VALUES
(1, 'Consumer'),
(2, 'Merchant'),
(3, 'Bank'),
(4, 'Government'),
(5, 'Healthcare'),
(6, 'Education');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `consumer`
--
ALTER TABLE `consumer`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `industries`
--
ALTER TABLE `industries`
  ADD PRIMARY KEY (`ind_id`);

--
-- Indexes for table `ownership_information`
--
ALTER TABLE `ownership_information`
  ADD PRIMARY KEY (`owner_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`),
  ADD KEY `type_type` (`user_type`);

--
-- Indexes for table `user_types`
--
ALTER TABLE `user_types`
  ADD PRIMARY KEY (`type_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `consumer`
--
ALTER TABLE `consumer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `industries`
--
ALTER TABLE `industries`
  MODIFY `ind_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `ownership_information`
--
ALTER TABLE `ownership_information`
  MODIFY `owner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user_types`
--
ALTER TABLE `user_types`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `consumer`
--
ALTER TABLE `consumer`
  ADD CONSTRAINT `consumer_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ownership_information`
--
ALTER TABLE `ownership_information`
  ADD CONSTRAINT `ownership_information_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `consumer` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`user_type`) REFERENCES `user_types` (`type_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
