$(document).ready(function () {
    $('#datainsertID').click(function () {
        let name=$('#name').val();
        let email=$('#email').val();
        let address=$('#address').val();
        let phone=$('#phone').val();
        let data={
            name:name, email:email, address:address, phone:phone
        };
        $.ajax({
            method: "POST",
            url: 'insert.php',
            data: data,
            success: function (response) {
                // console.log(response);
                swal({
                    title: "User saved!",
                    text: response,
                    icon: "success",
                    button: false,
                    timer: 4000,
                });
                
            }
        });

    });

    $('#searchData').on('keyup', function () {
        let getValue = $(this).val();
        $.ajax({
            method: "POST",
            url: 'search.php',
            data: {'search_data': getValue},
            success: function (response) {
                    // console.log(response);
                $('tbody').html(response);
            }
        });

    });

});