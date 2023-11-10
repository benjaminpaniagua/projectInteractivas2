<?php 
    require_once './database.php';
    $categories = $database->select("tb_category","*");
    $people= $database->select("tb_amount_people","*");
    $dishes= $database->select("tb_dish",[
        "tb_dish.id_dish",
        "tb_dish.namel",
    ]);


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
            <input class="button button-admin margin-top" type="submit" name="find" value="Find Dish">
            <input class="button button-admin" type="submit" name="register" value="Register Dish">
            <input class="button button-admin" type="submit" name="list" value="List of Dishes">

        </div> 
        <form method="post" action="admin.php"> 
        <div class="information-container">    
        <h2 class="tittle-admin">Register dish</h2>
        <h3 class="tittle-admin subtittle-admin">Information Part</h3>
        <div class="information-part">
            <div class="input-box">
            <input id="name-english" type="text" name="name-english"
             required="">
            <label for="name-english">Name in English</label>
            </div>
            <div class="input-box">
            <input id="name-arabict" type="text" name="name-arabict"
             required="">
            <label for="name-arabict">Name in Arabic</label>
            </div>
            <div class="input-box">
            <input id="sname" type="text" name="sname"
             required="">
            <label for="sname">Short Name</label>
            </div>
            <div class="input-box">
            <input id="sname-arabict" type="text" name="sname-arabict"
             required="">
            <label for="sname-arabict"> Short Name in Arabic</label>
            </div>
            <div class="input-box">
            <textarea rows="6" cols="40" name="description-english"
            required="" id="description-english"></textarea>
            <label for="description-english">Description in English</label>
            </div>
            <div class="input-box">
            <textarea rows="6" cols="40" name="description-arabict"
            required="" id="description-arabict"></textarea>
            <label for="description-arabict">Description in Arabic</label>
            </div>
            <div class="input-box">
            <input id="price" type="text" name="price"
             required="">
            <label for="price">Price</label>
            </div>
        </div>
        <h3 class="tittle-admin subtittle-admin">Select Part</h3>
        <div class="information-part">
        <div class="input-box">
                <label class="label-section" for="categories">Categories</label>
                <select name="state" id="categories" >
                <?php 
                        foreach ($categories as $category) {
                            echo "<option value='".$category["id_category"]."'>".$category["name_categories"]."</option>";
                        }
                    ?>
                </select>
        </div>
        <div class="input-box">
                <label class="label-section" for="amount_people">Amount People</label>
                <select name="state" id="amount_people" >
                <?php 
                        foreach ($people as $person) {
                            echo "<option value='".$person["id_amount_people"]."'>".$person["name_amount_people"]."</option>";
                        }
                    ?>
        </select>
        </div>
        <div class="input-box">
                <label class="label-section" for="related-dish-one">Related Dish One</label>
                <select name="related-dish-one" id="related-dish-one" >
                <?php 
                        foreach ($dishes as $dish) {
                            echo "<option value='".$dish["id_dish"]."'>".$dish["namel"]."</option>";
                        }
                    ?>
        </select>
        </div>
        <div class="input-box">
                <label class="label-section" for="related-dish-two">Related Dish Two</label>
                <select name="related-dish-two" id="related-dish-two" >
                <?php 
                        foreach ($dishes as $dish) {
                            echo "<option value='".$dish["id_dish"]."'>".$dish["namel"]."</option>";
                        }
                    ?>
        </select>
        </div>
        <div class="input-box">
                <label class="label-section" for="related-dish-three">Related Dish Three</label>
                <select name="related-dish-three" id="related-dish-three" >
                <?php 
                        foreach ($dishes as $dish) {
                            echo "<option value='".$dish["id_dish"]."'>".$dish["namel"]."</option>";
                        }
                    ?>
        </select>
        </div>
        </div>
        <h3 class="tittle-admin subtittle-admin">Images</h3>
        <div class="information-part">
                <div>
                    <input type="file" name="imagen">
                </div>
                <div>
                    <input type="file" name="imagen">
                </div>
        

        </div>
        </div> 
        <input class="button button-forget" type="submit" name="add" value="Add food">  
        </form>
    </div>




    
</body>
</html>