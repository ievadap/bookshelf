-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 12, 2017 at 08:30 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `archive`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookcase`
--

CREATE TABLE `bookcase` (
  `id` int(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `published` int(11) NOT NULL,
  `genre` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookcase`
--

INSERT INTO `bookcase` (`id`, `title`, `author`, `published`, `genre`) VALUES
(96, 'Beginning Python Visualization: Crafting Visual Transformation Scripts (Books for Professionals by Professionals)', 'Shai Vaingast', 2009, 'Non-fiction'),
(95, 'Electricity and Magnetism (Berkeley Physics Course Vol. 2)', 'Edward M. Purcell', 1984, 'Non-fiction'),
(94, 'Electromagnetic Fields', 'Roald K. Wangsness', 1979, 'Non-fiction'),
(93, 'Linear Algebra and Its Applications', 'Gilbert Strang', 1988, 'Non-fiction'),
(92, 'A Game of Thrones', 'G. R. R. Martin', 1996, 'Epic-fantasy'),
(91, 'Analysis of Time Series Structure: SSA and Related Techniques', 'Nina Golyandina', 2001, 'Non-fiction'),
(90, 'Atom-Photon Interactions: Basic Processes and Applications', 'Claude Cohen-Tannoudji', 1992, 'Non-fiction'),
(89, 'A Random Walk Down Wall Street: The Time-Tested Strategy for Successful Investing (Completely Revised & Updated)', 'Burton G. Malkiel', 2007, 'Non-fiction'),
(87, 'Analytical Mechanics (Saunders Golden Sunburst Series)', 'Fowles', 1993, 'Scientific literature'),
(88, 'Statistics for Engineering and the Sciences (4th Edition)', 'William Mendenhall', 1995, 'Scientific literature'),
(86, 'Introduction To Superconductivity', 'Michael Tinkham', 1995, 'Scientific literature'),
(85, 'Molecular Spectra and Molecular Structure. Volume I: Spectra of Diatomic Molecules. Second Edition', 'Gerhard Herzberg', 1950, 'Scientific literature'),
(84, 'Engineering Mechanics: Statics : Si English Version', 'J. L. Meriam', 1992, 'Scientific literature'),
(83, 'Electrodynamics of Continuous Media Second Edition: Volume 8 (Course of Theoretical Physics)', 'L D Landau', 1984, 'Scientific literature'),
(82, 'Statistical Physics 2nd Edition', 'Franz Mandl', 1988, 'Scientific literature'),
(81, 'Statistical Physics Third Edition Part 1: Volume 5 (Course of Theoretical Physics Volume 5)', 'L D Landau', 1980, 'Scientific literature'),
(80, 'Photon-Atom Interactions', 'Mitchel Weissbluth', 1989, 'Scientific literature'),
(79, 'Mechanics of Materials (Pws-Kent Series in Engineering)', 'James M. Gere', 1990, 'Scientific literature'),
(78, 'Games and Information: An Introduction to Game Theory Third Edition', 'Eric Rasmusen', 2001, 'Scientific literature'),
(77, 'Physics 4th Edition Vol.1', 'Robert Resnick', 1991, 'Scientific literature'),
(76, 'Volume 2 Physics 4th Edition', 'David Halliday', 1992, 'Scientific literature'),
(75, 'Modern Physics from a to Z', 'James William Rohlf', 1994, 'Scientific literature'),
(74, 'Fundamentals of Statistical and Thermal Physics (McGraw-Hill Series in Fundamentals of Physics)', 'Frederick Reif', 1965, 'Scientific literature'),
(72, 'Principles of Modern Physics', 'Robert B. Leighton', 1959, 'Scientific literature'),
(73, 'Calculus', 'Dennis D. Berkey', 1988, 'Scientific literature'),
(71, 'Classical Electrodynamics Third Edition', 'John David Jackson', 1998, 'Scientific literature'),
(70, 'Numerical Recipes in C: The Art of Scientific Computing', 'William H. Press', 1992, 'Scientific literature'),
(69, 'Optimal Signal Processing', 'Sophocles J. Orfanidis', 1985, 'Scientific literature'),
(68, 'Quantum Mechanics 2nd Edition', 'Eugene Merzbacher', 1969, 'Scientific literature'),
(66, 'Introductory Quantum Mechanics', 'Richard L. Liboff', 1991, 'Scientific literatureScientific literature'),
(67, 'Lasers (Wiley Series in Pure and Applied Optics)', 'Peter W. Milonni', 1988, 'Scientific literature'),
(65, 'Physical Chemistry', 'Peter Atkins', 1985, 'Scientific literature'),
(64, 'Radar Handbook Third Edition', 'Merrill Skolnik', 2008, 'Scientific literature'),
(63, 'The Evolution of Useful Things: How Everyday Artifacts-From Forks and Pins to Paper Clips and Zippers-Came to be as They are', 'Henry Petroski', 1994, 'Scientific literature'),
(62, 'Data Reduction and Error Analysis for The Physical Sciences', 'Philip R. Bevington', 1992, 'Scientific literature'),
(61, 'Factorization Methods for Discrete Sequential Estimation', 'Gerald J. Bierman', 2006, 'Scientific literature'),
(60, 'Calculus Analytical Geometry', 'Edwards', 1985, 'Scientific literature'),
(59, 'Optics 2nd Edition', 'Eugene Hecht', 1987, 'Scientific literature'),
(58, 'The Funkmasters-the Great James Brown Rhythm Sections (Manhattan Music Publications)', 'Allan Slutsky', 1997, 'Scientific literature'),
(57, 'The Feynman Lectures on Physics: Commemorative Issue Three Volume Set', 'Richard P. Feynman', 1989, 'Scientific literature'),
(56, 'The Great International Paper Airplane Book', 'Jerry Mander', 1998, 'Scientific literature'),
(97, 'Quantum mechanics. Volume I', 'Claude Cohen-Tannoudji', 1977, 'Non-fiction'),
(98, 'Quantum Mechanics Vol. 2', 'Claude Cohen-Tannoudji', 1978, 'Non-fiction'),
(99, 'Quantum Mechanics Non-Relativistic Theory Third Edition: Volume 3 (Course of Theoretical Physics Vol 3) (Vol. 3)', 'L D Landau', 1981, 'Non-fiction'),
(100, 'Detection of Signals in Noise Second Edition', 'Robert N. McDonough', 1995, 'Non-fiction'),
(101, 'Harry Potter and the Philsopher\'s Stone', 'J. K. Rowling', 1997, 'Fantasy'),
(102, 'Animal Farm', 'George Orwell', 1945, 'Political satire'),
(103, 'The Little Prince', 'Antoine de Saint-Exupery', 1943, 'Fantasy'),
(104, 'The Hobbit', 'J. R. R. Tolkien', 1937, 'Fantasy'),
(105, 'The Picture of Dorian Gray', 'Oscar Wilde', 1890, 'Philosophical fiction');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookcase`
--
ALTER TABLE `bookcase`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookcase`
--
ALTER TABLE `bookcase`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
