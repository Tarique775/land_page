$(document).ready(function () {

    // let wait = false;

    $('.cardimg').hover(
        function () {
            // wait = false;
            // $('.cardimg').stop(true, true);
            $(this).css({
                "width": "118px",
                "height": "118px",
                "position": "absolute",
                // "bottom": "185px",
                // "left": "74px",
                "border-radius": "50%",
                "cursor": "pointer",
                "border": "6px solid #01B3B9",
                // "transition": "0.4s ease-in",
                "transform": "translateY(-10px)",
            });

            // wait = true;
            // if (wait) {
            //     setTimeout(function () {
            //         wait = false;
            //     }, 1000)
            // }

        },

        function () {
            setTimeout(() => {
                $(this).css({
                    "width": "118px",
                    "height": "118px",
                    "position": "absolute",
                    // "bottom": "185px",
                    // "left": "74px",
                    "border-radius": "50%",
                    // "cursor": "pointer",
                    "border": "none",
                    // "box-shadow":"1px 1px 0px 8px white",
                    "transition": "0.2s ease-in",
                    "transform": "translateY(0px)",
                })
            }, 200)
            // if (!wait) {
            //     $(this).css({
            //         "width": "118px",
            //         "height": "118px",
            //         "position": "absolute",
            //         // "bottom": "185px",
            //         // "left": "74px",
            //         "border-radius": "50%",
            //         "cursor": "pointer",
            //         "border": "none",
            //         // "box-shadow":"1px 1px 0px 8px white",
            //         "transition": "0.2s ease-in",
            //         "transform":"translateY(0px)",
            //         "z-index":"99"
            //     });
            // }
        }
    );

    $(".about").click(function () {
        $(".abouttext").fadeIn()
        $(".chooseustext").hide()
        $(".missiontext").hide()

        if (!$(".about").hasClass("active")) {
            $(".about").addClass("active")
            $(".chooseus").removeClass("active")
            $(".mission").removeClass("active")
        } else {
            $(".about").addClass("active")
        }
    })

    $(".chooseus").click(function () {
        $(".about").removeClass("active")
        $(".chooseus").addClass("active")
        $(".mission").removeClass("active")
        $(".abouttext").hide()
        $(".chooseustext").fadeIn()
        $(".missiontext").hide()
    })

    $(".mission").click(function () {
        $(".about").removeClass("active")
        $(".chooseus").removeClass("active")
        $(".mission").addClass("active")
        $(".abouttext").hide()
        $(".chooseustext").hide()
        $(".missiontext").fadeIn()
    });
})
