//delete category
$(document).on('click', '.delete', function () {
    let id = $(this).attr('data-id');
    let del = $(this).closest('tr')[0];
    $.confirm({
        title: 'Warning',
        content: 'do you really want to delete?',
        buttons: {
            OK: function() {
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
            },
            cancel: function () {

            },
        },
    });
});
