"use strict";

/******************************************************************/
/** Header-Nav-Mobile-Friendly Javascript                        **/
/** https://github.com/adamschricker/header-nav-mobile-friendly  **/
/**                                                              **/
/** Please contact if you have ideas or issues.                  **/
/******************************************************************/


const CloseMobileNav = () => {
  document.querySelector("header").classList.remove("open");
}


const NavButtonClick = () => {
  const header = document.querySelector("header");
  header.classList.add("open");

  const headerNavList = header.querySelector("nav ul");
  headerNavList.addEventListener("click", CloseMobileNav);

  if (!document.querySelector("div.overlay")) {
    const overlay = document.createElement("div");
    overlay.classList.add("overlay");
    overlay.addEventListener("click", CloseMobileNav);
    header.appendChild(overlay);
  }
}


const NavChecker = () => {
  const windowWidth = window.innerWidth;

  const header = document.querySelector("header");
  header.classList.remove("mobile");

  const headerWidth = header.scrollWidth;

  if (headerWidth > windowWidth) {
    const headerNav = header.querySelector("nav");

    if (!headerNav.querySelector(":scope > button")) {
      const menuButton = document.createElement("button");
      menuButton.innerHTML = "menu";
      menuButton.addEventListener("click", NavButtonClick);
      headerNav.appendChild(menuButton);
    }

    header.classList.add("mobile");
  } else {
    CloseMobileNav();
  }
}
window.addEventListener("load", NavChecker);
window.addEventListener("resize", NavChecker);
