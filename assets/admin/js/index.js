

$('.delete').on('click', function () {
    let id = $(this).attr('data-id');
    let del = $(this).closest('tr')[0];
    let config=confirm("Are you want to delete?");
    if (config) {
                $.ajax({
                    url: window.location.origin + '/admin/category/delete',
                    type: 'post',
                    dataType: 'json',
                    data: {del_id: id},
                    success: function (data) {
                        if (data){
                            del.remove();
                        }
                    }
                })
            }
});

$('.clear').on('click', function () {
    let idd = $(this).attr('data-id');
    let dell = $(this).closest('tr')[0];
    let config=confirm("Are you want to delete?");
    if (config) {
                $.ajax({
                    url: window.location.origin + '/admin/product/delete',
                    type: 'post',
                    dataType: 'json',
                    data: {del_id: idd},
                    success: function (data) {
                        if (data){
                            dell.remove();
                        }
                    }
                })
            }
    });



