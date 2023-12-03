<?php
require_once './database.php';

$peoples = $database->select("tb_amount_people", "*");

$categories = $database->select("tb_category", "*");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhaijaan+2:wght@400;500;600;700;800&family=Lalezar&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/main.css">
</head>

<body>
    <?php
    include "./parts/nav.php";
    ?>

<section class="dishes-container">
    <h2 class="search-title">Explore Dishes</h2>
    <div class="dish-search-container">
        <form method="get" action="results.php">
            <div class="form-group">
                <label for="dish_amount_people" class="dishes-container">Amount People</label>
                <select class="form-control dishes-container" name="dish_amount_people" id="dish_amount_people">
                    <?php
                    foreach ($peoples as $people) {
                        echo "<option value='" . $people["id_amount_people"] . "'>" . $people["name_amount_people"] . "</option>";
                    }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label for="search" class="activity-tittle dishes-container">Search</label>
                <input class="form-control dishes-container" type="text" name="keyword">
            </div>
            <div class="form-group">
                <input type="submit" class="btn-searchDish" value="Search Dish">
            </div>
        </form>
    </div>
</section>

    <?php
    include "./parts/footer.php"
    ?>
</body>

</html>