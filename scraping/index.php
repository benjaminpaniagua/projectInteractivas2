<!--  MAIN DISHES -->
<!--  MAIN DISHES -->

<?php
// require_once '../database.php';

// include('simple_html_dom.php');

// //link
// $link = "https://www.allrecipes.com/recipes/1824/world-cuisine/middle-eastern/lebanese/";

// $filenames = [];
// $menu_item_names = [];
// $menu_item_descriptions = [];
// $image_urls = [];
// $names = [];
// $names_ar = [];
// $description_ar = [];

// $menu_items = 20;
// $id_category = 1;

// $items = file_get_html($link);

// //save meals info and filenames for the images
// foreach ($items->find('.card--no-image') as $item) {

//     $title = $item->find('.card__title-text');
//     $details = file_get_html($item->href);
//     $description = $details->find('.article-subheading');
//     $image = $details->find('.primary-image__image');

//     if (count($image) > 0) {
//         $image_urls[] = $image[0]->src;
//     } else {
//         $replace_img = $item->find('.universal-image__image');
//         if (count($replace_img) > 0) {
//             $image_urls[] = $replace_img[0]->{'data-src'};
//         }
//     }

//     if (count($description) > 0) {
//         if ($menu_items == 0) break;

//         $menu_item_names[] = trim($title[0]->plaintext);
//         $menu_item_descriptions[] = $description[0]->plaintext;

//         $filename = strtolower(trim($title[0]->plaintext));
//         $filename = str_replace(' ', '-', $filename);
//         $filenames[] = $filename;

//         $menu_items--;
//     }
// }

// $names = ['Mountain Bread', 'Seven Spices', 'Fattoush', 'Hummus', 'Chicken Shawarma', 'Chicken and Potatoes', 'Lamb Shawarma', 'Kibbeh', 'Chard ', 'Lentil Soup'];
// $names_ar = ['خبز الجبل', 'سبع بهارات', 'فتوش', 'الحمص', 'شاورما الدجاج', 'دجاج وبطاطس', 'شاورما لحم ضأن', 'كبة', 'السلق', 'شوربة العدس'];
// $description_ar = ['أقدم هذا مرة واحدة على الأقل في الأسبوع مع وجبة دجاج أو شريحة لحم أو كوجبة خفيفة سريعة. هذه هي وصفة الحمص الأساسية وهي بسيطة ولكنها لذيذة. تعلمت من جدي الراحل الذي كان من أصل لبناني. يقدم مع الخبز العربي الطازج.', 'مزيج التوابل اللبناني المكون من 7 بهارات سيضيف نكهات دافئة إلى الكثير من الأطباق! جربه على الدجاج أو البيض أو في ماء مالح.', 'وصفة الفتوش هذه عبارة عن سلطة ملونة مع صلصة الثوم والليمون. الفتوش هي واحدة من السلطات الشرق أوسطية الأكثر شهرة وطبق قياسي على طاولة المزة (الأطباق الصغيرة). إذا لم تقم بإعداد طبق عربي واحد من قبل، فهذا مكان لذيذ وصحي للبدء.', 'أقدم هذا مرة واحدة على الأقل في الأسبوع مع وجبة دجاج أو شريحة لحم أو كوجبة خفيفة سريعة. هذه هي وصفة الحمص الأساسية وهي بسيطة ولكنها لذيذة. تعلمت من جدي الراحل الذي كان من أصل لبناني. يقدم مع الخبز العربي الطازج.', 'ساندويتش لبناني رائع يقدم في معظم المطاعم اللبنانية. يمكن تقديمه مع صلصة الطحينة أو التوم.', 'طبق لبناني تقليدي من الدجاج والبطاطس المشوية، تعلمته من أمي. بسيطة بشكل لا يصدق، ولكن لذيذ جدا من أي وقت مضى.', 'هذا طبق شرق أوسطي رائع تعرفت عليه من قبل صديق لي من لبنان. تنتج هذه الوصفة منتجًا نهائيًا رائعًا ومذاقًا رائعًا. يمكن استخدام الشاورما مع خبز البيتا أو وضعها على الفتوش أو الحمص أو تناولها سادة.', 'الكبة هي طبق رائع من الشرق الأوسط يُصنع تقليديًا من لحم الضأن ولكن لحم البقر مقبول أيضًا. أنا أفضل أن يتم صنعها على شكل فطائر ومقلية بزيت الزيتون. ومع ذلك، غالبا ما توجد في المطاعم في شكل مخبوز. تُقدم الكبة مع الطحينة ومعجون السمسم.', 'من السهل تحضير شوربة نباتية لذيذة للغاية.', 'حساء العدس الأحمر اللبناني سريع التحضير ذو لون مشمس جميل بفضل العدس الأحمر. يُزيّن برذاذ من زيت الزيتون ورشة من الفلفل الحلبي، إذا رغبت في ذلك.'];
// $namel_ar = ['خبز الجبل اللبناني', 'البهارات السبعة اللبنانية', 'سلطة الفتوش العربي', 'أفضل حمص', 'شاورما الدجاج', 'دجاج لبناني و بطاطا', 'شاورما لحم ضأن', 'كبة شرق أوسطية', 'شوربة العدس بالسلق على الطريقة اللبنانية', 'شوربة العدس اللبنانية سريعة التحضير (شربات عدس)'];

