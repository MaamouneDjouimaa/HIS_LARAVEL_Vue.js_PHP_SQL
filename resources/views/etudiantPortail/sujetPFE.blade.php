@extends('etudiantPortail.etudiantPortail')

@section('content')
  <div class="container">
    <h1>Candidature pour un sujet de PFE</h1>
    <form>
      <div class="mb-3">
        <label for="postuler-seule-binom">Postuler :</label>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="postuler-seule-binom" id="postuler-seule" value="seule" required>
          <label class="form-check-label" for="postuler-seule">Seul(e)</label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="postuler-seule-binom" id="postuler-binom" value="binom">
          <label class="form-check-label" for="postuler-binom">En Binôme</label>
        </div>
      </div>

      <div id="binom-fields" style="display: none;">
        <div class="mb-3">
          <label for="choix-binom">Choisir votre binôme :</label>
          <select id="choix-binom" class="form-control">
            <!-- Ajoutez ici les options de la liste déroulante pour les binômes -->
            <option value="binom1">Binôme 1</option>
            <option value="binom2">Binôme 2</option>
            <option value="binom3">Binôme 3</option>
          </select>
        </div>
      </div>

      <div class="mb-3">
        <label for="sujet-specifique">Postuler pour :</label>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="sujet-specifique" id="sujet-specifique-oui" value="oui" required>
          <label class="form-check-label" for="sujet-specifique-oui">Sujet specifique</label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="sujet-specifique" id="sujet-specifique-non" value="non">
          <label class="form-check-label" for="sujet-specifique-non">Sujet existant</label>
        </div>
      </div>

      <div id="sujet-specifique-fields" style="display: none;">
        <div class="alert alert-info mb-3" role="alert">
          Cette rubrique est réservée aux sujets déjà communiqués et validés par les enseignants.
        </div>
        <div class="mb-3">
          <label for="nom-enseignant">Nom de l'enseignant :</label>
          <input type="text" id="nom-enseignant" class="form-control">
        </div>
        <div class="mb-3">
          <label for="titre-sujet">Titre du sujet :</label>
          <input type="text" id="titre-sujet" class="form-control">
        </div>
      </div>

      <div id="rechercher-fields" style="display: none;">
        <div class="mb-3">
            <label for="rechercher-enseignant">Rechercher par :</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="rechercher" id="rechercher-enseignant" value="enseignant">
                <label class="form-check-label" for="rechercher-enseignant">Enseignant</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="rechercher" id="rechercher-sujet" value="sujet">
                <label class="form-check-label" for="rechercher-sujet">Sujet</label>
            </div>
        </div>

        <div id="rechercher-enseignant-fields" style="display: none;">
            <div class="mb-3">
                <label for="choix-enseignant">Choisir un enseignant :</label>
                <select id="choix-enseignant" class="form-control">
                    <!-- Ajoutez ici les options de la liste déroulante pour les enseignants -->
                    <option value="enseignant1">Enseignant 1</option>
                    <option value="enseignant2">Enseignant 2</option>
                    <option value="enseignant3">Enseignant 3</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="choix-sujet-enseignant">Choisir un sujet encadré par cet enseignant :</label>
                <select id="choix-sujet-enseignant" class="form-control">
                    <!-- Ajoutez ici les options de la liste déroulante pour les sujets encadrés par l'enseignant sélectionné -->
                    <option value="sujet1">Sujet 1</option>
                    <option value="sujet2">Sujet 2</option>
                    <option value="sujet3">Sujet 3</option>
                </select>
            </div>
        </div>

        <div id="rechercher-sujet-fields" style="display: none;">
            <div class="mb-3">
                <label for="choix-sujet">Choisir un sujet :</label>
                <select id="choix-sujet" class="form-control">
                    <!-- Ajoutez ici les options de la liste déroulante pour les sujets -->
                    <option value="sujet1">Sujet 1</option>
                    <option value="sujet2">Sujet 2</option>
                    <option value="sujet3">Sujet 3</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="choix-enseignant-sujet">Choisir l'enseignant encadrant ce sujet :</label>
                <select id="choix-enseignant-sujet" class="form-control">
                    <!-- Ajoutez ici les options de la liste déroulante pour les enseignants encadrant le sujet sélectionné -->
                    <option value="enseignant1">Enseignant 1</option>
                    <option value="enseignant2">Enseignant 2</option>
                    <option value="enseignant3">Enseignant 3</option>
                </select>
            </div>
        </div>
    </div>

      <button type="submit" class="btn btn-primary">Soumettre</button>
    </form>
  </div>

  <script>

  </script>
</body>

</html>
@endsection


@section('custom-css')
  <link rel="stylesheet" href="{{ asset('css/sujetPFE.css') }}">
@endsection

@section('custom-js')
  <script src="{{ asset('js/sujetPFE.js') }}"></script>
@endsection
