<?php
echo \application\components\Message::get_message();
use application\components\Db;
?>
    <div class="container-fluid">
    <div class="row">
    <div class="col-12">
<div class="aa">
    <a class="btn btn-success" href="/admin/category/index">Back</a>
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
<?php