// foreach ($filenames as $i => $item) {
//     echo "......................";
//     echo "<br>";
//     echo $item;
//     echo "<br>";
//     echo $menu_item_names[$i];
//     echo "<br>";
//     echo $menu_item_descriptions[$i];
//     echo "<br>";
//     echo $image_urls[$i];
//     echo "<br>";
//     echo rand(1 * 10, 70 * 10) / 10;
//     echo "<br>";
//     //$menu_items--;
//     //if($menu_items == 0) break;
// }

// //get and download images
// //  foreach ($filenames as $index=>$image){
// //      file_put_contents("../img/scraping_img/".$image.".jpg", file_get_contents($image_urls[$index]));
// //  }


// $index = 0;
// for ($i = 0; $i < 20; $i++) {
//     if ($i == 7 || $i == 8 || $i == 9 || $i == 10 || $i == 12 || $i == 13 || $i == 14 || $i == 15 || $i == 18 || $i == 19) {
//     } else {
//         $rand = rand(1 * 10, 70 * 10) / 10;
//         $id_amount_people = rand(1, 3);
//         $database->insert("tb_dish", [
//             "id_category" => $id_category,
//             "names" => $names[$index],
//             "names_ar" => $names_ar[$index],
//             "namel_ar" => $namel_ar[$index],
//             "description_ar" => $description_ar[$index],
//             "namel" => $menu_item_names[$i],
//             "description" => $menu_item_descriptions[$i],
//             "img" => $image_urls[$i],
//             "id_amount_people" => $id_amount_people,
//             "price" => $rand
//         ]);
//         $index++;
//     }
// }
?>
<!--  MAIN DISHES -->
<!--  MAIN DISHES -->

<?php
// require_once '../database.php';

// include('simple_html_dom.php');

// //link
// $link = "https://www.allrecipes.com/recipes/96/salad/";

// $filenames = [];
// $menu_item_names = [];
// $menu_item_descriptions = [];
// $image_urls = [];

// $menu_items = 20;
// $id_category = 2;

// $items = file_get_html($link);

// //save meals info and filenames for the images
// foreach ($items->find('.card--no-image') as $item) {

//     $title = $item->find('.card__title-text');
//     $details = file_get_html($item->href);
//     $description = $details->find('.article-subheading');
//     $image = $details->find('.primary-image__image');

//     if (count($image) > 0) {
//         $image_urls[] = $image[0]->src;
//     } else {
//         $replace_img = $item->find('.universal-image__image');
//         if (count($replace_img) > 0) {
//             $image_urls[] = $replace_img[0]->{'data-src'};
//         }
//     }

//     if (count($description) > 0) {
//         if ($menu_items == 0) break;

//         $menu_item_names[] = trim($title[0]->plaintext);
//         $menu_item_descriptions[] = $description[0]->plaintext;

//         $filename = strtolower(trim($title[0]->plaintext));
//         $filename = str_replace(' ', '-', $filename);
//         $filenames[] = $filename;

