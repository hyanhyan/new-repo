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
<div class="aa">
    <a class="btn btn-success" href="/admin/product/1">Back</a>
    <a class="btn btn-success" href="/admin/dashboard/index">Home</a>
    <form action="" method="post" id="add_details">

        <select type="text" name="sel" style="width:220px; height: 30px;">
            <?php if (!empty($data[1]) && isset($data[1])): ?>
            <?php foreach ($data[1] as $item=> $v):

            ?>
            <option value="<?php echo $v['id']; ?>" <?php if($data[0][0]['category_id']==$v['id']) echo 'selected'; ?>><?php echo $v['name']; ?></option>
            <option value="<?= $data[0][0]['category_id'] ?>"><?= $v['name'] ?></option>
            <?php endforeach; ?>
            <?php endif;?>

        </select>

        <input type="text" value="<?php if (!empty($data[0]) && isset($data[0][0]['prName'])){ echo $data[0][0]['prName'];} ?>" name="product" class="ml-3 mb-2 form-control">
        <small><?php if(!empty($data) && isset($data['prName'])){ echo $data['prName'];}?></small>" >

        <button type="submit" name="submit" data-id="" class="sub">Submit</button>
    </form>
</div>



</body>
</html>
