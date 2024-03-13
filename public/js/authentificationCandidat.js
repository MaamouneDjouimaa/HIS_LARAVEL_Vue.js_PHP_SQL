const pwShowHide = document.querySelectorAll(".eye-icon");
const links = document.querySelectorAll(".link");



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

var inscriptionEmailErreur = document.getElementById('inscription-email-erreur');
var inscriptionPasswordErreur = document.getElementById('inscription-password-erreur');
var inscriptionPassword2Erreur = document.getElementById('inscription-password2-erreur');

var forgotEmailErreur = document.getElementById('forgot-email-erreur');
var confirmationCodeErreur = document.getElementById('confirmation-code-erreur');
var newPasswordErreur = document.getElementById('new-password-erreur');
var newPassword2Erreur = document.getElementById('new-password2-erreur');






function validateForgotEmail() {
    var forgotEmail = document.getElementById('forgot-email');
    var emailFormat = /^[^\s@]+@[^\s@]+\.[^\s@]+$/; // Expression régulière pour valider le format de l'adresse e-mail

    if (forgotEmail.value.trim() === '') {
        forgotEmailErreur.innerText = 'Veuillez entrer votre adresse e-mail.';
        return false;
    } else if (!forgotEmail.value.match(emailFormat)) {
        forgotEmailErreur.innerText = 'Veuillez entrer une adresse e-mail valide.';
        return false;
    } else {
        forgotEmailErreur.innerText = '';
        return true;
    }
}

function validateNewPassword() {
    var newPassword = document.getElementById('new-password');
    var passwordStrength = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;

    if (newPassword.value.trim() === '') {
        inscriptionPasswordErreur.innerText = 'Veuillez entrer un mot de passe.';

        return false;
    } else if (!newPassword.value.match(passwordStrength)) {
        newPasswordErreur.innerText = 'Faible';
        return false;
    } else {
        newPasswordErreur.innerText = '';
        return true;
    }
}

function validateNewPassword2() {
    var newPassword = document.getElementById('new-password');
    var newPassword2 = document.getElementById('new-password2');

    if (newPassword2.value.trim() === '') {
        newPassword2Erreur.innerText = 'Veuillez confirmer votre mot de passe.';
        return false;
    } else if (newPassword2.value !== newPassword.value) {
        newPassword2Erreur.innerText = 'Les mots de passe ne correspondent pas.';
        return false;
    } else {
        newPassword2Erreur.innerText = '';
        return true;
    }
}



//mot de pass oublié
function sendConfirmationCode() {
    var email = document.getElementById('forgot-email').value.trim();
    var verificationCode = generateVerificationCode(); // Fonction à implémenter pour générer le code de vérification

    // Ici, vous pouvez envoyer le code de vérification à l'adresse e-mail spécifiée

    // Sauvegarder le code de vérification pour la vérification ultérieure
    localStorage.setItem('verificationCode', verificationCode);

    showForgotPasswordForm2();
}

function generateVerificationCode() {
    // À implémenter
    // Retourne un code de vérification aléatoire de 6 chiffres
    // Par exemple : return Math.floor(100000 + Math.random() * 900000);
}

function verifyConfirmationCode() {
    var verificationCode = document.getElementById('confirmation-code');
    var savedVerificationCode = localStorage.getItem('verificationCode');

    showForgotPasswordForm3(); //à supprimier !

    if (verificationCode.value.trim() === '') {
        confirmationCodeErreur.innerText = 'Veuillez entrer le code de vérification.';
        return false;
    } else if (verificationCode.value !== savedVerificationCode) {
        confirmationCodeErreur.innerText = 'Le code de vérification est incorrect.';
        return false;
    } else {
        confirmationCodeErreur.innerText = '';
        return true;
        //showForgotPasswordForm3();
    }

}

function newPassword() {
    if (validateResetPasswordVerificationCode() && validateResetPasswordNewPassword()) {
        // Ici, vous pouvez réinitialiser le mot de passe en utilisant le nouveau mot de passe saisi

        // Afficher un message de succès ou rediriger l'utilisateur vers la page de connexion
    }

}



// Google
// Charger l'API d'authentification Google
function loadGoogleAuth() {
    gapi.load('auth2', function() {
      gapi.auth2.init({
        client_id: '509843440867-3dlrogikj9tb9q3bi0g7np7tre0cqmae.apps.googleusercontent.com'
      });

      // Récupérer le bouton de connexion
      const googleSigninButton = document.getElementById('google-signin-button');
      const googleSigninButton2 = document.getElementById('google-signin-button2');

      // Ajouter un gestionnaire d'événement au clic du bouton de connexion
      googleSigninButton.addEventListener('click', function() {
        // Demander l'autorisation de connexion avec un compte Google
        gapi.auth2.getAuthInstance().signIn().then(function(googleUser) {
          // Utiliser les informations de l'utilisateur connecté
          const profile = googleUser.getBasicProfile();
          const userEmail = profile.getEmail();
          const userName = profile.getName();

          // Faites quelque chose avec les informations de l'utilisateur, par exemple, envoyez-les à votre serveur

        });
      });
    });
  }

  // Charger l'API d'authentification Google lors du chargement de la page
  window.onload = function() {
    loadGoogleAuth();
  };
