
$('.menu-day.crazy-english .day').on('change', function () {
    $('audio').each(function () {
        this.pause(); // Stop playing
        this.currentTime = 0; // Reset time
    });
    $('.new-items').hide();
    $('.new-items').removeClass('hide');
    $('.new-items.' + this.value +'').show();
});