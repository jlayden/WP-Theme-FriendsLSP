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