<?php
require_once './database.php';

$dish_details = null;
$updateCookie = false;


if (isset($_COOKIE['cart'])) {
    $data = json_decode($_COOKIE['cart'], true);
    if (isset($_GET["dish"]) && $_GET["dish"] >= 0 && $data != null) {
        array_splice($data, $_GET["dish"], 1);
        $updateCookie = true;
    }
    $dish_details = $data;
    if ($updateCookie) setcookie('cart', json_encode($dish_details), time() + 72000);
}



if ($_POST) {
    if (isset($_POST["pay"])) {
        session_start();
        if (isset($_SESSION["isLoggedIn"])) {

            date_default_timezone_set('America/Costa_Rica');
            $date_time = date('Y-m-d H:i:s');
            if ($_POST["group"] == 'Lounge') $type = 1;
            if ($_POST["group"] == 'Express') $type = 2;
            if ($_POST["group"] == 'Pick up') $type = 3;
            $database->insert("tb_order_resgistered", [
                "id_user" => $_SESSION["id"],
                "id_order_type" => $type,
                "date_time" => $date_time,
            ]);
            $id_order = $database->id();
            if ($_POST['direction'] != "") {
                $database->update("tb_order_resgistered", [
                    "direction" => $_POST['direction'],

                ], [
                    "id_order_registered" => $id_order
                ]);
            }
            $amounts = $_POST['value'];
            $ids = $_POST['id'];


            for ($i = 0; $i < count($_POST['value']); $i++) {
                $database->insert("tb_order_dishes", [
                    "id_order_registered" => $id_order,
                    "id_dish" => $ids[$i],
                    "amoun_dish" => $amounts[$i],
                ]);
            }
            $database->delete("tb_card", [
                "id_user" => $_SESSION["id"]
            ]);

            setcookie("cart", "", time() - 72000 );



            header("location:index.php");
        } else {
            header("location:signIn.php");
        }
    }
    if (isset($_POST["leave"])) {
        $data = json_decode($_COOKIE['cart'], true);
        $order_details = $data;
        $amounts = $_POST['value'];
        $ids = $_POST['id'];


        if ($order_details != null) {
            for ($i = 0; $i < count($order_details); $i++) {
                if ($order_details[$i]['id'] == $ids[$i]) {
                    $order_details[$i]['amount_dishes'] = $amounts[$i];
                }
            }
            setcookie('cart', json_encode($order_details), time() + 3600);
            header("location:menu.php");
        }
    }
    if (isset($_POST["go"])) {
        header("location:menu.php");
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/svg+xml" href="./img/logoMain.svg" />
    <title>Sultan of Flavors </title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhaijaan+2:wght@400;500;600;700;800&family=Lalezar&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/main.css">
</head>

<body>
    <form method="post" action="cart.php">

        <section class="container-cart">
            <!-- cart -->
            <div class="cart">
                <div class="header-cart">
                    <?php
                    if ($dish_details != null) {
                        echo '<button type="submit" name="leave" class="btn-leave"> <img class="cart-btn-leave" src="./img/leave.svg" alt=""> </button>';
                    }
                    ?>
                    <h2>Cart</h2>
                </div>


                <div class="cart-items">
                    <?php
                    if ($dish_details != null) {
                        foreach ($dish_details as $index => $dish) {
                            $item = $database->select("tb_dish", "*", ["id_dish" => $dish["id"]]);
                            echo ' <div class="cart-item">';
                            echo ' <img src="' . $item[0]['img_recorted'] . '" alt="hummus" width="80px" class="cart-img">';
                            echo ' <div class="cart-item-details">';
                            echo '  <span class="cart-item-tittle">' . $item[0]['names'] . '</span>';
                            echo '    <div class="selector-amount">';
                            echo '       <input name="value[]" id="menu-item' . $index . '" item-price="' . $item[0]['price'] . '" type="number" value="' . $dish['amount_dishes'] . '" class="" oninput="updateSubtotal()" min="1">';
                            echo '   </div>';
                            echo '   <span class="carrito-item-precio">$' . $item[0]['price'] . '</span>';
                            echo '</div>';
                            echo ' <a href="cart.php?dish=' . $index . '"><span class="btn-delete">';
                            echo '    <img class="cart-btn" src="./img/trash.svg" alt="">';
                            echo ' </span></a>';
                            echo '<input type="text" name="id[]" value="' . $item[0]['id_dish'] . '" hidden>';
                            echo ' </div>';
                        }
                    }

                    ?>

                </div>
                <div class="cart-total">
                    <div class="radio-group">
                        <label>
                            <input id="lounge" type="radio" value="Lounge" name="group" required> Lounge
                            <span></span>
                        </label>
                        <label>
                            <input id="express" type="radio" value="Express" name="group" required> Express
                            <span></span>
                        </label>
                        <label>
                            <input id="pickUp" type="radio" value="Pick up" name="group" required> Pick up
                            <span></span>
                        </label>
                    </div>
                    <div>
                        <input class="direction-input" id='direction' type="text" name="direction" placeholder="Direction" required="">
                    </div>
                    <div class="row">
                        <strong>Tu Total</strong>
                        <p id="total"></p>
                    </div>
                    <?php
                    if ($dish_details != null) {
                        echo '<button type="submit" name="pay" class="btn-pay">Pay <img src="./img/pay.svg" alt=""> </button>';
                    } else {
                        echo '<button type="submit" name="go" class="btn-pay">Go shopping<img src="./img/pay.svg" alt=""> </button>';
                    }


                    ?>

                </div>
            </div>


        </section>
    </form>
</body>
<script src="./js/cart.js">
    init();
</script>

</html>