-- phpMyAdmin SQL Dump
-- version 4.7.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

CREATE DATABASE IF NOT EXISTS sessiondb;
USE sessiondb;

CREATE TABLE `users` (
  `uname` varchar(20) NOT NULL,
  `pass` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`uname`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `users` (`uname`, `pass`) VALUES
('jeem', 'jeem'),
('bushra', 'bushra');

COMMIT;
