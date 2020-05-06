<!-- Home Page Content -->


<div class="slider-area">
    <!-- Slider -->
    <div class="block-slider block-slider4">
        <ul class="" id="bxslider-home4">
            <li>
                <img src="../../../assets/img/h4-slide.png" alt="Slide">
                <div class="caption-group">
                    <h2 class="caption title">
                        iPhone <span class="primary">6 <strong>Plus</strong></span>
                    </h2>
                    <h4 class="caption subtitle">Dual SIM</h4>
                    <a class="caption button-radius" href="#"><span class="icon"></span>Shop now</a>
                </div>
            </li>
            <li><img src="../../../assets/img/h4-slide2.png" alt="Slide">
                <div class="caption-group">
                    <h2 class="caption title">
                        by one, get one <span class="primary">50% <strong>off</strong></span>
                    </h2>
                    <h4 class="caption subtitle">school supplies & backpacks.*</h4>
                    <a class="caption button-radius" href="#"><span class="icon"></span>Shop now</a>
                </div>
            </li>
            <li><img src="../../../assets/img/h4-slide3.png" alt="Slide">
                <div class="caption-group">
                    <h2 class="caption title">
                        Apple <span class="primary">Store <strong>Ipod</strong></span>
                    </h2>
                    <h4 class="caption subtitle">Select Item</h4>
                    <a class="caption button-radius" href="#"><span class="icon"></span>Shop now</a>
                </div>
            </li>
            <li><img src="../../../assets/img/h4-slide4.png" alt="Slide">
                <div class="caption-group">
                    <h2 class="caption title">
                        Apple <span class="primary">Store <strong>Ipod</strong></span>
                    </h2>
                    <h4 class="caption subtitle">& Phone</h4>
                    <a class="caption button-radius" href="#"><span class="icon"></span>Shop now</a>
                </div>
            </li>
        </ul>
    </div>
    <!-- ./Slider -->
</div> <!-- End slider area -->




<div class="container">
    <div class="row">
        <div class="col-xl-1 col-lg-4 col-md-5">
            <div class="sidebar-categories">
                <div class="head">Browse Categories</div>
                <div class="list-group">
                    <h3>Brand</h3>
                    <div style="height: 180px; overflow-y: auto; overflow-x: hidden;">
                        <?php
                       use application\components\Db;
                        $query = "SELECT DISTINCT `products`.*,categories.name FROM products LEFT JOIN `categories` ON products.category_id=categories.id  ORDER BY id DESC";
                        $statement = Db::getConnection()->prepare($query);
                        $statement->execute();
                        $result = $statement->fetchAll();
                        foreach($result as $row=>$v)

                        {
                            ?>
                            <div class="list-group-item checkbox">
                                <label><input type="checkbox" class="selectbox newbrand" value="<?php echo $v['name']; ?>"> <?php echo $v['name']; ?></label>
                            </div>
                            <?php
                        }

                        ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="maincontent-area">
            <div class="zigzag-bottom">

                <div class="col-md-12">
                    <div class="latest-product">
                        <h2 class="section-title">Latest Products</h2>
                        <div class="product-carousel">
                            <?php foreach ($result as $item=> $v):

                                ?>
                                <div class="single-product">
                                    <div class="product-f-image">
                                        <img src="<?=$v['image_path']?>" alt="">
                                        <div class="product-hover">

                                            <a href="#" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                        </div>

                                    </div>
                                    <form method="post" action="site/cart/?action=add&pid=<?=$v["id"]; ?>">
                                    <div class="cart-action"><input type="text" class="product-quantity" name="quantity" value="1" size="2" />
                                        <input type="submit" value="Add to Cart" class="btnAddAction" /></div><i class="fa fa-shopping-cart"></i> Add to cart
                                    </form>
                                    <div class="product_id" style="display:none"><?=$v['id']?></div>
                                    <h2><a href="#"><?=$v['prName']?> </a></h2>

                                    <div class="product-carousel-price">
                                        <ins><?=$v['price']?></ins>
                                    </div>


                                </div>
                            <?php endforeach;?>





                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <!-- End main content area -->

<div class="brands-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="brand-wrapper">
                    <div class="brand-list">
                        <img src="../../../assets/img/brand1.png" alt="">
                        <img src="../../../assets/img/brand2.png" alt="">
                        <img src="../../../assets/img/brand3.png" alt="">
                        <img src="../../../assets/img/brand4.png" alt="">
                        <img src="../../../assets/img/brand5.png" alt="">
                        <img src="../../../assets/img/brand6.png" alt="">
                        <img src="../../../assets/img/brand1.png" alt="">
                        <img src="../../../assets/img/brand2.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <!-- End brands area -->

