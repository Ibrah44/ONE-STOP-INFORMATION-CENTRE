-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2023 at 01:49 PM
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
-- Database: `osis`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity`
--

CREATE TABLE `activity` (
  `activityId` varchar(100) NOT NULL,
  `activityName` varchar(100) NOT NULL,
  `activityDetails` varchar(100) NOT NULL,
  `caoId` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `asset`
--

CREATE TABLE `asset` (
  `assetId` varchar(100) NOT NULL,
  `assetName` varchar(100) NOT NULL,
  `quantity` varchar(50) NOT NULL,
  `purpose` varchar(100) NOT NULL,
  `purchaseDate` date NOT NULL,
  `Document` varchar(500) NOT NULL,
  `purchasedBy` varchar(100) NOT NULL,
  `Amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `asset`
--

INSERT INTO `asset` (`assetId`, `assetName`, `quantity`, `purpose`, `purchaseDate`, `Document`, `purchasedBy`, `Amount`) VALUES
('A004', 'cars', '4', 'transport', '2015-05-08', '../asset/analysis.docx', 'Nansana Town Clerk', 400000000),
('A008', 'fuel', '50 litres', 'transporting documents to the headquarters', '2015-05-23', '../asset/97.docx', 'Nansana Town Clerk', 500000),
('AE002', 'Reams', '500', 'distributing to all primary schools in wakiso', '2015-06-01', '../asset/97.docx', 'Head Of Education Department', 400000),
('AF001', 'Motocycles', '8', 'ducument delivery', '2015-04-17', '../asset/analysis.docx', 'Head Of Finance Department', 30000000),
('AF002', 'computers', '20', 'Carrying out work processes quickly and efficiently ', '2015-04-15', '../asset/97.docx', 'Head Of Finance Department', 20000000),
('AF003', 'Reams Of paper', '8', 'Making authorisation Documents', '2014-08-28', '../asset/97.docx', 'Head Of Finance Department', 100000),
('AH001', 'medicine', '12 boxes of panadol', 'Improving peoples health', '2015-05-01', '../asset/analysis.docx', 'Head Of Health Department', 100000),
('AH002', 'computers', '8', 'Carrying out work processes quickly and efficiently ', '2015-06-01', '../asset/analysis.docx', 'Head Of Health Department', 30000000),
('AH003', 'condoms', '12 boxes', 'Distributing to the youth in wakiso district', '2015-06-05', '../asset/97.docx', 'Head Of Health Department', 1000000);

-- --------------------------------------------------------

--
-- Table structure for table `cao`
--

