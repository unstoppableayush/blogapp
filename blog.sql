-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2022 at 05:38 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `full_name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `full_name`, `email`, `password`) VALUES
(1, 'Ayush Kumar', 'ayush01@gmail.com', 'kumar123'),
(2, 'Ayush', 'ayush@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'web development'),
(2, 'App development'),
(3, 'Game development'),
(4, 'Graphic designer'),
(5, 'hacking'),
(7, 'New'),
(15, 'java'),
(16, 'c++'),
(17, 'algorithm');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `comment` text NOT NULL,
  `post_id` int(11) NOT NULL,
  `comment_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `name`, `comment`, `post_id`, `comment_at`) VALUES
(11, 'Ayush', 'This is comment', 47, '2022-12-18 16:17:06');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `post_id`, `image`) VALUES
(1, 1, '1.jpeg'),
(2, 2, '2.jpeg'),
(3, 3, '3.jped'),
(4, 4, '4.jpeg'),
(5, 5, ''),
(6, 23, 'Screenshot (1).png'),
(7, 24, 'Screenshot (1).png'),
(8, 25, 'ayush.png'),
(9, 31, 'janko-ferlic-sfL_QOnmy00-unsplash.jpg'),
(10, 32, 'animation_640_lanlh96d.gif'),
(11, 33, '72342-welcome.gif'),
(12, 34, 'wallpaperflare.com_wallpaper (6).jpg'),
(13, 35, 'wallpaperflare.com_wallpaper.jpg'),
(14, 37, 'java-coffee-cup-logo.png'),
(15, 38, 'PikPng.com_java-logo-transparent-png_1469146.png'),
(16, 39, 'book-3d-illustration-png.webp'),
(17, 40, 'undraw_In_the_office_re_jtgc.png'),
(18, 41, '72342-welcome.gif'),
(19, 42, 'WhatsApp Image 2022-11-04 at 9.03.25 PM.jpeg'),
(20, 43, 'money.png'),
(21, 44, 'unnamed.jpg'),
(22, 45, 'ops.png'),
(23, 46, 'money.png'),
(24, 47, 'WhatsApp Image 2022-11-04 at 9.03.25 PM.jpeg'),
(25, 48, 'photo_2022-08-07_22-42-13-modified.png');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `action` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `name`, `action`) VALUES
(1, 'Home', 'index.php'),
(2, 'Contact Us', '#'),
(7, 'categories', '#'),
(8, 'newmenu', 'newmenu.php');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `title`, `content`, `created_at`, `category_id`) VALUES
(31, 'What is openapi?', '<p><strong><span data-offset-key=\"dpu09-7-0\"><span data-text=\"true\">Open</span></span><span data-offset-key=\"dpu09-8-0\"><span data-text=\"true\">API</span></span></strong><span data-offset-key=\"dpu09-9-0\"><span data-text=\"true\"> (</span></span><span data-offset-key=\"dpu09-10-0\"><span data-text=\"true\">formerly</span></span><span data-offset-key=\"dpu09-11-0\"><span data-text=\"true\"> known</span></span><span data-offset-key=\"dpu09-12-0\"><span data-text=\"true\"> as</span></span><span data-offset-key=\"dpu09-13-0\"><span data-text=\"true\"> Sw</span></span><span data-offset-key=\"dpu09-14-0\"><span data-text=\"true\">agger</span></span><span data-offset-key=\"dpu09-15-0\"><span data-text=\"true\">)</span></span><span data-offset-key=\"dpu09-16-0\"><span data-text=\"true\"> is</span></span><span data-offset-key=\"dpu09-17-0\"><span data-text=\"true\"> an</span></span><span data-offset-key=\"dpu09-18-0\"><span data-text=\"true\"> open</span></span><span data-offset-key=\"dpu09-19-0\"><span data-text=\"true\"> source</span></span><span data-offset-key=\"dpu09-20-0\"><span data-text=\"true\"> software</span></span><span data-offset-key=\"dpu09-21-0\"><span data-text=\"true\"> framework</span></span><span data-offset-key=\"dpu09-22-0\"><span data-text=\"true\"> that</span></span><span data-offset-key=\"dpu09-23-0\"><span data-text=\"true\"> helps</span></span><span data-offset-key=\"dpu09-24-0\"><span data-text=\"true\"> developers</span></span><span data-offset-key=\"dpu09-25-0\"><span data-text=\"true\"> design</span></span><span data-offset-key=\"dpu09-26-0\"><span data-text=\"true\">,</span></span><span data-offset-key=\"dpu09-27-0\"><span data-text=\"true\"> build</span></span><span data-offset-key=\"dpu09-28-0\"><span data-text=\"true\">,</span></span><span data-offset-key=\"dpu09-29-0\"><span data-text=\"true\"> document</span></span><span data-offset-key=\"dpu09-30-0\"><span data-text=\"true\">,</span></span><span data-offset-key=\"dpu09-31-0\"><span data-text=\"true\"> and</span></span><span data-offset-key=\"dpu09-32-0\"><span data-text=\"true\"> consume</span></span><span data-offset-key=\"dpu09-33-0\"><span data-text=\"true\"> REST</span></span><span data-offset-key=\"dpu09-34-0\"><span data-text=\"true\">ful</span></span><span data-offset-key=\"dpu09-35-0\"><span data-text=\"true\"> web</span></span><span data-offset-key=\"dpu09-36-0\"><span data-text=\"true\"> services</span></span><span data-offset-key=\"dpu09-37-0\"><span data-text=\"true\">.</span></span><span data-offset-key=\"dpu09-38-0\"><span data-text=\"true\"> The</span></span><span data-offset-key=\"dpu09-39-0\"><span data-text=\"true\"> framework</span></span><span data-offset-key=\"dpu09-40-0\"><span data-text=\"true\"> has</span></span><span data-offset-key=\"dpu09-41-0\"><span data-text=\"true\"> been</span></span><span data-offset-key=\"dpu09-42-0\"><span data-text=\"true\"> designed</span></span><span data-offset-key=\"dpu09-43-0\"><span data-text=\"true\"> to</span></span><span data-offset-key=\"dpu09-44-0\"><span data-text=\"true\"> create</span></span><span data-offset-key=\"dpu09-45-0\"><span data-text=\"true\"> machine</span></span><span data-offset-key=\"dpu09-46-0\"><span data-text=\"true\">-</span></span><span data-offset-key=\"dpu09-47-0\"><span data-text=\"true\">readable</span></span><span data-offset-key=\"dpu09-48-0\"><span data-text=\"true\"> definitions</span></span><span data-offset-key=\"dpu09-49-0\"><span data-text=\"true\"> of</span></span><span data-offset-key=\"dpu09-50-0\"><span data-text=\"true\"> web</span></span><span data-offset-key=\"dpu09-51-0\"><span data-text=\"true\"> services</span></span><span data-offset-key=\"dpu09-52-0\"><span data-text=\"true\">,</span></span><span data-offset-key=\"dpu09-53-0\"><span data-text=\"true\"> allowing</span></span><span data-offset-key=\"dpu09-54-0\"><span data-text=\"true\"> developers</span></span><span data-offset-key=\"dpu09-55-0\"><span data-text=\"true\"> to</span></span><span data-offset-key=\"dpu09-56-0\"><span data-text=\"true\"> more</span></span><span data-offset-key=\"dpu09-57-0\"><span data-text=\"true\"> quickly</span></span><span data-offset-key=\"dpu09-58-0\"><span data-text=\"true\"> build</span></span><span data-offset-key=\"dpu09-59-0\"><span data-text=\"true\"> and</span></span><span data-offset-key=\"dpu09-60-0\"><span data-text=\"true\"> consume</span></span><span data-offset-key=\"dpu09-61-0\"><span data-text=\"true\"> APIs</span></span><span data-offset-key=\"dpu09-62-0\"><span data-text=\"true\">.</span></span><span data-offset-key=\"dpu09-63-0\"><span data-text=\"true\"> Open</span></span><span data-offset-key=\"dpu09-64-0\"><span data-text=\"true\">API</span></span><span data-offset-key=\"dpu09-65-0\"><span data-text=\"true\"> is</span></span><span data-offset-key=\"dpu09-66-0\"><span data-text=\"true\"> language</span></span><span data-offset-key=\"dpu09-67-0\"><span data-text=\"true\">-</span></span><span data-offset-key=\"dpu09-68-0\"><span data-text=\"true\">agn</span></span><span data-offset-key=\"dpu09-69-0\"><span data-text=\"true\">ostic</span></span><span data-offset-key=\"dpu09-70-0\"><span data-text=\"true\">,</span></span><span data-offset-key=\"dpu09-71-0\"><span data-text=\"true\"> meaning</span></span><span data-offset-key=\"dpu09-72-0\"><span data-text=\"true\"> it</span></span><span data-offset-key=\"dpu09-73-0\"><span data-text=\"true\"> can</span></span><span data-offset-key=\"dpu09-74-0\"><span data-text=\"true\"> be</span></span><span data-offset-key=\"dpu09-75-0\"><span data-text=\"true\"> used</span></span><span data-offset-key=\"dpu09-76-0\"><span data-text=\"true\"> with</span></span><span data-offset-key=\"dpu09-77-0\"><span data-text=\"true\"> many</span></span><span data-offset-key=\"dpu09-78-0\"><span data-text=\"true\"> different</span></span><span data-offset-key=\"dpu09-79-0\"><span data-text=\"true\"> programming</span></span><span data-offset-key=\"dpu09-80-0\"><span data-text=\"true\"> languages</span></span><span data-offset-key=\"dpu09-81-0\"><span data-text=\"true\">,</span></span><span data-offset-key=\"dpu09-82-0\"><span data-text=\"true\"> including</span></span><span data-offset-key=\"dpu09-83-0\"><span data-text=\"true\"> Java</span></span><span data-offset-key=\"dpu09-84-0\"><span data-text=\"true\">,</span></span><span data-offset-key=\"dpu09-85-0\"><span data-text=\"true\"> Python</span></span><span data-offset-key=\"dpu09-86-0\"><span data-text=\"true\">,</span></span><span data-offset-key=\"dpu09-87-0\"><span data-text=\"true\"> and</span></span><span data-offset-key=\"dpu09-88-0\"><span data-text=\"true\"> Node</span></span><span data-offset-key=\"dpu09-89-0\"><span data-text=\"true\">.</span></span><span data-offset-key=\"dpu09-90-0\"><span data-text=\"true\">js</span></span><span data-offset-key=\"dpu09-91-0\"><span data-text=\"true\">.</span></span></p>', '2022-12-18 15:33:30', 7),
(32, 'What is Programming Language?', '<p><span data-offset-key=\"d4t37-6-0\"><span data-text=\"true\">A</span></span><span data-offset-key=\"d4t37-7-0\"><span data-text=\"true\"> <strong>programming</strong></span></span><strong><span data-offset-key=\"d4t37-8-0\"><span data-text=\"true\"> language</span></span></strong><span data-offset-key=\"d4t37-9-0\"><span data-text=\"true\"><strong> </strong>is</span></span><span data-offset-key=\"d4t37-10-0\"><span data-text=\"true\"> a</span></span><span data-offset-key=\"d4t37-11-0\"><span data-text=\"true\"> formal</span></span><span data-offset-key=\"d4t37-12-0\"><span data-text=\"true\"> language</span></span><span data-offset-key=\"d4t37-13-0\"><span data-text=\"true\"> that</span></span><span data-offset-key=\"d4t37-14-0\"><span data-text=\"true\"> specifies</span></span><span data-offset-key=\"d4t37-15-0\"><span data-text=\"true\"> a</span></span><span data-offset-key=\"d4t37-16-0\"><span data-text=\"true\"> set</span></span><span data-offset-key=\"d4t37-17-0\"><span data-text=\"true\"> of</span></span><span data-offset-key=\"d4t37-18-0\"><span data-text=\"true\"> instructions</span></span><span data-offset-key=\"d4t37-19-0\"><span data-text=\"true\"> that</span></span><span data-offset-key=\"d4t37-20-0\"><span data-text=\"true\"> can</span></span><span data-offset-key=\"d4t37-21-0\"><span data-text=\"true\"> be</span></span><span data-offset-key=\"d4t37-22-0\"><span data-text=\"true\"> used</span></span><span data-offset-key=\"d4t37-23-0\"><span data-text=\"true\"> to</span></span><span data-offset-key=\"d4t37-24-0\"><span data-text=\"true\"> produce</span></span><span data-offset-key=\"d4t37-25-0\"><span data-text=\"true\"> various</span></span><span data-offset-key=\"d4t37-26-0\"><span data-text=\"true\"> kinds</span></span><span data-offset-key=\"d4t37-27-0\"><span data-text=\"true\"> of</span></span><span data-offset-key=\"d4t37-28-0\"><span data-text=\"true\"> output</span></span><span data-offset-key=\"d4t37-29-0\"><span data-text=\"true\">.</span></span><span data-offset-key=\"d4t37-30-0\"><span data-text=\"true\"> Programming</span></span><span data-offset-key=\"d4t37-31-0\"><span data-text=\"true\"> languages</span></span><span data-offset-key=\"d4t37-32-0\"><span data-text=\"true\"> are</span></span><span data-offset-key=\"d4t37-33-0\"><span data-text=\"true\"> used</span></span><span data-offset-key=\"d4t37-34-0\"><span data-text=\"true\"> to</span></span><span data-offset-key=\"d4t37-35-0\"><span data-text=\"true\"> create</span></span><span data-offset-key=\"d4t37-36-0\"><span data-text=\"true\"> programs</span></span><span data-offset-key=\"d4t37-37-0\"><span data-text=\"true\"> that</span></span><span data-offset-key=\"d4t37-38-0\"><span data-text=\"true\"> control</span></span><span data-offset-key=\"d4t37-39-0\"><span data-text=\"true\"> the</span></span><span data-offset-key=\"d4t37-40-0\"><span data-text=\"true\"> behavior</span></span><span data-offset-key=\"d4t37-41-0\"><span data-text=\"true\"> of</span></span><span data-offset-key=\"d4t37-42-0\"><span data-text=\"true\"> a</span></span><span data-offset-key=\"d4t37-43-0\"><span data-text=\"true\"> machine</span></span><span data-offset-key=\"d4t37-44-0\"><span data-text=\"true\">,</span></span><span data-offset-key=\"d4t37-45-0\"><span data-text=\"true\"> to</span></span><span data-offset-key=\"d4t37-46-0\"><span data-text=\"true\"> express</span></span><span data-offset-key=\"d4t37-47-0\"><span data-text=\"true\"> algorithms</span></span><span data-offset-key=\"d4t37-48-0\"><span data-text=\"true\"> precisely</span></span><span data-offset-key=\"d4t37-49-0\"><span data-text=\"true\">,</span></span><span data-offset-key=\"d4t37-50-0\"><span data-text=\"true\"> and</span></span><span data-offset-key=\"d4t37-51-0\"><span data-text=\"true\"> to</span></span><span data-offset-key=\"d4t37-52-0\"><span data-text=\"true\"> create</span></span><span data-offset-key=\"d4t37-53-0\"><span data-text=\"true\"> complex</span></span><span data-offset-key=\"d4t37-54-0\"><span data-text=\"true\"> systems</span></span><span data-offset-key=\"d4t37-55-0\"><span data-text=\"true\">.</span></span><span data-offset-key=\"d4t37-56-0\"><span data-text=\"true\"> Examples</span></span><span data-offset-key=\"d4t37-57-0\"><span data-text=\"true\"> of</span></span><span data-offset-key=\"d4t37-58-0\"><span data-text=\"true\"> programming</span></span><span data-offset-key=\"d4t37-59-0\"><span data-text=\"true\"> languages</span></span><span data-offset-key=\"d4t37-60-0\"><span data-text=\"true\"> include</span></span><span data-offset-key=\"d4t37-61-0\"><span data-text=\"true\"> <em>C</em></span></span><em><span data-offset-key=\"d4t37-62-0\"><span data-text=\"true\">,</span></span><span data-offset-key=\"d4t37-63-0\"><span data-text=\"true\"> C</span></span><span data-offset-key=\"d4t37-64-0\"><span data-text=\"true\">++</span></span><span data-offset-key=\"d4t37-65-0\"><span data-text=\"true\">,</span></span><span data-offset-key=\"d4t37-66-0\"><span data-text=\"true\"> Java</span></span><span data-offset-key=\"d4t37-67-0\"><span data-text=\"true\">,</span></span><span data-offset-key=\"d4t37-68-0\"><span data-text=\"true\"> Python</span></span><span data-offset-key=\"d4t37-69-0\"><span data-text=\"true\">,</span></span><span data-offset-key=\"d4t37-70-0\"><span data-text=\"true\"> and</span></span><span data-offset-key=\"d4t37-71-0\"><span data-text=\"true\"> JavaScript</span></span><span data-offset-key=\"d4t37-72-0\"><span data-text=\"true\">.</span></span></em></p>', '2022-12-18 15:35:12', 2),
(33, 'How to start a startup?', '<ol>\r\n<li><span data-offset-key=\"etm96-11-0\"><span data-text=\"true\">Research</span></span><span data-offset-key=\"etm96-12-0\"><span data-text=\"true\"> and</span></span><span data-offset-key=\"etm96-13-0\"><span data-text=\"true\"> plan</span></span><span data-offset-key=\"etm96-14-0\"><span data-text=\"true\">:</span></span><span data-offset-key=\"etm96-15-0\"><span data-text=\"true\"> Research</span></span><span data-offset-key=\"etm96-16-0\"><span data-text=\"true\"> the</span></span><span data-offset-key=\"etm96-17-0\"><span data-text=\"true\"> industry</span></span><span data-offset-key=\"etm96-18-0\"><span data-text=\"true\">,</span></span><span data-offset-key=\"etm96-19-0\"><span data-text=\"true\"> market</span></span><span data-offset-key=\"etm96-20-0\"><span data-text=\"true\">,</span></span><span data-offset-key=\"etm96-21-0\"><span data-text=\"true\"> and</span></span><span data-offset-key=\"etm96-22-0\"><span data-text=\"true\"> competition</span></span><span data-offset-key=\"etm96-23-0\"><span data-text=\"true\"> to</span></span><span data-offset-key=\"etm96-24-0\"><span data-text=\"true\"> plan</span></span><span data-offset-key=\"etm96-25-0\"><span data-text=\"true\"> the</span></span><span data-offset-key=\"etm96-26-0\"><span data-text=\"true\"> best</span></span><span data-offset-key=\"etm96-27-0\"><span data-text=\"true\"> approach</span></span><span data-offset-key=\"etm96-28-0\"><span data-text=\"true\"> for</span></span><span data-offset-key=\"etm96-29-0\"><span data-text=\"true\"> your</span></span><span data-offset-key=\"etm96-30-0\"><span data-text=\"true\"> startup</span></span><span data-offset-key=\"etm96-31-0\"><span data-text=\"true\">.</span></span>&nbsp;</li>\r\n<li><span data-offset-key=\"etm96-36-0\"><span data-text=\"true\">&nbsp;Find</span></span><span data-offset-key=\"etm96-37-0\"><span data-text=\"true\"> the</span></span><span data-offset-key=\"etm96-38-0\"><span data-text=\"true\"> right</span></span><span data-offset-key=\"etm96-39-0\"><span data-text=\"true\"> team</span></span><span data-offset-key=\"etm96-40-0\"><span data-text=\"true\">:</span></span><span data-offset-key=\"etm96-41-0\"><span data-text=\"true\"> Find</span></span><span data-offset-key=\"etm96-42-0\"><span data-text=\"true\"> the</span></span><span data-offset-key=\"etm96-43-0\"><span data-text=\"true\"> right</span></span><span data-offset-key=\"etm96-44-0\"><span data-text=\"true\"> co</span></span><span data-offset-key=\"etm96-45-0\"><span data-text=\"true\">-</span></span><span data-offset-key=\"etm96-46-0\"><span data-text=\"true\">found</span></span><span data-offset-key=\"etm96-47-0\"><span data-text=\"true\">ers</span></span><span data-offset-key=\"etm96-48-0\"><span data-text=\"true\"> that</span></span><span data-offset-key=\"etm96-49-0\"><span data-text=\"true\"> complement</span></span><span data-offset-key=\"etm96-50-0\"><span data-text=\"true\"> your</span></span><span data-offset-key=\"etm96-51-0\"><span data-text=\"true\"> skills</span></span><span data-offset-key=\"etm96-52-0\"><span data-text=\"true\">,</span></span><span data-offset-key=\"etm96-53-0\"><span data-text=\"true\"> and</span></span><span data-offset-key=\"etm96-54-0\"><span data-text=\"true\"> create</span></span><span data-offset-key=\"etm96-55-0\"><span data-text=\"true\"> a</span></span><span data-offset-key=\"etm96-56-0\"><span data-text=\"true\"> strong</span></span><span data-offset-key=\"etm96-57-0\"><span data-text=\"true\"> team</span></span><span data-offset-key=\"etm96-58-0\"><span data-text=\"true\">.</span></span>&nbsp;</li>\r\n<li><span data-offset-key=\"etm96-63-0\"><span data-text=\"true\">&nbsp;Secure</span></span><span data-offset-key=\"etm96-64-0\"><span data-text=\"true\"> financing</span></span><span data-offset-key=\"etm96-65-0\"><span data-text=\"true\">:</span></span><span data-offset-key=\"etm96-66-0\"><span data-text=\"true\"> Secure</span></span><span data-offset-key=\"etm96-67-0\"><span data-text=\"true\"> financing</span></span><span data-offset-key=\"etm96-68-0\"><span data-text=\"true\"> through</span></span><span data-offset-key=\"etm96-69-0\"><span data-text=\"true\"> venture</span></span><span data-offset-key=\"etm96-70-0\"><span data-text=\"true\"> capital</span></span><span data-offset-key=\"etm96-71-0\"><span data-text=\"true\">,</span></span><span data-offset-key=\"etm96-72-0\"><span data-text=\"true\"> angel</span></span><span data-offset-key=\"etm96-73-0\"><span data-text=\"true\"> investors</span></span><span data-offset-key=\"etm96-74-0\"><span data-text=\"true\">,</span></span><span data-offset-key=\"etm96-75-0\"><span data-text=\"true\"> or</span></span><span data-offset-key=\"etm96-76-0\"><span data-text=\"true\"> crowdfunding</span></span><span data-offset-key=\"etm96-77-0\"><span data-text=\"true\">.</span></span>&nbsp;</li>\r\n<li><span data-offset-key=\"etm96-82-0\"><span data-text=\"true\">&nbsp;Create</span></span><span data-offset-key=\"etm96-83-0\"><span data-text=\"true\"> a</span></span><span data-offset-key=\"etm96-84-0\"><span data-text=\"true\"> prototype</span></span><span data-offset-key=\"etm96-85-0\"><span data-text=\"true\">:</span></span><span data-offset-key=\"etm96-86-0\"><span data-text=\"true\"> Create</span></span><span data-offset-key=\"etm96-87-0\"><span data-text=\"true\"> a</span></span><span data-offset-key=\"etm96-88-0\"><span data-text=\"true\"> working</span></span><span data-offset-key=\"etm96-89-0\"><span data-text=\"true\"> prototype</span></span><span data-offset-key=\"etm96-90-0\"><span data-text=\"true\"> of</span></span><span data-offset-key=\"etm96-91-0\"><span data-text=\"true\"> your</span></span><span data-offset-key=\"etm96-92-0\"><span data-text=\"true\"> product</span></span><span data-offset-key=\"etm96-93-0\"><span data-text=\"true\"> or</span></span><span data-offset-key=\"etm96-94-0\"><span data-text=\"true\"> service</span></span><span data-offset-key=\"etm96-95-0\"><span data-text=\"true\"> to</span></span><span data-offset-key=\"etm96-96-0\"><span data-text=\"true\"> demonstrate</span></span><span data-offset-key=\"etm96-97-0\"><span data-text=\"true\"> its</span></span><span data-offset-key=\"etm96-98-0\"><span data-text=\"true\"> capabilities</span></span><span data-offset-key=\"etm96-99-0\"><span data-text=\"true\">.</span></span>&nbsp;</li>\r\n<li><span data-offset-key=\"etm96-104-0\"><span data-text=\"true\">&nbsp;Test</span></span><span data-offset-key=\"etm96-105-0\"><span data-text=\"true\"> and</span></span><span data-offset-key=\"etm96-106-0\"><span data-text=\"true\"> refine</span></span><span data-offset-key=\"etm96-107-0\"><span data-text=\"true\">:</span></span><span data-offset-key=\"etm96-108-0\"><span data-text=\"true\"> Test</span></span><span data-offset-key=\"etm96-109-0\"><span data-text=\"true\"> the</span></span><span data-offset-key=\"etm96-110-0\"><span data-text=\"true\"> prototype</span></span><span data-offset-key=\"etm96-111-0\"><span data-text=\"true\"> with</span></span><span data-offset-key=\"etm96-112-0\"><span data-text=\"true\"> potential</span></span><span data-offset-key=\"etm96-113-0\"><span data-text=\"true\"> customers</span></span><span data-offset-key=\"etm96-114-0\"><span data-text=\"true\"> and</span></span><span data-offset-key=\"etm96-115-0\"><span data-text=\"true\"> refine</span></span><span data-offset-key=\"etm96-116-0\"><span data-text=\"true\"> it</span></span><span data-offset-key=\"etm96-117-0\"><span data-text=\"true\"> to</span></span><span data-offset-key=\"etm96-118-0\"><span data-text=\"true\"> meet</span></span><span data-offset-key=\"etm96-119-0\"><span data-text=\"true\"> their</span></span><span data-offset-key=\"etm96-120-0\"><span data-text=\"true\"> needs</span></span><span data-offset-key=\"etm96-121-0\"><span data-text=\"true\">.</span></span>&nbsp;</li>\r\n<li><span data-offset-key=\"etm96-126-0\"><span data-text=\"true\">&nbsp;Get</span></span><span data-offset-key=\"etm96-127-0\"><span data-text=\"true\"> customers</span></span><span data-offset-key=\"etm96-128-0\"><span data-text=\"true\">:</span></span><span data-offset-key=\"etm96-129-0\"><span data-text=\"true\"> Develop</span></span><span data-offset-key=\"etm96-130-0\"><span data-text=\"true\"> a</span></span><span data-offset-key=\"etm96-131-0\"><span data-text=\"true\"> marketing</span></span><span data-offset-key=\"etm96-132-0\"><span data-text=\"true\"> and</span></span><span data-offset-key=\"etm96-133-0\"><span data-text=\"true\"> sales</span></span><span data-offset-key=\"etm96-134-0\"><span data-text=\"true\"> strategy</span></span><span data-offset-key=\"etm96-135-0\"><span data-text=\"true\"> to</span></span><span data-offset-key=\"etm96-136-0\"><span data-text=\"true\"> start</span></span><span data-offset-key=\"etm96-137-0\"><span data-text=\"true\"> getting</span></span><span data-offset-key=\"etm96-138-0\"><span data-text=\"true\"> customers</span></span><span data-offset-key=\"etm96-139-0\"><span data-text=\"true\">.</span></span> </li>\r\n<li><span data-offset-key=\"etm96-144-0\"><span data-text=\"true\">&nbsp;Grow</span></span><span data-offset-key=\"etm96-145-0\"><span data-text=\"true\"> and</span></span><span data-offset-key=\"etm96-146-0\"><span data-text=\"true\"> scale</span></span><span data-offset-key=\"etm96-147-0\"><span data-text=\"true\">:</span></span><span data-offset-key=\"etm96-148-0\"><span data-text=\"true\"> Invest</span></span><span data-offset-key=\"etm96-149-0\"><span data-text=\"true\"> in</span></span><span data-offset-key=\"etm96-150-0\"><span data-text=\"true\"> the</span></span><span data-offset-key=\"etm96-151-0\"><span data-text=\"true\"> right</span></span><span data-offset-key=\"etm96-152-0\"><span data-text=\"true\"> people</span></span><span data-offset-key=\"etm96-153-0\"><span data-text=\"true\"> and</span></span><span data-offset-key=\"etm96-154-0\"><span data-text=\"true\"> technology</span></span><span data-offset-key=\"etm96-155-0\"><span data-text=\"true\"> to</span></span><span data-offset-key=\"etm96-156-0\"><span data-text=\"true\"> grow</span></span><span data-offset-key=\"etm96-157-0\"><span data-text=\"true\"> and</span></span><span data-offset-key=\"etm96-158-0\"><span data-text=\"true\"> scale</span></span><span data-offset-key=\"etm96-159-0\"><span data-text=\"true\"> your</span></span><span data-offset-key=\"etm96-160-0\"><span data-text=\"true\"> business</span></span><span data-offset-key=\"etm96-161-0\"><span data-text=\"true\">.</span></span></li>\r\n</ol>', '2022-12-18 15:37:40', 7),
(34, 'How to become Entrepreneur?', '<ol>\r\n<li style=\"font-family: arial, helvetica, sans-serif;\"><span style=\"font-family: arial, helvetica, sans-serif;\"><strong><span data-offset-key=\"7kvdf-10-0\"><span data-text=\"true\">Develop</span></span><span data-offset-key=\"7kvdf-11-0\"><span data-text=\"true\"> a</span></span><span data-offset-key=\"7kvdf-12-0\"><span data-text=\"true\"> business</span></span><span data-offset-key=\"7kvdf-13-0\"><span data-text=\"true\"> plan</span></span><span data-offset-key=\"7kvdf-14-0\"><span data-text=\"true\">:</span></span></strong><span data-offset-key=\"7kvdf-15-0\"><span data-text=\"true\"> The</span></span><span data-offset-key=\"7kvdf-16-0\"><span data-text=\"true\"> first</span></span><span data-offset-key=\"7kvdf-17-0\"><span data-text=\"true\"> step</span></span><span data-offset-key=\"7kvdf-18-0\"><span data-text=\"true\"> to</span></span><span data-offset-key=\"7kvdf-19-0\"><span data-text=\"true\"> becoming</span></span><span data-offset-key=\"7kvdf-20-0\"><span data-text=\"true\"> an</span></span><span data-offset-key=\"7kvdf-21-0\"><span data-text=\"true\"> entrepreneur</span></span><span data-offset-key=\"7kvdf-22-0\"><span data-text=\"true\"> is</span></span><span data-offset-key=\"7kvdf-23-0\"><span data-text=\"true\"> to</span></span><span data-offset-key=\"7kvdf-24-0\"><span data-text=\"true\"> develop</span></span><span data-offset-key=\"7kvdf-25-0\"><span data-text=\"true\"> a</span></span><span data-offset-key=\"7kvdf-26-0\"><span data-text=\"true\"> business</span></span><span data-offset-key=\"7kvdf-27-0\"><span data-text=\"true\"> plan</span></span><span data-offset-key=\"7kvdf-28-0\"><span data-text=\"true\">.</span></span><span data-offset-key=\"7kvdf-29-0\"><span data-text=\"true\"> This</span></span><span data-offset-key=\"7kvdf-30-0\"><span data-text=\"true\"> is</span></span><span data-offset-key=\"7kvdf-31-0\"><span data-text=\"true\"> an</span></span><span data-offset-key=\"7kvdf-32-0\"><span data-text=\"true\"> important</span></span><span data-offset-key=\"7kvdf-33-0\"><span data-text=\"true\"> document</span></span><span data-offset-key=\"7kvdf-34-0\"><span data-text=\"true\"> that</span></span><span data-offset-key=\"7kvdf-35-0\"><span data-text=\"true\"> outlines</span></span><span data-offset-key=\"7kvdf-36-0\"><span data-text=\"true\"> your</span></span><span data-offset-key=\"7kvdf-37-0\"><span data-text=\"true\"> business</span></span><span data-offset-key=\"7kvdf-38-0\"><span data-text=\"true\"> objectives</span></span><span data-offset-key=\"7kvdf-39-0\"><span data-text=\"true\">,</span></span><span data-offset-key=\"7kvdf-40-0\"><span data-text=\"true\"> strategies</span></span><span data-offset-key=\"7kvdf-41-0\"><span data-text=\"true\">,</span></span><span data-offset-key=\"7kvdf-42-0\"><span data-text=\"true\"> and</span></span><span data-offset-key=\"7kvdf-43-0\"><span data-text=\"true\"> tactics</span></span><span data-offset-key=\"7kvdf-44-0\"><span data-text=\"true\">.</span></span><span data-offset-key=\"7kvdf-45-0\"><span data-text=\"true\"> It</span></span><span data-offset-key=\"7kvdf-46-0\"><span data-text=\"true\"> should</span></span><span data-offset-key=\"7kvdf-47-0\"><span data-text=\"true\"> also</span></span><span data-offset-key=\"7kvdf-48-0\"><span data-text=\"true\"> include</span></span><span data-offset-key=\"7kvdf-49-0\"><span data-text=\"true\"> a</span></span><span data-offset-key=\"7kvdf-50-0\"><span data-text=\"true\"> financial</span></span><span data-offset-key=\"7kvdf-51-0\"><span data-text=\"true\"> plan</span></span><span data-offset-key=\"7kvdf-52-0\"><span data-text=\"true\"> and</span></span><span data-offset-key=\"7kvdf-53-0\"><span data-text=\"true\"> a</span></span><span data-offset-key=\"7kvdf-54-0\"><span data-text=\"true\"> marketing</span></span><span data-offset-key=\"7kvdf-55-0\"><span data-text=\"true\"> plan</span></span><span data-offset-key=\"7kvdf-56-0\"><span data-text=\"true\">.</span></span>&nbsp;</span></li>\r\n<li style=\"font-family: arial, helvetica, sans-serif;\"><span style=\"font-family: arial, helvetica, sans-serif;\"><strong><span data-offset-key=\"7kvdf-61-0\"><span data-text=\"true\"> Raise</span></span><span data-offset-key=\"7kvdf-62-0\"><span data-text=\"true\"> capital</span></span><span data-offset-key=\"7kvdf-63-0\"><span data-text=\"true\">:</span></span></strong><span data-offset-key=\"7kvdf-64-0\"><span data-text=\"true\"><strong> </strong>Once</span></span><span data-offset-key=\"7kvdf-65-0\"><span data-text=\"true\"> you</span></span><span data-offset-key=\"7kvdf-66-0\"><span data-text=\"true\"> have</span></span><span data-offset-key=\"7kvdf-67-0\"><span data-text=\"true\"> a</span></span><span data-offset-key=\"7kvdf-68-0\"><span data-text=\"true\"> business</span></span><span data-offset-key=\"7kvdf-69-0\"><span data-text=\"true\"> plan</span></span><span data-offset-key=\"7kvdf-70-0\"><span data-text=\"true\">,</span></span><span data-offset-key=\"7kvdf-71-0\"><span data-text=\"true\"> you</span></span><span data-offset-key=\"7kvdf-72-0\"><span data-text=\"true\"> need</span></span><span data-offset-key=\"7kvdf-73-0\"><span data-text=\"true\"> to</span></span><span data-offset-key=\"7kvdf-74-0\"><span data-text=\"true\"> raise</span></span><span data-offset-key=\"7kvdf-75-0\"><span data-text=\"true\"> capital</span></span><span data-offset-key=\"7kvdf-76-0\"><span data-text=\"true\">.</span></span><span data-offset-key=\"7kvdf-77-0\"><span data-text=\"true\"> This</span></span><span data-offset-key=\"7kvdf-78-0\"><span data-text=\"true\"> can</span></span><span data-offset-key=\"7kvdf-79-0\"><span data-text=\"true\"> be</span></span><span data-offset-key=\"7kvdf-80-0\"><span data-text=\"true\"> done</span></span><span data-offset-key=\"7kvdf-81-0\"><span data-text=\"true\"> through</span></span><span data-offset-key=\"7kvdf-82-0\"><span data-text=\"true\"> traditional</span></span><span data-offset-key=\"7kvdf-83-0\"><span data-text=\"true\"> financing</span></span><span data-offset-key=\"7kvdf-84-0\"><span data-text=\"true\">,</span></span><span data-offset-key=\"7kvdf-85-0\"><span data-text=\"true\"> such</span></span><span data-offset-key=\"7kvdf-86-0\"><span data-text=\"true\"> as</span></span><span data-offset-key=\"7kvdf-87-0\"><span data-text=\"true\"> bank</span></span><span data-offset-key=\"7kvdf-88-0\"><span data-text=\"true\"> loans</span></span><span data-offset-key=\"7kvdf-89-0\"><span data-text=\"true\"> or</span></span><span data-offset-key=\"7kvdf-90-0\"><span data-text=\"true\"> venture</span></span><span data-offset-key=\"7kvdf-91-0\"><span data-text=\"true\"> capital</span></span><span data-offset-key=\"7kvdf-92-0\"><span data-text=\"true\">,</span></span><span data-offset-key=\"7kvdf-93-0\"><span data-text=\"true\"> or</span></span><span data-offset-key=\"7kvdf-94-0\"><span data-text=\"true\"> it</span></span><span data-offset-key=\"7kvdf-95-0\"><span data-text=\"true\"> can</span></span><span data-offset-key=\"7kvdf-96-0\"><span data-text=\"true\"> be</span></span><span data-offset-key=\"7kvdf-97-0\"><span data-text=\"true\"> done</span></span><span data-offset-key=\"7kvdf-98-0\"><span data-text=\"true\"> through</span></span><span data-offset-key=\"7kvdf-99-0\"><span data-text=\"true\"> crowdfunding</span></span><span data-offset-key=\"7kvdf-100-0\"><span data-text=\"true\"> or</span></span><span data-offset-key=\"7kvdf-101-0\"><span data-text=\"true\"> angel</span></span><span data-offset-key=\"7kvdf-102-0\"><span data-text=\"true\"> investors</span></span><span data-offset-key=\"7kvdf-103-0\"><span data-text=\"true\">.</span></span>&nbsp;</span></li>\r\n<li style=\"font-family: arial, helvetica, sans-serif;\"><span style=\"font-family: arial, helvetica, sans-serif;\"><span data-offset-key=\"7kvdf-108-0\"><span data-text=\"true\">&nbsp;<strong>Market</strong></span></span><strong><span data-offset-key=\"7kvdf-109-0\"><span data-text=\"true\"> and</span></span><span data-offset-key=\"7kvdf-110-0\"><span data-text=\"true\"> network</span></span><span data-offset-key=\"7kvdf-111-0\"><span data-text=\"true\">:</span></span></strong><span data-offset-key=\"7kvdf-112-0\"><span data-text=\"true\"> To</span></span><span data-offset-key=\"7kvdf-113-0\"><span data-text=\"true\"> get</span></span><span data-offset-key=\"7kvdf-114-0\"><span data-text=\"true\"> your</span></span><span data-offset-key=\"7kvdf-115-0\"><span data-text=\"true\"> business</span></span><span data-offset-key=\"7kvdf-116-0\"><span data-text=\"true\"> off</span></span><span data-offset-key=\"7kvdf-117-0\"><span data-text=\"true\"> the</span></span><span data-offset-key=\"7kvdf-118-0\"><span data-text=\"true\"> ground</span></span><span data-offset-key=\"7kvdf-119-0\"><span data-text=\"true\">,</span></span><span data-offset-key=\"7kvdf-120-0\"><span data-text=\"true\"> you</span></span><span data-offset-key=\"7kvdf-121-0\"><span data-text=\"true\"> need</span></span><span data-offset-key=\"7kvdf-122-0\"><span data-text=\"true\"> to</span></span><span data-offset-key=\"7kvdf-123-0\"><span data-text=\"true\"> market</span></span><span data-offset-key=\"7kvdf-124-0\"><span data-text=\"true\"> your</span></span><span data-offset-key=\"7kvdf-125-0\"><span data-text=\"true\"> product</span></span><span data-offset-key=\"7kvdf-126-0\"><span data-text=\"true\"> or</span></span><span data-offset-key=\"7kvdf-127-0\"><span data-text=\"true\"> service</span></span><span data-offset-key=\"7kvdf-128-0\"><span data-text=\"true\">.</span></span><span data-offset-key=\"7kvdf-129-0\"><span data-text=\"true\"> This</span></span><span data-offset-key=\"7kvdf-130-0\"><span data-text=\"true\"> can</span></span><span data-offset-key=\"7kvdf-131-0\"><span data-text=\"true\"> be</span></span><span data-offset-key=\"7kvdf-132-0\"><span data-text=\"true\"> done</span></span><span data-offset-key=\"7kvdf-133-0\"><span data-text=\"true\"> through</span></span><span data-offset-key=\"7kvdf-134-0\"><span data-text=\"true\"> traditional</span></span><span data-offset-key=\"7kvdf-135-0\"><span data-text=\"true\"> and</span></span><span data-offset-key=\"7kvdf-136-0\"><span data-text=\"true\"> digital</span></span><span data-offset-key=\"7kvdf-137-0\"><span data-text=\"true\"> marketing</span></span><span data-offset-key=\"7kvdf-138-0\"><span data-text=\"true\"> techniques</span></span><span data-offset-key=\"7kvdf-139-0\"><span data-text=\"true\">,</span></span><span data-offset-key=\"7kvdf-140-0\"><span data-text=\"true\"> such</span></span><span data-offset-key=\"7kvdf-141-0\"><span data-text=\"true\"> as</span></span><span data-offset-key=\"7kvdf-142-0\"><span data-text=\"true\"> social</span></span><span data-offset-key=\"7kvdf-143-0\"><span data-text=\"true\"> media</span></span><span data-offset-key=\"7kvdf-144-0\"><span data-text=\"true\">,</span></span><span data-offset-key=\"7kvdf-145-0\"><span data-text=\"true\"> search</span></span><span data-offset-key=\"7kvdf-146-0\"><span data-text=\"true\"> engine</span></span><span data-offset-key=\"7kvdf-147-0\"><span data-text=\"true\"> optimization</span></span><span data-offset-key=\"7kvdf-148-0\"><span data-text=\"true\">,</span></span><span data-offset-key=\"7kvdf-149-0\"><span data-text=\"true\"> and</span></span><span data-offset-key=\"7kvdf-150-0\"><span data-text=\"true\"> email</span></span><span data-offset-key=\"7kvdf-151-0\"><span data-text=\"true\"> marketing</span></span><span data-offset-key=\"7kvdf-152-0\"><span data-text=\"true\">.</span></span><span data-offset-key=\"7kvdf-153-0\"><span data-text=\"true\"> You</span></span><span data-offset-key=\"7kvdf-154-0\"><span data-text=\"true\"> will</span></span><span data-offset-key=\"7kvdf-155-0\"><span data-text=\"true\"> also</span></span><span data-offset-key=\"7kvdf-156-0\"><span data-text=\"true\"> need</span></span><span data-offset-key=\"7kvdf-157-0\"><span data-text=\"true\"> to</span></span><span data-offset-key=\"7kvdf-158-0\"><span data-text=\"true\"> connect</span></span><span data-offset-key=\"7kvdf-159-0\"><span data-text=\"true\"> with</span></span><span data-offset-key=\"7kvdf-160-0\"><span data-text=\"true\"> potential</span></span><span data-offset-key=\"7kvdf-161-0\"><span data-text=\"true\"> customers</span></span><span data-offset-key=\"7kvdf-162-0\"><span data-text=\"true\"> and</span></span><span data-offset-key=\"7kvdf-163-0\"><span data-text=\"true\"> partners</span></span><span data-offset-key=\"7kvdf-164-0\"><span data-text=\"true\"> to</span></span><span data-offset-key=\"7kvdf-165-0\"><span data-text=\"true\"> build</span></span><span data-offset-key=\"7kvdf-166-0\"><span data-text=\"true\"> relationships</span></span><span data-offset-key=\"7kvdf-167-0\"><span data-text=\"true\">.</span></span>&nbsp;</span></li>\r\n<li style=\"font-family: arial, helvetica, sans-serif;\"><span style=\"font-family: arial, helvetica, sans-serif;\"><span data-offset-key=\"7kvdf-172-0\"><span data-text=\"true\">&nbsp;<strong>Man</strong></span></span><strong><span data-offset-key=\"7kvdf-173-0\"><span data-text=\"true\">age</span></span><span data-offset-key=\"7kvdf-174-0\"><span data-text=\"true\"> and</span></span><span data-offset-key=\"7kvdf-175-0\"><span data-text=\"true\"> develop</span></span><span data-offset-key=\"7kvdf-176-0\"><span data-text=\"true\">:</span></span></strong><span data-offset-key=\"7kvdf-177-0\"><span data-text=\"true\"> Once</span></span><span data-offset-key=\"7kvdf-178-0\"><span data-text=\"true\"> your</span></span><span data-offset-key=\"7kvdf-179-0\"><span data-text=\"true\"> business</span></span><span data-offset-key=\"7kvdf-180-0\"><span data-text=\"true\"> is</span></span><span data-offset-key=\"7kvdf-181-0\"><span data-text=\"true\"> up</span></span><span data-offset-key=\"7kvdf-182-0\"><span data-text=\"true\"> and</span></span><span data-offset-key=\"7kvdf-183-0\"><span data-text=\"true\"> running</span></span><span data-offset-key=\"7kvdf-184-0\"><span data-text=\"true\">,</span></span><span data-offset-key=\"7kvdf-185-0\"><span data-text=\"true\"> you</span></span><span data-offset-key=\"7kvdf-186-0\"><span data-text=\"true\"> need</span></span><span data-offset-key=\"7kvdf-187-0\"><span data-text=\"true\"> to</span></span><span data-offset-key=\"7kvdf-188-0\"><span data-text=\"true\"> manage</span></span><span data-offset-key=\"7kvdf-189-0\"><span data-text=\"true\"> it</span></span><span data-offset-key=\"7kvdf-190-0\"><span data-text=\"true\">.</span></span><span data-offset-key=\"7kvdf-191-0\"><span data-text=\"true\"> This</span></span><span data-offset-key=\"7kvdf-192-0\"><span data-text=\"true\"> includes</span></span><span data-offset-key=\"7kvdf-193-0\"><span data-text=\"true\"> making</span></span><span data-offset-key=\"7kvdf-194-0\"><span data-text=\"true\"> decisions</span></span><span data-offset-key=\"7kvdf-195-0\"><span data-text=\"true\"> about</span></span><span data-offset-key=\"7kvdf-196-0\"><span data-text=\"true\"> staff</span></span><span data-offset-key=\"7kvdf-197-0\"><span data-text=\"true\">,</span></span><span data-offset-key=\"7kvdf-198-0\"><span data-text=\"true\"> inventory</span></span><span data-offset-key=\"7kvdf-199-0\"><span data-text=\"true\">,</span></span><span data-offset-key=\"7kvdf-200-0\"><span data-text=\"true\"> and</span></span><span data-offset-key=\"7kvdf-201-0\"><span data-text=\"true\"> finances</span></span><span data-offset-key=\"7kvdf-202-0\"><span data-text=\"true\">.</span></span><span data-offset-key=\"7kvdf-203-0\"><span data-text=\"true\"> You</span></span><span data-offset-key=\"7kvdf-204-0\"><span data-text=\"true\"> will</span></span><span data-offset-key=\"7kvdf-205-0\"><span data-text=\"true\"> also</span></span><span data-offset-key=\"7kvdf-206-0\"><span data-text=\"true\"> need</span></span><span data-offset-key=\"7kvdf-207-0\"><span data-text=\"true\"> to</span></span><span data-offset-key=\"7kvdf-208-0\"><span data-text=\"true\"> develop</span></span><span data-offset-key=\"7kvdf-209-0\"><span data-text=\"true\"> your</span></span><span data-offset-key=\"7kvdf-210-0\"><span data-text=\"true\"> product</span></span><span data-offset-key=\"7kvdf-211-0\"><span data-text=\"true\"> or</span></span><span data-offset-key=\"7kvdf-212-0\"><span data-text=\"true\"> service</span></span><span data-offset-key=\"7kvdf-213-0\"><span data-text=\"true\"> to</span></span><span data-offset-key=\"7kvdf-214-0\"><span data-text=\"true\"> meet</span></span><span data-offset-key=\"7kvdf-215-0\"><span data-text=\"true\"> customer</span></span><span data-offset-key=\"7kvdf-216-0\"><span data-text=\"true\"> needs</span></span><span data-offset-key=\"7kvdf-217-0\"><span data-text=\"true\">.</span></span>&nbsp;</span></li>\r\n<li style=\"font-family: arial, helvetica, sans-serif;\"><span style=\"font-family: arial, helvetica, sans-serif;\"><span data-offset-key=\"7kvdf-222-0\"><span data-text=\"true\">&nbsp;<strong>Ass</strong></span></span><strong><span data-offset-key=\"7kvdf-223-0\"><span data-text=\"true\">ess</span></span><span data-offset-key=\"7kvdf-224-0\"><span data-text=\"true\"> and</span></span><span data-offset-key=\"7kvdf-225-0\"><span data-text=\"true\"> adjust</span></span><span data-offset-key=\"7kvdf-226-0\"><span data-text=\"true\">:</span></span></strong><span data-offset-key=\"7kvdf-227-0\"><span data-text=\"true\"> Finally</span></span><span data-offset-key=\"7kvdf-228-0\"><span data-text=\"true\">,</span></span><span data-offset-key=\"7kvdf-229-0\"><span data-text=\"true\"> you</span></span><span data-offset-key=\"7kvdf-230-0\"><span data-text=\"true\"> need</span></span><span data-offset-key=\"7kvdf-231-0\"><span data-text=\"true\"> to</span></span><span data-offset-key=\"7kvdf-232-0\"><span data-text=\"true\"> regularly</span></span><span data-offset-key=\"7kvdf-233-0\"><span data-text=\"true\"> assess</span></span><span data-offset-key=\"7kvdf-234-0\"><span data-text=\"true\"> and</span></span><span data-offset-key=\"7kvdf-235-0\"><span data-text=\"true\"> adjust</span></span><span data-offset-key=\"7kvdf-236-0\"><span data-text=\"true\"> your</span></span><span data-offset-key=\"7kvdf-237-0\"><span data-text=\"true\"> business</span></span><span data-offset-key=\"7kvdf-238-0\"><span data-text=\"true\"> plan</span></span><span data-offset-key=\"7kvdf-239-0\"><span data-text=\"true\"> and</span></span><span data-offset-key=\"7kvdf-240-0\"><span data-text=\"true\"> strategy</span></span><span data-offset-key=\"7kvdf-241-0\"><span data-text=\"true\">.</span></span><span data-offset-key=\"7kvdf-242-0\"><span data-text=\"true\"> This</span></span><span data-offset-key=\"7kvdf-243-0\"><span data-text=\"true\"> will</span></span><span data-offset-key=\"7kvdf-244-0\"><span data-text=\"true\"> help</span></span><span data-offset-key=\"7kvdf-245-0\"><span data-text=\"true\"> you</span></span><span data-offset-key=\"7kvdf-246-0\"><span data-text=\"true\"> stay</span></span><span data-offset-key=\"7kvdf-247-0\"><span data-text=\"true\"> on</span></span><span data-offset-key=\"7kvdf-248-0\"><span data-text=\"true\"> top</span></span><span data-offset-key=\"7kvdf-249-0\"><span data-text=\"true\"> of</span></span><span data-offset-key=\"7kvdf-250-0\"><span data-text=\"true\"> trends</span></span><span data-offset-key=\"7kvdf-251-0\"><span data-text=\"true\">,</span></span><span data-offset-key=\"7kvdf-252-0\"><span data-text=\"true\"> anticipate</span></span><span data-offset-key=\"7kvdf-253-0\"><span data-text=\"true\"> customer</span></span><span data-offset-key=\"7kvdf-254-0\"><span data-text=\"true\"> needs</span></span><span data-offset-key=\"7kvdf-255-0\"><span data-text=\"true\">,</span></span><span data-offset-key=\"7kvdf-256-0\"><span data-text=\"true\"> and</span></span><span data-offset-key=\"7kvdf-257-0\"><span data-text=\"true\"> stay</span></span><span data-offset-key=\"7kvdf-258-0\"><span data-text=\"true\"> ahead</span></span><span data-offset-key=\"7kvdf-259-0\"><span data-text=\"true\"> of</span></span><span data-offset-key=\"7kvdf-260-0\"><span data-text=\"true\"> the</span></span><span data-offset-key=\"7kvdf-261-0\"><span data-text=\"true\"> competition</span></span><span data-offset-key=\"7kvdf-262-0\"><span data-text=\"true\">.</span></span></span></li>\r\n</ol>', '2022-12-18 15:40:49', 7),
(35, 'How to get into Faang Company?', '<ol>\r\n<li style=\"font-family: \'courier new\', courier, monospace;\"><span style=\"font-family: \'courier new\', courier, monospace;\">Focus on developing the skills and abilities needed for the specific company. It is important to research the company and understand the type of job you are applying for and the skills needed to be successful in the role. </span></li>\r\n<li style=\"font-family: \'courier new\', courier, monospace;\"><span style=\"font-family: \'courier new\', courier, monospace;\"> Network with people who work a the company. Connecting with people who already work at the company you are applying to can be a great way to get your footF in the door and learn more about the company culture and job opportunities.&nbsp;</span></li>\r\n<li style=\"font-family: \'courier new\', courier, monospace;\"><span style=\"font-family: \'courier new\', courier, monospace;\">&nbsp;Work on your resume and cover letter. Make sure your resume and cover letter stand out from the competition by highlighting your strengths and accomplishments.&nbsp;</span></li>\r\n<li style=\"font-family: \'courier new\', courier, monospace;\"><span style=\"font-family: \'courier new\', courier, monospace;\">&nbsp;Prepare for the interview. Make sure you do your research on the company and the position you are applying for. Also, practice common interview questions and practice your responses.&nbsp;</span></li>\r\n<li style=\"font-family: \'courier new\', courier, monospace;\"><span style=\"font-family: \'courier new\', courier, monospace;\">&nbsp;Follow up. After the interview, make sure you follow up with the hiring manager and thank them for their time. This can help to show your interest and commitment to the company and position.</span></li>\r\n</ol>', '2022-12-18 15:43:33', 1),
(36, 'What is a Framework?', '<p>A framework is a set of&nbsp;<a href=\"https://www.geeksforgeeks.org/classes-objects-java/\">classes</a>&nbsp;and&nbsp;<a href=\"https://www.geeksforgeeks.org/interfaces-in-java/\">interfaces</a>&nbsp;which provide a ready-made architecture. In order to implement a new feature or a class, there is no need to define a framework. However, an optimal object-oriented design always includes a framework with a collection of classes such that all the classes perform the same kind of task.&nbsp;</p>', '2022-12-18 15:49:41', 7),
(38, 'Java programming language is named JAVA. Why?', '<p>&nbsp;</p>\r\n<p>After the name OAK, the team decided to give a new name to it and the suggested words were Silk, Jolt, revolutionary, DNA, dynamic, etc. These all names were easy to spell and fun to say, but they all wanted the name to reflect the essence of technology. In accordance with James Gosling,&nbsp;<strong>Java</strong>&nbsp;the among the top names along with&nbsp;<strong>Silk</strong>, and since java was a unique name so most of them preferred it.</p>\r\n<p>Java is the name of an&nbsp;<strong>island</strong>&nbsp;in Indonesia where the first coffee(named java coffee) was produced. And this name was chosen by James Gosling while having coffee near his office. Note that Java is just a name, not an acronym.</p>', '2022-12-18 15:51:57', 15),
(39, 'What is an Algorithm?', '<p>The word&nbsp;<a href=\"https://www.geeksforgeeks.org/fundamentals-of-algorithms/\"><strong>Algorithm</strong></a>&nbsp;means &rdquo;&nbsp;<em>A &nbsp;set of rules to be followed in calculations or other problem-solving operations&nbsp;</em>&rdquo; Or &rdquo;&nbsp;<em>A procedure for solving a mathematical problem in a finite number of steps that frequently by recursive operations&nbsp;</em>&ldquo;.&nbsp;</p>\r\n<p>Therefore Algorithm refers to a sequence of finite steps to solve a particular problem.</p>\r\n<div id=\"_GFG_ABP_Incontent_728x90\"></div>\r\n<p><strong>Algorithms can be simple and complex depending on what you want to achieve.</strong></p>', '2022-12-18 15:53:56', 17),
(42, 'This Is Page Title', '<p>This is demo content</p>', '2022-12-18 15:59:03', 7),
(43, 'This is title', '<p>Start writing your post....</p>', '2022-12-18 15:59:46', 1),
(44, 'Just do blogging..........................', '<p>Start writing your post....</p>', '2022-12-18 16:01:32', 7),
(45, 'demoooooo title', '<p>Start writing your post....</p>', '2022-12-18 16:02:59', 7),
(46, 'You can do it......', '<p>Start writing your post.... okkkkkkk................................................................kkkkkkkkkkkk</p>', '2022-12-18 16:03:48', 7),
(47, 'Let\'s do ittttttttttttttttttt', '<p>Start writing your post.... hhha hha post content</p>', '2022-12-18 16:04:23', 7);

-- --------------------------------------------------------

--
-- Table structure for table `submenu`
--

CREATE TABLE `submenu` (
  `id` int(11) NOT NULL,
  `parent_menu_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `action` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `submenu`
--

INSERT INTO `submenu` (`id`, `parent_menu_id`, `name`, `action`) VALUES
(5, 8, 'newsubmenu', '#'),
(6, 8, 'newsubmenu2', '#');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `submenu`
--
ALTER TABLE `submenu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `submenu`
--
ALTER TABLE `submenu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
