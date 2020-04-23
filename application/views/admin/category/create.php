<?php
echo \application\components\Message::get_message();
?>
<!doctype html>
<html lang="en">
<head>
    <title>Sidebar 09</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../../assets/category/css/style.css">
</head>
<body>
<p>Add new category</p>
<form action="/admin/category/create" method="post" id="add_details">
    <input type="text" name="name" class="form-control" style="border:1px solid black">
    <small><?php if (!empty($data) && isset($data['name'])){ echo $data['name'];} ?></small>
    <input type="submit" name="add" id="add" class="btn btn-success">Add
</form>

</body>
</html>