<?php
use application\components\Db;

echo \application\components\Message::get_message();

echo "All Categories";
?>
<html lang="en">
<head>
    <title>Sidebar 01</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../../assets/category/css/style.css">



    <style>
        .btn {
            background-color: #846459;
            border: 1px solid black;
            text-decoration: none;
            color: white;
            padding: 6px 12px;
            text-align: center;
            font-size: 16px;
            margin: 4px 2px;
            opacity: 0.6;
            transition: 0.3s;
        }
    </style>
</head>
<body>
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
                            <a href="/admin/product/create" class="add-new"><i class="fa fa-plus"></i> Add New
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
                            ?>

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
</div>
<script src="assets/admin/js/jquery-3.4.1.min.js"></script>
<script src="assets/admin/js/index.js"></script>
</body>
