const toggleMenu = document.getElementById("menu");
const menuVisible = document.getElementById("menu-visible");
const closeMenu = document.getElementById("close-menu");
const ClickLinkCloseMenu = document.getElementById("link-a")
const MOBILE_UP = document.getElementById("mobile-up");
const bgMargin = document.getElementById("margin-top");

const toggle = () => {
  toggleMenu.classList.toggle("visible");
};
menuVisible.addEventListener("click", toggle);

const closeMenuMain = () => {
  toggleMenu.classList.remove("visible");
};

closeMenu.addEventListener("touchmove", closeMenuMain);

ClickLinkCloseMenu.addEventListener("click",closeMenuMain)

closeMenu.addEventListener("click", closeMenuMain);

const mobileUp = () => {
  MOBILE_UP.classList.add("up");
  bgMargin.classList.add("mg-t");
};

const mobileDown = () => {
  MOBILE_UP.classList.remove("up");
  bgMargin.classList.remove("mg-t");
};

let lastScrollTop = 0;

window.addEventListener("scroll", function () {
  const currentScroll =
    window.pageYOffset || document.documentElement.scrollTop;

  if (currentScroll > lastScrollTop) {
    mobileDown();
  } else {
    mobileUp();
  }
  if (currentScroll <= 0) {
    mobileUp();
  }
  lastScrollTop = currentScroll <= 0 ? 0 : currentScroll;
});
