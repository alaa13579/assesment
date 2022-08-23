-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2022 at 05:48 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `educationcentre`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `aid` int(255) NOT NULL,
  `answer` varchar(255) DEFAULT NULL,
  `ans_id` int(250) DEFAULT NULL,
  `course_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`aid`, `answer`, `ans_id`, `course_name`) VALUES
(1, 'Home Tool Markup Language', 1, 'html'),
(2, 'Hyperlinks and Text Markup Language', 1, 'html'),
(3, ' Hyper Text Markup Language', 1, 'html'),
(4, ' Hyper Train Markup Language', 1, 'html'),
(5, '  Mozilla', 2, 'html'),
(6, '  Google', 2, 'html'),
(7, 'Microsoft', 2, 'html'),
(8, 'W3C', 2, 'html'),
(9, '<head>', 3, 'html'),
(10, '<heading>', 3, 'html'),
(11, '<h6>', 3, 'html'),
(12, '<h1>', 3, 'html'),
(13, '<lb>', 4, 'html'),
(14, '<br>', 4, 'html'),
(15, '<break>', 4, 'html'),
(16, '<bk>', 4, 'html'),
(17, 'programming language', 5, 'java'),
(18, 'web designing language', 5, 'java'),
(19, 'OOPS language', 5, 'java'),
(20, 'general purpose language', 5, 'java');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(4) NOT NULL,
  `cat_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `cat_name`) VALUES
