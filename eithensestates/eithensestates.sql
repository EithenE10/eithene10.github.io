-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 07, 2021 at 02:13 PM
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
-- Database: `eithensestates`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE `administrator` (
  `admin_email` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `surname` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`admin_email`, `password`, `firstname`, `surname`) VALUES
('admin@lyit.ie', 'password', 'Eithen', 'ONeil');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `categoryid` int(11) NOT NULL,
  `categoryname` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`categoryid`, `categoryname`) VALUES
(1, 'Residential'),
(2, 'Commercial'),
(3, 'Sites');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `content` text NOT NULL,
  `author_name` varchar(100) NOT NULL,
  `author_email` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` enum('pending','planned') NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `title`, `content`, `author_name`, `author_email`, `created_at`, `status`) VALUES
(36, 'Done Deal', '“I had to make no repairs to the home. I didnt have to do any cleaning whatsoever. It was a done deal. Thank you, Eithens Estates”', 'Evian', 'evian@uisce.com', '2021-08-31 11:17:57', 'planned'),
(37, 'Dream Fulfilled', '\"My wife and I had a dream of downsizing from our house in Cape Elizabeth into a small condo closer to where we work and play in Cork. David and his skilled team helped make that dream a reality. Closed on an ideal new place were excited to call home.\"', 'Maire', 'Maire@live.ie', '2021-08-31 11:19:44', 'planned'),
(38, 'Love the colours!', '\"The colours of this website are just fantastic. Very easy on the eye and not too bright like many other websites :)\"', 'Lorde', 'lorde@live.ie', '2021-08-31 11:20:26', 'planned'),
(39, 'Fantastic Service!', '\"Great company. Customer service second to none!\"', 'Mary Josephine II', 'maryjo@jesus.ie', '2021-08-31 11:21:25', 'planned'),
(40, 'Professionals.', '\"Thanks for all your help! It made getting my foot on the property ladder much easier. Easy to navigate website and professional all around!\"', 'Yaqian', 'Yaqian@live.ie', '2021-08-31 11:23:17', 'planned'),
(42, 'we', 'we', 'we', 'we@live.ie', '2021-09-03 13:16:22', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `property`
--

CREATE TABLE `property` (
  `propertyid` int(11) NOT NULL,
  `address1` varchar(50) NOT NULL,
  `town` varchar(50) NOT NULL,
  `county` varchar(50) NOT NULL,
  `price` double NOT NULL,
  `bedrooms` int(2) DEFAULT NULL,
  `shortdescription` text NOT NULL,
  `longdescription` text NOT NULL,
  `image` varchar(50) NOT NULL,
  `categoryid` int(11) NOT NULL,
  `vendor_email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `property`
--

