const header=document.querySelector(".site-header"),navOverlay=document.querySelector(".nav-overlay"),primaryMenu=document.querySelector("#primary-menu"),btnHamburger=document.querySelector("#menu-toggle");function stickyHeader(){0==window.pageYOffset?(header.classList.remove("sticky"),header.classList.add("transparent")):window.pageYOffset>120&&window.pageYOffset<200?header.classList.remove("transparent"):window.pageYOffset>=120&&(header.classList.remove("transparent"),header.classList.add("sticky"))}btnHamburger.addEventListener("click",(function(e){e.preventDefault(),header.classList.contains("open")?(document.body.classList.remove("modal-open"),btnHamburger.classList.remove("open"),header.classList.remove("open"),navOverlay.classList.remove("fade-in"),navOverlay.classList.add("fade-out"),primaryMenu.classList.remove("fade-in"),primaryMenu.classList.add("fade-out"),primaryMenu.style.display="none"):(document.body.classList.add("modal-open"),btnHamburger.classList.add("open"),header.classList.add("open"),navOverlay.classList.remove("fade-out"),navOverlay.classList.add("fade-in"),primaryMenu.classList.remove("fade-out"),primaryMenu.classList.add("fade-in"),primaryMenu.style.display="block")})),navOverlay.addEventListener("click",(function(e){e.preventDefault(),header.classList.contains("open")?(document.body.classList.remove("modal-open"),btnHamburger.classList.remove("open"),header.classList.remove("open"),navOverlay.classList.remove("fade-in"),navOverlay.classList.add("fade-out"),primaryMenu.classList.remove("fade-in"),primaryMenu.classList.add("fade-out"),primaryMenu.style.display="none"):(document.body.classList.add("modal-open"),btnHamburger.classList.add("open"),header.classList.add("open"),navOverlay.classList.remove("fade-out"),navOverlay.classList.add("fade-in"),primaryMenu.classList.remove("fade-out"),primaryMenu.classList.add("fade-in"),primaryMenu.style.display="block")}));const socialIconBar=document.querySelector(".social-icon-bar");function handleSocialIconBar(){window.pageYOffset>200&&null!==socialIconBar&&socialIconBar.classList.add("in-left")}function getCopyrightYear(){document.getElementById("year").innerHTML=(new Date).getFullYear()}document.addEventListener("scroll",(function(e){e.preventDefault(),stickyHeader(),handleSocialIconBar()})),getCopyrightYear();let anchorMembership=document.getElementById("membership"),anchorVolunteer=document.getElementById("volunteer"),anchorDonate=document.getElementById("donate"),anchorHomepageSectionTwo=document.getElementById("section2");function scrollTo(e,a,o){if(!(o<=0)){var n=(a-e.scrollTop)/o*10;setTimeout((function(){e.scrollTop=e.scrollTop+n,e.scrollTop!==a&&scrollTo(e,a,o-10)}),10)}}anchorMembership&&scrollTo(document.body,anchorMembership.offsetTop,600),anchorVolunteer&&scrollTo(document.body,anchorVolunteer.offsetTop,600),anchorDonate&&scrollTo(document.body,anchorDonate.offsetTop,600),anchorHomepageSectionTwo&&scrollTo(document.body,anchorHomepageSectionTwo.offsetTop,600),window.onload=()=>{document.body.classList.remove("load")};