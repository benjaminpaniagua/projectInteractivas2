<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sultan Of Flavors</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Baloo+Bhaijaan+2:wght@400;500;600;700;800&family=Lalezar&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>
        
    <link rel="stylesheet" href="./css/main.css">
   
</head>

<body>

    <!-- nav, header -->
    <header>

        <!-- logo -->

        <div class="logo-container">
            <a href="index.html">
            <img class="img img-problem" src="./img/logoVector.svg" alt="Logo">
        </a>
        </div>

        <!-- nav -->
        <nav class="top-nav">
            <input type="checkbox" id="menu" class="nav-input">
            <div class="phone-nav">
                <ul class="nav-list gap">
                    <li><a class="nav-list-link margin-menu" href="index.html">Home</a></li>
                    <li><a class="nav-list-link margin-menu" href="menu.html">Menu</a></li>
                    <li><a class="nav-list-link margin-menu" href="#">Popular</a></li>
                    <li><a class="nav-list-link" href="#">Sign in</a></li>
                </ul>
                <div id="phoneSearch" class="btn-nav btn-search">
                    <input class="submit-btn" type="submit" value="">
                    <input type="text" class="inputText" placeholder="">
                </div>
            </div>

            <!-- cta- container -->

            <div class="cta-container">
                <div id="search" class="btn-nav btn-search">
                    <input class="submit-btn" type="submit" value="">
                    <input type="text" class="inputText" placeholder="">
                </div>
                <div class="btn-nav">
                    <img class="img" src="./img/shoppingCart.png" alt="shopping">
                    <p class="cartText">Cart •</p>
                    <p class="cartText">1</p>
                </div>
            </div>
            <label for="menu" class="nav_label">
                <img src="./img/nav.svg" alt="img">
            </label>

        </nav>
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
        
        <div class="card">
            <img class="image__saucer" src="img/hummus.png" alt="Hummus">
            <div class="container__information">
                <div class="linkf">
                    <a class="link-class link-food" href="food.html">
                        <h3 class="name__saucer">Hummus</h3>
                        <p class="calification">★★★★★</p>
                        <p class="persons">1 person</p>
                        <div class="addCart">
                            <p class="price">$8</p>
                            <img class="add" src="./img/add.svg" alt="add">
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <div class="card">
            <img class="image__saucer" src="img/hummus.png" alt="Hummus">
            <div class="container__information">
                <div class="linkf">
                    <a class="link-class link-food" href="food.html">
                        <h3 class="name__saucer">Hummus</h3>
                        <p class="calification">★★★★★</p>
                        <p class="persons">1 person</p>
                        <div class="addCart">
                            <p class="price">$8</p>
                            <img class="add" src="./img/add.svg" alt="add">
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <div class="card">
            <img class="image__saucer" src="img/hummus.png" alt="Hummus">
            <div class="container__information">
                <div class="linkf">
                    <a class="link-class link-food" href="food.html">
                        <h3 class="name__saucer">Hummus</h3>
                        <p class="calification">★★★★★</p>
                        <p class="persons">1 person</p>
                        <div class="addCart">
                            <p class="price">$8</p>
                            <img class="add" src="./img/add.svg" alt="add">
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <div class="card">
            <img class="image__saucer" src="img/hummus.png" alt="Hummus">
            <div class="container__information">
                <div class="linkf">
                    <a class="link-class link-food" href="food.html">
                        <h3 class="name__saucer">Hummus</h3>
                        <p class="calification">★★★★★</p>
                        <p class="persons">1 person</p>
                        <div class="addCart">
                            <p class="price">$8</p>
                            <img class="add" src="./img/add.svg" alt="add">
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <div class="card">
            <img class="image__saucer" src="img/hummus.png" alt="Hummus">
            <div class="container__information">
                <div class="linkf">
                    <a class="link-class link-food" href="food.html">
                        <h3 class="name__saucer">Hummus</h3>
                        <p class="calification">★★★★★</p>
                        <p class="persons">1 person</p>
                        <div class="addCart">
                            <p class="price">$8</p>
                            <img class="add" src="./img/add.svg" alt="add">
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <div class="card">
            <img class="image__saucer" src="img/hummus.png" alt="Hummus">
            <div class="container__information">
                <div class="linkf">
                    <a class="link-class link-food" href="food.html">
                        <h3 class="name__saucer">Hummus</h3>
                        <p class="calification">★★★★★</p>
                        <p class="persons">1 person</p>
                        <div class="addCart">
                            <p class="price">$8</p>
                            <img class="add" src="./img/add.svg" alt="add">
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <div class="card">
            <img class="image__saucer" src="img/hummus.png" alt="Hummus">
            <div class="container__information">
                <div class="linkf">
                    <a class="link-class link-food" href="food.html">
                        <h3 class="name__saucer">Hummus</h3>
                        <p class="calification">★★★★★</p>
                        <p class="persons">1 person</p>
                        <div class="addCart">
                            <p class="price">$8</p>
                            <img class="add" src="./img/add.svg" alt="add">
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <div class="card">
            <img class="image__saucer" src="img/hummus.png" alt="Hummus">
            <div class="container__information">
                <div class="linkf">
                    <a class="link-class link-food" href="food.html">
                        <h3 class="name__saucer">Hummus</h3>
                        <p class="calification">★★★★★</p>
                        <p class="persons">1 person</p>
                        <div class="addCart">
                            <p class="price">$8</p>
                            <img class="add" src="./img/add.svg" alt="add">
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <div class="card">
            <img class="image__saucer" src="img/hummus.png" alt="Hummus">
            <div class="container__information">
                <div class="linkf">
                    <a class="link-class link-food" href="food.html">
                        <h3 class="name__saucer">Hummus</h3>
                        <p class="calification">★★★★★</p>
                        <p class="persons">1 person</p>
                        <div class="addCart">
                            <p class="price">$8</p>
                            <img class="add" src="./img/add.svg" alt="add">
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <div class="card">
            <img class="image__saucer" src="img/hummus.png" alt="Hummus">
            <div class="container__information">
                <div class="linkf">
                    <a class="link-class link-food" href="food.html">
                        <h3 class="name__saucer">Hummus</h3>
                        <p class="calification">★★★★★</p>
                        <p class="persons">1 person</p>
                        <div class="addCart">
                            <p class="price">$8</p>
                            <img class="add" src="./img/add.svg" alt="add">
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- btn--seeMore -->

    <div class="container--btn">
        <a href="menu.html" class="btn--seeMore">See More</a>
    </div>

    <!-- footer -->

    <footer class="footer-container">
        <div class="footer-content">
            <section class="footer-section">
                <img class="img-problem" src="./img/Group 103.svg" alt="">
                <p class="activity-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In non efficitur nunc,
                    et consectetur erat. Sed at ultrices tortor, vel fermentum enim. Vestibulum tristique, ante vel
                    fringilla sollicitudin, odio augue gravida magna, ac dictum massa metus vitae nulla. Donec a risus
                    nec nulla tempus semper. Quisque vulputate ipsum auctor magna tincidunt aliquam.
                </p>
            </section>
            <div class="footer-link">
                <sectio class="">
                    <h3 class="activity-title">Short Link</h3>
                    <ul class="nav-bottom-list">
                        <li><a class="nav-bottom-link" href="#">Menu</a></li>
                        <li><a class="nav-bottom-link" href="#">Popular</a></li>
                        <li><a class="nav-bottom-link" href="#">Home</a></li>
                    </ul>
                </sectio>
                <sectio class="">
                    <h3 class="activity-title">Help Link</h3>
                    <ul class="nav-bottom-list">
                        <li><a class="nav-bottom-link" href="#">Privacy Policy </a></li>
                        <li><a class="nav-bottom-link" href="#">Refund Policy</a></li>
                        <li>
                            <Buy class="nav-bottom-link" href="#">Terms & Conditions </a>
                        </li>
                    </ul>
                </sectio>
                <sectio class="">
                    <h3 class="activity-title">Contact us </h3>
                    <ul class="nav-bottom-list">
                        <li><a class="nav-bottom-link" href="#">(+961) 9012 7ft 782</a></li>
                        <li><a class="nav-bottom-link" href="#">sultanofflavors@gmail.com</a></li>
                        <li><a class="nav-bottom-link" href="#">Lebanon Baalbek-Hermel </a></li>
                    </ul>
                </sectio>
            </div>
        </div>
        <p class="footer-legal">&copy; 2023. All rights reserved.</p>
    </footer>
    
    <!-- script -->
    
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

    <script src="./js/main.js"> </script>
</body>
</html>