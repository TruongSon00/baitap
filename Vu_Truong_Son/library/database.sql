Database: `thi`
--

-- --------------------------------------------------------

--
-- Table structure for table `library`
--

CREATE TABLE `library` (
  `bookid` int(11) NOT NULL,
  `authorid` int(11) NOT NULL,
  `title` varchar(55) NOT NULL,
  `ISBN` varchar(25) NOT NULL,
  `pub_year` smallint(6) NOT NULL,
  `avaiable` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `library`
--

INSERT INTO `library` (`bookid`, `authorid`, `title`, `ISBN`, `pub_year`, `avaiable`) VALUES
(1, 1, 'Anh hùng xạ điêu', 'NXB Kim Đồng', 2000, 90),
(2, 1, 'Thiên hạ', 'NXB Hoàng Kim', 2000, 90),
(3, 1, 'Thần điêu đại hiệp', 'NXB Võ Lâm', 2000, 90),
(4, 2, 'Tiếu ngạo giang hồ', 'NXB Võ Lâm', 2000, 90),
(5, 2, 'Hôn trộm 55 lần', 'NXB Gió Thu', 2000, 90),
(6, 3, 'Tình anh là đại dương', 'NXB Gió Thu', 2000, 90),
(7, 4, 'Ngủ với vợ bạn', 'NXB Kim Đồng', 2000, 90),
(8, 8, 'Nghĩ giàu làm giàu', 'NXB Hoàng Kim', 2000, 90);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `library`
--
ALTER TABLE `library`
  ADD PRIMARY KEY (`bookid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `library`
--
ALTER TABLE `library`
  MODIFY `bookid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;
