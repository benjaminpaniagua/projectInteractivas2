<?php 
    require_once './database.php';
    $categories = $database->select("tb_category","*");
    $people= $database->select("tb_amount_people","*");
    $dishes= $database->select("tb_dish",[
        "tb_dish.id_dish",
        "tb_dish.name",
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
    <?php 
    include "./parts/header.php";     
    ?>
    <div class="registation-container">
        <form method="post" action="admin.php">
        <div class="information-container">
        <div>
        <input type="file" name="imagen">
        </div>
        <div>
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
            <textarea rows="6" cols="40" name="description-english"
            required="" id="description-english"></textarea>
            <label for="id">Description in English</label>
            </div>
            <div class="input-box">
            <textarea rows="6" cols="40" name="description-arabict"
            required="" id="description-arabict"></textarea>
            <label for="id">Description in Arabic</label>
            </div>
        </div>
        <div>
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
                            echo "<option value='".$dish["id_dish"]."'>".$dish["name"]."</option>";
                        }
                    ?>
        </select>
        </div>
        <div class="input-box">
                <label class="label-section" for="related-dish-one">Related Dish Two</label>
                <select name="related-dish-one" id="related-dish-one" >
                <?php 
                        foreach ($dishes as $dish) {
                            echo "<option value='".$dish["id_dish"]."'>".$dish["name"]."</option>";
                        }
                    ?>
        </select>
        </div>
        <div class="input-box">
                <label class="label-section" for="related-dish-one">Related Dish Three</label>
                <select name="related-dish-one" id="related-dish-one" >
                <?php 
                        foreach ($dishes as $dish) {
                            echo "<option value='".$dish["id_dish"]."'>".$dish["name"]."</option>";
                        }
                    ?>
        </select>
        </div>
        </div>
        <div>
        
        <!-- 1. Nombre del platillo 2. Imagen del platillo 3. Categoría del platillo 4. Si es o no un platillo destacado 5. Descripción del platillo 6. Para cuantas personas  7. Precio del platillo 8. Platillos relacionados  -->

        </div>
        <div class="options-container">
            <input class="button button-forget" type="submit" name="find" value="Find food">
            <input class="button button-forget" type="submit" name="add" value="Add food">
            <input class="button button-forget" type="submit" name="modification" value="Modification food">
            <input class="button button-forget" type="submit" name="delete" value="Delete food">
        </div>    
        </form>
    </div>




    
</body>
</html>