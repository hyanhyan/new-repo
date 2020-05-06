<?php

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
                <a class="btn btn-success" href="/admin/product/1">Back</a>
                <a class="btn btn-success" href="/admin/dashboard/index">Home</a>

    <form class="text-center border border-light p-5" action="" method="post">
        <h2 class="mb-4">Add new product</h2>
        <input type="text" name="name" class="form-control" placeholder="name">
        <input type="radio" id="new" name="new" value="1" >
        <input type="radio" id="new" name="new" value="0">

        <select type="text" name="sel" style="width:220px; height: 30px;">
            <?php if (!empty($data) && isset($data)): ?>
                <option value="" disabled selected>Choose your category</option>
                <?php foreach ($data as $item=> $v):
                    ?>
                    <option value="<?= $v['id'] ?>"><?= $v['name'] ?></option>
                <?php endforeach; ?>
                <?php endif;?>
        </select>

        <br>
        <input type="text" name="price" class="form-control" placeholder="price">
        <input type="text" name="img" class="form-control" placeholder="image path">
        <input type="textarea" name="desc" class="form-control" placeholder="description">
        <input class="btn btn-success my-4 btn-block" type="submit" name="submit" value="Add">
    </form>
</div>
        </div>
    </div>
</body>
</html>
