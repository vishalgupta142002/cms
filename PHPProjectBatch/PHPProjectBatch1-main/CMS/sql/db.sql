USE `phpcms`;

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(100) DEFAULT NULL,
  `first_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `mobile` varchar(15) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `gender` enum('male','female','other') DEFAULT 'male',
  `address` text DEFAULT NULL,
  `address2` text DEFAULT NULL,
  `zip` int(8) DEFAULT NULL,
  `state` varchar(40) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  `course` varchar(100) DEFAULT NULL,
  `pid` int(11) DEFAULT NULL,
  `status` enum('Active','Inactive') DEFAULT 'Active',
  `is_admin` enum('on','off') DEFAULT 'off',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `idx_users_user_name` (`user_name`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4;