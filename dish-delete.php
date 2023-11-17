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
</head>

<body>
    <div>
        <form method="post" action="dish-delete.php">
            <h2 class="">Are you sure that tou want to delete
                <?php
                echo $item[0]["namel"];
                ?>?</h2>
            <div>
                <input class="submit-btn" type="submit" name="yes" value="Yes">
                <input class="submit-btn" type="submit" name="no" value="No">
                <input type="hidden" name="id_dish" value="<?php echo $item[0]["id_dish"]; ?>">

            </div>
        </form>
    </div>


</body>

</html>