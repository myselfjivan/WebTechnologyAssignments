<?php
   //include("config.php");
   include("header.php");
   session_start();
   if(isset($_SESSION['userinfo'])){
       header("location: index.php");
   }else if($_SERVER["REQUEST_METHOD"] == "POST") {
       $username = $_POST("username");
       $password = $_POST("password");
       if($username == "jivan" && $password == "test"){
           $userinfo['username'] = $username;
           $_SESSION['userinfo'] = $userinfo;
          header("location: index.php");
      }else{
          $error = "Your Login Name or Password is invalid";
      }
   }
?>
<!DOCTYPE html>
<html lang="en">
    
    <body>
        
        <!--signup-->
        <!-- login-page -->
        <div class="login">
            <div class="container">
                <div class="login-grids">
                    <div class="col-md-6 log">
                             <h3>Login</h3>
                             <div class="strip"></div>
                             <p>Welcome, please enter the following to continue.</p>
                             <p>If you have previously Login with us, <a href="#">Click Here</a></p>
                             <form action="" method="POST">
                                 <h5>User Name:</h5>	
                                 <input type="text" name="username" value="" required="">
                                 <h5>Password:</h5>
                                 <input type="password" name="password" value="" required=""><br>					
                                 <input type="submit" value="Login">

                             </form>
                             <div><?php echo "$error";?></div>
                            <a href="#">Forgot Password ?</a>
                    </div>
                    <div class="col-md-6 login-right">
                            <h3>New Registration</h3>
                            <div class="strip"></div>
                            <p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
                            <a href="register.php" class="button">Create An Account</a>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
<!-- //login-page -->
        <!--signup-->
       <?php include("footer.php"); ?>
    </body>
</html>