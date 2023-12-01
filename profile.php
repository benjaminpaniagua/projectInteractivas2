<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
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
        <?php
        require_once './database.php';

        // Reference: https://medoo.in/api/select
        $items = $database->select("tb_order_resgistered", '*', [
            "id_user" => $_SESSION["id"],
        ]);

        ?>
    </header>
    <div class="container-profile">

        <div class="right-container">
            <!-- Contenido del contenedor derecho -->
            <table class="dish-tbl">
                <tr>
                    <th class='dish-list'>Image</th>
                    <th class='dish-list'>Name</th>
                    <th class='dish-list'>Price</th>
                    <th class='dish-list'>Amount Dish</th>
                    <th class='dish-list'>Date</th>
                </tr>
                <?php
                foreach ($items as $item) {
                    $orders = $database->select("tb_order_dishes", [
                        "[>]tb_dish" => ["id_dish" => "id_dish"],
                    ], [
                        "tb_dish.id_dish",
                        "tb_dish.names",
                        "tb_dish.img_recorted",
                        "tb_dish.price",
                        "tb_order_dishes.amoun_dish",
                    ], [
                        "id_order_registered" => $item["id_order_registered"]
                    ]);

                    foreach ($orders as $index => $order) {
                        echo "<tr>";
                        echo "<td class='dish-list'><img src=" . $order["img_recorted"] . " alt='Dish Image' style='width: 50px; height: 50px; border-radius: 50%;'></td>";
                        echo "<td class='dish-list'>" . $order["names"] . "</td>";
                        echo "<td class='dish-list'>" . $order["price"] . "</td>";
                        echo "<td class='dish-list'>" . $order["amoun_dish"] . "</td>";
                        echo "<td class='dish-list'>" . $item["date_time"] . "</td>";
                        echo "</tr>";
                    }
                }
                ?>
            </table>
        </div>
    </div>



    <!-- footer -->
    <?php
    include "./parts/footer.php"
    ?>
    <!-- footer -->


</body>

</html>