//         $menu_items--;
//     }
// }

// foreach ($filenames as $i => $item) {
//     echo "......................";
//     echo "<br>";
//     echo $item;
//     echo "<br>";
//     echo $menu_item_names[$i];
//     echo "<br>";
//     echo $menu_item_descriptions[$i];
//     echo "<br>";
//     echo $image_urls[$i];
//     echo "<br>";
//     echo rand(1 * 10, 70 * 10) / 10;
//     echo "<br>";
//     //$menu_items--;
//     //if($menu_items == 0) break;
// }

// //get and download images
// //  foreach ($filenames as $index=>$image){
// //      file_put_contents("../img/scraping_img/".$image.".jpg", file_get_contents($image_urls[$index]));
// //  }

// // Reference: https://medoo.in/api/insert

// $names = ['Butternut', 'Couscous', 'Pecan Chicken', 'Coleslaw', 'Avocado Salad', 'Gorgonzola Salad', 'Green Goddess', 'Pomegranate Salad', 'Mint Salad ', 'Cauliflower Salad'];
// $names_ar = ['الجوز', 'الكسكس', 'دجاج البقان', 'سلطة الكرنب', 'سلطة الافوكادو', 'سلطة جورجونزولا', 'إلهة الخضراء', 'سلطة الرمان', 'سلطة النعناع ', 'سلطة القرنبيط'];
// $description_ar = ['حساء العدس الأحمر اللبناني سريع التحضير ذو لون مشمس جميل بفضل العدس الأحمر. يُزيّن برذاذ من زيت الزيتون ورشة من الفلفل الحلبي، إذا رغبت في ذلك.', 'يتم تقديم سلطة القرع مع الزبيب والبصل ولحم الخنزير المقدد المقرمش والخس الروماني دافئة. بسيطة ولذيذة!', 'تستخدم سلطة الكسكس اليونانية الشهية الكسكس الإسرائيلي. لذيذ جدا!', 'سلطة دجاج البقان المصنوعة من الدجاج المطبوخ المفروم والأعشاب والكرفس وجوز البقان والبصل الأحمر وصلصة كريمية محلية الصنع لذيذة حقًا. يُقدم الطبق فوق الكرواسون المحمص أو الخس بالزبدة.', 'للحصول على سلطة الكرنب التي تبدو مشابهة لما تجده في كنتاكي، نقترح تقطيع مزيج سلطة الكرنب قبل خلطه مع الصلصة.', 'هذه السلطة مع قلوب النخيل والأفوكادو لذيذة وتقدم فوق الخس، داخل أكواب الخس، أو بجانب رقائق التورتيا كغموس.', 'صلصة الخل البسيطة تزين هذه السلطة الجميلة المغطاة بحبات الرمان، وتبدو وكأنها جواهر صغيرة. أضف شرائح الكمثرى الحمراء الطازجة الحلوة، وبعض فتات جورجونزولا اللاذعة، وبعض الجوز المحمص قليلاً والبصل الأخضر المفروم إلى طبقة من الخضر، وسوف تستمتع بهذه السلطة في حوالي 25 دقيقة!', 'سلطة رومين بسيطة مغطاة بصلصة الآلهة الخضراء الكلاسيكية المصنوعة من المايونيز والبقدونس والسبانخ والريحان والطرخون وعصير الليمون.', 'البرتقال الحلو، واليوسفي، والجريب فروت روبي، وحبوب الرمان تشكل سلطة جميلة في أي وقت من اليوم، أو أي مناسبة. الملابس البسيطة تكملها بشكل مثالي. استخدمي أي مزيج من الحمضيات الحلوة الطازجة.', 'تظهر سلطة البطيخ والفيتا والنعناع كثيرًا في منزلنا خلال فصل الصيف، خاصة عند طهي الطعام بالخارج. تعد جودة زيت الزيتون وجبنة الفيتا أمرًا مهمًا، لذا تفضل وتفاخر قليلاً. إنه منعش ومليء بالنكهات الحلوة والمالحة، ويستغرق إعداده دقائق.', 'إليك سلطة تستخدم القرنبيط المحمص كقاعدة. يضيف لحم الخنزير المقدد المقرمش والمالح ملمسًا مقرمشًا رائعًا إلى هذه السلطة الحلوة والمالحة.'];
// $namel_ar = ['شوربة العدس اللبنانية سريعة التحضير (شربات عدس)','سلطة القرع الجوز المشوي', 'سلطة الكسكس اليونانية', 'سلطة دجاج البقان', 'مقلد كنتاكي فرايد تشيكن كولسلو', 'سلطة قلوب النخيل والأفوكادو', 'سلطة الكمثرى الحمراء والرمان وجورجونزولا', 'سلطة الآلهة الخضراء', 'سلطة الحمضيات والرمان', 'احتفل بالصيف مع سلطة البطيخ والفيتا والنعناع'];


