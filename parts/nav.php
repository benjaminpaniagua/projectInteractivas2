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
            <li><a class="nav-list-link" href="./index.php">Home</a></li>
            <li><a class="nav-list-link" href="./menu.php">Menu</a></li>
            <li><a class="nav-list-link" href="#popular2">Popular</a></li>

            <?php
            session_start();

            if (isset($_SESSION['isLoggedIn'])) {
                echo '<li>
                     <a class="nav-list-link" href="#">' . $_SESSION['user'] . '</a>';
                echo '<ul class="menu-vertical">';
                echo '<li><a class="" href="./profile.php">Profile</a></li>';
                if (isset($_SESSION['admin'])) {
                    if ($_SESSION['admin'] == 2) {
                        echo '<li><a class="" href="./admin.php">Administration</a></li>';
                    }
                }
                echo '<li><a class="" href="./logout.php">Logout</a></li>';

                echo '</ul>';
                echo '</li>';
            } else {
                echo '<li><a class="nav-list-link" href="./signIn.php">Sign in</a></li>';
            }
            ?>

        </ul>
        <div id="phoneSearch" class="btn-nav btn-search">
            <input class="submit-btn" type="submit">
            <input type="text" class="inputText" placeholder="">
        </div>
    </div>
    <form method="get" action="results.php">
        <div class="cta-container">
            <div id="search" class="btn-nav btn-search">
                <input class="submit-btn" type="submit" value="">
                <input type="text" class="inputText" placeholder="" name="keyword">
            </div>
    </form>
    <a href="cart.php" class="text-decoration">
        <div class="btn-nav">
            <img class="img" src="./img/shoppingCart.png" alt="shopping">
            <p class="cartText">Cart •</p>
            <p class="cartText"><?php
                                if (isset($_COOKIE['cart'])) {
                                    $number = json_decode($_COOKIE['cart'], true);
                                    echo count($number);
                                } else {
                                    echo '0';
                                }
                                ?></p>
        </div>
    </a>

    </div>
    <label for="menu" class="nav_label">
        <img src="./img/nav.svg" alt="img">
    </label>

</nav>