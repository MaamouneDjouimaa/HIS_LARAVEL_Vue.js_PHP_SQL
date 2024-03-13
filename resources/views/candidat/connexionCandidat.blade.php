@extends('candidat.authCandidat')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/authentificationCandidat.css') }}">
@endsection

@section('content')
    <div class="form login">
        <div class="form-content">
            <header>Connexion</header>
            <form method="POST" action="{{ route('candidat.login.submit') }}" novalidate>
                @csrf
                <div class="field input-field">
                    <input type="email" placeholder="Email" name="email" id="connexion-email" onkeyup="validateConnexionEmail()" class="input">
                    <span id="connexion-email-erreur" class="error-message">{{ $errors->first('email') }}</span>
                </div>

                <div class="field input-field">
                    <input type="password" placeholder="Mot de passe" name="password" id="connexion-password" onkeyup="validateConnexionPassword()" class="password">
                    <i class='bx bx-hide eye-icon'></i>
                    <span id="connexion-password-erreur" class="error-message">{{ $errors->first('motDePasse') }}</span>
                </div>

                <div class="form-link">
                    <a href="#" class="forgot-pass-link">Mot de passe oublié ?</a>
                </div>

                <div class="field button-field">
                    <button type="submit">Connexion</button>
                </div>
            </form>

            <div class="form-link">
                <span>Vous n'avez pas de compte ?</span>
                <a href="{{ route('candidat.register') }}" class="signup-link">Inscription</a>
            </div>
        </div>

        <div class="line"></div>

        <div id="google-signin-button-container">
            <a href="{{ route('candidat.login.google') }}" class="google-signin-button">Se connecter avec Google</a>
        </div>
    </div>
@endsection

@section('js')
    <script src="{{ asset('js/candidat/connexionCandidat.js') }}"></script>
    <script src="https://apis.google.com/js/platform.js" async defer></script>
@endsection
