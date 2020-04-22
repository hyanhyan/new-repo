
$('.clear').on('click',function(){

    let _del = $(this).closest("tr")[0].cells[0].innerText;
    let _th = $(this).closest("tr")[0];
    let configg=confirm("Are you want to delete?");
    if (configg) {
        $.ajax({
            url: '../products/delProduct.php',
            type: 'POST',
            data: {id: _del},
            success: function (data) {
                if (data){
                    _th.remove();
                }

            }
        });
    }

});

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


$('#catSearch').keyup(function () {
    let txt=$(this).val();
    if(txt != '') {
        $.ajax({
            url: '../categories/searchCategory.php',
            type: 'POST',
            data: {text: txt},
            success: function (data) {
                if (data){
                    $('#table').html(data);
                } else{
                    $('#table').html('Name is not found');
                }

            }
        });
    } else {
        $('#table_data').html('Name is not found');
    }
})

$('#search').keyup(function () {
    let text=$(this).val();
    if(text != '') {
        $.ajax({
            url: '../model/searchMod.php',
            type: 'POST',
            data: {text: text},
            success: function (data) {
                if (data){
                    $('#table_data').html(data);
                } else{
                    $('#table_data').html('Name is not found');
                }

            }
        });
    } else {
        alert("Name is nor found");
    }
})

$('#prSearch').keyup(function () {
    let name=$(this).val();
    if(name != '') {
        $.ajax({
            url: '../products/searchProduct.php',
            type: 'POST',
            data: {txt: name},
            success: function (data) {
                if (data){
                    $('#table_data').html(data);
                } else{
                    $('#table_data').html('Name is not found');
                }

            }
        });
    } else {
        alert("Name is nor found");
    }
})
