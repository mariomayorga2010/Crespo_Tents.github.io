// Header Dark on Hover script
jQuery(document).ready(changeHeaderColor);
jQuery(window).on('resize scroll',changeHeaderColor);
function changeHeaderColor(){
    if (jQuery(window).width() > 991.98) {
        jQuery( "#header" ).hover(
            function() {
                if (!jQuery(this).hasClass("sticky-header")) {
                    jQuery( this ).addClass( "hover-light" );
                }
                jQuery( "#wrapper" ).addClass( "header-overlay" );
            }, function() {
                if (!jQuery(this).hasClass("sticky-header")) {
                    jQuery( this ).removeClass( "hover-light" );
                }
                jQuery( "#wrapper" ).removeClass( "header-overlay" );
            }
        );
    }
};



// Show Sticky Header on Scroll script
jQuery(document).ready( function($){
    var lastScrollTop = 0;
    window.addEventListener("scroll", function(event){
        var st = jQuery(this).scrollTop();
        if (st > lastScrollTop){
            jQuery('#header.sticky-on-scrollup').removeClass('show-sticky-onscroll'); // Down Scroll
        } else {
            jQuery('#header.sticky-on-scrollup').addClass('show-sticky-onscroll'); // Up Scroll
        }
        lastScrollTop = st;
    });
});




// Mega-Menu Hover script
var menuTargetLinks = jQuery('.mega-menu-links [data-target]');
menuTargetLinks.hover( function(){
    var el = jQuery(this),
        elTarget = el.attr( 'data-target' ),
        targets = jQuery('.target-content').children();

    menuTargetLinks.removeClass('target-link-active');
    targets.removeClass('target-active');
    el.addClass('target-link-active');
    jQuery(elTarget).addClass('target-active');
});




// set the starting position of the cursor outside of the screen
var clientX = -100;
var clientY = -100;
var innerCursor = document.querySelector('.canvas-cursor');

var initCursor = function() {
    // add listener to track the current mouse position
    document.addEventListener("mousemove", function(e) {
        clientX = e.clientX;
        clientY = e.clientY;
    });

    // transform the innerCursor to the current mouse position
    // use requestAnimationFrame() for smooth performance
    var render = function() {
        innerCursor.style.transform = `translate(${clientX}px, ${clientY}px)`;
        requestAnimationFrame(render);
    };
    requestAnimationFrame(render);
};

initCursor();

var circularText = document.getElementsByClassName("circular-text-rotate");

[].forEach.call( circularText, function( element ) {
    var circleType = new CircleType( element ).radius(80);
});