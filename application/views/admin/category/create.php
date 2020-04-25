<?php
echo \application\components\Message::get_message();
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <a class="btn btn-success" href="/admin/category/index">Back</a>
            <a class="btn btn-success" href="/admin/dashboard/index">Home</a>
                <form class="text-center border border-light p-5" action="" method="post">
                    <h2 class="mb-4">Add new category</h2>
                    <input type="text" name="name" class="form-control" placeholder="Name category">
                    <small><?php if (!empty($data) && isset($data['name'])){ echo $data['name'];} ?></small>

                    <input class="btn btn-success my-4 btn-block" type="submit" name="add" value="Add">
                </form>
            </div>
        </div>

