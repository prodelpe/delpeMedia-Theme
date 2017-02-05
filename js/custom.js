//Custom jQuery functions and triggers - delpeMedia

// WOW
// ================================================== */
new WOW().init();

//Parallax
// ================================================== */
$(document).ready(function () {

    $(window).scroll(function () {
        var barra = $(window).scrollTop();
        var posicion = (barra * 0.50);

        $('#header .outer').css({
            'background-position': '0 -' + posicion + 'px'
        });
    });
});


//Portafolio - Hover Effect
// ================================================== */
$(document).ready(function () {

    $('.gallery-item').hover(function () {
        $(this).find('.img-title').fadeIn(300);
    }, function () {
        $(this).find('.img-title').fadeOut(100);
    });
});


//Portafolio - Change inner div link colors
// ================================================== */
$(document).ready(function () {

    $("#portafolio .img-title .content a").hover(function () {
        $("#portafolio .img-title .content h5, #portafolio .img-title .content a").css("color", "fff");
        $("#portafolio .img-title .content h5, #portafolio .img-title .content a").css("text-decoration", "none");
    },
            function () {
                $("#portafolio .img-title .content h5, #portafolio .img-title .content a").css("color", "#fff");
                $("#portafolio .img-title .content h5, #portafolio .img-title .content a").css("text-decoration", "none");
            }
    );
});

//Smooth Scrolling
// ================================================== */
$(document).ready(function () {
    // Initialize Tooltip
    $('[data-toggle="tooltip"]').tooltip();

    // Add smooth scrolling to all links in navbar
    $(".home #menu .navbar li.anchor a, #header a").on('click', function (event) {

        // Prevent default anchor click behavior
        event.preventDefault();

        // Store hash
        var hash = this.hash;

        // Using jQuery's animate() method to add smooth page scroll
        // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
        $('html, body').animate({
            scrollTop: $(hash).offset().top
        }

        , 600, 'easeOutQuad', function () {

            // Add hash (#) to URL when done scrolling (default click behavior)
            window.location.hash = hash;
        });
    });
});

/* Header Menu - Show Hide Animation
 ================================================== */
var $header = $('#menu');
var $hclass = $('#menu').attr('class');

$('.top-waypoint').each(function (i) {

    var $this = $(this),
            animClassDown = $this.data('animateDown'),
            animClassUp = $this.data('animateUp');

    $header.attr('class', $hclass + ' header-hide');

    $this.waypoint(function (direction) {

        if (direction === 'down' && animClassDown) {
            $header.removeClass(animClassUp);
            $header.addClass(animClassDown);
        } else if (direction === 'up' && animClassUp) {
            $header.removeClass(animClassDown);
            $header.addClass(animClassUp);
        }

    }, {offset: '-1px'});
});



// Example 1: From an element in DOM
$('.open-popup-link').magnificPopup({
    type: 'inline',
    midClick: true
});

////Isotope
// ================================================== */

//// init Isotope
//var $grid = $('.grid').isotope({
//    //Options
//});
//// filter items on button click
//$('.filter-button-group').on('click', 'button', function () {
//    var filterValue = $(this).attr('data-filter');
//    $grid.isotope({filter: filterValue});
//});

$(window).load(function () {
    var $container = $('.grid');
    $container.isotope({
        animationEngine: 'best-available',
        filter: '*',
        animationOptions: {
            duration: 750,
            easing: 'linear',
            queue: false
        }
    });

    $('.filter-button-group').on('click', 'button', function () {


        var selector = $(this).attr('data-filter');
        $container.isotope({
            filter: selector,
            animationOptions: {
                duration: 750,
                easing: 'linear',
                queue: false
            }
        });
        return false;
    });
});



// Complete page is fully loaded, including all frames, objects and images
$(window).load(function () {
    // Remove preloader
    // https://ihatetomatoes.net/create-custom-preloading-screen/
    $('body').addClass('loaded');
});
