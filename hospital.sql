-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2024 at 04:50 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `id_number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `name`, `date`, `department`, `city`, `surname`, `id_number`) VALUES
(1, 'John', '2024-05-23', 'Ear, Nose and Throat Diseases', 'New York', 'Doe', 1234567890),
(2, 'Jane', '2024-05-24', 'Neurology', 'Los Angeles', 'Smith', 2147483647),
(3, 'Alice', '2024-05-25', 'Pediatrics', 'Chicago', 'Johnson', 2147483647),
(4, 'Bob', '2024-05-26', 'Oncology', 'Houston', 'Williams', 2147483647),
(5, 'Carol', '2024-05-27', 'Dermatology', 'Phoenix', 'Brown', 2147483647),
(6, 'Elagöz', '2024-05-23', 'Eye Diesases', 'Antalya', 'Eren', 213123123),
(7, 'Eve', '2024-05-29', 'Gynecology', 'San Antonio', 'Garcia', 2147483647),
(8, 'Frank', '2024-05-30', 'Urology', 'San Diego', 'Miller', 2147483647),
(9, 'Grace', '2024-05-31', 'Ophthalmology', 'Dallas', 'Martinez', 2147483647),
(10, 'Hank', '2024-06-01', 'Psychiatry', 'San Jose', 'Davis', 123456789),
(11, 'Ivy', '2024-06-02', 'Pathology', 'Austin', 'Lopez', 1234567891),
(12, 'Jack', '2024-06-03', 'Radiology', 'Fort Worth', 'Gonzalez', 2147483647),
(13, 'Kathy', '2024-06-04', 'Anesthesiology', 'Jacksonville', 'Wilson', 2147483647),
(14, 'Leo', '2024-06-05', 'Hematology', 'Columbus', 'Anderson', 2147483647),
(15, 'Mia', '2024-06-06', 'Nephrology', 'Charlotte', 'Thomas', 2147483647),
(16, 'Nina', '2024-06-07', 'Rheumatology', 'San Francisco', 'Taylor', 2147483647),
(17, 'Oscar', '2024-06-08', 'Gastroenterology', 'Indianapolis', 'Moore', 2147483647),
(18, 'Pam', '2024-06-09', 'Endocrinology', 'Seattle', 'Jackson', 2147483647),
(19, 'Quinn', '2024-06-10', 'Pulmonology', 'Denver', 'Martin', 2147483647),
(20, 'Ray', '2024-06-11', 'Allergy', 'Washington', 'Lee', 123456790),
(21, 'Sam', '2024-06-12', 'Immunology', 'Boston', 'Perez', 1234567892),
(22, 'Tina', '2024-06-13', 'Geriatrics', 'El Paso', 'White', 2147483647),
(23, 'Uma', '2024-06-14', 'Infectious Disease', 'Detroit', 'Harris', 2147483647),
(24, 'Vince', '2024-06-15', 'Genetics', 'Nashville', 'Sanchez', 2147483647),
(25, 'Wendy', '2024-06-16', 'Neurosurgery', 'Memphis', 'Clark', 2147483647),
(26, 'Xander', '2024-06-17', 'Plastic Surgery', 'Louisville', 'Ramirez', 2147483647),
(27, 'Yara', '2024-06-18', 'Obstetrics', 'Baltimore', 'Lewis', 2147483647),
(28, 'Zane', '2024-06-19', 'Otolaryngology', 'Milwaukee', 'Walker', 2147483647),
(29, 'Anna', '2024-06-20', 'Pathology', 'Albuquerque', 'Young', 2147483647),
(30, 'Ben', '2024-06-21', 'Pediatrics', 'Tucson', 'Hall', 123456791),
(31, 'Clara', '2024-06-22', 'Psychiatry', 'Fresno', 'Allen', 1234567893),
(32, 'Dylan', '2024-06-23', 'Radiology', 'Sacramento', 'King', 2147483647),
(33, 'Elena', '2024-06-24', 'Surgery', 'Mesa', 'Wright', 2147483647),
(34, 'Finn', '2024-06-25', 'Urology', 'Atlanta', 'Hill', 2147483647),
(35, 'Gina', '2024-06-26', 'Vascular Surgery', 'Kansas City', 'Scott', 2147483647),
(36, 'Harry', '2024-06-27', 'Orthopedics', 'Colorado Springs', 'Green', 2147483647),
(37, 'Iris', '2024-06-28', 'Ophthalmology', 'Omaha', 'Adams', 2147483647),
(38, 'Jake', '2024-06-29', 'Gastroenterology', 'Raleigh', 'Baker', 2147483647),
(39, 'Kim', '2024-06-30', 'Nephrology', 'Miami', 'Gonzalez', 2147483647),
(40, 'Liam', '2024-07-01', 'Oncology', 'Virginia Beach', 'Nelson', 123456792),
(41, 'Maya', '2024-07-02', 'Cardiology', 'Oakland', 'Carter', 1234567894),
(42, 'Noah', '2024-07-03', 'Neurology', 'Minneapolis', 'Mitchell', 2147483647),
(43, 'Olivia', '2024-07-04', 'Endocrinology', 'Tulsa', 'Perez', 2147483647),
(44, 'Paul', '2024-07-05', 'Dermatology', 'Arlington', 'Roberts', 2147483647),
(45, 'Quincy', '2024-07-06', 'Gynecology', 'New Orleans', 'Turner', 2147483647),
(46, 'Rita', '2024-07-07', 'Hematology', 'Wichita', 'Phillips', 2147483647),
(47, 'Steve', '2024-07-08', 'Immunology', 'Cleveland', 'Campbell', 2147483647),
(48, 'Tara', '2024-07-09', 'Infectious Disease', 'Tampa', 'Parker', 2147483647),
(49, 'Uma', '2024-07-10', 'Neurosurgery', 'Aurora', 'Evans', 2147483647),
(50, 'Victor', '2024-07-11', 'Orthopedics', 'Anaheim', 'Edwards', 123456793),
(60, 'David', '2024-05-28', 'Orthopedics', 'Philadelphia', 'Jones', 2147483647),
(61, 'ilk randevu', '2024-05-30', 'Oral and Dental Diseases', 'Tekirdag', 'falanke', 132132);

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `name`) VALUES
(5, 'Dermatology'),
(6, 'Oncology'),
(7, 'Ophthalmology'),
(8, 'Psychiatry'),
(9, 'Endocrinology'),
(10, 'Gastroenterology'),
(11, 'Hematology'),
(12, 'Nephrology'),
(13, 'Pulmonology'),
(14, 'Rheumatology'),
(15, 'Urology'),
(16, 'Allergy and Immunology'),
(17, 'Anesthesiology'),
(18, 'Emergency Medicine'),
(19, 'Family Medicine'),
(20, 'Internal Medicine'),
(21, 'Obstetrics and Gynecology'),
(22, 'Otolaryngology'),
(23, 'Pathology'),
(24, 'Physical Medicine and Rehabilitation'),
(25, 'Plastic Surgery'),
(26, 'Radiology'),
(27, 'Surgery'),
(28, 'Vascular Surgery'),
(29, 'Thoracic Surgery'),
(30, 'Transplant Surgery'),
(31, 'Trauma Surgery'),
(32, 'Burn Surgery'),
(33, 'Bariatric Surgery'),
(34, 'Breast Surgery'),
(35, 'Colorectal Surgery'),
(36, 'Critical Care Surgery'),
(37, 'Endocrine Surgery'),
(38, 'Hand Surgery'),
(39, 'Hepatobiliary Surgery'),
(40, 'Laparoscopic Surgery'),
(41, 'Maxillofacial Surgery'),
(42, 'Minimally Invasive Surgery'),
(43, 'Oral Surgery'),
(44, 'Pediatric Surgery'),
(45, 'Reproductive Surgery'),
(46, 'Spine Surgery'),
(47, 'Surgical Oncology'),
(48, 'Trauma and Emergency Surgery'),
(49, 'Vascular and Endovascular Surgery'),
(50, 'Wound Care Surgery'),
(111, 'Cardiology'),
(2333, 'Orthopedics'),
(2334, 'Radyoloji');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `wage` int(255) NOT NULL,
  `specialty` varchar(255) NOT NULL,
  `id_number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `name`, `surname`, `email`, `phone`, `department`, `wage`, `specialty`, `id_number`) VALUES
