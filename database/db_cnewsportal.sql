-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- হোষ্ট: 127.0.0.1
-- তৈরী করতে ব্যবহৃত সময়: মার 24, 2017 at 04:40 ???????
-- সার্ভার সংস্করন: 10.1.19-MariaDB
-- পিএইছপির সংস্করন: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- ডাটাবেইজ: `db_cnewsportal`
--

-- --------------------------------------------------------

--
-- টেবলের জন্য টেবলের গঠন `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(2) NOT NULL,
  `admin_name` varchar(50) NOT NULL,
  `admin_email_address` varchar(100) NOT NULL,
  `admin_password` varchar(32) NOT NULL,
  `access_level` tinyint(1) NOT NULL COMMENT 'for super_admin=1 and manager=2'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- টেবলের জন্য তথ্য স্তুপ করছি `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_name`, `admin_email_address`, `admin_password`, `access_level`) VALUES
(1, 'Md. Shafiul Alam', 'topu1826@gmail.com', '96e79218965eb72c92a549dd5a330112', 1),
(2, 'Md. Saahil Alam', 'saahil.alam@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 2),
(3, 'Md. Shahnaouz Razu', 'r_shahnaouz21@yahoo.com', 'e10adc3949ba59abbe56e057f20f883e', 1);

-- --------------------------------------------------------

--
-- টেবলের জন্য টেবলের গঠন `tbl_category`
--

CREATE TABLE `tbl_category` (
  `category_id` int(2) NOT NULL,
  `category_name` varchar(100) NOT NULL,
  `category_description` text NOT NULL,
  `menubar_category` tinyint(4) NOT NULL DEFAULT '0',
  `header_category` tinyint(4) NOT NULL DEFAULT '0',
  `mid_category` tinyint(4) NOT NULL DEFAULT '0',
  `frontdesk_category` tinyint(4) NOT NULL DEFAULT '0',
  `footer_category` tinyint(4) NOT NULL DEFAULT '0',
  `publication_status` tinyint(1) NOT NULL COMMENT 'publication_status=1 category published and publication_status=0 category unpublished'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- টেবলের জন্য তথ্য স্তুপ করছি `tbl_category`
--

INSERT INTO `tbl_category` (`category_id`, `category_name`, `category_description`, `menubar_category`, `header_category`, `mid_category`, `frontdesk_category`, `footer_category`, `publication_status`) VALUES
(13, 'বাংলাদেশ ', '<a href=\"http://localhost/newsportal/public/manage-category#\">বাংলাদেশ </a><a href=\"http://localhost/newsportal/public/manage-category#\">বাংলাদেশ </a><a href=\"http://localhost/newsportal/public/manage-category#\">বাংলাদেশ </a>', 1, 0, 0, 0, 0, 1),
(14, 'আন্তর্জাতিক ', '<a href=\"http://localhost/newsportal/public/manage-category#\">আন্তর্জাতিক </a><a href=\"http://localhost/newsportal/public/manage-category#\">আন্তর্জাতিক </a><a href=\"http://localhost/newsportal/public/manage-category#\">আন্তর্জাতিক </a>', 1, 0, 0, 0, 0, 1),
(15, 'অর্থনীতি', '<a href=\"http://localhost/newsportal/public/manage-category#\">অর্থনীতি</a><a href=\"http://localhost/newsportal/public/manage-category#\">অর্থনীতি</a>', 1, 0, 0, 0, 0, 1),
(16, 'খেলা ', '<a href=\"http://localhost/newsportal/public/manage-category#\">খেলা </a><a href=\"http://localhost/newsportal/public/manage-category#\">খেলা </a>', 1, 0, 0, 0, 0, 1),
(17, 'বিনোদন ', '<a href=\"http://localhost/newsportal/public/manage-category#\">বিনোদন </a><a href=\"http://localhost/newsportal/public/manage-category#\">বিনোদন </a>', 1, 0, 0, 0, 0, 1),
(18, 'স্বাস্থ্য কথা ', '<a href=\"http://localhost/newsportal/public/manage-category#\">স্বাস্থ্য কথা </a><a href=\"http://localhost/newsportal/public/manage-category#\">স্বাস্থ্য কথা </a><a href=\"http://localhost/newsportal/public/manage-category#\">স্বাস্থ্য কথা </a>', 1, 0, 0, 0, 0, 1),
(29, 'আমাদের সম্পর্কে ', 'আমাদের সম্পর্কে আমাদের সম্পর্কে আমাদের সম্পর্কে <br>', 0, 1, 0, 0, 0, 1),
(23, 'সারা বিশ্ব', 'সারা বিশ্বসারা বিশ্বসারা বিশ্ব', 0, 0, 1, 0, 0, 1),
(24, 'ফ্রন্ট-ডেস্ক ', '<h3>ফ্রন্ট-ডেস্ক </h3><h3>ফ্রন্ট-ডেস্ক </h3><h3>ফ্রন্ট-ডেস্ক </h3>', 0, 0, 0, 1, 0, 1),
(30, 'সম-সাময়িক', 'সম-সাময়িকসম-সাময়িকসম-সাময়িক', 0, 0, 1, 0, 0, 1),
(27, 'যোগাযোগ ', 'যোগাযোগ যোগাযোগ যোগাযোগ <br>', 0, 1, 0, 0, 0, 1),
(31, 'প্রযুক্তি', 'প্রযুক্তি প্রযুক্তি <br>', 0, 0, 0, 0, 1, 1),
(32, 'সম্পাদকীয়', '<h3>সম্পাদকীয়</h3><h3>সম্পাদকীয়</h3>', 0, 0, 0, 1, 0, 1);

-- --------------------------------------------------------

--
-- টেবলের জন্য টেবলের গঠন `tbl_comments`
--

CREATE TABLE `tbl_comments` (
  `comments_id` int(3) NOT NULL,
  `comments_description` varchar(256) NOT NULL,
  `news_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `publication_status` tinyint(4) NOT NULL DEFAULT '0',
  `post_date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deletion_status` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- টেবলের জন্য তথ্য স্তুপ করছি `tbl_comments`
