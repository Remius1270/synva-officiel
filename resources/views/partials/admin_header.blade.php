
<html>

<head>
  <meta charset="utf-8">

  <!-- librairies appelées -->

  <!-- fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">

  <!-- css -->
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{ URL::asset('css/style.css')}}">

  <!-- js -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" ></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" ></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.2/jspdf.debug.js"></script>
  <script src="{{ URL:: asset('js/script.js')}}"></script>

  <!-- fin -->

  <title>Synva</title>

</head>

<body>

  <!-- Logo and stuff -->
  <div id="banner-logo" class="fixed">
    <div class="synva-container col-md-8">
      <a href="{{url('section/accueil')}}" class="no-margin-padding banner-logo"  ><img src="{{ URL::asset('img/banner.png') }}" class="no-margin-padding banner-logo"></a>
    </div>
    <img src="{{ URL::asset('img/espe-banner.png') }}" class="no-margin-padding col-md-4 fit-in-banner" style="float:right;">

    <!-- Menu -->
    <nav class="navbar navbar-dark bg-dark">
            <div id='ariane' ></div>
      <div class="btn-group menu" role="group" aria-label="Button group with nested dropdown">
        <a  href="{{url('section/opensim')}}" class="btn btn-secondary">Inscriptions</a>
        <a  href="{{url('section/galerie')}}" class="btn btn-secondary">Gestionnaire de médias</a>
        <a  href="{{url('section/inscription')}}" class="btn btn-secondary">Autre</a>
      </div>

      <a class='btn btn-secondary disconnect' href="{{url('disconnect')}}" >Déconnexion</a>

    </nav>
  </div>
