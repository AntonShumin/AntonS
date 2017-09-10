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
        popup($(this));

        $.ajax({
            type: 'POST',
            url: '/refresh',
            data: {hot: id_hot, not: id_not},
            dataType: 'json',
            success: function (data) {

                if (data) {

                    //$('body').html(data[0]['id'] );
                    //console.log(data[0]);

                    $('.col-md-6').each(function (index) {
                        $("input[name='hot']", this).val(data[index]['id']);
                        $("input[name='not']", this).val(data[index]['oponent_id']);
                        $('img', this).attr('src', 'img/candidates/' + data[index]['filename']);
                        $('img', this).attr('alt', data[index]['name']);

                    });

                }

            },
            error: function (XMLHttpRequest, textStatus, errorThrown) {
                console.log("Status: " + textStatus);
                console.log("Error: " + errorThrown);
            }
        });


    });

    function popup(element) {

        $(".popup").remove();
        $(".container").append("<p class='popup'>HOT STUFF</p>");

        var name = $('img', element).attr('alt');
        $(".popup").html("HOT " + name.toUpperCase());

        var position = element.offset();
        var y = position['top'] + element.height() / 2;
        var x = position['left'] + element.width() / 2
        var x_offset = $('.popup').width() / 2;
        var y_offset = $('.popup').height() / 2;


        $(".popup").css({top: y - y_offset, left: x - x_offset, display: 'block'});
        $(".popup").animate({

                opacity: 1,
                fontSize: "80px",
                left: x - x_offset * 2,


            }, 1000, function () {

                $(".popup").animate({

                        opacity: 0,
                        fontSize: "0px",
                        top: "0px",
                        left: $( window ).width() / 2

                    }, 300, function () {

                    }
                );
            }
        );


    }


})