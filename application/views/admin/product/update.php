<?php

use application\components\Db;

echo \application\components\Message::get_message();


?>

<div class="aa">
    <a class="btn btn-success" href="/admin/product/index">Back</a>
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

<script src="../js/index.js"></script>
<script src="../js/jquery-3.4.1.min.js"></script>

</body>
</html>
