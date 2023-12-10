const toggleMenu = document.getElementById("menu")
const menuVisible = document.getElementById("menu-visible")

const toggle = () => {
    toggleMenu.classList.toggle("visible");
  };
  menuVisible.addEventListener("click",toggle)