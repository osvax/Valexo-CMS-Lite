-- MySQL dump 10.13  Distrib 5.7.29, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: valexo_lite
-- ------------------------------------------------------
-- Server version	5.7.29

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `va_articles`
--

DROP TABLE IF EXISTS `va_articles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `va_articles` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `author_id` bigint(20) unsigned NOT NULL,
  `uri` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `show` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `va_articles_author_id_foreign` (`author_id`),
  CONSTRAINT `va_articles_author_id_foreign` FOREIGN KEY (`author_id`) REFERENCES `va_users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `va_articles`
--

LOCK TABLES `va_articles` WRITE;
/*!40000 ALTER TABLE `va_articles` DISABLE KEYS */;
INSERT INTO `va_articles` VALUES (1,1,'articles/ekologichney-avtomobil-nizhe-nalog/index.html','Экологичней автомобиль – ниже налог','Подмосковные автомобилисты испытают на погрузиться в думу электронную рассылку штрафов. Тестирование системы, позволяющей водителям отказаться от бумажной рассылки штрафов, начнется уже в в этом случае недавно Пилотный план стартует на охотно территории..','Подмосковные автомобилисты испытают на погрузиться в думу электронную рассылку штрафов. Тестирование системы, позволяющей водителям отказаться от бумажной рассылки штрафов, начнется уже в в этом случае недавно Пилотный план стартует на охотно территории..','Подмосковные автомобилисты испытают на погрузиться в думу электронную рассылку штрафов. Тестирование системы, позволяющей водителям отказаться от бумажной рассылки штрафов, начнется уже в в этом случае недавно Пилотный план стартует на охотно территории...','upload/iblock/172/1729dbf1ca8e54873db0e1943c47f8f9.jpg',1,'2020-02-16 01:06:37','2020-02-16 01:06:37'),(2,4,'articles/podmoskove-bez-bumazhnykh-shtrafov/index.html','Подмосковье без бумажных штрафов','Подмосковные автомобилисты испытают на себе электронную рассылку штрафов.','Подмосковные автомобилисты испытают на себе электронную рассылку штрафов.','Подмосковные автомобилисты испытают на себе электронную рассылку штрафов.','upload/iblock/673/67391673b559667cad70cddfc706fb57.jpg',1,'2020-02-22 16:29:30','2020-02-22 16:29:30'),(3,2,'articles/kachestvo-topliva-pod-kontrolem-voditeley/index.html','Качество топлива – под контролем водителей','Планируется привлечь общественные организации и ассоциации автовладельцев к контролю качества бензина на АЗС. Предполагается, что автомобилисты будут {подавать мнение|отзываться} жалобы на бензин плохого качества в департамент природопользования и...','Качество топлива – под контролем водителей','Планируется привлечь общественные организации и ассоциации автовладельцев к контролю качества бензина на АЗС. Предполагается, что автомобилисты будут {подавать мнение|отзываться} жалобы на бензин плохого качества в департамент природопользования и...','upload/iblock/ed4/ed4aa96b739646a28c4b5847b39b69fe.jpg',1,'2020-02-17 18:52:37','2020-02-17 18:52:37'),(4,2,'articles/likhachey-stalo-menshe/index.html','Лихачей стало меньше','Столичные водители меньше нарушают скоростной режим.','Столичные водители меньше нарушают скоростной режим.','<p>Столичные водители меньше нарушают скоростной режим. </p>','upload/iblock/e9e/e9e25b9d3ef13074370c7ddf6833597f.jpg',1,'2020-02-19 08:23:17','2020-02-19 08:23:17'),(5,3,'articles/platnye-dorogi-podmoskovya/index.html','Платные дороги Подмосковья','Столичные водители мал мала меньше нарушают скоростной порядок В 2013 г. московские сплетня выписали водителям штрафов в пять раз больше, чем в 2012 г. (377 млн. руб.). однако столичные водители реже преступают некоторые пункты правил, касается это...','Платные дороги Подмосковья','Столичные водители мал мала меньше нарушают скоростной порядок В 2013 г. московские сплетня выписали водителям штрафов в пять раз больше, чем в 2012 г. (377 млн. руб.). однако столичные водители реже преступают некоторые пункты правил, касается это...','upload/iblock/c6c/c6cbbd2a8dfcbe8cfdb27ca1b3f9fd5f.jpg',1,'2020-02-23 21:00:31','2020-02-23 21:00:31'),(6,3,'http://www.vlasova.ru/corrupti-dignissimos-hic-dolores-sunt-similique','Ноздрев. — Никакой.','Ноздрев. — Никакой.','А в.','Столичные водители мал мала меньше нарушают скоростной порядок В 2013 г. московские сплетня выписали водителям штрафов в пять раз больше, чем в 2012 г. (377 млн. руб.). однако столичные водители реже преступают некоторые пункты правил, касается это...','upload/iblock/172/1729dbf1ca8e54873db0e1943c47f8f9.jpg',0,'2020-02-10 18:43:20','2020-02-10 18:43:20'),(7,3,'http://muraveva.net/repudiandae-quia-voluptas-voluptatem-molestias-voluptatibus-quis','Маниловым и несколько.','Маниловым и несколько.','.','Столичные водители мал мала меньше нарушают скоростной порядок В 2013 г. московские сплетня выписали водителям штрафов в пять раз больше, чем в 2012 г. (377 млн. руб.). однако столичные водители реже преступают некоторые пункты правил, касается это...','upload/iblock/673/67391673b559667cad70cddfc706fb57.jpg',0,'2020-02-25 03:29:17','2020-02-25 03:29:17'),(8,3,'http://www.polakova.ru/reprehenderit-perspiciatis-beatae-mollitia-et-rerum-et-repudiandae','Ноздрев с лицом.','Ноздрев с лицом.','Но нет: я думаю, ты все.','Столичные водители мал мала меньше нарушают скоростной порядок В 2013 г. московские сплетня выписали водителям штрафов в пять раз больше, чем в 2012 г. (377 млн. руб.). однако столичные водители реже преступают некоторые пункты правил, касается это...','upload/iblock/673/67391673b559667cad70cddfc706fb57.jpg',1,'2020-02-22 18:49:47','2020-02-22 18:49:47'),(9,1,'http://www.saskov.net/quaerat-beatae-quasi-necessitatibus-tenetur-laudantium-velit-distinctio-qui','Коробочка, коллежская.','Коробочка, коллежская.','Ноздрев.','Столичные водители мал мала меньше нарушают скоростной порядок В 2013 г. московские сплетня выписали водителям штрафов в пять раз больше, чем в 2012 г. (377 млн. руб.). однако столичные водители реже преступают некоторые пункты правил, касается это...','upload/iblock/673/67391673b559667cad70cddfc706fb57.jpg',0,'2020-02-10 17:58:07','2020-02-10 17:58:07'),(10,1,'http://www.blinov.org/unde-fuga-vitae-dolor-impedit-soluta-omnis','Чуткий нос его слышал за.','Чуткий нос его слышал за.','Один раз.','Столичные водители мал мала меньше нарушают скоростной порядок В 2013 г. московские сплетня выписали водителям штрафов в пять раз больше, чем в 2012 г. (377 млн. руб.). однако столичные водители реже преступают некоторые пункты правил, касается это...','upload/iblock/673/67391673b559667cad70cddfc706fb57.jpg',0,'2020-01-31 09:49:18','2020-01-31 09:49:18'),(11,1,'http://noskova.ru/','Мы их поставим опять так, как.','Мы их поставим опять так, как.','Я дивлюсь, как.','Столичные водители мал мала меньше нарушают скоростной порядок В 2013 г. московские сплетня выписали водителям штрафов в пять раз больше, чем в 2012 г. (377 млн. руб.). однако столичные водители реже преступают некоторые пункты правил, касается это...','upload/iblock/673/67391673b559667cad70cddfc706fb57.jpg',0,'2020-02-24 06:25:15','2020-02-24 06:25:15'),(12,4,'http://www.gerasimov.com/in-quo-earum-voluptatem','А если найдутся, то.','А если найдутся, то.','Эй, Пелагея! — сказала.','Столичные водители мал мала меньше нарушают скоростной порядок В 2013 г. московские сплетня выписали водителям штрафов в пять раз больше, чем в 2012 г. (377 млн. руб.). однако столичные водители реже преступают некоторые пункты правил, касается это...','upload/iblock/673/67391673b559667cad70cddfc706fb57.jpg',1,'2020-02-12 00:40:11','2020-02-12 00:40:11'),(13,4,'http://www.semenov.com/eum-commodi-perferendis-placeat-provident','Она поднялась с дивана, на.','Она поднялась с дивана, на.','О чем же вы думаете.','Столичные водители мал мала меньше нарушают скоростной порядок В 2013 г. московские сплетня выписали водителям штрафов в пять раз больше, чем в 2012 г. (377 млн. руб.). однако столичные водители реже преступают некоторые пункты правил, касается это...','upload/iblock/673/67391673b559667cad70cddfc706fb57.jpg',0,'2020-02-06 22:07:56','2020-02-06 22:07:56'),(14,1,'http://www.evdokimov.com/nostrum-quasi-voluptate-ipsa-esse-voluptas-sint-harum.html','Жена его… впрочем, они.','Жена его… впрочем, они.','Чичиков.','Столичные водители мал мала меньше нарушают скоростной порядок В 2013 г. московские сплетня выписали водителям штрафов в пять раз больше, чем в 2012 г. (377 млн. руб.). однако столичные водители реже преступают некоторые пункты правил, касается это...','upload/iblock/673/67391673b559667cad70cddfc706fb57.jpg',1,'2020-02-08 04:24:00','2020-02-08 04:24:00'),(15,2,'https://aleksandrova.ru/eligendi-vero-repellat-rerum.html','Деревня.','Деревня.','Таков уже русский.','Столичные водители мал мала меньше нарушают скоростной порядок В 2013 г. московские сплетня выписали водителям штрафов в пять раз больше, чем в 2012 г. (377 млн. руб.). однако столичные водители реже преступают некоторые пункты правил, касается это...','upload/iblock/673/67391673b559667cad70cddfc706fb57.jpg',0,'2020-02-20 05:56:39','2020-02-20 05:56:39'),(16,2,'http://www.kulakova.com/magnam-et-libero-voluptatibus-at-ex-quas-occaecati','Я знаю, что выиграю, да мне хочется.','Я знаю, что выиграю, да мне хо...','Селифан, казалось.','Столичные водители мал мала меньше нарушают скоростной порядок В 2013 г. московские сплетня выписали водителям штрафов в пять раз больше, чем в 2012 г. (377 млн. руб.). однако столичные водители реже преступают некоторые пункты правил, касается это...','upload/iblock/673/67391673b559667cad70cddfc706fb57.jpg',0,'2020-02-24 04:56:19','2020-02-24 04:56:19'),(17,2,'http://www.kononova.net/reprehenderit-vel-sit-qui-animi-sequi-nihil-omnis','Сейчас.','Сейчас.','Манилов и совершенно.','Столичные водители мал мала меньше нарушают скоростной порядок В 2013 г. московские сплетня выписали водителям штрафов в пять раз больше, чем в 2012 г. (377 млн. руб.). однако столичные водители реже преступают некоторые пункты правил, касается это...','upload/iblock/673/67391673b559667cad70cddfc706fb57.jpg',0,'2020-01-30 18:31:38','2020-01-30 18:31:38'),(18,1,'http://www.kabanova.ru/odit-blanditiis-odio-et-quis-reiciendis-non-omnis','Максимову.','Максимову.','В.','Столичные водители мал мала меньше нарушают скоростной порядок В 2013 г. московские сплетня выписали водителям штрафов в пять раз больше, чем в 2012 г. (377 млн. руб.). однако столичные водители реже преступают некоторые пункты правил, касается это...','upload/iblock/673/67391673b559667cad70cddfc706fb57.jpg',1,'2020-02-03 02:07:01','2020-02-03 02:07:01'),(19,2,'http://www.akusev.ru/laudantium-excepturi-ad-quidem.html','Чичиков.','Чичиков.','Чичиков. Манилов выронил тут же.','Столичные водители мал мала меньше нарушают скоростной порядок В 2013 г. московские сплетня выписали водителям штрафов в пять раз больше, чем в 2012 г. (377 млн. руб.). однако столичные водители реже преступают некоторые пункты правил, касается это...','upload/iblock/673/67391673b559667cad70cddfc706fb57.jpg',0,'2020-02-19 03:06:47','2020-02-19 03:06:47'),(20,2,'https://www.dorofeev.org/quo-sunt-tempore-rerum-qui','Ведь я.','Ведь я.','Впрочем, хотя эти.','Собакевич, оборотившись. — Готова? Пожалуйте ее сюда! — Он пробежал ее глазами и подивился — аккуратности.','upload/iblock/673/67391673b559667cad70cddfc706fb57.jpg',0,'2020-02-22 23:56:36','2020-02-22 23:56:36'),(21,2,'https://abramova.com/facere-et-minus-tempora-ut-odit.html','Переведи их.','Переведи их.','Он наливал очень усердно в оба стакана, и.','Заседатель были недовольны, не услышавши ни разу ни «любезные», ни «почтенные». Чубарый чувствовал пренеприятные удары по своим полным и широким частям. «Вишь ты, как разнесло его! — кричал Ноздрев, — я немею пред — законом. Последние слова он уже довольно поздним утром. Солнце сквозь окно блистало ему прямо в глаза, в которых видны были навернувшиеся слезы. Манилов никак.','upload/iblock/673/67391673b559667cad70cddfc706fb57.jpg',1,'2020-02-18 04:24:55','2020-02-18 04:24:55'),(22,2,'http://sidorov.ru/quos-sed-cumque-et-et-et-sit-qui.html','Но если выехать.','Но если выехать.','Странная.','Нет, матушка, другого рода товарец: скажите, у вас был пожар, матушка? — Плохо, отец мой. — Как милости вашей будет угодно, — отвечал Чичиков и заглянул в — кармане, — продолжал он. — Я с удовольствием поговорю, коли хороший человек; с человеком хорошим мы всегда свои други, тонкие приятели; выпить ли чаю, или закусить — с таким вопросом обратился Чичиков к стоявшей — бабе.','upload/iblock/673/67391673b559667cad70cddfc706fb57.jpg',0,'2020-02-05 06:12:47','2020-02-05 06:12:47'),(23,2,'http://www.blohina.ru/voluptas-sunt-ea-dignissimos-omnis-autem-voluptates-aut','Чичиков.','Чичиков.','На все воля божья, матушка! — сказал.','Теперь даже, как вспомнишь… черт возьми! то есть именно такая, как бывают гостиницы в губернских и уездных городах не бывает простого сотерна. Потому Ноздрев велел принести бутылку мадеры, лучше которой не пивал сам фельдмаршал. Мадера, точно, даже горела.','upload/iblock/673/67391673b559667cad70cddfc706fb57.jpg',0,'2020-02-12 17:25:25','2020-02-12 17:25:25'),(24,1,'http://www.panfilova.net/aut-dicta-iste-voluptatem-quos-enim','Посмотрите, какие.','Посмотрите, какие.','Чубарый с.','А у нас на театрах гости, входящие в последнем акте на сцену. Игроки были изображены с прицелившимися киями, несколько вывороченными назад руками и косыми ногами, только что снесенное, оно держится против света в смуглых руках испытующей его ключницы и пропускает сквозь себя лучи сияющего.','upload/iblock/673/67391673b559667cad70cddfc706fb57.jpg',1,'2020-02-14 11:54:52','2020-02-14 11:54:52'),(25,2,'http://www.belaev.net/maiores-ut-cupiditate-quibusdam-et-molestiae-iure-quam-voluptatem.html','Манилов будет поделикатней.','Манилов будет поделикатней.','Оба приятеля, рассуждавшие о.','Вот на этом свете обделывать дела свои, нежели тоненькие. Тоненькие служат больше по особенным поручениям или только числятся и виляют туда и царской водки, в надежде, что всё.','upload/iblock/673/67391673b559667cad70cddfc706fb57.jpg',1,'2020-02-21 08:28:48','2020-02-21 08:28:48'),(26,1,'http://www.tarasova.com/atque-sequi-error-ea.html','Зачем.','Зачем.','Закусивши балыком, они сели за стол в.','Покамест слуги управлялись и возились, господин отправился в общую залу. Какие бывают эти общие залы — всякий проезжающий знает очень хорошо: те же стены, выкрашенные масляной краской, потемневшие вверху от трубочного дыма и залосненные снизу спинами.','upload/iblock/673/67391673b559667cad70cddfc706fb57.jpg',1,'2020-02-15 19:39:04','2020-02-15 19:39:04'),(27,3,'http://www.polakova.ru/quis-reprehenderit-rerum-odit-voluptatem','Чичиков открыл рот, с.','Чичиков открыл рот, с.','Ну, ты ступай теперь одевайся, — я тоже очень.','Я так рассеялся… приехал в ночное время…: — Коробочка, коллежская секретарша. — Покорнейше благодарю. А.','upload/iblock/673/67391673b559667cad70cddfc706fb57.jpg',0,'2020-02-25 03:28:03','2020-02-25 03:28:03'),(28,3,'https://www.sukin.com/qui-omnis-et-iure-omnis-numquam-alias-quia','Он стал.','Он стал.','В театре одна.','Взглянувши в окно, увидел он остановившуюся перед трактиром легонькую бричку, запряженную тройкою добрых лошадей. Из брички вылезали двое какие-то мужчин. Один белокурый, высокого роста; другой немного пониже, чернявый. Белокурый был один из них сделать ? — А вот мы его.','upload/iblock/673/67391673b559667cad70cddfc706fb57.jpg',0,'2020-02-25 14:23:22','2020-02-25 14:23:22'),(29,1,'http://bragin.org/suscipit-et-est-ad-rerum-nesciunt-quae-dolorum','Врешь, врешь, и не.','Врешь, врешь, и не.','Чичиков.','Под всем этим было написано: «И вот заведение». Кое-где просто на глаза не показывался! — сказал он. — Но знаете ли, что такого помещика вовсе нет. Там прямо на стол. Герой наш, по обыкновению, сейчас вступил с нею в разговор и расспросил.','upload/iblock/673/67391673b559667cad70cddfc706fb57.jpg',1,'2020-02-24 14:03:40','2020-02-24 14:03:40'),(30,3,'http://afanasev.ru/mollitia-nihil-perspiciatis-aspernatur-et-molestiae-quod-quia-consequuntur','Слова хозяйки были.','Слова хозяйки были.','Чичиков. — А.','Ивана Григорьевича, — — Эй, Порфирий, — принеси-ка щенка! Каков щенок! — — коли высечь, то и высечь; я ничуть не прочь от того. Почему ж не — считал. — Да, именно, — сказал Собакевич. — Право, не знаю, — произнесла она и минуты через две уже — сорок с лишком два часа с небольшим половину, похвалил его. И в самом деле.','upload/iblock/673/67391673b559667cad70cddfc706fb57.jpg',1,'2020-02-28 00:57:45','2020-02-28 00:57:45');
/*!40000 ALTER TABLE `va_articles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `va_callbacks`
--

DROP TABLE IF EXISTS `va_callbacks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `va_callbacks` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  `ip` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_page` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `va_callbacks`
--

LOCK TABLES `va_callbacks` WRITE;
/*!40000 ALTER TABLE `va_callbacks` DISABLE KEYS */;
INSERT INTO `va_callbacks` VALUES (1,'2021-03-17 08:59:36','2021-03-17 08:59:36','Salma','Wilkinson','223.410.8285','edwina40@example.org',1,'5.192.232.159','https://www.kohler.com/similique-molestias-et-alias','Totam in et labore est. Enim vel voluptas delectus. Aut esse porro ducimus nam.'),(2,'2021-03-17 08:59:36','2021-03-17 08:59:36','Christ','Zieme','(513) 348-7641','carlie88@example.org',0,'251.63.227.18','https://jacobson.net/sint-et-excepturi-sit-qui-aspernatur-et-eum.html','Nobis enim aut quidem voluptatem. Maiores quis repellendus et aspernatur saepe sed in. Dolorem omnis consequatur eum minus aliquid consectetur cupiditate. Sapiente aspernatur in et id.'),(3,'2021-03-17 08:59:36','2021-03-17 08:59:36','Marc','Lubowitz','+15013804929','gerald.dare@example.com',0,'46.112.175.84','http://www.pfannerstill.com/','Aliquam consectetur est magni officia in. Iure aut nam beatae molestiae enim quo. Aut debitis incidunt sequi iusto.'),(4,'2021-03-17 08:59:36','2021-03-17 08:59:36','Eldon','Daniel','+1-769-704-6279','tristin.tremblay@example.org',1,'77.218.180.96','http://leannon.com/rerum-laboriosam-dolorem-porro-ad-illum-ut-illo','Et inventore quisquam iste fugiat. Dolorem similique qui blanditiis veniam doloremque. Consequatur eum ad qui pariatur fugit recusandae.'),(5,'2021-03-17 08:59:36','2021-03-17 08:59:36','Alessandro','Skiles','795-515-2780','nitzsche.liana@example.net',1,'83.252.133.76','http://www.cronin.info/aliquam-impedit-repudiandae-distinctio-est-doloribus','Consectetur et assumenda voluptatem quaerat. Voluptatum id magni iusto. Quibusdam possimus enim veniam reiciendis ut dolorum.'),(6,'2021-03-17 08:59:36','2021-03-17 08:59:36','Tiana','Ziemann','+1.602.884.2751','fpfeffer@example.net',0,'123.237.30.187','https://www.donnelly.com/adipisci-ipsa-rerum-beatae-molestiae-quos-molestiae-nemo-nemo','Et consequuntur ratione enim autem libero ut. Provident sed nostrum et consequuntur excepturi. Vero hic qui saepe nisi nemo. Et et consequuntur quas soluta qui. Quas ab occaecati nesciunt provident.'),(7,'2021-03-17 08:59:36','2021-03-17 08:59:36','Emma','Howell','+1-336-587-4383','lnicolas@example.com',1,'16.23.224.46','http://www.schaden.com/autem-repellendus-amet-ab-et','Voluptatem doloribus voluptas totam iure sed earum labore. Voluptatem architecto sit tempora aut ut.'),(8,'2021-03-17 08:59:36','2021-03-17 08:59:36','Chanelle','Lemke','+1-784-577-7724','kihn.keara@example.org',0,'17.161.41.196','http://www.halvorson.com/quis-quo-voluptatem-non-ipsa','Aliquid quisquam qui qui ut dicta et molestiae. Et ratione itaque qui qui.'),(9,'2021-03-17 08:59:36','2021-03-17 08:59:36','Osvaldo','Miller','621-973-8897','autumn84@example.com',0,'148.218.249.83','http://www.hegmann.com/ut-rem-ipsa-dolore-sint-impedit-dicta-aut.html','Qui accusantium non corporis ut. Facere nobis repudiandae qui dolores quia. Maiores quae ab voluptas laborum. Et eveniet et ratione blanditiis blanditiis.'),(10,'2021-03-17 08:59:36','2021-03-17 08:59:36','Modesto','Schumm','+1.682.809.6044','akling@example.net',1,'164.58.123.219','https://dickinson.com/dolores-molestias-quas-sint-repellendus.html','Qui excepturi enim omnis eaque aliquid vel. Autem repellendus mollitia porro et non. Ut occaecati debitis qui aut eum adipisci. Quaerat velit eaque rerum voluptate non animi.'),(11,'2021-03-17 09:09:39','2021-03-17 09:09:39','Else','Conroy','+12957902859','amparo80@example.com',1,'151.211.179.207','http://bins.com/et-sint-quia-facere.html','Esse quidem omnis similique totam molestiae nihil. Illum consequuntur fuga dolor ut omnis. Blanditiis consequatur id impedit hic quia unde a.'),(12,'2021-03-17 09:09:52','2021-03-17 09:09:52','Kennedy','Upton','632.525.5326','alisa.lesch@example.com',0,'46.12.162.130','http://skiles.com/','Qui consequuntur omnis culpa ut. Et unde sint doloremque sunt voluptas quia voluptas. Placeat rerum dolore accusantium omnis.');
/*!40000 ALTER TABLE `va_callbacks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `va_categories`
--

DROP TABLE IF EXISTS `va_categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `va_categories` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keywords` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `show` tinyint(1) NOT NULL DEFAULT '1',
  `meny_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `va_categories`
--

LOCK TABLES `va_categories` WRITE;
/*!40000 ALTER TABLE `va_categories` DISABLE KEYS */;
INSERT INTO `va_categories` VALUES (5,'Eulalia Klein',0,'/potfolio','10','Prof.','Mr.','Omnis explicabo sed reiciendis sunt. Rerum totam esse harum sit. Suscipit sunt id iusto optio beatae id est. In odit quisquam tempora.',0,'page','2021-03-19 14:31:13','2021-03-19 14:31:13'),(6,'Miss Marjory Turcotte IV',0,'/main','9','Dr.','Prof.','Sed voluptatem labore rem repudiandae incidunt et aut. Occaecati dolores id recusandae aut consectetur recusandae qui aut. Earum quis labore earum consequatur delectus reiciendis.',0,'url','2021-03-19 14:31:13','2021-03-19 14:31:13'),(7,'Mr. Troy Gibson I',16,'/potfolio','7','Prof.','Mr.','Inventore doloremque est nihil. Est odio eos magnam eos magnam nemo harum. Quis expedita tempore sapiente modi eaque. Et sunt et exercitationem.',0,'category','2021-03-19 14:31:13','2021-03-19 14:31:13'),(8,'Mason Cartwright DDS',7,'/category','8','Dr.','Dr.','Enim voluptates cumque blanditiis harum repudiandae. Deleniti architecto est ad consequatur id. Sapiente accusantium et voluptates rerum laborum asperiores laboriosam.',1,'page','2021-03-19 14:31:13','2021-03-19 14:31:13'),(9,'Sarai Kihn',11,'/category','1','Ms.','Mrs.','Qui quaerat optio fuga autem amet. Voluptatem dolores provident dolor aliquam est. Sunt sint qui velit nesciunt. Illo voluptatem nulla molestiae.',0,'page','2021-03-19 14:31:13','2021-03-19 14:31:13'),(10,'Prof. Linwood Denesik V',0,'/potfolio','11','Dr.','Mr.','Non exercitationem aliquid accusantium. Numquam enim ea id non ut facere.',0,'url','2021-03-19 14:31:13','2021-03-19 14:31:13'),(11,'Prof. Saige McKenzie V',10,'/contacts','12','Prof.','Ms.','Architecto ipsum eligendi perspiciatis. Qui suscipit id nulla. Cum repellendus laborum rerum corporis tempora rerum quis.',0,'url','2021-03-19 14:31:13','2021-03-19 14:31:13'),(12,'Jose Gorczany',13,'/main','2','Mr.','Miss','Voluptatem amet earum molestiae. Sint voluptatem eius expedita. Molestias mollitia dolores qui fugit eveniet ut sit. Fugiat quis debitis eum aliquam praesentium quibusdam beatae est.',0,'page','2021-03-19 14:31:13','2021-03-19 14:31:13'),(13,'Gordon Windler',0,'/main','3','Miss','Mrs.','Possimus aut vel nihil praesentium voluptate aut. Quo doloremque corporis similique. Quam sed beatae sunt beatae. Quidem magnam mollitia consequatur illum et nobis voluptates.',1,'category','2021-03-19 14:31:13','2021-03-19 14:31:13'),(14,'Savannah Parisian',0,'/blog','4','Ms.','Mr.','Et similique non quae inventore repudiandae placeat optio. Sit sit blanditiis consequuntur natus. Et quia mollitia excepturi tempore. Et repellat numquam laudantium officiis numquam qui.',1,'url','2021-03-19 14:31:13','2021-03-19 14:31:13'),(15,'Dr. Roscoe Ward PhD',0,'/category','5','Ms.','Prof.','Porro vitae perferendis dicta temporibus eligendi. Assumenda sit rem enim aut debitis iusto est. Ut hic repellendus rerum. Perspiciatis possimus eveniet voluptatibus similique.',1,'url','2021-03-19 14:31:13','2021-03-19 14:31:13'),(16,'Madison Gulgowski',0,'/main','6','Prof.','Dr.','Temporibus nesciunt ullam natus rerum et. Deleniti nesciunt rerum in rerum est eum debitis. Dolore ad a inventore quos voluptatum. Adipisci ex enim rerum rerum libero modi ipsa et.',1,'category','2021-03-19 14:31:13','2021-03-19 14:31:13');
/*!40000 ALTER TABLE `va_categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `va_failed_jobs`
--

DROP TABLE IF EXISTS `va_failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `va_failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `va_failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `va_failed_jobs`
--

LOCK TABLES `va_failed_jobs` WRITE;
/*!40000 ALTER TABLE `va_failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `va_failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `va_migrations`
--

DROP TABLE IF EXISTS `va_migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `va_migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `va_migrations`
--

LOCK TABLES `va_migrations` WRITE;
/*!40000 ALTER TABLE `va_migrations` DISABLE KEYS */;
INSERT INTO `va_migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2014_10_12_200000_add_two_factor_columns_to_users_table',1),(4,'2019_08_19_000000_create_failed_jobs_table',1),(5,'2020_02_29_181457_create_pages_table',1),(6,'2020_02_29_181616_create_articles_table',1),(7,'2020_03_12_134728_create_snippets_table',1),(8,'2021_02_25_131440_create_posts_table',1),(9,'2021_02_25_131532_create_settings_table',1),(11,'2021_03_13_144749_create_sessions_table',1),(12,'2021_03_13_145849_create_permission_tables',1),(13,'2016_06_01_000001_create_oauth_auth_codes_table',2),(14,'2016_06_01_000002_create_oauth_access_tokens_table',2),(15,'2016_06_01_000003_create_oauth_refresh_tokens_table',2),(16,'2016_06_01_000004_create_oauth_clients_table',2),(17,'2016_06_01_000005_create_oauth_personal_access_clients_table',2),(20,'2021_03_16_195027_create_summary_statistic_table',4),(22,'2021_03_17_122259_create_callbacks_table',5),(23,'2021_02_25_131741_create_categories_table',6),(24,'2021_03_16_064323_create_statistics_table',7);
/*!40000 ALTER TABLE `va_migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `va_model_has_permissions`
--

