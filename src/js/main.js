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
//  const logo = document.querySelector('.custom-logo-link');
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

navOverlay.addEventListener('click', function(e){
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
        // logo.classList.add('fade-in')
        header.classList.remove('sticky');
        header.classList.add('transparent');
    }
    else if (window.pageYOffset > 120 && window.pageYOffset < 200) {
        header.classList.remove('transparent');
    } else if (window.pageYOffset >= 120) {
        // logo.classList.add('fade-out')
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

/**
 * Smooth Scroll To Effect for Jump Nav on Donate Page
 */
let anchorMembership = document.getElementById("membership");
let anchorVolunteer = document.getElementById("volunteer");
let anchorDonate = document.getElementById("donate");
let anchorHomepageSectionTwo = document.getElementById("section2");
function scrollTo(element, to, duration) {
    if (duration <= 0) return;
    var difference = to - element.scrollTop;
    var perTick = difference / duration * 10;

    setTimeout(function() {
        element.scrollTop = element.scrollTop + perTick;
        if (element.scrollTop === to) return;
        scrollTo(element, to, duration - 10);
    }, 10);
}
if (anchorMembership) scrollTo(document.body, anchorMembership.offsetTop, 600);
if (anchorVolunteer) scrollTo(document.body, anchorVolunteer.offsetTop, 600);
if (anchorDonate) scrollTo(document.body, anchorDonate.offsetTop, 600);
if (anchorHomepageSectionTwo) scrollTo(document.body, anchorHomepageSectionTwo.offsetTop, 600);

/**
 * Remove Flicker on Load
 */
window.onload = () => {
    document.body.classList.remove("load");
};


/**
 * HomePage Bg Cards | Fade In Bottom Animation
 */
//  const observerOptions = {
//     root: null,
//     threshold: 0,
//     rootMargin: '0 0 -50px 0'
// };

// const observer = new IntersectionObserver(entries => {
//     entries.forEach(entry => {
//         if (entry.isIntersecting) {
//             entry.target.classList.add('in-view');
//             observer.unobserve(entry.target);
//         }
//     });
// }, observerOptions);

// window.addEventListener('DOMContentLoaded', () => { 

//     const cards = Array.from(document.querySelectorAll('card'));
    
//     for (let card of cards) {
//       observer.observe(card);
//     }
    
// });

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
