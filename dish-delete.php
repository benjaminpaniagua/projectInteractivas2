<?php
require_once 'database.php';

if (isset($_GET)) {
    $item = $database->select("tb_dish", [
        "[>]tb_amount_people" => ["id_amount_people" => "id_amount_people"],
        "[>]tb_category" => ["id_category" => "id_category"]
    ], [
        "tb_dish.id_dish",
        "tb_dish.namel",
        "tb_dish.visible",
    ], [
        "id_dish" => $_GET["id_dish"]
    ]);
}

if (isset($_POST["yes"])) {
    $database->update("tb_dish", [
        "visible" => 2,

    ], [
        "id_dish" => $_POST['id_dish']
    ]);
    header("location: dish-list.php");
}

if (isset($_POST["no"])) {
    header("location: dish-list.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete</title>
    <link rel="stylesheet" href="./css/themes/admin.css">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhaijaan+2:wght@400;500;600;700;800&family=Lalezar&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/main.css">
</head>

<body>
    <div>
        <form method="post" action="dish-delete.php">
            <h2 class="dish-tittle-delete">Are you sure you want to delete
                <?php
                echo $item[0]["namel"];
                ?>?</h2>
            <div class="container-btn-delete">
                <input class="btn-dish-delete" type="submit" name="yes" value="Yes">
                <input class="btn-dish-delete " type="submit" name="no" value="No">
                <input type="hidden" name="id_dish" value="<?php echo $item[0]["id_dish"]; ?>">
            </div>
        </form>
    </div>
</body>

</html>