--

INSERT INTO `tbl_comments` (`comments_id`, `comments_description`, `news_id`, `user_id`, `publication_status`, `post_date_time`, `deletion_status`) VALUES
(7, 'Hello', 8, 5, 0, '2017-03-22 07:58:07', 0),
(8, 'Good', 8, 7, 0, '2017-03-22 08:02:08', 0);

-- --------------------------------------------------------

--
-- টেবলের জন্য টেবলের গঠন `tbl_news`
--

CREATE TABLE `tbl_news` (
  `news_id` int(7) NOT NULL,
  `category_id` int(2) NOT NULL,
  `tag_id` int(2) NOT NULL,
  `news_title` varchar(255) NOT NULL,
  `news_summary` text NOT NULL,
  `full_news` text NOT NULL,
  `author_name` varchar(50) NOT NULL,
  `publication_status` tinyint(1) NOT NULL,
  `breaking_news` tinyint(1) NOT NULL,
  `featured_news` tinyint(1) NOT NULL,
  `hit_count` int(11) NOT NULL DEFAULT '0',
  `news_post_date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `news_image` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- টেবলের জন্য তথ্য স্তুপ করছি `tbl_news`
--

INSERT INTO `tbl_news` (`news_id`, `category_id`, `tag_id`, `news_title`, `news_summary`, `full_news`, `author_name`, `publication_status`, `breaking_news`, `featured_news`, `hit_count`, `news_post_date_time`, `news_image`) VALUES
(12, 18, 7, 'যে ৬টি ভুলে আপনি নিজেই নষ্ট করে ফেলছেন দেহের কিডনি দুটি! ', 'আমাদের শরীরের নানা বর্জ্য পদার্থ, অব্যবহৃত খাদ্য এবং বাড়তি পানি \r\nনিষ্কাশনে সাহায্য করে কিডনি। দেহের নানা বর্জ্য পদার্থের ক্ষতিকর টক্সিন \r\nথেকে আমাদের শরীরকে মুক্ত রাখার জন্য কিডনি অনেক গুরুত্বপূর্ণ ভূমিকা পালন \r\nকরে থাকে।', 'আমাদের শরীরের নানা বর্জ্য পদার্থ, অব্যবহৃত খাদ্য এবং বাড়তি পানি \r\nনিষ্কাশনে সাহায্য করে কিডনি। দেহের নানা বর্জ্য পদার্থের ক্ষতিকর টক্সিন \r\nথেকে আমাদের শরীরকে মুক্ত রাখার জন্য কিডনি অনেক গুরুত্বপূর্ণ ভূমিকা পালন \r\nকরে থাকে।\r\n\r\nআর একারণেই আমাদের দেহের সুস্থতার জন্য কিডনির সুস্থতা অনেক বেশি জরুরী। \r\nকিন্তু আমরা বেশিভাগ সময়েই কিডনির দিকে ঠিক মতো নিজ্র দিতে ভুলে যাই।\r\n\r\nআর শুধুমাত্র এই কারণে প্রতিবছর অনেক মানুষ কিডনির সমস্যায় পড়ে থাকেন। এবং \r\nকিডনির সমস্যায় মৃত্যুর হারই বেশি।\r\n\r\nকিডনির প্রতি আমাদের ঠিকমতো নজর না দিয়ে কিডনির রোগে আক্রান্তের জন্য দায়ী \r\nআমরা নিজেরাই।\r\n\r\nপ্রতিনিয়ত আমরা এমন কিছু অনিয়ম করে থাকি যার প্রভাব সরাসরি পড়ে আমাদের \r\nকিডনির ওপর। কিন্তু আমাদের নিজের ভালোর জন্য আমাদের সতর্ক হওয়া প্রয়োজন।\r\n\r\nচলুন তবে কিডনির ক্ষতির জন্য দায়ী অনিয়মগুলো জেনে নিই এবং সতর্কতার সাথে এই\r\n অনিয়মগুলো এড়িয়ে চলার চেষ্টা করি।\r\n\r\nমদ্যপান করা:- মদ্যপান কিডনির জন্য সব চাইতে বেশি ক্ষতিকর। অ্যালকোহল কিডনি\r\n আমাদের দেহ থেকে সঠিক নিয়মে নিস্কাশন করতে পারে না।\r\n\r\nফলে এটি কিডনির মধ্যে থেকেই কিডনির কার্যক্ষমতা কমিয়ে দিয়ে কিডনি নষ্ট করে \r\nদেয়। অতিরিক্ত মদ্যপানের কারণে লিভার সিরোসিসের মতো মারাত্মক রোগে আক্তান্ত\r\n হন অনেকেই।\r\n\r\nএই রোগে মৃত্যুর হার অনেক বেশি। তাই মদ্যপান থেকে দূরে থাকুন।', 'Md. Shahnaouz Razu', 1, 0, 0, 6, '2017-03-20 16:50:18', 'img/news_images/vejFjJFKG5zBrdUFiILb.jpg'),
(11, 16, 9, 'শততম টেস্টে নেই মাহমুদউল্লাহ! ', 'গল টেস্টের পর এখন অপেক্ষা শততম টেস্টের। এ নিয়ে কলম্বোয় যেমন তোড়জোড়, আছে ঢাকায়ও।', 'গল টেস্টের পর এখন অপেক্ষা শততম টেস্টের। এ নিয়ে কলম্বোয় যেমন তোড়জোড়, আছে \r\nঢাকায়ও। শততম টেস্ট উপলক্ষে শ্রীলঙ্কায় যাবেন বিসিবি সভাপতি নাজমুল হাসানসহ\r\n আরও পাঁচ বোর্ড কর্মকর্তা। চলছে সেই প্রস্তুতি।\r\n\r\nপ্রস্তুতি আছে কলম্বোয়ও। তবে সেটা অন্যভাবে। ঐতিহাসিক এই টেস্টকে মাঠের \r\nপারফরম্যান্স দিয়ে স্মরণীয় করে রাখার প্রস্তুতি। কাল যেমন সকালে কলম্বোয় \r\nপৌঁছে দুপুরেই ঐচ্ছিক অনুশীলনে নেমেছেন দলের ছয় খেলোয়াড়। ১৫ মার্চ থেকে \r\nশুরু টেস্টের একাদশ নিয়েও চলছে আলোচনা।\r\nকলম্বো টেস্টের দলে সম্ভাব্য দুটি পরিবর্তনের কথা শোনা যাচ্ছে। পেসার \r\nশুভাশিস রায়ের জায়গায় একাদশে ঢুকতে পারেন আরেক পেসার কামরুল ইসলাম। তবে \r\nসবচেয়ে উল্লেখযোগ্য পরিবর্তনটি আসতে পারে ব্যাটিংয়ে। গল টেস্টের দুই \r\nইনিংসেই ব্যর্থ মাহমুদউল্লাহর জায়গায় সম্ভবত খেলবেন ইমরুল কায়েস। বিকল্প \r\nভাবনায় আছেন সাব্বির রহমানও।\r\n২০১৫ সালের জুনে ফতুল্লায় ভারতের বিপক্ষে টেস্টের দলে ছিলেন না \r\nমাহমুদউল্লাহ। এরপর টানা আটটি টেস্ট খেলে এবারই প্রথম দল থেকে বাদ পড়ার \r\nশঙ্কায় এই অভিজ্ঞ ব্যাটসম্যান। নিউজিল্যান্ডে রানের জন্য সংগ্রাম করা \r\nমাহমুদউল্লাহ ফিফটির (৬৪) দেখা পান ভারতের বিপক্ষে হায়দরাবাদ টেস্টে। \r\nকিন্তু শ্রীলঙ্কায় গিয়ে আবারও হারিয়ে ফেলেছেন ফর্ম।\r\nনির্বাচকদের দৃষ্টি অবশ্য শততম টেস্ট ছাপিয়েও চলে গেছে আরও দূরে। ২২ মার্চ \r\nকলম্বোতেই শুরু তিন ম্যাচের ওয়ানডে সিরিজ। সিরিজের জন্য ১৫ সদস্যের দল \r\nনির্বাচন হয়ে গেছে এর মধ্যেই। বোর্ড সভাপতির অনুমোদন পেলে সেটি ঘোষণা হবে \r\nযেকোনো সময়। ওয়ানডের খেলোয়াড়দের কলম্বোয় দলের সঙ্গে যোগ দেওয়ার কথা ১৮ \r\nমার্চ।\r\nওয়ানডে অধিনায়ক মাশরাফি বিন মুর্তজার শ্রীলঙ্কা যাওয়া নিশ্চিতই। মাশরাফি \r\nহাতের চোট কাটিয়ে বোলিংয়ে ফিরেছেন আরও আগে। কাল পর্যন্ত যা অবস্থা, তাতে \r\nওয়ানডে সিরিজ শুরুর আগেই পুরোপুরি ফিট হয়ে যাওয়ার কথা তাঁর। কাল ওয়ানডে দল \r\nনির্বাচনী শেষ সভার পর মাশরাফির শ্রীলঙ্কা যাওয়ার ব্যাপারে নিশ্চিত করেছেন \r\nপ্রধান নির্বাচক মিনহাজুল আবেদীনও। সঙ্গে আর কে যোগ হচ্ছেন, সে কৌতূহল \r\nঅবশ্য আনুষ্ঠানিকভাবে দল ঘোষণার আগে মেটাতে চাইলেন না তিনি।', 'Md. Shahnaouz Razu', 1, 1, 0, 3, '2017-03-20 16:47:31', 'img/news_images/HDtEkyzFOZF8j7x5DF9e.jpg'),
(10, 15, 8, 'দাম বাড়ল বেক্সিমকোর দুই কোম্পানির শেয়ারের', 'সপ্তাহের প্রথম কার্যদিবসে গতকাল রোববার বেক্সিমকো ও বেক্সিমকো ফার্মাসিউটিক্যালসের শেয়ারের দাম বেড়েছে।', 'সপ্তাহের প্রথম কার্যদিবসে গতকাল রোববার বেক্সিমকো ও বেক্সিমকো \r\nফার্মাসিউটিক্যালসের শেয়ারের দাম বেড়েছে। তবে অপরিবর্তিত ছিল বেক্সিমকো \r\nগ্রুপের তালিকাভুক্ত অপর কোম্পানি বেক্সিমকো সিনথেটিকসের শেয়ারের দাম।\r\nগতকাল দিন শেষে বেক্সিমকোর প্রতিটি শেয়ারের দাম প্রায় সাড়ে ৩ শতাংশ বা ১ \r\nটাকা ২০ পয়সা বেড়েছে। বেক্সিমকো ফার্মার প্রতিটি শেয়ারের দাম বেড়েছে ৩ টাকা\r\n বা ৩ শতাংশ।\r\nবাজারসংশ্লিষ্ট ব্যক্তিদের একটি অংশ মনে করছেন, বেক্সিমকো গ্রুপের \r\nতালিকাভুক্ত একাধিক প্রতিষ্ঠানের গতকালের দাম বাড়ার পেছনে বিশ্বের শীর্ষ \r\nধনীর তালিকায় কোম্পানিটির কর্ণধার সালমান এফ রহমানের নাম ওঠার একটি \r\nমনস্তাত্ত্বিক সম্পর্ক থাকতে পারে। একমাত্র বাংলাদেশি হিসেবে বিশ্বের শীর্ষ\r\n ধনীদের একটি তালিকায় নাম ওঠে সালমান এফ রহমানের। এ খবরে গতকাল \r\nবিনিয়োগকারীদের মধ্যে বেক্সিমকো গ্রুপের একাধিক কোম্পানির শেয়ারের প্রতি \r\nবাড়তি আগ্রহ দেখা যায়।\r\nচীনভিত্তিক সংস্থা হুরুন ডট নেট গত মঙ্গলবার বিশ্বের সম্পদশালীদের নিয়ে \r\nএকটি প্রতিবেদন প্রকাশ করে। ১০০ কোটি ডলারের বেশি সম্পদ রয়েছে—এমন \r\nব্যক্তিদেরই প্রতিবেদনে অন্তর্ভুক্ত করা হয়। সেখানে ১০০ কোটি ডলারের বেশি \r\nসম্পদধারী ২ হাজার ২৫৭ জনের নাম রয়েছে। একমাত্র বাংলাদেশি হিসেবে ওই \r\nসম্পদশালীদের তালিকার ১ হাজার ৬৮৫তম অবস্থানে জায়গা করে নিয়েছেন সালমান এফ \r\nরহমান। তাঁর সম্পদের পরিমাণ দেখানো হয়েছে ১৩০ কোটি ডলারের। প্রতি ডলারের \r\nবিনিময় মূল্য ৮০ টাকা হিসাবে বাংলাদেশি মুদ্রায় এই সম্পদের পরিমাণ দাঁড়ায় \r\n১০ হাজার ৪০০ কোটি টাকা।\r\nবিশ্বের শীর্ষ ধনীদের তালিকায় সালমানের নাম উঠে আসার বিষয়টি গত শুক্রবার \r\nদেশের বিভিন্ন সংবাদমাধ্যমে প্রকাশিত হয়। এরপর শেয়ারবাজারে গতকালই ছিল \r\nসপ্তাহের প্রথম কার্যদিবস। তাতে এদিন বেক্সিমকোর একাধিক কোম্পানির শেয়ারের \r\nদামে ইতিবাচক প্রভাব দেখা যায়। একদিকে দাম বেড়েছে, অন্যদিকে লেনদেনেও শীর্ষ\r\n পর্যায়ে উঠে এসেছে।\r\nদেশের শেয়ারবাজারে সালমান এফ রহমান বহুল আলোচিত এক নাম। ১৯৯৬ সালে \r\nশেয়ারবাজার কেলেঙ্কারির ঘটনায় তাঁর ও তাঁর মালিকানাধীন কোম্পানির নামে দুটি\r\n মামলা হয়। যদিও উচ্চ আদালত মামলা দুটি এরই মধ্যে বাতিল করেছেন। ২০১০ সালের\r\n শেয়ারবাজার কেলেঙ্কারির ঘটনায়ও সালমানের নামটি আলোচনায় উঠে আসে। ওই ঘটনায় \r\nইব্রাহিম খালেদের নেতৃত্বে গঠিত তদন্ত কমিটির প্রতিবেদনে সালমানের বিষয়ে \r\nসতর্ক থাকার পরামর্শ দেওয়া হয়।\r\nদেশের প্রধান শেয়ারবাজার ঢাকা স্টক এক্সচেঞ্জে (ডিএসই) গতকাল দিন শেষে \r\nলেনদেনের দ্বিতীয় অবস্থানে ছিল বেক্সিমকো। এদিন ঢাকার বাজারে এককভাবে \r\nকোম্পানিটির ৬৫ কোটি টাকার শেয়ার লেনদেন হয়। প্রতিটি শেয়ারের দাম দিন শেষে ১\r\n টাকা ২০ পয়সা বেড়ে দাঁড়ায় ৩৬ টাকা ৪০ পয়সায়।\r\nঢাকার বাজারে এদিন বেক্সিমকো গ্রুপের তালিকাভুক্ত অপর কোম্পানি বেক্সিমকো \r\nফার্মাসিউটিক্যালসের প্রতিটি শেয়ারের দাম ৩ টাকা বা প্রায় ৩ শতাংশ বেড়ে \r\nদাঁড়িয়েছে প্রায় ১০২ টাকায়। দিন শেষে কোম্পানিটি লেনদেনের শীর্ষ ১০ \r\nকোম্পানির মধ্যে চতুর্থ স্থানে উঠে আসে। লেনদেন হয়েছে ৩৪ কোটি ৫৩ লাখ টাকার\r\n শেয়ার। গ্রুপটির অপর কোম্পানি বেক্সিমকো সিনথেটিকসের দাম দিন শেষে আগের \r\nদিনের দামে (৮ টাকা) অপরিবর্তিত ছিল।', 'Md. Shahnaouz Razu', 1, 1, 0, 7, '2017-03-20 16:48:37', 'img/news_images/ZLZRRmGBkJO3rd3gPZrs.jpg'),
(8, 13, 2, 'বাগমারায় ‘জঙ্গি’ আটক', 'রাজশাহীর বাগমারা উপজেলার ঝিকড়া ইউনিয়নের কুদাপাড়া গ্রামে খয়ের উদ্দিন (৪০)\r\n নামের এক ব্যক্তিকে আজ সোমবার ভোরে নিজ বাড়ি থেকে আটক করেছে পুলিশ।', 'রাজশাহীর বাগমারা উপজেলার ঝিকড়া ইউনিয়নের কুদাপাড়া গ্রামে খয়ের উদ্দিন (৪০)\r\n নামের এক ব্যক্তিকে আজ সোমবার ভোরে নিজ বাড়ি থেকে আটক করেছে পুলিশ। পুলিশ \r\nবলছে, তিনি নিষিদ্ধ জঙ্গি সংগঠন জাগ্রত মুসলিম জনতা বাংলাদেশের (জেএমজেবি) \r\nতালিকাভুক্ত সদস্য।\r\n\r\nখয়ের উদ্দিনের বিরুদ্ধে জঙ্গিসংশ্লিষ্ট একাধিক মামলা রয়েছে বলে পুলিশ \r\nজানিয়েছে।\r\n\r\nবাগমারা থানার উপপরিদর্শক (এসআই) রাজিব হাসানের ভাষ্য, জঙ্গিবিরোধী চলমান \r\nঅভিযানের অংশ হিসেবে গতকাল রোববার রাত থেকে পুলিশের কয়েকটি দল এলাকায় \r\nঅভিযান চালায়। অভিযানকালে আজ ভোরে নিজ বাড়ি থেকে জঙ্গি খয়ের উদ্দিনকে আটক \r\nকরা হয়। তিনি জেলা পুলিশের বিশেষ শাখার তালিকায় থাকা জেএমজেবির সদস্য। তাঁর\r\n বিরুদ্ধে জঙ্গি তৎপরতার সঙ্গে জড়িত থাকার অভিযোগ রয়েছে। এর আগেও পুলিশ \r\nতাঁকে আটক করেছিল।\r\n\r\nস্থানীয় লোকজনের তথ্যমতে, খয়ের উদ্দিন বাংলা ভাইয়ের সঙ্গে বিভিন্ন অভিযানে \r\nঅংশ নিয়েছিলেন।\r\n\r\nবাগমারা থানার পরিদর্শক (তদন্ত) আসাদুজ্জামান জানান, দুপুরের দিকে তাঁর \r\nবিরুদ্ধে মামলা করার পর আদালতের মাধ্যমে কারাগারে পাঠানো হবে। গত চার দিনে \r\nবাগমারা থানার পুলিশ জঙ্গিবিরোধী অভিযানে মোট আটজন জঙ্গিকে আটক করেছে।', 'Md. Shahnaouz Razu', 1, 1, 1, 22, '2017-03-20 16:46:37', 'img/news_images/DeT4cV63zcbmu9NLqD6p.jpg'),
(9, 14, 3, 'মসুলে থাকা আইএস জঙ্গিরা মরবে: মার্কিন দূত ', 'মসুলে থাকা আইএস জঙ্গিরা মরবে: মার্কিন দূত\r\n\r\nইরাকের মসুলে থাকা ইসলামিক স্টেটের (আইএস) জঙ্গিরা মারা পরবে। আইএসবিরোধী \r\nঅভিযানের সমন্বয়ের দায়িত্বে থাকা যুক্তরাষ্ট্রের এক দূত এই মন্তব্য করেছেন।', 'ইরাকের মসুলে থাকা ইসলামিক স্টেটের (আইএস) জঙ্গিরা মারা পরবে। আইএসবিরোধী \r\nঅভিযানের সমন্বয়ের দায়িত্বে থাকা যুক্তরাষ্ট্রের এক দূত এই মন্তব্য করেছেন।\r\n আজ সোমবার বিবিসি অনলাইনের প্রতিবেদনে এ তথ্য জানানো হয়।\r\n\r\nমসুল থেকে বাইরে যাওয়ার শেষ পথটি ইরাকি বাহিনী বিচ্ছিন্ন করে দেওয়ার পর \r\nশহরের ভেতরে আইএস যোদ্ধারা আটকা পড়েছে। এর পরিপ্রেক্ষিতে আইএসবিরোধী জোটের \r\nজ্যেষ্ঠ মার্কিন কর্মকর্তা ব্রেট ম্যাকগার্ক জঙ্গিগোষ্ঠীটির বিরুদ্ধে \r\nহুঁশিয়ারি দেন।\r\n\r\nইরাকের দ্বিতীয় বৃহত্তম শহর মসুল। শহরটি ২০১৪ সাল থেকে আইএসের নিয়ন্ত্রণে \r\nরয়েছে। ইরাকে আইএসের শেষ বড় ঘাঁটি মসুল।\r\n\r\nমসুলের দখল ফিরে পেতে ইরাকি বাহিনী দীর্ঘ সময় ধরে অভিযান চালাচ্ছে। তারা \r\nইতিমধ্যে শহরের একটা বড় অংশ পুনর্দখলে নিতে সক্ষম হয়েছে। আইএসবিরোধী এই \r\nঅভিযানে যুক্তরাষ্ট্র সমর্থন ও সহযোগিতা দিচ্ছে।\r\n\r\nইরাকি বাহিনীর ভাষ্য, তারা এখন মসুলের উত্তর অংশের পুরোটাই নিয়ন্ত্রণ করছে।\r\n\r\nপশ্চিম মসুলে আইএস ঘাঁটির দিকে আরও অগ্রসর হয়েছে ইরাকি বাহিনী। অভিযানের \r\nমুখে সেখানকার গুরুত্বপূর্ণ বিভিন্ন স্থান ছেড়ে যেতে বাধ্য হয়েছে আইএস।\r\n\r\nইরাকি বাহিনীর পক্ষ থেকে বলা হচ্ছে, পশ্চিম মসুলের এক-তৃতীয়াংশের বেশি \r\nএলাকা এখন তাদের নিয়ন্ত্রণে।\r\n\r\nগতকাল রোববার ইরাকের রাজধানী বাগদাদে মার্কিন দূত ম্যাকগার্ক সাংবাদিকদের \r\nবলেন, মসুলের বাইরে যাওয়ার শেষ রাস্তাটি বিচ্ছিন্ন করে দিয়েছে ইরাকি \r\nবাহিনী। মসুলে আইএসের যেসব যোদ্ধা রয়ে গেছেন, তাঁরা মরতে যাচ্ছেন। কারণ, \r\nতাঁরা আটকা পড়েছেন।\r\n\r\nম্যাকগার্ক বলেন, ‘আমরা মসুলে আইএসকে হারাতেই শুধু প্রতিশ্রুতিবদ্ধ নই, \r\nতারা যাতে পালাতে না পারে, তাও নিশ্চিত করা হবে।’', 'Md. Shahnaouz Razu', 1, 1, 0, 2, '2017-03-20 16:47:40', 'img/news_images/MIEmh03FErSnkgpQYmzP.jpg');

-- --------------------------------------------------------

--
-- টেবলের জন্য টেবলের গঠন `tbl_tag`
--

CREATE TABLE `tbl_tag` (
  `tag_id` int(11) NOT NULL,
  `tag_name` varchar(50) NOT NULL,
  `publication_status` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- টেবলের জন্য তথ্য স্তুপ করছি `tbl_tag`
--

INSERT INTO `tbl_tag` (`tag_id`, `tag_name`, `publication_status`) VALUES
(2, 'চরমপন্থী ', 1),
(3, 'যুদ্ধ ', 1),
(4, 'মাদক ', 1),
(6, 'আইন', 1),
(7, 'স্বাস্থ্য ', 1),
(8, 'শেয়ার ', 1),
(9, 'খেলাধুলা ', 1);

-- --------------------------------------------------------

--
-- টেবলের জন্য টেবলের গঠন `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` int(7) NOT NULL,
  `user_name` varchar(150) NOT NULL,
  `user_email_address` varchar(255) NOT NULL,
  `user_password` varchar(50) NOT NULL,
  `user_phone_number` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- টেবলের জন্য তথ্য স্তুপ করছি `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `user_name`, `user_email_address`, `user_password`, `user_phone_number`) VALUES
