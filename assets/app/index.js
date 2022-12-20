const navbar = document.querySelector("header"),
  heroNav = document.querySelector(".landing-header"),
  burgerMenu = document.querySelectorAll(".burger-menu"),
  menuButtons = document.querySelectorAll("#menu-button"),
  menu = document.querySelector(".navbar-menu");

document.addEventListener("scroll", () => {
  console.log(window.scrollY);
  if (window.scrollY > 100) {
    navbar.classList.add("scrolled");
    heroNav.classList.add("scrolled");
  } else {
    navbar.classList.remove("scrolled");
    heroNav.classList.remove("scrolled");
  }
});

menuButtons.forEach((button) => {
  button.addEventListener("click", () => {
    burgerMenu.forEach((burger) => {
      burger.classList.toggle("active");
    });
    heroNav.classList.toggle("toggled-landing");
    menu.classList.toggle("menu-toggled");
  });
});
