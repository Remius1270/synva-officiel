
<html>

<head>
  <meta charset="utf-8">

  <!-- librairies appelées -->

  <!-- fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Catamaran" rel="stylesheet">

  <!-- css -->
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{ URL::asset('css/style.css')}}">
  <link href="https://fonts.googleapis.com/css?family=Abel" rel="stylesheet">

  <!-- js -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" ></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" ></script>
  <script src="{{URL::asset('js/jspdf.js')}}" ></script>
  <script src="{{ URL::asset('js/script.js')}}"></script>

  <!-- fin -->


  <title>Admin</title>

</head>

<body>

<header>

  <!-- Logo and stuff -->
  <div id="banner-logo" class="fixed">
    <div class="synva-container col-md-8">
      <a href="{{url('section/accueil')}}" class="no-margin-padding banner-logo"  ><img src="{{ URL::asset('img/synva-logo.png') }}" class="no-margin-padding banner-logo"></a>
    </div>
    <img src="{{ URL::asset('img/espe-banner.png') }}" class="no-margin-padding col-md-4 fit-in-banner" style="float:right;">

    <!-- Menu -->
    <nav class="navbar navbar-dark bg-dark">
            <div id='ariane' ></div>
      <div class="btn-group menu" role="group" aria-label="Button group with nested dropdown">
        <a  href="{{url('admin/inscriptions')}}" class="btn btn-secondary">Inscriptions</a>
        <a  href="{{url('admin/gestionnaire')}}" class="btn btn-secondary">Gestionnaire de pages</a>
        <a  href="{{url('admin/galerie')}}" class="btn btn-secondary">Galerie</a>
      </div>

      <a class='btn btn-secondary disconnect' href="{{url('disconnect')}}" >Déconnexion</a>

    </nav>
  </div>
</header>
