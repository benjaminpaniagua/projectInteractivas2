<?php 
    require_once './database.php';
    session_start();

    $items = $database->select("tb_card",[
        "[>]tb_dish"=>["id_dish" => "id_dish"],
    ],[
        "tb_dish.namel",
        "tb_dish.img_recorted",
        "tb_dish.price",
        "tb_card.amount_dishes",
    ],
    [
        "id_user"=>$_SESSION["id"]
    ]);


    if($_POST){
        if(isset($_POST["pay"])){
            var_dump($_POST);
            //     $database->insert("tb_card",[
            //         "id_dish"=> $_POST["id_dish"],
            //         "id_user"=> $_POST['id_user'],
            //         "amount_dishes"=>$_POST["points"],
            //     ]);
            // header("location:cart.php");  
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
            if($items!=null){
                foreach($items as $index=>$item){
                    echo' <div class="cart-item">';
                    echo' <img src="'.$item['img_recorted'].'" alt="hummus" width="80px" class="cart-img">';
                    echo' <div class="cart-item-details">';
                    echo'  <span class="cart-item-tittle">'.$item['namel'].'</span>';
                    echo'    <div class="selector-amount">';
                    echo'       <input name="value'.$index.'" id="menu-item'.$index.'" item-price="'.$item['price'].'" type="number" value="'.$item['amount_dishes'].'" class="" oninput="updateSubtotal()"> ';
                    echo'   </div>';
                    echo'   <span class="carrito-item-precio">$'.$item['price'].'</span>';
                    echo'</div>';
                    echo' <span class="btn-delete">';
                    echo'    <img class="cart-btn" src="./img/trash.svg" alt="">';
                    echo' </span>';
                    echo' </div>';
                    echo'<input type="text" name="id'.$index.'" hidden>';
                }       
            }else{

                
            }
            
    
    ?>
               
               


            </div>
            <div class="cart-total">
                <div class="row">
                    <strong>Tu Total</strong>
                    <p id="total"></p>
                </div>
                <button type="submit" name="pay" class="btn-pay">Pay <img src="./img/pay.svg" alt=""> </button>
            </div>
        </div>


    </section>
   </form>
</body>
<script src="./js/cart.js">
    init();
</script>

</html>