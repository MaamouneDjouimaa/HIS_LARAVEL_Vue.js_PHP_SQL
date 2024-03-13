<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>bureauPortail</title>

  <link rel="stylesheet" href="{{ asset('css/etudiantPortail.css') }}">
  @stack('styles')

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css"/>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

  <!-- bootstrap5 dataTables css cdn -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css" />

</head>
<body>

<nav class="custom-navbar">
    <div class="navbar-brand" style="display: flex; align-items: center;">
        <i class="custom-navbar-icon fa-solid fa-chevron-left" id="custom-sidebar-close" style="cursor: pointer;"></i>
        <h1 class="titreMonPortail" style="margin-left: 2%; letter-spacing: -2px;">
            <span class="font-weight-normal" style="margin-right: -0.2em;">mon</span>
            <span class="font-weight-bold">Portail</span>
            <span class="font-weight-normal">/bureau d'inscription</span>
        </h1>
        <div class="custom-dropdown">
          <i class="fas fa-bell custom-navbar-icon" style=""></i>
          <div class="custom-dropdown-content">
            <a href="#">
              <i class="fas fa-info-circle notification-icon"></i>
                Notification 1
              <span class="notification-date">Date</span>
            </a>
            <a href="#">
              <i class="fas fa-info-circle notification-icon"></i>
              Notification 2
              <span class="notification-date">Date</span>
            </a>
            <a href="#">
              <i class="fas fa-info-circle notification-icon"></i>
              Notification 3
              <span class="notification-date">Date</span>
            </a>
          </div>
        </div>
        <div class="profile-dropdown">
          <i class="fas fa-user custom-navbar-icon" style=""></i>
          <div class="profile-dropdown-content">
            <a href="#">
              <i class="fas fa-user-circle profile-icon"></i>
              Mon profil
            </a>
            <a href="#">
              <i class="fas fa-cog profile-icon"></i>
              Paramètres
            </a>
            <a href="#">
              <i class="fas fa-question-circle profile-icon"></i>
              Aide
            </a>
            <a href="#">
              <i class="fas fa-sign-out-alt profile-icon"></i>
              Déconnexion
            </a>
          </div>
        </div>
    </div>
</nav>

<nav class="custom-sidebar">
    <a href="{{ route('ListeCandidature') }}" class="custom-link">Candidatures</a>
    <a href="{{ route('authentificationBureau') }}" class="custom-link">Authentification</a>

</nav>

<main class="custom-main">
  <div class="custom-main-content">
    @yield('content', 'Contenu par défaut')
  </div>
</main>



<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
<script src="{{ asset('js/etudiantPortail.js') }}"></script>

<!-- bootstrap5 dataTables js cdn -->
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
<script src="assets/plugins/global/plugins.bundle.js"></script>
<script>
    $("#kt_daterangepicker_1").daterangepicker();
</script>
</body>
</html>
