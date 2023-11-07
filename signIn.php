<?php 
     require_once './database.php';
     $message = "";
     $message_login='';
 
    if($_POST){
 
        if(isset($_POST["btn-login"])){
            //validate if user already logged in
            session_start();
            if(isset($_SESSION["isLoggedIn"])){
                header("location:index.php");
            }else{
                //validate login
                $validateUsername = $database->select("tb_users","*",[
                   "email"=>$_POST["email"]
               ]);
               if(count($validateUsername) > 0){
                   if($validateUsername[0]["password"]==$_POST["password"]){
                       $_SESSION['id']=$validateUsername[0]["id_user"];
                       $_SESSION['user']=$validateUsername[0]["username"];
                       $_SESSION['isLoggedIn']=true;

                       header("location:index.php");
                   }else{
                       $message_login = "Password incorrect";
                   }
               }else{
                   $message_login = "User dont't find ";
               }


            }
        }

         if(isset($_POST["btn-sing-up"])){
             //validate if user already registered
             $validateUsername = $database->select("tb_users","*",[
                 "username"=>$_POST["user"]
             ]);
 
             if(count($validateUsername) > 0){
                 $message = "This username is already registered";
             }else{
                 $database->insert("tb_users",[
                     "fullname"=> $_POST["fullname"],
                     "username"=> $_POST["user"],
                     "password"=> $_POST["password"],
                     "email"=> $_POST["email"]
                 ]);
 
                 header("location:index.html");
             }
         }
     }
    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhaijaan+2:wght@400;500;600;700;800&family=Lalezar&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/main.css">
</head>
<body>
   <!-- nav, header -->

   <header>
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
</header>

   <div class="singin-container">
    <div class="main">
        <input type="checkbox" id="checkbox" aria-hidden="true">
        <!--Sign up--->
        <div class="signup">
            <form method="post" action="signIn.php">
                <label for="checkbox" aria-hidden="true" class="login-label">Sing up</label>
                <p class="text-lognin text-signin"><?php echo $message; ?></p>
                <input class="login-input" type="text" name="user"
                placeholder="User name" required="" >
                <input class="login-input" type="text" name="fullname"
                placeholder="Fullname" required="" >
                <input class="login-input" type="email" name="email"
                placeholder="Email" required="">
                <input class="login-input" type="Password" name="password"
                placeholder="Password" required="">
                <input class="login-input button" type="submit" name="btn-sing-up" value="Sing up">
            </form>
        </div>
        <!--Sign up--->

        <!--login--->

        <div class="login">
        <form method="post" action="signIn.php">
                <label for="checkbox" aria-hidden="true" class="login-label">Login</label> 
                <p class="text-lognin"><?php echo $message_login; ?></p>
                <input class="login-input" type="email" name="email"
                placeholder="Email" required="">
                <input class="login-input" type="Password" name="password"
                placeholder="Password" required="">
                <input class="login-input button"type="submit" name="btn-login" value="Login">
        </form>

        </div>
        <!--login--->

    </div>
</div>
    
</body>
</html>