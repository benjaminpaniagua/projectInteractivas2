<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhaijaan+2:wght@400;500;600;700;800&family=Lalezar&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/main.css">
</head>
<body>
    <!-- nav, header -->

    <header>
        <div class="logo-container">
            <img class="img img-problem" src="./img/logoVector.svg" alt="Logo">
        </div>
        <nav class="top-nav">
            <input type="checkbox" id="menu" class="nav-input">
            <div class="phone-nav">
                <ul class="nav-list gap">
                    <li><a class="nav-list-link margin-menu" href="index.html">Home</a></li>
                    <li><a class="nav-list-link margin-menu" href="menu.html">Menu</a></li>
                    <li><a class="nav-list-link margin-menu" href="#">Popular</a></li>
                    <li><a class="nav-list-link margin-menu" href="#">Sign in</a></li>
                </ul>
                <div id="phoneSearch" class="btn-nav btn-search">
                    <input class="submit-btn" type="submit" value="">
                    <input type="text" class="inputText" placeholder="">
                </div>
            </div>
            <div class="cta-container">
                <a><img src="./img/translate.svg" alt=""></a>
                <div id="search" class="btn-nav btn-search">
                    <input class="submit-btn" type="submit" value="">
                    <input type="text" class="inputText" placeholder="">
                </div>
                <div class="btn-nav">
                <img class="img" src="./img/cart.svg" alt="shopping">
                <p  class="cartText">Cart •</p>
                <p class="cartText" >1</p>
                </div>

            </div>
            <label for="menu" class="nav_label">
                <img src="./img/nav.svg" alt="img">
            </label>

        </nav>
       
    </header>

    <!-- car that chases him -->

    <div class="phone-cart">
        <a href="#"><img src="./img/phone-car.svg" alt=""></a>
    </div>

    <!-- food container -->

    <div class="food-container">
        <div class="food-thumb">
            <img class="img img-food" src="./img/food.png" alt="">
        </div>
        <section class="section-container" >
            <h2 class="food-title">Hummus</h2>
            <p class="calification calification-food">★★★★★</p>
            <p class="food-title food-text">Hummus, also spelled hommus or hummus, is a Middle Eastern dip, spread, or savory dish made from mashed cooked chickpeas mixed with tahini, lemon juice, and garlic. The standard garnish in the Middle East includes olive oil, a few whole chickpeas, parsley and paprika.</p>
                <div class="grid">
                    <p class="food-title food-subtitle">How many people</p>
                    <p class="food-title food-subtitle">Price</p>
                </div>
                <div class="grid grid-price">
                    <div class="cta-container">
                        <img src="./img/people.svg" alt="">
                        <h3 class="food-title food-subtitle food-subtitle-bottom margin" >1</h3>
                    </div>
                    <h3 class="food-title food-subtitle food-subtitle-bottom margin">$15.00</h3>
                </div>
            <div class="cta-container-food no-justifi">
                 
                 <a class="btn-food" href="#">Add to Order</a>
         </div>
        </section>
    </div>

    <!-- section best sellers -->

    <h2 class="tittle">Best Sellers</h2>
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
    </section>

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
                        <li><a class="nav-bottom-link" href="menu.html">Menu</a></li>
                        <li><a class="nav-bottom-link" href="#">Popular</a></li>
                        <li><a class="nav-bottom-link" href="index.html">Home</a></li>
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

</body>
</html>