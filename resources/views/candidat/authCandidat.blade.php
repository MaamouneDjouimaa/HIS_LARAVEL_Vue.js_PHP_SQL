<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de connexion et d'inscription réactif</title>

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/authentificationCandidat.css') }}">
    <link rel="stylesheet" href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css'>
    @yield('css')
</head>
<body>
    <section class="container forms">
        @yield('content')
    </section>


    @yield('js')
</body>
</html>
