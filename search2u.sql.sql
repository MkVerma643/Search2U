-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2016 at 05:07 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `search2u`
--

-- --------------------------------------------------------

--
-- Table structure for table `db`
--

CREATE TABLE `db` (
  `id` int(11) NOT NULL,
  `link` varchar(100) NOT NULL,
  `title` text NOT NULL,
  `body` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db`
--

INSERT INTO `db` (`id`, `link`, `title`, `body`) VALUES
(1, 'https://www.google.co.in/', 'Google', 'Google is an American multinational technology company specializing in Internet-related services and products that include online advertising technologies, search, cloud computing, software, and hardware.'),
(3, 'https://in.yahoo.com/', 'Yahoo', 'Yahoo Inc. is an American multinational technology company headquartered in Sunnyvale, California. Yahoo was founded by Jerry Yang and David Filo in January 1994 and was incorporated on March 2, 1995.'),
(4, 'http://in.nec.com/', 'NEC', 'NEC Corporation is a Japanese multinational provider of information technology services and products, headquartered in Minato, Tokyo, Japan.'),
(5, 'http://www.nttdata.com/', 'NTT DATA', 'NTT DATA Corporation is a Japanese system integration company and a subsidiary of Nippon Telegraph and Telephone. Nippon Telegraph and Telephone Public Corporation, a predecessor of NTT, started Data Communications business in 1967.'),
(6, 'http://www.moneycontrol.com/', 'Moneycontrol', 'Moneycontrol is India''s leading financial information source. Manage your finance with our online Investment Portfolio, Live Stock Price, Stock Trading news'),
(7, 'http://www.orange-business.com/', 'Orange Business Services', 'Orange Business Services, the business services arm of Orange S.A., is a global integrator of communications products and services for multinational corporations.'),
(8, 'https://www.t-systems.com/', 'T-Systems', 'T-Systems is a German global IT services and consulting company headquartered in Frankfurt. Founded as a WASTE support, it is a subsidiary of Deutsche Telekom.'),
(9, 'http://www.tcs.com/\r\n', 'Tata Consultancy Services', 'Tata Consultancy Services Limited is an Indian multinational information technology service, consulting and business solutions company headquartered in Mumbai, Maharashtra. It is a subsidiary of the Tata Group and operates in 46 countries.'),
(10, 'https://timscdrmumbai.in/', 'Thakur Institute of Management Studies, Career Development and Research', 'Thakur Institute of Management Studies, Career Development and Research, Kanidivali East, Mumbai. Post Graduate course in Computer Science IT Education'),
(11, 'https://tcetmumbai.in/', 'Thakur College of Science & Commerce', 'Thakur College of Engineering & Technology (TCET) was established in the Academic year 2001-02 with a clear objective of providing quality technical'),
(12, 'http://www.techmahindra.com/', 'Tech Mahindra', 'Tech Mahindra Limited is an Indian multinational provider of information technology, networking technology solutions and Business Process Outsourcing to the telecommunications industry. '),
(13, 'http://www.justdial.com/', 'Just Dial Limited', 'Justdial India''s local search engine provides Online Shopping, ticket booking for Events, Flights, Hotels, Bus, Cab. You can also order Grocery, Food, Books. Justdial is India''s leading local search destination.'),
(14, 'http://www.dell.com/', 'Dell', 'Dell Inc. was an American privately owned multinational computer technology company based in Round Rock, Texas, United States, that developed, sold, repaired, and supported computers and related products and services.'),
(15, 'http://www.youtube.com', 'Youtube', 'YouTube is an American video-sharing website headquartered in San Bruno, California, United States. The service was created by three former PayPal employees in February 2005. In November 2006, it was bought by Google for US$1.65 billion.'),
(16, 'http://www.wipro.com/india', 'Wipro', 'Wipro Limited is an Indian Information Technology Services corporation headquartered in Bangalore, India. In 2013, Wipro demerged its non-IT businesses into a separate companies to bring in more focus on independent businesses.'),
(17, 'https://www.microsoft.com/en-in/', 'Microsoft Corporation India Pvt. Ltd.', 'Microsoft Corporation is an American multinational technology company headquartered in Redmond, Washington, that develops, manufactures, licenses, supports and sells computer software, consumer electronics and personal computers and services. Its best known software products are the Microsoft Windows line of operating systems, Microsoft Office office suite, and Internet Explorer and Edge web browsers. Its flagship hardware products are the Xbox video game consoles and the Microsoft Surface tablet lineup. As of 2011, it was the world''s largest software maker by revenue, and one of the world''s most valuable companies.'),
(18, 'https://www.oracle.com/', 'Oracle Financial Services Software Limited', 'Oracle offers a comprehensive and fully integrated stack of cloud applications and platform services.\r\nAddress: Nirlon Compound, Off Western Express Highway, Near Hub Mall, Goregaon East, Mumbai Suburban, Mumbai, Maharashtra 400063'),
(19, 'http://go.sap.com/', 'SAP SE', 'SAP SE is a German multinational software corporation that makes enterprise software to manage business operations and customer relations.'),
(20, 'http://www.vmware.com/in/products.html', 'Vmware', 'With the VMware Cross-Cloud Architecture™ and solutions for the data center, mobility and security, VMware enables enterprises to master a software-defined approach to business and IT. ... It brings together VMware’s compute, storage and network virtualization into a natively \r\nAddress: G Block BKC, Bandra Kurla Complex, Bandra East, Mumbai, Maharashtra 400051\r\nPhone:098333 50374'),
(22, 'https://www.symantec.com/', 'Symantec', 'Symantec Corporation is an American technology company headquartered in Mountain View, California, United States.'),
(23, 'https://www.hcltech.com/', 'HCL Technologies', 'HCL Technologies Limited is an Indian multinational IT services company, headquartered in Noida, Uttar Pradesh, India. It is a subsidiary of HCL Enterprise.'),
(24, 'https://www.fiserv.com/', 'Fiserv', 'Fiserv, Inc., is an American provider of financial services technology. The company''s clients include banks, thrifts, credit unions, securities broker dealers, leasing and finance companies, and retailers, among others.'),
(25, 'http://intuit.in/', 'Intuit', 'Intuit Inc. is a business and financial software company that develops and sells financial, accounting and tax preparation software and related services for small businesses, accountants and individuals.'),
(26, 'http://www.amadeus.in/', 'Amadeus IT Group', 'Amadeus IT Group SA /æm??de??s a? ti? ?r?p/ is a major European IT Provider for the global travel and tourism industry.'),
(27, 'http://www.amadeus.in/', 'Amadeus IT Group', 'Amadeus IT Group SA is a major European IT Provider for the global travel and tourism industry.'),
(28, 'http://www.ca.com/', 'CA Technologies', 'CA Technologies, formerly known as Computer Associates International, Inc. and CA, Inc., is an American multinational publicly held corporation headquartered in New York City. '),
(29, 'https://www.infosys.com/', 'Infosys', 'Infosys Limited is an Indian multinational corporation that provides business consulting, information technology and outsourcing services. It has the main headquarter in Bengaluru, Karnataka.'),
(30, 'https://www.lntinfotech.com/', 'Larsen & Toubro Infotech', 'L&T Infotech is a Global Enterprise IT Solutions and Digital Services provider, solving complex business and technology challenges at the convergence of digital'),
(31, 'https://www.cognizant.com/', 'Cognizant', 'Cognizant Technology Solutions Corp is an American based multinational corporation that provides custom information technology, consulting, and business process outsourcing services. It is headquartered in Teaneck, New Jersey, United States.'),
(32, 'https://en.wikipedia.org/wiki/IGATE', 'IGATE', 'IGATE is an IT services company, headquartered in Bridgewater, New Jersey. The firm operates in North America, Asia, Europe, Japan and Australia, providing technology consultancy and services.');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `username` text,
  `email` text,
  `feedback` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`username`, `email`, `feedback`) VALUES
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `help`
--

CREATE TABLE `help` (
  `title` text,
  `body` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `help`
--

INSERT INTO `help` (`title`, `body`) VALUES
('Set your default search engine', '1. On your computer, open Chrome.\r\n2. At the top right, click More More and then Settings.\r\n3. In the "Search" section, next to your current default search engine, click the Down arrow Down Arrow.\r\n4. Select a new default search engine.\r\n5. If you''ve tried to set your search engine but it doesn''t work, you may have malware. '),
('Add, edit, or remove search engines', 'On your computer, open Chrome.\r\n1. At the top right, click More More and then Settings.\r\n2. In the "Search" section, lick Manage search engines.\r\n3. Under "Other search engines" you can:\r\n4. Add a search engine: Fill out the fields to set up the search engine.\r\n5. Edit a search engine: If a search engine is listed, select it and edit the fields.\r\n6. Delete a search engine: Select the search engine and click the X that appears at the end of the row.\r\n7. Set a default search engine: Hover over the search engine and click Make Default. (If the button doesn''t appear, you may need to edit the URL listed.)\r\nClick Done.');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `link` varchar(100) DEFAULT NULL,
  `title` text,
  `body` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`link`, `title`, `body`) VALUES
('images/alone.jpg', 'Alone During My Struggle Crowded During My Success', 'Alone During My Struggle Crowded During My Success'),
('images/beautiful.jpg', 'Life Is Beautiful', 'Life Is Beautiful'),
('images/believe.jpg', 'Believe in Yourself', 'Believe in Yourself'),
('images/best investment.jpg', 'Best Investment', 'Best Investment'),
('images/big.jpg', 'Attitude', 'Attitude is little thing that make big difference'),
('images/dream.jpg', 'Dream', 'Dream'),
('images/expect.jpg', 'Expect nothing', 'Expect nothing and you will be never disappointed'),
('images/give.jpg', 'Live out of your imagination not history', 'Live out of your imagination not history'),
('images/invest.jpg', 'Invest in yourself', 'Invest in yourself'),
('images/panic.jpg', 'Don''t Panic', 'Don''t Panic'),
('images/programmer.jpg', 'Programmer', 'Programmer'),
('images/Quotefancy.jpg', 'Action', NULL),
('images/Quotefancy-708-3840x2160.jpg', 'You don''t learn to walk by following rules, you learn by doing and falling it.', 'You don''t learn to walk by following rules, you learn by doing and falling it.'),
('images/Quotefancy-6363-3840x2160.jpg', 'Swami Vivekanad', 'Believe in yourself the world will be at your feet.'),
('images/sayings.jpg', 'If you are absent During my struggle, Don''t expect to be present in my Succcess', 'If you are absent During my struggle, Don''t expect to be present in my Succcess'),
('images/situation.jpg', 'Only you can change your situation', 'Only you can change your situation, bno one else can'),
('images/struggle.jpg', 'Success Diaries', 'You may see me Struggle, but you will never see me quit.'),
('images/superstar.jpg', 'Superstar', 'Don''t believe in them, you are a superstar.'),
('images/you.jpg', 'You', 'You are the creator of your life.'),
('images/yourself.jpg', 'Yourself', 'Believe in yourself, Trust yourself, Love yourself, Invest in Yourself');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `link` text,
  `title` text,
  `body` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`link`, `title`, `body`) VALUES
('https://www.google.co.in/url?sa=t&rct=j&q=&esrc=s&source=newssearch&cd=1&cad=rja&uact=8&sqi=2&ved=0ahUKEwj3s7Xj2LfQAhUIRo8KHV0lAgAQqQIIGigAMAA&url=http%3A%2F%2Fwww.business-standard.com%2Farticle%2Feconomy-policy%2Fjaitley-bats-for-latest-tech-for-agriculture-produce-116111900563_1.html&usg=AFQjCNGILN3eCQa0tz5bvtlnbMWYhKeyIw&sig2=HpA8KLNyWDGmjJ_U4ECuxg&bvm=bv.139250283,d.c2I', 'Jaitley bats for latest tech for agriculture produce', 'Finance Minister Arun Jaitley on Saturday called for focus on higher agriculture productivity through use of the latest technology');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `link` varchar(100) DEFAULT NULL,
  `title` text,
  `body` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`link`, `title`, `body`) VALUES
('videos/Competency Based Interview.3gp', 'Competency Based Interview', 'Competency Based Interview'),
('videos/Entrepreneur - Best Motivational Video for Entrepreneurs.mp4', 'Motivational Video for Entrepreneurs', 'Best Motivational Video for Entrepreneurs'),
('videos/How to Memorize Fast and Easily.mp4', 'How to Memorize Fast and Easily', 'How to Memorize Fast and Easily'),
('videos/Inside a Google data center.mp4', 'Inside a Google data center', 'Inside a Google data center'),
('videos/Internet Millionaire Jeff Usner - Shares How You Can Make You $7,000 In A Few Minutes.mp4', 'Internet Millionaire Jeff Usner - Shares How You Can Make You $7,000 In A Few Minutes', 'Internet Millionaire Jeff Usner - Shares How You Can Make You $7,000 In A Few Minutes'),
('videos/Manoj Barga Documentary.mkv', 'Manoj Barga Documentary', 'Manoj Barga Documentary'),
('videos/---Motivational - Bill Gates Speech at Harvard - YouTube.mp4', 'Motivational - Bill Gates Speech at Harvard', 'Motivational - Bill Gates Speech at Harvard'),
('videos/---Swami Vivekananda Chicago Speech in Hindi ?????? ????????? ?????? ???? - YouTube.mp4', 'Speech in Hindi ?????? ????????? ?????? ????', 'Speech in Hindi ?????? ????????? ?????? ????'),
('videos/Swami Vivekananda Chicago Speech in Hindi YouTube.mp4', 'Speech in Hindi ?????? ????????? ?????? ????', 'Speech in Hindi ?????? ????????? ?????? ????'),
('videos/Thomas Suarez- A 12-year-old app developer.mp4', 'Thomas Suarez- A 12-year-old app developer', 'Thomas Suarez- A 12-year-old app developer'),
('videos/Top 10 Most Influential Software Programmers.mp4', 'Top 10 Most Influential Software Programmers', 'Top 10 Most Influential Software Programmers');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `db`
--
ALTER TABLE `db`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `db`
--
ALTER TABLE `db`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
