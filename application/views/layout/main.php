<!-- Main Header -->
<?php

?>
<!DOCTYPE html>
<!--
	ustora by freshdesignweb.com
	Twitter: https://twitter.com/freshdesignweb
	URL: https://www.freshdesignweb.com/ustora/
-->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ustora Demo</title>

    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="../../../assets/css/bootstrap.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../../assets/css/font-awesome.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="../../../assets/css/owl.carousel.css">
    <link rel="stylesheet" href="../../../assets/css/style.css">
    <link rel="stylesheet" href="../../../assets/css/responsive.css">
    <script src="../../../assets/js/jquery/jquery-3.4.1.min.js"></script>
    <script src="../../../assets/js/main.js"></script>
    <script src="../../../assets/js/index.js"></script>


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<style>
    .sidebar-categories .head{font-family:'Oswald', sans-serif;line-height:50px;background:#384aeb;padding:0 30px;font-size:18px;font-weight:400;color:#fff}.sidebar-categories .main-categories{padding:20px 28px;background:#f1f6f7}.sidebar-categories .main-categories .pixel-radio{background:transparent !important}.sidebar-categories .main-nav-list a{font-size:14px;display:block;line-height:50px;padding-left:10px;border-bottom:1px solid #eee}.sidebar-categories .main-nav-list a:hover{color:#384aeb}.sidebar-categories .main-nav-list a .number{color:#cccccc;margin-left:10px}.sidebar-categories .main-nav-list a .lnr{margin-right:10px;display:none}.sidebar-categories .main-nav-list.child a{padding-left:32px}.sidebar-filter{margin-top:30px}.sidebar-filter .top-filter-head{font-family:'Oswald', sans-serif;line-height:50px;background:#384aeb;padding:0 30px;font-size:18px;font-weight:400;color:#fff}.sidebar-filter .head{line-height:60px;padding:0 30px;font-size:15px;font-weight:400;color:#222;text-transform:capitalize}.sidebar-filter .common-filter{background:#f1f6f7;border-bottom:1px solid #eee;padding-bottom:25px}.sidebar-filter .common-filter .filter-list{position:relative;padding-left:28px}.sidebar-filter .common-filter:last-child{border-bottom:0}.filter-list{line-height:32px}.filter-list i{margin-right:10px;cursor:pointer}.filter-list .number{color:#ccc}.filter-list label{margin-bottom:3px;cursor:pointer}@-webkit-keyframes click-wave{0%{transform:translate(-50%, -50%) scale(1);opacity:0.35;position:absolute;top:50%;left:50%}100%{transform:translate(-50%, -50%) scale(3);opacity:0;top:50%;left:50%;position:absolute}}@-moz-keyframes click-wave{0%{transform:translate(-50%, -50%) scale(1);opacity:0.35;position:absolute;top:50%;left:50%}100%{transform:translate(-50%, -50%) scale(3);opacity:0;top:50%;left:50%;position:absolute}}@keyframes click-wave{0%{transform:translate(-50%, -50%) scale(1);opacity:0.35;position:absolute;top:50%;left:50%}100%{transform:translate(-50%, -50%) scale(3);opacity:0;top:50%;left:50%;position:absolute}}.pixel-radio{-webkit-appearance:none;-moz-appearance:none;-ms-appearance:none;-o-appearance:none;appearance:none;position:relative;right:0;bottom:0;left:0;height:15px;width:15px;-webkit-transition:all 0.15s ease-out 0s;-moz-transition:all 0.15s ease-out 0s;transition:all 0.15s ease-out 0s;background:#fff;border:1px solid #999999;color:#fff;cursor:pointer;display:inline-block;margin-right:10px;outline:none;position:relative;z-index:1}.pixel-radio:checked{border:8px solid #384aeb}.pixel-radio:checked::after{-webkit-animation:click-wave 0.65s;-moz-animation:click-wave 0.65s;animation:click-wave 0.65s;background:#384aeb;content:'';display:block;width:15px;height:15px;border-radius:50%;position:relative;z-index:2;opacity:0}.pixel-radio{border-radius:50%;top:2px}.pixel-radio::after{border-radius:50%}
</style>
<body>

<div class="header-area">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="user-menu">
                    <ul>
                        <?php if (!\application\components\Auth::checkLogged()): ?>
                            <li><a href="/user/profile"><i class="fa fa-user"></i> My Account</a></li>
                        <?php endif;?>
                        <li><a href="#"><i class="fa fa-heart"></i> Wishlist</a></li>
                        <?php if (!\application\components\Auth::checkLogged()): ?>
                            <li><a href='/user/register'><i class="fa fa-user"></i>Registration</a></li>
                            <li><a href='/user/login'><i class="fa fa-user"></i>Login</a></li>
                        <?php else: ?>
                            <li><a href='/user/logout'>Logout</a></li>
                        <?php endif; ?>

                    </ul>
                </div>
            </div>

            <div class="col-md-4">
                <div class="header-right">
                    <ul class="list-unstyled list-inline">
                        <li class="dropdown dropdown-small">
                            <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" href="#"><span class="key">currency :</span><span class="value">USD </span><b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">USD</a></li>
                                <li><a href="#">INR</a></li>
                                <li><a href="#">GBP</a></li>
                            </ul>
                        </li>

                        <li class="dropdown dropdown-small">
                            <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" href="#"><span class="key">language :</span><span class="value">English </span><b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">English</a></li>
                                <li><a href="#">French</a></li>
                                <li><a href="#">German</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div> <!-- End header area -->
<div class="site-branding-area">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="logo">
                    <h1><a href=""><img src="../../../assets/img/logo.png"></a></h1>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="shopping-item">
                    <a href="/site/cart">Cart - <span class="cart-amunt">$100</span> <i class="fa fa-shopping-cart"></i> <span class="product-count">5</span></a>
                </div>
            </div>
        </div>
    </div>
</div> <!-- End site branding area -->

<div class="mainmenu-area">
    <div class="container">
        <div class="row">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="/">Home</a></li>
                    <li><a href="site/products">Products</a></li>
                    <li><a href='site/about'>About</a></li>
                    <li><a href="site/contact">Contact</a></li>


                    <li>
                        <a href="#search"><i class="fa fa-search"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div> <!-- End mainmenu area --
<!-- Content -->
<?php include_once $this->basePath.$content.".php"; ?>

<!-- Main Footer -->
<div class="footer-top-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="footer-about-us">
                    <h2>u<span>Stora</span></h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis sunt id doloribus vero quam laborum quas alias dolores blanditiis iusto consequatur, modi aliquid eveniet eligendi iure eaque ipsam iste, pariatur omnis sint! Suscipit, debitis, quisquam. Laborum commodi veritatis magni at?</p>
                    <div class="footer-social">
                        <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                        <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                        <a href="#" target="_blank"><i class="fa fa-youtube"></i></a>
                        <a href="#" target="_blank"><i class="fa fa-linkedin"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="footer-menu">
                    <h2 class="footer-wid-title">User Navigation </h2>
                    <ul>
                        <li><a href="#">My account</a></li>
                        <li><a href="#">Order history</a></li>
                        <li><a href="#">Wishlist</a></li>
                        <li><a href="#">Vendor contact</a></li>
                        <li><a href="#">Front page</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="footer-menu">
                    <h2 class="footer-wid-title">Categories</h2>
                    <ul>
                        <li><a href="#">Mobile Phone</a></li>
                        <li><a href="#">Home accesseries</a></li>
                        <li><a href="#">LED TV</a></li>
                        <li><a href="#">Computer</a></li>
                        <li><a href="#">Gadets</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="footer-newsletter">
                    <h2 class="footer-wid-title">Newsletter</h2>
                    <p>Sign up to our newsletter and get exclusive deals you wont find anywhere else straight to your inbox!</p>
                    <div class="newsletter-form">
                        <form action="#">
                            <input type="email" placeholder="Type your email">
                            <input type="submit" value="Subscribe">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <!-- End footer top area -->

<div class="footer-bottom-area">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="copyright">
                    <p>&copy; 2015 uCommerce. All Rights Reserved. <a href="http://www.freshdesignweb.com" target="_blank">freshDesignweb.com</a></p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="footer-card-icon">
                    <i class="fa fa-cc-discover"></i>
                    <i class="fa fa-cc-mastercard"></i>
                    <i class="fa fa-cc-paypal"></i>
                    <i class="fa fa-cc-visa"></i>
                </div>
            </div>
        </div>
    </div>
</div> <!-- End footer bottom area -->

<!-- Latest jQuery form server -->
<script src="https://code.jquery.com/jquery.min.js"></script>

<!-- Bootstrap JS form CDN -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

<!-- jQuery sticky menu -->
<script src="../../../assets/js/owl.carousel.min.js"></script>
<script src="../../../assets/js/jquery.sticky.js"></script>

<!-- jQuery easing -->
<script src="../../../assets/js/jquery.easing.1.3.min.js"></script>

<!-- Main Script -->
<script src="../../../assets/js/main.js"></script>
<script src="../../../assets/js/index.js"></script>

<!-- Slider -->
<script type="text/javascript" src="../../../assets/js/bxslider.min.js"></script>
<script type="text/javascript" src="../../../assets/js/script.slider.js"></script>

</body>

<script>

    $(document).ready(function(){




            var id = $('.add-to-cart-link').attr('data-id');
            var quantity = $(".quantity option:selected").text()[5];
            $('.add-to-cart-link').click(function(){
            $.ajax({
                url:window.location.origin + '/site/cart',
                type:'GET',
                data:{id:id,quantity:quantity},
                success:function(data){
                    $('.filter').append(data);
                }
            });
        }

    });





    /*$.ajax({
        url:window.location.origin + '/site/cart',
        method:"POST",
        data:{id:id,quantity:quantity},
        dataType:'json',
        success:function(data){
           console.log(111);
        }
    });

});*/


</script>

</html>