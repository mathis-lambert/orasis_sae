if (window.location.pathname.includes("/index2")) {
  let params = new URLSearchParams(window.location.search);
  let pageName = params.get("page");
  const root = document.querySelector("#root");

  function renderPage(page) {
    switch (page) {
      case "accueil":
        fetchPage("accueil");
        break;
      case "connexion":
        fetchPage("connexion");
        break;
      case "contact":
        fetchPage("contact");
        break;
      default:
        fetchPage("home");
        break;
    }
  }

  function fetchPage(page) {
    fetch(`${page}.html`)
      .then((res) => res.text())
      .then((data) => {
        root.innerHTML = data;
      });
  }

  function init() {
    renderPage(pageName);
  }

  init();

  function updateParam(p) {
    history.pushState({}, "", `?page=${p}`);
    renderPage(p);
  }
}

const navbar = document.querySelector("header");
const heroNav = document.querySelector(".landing-header");

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
