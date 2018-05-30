CREATE TABLE `todolist` (
  `id` int(10) UNSIGNED NOT NULL UNIQUE AUTO_INCREMENT,
  `username`  varchar(30) NOT NULL,
  `task` varchar(100) NOT NULL
);

INSERT INTO `todolist` (`id`, `username`, `task`) VALUES
(1, 'aayush', 'need to do stuffs'),
(2, 'aayush', 'need to do stuffs'),
(3, 'aayush', 'need to do stuffs'),
(4, 'aayush', 'need to do stuffs');
