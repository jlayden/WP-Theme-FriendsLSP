//
//  BootStrap 5.x JavaScript
//
//  Some Bootstrap components require JavaScript. This file powers those components.
//  It uses ECMAScript modules, so to work in browsers it must be 'bundled' into a single,
//  browser-compatible JS file. CodeKit does this automatically using Rollup.
//

//
//  1. Import Bootstrap Modules
//     Remove the modules you don't need to reduce the file size of your final JS:
//
// import '/node_modules/bootstrap/js/dist/alert';
// import 'node_modules/bootstrap/js/dist/button';
// import 'node_modules/bootstrap/js/dist/carousel';
// import 'node_modules/bootstrap/js/dist/collapse';
// import 'node_modules/bootstrap/js/dist/dropdown';
// import 'node_modules/bootstrap/js/dist/modal';
// import 'node_modules/bootstrap/js/dist/offcanvas';
// import 'node_modules/bootstrap/js/dist/popover';
// import 'node_modules/bootstrap/js/dist/scrollspy';
// import 'node_modules/bootstrap/js/dist/tab';
// import 'node_modules/bootstrap/js/dist/toast';
// import 'node_modules/bootstrap/js/dist/tooltip';

//
//  2. Import PopperJS
//     If you use the 'dropdown', 'tooltip', or 'popover' Bootstrap components, you MUST include PopperJS
//     or those components won't work. If you do not use those components, remove this import:
//
// import '@popperjs/core/lib/index.js'

//
//  3. Add your custom JavaScript below, either directly or by importing ES6 modules:
//

/**
 * Navigation - highlight current page
 * Add the active class to the link when on the current page or subpage. 
 */
/*
let current = 0;
for (var i = 0; i < document.links.length; i++) {
    if (document.links[i].href === document.URL) {
        current = i;
    }
}
document.links[current].className = 'active';
*/

/**
 * Navigation - show mobile navigation when hamburger button is clicked
 * Toggle between showing and hiding the navigation menu links when the user clicks on the hamburger menu / bar icon
 *  */
 const header = document.querySelector('.site-header');
 const navOverlay = document.querySelector('.nav-overlay');
 const primaryMenu = document.querySelector('#primary-menu');
 const btnHamburger = document.querySelector('#menu-toggle');

 btnHamburger.addEventListener('click', function(e){
    e.preventDefault();
    if (header.classList.contains('open')) { // Close Hamburger Menu
        document.body.classList.remove('modal-open');
        btnHamburger.classList.remove('open');
        header.classList.remove('open');
        navOverlay.classList.remove('fade-in');
        navOverlay.classList.add('fade-out');
        primaryMenu.classList.remove('fade-in');
        primaryMenu.classList.add('fade-out');
        primaryMenu.style.display = "none";

    } else { // Open Hamburger Menu
        document.body.classList.add('modal-open');
        btnHamburger.classList.add('open');
        header.classList.add('open');
        navOverlay.classList.remove('fade-out');
        navOverlay.classList.add('fade-in');
        primaryMenu.classList.remove('fade-out');
        primaryMenu.classList.add('fade-in');
        primaryMenu.style.display = "block";
    }
});

/**
 * Header - toggle between transparent header and fixed positioning
 * Toggle "sticky" class to the header when the user scrolls beyond its position. 
 * Toggle "transparent" class when the user scrolls to the top of the page.
 */
function stickyHeader() {
    if (window.pageYOffset == 0) {
        header.classList.remove('sticky');
        header.classList.add('transparent');
    }
    else if (window.pageYOffset > 95 && window.pageYOffset < 200) {
        header.classList.remove('transparent');
    } else if (window.pageYOffset >= 200) {
        header.classList.remove('transparent');
        header.classList.add('sticky');
    }
}
// stickyHeader();

/**
 * Header - toggle between transparent header and fixed positioning
 * Toggle "sticky" class to the header when the user scrolls beyond its position. 
 * Toggle "transparent" class when the user scrolls to the top of the page.
 */
const socialIconBar = document.querySelector('.social-icon-bar');
function handleSocialIconBar() {
    if (window.pageYOffset > 200) {
        socialIconBar.classList.add('in-left');
    } 
}
// Add On Scroll Event Listener to DOM
document.addEventListener('scroll', function(e) {
    e.preventDefault();
    stickyHeader();
    handleSocialIconBar();
});


/**
 * Print the current year for the site footer
 */
 function getCopyrightYear() {
    document.getElementById("year").innerHTML = new Date().getFullYear();
}
getCopyrightYear();

/*
$(function() {
    //caches a jQuery object containing the header element
    var header = $(".clearHeader");
    $(window).scroll(function() {
        var scroll = $(window).scrollTop();

        if (scroll >= 500) {
            header.removeClass('clearHeader').addClass("darkHeader");
        } else {
            header.removeClass("darkHeader").addClass('clearHeader');
        }
    });
});
*/


/**
 * Tabs
 */

// var triggerTabList = [].slice.call(document.querySelectorAll('#myTab a'))
// triggerTabList.forEach(function (triggerEl) {
//   var tabTrigger = new bootstrap.Tab(triggerEl)

//   triggerEl.addEventListener('click', function (event) {
//     event.preventDefault()
//     tabTrigger.show()
//   })
// })

// var triggerEl = document.querySelector('#myTab a[href="#wildlife"]')
// bootstrap.Tab.getInstance(triggerEl).show() // Select tab by name
