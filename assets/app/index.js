if (window.location.pathname.includes("/")) {
  let params = new URLSearchParams(window.location.search);
  let pageName = params.get("page");
  const root = document.querySelector("#root");

  function init() {
    renderPage(pageName);
  }

  init();

  function fetchPage(page) {
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
