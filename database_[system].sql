-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2015 at 09:42 AM
-- Server version: 5.5.39
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";

--
-- Database: 'invoice'
--
CREATE DATABASE IF NOT EXISTS invoice DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE invoice;

-- --------------------------------------------------------

--
-- Table structure for table 'admin_table'
--

CREATE TABLE IF NOT EXISTS admin_table (
  email_id varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table 'admin_table'
--

INSERT INTO admin_table (email_id, password) VALUES
('admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table 'login'
--

CREATE TABLE IF NOT EXISTS login (
  email_id varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table 'payment'
--

CREATE TABLE IF NOT EXISTS payment (
transaction_id int(11) NOT NULL,
  email_id varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  serial_no int(11) NOT NULL,
  caf_form_no int(11) NOT NULL,
  date_transaction timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table 'product'
--

CREATE TABLE IF NOT EXISTS product (
  product_name varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  serial_no int(11) NOT NULL,
  duration int(11) NOT NULL,
  price int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table 'users'
--

CREATE TABLE IF NOT EXISTS users (
  email_id varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  first_name varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  last_name varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  address varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  phone_no char(10) COLLATE utf8_unicode_ci NOT NULL,
  id_proof varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'image.png',
caf_form_no int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table admin_table
--
ALTER TABLE admin_table
 ADD PRIMARY KEY (email_id);

--
-- Indexes for table login
--
ALTER TABLE login
 ADD KEY login_id_fk (email_id);

--
-- Indexes for table payment
--
ALTER TABLE payment
 ADD PRIMARY KEY (transaction_id), ADD KEY payment_id_fk (email_id), ADD KEY payment_serial_fk (serial_no);

--
-- Indexes for table product
--
ALTER TABLE product
 ADD PRIMARY KEY (serial_no);

--
-- Indexes for table users
--
ALTER TABLE users
 ADD PRIMARY KEY (email_id), ADD UNIQUE KEY caf_form_no (caf_form_no);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table payment
--
ALTER TABLE payment
MODIFY transaction_id int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table users
--
ALTER TABLE users
MODIFY caf_form_no int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table login
--
ALTER TABLE login
ADD CONSTRAINT login_id_fk FOREIGN KEY (email_id) REFERENCES `users` (email_id) ON DELETE CASCADE;

--
-- Constraints for table payment
--
ALTER TABLE payment
ADD CONSTRAINT payment_serial_fk FOREIGN KEY (serial_no) REFERENCES product (serial_no) ON DELETE CASCADE,
ADD CONSTRAINT payment_id_fk FOREIGN KEY (email_id) REFERENCES `users` (email_id) ON DELETE CASCADE;