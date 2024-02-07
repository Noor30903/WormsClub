-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2022 at 05:27 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wormsclub1`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `Email` varchar(50) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `phonenumber` int(10) NOT NULL,
  `sec_question` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`Email`, `firstname`, `lastname`, `password`, `phonenumber`, `sec_question`) VALUES
('A@gmail.com', 'Ahmed', 'Jamal', 'c129b324aee662b04eccf68babba85851346dff9', 555555552, '4c9a82ce72ca2519f38d0af0abbb4cecb9fceca9'),
('F@gmail.com', 'Fahad', 'Ghamdi', '04f081741466827161bede82a374af0ec9a39e31', 555555556, 'fb96549631c835eb239cd614cc6b5cb7d295121a'),
('H@gmail.com', 'Haya', 'Hani', 'a2540a803401bcb9ee8315c7769d74de1da5f55e', 555555559, '7110eda4d09e062aa5e4a390b0a572ac0d2c0220'),
('K@gmail.com', 'Khalid', 'Amjd', '933f868ccf7ece7601793d3887f5522fbb341418', 555555558, '5ff03b7273b1808e5ba852e230991bbf07da703c'),
('L@gmail.com', 'Leen', 'hatem', 'f638e2789006da9bb337fd5689e37a265a70f359', 555555554, '0feca720e2c29dafb2c900713ba560e03b758711'),
('M@gmail.com', 'Mashael', 'Mohamed', '7c222fb2927d828af22f592134e8932480637c0d', 555555551, '78988010b890ce6f4d2136481f392787ec6d6106'),
('Ma@gmail.com', 'Maha', 'saeed', '14993032bd035408dd9ab6f6e6ad0b023eced296', 555555555, '011c945f30ce2cbafc452f39840f025693339c42'),
('N@gmail.com', 'Nouf', 'Ahmed', 'a642a77abd7d4f51bf9226ceaf891fcbb5b299b8', 555555553, 'ed70c57d7564e994e7d5f6fd6967cea8b347efbc'),
('R@gmail.com', 'Reem', 'bader', '19dd466e43cdbd3833abc0609eba6d8786f9b342', 555555557, 'bc74f4f071a5a33f00ab88a6d6385b5e6638b86c'),
('Ra@gmail.com', 'Rana', ' Rami', '05b530ad0fb56286fe051d5f8be5b8453f1cd93f', 555555510, '80c0ff172a69c5068916cffbdad2d0b67ed77c97'),
('you22@gmail.com', 'maha', 'df', '8aefb06c426e07a0a671a1e2488b4858d694a730', 2147483647, '388ad1c312a488ee9e12998fe097f2258fa8d5ee'),
('you@gmail.com', 'noor', 'po', 'c129b324aee662b04eccf68babba85851346dff9', 436278782, 'ed70c57d7564e994e7d5f6fd6967cea8b347efbc');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `bname` varchar(50) NOT NULL,
  `pictureurl` varchar(100) NOT NULL,
  `burl` varchar(100) NOT NULL,
  `bookdesc` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`bname`, `pictureurl`, `burl`, `bookdesc`) VALUES
('101 Essays That Will Change The Way You Think', 'photos/101essays.jpeg', 'books/101 Essays That Will Change The Way You Think - Brianna Wiest.pdf', 'Includes essays on why you should pursue purpose rather than passion.'),
('ALittleLife', 'photos/ALittleLife.jpg', 'books/15-05-2021-065730A-Little-Life.pdf', 'follows four classmates from a small US college who move to New York to pursue their careers. It deals with complex themes.'),
('cinder', 'photos/cinder.jpg', 'books/cinder.pdf', "Cinder, a gifted mechanic, is a cyborg. She\'s a second-class citizen with a mysterious past, reviled by her stepmother and blamed for her stepsister\'s illness."),
('notes on a nervous planet', 'photos/notes on a nervous planet.jpg', 'books/Notes-on-a-Nervous-Planet-PDF-Book-By-Matt-Haig.pdf', 'a look at how modern life feeds our anxiety, and how to live a better life. '),
('one of us is lying', 'photos/oneofusislying.jpeg', 'books/one_of_us_is_lying_-_karen_m_mcmanus.pdf', 'The book takes you through the lenses of four different teenagers and the secrets they want to hide in the light of the murder case.'),
('rich dad poor dad', 'photos/rich dad poor dad.jpg', 'books/Rich-Dad-Poor-Dad-eBook.pdf', 'It advocates the importance of financial literacy, financial independence and building wealth through investing'),
('the 5 am club', 'photos/the 5 am club.jpg', 'books/The 5 AM Club - Robin Sharma.pdf', 'discover the early-rising habit that has helped so many accomplish epic results while upgrading their happiness and feelings of aliveness.'),
('the midnight library', 'photos/the midnight library.jpg', 'books/The Midnight Library.pdf', 'Between life and death there is a library, and within that library, the shelves go on forever.'),
('The Silent patient', 'photos/The Silent patient.jpg', 'books/the-silent-patient-book.pdf', "The Silent Patient is a shocking psychological thriller of a woman\'s act of violence against her husband."),
('the women in the window', 'photos/the women in the window.jpg', 'books/the-woman-in-the-window.pdf', 'A shut-in spends her days spying on her neighbors. One day she witnesses something terrifying ... Or does she?');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `Useremail` varchar(50) NOT NULL,
  `message` varchar(200) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`Useremail`, `message`, `date`) VALUES
('M@gmail.com', 'hii everyone!!', '2022-12-17 17:00:41'),
('M@gmail.com', 'how is everything?', '2022-12-17 17:01:55'),
('Ra@gmail.com', 'hiiii!!', '2022-12-17 17:02:57'),
('Ra@gmail.com', 'goood!', '2022-12-17 17:03:08'),
('Ra@gmail.com', 'did anyone start reading one of us is lying?', '2022-12-17 17:03:29'),
('H@gmail.com', 'hiii, I did!!!', '2022-12-17 17:04:13'),
('H@gmail.com', 'its goodd so far.', '2022-12-17 17:04:45'),
('M@gmail.com', 'i am reading cinder currently', '2022-12-17 17:05:48'),
('M@gmail.com', 'but i heard a lot of good reviews on one of us is lying, will read it soon', '2022-12-17 17:06:07'),
('Ra@gmail.com', 'perfect', '2022-12-17 17:07:42'),
('Ra@gmail.com', 'tell me when you finish cinder!', '2022-12-17 17:07:52'),
('M@gmail.com', 'hello all', '2022-12-17 18:42:02');

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `Uemail` varchar(50) NOT NULL,
  `bookname` varchar(50) NOT NULL,
  `rate` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ratings`
