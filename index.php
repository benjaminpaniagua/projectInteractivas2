<?php
require_once './database.php';

// Reference: https://medoo.in/api/select
$items = $database->select("tb_dish", "*", [
    'AND'=>[
        "popular" => 'y',
        "visible"=>1
    ]
    
]);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/svg+xml" href="./img/logoMain.svg" />
    <title>Sultan Of Flavors</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhaijaan+2:wght@400;500;600;700;800&family=Lalezar&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/main.css">
    
</head>

<!-- body -->

<body>

    <!-- nav, header -->

    <header>

        <!-- nav -->
        <?php
        include "./parts/nav.php"
        ?>
        <!-- nav -->

        <!-- hero -->
        <div class="hero-container">
            <div>
                <h1 class="hero-title">What would you like to order today?</h1>
                <div class="cta-container">
                    <a class="btn btn--menu" href="menu.php">Menu</a>
                </div>
            </div>

        </div>
    </header>

    <!-- car that chases him -->

    <div class="phone-cart">
        <a href="#"><img src="./img/phone-car.svg" alt=""></a>
    </div>


    <!-- Best Sellers -->
   

    <h2 id='popular2' class="tittle">Best Sellers</h2>
    <section class="container__saucer">
        <?php
        foreach ($items as $key => $item) {
            if ($key < 4) {
                echo "<div class='card'>";
                echo "<img class='image__saucer' src='".$item["img_recorted"]."' alt='" . $item["names"] . "'>";
                echo "<div class='container__information'>";
                echo "<div class='linkf'>";
                echo "<a class='link-class link-food' href='food.php?id=".$item["id_dish"]."'>";
                echo "<h3 class='name__saucer'>" . $item["names"] . "</h3>";
                echo "<p class='calification'>★★★★★</p>";
                if ($item['id_amount_people'] == 1)  echo "<p class='persons'>Individual</p>";
                if ($item['id_amount_people'] == 2)  echo "<p class='persons'>Couples</p>";
                if ($item['id_amount_people'] == 3)  echo "<p class='persons'>Familiar</p>";
                echo "<div class='addCart'>";
                echo "<p class='price'>$" . $item["price"] . "</p>";
                echo "<img class='add' src='./img/add.svg' alt='add'>";
                echo "</div>";
                echo "</a>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
            }
        }
        ?>
    </section>

    <!-- btn--seeMore -->

    <div class="container--btn">
        <a href="menu.php" class="btn--seeMore">See More</a>
    </div>

    <!-- why us -->

    <section class="bg">
        <h2 class="tittle">Why Us</h2>
        <div class="container__infoWhyUs">
            <div class="card--mini">
                <div class="card-img">
                    <img class="img--cards" src="./img/24hours.svg" alt="img  24 hours">
                </div>
                <div class="card-info">
                    <p class="text-tittle-menu">Open 24 Hours</p>
                </div>
            </div>

            <div class="card--mini">
                <div class="card-img">
                    <img class="img--cards" src="./img/EasyOrder.svg" alt="img order">
                </div>
                <div class="card-info">
                    <p class="text-tittle-menu">Easy to Order</p>
                </div>
            </div>

            <div class="card--mini">
                <div class="card-img">
                    <img class="img--cards" src="./img/FastDelivery.svg" alt="img delivery">
                </div>
                <div class="card-info">
                    <p class="text-tittle-menu">Fast Delivery</p>
                </div>
            </div>

            <div class="card--mini">
                <div class="card-img">
                    <img class="img--cards" src="./img/EasyLog.svg" alt="img log">
                </div>
                <p class="text-tittle-menu">Easy to Log</p>
            </div>
        </div>
    </section>

    <!-- we are here -->

    <section class="bg">
        <h2 class="tittle tittle-WeAreHere">We are here</h2>
        <img class="img-weAreHere" src="./img/location.png" alt="">
    </section>

    <!-- footer -->
    <?php
    include "./parts/footer.php"
    ?>
    <!-- footer -->
</body>

</html>