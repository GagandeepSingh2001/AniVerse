CREATE TABLE IF NOT EXISTS `users` (
  `Username` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `Password` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `Contact` int(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `members`
--

INSERT INTO `users` (`Username`,`Email`,`Password`,`Contact`) VALUES
('John','john123@gmail.com','$2y$12$.Tv/Cn55yl0lMa1OJBG0H.s/EAHei.5B.09r5VEgMw6VJx2dCn/b2', 1098767855),
('Kara','kara65@hotmail.com', '$2y$12$i2t2T46owP4H2kCgLxvZ0uRm3tt8HZHHSC5fFvib/AZYcWM0EnBda', 9980054672);