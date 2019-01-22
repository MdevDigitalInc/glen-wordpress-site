-- MySQL dump 10.13  Distrib 5.7.24, for Linux (x86_64)
--
-- Host: localhost    Database: wordpress
-- ------------------------------------------------------
-- Server version	5.7.24

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
-- Table structure for table `tblEmployees`
--

DROP TABLE IF EXISTS `tblEmployees`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tblEmployees` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(120) DEFAULT NULL,
  `History` varchar(300) DEFAULT NULL,
  `Quote` varchar(300) DEFAULT NULL,
  `TeamID` int(11) DEFAULT NULL,
  `Title` varchar(120) NOT NULL,
  `Avatar` varchar(120) DEFAULT NULL,
  `avatarImage` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblEmployees`
--

LOCK TABLES `tblEmployees` WRITE;
/*!40000 ALTER TABLE `tblEmployees` DISABLE KEYS */;
INSERT INTO `tblEmployees` VALUES (1,'Jamie, RECE','Jamie is a former recipient of the Children\'s Service Advocacy Award from the Assoc. of Early Childhood Educators. She has been an ECE since 1979 and with Arbour Glen since 1999.','Nothing warms my heart more than to see a joyful child fully absorbed in what they are doing. I love caring for our team of Educators who dedicate themselves fully to children. This is my lifes passion.',1,'Executive Director','purple','/img/avatars/avatar-jamie.png'),(2,'Charlene, RECE','Charlene was formerly awarded Early Childhood Educator of the Year for Ontario and was also a runner up for the Prime Minister\'s Award for Excellence in Early Childhood Education. She has been an ECE since 1990 and with Arbour Glen since 1990.','Sharing literature with children has always been my favourite thing to do! Whether through puppet shows, picture books or story telling, I love watching the expressions of wonder on their faces.',1,'Program Supervisor','green','/img/avatars/avatar-charlene.png'),(3,'Cydnee, RECE','Cyndee has been an ECE since 1986 and with Arbour Glen since 1986.','All four of my children went here too: Arbour Glen is very much a second family to me. I love the variety in my day, but especially working with the children  who can have a bad day when they walk into a classroom and get swarmed with hugs!',1,'Program Administrator','blue','/img/avatars/avatar-cyndee.png'),(4,'Elaine','Elaine has been in professional food services since 1993 and with Arbour Glen since 1997.','I love when a child is beaming with pride to share something they accomplished that day or asks me for a hug before they leave for the day. And of course, I loved your lunch! is always great to hear.',2,'Dietary Planner','green','/img/avatars/avatar-elaine.png'),(5,'Esperanza','Esperanza has custodial experienced since 1980s and with Arbour Glen since 2008.','Our family has been involved with Arbour Glen since the 1980\'s. My mother was the custodian at the centre before I was, and it is a pleasure to continue here after her retirement. We dust and clean to make Arbour Glen sparkle, just as she did back then.',2,'Custodian','blue','/img/avatars/avatar-esperanza.png'),(6,'Andrea','Andrea has been an ECE Apprentice with Arbour Glen since 2016.','I love watching the children explore and make their own discoveries! It makes my work with them so meaningful.',2,'ECE Apprentice','red','/img/avatars/avatar-andrea.png'),(7,'Alison, RECE','Alison has been an ECE since 2018 and with Arbour Glen since 2018.','We develop a special bond with children as we support their learning. We make a little difference in their life, and that is what really drives me in this field!',3,' ','red','/img/avatars/avatar-alison.png'),(8,'Barb, RECE','Barb has been an ECE since 1996 and \nwith Arbour Glen since 2001.','After coming back from vacation, we brought back some pixie dust ‘from Tinkerbell’, which was only to be used on birthdays for a special, magical wish. When we use it, the look of awe and excitement on their faces is something I’ll never forget!',3,'','blue','/img/avatars/avatar-barb.png'),(9,'Priti, RECE','Priti has been an ECE since 2010 and \nwith Arbour Glen since 2015.','“Being able to work with children and watch them grow is the most amazing thing in the world to me. When I watch their little minds and imaginations at work it makes me realize that there is so much in life to appreciate and enjoy.”',3,'','purple','/img/avatars/avatar-priti.png'),(10,'Tara, Rece','Tara has been an ECE since 1996 and \nwith Arbour Glen since 1997.','I really enjoy taking the children to Kensington Village, and many of my favourite moments are when children who have left Arbour Glen return to update us on how they’re doing and what they’re up to now.',3,'','green','/img/avatars/avatar-tara.png'),(11,'Alisha, RECE','Alisha has been an ECE since 2014 and \nwith Arbour Glen since 2016.','Everyday, as we follow the lead of the child, exciting opportunities for learning present themselves and I find it inspiring and a delight to participate in. And of course, what better than to have a day so filled with hugs and cuddles!',5,'','purple','/img/avatars/avatar-alisha.png'),(12,'Allison, RECE','Allison has been an ECE since 2004 and with Arbour Glen since 2005.','Have a connecting moment with a new child is really something special, and caring relationships with their families are wonderful.',5,'','blue','/img/avatars/avatar-allison.png'),(13,'Chris, RECE','Chris has been an ECE since 1980 and with Arbour Glen since 2003.','I can\'t imagine a world without music, art, books, laughter, love, the great outdoors - I try to bring my love of these with me to Arbour Glen and share them with the children each day.',5,'','green','/img/avatars/avatar-chris.png'),(14,'Dawn, RECE','Dawn has been an ECE since 1988 and with Arbour Glen since 1989 and also a former preschooler when Arbour Glen first opened.','Mornings are the greatest: when the children are so happy to see you. How special to get to start your day with lots of hugs!',4,'','green','/img/avatars/avatar-dawn.png'),(15,'Kalyssa, RECE','Kalyssa has been an ECE since 2011 and with Arbour Glen since 2012.','If there’s anyone here named ____”. When they stand up and blow kisses at that point in the song, they get so excited – it’s something special and fun to watch!',4,'','red','/img/avatars/avatar-kalyssa.png'),(16,'Kim, RECE','Kim has been an ECE since 1990 and \nwith Arbour Glen since 2009.','I have a favourite moment that I hope repeats itself with every child I encounter: it’s that first time a child just needs some reassurance, and they crawl into my lap and I can give them that. The trust they have to accept that from me without question, is truly special.',4,'','purple','/img/avatars/avatar-kim.png'),(17,'Kristy, RECE','Kristy has been an ECE since 2000 and \nwith Arbour Glen since 2002.','I love anything messy! Mud Day is one of my favourite days - it is super fun, and especially great to see the apprehensive children get really into the activities.',4,'','blue','/img/avatars/avatar-kristy.png'),(18,'Lorna, RECE','Lorna has been an ECE since 1989 and \nwith Arbour Glen since 2015.','Seeing the smiles on a child\'s face after they accomplish something is just priceless! I love documenting for the children\'s portfolios as well - a handprint, a footprint or a photo or a story to capture that moment in time.',4,'','green','/img/avatars/avatar-lorna.png'),(19,'Tamie-Lynn, ECE Apprentice','Tamie-Lynn has been with Arbour Glen since 2010.','It’s always wonderful to learn how each child experiences things – how they create, the way they interact and how they see things. It’s amazing to help them discover and develop through these unique perspectives.',4,'','blue','/img/avatars/avatar-tamie-lynn.png');
/*!40000 ALTER TABLE `tblEmployees` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblFAQ`
--

DROP TABLE IF EXISTS `tblFAQ`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tblFAQ` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Question` varchar(120) DEFAULT NULL,
  `Answer` varchar(550) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblFAQ`
--

LOCK TABLES `tblFAQ` WRITE;
/*!40000 ALTER TABLE `tblFAQ` DISABLE KEYS */;
INSERT INTO `tblFAQ` VALUES (1,'How do I know if youll have a spot available for my child?','Generally, within 4-6 months before you are looking for care for your little one, we will have an idea of availability. When we believe there is a good chance well have a spot, well give you a call to come in for a tour.'),(2,'How will I know where I am on the wait list?','Give us a call at any time, and we\'d be happy to let you know where you are on our wait list. Keep in mind however, that if there are many families ahead of you, its not necessarily a reason to worry; often people put their names on several lists just to get the process started, then later they move or decide not to go back to work, etc. So never become discouraged.'),(3,'When can I come in for a tour?','We would love to have you in for a tour! Seeing Arbour Glen, and as importantly, how you feel as you walk through Arbour Glen, are criticalto knowing whether we are the right centre for your child. Typically, we have families in for tours once their name comes closer to the top of the waiting list, to not disrupt our programs and the children already in our care. Please call, and well either book a time for you to come or let you know when is best to call us back.'),(4,'Does Arbour Glen accept children on Child Care Fee Subsidies?','Yes Arbour Glen, accepts all children on child care fee, as does all centres in London and Middlesex. To apply for subsidy please go to <a href=\"https://occmsbilling.london.ca/olaf/\">Online Child Care Fee Subsidy Application for the City of London</a>'),(5,'Do you have part-time spots available?','Yes, we offer both full-time and part-time spots in all age groups, depending on availability. Its best to speak to us directly, so please call us for further information.'),(6,'What time can I drop off and pick up my child?','Arbour Glen is open from 7:30 to 5:30 Monday through Friday. We will discuss your particular needs with you when you come in for your tour, and generally we are able to accommodate.'),(7,'If I have one child at Arbour Glen, are any future siblings given priority?','As an existing family, you will be given priority on our waiting list. Keep in mind as well, that to be considered an existing family, you must have your other child at Arbour Glen at least part-time.');
/*!40000 ALTER TABLE `tblFAQ` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblMenu`
--

DROP TABLE IF EXISTS `tblMenu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tblMenu` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(150) DEFAULT NULL,
  `TOD` int(11) DEFAULT NULL,
  `DOW` int(11) DEFAULT NULL,
  `Week` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=91 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblMenu`
--

LOCK TABLES `tblMenu` WRITE;
/*!40000 ALTER TABLE `tblMenu` DISABLE KEYS */;
INSERT INTO `tblMenu` VALUES (1,'Rice Chex & Mangoes \n Water \n (Inf) Milk',1,1,1),(2,'Homemade Minestrone Soup (Beans) \n WW Soda Crackers \n Pears \n Milk',2,1,1),(3,'Greek Vanilla Yogurt with Raspberries & Hemp Hearts \n Water',3,1,1),(4,'Bananas \n Milk',1,2,1),(5,'Coconut Chicken Curry \n Jasmine Rice \n WW Dinner Rolls \n Cantaloupe \n Milk',2,2,1),(6,'Edamame Spread on SnackBread \n Crackers \n Water',3,2,1),(7,'Sliced Apples \n WW Soda Crackers & Wow Butter \n Water \n (Inf) Milk',1,3,1),(8,'Vegetarian Shepherd\'s Pie (Veggie Ground) \n Prairie Bran Bread \n Mandarins/Clementines \n (Inf) Papaya \n Milk',2,3,1),(9,'Whole Grain Cinnamon \n Raisin Loaf & Pineapple Chunks \n Milk',3,3,1),(10,'Graham Wafers with Homemade Pumpkin Dip \n Water \n (Inf) Milk',1,4,1),(11,'Fiesta Casserole (Lean Ground Beef) \n Homemade Cornbread \n Peaches \n Milk',2,4,1),(12,'Oatmeal Cookies & Blackberries \n Milk',3,4,1),(13,'Cheddar Cheese & Sweet Potato Crackers \n Chilled Edamame \n Water \n (Inf) Milk',1,5,1),(14,'Tuna \n Veggie Lasagne \n 12 Grain Bread \n Sliced Apples \n Milk',2,5,1),(15,'Fruit Salad & Breton Crackers \n Water',3,5,1),(16,'Multi-Grain Cheerios & Pineapple \n Water \n (Inf) Milk',1,1,2),(17,'Old Fashioned Bean-Barley Soup \n WW Crackers \n Pears \n Milk',2,1,2),(18,'Homemade Pumpkin Yogurt & Arrowroot Cookies \n Water',3,1,2),(19,'Tofutti on WW Soda Crackers & Sliced Cucumbers \n Water \n (Inf) Milk',1,2,2),(20,'Chicken Mushroom Tetrazzini with Peas \n WW Bread \n Mandarins/Clementine \n (Inf) Papaya \n Milk',2,2,2),(21,'Sliced Apples & Cheddar \n Water',3,2,2),(22,'Bananas \n Milk',1,3,2),(23,'Asian Stir Fry with Crispy Tofu \n Brown Rice \n Ancient Grains Bread \n Mangoes \n Milk',2,3,2),(24,'Spinach Dip & Multigrain Thin Buns \n Water',3,3,2),(25,'Apple Sauce & Graham Wafers \n Water \n (Inf) Milk',1,4,2),(26,'Jamaican Beef Stew With Mashed Potatoes (Lean Ground Beef) \n WW Dinner Rolls \n Sliced Honeydew \n Milk',2,4,2),(27,'Homemade Sweet Potato Muffins \n Milk',3,4,2),(28,'Kiwis & Whole Grain Crisp & Thin Crackers \n Water \n (Inf) Milk',1,5,2),(29,'Breaded Fish Fillets with Quinoa Rice \n Sweet Peas & Corn \n Rye Bread \n Peaches \n Milk',2,5,2),(30,'Fruit Salad \n Milk',3,5,2),(31,'Life Multi-grain Cereal & Papaya \n Water \n (Inf) Milk',1,1,3),(32,'Root-Harvest Soup & Cheddar Chunks \n WW Soda Crackers \n Peaches \n Milk',2,1,3),(33,'Greek Vanilla Yogurt with Raspberries & Hemp Hearts \n Water',3,1,3),(34,'Bananas \n Milk',1,2,3),(35,'Homemade Chicken Quinoa Stew \n Prairie Bran Bread \n Cantaloupe Wedges \n Milk',2,2,3),(36,'Mango Salsa on Whole Grain Snackbread Crackers \n Water',3,2,3),(37,'Applesauce & Arrowroot Cookies \n Water  (Inf) Milk',1,3,3),(38,'Lentil/Sweet-Potato Dhal with Brown Rice \n Naan Bread \n Sliced Kiwis \n Milk',2,3,3),(39,'Whole Grain Raisin Loaf & Pineapple Chunks \n Milk',3,3,3),(40,'Cheddar & Whole Grain Crisp & Thin Crackers with Pears \n Water \n (Inf) Milk',1,4,3),(41,'Spaghetti & Meat Sauce (Lean Ground Beef) with Steamed Broccoli \n Sunflower-Flax Bread \n Mandarins/Clementines \n Milk',2,4,3),(42,'Homemade \'Good Grains\' Carrot Cookies \n Milk',3,4,3),(43,'Homemade Spinach Dip & WW Soda Crackers \n Water \n (Inf) Milk',1,5,3),(44,'Baked Lemon Tilapia with Curry Rice \n Green Beans & Steamed Carrots \n 12 Grain Bread \n Apple Slices \n Milk',2,5,3),(45,'Fruit Salad & Breton Crackers \n Water',3,5,3),(46,'Rice Chex & Mangoes \n Water \n (Inf) Milk',1,1,4),(47,'Hearty Pumpkin-Quinoa Soup \n WW Soda Crackers \n Peaches \n Milk',2,1,4),(48,'Greek Vanilla Yogurt with Blueberries & Hemp Hearts \n Water',3,1,4),(49,'Carrot Muffins \n Milk',1,2,4),(50,'Chicken Frittata & Diced Carrots \n Greek Pita Bread \n Mandarins/Clementines \n (Inf) Papaya \n Milk',2,2,4),(51,'Homemade Green Pea Hummus & Naan Bread \n Water',3,2,4),(52,'Bananas with Wow Butter \n Milk',1,3,4),(53,'Vegetarian Pad Thai (Tofu) & Broccoli \n Ancient Grains Bread \n Cantaloupe Wedges \n Milk',2,3,4),(54,'Apple Slices & Cheddar \n Breton Crackers \n Water',3,3,4),(55,'Sliced Honeydew & Whole Grain Crisp & Thin Crackers \n Water \n (I) Milk',1,4,4),(56,'Classic Sloppy Joes (Lean Ground Beef) & Green Beans \n WW Hamburg Buns \n Applesauce \n Milk',2,4,4),(57,'Fresh Baked Earth Bars \n Milk',3,4,4),(58,'Mango Salso & WW Soda Crackers \n Water \n (I) Milk',1,5,4),(59,'Breaded Fish Fillet & Boiled Buttered-Potatoes \n Sweet Peas & Corn \n Prairie Bran Bread \n Pineapple Chunks \n Milk',2,5,4),(60,'Fruit Salad \n Milk',3,5,4),(61,'Multi-Grain Cheerios & Pineapple \n Water \n (Inf) Milk',1,1,5),(62,'Orzo \n Vegetable Soup (Veggie Ground) \n WW Soda Crackers \n Peaches \n Milk',2,1,5),(63,'Greek Vanilla Yogurt with Raspberries & Hemp Hearts \n Water',3,1,5),(64,'Kiwis & Whole Grain Crisp & Thin Crackers \n Water \n (Inf) Milk',1,2,5),(65,'Hearty Chicken Chili (Lean Ground Chicken) \n WW Dinner Rolls \n Cantaloupe \n Milk',2,2,5),(66,'Homemade Cherry Chia Spread on Whole Grain Thin Bread Buns \n Milk',3,2,5),(67,'Green Pea Hummus & WW Soda Crackers \n Water \n (Inf) Milk',1,3,5),(68,'Cheesy Spinach Pizza \n (PS) Baby Carrots & Yellow Peppers \n (T) Steamed Carrots & Yellow Peppers \n (Inf) Steamed Carrots \n Bananas \n Milk',2,3,5),(69,'Cheddar & Cucumbers \n WW Crackers \n Water',3,3,5),(70,'Wow Butter on Graham Wafers & Pineapple \n Water \n (Inf) Milk',1,4,5),(71,'Korean Rice Bowls (Lean Ground Beef) \n Peas & Diced Carrots \n Sunflower-Flax Bread \n Mandarins/Clementines \n Milk',2,4,5),(72,'Granny Smith \n Apple Crisp \n Milk',3,4,5),(73,'Applesauce & Arrowroot Cookies \n Water \n (Inf) Milk',1,5,5),(74,'Tuna-Potato Bake & Steamed Broccoli \n 12 Grain Bread \n Mangoes \n Milk',2,5,5),(75,'Fruit Salad \n Milk',3,5,5),(76,'Life Multigrain Cereal & Papaya \n Water \n (Inf) Milk',1,1,6),(77,'Quinoa \n Vegetable Soup \n WW Soda Crackers \n Pears \n Milk',2,1,6),(78,'Greek Yogurt with Blueberries & Hemp Hearts \n Water',3,1,6),(79,'Applesauce & Arrowroot Cookies \n Water \n (Inf) Milk',1,2,6),(80,'Chicken \n Haluski Casserole \n Rye Bread \n Bananas \n Milk',2,2,6),(81,'Edamame Spread on Naan Bread \n Milk',3,2,6),(82,'Cheddar & Cucs \n Whole Grain Crisp & Thin Crackers \n Water \n (Inf) Milk',1,3,6),(83,'Vegetarian Stir Fry with Sudani Rice (Black Beans) \n WW Dinner Rolls \n Cantaloupe Wedges \n Milk',2,3,6),(84,'Whole Grain Raisin Cinnamon Bread & Pineapple Chunks \n Water',3,3,6),(85,'Mandarins/Clementines \n (Inf) Mangoes \n Breton Crackers \n Water \n (Inf) Milk',1,4,6),(86,'Meatloaf (Lean Ground Beef) & Mashed Sweet Potato Blend \n Peas  12 Prairie Bran Bread \n Sliced Kiwis \n Milk',2,4,6),(87,'Pumpkin-Zucchini Bread \n Milk',3,4,6),(88,'Cherry Chia Spread on Graham Wafers \n Water \n (Inf) Milk',1,5,6),(89,'\'Tuna-Cado\' Melts \n Green String Beans on WW Eng. Muffins \n Sliced Carrots \n Pineapple Rings \n Milk',2,5,6),(90,'Fruit Salad \n Milk',3,5,6);
/*!40000 ALTER TABLE `tblMenu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblTestimony`
--

DROP TABLE IF EXISTS `tblTestimony`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tblTestimony` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Author` varchar(120) DEFAULT NULL,
  `Text` varchar(900) DEFAULT NULL,
  `pageId` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblTestimony`
--

LOCK TABLES `tblTestimony` WRITE;
/*!40000 ALTER TABLE `tblTestimony` DISABLE KEYS */;
INSERT INTO `tblTestimony` VALUES (1,'Alina M.','When I picked up my little guy on one of his first days with Arbour Glen, Chris was singing him the ABC song, while he sat contentedly in her arms. She said (happily!) that it was her tenth time singing it  she said she discovered in that moment, it was what gave him comfort. It almost brought me to tears: knowing they will do anything to give him what he needed in that moment of sadness. You really feel like your baby is the centre of their world  what more can a mom ask for?',2),(2,'Carole DeBoer','BEST DAYCARE, BEST STAFF ever! Our family association (CHILDREN AND GRANDCHILDREN) goes back 40+ years!',1),(3,'Stacey Rickman','Every aspect of the Arbour Glen experience is amazing. The Educators are engaged, the learning and play experiences are exceptional and the facility is child-centred and well maintained. Expect your child to frequently tell you that food just tastes better at Arbour Glen  the menus are delicious! Arbour Glen prepared our children well for their entry into Kindergarten. We recommend AG to all our friends and acquaintances who are looking for the best daycare and preschool experience in London!',1),(4,'Anna Vujicic','Arbour Glen is the place to have your child IF you: want them to develop social skills; want them to learn how to positively interact with others; want your child to come home and blow you away every week with everything they have learned; need help/advice with potty training, want someone to treat your child like their OWN; want a center that has employees who are dedicated in ensuring that you, as a parent, are happy and healthy; want a care center that you can trust will always do right by your family and go above and beyond to accommodate parents busy schedules.\nI literally drive across the city and back 2x a day, 5 days a week, passing several daycares closer to home so that my daughter can attend Arbour Glen, like my son did over 4 years ago. HIGHLY RECOMMENDED!',1),(5,'Chantalle & Stefan Czerwinski','Amazing place!!! The whole staff, all the ECEs, admin. cook, absolutely everyone is so warm and knowledgeable. I\'m so grateful that they have been a part of my daughter\'s life the past 3 years; breaks my heart that she\'s starting JK his fall and we won\'t see them anymore. I\'m forever grateful to all of you',1),(6,'John Siambanopoulos','Arbour Glen is a parents dream. When we were able to get a spot, we were overjoyed. A clean and positive environment staffed with the most caring professionals I have ever met and managed by impeccably wonderful people. Our daughter is in one of the toddler rooms, yet every single person in the centre knows her name, and I know in my heart that everyone one who works at Arbour Glen truly cares about every infant, toddler and pre-schooler. All parents should feel reassured and worry-free as we do.',3),(7,'Vince V.','Love this place, all the ECEs have a real passion and dedication that doesn\'t stop. Currently we have a preschooler and an infant enrolled',4),(8,'Sarah M.','Our preschooler has been at Arbour Glen since she was an infant and she has thrived here. The staff are compassionate, empathetic and extremely knowledgeable. The Preschool room has been especially amazing to further expand her skills. Shes become so confident and independent. They get to know each individual child as their own little person. I cant recommend them enough.',4);
/*!40000 ALTER TABLE `tblTestimony` ENABLE KEYS */;
UNLOCK TABLES;

/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-01-21 14:15:57
