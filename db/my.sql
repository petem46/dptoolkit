-- phpMyAdmin SQL Dump
-- version 4.1.14.8
-- http://www.phpmyadmin.net
--
-- Host: db729428851.db.1and1.com
-- Generation Time: Mar 24, 2018 at 06:42 PM
-- Server version: 5.5.59-0+deb7u1-log
-- PHP Version: 5.4.45-0+deb7u12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db729428851`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactelements`
--

CREATE TABLE IF NOT EXISTS `contactelements` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) COLLATE latin1_general_ci NOT NULL,
  `sensitive` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `dataaccessgroups`
--

CREATE TABLE IF NOT EXISTS `dataaccessgroups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) COLLATE latin1_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=12 ;

--
-- Dumping data for table `dataaccessgroups`
--

INSERT INTO `dataaccessgroups` (`id`, `name`) VALUES
(1, 'Class Teachers'),
(2, 'Support Staff'),
(3, 'School Leaders'),
(4, 'Parents'),
(5, 'Data Managers'),
(6, 'Pastoral Staff'),
(7, 'MAT Leaders'),
(8, 'IT Support Staff'),
(9, 'Processor Support Staff'),
(10, 'FCAT HR Staff'),
(11, 'Academy HR Staff');

-- --------------------------------------------------------

--
-- Table structure for table `dataaccessgroups_processors`
--

CREATE TABLE IF NOT EXISTS `dataaccessgroups_processors` (
  `dataaccessgroup_id` int(11) NOT NULL,
  `processor_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `dataaccessgroups_processors`
--

INSERT INTO `dataaccessgroups_processors` (`dataaccessgroup_id`, `processor_id`) VALUES
(1, 1006),
(5, 1006),
(8, 1006),
(4, 1006),
(6, 1006),
(9, 1006),
(3, 1006),
(2, 1006),
(8, 1007),
(9, 1007),
(10, 1003),
(10, 1007),
(11, 1003),
(11, 1007),
(11, 1008),
(1, 1008),
(5, 1008),
(10, 1008),
(8, 1008),
(7, 1008),
(4, 1008),
(6, 1008),
(9, 1008),
(3, 1008),
(2, 1008);

-- --------------------------------------------------------

--
-- Table structure for table `dataelementsources`
--

CREATE TABLE IF NOT EXISTS `dataelementsources` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `datatransfermethods`
--

CREATE TABLE IF NOT EXISTS `datatransfermethods` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `method` varchar(250) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `datatransfermethods`
--

INSERT INTO `datatransfermethods` (`id`, `method`) VALUES
(1, 'Manual Data Entry'),
(2, 'Secure link with MIS (Scheduled)'),
(3, 'Secure link with MIS (Manual)'),
(4, 'User Upload via Processor Website');

-- --------------------------------------------------------

--
-- Table structure for table `lawfulreasons`
--

CREATE TABLE IF NOT EXISTS `lawfulreasons` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `reason` varchar(50) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=1006 ;

--
-- Dumping data for table `lawfulreasons`
--

INSERT INTO `lawfulreasons` (`id`, `reason`) VALUES
(1, 'Consent'),
(2, 'Contract'),
(3, 'Legal obligation'),
(4, 'Vital Interests'),
(1004, 'Public task'),
(1005, 'Legitimate interests');

-- --------------------------------------------------------

--
-- Table structure for table `parentelements`
--

CREATE TABLE IF NOT EXISTS `parentelements` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) COLLATE latin1_general_ci NOT NULL,
  `sensitive` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `parentelements`
--

INSERT INTO `parentelements` (`id`, `name`, `sensitive`) VALUES
(1, 'Name', 0),
(2, 'Address', 0),
(3, 'Email Address', 0),
(4, 'Home Phone Number', 0);

-- --------------------------------------------------------

--
-- Table structure for table `parentelements_processors`
--

