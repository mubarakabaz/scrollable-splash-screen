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