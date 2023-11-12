<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="estilo.css">
    <link rel="stylesheet" href="./css/main.css">
    <script src="./js/main.js" async></script>
    <title>Sultan of Flavors </title>
</head>

<body>
    <section class="container-cart">
        

        <!-- cart -->
        <div class="cart">
            <div class="header-cart">
                <h2>Cart</h2>
            </div>



            <div class="cart-items">
                <div class="cart-item">
                    <img src="./img/hummus.png" alt="hummus" width="80px" class="cart-img">
                    <div class="cart-item-details">
                        <span class="cart-item-tittle">Hummus</span>
                        <div class="selector-amount">
                            <i class="fa-solid fa-minus minimus-amount i"></i>
                            <input type="text" value="1" class="cart-item-amount" disabled>
                            <i class="fa-solid fa-plus add-amount i"></i>
                        </div>
                        <span class="carrito-item-precio">$15.000,00</span>
                    </div>
                    <span class="btn-delete">
                        <i class="fa-solid fa-trash i"></i>
                    </span>
                </div>

                <div class="cart-item">
                    <img src="./img/hummus.png" alt="hummus" width="80px" class="cart-img">
                    <div class="cart-item-details">
                        <span class="cart-item-tittle">Hummus</span>
                        <div class="selector-amount">
                            <i class="fa-solid fa-minus minimus-amount i"></i>
                            <input type="text" value="1" class="cart-item-amount" disabled>
                            <i class="fa-solid fa-plus add-amount i"></i>
                        </div>
                        <span class="carrito-item-precio">$15.000,00</span>
                    </div>
                    <span class="btn-delete">
                        <i class="fa-solid fa-trash i"></i>
                    </span>
                </div>

                <div class="cart-item">
                    <img src="./img/hummus.png" alt="hummus" width="80px" class="cart-img">
                    <div class="cart-item-details">
                        <span class="cart-item-tittle">Hummus</span>
                        <div class="selector-amount">
                            <i class="fa-solid fa-minus minimus-amount i"></i>
                            <input type="text" value="1" class="cart-item-amount" disabled>
                            <i class="fa-solid fa-plus add-amount i"></i>
                        </div>
                        <span class="carrito-item-precio">$15.000,00</span>
                    </div>
                    <span class="btn-delete">
                        <i class="fa-solid fa-trash i"></i>
                    </span>
                </div>

            </div>
            <div class="cart-total">
                <div class="row">
                    <strong>Tu Total</strong>
                    <span class="cart-price-total">
                        $120.000,00
                    </span>
                </div>
                <button class="btn-pay">Pay <i class="fa-solid fa-bag-shopping"></i> </button>
            </div>
        </div>


    </section>
</body>

</html>