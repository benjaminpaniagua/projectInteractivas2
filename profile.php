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
            "id_user" => 4,
        ]);

        ?>
    </header>
    <?php 
        foreach($items as $item){
            var_dump($item["id_order_registered"]);
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

            foreach($orders as $index => $order){
                var_dump($order);
            }
            echo "<br>";
            echo "<br>";
            echo "<br>";



        }
    ?>



    <!-- footer -->
    <?php
    include "./parts/footer.php"
    ?>
    <!-- footer -->


</body>

</html>