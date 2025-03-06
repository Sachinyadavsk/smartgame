$(document).ready(function () {

    $("#btn-back-to-top").click(function () {
        $("html, body").animate({ scrollTop: 0 }, "slow");
    });

    $(window).on('scroll', function (event) {
        if ($(this).scrollTop() > 20) {
            $("#btn-back-to-top").removeClass('hidden')
        } else {
            $("#btn-back-to-top").addClass('hidden')
        }
    });
});
