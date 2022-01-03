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
 * Slim header
 * Add the slim class to the header when you reach its scroll position. 
 * Remove "slim" when you leave the scroll position
 */
let sticky = header.offsetTop; // Get the offset position of the navbar
function slimHeader() {
    if (window.pageYOffset > sticky) {
        header.classList.add('slim');
    } else {
        header.classList.remove('slim');
    }
}
// When the user scrolls the page, add sticky header
window.onscroll = function() {slimHeader()()};

/**
 * Print the current year for the site footer
 */
 function getCopyrightYear() {
    document.getElementById("year").innerHTML = new Date().getFullYear();
}
getCopyrightYear();
