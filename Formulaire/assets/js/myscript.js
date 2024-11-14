function verifierFormulaire() {
    let motDePasse = document.getElementById('MotDePasse1');
    let email = document.getElementById('mail');
    let Prenom = document.getElementById('Prenom');
    let Nom = document.getElementById('Nom');
  
    if (motDePasse.value.length < 8) {
      motDePasse.classList.add('isinvalid');
      motDePasse.classList.remove('isvalid');
      
     
  } else {
      motDePasse.classList.remove('isinvalid');
      motDePasse.classList.add('isvalid');
  }
  
  if (email.value.includes('@') ) {
    email.classList.add('isvalid')
    email.classList.remove('isinvalid');
  
  } else {
    email.classList.add('isinvalid');
    email.classList.remove('isvalid');
  
  }
  if (Prenom.value.length < 3) {
    Prenom.classList.add('isinvalid');
    Prenom.classList.remove('isvalid');
   
  } else {
    Prenom.classList.remove('isinvalid');
    Prenom.classList.add('isvalid');
  }
  
  if (Nom.value.length < 3) {
    Nom.classList.add('isinvalid');
    Nom.classList.remove('isvalid');
   
  } else {
    Nom.classList.remove('isinvalid');
    Nom.classList.add('isvalid');
  }
  
  }