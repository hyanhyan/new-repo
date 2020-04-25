<!-- Dashboard Main Header -->
<!doctype html>
<html lang="en">
<head>
    <title>Sidebar 09</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../../assets/admin/css/style.css">
    <link rel="stylesheet" href="../../../assets/category/css/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
    <script src="../../../assets/javascript/jquery-3.5.0.min.js"></script>
    <script src="../../../assets/javascript/script.js"></script>
</head>
<body>

<div class="wrapper d-flex align-items-stretch">
    <nav id="sidebar">
        <div class="custom-menu">
            <button type="button" id="sidebarCollapse" class="btn btn-primary">
            </button>
        </div>
        <div class="img bg-wrap text-center py-4" style="background-image: url(../../../assets/admin/images/bg_1.jpg);">
            <div class="user-logo">
                <div class="img"></div>
                <h3>Catriona Henderson</h3>
            </div>
        </div>
        <div class="wrapper d-flex align-items-stretch">
            <nav id="sidebar">
                <div class="p-4 pt-5">
                    <a href="#" class="img logo rounded-circle mb-5" style="background-image: url(../../../assets/admin/images/logo.jpg);"></a>
                    <ul class="list-unstyled components mb-5">
                        <li>
                            <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Dashboard</a>
                            <ul class="collapse list-unstyled" id="pageSubmenu">
                                <li class="active">
                                    <a href="/admin/category">Categories</a>
                                </li>
                                <li class="active">
                                    <a href="/admin/product">Products</a>
                                </li>

                            </ul>
                        </li>
                        <li>

                                    <a href="/">Home</a>
                                </li>
                                <li>
                                    <a href="#">Model</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Product</a>
                            <ul class="collapse list-unstyled" id="pageSubmenu">
                                <li>
                                    <a href="#">Page 1</a>
                                </li>
                                <li>
                                    <a href="#">Page 2</a>
                                </li>
                                <li>
                                    <a href="#">Page 3</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Model</a>
                        </li>
                        <li>
                            <a href="#">Contact</a>
                        </li>
                    </ul>

                    <div class="footer">
                        <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib.com</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div>

                </div>
            </nav>
<!-- Content -->
<?php include_once $this->basePath.$content.".php";; ?>

            <script src="../../../assets/admin/js/jquery/jquery.min.js"></script>
            <script src="../../../assets/admin/js/jquery-3.4.1.min.js"></script>
</body>
</html>
<!-- Dashboard Main Footer -->