-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for sultandb
DROP DATABASE IF EXISTS `sultandb`;
CREATE DATABASE IF NOT EXISTS `sultandb` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `sultandb`;

-- Dumping structure for table sultandb.tb_amount_people
DROP TABLE IF EXISTS `tb_amount_people`;
CREATE TABLE IF NOT EXISTS `tb_amount_people` (
  `id_amount_people` int NOT NULL AUTO_INCREMENT,
  `name_amount_people` text NOT NULL,
  `number` int DEFAULT NULL,
  PRIMARY KEY (`id_amount_people`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table sultandb.tb_amount_people: ~3 rows (approximately)
REPLACE INTO `tb_amount_people` (`id_amount_people`, `name_amount_people`, `number`) VALUES
	(1, 'Individual', 1),
	(2, 'Couples', 2),
	(3, 'Familiar', 4);

-- Dumping structure for table sultandb.tb_card
DROP TABLE IF EXISTS `tb_card`;
CREATE TABLE IF NOT EXISTS `tb_card` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_dish` int NOT NULL DEFAULT '0',
  `id_user` int NOT NULL DEFAULT '0',
  `amount_dishes` int NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `id_dish` (`id_dish`),
  KEY `id_user` (`id_user`),
  CONSTRAINT `FK__tb_dish` FOREIGN KEY (`id_dish`) REFERENCES `tb_dish` (`id_dish`),
  CONSTRAINT `FK__tb_users` FOREIGN KEY (`id_user`) REFERENCES `tb_users` (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table sultandb.tb_card: ~1 rows (approximately)
REPLACE INTO `tb_card` (`id`, `id_dish`, `id_user`, `amount_dishes`) VALUES
	(4, 1, 4, 2);

-- Dumping structure for table sultandb.tb_category
DROP TABLE IF EXISTS `tb_category`;
CREATE TABLE IF NOT EXISTS `tb_category` (
  `id_category` int NOT NULL AUTO_INCREMENT,
  `name_categories` text NOT NULL,
  `category_description` text NOT NULL,
  PRIMARY KEY (`id_category`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table sultandb.tb_category: ~4 rows (approximately)
REPLACE INTO `tb_category` (`id_category`, `name_categories`, `category_description`) VALUES
	(1, 'Main dishes', 'Main dishes'),
	(2, 'Salads', 'Salads'),
	(3, 'Desserts', 'Desserts'),
	(4, 'Drinks', 'Drinks');

-- Dumping structure for table sultandb.tb_dish
DROP TABLE IF EXISTS `tb_dish`;
CREATE TABLE IF NOT EXISTS `tb_dish` (
  `id_dish` int NOT NULL AUTO_INCREMENT,
  `id_category` int NOT NULL,
  `id_amount_people` int DEFAULT NULL,
  `namel` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `names` text NOT NULL,
  `names_ar` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `namel_ar` text NOT NULL,
  `qualification` int DEFAULT '5',
  `price` double NOT NULL DEFAULT '0',
  `description` text NOT NULL,
  `description_ar` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `popular` char(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT 'n',
  `img` text NOT NULL,
  `img_recorted` text NOT NULL,
  `visible` int NOT NULL DEFAULT '1',
  `related_dish_one` int NOT NULL DEFAULT '0',
  `related_dish_two` int DEFAULT NULL,
  `related_dish_three` int DEFAULT NULL,
  PRIMARY KEY (`id_dish`),
  KEY `FK_tb_dish_tb_category` (`id_category`),
  KEY `FK_tb_dish_tb_amount_people` (`id_amount_people`),
  CONSTRAINT `FK_tb_dish_tb_amount_people` FOREIGN KEY (`id_amount_people`) REFERENCES `tb_amount_people` (`id_amount_people`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table sultandb.tb_dish: ~36 rows (approximately)
REPLACE INTO `tb_dish` (`id_dish`, `id_category`, `id_amount_people`, `namel`, `names`, `names_ar`, `namel_ar`, `qualification`, `price`, `description`, `description_ar`, `popular`, `img`, `img_recorted`, `visible`, `related_dish_one`, `related_dish_two`, `related_dish_three`) VALUES
	(1, 1, 3, 'Lebanese Mountain Bread', 'Mountain Bread', 'خبز الجبل', 'خبز الجبل اللبناني', 5, 58.3, ' This Lebanese mountain flatbread brings me back to my early childhood when the Syrian lady across the street from my grandmother made it and always gave us some. It\'s my first food memory. The bread has a unique texture, gorgeous appearance, and fun-to-make technique.', 'أقدم هذا مرة واحدة على الأقل في الأسبوع مع وجبة دجاج أو شريحة لحم أو كوجبة خفيفة سريعة. هذه هي وصفة الحمص الأساسية وهي بسيطة ولكنها لذيذة. تعلمت من جدي الراحل الذي كان من أصل لبناني. يقدم مع الخبز العربي الطازج.', 'n', 'https://www.allrecipes.com/thmb/p-uBkYsss2ya7SLbW5wddl3zYNM=/364x242/filters:no_upscale():max_bytes(150000):strip_icc():focal(479x0:481x2)/4535952-lebanese-mountain-bread-Chef-John-1x1-1-a9ffff96998240b0a2effa58fc4d8758.jpg', 'img/recorted/LebaneseMountainBread.png', 1, 21, 14, 18),
	(2, 1, 1, 'Lebanese Seven Spices', 'Seven Spices', 'سبع بهارات', 'البهارات السبعة اللبنانية', 5, 37.5, ' This Lebanese 7-spice seasoning mix will add warm flavors to lots of dishes! Try it on chicken, eggs, or in a marinade.', 'مزيج التوابل اللبناني المكون من 7 بهارات سيضيف نكهات دافئة إلى الكثير من الأطباق! جربه على الدجاج أو البيض أو في ماء مالح.', 'y', 'https://www.allrecipes.com/thmb/B6IHQlgSpMkq8Pp8lSCxPYvqFRU=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/2614759-ae0be424382c44e68969423fac08c535.jpg', 'img/recorted/LebaneseSevenSpices.png', 1, 21, 20, 16),
	(3, 1, 2, 'Arabic Fattoush Salad', 'Fattoush', 'فتوش', 'سلطة الفتوش العربي', 5, 4.2, ' This fattoush recipe is a colorful tossed salad with a lemony garlic dressing. Fattoush is one of the most well-known Middle Eastern salads and a standard dish on the mezza (small dishes) table. If you\'ve never made a single Arabic dish, this is a delicious and healthy place to start.', 'وصفة الفتوش هذه عبارة عن سلطة ملونة مع صلصة الثوم والليمون. الفتوش هي واحدة من السلطات الشرق أوسطية الأكثر شهرة وطبق قياسي على طاولة المزة (الأطباق الصغيرة). إذا لم تقم بإعداد طبق عربي واحد من قبل، فهذا مكان لذيذ وصحي للبدء.', 'y', 'https://www.allrecipes.com/thmb/pHI_ptpW3FYhU6i-VubpHbyDaCg=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/997433-arabic-fattoush-salad-Christina-4x3-1-d69b98d22f0c46098b462565ebb72789.jpg', 'img/recorted/ArabicFattoushSalad.png', 1, 15, 36, 30),
	(4, 1, 3, 'Best Hummus', 'Hummus', 'الحمص', 'أفضل حمص', 5, 67.1, ' I serve this at least once a week with a chicken or steak meal or just as a quick snack. This is the basic hummus recipe and is simple yet delicious. Learned from my late grandfather who was of Lebanese descent. Serve with fresh Arabic bread.', 'أقدم هذا مرة واحدة على الأقل في الأسبوع مع وجبة دجاج أو شريحة لحم أو كوجبة خفيفة سريعة. هذه هي وصفة الحمص الأساسية وهي بسيطة ولكنها لذيذة. تعلمت من جدي الراحل الذي كان من أصل لبناني. يقدم مع الخبز العربي الطازج.', 'n', 'https://www.allrecipes.com/thmb/TtMCuxGoMZtPJo5D0oWXWPXY10Q=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/3885541-best-hummus-France-C-4x3-1-46d55643d0ac4a86b8c5028785657b49.jpg', 'img/recorted/BestHummus.png', 1, 5, 35, 24),
	(5, 1, 2, 'Chicken Shawarma', 'Chicken Shawarma', 'شاورما الدجاج', 'شاورما الدجاج', 5, 60.7, ' Awesome Lebanese sandwich served in most Lebanese restaurants. Can be served with Tahini sauce or Toum.', 'ساندويتش لبناني رائع يقدم في معظم المطاعم اللبنانية. يمكن تقديمه مع صلصة الطحينة أو التوم.', 'y', 'https://www.allrecipes.com/thmb/NcMmdX0ii73HWIojdEWx6q1Rtzo=/282x188/filters:no_upscale():max_bytes(150000):strip_icc():focal(479x0:481x2)/2050985-6127275469bd4d98a50d30de6d385a51.jpg', 'img/recorted/ChickenShawarma.png', 1, 11, 33, 10),
	(6, 1, 3, 'Lebanese Chicken and Potatoes', 'Chicken and Potatoes', 'دجاج وبطاطس', 'دجاج لبناني و بطاطا', 5, 43.2, ' A traditional Lebanese dish of baked chicken and potatoes, which I learned from my mum. Unbelievably simple, but ever so delicious.', 'طبق لبناني تقليدي من الدجاج والبطاطس المشوية، تعلمته من أمي. بسيطة بشكل لا يصدق، ولكن لذيذ جدا من أي وقت مضى.', 'y', 'https://www.allrecipes.com/thmb/juszPyCvVffzV0nI0xt0egdy4f4=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/587368-lebanese-chicken-and-potatoes-TTV78-4x3-1-2393889ae8a441f39cd8c383dd91cd25.jpg', 'img/recorted/LebaneseChickenandPotatoes.png', 1, 29, 13, 26),
	(7, 1, 3, 'Lamb Shawarma', 'Lamb Shawarma', 'شاورما لحم ضأن', 'شاورما لحم ضأن', 5, 21.9, ' This is a wonderful Middle Eastern dish that I was introduced to by a friend of mine from Lebanon. This recipe yields an absolutely amazing tasting and tender final product. Shawarma can be used in pitas, be put on fattoush, on hommus, or eaten plain.', 'هذا طبق شرق أوسطي رائع تعرفت عليه من قبل صديق لي من لبنان. تنتج هذه الوصفة منتجًا نهائيًا رائعًا ومذاقًا رائعًا. يمكن استخدام الشاورما مع خبز البيتا أو وضعها على الفتوش أو الحمص أو تناولها سادة.', 'n', 'https://www.allrecipes.com/thmb/XV_Qj4uYnjjDVzkoAI8_F67IjQI=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/9325729-0e94617533f84916a6e9ae166ecaf647.jpg', 'img/recorted/LambShawarma.png', 1, 6, 31, 32),
	(8, 1, 1, 'Middle Eastern Kibbeh', 'Kibbeh', 'كبة', 'كبة شرق أوسطية', 5, 27.1, ' Kibbeh is a wonderful dish from the Middle East traditionally made with lamb meat but beef is acceptable, too. I prefer it made into patties and fried in olive oil. However, it is most often found in restaurants in baked form. Serve kibbeh with tahini, a sesame seed paste.', 'الكبة هي طبق رائع من الشرق الأوسط يُصنع تقليديًا من لحم الضأن ولكن لحم البقر مقبول أيضًا. أنا أفضل أن يتم صنعها على شكل فطائر ومقلية بزيت الزيتون. ومع ذلك، غالبا ما توجد في المطاعم في شكل مخبوز. تُقدم الكبة مع الطحينة ومعجون السمسم.', 'y', 'https://www.allrecipes.com/thmb/0tpVU-RF0K2tbDSW4Vml-XgrHXA=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/4500866-1c34643967f8483a861df02fc0a4033d.jpg', 'img/recorted/MiddleEasternKibbeh.png', 1, 17, 34, 25),
	(9, 1, 2, 'Chard Lentil Soup, Lebanese-Style', 'Chard ', 'السلق', 'شوربة العدس بالسلق على الطريقة اللبنانية', 5, 30.1, ' Easy to prepare super delicious vegetarian soup.', 'من السهل تحضير شوربة نباتية لذيذة للغاية.', 'y', 'https://www.allrecipes.com/thmb/746C_hpLoSRDf6qo7YusFZZpNeo=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/8593404-2d1c6dca3705400c9231db20aa2ae1bf.jpg', 'img/recorted/ChardLentilSoup.png', 1, 4, 34, 5),
	(10, 1, 1, 'Instant Pot Lebanese Lentil Soup (Shorbat Adas)', 'Lentil Soup', 'شوربة العدس', 'شوربة العدس اللبنانية سريعة التحضير (شربات عدس)', 5, 10, ' This Lebanese Instant Pot red lentil soup is a beautiful sunny color thanks to red lentils. Garnish with a drizzle of olive oil and a dash of Aleppo pepper, if desired.', 'حساء العدس الأحمر اللبناني سريع التحضير ذو لون مشمس جميل بفضل العدس الأحمر. يُزيّن برذاذ من زيت الزيتون ورشة من الفلفل الحلبي، إذا رغبت في ذلك.', 'n', 'https://www.allrecipes.com/thmb/dMqiVaUZsG6dEqWzGBIFrdV1z1c=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/7802374-4ff14ae0afc34d2eb2f070133f5732e2.jpg', 'img/recorted/InstantPotLebaneseLentilSoup.png', 1, 27, 25, 19),
	(11, 2, 1, 'Roasted Butternut Squash Salad', 'Butternut', 'الجوز', 'شوربة العدس اللبنانية سريعة التحضير (شربات عدس)', 5, 48.1, ' This butternut squash salad with raisins, onions, crispy bacon, and romaine lettuce is served warm. Simple and delicious!', 'حساء العدس الأحمر اللبناني سريع التحضير ذو لون مشمس جميل بفضل العدس الأحمر. يُزيّن برذاذ من زيت الزيتون ورشة من الفلفل الحلبي، إذا رغبت في ذلك.', 'n', 'https://www.allrecipes.com/thmb/KkFEVFU0QfnnP5NLdG-erdilPv8=/771x514/filters:no_upscale():max_bytes(150000):strip_icc():focal(799x408:801x410)/4534355_StackedTomatoandBurrataSalad4x3cropped-d663930626c64fa285925b3f9d4e91ca.jpg', 'img/recorted/RoastedButternutSquashSalad.png', 1, 26, 33, 15),
	(12, 2, 2, 'Greek Couscous Salad', 'Couscous', 'الكسكس', 'سلطة القرع الجوز المشوي', 5, 61.6, ' This hearty Greek couscous salad uses Israeli couscous. So delicious!', 'يتم تقديم سلطة القرع مع الزبيب والبصل ولحم الخنزير المقدد المقرمش والخس الروماني دافئة. بسيطة ولذيذة!', 'n', 'https://www.allrecipes.com/thmb/2NqOB_fCUDTLStqRN4UXj7KStWc=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/4507336-2000-66985c987b6940aa9887cbaea5404d33.jpg', 'img/recorted/GreekCouscousSalad.png', 1, 1, 2, 15),
	(13, 2, 3, 'Pecan Chicken Salad', 'Pecan Chicken', 'دجاج البقان', 'سلطة الكسكس اليونانية', 5, 20.7, ' This pecan chicken salad made with chopped cooked chicken, herbs, celery, pecans, red onion, and a creamy homemade dressing is really flavorful. Serve on top of toasted croissants or butter lettuce.', 'تستخدم سلطة الكسكس اليونانية الشهية الكسكس الإسرائيلي. لذيذ جدا!', 'n', 'https://www.allrecipes.com/thmb/1BiWdW_GZqfsRnAoNLWPdk949tc=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/8300440-grandma-zs-crunch-salad-photo-by-fabeveryday-sq-crop-6d716ce3a520424aa2b4d94ff2929c34.jpg', 'img/recorted/PecanChickenSalad.png', 1, 8, 26, 25),
	(14, 2, 3, 'Copycat KFC Coleslaw', 'Coleslaw', 'سلطة الكرنب', 'سلطة دجاج البقان', 5, 54.1, ' For a slaw that looks similar to what you\'d find at KFC, we suggest chopping the coleslaw mix before mixing with the dressing.', 'سلطة دجاج البقان المصنوعة من الدجاج المطبوخ المفروم والأعشاب والكرفس وجوز البقان والبصل الأحمر وصلصة كريمية محلية الصنع لذيذة حقًا. يُقدم الطبق فوق الكرواسون المحمص أو الخس بالزبدة.', 'n', 'https://www.allrecipes.com/thmb/pm3ZMS77Ybs4xHNJOXuAXj_Iln8=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/Magnificent-Macaroni-Salad-c476ed4cec1845f2b633b4d76a35af56.jpg', 'img/recorted/CopycatKFCColeslaw.png', 1, 19, 32, 12),
	(15, 2, 2, 'Hearts of Palm and Avocado Salad', 'Avocado Salad', 'سلطة الافوكادو', 'مقلد كنتاكي فرايد تشيكن كولسلو', 5, 13.7, ' This salad with hearts of palm and avocado is delicious served over lettuce, inside lettuce cups, or alongside tortilla chips as a dip.', 'للحصول على سلطة الكرنب التي تبدو مشابهة لما تجده في كنتاكي، نقترح تقطيع مزيج سلطة الكرنب قبل خلطه مع الصلصة.', 'n', 'https://www.allrecipes.com/thmb/WS7jVFeC0UIiF8DF6ijNBIY6WpI=/144x95/filters:no_upscale():max_bytes(150000):strip_icc():focal(453x0:455x2)/Screen-Shot-2021-05-17-at-2.32.09-PM-65741fb74ec749d4b76965eac10d0004.png', 'img/recorted/HeartsofPalmandAvocado.png', 1, 3, 8, 13),
	(16, 2, 3, 'Red Pear, Pomegranate, and Gorgonzola Salad', 'Gorgonzola Salad', 'سلطة جورجونزولا', 'سلطة قلوب النخيل والأفوكادو', 5, 6, ' A simple vinaigrette graces this lovely salad topped with pomegranate arils, looking like little jewels. Add sweet, fresh red pear slices, some pungent Gorgonzola crumbles, a few lightly toasted walnuts and chopped scallion to a bed of greens, and you\'ll be enjoying this salad in about 25 minutes!', 'هذه السلطة مع قلوب النخيل والأفوكادو لذيذة وتقدم فوق الخس، داخل أكواب الخس، أو بجانب رقائق التورتيا كغموس.', 'n', 'https://www.allrecipes.com/thmb/TMcyZXFBd7X-8kVowKKmRdlwyuU=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/276540roasted-butternut-squash-salad-with-bacon-and-onionsChristina4x3-b74e23a4a473438f89c5b61fa359c712.jpg', 'img/recorted/RedPearPomegranateandGorgonzolaSalad.png', 1, 9, 27, 2),
	(17, 2, 3, 'Green Goddess Salad', 'Green Goddess', 'إلهة الخضراء', 'سلطة الكمثرى الحمراء والرمان وجورجونزولا', 5, 8, ' A simple romaine salad topped with classic green goddess dressing made with mayonnaise, parsley, spinach, basil, tarragon, and lemon juice.', 'صلصة الخل البسيطة تزين هذه السلطة الجميلة المغطاة بحبات الرمان، وتبدو وكأنها جواهر صغيرة. أضف شرائح الكمثرى الحمراء الطازجة الحلوة، وبعض فتات جورجونزولا اللاذعة، وبعض الجوز المحمص قليلاً والبصل الأخضر المفروم إلى طبقة من الخضر، وسوف تستمتع بهذه السلطة في حوالي 25 دقيقة!', 'n', 'https://www.allrecipes.com/thmb/XmxBj2pFEG9XdGL2tXYrjZHFt6w=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/1389405-19d4e5ab57bb43c6a023b8a3b9b267b3.jpg', 'img/recorted/GreenGoddessSalad.png', 1, 24, 23, 32),
	(18, 2, 3, 'Citrus and Pomegranate Salad', 'Pomegranate Salad', 'سلطة الرمان', 'سلطة الآلهة الخضراء', 5, 44.7, ' Sweet oranges, tangerines, ruby grapefruit, and pomegranate arils make a lovely salad for any time of day, or any occasion. The simple dressing complements it, perfectly. Use any combination of fresh sweet citrus.', 'سلطة رومين بسيطة مغطاة بصلصة الآلهة الخضراء الكلاسيكية المصنوعة من المايونيز والبقدونس والسبانخ والريحان والطرخون وعصير الليمون.', 'n', 'https://www.allrecipes.com/thmb/1kvMVGNoieyM3R5Qt76WEtIVasU=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/Green_Goddess_Dressing_4x3-STEP_060-9f2282f3c8a745508e5da1c2777a51c6.jpg', 'img/recorted/CitrusandPomegranateSalad.png', 1, 12, 26, 35),
	(19, 2, 3, 'Celebrate Summer with Watermelon, Feta, and Mint Salad', 'Mint Salad ', 'سلطة النعناع ', 'سلطة الحمضيات والرمان', 5, 30.2, ' This watermelon, feta, and mint salad shows up often at our house during the summer, especially for cookouts. The quality of the olive oil and feta cheese is important, so go ahead and splurge a little. It’s refreshing, loaded with sweet and salty flavors, and takes minutes to make.', 'البرتقال الحلو، واليوسفي، والجريب فروت روبي، وحبوب الرمان تشكل سلطة جميلة في أي وقت من اليوم، أو أي مناسبة. الملابس البسيطة تكملها بشكل مثالي. استخدمي أي مزيج من الحمضيات الحلوة الطازجة.', 'n', 'https://www.allrecipes.com/thmb/sayOC_mODvsEbgoNzzvfrtvUzns=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/1670290911Citrus20and20Pomegranate20Salad-06f1e2247dce4b2ca6034cc551819994.jpeg', 'img/recorted/CelebrateSummerWatermelon.png', 1, 34, 5, 9),
	(20, 2, 3, 'Roasted Cauliflower Salad', 'Cauliflower Salad', 'سلطة القرنبيط', 'احتفل بالصيف مع سلطة البطيخ والفيتا والنعناع', 5, 54.9, ' Here\'s a salad that uses roasted cauliflower as the base. Crispy, salty bacon adds a great crunchy texture to this sweet and savory salad.', 'تظهر سلطة البطيخ والفيتا والنعناع كثيرًا في منزلنا خلال فصل الصيف، خاصة عند طهي الطعام بالخارج. تعد جودة زيت الزيتون وجبنة الفيتا أمرًا مهمًا، لذا تفضل وتفاخر قليلاً. إنه منعش ومليء بالنكهات الحلوة والمالحة، ويستغرق إعداده دقائق.', 'n', 'https://www.allrecipes.com/thmb/9sLTbLEnewwcKvV-FXftcgh2kOI=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/1672171694Lemon20Vinaigrette20Green20Bean20Salad-2000-484f36c879cc4bb390752f88043b2a08.jpeg', 'img/recorted/RoastedCauliflowerSalad.png', 1, 6, 16, 18),
	(21, 3, 1, 'Panna Cotta', 'Potato Brownies', 'براونيز البطاطس', 'براونيز البطاطس الحلوة', 5, 13.9, ' Panna cotta is a traditional, easy, and delicious Italian custard. I had a difficult time finding a good, simple recipe on the Internet, so I made up my own recipe. It tastes just like the panna cotta served at Italian restaurants. Serve with warm hot fudge sauce and fresh raspberries on top. This keeps well for several days in the refrigerator.', 'كعكات البطاطا الحلوة هذه خفيفة ورطبة، ومليئة برقائق الشوكولاتة، ومغطاة بمزيد من رقائق البطاطس وجوز البقان. لن تتذوق البطاطا الحلوة حقًا، لكنها هي ما يمنحها قوامها الفاسد.', 'n', 'https://www.allrecipes.com/thmb/FhnI6xf0d4hZd7f5LXdH0M1-I1s=/1500x750/filters:no_upscale():max_bytes(150000):strip_icc()/542325_SoftChristmasCookies3x1bannerphotobynicolen-77e9276be9734bb3a32e91f1879a9669.jpg', 'img/recorted/SweetPotatoBrownies.png', 1, 6, 8, 34),
	(22, 3, 1, 'Favorite Old-Fashioned Gingerbread', 'Walnut Roll', 'رول الجوز', 'رول بذور الخشخاش والجوز', 5, 45.7, ' Old-fashioned gingerbread is everyone\'s holiday favorite. This recipe is so easy to make and probably very similar to the one your great-grandmother used to make. This moist and lightly spiced gingerbread cake can be served with a dusting of powdered sugar, a dollop of whipped cream, or a scoop of vanilla ice cream. If you prefer a gingerbread with more spice, just double or triple the cinnamon, ginger, and cloves.', 'لفة بذور الخشخاش والجوز هذه هي نسخة من خبز الخميرة الحلوة الكرواتي الشهير واللذيذ مع حشوتين وبذور الخشخاش والزبيب والجوز والزبيب.', 'n', 'https://www.allrecipes.com/thmb/_mF7UGzexllGbEA-Li_T7jQONy0=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/277349_fresh-cranberry-upside-down-cake_Kim-14d3ce64243b4b4ba97e234c748f733c.jpg', 'img/recorted/PoppySeedandWalnutRoll.png', 1, 28, 8, 20),
	(23, 3, 1, 'Raspberry and Apricot Rugelach', 'Dump Cake', 'تفريغ الكعكة', 'كعكة تفريغ البطاطا الحلوة', 5, 3.2, ' This raspberry rugelach is a yummy and extra fruity version of this traditional cookie.', 'تشبه كعكة تفريغ البطاطا الحلوة السهلة هذه طاجن البطاطا الحلوة، نسخة الحلوى. زبداني وحلو، مع قمة مقرمشة، ستكون ناجحًا في كل وجبة خريفية تتم دعوتك إليها.', 'y', 'https://www.allrecipes.com/thmb/saTvfFq6xaX21fq_8CUyhWsWf_U=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/grandmas-sour-cream-pound-cake-by-Allrecipes-fb5a740368604d32bfddd6679de79185.png', 'img/recorted/SweetPotatoDump.png', 1, 26, 24, 2),
	(24, 3, 1, 'Boardwalk Quality Maple Walnut Fudge', 'Wine Cake', 'كعكة النبيذ', 'كعكة النبيذ المسحوق', 5, 37.9, ' We enjoy the maple walnut fudge sold on the boardwalk at the shore throughout the summer. Hubby and I came up with this recipe so that we would be able to enjoy our favorite flavor year round.', 'تشبه كعكة تفريغ البطاطا الحلوة السهلة هذه طاجن البطاطا الحلوة، نسخة الحلوى. زبداني وحلو، مع قمة مقرمشة، ستكون ناجحًا في كل وجبة خريفية تتم دعوتك إليها.', 'n', 'https://www.allrecipes.com/thmb/VJFs5NdyVe4ClzwEHvXJbgDMlVA=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/240638-Bellas-Eggnog-Frosting-2000-5831d053175347bb96f63caedaf9b173.jpg', 'img/recorted/MulledWineCake.png', 1, 1, 32, 3),
	(25, 3, 2, 'Gingerbear Thumbprint Cookies', 'Krispie Treats', 'يعامل كريسبي', 'حلوى جوز الهند والشوكولاتة والأرز كريسبي', 5, 23.4, ' I made these gingerbear thumbprint cookies because I have three obsessions in life: #1) Dogs, #2) Baking, and #3) Bears—and these adorable cookies allow me to combine two out of three of my favorite things into one sweet treat! While it does take quite a bit of time to roll out the dough, it\'s worth the extra effort for the cute (and tasty) outcome!', 'كعكة النبيذ الساخنة هذه، طرية ورطبة بشكل رائع، تبدأ بعجينة كعكة بسيطة ميتة. النبيذ الساخن - الذي يدخل في الخليط والثلج وشراب النبيذ الساخن الاختياري - يجلب حموضة تتناسب بشكل جيد مع بهارات العطلات الدافئة. إذا كنت تحب النكهة، وكنت من محبي كأس النبيذ الساخن السنوي، أعتقد حقًا أنك ستحب هذه الكعكة.', 'y', 'https://www.allrecipes.com/thmb/f3tovFudjvNLJNhR-9_ROGEk1xA=/144x95/filters:no_upscale():max_bytes(150000):strip_icc():focal(608x445:610x447)/5125477_PannaCotta4x3-c1bc6586f79741ccb62491edb5005dce.jpg', 'img/recorted/CoconutChocolateRiceKrispieTreats.png', 1, 33, 36, 17),
	(26, 3, 2, 'Sticky Toffee Pudding', 'Thumbprint', 'بصمة الإبهام', 'Gingerbear Thumbprint Cookies', 5, 33, ' Sticky toffee pudding is a classic British dessert that\'s easier to make than you think. Serve warm with cream, ice cream, or custard for a delicious, crowd-pleasing dessert. The sponge cake includes finely chopped dates which make it super moist but it doesn\'t taste of dates at all!', 'لقد قمت بإعداد حلوى رايس كريسبيس بشوكولاتة جوز الهند لتغيير الوصفة اليومية العادية قليلاً في أحد الأيام عندما كنت أنا وابني البالغ من العمر 6 سنوات نبحث في المطبخ لنرى ما يمكننا إضافته.', 'n', 'https://www.allrecipes.com/thmb/6N_uhmKS8NrcDP8_rTUqI1_bBUY=/248x165/filters:no_upscale():max_bytes(150000):strip_icc():focal(1999x0:2001x2)/7322-favorite-old-fashioned-gingerbread-DDMFS-4x3-a15c0a20c8824c4cb4300989527f0d2f.jpg', 'img/recorted/GingerbearThumbprintCookies.png', 1, 16, 2, 7),
	(27, 3, 2, 'Brown Butter Caramel Chai Cookies', 'Lemon Bars', 'قضبان الليمون', 'قضبان التوت البري والليمون', 5, 42.9, ' In these chewy brown butter caramel chai cookies, you’ll find brown butter and chai spices are a perfect pair. The dough does need to chill in the fridge for about 30 minutes before baking, so be sure to plan ahead.', 'لقد قمت بإعداد بسكويت بصمة الزنجبيل لأن لدي ثلاثة هواجس في الحياة: #1) الكلاب، #2) الخبز، و #3) الدببة - وهذه البسكويت الرائعة تسمح لي بدمج اثنين من كل ثلاثة من الأشياء المفضلة لدي في حلوى واحدة ! على الرغم من أن فرد العجينة يستغرق وقتًا طويلاً، إلا أن الأمر يستحق بذل جهد إضافي للحصول على نتيجة لطيفة (ولذيذة)!', 'n', 'https://www.allrecipes.com/thmb/DtT2D6xyfuAsdKuIMULvdDUzUHs=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/4576277-raspberry-and-apricot-rugelach-jennibrant-4x3-1-5186f6d9cf23489abcdd9d3664b28a1c.jpg', 'img/recorted/CranberryLemonBars.png', 1, 28, 17, 8),
	(28, 3, 1, 'Poppy Seed and Walnut Roll', 'Pecan Pie', 'فطيرة الجوز', 'فطيرة البقان من الشيف جون براونيز', 5, 22.3, ' This poppy seed and walnut roll is a version of a popular and delicious Croatian sweet yeast bread with two fillings, poppy seed-raisin, and walnut-raisin. ', 'نحن نحب ألواح الليمون والتوت البري هذه كثيرًا لدرجة أنني أملأ الفريزر بالتوت البري الطازج قبل موسم العطلات، لذلك يمكن الاستمتاع بهذه الحلوى طوال العام.', 'n', 'https://www.allrecipes.com/thmb/uAV1c8V_7BPQB2_9OpNAQuTK0U0=/282x188/filters:no_upscale():max_bytes(150000):strip_icc():focal(1999x0:2001x2)/8400036_Mulled-Wine-Cake_Chef-John_4x3-2b2b4fad36bf419d9e5d5fa946de6047.jpg', 'img/recorted/ChefJohnPecanPieBrownies.png', 1, 18, 1, 6),
	(29, 3, 2, 'Cranberry Lemon Bars', 'Banana Pudding', 'بودينج الموز', 'بودنغ الموز المغطى بالميرنغ', 5, 33.2, ' We like these cranberry lemon bars so much that I load up my freezer with fresh cranberries heading into the holiday season, so this dessert can be enjoyed all year.', 'كعكات فطيرة البقان هذه هي الشيء الوحيد الذي إذا كنت قد تناولت فطيرة البقان من قبل وفكرت، "هذا رائع، لكنني أتمنى أن تكون هذه القشرة كعكة براوني." رغبتك أصبحت الآن حقيقة واقعة. كنت متأكدًا من أن هذه التجربة لن تنجح، لكنها نجحت حقًا، حقًا، وهذه الكعكة الفادحة مع طبقة فطيرة البقان المخبوزة في الأعلى لذيذة بشكل لا يصدق.', 'n', 'https://www.allrecipes.com/thmb/qqks-O1Oy4R4XjQeBhkyolUdGhg=/282x188/filters:no_upscale():max_bytes(150000):strip_icc():focal(1999x0:2001x2)/8386823_Butternut-Squash-Cheesecake_Chef-John_4x3-6e8ff7d8cb10482d97e1e10bb3fa6d30.jpg', 'img/recorted/MeringueToppedBananaPudding.png', 1, 9, 3, 2),
	(30, 3, 1, 'Churro Bundt Cake', 'Chocolate Cinnamon', 'شوكولاتة بالقرفة', 'من المستحيل مقاومة هذه الشوكولاتة البيضاء والقرفة المحمصة (وهي تقدم هدايا رائعة)', 5, 63.1, ' This cinnamon-flavored churro Bundt cake is topped with dulce de leche— a truly stunning dessert.', 'يتم تثبيت المرينغ الموجود في بودنغ الموز المغطى بالمرنغ بواسطة كريمة التارتار الحمضية، مما يساعده على الحفاظ على شكله للانقضاضات والدوامات الزخرفية. تجنب استخدام الوعاء النحاسي الذي يتفاعل مع الحمض وقد يؤدي إلى تغير لون المرنغ.', 'n', 'https://www.allrecipes.com/thmb/Jh6C__LClVAhlmjIt7ctguf85rY=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/8363654-sweet-potato-dump-cake-ddmfs-3x4-10722-2592297c1363477397fe08fa38977660.jpg', 'img/recorted/TheseWhiteChocolateCinnamonToast.png', 1, 35, 15, 25),
	(31, 4, 1, 'Sazerac Cocktail', 'Sazerac Cocktail', 'كوكتيل سازيراك', 'كوكتيل سازيراك', 5, 38.6, ' There\'s a lot to love about this classic whiskey and bitters beverage. The official drink of New Orleans, the Sazerac is every bit as aromatic and flavorful as most anything else from down on the bayou.', 'هناك الكثير مما ستحبه في مشروب الويسكي والبيتر الكلاسيكي هذا. المشروب الرسمي لنيو أورليانز، Sazerac هو عطري ولذيذ تمامًا مثل أي شيء آخر من أسفل النهر.', 'n', 'https://www.allrecipes.com/thmb/Rk41ES5kSiU5nbsb7M8s462HYOY=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/20160526_old-fashioned-cocktails_meredith-2000-193d2a03d0e94cc1b2da826baf94d653.jpg', 'img/recorted/SazeracCocktail.png', 1, 32, 28, 18),
	(32, 4, 1, 'Stout and Ale', 'Stout and Ale', 'شجاع والبيرة', 'شجاع والبيرة', 5, 59.3, ' This "black and tan" beer cocktail recipe is a St. Patrick\'s Day staple at our house. Don\'t be fooled by the simple ingredients... The trick is getting them to layer just right. The key is to pour the stout slowly. Enjoy!', 'تعتبر وصفة كوكتيل البيرة "السوداء والتان" من العناصر الأساسية في عيد القديس باتريك في منزلنا. لا تنخدع بالمكونات البسيطة... فالخدعة تكمن في جعلها تشكل طبقات بشكل صحيح. المفتاح هو صب الشجاع ببطء. يتمتع!', 'n', 'https://www.allrecipes.com/thmb/P-xegJjTSL23PQKW9EtZVyCp70I=/144x95/filters:no_upscale():max_bytes(150000):strip_icc():focal(1823x0:1825x2)/5265853-6752b9073f954ee2b584140795e5abd8.jpg', 'img/recorted/StoutandAle.png', 1, 3, 33, 35),
	(33, 4, 1, 'Aperol Sour', 'Limoncello ', 'ليمونسيلو', 'كريما دي ليمونسيلو (كريم ليمونسيلو)', 5, 20.7, ' This Aperol sour is a twist on a whiskey sour that uses Aperol and gin instead of whiskey, resulting in a citrusy, herbal cocktail. Chill your glass in the freezer while preparing the cocktail.', 'ما هو كريما دي ليمونسيلو؟ كريم الليمونسيلو هو الإجابة المثالية على سؤال "ماذا تفعل عندما تعطيك الحياة الليمون؟" أنت تصنع ليمونسيلو! وهذه النسخة الكريمية والليمونية هي النهاية المثالية لوجبة لذيذة. لقد أحضرت دائمًا بعضًا منها من رحلاتنا إلى إيطاليا، لكنني الآن أصنعها بنفسي في المنزل.', 'y', 'https://www.allrecipes.com/thmb/tvRrfE8jwGWWZbOi1AhMfCL2zwU=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/3620391-simple-moscow-mule-photo-by-bibi-edited-44c40474691e48bea490db9abf5c0d3c.jpg', 'img/recorted/CremadiLimoncello.png', 1, 8, 17, 29),
	(34, 4, 1, 'Crema di Limoncello (Cream of Limoncello)', 'Cranberry Juice', 'عصير التوت البري', 'عصير توت بري مطحون', 5, 7.5, ' What is crema di limoncello? Cream of limoncello is the perfect answer to the question “what do you do when life gives you lemons?” You make limoncello! And this creamy, lemony version is the perfect end to a delicious meal. I’ve always brought some back from our trips to Italy, but now I make my own at home.', 'قم بتقديم عصير التوت البري هذا في اجتماعك القادم - فهذه الحلوى الرائعة ستجعل ضيوفك في مزاج عطلة. إذا أردت، يمكنك ترك السكر وإضافة بعض المشروبات الكحولية البرتقالية، مثل كوانترو، لحشد الحفلة الكبار.', 'n', 'https://www.allrecipes.com/thmb/cYDv6Shbi30ejbvpSg7_0QAP51s=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/Screen-Shot-2020-12-03-at-10.49.04-PM-5b95a855f9a8419f8f0edaf0a14db182.png', 'img/recorted/MulledCranberryJuice.png', 1, 16, 29, 2),
	(35, 4, 1, 'Mulled Cranberry Juice', 'Martini', 'مارتيني', 'سكر كوكي مارتيني', 5, 36.4, ' Serve this mulled cranberry juice at your next gathering—this lovely treat will put your guests in a holiday mood. If you like, you may leave out the sugar and add some orange liqueur, like Cointreau, for the grown-up party crowd.', 'يشبه مارتيني بسكويت السكر هذا كعك السكر المفضل لديك في الكوكتيل، مع نكهة البسكويت التي تأملها فقط. إنها ليست احتفالية فحسب، بل إنها سهلة أيضًا باستخدام عدد قليل من المكونات.', 'n', 'https://www.allrecipes.com/thmb/r60gZsBoJLo4V9Jvi9Wvu-6Dyis=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/9086674-45c11440f8a24f0993c712700859611c.jpg', 'img/recorted/SugarCookieMartini.png', 1, 20, 8, 36),
	(36, 4, 1, 'Sugar Cookie Martini', 'Apple Shots', 'لقطات أبل', 'لقطات التفاح بالكراميل المملح', 5, 37.8, ' This sugar cookie martini is like your favorite holiday sugar cookie in a cocktail, with just the cookie flavor you are hoping for. Not only is it festive, it\'s easy, too, with just a few ingredients.', 'طلقات التفاح بالكراميل المملح تلتقط نكهات السقوط في كوب. إنهم حلوون ومبهجون. إن تناول قضمة صغيرة من التفاح في النهاية يضيف نكهة الحنين لتفاح الكرنفال بالكراميل.', 'y', 'https://www.allrecipes.com/thmb/zTNPWd43BWfPT5azAoTzO83brvA=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/8405347_Aperol-Sour_France-C_4x3-cb0412f1a4774f6bb335e1a7edae0a86.jpg', 'img/recorted/SaltedCaramelAppleShots.png', 1, 24, 28, 22);

-- Dumping structure for table sultandb.tb_order_dishes
DROP TABLE IF EXISTS `tb_order_dishes`;
CREATE TABLE IF NOT EXISTS `tb_order_dishes` (
  `id_order_dish` int NOT NULL AUTO_INCREMENT,
  `id_order_registered` int NOT NULL,
  `id_dish` int NOT NULL,
  `amoun_dish` int NOT NULL,
  PRIMARY KEY (`id_order_dish`),
  KEY `FK_tb_order_dishes_tb_order_resgistered` (`id_order_registered`),
  KEY `FK_tb_order_dishes_tb_dish` (`id_dish`),
  CONSTRAINT `FK_tb_order_dishes_tb_dish` FOREIGN KEY (`id_dish`) REFERENCES `tb_dish` (`id_dish`),
  CONSTRAINT `FK_tb_order_dishes_tb_order_resgistered` FOREIGN KEY (`id_order_registered`) REFERENCES `tb_order_resgistered` (`id_order_registered`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table sultandb.tb_order_dishes: ~15 rows (approximately)
REPLACE INTO `tb_order_dishes` (`id_order_dish`, `id_order_registered`, `id_dish`, `amoun_dish`) VALUES
	(1, 1, 7, 5),
	(2, 2, 1, 6),
	(3, 2, 7, 5),
	(4, 3, 1, 6),
	(5, 3, 13, 8),
	(6, 3, 7, 5),
	(7, 4, 1, 6),
	(8, 4, 13, 8),
	(9, 4, 7, 5),
	(10, 5, 9, 5),
	(11, 5, 15, 4),
	(12, 6, 19, 2),
	(13, 6, 54, 3),
	(14, 7, 9, 2),
	(15, 7, 15, 2),
	(16, 8, 11, 2);

-- Dumping structure for table sultandb.tb_order_resgistered
DROP TABLE IF EXISTS `tb_order_resgistered`;
CREATE TABLE IF NOT EXISTS `tb_order_resgistered` (
  `id_order_registered` int NOT NULL AUTO_INCREMENT,
  `id_user` int NOT NULL,
  `id_order_type` int NOT NULL,
  `date_time` datetime NOT NULL,
  `direction` text,
  PRIMARY KEY (`id_order_registered`),
  KEY `id_order_type` (`id_order_type`),
  KEY `FK_tb_order_resgistered_tb_users` (`id_user`),
  CONSTRAINT `FK_tb_order_resgistered_tb_order_type` FOREIGN KEY (`id_order_type`) REFERENCES `tb_order_type` (`id_order_type`),
  CONSTRAINT `FK_tb_order_resgistered_tb_users` FOREIGN KEY (`id_user`) REFERENCES `tb_users` (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table sultandb.tb_order_resgistered: ~8 rows (approximately)
REPLACE INTO `tb_order_resgistered` (`id_order_registered`, `id_user`, `id_order_type`, `date_time`, `direction`) VALUES
	(1, 4, 2, '2023-11-15 14:56:53', 'disney'),
	(2, 1, 2, '2023-11-15 15:01:34', 'disney'),
	(3, 1, 1, '2023-11-15 15:04:39', NULL),
	(4, 4, 1, '2023-11-15 15:09:26', NULL),
	(5, 1, 2, '2023-11-28 08:42:07', 'disney'),
	(6, 1, 1, '2023-11-28 08:48:01', NULL),
	(7, 1, 1, '2023-11-28 10:30:56', NULL),
	(8, 1, 1, '2023-11-28 10:31:30', NULL);

-- Dumping structure for table sultandb.tb_order_type
DROP TABLE IF EXISTS `tb_order_type`;
CREATE TABLE IF NOT EXISTS `tb_order_type` (
  `id_order_type` int NOT NULL AUTO_INCREMENT,
  `name_order_type` text NOT NULL,
  PRIMARY KEY (`id_order_type`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table sultandb.tb_order_type: ~2 rows (approximately)
REPLACE INTO `tb_order_type` (`id_order_type`, `name_order_type`) VALUES
	(1, 'Lounge'),
	(2, 'Express'),
	(3, 'Pick up');

-- Dumping structure for table sultandb.tb_users
DROP TABLE IF EXISTS `tb_users`;
CREATE TABLE IF NOT EXISTS `tb_users` (
  `id_user` int NOT NULL AUTO_INCREMENT,
  `fullname` text NOT NULL,
  `username` text NOT NULL,
  `email` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `password` text NOT NULL,
  `admin` int NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table sultandb.tb_users: ~3 rows (approximately)
REPLACE INTO `tb_users` (`id_user`, `fullname`, `username`, `email`, `password`, `admin`) VALUES
	(1, 'Nua', 'ilovepollito', 'ilovepollito@gmail.com', '$2y$10$iwsiFJ5xqaNVNY0wJNCuPOmoFfWQPPLDz0eRgkBY6wCVWwg7SQtCG', 1),
	(2, 'Duerme mucho', 'Mati', 'ilovesleep@gmail.com', '$2y$10$IuAeH.p70nHcTLYg3NRF3uvT2NM/LomMEqOYeN7URwlh4LsomDsWW', 1),
	(3, 'Duerme mucho', 'Mati2', 'ilovesleep2@gmail.com', '$2y$10$fYiNjaZ90eqVA4U9e9IlKut1.3BpMD8.1YRaxEuBGR03fcIn19lLu', 1),
	(4, 'admin ', 'admin', 'admin@gmail.com', '$2y$10$oed7HOD8.X/4qlLVeFxRoed89eqGTbxUG2My9VdLlzsj2rL0XN2c6', 2);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
