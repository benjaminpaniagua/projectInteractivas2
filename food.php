<?php

require_once './database.php';
$item = $database->select("tb_dish", [
    "[>]tb_amount_people" => ["id_amount_people" => "id_amount_people"],
], [
    "tb_dish.id_dish",
    "tb_dish.namel",
    "tb_dish.namel_ar",
    "tb_dish.qualification",
    "tb_dish.img_recorted",
    "tb_dish.description",
    "tb_dish.description_ar",
    "tb_dish.price",
    "tb_amount_people.number",
], [
    "id_dish" => 1
]);
if ($_POST) {
    if (isset($_POST["add-order"])) {
        $approve = true;
        $id_cart;
        $trying = $database->select("tb_card", '*');
        foreach ($trying as $index => $try) {
            if ($try['id_dish'] == $_POST["id_dish"] && $try['id_user'] == $_POST["id_user"]) {
                $approve = false;
                $id_cart = $try['id'];
            }
        }

        if ($approve == true) {
            $database->insert("tb_card", [
                "id_dish" => $_POST["id_dish"],
                "id_user" => $_POST['id_user'],
                "amount_dishes" => $_POST["points"],
            ]);
        } else {
            $database->update("tb_card", [
                "amount_dishes" => $_POST["points"],
            ], [
                "id" => $id_cart
            ]);
        }
    }
}


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
                    if (isset($_SESSION["isLoggedIn"])) {
                    } else {
                        header("location:signIn.php");
                    }
                    if (isset($_SESSION['admin'])) {
                        if ($_SESSION['admin'] == 2) {
                            echo '<li><a class="nav-list-link" href="./admin.php">Administration</a></li>';
                        }
                    }

                    if (isset($_SESSION['isLoggedIn'])) {
                        echo '<li><a class="nav-list-link" href="./profile.php">' . $_SESSION['user'] . '</a></li>';
                        echo '<li><a class="nav-list-link" href="./logout.php">Logout</a></li>';
                    } else {
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
                <a id="moveButton" onclick=getTranslation()>
                    <img src="./img/translate.svg" alt="">
                </a>
                <div id="search" class="btn-nav btn-search">
                    <input class="submit-btn" type="submit" value="">
                    <input type="text" class="inputText" placeholder="">
                </div>
                <?php
                if (isset($_POST["add-order"])) {
                    echo '<div class="btn-nav shake-left-right" id="cart">';
                } else {
                    echo '<div class="btn-nav" id="cart">';
                }
                ?>
                <a id='cart' href="cart.php"><img class="img" src="./img/cart.svg" alt="shopping"></a>
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

    <?php
    if (isset($_POST["add-order"])) {
        echo '   <div class="phone-cart shake-left-right">';
    } else {
        echo '<div class="phone-cart">';
    }
    ?>
    <a id='cart' href="cart.php"><img src="./img/phone-car.svg" alt=""></a>
    </div>


    <!-- food container   -->

    <div class="food-container">
        <?php
        echo ' <div class="food-thumb item" id="image">';
        echo '<img class="img img-food" src="' . $item[0]['img_recorted'] . '" alt="">';
        echo '</div>';
        ?>
        <section class="section-container item" id="text">
            <?php
            echo '<h2 class="food-title" id="title">' . $item[0]['namel'] . '</h2>';
            if ($item[0]['qualification'] == 5) echo ' <p class="calification calification-food">★★★★★</p>';
            if ($item[0]['qualification'] == 4) echo ' <p class="calification calification-food">★★★★</p>';
            if ($item[0]['qualification'] == 3) echo ' <p class="calification calification-food">★★★</p>';
            if ($item[0]['qualification'] == 2) echo ' <p class="calification calification-food">★★</p>';
            if ($item[0]['qualification'] == 1) echo ' <p class="calification calification-food">★</p>';
            echo '<p class="food-title food-text" id="description">' . $item[0]['description'] . '</p>';
            echo '<div class="grid">';
            echo '<p class="food-title food-subtitle">How many people</p>';
            echo '<p class="food-title food-subtitle">Price</p>';
            echo '</div>';
            echo '<div class="grid grid-price">';
            echo '<div class="cta-container">';
            echo '<img src="./img/people.svg" alt="">';
            echo '<h3 class="food-title food-subtitle food-subtitle-bottom margin">' . $item[0]['number'] . '</h3>';
            echo '</div>';
            echo '<h3 class="food-title food-subtitle food-subtitle-bottom margin">' . $item[0]['price'] . '</h3>';
            echo ' </div>';

            ?>

            <form method="post" action="food.php">
                <div class="cta-container-food no-justifi">
                    <?php
                    $approve = true;
                    $id_cart;
                    $testing = $database->select("tb_card", '*');
                    foreach ($testing as $index => $test) {
                        if ($test['id_dish'] == 1 && $test['id_user'] == $_SESSION['id']) {
                            $approve = false;
                            $id_cart = $index;
                        }
                    }

                    if ($approve == true) {
                        echo '<input class="form-amount" type="number" value="1" name="points" min="1" step="1">
                        ';
                    } else {
                        echo '<input class="form-amount" type="number" value="' . $testing[$id_cart]['amount_dishes'] . '" name="points" min="1" step="1">
                        ';
                    }

                    ?>
                    <?php
                    echo "<input type='hidden' id='id_dish' name='id_dish' value='" . $item[0]["id_dish"] . "'>";
                    echo "<input type='hidden' name='id_user' value='" . $_SESSION['id'] . "'>";

                    ?>
                </div>
                <div class="cta-container-food no-justifi">
                    <input id='add' type="submit" class="btn-food" name='add-order' value="Add to Order"></input>
                </div>
            </form>




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

    <!-- <script src="./js/main.js"> </script> -->
    <script>
        let moveButton = document.getElementById('moveButton');
        let addButton = document.getElementById('add');
        let image = document.getElementById('image');
        let text = document.getElementById('text');
        let requestLang = 'AR';

        addButton.addEventListener('click', function(event) {
            let shopping = document.getElementById('cart');
            shopping.classList.add("shake-left-right");


        });
        moveButton.addEventListener('click', () => {
            let imageOrder = window.getComputedStyle(image).getPropertyValue('order');
            let textOrder = window.getComputedStyle(text).getPropertyValue('order');
            image.style.order = textOrder;
            text.style.order = imageOrder;
        });


        function switchLang() {
            if (requestLang == 'EN') requestLang = 'AR';
            else requestLang = 'EN';
            // document.getElementById('lang').innerText = requestLang;
        }

        function getTranslation() {
            let info = {
                id_dish: document.getElementById('id_dish').value,
                language: requestLang
            };

            //fetch
            fetch('http://localhost/projectInteractivas2/language.php', {
                    method: 'POST',
                    mode: "same-origin",
                    credentials: "same-origin",
                    headers: {
                        'Accept': 'application/json, text/plain, */*',
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify(info)
                })
                .then(response => response.json())
                .then(data => {
                    switchLang();
                    console.log(data);
                    document.getElementById('title').innerText = data.name;
                    document.getElementById('description').innerText = data.description;
                    // console.log(data.name);
                    // console.log(data.description);
                })
                .catch(err => console.log('erros:' + err))


        }




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