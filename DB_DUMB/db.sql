/*
SQLyog Community Edition- MySQL GUI v8.03 
MySQL - 5.5.20-log : Database - question_bank
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

CREATE DATABASE /*!32312 IF NOT EXISTS*/`question_bank` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `question_bank`;

/*Table structure for table `course` */

DROP TABLE IF EXISTS `course`;

CREATE TABLE `course` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `depid` int(10) NOT NULL,
  `course` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

/*Data for the table `course` */

insert  into `course`(`id`,`depid`,`course`) values (1,1,'bsc'),(2,2,'msc'),(3,1,'bca'),(4,3,'che'),(5,5,'msc'),(6,0,'dsg'),(7,0,'asd'),(8,0,''),(9,0,''),(10,0,'bsc'),(11,0,'dsaf');

/*Table structure for table `department` */

DROP TABLE IF EXISTS `department`;

CREATE TABLE `department` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `department` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `department` */

insert  into `department`(`id`,`department`) values (1,'cs'),(2,'ec'),(3,'it'),(4,'gjg'),(5,'maths');

/*Table structure for table `examques` */

DROP TABLE IF EXISTS `examques`;

CREATE TABLE `examques` (
  `Id` int(10) NOT NULL AUTO_INCREMENT,
  `departmentid` int(11) NOT NULL,
  `Courseid` int(10) NOT NULL,
  `Semester` int(10) NOT NULL,
  `Subjectid` int(10) NOT NULL,
  `Mark` int(11) NOT NULL,
  `Question` varchar(500) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

/*Data for the table `examques` */

insert  into `examques`(`Id`,`departmentid`,`Courseid`,`Semester`,`Subjectid`,`Mark`,`Question`) values (2,1,1,2,2,4,'what is computer system'),(3,1,1,2,2,4,'explane cs'),(4,1,1,2,2,2,'sdcfdf'),(5,1,1,3,0,1,'what is project'),(6,1,1,2,2,4,'what is computer....?'),(7,1,1,2,2,1,'hwlooo'),(8,1,1,2,2,2,'gf'),(9,1,1,2,2,8,'explane css'),(10,1,1,2,0,4,'what is ...?'),(11,1,1,2,2,0,'what are the components of computer...?'),(12,1,1,2,2,0,'ngdzs');

/*Table structure for table `feedback` */

DROP TABLE IF EXISTS `feedback`;

CREATE TABLE `feedback` (
  `Id` int(10) NOT NULL AUTO_INCREMENT,
  `Userid` int(10) NOT NULL,
  `Feedback` varchar(25) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `feedback` */

insert  into `feedback`(`Id`,`Userid`,`Feedback`) values (1,24,'fhghgg'),(2,25,'my feedback'),(3,0,'exam is very tough ......'),(4,0,'');

/*Table structure for table `knock` */

DROP TABLE IF EXISTS `knock`;

CREATE TABLE `knock` (
  `Id` int(10) NOT NULL AUTO_INCREMENT,
  `departmentid` int(11) NOT NULL,
  `courseid` int(10) NOT NULL,
  `sem` int(10) NOT NULL,
  `subjectid` int(10) NOT NULL,
  `questions` varchar(25) NOT NULL,
  `opt1` varchar(10) NOT NULL,
  `opt2` varchar(10) NOT NULL,
  `opt3` varchar(10) NOT NULL,
  `opt4` varchar(10) NOT NULL,
  `answer` varchar(15) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `knock` */

insert  into `knock`(`Id`,`departmentid`,`courseid`,`sem`,`subjectid`,`questions`,`opt1`,`opt2`,`opt3`,`opt4`,`answer`) values (1,0,1,1,2,'how many item in a desan.','10','12','8','6','12'),(2,1,1,2,2,'how many bones in human b','234','124','23','413','413'),(3,1,1,2,2,'asd','0','0','0','0','a'),(5,1,1,2,0,'eedgd','a','b','c','d','b'),(6,1,1,2,2,'which is odd one,,,,?','apple','orange','pinaple','tomato','tomato');

/*Table structure for table `login` */

DROP TABLE IF EXISTS `login`;

CREATE TABLE `login` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(25) NOT NULL,
  `password` varchar(10) NOT NULL,
  `type` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

/*Data for the table `login` */

insert  into `login`(`id`,`username`,`password`,`type`) values (1,'admin','admin','admin'),(2,'staff','staff','staff'),(3,'stud','stud','user'),(4,'ansar','ansar111','type'),(5,'ansar','ansar111','type'),(6,'ansar','ansar111','staff'),(7,'anjana','anjana123','staff'),(8,'ansar','ansar111','staff'),(9,'ansar','ansar111','staff'),(10,'ansar','ansar111','staff'),(11,'ansar','ansar111','staff'),(13,'ansar','ansar111','stud'),(14,'utdjk','etdyje','stud'),(20,'','','stud'),(22,'SDGR','SDR','stud'),(23,'','','stud'),(29,'q','d','stud'),(30,'gyg8','yo','stud'),(32,'ansar','ansar123','stud');

/*Table structure for table `notification` */

DROP TABLE IF EXISTS `notification`;

CREATE TABLE `notification` (
  `Id` int(10) NOT NULL AUTO_INCREMENT,
  `Notification` varchar(250) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `notification` */

insert  into `notification`(`Id`,`Notification`) values (1,'first notification'),(2,'second semester exam shou'),(3,'second semester exam should be conduct within two weeks'),(4,''),(5,''),(6,''),(7,'');

/*Table structure for table `prevque` */

DROP TABLE IF EXISTS `prevque`;

CREATE TABLE `prevque` (
  `Id` int(10) NOT NULL AUTO_INCREMENT,
  `departmentid` int(11) NOT NULL,
  `Courseid` int(10) NOT NULL,
  `Semester` int(10) NOT NULL,
  `Subjectid` int(10) NOT NULL,
  `PDF` varchar(150) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `prevque` */

insert  into `prevque`(`Id`,`departmentid`,`Courseid`,`Semester`,`Subjectid`,`PDF`) values (1,1,1,2,2,'anirudh2017.pdf'),(2,1,1,3,3,'spam-nw.pdf'),(3,3,4,3,0,'anirudh2017.pdf'),(4,1,1,2,2,'anirudh2017.pdf'),(5,1,1,2,2,'anirudh2017.pdf'),(6,1,1,2,2,'10.1.1.740.8030.pdf');

/*Table structure for table `staff` */

DROP TABLE IF EXISTS `staff`;

CREATE TABLE `staff` (
  `Name` varchar(20) NOT NULL,
  `Age` int(10) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Mob` bigint(15) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Housename` varchar(25) NOT NULL,
  `Place` varchar(15) NOT NULL,
  `Post` varchar(15) NOT NULL,
  `Pin` bigint(15) NOT NULL,
  `lid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `staff` */

/*Table structure for table `studentreg` */

DROP TABLE IF EXISTS `studentreg`;

CREATE TABLE `studentreg` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `Name` varchar(20) NOT NULL,
  `Age` int(10) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `HouseName` varchar(20) NOT NULL,
  `Place` varchar(15) NOT NULL,
  `Post` varchar(10) NOT NULL,
  `Pin` bigint(10) NOT NULL,
  `Mob` bigint(15) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Department` varchar(15) NOT NULL,
  `Course` varchar(10) NOT NULL,
  `lid` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

/*Data for the table `studentreg` */

insert  into `studentreg`(`id`,`Name`,`Age`,`Gender`,`HouseName`,`Place`,`Post`,`Pin`,`Mob`,`Email`,`Department`,`Course`,`lid`) values (17,'ansar',20,'male','kror','elr','et',562345,5323412354,'ansar@gmail.com','1','1',32);

/*Table structure for table `subject` */

DROP TABLE IF EXISTS `subject`;

CREATE TABLE `subject` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `depid` int(10) NOT NULL,
  `courseid` int(10) NOT NULL,
  `semester` int(5) NOT NULL,
  `subject` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `subject` */

insert  into `subject`(`id`,`depid`,`courseid`,`semester`,`subject`) values (1,0,0,0,'$sub'),(2,1,1,2,'computer'),(3,1,1,3,'css'),(4,1,3,3,'fm'),(5,1,0,4,'ns'),(6,1,0,2,'asdf'),(7,1,1,2,'afwe');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
