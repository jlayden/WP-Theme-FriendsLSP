function getCopyrightYear(){document.getElementById("year").innerHTML=(new Date).getFullYear()}getCopyrightYear();let header=document.getElementById("masthead"),sticky=header.offsetTop;function stickyHeader(){window.pageYOffset>sticky?header.classList.add("sticky"):header.classList.remove("sticky")}window.onscroll=function(){stickyHeader()()};