CREATE TABLE `cao` (
  `caoId` varchar(100) NOT NULL,
  `caoName` varchar(100) NOT NULL,
  `telephoneNumber` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `departmental_officer`
--

CREATE TABLE `departmental_officer` (
  `departmentid` varchar(50) NOT NULL,
  `departmentName` varchar(50) NOT NULL,
  `headOfDepartmentName` varchar(50) NOT NULL,
  `telephoneNumber` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `duty`
--

CREATE TABLE `duty` (
  `dutyId` varchar(100) NOT NULL,
  `dutyName` varchar(100) NOT NULL,
  `dutyDetails` varchar(100) NOT NULL,
  `dateOfDutyAssignment` date NOT NULL,
  `deadline` date NOT NULL,
  `assignedTo` varchar(100) NOT NULL,
  `status` varchar(25) NOT NULL DEFAULT 'Pending',
  `doneDate` date NOT NULL DEFAULT '0000-00-00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `duty`
--

INSERT INTO `duty` (`dutyId`, `dutyName`, `dutyDetails`, `dateOfDutyAssignment`, `deadline`, `assignedTo`, `status`, `doneDate`) VALUES
('D001', 'Inspection', 'checking_for_trading_licences', '2015-05-13', '2015-05-30', 'Head Of Finance Department', 'Accomplished', '2015-04-17'),
('D002', 'construction', 'district headquater buildings ', '2014-08-06', '2015-07-05', 'Head Of Finance Department', 'pending', '0000-00-00'),
('D003', 'musibante', 'car_repair', '2014-10-09', '2014-11-13', 'Head Of Finance Department', 'Accomplished', '2014-11-07'),
('D004', 'promoting sanitation', 'cleaning of roads and streets', '2014-12-01', '2014-12-27', 'Head Of Finance Department', 'Accomplished', '2014-12-19'),
('D005', 'Immunisation', 'immunising_children_against_polio', '2014-11-08', '2015-01-08', 'Head Of Finance Department', 'Accomplished', '2014-12-25'),
('D007', 'survival_training', 'Teaching_people_fire_drills_and_firstaid', '2015-04-06', '2015-04-15', 'Head Of Finance Department', 'Accomplished', '2015-06-11'),
('D008', 'Inspection', 'checking_for_trading_licences', '2013-11-16', '2013-12-21', 'Head Of Finance Department', 'Accomplished', '2013-12-12'),
('D009', 'Idependence_day', 'celebrating_and_welcoming_the_mayor', '2013-08-01', '2013-12-20', 'Head Of Finance Department', 'Accomplished', '2013-12-05'),
('D010', 'Medicine_Supply', 'distributing_medicne_in_hospitals', '2015-05-06', '2015-06-13', 'Head Of Finance Department', 'pending', '0000-00-00'),
('D011', 'registration', 'registering_people_to_get_NationalIds', '2015-05-06', '2015-06-13', 'Head Of Finance Department', 'pending', '0000-00-00'),
('D013', 'Naads', 'giving_farmers_seeds_and_pestcides', '2015-05-06', '2015-06-18', 'Head Of Finance Department', 'pending', '0000-00-00'),
('D014', 'State house meeting', 'Representing the CAO in meeting with the president at Entebbe ', '2015-06-05', '2015-06-15', 'Head Of Finance Department', 'pending', '0000-00-00'),
('D015', 'Inspection', 'checking_for_trading_licences', '2015-05-15', '2015-05-16', 'Head Of Finance Department', 'Accomplished', '2015-05-16'),
('D016', 'Idependence_day', 'celebrating_and_welcoming_the_mayor', '2015-05-21', '0000-00-00', 'Head Of Finance Department', 'pending', '0000-00-00'),
('D017', 'promoting sanitation', 'cleaning of roads and streets', '2015-05-15', '2015-05-19', 'Head Of Finance Department', 'Accomplished', '2015-05-18'),
('D018', 'Immunisation', 'immunising_children_against_polio', '2015-05-09', '2015-05-10', 'Head Of Finance Department', 'Accomplished', '2015-05-11'),
('D019', 'construction', 'district head quater buildings ', '2015-05-08', '2015-05-16', 'Head Of Finance Department', 'pending', '0000-00-00'),
('D020', 'Medicine supply', 'distributing medicine to different hospitals in wakiso district', '2013-09-04', '2013-12-01', 'Head Of Health Department', 'Accomplished', '2013-11-28'),
('D021', 'School hygiene inspection', 'checking to determine the sanitation at different schools in wakiso', '2013-10-09', '2013-12-05', 'Head Of Health Department', 'Accomplished', '2013-12-02'),
('D022', 'Screening for HIV/AIDS ', 'Determining the number of infected people in wakiso district', '2013-11-01', '2013-11-29', 'Head Of Health Department', 'pending', '0000-00-00'),
('D023', 'Distribute medicine to hospitals', 'distributing medicine to different hospitals in wakiso district', '2014-11-12', '2014-12-02', 'Head Of Health Department', 'Accomplished', '2014-11-28'),
('D024', 'Distribute medicine to schools', 'distributing deworming tablets to different primary schools  in wakiso district', '2014-11-05', '2015-06-10', 'Head Of Health Department', 'Accomplished', '2015-05-14'),
('D025', 'First aid training of the youth', 'Teaching_people_fire_drills_and_firstaid', '2014-10-02', '2014-12-18', 'Head Of Health Department', 'pending', '0000-00-00'),
('D026', 'Immunisation', 'immunising_children_against_polio', '2015-03-06', '2015-06-16', 'Head Of Health Department', 'pending', '0000-00-00'),
('D027', 'Sensitisation about circumcision', 'informing people of wakiso district about the advantages of circumcision', '2015-05-06', '2015-06-15', 'Head Of Health Department', 'pending', '0000-00-00'),
('D028', ' Guiding and Counseling the youth', 'Advising the youth about different life changing scenarios', '2015-06-10', '2015-06-15', 'Head Of Health Department', 'pending', '0000-00-00'),
('D029', 'Inspection of hospitals', 'Making checks to determine whether medical services are being provided ', '2015-04-09', '2015-06-17', 'Head Of Health Department', 'pending', '0000-00-00'),
('D030', 'sensitisation', 'Teaching people in kibwa zone about the importance of immunisation', '2015-05-22', '2015-06-11', 'Nansana Town Clerk', 'Accomplished', '2015-06-01'),
('D031', 'road construction', 'Maintaining and reconditioning hoima road by filling pot halls', '2015-06-04', '2015-06-15', 'Nansana Town Clerk', 'pending', '0000-00-00'),
('D032', 'Sanitation', 'collecting rabbish around Kiggaga zone', '2015-06-02', '2015-06-18', 'Nansana Town Clerk', 'pending', '0000-00-00'),
('D033', 'Building Naterere Primary school', 'Constructing school building of Naterere Primary school', '2015-06-02', '2015-06-07', 'Nansana Town Clerk', 'Accomplished', '2015-06-03'),
('D034', 'Building Catherine Hospital', 'Constructing  hospital buildings for Catherine Hospital', '2015-06-05', '2015-06-13', 'Nansana Town Clerk', 'pending', '0000-00-00'),
('D035', 'Martyrs day', 'Attending martyrs day function at ST Joseph Primary School', '2015-06-04', '2015-06-13', 'Nansana Town Clerk', 'pending', '0000-00-00'),
('D036', 'Well Construction', 'Building wells in Kibwa, Nabweru and kiggaga zone', '2015-05-03', '2015-06-01', 'Nansana Town Clerk', 'Accomplished', '2015-06-01'),
('D037', 'sensitisation', 'Informing and teaching the youth in Kibwa zone about the causes and ways to prevent AIDs ', '2014-12-03', '2015-06-01', 'Nansana Town Clerk', 'Accomplished', '2015-06-09'),
('D038', 'Purchasing Desks', 'purchasing desks for St joseph primary school in bethelem zone', '2015-06-06', '2015-06-10', 'Nansana Town Clerk', 'Accomplished', '2015-06-09'),
('D039', 'State house meeting', 'Representing the CAO in meeting with the president at Entebbe ', '2015-06-01', '2015-06-01', 'Nansana Town Clerk', 'Accomplished', '2015-06-01'),
('D040', 'Screening for HIV/AIDS ', 'Determining the number of infected people in Nansana', '2015-06-03', '2015-06-13', 'Nansana Town Clerk', 'pending', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `inspect`
--

CREATE TABLE `inspect` (
  `activityId` varchar(100) NOT NULL,
  `inspectionId` varchar(20) NOT NULL,
  `activityName` varchar(100) NOT NULL,
  `inspectionDate` date NOT NULL,
  `inspectionProof` varchar(100) NOT NULL,
  `doneBy` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inspect`
--

INSERT INTO `inspect` (`activityId`, `inspectionId`, `activityName`, `inspectionDate`, `inspectionProof`, `doneBy`) VALUES
('AC001', 'IC001', 'Tugagawale', '2015-06-04', '../financeinspection/TESTIMONIAL.docx', 'Head Of Community Development Department'),
('AE001', 'IE001', 'Health Forum', '2015-03-11', '../financeinspection/TESTIMONIAL.docx', 'Head Of Education Department'),
('AF001', 'IF001', 'tukulakulane', '2015-05-14', '../financeinspection/analysis.docx', 'Head Of Finance Department'),
('AF002', 'IF002', 'Twezimbe', '2015-05-09', '../financeinspection/analysis.docx', 'Head Of Finance Department'),
('AF010', 'IF003', 'Construction', '2015-05-23', '../financeinspection/TESTIMONIAL.docx', 'Head of finance Department'),
('AH001', 'IH001', 'Immunisation', '2015-05-08', '../financeinspection/TESTIMONIAL.docx', 'Head Of Health Department'),
('AH002', 'IH002', 'Medicine Distribution', '2014-11-12', '../financeinspection/analysis.docx', 'Head Of Health Department'),
('AH003', 'IH003', 'Sanitation Sensitisation', '2014-12-10', '../financeinspection/TESTIMONIAL.docx', 'Head Of Health Department'),
('ATN001', 'ITN001', 'Immunisation', '2015-05-01', '../financeinspection/TESTIMONIAL.docx', 'Nansana Town Clerk'),
('ATN002', 'ITN002', 'Twezimbe', '2015-04-02', '../financeinspection/analysis.docx', 'Nansana Town Clerk');

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `itemId` varchar(100) NOT NULL,
  `itemName` varchar(100) NOT NULL,
  `itemDetails` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `userId` int(10) NOT NULL,
  `FirstName` varchar(20) NOT NULL,
  `LastName` varchar(20) NOT NULL,
  `Email` varchar(25) NOT NULL,
  `status` varchar(25) NOT NULL,
  `region` varchar(30) NOT NULL,
  `userName` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL,
  `department` varchar(100) NOT NULL,
  `loginStatus` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`userId`, `FirstName`, `LastName`, `Email`, `status`, `region`, `userName`, `password`, `department`, `loginStatus`) VALUES
(1, 'ivan', 'musoke', 'avadrag@yahoo.com', 'HeadOfDepartment', 'Wakiso', 'natsu', 'natsu', 'Finance', 'Logged out'),
(2, 'meddie', 'mawejje', 'segongo@yahoo.com', 'CAO', 'Wakiso', 'meddie', 'meddie', '', 'Logged out'),
(3, 'junju', 'yetete', 'werte@gmail.com', 'TownClerk', 'Nansana', 'melisa', 'melisa', '', 'Logged out'),
(4, 'wedesa', 'hesheeda', 'qwe@gmail.com', 'ADMIN', 'Wakiso', 'admin', 'admin', '', 'Logged out'),
(5, 'Kahunde', 'Kelly', 'seweto@gmail.com', 'HeadOfDepartment', 'Wakiso', 'kelly', 'kelly', 'Health', 'Logged out'),
(6, 'Olivier', 'Balyama', 'werd@yahoo.com', 'HeadOfDepartment', 'Wakiso', 'olivier', 'olivier', 'Education', 'Logged out'),
(7, 'Mary', 'Namusoke', 'NMary@yahoo.com', 'HeadOfDepartment', 'Wakiso', 'mary', 'mary', 'Community', 'Logged out'),
(8, 'Nelson', 'Kibiliti', 'knelson@gmail.com', 'TownClerk', 'kira', 'nelson', 'nelson', '', 'Logged out');

-- --------------------------------------------------------

--
-- Table structure for table `procure`
--

CREATE TABLE `procure` (
  `assetId` varchar(100) NOT NULL,
  `departmentId` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `projectId` varchar(100) NOT NULL,
  `projectName` varchar(100) NOT NULL,
  `projectDetails` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'Pending',
  `dateOfSubmission` date NOT NULL,
  `document` varchar(500) NOT NULL,
  `submitedBy` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`projectId`, `projectName`, `projectDetails`, `status`, `dateOfSubmission`, `document`, `submitedBy`) VALUES
('PC001', 'Tukyogeleko', 'Informing people about domestic violence and encourage women to come out in the open', 'pending', '2015-06-02', '../projectproposal/analysis.docx', 'Head Of Community Development Department'),
('PE001', 'Holiday assement', 'giving students questions to do during their holidays', 'pending', '2015-05-14', '../projectproposal/analysis.docx', 'Head Of Education Department'),
('PF001', 'Twezimbe', 'Improve transportation facilities in wakiso', 'Accepted', '2015-05-23', '../projectproposal/analysis.docx', 'Head Of Finance Department'),
('PF002', 'Tugenda maso', 'Providing assistance to single mothers', 'Accepted', '2015-05-29', '../projectproposal/analysis.docx', 'Head Of Finance Department'),
('PF003', 'tugagawale', 'Improving the financial status of residents of wakiso', 'pending', '2015-06-06', '../projectproposal/analysis.docx', 'Head Of Finance Department'),
('PH001', 'Tweyonge', 'Improving the sanitation and hygiene in wakiso', 'Accepted', '2015-06-01', '../projectproposal/analysis.docx', 'Head Of Health Department'),
('PH002', 'Immunisation', 'Immunizing children in wakiso  ', 'Accepted', '2015-06-04', '../projectproposal/analysis.docx', 'Head Of Health Department'),
('PH003', 'Blood donation', 'Obtaining blood from secondary school children', 'pending', '2015-06-06', '../projectproposal/analysis.docx', 'Head Of Health Department'),
('PN001', 'CONSTRUCTION', 'ROAD FROM NANSANA', 'Accepted', '2015-05-12', '../projectproposal/analysis.docx', 'Nansana Town Clerk');

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE `purchase` (
  `assetId` varchar(100) NOT NULL,
  `clerkId` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `requestId` varchar(100) NOT NULL,
  `itemName` varchar(25) NOT NULL,
  `quantity` varchar(50) NOT NULL,
  `requestDate` date NOT NULL,
  `purpose` varchar(200) NOT NULL,
  `requestedBy` varchar(50) NOT NULL,
  `status` varchar(15) NOT NULL DEFAULT 'Pending',
  `downloadApproval` varchar(100) NOT NULL DEFAULT '---------------------'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`requestId`, `itemName`, `quantity`, `requestDate`, `purpose`, `requestedBy`, `status`, `downloadApproval`) VALUES
('RC001', 'computers', '6', '2015-06-04', 'typing and storing documents', 'Head Of Community Development Department', 'pending', '---------------------'),
('RE001', 'reams of paper', '10', '2015-06-03', 'printing exams', 'Head Of Education Department', 'pending', '---------------------'),
('RE003', 'computers', '5', '2015-06-03', 'typing and storing documents', 'Head Of Education Department', 'pending', '---------------------'),
('RF001', 'computers', '20', '2015-04-30', 'typing and storing documents', 'Head Of Finance Department', 'Accepted', '../asset/97.docx'),
('RF002', 'fuel', '50', '2014-06-20', 'transport', 'Head Of Finance Department', 'pending', '---------------------'),
('RH001', 'fuel', '20', '2015-04-09', 'transport', 'Head Of Health Department', 'pending', '---------------------'),
('RH002', 'computers', '6', '2015-05-06', 'typing and storing documents', 'Head Of Health Department', 'Accepted', '../asset/97.docx'),
('RH003', 'condoms', '10 boxes', '2015-06-05', 'for distributing to the youth', 'Head Of Health Department', 'pending', '---------------------'),
('RH004', 'deworming tablets', '20 boxes', '2015-06-03', 'distributing to primary schools', 'Head Of Health Department', 'pending', '---------------------'),
('RN002', 'reams of paper', '66', '2015-04-16', 'printing ', 'Nansana Town Clerk', 'pending', '---------------------');

-- --------------------------------------------------------

--
-- Table structure for table `submit`
--

CREATE TABLE `submit` (
  `itemId` varchar(100) NOT NULL,
  `departmentId` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `task`
--

CREATE TABLE `task` (
  `taskId` varchar(100) NOT NULL,
  `taskName` varchar(100) NOT NULL,
  `taskDetails` varchar(100) NOT NULL,
  `clerkId` varchar(100) NOT NULL,
  `departmentId` varchar(100) NOT NULL,
  `dateOfExecution` varchar(100) NOT NULL,
  `taskScheduler` varchar(100) NOT NULL,
  `taskStatus` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `task`
--

INSERT INTO `task` (`taskId`, `taskName`, `taskDetails`, `clerkId`, `departmentId`, `dateOfExecution`, `taskScheduler`, `taskStatus`) VALUES
('TC001', 'Women\'s Day', 'celebrate this day and visit single mothers in wakiso', '', '', '2015-06-15', 'Head Of Community Development Department', 'pending'),
('TC002', 'Immunisation', 'Immunizing kids against polio and whooping cough', '', '', '2015-06-17', 'Head Of Community Development Department', 'pending'),
('TE001', 'Visiting primary schools in wakiso', 'attending speech days, sports days and music and drama festivals ', '', '', '2015-06-19', 'Head Of Education Department', 'pending'),
('TF001', 'construction', 'nansana road construction', '', '', '2015-06-14', 'Head Of Finance Department', 'pending'),
('TF002', 'contruction', 'building Ntanga primary chool in Nabweru', 'bvfs', 'nbvnbn', '2015-06-18', 'Head Of Finance Department', 'pending'),
('TF003', 'Construction', 'construction of wakiso bazadde primary school', '', '', '2015-06-19', 'Head Of Finance Department', 'pending'),
('TF004', 'Visiting primary schools in wakiso', 'attending speech days, sports days and music and drama festivals ', '', '', '2015-06-16', 'Head Of Finance Department', 'pending'),
('TF005', 'Immunisation', 'Immunizing kids against polio and whooping cough ', '', '', '2014-04-31', 'Head Of Finance Department', 'Acomplished'),
('TF007', 'Car servicing', 'making repairs and reconditioning of the different district vechicles', '', '', '2014-04-04', 'Head Of Finance Department', 'Acomplished'),
('TF008', 'Stationary procurement', 'purchase of reams, staples, files and other paper documents', '', '', '2015-06-04', 'Head Of Finance Department', 'pending'),
('TF009', 'Financial assesment', 'Making supervisions and inspections about there financial expenses', '', '', '2015-06-13', 'Head Of Finance Department', 'pending'),
('TF010', 'Making payments', 'Paying for the different assets procured by the district ', '', '', '2015-05-29', 'Head Of Finance Department', 'Acomplished'),
('TF015', 'Making payments', '', '', '', '', '', ''),
('TF016', 'Car servicing', '', '', '', '', '', ''),
('TH001', 'Sensitisation', 'Informing the youth about causes of HIV/AIDS and how to prevent it', '', '', '2015-06-16', 'Head Of Health Department', 'pending'),
('TH002', 'Distribution of mosquito nets', 'Giving out mosquito nets to residents in wakiso district', '', '', '2015-06-17', 'Head Of Health Department', 'pending'),
('TH003', 'Screening for HIV/AIDS', 'determinig the percentage of infected people in wakiso district', '', '', '2015-06-18', 'Head Of Health Department', 'pending'),
('TH004', 'Distribution of mother kits', 'providing pregnant women in wakiso with mother kits', '', '', '2015-06-12', 'Head Of Health Department', 'pending'),
('TH005', 'Immunisation', 'Immunizing kids against polio and whooping cough ', '', '', '2014-06-10', 'Head Of Health Department', 'Acomplished'),
('TH006', 'Distribution of condoms', 'Giving the youth condoms', '', '', '2014-06-10', 'Head Of Health Department', 'pending'),
('TH007', 'Blood donation', 'getting blood from different secondary schools in wakiso', '', '', '2014-06-10', 'Head Of Health Department', 'Acomplished'),
('TH008', 'First aid education and training', 'Teaching the youth survival techniques ', '', '', '2014-06-10', 'Head Of Health Department', 'Acomplished'),
('TH009', 'Distributing deworming tablets to schools', 'distributing deworming tablets to  different secondary and primary schools in wakiso', '', '', '2013-06-10', 'Head Of Health Department', 'pending'),
('TH010', 'Construction', 'building new hospitals in wakiso district', '', '', '2013-06-10', 'Head Of Health Department', 'pending'),
('TH011', 'Sanitation education', 'Teaching the people of how to maintain hygiene', '', '', '2013-03-9', 'Head Of Health Department', 'Acomplished'),
('TH012', 'Distribution Of medicine', 'Restalking the different hospitals in Wakiso with medicine', '', '', '2013-03-10', 'Head Of Health Department', 'Acomplished'),
('TH014', 'Screening for HIV/AIDS', 'determinig the percentage of infected people in wakiso district', '', '', '2013-04-21', 'Head Of Health Department', 'Acomplished'),
('TTN001', 'Screening for HIV/AIDS', 'determinig the percentage of infected people in Nansana', '', '', '2015-06-13', 'Nansana Town Clerk', 'pending'),
('TTN002', 'Distribution of mother kits', 'providing pregnant women in wakiso with mother kits', '', '', '2015-06-15', 'Nansana Town Clerk', 'pending'),
('TTN003', 'Distribution of mosquito nets', 'Giving out mosquito nets to residents in Nansana', '', '', '2015-06-16', 'Nansana Town Clerk', 'pending'),
('TTN004', 'Sanitation education', 'Teaching the people of how to maintain hygiene', '', '', '2015-06-18', 'Nansana Town Clerk', 'pending'),
('TTN005', 'Blood donation', 'getting blood from different secondary schools in wakiso', '', '', '2015-06-16', 'Nansana Town Clerk', 'pending'),
('TTN006', 'Distribution Of medicine', 'Restalking the different hospitals in Wakiso with medicine', '', '', '2014-04-21', 'Nansana Town Clerk', 'Accomplished');

-- --------------------------------------------------------

--
-- Table structure for table `tbllogin`
--

CREATE TABLE `tbllogin` (
  `id` int(3) NOT NULL,
  `username` varchar(30) CHARACTER SET utf8 NOT NULL,
  `password` varchar(40) CHARACTER SET utf8 NOT NULL,
  `fullname` varchar(150) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ujis;

--
-- Dumping data for table `tbllogin`
--

INSERT INTO `tbllogin` (`id`, `username`, `password`, `fullname`) VALUES
(1, 'jmmaguigad', 'espionage28', 'John Manuel Macatuggal Maguigad'),
(2, 'joe', 'joe123', 'joe joe joe jr.');

-- --------------------------------------------------------

--
-- Table structure for table `town clerk`
--

CREATE TABLE `town clerk` (
  `clerkId` varchar(100) NOT NULL,
  `clerkName` varchar(100) NOT NULL,
  `townCouncil` varchar(100) NOT NULL,
  `region` varchar(100) NOT NULL,
  `telephoneNumber` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_chat_messages`
--

CREATE TABLE `user_chat_messages` (
  `id` int(11) NOT NULL,
  `message_content` text NOT NULL,
  `username` varchar(20) NOT NULL,
  `message_time` date NOT NULL,
  `recipient` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_chat_messages`
--

INSERT INTO `user_chat_messages` (`id`, `message_content`, `username`, `message_time`, `recipient`) VALUES
(46, 'Good morning sir i have just received a report that there has been a cholera out break in nansana ', 'olivier', '2015-06-10', 'meddie '),
(48, 'hallo how are you', 'natsu', '2015-06-11', 'melisa '),
(49, 'fine how are you', 'melisa', '2015-06-11', 'natsu '),
(50, 'svfggfhngngmg', 'meddie', '2015-06-11', 'melisa '),
(51, 'how are you?', 'natsu', '2015-06-11', 'mary '),
(52, 'gwe hahahaha', 'mary', '2015-06-11', 'natsu '),
(53, ' Good morning sir i have just received a report that there has been a cholera out break in nansana', 'natsu', '2015-06-18', 'meddie '),
(54, 'okay thank you for bringing that issue to my notice', 'meddie', '2015-06-18', 'natsu '),
(55, 'derrrrerrrrrrrrrrrrrre', 'admin', '2015-06-29', 'meddie '),
(56, 'kaleeee', 'meddie', '2015-06-29', 'admin ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `asset`
--
ALTER TABLE `asset`
  ADD PRIMARY KEY (`assetId`);

--
-- Indexes for table `cao`
--
ALTER TABLE `cao`
  ADD PRIMARY KEY (`caoId`);

--
-- Indexes for table `duty`
--
ALTER TABLE `duty`
  ADD PRIMARY KEY (`dutyId`);

--
-- Indexes for table `inspect`
--
ALTER TABLE `inspect`
  ADD PRIMARY KEY (`activityId`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`itemId`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`userId`);

--
-- Indexes for table `procure`
--
ALTER TABLE `procure`
  ADD PRIMARY KEY (`assetId`,`departmentId`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`projectId`);

--
-- Indexes for table `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`assetId`,`clerkId`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`requestId`);

--
-- Indexes for table `submit`
--
ALTER TABLE `submit`
  ADD PRIMARY KEY (`itemId`,`departmentId`);

--
-- Indexes for table `task`
--
ALTER TABLE `task`
  ADD PRIMARY KEY (`taskId`);

--
-- Indexes for table `tbllogin`
--
ALTER TABLE `tbllogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `town clerk`
--
ALTER TABLE `town clerk`
  ADD PRIMARY KEY (`clerkId`);

--
-- Indexes for table `user_chat_messages`
--
ALTER TABLE `user_chat_messages`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `userId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbllogin`
--
ALTER TABLE `tbllogin`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_chat_messages`
--
ALTER TABLE `user_chat_messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
