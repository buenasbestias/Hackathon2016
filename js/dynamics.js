$(window).load(function() {

    var last_bpm = 0;
    var prev_timestamp = 0;

    $('#pulse_button').click(function() {
        // Animation stuff
        $(this).animate({
            width: "100px",
            height: "125px",
            'padding-top': "25px",
            opacity: 0.5
        }, 75, "swing", function () {
            $(this).animate({
                width: "150px",
                height: "150px",
                padding: "0",
                opacity: 1
            }, 50);
        });

        //Beats counting
        if (prev_timestamp !== 0) {
            var now_timestamp = Date.now();
            var timestamp_difference = now_timestamp - prev_timestamp;
            var seconds_timestamp_difference = timestamp_difference / 1000;
            var current_bpm = 60 / seconds_timestamp_difference;

            if (last_bpm !== 0) {
                var average_bpm = (last_bpm + current_bpm) / 2;
            } else {
                var average_bpm = current_bpm;
            }
            last_bpm = average_bpm;
            prev_timestamp = now_timestamp;

            $('#beats_int').val(Math.floor(last_bpm));
        } else {
            prev_timestamp = Date.now();
        }
    });

    $('.ok').click(function() {
        var beats_int = parseInt($('#beats_int').val());

        $.ajax({
            url: '/ajax.php',
            method: 'GET',
            data: {
                bpm: beats_int
            }
        }).done(function(data) {
            var parsed_data = JSON.parse(data);
            $('.author_text').html(parsed_data.echonest.artist_name);
            $('.song').html(parsed_data.echonest.title);

            if (parsed_data.spotify_link) {
                $('.spotify-place').html('<a class="spotify-link" href="' + parsed_data.spotify_link + '"><img src="img/logo-spotify.png"></a>')
            }
        });

        return false;
    });
});
