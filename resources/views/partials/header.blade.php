
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
  <script src="{{URL::asset('js/jspdf.js')}}" ></script>
  <script src="{{ URL::asset('js/script.js')}}"></script>

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
        <div class="btn-group" role="group">
          <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Formation
          </button>
          <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
            <a class="dropdown-item" href="{{url('formation/presentation')}}">Présentation de la formation</a>
            <a class="dropdown-item" href="{{url('formation/contenu')}}">Contenu de la formation</a>
            <a class="dropdown-item" href="{{url('formation/equipe')}}">L'équipe pédagogique</a>
            <a class="dropdown-item" href="{{url('formation/débouchés')}}">Les débouchés</a>
            <a class="dropdown-item" href="{{url('formation/admission')}}">L'admission</a>
          </div>
        </div>
        <a  href="{{url('section/opensim')}}" class="btn btn-secondary">OpenSim</a>
        <a  href="{{url('section/galerie')}}" class="btn btn-secondary">Galerie d'images</a>
        <a  href="{{url('section/inscription')}}" class="btn btn-secondary">Inscription</a>
      </div>
    </nav>
  </div>

</body>

</html>