INSERT INTO `property` (`propertyid`, `address1`, `town`, `county`, `price`, `bedrooms`, `shortdescription`, `longdescription`, `image`, `categoryid`, `vendor_email`) VALUES
(1, '32 O Connell Street Offices', 'Dublin', 'Dublin', 139000, NULL, 'Beautiful 200m² Office Space overlooking the River Liffey!', 'This Beautiful  Office space occupies 200m² of prime office space, overlooking the majestic River Liffey. It truly is a must see!', 'images/housyhouse1.jpg', 2, 'john@gordons.com'),
(2, 'Blackthorns, Castletroy, Limerick', 'Castletroy', 'Limerick City', 10000, 0, '100 Square Meters Site for Sale', 'Flatground site, ideal location for building your own first home!', 'images/site1.jpg', 3, 'paddy@hotmail.com'),
(4, '13 Weston Woods, Weston, Limerick', 'Limerick', 'Limerick', 500000, 1, 'Exquisite Mansion overlooking the woods of Weston!', 'This home is among the supreme community of upperclass in Limerick!', 'images/housyhouse4.jpg', 1, 'paddy@hotmail.com'),
(33, '2 Woodland Hills, Athenry, Galway', 'Galway', 'Galway', 349000, NULL, 'Stunning outdoor pool and hot-tub area with surrounding rock and gravel features gives this home a zen like feel.', 'Welcome to Woodland Hills where the sun is shining, and the birds are singing. Located in a very well-maintained community is this 1416 sqft, 2-bedroom, 2 bathrooms, townhouse. Leading up the unit is a quant front yard with enough space to set up outdoor seating. Upon entry, welcome to a large and open living room that features carpeting, recess lighting and natural lighting from the large sliding door. A fireplace to make the room feel cozy, is the perfect addition to this airy space.', 'images/residential1.jpg', 1, 'mary@live.ie'),
(34, '7407 Jellico Ave, Donegal', 'Donegal', '', 419000, NULL, 'Enter this single story home and be met with wood floors in the living room and a gorgeous fireplace along with a formal dinging area right outside the kitchen.', 'his family home is waiting for your vision to transform into your dream home. The possibilities are abundant. The backyard pool is a perfect staycation for those long summer days, and the indoor fireplace will allow you to get cozy on those winter nights.', 'images/residential2.jpg', 1, 'peter@live.ie'),
(36, '19400 Santa Rita St, Wicklow', 'Wicklow', 'Wicklow', 523000, NULL, 'The living room has beautiful vaulted wood beam ceilings, a cozy fireplace and hardwood floors. Gourmet open concept kitchen boasts Carrara marble countertops, breakfast nook and a large pantry.', 'Located South of The Blvd. Upon entering the double gates you will be welcomed to an Oasis with a spacious circular driveway and beautiful landscaping.  This property offers superior privacy and is located in Prime South Tarzana. This 4 bedroom 6 bathroom home with a media room has expansive grounds with a detached one bedroom guesthouse that can be used as a recording studio.', 'images/residential3.jpg', 1, 'louise@live.ie'),
(37, '114 Grand Cypress Ave, Kildare, Dublin', 'Kildare', 'Dublin', 9844875, NULL, 'The high-image administrative build-out includes a stunning two-story reception area, private offices, conference rooms, and a kitchen area', 'Major Price Reduction 7/2/21: $135 Price Per Sq.Ft! Eithens Estates is pleased to present the opportunity to purchase or lease Industrial/Flex space at 114 Grand Cypress Ave, Kildare, Dublin 93551. This state-of-the-art 72,925 sq.ft. industrial building features a beautiful administrative build-out and a 26 inch tall warehouse with four dock-high bays and four ground-level doors. ', 'images/commercial1.jpg', 2, 'cloud@live.ie'),
(38, '2250 Maple Ave,  Blanchardstown, Dublin', 'Blanchardstown', 'Dublin', 32000000, NULL, 'High Clearance Warehouse, Beautiful Open Office Space, Private Offices & Surface and Rooftop Parking for 103+ Vehicles.', 'Newly renovated flex/creative building; Must see! Prime Dublin Location! Block-to-block along 23rd Street between Wall Street and Maple Avenue. Within 1/2-mile of two Metro Blue Line stations. Easy access to all DTLA freeways. Ideal for owner/user to occupy all or part. High warehouse clearance.', 'images/commerical2.jpg', 2, 'vincent@live.ie'),
(39, '1438-1444 9th St, Galway City, Galway', 'Galway', 'Galway', 17575000, NULL, 'Dense residential population surrounding the subject property. Building is situated on the West side of 9th Street just North of Eyre Square.', 'Owner-User – Great building for an owner-user with future growth potential. Please see rent roll. Approximately 14,500 sf of space (approximately 75% of the building) could be made available at or shortly after close of escrow. Please inquire with broker for details. ', 'images/commerical3.jpg', 2, 'cid@live.ie'),
(40, 'Torran Farm, Clonakilty, Co.Clare', 'Clare', 'Clare', 94000, NULL, 'An opportunity to acquire an easily accessible development plot extending to approximately 1 acre (0.40ha), situated in an enviable elevated position enjoying superb panoramic views across Loch Awe', 'Easily accessible and extending to approximately 1 acre (0.40ha), the site is situated in an enviable elevated position and enjoys superb panoramic views to the south and east across Loch Awe. The plot is offered for sale with outline planning consent and services close by for connection.\r\n\r\nThe plot offers buyers an opportunity to develop a prime residential property in an idyllic and much soughtafter setting. Access to the land is from a shared private track which leads up to the plot from the single-track road.', 'images/site4.jpg', 3, 'biggs@live.ie'),
(41, 'Hillside Estate, Highland, Cork', 'Cork', 'Cork', 97000, NULL, 'Very attractive Plot close to Fort William Town Centre. Elevated position with views looking over Loch Linnhe and beautiful countryside', 'The Plot on Hillside Estate is a very attractive Plot close to Fort William Town Centre, situated 25m Southwest of Black Sheep Bunkhouse. In an elevated position with views overlooking Loch Linnhe and the surrounding countryside. The subjects of sale extending to approximately 0.15 acres (0.127700ha) present an opportunity to purchase a sought-after building plot to build your own home.', 'images/site5.jpg', 3, 'wedge@live.ie'),
(42, 'The Walled Garden, Cuilcheanna, Co. Wexford', 'Wexford', 'Wexford', 148000, NULL, 'Wonderful mountain backdrop and Views of Loch Linnhe and Beinn a’Bheithir.', 'Using a construction method of diminishing courses of granite blocks pinned by slate, this idyllic historical location forms the perfect backdrop for a residential development. Entrance to the garden is from the west wall, leading into the walled garden. The ground is flat and mostly laid to lawn. The land extends to approximately 0.50 Acres (0.20 Hectares).', 'images/site6.jpg', 3, 'sephi@live.ie');