<div class="product-widget-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="single-product-widget">
                    <h2 class="product-wid-title">Top Sellers</h2>
                    <a href="" class="wid-view-more">View All</a>
                    <div class="single-wid-product">
                        <a href="#"><img src="../../../assets/img/product-thumb-1.jpg" alt="" class="product-thumb"></a>
                        <h2><a href="#">Sony Smart TV - 2015</a></h2>
                        <div class="product-wid-rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <div class="product-wid-price">
                            <ins>$400.00</ins> <del>$425.00</del>
                        </div>
                    </div>
                    <div class="single-wid-product">
                        <a href="#"><img src="../../../assets/img/product-thumb-2.jpg" alt="" class="product-thumb"></a>
                        <h2><a href="#">Apple new mac book 2015</a></h2>
                        <div class="product-wid-rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <div class="product-wid-price">
                            <ins>$400.00</ins> <del>$425.00</del>
                        </div>
                    </div>
                    <div class="single-wid-product">
                        <a href="#"><img src="../../../assets/img/product-thumb-3.jpg" alt="" class="product-thumb"></a>
                        <h2><a href="#">Apple new i phone 6</a></h2>
                        <div class="product-wid-rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <div class="product-wid-price">
                            <ins>$400.00</ins> <del>$425.00</del>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="single-product-widget">
                    <h2 class="product-wid-title">Recently Viewed</h2>
                    <a href="#" class="wid-view-more">View All</a>
                    <div class="single-wid-product">
                        <a href="#"><img src="../../../assets/img/product-thumb-4.jpg" alt="" class="product-thumb"></a>
                        <h2><a href="#">Sony playstation microsoft</a></h2>
                        <div class="product-wid-rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <div class="product-wid-price">
                            <ins>$400.00</ins> <del>$425.00</del>
                        </div>
                    </div>
                    <div class="single-wid-product">
                        <a href="#"><img src="../../../assets/img/product-thumb-1.jpg" alt="" class="product-thumb"></a>
                        <h2><a href="#">Sony Smart Air Condtion</a></h2>
                        <div class="product-wid-rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <div class="product-wid-price">
                            <ins>$400.00</ins> <del>$425.00</del>
                        </div>
                    </div>
                    <div class="single-wid-product">
                        <a href="#"><img src="../../../assets/img/product-thumb-2.jpg" alt="" class="product-thumb"></a>
                        <h2><a href="#">Samsung gallaxy note 4</a></h2>
                        <div class="product-wid-rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <div class="product-wid-price">
                            <ins>$400.00</ins> <del>$425.00</del>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="single-product-widget">
                    <h2 class="product-wid-title">Top New</h2>
                    <a href="#" class="wid-view-more">View All</a>
                    <div class="single-wid-product">
                        <a href="#"><img src="../../../assets/img/product-thumb-3.jpg" alt="" class="product-thumb"></a>
                        <h2><a href="#">Apple new i phone 6</a></h2>
                        <div class="product-wid-rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <div class="product-wid-price">
                            <ins>$400.00</ins> <del>$425.00</del>
                        </div>
                    </div>
                    <div class="single-wid-product">
                        <a href="#"><img src="../../../assets/img/product-thumb-4.jpg" alt="" class="product-thumb"></a>
                        <h2><a href="#">Samsung gallaxy note 4</a></h2>
                        <div class="product-wid-rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <div class="product-wid-price">
                            <ins>$400.00</ins> <del>$425.00</del>
                        </div>
                    </div>
                    <div class="single-wid-product">
                        <a href="#"><img src="../../../assets/img/product-thumb-1.jpg" alt="" class="product-thumb"></a>
                        <h2><a href="#">Sony playstation microsoft</a></h2>
                        <div class="product-wid-rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <div class="product-wid-price">
                            <ins>$400.00</ins> <del>$425.00</del>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <!-- End product widget area -->
<script>
    /*
    $(document).ready(function(){

        filter_data();

        function filter_data()
        {
            $('.fill-data').html('<div id="load" style=""></div>');

            var select = get_filter('newbrand');


            $.ajax({
                url:window.location.origin + '/site/productFilter',
                method:"POST",
                data:{select:select},
                success:function(data){
                    $('.fill-data').append(data);
                }
            });
        }

        function get_filter(class_name)
        {
            var filter = [];
            $('.'+class_name+':checked').each(function(){
                filter.push($(this).val());
            });
            return filter;
        }

        $('.selectbox').click(function(){
            filter_data();
        });



    });/*

    /* $(document).ready(function(){


         function data()
         {

             var id = $('.add-to-cart-link').attr('data-id');
             var quantity = $(".quantity option:selected").text()[5];

             $.ajax({
                 url:window.location.origin + '/site/add',
                 method:"POST",
                 data:{id:id,quantity:quantity},
                 success:function(data){
                     $('.filter').append(data);
                 }
             });
         }



         $('.add-to-cart-link').click(function(){
             window.location.href='/site/cart';
             data();
         });



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

<!-- Latest jQuery form server -->

