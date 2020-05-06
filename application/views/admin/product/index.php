<?php
use application\components\Db;

echo \application\components\Message::get_message();


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
    <link rel="stylesheet" href="../../../../assets/admin/style.css">
    <script src="../../../../assets/admin/js/main.js"></script>
    <script src="../../../../assets/js/index.js"></script>


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
<form method="post">
<label for="search">Search product name</label>
<br>
<input type="search" id="prSearch" name="search">
</form>
<div id="content" class="p-4 p-md-5">

    <div class="all">
        <div class="container">
            <a class="btn btn" href="/admin/dashboard/index">Back</a>
            <a class="btn btn" href="/">Home</a>
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
                <table style="width:1300px;margin:-32px"
                       class="table table-bordered" id="table_data">
                    <thead>
                    <tr>
                        <th style="width:30%">Id</th>
                        <th style="width:30%">Name</th>
                        <th style="width:30%">Category</th>
                        <th style="width:30%">New</th>
                        <th style="width:30%">Price</th>
                        <th style="width:50%">Image</th>
                        <th style="width:30%">Desc</th>
                        <th style="width:30%">Created date</th>
                        <th style="width:30%">Updated date</th>
                        <th style="width:30%">Actions</th>
                    </tr>
                    </thead>
                    <tbody>


                    <?php if (!empty($data[0]) && isset($data[0])): ?>
                    <?php foreach ($data[0] as $key => $v):

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
                                <a href="/admin/product/update/<?= $v['id']?>" class="edit" title="Edit"
                                   data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                                <a href="/admin/product/upload/<?=$v['id']; ?>" class="img" title="upload" data-toggle="tooltip"><i
                                        class="material-icons">&#xE255;</i></a>
                                <a href="/admin/product/view/<?=$v['id'] ;?>" class="edit" title="View"
                                   data-toggle="tooltip"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                <a class="clear" title="Delete"  data-id="<?= $v['id']; ?>" data-toggle="tooltip"><i
                                            class="material-icons">&#xE872;</i></a>
                            </td>
                        </tr>
                        <?php endforeach;
                        echo $data[1];?>
                    <?php endif;?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

</body>
<script>
    $(document).ready(function() {


        load(1);
        $('#prSearch').keyup(function () {
            var text = $(this).val();
            load(1, text);


            function load(page, text = '') {

                $.ajax({
                    url: window.location.origin + '/admin/product',
                    method: 'POST',
                    data: {page: page, text: text},
                    success: function (data) {
                        if (data) {
                            $('#table_data').html(data);
                        }

                    }
                });
            }

            $(document).on('click', '.page_link', function () {
                var page = $(this)[0].innerText;
                var text = $('#prSearch').val();
                load_data(page, text);


            });
        });

    });
</script>
</html>
