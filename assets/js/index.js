


$(document).on('click', '.delete', function () {
    let id = $(this).attr('data-id');
    let del = $(this).closest('tr')[0];


    let configg=confirm("Are you want to delete?");
    if (configg) {
        $.ajax({
            url: window.location.origin + '/admin/category/delete',
            type: 'post',
            dataType: 'json',
            data: {del_id: id},
            success: function (data) {
                if (data) {
                    del.remove();
                }
            }
        })
    }

});

$(document).on('click', '.clear', function () {
    let productId = $(this).attr('data-id');
    let text = $(this).closest('tr')[0];

    let conf=confirm("Are you want to delete?");
    if (conf) {
        $.ajax({
            url: window.location.origin + '/admin/product/delete',
            type: 'post',
            dataType: 'json',
            data: {id: productId},
            success: function (data) {
                if (data) {
                    text.remove();
                }
            }
        })
    }

});


$(document).on('click', '.deleteImg', function () {
    let a = $(this);
    let b=a.attr('data-id');
    console.log(b);

    $.ajax({
        url: 'admin/product/image',
        type: 'post',
        dataType: 'json',
        data: {id:b},
        success: function (data) {
            if (data) {
            b.parent().parent().remove();

            }
        }


    });
});















