<?php 
     require_once './database.php';
     $message = "";
     $message_login='';
     $registration=false;
 
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
                    if(password_verify($_POST["password"],$validateUsername[0]['password'])){
                        $_SESSION['id']=$validateUsername[0]["id_user"];
                        $_SESSION['user']=$validateUsername[0]["username"];
                        $_SESSION['isLoggedIn']=true;
                        $_SESSION['admin']=$validateUsername[0]["admin"];

                        header("location:index.php");
                    }else{
                        $message_login = "Password incorrect";
                    }
                }else{
                    $message_login = "User dont't find ";
                }


             }
         }
         if(isset($_POST["confirmation"])){
            $validateUsername = $database->select("tb_users","*",[
                "email"=>$_POST["email"]
            ]);
            if(count($validateUsername) > 0){
                $pass=password_hash($_POST["password"],PASSWORD_DEFAULT,['cost'=> 10]);
                $database->update("tb_users",[
                    "password"=>$pass,
                ],[
                    "id_user"=>$validateUsername[0]["id_user"]
                ]);
                $message_login = "Password change";
                $registration=false;
            }else{
                $registration=true;
                $message_login = "User dosen't exist";
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
                $pass=password_hash($_POST["password"],PASSWORD_DEFAULT,['cost'=> 10]);
                 $database->insert("tb_users",[
                     "fullname"=> $_POST["fullname"],
                     "username"=> $_POST["user"],
                     "password"=> $pass,
                     "email"=> $_POST["email"]
                 ]);
                        session_start();
                        $_SESSION['id']=$database->id();
                        $_SESSION['user']=$_POST["user"];
                        $_SESSION['isLoggedIn']=true;
                        $_SESSION['admin']=1;
 
                 header("location:index.php");
             }
         }
     }
    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/svg+xml" href="./img/logoMain.svg" />
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
            <?php 
         if(isset($_POST["btn-forget"]) || $registration==true){
            echo'<label for="checkbox" aria-hidden="true" class="login-label">Confirmation Email</label>'; 
            echo'<p class="text-lognin">'.$message_login.'</p>';
            echo'<input class="login-input" type="email" name="email"';
            echo' placeholder="Email" required="">';
            echo'<input class="login-input" type="Password" name="password"';
            echo'placeholder="New password" required="">';
            echo'<input class="login-input button button-forget" type="submit" name="confirmation" value="Confirmate email">';
         }else{
            echo'<label for="checkbox" aria-hidden="true" class="login-label">Login</label>'; 
            echo'<p class="text-lognin">'.$message_login.'</p>';
            echo'<input class="login-input" type="email" name="email"';
            echo' placeholder="Email">';
            echo'<input class="login-input" type="Password" name="password"';
            echo'placeholder="Password">';
            echo'<input class="login-input button button-forget" type="submit" name="btn-forget" value="forget my password">';
            echo'<input class="login-input button"type="submit" name="btn-login" value="Login">';
         }
           
                
            ?>
                
        </form>
        </div>
        <!--login--->

    </div>
</div>
    
</body>
</html>