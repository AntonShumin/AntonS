$(function () {

    $("#comparison form").submit(function (e) {

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        })

        e.preventDefault();

        var id_hot = 1;
        var id_not = 2;

        $.ajax({
            type: 'POST',
            url: '/refresh',
            data: '',
            /*dataType: 'json',*/
            success: function (data) {

                if(data) {

                    //$('body').html(data[0]['id'] );
                    console.log(data);

                }

            },
            error: function(XMLHttpRequest, textStatus, errorThrown) {
                console.log("Status: " + textStatus);
                console.log("Error: " + errorThrown);
            }
        });


    });


})