<?php
echo \application\components\Message::get_message();
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
        .all{
            margin-left: -150px;
            margin-top:-200px;
        }
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
    <div class="container-fluid">
    <div class="row">
    <div class="col-12">
<div class="aa">
    <a class="btn btn-success" href="/admin/category/1">Back</a>
    <a class="btn btn-success" href="/admin/dashboard/index">Home</a>
    <form class="text-center border border-light p-5" action="" method="post">
        <h2 class="mb-4">Edit category</h2>
        <input type="text" name="name" class="form-control" placeholder="Name category"
               value="<?php if (!empty($data) && isset($data[0]['name'])){ echo $data[0]['name'];} ?>">
        <small><?php if (!empty($data) && isset($data['name'])){ echo $data['name'];} ?></small>


        <input class="btn btn-success my-4 btn-block" type="submit" name="submit" value="Create">
    </form>
</div>
    </div>
    </div>
    </div>
</body>
    </html>