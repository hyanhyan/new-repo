

<!DOCTYPE html>
<html>
<head>
    <title>MyPage</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="../../../../assets/style.css">
    <link rel="stylesheet" href="../../../../assets/admin/style.css">
    <script src="../../../../assets/js/jquery/jquery-3.4.1.min.js"></script>
    <script src="../../../../assets/js/index.js"></script>
    <style>
        #myImg {
            width:300px;
            height:300px;
        }
    </style>
</head>
<body>



<div class="container" style="width:500px;">
    <form id="submit_form" action="" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label>Select Image</label>
            <input type="file" multiple="multiple" name="file" id="image_file" />
            <span class="help-block">Allowed File Type - jpg, jpeg, png, gif</span>
        </div>
        <input type="submit" name="upload_button" class="btn btn-info" value="Upload" />
    </form>
    <br/>
    <h3 align="center">Image Preview</h3>
    <div id="image_preview">
    </div>
</div>
​



    <?php

     if (!empty($data) && isset($data)){
         ?>

    <?php foreach ($data as $image):
         ?>


        <div class="col-lg-6 col-md-6 content">
            <img class="image" src="../../../../uploads/<?= pathinfo($image, PATHINFO_BASENAME) ?>" alt="456">
            <div class="middle">
                <button type="button" class="deleteImg" name="delete" data-id="<?= pathinfo($image, PATHINFO_BASENAME) ?>">Jnjel</button>
            </div>
        </div>
    <?php endforeach; ?>
    <?php }?>

</body>

<script src="../../../../assets/js/index.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
</html>
