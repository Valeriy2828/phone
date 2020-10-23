
$(document).ready(function() {
    $('#show-phone').click(function () {
        $('.more-tel').removeClass('hide');
        $( "#name" ).focus();
    });
    $('#cancel').click(function () {
        $('.more-tel').addClass('hide');
    });
});
