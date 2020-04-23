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
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../sidebar-01/css/style.css">

</head>
<body>
<div class="container">
    <form action="" method="post" id="add_details">
        <label for="enterName">Enter product name</label>
        <input type="text" name="name" class="form-control">
        <input type="radio" id="new" name="new" value="1">
        <label for="new">New</label><br>
        <input type="radio" id="new" name="new" value="0">
        <label for="new">Not new</label><br><br>
        <label>All products</label>
        <select type="text" name="sel" style="width:220px; height: 30px;">
            <?php if (!empty($data) && isset($data)): ?>
                <option value="" disabled selected>Choose your category</option>
                <?php foreach ($data as  $v):
                    //var_dump($v['name']);?>
                    <option value="<?= $v['id'] ?>"><?= $v['name'] ?></option>
                <?php endforeach; ?>
                <?php endif;?>
        </select>

        <br>
        <label for="enterPrice">Enter product price</label>
        <input type="text" name="price" class="form-control">
        <label for="enterpath">Enter product image path</label>
        <input type="text" name="img" class="form-control">
        <label for="enterDesc">Enter product description</label>
        <input type="textarea" name="desc" class="form-control">
        <input type="submit" name="submit" id="add" class="btn btn-success">
    </form>
</div>
