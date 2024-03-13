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


  /* Validations */
var connexionEmailErreur = document.getElementById('connexion-email-erreur');
var connexionPasswordErreur = document.getElementById('connexion-password-erreur');

function validateConnexionEmail() {
    var connexionEmail = document.getElementById('connexion-email');
    var emailFormat = /^[^\s@]+@[^\s@]+\.[^\s@]+$/; // Expression régulière pour valider le format de l'adresse e-mail

    if (connexionEmail.value.trim() === '') {
        connexionEmailErreur.innerText = 'Veuillez entrer votre adresse e-mail.';
        return false;
    } else if (!connexionEmail.value.match(emailFormat)) {
        connexionEmailErreur.innerText = 'Veuillez entrer une adresse e-mail valide.';
        return false;
    } else {
        connexionEmailErreur.innerText = '';
        return true;
    }
}

function validateConnexionPassword() {
    var connexionPassword = document.getElementById('connexion-password');

    if (connexionPassword.value.trim() === '') {
        connexionPasswordErreur.innerText = 'Veuillez entrer votre mot de passe.';
        return false;
    } else {
        connexionPasswordErreur.innerText = '';
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
