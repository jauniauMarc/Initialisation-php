const { parseJSON } = require("jquery");

function verifierFormulaire() {
  let nom = document.getElementById("nom");
  let prenom = document.getElementById("prenom");
  let email = document.getElementById("email");
  let motDePasse = document.getElementById("motdepasse");
  let message = document.getElementById("message");
  let caseCoche = document.getElementById("caseCoche");
  let texteCase = document.querySelector("label")

  // mot de passe
  if (motDePasse.value.length < 8) {
    motDePasse.classList.add('isinvalid');
    motDePasse.classList.remove('isvalid');
    Mmdp.classList.remove('invisible')
  } else {
    motDePasse.classList.remove('isinvalid');
    motDePasse.classList.add('isvalid');
    Mmdp.classList.add('invisible')
  }

  // email
  if (email.value.includes('@')) {
    email.classList.add('isvalid');
    email.classList.remove('isinvalid');
  } else {
    email.classList.add('isinvalid');
    email.classList.remove('isvalid');
  }

  // prénom
  if (prenom.value.length == "") {
    prenom.classList.add('isinvalid');
    prenom.classList.remove('isvalid');
  } else {
    prenom.classList.remove('isinvalid');
    prenom.classList.add('isvalid');
  }

  // nom
  if (nom.value.length == "") {
    nom.classList.add('isinvalid');
    nom.classList.remove('isvalid');
  } else {
    nom.classList.remove('isinvalid');
    nom.classList.add('isvalid');
  }

  // message
  if (message.value == "") {
    message.classList.add('isinvalid');
    message.classList.remove('isvalid');
} else {
    message.classList.remove('isinvalid');
    message.classList.add('isvalid');
}

// Case
  if (caseCoche.checked){
    texteCase.classList.add('textvalid');
    texteCase.classList.remove('textinvalid');
   } else{
    texteCase.classList.remove('textvalid');
    texteCase.classList.add('textinvalid');
  }

}