-- --------------------------------------------------------

--
-- Table structure for table `vendor`
--

CREATE TABLE `vendor` (
  `vendor_email` varchar(30) NOT NULL,
  `vendor_firstname` varchar(20) NOT NULL,
  `vendor_surname` varchar(20) NOT NULL,
  `vendor_phone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vendor`
--

INSERT INTO `vendor` (`vendor_email`, `vendor_firstname`, `vendor_surname`, `vendor_phone`) VALUES
('Biggs@live.ie', 'Biggs', 'Balloon', '0853333333'),
('cid@live.ie', 'Cid', 'Highwind', '0893333333'),
('cloud@live.ie', 'Cloud', 'Strife', '0862222222'),
('john@gordons.com', 'John', 'Daly', '0874463453'),
('louise@live.ie', 'Louis', 'Litt', '0852222222'),
('mary@live.ie', 'Mary', 'Hughes', '086111111'),
('paddy@hotmail.com', 'Paddy', 'Brady', '0863456789'),
('peter@live.ie', 'Peter', 'Pan', '0891111111'),
('Sephi@live.ie', 'Sephi', 'Roth', '0866666666'),
('vincent@live.ie', 'Vincent', 'Valentine', '0831111111'),
('wedge@live.ie', 'Wedge', 'Willows', '0851234583');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrator`
--
ALTER TABLE `administrator`
  ADD PRIMARY KEY (`admin_email`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`categoryid`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `property`
--
ALTER TABLE `property`
  ADD PRIMARY KEY (`propertyid`),
  ADD KEY `vendor_email` (`vendor_email`),
  ADD KEY `categoryid` (`categoryid`);

--
-- Indexes for table `vendor`
--
ALTER TABLE `vendor`
  ADD PRIMARY KEY (`vendor_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `categoryid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `property`
--
ALTER TABLE `property`
  MODIFY `propertyid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `property`
--
ALTER TABLE `property`
  ADD CONSTRAINT `property_ibfk_1` FOREIGN KEY (`vendor_email`) REFERENCES `vendor` (`vendor_email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
