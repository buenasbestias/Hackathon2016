$(window).load(function() {
    $('.ok').click(function() {
        var beats_int = parseInt($('#beats_int').val());

        $.ajax({
            url: '/ajax.php',
            method: 'GET',
            data: {
                bpm: beats_int
            }
        }).done(function(data) {
            alert(data);
        });

        return false;
    });

    var current_bpm = 0;
    var prev_timestamp = 0;

    $('#pulse_button').click(function() {
        $(this).animate({
            width: "100px",
            height: "100px",
            margin: "50px 0",
            opacity: 0.5
        }, 100, "swing", function () {
            $(this).animate({
                width: "200px",
                height: "200px",
                opacity: 1
            }, 200);
        });
    });

});
