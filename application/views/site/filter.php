<?php


use application\components\Db;

if(isset($_POST["brand"]))
{
    $brand_filter = implode("','", $_POST["brand"]);

}
$query = "
		SELECT * FROM products LEFT JOIN `categories` ON products.category_id=categories.id WHERE categories.name='$brand_filter';
	";

$statement = Db::getConnection()->prepare($query);
$statement->execute();
$result = $statement->fetchAll();






$total_row = $statement->rowCount();
$output = '';
if($total_row > 0) {
    foreach ($result as $row) {
        $output .= '
			<div class="col-sm-4 col-lg-3 col-md-3">
				<div style="border:1px solid #ccc; border-radius:5px; padding:16px; margin-bottom:16px; height:450px;">
					<img src="image/' . $row['image_path'] . '" alt="" class="img-responsive" >
					<p align="center"><strong><a href="#">' . $row['prName'] . '</a></strong></p>
					<h4 style="text-align:center;" class="text-danger" >' . $row['price'] . '</h4>
					<p>Camera : ' . $row['description'] . ' MP<br />
					Brand : ' . $row['name'] . ' <br />
					New: ' . $row['is_New'] . ' GB </p>
				</div>

			</div>
			';
    }
}
else
{
    $output = '<h3>No Data Found</h3>';
}
echo $output;


?>