(1, 'HTML'),
(2, 'CSS'),
(3, 'JAVASCRIPT'),
(4, 'php');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `topic_name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `course_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `topic_name`, `description`, `course_name`) VALUES
(75, 'HTML Used', '<p><span style=\"font-size:20px\"><span style=\"color:#ffffff\"><strong><span style=\"background-color:#f39c12\">HTML</span></strong></span> is the language for&nbsp;<strong>describing the structure of Web pages</strong>. <span style=\"color:#ffffff\"><span style=\"background-color:#f39c12\">HTML</span></span> gives authors the means to: Publish online documents with headings, text, tables, lists, photos, etc. Retrieve online information via hypertext links, at the click of a button.</span></p>\r\n', 'HTML'),
(76, 'What is HTML?', '<ul>\r\n	<li><span style=\"font-size:18px\"><span style=\"color:#ffffff\"><strong><span style=\"background-color:#f39c12\">HTML</span></strong></span> stands for Hyper Text Markup Language</span></li>\r\n	<li><span style=\"font-size:18px\"><span style=\"color:#ffffff\"><strong><span style=\"background-color:#f39c12\">HTML</span></strong></span> is the standard markup language for creating Web pages</span></li>\r\n	<li><span style=\"font-size:18px\"><span style=\"color:#ffffff\"><strong><span style=\"background-color:#f39c12\">HTML</span></strong></span> describes the structure of a Web page</span></li>\r\n	<li><span style=\"font-size:18px\"><span style=\"color:#ffffff\"><strong><span style=\"background-color:#f39c12\">HTML</span></strong></span> consists of a series of elements</span></li>\r\n	<li><span style=\"font-size:18px\"><span style=\"color:#ffffff\"><strong><span style=\"background-color:#f39c12\">HTML</span></strong></span> elements tell the browser how to display the content.</span></li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><br />\r\n<br />\r\n<br />\r\n<br />\r\n&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', 'HTML'),
(77, 'Code', '<p>&lt;!DOCTYPE&nbsp;html&gt;<br />\r\n&lt;html&gt;<br />\r\n&lt;head&gt;<br />\r\n&lt;title&gt;Page Title&lt;/title&gt;<br />\r\n&lt;/head&gt;<br />\r\n&lt;body&gt;<br />\r\n<br />\r\n<br />\r\n<br />\r\n&lt;/body&gt;<br />\r\n&lt;/html&gt;</p>\r\n', 'HTML'),
(78, 'What is JavaScript used for?', '<p><span style=\"color:#ffffff\"><span style=\"font-size:22px\"><strong><span style=\"background-color:#f1c40f\">Javascript</span></strong></span></span><span style=\"font-size:20px\"><strong> is used by programmers across the world&nbsp;to create dynamic and interactive web content like applications and browsers. JavaScript is so popular that it&#39;s the most used programming language in the world.</strong></span></p>\r\n', 'JAVA SCRIPT'),
(79, 'Why Learn JavaScript?', '<ul>\r\n	<li><span style=\"font-size:20px\"><span style=\"color:#ffffff\"><strong><span style=\"background-color:#f1c40f\">JavaScript</span></strong></span> is used on both the client-side and the server-side. On the client-side, the code is run and displayed by the browser. On the server-side, Node.js is used.</span></li>\r\n	<li><span style=\"font-size:20px\"><span style=\"color:#ffffff\"><strong><span style=\"background-color:#f1c40f\">JavaScript</span></strong></span> is a platform-independent language. Any browser supporting JavaScript can run the code irrespective of the operating system</span></li>\r\n	<li><span style=\"font-size:20px\"><span style=\"color:#ffffff\"><strong><span style=\"background-color:#f1c40f\">JavaScript</span></strong></span> uses the&nbsp;<strong>just-in-time compilation</strong>&nbsp;technique. Since the compilation is handled at run time, <span style=\"color:#ffffff\"><strong><span style=\"background-color:#f1c40f\">JavaScript</span></strong></span> is considered an interpreted language.</span></li>\r\n	<li><span style=\"font-size:20px\"><span style=\"color:#ffffff\"><strong><span style=\"background-color:#f1c40f\">JavaScript</span></strong></span> is a dynamically typed language. That is, a variable containing a number may be reassigned to a string.</span></li>\r\n</ul>\r\n', 'JAVA SCRIPT'),
(80, 'JS Introduction', '<p><span style=\"font-size:20px\"><strong>The example below &quot;finds&quot; an <span style=\"color:#ffffff\"><span style=\"background-color:#f39c12\">HTML</span></span> element (with id=&quot;demo&quot;), and changes the element content (innerHTML) to &quot;Hello JavaScript&quot;:</strong></span></p>\r\n\r\n<p><strong><span style=\"font-size:16px\">Example:</span></strong></p>\r\n\r\n<p><span style=\"color:#c0392b\"><span style=\"font-size:14px\">document.getElementById(&quot;demo&quot;).innerHTML&nbsp;=&nbsp;&quot;Hello JavaScript&quot;;</span></span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><br />\r\n&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2>What Can JavaScript Do?</h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"font-size:18px\"><span style=\"color:#ffffff\"><span style=\"background-color:#f1c40f\">JavaScript</span></span> can change <span style=\"color:#ffffff\"><span style=\"background-color:#f39c12\">HTML</span></span> content.</span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"color:#c0392b\"><span style=\"font-size:14px\"><span style=\"font-size:16px\">onclick=&quot;document.getElementById(&#39;demo&#39;).innerHTML = &#39;Hello JavaScript!&#39;&quot;</span><span style=\"color:#c0392b\"><span style=\"font-size:14px\">&gt;Click Me!</span></span></span></span></p>\r\n\r\n<p>&nbsp;</p>\r\n', 'JAVA SCRIPT'),
(81, 'What is CSS?', '<ul>\r\n	<li><span style=\"font-size:20px\"><span style=\"color:#ffffff\"><strong><span style=\"background-color:#3498db\">CSS</span></strong></span> stands for Cascading Style Sheets</span></li>\r\n	<li><span style=\"font-size:20px\"><span style=\"color:#ffffff\"><strong><span style=\"background-color:#3498db\">CSS</span></strong></span> describes how HTML elements are to be displayed on screen, paper, or in other media</span></li>\r\n	<li><span style=\"font-size:20px\"><span style=\"color:#ffffff\"><strong><span style=\"background-color:#3498db\">CSS</span></strong></span> saves a lot of work. It can control the layout of multiple web pages all at once</span></li>\r\n	<li><span style=\"font-size:20px\">External stylesheets are stored in <span style=\"color:#ffffff\"><strong><span style=\"background-color:#3498db\">CSS</span></strong></span> files.</span></li>\r\n</ul>\r\n', 'CSS'),
(82, 'Why Use CSS?', '<p><span style=\"font-size:20px\"><span style=\"color:#ffffff\"><strong><span style=\"background-color:#3498db\">CSS</span></strong></span> is used to define styles for your web pages, including the design, layout and variations in display for different devices and screen sizes.</span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"font-size:20px\">Example:</span></p>\r\n\r\n<p><span style=\"font-size:18px\">In <span style=\"color:#ffffff\"><strong><span style=\"background-color:#f39c12\">HTML</span></strong></span></span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3>Hello CSS</h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"font-size:18px\">In <span style=\"color:#ffffff\"><strong><span style=\"background-color:#3498db\">CSS</span></strong></span></span></p>\r\n\r\n<p><span style=\"font-size:18px\">h3{</span></p>\r\n\r\n<p><span style=\"font-size:18px\">Color:white;</span></p>\r\n\r\n<p><span style=\"font-size:18px\">background-color:blue;</span></p>\r\n\r\n<p><span style=\"font-size:18px\">}</span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"font-size:18px\">Result</span></p>\r\n\r\n<p><span style=\"color:#ffffff\"><span style=\"font-size:22px\"><span style=\"background-color:#3498db\">Hello CSS</span></span></span></p>\r\n\r\n<p>&nbsp;</p>\r\n', 'CSS'),
(83, 'What You Should Already Know?', '<p><span style=\"font-size:18px\">Before you continue you should have a basic understanding of the following:</span></p>\r\n\r\n<ul>\r\n	<li><span style=\"color:#ffffff\"><span style=\"font-size:18px\"><strong><span style=\"background-color:#f39c12\">HTML</span></strong></span></span></li>\r\n	<li><span style=\"color:#ffffff\"><span style=\"font-size:18px\"><strong><span style=\"background-color:#3498db\">CSS</span></strong></span></span></li>\r\n	<li><span style=\"color:#ffffff\"><span style=\"font-size:18px\"><strong><span style=\"background-color:#f1c40f\">JavaScript</span></strong></span></span></li>\r\n</ul>\r\n', 'PHP'),
(84, 'What is PHP?', '<ul>\r\n	<li><span style=\"font-size:20px\"><strong><span style=\"background-color:#8e44ad\">PHP</span></strong> is an acronym for &quot;PHP: Hypertext Preprocessor&quot;</span></li>\r\n	<li><span style=\"font-size:20px\"><strong><span style=\"background-color:#9b59b6\">PHP</span></strong> is a widely-used, open source scripting language</span></li>\r\n	<li><span style=\"font-size:20px\"><strong><span style=\"background-color:#8e44ad\">PHP</span></strong> scripts are executed on the server</span></li>\r\n	<li><span style=\"font-size:20px\"><strong><span style=\"background-color:#8e44ad\">PHP</span></strong> is free to download and use</span></li>\r\n</ul>\r\n\r\n<ul>\r\n</ul>\r\n', 'PHP'),
(85, 'What Can PHP Do?', '<ul>\r\n	<li><span style=\"font-size:20px\"><strong><span style=\"background-color:#8e44ad\">PHP</span></strong> can generate dynamic page content</span></li>\r\n	<li><span style=\"font-size:20px\"><strong><span style=\"background-color:#8e44ad\">PHP</span></strong> can create, open, read, write, delete, and close files on the server</span></li>\r\n	<li><span style=\"font-size:20px\"><strong><span style=\"background-color:#8e44ad\">PHP</span></strong> can collect form data</span></li>\r\n	<li><span style=\"font-size:20px\"><strong><span style=\"background-color:#8e44ad\">PHP</span></strong> can send and receive cookies</span></li>\r\n	<li><span style=\"font-size:20px\"><strong><span style=\"background-color:#8e44ad\">PHP</span></strong> can add, delete, modify data in your database</span></li>\r\n	<li><span style=\"font-size:20px\"><strong><span style=\"background-color:#8e44ad\">PHP</span></strong> can be used to control user-access</span></li>\r\n	<li><span style=\"font-size:20px\"><strong><span style=\"background-color:#8e44ad\">PHP</span></strong> can encrypt data.</span></li>\r\n</ul>\r\n', 'PHP'),
(86, 'What is a PHP File?', '<ul>\r\n	<li><span style=\"font-size:20px\"><span style=\"color:#000000\"><strong><span style=\"background-color:#8e44ad\">PHP</span></strong></span> files can contain text, HTML, CSS, JavaScript, and PHP code</span></li>\r\n	<li><span style=\"font-size:20px\"><span style=\"color:#000000\"><strong><span style=\"background-color:#8e44ad\">PHP</span></strong></span> code is executed on the server, and the result is returned to the browser as plain HTML</span></li>\r\n	<li><span style=\"font-size:20px\"><span style=\"color:#000000\"><strong><span style=\"background-color:#8e44ad\">PHP</span></strong></span> files have extension &quot;<span style=\"color:#000000\"><span style=\"background-color:#8e44ad\">.</span><strong><span style=\"background-color:#9b59b6\">php</span></strong></span>&quot;.</span></li>\r\n</ul>\r\n', 'PHP'),
(87, 'ewfe', '<p>fwefwfefefeferffef</p>\r\n', 'asd');

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `id` int(11) NOT NULL,
  `faq_title` varchar(255) NOT NULL,
  `faq_description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`id`, `faq_title`, `faq_description`) VALUES
(1, 'Email', 'educationcentre@hotmail,com'),
(2, 'Phone Number', '+961 03010101'),
(3, 'Instagram', '@education_centre');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(255) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `email`) VALUES
(0, 'admin', 'admin', 'admin81@gmail.co'),
(1, 'Alaa', '13579', 'alaa.moualla123@gmail.com'),
(2, 'abdallah', '1234', 'abdallah.@gmail.com'),
(40, 'Malakeh', '6789', 'malakeh12@gmail.com'),
(41, 'Abdulrahman', '1122', 'Abdulrahman09@gmail.com'),
(43, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `programming_languages`
--

CREATE TABLE `programming_languages` (
  `id` int(255) NOT NULL,
  `language_name` varchar(255) DEFAULT NULL,
  `language_image` varchar(255) DEFAULT NULL,
  `language_description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `programming_languages`
