const pwShowHide = document.querySelectorAll(".eye-icon");

//eyeIcon
pwShowHide.forEach(eyeIcon => {
    eyeIcon.addEventListener("click", () => {
      let pwFields = eyeIcon.parentElement.querySelectorAll(".password");

      pwFields.forEach(password => {
        if (password.type === "password") {
          password.type = "text";
          eyeIcon.classList.replace("bx-hide", "bx-show");
        } else {
          password.type = "password";
          eyeIcon.classList.replace("bx-show", "bx-hide");
        }
      });
    });
  });

  var inscriptionEmailErreur = document.getElementById('inscription-email-erreur');
  var inscriptionPasswordErreur = document.getElementById('inscription-password-erreur');
  var inscriptionPassword2Erreur = document.getElementById('inscription-password2-erreur');

  /* Validations */
  function validateInscriptionEmail() {
    var inscriptionEmail = document.getElementById('inscription-email');
    var emailFormat = /^[^\s@]+@[^\s@]+\.[^\s@]+$/; // Expression régulière pour valider le format de l'adresse e-mail

    if (inscriptionEmail.value.trim() === '') {
        inscriptionEmailErreur.innerText = 'Veuillez entrer votre adresse e-mail.';
        return false;
    } else if (!inscriptionEmail.value.match(emailFormat)) {
        inscriptionEmailErreur.innerText = 'Veuillez entrer une adresse e-mail valide.';
        return false;
    } else {
        inscriptionEmailErreur.innerText = '';
        return true;
    }
}

function validateInscriptionPassword() {
    var inscriptionPassword = document.getElementById('inscription-password');
    var passwordStrength = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;

    if (inscriptionPassword.value.trim() === '') {
        inscriptionPasswordErreur.innerText = 'Veuillez entrer un mot de passe.';

        return false;
    } else if (!inscriptionPassword.value.match(passwordStrength)) {
        inscriptionPasswordErreur.innerText = 'Faible';
        return false;
    } else {
        inscriptionPasswordErreur.innerText = '';
        return true;
    }
}

function validateInscriptionPassword2() {
    var inscriptionPassword = document.getElementById('inscription-password');
    var inscriptionPassword2 = document.getElementById('inscription-password2');

    if (inscriptionPassword2.value.trim() === '') {
        inscriptionPassword2Erreur.innerText = 'Veuillez confirmer votre mot de passe.';
        return false;
    } else if (inscriptionPassword2.value !== inscriptionPassword.value) {
        inscriptionPassword2Erreur.innerText = 'Les mots de passe ne correspondent pas.';
        return false;
    } else {
        inscriptionPassword2Erreur.innerText = '';
        return true;
    }
}


// // Google
// // Charger l'API d'authentification Google
// function loadGoogleAuth() {
//     gapi.load('auth2', function() {
//       gapi.auth2.init({
//         client_id: '509843440867-3dlrogikj9tb9q3bi0g7np7tre0cqmae.apps.googleusercontent.com'
//       });

//       // Récupérer le bouton de connexion
//       const googleSigninButton = document.getElementById('google-signin-button');

//       // Ajouter un gestionnaire d'événement au clic du bouton de connexion
//       googleSigninButton.addEventListener('click', function() {
//         // Demander l'autorisation de connexion avec un compte Google
//         gapi.auth2.getAuthInstance().signIn().then(function(googleUser) {
//           // Utiliser les informations de l'utilisateur connecté
//           const profile = googleUser.getBasicProfile();
//           const userEmail = profile.getEmail();
//           const userName = profile.getName();

//           // Faites quelque chose avec les informations de l'utilisateur, par exemple, envoyez-les à votre serveur

//         });
//       });
//     });
//   }

//   // Charger l'API d'authentification Google lors du chargement de la page
//   window.onload = function() {
//     loadGoogleAuth();
//   };
