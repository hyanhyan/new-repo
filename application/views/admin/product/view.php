<?php
?>
<form>
    <label for="search">Search product name</label>
    <br>
    <input type="search" id="catSearch" name="search">
</form>
<div id="content" class="p-4 p-md-5">
    <a href = "/" class="edit">Home</a>
    <a href = "/admin" class="edit">Dashboard</a>


    <div class="all">
        <div class="container">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-8"><h2>Product <b>Details</b></h2></div>
                        <div class="col-sm-4">

                            <a href="/admin/product/create" class="add-new"><i class="fa fa-plus"></i> Add New
                                product<a>
                        </div>
                    </div>
                </div>
                <table class="table table-bordered" id="table">
                    <thead>
                    <tr>
                        <th style="width:20%">Id</th>
                        <th style="width:20%">Name</th>
                        <th style="width:20%">Category</th>
                        <th style="width:20%">IsNew</th>
                        <th style="width:20%">Price</th>
                        <th style="width:20%">Image</th>
                        <th style="width:20%">Desc</th>
                        <th style="width:20%">Created date</th>
                        <th style="width:20%">Updated date</th>

                    </tr>
                    </thead>
                    <tbody>
                    <tbody>
                    <a class="btn btn-success" href="/admin/product/index">Back</a>
                    <a class="btn btn-success" href="/admin/dashboard/index">Home</a>
                    <a class="btn btn-primary" href="/admin/product/update/<?= $data[0]['id']; ?>">Update</a>
                    <button class="btn btn-danger delete" data-id="<?= $data[0]['id']; ?>">Delete</button>
                    <?php if (!empty($data) && isset($data)): ?>
                        <?php foreach ($data[0] as $key => $value): ?>
                            <tr>
                                <th><?= $key; ?></th>
                                <td><?= $value; ?></td>
                            </tr>

                        <?php endforeach; ?>
                    <?php endif; ?>
                    </tbody>

                </table>

