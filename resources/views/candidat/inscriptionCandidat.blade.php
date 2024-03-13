@extends('candidat.authCandidat')

@section('content')
    <div class="form signup">
        <div class="form-content">
            <header>Inscription</header>
            <form method="POST" action="{{ route('candidat.register.submit') }}" novalidate>
                @csrf
                <div class="field input-field">
                    <input type="email" placeholder="Email" id="inscription-email" name="email" onkeyup="validateInscriptionEmail()" class="input">
                    <span id="inscription-email-erreur" class="error-message"></span>
                </div>

                <div class="field input-field">
                    <input type="password" placeholder="Créer un mot de passe" id="inscription-password" name="password" onkeyup="validateInscriptionPassword()" class="password">
                    <span id="inscription-password-erreur" class="error-message"></span>
                </div>

                <div class="field input-field">
                    <input type="password" placeholder="Confirmer le mot de passe" id="inscription-password2" name="password_confirmation" onkeyup="validateInscriptionPassword2()" class="password">
                    <i class='bx bx-hide eye-icon'></i>
                    <span id="inscription-password2-erreur" class="error-message"></span>
                </div>

                <div class="field button-field">
                    <button type="submit">Inscription</button>
                </div>
            </form>

            <div class="form-link">
                <span>Vous avez déjà un compte ?</span>
                <a href="{{ route('candidat.login') }}" class="login-link">Connexion</a>
            </div>
        </div>

        <div class="line"></div>

        <div id="google-signin-button-container">
            <a href="{{ route('candidat.login.google') }}" class="google-signin-button">Se connecter avec Google</a>
        </div>
    </div>
@endsection

@section('js')
    <script src="{{ asset('js/candidat/inscriptionCandidat.js') }}"></script>
    <script src="https://apis.google.com/js/platform.js" async defer></script>
@endsection
