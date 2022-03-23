-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2022 at 08:17 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `news-site`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(100) NOT NULL,
  `post` int(11) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `post`) VALUES
(30, 'Horror', 3),
(31, 'Sports', 1),
(32, 'Crime', 0),
(33, 'Cyber World', 1),
(34, 'Forest', 1),
(35, 'Social Media', 1);

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `post_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `category` varchar(100) NOT NULL,
  `post_date` varchar(50) NOT NULL,
  `author` int(11) NOT NULL,
  `post_img` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`post_id`, `title`, `description`, `category`, `post_date`, `author`, `post_img`) VALUES
(45, 'A real ghost found in india', 'A ghost is the soul or spirit of a dead person or animal that can appear to the living. In ghostlore, descriptions of ghosts vary widely from an invisible presence to translucent or barely visible wispy shapes, to realistic, lifelike forms. The deliberate attempt to contact the spirit of a deceased person is known as necromancy, or in spiritism as a séance. Other terms associated with it are apparition, haunt, phantom, poltergeist, shade, specter or spectre, spirit, spook, wraith, demon, and ghoul.\r\n\r\nThe belief in the existence of an afterlife, as well as manifestations of the spirits of the dead, is widespread, dating back to animism or ancestor worship in pre-literate cultures. Certain religious practices—funeral rites, exorcisms, and some practices of spiritualism and ritual magic—are specifically designed to rest the spirits of the dead. Ghosts are generally described as solitary, human-like essences, though stories of ghostly armies and the ghosts of animals rather than humans have also been recounted.[2][3] They are believed to haunt particular locations, objects, or people they were associated with in life. According to a 2009 study by the Pew Research Center, 18% of Americans say they have seen a ghost.[4]\r\n\r\nThe overwhelming consensus of science is that there is no proof that ghosts exist.[5] Their existence is impossible to falsify,[5] and ghost hunting has been classified as pseudoscience.[6][7][8] Despite centuries of investigation, there is no scientific evidence that any location is inhabited by spirits of the dead.[6][9] Historically, certain toxic and psychoactive plants (such as datura and hyoscyamus niger), whose use has long been associated with necromancy and the underworld, have been shown to contain anticholinergic compounds that are pharmacologically linked to dementia (specifically DLB) as well as histological patterns of neurodegeneration.[10][11] Recent research has indicated that ghost sightings may be related to degenerative brain diseases such as Alzheimer\'s disease.[12] Common prescription medication and over-the-counter drugs (such as sleep aids) may also, in rare instances, cause ghost-like hallucinations, particularly zolpidem and diphenhydramine.[13] Older reports linked carbon monoxide poisoning to ghost-like hallucinations.[14]', '30', '23 Mar, 2022', 25, '1648016406-horror1.png'),
(46, 'The Dummy News 1', 'For other uses, see Crime (disambiguation), Criminal (disambiguation), and Criminals (disambiguation).\r\n\"Offender\" redirects here. For the film, see Offender (film).\r\nIn ordinary language, a crime is an unlawful act punishable by a state or other authority.[1] The term crime does not, in modern criminal law, have any simple and universally accepted definition,[2] though statutory definitions have been provided for certain purposes.[3] The most popular view is that crime is a category created by law; in other words, something is a crime if declared as such by the relevant and applicable law.[2] One proposed definition is that a crime or offence (or criminal offence) is an act harmful not only to some individual but also to a community, society, or the state (\"a public wrong\"). Such acts are forbidden and punishable by law.[1][4]\r\n\r\nThe notion that acts such as murder, rape, and theft are to be prohibited exists worldwide.[5] What precisely is a criminal offence is defined by the criminal law of each relevant jurisdiction. While many have a catalogue of crimes called the criminal code, in some common law nations no such comprehensive statute exists.\r\n\r\nThe state (government) has the power to severely restrict one\'s liberty for committing a crime. In modern societies, there are procedures to which investigations and trials must adhere. If found guilty, an offender may be sentenced to a form of reparation such as a community sentence, or, depending on the nature of their offence, to undergo imprisonment, life imprisonment or, in some jurisdictions, death. Some jurisdictions sentence individuals to programs to emphasize or provide for their rehabilitation while most jurisdictions sentence individuals with the goal of punishing them or a mix of the aforementioned practices.[citation needed]\r\n\r\nUsually, to be classified as a crime, the \"act of doing something criminal\" (actus reus) must – with certain exceptions – be accompanied by the \"intention to do something criminal\" (mens rea).[4]\r\n\r\nWhile every crime violates the law, not every violation of the law counts as a crime. Breaches of private law (torts and breaches of contract) are not automatically punished by the state, but can be enforced through civil', '32', '23 Mar, 2022', 25, '1648017567-index.jpeg'),
(47, 'The Dummy News 2', 'Since the Internet\'s arrival and with the digital transformation initiated in recent years, the notion of cybersecurity has become a familiar subject both in our professional and personal lives. Cybersecurity and cyber threats have been constant for the last 50 years of technological change. In the 1970s and 1980s, computer security was mainly limited to academia until the conception of the Internet, where, with increased connectivity, computer viruses and network intrusions began to take off. After the spread of viruses in the 1990s, the 2000s marked the institutionalization of cyber threats and cybersecurity.\r\n\r\nFinally, from the 2010s, large-scale attacks and government regulations started emerging.\r\n\r\nThe April 1967 session organized by Willis Ware at the Spring Joint Computer Conference, and the later publication of the Ware Report, were foundational moments in the history of the field of computer security.[5] Ware\'s work straddled the intersection of material, cultural, political, and social concerns.[5]\r\n\r\nA 1977 NIST publication[6] introduced the \"CIA triad\" of Confidentiality, Integrity, and Availability as a clear and simple way to describe key security goals.[7] While still relevant, many more elaborate frameworks have since been proposed.[8][9]\r\n\r\nHowever, the 1970s and 1980s didn\'t have any grave computer threats because computers and the internet were still developing, and security threats were easily identifiable. Most often, threats came from malicious insiders who gained unauthorized access to sensitive documents and files. Although malware and network breaches existed during the early years, they did not use them for financial gain. However, by the second half of the 1970s, established computer firms like IBM started offering commercial access control systems and computer security software products.[10]\r\n\r\nIt started with Creeper in 1971. Creeper was an experimental computer program written by Bob Thomas at BBN. It is considered the first computer worm.\r\n\r\nIn 1972, the first anti-virus software was created, called Reaper. It was created by Ray Tomlinson to move across the ARPANET and delete the Creeper worm.\r\n\r\nBetween September 1986 and June 1987, a group of German hackers performed the first documented case of cyber espionage. The group hacked into American defense contractors, universities, and military bases\' networks and sold gathered information to the Soviet KGB. The group was led by Markus Hess, who was arrested on 29 June 1987. He was convicted of espionage (along with two co-conspirators) on 15 Feb 1990.\r\n\r\nIn 1988, one of the first computer worms, called Morris worm was distributed via the Internet. It gained significant mainstream media attention.\r\n\r\nIn 1993, Netscape started developing the protocol SSL, shortly after the National Center for Supercomputing Applications (NCSA) launched Mosaic 1.0, the first web browser, in 1993. Netscape had SSL version 1.0 ready in 1994, but it was never released to the public due to many serious security vulnerabilities. These weaknesses included replay attacks and a vulnerability that allowed hackers to alter unencrypted communications sent by users. However, in February 1995, Netscape launched the Version 2.0.\r\n\r\nFailed offensive strategy\r\nThe National Security Agency (NSA) is responsible for both the protection of U.S. information systems and also for collecting foreign intelligence.[11] These two duties are in conflict with each other. Protecting information systems includes evaluating software, identifying security flaws, and taking steps to correct the flaws, which is a defensive action. Collecting intelligence includes exploiting security flaws to extract information, which is an offensive action. Correcting security flaws makes the flaws unavailable for NSA exploitation.\r\n\r\nThe agency analyzes commonly used software in order to find security flaws, which it reserves for offensive purposes against competitors of the United States. The agency seldom takes defensive action by reporting the flaws to software producers so they can eliminate the security flaws.[12]\r\n\r\nThe offensive strategy worked for a while, but eventually, other nations, including Russia, Iran, North Korea, and China have acquired their own offensive capability and tended to use it against the United States. NSA contractors created and sold \"click-and-shoot\" attack tools to U.S. agencies and close allies, but eventually, the tools made their way to foreign adversaries. In 2016, NSAs own hacking tools were hacked and have been used by Russia and North Korea. NSA\'s employees and contractors have been recruited at high salaries by adversaries, anxious to compete in cyberwarfare.[12]\r\n\r\nFor example, in 2007, the United States and Israel began exploiting security flaws in the Microsoft Windows operating system to attack and damage equipment used in Iran to refine nuclear materials. Iran responded by heavily investing in their own cyberwarfare capability, which they began using against the United States.[12]', '33', '23 Mar, 2022', 25, '1648017612-horror1.png'),
(48, 'The Dummy News 4', 'A forest is an area of land dominated by trees.[1] Hundreds of definitions of forest are used throughout the world, incorporating factors such as tree density, tree height, land use, legal standing, and ecological function.[2][3][4] The United Nations\' Food and Agriculture Organization (FAO) defines a forest as, \"Land spanning more than 0.5 hectares with trees higher than 5 meters and a canopy cover of more than 10 percent, or trees able to reach these thresholds in situ. It does not include land that is predominantly under agricultural or urban use.\"[5] Using this definition, Global Forest Resources Assessment 2020 (FRA 2020) found that forests covered 4.06 billion hectares (10.0 billion acres; 40.6 million square kilometres; 15.7 million square miles), or approximately 31 percent of the world\'s land area in 2020.[6]\r\n\r\nForests are the predominant terrestrial ecosystem of Earth, and are distributed around the globe.[7] More than half of the world\'s forests are found in only five countries (Brazil, Canada, China, the Russian Federation, and the United States of America). The largest share of forests (45 percent) are in the tropical latitudes, followed by those in the boreal, temperate, and subtropic domains.[8]\r\n\r\nForests account for 75% of the gross primary production of the Earth\'s biosphere, and contain 80% of the Earth\'s plant biomass. Net primary production is estimated at 21.9 gigatonnes of biomass per year for tropical forests, 8.1 for temperate forests, and 2.6 for boreal forests.[7]\r\n\r\nForests at different latitudes and elevations, and with different precipitation and evapotranspiration[9] form distinctly different biomes: boreal forests around the North Pole, tropical moist forests and tropical dry forests around the Equator, and temperate forests at the middle latitudes. Areas at higher elevations tend to support forests similar to those at higher latitudes, and the amount of precipitation also affects forest composition.\r\n\r\nAlmost half the forest area (49 percent) is relatively intact, while 9 percent is found in fragments with little or no connectivity. Tropical rainforests and boreal coniferous forests are the least fragmented, whereas subtropical dry forests and temperate oceanic forests are among the most fragmented. Roughly 80 percent of the world\'s forest area is found in patches larger than 1 million hectares (2.5 million acres). The remaining 20 percent is located in more than 34 million patches around the world – the vast majority less than 1,000 hectares (2,500 acres) in size.[8]\r\n\r\nHuman society and forests influence each other in both positive and negative ways.[10] Forests provide ecosystem services to humans and serve as tourist attractions. Forests can also affect people\'s health. Human activities, including unsustainable use of forest resources, can negatively affect forest ecosystems.[11]', '34', '23 Mar, 2022', 25, '1648018110-panda.jpg'),
(49, 'Sports', 'Sport pertains to any form of competitive physical activity or game[1] that aims to use, maintain or improve physical ability and skills while providing enjoyment to participants and, in some cases, entertainment to spectators.[2] Sports can, through casual or organized participation, improve one\'s physical health. Hundreds of sports exist, from those between single contestants, through to those with hundreds of simultaneous participants, either in teams or competing as individuals. In certain sports such as racing, many contestants may compete, simultaneously or consecutively, with one winner; in others, the contest (a match) is between two sides, each attempting to exceed the other. Some sports allow a \"tie\" or \"draw\", in which there is no single winner; others provide tie-breaking methods to ensure one winner and one loser. A number of contests may be arranged in a tournament producing a champion. Many sports leagues make an annual champion by arranging games in a regular sports season, followed in some cases by playoffs.\r\n\r\nSport is generally recognised as system of activities based in physical athleticism or physical dexterity, with major competitions such as the Olympic Games admitting only sports meeting this definition.[3] Other organisations, such as the Council of Europe, preclude activities without a physical element from classification as sports.[2] However, a number of competitive, but non-physical, activities claim recognition as mind sports. The International Olympic Committee (through ARISF) recognises both chess and bridge as bona fide sports, and SportAccord, the international sports federation association, recognises five non-physical sports: bridge, chess, draughts (checkers), Go and xiangqi,[4][5] and limits the number of mind games which can be admitted as sports.[1]\r\n\r\nSport is usually governed by a set of rules or customs, which serve to ensure fair competition, and allow consistent adjudication of the winner. Winning can be determined by physical events such as scoring goals or crossing a line first. It can also be determined by judges who are scoring elements of the sporting performance, including objective or subjective measures such as technical performance or artistic impression.\r\n\r\nRecords of performance are often kept, and for popular sports, this information may be widely announced or reported in sport news. Sport is also a major source of entertainment for non-participants, with spectator sport drawing large crowds to sport venues, and reaching wider audiences through broadcasting. Sport betting is in some cases severely regulated, and in some cases is central to the sport.\r\n\r\nAccording to A.T. Kearney, a consultancy, the global sporting industry is worth up to $620 billion as of 2013.[6] The world\'s most accessible and practised sport is running, while association football is the most popular spectator sport.[7]', '31', '23 Mar, 2022', 25, '1648018298-sports.jpg'),
(50, 'The Dummy News', 'Sport pertains to any form of competitive physical activity or game[1] that aims to use, maintain or improve physical ability and skills while providing enjoyment to participants and, in some cases, entertainment to spectators.[2] Sports can, through casual or organized participation, improve one\'s physical health. Hundreds of sports exist, from those between single contestants, through to those with hundreds of simultaneous participants, either in teams or competing as individuals. In certain sports such as racing, many contestants may compete, simultaneously or consecutively, with one winner; in others, the contest (a match) is between two sides, each attempting to exceed the other. Some sports allow a \"tie\" or \"draw\", in which there is no single winner; others provide tie-breaking methods to ensure one winner and one loser. A number of contests may be arranged in a tournament producing a champion. Many sports leagues make an annual champion by arranging games in a regular sports season, followed in some cases by playoffs.\r\n\r\nSport is generally recognised as system of activities based in physical athleticism or physical dexterity, with major competitions such as the Olympic Games admitting only sports meeting this definition.[3] Other organisations, such as the Council of Europe, preclude activities without a physical element from classification as sports.[2] However, a number of competitive, but non-physical, activities claim recognition as mind sports. The International Olympic Committee (through ARISF) recognises both chess and bridge as bona fide sports, and SportAccord, the international sports federation association, recognises five non-physical sports: bridge, chess, draughts (checkers), Go and xiangqi,[4][5] and limits the number of mind games which can be admitted as sports.[1]\r\n\r\nSport is usually governed by a set of rules or customs, which serve to ensure fair competition, and allow consistent adjudication of the winner. Winning can be determined by physical events such as scoring goals or crossing a line first. It can also be determined by judges who are scoring elements of the sporting performance, including objective or subjective measures such as technical performance or artistic impression.\r\n\r\nRecords of performance are often kept, and for popular sports, this information may be widely announced or reported in sport news. Sport is also a major source of entertainment for non-participants, with spectator sport drawing large crowds to sport venues, and reaching wider audiences through broadcasting. Sport betting is in some cases severely regulated, and in some cases is central to the sport.\r\n\r\nAccording to A.T. Kearney, a consultancy, the global sporting industry is worth up to $620 billion as of 2013.[6] The world\'s most accessible and practised sport is running, while association football is the most popular spectator sport.[7]', '35', '23 Mar, 2022', 27, '1648018473-politics.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `website_name` varchar(100) NOT NULL,
  `logo` varchar(100) NOT NULL,
  `website_footer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `website_name`, `logo`, `website_footer`) VALUES
(1, 'MyNewsSite', 'logo.jpeg', '© Copyright 2022 News | Powered by Vishal');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(40) DEFAULT NULL,
  `role` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `first_name`, `last_name`, `username`, `password`, `role`) VALUES
(27, 'Sonam', 'Sonam', 'user123', '12dea96fec20593566ab75692c9949596833adc9', 0),
(25, 'admin', 'admin', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`post_id`),
  ADD UNIQUE KEY `post_id` (`post_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
