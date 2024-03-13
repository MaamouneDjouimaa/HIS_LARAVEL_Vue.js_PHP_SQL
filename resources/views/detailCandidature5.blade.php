@extends('bureauPortail')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 id="titre1">Détails de la demande d'admission</h1>
                <hr>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('ConsulterDetailCandidat-Formation', ['id' => $candidat->idCand]) }}">FORMATION</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('ConsulterDetailCandidat-EtatCivil', ['id' => $candidat->idCand]) }}">ÉTAT CIVIL</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('ConsulterDetailCandidat-ParcoursAcademique', ['id' => $candidat->idCand]) }}">PARCOURS ACADÉMIQUE</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('ConsulterDetailCandidat-InformationsDiverses', ['id' => $candidat->idCand]) }}">INFORMATIONS DIVERSES</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('ConsulterDetailCandidat-Justificatif', ['id' => $candidat->idCand]) }}">JUSTIFICATIF</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('ConsulterDetailCandidat-Decision', ['id' => $candidat->idCand]) }}">DÉCISION</a></li>
                    </ol>
                </nav>
                <hr>

                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                <ul>
                    @foreach ($errors->all() as $error)
                        <li class="alert alert-danger">{{ $error }}</li>
                    @endforeach
                </ul>

                <br>

                <h3 class="titre-etatcivil">Justificatifs</h3>
                <style>
                    .border{
                        border-radius: 10px;
                      border:solid 0.5px black;
                    }
                    table {
                      color: #252525;
                      padding: 8px;
                      line-height: 1.42857143;
                      vertical-align: top;
                      font-size: 1rem;
                      font-family: 'Open Sans', sans-serif;
                      border-collapse: separate;
                      border-spacing: 0;
                    }


                    tbody tr td:first-child {
                      border-top: 1px solid #ddd;
                      height: 3.2rem;
                    }

                    tbody tr td:last-child {
                      border-bottom: 1px solid #ddd;
                      height: 3.2rem;
                    }

                      .file-cell {

                        display: flex;
                        align-items: center;
                      }

                      .linkable.file-added:hover {
                      text-decoration: underline;
                      cursor: pointer;
                    }

                    th:nth-child(1),
                    td:nth-child(1) {
                        width:79%; /* Définissez la largeur souhaitée */

                    }
                    th:nth-child(2),
                    td:nth-child(2) {
                          width:21%; /* Définissez la largeur souhaitée */

                      }

                    thead {

                        font-size: 1.2rem;
                        text-align: left;
                        color: black;
                        letter-spacing: 2%;
                    }


                      tbody th {


                        color: black;
                        text-align: left;
                      }

                      tbody tr:nth-child(even) th {
                        color: black;


                      }

                      .btn-ajouter {
                            cursor: pointer;
                        }
                        .btn-supprimer {
                            cursor: pointer;
                        }

                    .margin-btnfile-text{
                        margin-left: 1rem;
                    }

                    </style>

                    <div class="border">
                    <table>

                        <thead>
                            <tr>
                                <th>Justificatif</th>
                                <th>Fichier</th>
                                <th></th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td class="file-cell">
                                    <img id="bouton-ajouter-fichier" src="{{ asset('Images/plus_sign.png') }}" alt="button-ajouter-fichier" class="btn-ajouter" required>
                                    <img id="bouton-supprimer-fichier" src="{{ asset('Images/remove_doc.png') }}" alt="button-supprimer-fichier" class="btn-supprimer" style="display: none;">
                                    <span class="margin-btnfile-text">Curriculum Vitae</span>
                                </td>
                                <td>
                                    <span id="nom-fichier-1" class="file-name linkable">Nom du fichier</span>
                                </td>
                            </tr>
                    <tr>
                            <td class="file-cell">
                                <img id="bouton-ajouter-fichier" src="{{ asset('Images/plus_sign.png') }}" alt="button-ajouter-fichier" class="btn-ajouter" required>
                                <img id="bouton-supprimer-fichier" src="{{ asset('Images/remove_doc.png') }}" alt="button-supprimer-fichier" class="btn-supprimer" style="display: none;">
                                <span class="margin-btnfile-text">Relevé de notes du premier trimestre de l'année du baccalauréat</span>
                            </td>
                            <td>
                                <span id="nom-fichier-2" class="file-name linkable">Nom du fichier</span>
                    </tr>
                    <tr>
                            <td class="file-cell">
                                <img id="bouton-ajouter-fichier" src="{{ asset('Images/plus_sign.png') }}" alt="button-ajouter-fichier" class="btn-ajouter" required>
                                <img id="bouton-supprimer-fichier" src="{{ asset('Images/remove_doc.png') }}" alt="button-supprimer-fichier" class="btn-supprimer" style="display: none;">
                                <span class="margin-btnfile-text">Relevé de notes du deuxième trimestre de l'année du baccalauréat</span>
                            </td>

                            <td>
                                <span id="nom-fichier-3" class="file-name linkable">Nom du fichier</span>
                            </td>
                    </tr>

                    <tr>

                            <td class="file-cell">
                                <img id="bouton-ajouter-fichier" src="{{ asset('Images/plus_sign.png') }}" alt="button-ajouter-fichier" class="btn-ajouter" required>
                                <img id="bouton-supprimer-fichier" src="{{ asset('Images/remove_doc.png') }}" alt="button-supprimer-fichier" class="btn-supprimer" style="display: none;">
                                <span class="margin-btnfile-text">Relevé de notes du trois trimestre de l'année du baccalauréat</span>
                            </td>
                            <td>
                                <span id="nom-fichier-4" class="file-name linkable">Nom du fichier</span>
                            </td>
                    </tr>

                        </tbody>

                    </table>


                <a href="{{route('ListeCandidature')}}" class="btn btn-danger">Revenir à la liste des étudiants</a>
            </div>
        </div>
    </div>
@endsection