// $index=0;
// for ($i = 0; $i < 20; $i++) {
//     if ($i == 7 || $i == 8 || $i == 9 || $i == 10 || $i == 12 || $i == 13 || $i == 14 || $i == 15 || $i == 18 || $i == 19) {
//     } else {
//         $rand = rand(1 * 10, 70 * 10) / 10;
//         $id_amount_people = rand(1, 3);
//         $database->insert("tb_dish", [
//             "id_category" => $id_category,
//             "names" => $names[$index],
//             "names_ar" => $names_ar[$index],
//             "namel_ar" => $namel_ar[$index],
//             "description_ar" => $description_ar[$index],
//             "namel" => $menu_item_names[$i],
//             "description" => $menu_item_descriptions[$i],
//             "img" => $image_urls[$i],
//             "id_amount_people" => $id_amount_people,
//             "price" => $rand
//         ]);
//         $index++;
//     }
// }
?>


<!--  DESSERTS -->
<!--  DESSERTS -->
<?php
// require_once '../database.php';

// include('simple_html_dom.php');

// //link
// $link = "https://www.allrecipes.com/recipes/79/desserts/";

// $filenames = [];
// $menu_item_names = [];
// $menu_item_descriptions = [];
// $image_urls = [];

// $menu_items = 20;
// $id_category = 3;

// $items = file_get_html($link);

// //save meals info and filenames for the images
// foreach ($items->find('.card--no-image') as $item) {

//     $title = $item->find('.card__title-text');
//     $details = file_get_html($item->href);
//     $description = $details->find('.article-subheading');
//     $image = $details->find('.primary-image__image');

//     if (count($image) > 0) {
//         $image_urls[] = $image[0]->src;
//     } else {
//         $replace_img = $item->find('.universal-image__image');
//         if (count($replace_img) > 0) {
//             $image_urls[] = $replace_img[0]->{'data-src'};
//         }
//     }

//     if (count($description) > 0) {
//         if ($menu_items == 0) break;

//         $menu_item_names[] = trim($title[0]->plaintext);
//         $menu_item_descriptions[] = $description[0]->plaintext;

//         $filename = strtolower(trim($title[0]->plaintext));
//         $filename = str_replace(' ', '-', $filename);
//         $filenames[] = $filename;

//         $menu_items--;
//     }
// }

// foreach ($filenames as $i => $item) {
//     echo "......................";
//     echo "<br>";
//     echo $item;
//     echo "<br>";
//     echo $menu_item_names[$i];
//     echo "<br>";
//     echo $menu_item_descriptions[$i];
//     echo "<br>";
//     echo $image_urls[$i];
//     echo "<br>";
//     echo rand(1 * 10, 70 * 10) / 10;
//     echo "<br>";
//     //$menu_items--;
//     //if($menu_items == 0) break;
// }

// //get and download images
// //  foreach ($filenames as $index=>$image){
// //      file_put_contents("../img/scraping_img/".$image.".jpg", file_get_contents($image_urls[$index]));
// //  }

// // Reference: https://medoo.in/api/insert