--

INSERT INTO `programming_languages` (`id`, `language_name`, `language_image`, `language_description`) VALUES
(18, 'HTML', 'uploadimg/work2.png', 'Hyper Text Markup Language'),
(19, 'CSS', 'uploadimg/work3.png', 'Cascading Style Sheets'),
(20, 'PHP', 'uploadimg/work4.png', 'Hypertext Preprocessor'),
(21, 'JAVA SCRIPT', 'uploadimg/work1.png', 'JAVA SCRIPT');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `qid` int(250) NOT NULL,
  `question` varchar(255) DEFAULT NULL,
  `ans_id` int(255) DEFAULT NULL,
  `course_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`qid`, `question`, `ans_id`, `course_name`) VALUES
(1, 'what does html stands for', 1, 'html'),
(2, ' Who is making the Web standards?', 5, 'html'),
(3, ' Choose the correct HTML element for the largest heading:', 9, 'html'),
(4, 'What is the correct HTML element for inserting a line break?', 13, 'html');

-- --------------------------------------------------------

--
-- Table structure for table `question_test`
--

CREATE TABLE `question_test` (
  `id` int(255) NOT NULL,
  `question` varchar(255) NOT NULL,
  `opt1` varchar(255) NOT NULL,
  `opt2` varchar(255) NOT NULL,
  `opt3` varchar(255) NOT NULL,
  `opt4` varchar(255) NOT NULL,
  `answer` int(100) NOT NULL,
  `course_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question_test`
--

INSERT INTO `question_test` (`id`, `question`, `opt1`, `opt2`, `opt3`, `opt4`, `answer`, `course_id`) VALUES
(1, 'What does PHP stand for?', 'PHP: Hypertext Preprocessor', 'Private Home Page', 'Personal Hypertext Processor', 'i dont know', 0, 4),
(2, 'How do you write \"Hello World\" in PHP', ' Document.Write(\"Hello World\")', ' echo \"Hello World\"', '\"Hello World\"', 'i dont know', 1, 4),
(15, 'The practice of creating objects based on predefined classes is often referred to as..', ' class creation', 'object creation', 'object instantiation', 'class instantiation', 3, 4),
(20, 'HTML code is used to', 'structure the content of a web page', 'work with databases', 'draw', 'i don\'t know', 0, 1),
(21, 'Which is the largest size?', 'h1', 'h2', 'h3', 'h4', 0, 1),
(22, 'Where do you write the codes', 'Title', 'Head', 'Body', 'Not even one', 2, 1),
(23, 'What are style sheets used for?', 'to define the structure of web documents', 'to store the keywords of web pages', 'to script web pages', 'to control the look and feel of web documents', 3, 2),
(24, 'Why use CSS?', 'it helps create unique web pages', 'it helps make the web page\'s browser independent', 'it allows for the separation of style and content', 'not even one', 2, 2),
(25, 'Select the attribute that organizes the inline styling:', 'id', 'style', 'class', 'not even one', 1, 2),
(26, 'Which is the correct statement?', 'a markup language', 'a web browser', 'one of the most popular programming languages in the world', 'not even one', 2, 3),
(27, 'What tag do you need to use to enclose the JavaScript code?', 'script', 'code', 'body', 'style', 0, 3),
(28, 'Drag and drop to generate an alert box with the given text:\r\n\r\n-----(\"Hi there!\");', 'message', 'alert', 'echo', 'print', 1, 3),
(29, 'PHP is a...', 'Website', 'Server side programming language', 'Markup language', 'Home page', 1, 4),
(30, 'Can you run PHP on Linux and MaC?', 'Linux', 'MaC', 'Both', 'Not even on', 2, 4),
(31, 'Fill in the correct character.\r\n<\r\n---php\r\n\r\n  echo \'Hello\';\r\n\r\n?>', '.', '?', '{', '[', 1, 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `programming_languages`
--
ALTER TABLE `programming_languages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`qid`);

--
-- Indexes for table `question_test`
--
ALTER TABLE `question_test`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `aid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `programming_languages`
--
ALTER TABLE `programming_languages`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `question_test`
--
ALTER TABLE `question_test`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
