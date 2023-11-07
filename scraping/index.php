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
// for ($i = 0; $i < 20; $i++) {
//     if ($i == 7 || $i == 8 || $i == 9 || $i == 10 || $i == 12 || $i == 13 || $i == 14 || $i == 15 || $i == 18 || $i == 19) {
//     } else {
//         $rand = rand(1 * 10, 70 * 10) / 10;
//         $database->insert("tb_dish", [
//             "id_category" => $id_category,
//             "name_l" => $menu_item_names[$i],
//             "description" => $menu_item_descriptions[$i],
//             "img_recorted" => $image_urls[$i],
//             "price" => $rand
//         ]);
//     }
// }
?>
<!--  MAIN DISHES -->
<!--  MAIN DISHES -->

<!--  SALADS -->
<!--  SALADS -->
<?php
require_once '../database.php';

include('simple_html_dom.php');

//link
$link = "https://www.allrecipes.com/recipes/96/salad/";

$filenames = [];
$menu_item_names = [];
$menu_item_descriptions = [];
$image_urls = [];

$menu_items = 20;
$id_category = 2;

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

for ($i = 0; $i < 20; $i++) {
    if ($i == 7 || $i == 8 || $i == 9 || $i == 10 || $i == 12 || $i == 13 || $i == 14 || $i == 15 || $i == 18 || $i == 19) {
    } else {
        $rand = rand(1 * 10, 70 * 10) / 10;
        $database->insert("tb_dish", [
            "id_category" => $id_category,
            "name_l" => $menu_item_names[$i],
            "description" => $menu_item_descriptions[$i],
            "img_recorted" => $image_urls[$i],
            "price" => $rand
        ]);
    }
}
?>
<!--  SALADS -->
<!--  SALADS -->