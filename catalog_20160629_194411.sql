-- Valentina Studio --
-- MySQL dump --
-- ---------------------------------------------------------


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
-- ---------------------------------------------------------


-- CREATE TABLE "film" -------------------------------------
CREATE TABLE `film` ( 
	`id` Int( 11 ) AUTO_INCREMENT NOT NULL,
	`name` VarChar( 255 ) NOT NULL,
	`poster` VarChar( 255 ) NOT NULL,
	`description` Text NOT NULL,
	`release_at` DateTime NULL,
	`producer` Int( 11 ) NOT NULL,
	PRIMARY KEY ( `id` ) )
ENGINE = InnoDB
AUTO_INCREMENT = 5;
-- ---------------------------------------------------------


-- CREATE TABLE "film_genre" -------------------------------
CREATE TABLE `film_genre` ( 
	`id` Int( 11 ) AUTO_INCREMENT NOT NULL,
	`film` Int( 11 ) NOT NULL,
	`genre` Int( 11 ) NOT NULL,
	PRIMARY KEY ( `id` ) )
ENGINE = InnoDB
AUTO_INCREMENT = 3;
-- ---------------------------------------------------------


-- CREATE TABLE "genre" ------------------------------------
CREATE TABLE `genre` ( 
	`id` Int( 11 ) AUTO_INCREMENT NOT NULL,
	`name` VarChar( 255 ) NOT NULL,
	PRIMARY KEY ( `id` ) )
ENGINE = InnoDB
AUTO_INCREMENT = 5;
-- ---------------------------------------------------------


-- CREATE TABLE "migration" --------------------------------
CREATE TABLE `migration` ( 
	`version` VarChar( 180 ) NOT NULL,
	`apply_time` Int( 11 ) NULL,
	PRIMARY KEY ( `version` ) )
ENGINE = InnoDB;
-- ---------------------------------------------------------


-- CREATE TABLE "producer" ---------------------------------
CREATE TABLE `producer` ( 
	`id` Int( 11 ) AUTO_INCREMENT NOT NULL,
	`name` VarChar( 255 ) NOT NULL,
	PRIMARY KEY ( `id` ) )
ENGINE = InnoDB
AUTO_INCREMENT = 3;
-- ---------------------------------------------------------


-- Dump data of "film" -------------------------------------
INSERT INTO `film`(`id`,`name`,`poster`,`description`,`release_at`,`producer`) VALUES ( '10', 'Побег из Шоушенка', 'https://st.kp.yandex.net/images/film_iphone/iphone360_326.jpg', 'Успешный банкир Энди Дюфрейн обвинен в убийстве собственной жены и ее любовника. Оказавшись в тюрьме под названием Шоушенк, он сталкивается с жестокостью и беззаконием, царящими по обе стороны решетки. Каждый, кто попадает в эти стены, становится их рабом до конца жизни. Но Энди, вооруженный живым умом и доброй душой, отказывается мириться с приговором судьбы и начинает разрабатывать невероятно дерзкий план своего освобождения.', '1994-09-10 00:00:00', '3' );
INSERT INTO `film`(`id`,`name`,`poster`,`description`,`release_at`,`producer`) VALUES ( '11', 'Начало', 'https://st.kp.yandex.net/images/film_iphone/iphone360_447301.jpg', 'Кобб — талантливый вор, лучший из лучших в опасном искусстве извлечения: он крадет ценные секреты из глубин подсознания во время сна, когда человеческий разум наиболее уязвим. Редкие способности Кобба сделали его ценным игроком в привычном к предательству мире промышленного шпионажа, но они же превратили его в извечного беглеца и лишили всего, что он когда-либо любил.', '2010-07-08 00:00:00', '4' );
INSERT INTO `film`(`id`,`name`,`poster`,`description`,`release_at`,`producer`) VALUES ( '12', 'Интерстеллар', 'https://www.kinopoisk.ru/images/film_big/258687.jpg', 'Когда засуха приводит человечество к продовольственному кризису, коллектив исследователей и учёных отправляется сквозь червоточину (которая предположительно соединяет области пространства-времени через большое расстояние) в путешествие, чтобы превзойти прежние ограничения для космических путешествий человека и переселить человечество на другую планету.', '2014-10-26 00:00:00', '4' );
INSERT INTO `film`(`id`,`name`,`poster`,`description`,`release_at`,`producer`) VALUES ( '13', 'Джанго освобожденный', 'https://st.kp.yandex.net/images/film_iphone/iphone360_586397.jpg', 'Эксцентричный охотник за головами, также известный как «Дантист», промышляет отстрелом самых опасных преступников. Работенка пыльная, и без надежного помощника ему не обойтись. Но как найти такого и желательно не очень дорогого? Беглый раб по имени Джанго — прекрасная кандидатура. Правда, у нового помощника свои мотивы — кое с чем надо разобраться…', '2012-12-11 00:00:00', '5' );
INSERT INTO `film`(`id`,`name`,`poster`,`description`,`release_at`,`producer`) VALUES ( '14', 'Гран Торино', 'https://st.kp.yandex.net/images/film_iphone/iphone360_408410.jpg', 'Вышедший на пенсию автомеханик Уолт Ковальски проводит дни, починяя что-то по дому, попивая пиво и раз в месяц заходя к парикмахеру. И хотя последним желанием его недавно почившей жены было совершение им исповеди, Уолту — ожесточившемуся ветерану Корейской войны, всегда держащему свою винтовку наготове, — признаваться в общем-то не в чем. Да и нет того, кому он доверял бы в той полной мере, в какой доверяет своей собаке Дейзи.', '2008-12-09 00:00:00', '6' );
-- ---------------------------------------------------------


