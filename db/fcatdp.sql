-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 10, 2018 at 10:42 PM
-- Server version: 5.7.21-log
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
-- Database: `fcatdp`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactelements`
--
DROP TABLE `contactelements`;
CREATE TABLE `contactelements` (
  `id` int(11) NOT NULL,
  `name` varchar(250) COLLATE latin1_general_ci NOT NULL,
  `sensitivedata` tinyint(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dataaccessgroups`
--
DROP TABLE `dataaccessgroups`;

CREATE TABLE `dataaccessgroups` (
  `id` int(11) NOT NULL,
  `name` varchar(250) COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

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
(11, 'Academy HR Staff'),
(12, 'Students');

-- --------------------------------------------------------

--
-- Table structure for table `dataaccessgroups_processors`
--
DROP TABLE `dataaccessgroups_processors`;
CREATE TABLE `dataaccessgroups_processors` (
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
(2, 1008),
(12, 1006),
(1, 1),
(5, 1),
(7, 1),
(6, 1),
(9, 1),
(3, 1),
(2, 1),
(1, 1009),
(4, 1009),
(6, 1009),
(9, 1009),
(3, 1009),
(2, 1009),
(1, 1011),
(3, 1011),
(1, 1012),
(1, 1013),
(12, 1012),
(2, 1012),
(4, 1013),
(9, 1013),
(12, 1013),
(2, 1013);

-- --------------------------------------------------------

--
-- Table structure for table `dataelementsources`
--
DROP TABLE `dataelementsources`;
CREATE TABLE `dataelementsources` (
  `id` int(11) NOT NULL,
  `name` varchar(250) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `datatransfermethods`
--
DROP TABLE `datatransfermethods`;
CREATE TABLE `datatransfermethods` (
  `id` int(11) NOT NULL,
  `method` varchar(250) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

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
DROP TABLE `lawfulreasons`;
CREATE TABLE `lawfulreasons` (
  `id` int(11) NOT NULL,
  `reason` varchar(50) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

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
DROP TABLE parentelements;

CREATE TABLE `parentelements` (
  `id` int(11) NOT NULL,
  `name` varchar(250) COLLATE latin1_general_ci NOT NULL,
  `sensitivedata` tinyint(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `parentelements`
--

INSERT INTO `parentelements` (`id`, `name`, `sensitivedata`) VALUES
(1, 'Name', 0),
(2, 'Address', 0),
(3, 'Email Address', 0),
(4, 'Home Phone Number', 0);

-- --------------------------------------------------------

--
-- Table structure for table `parentelements_processors`
--
DROP TABLE parentelements_processors;
CREATE TABLE `parentelements_processors` (
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
(1008, 1),
(1009, 3),
(1009, 1),
(1013, 3),
(1013, 1);

-- --------------------------------------------------------

--
-- Table structure for table `processors`
--
DROP TABLE processors;
CREATE TABLE `processors` (
  `id` int(11) NOT NULL,
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
  `accessnotes` text COLLATE latin1_general_ci,
  `gdprstatement` varchar(250) COLLATE latin1_general_ci DEFAULT NULL,
  `datatransfermethod_id` int(11) NOT NULL,
  `contactuspage` varchar(250) COLLATE latin1_general_ci NOT NULL,
  `homepage` varchar(250) COLLATE latin1_general_ci DEFAULT NULL,
  `notes` text COLLATE latin1_general_ci
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `processors`
--

INSERT INTO `processors` (`id`, `name`, `supplier_id`, `purpose`, `lawfulreason_id`, `processingfrequency`, `accessedby`, `retention`, `processinglocation`, `gdprcontractinfo`, `gdprcompliant`, `accessnotes`, `gdprstatement`, `datatransfermethod_id`, `contactuspage`, `homepage`, `notes`) VALUES
(1, 'SISRA Analytics', 1, 'Monitor and track pupil progress and attainment', 1004, 'Up to 6 times per year following data collections, internal exams & external exams', 'School Leaders\r\nClass Teachers\r\nData Managers\r\nFCAT Subject Leads\r\n', '2 yrs after final exams', 'All data uploaded into SISRA services is stored in a private data centre owned and operated by SISRA Ltd for the express use of SISRA services. Servers are located in the SISRA head office in Birkenhead, England and are held in a secure area that is only accessible to SISRA data centre staff. \r\nSISRA Limited uses a combination of the Secure Hypertext Transfer Protocol (HTTPS) along with the Secure Sockets Layer (SSL) protocol to provide encrypted communication and secure identification of their web servers.', '', 1, 'All users have access to personal and sensitive data.\r\nData managers and School Leaders with \"admin\" accounts can add, edit and delete data.\r\nProcessor Support Staff have full access to all personal and sensitive data.', 'https://www.sisra.com/data-security', 4, '', NULL, NULL),
(2, 'ParentPay', 2, 'Online payments for school activities including school dinners and trips', 1, 'Daily Updates', 'Finance Staff\r\nParents\r\nCatering Staff', '', '', '', 1, 'https://www.parentpay.com/privacy-policy', 'https://www.parentpay.com/parentpay-and-gdpr', 0, '', NULL, NULL),
(1006, 'ClassCharts', 1008, 'Seating plan management\r\nClass behaviour management', 1004, 'Daily', NULL, '', '', '', 0, 'Parents can only see information relating to themselves and to their own children.  \r\nParents cannot access information relating to other students.\r\nStudents can only access information that is related to themselves.', '', 2, 'https://pages.classcharts.com/contact/', NULL, NULL),
(1003, 'Strictly Education', 1003, 'HR Payroll Services', 2, 'Monthly', 'Finance Staff\r\nHR Staff\r\nStrictly Education Support Staff\r\n\r\n', 'How long is data retained', 'Where is data stored', 'Link to agreement', 1, 'https://www.strictlyeducation.co.uk/privacy-policy', 'https://www.strictlyeducation.co.uk/gdpr-compliance', 0, '', NULL, NULL),
(1004, 'Data Processor ', 3, 'Demo Test', 3, 'Processing Schedule', 'Data Managers', 'Deleted when no longer required', 'Server in UK', 'No Details', 1, 'link', 'link', 0, '', NULL, NULL),
(1008, 'SIMS', 1007, '', 1004, 'Live MIS', NULL, 'As detailed in the records management and data retention policy.', 'Internal Servers Security? Backups?', '', 0, '', 'https://www.capita-sims.co.uk/gdpr', 1, 'https://www.capita-sims.co.uk/contact-us', NULL, NULL),
(1007, 'Inventry', 1005, 'Door access system\r\nVisitor Management', 1, 'Daily', NULL, '', '', '', 1, 'IT Support Staff have unrestricted access to all personal data.\r\nProcessor Support Staff can access data stored in the system through remote access which must be actively enabled by IT Support Staff.', 'https://inventry.co.uk/gdpr-policies/', 2, 'https://inventry.co.uk/contact-us/', NULL, NULL),
(1009, 'ClassDojo', 1010, 'Class management tool', 1004, '', NULL, '', '', '', 0, '', 'https://www.classdojo.com/en-gb/privacycenter/', 4, 'https://www.classdojo.com/en-gb/contact', NULL, NULL),
(1010, 'Early Excellence', 1011, '', 1004, '', NULL, '', '', '', 0, '', '', 4, '', NULL, NULL),
(1011, 'BASE', 1012, 'BASE provides insight that can be acted upon to support the development of every child. It allows you to quickly identify what children know and can do at the start of the school year, and helps you see what support they need to help them progress. Used again at the end of the same year, detailed reports help you demonstrate the progress children have made.\r\n\r\nThe initial BASE assessment is carried out within the first few weeks of the childâ€™s entry to Reception year (or equivalent e.g. KG2). The follow-up assessment, carried out in the last few weeks of the final term in the same year, provides information showing how each child has progressed during their time in the setting', 1004, '', NULL, '', '', '', 0, '', '', 4, 'https://www.cem.org/contact', 'https://www.cem.org/reception-baseline-assessment', NULL),
(1012, 'Spellodrome', 1013, 'Spellodrome encourages the development of critical spelling awareness. Visual, Phonological, Morphemic and Etymological.\r\nSpellodrome provides a safe, secure and engaging online world of learning for students. Rewards and certificates keep students motivated, with a wide range of spelling games based on a teacher-assigned custom word list.', 1004, '', NULL, '', '', '', 0, '', '', 4, 'http://www.3plearning.com/contact', 'http://www.3plearning.com/uk/spellodrome/', NULL),
(1013, 'Sumdog', 1015, 'Sumdog provides engaging adaptive learning for maths, spelling, and grammar.\r\nOur powerful learning engine adapts questions for each individual. It\'s aligned to the National Curriculum, CfE, Welsh LNF and Northern Irish curriculum. Meanwhile, our engaging activities are designed to motivate all pupils to learn.\r\nOur aim is to close the attainment gap - by helping every pupil reach their full potential.', 1004, 'When software is used.', NULL, 'Parent Users or Teacher Users may ask us to delete personal information held in a Sumdog Family or Sumdog School linked to their account by contacting us as described below. We will do this within 30 days of your request.', 'http://www.sumdog.com/en/Privacy_Policy/#storage\r\n\r\nInformation we collect on student users will only be stored and processed in the United States of America or the European Union. Depending on your location, we may need to transfer it to these places. Transfers of this information from the European Union to the USA will be done under the terms of the Model Contract Clauses approved by the European Commission.\r\n\r\nWe also collect information from teacher and parent users that doesn\'t relate to individual students - for example, in our online accounting systems. We may transfer this information to other countries. If you are from the European Union, and we need to transfer this information to countries outside the EU, we will undertake due diligence to ensure that the transfer complies with the UK Data Protection Act.\r\n\r\n', 'http://www.sumdog.com/en/Privacy_Policy', 0, 'http://www.sumdog.com/en/Privacy_Policy/', 'http://www.sumdog.com/en/Privacy_Policy', 1, 'https://sumdog.zendesk.com/hc/en-us', 'https://www.sumdog.com/', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `processors_schools`
--
DROP TABLE processors_schools;
CREATE TABLE `processors_schools` (
  `processor_id` int(11) NOT NULL,
  `school_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `processors_schools`
--

INSERT INTO `processors_schools` (`processor_id`, `school_id`) VALUES
(1003, 3),
(2, 3),
(1003, 11),
(2, 7),
(1008, 2),
(1008, 5),
(1, 3),
(1006, 11),
(2, 2),
(1004, 2),
(2, 6),
(1, 7),
(1003, 6),
(2, 11),
(1008, 4),
(1, 2),
(1003, 2),
(1003, 7),
(1003, 5),
(2, 5),
(1006, 2),
(1007, 2),
(1007, 6),
(1007, 7),
(1008, 6),
(1008, 3),
(1008, 7),
(1003, 0),
(1008, 0),
(1, 11),
(1008, 11),
(1007, 11),
(2, 12),
(1003, 12),
(1008, 12),
(1003, 13),
(1008, 13),
(1009, 5),
(1011, 4),
(1011, 5),
(1011, 6),
(1011, 11),
(1011, 12),
(1011, 13),
(1012, 5),
(1013, 5);

-- --------------------------------------------------------

--
-- Table structure for table `processors_staffelements`
--
DROP TABLE processors_staffelements;
CREATE TABLE `processors_staffelements` (
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
(1008, 3),
(1009, 1),
(1009, 4),
(1011, 1),
(1011, 4),
(1012, 1),
(1012, 3),
(1013, 1),
(1013, 3);

-- --------------------------------------------------------

--
-- Table structure for table `processors_studentelements`
--
DROP TABLE processors_studentelements;
CREATE TABLE `processors_studentelements` (
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
(1, 1024),
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
(1008, 1022),
(2, 1024),
(1006, 1024),
(1008, 1024),
(1, 1025),
(1006, 1025),
(1008, 1025),
(1009, 11),
(1009, 6),
(1009, 7),
(1009, 1),
(1009, 8),
(1009, 4),
(1009, 5),
(1011, 10),
(1011, 1025),
(1011, 1),
(1011, 4),
(1011, 5),
(1012, 1),
(1013, 10),
(1013, 1);

-- --------------------------------------------------------

--
-- Table structure for table `schools`
--
DROP TABLE schools;
CREATE TABLE `schools` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `schools`
--

INSERT INTO `schools` (`id`, `name`) VALUES
(1, 'Armfield Academy'),
(2, 'Aspire Academy'),
(3, 'Garstang Academy'),
(4, 'Gateway Academy'),
(5, 'Hambleton Academy'),
(6, 'Mereside Academy'),
(7, 'Montgomery High School'),
(11, 'Unity Academy'),
(12, 'Westcliff Primary School'),
(13, 'Westminster Academy');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--
DROP TABLE settings;
CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `sitename` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `processorslabel` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `supplierslabel` varchar(50) COLLATE latin1_general_ci NOT NULL
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
DROP TABLE staffelements;
CREATE TABLE `staffelements` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `sensitivedata` tinyint(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `staffelements`
--

INSERT INTO `staffelements` (`id`, `name`, `sensitivedata`) VALUES
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
DROP TABLE studentelements;
CREATE TABLE `studentelements` (
  `id` int(11) NOT NULL,
  `name` varchar(250) COLLATE latin1_general_ci DEFAULT NULL,
  `sensitivedata` tinyint(4) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `studentelements`
--

INSERT INTO `studentelements` (`id`, `name`, `sensitivedata`) VALUES
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
(1023, 'School History', 0),
(1025, 'Ethnicity', 1);

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--
DROP TABLE suppliers;
CREATE TABLE `suppliers` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `address` longtext COLLATE latin1_general_ci,
  `phone` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `email` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `dponame` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `dpoemail` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `homepage` varchar(250) COLLATE latin1_general_ci DEFAULT NULL,
  `contactuspage` varchar(250) COLLATE latin1_general_ci DEFAULT NULL,
  `notes` text COLLATE latin1_general_ci
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`id`, `name`, `address`, `phone`, `email`, `dponame`, `dpoemail`, `homepage`, `contactuspage`, `notes`) VALUES
(1, 'SISRA Ltd', ' Egerton House\r\n2 Tower Road\r\nBirkenhead\r\nMerseyside\r\nCH41 1FN', '08707576750', 'enquiries@sisra.com', '', 'enquiries@sisra.com', NULL, NULL, NULL),
(2, 'ParentPay Limited', 'ParentPay Limited\r\nRicoh Arena\r\nPhoenix Way\r\nCoventry\r\nCV6 6GE', '02476 994 820', '', 'The Data and Information Security Officer', '', NULL, NULL, NULL),
(1006, 'One Team Logic Limited', 'Unit 2\r\nTalbot Green Business Park\r\nHeol-y-Twyn\r\nTalbot Green\r\nCF72 9FG', '03306600757', 'info@oneteamlogic.co.uk', '', '', NULL, NULL, NULL),
(1003, 'Strictly Education Ltd', 'Marlborough Court,\r\nSunrise Parkway,\r\nLinford Wood,\r\nMilton Keynes,\r\nMK14 6DY', '0330 123 2540', 'enquire@strictlyeducation.co.uk', 'DPO Officer', 'enquire@strictlyeducation.co.uk', NULL, NULL, NULL),
(1009, 'Supplier Not In Database', '', '', '', '', '', NULL, NULL, NULL),
(1005, 'InVentry Limited', 'Unit 22-23\r\nHowley Business Park\r\nMorley\r\nLeeds\r\nLS27 0BZ', '0113 322 9253', 'info@inventry.co.uk', 'Data Protection Officer', 'dpo@inventry.co.uk', NULL, NULL, NULL),
(1007, 'Capita Business Services Ltd', 'Franklin Court\r\nStannard Way\r\nPriory Business Park\r\nCardington\r\nBEDFORD\r\nMK44 3JZ', '0800 170 7005', '', '', '', NULL, NULL, NULL),
(1008, 'EduKey', '10 West Street, \r\nFishguard\r\nPembrokeshire, \r\nSA65 9AE', '01348 800 100', 'support@edukey.co.uk', '', '', NULL, NULL, NULL),
(1010, 'ClassDojo', '735 Tehama Street\r\nSan Francisco, \r\nCalifornia, 94103\r\nUnited States of America', '', '', '', '', NULL, NULL, NULL),
(1011, 'Early Excellence Limited', 'The Old School,\r\nNew Hey Road,\r\nOutlane,\r\nHuddersfield\r\nHD3 3YJ', '01422311314', 'admin@earlyexcellence.com', '', '', NULL, NULL, NULL),
(1012, 'CEM - Centre for Evaluation & Monitoring', 'Durham University,\r\nUshaw College,\r\nDurham,\r\nDH7 9RH', '01913344185', 'enquiries@cem.dur.ac.uk', '', '', NULL, NULL, NULL),
(1013, '3P Learning', '4th Floor, \r\nBull Wharf, \r\nRedcliff Street, \r\nBristol,\r\nBS1 6QR', '01173701990', 'support@3plearning.co.uk', '', '', NULL, 'http://www.3plearning.com/contact/', NULL),
(1014, 'Test Supplier', '', '', '', '', '', NULL, '', NULL),
(1015, 'Sumdog Ltd', '43 Queensferry Street Lane\r\nEdinburgh,\r\nEH2 4PF', '01312261511', 'sales@sumdog.com', '', '', NULL, 'http://www.sumdog.com/en/teacher_prices/', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contactelements`
--
ALTER TABLE `contactelements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dataaccessgroups`
--
ALTER TABLE `dataaccessgroups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dataelementsources`
--
ALTER TABLE `dataelementsources`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `datatransfermethods`
--
ALTER TABLE `datatransfermethods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lawfulreasons`
--
ALTER TABLE `lawfulreasons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parentelements`
--
ALTER TABLE `parentelements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `processors`
--
ALTER TABLE `processors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schools`
--
ALTER TABLE `schools`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staffelements`
--
ALTER TABLE `staffelements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studentelements`
--
ALTER TABLE `studentelements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contactelements`
--
ALTER TABLE `contactelements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dataaccessgroups`
--
ALTER TABLE `dataaccessgroups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `dataelementsources`
--
ALTER TABLE `dataelementsources`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `datatransfermethods`
--
ALTER TABLE `datatransfermethods`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `lawfulreasons`
--
ALTER TABLE `lawfulreasons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1006;

--
-- AUTO_INCREMENT for table `parentelements`
--
ALTER TABLE `parentelements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `processors`
--
ALTER TABLE `processors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1014;

--
-- AUTO_INCREMENT for table `schools`
--
ALTER TABLE `schools`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `staffelements`
--
ALTER TABLE `staffelements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `studentelements`
--
ALTER TABLE `studentelements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1026;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1016;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
