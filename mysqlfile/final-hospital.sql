-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2017 at 06:46 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospitall`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE `administrator` (
  `Username` char(200) NOT NULL,
  `Password` char(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`Username`, `Password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `bed`
--

CREATE TABLE `bed` (
  `BedID` int(11) NOT NULL,
  `RoomID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bed`
--

INSERT INTO `bed` (`BedID`, `RoomID`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 2),
(6, 2),
(7, 2),
(8, 2),
(9, 3),
(10, 3),
(11, 3),
(12, 3),
(13, 4),
(14, 4),
(15, 4),
(16, 4),
(17, 5),
(18, 5),
(19, 5),
(20, 5),
(21, 6),
(22, 6),
(23, 6),
(24, 6),
(25, 7),
(26, 7),
(27, 7),
(28, 7),
(29, 8),
(30, 8),
(31, 8),
(32, 8),
(33, 9),
(34, 9),
(35, 9),
(36, 9),
(37, 10),
(38, 10),
(39, 10),
(40, 10),
(41, 11),
(42, 11),
(43, 12),
(44, 12),
(45, 13),
(46, 13),
(47, 14),
(48, 14),
(49, 15),
(50, 15),
(51, 16),
(52, 16),
(53, 17),
(54, 17),
(55, 18),
(56, 18),
(57, 19),
(58, 19),
(59, 20),
(60, 20),
(61, 21),
(62, 22),
(63, 23),
(64, 24),
(65, 25),
(66, 26),
(67, 27),
(68, 28),
(69, 29),
(70, 30);

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `Gender` char(5) NOT NULL,
  `LastName` varchar(20) NOT NULL,
  `FirstName` char(20) NOT NULL,
  `DoctorID` int(11) NOT NULL,
  `PhoneNum` varchar(20) NOT NULL,
  `Address` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`Gender`, `LastName`, `FirstName`, `DoctorID`, `PhoneNum`, `Address`) VALUES
('M', 'Altman', 'Jardine', 1, '6099255685', '123 6th St. Melbourne, FL 32904'),
('M', 'Hubert', 'Jagger', 2, '1054212303', '7008 Mountainview Court East Brunswick, NJ 08816'),
('M', 'Benedict', 'Johansen', 3, '4601842176', '38 E. Argyle Street Palm Coast, FL 32137'),
('M', 'Curtis', 'Mccollom', 4, '8089068685', '7 Henry St. New Kensington, PA 15068'),
('M', 'David', 'Goltz', 5, '1242078412', '9248 8th Street Satellite Beach, FL 32937'),
('M', 'Greg', 'Stoval', 6, '8022336346', '32 Sunset Dr. Norristown, PA 19401'),
('M', 'Randal', 'Rishel', 7, '8983515463', '8568 Carriage St. Adrian, MI 49221'),
('M', 'Edmund', 'Timmerman', 8, '4558050111', '8098 Pine St. Bethpage, NY 11714'),
('M', 'Santo', 'Fitzhugh', 9, '9276268883', '6 Cactus Ave. Fernandina Beach, FL 32034'),
('M', 'Andrea', 'Smart', 10, '7388983599', '252 Berkshire Ave. Framingham, MA 01701'),
('F', 'Bridget', 'Enger', 11, '3708929940', '489 North Cambridge Street Wethersfield, CT 06109'),
('F', 'Agripina', 'Easterling', 12, '5187795405', '9811 Sherwood St. Dedham, MA 02026'),
('F', 'Lawana', 'Mahon', 13, '6808956322', '581 Southampton Street Harrisonburg, VA 22801'),
('F', 'Kecia', 'Kifer', 14, '1356559431', '95 Randall Mill Lane Hobart, IN 46342'),
('F', 'Classie', 'Dickman', 15, '3468148312', '9 Grant Ave. Kingsport, TN 37660'),
('F', 'Melaine', 'Onan', 16, '5386288110', '869 Adams Drive Farmingdale, NY 11735'),
('F', 'Dung', 'Sauers', 17, '9061401879', '812 Devon Street Hammonton, NJ 08037'),
('F', 'Jaimie', 'Immel', 18, '9150354394', '7911 Liberty Street Mebane, NC 27302'),
('F', 'Robbyn', 'Buechler', 19, '9366148113', '266 Vine Lane Zion, IL 60099'),
('F', 'Una', 'Jordahl', 20, '2753906469', '404 Thompson St. Bethpage, NY 11714'),
('serg', 'esrger', 'sdfgse', 123, '543657547', 'dshdrthrdh');

