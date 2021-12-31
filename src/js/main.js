/**
 * Print the current year for the site footer
 */
function getCopyrightYear() {
    document.getElementById("year").innerHTML = new Date().getFullYear();
}
getCopyrightYear();

/**
 * Sticky header
 * Add the sticky class to the header when you reach its scroll position. 
 * Remove "sticky" when you leave the scroll position
 */
let header = document.getElementById('masthead'); // Get the header
let sticky = header.offsetTop; // Get the offset position of the navbar
function stickyHeader() {
    if (window.pageYOffset > sticky) {
        header.classList.add('sticky');
    } else {
        header.classList.remove('sticky');
    }
}
// When the user scrolls the page, add sticky header
window.onscroll = function() {stickyHeader()()};

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
document.links[current].className = 'active';

/**
 * Navigation - toggle mobile nav button
 * Toggle between showing and hiding the navigation menu links when the user clicks on the hamburger menu / bar icon
 *  */
function toggleMobileNav() {
    let nav = document.getElementById("primary-menu");
    let toggle = document.getElementById('menu-toggle')
    if (nav.style.display === "block") {
        nav.style.display = "none";
        toggle.classList.remove('open');
    } else {
        nav.style.display = "block";
        toggle.classList.add('open');
    }
}
let menuToggle = document.getElementById('menu-toggle')
let clickHandler = function () {
    toggleMobileNav();
}
menuToggle.addEventListener('click', clickHandler)
