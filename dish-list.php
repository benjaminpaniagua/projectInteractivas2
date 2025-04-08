<?php
require_once './database.php';
// Reference: https://medoo.in/api/select
$items = $database->select("tb_dish", "*");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/svg+xml" href="./img/logoMain.svg" />
    <title>Sultan of flavors | EDIT</title>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhaijaan+2:wght@400;500;600;700;800&family=Lalezar&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/main.css">
</head>

<body>
    <header>
        <!-- nav -->
        <?php
        include "./parts/nav.php";
        ?>
        <!-- nav -->
    </header>
    <div class="registation-container">
        <div class="options-container">
            <a class="button button-admin" href="admin.php">Register Dish</a>
            <a class="button button-admin" href="dish-list.php">List of Dishes</a>
        </div>
        <div class="dish-container">
            <h2 class="tittle-admin">Dish List</h2>
            <table class="dish-tbl">
                <tr>
                    <th class='dish-list'>Image</th>
                    <th class='dish-list'>Name</th>
                    <th class='dish-list'>Price</th>
                    <th class='dish-list'>Edit</th>
                    <th class='dish-list'>Delete</th>
                </tr>
                <?php
                foreach ($items as $item) {
                    echo "<tr>";
                    echo "<td class='dish-list'><img src=" . $item["img_recorted"] . " alt='Dish Image' style='width: 50px; height: 50px; border-radius: 50%;'></td>";
                    echo "<td class='dish-list'>" . $item["namel"] . "</td>";
                    echo "<td class='dish-list'>" . $item["price"] . "</td>";
                    echo "<td class='dish-list'><a href='dish-edit.php?id_dish=" . $item["id_dish"] . "'>Edit</a></td>";
                    echo "<td class='dish-list'><a href='dish-delete.php?id_dish=" . $item["id_dish"] . "'>Delete</a></td>";
                    echo "</tr>";
                }
                ?>
            </table>
        </div>
    </div>
    
</body>

</html>