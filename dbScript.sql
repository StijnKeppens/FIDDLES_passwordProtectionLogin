-- Table structure for table `adminUsers`

CREATE TABLE IF NOT EXISTS `adminUsers` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `userName` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `language` varchar(10),
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
