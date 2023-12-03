<?php
require_once './database.php';
// Reference: https://medoo.in/api/select
if (isset($_GET)) {
    if (isset($_GET["dish_amount_people"])) {
        $items = $database->select("tb_dish", "*", [
            "AND" => [
                "id_amount_people" => $_GET["dish_amount_people"],
                "namel[~]" => $_GET['keyword']
            ]
        ]);
    } else {
        $items = $database->select("tb_dish", "*", [
            "AND" => [
                "namel[~]" => $_GET['keyword']
            ]
        ]);
    }
}
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
    <h2 class="search-title">Explore Dishes</h2>
    <?php
    if (count($items) > 0) {
        echo "<p class='activity-text text-results'> We found : " . count($items) . " dish(s)</p>";
    }

    ?>


    <section class="container__saucer">
        <?php
        if (count($items) > 0) {
            foreach ($items as $item) {
                echo "<div class='card'>";
                echo "<img class='image__saucer' src='" . $item["img_recorted"] . "' alt='" . $item["names"] . "'>";
                echo "<div class='container__information'>";
                echo "<div class='linkf'>";
                echo "<a class='link-class link-food' href='food.php?id=" . $item["id_dish"] . "'>";
                echo "<h3 class='name__saucer'>" . $item["names"] . "</h3>";
                echo "<p class='calification'>★★★★★</p>";
                if ($item['id_amount_people'] == 1)  echo "<p class='persons'>Individual</p>";
                if ($item['id_amount_people'] == 2)  echo "<p class='persons'>Couples</p>";
                if ($item['id_amount_people'] == 3)  echo "<p class='persons'>Familiar</p>";
                echo "<div class='addCart'>";
                echo "<p class='price'>$" . $item["price"] . "</p>";
                echo "<img class='add' src='./img/add.svg' alt='add'>";
                echo "</div>";
                echo "</a>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
            }
        } else {
            echo "<h3 class='activity-text text-results'>No results</h3>";
        }


        ?>
    </section>

    <?php
    include "./parts/footer.php"
    ?>

</body>

</html>