-- phpMyAdmin SQL Dump
-- version 3.5.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 23, 2013 at 08:00 PM
-- Server version: 5.5.29
-- PHP Version: 5.4.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `name` varchar(24) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(11, 'C++'),
(5, 'Coding'),
(8, 'Ghostlab'),
(6, 'Git'),
(10, 'Javascript'),
(9, 'PHP'),
(7, 'Responsive Design'),
(1, 'Uncategorized');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `cat_id` int(3) NOT NULL,
  `title` varchar(255) NOT NULL,
  `contents` text NOT NULL,
  `date_posted` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `cat_id`, `title`, `contents`, `date_posted`) VALUES
(32, 9, 'This Blog is coded with PHP', 'This is a simple blog with not much to it. It can be extended... the sky is the limit!', '2013-07-23 18:38:21'),
(31, 8, 'Ghostlab', 'Ghostlab is a Mac app that lets you sync and test your responsive websites like a champ.', '2013-07-23 18:20:03'),
(6, 2, 'Hello World', 'Hello World!!', '2013-07-08 18:54:52'),
(33, 5, 'What was used to make this Blog', 'This blog is put together with:\r\n\r\nPHP, Less Css, Bootstrap CDN, Font Awesome HTML5\r\n\r\nThis is text that has been Edited !', '2013-07-23 18:39:45');
