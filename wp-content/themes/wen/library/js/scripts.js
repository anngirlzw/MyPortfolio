/*
 * Bones Scripts File
 * Author: Wen Zhang
*/

/*
 * Get Viewport Dimensions
 * returns object with viewport dimensions to match css in width and height properties
 * ( source: http://andylangton.co.uk/blog/development/get-viewport-size-width-and-height-javascript )
*/
function updateViewportDimensions() {
	var w=window,d=document,e=d.documentElement,g=d.getElementsByTagName('body')[0],x=w.innerWidth||e.clientWidth||g.clientWidth,y=w.innerHeight||e.clientHeight||g.clientHeight;
	return { width:x,height:y }
}
// setting the viewport width
var viewport = updateViewportDimensions();


/*
 * Throttle Resize-triggered Events
 * Wrap your actions in this function to throttle the frequency of firing them off, for better performance, esp. on mobile.
 * ( source: http://stackoverflow.com/questions/2854407/javascript-jquery-window-resize-how-to-fire-after-the-resize-is-completed )
*/
var waitForFinalEvent = (function () {
	var timers = {};
	return function (callback, ms, uniqueId) {
		if (!uniqueId) { uniqueId = "Don't call this twice without a uniqueId"; }
		if (timers[uniqueId]) { clearTimeout (timers[uniqueId]); }
		timers[uniqueId] = setTimeout(callback, ms);
	};
})();

// how long to wait before deciding the resize has stopped, in ms. Around 50-100 should work ok.
var timeToWaitForLast = 100;

/*
 * Here's an example so you can see how we're using the above function
 *
 * This is commented out so it won't work, but you can copy it and
 * remove the comments.
 *
 *
 *
 * If we want to only do it on a certain page, we can setup checks so we do it
 * as efficient as possible.
 *
 * if( typeof is_home === "undefined" ) var is_home = $('body').hasClass('home');
 *
 * This once checks to see if you're on the home page based on the body class
 * We can then use that check to perform actions on the home page only
 *
 * When the window is resized, we perform this function
 * $(window).resize(function () {
 *
 *    // if we're on the home page, we wait the set amount (in function above) then fire the function
 *    if( is_home ) { waitForFinalEvent( function() {
 *
 *      // if we're above or equal to 768 fire this off
 *      if( viewport.width >= 768 ) {
 *        console.log('On home page and window sized to 768 width or more.');
 *      } else {
 *        // otherwise, let's do this instead
 *        console.log('Not on home page, or window sized to less than 768.');
 *      }
 *
 *    }, timeToWaitForLast, "your-function-identifier-string"); }
 * });
 *
 * Pretty cool huh? You can create functions like this to conditionally load
 * content and other stuff dependent on the viewport.
 * Remember that mobile devices and javascript aren't the best of friends.
 * Keep it light and always make sure the larger viewports are doing the heavy lifting.
 *
*/
 // Check if an element contains a specific classname
function hasClass(element, cls) {
    return (' ' + element.className + ' ').indexOf(' ' + cls + ' ') > -1;
}

var body = document.body,
mask = document.getElementById('menu-mask'),
toggleSlideLeft = document.querySelector( ".toggle-slide-left" ),
activeNav
// mask = document.createElement("div"),
;

function closeMenu() {
      body.classList.remove("sml-open");                
    activeNav = "";
    mask.style.display = "none";
}

function toggleMenu() {

  // mask.className = "mask fade";
  toggleSlideLeft.addEventListener( "click", function(){

    jQuery(body).addClass('sml-open');
    mask.style.display = "block";
    jQuery(mask).addClass('fade');
    activeNav = "sml-open";

    // classie.add( body, "sml-open" );
    // document.body.appendChild(mask);   
    // $('body').addClass('sml-open');
        
  }); //end of toggle click

  menu_items = document.querySelectorAll(".menu-items > li, #menu-close");

    // Close Menu
  [].slice.call(menu_items).forEach(function(el,i){
    el.addEventListener( "click", function(){
      closeMenu();

    // classie.remove( body, activeNav ); 
    // document.body.removeChild(mask);
        
    }); //end of el click
  }); //end of forEach

} //end of toggleMenu


jQuery(document).ready(function($) {

// toggle menu
if(Modernizr.mq('(max-width: 767px)')) {
  console.log('mobile menu');
  toggleMenu();
}

window.addEventListener('resize', function(){
  if(Modernizr.mq('(max-width: 767px)')) {
    console.log('resize to mobile menu');
    toggleMenu();
  } else {
    console.log('resize to normal menu');
    // remove mask if menu was open before resizing
    if (hasClass(document.body, "sml-open")) {
    // if (document.body.classList.contains('sml-open')) {
      console.log('mask is still open');
      closeMenu();
    }
  }
});



   /*
     * Replace all SVG images with inline SVG
     */
        jQuery('img.svg').each(function(){
            var $img = jQuery(this);
            var imgID = $img.attr('id');
            var imgClass = $img.attr('class');
            var imgURL = $img.attr('src');

            jQuery.get(imgURL, function(data) {
                // Get the SVG tag, ignore the rest
                var $svg = jQuery(data).find('svg');

                // Add replaced image's ID to the new SVG
                if(typeof imgID !== 'undefined') {
                    $svg = $svg.attr('id', imgID);
                }
                // Add replaced image's classes to the new SVG
                if(typeof imgClass !== 'undefined') {
                    $svg = $svg.attr('class', imgClass+' replaced-svg');
                }

                // Remove any invalid XML tags as per http://validator.w3.org
                $svg = $svg.removeAttr('xmlns:a');

                // Replace image with new SVG
                $img.replaceWith($svg);

            }, 'xml');

        });


// DETECT SCROLL TO FOR MENU
var header_offset = $(window).height();

//var anchor_offset = $('a[href="#wz_about"]').offset().top;

$(window).on('scroll', function() {
  console.log($(window).scrollTop());
    if ( $(window).scrollTop() > header_offset ) {
         $('header').addClass('header-bl-home');
         
        } else {
          $('header').removeClass('header-bl-home');
        }
});


}); /* end of as page load scripts */
