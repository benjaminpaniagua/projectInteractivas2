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
        $items = $database->select("tb_order_resgistered", 'tb_order_resgistered.id_order_registered', [
            "id_user" => 4,
        ]);

        ?>
    </header>
    <?php 
        var_dump($items);
    ?>



    <!-- footer -->
    <?php
    include "./parts/footer.php"
    ?>
    <!-- footer -->


</body>

</html>