<?php
echo \application\components\Message::get_message();
use application\components\Db;
$id=$_GET["id"];







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


    </head>
<body>
<div class="aa">
    <form action="" method="get">
        <input type="text" name="name" class="form-control" placeholder="Name category"
               value="<?php if (!empty($data) && isset($data[0]['name'])){ echo $data[0]['name'];} ?>">
        <button type="submit" name="submit" data-id="" class="sub">Submit</button>
    </form>
</div>

<?php
