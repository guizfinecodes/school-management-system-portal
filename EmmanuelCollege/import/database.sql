
CREATE TABLE IF NOT EXISTS `tbl_products1` (
  `products_id` int(11) NOT NULL auto_increment,
  `products_name` varchar(255) NOT NULL,
  `products_quantity` int(11) NOT NULL,
  `products_model` varchar(255) NOT NULL,
  `products_price` double NOT NULL,
  `products_weight` double NOT NULL,
  `products_status` enum('A','I') NOT NULL default 'A',
  PRIMARY KEY  (`products_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `tbl_products2` (
  `products_id` int(11) NOT NULL auto_increment,
  `products_name` varchar(255) NOT NULL,
  `products_quantity` int(11) NOT NULL,
  `products_model` varchar(255) NOT NULL,
  `products_price` double NOT NULL,
  `products_weight` double NOT NULL,
  `products_status` enum('A','I') NOT NULL default 'A',
  PRIMARY KEY  (`products_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

INSERT INTO `tbl_products1` (`products_id`, `products_name`, `products_quantity`, `products_model`, `products_price`, `products_weight`, `products_status`) VALUES
(1, 'Peter England', 125, 'XP123', 400, 10, 'A'),
(2, 'Arrow', 360, 'PP123', 900, 12, 'A'),
(3, 'Allen Solly', 456, 'OP78456', 520, 3, 'A'),
(4, 'Raymond', 756, 'SS789465', 1022, 36, 'A'),
(5, 'Grasim', 899, 'GS132645', 640, 55, 'A'),
(6, 'Levis', 885, 'LL123465', 1500, 36, 'A'),
(7, 'Lee', 74, 'Lee4556', 960, 44, 'A');