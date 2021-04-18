$(document).ready(function() {
    if ($(".splash-screen").is(":visible")) {
        $(".container").css({ "opacity". "0" });
    }

    $(".splash-arrow").click(function() {
        $(".splash-screen").slideUp("800", function() {
            $(".container").delay(100).animate({ "opacity": "1.0" }, 800);
        });
    });
});

$(window).scroll(function() {
    $(window).off("scroll");
    $(".splash-screen").slideUp("800", function() {
        $("html, body").animate({ "scrollTop": "0px" }, 100);
        $(".container").delay(100).animate({ "opacity": "1.0" }, 800);
    });
});