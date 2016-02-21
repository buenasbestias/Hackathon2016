$(document).load(function() {
    alert('loaded!');
    $('.ok').click(function() {
        alert('Test');
        var beats_int = parseInt($('#beats_int').val());

        $.ajax({
            url: '/ajax.php',
            method: 'GET',
            data: {
                bpm: beats_int
            }
        }).done(function(msg) {
            alert(msg);
        });

        return false;
    });
});
