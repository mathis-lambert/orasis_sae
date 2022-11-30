console.time();

const root = document.querySelector("#root");

/* function fetchPage(page) {
  fetch(`./views/${page}.html`)
    .then((res) => res.text())
    .then((data) => {
      root.innerHTML = data;
    });
}

function fetchJs(page) {
  fetch(`assets/controllers/js/${page}.js`)
    .then((res) => res.text())
    .then((data) => {
      eval(data);
    });
}

function renderPage(page) {
  switch (page) {
    case "accueil":
      fetchPage("accueil");
      fetchJs("accueil");
      break;
    case "connexion":
      fetchPage("connexion");
      fetchJs("connexion");
      break;
    case "contact":
      fetchPage("contact");
      fetchJs("contact");
      break;
    default:
      history.pushState({}, "", `?page=${"accueil"}`);
      fetchPage("accueil");
      fetchJs("accueil");
      break;
  }
}

function updateParam(p) {
  history.pushState({}, "", `?page=${p}`);
  renderPage(p);
  window.scrollTo(0, 0);
} */

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
console.timeEnd();
