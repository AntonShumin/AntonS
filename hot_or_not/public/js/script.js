$(function () {

    $('something').on('click',function () {

    });

    $("#comparison form").submit(function (e) {

        e.preventDefault();
        console.log("stopped");

        var id_hot = 1;
        var id_not = 2;

        $.ajax({
            type: "POST",
            url: root + "/ajax/locaties/filter.php",
            data: data,
            dataType: 'json',
            success: function (data) {

                if(data) {

                }

            }
        });

    });


})