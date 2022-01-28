/**
 * Navigation - highlight current page
 * Add the active class to the link when on the current page or subpage. 
 */
let current = 0;
for (var i = 0; i < document.links.length; i++) {
    if (document.links[i].href === document.URL) {
        current = i;
    }
}
// document.links[current].className = 'active';

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
        btnHamburger.classList.remove('open');
        header.classList.remove('open');
        navOverlay.classList.remove('fade-in');
        navOverlay.classList.add('fade-out');
        primaryMenu.classList.remove('fade-in');
        primaryMenu.classList.add('fade-out');
        primaryMenu.style.display = "none";

    } else { // Open Hamburger Menu
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
    if (window.pageYOffset > 200) {
        header.classList.add('sticky')
        header.classList.remove('transparent');
    } 
    if (window.pageYOffset == 0) {
        header.classList.add('transparent')
        header.classList.remove('sticky');
    }
}

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
