function error(message) {
  document.querySelector(".error_div").innerHTML = `
    <p id='error'>${message}</p>`;
}

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

  if (
    (data.error == false && data.method == "inscription") ||
    (data.error == false && data.method == "connexion")
  ) {
    window.location.href = "espace-perso.php";
  }

  if (data.error == false && data.method == "edit") {
    let parentTableRow = document.querySelector(
      `.usersTable tr[data-userid='${data[0]}']`
    );
    parentTableRow.classList.toggle("editMode");
    parentTableRow
      .querySelectorAll("input:not(.userId), select")
      .forEach((input) => {
        input.toggleAttribute("disabled");
      });
    parentTableRow.querySelector(".deleteButton").classList.toggle("disabled");
    parentTableRow
      .querySelector(".validateButton")
      .classList.remove("validate");
    parentTableRow.querySelector(".validateButton").classList.remove("loading");
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

/* TABLE EDITING */
const usersTable = document.querySelector(".usersTable");

if (usersTable) {
  const editButtons = document.querySelectorAll(".editButton");
  const deleteButtons = document.querySelectorAll(".deleteButton");

  let tempInputsValues = [];

  editButtons.forEach((button) => {
    button.addEventListener("click", (e) => {
      let parentTableRow = button.parentElement.parentElement;
      let userId = parentTableRow.dataset.userid;
      let inputs = parentTableRow.querySelectorAll(
        "input:not(.userId), select"
      );
      let inputsValues = [];

      inputs.forEach((input) => {
        inputsValues.push(input.value);
      });

      parentTableRow
        .querySelector(".deleteButton")
        .classList.toggle("disabled");

      if (parentTableRow.classList.contains("editMode")) {
        parentTableRow.classList.toggle("editMode");

        inputs.forEach((input) => {
          //reset inputs values
          input.value = tempInputsValues.shift();
          input.toggleAttribute("disabled");
          input.classList.remove("invalid");
        });
      } else {
        let data = {
          edit: {
            id: userId,
            nom: inputsValues[0],
            prenom: inputsValues[1],
            email: inputsValues[2],
            role: inputsValues[3],
          },
        };

        parentTableRow.classList.toggle("editMode");
        inputs.forEach((input) => {
          input.toggleAttribute("disabled");
          tempInputsValues.push(input.value);

          /* if value of input changes */
          input.addEventListener("input", (e) => {
            parentTableRow
              .querySelector(".validateButton")
              .classList.add("validate");
            inputsValues = [];
            inputs.forEach((input) => {
              inputsValues.push(input.value);
            });

            data = {
              edit: {
                id: userId,
                nom: inputsValues[0],
                prenom: inputsValues[1],
                email: inputsValues[2],
                role: inputsValues[3],
              },
            };

            parentTableRow.querySelector(".validateButton").onclick = () => {
              xhr(data);
              parentTableRow
                .querySelector(".validateButton")
                .classList.remove("validate");
              parentTableRow
                .querySelector(".validateButton")
                .classList.add("loading");
            };
          });
        });
      }
    });
  });

  deleteButtons.forEach((button) => {
    button.addEventListener("click", (e) => {
      e.preventDefault();
      let id = button.getAttribute("data-id");
      let data = { delete: { id: id } };
      xhr(data);
    });
  });
}

/* check all mails inputs  */
const mailInputs = document.querySelectorAll("input[type='email']");
mailInputs.forEach((input) => {
  input.addEventListener("keyup", (e) => {
    let value = input.value;
    let regex = /^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/;
    if (regex.test(value)) {
      input.classList.remove("invalid");
    } else {
      input.classList.add("invalid");
    }
  });
});
