<?php
require_once './database.php';
$categories = $database->select("tb_category", "*");

$people = $database->select("tb_amount_people", "*");

$dishes = $database->select("tb_dish", [
    "tb_dish.id_dish",
    "tb_dish.id_category",
    "tb_dish.id_amount_people",
    "tb_dish.namel",
    "tb_dish.namel_ar",
    "tb_dish.names",
    "tb_dish.names_ar",
    "tb_dish.qualification",
    "tb_dish.price",
    "tb_dish.description",
    "tb_dish.description_ar",
    "tb_dish.popular",
    "tb_dish.img",
    "tb_dish.img_recorted",
    "tb_dish.visible",
    "tb_dish.related_dish_one",
    "tb_dish.related_dish_two",
    "tb_dish.related_dish_three",
]);

$message = "";

if (isset($_FILES["img_recorted"]) && isset($_FILES["img"])) {


    $errors = [];
    $file_name = $_FILES["img"]["name"];
    $file_tmp = $_FILES["img"]["tmp_name"];
    $file_type = $_FILES["img"]["type"];
    $file_ext_arr = explode(".", $_FILES["img"]["name"]);

    $file_ext = end($file_ext_arr);
    $img_ext = ["jpeg", "png", "jpg", "webp"];

    if (!in_array($file_ext, $img_ext)) {
        $errors[] = "File type is not supported";
        $message = "File type is not supported";
    }

    if (empty($errors)) {
        $filename = strtolower($_POST["names"]);
        $filename = str_replace(',', '', $filename);
        $filename = str_replace('.', '', $filename);
        $filename = str_replace(' ', '-', $filename);
        $img = "./img/" . $filename . "." . $file_ext;
        move_uploaded_file($file_tmp, $img);

        $errors_recorted = [];
        $file_name_recorted = $_FILES["img_recorted"]["name"];
        $file_tmp_recorted = $_FILES["img_recorted"]["tmp_name"];
        $file_type_recorted = $_FILES["img_recorted"]["type"];
        $file_ext_arr_recorted = explode(".", $_FILES["img_recorted"]["name"]);

        $file_ext_recorted = end($file_ext_arr_recorted);
        $img_ext_recorted = ["jpeg", "png", "jpg", "webp"];

        if (!in_array($file_ext_recorted, $img_ext_recorted)) {
            $errors_recorted[] = "File type is not supported";
            $message = "File type is not supported";
        }

        if (empty($errors_recorted)) {
            $filename = strtolower($_POST["namel"]);
            $filename = str_replace(',', '', $filename);
            $filename = str_replace('.', '', $filename);
            $filename = str_replace(' ', '-', $filename);
            $img_recorted = "./img/" . $filename . "." . $file_ext_recorted;
            move_uploaded_file($file_tmp_recorted, $img_recorted);


            // Reference: https://medoo.in/api/insert
            $database->insert("tb_dish", [
                "id_category" => $_POST["id_category"],
                "id_amount_people" => $_POST["id_amount_people"],
                "namel" => $_POST["namel"],
                "namel_ar" => $_POST["namel_ar"],
                "names" => $_POST["names"],
                "names_ar" => $_POST["names_ar"],
                "price" => $_POST["price"],
                "description" => $_POST["description"],
                "description_ar" => $_POST["description_ar"],
                "popular" => ($_POST["popular"] == "yes") ? "y" : "n",
                "price" => $_POST["price"],
                "img" => $img,
                "img_recorted" => $img_recorted,
                "tb_dish.related_dish_one" => $_POST["related_dish_one"],
                "tb_dish.related_dish_two" => $_POST["related_dish_two"],
                "tb_dish.related_dish_three" => $_POST["related_dish_three"]
            ]);
        };
    };
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrator</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhaijaan+2:wght@400;500;600;700;800&family=Lalezar&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/main.css">
</head>

<body>
    <header>

        <!-- nav -->
        <?php
        include "./parts/nav.php"
        ?>
        <!-- nav -->

    </header>

    <div class="registation-container">
        <div class="options-container">
            <a class="button button-admin" href="admin.php">Register Dish</a>
            <a class="button button-admin" href="dish-list.php">List of Dishes</a>
        </div>
        <form method="post" action="admin.php" enctype="multipart/form-data">
            <div class="information-container">
                <h2 class="tittle-admin">Register dish</h2>
                <h3 class="tittle-admin subtittle-admin">Information Part</h3>
                <div class="information-part">
                    <div class="input-box">
                        <input id="name-english" type="text" name="namel" required="">
                        <label for="name-english">Name in English</label>
                    </div>
                    <div class="input-box">
                        <input id="name-arabict" type="text" name="namel_ar" required="">
                        <label for="name-arabict">Name in Arabic</label>
                    </div>
                    <div class="input-box">
                        <input id="sname" type="text" name="names" required="">
                        <label for="sname">Short Name</label>
                    </div>
                    <div class="input-box">
                        <input id="sname-arabict" type="text" name="names_ar" required="">
                        <label for="sname-arabict"> Short Name in Arabic</label>
                    </div>
                    <div class="input-box">
                        <textarea rows="6" cols="40" name="description" required="" id="description-english"></textarea>
                        <label for="description-english">Description in English</label>
                    </div>
                    <div class="input-box">
                        <textarea rows="6" cols="40" name="description_ar" required="" id="description-arabict"></textarea>
                        <label for="description-arabict">Description in Arabic</label>
                    </div>
                    <div class="input-box">
                        <input id="price" type="text" name="price" required pattern="\d+" title="Enter only numbers in this field">
                        <label for="price">Price</label>
                    </div>
                </div>
                <h3 class="tittle-admin subtittle-admin">Select Part</h3>
                <div class="information-part">
                    <div class="input-box">
                        <label class="label-section" for="categories">Categories</label>
                        <select name="id_category" id="categories">
                            <?php
                            foreach ($categories as $category) {
                                echo "<option value='" . $category["id_category"] . "'>" . $category["name_categories"] . "</option>";
                            }
                            ?>
                        </select>
                    </div>
                    <div class="input-box">
                        <label class="label-section" for="amount_people">Amount People</label>
                        <select name="id_amount_people" id="amount_people">
                            <?php
                            foreach ($people as $person) {
                                echo "<option value='" . $person["id_amount_people"] . "'>" . $person["name_amount_people"] . "</option>";
                            }
                            ?>
                        </select>
                    </div>
                    <div class="input-box">
                        <label class="label-section" for="related_dish_one">Related Dish One</label>
                        <select name="related_dish_one" id="related_dish_one">
                            <?php
                            foreach ($dishes as $dish) {
                                echo "<option value='" . $dish["id_dish"] . "'>" . $dish["namel"] . "</option>";
                            }
                            ?>
                        </select>
                    </div>
                    <div class="input-box">
                        <label class="label-section" for="related_dish_two">Related Dish Two</label>
                        <select name="related_dish_two" id="related_dish_two">
                            <?php
                            foreach ($dishes as $dish) {
                                echo "<option value='" . $dish["id_dish"] . "'>" . $dish["namel"] . "</option>";
                            }
                            ?>
                        </select>
                    </div>
                    <div class="input-box">
                        <label class="label-section" for="related_dish_three">Related Dish Three</label>
                        <select name="related_dish_three" id="related_dish_three">
                            <?php
                            foreach ($dishes as $dish) {
                                echo "<option value='" . $dish["id_dish"] . "'>" . $dish["namel"] . "</option>";
                            }
                            ?>
                        </select>
                    </div>
                    <div class="container-add-dish">
                        <label class="label-section" for="popular">Popular</label>
                        <div class="radio-options">
                            <input type="radio" value="yes" name="popular" id="popular-yes">
                            <label class="radio-label" for="popular-yes">Yes</label>

                            <input type="radio" value="no" name="popular" id="popular-no" checked>
                            <label class="radio-label" for="popular-no">No</label>
                        </div>
                    </div>
                </div>
                <h3 class="tittle-admin subtittle-admin">Images</h3>
                <div class="information-part">
                    <div>
                        <label for="input-file" class="drop-area" id="drop-area">
                            <input type="file" accept="image/*" id="input-file" hidden name="img" onchange="readURL(this)">
                            <div id="img-view" class="img-view">
                                <img id="short-image" class="short-image" src="./img/cloud-computing.svg" alt="image about someting">
                                <p id="p-file" class="admin-text">Drag and drop or click here to upload image</p>
                                <span>Upload any images from desktop</span>
                            </div>
                        </label>
                    </div>
                    <div>
                        <label for="input-recort" class="drop-area drop-area-recort" id="drop-area-recort">
                            <input type="file" accept="image/*" id="input-recort" hidden name="img_recorted" onchange="readURL(this)">
                            <div id="img-view-recort" class="img-view img-view-recort">
                                <img id="short-image-recort" class="short-image" src="./img/cloud-computing.svg" alt="image about someting">
                                <p id="p-file-recort " class="p-file-recort admin-text">Click here to upload image</p>
                            </div>
                        </label>
                    </div>
                </div>
            </div>
            <div class="admin-addcontainer">
                <input class=" button-forget btn-add admin-text" type="submit" name="add" value="Add food">
            </div>

        </form>
    </div>

    <script src="./js/admin.js"></script>
    <script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                let reader = new FileReader();

                reader.onload = function(e) {
                    let preview = document.getElementById('preview').setAttribute('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>

</body>

</html>