<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sultan Of Flavors</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhaijaan+2:wght@400;500;600;700;800&family=Lalezar&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/main.css">
</head>

<body>
    <!-- nav, header -->

    <header>
        <div class="logo-container">
            <a href="index.php">
                <img class="img img-problem" src="./img/logoVector.svg" alt="Logo">
            </a>
        </div>
        <nav class="top-nav">
            <input type="checkbox" id="menu" class="nav-input">
            <div class="phone-nav">
                <ul class="nav-list gap">
                    <li><a class="nav-list-link margin-menu" href="index.php">Home</a></li>
                    <li><a class="nav-list-link margin-menu" href="menu.php">Menu</a></li>
                    <li><a class="nav-list-link margin-menu" href="#">Popular</a></li>
                    <?php 
                    session_start();
                    if(isset($_SESSION['admin'])){
                        if($_SESSION['admin']==2){
                         echo '<li><a class="nav-list-link" href="./admin.php">Administration</a></li>';
                        }
                     }

                    if(isset($_SESSION['isLoggedIn'])){
                     echo '<li><a class="nav-list-link" href="./profile.php">'.$_SESSION['user'].'</a></li>';
                     echo '<li><a class="nav-list-link" href="./logout.php">Logout</a></li>';
                    }else{
                     echo '<li><a class="nav-list-link" href="./signIn.php">Sign in</a></li>';
                     }
                    ?>
                </ul>
                <div id="phoneSearch" class="btn-nav btn-search">
                    <input class="submit-btn" type="submit" value="">
                    <input type="text" class="inputText" placeholder="">
                </div>
            </div>
            <div class="cta-container">
                <a id="moveButton">
                    <img src="./img/translate.svg" alt="">
                </a>
                <div id="search" class="btn-nav btn-search">
                    <input class="submit-btn" type="submit" value="">
                    <input type="text" class="inputText" placeholder="">
                </div>
                <div class="btn-nav">
                    <img class="img" src="./img/cart.svg" alt="shopping">
                    <p class="cartText">Cart •</p>
                    <p class="cartText">1</p>
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
        <div class="food-thumb item" id="image">
            <img class="img img-food" src="./img/food.png" alt="">
        </div>
        <section class="section-container item" id="text">
            <h2 class="food-title">Hummus</h2>
            <p class="calification calification-food">★★★★★</p>
            <p class="food-title food-text">Hummus, also spelled hommus or hummus, is a Middle Eastern dip, spread, or
                savory dish made from mashed cooked chickpeas mixed with tahini, lemon juice, and garlic. The standard
                garnish in the Middle East includes olive oil, a few whole chickpeas, parsley and paprika.</p>
            <div class="grid">
                <p class="food-title food-subtitle">How many people</p>
                <p class="food-title food-subtitle">Price</p>
            </div>
            <div class="grid grid-price">
                <div class="cta-container">
                    <img src="./img/people.svg" alt="">
                    <h3 class="food-title food-subtitle food-subtitle-bottom margin">1</h3>
                </div>
                <h3 class="food-title food-subtitle food-subtitle-bottom margin">$15.00</h3>
            </div>

            <form class="cta-container-food no-justifi">
                <input class="form-amount" type="number" placeholder="Amount" name="points" min="1" step="1">
            </form>

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

    <div class="container--btn">
        <a href="menu.php" class="btn--seeMore">See More</a>
    </div>

    <!-- footer -->
    <?php
    include "./parts/footer.php"
    ?>
    <!-- footer -->

    <script src="./js/main.js"> </script>
    <script>
        let moveButton = document.getElementById('moveButton');
        let image = document.getElementById('image');
        let text = document.getElementById('text');

        moveButton.addEventListener('click', () => {
            let imageOrder = window.getComputedStyle(image).getPropertyValue('order');
            let textOrder = window.getComputedStyle(text).getPropertyValue('order');

            image.style.order = textOrder;
            text.style.order = imageOrder;
        });


        let container = document.querySelector('.section-container');
        let description = document.querySelector('.section-container');

        moveButton.addEventListener('click', () => {
            let currentAlignment = window.getComputedStyle(container).getPropertyValue('align-items');

            if (currentAlignment === 'start') {
                container.style.alignItems = 'end'; // Cambiar la alineación a la parte inferior (end)
                container.style.textAlign = 'right';
            } else {
                container.style.alignItems = 'start'; // Cambiar la alineación a la parte superior (start)
                container.style.textAlign = 'left';
            }
        });
    </script>

</body>

</html>