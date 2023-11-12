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
    <title>Sultan Of Flavors</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhaijaan+2:wght@400;500;600;700;800&family=Lalezar&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

    <link rel="stylesheet" href="./css/main.css">

</head>

<body>

    <!-- nav, header -->
    <header>

        <!-- nav -->
        <?php
        include "./parts/nav.php"
        ?>
        <!-- nav -->

        <img src="./img/Menu.png" class="hero-menu" alt="">
    </header>

    <!-- car that chases him -->
    <div class="phone-cart">
        <a href="#"><img src="./img/phone-car.svg" alt=""></a>
    </div>


    <!-- menu section -->

    <section class="menu-section">
        <h2 class="tittle">Our Menus</h2>

        <!-- carusel -->

        <div class="carusel">
            <div class="swiper">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide">
                        <div class="card--ourMenus">
                            <div class="card-img">
                                <img class="img--cards" src="./img/Popular.svg" alt="img  24 hours">
                            </div>
                            <div class="card-info">
                                <p class="text-tittle-menu">Popular</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card--ourMenus">
                            <div class="card-img">
                                <img class="img--cards" src="./img/Starters.svg" alt="img  24 hours">
                            </div>
                            <div class="card-info">
                                <p class="text-tittle-menu">Starters</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card--ourMenus">
                            <div class="card-img">
                                <img class="img--cards" src="./img/MainDishes.svg" alt="img  24 hours">
                            </div>
                            <div class="card-info">
                                <p class="text-tittle-menu">Main Dishes</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card--ourMenus">
                            <div class="card-img">
                                <img class="img--cards" src="./img/Desserts.svg" alt="img  24 hours">
                            </div>
                            <div class="card-info">
                                <p class="text-tittle-menu">Desserts</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card--ourMenus">
                            <div class="card-img">
                                <img class="img--cards" src="./img/Drinks.svg" alt="img  24 hours">
                            </div>
                            <div class="card-info">
                                <p class="text-tittle-menu">Drinks</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>

                <!-- If we need navigation buttons -->

    
            </div>
        </div>

        
        <!-- container__info -->

        <div class="container__info">

            <div class="card--ourMenus">
                <div class="card-img">
                    <img class="img--cards" src="./img/Popular.svg" alt="img  24 hours">
                </div>
                <div class="card-info">
                    <p class="text-tittle-menu">Popular</p>
                </div>
            </div>

            <div class="card--ourMenus">
                <div class="card-img">
                    <img class="img--cards" src="./img/Starters.svg" alt="img  24 hours">
                </div>
                <div class="card-info">
                    <p class="text-tittle-menu">Starters</p>
                </div>
            </div>

            <div class="card--ourMenus">
                <div class="card-img">
                    <img class="img--cards" src="./img/MainDishes.svg" alt="img  24 hours">
                </div>
                <div class="card-info">
                    <p class="text-tittle-menu">Main Dishes</p>
                </div>
            </div>

            <div class="card--ourMenus">
                <div class="card-img">
                    <img class="img--cards" src="./img/Desserts.svg" alt="img  24 hours">
                </div>
                <div class="card-info">
                    <p class="text-tittle-menu">Desserts</p>
                </div>
            </div>

            <div class="card--ourMenus">
                <div class="card-img">
                    <img class="img--cards" src="./img/Drinks.svg" alt="img  24 hours">
                </div>
                <div class="card-info">
                    <p class="text-tittle-menu">Drinks</p>
                </div>
            </div>
        </div>
    </section>

    <!-- section container__saucer -->

    <section class="container__saucer">

    <?php
$limit = 10; // Cantidad de elementos a mostrar
$count = 0;

foreach ($items as $item) {
    if ($count < $limit) {
        echo "<div class='card'>";
        echo "<img class='image__saucer' src='img/hummus.png' alt='Hummus'>";
        echo "<div class='container__information'>";
        echo "<div class='linkf'>";
        echo "<a class='link-class link-food' href='food.php'>";
        echo "<h3 class='name__saucer'>" . $item["names"] . "</h3>";
        echo "<p class='calification'>★★★★★</p>";
        echo "<p class='persons'>Individual</p>";
        echo "<div class='addCart'>";
        echo "<p class='price'>$8</p>";
        echo "<img class='add' src='./img/add.svg' alt='add'>";
        echo "</div>";
        echo "</a>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
        
        $count++; // Incrementa el contador
    } else {
        break; // Sale del bucle después de mostrar los primeros 10 elementos
    }
}
?>



    
    </section>

    <!-- btn--seeMore -->

    <div class="container--btn">
        <a href="menu.php" class="btn--seeMore">See More</a>
    </div>

    <!-- footer -->
    <?php
    include "./parts/footer.php"
    ?>

    <img src="" alt="">
    <!-- footer -->
    <!-- script -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

    <script src="./js/main.js"> </script>
    <!-- script -->

</body>

</html>