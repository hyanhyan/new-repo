

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
                                <li>
                                    <a href="/admin/category">Categories</a>
                                </li>
                                <li>
                                    <a href = "/admin/product">Products</a>
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





<!-- Dashboard Main Footer -->