// $names = ['Potato Brownies', 'Walnut Roll', 'Dump Cake', 'Wine Cake', 'Krispie Treats', 'Thumbprint', 'Lemon Bars', 'Pecan Pie', 'Banana Pudding', 'Chocolate Cinnamon']; 
// $names_ar = ['براونيز البطاطس', 'رول الجوز', 'تفريغ الكعكة', 'كعكة النبيذ', 'يعامل كريسبي', 'بصمة الإبهام', 'قضبان الليمون', 'فطيرة الجوز', 'بودينج الموز', 'شوكولاتة بالقرفة'];
// $description_ar = ['كعكات البطاطا الحلوة هذه خفيفة ورطبة، ومليئة برقائق الشوكولاتة، ومغطاة بمزيد من رقائق البطاطس وجوز البقان. لن تتذوق البطاطا الحلوة حقًا، لكنها هي ما يمنحها قوامها الفاسد.', 'لفة بذور الخشخاش والجوز هذه هي نسخة من خبز الخميرة الحلوة الكرواتي الشهير واللذيذ مع حشوتين وبذور الخشخاش والزبيب والجوز والزبيب.', 'تشبه كعكة تفريغ البطاطا الحلوة السهلة هذه طاجن البطاطا الحلوة، نسخة الحلوى. زبداني وحلو، مع قمة مقرمشة، ستكون ناجحًا في كل وجبة خريفية تتم دعوتك إليها.', 'تشبه كعكة تفريغ البطاطا الحلوة السهلة هذه طاجن البطاطا الحلوة، نسخة الحلوى. زبداني وحلو، مع قمة مقرمشة، ستكون ناجحًا في كل وجبة خريفية تتم دعوتك إليها.', 'كعكة النبيذ الساخنة هذه، طرية ورطبة بشكل رائع، تبدأ بعجينة كعكة بسيطة ميتة. النبيذ الساخن - الذي يدخل في الخليط والثلج وشراب النبيذ الساخن الاختياري - يجلب حموضة تتناسب بشكل جيد مع بهارات العطلات الدافئة. إذا كنت تحب النكهة، وكنت من محبي كأس النبيذ الساخن السنوي، أعتقد حقًا أنك ستحب هذه الكعكة.', 'لقد قمت بإعداد حلوى رايس كريسبيس بشوكولاتة جوز الهند لتغيير الوصفة اليومية العادية قليلاً في أحد الأيام عندما كنت أنا وابني البالغ من العمر 6 سنوات نبحث في المطبخ لنرى ما يمكننا إضافته.', 'لقد قمت بإعداد بسكويت بصمة الزنجبيل لأن لدي ثلاثة هواجس في الحياة: #1) الكلاب، #2) الخبز، و #3) الدببة - وهذه البسكويت الرائعة تسمح لي بدمج اثنين من كل ثلاثة من الأشياء المفضلة لدي في حلوى واحدة ! على الرغم من أن فرد العجينة يستغرق وقتًا طويلاً، إلا أن الأمر يستحق بذل جهد إضافي للحصول على نتيجة لطيفة (ولذيذة)!', 'نحن نحب ألواح الليمون والتوت البري هذه كثيرًا لدرجة أنني أملأ الفريزر بالتوت البري الطازج قبل موسم العطلات، لذلك يمكن الاستمتاع بهذه الحلوى طوال العام.', 'كعكات فطيرة البقان هذه هي الشيء الوحيد الذي إذا كنت قد تناولت فطيرة البقان من قبل وفكرت، "هذا رائع، لكنني أتمنى أن تكون هذه القشرة كعكة براوني." رغبتك أصبحت الآن حقيقة واقعة. كنت متأكدًا من أن هذه التجربة لن تنجح، لكنها نجحت حقًا، حقًا، وهذه الكعكة الفادحة مع طبقة فطيرة البقان المخبوزة في الأعلى لذيذة بشكل لا يصدق.', 'يتم تثبيت المرينغ الموجود في بودنغ الموز المغطى بالمرنغ بواسطة كريمة التارتار الحمضية، مما يساعده على الحفاظ على شكله للانقضاضات والدوامات الزخرفية. تجنب استخدام الوعاء النحاسي الذي يتفاعل مع الحمض وقد يؤدي إلى تغير لون المرنغ.', 'يتم تثبيت المرينغ الموجود في بودنغ الموز المغطى بالمرنغ بواسطة كريمة التارتار الحمضية، مما يساعده على الحفاظ على شكله للانقضاضات والدوامات الزخرفية. تجنب استخدام الوعاء النحاسي الذي يتفاعل مع الحمض وقد يؤدي إلى تغير لون المرنغ.'];
// $namel_ar = ['براونيز البطاطس الحلوة', 'رول بذور الخشخاش والجوز', 'كعكة تفريغ البطاطا الحلوة', 'كعكة النبيذ المسحوق', 'حلوى جوز الهند والشوكولاتة والأرز كريسبي', 'Gingerbear Thumbprint Cookies', 'قضبان التوت البري والليمون', 'فطيرة البقان من الشيف جون براونيز', 'بودنغ الموز المغطى بالميرنغ', 'من المستحيل مقاومة هذه الشوكولاتة البيضاء والقرفة المحمصة (وهي تقدم هدايا رائعة)'];
// $img_recorted=['img/recorted/SweetPotatoBrownies.png','img/recorted/PoppySeedandWalnutRoll.png','img/recorted/SweetPotatoDump.png','img/recorted/MulledWineCake.png','img/recorted/CoconutChocolateRiceKrispieTreats.png','img/recorted/GingerbearThumbprintCookies.png','img/recorted/CranberryLemonBars.png','img/recorted/ChefJohnPecanPieBrownies.png','img/recorted/MeringueToppedBananaPudding.png','img/recorted/TheseWhiteChocolateCinnamonToast.png'];
// $index=0;
// for ($i = 0; $i < 20; $i++) {
//     if ($i == 7 || $i == 8 || $i == 9 || $i == 10 || $i == 12 || $i == 13 || $i == 14 || $i == 15 || $i == 18 || $i == 19) {
//     } else {
//         $rand = rand(1 * 10, 70 * 10) / 10;
//          $id_amount_people = rand(1, 2);
//         $database->insert("tb_dish", [
//             "id_category" => $id_category,
//             "names" => $names[$index],
//             "names_ar" => $names_ar[$index],
//             "namel_ar" => $namel_ar[$index],
//             "description_ar" => $description_ar[$index],
//             "img_recorted" => $img_recorted[$index],
//             "namel" => $menu_item_names[$i],
//             "description" => $menu_item_descriptions[$i],
//             "img" => $image_urls[$i],
//             "id_amount_people" => $id_amount_people,
//             "price" => $rand
//         ]);
//         $index++;
//     }
// }
?>
<!--  DESSERTS -->
<!--  DESSERTS -->

