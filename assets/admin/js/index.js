

$('.delete').on('click',function(){

    let _idd = $(this).closest("tr")[0].cells[0].innerText;
    let _thiss = $(this).closest("tr")[0];
    let config=confirm("Are you want to delete?");
    if (config) {
        $.ajax({
            url: '/admin/category/delete',
            type: 'POST',
            data: {id: _idd},
            success: function (data) {
                if (data){
                    _thiss.remove();
                }

            }
        });
    }

});
