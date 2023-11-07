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
    <link rel="stylesheet" href="./css/main.css">
</head>

<!-- body -->

<body>

    <!-- nav, header -->

    <header>
        <div class="logo-container">
            <a href="index.php">
                <img class="img img-problem" src="./img/logoVector.svg" alt="Logo">
            </a>
        </div>

        <!-- nav -->

        <nav class="top-nav">
            <input type="checkbox" id="menu" class="nav-input">
            <div class="phone-nav">
                <ul class="nav-list gap">
                    <li><a class="nav-list-link margin-menu" href="index.php">Home</a></li>
                    <li><a class="nav-list-link margin-menu" href="menu.php">Menu</a></li>
                    <li><a class="nav-list-link margin-menu" href="#">Popular</a></li>
                    <li><a class="nav-list-link margin-menu" href="#">Sign in</a></li>
                </ul>
                <div id="phoneSearch" class="btn-nav btn-search">
                    <input class="submit-btn" type="submit" value="">
                    <input type="text" class="inputText" placeholder="">
                </div>
            </div>
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

    <h2 class="tittle">Best Sellers</h2>
    <section class="container__saucer">
        <div class="card">
            <img class="image__saucer" src="img/hummus.png" alt="Hummus">
            <div class="container__information">
                <div class="linkf">
                    <a class="link-class link-food" href="food.php">
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
                    <a class="link-class link-food" href="food.php">
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
                    <a class="link-class link-food" href="food.php">
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
                    <a class="link-class link-food" href="food.php">
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
                <section class="footer-section">
                    <h3 class="activity-title">Short Link</h3>
                    <ul class="nav-bottom-list">
                        <li><a class="nav-bottom-link" href="menu.php">Menu</a></li>
                        <li><a class="nav-bottom-link" href="#">Popular</a></li>
                        <li><a class="nav-bottom-link" href="index.php">Home</a></li>
                    </ul>
                </section>
                <section class="footer-section">
                    <h3 class="activity-title">Help Link</h3>
                    <ul class="nav-bottom-list">
                        <li><a class="nav-bottom-link" href="#">Privacy Policy </a></li>
                        <li><a class="nav-bottom-link" href="#">Refund Policy</a></li>
                        <li>
                            <Buy class="nav-bottom-link" href="#">Terms & Conditions </a>
                        </li>
                    </ul>
                </section>
                <section class="footer-section">
                    <h3 class="activity-title">Contact us </h3>
                    <ul class="nav-bottom-list">
                        <li><a class="nav-bottom-link" href="#">(+961) 9012 7ft 782</a></li>
                        <li><a class="nav-bottom-link" href="#">sultanofflavors@gmail.com</a></li>
                        <li><a class="nav-bottom-link" href="#">Lebanon Baalbek-Hermel </a></li>
                    </ul>
                </section>
            </div>
        </div>
        <p class="footer-legal">&copy; 2023. All rights reserved.</p>
    </footer>
</body>

</html>