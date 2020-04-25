<?php

echo \application\components\Message::get_message();
?>




    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <a class="btn btn-success" href="/admin/product/index">Back</a>
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
                    //var_dump($v['name']);?>
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
