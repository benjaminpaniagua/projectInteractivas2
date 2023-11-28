<?php
require_once './database.php';
// Reference: https://medoo.in/api/select
if (isset($_GET)) {
    $items = $database->select("tb_dish", "*", [
        "AND" => [
            "id_category" => $_GET["dish_category"],
            "id_amount_people" => $_GET["dish_amount_people"]
        ]
    ]);
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
        echo "<p class='activity-text'> We found : " . count($items) . " dish(s)</p>";
    }

    ?>
    
</body>

</html>