DROP TABLE IF EXISTS `va_model_has_permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `va_model_has_permissions` (
  `permission_id` bigint(20) unsigned NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `va_model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `va_permissions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `va_model_has_permissions`
--

LOCK TABLES `va_model_has_permissions` WRITE;
/*!40000 ALTER TABLE `va_model_has_permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `va_model_has_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `va_model_has_roles`
--

DROP TABLE IF EXISTS `va_model_has_roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `va_model_has_roles` (
  `role_id` bigint(20) unsigned NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `va_model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `va_roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `va_model_has_roles`
--

LOCK TABLES `va_model_has_roles` WRITE;
/*!40000 ALTER TABLE `va_model_has_roles` DISABLE KEYS */;
INSERT INTO `va_model_has_roles` VALUES (2,'App\\Models\\User',1),(2,'App\\Models\\User',2),(3,'App\\Models\\User',3),(2,'App\\Models\\User',4),(2,'App\\Models\\User',5),(2,'App\\Models\\User',6),(2,'App\\Models\\User',7),(2,'App\\Models\\User',8),(2,'App\\Models\\User',9),(2,'App\\Models\\User',10),(2,'App\\Models\\User',11),(2,'App\\Models\\User',12);
/*!40000 ALTER TABLE `va_model_has_roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `va_oauth_access_tokens`
--

DROP TABLE IF EXISTS `va_oauth_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `va_oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `client_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `va_oauth_access_tokens_user_id_index` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `va_oauth_access_tokens`
--

LOCK TABLES `va_oauth_access_tokens` WRITE;
/*!40000 ALTER TABLE `va_oauth_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `va_oauth_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `va_oauth_auth_codes`
--

DROP TABLE IF EXISTS `va_oauth_auth_codes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `va_oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) unsigned NOT NULL,
  `client_id` bigint(20) unsigned NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `va_oauth_auth_codes_user_id_index` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `va_oauth_auth_codes`
--

LOCK TABLES `va_oauth_auth_codes` WRITE;
/*!40000 ALTER TABLE `va_oauth_auth_codes` DISABLE KEYS */;
/*!40000 ALTER TABLE `va_oauth_auth_codes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `va_oauth_clients`
--

DROP TABLE IF EXISTS `va_oauth_clients`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `va_oauth_clients` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `va_oauth_clients_user_id_index` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `va_oauth_clients`
--

LOCK TABLES `va_oauth_clients` WRITE;
/*!40000 ALTER TABLE `va_oauth_clients` DISABLE KEYS */;
INSERT INTO `va_oauth_clients` VALUES (1,NULL,'ValexoCmsLite Personal Access Client','iubbSVEKS0mAhhFged7AqgDB3OqdrUSDSx1GgQsY',NULL,'http://localhost',1,0,0,'2021-03-13 16:32:35','2021-03-13 16:32:35'),(2,NULL,'ValexoCmsLite Password Grant Client','WuKbW8xVcMtiJ6rkgyKbAzhD6RNJ1AhvllqWyidm','users','http://localhost',0,1,0,'2021-03-13 16:32:35','2021-03-13 16:32:35');
/*!40000 ALTER TABLE `va_oauth_clients` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `va_oauth_personal_access_clients`
--

DROP TABLE IF EXISTS `va_oauth_personal_access_clients`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `va_oauth_personal_access_clients` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `client_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `va_oauth_personal_access_clients`
--

LOCK TABLES `va_oauth_personal_access_clients` WRITE;
/*!40000 ALTER TABLE `va_oauth_personal_access_clients` DISABLE KEYS */;
INSERT INTO `va_oauth_personal_access_clients` VALUES (1,1,'2021-03-13 16:32:35','2021-03-13 16:32:35');
/*!40000 ALTER TABLE `va_oauth_personal_access_clients` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `va_oauth_refresh_tokens`
--

DROP TABLE IF EXISTS `va_oauth_refresh_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `va_oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `va_oauth_refresh_tokens_access_token_id_index` (`access_token_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `va_oauth_refresh_tokens`
--

LOCK TABLES `va_oauth_refresh_tokens` WRITE;
/*!40000 ALTER TABLE `va_oauth_refresh_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `va_oauth_refresh_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `va_pages`
--

DROP TABLE IF EXISTS `va_pages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `va_pages` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `order` int(10) unsigned DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uri` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keywords` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `text` text COLLATE utf8mb4_unicode_ci,
  `show` set('on','') COLLATE utf8mb4_unicode_ci DEFAULT '',
  `editor` set('on','') COLLATE utf8mb4_unicode_ci DEFAULT '',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `index` (`order`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `va_pages`
--

LOCK TABLES `va_pages` WRITE;
/*!40000 ALTER TABLE `va_pages` DISABLE KEYS */;
INSERT INTO `va_pages` VALUES (1,1,'Главная','index','','Грузоперевозки по Москве и области','','Компания Грузоперевозки предлагает вам ряд услуг по доставке грузов по Москве, перевозке мебели, продуктов, материалов и услуги манипулятора','	<h1>Грузоперевозки по Москве и области</h1>\n\n<!--****************** 3-block  *************************************-->\n\n<p>Юридическое лицо, которое является объединением физических лиц, но при этом функционирует независимо от них (то есть самоуправляемо). В широком смысле под корпорацией можно понимать всякое объединение с экономическими целями деятельности.</p>\n\n\n\n<!--******************why our*************************************-->\n\n<div id=\"main-transport-option\"> 	 <a href=\"services/manipulators/index.html\" >\n    <div class=\"transport-option\"> 					<img src=\"images/manipulator.png\"  />\n      <div id=\"manipulator-link\">Манипуляторы</div>\n     				</div>\n  </a> 			<a href=\"services/isotherm/index.html\" >\n    <div class=\"transport-option\"> 					<img src=\"images/izoterma.png\"  />\n      <div id=\"izoterma-link\">Изотерма</div>\n     				</div>\r\n  </a> 				<a href=\"services/kamaz/index.html\" >\r\n    <div class=\"transport-option nomargin-right\"> 					<img src=\"images/kamaz.png\"  />\r\n      <div id=\"kamaz-link\">Камазы</div>\r\n     				</div>\r\n  </a> 			</div>\r\n\r\n<div id=\"advantage\">\r\n  <h2>Почему выбирают нас?</h2>\r\n\r\n  <div class=\"saidbar-border border-advntage\"></div>\r\n\r\n  <div class=\"one-advantage\">\r\n    <div class=\"advantage-icon\"></div>\r\n\r\n    <div class=\"advantage-title-bcs\">потому что</div>\r\n\r\n    <div class=\"advantage-pos\">Качественно!</div>\r\n\r\n    <div class=\"advantage-description\"> 						Объединением физических лиц, но при этом функционирует независимо от них 					</div>\r\n   				</div>\r\n\r\n  <div class=\"one-advantage\">\r\n    <div class=\"advantage-icon\"></div>\r\n\r\n    <div class=\"advantage-title-bcs\">потому что</div>\r\n\r\n    <div class=\"advantage-pos\">Быстро!</div>\r\n\r\n    <div class=\"advantage-description\"> 						Объединением физических лиц, но при этом функционирует независимо от них 					</div>\r\n   				</div>\r\n\r\n  <div class=\"one-advantage nomargin-right\">\r\n    <div class=\"advantage-icon\"></div>\r\n\r\n    <div class=\"advantage-title-bcs\">потому что</div>\r\n\r\n    <div class=\"advantage-pos\">Безопасно!</div>\r\n\r\n    <div class=\"advantage-description\"> 						Объединением физических лиц, но при этом функционирует независимо от них 					</div>\r\n   				</div>\r\n 			 		 </div>\r\n    		    <div id=\"main-text\">\r\n<div>\r\n<h2>Профессионалы своего дела</h2>\r\n\r\n    \r\n\r\n\r\n\r\n<p> 		 		Компания ООО «Грузоперевозки»; располагает парком современных грузовых автомобилей различной грузоподъёмности и объёма. Водители компании «Грузоперевозчик» имеют опыт работы в сфере грузоперевозок от 5 до 20 лет (наш коллектив преимущественно молодой и энергичный). Большой стаж, хорошее знание Москвы и области позволяет нашим водителям грамотно выбирать маршруты движения. Автомобили оснащены навигационными приборами, позволяющими оперативно оценивать обстановку на дорогах. 		 	</p>\r\n\r\n<p> 		 		Большие средства были потрачены компанией на приобретение собственного автопарка, сопутствующей грузоперевозкам материально-технической базы и установку мониторинга (глобальное отслеживание автотранспорта). У нас Вы будете иметь полную информацию о машине и местонахождении Вашего груза.	 	</p>\r\n\r\n<p> 		 		С нами Вы можете всегда быть спокойны и уверенны в сохранности груза. Услуги переезд и грузоперевозки мы оказываем пунктуально и ответственно, в кратчайшие сроки, максимально аккуратно, экономя Ваше время и нервы. С особенностями переездов и грузоперевозок можно ознакомиться в разделе статьи. 			 	</p>\r\n\r\n<h3>В нашем автопарке имеются:</h3>\r\n\r\n<p> 		 		Особое значение руководство компании уделяет подбору коллектива. У нас сплоченный коллектив профессиональных водителей и грузчиков, имеющих необходимые навыки выполнения работ различного уровня сложности, ответственных, аккуратных и мобильных. На каждого сотрудника нашей компании можно целиком положиться, они оперативны в работе и творчески подходят к решению любой проблемы, возникающей в процессе грузоперевозки. 		 	</p>\r\n\r\n<p> 		 		Автомобилям компания ООО «Грузоперевозки» уделяет большое значение, поскольку от их технического состояния и уровня оборудованости в конечном итоге зависит качество оказываемых услуг грузоперевозок и количество привлеченных за счет этого клиентов. Все автомобили оборудованы сотовой связью, что гарантирует оперативность грузовых перевозок по Москве. Грузовое такси предоставляется только в полностью исправном и чистом состоянии.		 	</p>\r\n\r\n<h3>В нашем автопарке имеются:</h3>\r\n\r\n<p> 		 		В широком смысле под корпорацией можно понимать всякое объединение с экономическими целями деятельности. Юридическое отделение корпорации от её участников даёт ей преимущества, недоступные другим формам объединений, например обществам с ограниченной ответственностью. Конкретный правовой статус и правоспособность корпорации определяется местом её создания. 		 	</p>\r\n </div>\r\n		    </div>\r\n	    </div>','on','on','2020-02-29 12:00:00','2020-02-29 12:00:00'),(2,2,'О компании','about','','Грузоперевозки по Москве и области','','Компания Грузоперевозки предлагает вам ряд услуг по доставке грузов по Москве, перевозке мебели, продуктов, материалов и услуги манипулятора','<h1>О компании</h1>\r\n\r\n<!--****************** 3-block  *************************************-->\r\n		    <div id=\"main-text\">\r\n<div>\r\n<p>Компания ООО «Грузоперевозки» успешно развивается на рынке грузовых перевозок по Москве и области, начиная с 2010 года.</p>\r\n\r\n<p>Приоритетным направлением в работе нашей компании является предоставление таких услуг, как офисный переезд, квартирный переезд и перевозка мебели. Также мы осуществляем грузовые перевозки автомобилями разной грузоподъемности (от 1 до 10 тонн).</p>\r\n\r\n<p>Компания «Грузоперевозки по Москве» рада сотрудничеству как с частными, так и с юридическими лицами. Мы заключаем договора на транспортное обслуживание и принимаем оплату как в наличной, так и в безналичной форме. Вы можете обратиться к нам в любой день, так как мы работаем без выходных.</p>\r\n\r\n<p>Мы ценим каждого клиента и постоянно повышаем уровень обслуживания, обновляя наш автопарк современными автомобилями и формируя штат сотрудников только из профессионалов, любящих свою работу, что неизменно отражается на качестве сервиса.</p>\r\n\r\n<p>Мы стремимся полностью оправдать доверие всех наших клиентов и всегда рады вашим телефонным звонкам и длительному сотрудничеству!</p>\r\n\r\n<p>Автомобилям компания ООО «Грузоперевозки» уделяет большое значение, поскольку от их технического состояния и уровня оборудования в конечном итоге зависит качество оказываемых услуг грузоперевозок и количество привлеченных за счет этого клиентов. Все автомобили оборудованы сотовой связью, что гарантирует оперативность грузовых перевозок по Москве. Грузовое такси предоставляется только в полностью исправном и чистом состоянии.</p>\r\n\r\n<p>Особое значение руководство компании уделяет подбору коллектива. У нас сплоченный коллектив профессиональных водителей и грузчиков, имеющих необходимые навыки выполнения работ различного уровня сложности, ответственных, аккуратных и мобильных. На каждого сотрудника нашей компании можно целиком положиться, они оперативны в работе и творчески подходят к решению любой проблемы, возникающей в процессе грузоперевозки.</p>\r\n\r\n<p>Идейные соображения высшего порядка, а также дальнейшее развитие различных форм деятельности позволяет выполнять важные задания по разработке существенных финансовых и административных условий. Идейные соображения высшего порядка, а также сложившаяся структура организации требуют от нас анализа позиций, занимаемых участниками в отношении поставленных задач.</p>\r\n\r\n<p>Идейные соображения высшего порядка, а также постоянный количественный рост и сфера нашей активности влечет за собой процесс внедрения и модернизации соответствующий условий активизации. Задача организации, в особенности же консультация с широким активом требуют определения и уточнения направлений прогрессивного развития. Задача организации, в особенности же начало повседневной работы по формированию позиции представляет собой интересный эксперимент проверки направлений прогрессивного развития. Равным образом постоянный количественный рост и сфера нашей активности влечет за собой процесс внедрения и модернизации существенных финансовых и административных условий. Разнообразный и богатый опыт укрепление и развитие структуры играет важную роль в формировании направлений прогрессивного развития.</p>\r\n\r\n<p>Равным образом консультация с широким активом представляет собой интересный эксперимент проверки системы обучения кадров, соответствует насущным потребностям. Равным образом укрепление и развитие структуры позволяет оценить значение соответствующий условий активизации.</p>\r\n\r\n<p>Разнообразный и богатый опыт дальнейшее развитие различных форм деятельности влечет за собой процесс внедрения и модернизации дальнейших направлений развития. Разнообразный и богатый опыт реализация намеченных плановых заданий требуют определения и уточнения форм развития. Идейные соображения высшего порядка, а также начало повседневной работы по формированию позиции требуют определения и уточнения соответствующий условий активизации.</p>\r\n\r\n<p>Повседневная практика показывает, что дальнейшее развитие различных форм деятельности требуют определения и уточнения соответствующий условий активизации. Задача организации, в особенности же постоянный количественный рост и сфера нашей активности играет важную роль в формировании новых предложений. Значимость этих проблем настолько очевидна, что консультация с широким активом способствует подготовки и реализации дальнейших направлений развития. Товарищи! дальнейшее развитие различных форм деятельности в значительной степени обуславливает создание форм развития. Значимость этих проблем настолько очевидна, что рамки и место обучения кадров требуют от нас анализа форм развития. Задача организации, в особенности же реализация намеченных плановых заданий обеспечивает широкому кругу (специалистов) участие в формировании системы обучения кадров, соответствует насущным потребностям.</p>\r\n\r\n<p>Товарищи! начало повседневной работы по формированию позиции в значительной степени обуславливает создание модели развития. Не следует, однако забывать, что укрепление и развитие структуры способствует подготовки и реализации соответствующий условий активизации.</p>\r\n </div>\r\n		    </div>\r\n	    </div>','on','on','2020-02-29 12:00:00','2020-02-29 12:00:00'),(3,6,'Услуги','services','','Грузоперевозки по Москве и области','','Компания Грузоперевозки предлагает вам ряд услуг по доставке грузов по Москве, перевозке мебели, продуктов, материалов и услуги манипулятора','<h1>Услуги</h1>\r\n\r\n<!--****************** 3-block  *************************************-->\r\n		    <div id=\"main-text\">\r\n<div><p>Одним из самых востребованных видов аутсорсинга по перевозкам является оказание услуг грузоперевозок обслуживания, которое предполагает не только комплексные услуги по подготовке и сдаче ежеквартальной отчетности, но и позволяет экономить бюджетные средства предприятия.</p>\r\n\r\n<h2>Основные направления нашей работы:</h2>\r\n\r\n<div class=\"titleBlock2\"> 						<img width=\"64\" src=\"../images/truck.png\" height=\"64\" style=\"float:left;padding-right:10px;\"  />\r\n  <h3><a href=\"isotherm/index.html\" >Грузоперевозки по Москве 24 часа в сутки</a> </h3>\r\n 					</div>\r\n\r\n<p>Задача организации, в особенности же консультация с широким активом требуют определения и уточнения дальнейших направлений развития.</p>\r\n\r\n<div class=\"titleBlock2\"> 						<img width=\"64\" src=\"../images/box.png\" height=\"64\" style=\"float:left;padding-right:10px;\"  />\r\n  <h3><a href=\"roommoving/index.html\" >Квартирный и офисный переезд</a> </h3>\r\n 					</div>\r\n\r\n<p>Идейные соображения высшего порядка, а также новая модель организационной деятельности играет важную роль в формировании модели развития. </p>\r\n\r\n<div class=\"titleBlock2\"> 						<img width=\"64\" src=\"../images/refrigerator.png\" height=\"64\" style=\"float:left;padding-right:10px;\"  />\r\n  <h3><a href=\"refrigerated/index.html\" >Авторефрижераторы и перевозка продуктов питания</a></h3>\r\n\r\n  <p>Повседневная практика показывает, что укрепление и развитие структуры влечет за собой процесс внедрения и модернизации системы обучения кадров </p>\r\n 					</div>\r\n\r\n<div class=\"titleBlock2\"> 						<img width=\"64\" src=\"../images/truck2.png\" height=\"64\" style=\"float:left;padding-right:10px;\"  />\r\n  <h3><a href=\"manipulators/index.html\" >Услуги манипулятора</a></h3>\r\n\r\n  <p>Таким образом рамки и место обучения кадров играет важную роль в формировании направлений прогрессивного развития.</p>\r\n 					</div>\r\n\r\n<div class=\"titleBlock2\"> 						<img width=\"64\" src=\"../images/truck3.png\" height=\"64\" style=\"float:left;padding-right:10px;\"  />\r\n  <h3><a href=\"kamaz/index.html\" >Грузоперевозки Камазом</a></h3>\r\n\r\n  <p> Значимость этих проблем настолько очевидна, что постоянное информационно-пропагандистское обеспечение нашей деятельности способствует подготовки.</p>\r\n 					</div>\r\n\r\n<h2>Что подразумевает процесс перевозок?</h2>\r\n\r\n<p>Все услуги по грузоперевозкам регламентируются федеральным законом &quot;О перевозке&quot; (последнее изменение от 01.01.2011). Фирма-перевозчик берет на себя прием и перевозки грузов по Москве, подготовку ежеквартальной налоговой и бухгалтерской отчетности, ее предоставление в ФНС и различные внебюджетные фонды.</p>\r\n\r\n<ul>\r\n  <li>Избавляем от необходимости держать штатного бухгалтера.</li>\r\n\r\n  <li>Своевременно сдаем отчетные документы и декларации.</li>\r\n\r\n  <li>Перекладываем на себя риски по уплате штрафов.</li>\r\n\r\n  <li>Повышаем достоверность бухгалтерской и налоговой отчетности.</li>\r\n </ul>\r\n\r\n<p>При необходимости, аутсорсер будет регулярно присылать отчеты о состоянии расчетного счета организации посредством любых форм связи (факс, Интернет). Сотрудничество предполагает различную форму: от формирования нулевой отчетности до абонентского обслуживания с фиксированной ежемесячной оплатой.</p>\r\n\r\n<p>Наша компания заключает с заказчиком договор и полностью отвечает за качество всех услуг, в нем прописанных; ответственность аутсорсинговой фирмы застрахована. Как правило, тарифы на обслуживание определяются фактическими объемами проводок.</p></div>\r\n		    </div>\r\n	    </div>','on','on','2020-02-29 12:00:00','2020-02-29 12:00:00'),(4,7,'Цены','prices',NULL,'Грузоперевозки по Москве и области',NULL,'Компания Грузоперевозки предлагает вам ряд услуг по доставке грузов по Москве, перевозке мебели, продуктов, материалов и услуги манипулятора','<h1>Цены</h1>\r\n\r\n<!--****************** 3-block  *************************************-->\r\n		    <div id=\"main-text\">\r\n<div><div class=\"oneServicePrice\">\r\n<div class=\"catalog-sections-toptwo\">\r\n	<h2 class=\"tablpriceh\">Тарифы на перевозки по Москве</h2>\r\n<table class=\"prices\"  cellpadding=\"0\" cellspacing=\"0\" border=\"0\">\r\n<tr class=\"headtd\">\r\n	<td align=\"center\">ФОТО</td>    		<td align=\"center\">Модель автомобиля</td>    		<td align=\"center\">Г/П (Тн)</td>    		<td align=\"center\">Цена в час (руб)*</td>    		<td align=\"center\">Мин. время заказа</td>\r\n</tr>\r\n\r\n\r\n\r\n\r\n\r\n        <tr valign=\"top\" width=\"10%\" id=\"bx_3946748719_92\">\r\n\r\n\r\n                    				                          <td class=\"tabletd3\" align=\"center\"><img width=\"110\" height=\"90\" src=\"../upload/iblock/ecb/ecb545c1c013a00c37ad4b8383414ea1.jpg\" /></td>\r\n\r\n					  				                          <td class=\"tabletd3\"><a href=\"../carport/trucking/gazel-tent/index.html\">Газель тент 1,5 т.</a></td>\r\n\r\n					  				     					<td class=\"tabletd3\">1,5 т.</td>\r\n\r\n					  				     					<td class=\"tabletd3\">230 руб.</td>\r\n\r\n					  				     					<td class=\"tabletd3\">4ч. + 1ч. подача</td>\r\n\r\n\r\n\r\n				</tr>\r\n\r\n\r\n\r\n        <tr valign=\"top\" width=\"10%\" id=\"bx_3946748719_93\">\r\n\r\n\r\n                    				                          <td class=\"tabletd3\" align=\"center\"><img width=\"110\" height=\"90\" src=\"../upload/iblock/b88/b887a6d4882aa0522a285dd757259609.jpg\" /></td>\r\n\r\n					  				                          <td class=\"tabletd3\"><a href=\"../carport/trucking/gazel-izoterma/index.html\">Газель изотерма 3 т.</a></td>\r\n\r\n					  				     					<td class=\"tabletd3\">3 т.</td>\r\n\r\n					  				     					<td class=\"tabletd3\">400р.</td>\r\n\r\n					  				     					<td class=\"tabletd3\">4ч. + 1ч. подача</td>\r\n\r\n\r\n\r\n				</tr>\r\n\r\n\r\n\r\n        <tr valign=\"top\" width=\"10%\" id=\"bx_3946748719_94\">\r\n\r\n\r\n                    				                          <td class=\"tabletd3\" align=\"center\"><img width=\"110\" height=\"90\" src=\"../upload/iblock/0c9/0c9211784d5d5f730285e5099b287c9a.jpg\" /></td>\r\n\r\n					  				                          <td class=\"tabletd3\"><a href=\"../carport/trucking/gazel-bortovoy/index.html\">Газель бортовой 1,5 т.</a></td>\r\n\r\n					  				     					<td class=\"tabletd3\">1,5 т.</td>\r\n\r\n					  				     					<td class=\"tabletd3\">450р.</td>\r\n\r\n					  				     					<td class=\"tabletd3\">4ч. + 1ч. подача</td>\r\n\r\n\r\n\r\n				</tr>\r\n\r\n\r\n\r\n        <tr valign=\"top\" width=\"10%\" id=\"bx_3946748719_95\">\r\n\r\n\r\n                    				                          <td class=\"tabletd3\" align=\"center\"><img width=\"110\" height=\"90\" src=\"../upload/iblock/89f/89fc36816f271f618658c691c8c254cb.jpg\" /></td>\r\n\r\n					  				                          <td class=\"tabletd3\"><a href=\"../carport/trucking/khenday-porter/index.html\">Хендай Портер 1,5 т.</a></td>\r\n\r\n					  				     					<td class=\"tabletd3\">3 т.</td>\r\n\r\n					  				     					<td class=\"tabletd3\">450р.</td>\r\n\r\n					  				     					<td class=\"tabletd3\">4ч. + 1ч. подача</td>\r\n\r\n\r\n\r\n				</tr>\r\n\r\n\r\n\r\n        <tr valign=\"top\" width=\"10%\" id=\"bx_3946748719_100\">\r\n\r\n\r\n                    				                          <td class=\"tabletd3\" align=\"center\"><img width=\"110\" height=\"90\" src=\"../upload/iblock/21a/21ad042ba959e161a22902d4edac69f4.jpg\" /></td>\r\n\r\n					  				                          <td class=\"tabletd3\"><a href=\"../carport/special/manipulyator/index.html\">Манипулятор 8 т.</a></td>\r\n\r\n					  				     					<td class=\"tabletd3\">15т.</td>\r\n\r\n					  				     					<td class=\"tabletd3\">700р.</td>\r\n\r\n					  				     					<td class=\"tabletd3\">4ч. + 1ч. подача</td>\r\n\r\n\r\n\r\n				</tr>\r\n\r\n\r\n\r\n        <tr valign=\"top\" width=\"10%\" id=\"bx_3946748719_99\">\r\n\r\n\r\n                    				                          <td class=\"tabletd3\" align=\"center\"><img width=\"110\" height=\"90\" src=\"../upload/iblock/6f1/6f17b4020dc194bf135e7127d82f582b.jpg\" /></td>\r\n\r\n					  				                          <td class=\"tabletd3\"><a href=\"../carport/special/kamaz/index.html\">КАМАЗ самосвал 15 т.</a></td>\r\n\r\n					  				     					<td class=\"tabletd3\">10т.</td>\r\n\r\n					  				     					<td class=\"tabletd3\">500р.</td>\r\n\r\n					  				     					<td class=\"tabletd3\">8ч. + 1ч. подача</td>\r\n\r\n\r\n\r\n				</tr>\r\n\r\n\r\n\r\n        <tr valign=\"top\" width=\"10%\" id=\"bx_3946748719_98\">\r\n\r\n\r\n                    				                          <td class=\"tabletd3\" align=\"center\"><img width=\"110\" height=\"90\" src=\"../upload/iblock/137/1377ee6900ccc5437c781dbd3dabe362.jpg\" /></td>\r\n\r\n					  				                          <td class=\"tabletd3\"><a href=\"../carport/trucking/furgon/index.html\">Фургон Fiat 1 т.</a></td>\r\n\r\n					  				     					<td class=\"tabletd3\">1т.</td>\r\n\r\n					  				     					<td class=\"tabletd3\">300р</td>\r\n\r\n					  				     					<td class=\"tabletd3\">4ч. + 1ч. подача</td>\r\n\r\n\r\n\r\n				</tr>\r\n\r\n\r\n\r\n        <tr valign=\"top\" width=\"10%\" id=\"bx_3946748719_97\">\r\n\r\n\r\n                    				                          <td class=\"tabletd3\" align=\"center\"><img width=\"110\" height=\"90\" src=\"../upload/iblock/8e0/8e0c4bea153509a7bfccc49708c60977.jpg\" /></td>\r\n\r\n					  				                          <td class=\"tabletd3\"><a href=\"../carport/special/gazel-refrizherator/index.html\">Газель рефрижератор 1,5 т.</a></td>\r\n\r\n					  				     					<td class=\"tabletd3\">3 т.</td>\r\n\r\n					  				     					<td class=\"tabletd3\">500р.</td>\r\n\r\n					  				     					<td class=\"tabletd3\">3ч. + 1ч. подача</td>\r\n\r\n\r\n\r\n				</tr>\r\n\r\n\r\n\r\n        <tr valign=\"top\" width=\"10%\" id=\"bx_3946748719_96\">\r\n\r\n\r\n                    				                          <td class=\"tabletd3\" align=\"center\"><img width=\"110\" height=\"90\" src=\"../upload/iblock/faf/fafc4355fe045ea2b5dbdd9d6c57d812.jpg\" /></td>\r\n\r\n					  				                          <td class=\"tabletd3\"><a href=\"../carport/trucking/foton-udlinenka/index.html\">ФОТОН-1069 5 т.</a></td>\r\n\r\n					  				     					<td class=\"tabletd3\">5т.</td>\r\n\r\n					  				     					<td class=\"tabletd3\">500р.</td>\r\n\r\n					  				     					<td class=\"tabletd3\">5ч. + 1ч. подача</td>\r\n\r\n\r\n\r\n				</tr>\r\n\r\n\r\n\r\n\r\n\r\n</table>\r\n	  </div>\r\n\r\n<br>\r\n<div class=\"catalog-sections-top\">\r\n	<h2 class=\"tablpriceh\">Дополнительные услуги</h2>\r\n<table class=\"prices\"  cellpadding=\"0\" cellspacing=\"0\" border=\"0\">\r\n<tr class=\"headtd\">\r\n	<td align=\"center\">Услуга</td>    		<td align=\"center\">Cтоимость</td>    		<td align=\"center\">Мин. время заказа</td>    		<td align=\"center\">Цена в час (руб)</td>    		<td align=\"center\">Доп. информация</td>\r\n</tr>\r\n\r\n\r\n\r\n\r\n\r\n        <tr valign=\"top\" width=\"33%\" id=\"bx_1916258965_103\">\r\n\r\n\r\n                    				     					<td class=\"tabletd2\">Дачный переезд</td>\r\n\r\n					  				     					<td class=\"tabletd2\">6800 руб.</td>\r\n\r\n					  				     					<td class=\"tabletd2\">8ч. + 1ч. подача</td>\r\n\r\n					  				     					<td class=\"tabletd2\">400 руб.</td>\r\n\r\n					  				     					<td class=\"tabletd2\">Включает 2х грузчиков и грузовик ФОТОН 5т.</td>\r\n\r\n\r\n\r\n				</tr>\r\n\r\n\r\n\r\n        <tr valign=\"top\" width=\"33%\" id=\"bx_1916258965_104\">\r\n\r\n\r\n                    				     					<td class=\"tabletd2\">Грузчики</td>\r\n\r\n					  				     					<td class=\"tabletd2\">2000 руб.</td>\r\n\r\n					  				     					<td class=\"tabletd2\">4ч. + 1ч. подача</td>\r\n\r\n					  				     					<td class=\"tabletd2\">200 руб.</td>\r\n\r\n					  				     					<td class=\"tabletd2\">2 грузчика без авто</td>\r\n\r\n\r\n\r\n				</tr>\r\n\r\n\r\n\r\n        <tr valign=\"top\" width=\"33%\" id=\"bx_1916258965_102\">\r\n\r\n\r\n                    				     					<td class=\"tabletd2\">Квартирный переезд</td>\r\n\r\n					  				     					<td class=\"tabletd2\">3800 руб.</td>\r\n\r\n					  				     					<td class=\"tabletd2\">3ч. + 1ч. подача</td>\r\n\r\n					  				     					<td class=\"tabletd2\">200 руб.</td>\r\n\r\n					  				     					<td class=\"tabletd2\">Включает 2х грузчиков и газель 1.5т.</td>\r\n\r\n\r\n\r\n				</tr>\r\n\r\n\r\n\r\n        <tr valign=\"top\" width=\"33%\" id=\"bx_1916258965_101\">\r\n\r\n\r\n                    				     					<td class=\"tabletd2\">Офисный переезд</td>\r\n\r\n					  				     					<td class=\"tabletd2\">3400 руб.</td>\r\n\r\n					  				     					<td class=\"tabletd2\">4ч. + 1ч. подача</td>\r\n\r\n					  				     					<td class=\"tabletd2\">200 руб.</td>\r\n\r\n					  				     					<td class=\"tabletd2\">Включает 2х грузчиков и газель 3т.</td>\r\n\r\n\r\n\r\n				</tr>\r\n\r\n\r\n\r\n\r\n\r\n</table>\r\n	  </div>\r\n\r\n<br></div>\r\n\r\n<h2>Узнать цену на перевозку</h2>\r\n<p>Вы можете узнать точную цену на перевозку или переезд, для этого вам необходимо позвонить на телефон: +7 (495) 222 311 33 либо отправить сообщение по форме или на email: sale@lodio.ru</p>\r\n<div>\r\n<div class=\"mfeedback\">\r\n\r\n<form action=\"index.html\" method=\"POST\">\r\n<input type=\"hidden\" name=\"sessid\" id=\"sessid_1\" value=\"7286305b5feb97ae53321384bcab5d10\" />	<div class=\"mf-name\">\r\n		<div class=\"mf-text\">\r\n			Ваше имя<span class=\"mf-req\">*</span>		<input style=\"width: 55%;\" class=\"requestname\" type=\"text\" name=\"user_name\" value=\"\">\r\n		</div>\r\n	</div>\r\n	<div class=\"clear\"></div>\r\n	<div class=\"mf-email\">\r\n		<div class=\"mf-text\">\r\n			Ваш E-mail<span class=\"mf-req\">*</span>\r\n		<input style=\"width: 55%;\" class=\"requestname\" type=\"text\" name=\"user_email\" value=\"\">\r\n		</div>\r\n	</div>\r\n	<div class=\"clear\"></div>\r\n\r\n		<div class=\"mf-name\">\r\n			<div class=\"mf-text\">\r\n				Контактный телефон			<input style=\"width: 55%;\" class=\"requestname\" type=\"text\" name=\"custom[]\" value=\"\">\r\n			</div>\r\n		</div>\r\n			<div class=\"clear\"></div>\r\n\r\n		<div class=\"mf-name\">\r\n			<div class=\"mf-text\">\r\n				Адрес отправления			<input style=\"width: 55%;\" class=\"requestname\" type=\"text\" name=\"custom[]\" value=\"\">\r\n			</div>\r\n		</div>\r\n			<div class=\"clear\"></div>\r\n\r\n		<div class=\"mf-name\">\r\n			<div class=\"mf-text\">\r\n				Адрес доставки			<input style=\"width: 55%;\" class=\"requestname\" type=\"text\" name=\"custom[]\" value=\"\">\r\n			</div>\r\n		</div>\r\n			<div class=\"clear\"></div>\r\n\r\n		<div class=\"mf-name\">\r\n			<div class=\"mf-text\">\r\n				Тип автомобиля			<input style=\"width: 55%;\" class=\"requestname\" type=\"text\" name=\"custom[]\" value=\"\">\r\n			</div>\r\n		</div>\r\n			<div class=\"clear\"></div>\r\n	<div class=\"mf-message\">\r\n		<div class=\"mf-text\">\r\n\r\n		<textarea style=\"width: 500px;margin: 0;height: 122px;\" class=\"requestname\" name=\"MESSAGE\" rows=\"5\" cols=\"40\"></textarea>\r\n					Сообщение<span class=\"mf-req\">*</span><br />\r\n			<small>Введите текст вашего сообщения.</small>\r\n		</div>\r\n	</div>\r\n		<div class=\"clear\"></div>\r\n		<div class=\"mf-captcha\">\r\n		<div class=\"mf-text\">Защита от автоматических сообщений		<input class=\"requestname\" type=\"hidden\" name=\"captcha_sid\" value=\"060eb9c676f68aad5fcaa941b75dc45e\">\r\n		<img class=\"requestname\" src=\"../bitrix/tools/captcha.php@captcha_sid=060eb9c676f68aad5fcaa941b75dc45e\" width=\"180\" height=\"40\" alt=\"CAPTCHA\">\r\n		</div>\r\n			<div class=\"clear\"></div>\r\n		<div class=\"mf-text\">Введите слово на картинке<span class=\"mf-req\">*</span>\r\n		<input class=\"captchatwo\" type=\"text\" name=\"captcha_word\" size=\"30\" maxlength=\"50\" value=\"\">\r\n		</div>\r\n	</div>\r\n		<div class=\"clear\"></div>\r\n		<input class=\"buttonsubmit2\" type=\"submit\" name=\"submit\" value=\"Заказать звонок\">\r\n</form>\r\n</div></div></div>\r\n		    </div>\r\n	    </div>','on','on','2020-02-29 12:00:00','2020-02-29 12:00:00'),(5,5,'Автопарк','carport','','Грузоперевозки по Москве и области','','Компания Грузоперевозки предлагает вам ряд услуг по доставке грузов по Москве, перевозке мебели, продуктов, материалов и услуги манипулятора','<h1>Автопарк</h1>\r\n\r\n<!--****************** 3-block  *************************************-->\r\n		    <div id=\"main-text\">\r\n<div>\r\n\r\n<div>\r\n<div>\r\n<div class=\"article\">\r\n                        <div class=\"carpotlist\" id=\"bx_1373509569_78\">\r\n\r\n\r\n                                                <h3><a href=\"trucking/gazel-tent/index.html\">Газель тент 1,5 т.</a></h3>\r\n\r\n\r\n\r\n\r\n\r\n                    <a href=\"trucking/gazel-tent/index.html\"><img class=\"preview_picture_row\" src=\"../upload/iblock/2ef/2efe83b22b906ef388471504da908b4f.jpg\" width=\"190\" height=\"146\" alt=\"Газель тент 1,5 т.\" title=\"Газель тент 1,5 т.\"></a>\r\n\r\n\r\n\r\n\r\n\r\n                                                                    </div>\r\n                    <div class=\"carpotlist\" id=\"bx_1373509569_79\">\r\n\r\n\r\n                                                <h3><a href=\"trucking/gazel-izoterma/index.html\">Газель изотерма 3 т.</a></h3>\r\n\r\n\r\n\r\n\r\n\r\n                    <a href=\"trucking/gazel-izoterma/index.html\"><img class=\"preview_picture_row\" src=\"../upload/iblock/33c/33c6fc16776f39c5b4396ae32e058f6c.jpg\" width=\"190\" height=\"146\" alt=\"Газель изотерма 3 т.\" title=\"Газель изотерма 3 т.\"></a>\r\n\r\n\r\n\r\n\r\n\r\n                                                                    </div>\r\n                    <div class=\"carpotlist\" id=\"bx_1373509569_80\">\r\n\r\n\r\n                                                <h3><a href=\"trucking/gazel-bortovoy/index.html\">Газель бортовой 1,5 т.</a></h3>\r\n\r\n\r\n\r\n\r\n\r\n                    <a href=\"trucking/gazel-bortovoy/index.html\"><img class=\"preview_picture_row\" src=\"../upload/iblock/493/4930d96cb517165c5f2fe7e7f9a37887.jpg\" width=\"200\" height=\"125\" alt=\"Газель бортовой 1,5 т.\" title=\"Газель бортовой 1,5 т.\"></a>\r\n\r\n\r\n\r\n\r\n\r\n                                                                    </div>\r\n                    <div class=\"carpotlist\" id=\"bx_1373509569_81\">\r\n\r\n\r\n                                                <h3><a href=\"trucking/khenday-porter/index.html\">Хендай Портер 1,5 т.</a></h3>\r\n\r\n\r\n\r\n\r\n\r\n                    <a href=\"trucking/khenday-porter/index.html\"><img class=\"preview_picture_row\" src=\"../upload/iblock/289/289437e4c185f03e04a8ab6474cde11b.jpg\" width=\"190\" height=\"146\" alt=\"Хендай Портер 1,5 т.\" title=\"Хендай Портер 1,5 т.\"></a>\r\n\r\n\r\n\r\n\r\n\r\n                                                                    </div>\r\n                    <div class=\"carpotlist\" id=\"bx_1373509569_82\">\r\n\r\n\r\n                                                <h3><a href=\"trucking/foton-udlinenka/index.html\">ФОТОН-1069 5 т.</a></h3>\r\n\r\n\r\n\r\n\r\n\r\n                    <a href=\"trucking/foton-udlinenka/index.html\"><img class=\"preview_picture_row\" src=\"../upload/iblock/4ee/4ee547b53076a03efe4bfbe3084fe106.jpg\" width=\"190\" height=\"146\" alt=\"ФОТОН-1069 5 т.\" title=\"ФОТОН-1069 5 т.\"></a>\r\n\r\n\r\n\r\n\r\n\r\n                                                                    </div>\r\n                    <div class=\"carpotlist\" id=\"bx_1373509569_83\">\r\n\r\n\r\n                                                <h3><a href=\"special/gazel-refrizherator/index.html\">Газель рефрижератор 1,5 т.</a></h3>\r\n\r\n\r\n\r\n\r\n\r\n                    <a href=\"special/gazel-refrizherator/index.html\"><img class=\"preview_picture_row\" src=\"../upload/iblock/c09/c09b617f97fcce32c80c81260ed5bf85.jpg\" width=\"190\" height=\"146\" alt=\"Газель рефрижератор 1,5 т.\" title=\"Газель рефрижератор 1,5 т.\"></a>\r\n\r\n\r\n\r\n\r\n\r\n                                                                    </div>\r\n                    <div class=\"carpotlist\" id=\"bx_1373509569_85\">\r\n\r\n\r\n                                                <h3><a href=\"trucking/furgon/index.html\">Фургон Fiat 1 т.</a></h3>\r\n\r\n\r\n\r\n\r\n\r\n                    <a href=\"trucking/furgon/index.html\"><img class=\"preview_picture_row\" src=\"../upload/iblock/7eb/7eb3416532c89c927ac54db73b15bb88.jpg\" width=\"190\" height=\"146\" alt=\"Фургон Fiat 1 т.\" title=\"Фургон Fiat 1 т.\"></a>\r\n\r\n\r\n\r\n\r\n\r\n                                                                    </div>\r\n                    <div class=\"carpotlist\" id=\"bx_1373509569_84\">\r\n\r\n\r\n                                                <h3><a href=\"special/kamaz/index.html\">КАМАЗ самосвал 15 т.</a></h3>\r\n\r\n\r\n\r\n\r\n\r\n                    <a href=\"special/kamaz/index.html\"><img class=\"preview_picture_row\" src=\"../upload/iblock/0b6/0b6cbee8ca1bba3a6e77a00aeaeea3e4.jpg\" width=\"200\" height=\"132\" alt=\"КАМАЗ самосвал 15 т.\" title=\"КАМАЗ самосвал 15 т.\"></a>\r\n\r\n\r\n\r\n\r\n\r\n                                                                    </div>\r\n                    <div class=\"carpotlist\" id=\"bx_1373509569_86\">\r\n\r\n\r\n                                                <h3><a href=\"special/manipulyator/index.html\">Манипулятор 8 т.</a></h3>\r\n\r\n\r\n\r\n\r\n\r\n                    <a href=\"special/manipulyator/index.html\"><img class=\"preview_picture_row\" src=\"../upload/iblock/c2b/c2b2bf2821c80d9f580e6826c6eecfb3.jpg\" width=\"200\" height=\"141\" alt=\"Манипулятор 8 т.\" title=\"Манипулятор 8 т.\"></a>\r\n\r\n\r\n\r\n\r\n\r\n                                                                    </div></br></div></div>\r\n<div class=\"clear\"></div>\r\n<br />\r\n<div class=\"blockradius\">\r\n<h2>Cделать заказ</h2>\r\n<br />\r\n <div class=\"mfeedback\">\r\n\r\n<form action=\"index.html\" method=\"POST\">\r\n<input type=\"hidden\" name=\"sessid\" id=\"sessid_1\" value=\"7286305b5feb97ae53321384bcab5d10\" />	<div class=\"mf-name\">\r\n		<div class=\"mf-text\">\r\n			Ваше имя<span class=\"mf-req\">*</span>		<input style=\"width: 55%;\" class=\"requestname\" type=\"text\" name=\"user_name\" value=\"\">\r\n		</div>\r\n	</div>\r\n	<div class=\"clear\"></div>\r\n	<div class=\"mf-email\">\r\n		<div class=\"mf-text\">\r\n			Ваш E-mail<span class=\"mf-req\">*</span>\r\n		<input style=\"width: 55%;\" class=\"requestname\" type=\"text\" name=\"user_email\" value=\"\">\r\n		</div>\r\n	</div>\r\n	<div class=\"clear\"></div>\r\n\r\n		<div class=\"mf-name\">\r\n			<div class=\"mf-text\">\r\n				Контактный телефон			<input style=\"width: 55%;\" class=\"requestname\" type=\"text\" name=\"custom[]\" value=\"\">\r\n			</div>\r\n		</div>\r\n			<div class=\"clear\"></div>\r\n\r\n		<div class=\"mf-name\">\r\n			<div class=\"mf-text\">\r\n				Адрес отправления			<input style=\"width: 55%;\" class=\"requestname\" type=\"text\" name=\"custom[]\" value=\"\">\r\n			</div>\r\n		</div>\r\n			<div class=\"clear\"></div>\r\n\r\n		<div class=\"mf-name\">\r\n			<div class=\"mf-text\">\r\n				Адрес доставки			<input style=\"width: 55%;\" class=\"requestname\" type=\"text\" name=\"custom[]\" value=\"\">\r\n			</div>\r\n		</div>\r\n			<div class=\"clear\"></div>\r\n	<div class=\"mf-message\">\r\n		<div class=\"mf-text\">\r\n\r\n		<textarea style=\"width: 500px;margin: 0;height: 122px;\" class=\"requestname\" name=\"MESSAGE\" rows=\"5\" cols=\"40\"></textarea>\r\n					Сообщение<span class=\"mf-req\">*</span><br />\r\n			<small>Введите текст вашего сообщения.</small>\r\n		</div>\r\n	</div>\r\n		<div class=\"clear\"></div>\r\n		<div class=\"mf-captcha\">\r\n		<div class=\"mf-text\">Защита от автоматических сообщений		<input class=\"requestname\" type=\"hidden\" name=\"captcha_sid\" value=\"05aae0b28c7f182372a6502222574bd8\">\r\n		<img class=\"requestname\" src=\"../bitrix/tools/captcha.php@captcha_sid=05aae0b28c7f182372a6502222574bd8\" width=\"180\" height=\"40\" alt=\"CAPTCHA\">\r\n		</div>\r\n			<div class=\"clear\"></div>\r\n		<div class=\"mf-text\">Введите слово на картинке<span class=\"mf-req\">*</span>\r\n		<input class=\"captchatwo\" type=\"text\" name=\"captcha_word\" size=\"30\" maxlength=\"50\" value=\"\">\r\n		</div>\r\n	</div>\r\n		<div class=\"clear\"></div>\r\n		<input class=\"buttonsubmit2\" type=\"submit\" name=\"submit\" value=\"Заказать звонок\">\r\n</form>\r\n</div></div></div>\r\n		    </div>\r\n	    </div>','on','on','2020-02-29 12:00:00','2020-02-29 12:00:00'),(6,3,'Статьи','articles','','Грузоперевозки по Москве и области','','Компания Грузоперевозки предлагает вам ряд услуг по доставке грузов по Москве, перевозке мебели, продуктов, материалов и услуги манипулятора','','on','on','2020-02-29 12:00:00','2020-02-29 12:00:00'),(7,4,'Клиенты','clients','','Грузоперевозки по Москве и области','','Компания Грузоперевозки предлагает вам ряд услуг по доставке грузов по Москве, перевозке мебели, продуктов, материалов и услуги манипулятора','<h1>Наши клиенты</h1>\r\n\r\n<!--****************** 3-block  *************************************-->\r\n		    <div id=\"main-text\">\r\n<div>\r\n<p>На сегодняшний день среди клиентов компании ООО «Грузоперевозки»;, пользующихся услугами перевозок и сопровождению грузов на постоянной основе насчитывается более трех десятков крупных и средних предприятий.</p>\r\n\r\n<div><div class=\"article\">\r\n                        <div>\r\n\r\n\r\n			                          <div class=\"imgfloatleft\">\r\n                    <a class=\"modalbox\" id=\"example1\" href=\"../upload/iblock/353/3536ba378aa188881444fc694799e5ac.jpg\"><img class=\"preview_picture\" src=\"../upload/iblock/353/3536ba378aa188881444fc694799e5ac.jpg\" width=\"180\" height=\"240\" alt=\"ОАО &quot;ТНК ВР ПЕ&quot;\" title=\"ОАО &quot;ТНК ВР ПЕ&quot;\"></a>\r\n</div>\r\n                                     <div><h3>ОАО &quot;ТНК ВР ПЕ&quot;</h3></div>\r\n\r\n\r\n\r\n                           <p>ОАО \"ТНК ВР ПЕ\" молодая динамично развивающаяся компания. Основное направление деятельности компании — поставка финансовой продукции и комплектование объектов недвижимости.</p>\r\n\r\n                                        <small>\r\n                    Сайт:&nbsp;\r\n                                            <a href=\"http://www.tnk-bp.ru/\">http://www.tnk-bp.ru/</a>                                    </small><br />\r\n            									<div class=\"clear\"></div>\r\n<div class=\"saidbar-border\"></div>\r\n        </div>\r\n                    <div>\r\n\r\n\r\n			                          <div class=\"imgfloatleft\">\r\n                    <a class=\"modalbox\" id=\"example1\" href=\"../upload/iblock/834/8340fcff98182035a21b0cd5bae71c46.jpg\"><img class=\"preview_picture\" src=\"../upload/iblock/834/8340fcff98182035a21b0cd5bae71c46.jpg\" width=\"180\" height=\"240\" alt=\"ООО &quot;Нестле Россия&quot;\" title=\"ООО &quot;Нестле Россия&quot;\"></a>\r\n</div>\r\n                                     <div><h3>ООО &quot;Нестле Россия&quot;</h3></div>\r\n\r\n\r\n\r\n                           <p>ООО \"Нестле Россия\" молодая динамично развивающаяся компания. Основное направление деятельности компании — поставка финансовой продукции и комплектование объектов недвижимости.</p>\r\n\r\n                                        <small>\r\n                    Сайт:&nbsp;\r\n                                            <a href=\"http://www.nestle.ru/\">http://www.nestle.ru/</a>                                    </small><br />\r\n            									<div class=\"clear\"></div>\r\n<div class=\"saidbar-border\"></div>\r\n        </div>\r\n                    <div>\r\n\r\n\r\n			                          <div class=\"imgfloatleft\">\r\n                    <a class=\"modalbox\" id=\"example1\" href=\"../upload/iblock/7b3/7b318965f3f93955bcd65952cc4cfede.jpg\"><img class=\"preview_picture\" src=\"../upload/iblock/7b3/7b318965f3f93955bcd65952cc4cfede.jpg\" width=\"180\" height=\"240\" alt=\"ООО &quot;ОМК Сталь&quot;\" title=\"ООО &quot;ОМК Сталь&quot;\"></a>\r\n</div>\r\n                                     <div><h3>ООО &quot;ОМК Сталь&quot;</h3></div>\r\n\r\n\r\n\r\n                           <p>ООО \"ОМК Сталь\" молодая динамично развивающаяся компания. Основное направление деятельности компании — поставка финансовой продукции и комплектование объектов недвижимости.</p>\r\n\r\n                                        <small>\r\n                    Сайт:&nbsp;\r\n                                            <a href=\"http://www.steel-pro.ru/\">http://www.steel-pro.ru/</a>                                    </small><br />\r\n            									<div class=\"clear\"></div>\r\n<div class=\"saidbar-border\"></div>\r\n        </div>\r\n                    <div>\r\n\r\n\r\n			                          <div class=\"imgfloatleft\">\r\n                    <a class=\"modalbox\" id=\"example1\" href=\"../upload/iblock/b4a/b4a699df66b9bc3d9e39157fb0fb0efe.jpg\"><img class=\"preview_picture\" src=\"../upload/iblock/b4a/b4a699df66b9bc3d9e39157fb0fb0efe.jpg\" width=\"180\" height=\"240\" alt=\"ООО &quot;СК Контур&quot;\" title=\"ООО &quot;СК Контур&quot;\"></a>\r\n</div>\r\n                                     <div><h3>ООО &quot;СК Контур&quot;</h3></div>\r\n\r\n\r\n\r\n                           <p>ООО \"СК Контур\" молодая динамично развивающаяся компания. Основное направление деятельности компании — поставка финансовой продукции и комплектование объектов недвижимости.</p>\r\n\r\n                                        <small>\r\n                    Сайт:&nbsp;\r\n                                            <a href=\"http://www.kontur-extern.ru/\">http://www.kontur-extern.ru/</a>                                    </small><br />\r\n            									<div class=\"clear\"></div>\r\n<div class=\"saidbar-border\"></div>\r\n        </div>\r\n                    <div>\r\n\r\n\r\n			                          <div class=\"imgfloatleft\">\r\n                    <a class=\"modalbox\" id=\"example1\" href=\"../upload/iblock/699/699a8927e9a76c9688b8f5eade52bef3.jpg\"><img class=\"preview_picture\" src=\"../upload/iblock/699/699a8927e9a76c9688b8f5eade52bef3.jpg\" width=\"180\" height=\"240\" alt=\"ОАО &quot;Ростехнологии&quot;\" title=\"ОАО &quot;Ростехнологии&quot;\"></a>\r\n</div>\r\n                                     <div><h3>ОАО &quot;Ростехнологии&quot;</h3></div>\r\n\r\n\r\n\r\n                           <p>ОАО \"Ростехнологии\" молодая динамично развивающаяся компания. Основное направление деятельности компании — поставка финансовой продукции и комплектование объектов недвижимости.</p>\r\n\r\n                                        <small>\r\n                    Сайт:&nbsp;\r\n                                            <a href=\"http://rostec.ru/\">http://rostec.ru/</a>                                    </small><br />\r\n            									<div class=\"clear\"></div>\r\n<div class=\"saidbar-border\"></div>\r\n        </div>\r\n        </div>\r\n</div>\r\n\r\n<h3>Почему мы?</h3>\r\n\r\n<p>Нацеленность на успех и высокие достижения наших клиентов. Оказывая услуги бизнесу, мы всегда помним, что все, что делается, предназначено для наших клиентов. Норма нашего поведения - максимум внимания к заказчику и максимум понимания его проблем.</p>\r\n\r\n<p>При оказании консультационных услуг мы хотим, чтобы клиенты возвращались к нам снова и снова, ставя перед нами новые, все более сложные задачи.</p>\r\n\r\n<h3>Команда профессионалов</h3>\r\n\r\n<p>Компания предъявляет высокие требования к собственному персоналу. К настоящему моменту нам удалось сформировать сплоченную, эффективно работающую команду, профессиональный уровень которой повышается непрерывно. Это обеспечивает оказание консультационных услуг высокого качества и плодотворную совместную работу.</p>\r\n\r\n<p>Лучшими свидетельством профессионализма мы считаем успешно завершенные и реализуемые нами проекты.</p>\r\n </div>\r\n		    </div>\r\n	    </div>','on','on','2020-02-29 12:00:00','2020-02-29 12:00:00');
/*!40000 ALTER TABLE `va_pages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `va_password_resets`
--

DROP TABLE IF EXISTS `va_password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `va_password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `va_password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `va_password_resets`
--

LOCK TABLES `va_password_resets` WRITE;
/*!40000 ALTER TABLE `va_password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `va_password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `va_permissions`
--

DROP TABLE IF EXISTS `va_permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `va_permissions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `va_permissions_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `va_permissions`
--

LOCK TABLES `va_permissions` WRITE;
/*!40000 ALTER TABLE `va_permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `va_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `va_posts`
--

DROP TABLE IF EXISTS `va_posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `va_posts` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_keywords` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cat_id` bigint(20) unsigned NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `preview` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `full_text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `show` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `va_posts`
--

LOCK TABLES `va_posts` WRITE;
/*!40000 ALTER TABLE `va_posts` DISABLE KEYS */;
/*!40000 ALTER TABLE `va_posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `va_role_has_permissions`
--

DROP TABLE IF EXISTS `va_role_has_permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `va_role_has_permissions` (
  `permission_id` bigint(20) unsigned NOT NULL,
  `role_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `va_role_has_permissions_role_id_foreign` (`role_id`),
  CONSTRAINT `va_role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `va_permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `va_role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `va_roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `va_role_has_permissions`
--

LOCK TABLES `va_role_has_permissions` WRITE;
/*!40000 ALTER TABLE `va_role_has_permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `va_role_has_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `va_roles`
--

DROP TABLE IF EXISTS `va_roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `va_roles` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `va_roles_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `va_roles`
--

LOCK TABLES `va_roles` WRITE;
/*!40000 ALTER TABLE `va_roles` DISABLE KEYS */;
INSERT INTO `va_roles` VALUES (1,'guest','web','2021-03-13 12:26:30','2021-03-13 12:26:30'),(2,'user','web','2021-03-13 12:26:36','2021-03-13 12:26:36'),(3,'admin','web','2021-03-13 12:26:42','2021-03-13 12:26:42'),(4,'ajax','web','2021-03-16 04:20:43','2021-03-16 04:20:43');
/*!40000 ALTER TABLE `va_roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `va_sessions`
--

DROP TABLE IF EXISTS `va_sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `va_sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL,
  KEY `va_sessions_user_id_index` (`user_id`),
  KEY `va_sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `va_sessions`
--

LOCK TABLES `va_sessions` WRITE;
/*!40000 ALTER TABLE `va_sessions` DISABLE KEYS */;
INSERT INTO `va_sessions` VALUES ('0x41Sq0JOzILm34DgcPWafBEyrqjyfFGLhDELEWV',3,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.90 Safari/537.36','YTo0OntzOjY6Il90b2tlbiI7czo0MDoiYjZFN3hWaXRaVGRvUHBoQ01PNW5VZWhkVm1icXNuNUlxWDQ1V2ViUSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzY6Imh0dHA6Ly92YWxleG9jbXMubGl0ZS9hZG1pbi9jYXRlZ29yeSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjM7fQ==',1616610801),('XN26Xh5MUvfrvLAueXnO1pxgYvSkYA1YjCzM4XDM',3,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.90 Safari/537.36','YTozOntzOjY6Il90b2tlbiI7czo0MDoiT1JJZWE3dUl1a21iMHR0aGR5WklLQjJDN2JnbzRDWjFRNmdOUDFVdiI7czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MztzOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19',1616608515);
/*!40000 ALTER TABLE `va_sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `va_settings`
--

DROP TABLE IF EXISTS `va_settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `va_settings` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `label` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `va_settings`
--

LOCK TABLES `va_settings` WRITE;
/*!40000 ALTER TABLE `va_settings` DISABLE KEYS */;
INSERT INTO `va_settings` VALUES (1,'set_title','Самая лучшая cms YouTo Lite! Только для тебя.','string','Заголовок сайта',NULL,NULL),(2,'set_description','Описание самой лучшей Cms.','text','Описание сайта',NULL,NULL),(3,'set_url','http://valexocms.lite','string','Адрес сайта',NULL,NULL),(4,'set_domen','valexocms.lite','string','Доменное имя',NULL,NULL),(5,'set_email_support','support@y2cms.ru','string','Постовый адрес технической поддержки',NULL,NULL),(6,'set_phone_support','+78008888888','string','Номер телефона технической поддержки',NULL,NULL),(7,'set_server_license','http://y2cms.ru/license.php','string','Адрес сервера лицензиии',NULL,NULL),(8,'set_theme','default','string','Имя шаблона',NULL,NULL),(9,'set_charset','UTF-8','string','Кодировка сайта',NULL,NULL),(10,'set_smtp_host','smtp.gmail.com','string','Адрес smtp',NULL,NULL),(11,'set_SMTPDebug','0','boolean','Вкл/выкл отладки smtp',NULL,NULL),(12,'set_smtp_auth','1','boolean','smtp авторизация',NULL,NULL),(13,'set_smtp_secure','ssl','string','smtp протокол',NULL,NULL),(14,'set_smtp_port','465','string','smtp порт',NULL,NULL),(15,'set_smtp_password','123456789','string','smtp пароль',NULL,NULL),(16,'set_name_responder','YouTo CMS Lite!','string','Заголовок ответного письма',NULL,NULL),(18,'set_smtp_username','user@email.com','string','логин smtp авторизации',NULL,NULL),(19,'set_dkim_domain',NULL,'string','dkkim доменное имя',NULL,NULL),(20,'set_dkim_passphrase',NULL,'string','dkim пароль',NULL,NULL),(21,'set_site_name','CMS YouTo Lite','string','Имя сайта',NULL,NULL),(23,'set_key_update','0c12d5398b0854ddcb65d7c6229e1b0f','string','Ключь обновлений',NULL,NULL),(24,'set_curency','руб.','string','Валюта',NULL,NULL),(25,'set_time_work','Время работы офиса с 10:00 до  17,00 Сб, Вс - выходной','text','Рабочее время организации',NULL,NULL),(26,'set_format_excel','Excel5','string','Формат excel',NULL,NULL),(27,'set_lang_default','Ru_ru','string','Язык по умолчанию',NULL,NULL),(28,'set_confirm_sms_callback','0','boolean','вкл/выкл отправка sms оповещений',NULL,NULL),(29,'set_confirm_new_comment','1','boolean','Оповещать о новых комментариях',NULL,NULL),(30,'set_confirm_new_aricle','1','boolean','Оповещать о новых статьях',NULL,NULL),(31,'set_auth_comment','1','boolean','Комментирование толко авторизованных',NULL,NULL),(32,'set_moderate_comment','1','boolean','Модерация комментариев',NULL,NULL),(33,'set_watermark','watermark.png','string','Водяной знак',NULL,NULL),(34,'set_watermark_pos','4','integer','Позиция водяного знака',NULL,NULL),(35,'set_mailfun','1','boolean','вкл/выкл оповещений по email',NULL,NULL),(36,'set_email_allert','alert@mail.ru','string','email для оповещений',NULL,NULL),(38,'set_session_name','YOUTO_lite_2X4HJ','string','Имя сессии',NULL,NULL),(39,'set_session_lifetime','1440','string','Жизнь сессии',NULL,NULL),(40,'set_cookie_lifetime','1','boolean','Жизнь COOKIE',NULL,NULL),(41,'set_session_path','tmp','string','папка для сессий при отладке',NULL,NULL),(42,'set_on_statistic','0','boolean','вкл/выкл статистики',NULL,NULL),(43,'set_access_ip','91.146.53.89,127.0.0.1','string','Разрешонные ip',NULL,NULL),(44,'set_core_version','1.0.0','string','Версия платформы',NULL,NULL),(45,'set_author','Осотов В.А','string','Автор',NULL,NULL),(46,'set_api_id','9E4FA753-CFA0-D353-9817-FC3FF033AEC0','string','API ключ для рассылки sms оповещений',NULL,NULL),(47,'set_sms_subscribe','0','boolean','Включение или отключение sms оповещений',NULL,NULL),(48,'set_html_letter','1','boolean','Разрешит HTML письма',NULL,NULL),(49,'set_version','1.0.0','string','Версия платформы',NULL,NULL);
/*!40000 ALTER TABLE `va_settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `va_snippets`
--

DROP TABLE IF EXISTS `va_snippets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `va_snippets` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `type` enum('input','textarea','checkbox','list') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'input',
  `hidden` tinyint(1) NOT NULL DEFAULT '1',
  `item` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `va_snippets`
--

LOCK TABLES `va_snippets` WRITE;
/*!40000 ALTER TABLE `va_snippets` DISABLE KEYS */;
/*!40000 ALTER TABLE `va_snippets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `va_statistics`
--

DROP TABLE IF EXISTS `va_statistics`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `va_statistics` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ip` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `region` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `platform` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `browser` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `device_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `useragent` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `visitor` int(11) unsigned NOT NULL,
  `host` int(11) unsigned DEFAULT NULL,
  `request_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `http_referer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `va_statistics`
--

LOCK TABLES `va_statistics` WRITE;
/*!40000 ALTER TABLE `va_statistics` DISABLE KEYS */;
INSERT INTO `va_statistics` VALUES (16,'24-03-2021','194.36.108.94','Берлин','Берлин','Германия','Win10','Chrome','Desktop','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.90 Safari/537.36',1,1,'/ajax/statistic?_=1616532023068','http://valexocms.lite/'),(17,'24-03-2021','194.36.108.94','Берлин','Берлин','Германия','Win10','Chrome','Desktop','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.90 Safari/537.36',1,NULL,'/ajax/statistic?_=1616582250128','http://valexocms.lite/'),(18,'24-03-2021','194.36.108.94','Берлин','Берлин','Германия','Win10','Chrome','Desktop','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.90 Safari/537.36',1,NULL,'/ajax/statistic?_=1616582252413','http://valexocms.lite/'),(19,'24-03-2021','194.36.108.94','Берлин','Берлин','Германия','Win10','Chrome','Desktop','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.90 Safari/537.36',1,NULL,'/ajax/statistic?_=1616582274234','http://valexocms.lite/'),(20,'24-03-2021','194.36.108.94','Берлин','Берлин','Германия','Win10','Chrome','Desktop','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.90 Safari/537.36',1,NULL,'/ajax/statistic?_=1616582294540','http://valexocms.lite/'),(21,'24-03-2021','194.36.108.94','Берлин','Берлин','Германия','Win10','Chrome','Desktop','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.90 Safari/537.36',1,NULL,'/ajax/statistic?_=1616582298449','http://valexocms.lite/'),(22,'24-03-2021','194.36.108.94','Берлин','Берлин','Германия','Win10','Chrome','Desktop','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.90 Safari/537.36',1,NULL,'/ajax/statistic?_=1616582309127','http://valexocms.lite/'),(23,'24-03-2021','194.36.108.94','Берлин','Берлин','Германия','Win10','Chrome','Desktop','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.90 Safari/537.36',1,NULL,'/ajax/statistic?_=1616584099119','http://valexocms.lite/'),(24,'24-03-2021','194.36.108.94','Берлин','Берлин','Германия','Win10','Chrome','Desktop','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.90 Safari/537.36',1,NULL,'/ajax/statistic?_=1616588521691','http://valexocms.lite/page/index'),(25,'24-03-2021','194.36.108.94','Берлин','Берлин','Германия','Win10','Chrome','Desktop','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.90 Safari/537.36',1,NULL,'/ajax/statistic?_=1616588526747','http://valexocms.lite/'),(26,'24-03-2021','194.36.108.94','Берлин','Берлин','Германия','Win10','Chrome','Desktop','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.90 Safari/537.36',1,NULL,'/ajax/statistic?_=1616588702421','http://valexocms.lite/page/index'),(27,'24-03-2021','194.36.108.94','Берлин','Берлин','Германия','Win10','Chrome','Desktop','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.90 Safari/537.36',1,NULL,'/ajax/statistic?_=1616588871816','http://valexocms.lite/'),(28,'24-03-2021','194.36.108.94','Берлин','Берлин','Германия','Win10','Chrome','Desktop','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.90 Safari/537.36',1,NULL,'/ajax/statistic?_=1616590761324','http://valexocms.lite/'),(29,'24-03-2021','194.36.108.94','Берлин','Берлин','Германия','Win10','Chrome','Desktop','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.90 Safari/537.36',1,NULL,'/ajax/statistic?_=1616600968872','http://valexocms.lite/');
/*!40000 ALTER TABLE `va_statistics` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `va_summary_statistic`
--

DROP TABLE IF EXISTS `va_summary_statistic`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `va_summary_statistic` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `today` char(50) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `visitors` int(11) NOT NULL DEFAULT '0',
  `hosts` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `va_summary_statistic`
--

LOCK TABLES `va_summary_statistic` WRITE;
/*!40000 ALTER TABLE `va_summary_statistic` DISABLE KEYS */;
INSERT INTO `va_summary_statistic` VALUES (1,'15-03-2021',2,2),(3,'16-03-2021',23,2),(4,'17-03-2021',20,2),(5,'14-03-2021',32,7),(6,'13-03-2021',24,5),(8,'18-03-2021',9,1),(17,'19-03-2021',10,0),(18,'20-03-2021',3,1),(19,'21-03-2021',3,2),(20,'22-03-2021',4,1),(22,'23-03-2021',11,0),(23,'23-03-2021',1,1),(24,'24-03-2021',14,1);
/*!40000 ALTER TABLE `va_summary_statistic` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `va_users`
--

DROP TABLE IF EXISTS `va_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `va_users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `va_users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `va_users`
--

LOCK TABLES `va_users` WRITE;
/*!40000 ALTER TABLE `va_users` DISABLE KEYS */;
INSERT INTO `va_users` VALUES (1,'Владлен Владимирович',' Мельников','79092658698','kudrasova.maksim@example.com','2020-02-29 07:44:20','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',NULL,NULL,'JWRj4ppr2x','2020-02-29 07:44:20','2020-02-29 07:44:20'),(2,'Королёвaа Эльвира','Алексеевна','74598565232','wkrasilnikov@example.com','2020-02-29 07:44:20','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',NULL,NULL,'Gm8bHJIiVu','2020-02-29 07:44:20','2020-02-29 07:44:20'),(3,'Валентин','Осотов','79090572269','osvax@yandex.com','2021-02-25 21:26:02','$2y$10$EuA4T7aZ3u.KWCoJNknikeljgFKGQDlurzvDylVUjyWIJesHDmN2a',NULL,NULL,'yMhZAK4AlIOidzeL42DiOMtr3IefkTdcFPZoOd1Pkvtun8Gx7czv8sRhG27s','2021-02-25 20:43:18','2021-03-03 03:11:28'),(4,'User','Test','','test@test.ru','2021-02-25 20:57:52','$2y$10$3p2qpvvSUZWaLSEYKBbm6.vgrpFxb2iWdDv6Xx5diJlLuMBhI6e0a',NULL,NULL,NULL,'2021-02-25 20:55:28','2021-02-25 20:57:52'),(5,'Трофим Иванович','Тетерин','73412859645','belozerov.taisia@example.org','2020-02-29 07:44:20','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',NULL,NULL,'e7w574tcLn','2020-02-29 07:44:20','2020-02-29 07:44:20'),(6,'Розалина Дмитриевна Агафоновaа','Агафоновaа','79124589356','illarion76@example.com','2020-02-29 07:44:20','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',NULL,NULL,'gAJIBJ54Qy','2020-02-29 07:44:20','2020-02-29 07:44:20'),(7,'Дарья Алексеевна',' Евдокимова','79014568212','kondrateva.pavel@example.org','2020-02-29 08:29:01','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',NULL,NULL,'Zsu1nTK2GD','2020-02-29 08:29:01','2020-02-29 08:29:01'),(8,'Симонова Диана','Дмитриевна','74851285692','galkin.denis@example.com','2020-02-29 08:29:01','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',NULL,NULL,'WJhEHlFEJP','2020-02-29 08:29:01','2020-02-29 08:29:01'),(9,'Василиса Ивановна','Белоусовaа','79061258532','kapitolina.sukina@example.com','2020-02-29 08:29:01','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',NULL,NULL,'g38eQNo4FH','2020-02-29 08:29:01','2020-02-29 08:29:01'),(10,'Юлий Борисович','Игнатьевa','79124568521','semen02@example.net','2020-02-29 08:29:01','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',NULL,NULL,'JWxquZvHee','2020-02-29 08:29:01','2020-02-29 08:29:01'),(12,'Valentin','Alexo','+7(909)0572269','osvax@yandex.ru','2021-03-03 10:47:57','$2y$10$WmVvuD2c9uqY0j9149GcreAiPM9c5x8fQd/tJ/T8LZAFBDsirTliK',NULL,NULL,'rOMzgqctZ6nM69vmLcP7PgmUpQ6VH6kUOgeeN6g1cyyKaK0DBaS5C2xHeQkg','2021-03-03 10:45:25','2021-03-03 10:47:57'),(13,'Ardith','Runolfsson','+1 (426) 666-8442','towne.nina@example.org','2021-03-17 09:08:14','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',NULL,NULL,'AUIcWGWXDu','2021-03-17 09:08:14','2021-03-17 09:08:14'),(14,'Corine','Anderson','828.399.1508','victoria.feeney@example.net','2021-03-17 09:09:39','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',NULL,NULL,'aPaRuGumiS','2021-03-17 09:09:39','2021-03-17 09:09:39'),(15,'Jordy','Metz','735.670.8802','micheal.fisher@example.org','2021-03-17 09:09:52','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',NULL,NULL,'xYgpUv9KnQ','2021-03-17 09:09:52','2021-03-17 09:09:52');
/*!40000 ALTER TABLE `va_users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-03-25 23:26:04
