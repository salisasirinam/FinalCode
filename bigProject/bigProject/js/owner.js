// --------------------------Navbar Left----------------------------
// ALWAYS START AT TOP OF SCREEN
window.addEventListener("load", function() {
    setTimeout(function() {
        window.scrollTo(0, 1);
    }, 0);
});

// INITIALIZE NAVBAR
$(document).ready(function() {

    initNavbar();
});

// NAVBAR SCROLLING 
$(function() {

    $('a[href*=\\#]').on('click', function(event) {
        event.preventDefault();
        $('html,body').animate({ scrollTop: $(this.hash).offset().top }, 300);

    });
});

$("#ca_page-wrapper").scrollspy({ target: "#ca_sidenav" });

$('[data-spy="scroll"]').each(function() {
    var $spy = $(this).scrollspy('refresh');
})

var NavVisible = false;
var NowActive = 0;
var ClickTarget = 0;

function initNavbar() {

    NowActive = 0;
    ClickTarget = 0;

    $('#ca_navToggle img').attr("src", "images/menu-up.png");

    NavVisible = true;
}

// SLIDE THE NAVBAR DOWN / UP
function toggleNavbar() {

    if (NavVisible) {

        $("#ca_sidenav").addClass("CA_hideNav");
        $('#ca_navToggle img').attr("src", "images/menu-down.png");

        NavVisible = false;

    } else {

        $("#ca_sidenav").removeClass("CA_hideNav");
        $('#ca_navToggle img').attr("src", "images/menu-up.png");

        NavVisible = true;
    }
}

// SLIDE THE NAVBAR LEFT / RIGHT
function slideNavbar() {

    var sideNav = $("#ca_sidenav");

    if (NavVisible) {

        sideNav.css("width", "49px");
        sideNav.removeClass("CA_slideNavRight");
        sideNav.addClass("CA_slideNavLeft");

        $('#ca_navToggle img').attr("src", "images/menu-down.png");

        NavVisible = false;

    } else {

        sideNav.css("width", "100px");
        sideNav.removeClass("CA_slideNavLeft");
        sideNav.addClass("CA_slideNavRight");

        $('#ca_navToggle img').attr("src", "images/menu-up.png");

        NavVisible = true;
    }
}