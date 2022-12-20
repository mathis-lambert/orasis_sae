function xhr(data) {
  let xhr = new XMLHttpRequest();
  let json = JSON.stringify(data);

  xhr.onreadystatechange = () => {
    if (xhr.readyState === 4 && (xhr.status === 200 || xhr.status === 0))
      traitement(xhr.responseText);
  };

  xhr.open("POST", "assets/controllers/php/controller");
  xhr.setRequestHeader("Content-type", "application/json; charset=utf-8");
  xhr.send(json);
}

const inscription_form = document.querySelector("#inscription_form");
const connexion_form = document.querySelector("#connexion_form");

function traitement(data) {
  data = JSON.parse(data);

  document.querySelectorAll("button[type='submit']").forEach((button) => {
    button.classList.remove("loading");
  });

  data.error == true ? error(data.message) : "";

  if (data.error == false && data.method == "inscription") {
    window.location.href = "espace-perso.php";
  }
  if (data.error == false && data.method == "connexion") {
    window.location.href = "espace-perso.php";
  }
}

if (inscription_form) {
  inscription_form.addEventListener("submit", (e) => {
    e.preventDefault();

    inscription_form
      .querySelector("button[type='submit']")
      .classList.add("loading");

    let mailValue = document.querySelector("#mail").value;
    let nomValue = document.querySelector("#nom").value;
    let prenomValue = document.querySelector("#prenom").value;
    let passwordValue = document.querySelector("#password").value;

    let data = {
      inscription: {
        email: mailValue,
        nom: nomValue,
        prenom: prenomValue,
        password: passwordValue,
      },
    };
    console.log(data);
    xhr(data);
  });
}
if (connexion_form) {
  connexion_form.addEventListener("submit", (e) => {
    e.preventDefault();

    connexion_form
      .querySelector("button[type='submit']")
      .classList.add("loading");

    let mailValue = document.querySelector("#mail").value;
    let passwordValue = document.querySelector("#password").value;

    let data = { connexion: { email: mailValue, password: passwordValue } };

    console.log(data);
    xhr(data);
  });
}

function error(message) {
  document.querySelector(".error_div").innerHTML = `
    <p id='error'>${message}</p>`;
}
