<?php



use application\components\Db;


?>


    <!-- Page Content -->
    <div class="container">
        <div class="row">
        	<br />
        	<h2 align="center">Advance Ajax Product Filters in PHP</h2>
        	<br />
            <div class="col-md-3">

                <div class="list-group">
					<h3>Brand</h3>
                    <div style="height: 180px; overflow-y: auto; overflow-x: hidden;">
					<?php

                    $query = "SELECT DISTINCT `products`.*,categories.name FROM products LEFT JOIN `categories` ON products.category_id=categories.id  ORDER BY id DESC";
                    $statement = Db::getConnection()->prepare($query);
                    $statement->execute();
                    $result = $statement->fetchAll();
                    foreach($result as $row=>$v)

                    {
                    ?>
                    <div class="list-group-item checkbox">
                        <label><input type="checkbox" class="common_selector brand" value="<?php echo $v['name']; ?>"> <?php echo $v['name']; ?></label>
                    </div>
                    <?php
                    }

                    ?>
                    </div>
                </div>



            </div>

            <div class="col-md-9">
            	<br />
                <div class="row filter_data">
<th>1</th>
                </div>
            </div>
        </div>

    </div>
<style>
#loading
{
	text-align:center;
	background: url('../../../assets/img/loader.gif') no-repeat center;
	height: 150px;
}
</style>

<script>
$(document).ready(function(){

    filter_data();

    function filter_data()
    {
        $('.filter_data').html('<div id="loading" style="" ></div>');

        var brand = get_filter('brand');


        $.ajax({
            url:window.location.origin + '/site/filter',
            method:"POST",
            data:{brand:brand},
            success:function(data){
                $('.filter_data').append(data);
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

    $('.common_selector').click(function(){
        filter_data();
    });



});
</script>
