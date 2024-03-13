@extends('etudiantPortail.etudiantPortail')

@section('content')
  <div class="container">
    <h1>Stage externe</h1>

    <div class="form-group">
      <label>Stage pour :</label>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="stage-pour" value="correspondance-officielle" id="radio-correspondance">
        <label class="form-check-label radio-label" for="radio-correspondance">Correspondance officielle</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="stage-pour" value="etablissement-specifique" id="radio-etablissement">
        <label class="form-check-label radio-label" for="radio-etablissement">Établissement spécifique</label>
      </div>
    </div>

    <div id="correspondance-officielle-fields" style="display: none;">
      <div class="form-group">
        <label>Choisir l'établissement :</label>
        <select class="form-control" name="etablissement" id="etablissement-select">
          <option value="etablissement1">Établissement 1</option>
          <option value="etablissement2">Établissement 2</option>
          <option value="etablissement3">Établissement 3</option>
        </select>
      </div>

      <div class="form-group">
        <label>Choisir la durée souhaitée :</label>
        <div class="row">
          <div class="col">
            <input type="date" class="form-control" name="date-debut" id="date-debut" placeholder="Date de début">
          </div>
          <div class="col">
            <input type="date" class="form-control" name="date-fin" id="date-fin" placeholder="Date de fin">
          </div>
        </div>
      </div>
    </div>

    <div id="etablissement-specifique-fields" style="display: none;">
      <div class="form-group">
        <label>Saisir le nom de l'établissement :</label>
        <input type="text" class="form-control" name="nom-etablissement" id="nom-etablissement" placeholder="Nom de l'établissement">
      </div>

      <div class="form-group">
        <label>Saisir l'adresse de l'établissement :</label>
        <input type="text" class="form-control" name="adresse-etablissement" id="adresse-etablissement" placeholder="Adresse de l'établissement">
      </div>

      <div class="form-group">
        <label>Saisir l'e-mail de l'établissement :</label>
        <input type="email" class="form-control" name="email-etablissement" id="email-etablissement" placeholder="E-mail de l'établissement">
      </div>

      <div class="form-group">
        <label>Saisir le numéro de téléphone de l'établissement :</label>
        <input type="tel" class="form-control" name="telephone-etablissement" id="telephone-etablissement" placeholder="Numéro de téléphone de l'établissement">
      </div>

      <div class="form-group">
        <label>Le stage est :</label>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="stage-statut" value="communique-etablissement" id="radio-communique">
          <label class="form-check-label radio-label" for="radio-communique">Déjà communiqué avec l'établissement</label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="stage-statut" value="pas-encore" id="radio-pas-encore">
          <label class="form-check-label radio-label" for="radio-pas-encore">Pas encore communiqué avec l'établissement</label>
        </div>
      </div>
    </div>

    <div class="form-group">
      <label>Mon statut d'assurance :</label>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="assurance" value="valide" id="radio-valide">
        <label class="form-check-label radio-label" for="radio-valide">Valide</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="assurance" value="non-valide" id="radio-non-valide">
        <label class="form-check-label radio-label" for="radio-non-valide">Non valide</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="assurance" value="autre" id="radio-autre">
        <label class="form-check-label radio-label" for="radio-autre">Autre</label>
      </div>
    </div>

    <button class="btn btn-primary" type="submit">Soumettre</button>
  </div>
@endsection


@section('custom-css')
  <link rel="stylesheet" href="{{ asset('css/stageExterne.css') }}">
@endsection

@section('custom-js')
  <script src="{{ asset('js/stageExterne.js') }}"></script>
@endsection