(5, 'Md. Shahnaouz Razu', 'shahnaouzrazu21@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '01825555144'),
(6, 'Kamal Ahmed', 'kamal_ka1@yahoo.com', '25d55ad283aa400af464c76d713c07ad', '0182555144'),
(7, 'Kamal Ahmed', 'kamal_ka@yahoo.com', 'e10adc3949ba59abbe56e057f20f883e', '01825555144'),
(8, 'Hussain Ghani', 'hussain@gmail.com', '123456', '01825555144');

--
-- স্তুপকৃত টেবলের ইনডেক্স
--

--
-- টেবিলের ইনডেক্সসমুহ `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- টেবিলের ইনডেক্সসমুহ `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`category_id`);

--
-- টেবিলের ইনডেক্সসমুহ `tbl_comments`
--
ALTER TABLE `tbl_comments`
  ADD PRIMARY KEY (`comments_id`);

--
-- টেবিলের ইনডেক্সসমুহ `tbl_news`
--
ALTER TABLE `tbl_news`
  ADD PRIMARY KEY (`news_id`);

--
-- টেবিলের ইনডেক্সসমুহ `tbl_tag`
--
ALTER TABLE `tbl_tag`
  ADD PRIMARY KEY (`tag_id`);

--
-- টেবিলের ইনডেক্সসমুহ `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`);

--
-- স্তুপকৃত টেবলের জন্য স্বয়ক্রীয় বর্দ্ধিত মান (AUTO_INCREMENT)
--

--
-- টেবলের জন্য স্বয়ক্রীয় বর্দ্ধিত মান (AUTO_INCREMENT) `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- টেবলের জন্য স্বয়ক্রীয় বর্দ্ধিত মান (AUTO_INCREMENT) `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `category_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- টেবলের জন্য স্বয়ক্রীয় বর্দ্ধিত মান (AUTO_INCREMENT) `tbl_comments`
--
ALTER TABLE `tbl_comments`
  MODIFY `comments_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- টেবলের জন্য স্বয়ক্রীয় বর্দ্ধিত মান (AUTO_INCREMENT) `tbl_news`
--
ALTER TABLE `tbl_news`
  MODIFY `news_id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- টেবলের জন্য স্বয়ক্রীয় বর্দ্ধিত মান (AUTO_INCREMENT) `tbl_tag`
--
ALTER TABLE `tbl_tag`
  MODIFY `tag_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- টেবলের জন্য স্বয়ক্রীয় বর্দ্ধিত মান (AUTO_INCREMENT) `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
