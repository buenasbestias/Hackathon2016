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
});
