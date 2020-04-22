<?php
use application\components\Db;

echo \application\components\Message::get_message();

echo "All Categories";
?>
<form>
<label for="search">Search product name</label>
<br>
<input type="search" id="prSearch" name="search">
</form>
<div id="content" class="p-4 p-md-5">

    <div class="all">
        <div class="container">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-8"><h2>Product <b>Details</b></h2></div>
                        <div class="col-sm-4">
                            <a href="newProduct.php" class="add-new"><i class="fa fa-plus"></i> Add New
                                product<a>
                        </div>
                    </div>
                </div>
                <table style="width:140%"
                       class="table table-bordered" id="table_data">
                    <thead>
                    <tr>
                        <th style="width:20%">Id</th>
                        <th style="width:20%">Name</th>
                        <th style="width:20%">Category</th>
                        <th style="width:20%">IsNew</th>
                        <th style="width:20%">Price</th>
                        <th style="width:20%">Image</th>
                        <th style="width:20%">Desc</th>
                        <th style="width:20%">Created date</th>
                        <th style="width:20%">Updated date</th>
                        <th style="width:20%">Actions</th>
                    </tr>
                    </thead>
                    <tbody>


                    <?php if (!empty($data) && isset($data)): ?>
                    <?php foreach ($data as $key => $v):
                            var_dump($v);?>

                        <tr>

                            <td><?php echo $v["id"] ?></td>
                            <td><?php echo $v["prName"] ?></td>
                            <td><?php echo $v["name"] ?></td>
                            <td><?php echo $v["is_New"] ?></td>
                            <td><?php echo $v["price"] ?></td>
                            <td><?php echo $v["image_path"] ?></td>
                            <td><?php echo $v["description"] ?></td>
                            <td><?php echo $v["created_date"] ?></td>
                            <td><?php echo $v["update_date"] ?></td>



                            <td style="display: flex">
                                <a href="/admin/product/update/<?= $v['id']?>&category_id=<?=$v['category_id']?>" class="edit" title="Edit"
                                   data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                                <a style="color:#E34724" class="clear" title="Delete" data-toggle="tooltip"><i
                                        class="material-icons">&#xE872;</i></a>
                            </td>
                        </tr>
                        <?php endforeach;?>
                    <?php endif;?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
