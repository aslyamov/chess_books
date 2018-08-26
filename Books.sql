/* Создание БД */
CREATE TABLE IF NOT EXISTS `BOOKS` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ISBN-ISSN` char(50) DEFAULT NULL,
  `author` char(255) DEFAULT NULL,
  `title` char(255) DEFAULT NULL,
  `ser` char(50) DEFAULT '-',
  `pub` char(50) DEFAULT NULL,
  `years` year(4) DEFAULT NULL,
  `volume` char(50) DEFAULT '-',
  `description` text,
  `download` char(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  FULLTEXT KEY `books_search` (`author`,`title`,`description`,`ser`,`pub`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

INSERT INTO `BOOKS` (`id`, `ISBN-ISSN`, `author`, `title`, `ser`, `pub`, `years`, `volume`, `description`, `download`) VALUES
	(1, '978-5-94693-535-7', 'Аврух Борис', 'Гроссмейстерский репертуар 1.d4. Каталонское начало', 'Гроссмейстерский репертуар', 'Русский Шахматный Дом', '2017', '1A', NULL, 'https://cloud.mail.ru/public/4TBh/tWe49PAct'),
	(2, '978-5-9902352-8-1', 'Бологан Виорел', 'Каталонское начало (репертуар за белых)', '-', 'Андрей Ельков', '2013', '-', NULL, 'https://cloud.mail.ru/public/8eww/21cid8jWG');