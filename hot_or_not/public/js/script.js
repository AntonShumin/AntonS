$(function () {

    $("#comparison form").submit(function (e) {

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        })

        e.preventDefault();

        var id_hot = $("input[name='hot']", this).val();
        var id_not = $("input[name='not']", this).val();

        $.ajax({
            type: 'POST',
            url: '/refresh',
            data: {hot: id_hot, not: id_not},
            dataType: 'json',
            success: function (data) {

                if (data) {

                    //$('body').html(data[0]['id'] );
                    console.log(data[0]);

                    $('.col-md-6').each(function ( index ) {
                        $("input[name='hot']", this).val( data[index]['id'] );
                        $("input[name='not']", this).val( data[index]['oponent_id'] );
                        $('img',this).attr('src','img/candidates/'+data[index]['filename']);
                        $('img',this).attr('alt', data[index]['name']);

                    });

                }

            },
            error: function (XMLHttpRequest, textStatus, errorThrown) {
                console.log("Status: " + textStatus);
                console.log("Error: " + errorThrown);
            }
        });


    });


})