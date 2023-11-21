<?php
require_once './database.php';
session_start();
if (isset($_SESSION["isLoggedIn"])) {
} else {
    header("location:signIn.php");
}

$items = $database->select(
    "tb_card",
    [
        "[>]tb_dish" => ["id_dish" => "id_dish"],
    ],
    [
        "tb_dish.namel",
        "tb_dish.img_recorted",
        "tb_dish.price",
        "tb_card.amount_dishes",
        "tb_card.id_dish",

    ],
    [
        "id_user" => $_SESSION["id"]
    ]
);


if ($_POST) {
    if (isset($_POST["pay"])) {
        date_default_timezone_set('America/Costa_Rica');
        $date_time = date('Y-m-d H:i:s');
        if ($_POST["group"] == 'Lounge') $type = 1;
        if ($_POST["group"] == 'Express') $type = 2;
        if ($_POST["group"] == 'Pick up') $type = 3;
        $database->insert("tb_order_resgistered",[
                    "id_user"=> $_SESSION["id"],
                    "id_order_type"=>$type,
                    "date_time"=>$date_time,
         ]);
         $id_order= $database->id();
         if($_POST['direction']!=""){
            $database->update("tb_order_resgistered",[
                "direction"=>$_POST['direction'],
        
            ],[
                "id_order_registered"=> $id_order
            ]);
         }
         $amounts=$_POST['value'];
         $ids=$_POST['id'];

         
         for($i=0; $i < count($_POST['value']); $i++){
            $database->insert("tb_order_dishes",[
                "id_order_registered"=>$id_order,
                "id_dish"=> $ids[$i],
                "amoun_dish"=>$amounts[$i],
        ]);
        }
        $database->delete("tb_card",[
            "id_user"=> $_SESSION["id"]
        ]);

        header("location:index.php");  
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
                    <h2>Cart</h2>
                </div>

                <div class="cart-items">
                    <?php
                    if ($items != null) {
                        foreach ($items as $index => $item) {
                            echo ' <div class="cart-item">';
                            echo ' <img src="' . $item['img_recorted'] . '" alt="hummus" width="80px" class="cart-img">';
                            echo ' <div class="cart-item-details">';
                            echo '  <span class="cart-item-tittle">' . $item['namel'] . '</span>';
                            echo '    <div class="selector-amount">';
                            echo '       <input name="value[]" id="menu-item' . $index . '" item-price="' . $item['price'] . '" type="number" value="' . $item['amount_dishes'] . '" class="" oninput="updateSubtotal()" min="1">';
                            echo '   </div>';
                            echo '   <span class="carrito-item-precio">$' . $item['price'] . '</span>';
                            echo '</div>';
                            echo ' <span class="btn-delete">';
                            echo '    <img class="cart-btn" src="./img/trash.svg" alt="">';
                            echo ' </span>';
                            echo '<input type="text" name="id[]" value=' . $item['id_dish'] . '" hidden>';
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
                        if ($items != null) {
                            echo'<button type="submit" name="pay" class="btn-pay">Pay <img src="./img/pay.svg" alt=""> </button>';
                        }else{
                            echo'<button type="submit" name="go" class="btn-pay">Go shopping<img src="./img/pay.svg" alt=""> </button>';
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