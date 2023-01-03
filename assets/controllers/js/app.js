function error(message) {
  document.querySelector(".error_div").innerHTML = `
    <p id='error'>${message}</p>`;
}

function success(message) {
  document.querySelector(".error_div").innerHTML = `
    <p id='success'>${message}</p>`;
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

/* check all mails inputs  */
const mailInputs = document.querySelectorAll("input[type='email']");
if (mailInputs) {
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
    let parentTableRow = document.querySelectorAll(
      `.${data.target}Table tr[data-${data.target}id='${data[0]}']`
    );
    parentTableRow.forEach((row) => {
      row.classList.remove("editMode");
      row.querySelectorAll("input:not(.userId), select").forEach((input) => {
        input.setAttribute("disabled", "disabled");
      });
      row.querySelector(".deleteButton").classList.remove("disabled");
      row.querySelector(".validateButton").classList.remove("validate");
      row.querySelector(".validateButton").classList.remove("loading");
    });

    if (data.target == "article") {
      window.location.reload();
    }

    success(data.message);
  }

  if (data.error == false && data.method == "submitArticle") {
    document.querySelectorAll("input, textarea").forEach((input) => {
      input.value = "";
    });

    success(data.message);
  }

  if (data.error == true && data.method == "submitArticle") {
    error(data.message);
  }

  if (data.error == false && data.method == "delete") {
    let parentTableRow = document.querySelectorAll(
      `.tableContainer tr[data-${data.target}id='${data[0]}'][data-target='${data.target}']`
    );
    parentTableRow.forEach((row) => {
      row.remove();
    });
    success(data.message);
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
const editTable = document.querySelectorAll(".editTable");

if (editTable) {
  const editButtons = document.querySelectorAll(".editButton");
  const deleteButtons = document.querySelectorAll(".deleteButton");

  /* 
    tempInputsValues is used to store inputs values to undo changes
  */
  let tempInputsValues = [];

  /* 
    edit buttons event listener
  */
  editButtons.forEach((button) => {
    button.addEventListener("click", (e) => {
      // get parent table row
      let parentTableRow = button.parentElement.parentElement;

      // get userid
      let userId = parentTableRow.dataset.userid || null;
      let articleId = parentTableRow.dataset.articleid || null;

      // get all inputs in parent table row
      let inputs = parentTableRow.querySelectorAll(
        "input:not(.userId), select, textarea"
      );

      // get target table
      let target = button.parentElement.parentElement.dataset.target;

      console.log(target);

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
        let data = {};
        if (target == "users") {
          data = {
            edit: {
              target: target,
              id: userId,
              nom: inputsValues[0],
              prenom: inputsValues[1],
              email: inputsValues[2],
              role: inputsValues[3],
            },
          };
        } else if (target == "article") {
          data = {
            edit: {
              target: target,
              id: articleId,
              titre: inputsValues[0],
              contenu: inputsValues[1],
              auteur: inputsValues[2],
              statut: inputsValues[3],
            },
          };
        }

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

            if (target == "users") {
              data = {
                edit: {
                  target: target,
                  id: userId,
                  nom: inputsValues[0],
                  prenom: inputsValues[1],
                  email: inputsValues[2],
                  role: inputsValues[3],
                },
              };
            } else if (target == "article") {
              data = {
                edit: {
                  target: target,
                  id: articleId,
                  titre: inputsValues[0],
                  contenu: inputsValues[1],
                  auteur: inputsValues[2],
                  statut: inputsValues[3],
                },
              };
            }

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
      if (!button.classList.contains("disabled")) {
        let parentTableRow = button.parentElement.parentElement;
        let target = parentTableRow.dataset.target;

        let id =
          target == "user"
            ? parentTableRow.dataset.userid
            : parentTableRow.dataset.articleid;

        let data = {
          delete: {
            target: target,
            id: id,
          },
        };

        xhr(data);
      }
    });
  });
}

const articleForm = document.querySelector("#article-form");

if (articleForm) {
  articleForm.addEventListener("submit", (e) => {
    e.preventDefault();
    let titre = document.querySelector("#articleTitle").value;
    let resume = document.querySelector("#articleResume").value;
    let file = document.querySelector("#file").files[0];
    let data = {
      submitArticle: {
        titre: titre,
        resume: resume,
        file: file,
      },
    };
    xhr(data);
  });
}
