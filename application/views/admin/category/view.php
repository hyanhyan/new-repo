<?php
use application\components\Db;

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
    <label for="search">Search category name</label>
    <br>
    <input type="search" id="catSearch" name="search">
</form>
<div id="content" class="p-4 p-md-5">
    <a href = "/" class="edit">Home</a>
    <a href = "/admin" class="edit">Dashboard</a>


    <div class="all">
        <div class="container">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-8"><h2>Categories <b>Details</b></h2></div>
                        <div class="col-sm-4">

                            <a href="/admin/category/create" class="add-new"><i class="fa fa-plus"></i> Add New
                                category<a>
                        </div>
                    </div>
                </div>
                <table class="table table-bordered" id="table">


                    <tbody>
                    <tbody>
                    <a class="btn btn-success" href="/admin/category/1">Back</a>
                    <a class="btn btn-success" href="/admin/dashboard/index">Home</a>
                    <a class="btn btn-success" href="/admin/category/update/<?= $data[0]['id']; ?>">Update</a>
                    <button class="btn btn-danger delete" data-id="<?= $data[0]['id']; ?>">Delete</button>
                    <?php if (!empty($data) && isset($data)): ?>
                        <?php foreach ($data[0] as $key => $value): ?>
                            <tr>
                                <th><?= $key; ?></th>
                                <td><?= $value; ?></td>
                            </tr>

                        <?php endforeach; ?>
                    <?php endif; ?>
                    </tbody>

                </table>

</body>
</html>
