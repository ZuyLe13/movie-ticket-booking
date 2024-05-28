
/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
DROP TABLE IF EXISTS `apply_discounts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `apply_discounts` (
  `dis_id` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bi_id` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`dis_id`,`bi_id`),
  KEY `apply_discounts_bi_id_foreign` (`bi_id`),
  CONSTRAINT `apply_discounts_bi_id_foreign` FOREIGN KEY (`bi_id`) REFERENCES `bills` (`bi_id`) ON DELETE CASCADE,
  CONSTRAINT `apply_discounts_dis_id_foreign` FOREIGN KEY (`dis_id`) REFERENCES `discounts` (`dis_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `apply_discounts` WRITE;
/*!40000 ALTER TABLE `apply_discounts` DISABLE KEYS */;
/*!40000 ALTER TABLE `apply_discounts` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `bills`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `bills` (
  `bi_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bi_date` datetime NOT NULL,
  `tk_count` int NOT NULL,
  `bi_value` decimal(15,2) unsigned NOT NULL,
  KEY `bills_email_foreign` (`email`),
  KEY `bills_bi_id_index` (`bi_id`),
  CONSTRAINT `bills_email_foreign` FOREIGN KEY (`email`) REFERENCES `users` (`email`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `bills` WRITE;
/*!40000 ALTER TABLE `bills` DISABLE KEYS */;
INSERT INTO `bills` VALUES ('BILL65885bfb2d81c','thanhtran.8676@gmail.com','2023-12-24 16:27:39',1,165000.00),('BILL65885dc27dace','thanhtran.8676@gmail.com','2023-12-24 16:35:14',3,225000.00),('BILL658867dd72034','thanhtran.8676@gmail.com','2023-12-24 17:18:21',1,75000.00),('BILL658867f3d0232','thanhtran.8676@gmail.com','2023-12-24 17:18:43',1,75000.00),('BILL65886855b3f4b','thanhtran.8676@gmail.com','2023-12-24 17:20:21',1,75000.00),('BILL658869723332f','thanhtran.8676@gmail.com','2023-12-24 17:25:06',1,75000.00),('BILL65886fa631ba8','thanhtran.8676@gmail.com','2023-12-24 17:51:34',1,75000.00),('BILL658870e4423b6','thanhtran.8676@gmail.com','2023-12-24 17:56:52',1,75000.00),('BILL658870fb335d7','thanhtran.8676@gmail.com','2023-12-24 17:57:15',1,75000.00),('BILL6588711f18214','thanhtran.8676@gmail.com','2023-12-24 17:57:51',1,112500.00),('BILL65887414712a0','thanhtran.8676@gmail.com','2023-12-24 18:10:28',1,75000.00),('BILL658878bb016e1','thanhtran.8676@gmail.com','2023-12-24 18:30:19',1,112500.00),('BILL6588ee3b9b202','thanhtran.8676@gmail.com','2023-12-25 02:51:39',1,165000.00),('BILL6588f2c03be1c','thanhtran.8676@gmail.com','2023-12-25 03:10:56',1,75000.00),('BILL6588f332ae443','thanhtran.8676@gmail.com','2023-12-25 03:12:50',1,165000.00),('BILL6588fa00d31aa','thanhtran.8676@gmail.com','2023-12-25 03:41:52',2,330000.00),('BILL65893cb2932c0','21521113@gm.uit.edu.vn','2023-12-25 08:26:26',4,337500.00),('BILL65897f1d5f3d4','thanhtran.8676@gmail.com','2023-12-25 13:09:49',2,225000.00),('BILL658a6ecac5783','thanhtran.8676@gmail.com','2023-12-26 06:12:26',1,165000.00),('BI101','thanhtran.8676@gmail.com','2023-01-18 07:19:50',300,21000000.00),('BI101','thanhtran.8676@gmail.com','2023-01-18 07:19:50',300,21000000.00),('BI102','thanhtran.8676@gmail.com','2023-02-18 07:19:50',400,28000000.00),('BI104','thanhtran.8676@gmail.com','2023-04-18 07:19:50',300,21000000.00),('BI105','thanhtran.8676@gmail.com','2023-05-18 07:19:50',350,24500000.00),('BI106','thanhtran.8676@gmail.com','2023-06-18 07:19:50',300,21000000.00),('BI107','thanhtran.8676@gmail.com','2023-07-18 07:19:50',400,28000000.00),('BI108','thanhtran.8676@gmail.com','2023-08-18 07:19:50',300,21000000.00),('BI109','thanhtran.8676@gmail.com','2023-09-18 07:19:50',200,14000000.00),('BI110','thanhtran.8676@gmail.com','2023-10-18 07:19:50',250,17500000.00),('BI111','thanhtran.8676@gmail.com','2023-11-18 07:19:50',300,21000000.00),('BI112','thanhtran.8676@gmail.com','2023-12-18 07:19:50',350,24500000.00),('BI113','thanhtran.8676@gmail.com','2019-01-18 07:19:50',4200,294000000.00),('BI114','thanhtran.8676@gmail.com','2020-01-18 07:19:50',3600,252000000.00),('BI115','thanhtran.8676@gmail.com','2021-01-18 07:19:50',100,7000000.00),('BI116','thanhtran.8676@gmail.com','2022-01-18 07:19:50',1500,105000000.00),('BILL658a7c89d4608','thanhtran.8676@gmail.com','2023-12-26 07:11:05',1,112500.00),('BILL658a7cd6630d9','thanhtran.8676@gmail.com','2023-12-26 07:12:22',1,75000.00),('BILL658a7dd69b153','thanhtran.8676@gmail.com','2023-12-26 07:16:38',1,112500.00),('BILL658a9a8f3466f','thanhtran.8676@gmail.com','2023-12-26 09:19:11',2,330000.00),('BILL658aa3e0f3141','21522101@gm.uit.edu.vn','2023-12-26 09:58:57',3,270000.00);
/*!40000 ALTER TABLE `bills` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `choose_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `choose_types` (
  `type_id` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mv_id` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`type_id`,`mv_id`),
  KEY `choose_types_mv_id_foreign` (`mv_id`),
  CONSTRAINT `choose_types_mv_id_foreign` FOREIGN KEY (`mv_id`) REFERENCES `movies` (`mv_id`) ON DELETE CASCADE,
  CONSTRAINT `choose_types_type_id_foreign` FOREIGN KEY (`type_id`) REFERENCES `types` (`type_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `choose_types` WRITE;
/*!40000 ALTER TABLE `choose_types` DISABLE KEYS */;
INSERT INTO `choose_types` VALUES ('TL01','MV01'),('TL002','MV03'),('TL01','MV03'),('TL002','MV04'),('TL002','MV05'),('TL002','MV06'),('TL002','MV07'),('TL01','MV07'),('TL003','MV08'),('TL002','MV09'),('TL01','MV09'),('TL003','MV10'),('TL01','MV10'),('TL010','MV10');
/*!40000 ALTER TABLE `choose_types` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `discounts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `discounts` (
  `dis_id` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dis_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dis_start` date NOT NULL,
  `dis_end` date NOT NULL,
  `dis_percent` double(8,2) NOT NULL,
  PRIMARY KEY (`dis_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `discounts` WRITE;
/*!40000 ALTER TABLE `discounts` DISABLE KEYS */;
/*!40000 ALTER TABLE `discounts` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_reset_tokens_table',1),(3,'2014_10_12_100000_create_password_resets_table',1),(4,'2019_08_19_000000_create_failed_jobs_table',1),(5,'2019_12_14_000001_create_personal_access_tokens_table',1),(6,'2023_10_27_141548_create_types_table',1),(7,'2023_10_27_142133_create_movies_table',1),(8,'2023_10_27_142155_create_choose_types_table',1),(9,'2023_10_28_231245_create_rooms_table',1),(10,'2023_10_29_000030_create_seats_table',1),(11,'2023_10_29_014536_create_slots_table',1),(12,'2023_10_29_093151_create_discounts_table',1),(13,'2023_10_29_100658_create_bills_table',1),(14,'2023_10_29_113849_create_tickets_table',1),(15,'2023_10_29_115406_create_apply_discounts_table',1),(16,'2023_10_29_132625_create_years_table',1),(17,'2023_10_29_132630_create_months_table',1),(18,'2023_12_05_050838_add_more_fields_to_users',1),(19,'2023_12_05_051246_add_more_fields_to_users2',1),(20,'2023_12_07_132153_add_2more_users',1),(21,'2023_12_20_153641_register_as_admin',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `months`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `months` (
  `mre_id` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mre_month` int NOT NULL,
  `mre_yre_id` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mre_count` int NOT NULL,
  `mre_value` decimal(15,2) unsigned NOT NULL,
  PRIMARY KEY (`mre_id`,`mre_yre_id`),
  KEY `months_mre_yre_id_foreign` (`mre_yre_id`),
  CONSTRAINT `months_mre_yre_id_foreign` FOREIGN KEY (`mre_yre_id`) REFERENCES `years` (`yre_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `months` WRITE;
/*!40000 ALTER TABLE `months` DISABLE KEYS */;
INSERT INTO `months` VALUES ('2019_01',1,'2019',4200,294000000.00),('2020_01',1,'2020',3600,252000000.00),('2021_01',1,'2021',100,7000000.00),('2022_01',1,'2022',1500,105000000.00),('2023_01',1,'2023',600,42000000.00),('2023_02',2,'2023',400,28000000.00),('2023_04',4,'2023',300,21000000.00),('2023_05',5,'2023',350,24500000.00),('2023_06',6,'2023',300,21000000.00),('2023_07',7,'2023',400,28000000.00),('2023_08',8,'2023',300,21000000.00),('2023_09',9,'2023',200,14000000.00),('2023_10',10,'2023',250,17500000.00),('2023_11',11,'2023',300,21000000.00),('2023_12',12,'2023',379,27477500.00);
/*!40000 ALTER TABLE `months` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `movies`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `movies` (
  `mv_id` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mv_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mv_start` date NOT NULL,
  `mv_end` date NOT NULL,
  `mv_duration` time NOT NULL,
  `mv_restrict` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mv_cap` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mv_link_poster` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mv_link_trailer` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mv_detail` varchar(7000) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`mv_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `movies` WRITE;
/*!40000 ALTER TABLE `movies` DISABLE KEYS */;
INSERT INTO `movies` VALUES ('MV01','Avatar - Dòng chảy của nước','2023-12-24','2024-01-24','02:45:30','13+','Có phụ đề','/storage/uploads/poster/2023/12/25/OIP.jpg','/storage/uploads/trailer/2023/12/24/Aquaman và Vương Quốc Thất Lạc _ Trailer.mp4','<p>phim</p>'),('MV03','Aquaman và Vương Quốc Thất Lạc','2023-12-25','2024-01-25','02:45:12','15+','Có phụ đề','/storage/uploads/poster/2023/12/25/aquaman2.jpg','/storage/uploads/trailer/2023/12/25/Aquaman - Official Trailer 1.mp4','<p>phim aquaman</p>'),('MV04','ENCANTO: THE MAGIC LAND','2023-12-25','2024-01-25','02:30:14','13+','Lồng tiếng','/storage/uploads/poster/2023/12/25/ect.jpg','/storage/uploads/trailer/2023/12/25/Encanto_ Vùng Đất Thần Kỳ _ Official Trailer.mp4','<p><strong>Encanto: Vùng Đất Thần Kỳ</strong> theo chân cô gái Mirabel - thành viên duy nhất trong một gia đình phép thuật không sở hữu bất kỳ khả năng đặc biệt nào. So với những người họ hàng biết biến hình, có siêu sức mạnh, nói chuyện với động vật, kiểm soát cây cỏ hoa lá hẹ, nói cô gái Mirabel lớn lên cùng cảm giác lạc lỏng là nói giảm nói tránh. Thế nhưng, khi biết gia đình và vùng đất phép thuật lâm nguy, cô là người duy nhất có thể cứu tất cả.</p>'),('MV05','WONKA','2024-02-19','2024-01-25','02:05:00','Mọi lứa','Có phụ đề','/storage/uploads/poster/2023/12/25/WONKA.jpg','/storage/uploads/trailer/2023/12/25/WONKA _ Official Trailer.mp4','<p>Dựa trên nhân vật từ quyến sách gối đầu giường của các em nhỏ trên toàn thế giới \"Charlie và Nhà Máy Sôcôla\" và phiên bản phim điện ảnh cùng tên vào năm 2005, WONKA kể câu chuyện kỳ diệu về hành trình của nhà phát minh, ảo thuật gia và nhà sản xuất sôcôla vĩ đại nhất thế giới trở thành WILLY WONKA đáng yêu mà chúng ta biết ngày nay. Từ đạo diễn loạt phim Paddington và nhà sản xuất loạt phim chuyển thể đình đám Harry Potter, WONKA hứa hẹn sẽ là một bộ phim đầy vui nhộn và màu sắc cho khán giả dịp Lễ Giáng Sinh năm nay.</p>'),('MV06','THE WISH','2023-12-27','2024-12-26','02:30:00','Mọi lứa','Lồng tiếng','/storage/uploads/poster/2023/12/26/wish.jpg','/storage/uploads/trailer/2023/12/26/Wish _ Official Trailer.mp4','<p>“Wish” là bộ phim hoạt hình kỷ niệm 100 năm thành lập của Walt Disney Studios (sự kiện toàn cầu D100). \"Điều Ước\" lấy bối cảnh tại một vương quốc diệu kỳ tên Rosas. Ở đây, Asha - một cô gái thông minh và mơ mộng đã ước một điều ước quá sức mạnh mẽ, đến nỗi một thế lực ngoài vũ trụ với sức mạnh vô hạn tên Star đã đáp lại cô. Asha và Star cùng nhau đối mặt với người cầm quyền của Rosas - quốc vương Magnifico, để cứu lấy mọi người và chứng minh rằng ý chí gan dạ của con người kết hợp với phép màu của những vì sao sẽ giúp những điều kỳ diệu xảy ra.</p>'),('MV07','Harry Potter 1: Harry Potter And The Sorcerer\'s Stone','2023-12-27','2024-02-27','00:00:00','13+','Có phụ đề','/storage/uploads/poster/2023/12/26/HP1.jpg','/storage/uploads/trailer/2023/12/26/HARRY POTTER AND THE PHILOSOPHER\'S STONE Trailer (2001).mp4','<p>Harry Potter Và Hòn Đá Phù Thủy - Harry Potter 1: Harry Potter And The Sorcerer\'s Stone Vietsub - Thuyết Minh</p><p>Harry Potter và Hòn Đá Phù Thủy là bộ phim đầu tiên trong series phim “Harry Potter” được xây dựng dựa trên tiểu thuyết của nhà văn J.K.Rowling. Nhân vật chính của phim, Harry Potter - một cậu bé 11 tuổi sau khi mồ côi cha mẹ đã bị gửi đến nhà dì dượng của mình, gia đình Dursley. Tuy nhiên, cậu bé bị ngược đãi và không hề biết về thân phận thực sự của mình. Vào sinh nhật thứ 11 của Harry, một người lai khổng lồ là Rubeus Hagrid đã đến tìm cậu bé để đưa cậu về trường Pháp Thuật Hogwarts. Lúc này, Harry mới biết được mình là phù thủy và một phần câu chuyện về cha mẹ mình, những người đã bị Voldemort giết hại. Cùng với trí thông minh và lòng dũng cảm, cậu bé đã cùng những người bạn của mình khám phá những điều bí mật nguy hiểm về thế giới của phép thuật...</p>'),('MV08','Kẻ ăn hồn','2023-12-27','2024-01-12','02:30:00','18+','Không phụ đề','/storage/uploads/poster/2023/12/26/kan.jpg','/storage/uploads/trailer/2023/12/26/KẺ ĂN HỒN - OFFICIAL TRAILER _ DỰ KIẾN KHỞI CHIẾU_ 15.12.2023.mp4',''),('MV09','Harry Potter 3: Harry Potter And The Prisoner Of Azkaban','2023-12-26','2024-02-26','02:45:00','13+','Lồng tiếng','/storage/uploads/poster/2023/12/26/hp3.jpg','/storage/uploads/trailer/2023/12/26/Harry Potter and the Prisoner of Azkaban - Warner Bros. UK.mp4','<p>Harry Potter Và Tên Tù Nhân Ngục Azkaban - Harry Potter 3: Harry Potter And The Prisoner Of Azkaban Vietsub - Thuyết Minh</p><p>Harry Potter may mắn sống sót đến tuổi 13, sau nhiều cuộc tấn công của Chúa tể hắc ám. Nhưng hy vọng có một học kỳ yên ổn với Quidditch của cậu đã tiêu tan thành mây khói khi một kẻ điên cuồng giết người hàng loạt vừa thoát khỏi nhà tù Azkaban, với sự lùng sục của những cai tù là giám ngục.Dường như trường Hogwarts là nơi an toàn nhất cho Harry lúc này. Nhưng có phải là sự trùng hợp khi cậu luôn cảm giác có ai đang quan sát mình từ bóng đêm, và những điềm báo của giáo sư Trelawney liệu có chính xác?</p>'),('MV10','ĐỈNH CHIAK: ÁM ẢNH TỬ THẦN','2023-12-26','2024-02-26','02:30:00','18+','Có phụ đề','/storage/uploads/poster/2023/12/26/chiak.jpg','/storage/uploads/trailer/2023/12/26/ĐỈNH CHIAK_ ÁM ẢNH TỬ THẦN trailer - KC_ 15.12.2023.mp4','<p>Một nhóm bạn 5 thành viên thuộc câu lạc bộ đạp xe leo núi, cùng nhau du lịch ở núi Chiak, Hàn Quốc. Đây là nơi đã xảy ra nhiều vụ án giết người bí ẩn với những vết chặt xác thành nhiều mảnh vô cùng tàn nhẫn. Trong quãng thời gian tận hưởng tự do trên núi, những sự kiện kỳ lạ bắt đầu xảy ra với cả nhóm và có thứ gì đó đang truy đuổi họ. Trò chơi sinh tồn lúc này chính thức bắt đầu.<br>&nbsp;</p>');
/*!40000 ALTER TABLE `movies` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `password_reset_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `password_reset_tokens` WRITE;
/*!40000 ALTER TABLE `password_reset_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_reset_tokens` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `rooms`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `rooms` (
  `r_id` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `r_capacity` int NOT NULL,
  PRIMARY KEY (`r_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `rooms` WRITE;
/*!40000 ALTER TABLE `rooms` DISABLE KEYS */;
INSERT INTO `rooms` VALUES ('R001',78),('R002',78),('R003',78),('R004',78),('R005',78),('R006',78),('R007',78);
/*!40000 ALTER TABLE `rooms` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `seats`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `seats` (
  `st_id` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `r_id` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `st_type` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`st_id`,`r_id`),
  KEY `seats_r_id_foreign` (`r_id`),
  CONSTRAINT `seats_r_id_foreign` FOREIGN KEY (`r_id`) REFERENCES `rooms` (`r_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `seats` WRITE;
/*!40000 ALTER TABLE `seats` DISABLE KEYS */;
INSERT INTO `seats` VALUES ('A1','R001','standard'),('A1','R002','standard'),('A1','R003','standard'),('A1','R004','standard'),('A1','R005','standard'),('A1','R006','standard'),('A1','R007','standard'),('A10','R001','standard'),('A10','R002','standard'),('A10','R003','standard'),('A10','R004','standard'),('A10','R005','standard'),('A10','R006','standard'),('A10','R007','standard'),('A11','R001','standard'),('A11','R002','standard'),('A11','R003','standard'),('A11','R004','standard'),('A11','R005','standard'),('A11','R006','standard'),('A11','R007','standard'),('A12','R001','standard'),('A12','R002','standard'),('A12','R003','standard'),('A12','R004','standard'),('A12','R005','standard'),('A12','R006','standard'),('A12','R007','standard'),('A2','R001','standard'),('A2','R002','standard'),('A2','R003','standard'),('A2','R004','standard'),('A2','R005','standard'),('A2','R006','standard'),('A2','R007','standard'),('A3','R001','standard'),('A3','R002','standard'),('A3','R003','standard'),('A3','R004','standard'),('A3','R005','standard'),('A3','R006','standard'),('A3','R007','standard'),('A4','R001','standard'),('A4','R002','standard'),('A4','R003','standard'),('A4','R004','standard'),('A4','R005','standard'),('A4','R006','standard'),('A4','R007','standard'),('A5','R001','standard'),('A5','R002','standard'),('A5','R003','standard'),('A5','R004','standard'),('A5','R005','standard'),('A5','R006','standard'),('A5','R007','standard'),('A6','R001','standard'),('A6','R002','standard'),('A6','R003','standard'),('A6','R004','standard'),('A6','R005','standard'),('A6','R006','standard'),('A6','R007','standard'),('A7','R001','standard'),('A7','R002','standard'),('A7','R003','standard'),('A7','R004','standard'),('A7','R005','standard'),('A7','R006','standard'),('A7','R007','standard'),('A8','R001','standard'),('A8','R002','standard'),('A8','R003','standard'),('A8','R004','standard'),('A8','R005','standard'),('A8','R006','standard'),('A8','R007','standard'),('A9','R001','standard'),('A9','R002','standard'),('A9','R003','standard'),('A9','R004','standard'),('A9','R005','standard'),('A9','R006','standard'),('A9','R007','standard'),('B1','R001','standard'),('B1','R002','standard'),('B1','R003','standard'),('B1','R004','standard'),('B1','R005','standard'),('B1','R006','standard'),('B1','R007','standard'),('B10','R001','standard'),('B10','R002','standard'),('B10','R003','standard'),('B10','R004','standard'),('B10','R005','standard'),('B10','R006','standard'),('B10','R007','standard'),('B11','R001','standard'),('B11','R002','standard'),('B11','R003','standard'),('B11','R004','standard'),('B11','R005','standard'),('B11','R006','standard'),('B11','R007','standard'),('B12','R001','standard'),('B12','R002','standard'),('B12','R003','standard'),('B12','R004','standard'),('B12','R005','standard'),('B12','R006','standard'),('B12','R007','standard'),('B2','R001','standard'),('B2','R002','standard'),('B2','R003','standard'),('B2','R004','standard'),('B2','R005','standard'),('B2','R006','standard'),('B2','R007','standard'),('B3','R001','standard'),('B3','R002','standard'),('B3','R003','standard'),('B3','R004','standard'),('B3','R005','standard'),('B3','R006','standard'),('B3','R007','standard'),('B4','R001','standard'),('B4','R002','standard'),('B4','R003','standard'),('B4','R004','standard'),('B4','R005','standard'),('B4','R006','standard'),('B4','R007','standard'),('B5','R001','standard'),('B5','R002','standard'),('B5','R003','standard'),('B5','R004','standard'),('B5','R005','standard'),('B5','R006','standard'),('B5','R007','standard'),('B6','R001','standard'),('B6','R002','standard'),('B6','R003','standard'),('B6','R004','standard'),('B6','R005','standard'),('B6','R006','standard'),('B6','R007','standard'),('B7','R001','standard'),('B7','R002','standard'),('B7','R003','standard'),('B7','R004','standard'),('B7','R005','standard'),('B7','R006','standard'),('B7','R007','standard'),('B8','R001','standard'),('B8','R002','standard'),('B8','R003','standard'),('B8','R004','standard'),('B8','R005','standard'),('B8','R006','standard'),('B8','R007','standard'),('B9','R001','standard'),('B9','R002','standard'),('B9','R003','standard'),('B9','R004','standard'),('B9','R005','standard'),('B9','R006','standard'),('B9','R007','standard'),('C1','R001','standard'),('C1','R002','standard'),('C1','R003','standard'),('C1','R004','standard'),('C1','R005','standard'),('C1','R006','standard'),('C1','R007','standard'),('C10','R001','standard'),('C10','R002','standard'),('C10','R003','standard'),('C10','R004','standard'),('C10','R005','standard'),('C10','R006','standard'),('C10','R007','standard'),('C11','R001','standard'),('C11','R002','standard'),('C11','R003','standard'),('C11','R004','standard'),('C11','R005','standard'),('C11','R006','standard'),('C11','R007','standard'),('C12','R001','standard'),('C12','R002','standard'),('C12','R003','standard'),('C12','R004','standard'),('C12','R005','standard'),('C12','R006','standard'),('C12','R007','standard'),('C2','R001','standard'),('C2','R002','standard'),('C2','R003','standard'),('C2','R004','standard'),('C2','R005','standard'),('C2','R006','standard'),('C2','R007','standard'),('C3','R001','standard'),('C3','R002','standard'),('C3','R003','standard'),('C3','R004','standard'),('C3','R005','standard'),('C3','R006','standard'),('C3','R007','standard'),('C4','R001','standard'),('C4','R002','standard'),('C4','R003','standard'),('C4','R004','standard'),('C4','R005','standard'),('C4','R006','standard'),('C4','R007','standard'),('C5','R001','standard'),('C5','R002','standard'),('C5','R003','standard'),('C5','R004','standard'),('C5','R005','standard'),('C5','R006','standard'),('C5','R007','standard'),('C6','R001','standard'),('C6','R002','standard'),('C6','R003','standard'),('C6','R004','standard'),('C6','R005','standard'),('C6','R006','standard'),('C6','R007','standard'),('C7','R001','standard'),('C7','R002','standard'),('C7','R003','standard'),('C7','R004','standard'),('C7','R005','standard'),('C7','R006','standard'),('C7','R007','standard'),('C8','R001','standard'),('C8','R002','standard'),('C8','R003','standard'),('C8','R004','standard'),('C8','R005','standard'),('C8','R006','standard'),('C8','R007','standard'),('C9','R001','standard'),('C9','R002','standard'),('C9','R003','standard'),('C9','R004','standard'),('C9','R005','standard'),('C9','R006','standard'),('C9','R007','standard'),('D1','R001','vip'),('D1','R002','vip'),('D1','R003','vip'),('D1','R004','vip'),('D1','R005','vip'),('D1','R006','vip'),('D1','R007','vip'),('D10','R001','vip'),('D10','R002','vip'),('D10','R003','vip'),('D10','R004','vip'),('D10','R005','vip'),('D10','R006','vip'),('D10','R007','vip'),('D11','R001','vip'),('D11','R002','vip'),('D11','R003','vip'),('D11','R004','vip'),('D11','R005','vip'),('D11','R006','vip'),('D11','R007','vip'),('D12','R001','vip'),('D12','R002','vip'),('D12','R003','vip'),('D12','R004','vip'),('D12','R005','vip'),('D12','R006','vip'),('D12','R007','vip'),('D2','R001','vip'),('D2','R002','vip'),('D2','R003','vip'),('D2','R004','vip'),('D2','R005','vip'),('D2','R006','vip'),('D2','R007','vip'),('D3','R001','vip'),('D3','R002','vip'),('D3','R003','vip'),('D3','R004','vip'),('D3','R005','vip'),('D3','R006','vip'),('D3','R007','vip'),('D4','R001','vip'),('D4','R002','vip'),('D4','R003','vip'),('D4','R004','vip'),('D4','R005','vip'),('D4','R006','vip'),('D4','R007','vip'),('D5','R001','vip'),('D5','R002','vip'),('D5','R003','vip'),('D5','R004','vip'),('D5','R005','vip'),('D5','R006','vip'),('D5','R007','vip'),('D6','R001','vip'),('D6','R002','vip'),('D6','R003','vip'),('D6','R004','vip'),('D6','R005','vip'),('D6','R006','vip'),('D6','R007','vip'),('D7','R001','vip'),('D7','R002','vip'),('D7','R003','vip'),('D7','R004','vip'),('D7','R005','vip'),('D7','R006','vip'),('D7','R007','vip'),('D8','R001','vip'),('D8','R002','vip'),('D8','R003','vip'),('D8','R004','vip'),('D8','R005','vip'),('D8','R006','vip'),('D8','R007','vip'),('D9','R001','vip'),('D9','R002','vip'),('D9','R003','vip'),('D9','R004','vip'),('D9','R005','vip'),('D9','R006','vip'),('D9','R007','vip'),('E1','R001','vip'),('E1','R002','vip'),('E1','R003','vip'),('E1','R004','vip'),('E1','R005','vip'),('E1','R006','vip'),('E1','R007','vip'),('E10','R001','vip'),('E10','R002','vip'),('E10','R003','vip'),('E10','R004','vip'),('E10','R005','vip'),('E10','R006','vip'),('E10','R007','vip'),('E11','R001','vip'),('E11','R002','vip'),('E11','R003','vip'),('E11','R004','vip'),('E11','R005','vip'),('E11','R006','vip'),('E11','R007','vip'),('E12','R001','vip'),('E12','R002','vip'),('E12','R003','vip'),('E12','R004','vip'),('E12','R005','vip'),('E12','R006','vip'),('E12','R007','vip'),('E2','R001','vip'),('E2','R002','vip'),('E2','R003','vip'),('E2','R004','vip'),('E2','R005','vip'),('E2','R006','vip'),('E2','R007','vip'),('E3','R001','vip'),('E3','R002','vip'),('E3','R003','vip'),('E3','R004','vip'),('E3','R005','vip'),('E3','R006','vip'),('E3','R007','vip'),('E4','R001','vip'),('E4','R002','vip'),('E4','R003','vip'),('E4','R004','vip'),('E4','R005','vip'),('E4','R006','vip'),('E4','R007','vip'),('E5','R001','vip'),('E5','R002','vip'),('E5','R003','vip'),('E5','R004','vip'),('E5','R005','vip'),('E5','R006','vip'),('E5','R007','vip'),('E6','R001','vip'),('E6','R002','vip'),('E6','R003','vip'),('E6','R004','vip'),('E6','R005','vip'),('E6','R006','vip'),('E6','R007','vip'),('E7','R001','vip'),('E7','R002','vip'),('E7','R003','vip'),('E7','R004','vip'),('E7','R005','vip'),('E7','R006','vip'),('E7','R007','vip'),('E8','R001','vip'),('E8','R002','vip'),('E8','R003','vip'),('E8','R004','vip'),('E8','R005','vip'),('E8','R006','vip'),('E8','R007','vip'),('E9','R001','vip'),('E9','R002','vip'),('E9','R003','vip'),('E9','R004','vip'),('E9','R005','vip'),('E9','R006','vip'),('E9','R007','vip'),('F1','R001','vip'),('F1','R002','vip'),('F1','R003','vip'),('F1','R004','vip'),('F1','R005','vip'),('F1','R006','vip'),('F1','R007','vip'),('F10','R001','vip'),('F10','R002','vip'),('F10','R003','vip'),('F10','R004','vip'),('F10','R005','vip'),('F10','R006','vip'),('F10','R007','vip'),('F11','R001','vip'),('F11','R002','vip'),('F11','R003','vip'),('F11','R004','vip'),('F11','R005','vip'),('F11','R006','vip'),('F11','R007','vip'),('F12','R001','vip'),('F12','R002','vip'),('F12','R003','vip'),('F12','R004','vip'),('F12','R005','vip'),('F12','R006','vip'),('F12','R007','vip'),('F2','R001','vip'),('F2','R002','vip'),('F2','R003','vip'),('F2','R004','vip'),('F2','R005','vip'),('F2','R006','vip'),('F2','R007','vip'),('F3','R001','vip'),('F3','R002','vip'),('F3','R003','vip'),('F3','R004','vip'),('F3','R005','vip'),('F3','R006','vip'),('F3','R007','vip'),('F4','R001','vip'),('F4','R002','vip'),('F4','R003','vip'),('F4','R004','vip'),('F4','R005','vip'),('F4','R006','vip'),('F4','R007','vip'),('F5','R001','vip'),('F5','R002','vip'),('F5','R003','vip'),('F5','R004','vip'),('F5','R005','vip'),('F5','R006','vip'),('F5','R007','vip'),('F6','R001','vip'),('F6','R002','vip'),('F6','R003','vip'),('F6','R004','vip'),('F6','R005','vip'),('F6','R006','vip'),('F6','R007','vip'),('F7','R001','vip'),('F7','R002','vip'),('F7','R003','vip'),('F7','R004','vip'),('F7','R005','vip'),('F7','R006','vip'),('F7','R007','vip'),('F8','R001','vip'),('F8','R002','vip'),('F8','R003','vip'),('F8','R004','vip'),('F8','R005','vip'),('F8','R006','vip'),('F8','R007','vip'),('F9','R001','vip'),('F9','R002','vip'),('F9','R003','vip'),('F9','R004','vip'),('F9','R005','vip'),('F9','R006','vip'),('F9','R007','vip'),('G1','R001','sweetbox'),('G1','R002','sweetbox'),('G1','R003','sweetbox'),('G1','R004','sweetbox'),('G1','R005','sweetbox'),('G1','R006','sweetbox'),('G1','R007','sweetbox'),('G2','R001','sweetbox'),('G2','R002','sweetbox'),('G2','R003','sweetbox'),('G2','R004','sweetbox'),('G2','R005','sweetbox'),('G2','R006','sweetbox'),('G2','R007','sweetbox'),('G3','R001','sweetbox'),('G3','R002','sweetbox'),('G3','R003','sweetbox'),('G3','R004','sweetbox'),('G3','R005','sweetbox'),('G3','R006','sweetbox'),('G3','R007','sweetbox'),('G4','R001','sweetbox'),('G4','R002','sweetbox'),('G4','R003','sweetbox'),('G4','R004','sweetbox'),('G4','R005','sweetbox'),('G4','R006','sweetbox'),('G4','R007','sweetbox'),('G5','R001','sweetbox'),('G5','R002','sweetbox'),('G5','R003','sweetbox'),('G5','R004','sweetbox'),('G5','R005','sweetbox'),('G5','R006','sweetbox'),('G5','R007','sweetbox'),('G6','R001','sweetbox'),('G6','R002','sweetbox'),('G6','R003','sweetbox'),('G6','R004','sweetbox'),('G6','R005','sweetbox'),('G6','R006','sweetbox'),('G6','R007','sweetbox');
/*!40000 ALTER TABLE `seats` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `slots`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `slots` (
  `sl_id` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `r_id` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mv_id` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mv_duration` time NOT NULL,
  `sl_start` datetime NOT NULL,
  `sl_end` datetime NOT NULL,
  `sl_price` decimal(15,2) unsigned NOT NULL,
  PRIMARY KEY (`sl_id`,`r_id`,`mv_id`),
  KEY `slots_r_id_foreign` (`r_id`),
  KEY `slots_mv_id_foreign` (`mv_id`),
  CONSTRAINT `slots_mv_id_foreign` FOREIGN KEY (`mv_id`) REFERENCES `movies` (`mv_id`),
  CONSTRAINT `slots_r_id_foreign` FOREIGN KEY (`r_id`) REFERENCES `rooms` (`r_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `slots` WRITE;
/*!40000 ALTER TABLE `slots` DISABLE KEYS */;
INSERT INTO `slots` VALUES ('SL001','R001','MV01','02:45:30','2024-01-02 16:30:00','2024-01-02 19:15:30',75000.00),('SL002','R004','MV03','02:45:12','2024-01-06 21:30:30','2024-01-07 00:15:42',75000.00),('SL005','R001','MV08','02:30:00','2023-12-29 19:00:00','2023-12-29 21:30:00',75000.00),('SL006','R006','MV10','02:30:00','2023-12-26 14:15:00','2023-12-26 16:45:00',75000.00),('SL007','R001','MV03','02:45:12','2023-12-28 18:15:00','2023-12-28 21:00:12',75000.00),('SL016','R007','MV10','02:30:00','2023-12-27 21:30:00','2023-12-28 00:00:00',90000.00),('SL017','R007','MV04','02:30:14','2023-12-27 16:00:00','2023-12-27 18:30:14',90000.00),('SL018','R004','MV04','02:30:14','2023-12-26 17:30:00','2023-12-26 20:00:14',90000.00),('SL019','R006','MV10','02:30:00','2023-12-26 16:30:00','2023-12-26 19:00:00',90000.00),('SL020','R005','MV10','02:30:00','2023-12-26 18:30:00','2023-12-26 21:00:00',80000.00),('SL03','R004','MV04','02:30:14','2023-12-25 18:00:15','2023-12-25 20:30:29',85000.00),('SL05','R004','MV04','02:30:14','2024-01-15 19:00:00','2024-01-15 21:30:14',85000.00),('SL100','R001','MV09','02:45:00','2023-12-26 15:47:06','2023-12-26 18:32:06',70000.00);
/*!40000 ALTER TABLE `slots` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `tickets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tickets` (
  `tk_id` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mv_id` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sl_id` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `r_id` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tk_value` decimal(15,2) unsigned NOT NULL,
  `st_id` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tk_type` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bi_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tk_available` int NOT NULL,
  PRIMARY KEY (`tk_id`,`sl_id`,`st_id`),
  KEY `tickets_sl_id_r_id_mv_id_foreign` (`sl_id`,`r_id`,`mv_id`),
  KEY `tickets_st_id_r_id_foreign` (`st_id`,`r_id`),
  KEY `tickets_bi_id_foreign` (`bi_id`),
  CONSTRAINT `tickets_bi_id_foreign` FOREIGN KEY (`bi_id`) REFERENCES `bills` (`bi_id`),
  CONSTRAINT `tickets_sl_id_r_id_mv_id_foreign` FOREIGN KEY (`sl_id`, `r_id`, `mv_id`) REFERENCES `slots` (`sl_id`, `r_id`, `mv_id`),
  CONSTRAINT `tickets_st_id_r_id_foreign` FOREIGN KEY (`st_id`, `r_id`) REFERENCES `seats` (`st_id`, `r_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `tickets` WRITE;
/*!40000 ALTER TABLE `tickets` DISABLE KEYS */;
INSERT INTO `tickets` VALUES ('T1703435259FqGQ','MV01','SL001','R001',165000.00,'G4','sweetbox','BILL65885bfb2d81c',1),('T17034357140H6i','MV01','SL001','R001',75000.00,'C6','standard','BILL65885dc27dace',1),('T1703435714bVwc','MV01','SL001','R001',75000.00,'A6','standard','BILL65885dc27dace',1),('T1703435714QE1p','MV01','SL001','R001',75000.00,'B6','standard','BILL65885dc27dace',1),('T1703438301g8C3','MV01','SL001','R001',75000.00,'A7','standard','BILL658867dd72034',1),('T1703438323BeCZ','MV01','SL001','R001',75000.00,'A7','standard','BILL658867f3d0232',1),('T1703438421SUbH','MV01','SL001','R001',75000.00,'B7','standard','BILL65886855b3f4b',1),('T17034387067hJv','MV01','SL001','R001',75000.00,'B7','standard','BILL658869723332f',1),('T17034414281l5E','MV01','SL001','R001',75000.00,'C1','standard','BILL65887414712a0',1),('T1703442619Kdfb','MV01','SL001','R001',112500.00,'F12','vip','BILL658878bb016e1',1),('T1703472699qFpB','MV01','SL001','R001',165000.00,'G6','sweetbox','BILL6588ee3b9b202',1),('T1703473856s3Yl','MV01','SL001','R001',75000.00,'A12','standard','BILL6588f2c03be1c',1),('T1703473970NOpo','MV01','SL001','R001',165000.00,'G1','sweetbox','BILL6588f332ae443',1),('T1703475712ojlZ','MV01','SL001','R001',165000.00,'G5','sweetbox','BILL6588fa00d31aa',1),('T1703475712pPVe','MV01','SL001','R001',165000.00,'G2','sweetbox','BILL6588fa00d31aa',1),('T17034927863DQZ','MV03','SL002','R004',75000.00,'C7','standard','BILL65893cb2932c0',1),('T1703492786fohi','MV03','SL002','R004',75000.00,'A1','standard','BILL65893cb2932c0',1),('T1703492786iLsr','MV03','SL002','R004',112500.00,'D7','vip','BILL65893cb2932c0',1),('T1703492786MCqc','MV03','SL002','R004',75000.00,'C8','standard','BILL65893cb2932c0',1),('T17035097897oVF','MV03','SL002','R004',112500.00,'F6','vip','BILL65897f1d5f3d4',1),('T1703509789J9nC','MV03','SL002','R004',112500.00,'F7','vip','BILL65897f1d5f3d4',1),('T17035711466EBd','MV03','SL002','R004',165000.00,'G1','sweetbox','BILL658a6ecac5783',1),('T17035746655xDo','MV01','SL001','R001',112500.00,'E9','vip','BILL658a7c89d4608',1),('T1703574742cTQA','MV01','SL001','R001',75000.00,'A1','standard','BILL658a7cd6630d9',1),('T1703574998KlH5','MV01','SL001','R001',112500.00,'E12','vip','BILL658a7dd69b153',1),('T17035823518tal','MV08','SL005','R001',165000.00,'G4','sweetbox','BILL658a9a8f3466f',1),('T1703582351BAFm','MV08','SL005','R001',165000.00,'G3','sweetbox','BILL658a9a8f3466f',1),('T1703584737Mewd','MV04','SL017','R007',90000.00,'C8','standard','BILL658aa3e0f3141',1),('T1703584737p31D','MV04','SL017','R007',90000.00,'C7','standard','BILL658aa3e0f3141',1),('T1703584737zT0Q','MV04','SL017','R007',90000.00,'C6','standard','BILL658aa3e0f3141',1);
/*!40000 ALTER TABLE `tickets` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `types` (
  `type_id` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`type_id`),
  UNIQUE KEY `types_type_name_unique` (`type_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `types` WRITE;
/*!40000 ALTER TABLE `types` DISABLE KEYS */;
INSERT INTO `types` VALUES ('TL010','Bí ẩn'),('TL009','Cổ trang'),('TL004','Hài hước'),('TL01','Hành động'),('TL005','Hoạt hình'),('TL006','Học thuật'),('TL008','Khoa học viễn tưởng'),('TL003','Kinh dị'),('TL011','Lãng mạn'),('TL007','Tâm lý xã hội'),('TL002','Tình cảm');
/*!40000 ALTER TABLE `types` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `cus_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `cus_dob` datetime NOT NULL,
  `cus_gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cus_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cus_point` int DEFAULT NULL,
  `cus_type` longtext COLLATE utf8mb4_unicode_ci,
  `cus_role` longtext COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'admin','admin@gmail.com','2023-12-24 09:14:19','$2y$10$dQp/U/x/Ki55CIH1t7JZbuxC6a2zBzK0tbZg6l6aLEQHwtRep2xOO',NULL,'2023-12-24 09:14:19','2023-12-24 09:14:19','2023-11-29 00:00:00','men','0123456789',0,NULL,'admin'),(2,'Trần Kim Thanh','thanhtran.8676@gmail.com','2023-12-24 09:21:22','$2y$10$b0IfPVD6RZucUPVDw/7FqO1z7r11Z.GZQpH1Rf5Pa.bvboFViUeeq','rGHtZ8AD48bD9I3Drp4dHPF8jUGTUtoQGh3Drhyt2ZmMO8Iz5B96Tv3OiaPn','2023-12-24 09:20:47','2023-12-26 02:01:42','2023-12-03 00:00:00','women','0917008677',0,'membership','client'),(3,'Châu Hoàng Tuệ Mẫn','21521113@gm.uit.edu.vn','2023-12-25 01:10:42','$2y$10$lqTSkw/fC2sXkOjwKIEnHOIJYjxdmgA6DKxat3cisbubY/p6wU5cC','ddkCRz5mqJK4GcFNdz7blS7TPP6oobte7HKwAdhOmdlF7qvh4qKGnCwRPUdR','2023-12-25 01:03:37','2023-12-25 01:10:42','2003-09-30 00:00:00','women','0937956971',0,'membership','client'),(4,'Nguyễn Duy Đông','21521956@gm.uit.edu.vn',NULL,'$2y$10$y2HujF6mtF1MmW5qK1jOdu4gzil7HtpqWvi9If7bYDJKkExetxrje',NULL,'2023-12-25 10:16:37','2023-12-25 10:16:37','2003-01-01 00:00:00','women','0917008671',0,'membership','client'),(5,'Nguyễn Huỳnh Khương','fksleepyaab@gmail.com','2023-12-25 18:42:22','$2y$10$Yk4gK.Tyah3x7bYYETs2/OoT2twLvRE0fei5bLdBnLNrrIgOfuSD6',NULL,'2023-12-25 18:38:09','2023-12-25 18:42:22','2001-05-05 00:00:00','women','0917008777',0,'membership','client'),(6,'Nguyễn Phước Tấn','21522101@gm.uit.edu.vn','2023-12-26 02:58:13','$2y$10$WBuztPJOoisPr3WafdMOv.20yRmrNH3sHMJTCQO5VSkPTI.zq7M2i',NULL,'2023-12-26 02:57:40','2023-12-26 02:58:13','2003-12-01 00:00:00','men','0917008674',0,'membership','client');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `years`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `years` (
  `yre_id` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `yre_year` int NOT NULL,
  `yre_count` int NOT NULL,
  `yre_value` decimal(15,2) unsigned NOT NULL,
  PRIMARY KEY (`yre_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `years` WRITE;
/*!40000 ALTER TABLE `years` DISABLE KEYS */;
INSERT INTO `years` VALUES ('2019',2019,4200,294000000.00),('2020',2020,3600,252000000.00),('2021',2021,100,7000000.00),('2022',2022,1500,105000000.00),('2023',2023,3779,265477500.00);
/*!40000 ALTER TABLE `years` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

