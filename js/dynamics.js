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
            width: "100",
            height: "100",
            opacity: 0.75,
            duration: 100,
            complete: function () {
                $(this).animate({
                    width: "200",
                    height: "200",
                    opacity: 1,
                    duration: 200
                });
            }
        })
    });

});