<!--  DRINKS -->
<!--  DRINKS -->
<?php
require_once '../database.php';

include('simple_html_dom.php');

//link
$link = "https://www.allrecipes.com/recipes/77/drinks/";

$filenames = [];
$menu_item_names = [];
$menu_item_descriptions = [];
$image_urls = [];

$menu_items = 6;
$id_category = 4;

$items = file_get_html($link);

//save meals info and filenames for the images
foreach ($items->find('.card--no-image') as $item) {

    $title = $item->find('.card__title-text');
    $details = file_get_html($item->href);
    $description = $details->find('.article-subheading');
    $image = $details->find('.primary-image__image');

    if (count($image) > 0) {
        $image_urls[] = $image[0]->src;
    } else {
        $replace_img = $item->find('.universal-image__image');
        if (count($replace_img) > 0) {
            $image_urls[] = $replace_img[0]->{'data-src'};
        }
    }

    if (count($description) > 0) {
        if ($menu_items == 0) break;

        $menu_item_names[] = trim($title[0]->plaintext);
        $menu_item_descriptions[] = $description[0]->plaintext;

        $filename = strtolower(trim($title[0]->plaintext));
        $filename = str_replace(' ', '-', $filename);
        $filenames[] = $filename;

        $menu_items--;
    }
}

foreach ($filenames as $i => $item) {
    echo "......................";
    echo "<br>";
    echo $item;
    echo "<br>";
    echo $menu_item_names[$i];
    echo "<br>";
    echo $menu_item_descriptions[$i];
    echo "<br>";
    echo $image_urls[$i];
    echo "<br>";
    echo rand(1 * 10, 70 * 10) / 10;
    echo "<br>";
    //$menu_items--;
    //if($menu_items == 0) break;
}

