/*
SQLyog Ultimate v12.14 (64 bit)
MySQL - 5.6.17 : Database - blog
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`blog` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_bin */;

USE `blog`;

/*Table structure for table `comment` */

DROP TABLE IF EXISTS `comment`;

CREATE TABLE `comment` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `commentator_id` int(255) DEFAULT NULL,
  `post_id` int(255) DEFAULT NULL,
  `date_com` datetime DEFAULT NULL,
  `comment` text,
  PRIMARY KEY (`id`),
  KEY `commentator_id` (`commentator_id`),
  KEY `post_id` (`post_id`),
  CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`commentator_id`) REFERENCES `user` (`id`),
  CONSTRAINT `comment_ibfk_2` FOREIGN KEY (`post_id`) REFERENCES `post` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

/*Data for the table `comment` */

insert  into `comment`(`id`,`commentator_id`,`post_id`,`date_com`,`comment`) values 
(1,1,3,'2016-07-12 21:56:08','Je viens de commencer à programmer sur Android et c\'est assez dur'),
(2,1,3,'2016-07-12 21:56:59','Tout commence à se cumuler ce n\'est pas génial'),
(3,2,3,'2016-07-12 22:18:44','Génial j\'aimerai développé sur android mais à chaque fois que j\'utilise un téléphone je les troues'),
(4,2,4,'2016-07-20 23:27:32','You should look a stackoverflow and standford website. They have awesome tutorials and information to get enrolled.'),
(5,3,4,'2016-07-21 00:01:49','I got enrolled during last summer for a intership application and it was great. I recommend it.'),
(6,1,4,'2016-07-26 23:21:54','How much are the fees to get in there?'),
(7,1,5,'2016-07-27 00:34:45','Pourquoi a t on autant de problèmes avec Flight?');

/*Table structure for table `post` */

DROP TABLE IF EXISTS `post`;

CREATE TABLE `post` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `poster_id` int(255) NOT NULL,
  `date_post` datetime DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text,
  PRIMARY KEY (`id`),
  KEY `user_id` (`poster_id`),
  CONSTRAINT `post_ibfk_1` FOREIGN KEY (`poster_id`) REFERENCES `user` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

/*Data for the table `post` */

insert  into `post`(`id`,`poster_id`,`date_post`,`title`,`description`) values 
(1,1,'2016-07-12 19:11:12','portable occasion pour surf et films - max 250€','Bonjour,\r\n \r\n \r\nAfin de remplacer mon macbook air qui a rendu l\'ame, je cherche un portable (plutot 13\" ) pour utilisation majoritairement pour regarder des films (.avi et netflix) et un peu de surf.\r\n \r\n \r\nMes besoins :\r\n \r\nBon écran\r\nautonomie correcte\r\nplutot silencieux\r\nWindows 7\r\n \r\n \r\nJe n\'y connais rien en PC, les Lenovo ça vaut encore qqch ? exemple les T520 que l\'on trouve en occaz à bon prix.\r\n \r\n \r\nMerci'),
(2,1,'2016-07-12 19:50:12','J\'hésite entre deux pc portable','Voilà , je dois faire un choix entre deux ordinateurs portables , qui je le sais bien , ne sont pas conçu pour être comparés , mais combien même , j\'aimerai avoir votre avis la dessus .\r\n \r\nLes deux ordinateurs portables en question sont :  \r\n \r\n-Le macbook pro 2015 13pouces retina , 512 SSD  , i5  \r\n \r\n- MSI GL62 6QF i7 6700HQ , GTX 960M 2Gb , 1To 7200rpm .\r\n \r\n \r\n \r\nJe tiens à préciser , que le MSI sera neuf , donc sous 1 an de garanti ( je ne suis pas en région française ) , tandis que le macbook , je l’achèterai d\'un ami , au même prix [i]( avec 54 cycles de recharges ) .  \r\n[/i]\r\n \r\n Pourquoi le macbook pro ? Se revend très bien , le SSD au top , écran rétina , portabilité ( même si ce n\'est pas dans mes premières exigences ) , autonomie au top . Seul hic , je dirai adieu aux jeux video . Tandis que le MSI GL62 , outre son rapport qualité prix qui est excellent   -- malgré une  autonomie qui est loin d\'être au top  mais me va pour mes transport qui ne dépassent jamais 3heures -- je pourrai à la fois travailler dessus  confortablement , mais je pourrai jouer de temps à autre à des jeux avec des graphismes medium .\r\n \r\nDans deux mois , je serai dans une école d’ingénieure en filière   informatique  ( et donc du codage à gogo ) , ainsi , j\'aimerai être sûr d\'avoir fait le bon choix .  \r\n \r\nCe que je vous demande donc , c\'est est ce que le macbook pro 2015 serait un bien meilleur choix , malgré une dalle plus petite et faire croix sur les jeuxvideo ? est ce qu\'il apporte un réel plus par rapport au MSI ?  \r\n \r\nMerci de bien m\'éclaircir sur le sujet'),
(3,1,'2016-07-12 19:54:26',' Developpement sur Android !','Bonjour !  \r\nJ\'ai fais une recherche, je ne vois nul part un topic d\'entraide pour les développeurs sur Android.\r\nJe m\'y suis mis récemment, je me propose donc de suivre ce topic.  \r\nSi il y a des gens motivés...\r\nJe posterai les technique pour capter la positions GPS, j\'y suis arrivé récemment.\r\nJe suis total debutant en android / java !\r\n \r\nQuelqu\'un d\'entre vous a déjà testé ?\r\nVos retours d\'expérience ? '),
(4,3,'2016-07-20 23:01:49','Best beginners computer science course?','Hi misc\r\n\r\nI\'m a complete noob when it comes to computer science and programming (apart from basic binary, ASCII, ladder logic/function block PLC programming and very basic networking knowledge) but would love to have a deeper knowledge and understanding of CS before I start electrical engineering next year.\r\n\r\nDoes anyone have any advice on where to start, and what is the general consensus on free online courses? Is harvards CS50 the best introduction, or is there other useful courses that I should be looking at? '),
(5,1,'2016-07-27 00:09:02','Deux chaines hashées MD5 identiques','salut à tous,\r\n \r\n\r\nEst-il possible que deux chaines hachées avec MD5() soient strictement identiques si elles contiennent chacune deux chaines distinctes ?\r\n \r\n\r\nEx :\r\n \r\n\r\nchaine 1 : chaine1-test + grain de sable\r\nchaine 2 : chaine2-test + grain de sable 2 (différent de l\'autre)\r\n \r\n\r\nles hashes de chaine 1 et de chaine 2 peuvent-ils être identiques ?\r\n \r\n\r\nJe ne veux surtout pas qu\'ils soient identiques, mais je demande parce que je n\'ai aucune idée de la réponse...');

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `user` */

insert  into `user`(`id`,`username`,`password`,`email`) values 
(1,'apocalypse','936c19a5a54758a9547a066ca2c867e5','fernandez1980@gmail.com'),
(2,'wolverine','936c19a5a54758a9547a066ca2c867e5','wolverine@gmail.com'),
(3,'StrongFella','936c19a5a54758a9547a066ca2c867e5','le_debutant@yahoo.fr');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