-- --------------------------------------------------------

--
-- Table structure for table `examined_by`
--

CREATE TABLE `examined_by` (
  `PatientID` int(11) NOT NULL,
  `DoctorID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `examined_by`
--

INSERT INTO `examined_by` (`PatientID`, `DoctorID`) VALUES
(1, 10),
(2, 6),
(3, 20),
(4, 14),
(5, 13),
(6, 8),
(7, 19),
(8, 15),
(9, 5),
(10, 5),
(11, 18),
(12, 12),
(13, 20),
(14, 16),
(15, 19),
(16, 14),
(17, 14),
(18, 19),
(19, 14),
(20, 5),
(21, 15),
(22, 20),
(23, 4),
(24, 9),
(25, 12),
(26, 12),
(27, 13),
(28, 19),
(29, 19),
(30, 13);

-- --------------------------------------------------------

--
-- Table structure for table `frontdesk`
--

CREATE TABLE `frontdesk` (
  `Username` char(200) NOT NULL,
  `Password` char(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `frontdesk`
--

INSERT INTO `frontdesk` (`Username`, `Password`) VALUES
('Lucy_3829', 'Test11111'),
('Mike_3892', 'Test22222');

-- --------------------------------------------------------

--
-- Table structure for table `medicalrecord`
--

CREATE TABLE `medicalrecord` (
  `MedicalIssue` char(50) NOT NULL,
  `DateOfExamination` date NOT NULL,
  `Prescription` char(200) NOT NULL,
  `RecordID` int(11) NOT NULL,
  `PatientID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medicalrecord`
--

INSERT INTO `medicalrecord` (`MedicalIssue`, `DateOfExamination`, `Prescription`, `RecordID`, `PatientID`) VALUES
('I want more detailed information.', '2016-08-28', 'I am counting my calories, yet I really want dessert.', 1, 1),
('Sometimes it is better to just walk away from thin', '2016-02-13', 'There was no ice cream in the freezer, nor did they have money to go to the store.', 2, 2),
('We need to rent a room for our party.', '2016-07-18', 'Tom got a small piece of pie.', 3, 3),
('I love eating toasted cheese and tuna sandwiches.', '2017-01-31', 'I want more detailed information.', 4, 4),
('I am never at home on Sundays.', '2016-12-12', 'Don\'t step on the broken glass.', 5, 5),
('I currently have 4 windows open up? and I don??t k', '2016-04-01', 'I currently have 4 windows open up? and I don??t know why.', 6, 6),
('The memory we used to share is no longer coherent.', '2017-04-18', 'The old apple revels in its authority.', 7, 7),
('A glittering gem is not enough.', '2016-05-02', 'I am never at home on Sundays.', 8, 8),
('I would have gotten the promotion, but my attendan', '2016-12-25', 'They got there early, and they got really good seats.', 9, 9),
('The river stole the gods.', '2016-11-17', 'She folded her handkerchief neatly.', 10, 10),
('She did not cheat on the test, for it was not the', '2017-11-29', 'Joe made the sugar cookies; Susan decorated them.', 11, 11),
('We have never been to Asia, nor have we visited Af', '2016-08-27', 'Malls are great places to shop; I can find everything I need under one roof.', 12, 12),
('This is a Japanese doll.', '2017-10-13', 'I will never be this young again. Ever. Oh damn? I just got older.', 13, 13),
('Cats are good pets, for they are clean and are not', '2016-10-09', 'Italy is my favorite country; in fact, I plan to spend two weeks there next year.', 14, 14),
('Lets all be unique together until we realise we ar', '2017-04-21', 'If I don??t like something, I??ll stay away from it.', 15, 15),
('Let me help you with your baggage.', '2017-09-24', 'Check back tomorrow; I will see if the book has arrived.', 16, 16),
('If you like tuna and tomato sauce- try combining t', '2016-11-21', 'He didn??t want to go to the dentist, yet he went anyway.', 17, 17),
('Where do random thoughts come from?', '2017-06-10', 'Writing a list of random sentences is harder than I initially thought it would be.', 18, 18),
('He told us a very exciting adventure story.', '2016-06-07', 'I love eating toasted cheese and tuna sandwiches.', 19, 19),
('Wednesday is hump day, but has anyone asked the ca', '2016-08-05', 'The clock within this blog and the clock on my laptop are 1 hour different from each other.', 20, 20),
('A purple pig and a green donkey flew a kite in the', '2016-09-20', 'Is it free?', 21, 21),
('The waves were crashing on the shore; it was a lov', '2016-09-15', 'This is the last random sentence I will be writing and I am going to stop mid-sent', 22, 22),
('How was the math test?', '2017-11-17', 'She borrowed the book from him many years ago and hasn\'t yet returned it.', 23, 23),
('I think I will buy the red car, or I will lease th', '2016-02-13', 'Sixty-Four comes asking for bread.', 24, 24),
('Two seats were vacant.', '2016-01-01', 'Yeah, I think it\'s a good environment for learning English.', 25, 25),
('She wrote him a long letter, but he didn\'t read it', '2016-01-18', 'If Purple People Eaters are real? where do they find purple people to eat?', 26, 26),
('It was getting dark, and we weren??t there yet.', '2016-02-09', 'I hear that Nancy is very pretty.', 27, 27),
('Italy is my favorite country; in fact, I plan to s', '2016-09-08', 'Wow, does that work?', 28, 28),
('The stranger officiates the meal.', '2016-12-07', 'This is a Japanese doll.', 29, 29),
('We have a lot of rain in June.', '2017-11-03', 'We have a lot of rain in June.', 30, 30),
('Tom got a small piece of pie.', '2017-04-01', 'I want to buy a onesie? but know it won??t suit me.', 31, 1),
('Abstraction is often one floor above you.', '2017-08-15', 'We have never been to Asia, nor have we visited Africa.', 32, 4),
('I really want to go to work, but I am too sick to', '2017-09-06', 'Two seats were vacant.', 33, 5),
('She always speaks to him in a loud voice.', '2016-06-25', 'I am happy to take your donation; any amount will be greatly appreciated.', 34, 7),
('Wow, does that work?', '2017-06-08', 'She did not cheat on the test, for it was not the right thing to do.', 35, 12),
('Should we start class now, or should we wait for e', '2016-05-20', 'She wrote him a long letter, but he didn\'t read it.', 36, 16),
('I am happy to take your donation; any amount will', '2017-07-01', 'Let me help you with your baggage.', 37, 19),
('I\'d rather be a bird than a fish.', '2016-02-12', 'He didn??t want to go to the dentist, yet he went anyway.', 38, 20),
('I often see the time 11:11 or 12:34 on clocks.', '2017-07-11', 'The waves were crashing on the shore; it was a lovely sight.', 39, 22),
('The quick brown fox jumps over the lazy dog.', '2017-09-18', 'I want to buy a onesie? but know it won??t suit me.', 40, 27);

-- --------------------------------------------------------

--
-- Table structure for table `nurse`
--

CREATE TABLE `nurse` (
  `Gender` char(5) NOT NULL,
  `NurseID` int(11) NOT NULL,
  `Address` char(50) NOT NULL,
  `NurseName` char(30) NOT NULL,
  `PhoneNum` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nurse`
--

INSERT INTO `nurse` (`Gender`, `NurseID`, `Address`, `NurseName`, `PhoneNum`) VALUES
('M', 1, '298 Summerhouse St. Medford, MA 02155', 'Elton Edie', '6696912559'),
('M', 2, '9373 Cactus St. Canfield, OH 44406', 'Moshe Mccrystal', '3934112606'),
('M', 3, '23 Cambridge Drive Mansfield, MA 02048', 'Micah Manchester', '3131830718'),
('M', 4, '176 St Paul Lane Cuyahoga Falls, OH 44221', 'Gerry Glance', '2339014309'),
('M', 5, '53 Hanover St. Absecon, NJ 08205', 'Jae Jeske', '1084948458'),
('M', 6, '538 Marsh Street Pearl, MS 39208', 'Royal Ruud', '6112528344'),
('M', 7, '73 Walnutwood Drive Madisonville, KY 42431', 'Eldridge Engh', '7916491385'),
('M', 8, '7137 South Sussex Avenue Hampton, VA 23666', 'Columbus Capshaw', '2691141393'),
('M', 9, '7455 Smoky Hollow St. West Lafayette, IN 47906', 'Young Yousef', '4491157033'),
('M', 10, '7453 Lilac St. Danville, VA 24540', 'Chuck Canfield', '7947468769'),
('F', 11, '311 Oakland Circle Iowa City, IA 52240', 'Alaina Atherton', '4906352696'),
('F', 12, '47 Glen Eagles St. Elizabeth, NJ 07202', 'Mallory Mckissick', '3551170976'),
('F', 13, '25 Taylor Court Copperas Cove, TX 76522', 'Libby Lafave', '5166872867'),
('F', 14, '682 Lawrence Dr. Coachella, CA 92236', 'Suzy Samms', '8517150294'),
('F', 15, '913 Smoky Hollow Drive Hyde Park, MA 02136', 'Damaris Dittrich', '2101022812'),
('F', 16, '33 Temple Ave. Chardon, OH 44024', 'Talitha Trickey', '1292087163'),
('F', 17, '54 Brewery Ave. Lincoln, NE 68506', 'Domonique Decesare', '6567846852'),
('F', 18, '2 Lake View Street Garfield, NJ 07026', 'Adrien Allshouse', '8385732634'),
('F', 19, '407 North Sugar St. Ashland, OH 44805', 'Irene Iman', '7122755056'),
('F', 20, '83 Fairground Street Naugatuck, CT 06770', 'Misty Mair', '2848562282'),
('fght', 123, 'drthdrth', 'sdfgeg', '4765475467');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `PatientID` int(11) NOT NULL,
  `Gender` char(5) NOT NULL,
  `PhoneNo` varchar(11) NOT NULL,
  `LastName` char(20) NOT NULL,
  `FirstName` char(20) NOT NULL,
  `Age` int(11) NOT NULL,
  `Address` char(50) NOT NULL,
  `Username` char(200) NOT NULL,
  `Password` char(200) NOT NULL,
  `RoomID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`PatientID`, `Gender`, `PhoneNo`, `LastName`, `FirstName`, `Age`, `Address`, `Username`, `Password`, `RoomID`) VALUES
(0, 'dfgfg', '54647764', 'dfgd', 'gbfg', 34, 'dnhdgndfgndfg', 'sdfhtym', 'drthfg', 18),
(1, 'M', '6811060706', 'Everson', 'Demarcus', 17, '84 Ridgewood Road Hummelstown, PA 17036', '111', '111', 1),
(2, 'M', '2033958292', 'Schmucker', 'Marlin', 60, '547 North Harvard St. Lakeland, FL 33801', '222', '222', 1),
(3, 'M', '9742124841', 'Delamater', 'Jacques', 31, '23 Branch Lane Twin Falls, ID 83301', '333', '333', 1),
(4, 'M', '9924723874', 'Nigro', 'Bryan', 51, '60 Franklin Ave. Elmhurst, NY 11373', '444', '444', 2),
(5, 'M', '1247920907', 'Chester', 'Emile', 39, '185 Swanson Street Littleton, CO 80123', '555', '555', 2),
(6, 'M', '4864536435', 'Debow', 'Devon', 30, '52 Buttonwood St. Deerfield, IL 60015', '666', '666', 3),
(7, 'M', '7167648728', 'Wyckoff', 'Ellis', 53, '14 Smith Lane Glenside, PA 19038', '777', '777', 3),
(8, 'M', '9444794195 ', 'Vass', 'Earle', 46, '7199 Surrey St. New Baltimore, MI 48047', '888', '888', 6),
(9, 'M', '3844108916', 'Jervis', 'Jonah', 56, '7168 Chestnut Ave. Woonsocket, RI 02895', '999', '999', 7),
(10, 'M', '4375360099', 'Mccawley', 'Agustin', 30, '615 North Beechwood Ave. Brick, NJ 08723', '1000', '1000', 10),
(11, 'M', '6040864329', 'Cottingham', 'Wilbert', 41, '14 North Glen Creek St. Saint Charles, IL 60174', '1111', '1111', 10),
(12, 'M', '4919002843', 'Tincher', 'Gary', 48, '755 Delaware St. Minneapolis, MN 55406', '2222', '2222', 10),
(13, 'M', '2107699910', 'Devereaux', 'Deon', 60, '835 Riverside Street Hopewell, VA 23860', '3333', '3333', 12),
(14, 'M', '4111634815', 'Chase', 'Erasmo', 55, '21 Selby Dr. Rock Hill, SC 29730', '4444', '4444', 12),
(15, 'M', '9115807841', 'Morvant', 'Jimmy', 37, '8997 Elizabeth Road Norman, OK 73072', '5555', '5555', 14),
(16, 'F', '4675534050', 'Yung', 'Chelsey', 47, '663 North Walnutwood Avenue Jackson, NJ 08527', '6666', '6666', 15),
(17, 'F', '7889186467', 'Coon', 'Chrystal', 60, '220 W. Buckingham Drive Rochester, NY 14606', '7777', '7777', 16),
(18, 'F', '6252807864', 'Bonelli', 'Oma', 37, '780 State Ave. Riverdale, GA 30274', '8888', '8888', 21),
(19, 'F', '9407355351', 'Mosbey', 'Barabara', 32, '90 Roehampton St. Clearwater, FL 33756', '9999', '9999', 23),
(20, 'F', '4073392675', 'Martineau', 'Signe', 43, '84 Oak Valley Ave. Windermere, FL 34786', '10000', '10000', 3),
(21, 'F', '5321342758', 'Asper', 'Dara', 55, '17 La Sierra St. Pembroke Pines, FL 33028', '11111', '11111', 25),
(22, 'F', '5698997158', 'Winsett', 'Kyra', 43, '611 Gartner Dr. Honolulu, HI 96815', '22222', '22222', 26),
(23, 'F', '7588645403', 'Wheatley', 'Carmelita', 32, '62 River Ave. Blackwood, NJ 08012', '33333', '33333', 27),
(24, 'F', '1333628757', 'Vanderhoff', 'Vicki', 43, '7627 Strawberry Rd. Menomonee Falls, WI 53051', '44444', '44444', 2),
(25, 'F', '4122784848', 'Fortune', 'Nancey', 48, '213 Cottage Ave. Palm Beach Gardens, FL 33410', '55555', '55555', 17),
(26, 'F', '5517421973', 'Woody', 'Marisol', 45, '9015 1st Road New Castle, PA 16101', '66666', '66666', 17),
(27, 'F', '2372731724', 'Alcantar', 'Charlette', 41, '44 Helen St. Dracut, MA 01826', '77777', '77777', 30),
(28, 'F', '8019547896', 'Ariza', 'Kimberlie', 45, '868 Bellevue Avenue Woburn, MA 01801', '88888', '88888', 29),
(29, 'F', '4277502728', 'Hosey', 'Sharee', 49, '85 La Sierra Dr. Brookline, MA 02446', '99999', '99999', 1),
(30, 'F', '1358980821', 'Ammann', 'Ai', 42, '9558 East Pilgrim St. Osseo, MN 55311', '100000', '100000', 9);

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `RoomID` int(11) NOT NULL,
  `Type` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`RoomID`, `Type`) VALUES
(1, 'standard'),
(2, 'standard'),
(3, 'standard'),
(4, 'standard'),
(5, 'standard'),
(6, 'standard'),
(7, 'standard'),
(8, 'standard'),
(9, 'standard'),
(10, 'standard'),
(11, 'premium'),
(12, 'premium'),
(13, 'premium'),
(14, 'premium'),
(15, 'premium'),
(16, 'premium'),
(17, 'premium'),
(18, 'premium'),
(19, 'premium'),
(20, 'premium'),
(21, 'private'),
(22, 'private'),
(23, 'private'),
(24, 'private'),
(25, 'private'),
(26, 'private'),
(27, 'private'),
(28, 'private'),
(29, 'private'),
(30, 'private');

-- --------------------------------------------------------

--
-- Table structure for table `takecareof`
--

CREATE TABLE `takecareof` (
  `NurseID` int(11) NOT NULL,
  `PatientID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `takecareof`
--

INSERT INTO `takecareof` (`NurseID`, `PatientID`) VALUES
(1, 5),
(1, 18),
(1, 21),
(3, 6),
(4, 7),
(4, 15),
(5, 2),
(5, 12),
(5, 16),
(5, 27),
(6, 10),
(6, 14),
(6, 17),
(7, 9),
(8, 11),
(10, 23),
(12, 24),
(12, 29),
(13, 8),
(13, 26),
(14, 1),
(15, 28),
(16, 3),
(16, 22),
(16, 25),
(17, 13),
(17, 20),
(18, 4),
(20, 19),
(20, 30);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrator`
--
ALTER TABLE `administrator`
  ADD PRIMARY KEY (`Username`);

--
-- Indexes for table `bed`
--
ALTER TABLE `bed`
  ADD PRIMARY KEY (`BedID`),
  ADD KEY `RoomID` (`RoomID`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`DoctorID`);

--
-- Indexes for table `examined_by`
--
ALTER TABLE `examined_by`
  ADD PRIMARY KEY (`PatientID`,`DoctorID`),
  ADD KEY `DoctorID` (`DoctorID`);

--
-- Indexes for table `frontdesk`
--
ALTER TABLE `frontdesk`
  ADD PRIMARY KEY (`Username`);

--
-- Indexes for table `medicalrecord`
--
ALTER TABLE `medicalrecord`
  ADD PRIMARY KEY (`RecordID`),
  ADD KEY `PatientID` (`PatientID`);

--
-- Indexes for table `nurse`
--
ALTER TABLE `nurse`
  ADD PRIMARY KEY (`NurseID`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`PatientID`),
  ADD KEY `RoomID` (`RoomID`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`RoomID`);

--
-- Indexes for table `takecareof`
--
ALTER TABLE `takecareof`
  ADD PRIMARY KEY (`NurseID`,`PatientID`),
  ADD KEY `PatientID` (`PatientID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bed`
--
ALTER TABLE `bed`
  ADD CONSTRAINT `BED_ibfk_1` FOREIGN KEY (`RoomID`) REFERENCES `room` (`RoomID`);

--
-- Constraints for table `examined_by`
--
ALTER TABLE `examined_by`
  ADD CONSTRAINT `examined_by_ibfk_1` FOREIGN KEY (`PatientID`) REFERENCES `patient` (`PatientID`),
  ADD CONSTRAINT `examined_by_ibfk_2` FOREIGN KEY (`DoctorID`) REFERENCES `doctor` (`DoctorID`);

--
-- Constraints for table `medicalrecord`
--
ALTER TABLE `medicalrecord`
  ADD CONSTRAINT `MEDICALRECORD_ibfk_1` FOREIGN KEY (`PatientID`) REFERENCES `patient` (`PatientID`);

--
-- Constraints for table `patient`
--
ALTER TABLE `patient`
  ADD CONSTRAINT `PATIENT_ibfk_1` FOREIGN KEY (`RoomID`) REFERENCES `room` (`RoomID`);

--
-- Constraints for table `takecareof`
--
ALTER TABLE `takecareof`
  ADD CONSTRAINT `takeCareOF_ibfk_1` FOREIGN KEY (`NurseID`) REFERENCES `nurse` (`NurseID`),
  ADD CONSTRAINT `takeCareOF_ibfk_2` FOREIGN KEY (`PatientID`) REFERENCES `patient` (`PatientID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
