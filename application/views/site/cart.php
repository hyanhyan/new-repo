

<a id="btnEmpty" href="/site/products/?action=empty">Empty Cart</a>
<?php

if(isset($data)){
    $total_quantity = 0;
    $total_price = 0;
    ?>
    <table class="tbl-cart" cellpadding="10" cellspacing="1">
        <tbody>
        <tr>
            <th style="text-align:left;">Name</th>
            <th style="text-align:left;">Code</th>
            <th style="text-align:right;" width="5%">Quantity</th>
            <th style="text-align:right;" width="10%">Unit Price</th>
            <th style="text-align:right;" width="10%">Price</th>
            <th style="text-align:center;" width="5%">Remove</th>
        </tr>
        <?php
        foreach ($data as $item){


            $item_price = $item['quantity']*$item['price'];
            ?>
            <tr>
                <td><img src="<?php echo $item["image"]; ?>" class="cart-item-image" /><?php echo $item['name']; ?></td>
                <td><?php echo $item['id']; ?></td>
                <td style="text-align:right;"><?php echo $item['quantity']; ?></td>
                <td style="text-align:right;"><?php echo "$ ".$item['price']; ?></td>
                <td style="text-align:right;"><?php echo "$ ". number_format($item_price,2); ?></td>

                <td style="text-align:center;"><a class="btnRemoveAction" data-id="<?=$item['id']?>" data-toggle="tooltip"><i
                                class="material-icons">&#xE872;</i></a></td>
                <td style="text-align:center;"><a href='/site/order/?quantity=<?=$item["quantity"]?>&id=<?=$item["id"]; ?>"' class='btn btn-success m-b-10px'><i
                            class="material-icons">add_shopping_cart</i>
            </tr>
            <?php
            $total_quantity += $item['quantity'];
            $total_price += ($item['price']*$item['quantity']);
        }
        ?>
        <tr>
            <td colspan="2" align="right">Total:</td>
            <td align="right"><?php echo $total_quantity; ?></td>
            <td align="right" colspan="2"><strong><?php echo "$ ".number_format($total_price, 2); ?></strong></td>
            <a href='/site/order' class='btn btn-success m-b-10px'>
            <span class='glyphicon glyphicon-shopping-cart'></span> Proceed to Checkout";
            </a>
        </tr>
        </tbody>
    </table>
    <?php
} else {
    ?>
    <div class="no-records">Your Cart is Empty</div>
    <?php
}
?>

<script>
    $(document).on('click', '.btnRemoveAction', function () {

        let id = $(this).attr('data-id');
        let del = $(this).closest('tr')[0];
            $.ajax({
                url:window.location.origin + '/site/delete',
                type: 'POST',
                dataType: 'JSON',
                data: {del_id: id},
                success: function (response) {

                   del.remove();
               }

                })

        })


</script>
