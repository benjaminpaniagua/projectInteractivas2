<?php
require_once './database.php';
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
                        <div class="card--ourMenus" id='popular' value='5'>
                            <div class="card-img">
                                <img class="img--cards" src="./img/Popular.svg" alt="img  24 hours">
                            </div>
                            <div class="card-info">
                                <p class="text-tittle-menu" id="text-popular">Popular</p>
                            </div>
                        </div>

                    </div>
                    <div class="swiper-slide">
                        <div class="card--ourMenus" id='starters' value='2'>
                            <div class="card-img">
                                <img class="img--cards" src="./img/Starters.svg" alt="img  24 hours">
                            </div>
                            <div class="card-info">
                                <p id="text-starters" class="text-tittle-menu" id="text-popular">Starters</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card--ourMenus" id='mainDishes' value='1'>
                            <div class="card-img">
                                <img class="img--cards" src="./img/MainDishes.svg" alt="img  24 hours">
                            </div>
                            <div class="card-info">
                                <p id="text-mainDishes" class="text-tittle-menu">Main Dishes</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card--ourMenus"  id='desserts' value='3'>
                            <div class="card-img">
                                <img class="img--cards" src="./img/Desserts.svg" alt="img  24 hours">
                            </div>
                            <div class="card-info">
                                <p id="text-desserts" class="text-tittle-menu">Desserts</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card--ourMenus" id='drinks' value='4'>
                            <div class="card-img">
                                <img class="img--cards" src="./img/Drinks.svg" alt="img  24 hours">
                            </div>
                            <div class="card-info">
                                <p id="text-drinks" class="text-tittle-menu">Drinks</p>
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

        <div class="container__info ">
            <div class="card--ourMenus" id="popular1" value='5'>
            <div class="card-img">
                <img class="img--cards" src="./img/Popular.svg" alt="img  24 hours">
            </div>
            <div class="card-info">
                <p id="text-popular1" class="text-tittle-menu">Popular</p>
            </div>
        </div>

        <div class="card--ourMenus" id="starters1" value='2'>
        <div class="card-img">
            <img class="img--cards" src="./img/Starters.svg" alt="img  24 hours">
        </div>
        <div class="card-info">
        <p id="text-starters1" class="text-tittle-menu">Starters</p>
        </div>
        </div>

        <div class="card--ourMenus" id="mainDishes1" value='1'>
        <div class="card-img">
            <img class="img--cards" src="./img/MainDishes.svg" alt="img  24 hours">
        </div>
        <div class="card-info">
        <p id="text-mainDishes1" class="text-tittle-menu">Main Dishes</p>
        </div>
        </div>

        
        <div class="card--ourMenus" id="desserts1" value='3'>
        <div class="card-img">
            <img class="img--cards" src="./img/Desserts.svg" alt="img  24 hours">
        </div>
        <div class="card-info">
        <p id="text-desserts1" class="text-tittle-menu">Desserts</p>
        </div>
        </div>
        <div class="card--ourMenus" id="drinks1" value='4'>
        <div class="card-img">
            <img class="img--cards" src="./img/Drinks.svg" alt="img  24 hours">
        </div>
        <div class="card-info">
        <p id="text-drinks1" class="text-tittle-menu">Drinks</p>
        </div>
        </div>
        </div>
    </section>
    
    <!-- section container__saucer -->

    <div id='foods'>
    <section class="container__saucer" id="items">

    </section>
    </div>
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
    <script>

    </script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

    <script src="./js/main.js"> </script>

    <!-- script -->

</body>

</html>