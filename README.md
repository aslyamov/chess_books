# chess_books

Данный проект являеться учебным.

SQL Запрос
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
	(2, '978-5-9902352-8-1', 'Бологан Виорел', 'Каталонское начало (репертуар за белых)', '-', 'Андрей Ельков', '2013', '-', NULL, 'https://cloud.mail.ru/public/8eww/21cid8jWG'),
	(3, '978-5-9908920-9-5', 'Гельфанд Борис', 'Принятие позиционных решений в шахматах', '-', 'Российская Шахматная Федерация', 2016, '-', NULL, 'https://cloud.mail.ru/public/5AUX/pPxRyxJ3y'),
	(4, '978-5-94693-685-9', 'Тигран Петросян', 'Шахматная школа Тиграна Петросяна', 'Библиотечка шахматиста', 'Русский Шахматный Дом', 2018, '-', NULL, 'https://cloud.mail.ru/public/N7DU/RJgJuZmgi'),
	(5, '978-5-6040218-5-9', 'Гельфанд Борис', 'Принятие динамических решений в шахматах', '-', 'Российская Шахматная Федерация', 2018, '-', NULL, 'https://cloud.mail.ru/public/GZgP/m7rvwCFQx'),
	(6, '978-5-222-27969-4', 'Безгодов Алексей', 'Победный эндшпиль. Тайна разноцветных слонов', '-', 'Феникс', 2017, '-', NULL, 'https://cloud.mail.ru/public/7rxz/ew31xrcga');