CREATE TABLE IF NOT EXISTS `parentelements_processors` (
  `processor_id` int(11) NOT NULL,
  `parentelement_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `parentelements_processors`
--

INSERT INTO `parentelements_processors` (`processor_id`, `parentelement_id`) VALUES
(2, 1),
(2, 2),
(1008, 3),
(1008, 2),
(1006, 1),
(1006, 3),
(1004, 1),
(1004, 3),
(1008, 4),
(1008, 1);

-- --------------------------------------------------------

--
-- Table structure for table `processors`
--

CREATE TABLE IF NOT EXISTS `processors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) COLLATE latin1_general_ci DEFAULT NULL,
  `supplier_id` int(11) NOT NULL,
  `purpose` longtext COLLATE latin1_general_ci,
  `lawfulreason_id` int(11) DEFAULT NULL,
  `processingfrequency` longtext COLLATE latin1_general_ci,
  `accessedby` longtext COLLATE latin1_general_ci,
  `retention` longtext COLLATE latin1_general_ci,
  `processinglocation` longtext COLLATE latin1_general_ci,
  `gdprcontractinfo` longtext COLLATE latin1_general_ci,
  `gdprcompliant` tinyint(1) DEFAULT NULL,
  `privacystatement` varchar(250) COLLATE latin1_general_ci DEFAULT NULL,
  `gdprstatement` varchar(250) COLLATE latin1_general_ci DEFAULT NULL,
  `datatransfermethod_id` int(11) NOT NULL,
  `contactuspage` varchar(250) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=1009 ;

--
-- Dumping data for table `processors`
--

INSERT INTO `processors` (`id`, `name`, `supplier_id`, `purpose`, `lawfulreason_id`, `processingfrequency`, `accessedby`, `retention`, `processinglocation`, `gdprcontractinfo`, `gdprcompliant`, `privacystatement`, `gdprstatement`, `datatransfermethod_id`, `contactuspage`) VALUES
(1, 'SISRA Analytics', 1, 'Monitor and track pupil progress and attainment', 1004, 'Up to 6 times per year following data collections & exams', 'School Leaders\r\nClass Teachers\r\nData Managers\r\nFCAT Subject Leads\r\n', '2 yrs after final exams', 'All data uploaded into SISRA services is stored in a private data centre owned and operated by SISRA Ltd for the express use of SISRA services. Servers are located in the SISRA head office in Birkenhead, England and are held in a secure area that is only accessible to SISRA data centre staff. \r\nSISRA Limited uses a combination of the Secure Hypertext Transfer Protocol (HTTPS) along with the Secure Sockets Layer (SSL) protocol to provide encrypted communication and secure identification of their web servers.', 'Link to agreement', 1, 'https://www.sisra.com/privacy-policy', 'https://www.sisra.com/data-security', 0, ''),
(2, 'ParentPay', 2, 'Online payments for school activities including school dinners and trips', 1, 'Daily Updates', 'Finance Staff\r\nParents\r\nCatering Staff', '', '', '', 1, 'https://www.parentpay.com/privacy-policy', 'https://www.parentpay.com/parentpay-and-gdpr', 0, ''),
(1006, 'ClassCharts', 1008, 'Seating plan management\r\nClass behaviour management', 1004, 'Daily', NULL, '', '', '', 0, '', '', 2, 'https://pages.classcharts.com/contact/'),
(1003, 'Strictly Education', 1003, 'HR Payroll Services', 2, 'Monthly', 'Finance Staff\r\nHR Staff\r\nStrictly Education Support Staff\r\n\r\n', 'How long is data retained', 'Where is data stored', 'Link to agreement', 1, 'https://www.strictlyeducation.co.uk/privacy-policy', 'https://www.strictlyeducation.co.uk/gdpr-compliance', 0, ''),
(1004, 'Data Processor ', 3, 'Demo Test', 3, 'Processing Schedule', 'Data Managers', 'Deleted when no longer required', 'Server in UK', 'No Details', 1, 'link', 'link', 0, ''),
(1008, 'SIMS', 1007, '', 1004, 'Live MIS', NULL, 'As detailed in the records management and data retention policy.', 'Internal Servers Security? Backups?', '', 0, '', 'https://www.capita-sims.co.uk/gdpr', 1, 'https://www.capita-sims.co.uk/contact-us'),
(1007, 'Inventry', 1005, 'Door access system\r\nVisitor Management', 1, 'Daily', NULL, '', '', '', 1, 'https://inventry.co.uk/wp-content/uploads/2018/02/Privacy-Notice-Version-1.1.pdf', 'https://inventry.co.uk/gdpr-policies/', 2, 'https://inventry.co.uk/contact-us/');