//get and download images
//  foreach ($filenames as $index=>$image){
//      file_put_contents("../img/scraping_img/".$image.".jpg", file_get_contents($image_urls[$index]));
//  }

// Reference: https://medoo.in/api/insert

$names = ['Sazerac Cocktail', 'Stout and Ale', 'Limoncello ', 'Cranberry Juice', 'Martini', 'Apple Shots'];
$names_ar = ['كوكتيل سازيراك', 'شجاع والبيرة', 'ليمونسيلو', 'عصير التوت البري', 'مارتيني', 'لقطات أبل'];
$description_ar = ['هناك الكثير مما ستحبه في مشروب الويسكي والبيتر الكلاسيكي هذا. المشروب الرسمي لنيو أورليانز، Sazerac هو عطري ولذيذ تمامًا مثل أي شيء آخر من أسفل النهر.', 'تعتبر وصفة كوكتيل البيرة "السوداء والتان" من العناصر الأساسية في عيد القديس باتريك في منزلنا. لا تنخدع بالمكونات البسيطة... فالخدعة تكمن في جعلها تشكل طبقات بشكل صحيح. المفتاح هو صب الشجاع ببطء. يتمتع!', 'ما هو كريما دي ليمونسيلو؟ كريم الليمونسيلو هو الإجابة المثالية على سؤال "ماذا تفعل عندما تعطيك الحياة الليمون؟" أنت تصنع ليمونسيلو! وهذه النسخة الكريمية والليمونية هي النهاية المثالية لوجبة لذيذة. لقد أحضرت دائمًا بعضًا منها من رحلاتنا إلى إيطاليا، لكنني الآن أصنعها بنفسي في المنزل.', 'قم بتقديم عصير التوت البري هذا في اجتماعك القادم - فهذه الحلوى الرائعة ستجعل ضيوفك في مزاج عطلة. إذا أردت، يمكنك ترك السكر وإضافة بعض المشروبات الكحولية البرتقالية، مثل كوانترو، لحشد الحفلة الكبار.', 'يشبه مارتيني بسكويت السكر هذا كعك السكر المفضل لديك في الكوكتيل، مع نكهة البسكويت التي تأملها فقط. إنها ليست احتفالية فحسب، بل إنها سهلة أيضًا باستخدام عدد قليل من المكونات.', 'طلقات التفاح بالكراميل المملح تلتقط نكهات السقوط في كوب. إنهم حلوون ومبهجون. إن تناول قضمة صغيرة من التفاح في النهاية يضيف نكهة الحنين لتفاح الكرنفال بالكراميل.'];
$namel_ar = ['كوكتيل سازيراك', 'شجاع والبيرة', 'كريما دي ليمونسيلو (كريم ليمونسيلو)', 'عصير توت بري مطحون', 'سكر كوكي مارتيني', 'لقطات التفاح بالكراميل المملح'];
$img_recorted=['img/recorted/SazeracCocktail.png','img/recorted/StoutandAle.png','img/recorted/CremadiLimoncello.png','img/recorted/MulledCranberryJuice.png','img/recorted/SugarCookieMartini.png','img/recorted/SaltedCaramelAppleShots.png'];
$index = 0;
$id_amount_people = 1;

for ($i = 0; $i <6; $i++) {
    if ($i == 7 || $i == 8 || $i == 9 || $i == 10 || $i == 12 || $i == 13 || $i == 14 || $i == 15 || $i == 18 || $i == 19) {
      } else {
    $rand = rand(1 * 10, 70 * 10) / 10;
    $database->insert("tb_dish", [
        "id_category" => $id_category,
        "names" => $names[$i],
        "names_ar" => $names_ar[$i],
        "namel_ar" => $namel_ar[$i],
        "img_recorted" => $img_recorted[$i],
        "description_ar" => $description_ar[$i],
        "namel" => $menu_item_names[$i],
        "description" => $menu_item_descriptions[$i],
        "img" => $image_urls[$i],
        "id_amount_people" => $id_amount_people,
        "price" => $rand
    ]);
    $index++;
}
}

?>
<!--  DRINKS -->
<!--  DRINKS -->