(6, 'Sarah', 'Moore', 'sarah.moore@example.com', '1234567895', 'Ear, Nose and Throat Diseases', 234234, 'Eren', 2147483647),
(7, 'David', 'Taylor', 'david.taylor@example.com', '1234567896', 'Ophthalmology', 90000, 'Ophthalmologist', 0),
(8, 'Laura', 'Anderson', 'laura.anderson@example.com', '1234567897', 'Psychiatry', 95000, 'Psychiatrist', 0),
(9, 'Daniel', 'Thomas', 'daniel.thomas@example.com', '1234567898', 'Endocrinology', 92000, 'Endocrinologist', 0),
(10, 'Sophia', 'Jackson', 'sophia.jackson@example.com', '1234567899', 'Gastroenterology', 112000, 'Gastroenterologist', 0),
(11, 'James', 'White', 'james.white@example.com', '2234567890', 'Hematology', 108000, 'Hematologist', 0),
(12, 'Olivia', 'Harris', 'olivia.harris@example.com', '2234567891', 'Nephrology', 99000, 'Nephrologist', 0),
(13, 'Chris', 'Martin', 'chris.martin@example.com', '2234567892', 'Pulmonology', 102000, 'Pulmonologist', 0),
(14, 'Emma', 'Thompson', 'emma.thompson@example.com', '2234567893', 'Rheumatology', 97000, 'Rheumatologist', 0),
(15, 'Brian', 'Garcia', 'brian.garcia@example.com', '2234567894', 'Urology', 105000, 'Urologist', 0),
(16, 'Jessica', 'Martinez', 'jessica.martinez@example.com', '2234567895', 'Allergy and Immunology', 94000, 'Allergist', 0),
(17, 'Andrew', 'Robinson', 'andrew.robinson@example.com', '2234567896', 'Anesthesiology', 118000, 'Anesthesiologist', 0),
(18, 'Emily', 'Clark', 'emily.clark@example.com', '2234567897', 'Emergency Medicine', 100000, 'Emergency Physician', 0),
(19, 'Matthew', 'Rodriguez', 'matthew.rodriguez@example.com', '2234567898', 'Family Medicine', 92000, 'Family Physician', 0),
(20, 'Megan', 'Lewis', 'megan.lewis@example.com', '2234567899', 'Internal Medicine', 110000, 'Internist', 0),
(21, 'Eernbn', 'ELagöz', 'eren@', '123123123', 'Eye Diesases', 12322222, 'PDR', 232344),
(22, '12213321', '132231213', '21132312', '123321', 'Eye Diesases', 123321, '132132', 2321123);

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `id_number` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `wage` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `id_number`, `name`, `surname`, `email`, `phone`, `department`, `wage`) VALUES
(5, 0, 'Michael', 'Wilson', 'michael.wilson@example.com', '1234567894', 'Electrical Services', 47000),
(6, 0, 'Sarah', 'Moore', 'sarah.moore@example.com', '1234567895', 'Housekeeping', 40000),
(7, 0, 'David', 'Taylor', 'david.taylor@example.com', '1234567896', 'Security', 45000),
(8, 0, 'Laura', 'Anderson', 'laura.anderson@example.com', '1234567897', 'Finance', 55000),
(9, 0, 'Daniel', 'Thomas', 'daniel.thomas@example.com', '1234567898', 'Procurement', 53000),
(10, 0, 'Sophia', 'Jackson', 'sophia.jackson@example.com', '1234567899', 'Logistics', 49000),
(11, 0, 'James', 'White', 'james.white@example.com', '2234567890', 'Medical Records', 51000),
(12, 0, 'Olivia', 'Harris', 'olivia.harris@example.com', '2234567891', 'Patient Services', 52000),
(13, 0, 'Chris', 'Martin', 'chris.martin@example.com', '2234567892', 'Admissions', 50000),
(14, 0, 'Emma', 'Thompson', 'emma.thompson@example.com', '2234567893', 'Billing and Coding', 53000),
(15, 0, 'Brian', 'Garcia', 'brian.garcia@example.com', '2234567894', 'Dietary Services', 45000),
(16, 0, 'Jessica', 'Martinez', 'jessica.martinez@example.com', '2234567895', 'Laundry Services', 42000),
(17, 0, 'Andrew', 'Robinson', 'andrew.robinson@example.com', '2234567896', 'Marketing', 54000),
(18, 0, 'Emily', 'Clark', 'emily.clark@example.com', '2234567897', 'Public Relations', 56000),
(19, 0, 'Matthew', 'Rodriguez', 'matthew.rodriguez@example.com', '2234567898', 'Legal', 70000),
(20, 0, 'Megan', 'Lewis', 'megan.lewis@example.com', '2234567899', 'Compliance', 69000),
(21, 0, 'Natalie', 'Scott', 'natalie.scott@example.com', '3234567890', 'Risk Management', 68000),
(22, 0, 'Ethan', 'Green', 'ethan.green@example.com', '3234567891', 'Quality Assurance', 65000),
(23, 0, 'Chloe', 'Baker', 'chloe.baker@example.com', '3234567892', 'Environmental Services', 48000),
(24, 0, 'Lucas', 'Adams', 'lucas.adams@example.com', '3234567893', 'Biomedical Engineering', 70000),
(25, 0, 'Zoe', 'Nelson', 'zoe.nelson@example.com', '3234567894', 'Facilities Management', 66000),
(26, 0, 'Henry', 'Carter', 'henry.carter@example.com', '3234567895', 'Volunteer Services', 47000),
(27, 0, 'Avery', 'Mitchell', 'avery.mitchell@example.com', '3234567896', 'Transport Services', 46000),
(28, 0, 'Isaac', 'Perez', 'isaac.perez@example.com', '3234567897', 'Reception', 44000),
(100, 0, 'John', 'Doe', 'john.doe@example.com', '1234567890', 'Administration', 50000),
(101, 0, 'Ewrene', 'AEfsdfs', '2332342432', '2342423234', 'Maintenance', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `id_number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`id`, `name`, `surname`, `email`, `phone`, `department`, `id_number`) VALUES
(13, '132231123', '132312132', '132231132', '132213123', 'Ear, Nose and Throat Diseases', 13221323);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `password`) VALUES
(1, 'eren', 'eren');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2335;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
