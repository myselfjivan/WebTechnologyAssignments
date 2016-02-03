<?php 
session_start();
if($_POST['action'] == 'pagePreference') {
  $_SESSION['pagePreference'] == $_POST['action'];
  if(isset($_SESSION['pagePreference'])){
      if($_SESSION['pagePreference'] == 1)
      {
                    header("location: products.php");
          
      }
      if($_SESSION['pagePreference'] == 2)
      {
                    header("location: products2.php");
          
      }
      if($_SESSION['pagePreference'] == 3)
      {
                    header("location: products3.php");
          
      }
  }
}
?>
<script>
function myAjax(n) {
      $.ajax({
           type: "POST",
           url: 'index.php',
           data:{action:'pagePreference'},
            success: function (html) {
                alert(html);
                var f = document.forms.myForm;
                f.myNumber.value = n;
                f.submit();
            }

        });

    }
</script>
<head>
    <title>E-commerce Web Application :: Designed by Jivan Ghadage</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="N-Air Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() {setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <meta charset utf="8">
    <!--fonts-->
    <link href='//fonts.googleapis.com/css?family=Fredoka+One' rel='stylesheet' type='text/css'>

    <!--fonts-->
    <!--bootstrap-->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <!--coustom css-->
    <link href="css/style.css" rel="stylesheet" type="text/css"/>
    <!--shop-kart-js-->
    <script src="js/simpleCart.min.js"></script>
    <!--default-js-->
    <script src="js/jquery-2.1.4.min.js"></script>
    <!--bootstrap-js-->
    <script src="js/bootstrap.min.js"></script>
    <!--script-->
    <!-- FlexSlider -->
    <script src="js/imagezoom.js"></script>
    <script defer src="js/jquery.flexslider.js"></script>
    <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />

    <script>
        // Can also be used with $(document).ready()
        $(window).load(function () {
            $('.flexslider').flexslider({
                animation: "slide",
                controlNav: "thumbnails"
            });
        });
    </script>
    <!-- //FlexSlider-->
</head>
<div class="header">
    <div class="container">
        <div class="header-top">
            <div class="logo">
                <a href="index.php">N-AIR</a>
            </div>
            <div class="login-bars">
                <a class="btn btn-default log-bar" href="register.php" role="button">Sign up</a>
                <a class="btn btn-default log-bar" href="signup.php" role="button">Login</a>
                <div class="cart box_1">
                    <a href="checkout.php">
                        <h3>
                            <div class="total">
                                <span class="simpleCart_total"></span>(<span id="simpleCart_quantity" class="simpleCart_quantity"></span>)</div></h3>
                    </a>
                    <p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>
                    <div class="clearfix"> </div>
                </div>	
            </div>
            <div class="clearfix"></div>
        </div>
        <!---menu-----bar--->
        <div class="header-botom">
            <div class="content white">
                <nav class="navbar navbar-default nav-menu" role="navigation">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <!--/.navbar-header-->

                    <div class="collapse navbar-collapse collapse-pdng" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav nav-font">
                                    <li><a onclick="myAjax(1)" href="products.php">Shoes</a></li>
                                    <li><a onclick="myAjax(2)" href="products2.php">Shoes1</a></li>
                                    <li><a onclick="myAjax(3)" href="products3.php">Shoes2</a></li>
                            <div class="clearfix"></div>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <!--/.navbar-collapse-->
                    <div class="clearfix"></div>
                </nav>
                <!--/.navbar-->   
                <div class="clearfix"></div>
            </div>
            <!--/.content--->
        </div>
        <!--header-bottom-->
    </div>
</div>
<div class="head-bread">
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="index.php">HOME</a></li>
            <li class="active">LOGIN</li>
        </ol>
    </div>
</div>


