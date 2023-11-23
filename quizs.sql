-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 23, 2023 at 05:48 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quizs`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(7) NOT NULL,
  `username` varchar(55) NOT NULL,
  `password` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `quiz_desc`
--

CREATE TABLE `quiz_desc` (
  `quiz_id` int(11) NOT NULL,
  `quiz_name` varchar(55) NOT NULL,
  `quiz_picture` varchar(255) NOT NULL,
  `quiz_title` varchar(55) NOT NULL,
  `quiz_text` varchar(255) NOT NULL,
  `quiz_mins` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quiz_desc`
--

INSERT INTO `quiz_desc` (`quiz_id`, `quiz_name`, `quiz_picture`, `quiz_title`, `quiz_text`, `quiz_mins`) VALUES
(2, 'SQL', 'images/ed759b116308ae222b6994ea766c6b6cmysqql.jpg', 'SQL Quiz', 'Challenge your Database Skills with this MySQL Quiz', '60'),
(3, 'PHP', 'images/7b45608f1afa8dd32b05c6680be727e8php-logo.jpg', 'PHP Quizzes', 'Learn doing php coding haystack sandbox...', '60');

-- --------------------------------------------------------

--
-- Table structure for table `quiz_question`
--

CREATE TABLE `quiz_question` (
  `id` int(11) NOT NULL,
  `question_no` int(5) NOT NULL,
  `question_text` varchar(255) NOT NULL,
  `optiona` varchar(255) NOT NULL,
  `optionb` varchar(255) NOT NULL,
  `optionc` varchar(255) NOT NULL,
  `optiond` varchar(255) NOT NULL,
  `answer` varchar(255) NOT NULL,
  `quiz_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quiz_question`
--

INSERT INTO `quiz_question` (`id`, `question_no`, `question_text`, `optiona`, `optionb`, `optionc`, `optiond`, `answer`, `quiz_name`) VALUES
(7, 1, 'What does SQL stand for?', 'Structured Question Language', 'Structured Query Language', 'Sequential Query Language', 'Simple Query Language', 'Structured Query Language', 'SQL'),
(8, 2, 'Which command is used to create a new database in MySQL?', 'ADD DATABASE', 'CREATE DB', 'MAKE DATABASE', 'CREATE DATABASE', 'CREATE DATABASE', 'SQL'),
(9, 3, 'Which clause is used to filter records in a SELECT statement?', 'ORDER BY', 'WHERE', 'GROUP BY', 'HAVING', 'WHERE', 'SQL'),
(10, 4, 'What is the default port number for MySQL?', '3306', '5432', '8080', '404', '3306', 'SQL'),
(11, 5, 'Which statement is used to delete a table in MySQL?', 'DROP TABLE', 'DELETE TABLE', 'REMOVE TABLE', 'ERASE TABLE', 'DROP TABLE', 'SQL'),
(12, 6, 'Which keyword is used to retrieve unique records in a SELECT query?', 'UNIQUE', 'DISTINCT', 'DIFFERENT', 'UNIQUEVALUES', 'DISTINCT', 'SQL'),
(13, 7, 'What is the purpose of the MySQL function COUNT()?', 'Calculates the average value of a column', 'Counts the number of rows in a table', 'Retrieves the maximum value from a column', 'Returns the sum of values in a column', 'Counts the number of rows in a table', 'SQL'),
(14, 8, 'Which data type would you use to store a date and time in MySQL?', 'DATE', 'DATETIME', 'TIMESTAMP', 'TIME', 'DATETIME', 'SQL'),
(15, 9, 'What does the MySQL command UPDATE do?', 'Adds new records to a table', 'Deletes records from a table', 'Modifies existing records in a table', 'Retrieves data from a table', 'Modifies existing records in a table', 'SQL'),
(16, 10, 'Which clause is used to sort the result set in ascending or descending order?', 'ARRANGE BY', 'GROUP BY', 'ORDER BY', 'SORT BY', 'ORDER BY', 'SQL'),
(17, 11, 'What is the function of the MySQL JOIN clause?', 'Combines rows from different tables based on a related column', 'Deletes rows from a table', 'Adds new columns to a table', 'Updates existing records in a table', 'Combines rows from different tables based on a related column', 'SQL'),
(18, 12, 'What is the purpose of the MySQL INSERT INTO statement?', 'Modifies existing records in a table', 'Adds new records to a table', 'Deletes records from a table', 'Retrieves specific data from a table', 'Adds new records to a table', 'SQL'),
(19, 13, 'What is the role of the MySQL GROUP BY clause?', 'Sorts the result set in ascending order', 'Filters records based on specified criteria', 'Groups rows that have the same values into summary rows', 'Deletes duplicate rows from a table', 'Groups rows that have the same values into summary rows', 'SQL'),
(20, 14, 'Which MySQL command is used to display all databases?', 'LIST DATABASES', 'SHOW DATABASES', 'DISPLAY DATABASES', 'SELECT DATABASES', 'SHOW DATABASES', 'SQL'),
(21, 15, 'What is the purpose of the MySQL LIMIT clause?', 'Adds a limit to the number of tables displayed', 'Restricts the number of records returned in a query', 'Limits the number of columns in a table', 'Sets a maximum size for the database', 'Restricts the number of records returned in a query', 'SQL'),
(22, 16, 'Which statement is used to change the name of a table in MySQL?', 'MODIFY TABLE', 'RENAME TABLE', 'CHANGE TABLE NAME', 'ALTER TABLE NAME', 'RENAME TABLE', 'SQL'),
(23, 17, 'In MySQL, what is the purpose of the UNION operator?', 'Combines two or more SELECT statements and returns distinct rows', 'Concatenates strings in a column', 'Performs division between two values', 'Joins tables based on specified conditions', 'Combines two or more SELECT statements and returns distinct rows', 'SQL'),
(24, 18, 'What is the purpose of the SQL JOIN clause in a database query?', 'Combining multiple tables based on a specified condition', 'Filtering rows based on a specific criteria', 'Rearranging the order of rows in a table', 'Grouping rows into subsets based on values', 'Combining multiple tables based on a specified condition', 'SQL'),
(25, 19, 'What does the SQL HAVING clause primarily function as?', 'Filters rows before grouping in a query', 'Sorts rows in ascending or descending order', 'Filters grouped rows based on specified conditions', 'Restricts the number of rows returned in a query', 'Filters grouped rows based on specified conditions', 'SQL'),
(26, 20, 'In SQL, which statement is used to add a new column to an existing table?', 'INSERT COLUMN', 'MODIFY COLUMN', 'ADD COLUMN', 'APPEND COLUMN', 'ADD COLUMN', 'SQL'),
(27, 1, 'What does PHP stand for?', 'Personal Home Page', 'Preprocessed Hypertext Page', 'PHP: Hypertext Preprocessor', 'Private Hosting Platform', 'PHP: Hypertext Preprocessor', 'PHP'),
(28, 2, 'Which symbol is used to denote the start of a PHP code block?', '<>', '{}', '()', '<?php ?>', '<?php ?>', 'PHP'),
(29, 3, 'Which function is used to output text in PHP?', 'print()', 'display()', 'echo()', 'printf()', 'echo()', 'PHP'),
(30, 4, 'Which of the following is used to comment a single line in PHP?', '//', '<!-- -->', '///--', ':', '//', 'PHP'),
(31, 5, 'What is the correct way to start a session in PHP?', 'start_session();', 'session_start();', 'init_session();', 'begin_session();', 'session_start();', 'PHP'),
(32, 6, 'What is the PHP operator used for concatenation?', '.', '+', '&', ':', '.', 'PHP'),
(33, 7, 'What does the $_GET superglobal variable do in PHP?', 'Retrieves variables from the server', 'Retrieves variables from a form submitted with the GET method', 'Stores cookies', 'Stores session variables', 'Retrieves variables from a form submitted with the GET method', 'PHP'),
(34, 8, 'Which PHP function is used to establish a database connection?', 'connect_db()', 'db_open()', 'create_connection()', 'mysqli_connect()', 'mysqli_connect()', 'PHP'),
(35, 9, 'What is the default file extension for PHP files?', '.html', '.php', '.xls', '.ph', '.php', 'PHP'),
(36, 10, 'What is the purpose of the if statement in PHP?', 'To execute code based on whether a condition is true or false', 'To repeat a block of code a specified number of times', 'To create a loop that always executes at least once', 'To check the data type of a variable', 'To execute code based on whether a condition is true or false', 'PHP'),
(37, 11, 'What is the primary function of the switch statement in PHP?', 'To execute code based on multiple conditions', 'To terminate the execution of a loop', 'To compare two variables', 'To define a default value for a variable', 'To execute code based on multiple conditions', 'PHP'),
(38, 12, 'In PHP, which statement is used to exit the current loop iteration and continue with the next iteration?', 'break', 'skip', 'stop', 'continue', 'continue', 'PHP'),
(39, 13, 'What is the purpose of the else if statement in PHP?', 'To terminate the execution of the program', 'To define an alternate condition if the initial condition is false', 'To concatenate strings', 'To declare a new variable', 'To define an alternate condition if the initial condition is false', 'PHP'),
(40, 14, 'Which PHP comparison operator checks if both the value and the type are equal?', '==', '===', '=!', '!=', '===', 'PHP'),
(41, 15, 'In PHP, the ?: is known as:', 'The ternary operator', 'The null coalescing operator', 'The spaceship operator', 'The increment operator', 'The ternary operator', 'PHP'),
(42, 16, 'What is the function of the isset() function in PHP?', 'Checks if a variable is empty', 'Checks if a variable is set and is not NULL', 'Checks if a variable is numeric', 'Converts a string to lowercase', 'Checks if a variable is set and is not NULL', 'PHP'),
(43, 17, 'What does the default keyword represent in a switch statement?', 'Executes when none of the cases match the given value', 'Indicates the default data type for a variable', 'Stops the execution of the switch statement', 'Defines the starting point of the switch statement', 'Executes when none of the cases match the given value', 'PHP'),
(44, 18, 'Which operator in PHP is used for exponentiation?', '^', '**', '^^', '//', '**', 'PHP'),
(45, 19, 'What will be the result of the expression ($x == 5) && ($y == 10) if $x is 5 and $y is 10?', 'True', 'False', 'Error', 'Null', 'True', 'PHP'),
(46, 20, 'In PHP, what does the !== operator check for?', 'Equality in value and type', 'Inequality in value and type', 'Inequality in value but not in type', 'Equality in value but not in type', 'Equality in value and type', 'PHP');

-- --------------------------------------------------------

--
-- Table structure for table `quiz_results`
--

CREATE TABLE `quiz_results` (
  `id` int(5) NOT NULL,
  `username` varchar(55) NOT NULL,
  `quiz_name` varchar(55) NOT NULL,
  `total_question` varchar(55) NOT NULL,
  `correct_answer` varchar(55) NOT NULL,
  `quiz_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quiz_results`
--

INSERT INTO `quiz_results` (`id`, `username`, `quiz_name`, `total_question`, `correct_answer`, `quiz_date`) VALUES
(1, 'Peter', 'SQL', '20', '17', '2023-11-20'),
(2, 'kevin21', 'SQL', '20', '18', '2023-11-23');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `firstname` varchar(55) NOT NULL,
  `lastname` varchar(55) NOT NULL,
  `middlename` varchar(55) NOT NULL,
  `course` varchar(55) NOT NULL,
  `yearlevel` varchar(55) NOT NULL,
  `subject` varchar(55) NOT NULL,
  `section` varchar(55) NOT NULL,
  `address` varchar(55) NOT NULL,
  `contactnumber` varchar(55) NOT NULL,
  `username` varchar(55) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `firstname`, `lastname`, `middlename`, `course`, `yearlevel`, `subject`, `section`, `address`, `contactnumber`, `username`, `password`, `user_image`) VALUES
(1, 'Efraim', 'Gondraneos', 'Cequeña', 'BSIT', '3', 'Integrative Programming', '303I', 'Quezon City', '0994655879', 'user21', '$2y$10$WRpemWCoPcv15eSsHy9YiecwvOiGTvnbOPgDVlVqZnSF5KpcFWSAC', ''),
(2, 'wesa', 'wesa', 'wesa', 'BSIT', '2', 'we', 'we', 'we', '23', 'admin', '$2y$10$9afjssSCuC/rx81Pf8QcxOgrI2y3de2Etp.6xkXRO1eteLOtw32FO', ''),
(3, 'John', 'Doe', 'Smith', 'BSCpE', '4', 'SAP', '401I', 'Mandaluyong', '12345678901', 'john', '$2y$10$z5Yb7zz3HT1RMNsVRTqKM.igsy.P/Ue9BnZLykgkLL2mbwzB/pVxy', ''),
(4, 'Jane', 'Doe', 'Smith', 'BSCpE', '2', 'Elective 2', '202I', 'Mandaluyong', '0958 669 8789', 'jane', '$2y$10$/lbw91MkmSZ62e2R58e16uHhIDubjSHQF4Ps.615tNouqnGIrseWS', ''),
(5, 'Joseph', 'Israel', 'Efraim', 'BSCpE', '1', 'Integrative Programming', '303I', 'Mandaluyong', '0945 587 6542', 'joseph', '$2y$10$tr40SUB3V5HUudGjoHW6UeR3WHyzsgXx80lOMRMbKeoHYWDDMNcLK', ''),
(6, 'asdasdsada232@#', 'adsasdsa', 'asdasdasd', 'BSEcE', '3', 'asdasdas', 'asddasdas', 'asddasd', '2323 232 3232', 'awe', '$2y$10$I7X1BjYPfhHIN5Kw.Yh4sO8c05LXojSSzcN76Ck5MehE6lEuxrdQ2', ''),
(7, 'Samantha', 'Pena', 'Ojeda', 'BSCpE', '2', 'Integ', '303I', 'Mandaluyong', '0945 878 7565', 'sam21', '$2y$10$CDUAM7KxMKo/pItPZ1eYZ.gd8UHhZxR1GrocnE7graREut39VJslW', ''),
(8, 'Kevin', 'Gallaron', 'Arabit', 'BSIT', '1', 'Autocad', '101I', 'Manila', '0945 686 5987', 'kevin21', '$2y$10$S3gTqFeH1nHay1TqohT2yuk857hfnIsDzFJUByOk.LYCmISWOgFsm', 'images/08044d8c2d65af3fc5f68526708e77e9kevin.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quiz_desc`
--
ALTER TABLE `quiz_desc`
  ADD PRIMARY KEY (`quiz_id`);

--
-- Indexes for table `quiz_question`
--
ALTER TABLE `quiz_question`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quiz_results`
--
ALTER TABLE `quiz_results`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `quiz_desc`
--
ALTER TABLE `quiz_desc`
  MODIFY `quiz_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `quiz_question`
--
ALTER TABLE `quiz_question`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `quiz_results`
--
ALTER TABLE `quiz_results`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