--

INSERT INTO `ratings` (`Uemail`, `bookname`, `rate`) VALUES
('M@gmail.com', '101 Essays That Will Change The Way You Think', 5),
('M@gmail.com', 'rich dad poor dad', 2),
('M@gmail.com', 'the midnight library', 4),
('Ra@gmail.com', 'ALittleLife', 3),
('Ra@gmail.com', 'The Silent patient', 5),
('Ra@gmail.com', 'one of us is lying', 4),
('F@gmail.com', 'rich dad poor dad', 5),
('F@gmail.com', 'notes on a nervous planet', 3),
('F@gmail.com', '101 Essays That Will Change The Way You Think', 3),
('F@gmail.com', 'ALittleLife', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`Email`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`bname`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD KEY `Useremail` (`Useremail`);

--
-- Indexes for table `ratings`
--
ALTER TABLE `ratings`
  ADD KEY `Uemail` (`Uemail`),
  ADD KEY `bookname` (`bookname`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `Useremail` FOREIGN KEY (`Useremail`) REFERENCES `accounts` (`Email`);

--
-- Constraints for table `ratings`
--
ALTER TABLE `ratings`
  ADD CONSTRAINT `Uemail` FOREIGN KEY (`Uemail`) REFERENCES `accounts` (`Email`),
  ADD CONSTRAINT `bookname` FOREIGN KEY (`bookname`) REFERENCES `books` (`bname`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
