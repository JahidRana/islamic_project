-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2021 at 03:58 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `islamic`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(100) NOT NULL,
  `category_name` varchar(200) NOT NULL,
  `post` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `counter_table`
--

CREATE TABLE `counter_table` (
  `id` int(100) NOT NULL,
  `ip_address` text NOT NULL,
  `visit_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `full_contac`
--

CREATE TABLE `full_contac` (
  `id` int(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phn_no` text NOT NULL,
  `messages` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `hadish`
--

CREATE TABLE `hadish` (
  `hadish_id` int(50) NOT NULL,
  `title` varchar(100) NOT NULL,
  `size` float NOT NULL,
  `hadish_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `login_page`
--

CREATE TABLE `login_page` (
  `id` int(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `token` varchar(100) NOT NULL,
  `role` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login_page`
--

INSERT INTO `login_page` (`id`, `username`, `email`, `password`, `token`, `role`) VALUES
(1, 'Jahid Rana', 'jahidrana2020@gmail.com', '0127b2b47ee3e66562a20a1bab613c2b', '293c0b2d6815519579b09c97517f3b', 1);

-- --------------------------------------------------------

--
-- Table structure for table `new_waz`
--

CREATE TABLE `new_waz` (
  `id` int(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `waz_name` varchar(100) NOT NULL,
  `bokta_name` varchar(100) NOT NULL,
  `upload_times` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `post_id` int(50) NOT NULL,
  `title` varchar(200) NOT NULL,
  `post_waz` varchar(255) NOT NULL,
  `category` varchar(200) NOT NULL,
  `bokta_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `simple_contac`
--

CREATE TABLE `simple_contac` (
  `id` int(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `names` varchar(100) NOT NULL,
  `messages` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `story`
--

CREATE TABLE `story` (
  `story_id` int(50) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `story_date` varchar(100) NOT NULL,
  `story_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `story`
--

INSERT INTO `story` (`story_id`, `title`, `description`, `story_date`, `story_img`) VALUES
(3, 'New Story', 'এক দেশে এক রাজা বাস করতেন। রাজার সাত রানী। পাটরানী, রূপবতী রানী, গুণবতী রানী, বিদ্যাবতী রানী, সেবাবতী রানী আর সোহাগিনী রানী।\r\n\r\nসাত রানীর কাহিনী—সাত রানীর যশ—দেশ-বিদেশে ছড়িয়ে পড়ে, বসন্তকালের বাতাসের মতন—নাগকেশর ফুলের গন্ধের মতন—শরৎকালের রৌদ্রের মতন।\r\n\r\nরাজা শ্বেতপাথরের সাদা ধবধবে দেওয়ালে মণিমুক্তো-পান্না-পোখরাজের লতাপাতা-ফুল-পাখি-আঁকা সাতটি মহল রাজপুরীর মধ্যে তৈয়ার করে দিয়েছেন সাত রানীর জন্যে।\r\n\r\n\r\nপাটরানী যিনি, তিনি ধীর স্থির গম্ভীর রাশভারী মানুষ। শান্ত প্রসন্ন মূর্তি, কিন্তু বেশি হাসেন না, বেশি কথা বলেন না। রাগ হলে কখনও বাইরে প্রকাশ করেন না। রাজামশায় শুদ্ধ তাঁকে সমীহ করে চলেন।\r\n\r\nরূপবতী রানী—রূপের তার সীমা-পরিসীমা নেই। হাজারখানা চাদের জোছনা নিঙড়ে, কনকচাঁপা ফুলের পাপড়ি দিয়ে হালকা দেহখানি গড়া। চোখ দেখে পদ্মপাপড়ি পলাশ লজ্জা পায়। ঠোট দুখানি বাঁধুলি, নাকটি যেন তিলফুল। দাঁতগুলি সারবন্দী মুক্তো। আর আঙুলের নখ থেকে চুলের ডগা পর্যন্ত প্রত্যেকটির অঙ্গ নিখুঁত সুন্দর।\r\n\r\nরূপবতী রানী সারাদিন রূপচর্চা নিয়ে কাটান। একজন দাসী তার কচি পল্লবের মতো নরম পা দুখানির সেবা করে। পায়ের রংয়ের সংগে রং মিলিয়ে গোলাপী আলতা পরায়, পায়ের নখ পালিশ করে পরশপাথর দিয়ে। আর একজন দাসী গায়ে রূপটান মাখায়। আমলকি-বাটা মাখায়। দুধের সর মাখিয়ে ডাবের জল দিয়ে ধুয়ে দেয়। তিনজন দাসী তার কেশের সেবা করে। একজন চুলে নানারকম সুগন্ধি তেল মাখায়, আর একজন সুরভি জলে চুল ধুয়ে অগুরু-ধূপের ধোয়ায় চুল শুকিয়ে তোলে। একজন শুধু বেণী রচনা করে—রকম-বেরকমের কবরী বাঁধে।', '01 Jun, 2021', 'new_icon_2.png'),
(4, 'New Story 2', 'জানলার বাইরে দিয়ে ঝড়ের মতো হাওয়া ঢুকছে। আরামে শরীর জুড়িয়ে যাচ্ছে। এয়ার পিলোয় হেলান দিয়ে আধশোয়া হেলেন। মুম্বাই মেল এখন ছুটছে দুরন্ত বেগে। আলোর চকিত চকিত ঝলকানিতে পেরিয়ে যাচ্ছে ঘুমিয়ে থাকা অচেনা স্টেশনরা। তারপরেই অন্ধকারের মাঝে জোৎস্নার রুপোলি আলো ছুঁয়ে যাচ্ছে ঘুমন্ত কামরাদের।\r\n\r\nএই প্রথম বাবা-মাকে বাদ দিয়ে এতদূর যাওয়া! পনেরো দিনের লম্বা এক্সকারশন। লোনাভালা, খান্ডালা, পুনে, মুম্বাই…৷ সব বন্ধু, ক্লাসমেট। মুক্ত বিহঙ্গের মতো উড়ছে সবাই। বটানি ডিপার্টমেন্টের অ্যানুয়্যাল ট্যুর। কতরকম কথা দিয়ে, ওর দুই ক্লোজেস্ট ফ্রেন্ড মিনি-কল্পনাকে দিয়ে বলিয়ে বাবাকে রাজি করাতে হয়েছে।\r\nহেলেনের বাবা অসম্ভব গোঁড়া! ইউনিভার্সিটির স্টুডেন্টরা সবাই একসাথে এডুকেশনাল ট্রিপে যাচ্ছে, উনি মেয়েকে ছাড়বেন না। অথচ উনি জানেন, ওদের গ্রুপের সঙ্গে দু-দুজন অধ্যাপকও যাচ্ছেন।\r\n\r\nআসলে ওর বাবা মেনে নিতে পারেন না, তাঁর একমাত্র মেয়ে আর ছোট নেই। এখন সে তেইশ। হেলেন অনেকবার বলেছে, “বাবা, তুমি আমার ওপর রিলাই করো। আমি দুম করে যে সে ছেলের পাল্লায় পড়ব না। যদি পড়ার হতো, বিএসসি পড়ার সময়েই লটকে যেতাম।” কথাটা হান্ড্রেড পার্সেন্ট সত্যি। বিএসসিতে সিনিয়র দাদারা ওর পিছনে কম লাইন', '02 Jun, 2021', '2.jpg'),
(5, 'New story 3', 'অনাদি অবশ্য এখনও হাল ছাড়েনি। সে এখন বালিগঞ্জ সায়েন্স কলেজেই রিসার্চ স্কলার। হেলেন যেদিন প্রথম এল, সেদিনই ঠিক ওকে পাকড়াও করেছে বাস স্ট্যান্ডে। ‘বুঝলে হেলেন, আমি মাইক্রো-প্যাথোতে আছি। এনি প্রবলেম, আই মিন, কোনো কিছু আটকে গেলে স্ট্রেট আমার ল্যাবে চলে আসবে। নো হেজিটেশন, কেমন?’ হেলেন মিষ্টি হেসে ঘাড় নেড়েছে।\r\n\r\nকিন্তু এবারে, এই ট্যুরে… হেলেন…নিজেই একটা ঘোরের মধ্যে পড়ে আছে। খুব সমস্যা। কাল রাতে ট্রেন ছাড়ার পর থেকেই অকারণ খুশি খুশি লাগছে… হঠাৎ হঠাৎ জ্বর জ্বর ভাব… কানের লতি, হাতের পাতা গরম… মনে হচ্ছে… মনে হচ্ছে…\r\n\r\n‘অ্যাই, শুনছিস? ঘুমিয়ে পড়লি?‘ কানের গোড়ায় ফিসফিস।\r\n\r\nপলাশ! ঠিক এসে গেছে! গায়ে কাঁটা ফুটল। ও দুদিকে মাথা নাড়ল।\r\n\r\n‘কীরে, মনে আছে তো? আমি কিন্তু ওয়েট করছি।… তুই আপার বার্থে উঠবি না?’\r\n\r\n‘উঠব তো। ওয়েটিং ফর কল্পনা। ও সমিতের সঙ্গে আড্ডা দিতে গেল। বলল, পনেরো মিনিটের মধ্যে ফিরছে।’\r\n\r\n‘পনেরো মিনিটে! তুইও যেমন, যা বলে বিশ্বাস করিস! এরকম সুযোগ ওরা আর পাবে? আজকের থেকে রিলেশন ওদের! এই তো দেখে এলাম দুজনে সমিতের আপার বার্থে চড়ে…সে যাক…শোন, আমি ওদিকে ছেলেদের ক্যুপেতে চলে যাচ্ছি। কল্পনা ফিরলে তুই ফাইনালি বার্থে উঠে একটা মিসড কল দিস। আমি জেগে থাকব। নো জোক, আবার বলছি সত্যি সত্যিই তোর সঙ্গে জরুরি কথা আছে রে। একজন বিচ্ছিরি সমস্যায় পড়েছে। প্লিজ, কল করিস কিন্তু।’ পলাশ পা টিপে টিপে চলে গেল। হেলেনের শরীর দিয়ে ফের জ্বর জ্বর…', '02 Jun, 2021', 'ramadan-2366301_1280.png');

-- --------------------------------------------------------

--
-- Table structure for table `sura`
--

CREATE TABLE `sura` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `sura_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sura`
--

INSERT INTO `sura` (`id`, `title`, `sura_name`) VALUES
(5, 'sura fazar', 'yasin.mp3'),
(7, 'al-araf', 'mishary-rashid-alafasy-020-muslimcentral.com.mp3'),
(11, 'sura ta-ha', 'mishary-rashid-alafasy-020-muslimcentral.com.mp3'),
(15, 'sura moriyum', 'mishary-rashid-alafasy-019-muslimcentral.com.mp3'),
(16, 'Al Kahaf', 'mishary-rashid-alafasy-018-muslimcentral.com.mp3'),
(17, 'Al isra', 'mishary-rashid-alafasy-017-muslimcentral.com.mp3'),
(18, 'Al Araf', 'mishary-rashid-alafasy-007-muslimcentral.com.mp3'),
(19, 'Al anam', 'mishary-rashid-alafasy-006-muslimcentral.com.mp3'),
(20, 'Nisa', '04.mishary-rashid-alafasy-004-muslimcentral.com.mp3'),
(21, 'Al imran', '03.mishary-rashid-alafasy-003-muslimcentral.com.mp3'),
(22, 'Bakara', '02.mishary-rashid-alafasy-002-muslimcentral.com.mp3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `counter_table`
--
ALTER TABLE `counter_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `full_contac`
--
ALTER TABLE `full_contac`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hadish`
--
ALTER TABLE `hadish`
  ADD PRIMARY KEY (`hadish_id`);

--
-- Indexes for table `login_page`
--
ALTER TABLE `login_page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `new_waz`
--
ALTER TABLE `new_waz`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `simple_contac`
--
ALTER TABLE `simple_contac`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `story`
--
ALTER TABLE `story`
  ADD PRIMARY KEY (`story_id`);

--
-- Indexes for table `sura`
--
ALTER TABLE `sura`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `counter_table`
--
ALTER TABLE `counter_table`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `full_contac`
--
ALTER TABLE `full_contac`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hadish`
--
ALTER TABLE `hadish`
  MODIFY `hadish_id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `login_page`
--
ALTER TABLE `login_page`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `new_waz`
--
ALTER TABLE `new_waz`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `post_id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `simple_contac`
--
ALTER TABLE `simple_contac`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `story`
--
ALTER TABLE `story`
  MODIFY `story_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sura`
--
ALTER TABLE `sura`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