-- --------------------------------------------------------

--
-- Table structure for table `processors_schools`
--

CREATE TABLE IF NOT EXISTS `processors_schools` (
  `processor_id` int(11) NOT NULL,
  `school_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `processors_schools`
--

INSERT INTO `processors_schools` (`processor_id`, `school_id`) VALUES
(1003, 3),
(2, 3),
(1007, 4),
(2, 7),
(1008, 2),
(1008, 5),
(1008, 1),
(2, 4),
(2, 2),
(1004, 2),
(2, 6),
(1004, 7),
(1006, 6),
(1006, 4),
(1008, 4),
(1, 2),
(1003, 1),
(1, 4),
(1004, 4),
(2, 5),
(1007, 1),
(1007, 2),
(1007, 6),
(1007, 7),
(1008, 6),
(1008, 3),
(1008, 7);

-- --------------------------------------------------------

--
-- Table structure for table `processors_staffelements`
--

CREATE TABLE IF NOT EXISTS `processors_staffelements` (
  `processor_id` int(11) NOT NULL,
  `staffelement_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `processors_staffelements`
--

INSERT INTO `processors_staffelements` (`processor_id`, `staffelement_id`) VALUES
(1, 1),
(1, 3),
(2, 1),
(2, 3),
(1007, 1),
(1007, 7),
(1006, 3),
(1006, 1),
(1003, 1),
(1003, 2),
(1003, 3),
(1003, 4),
(1003, 6),
(1003, 7),
(1004, 1),
(1004, 2),
(1004, 5),
(1008, 5),
(1008, 7),
(1008, 2),
(1008, 1),
(1008, 4),
(1008, 8),
(1008, 6),
(1008, 3);

-- --------------------------------------------------------

--
-- Table structure for table `processors_studentelements`
--

CREATE TABLE IF NOT EXISTS `processors_studentelements` (
  `processor_id` int(11) NOT NULL,
  `studentelement_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `processors_studentelements`
--

INSERT INTO `processors_studentelements` (`processor_id`, `studentelement_id`) VALUES
(1, 1),
(1, 4),
(1, 5),
(1, 6),
(1, 9),
(1, 10),
(1, 11),
(2, 1),
(2, 2),
(2, 4),
(2, 12),
(1006, 7),
(1004, 1),
(1004, 2),
(1004, 3),
(1004, 1020),
(1004, 1021),
(1, 7),
(1, 8),
(1008, 1021),
(1008, 1014),
(1008, 1020),
(1008, 7),
(1008, 6),
(1008, 10),
(1008, 11),
(1006, 1),
(1006, 8),
(1006, 4),
(1006, 5),
(1008, 3),
(1008, 2),
(1008, 1019),
(1008, 9),
(1008, 1015),
(1008, 1016),
(1008, 1),
(1008, 1017),
(1008, 1012),
(1008, 8),
(1008, 4),
(1008, 1018),
(1008, 1023),
(1008, 5),
(1008, 1013),
(1008, 1022);

-- --------------------------------------------------------

--
-- Table structure for table `schools`
--

CREATE TABLE IF NOT EXISTS `schools` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=11 ;

--
-- Dumping data for table `schools`
--

INSERT INTO `schools` (`id`, `name`) VALUES
(1, 'Primary Academy'),
(2, 'Secondary Academy'),
(3, 'Sixth Form'),
(4, 'All Through Academy'),
(5, 'Primary School'),
(6, 'Secondary School'),
(7, 'St Person C of E Primary School');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE IF NOT EXISTS `settings` (
  `id` int(11) NOT NULL,
  `sitename` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `processorslabel` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `supplierslabel` varchar(50) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `sitename`, `processorslabel`, `supplierslabel`) VALUES
(1, 'FCAT Data Protection Toolkit', 'Processors', 'Suppliers');

-- --------------------------------------------------------

--
-- Table structure for table `staffelements`
--

CREATE TABLE IF NOT EXISTS `staffelements` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `sensitive` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=9 ;

--
-- Dumping data for table `staffelements`
--

INSERT INTO `staffelements` (`id`, `name`, `sensitive`) VALUES
(1, 'Name', 0),
(2, 'Home Address', 1),
(3, 'Work Email', 0),
(4, 'Personal Email', 1),
(5, 'Ethinicity', 1),
(6, 'Salary', 1),
(7, 'Attendance Data', 0),
(8, 'Reason for absence information', 1);

-- --------------------------------------------------------

--
-- Table structure for table `studentelements`
--

CREATE TABLE IF NOT EXISTS `studentelements` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) COLLATE latin1_general_ci NOT NULL,
  `sensitive` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=1024 ;

--
-- Dumping data for table `studentelements`
--

INSERT INTO `studentelements` (`id`, `name`, `sensitive`) VALUES
(1, 'Name', 0),
(2, 'Home Address', 0),
(3, 'Email Address', 1),
(4, 'Pupil Premium Status', 1),
(5, 'SEN Status', 1),
(6, 'Attendance Data', 0),
(7, 'Behaviour Data', 0),
(8, 'Photo', 1),
(9, 'Looked After Information', 1),
(10, 'Assessment Data (internal)', 0),
(11, 'Assessment Data (External)', 0),
(12, 'Biometric: Fingerprint', 1),
(1012, 'Parental Contacts', 0),
(1013, 'Siblings in school', 0),
(1014, 'Dietary Needs', 0),
(1015, 'Medical Conditions', 1),
(1016, 'Medical Notes', 1),
(1017, 'Nationality', 1),
(1018, 'Religion', 1),
(1019, 'Home Language', 1),
(1020, 'Child Protection Information', 1),
(1021, 'Disabilities', 0),
(1022, 'Young Carer Information', 1),
(1023, 'School History', 0);

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE IF NOT EXISTS `suppliers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `address` longtext COLLATE latin1_general_ci,
  `phone` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `email` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `dponame` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `dpoemail` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=1010 ;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`id`, `name`, `address`, `phone`, `email`, `dponame`, `dpoemail`) VALUES
(1, 'SISRA Ltd', ' Egerton House\r\n2 Tower Road\r\nBirkenhead\r\nMerseyside\r\nCH41 1FN', '08707576750', 'enquiries@sisra.com', '', 'enquiries@sisra.com'),
(2, 'ParentPay Limited', 'ParentPay Limited\r\nRicoh Arena\r\nPhoenix Way\r\nCoventry\r\nCV6 6GE', '02476 994 820', '', 'The Data and Information Security Officer', ''),
(1006, 'One Team Logic Limited', 'Unit 2\r\nTalbot Green Business Park\r\nHeol-y-Twyn\r\nTalbot Green\r\nCF72 9FG', '03306600757', 'info@oneteamlogic.co.uk', '', ''),
(1003, 'Strictly Education Ltd', 'Marlborough Court,\r\nSunrise Parkway,\r\nLinford Wood,\r\nMilton Keynes,\r\nMK14 6DY', '0330 123 2540', 'enquire@strictlyeducation.co.uk', 'DPO Officer', 'enquire@strictlyeducation.co.uk'),
(1009, 'Supplier Not In Database', '', '', '', '', ''),
(1005, 'InVentry Limited', 'Unit 22-23\r\nHowley Business Park\r\nMorley\r\nLeeds\r\nLS27 0BZ', '0113 322 9253', 'info@inventry.co.uk', 'Data Protection Officer', 'dpo@inventry.co.uk'),
(1007, 'Capita Business Services Ltd', 'Franklin Court\r\nStannard Way\r\nPriory Business Park\r\nCardington\r\nBEDFORD\r\nMK44 3JZ', '0800 170 7005', '', '', ''),
(1008, 'EduKey', '10 West Street, \r\nFishguard\r\nPembrokeshire, \r\nSA65 9AE', '01348 800 100', 'support@edukey.co.uk', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