-- Dump data of "film_genre" -------------------------------
INSERT INTO `film_genre`(`id`,`film`,`genre`) VALUES ( '22', '10', '6' );
INSERT INTO `film_genre`(`id`,`film`,`genre`) VALUES ( '23', '10', '9' );
INSERT INTO `film_genre`(`id`,`film`,`genre`) VALUES ( '28', '11', '3' );
INSERT INTO `film_genre`(`id`,`film`,`genre`) VALUES ( '29', '11', '6' );
INSERT INTO `film_genre`(`id`,`film`,`genre`) VALUES ( '30', '11', '12' );
INSERT INTO `film_genre`(`id`,`film`,`genre`) VALUES ( '31', '11', '13' );
INSERT INTO `film_genre`(`id`,`film`,`genre`) VALUES ( '32', '12', '6' );
INSERT INTO `film_genre`(`id`,`film`,`genre`) VALUES ( '33', '12', '11' );
INSERT INTO `film_genre`(`id`,`film`,`genre`) VALUES ( '34', '12', '13' );
INSERT INTO `film_genre`(`id`,`film`,`genre`) VALUES ( '35', '13', '3' );
INSERT INTO `film_genre`(`id`,`film`,`genre`) VALUES ( '36', '13', '8' );
INSERT INTO `film_genre`(`id`,`film`,`genre`) VALUES ( '37', '13', '11' );
INSERT INTO `film_genre`(`id`,`film`,`genre`) VALUES ( '38', '14', '6' );
-- ---------------------------------------------------------


-- Dump data of "genre" ------------------------------------
INSERT INTO `genre`(`id`,`name`) VALUES ( '1', 'аниме' );
INSERT INTO `genre`(`id`,`name`) VALUES ( '3', 'боевик' );
INSERT INTO `genre`(`id`,`name`) VALUES ( '4', 'детектив' );
INSERT INTO `genre`(`id`,`name`) VALUES ( '5', 'документальный' );
INSERT INTO `genre`(`id`,`name`) VALUES ( '6', 'драма' );
INSERT INTO `genre`(`id`,`name`) VALUES ( '7', 'исторический' );
INSERT INTO `genre`(`id`,`name`) VALUES ( '8', 'комедия' );
INSERT INTO `genre`(`id`,`name`) VALUES ( '9', 'криминал' );
INSERT INTO `genre`(`id`,`name`) VALUES ( '10', 'мелодрама' );
INSERT INTO `genre`(`id`,`name`) VALUES ( '11', 'приключения' );
INSERT INTO `genre`(`id`,`name`) VALUES ( '12', 'триллер' );
INSERT INTO `genre`(`id`,`name`) VALUES ( '13', 'фантастика' );
-- ---------------------------------------------------------


-- Dump data of "migration" --------------------------------
INSERT INTO `migration`(`version`,`apply_time`) VALUES ( 'm000000_000000_base', '1467070610' );
INSERT INTO `migration`(`version`,`apply_time`) VALUES ( 'm160627_224911_create_tables', '1467070612' );
-- ---------------------------------------------------------


-- Dump data of "producer" ---------------------------------
INSERT INTO `producer`(`id`,`name`) VALUES ( '1', 'Аоки Эй' );
INSERT INTO `producer`(`id`,`name`) VALUES ( '2', 'Тэцуро Араки' );
INSERT INTO `producer`(`id`,`name`) VALUES ( '3', 'Фрэнк Дарабонт' );
INSERT INTO `producer`(`id`,`name`) VALUES ( '4', 'Кристофер Нолан' );
INSERT INTO `producer`(`id`,`name`) VALUES ( '5', 'Квентин Тарантино' );
INSERT INTO `producer`(`id`,`name`) VALUES ( '6', 'Клинт Иствуд' );
-- ---------------------------------------------------------


-- CREATE INDEX "idx-film-producer" ------------------------
CREATE INDEX `idx-film-producer` USING BTREE ON `film`( `producer` );
-- ---------------------------------------------------------


-- CREATE INDEX "idx-film_genre-film" ----------------------
CREATE INDEX `idx-film_genre-film` USING BTREE ON `film_genre`( `film` );
-- ---------------------------------------------------------


-- CREATE INDEX "idx-film_genre-genre" ---------------------
CREATE INDEX `idx-film_genre-genre` USING BTREE ON `film_genre`( `genre` );
-- ---------------------------------------------------------


-- CREATE LINK "fk-film-producer" --------------------------
ALTER TABLE `film`
	ADD CONSTRAINT `fk-film-producer` FOREIGN KEY ( `producer` )
	REFERENCES `producer`( `id` )
	ON DELETE Cascade
	ON UPDATE Restrict;
-- ---------------------------------------------------------


-- CREATE LINK "fk-film_genre-film" ------------------------
ALTER TABLE `film_genre`
	ADD CONSTRAINT `fk-film_genre-film` FOREIGN KEY ( `film` )
	REFERENCES `film`( `id` )
	ON DELETE Cascade
	ON UPDATE Restrict;
-- ---------------------------------------------------------


-- CREATE LINK "fk-film_genre-genre" -----------------------
ALTER TABLE `film_genre`
	ADD CONSTRAINT `fk-film_genre-genre` FOREIGN KEY ( `genre` )
	REFERENCES `genre`( `id` )
	ON DELETE Cascade
	ON UPDATE Restrict;
-- ---------------------------------------------------------


/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
-- ---------------------------------------------------------


