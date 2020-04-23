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
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Created date</th>
                        <th>Updated date</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tbody>
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
                <script src="../../../../assets/admin/js/index.js"></script>
                <script src="../../../../assets/category/js/jquery-3.4.1.min.js"></script>
</body>
</html>
