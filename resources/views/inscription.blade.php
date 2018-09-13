@include('partials.header')

<div class='content col-md-12 centered'>

 <form class="col-md-8 centered" method="post" action="{{url('create_candidature')}}">
      {{ csrf_field() }}

<br/>
<h3>Dossier de candidature</h3>
<h5>La promotion 2018 - 2019 se déroule du 1 octobre 2018 – 20 septembre 2019.</h5>

<div class="form-group">
<label for="découvert">Comment avez-vous connu la formation ?</label>
    <select class="form-control" id="decouvert" name='decouvert'>
      <option value="universite">Site de l'université</option>
      <option value="recherche">Moteur de recherche</option>
      <option value="ami">Ami/collègue</option>
      <option value="lpatc">Ancien élève de la LPATC</option>
      <option value="professeur">Professeur</option>
    </select>
</div>

<h4>VOS DONNÉES PERSONELLES</h4>

      <div class="form-group">
        <label for="civilite">Civilité</label>
        <select class="form-control" id="civilite" name='civilite'>
          <option value="selection">Merci de selectionner une valeur</option>
          <option value="mademoiselle">Mademoiselle</option>
          <option value="madame">Madame</option>
          <option value="monsieur">Monsieur</option>
        </select>
      </div>

  <div class="form-group">
    <label for="nom">Votre nom</label>
    <input type="text" class="form-control" id="nom" name='nom'>
  </div>

  <div class="form-group">
    <label for="nom">Votre prénom</label>
    <input type="text" class="form-control" id="prenom" name='prenom'>
  </div>

  <div class="form-group">
    <label for="naissance">Votre date de naissance</label>
    <input type="date" class="form-control" id="naissance" name='naissance'>
  </div>

  <div class="form-group">
    <label for="lieunaissance">Lieu de naissance</label>
    <input type="text" class="form-control" id="lieunaissance" name='lieunaissance'>
  </div>

  <div class="form-group">
    <label for="nationalite">Nationalité</label>
    <input type="text" class="form-control" id="nationalite" name='nationalite'>
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Votre adresse email de contact</label>
    <input type="email" class="form-control" id="exampleInputEmail1" name='mail'>
  </div>

  <div class="form-group">
    <label for="telephone">Votre numéro de téléphone de contact</label>
    <input type="tel" class="form-control" id="telephone" name='telephone'>
  </div>

<h5>La formation (totalement à distance) peut être suivie dans le cadre de la formation continue ou en formation initiale</h5>

<div class="form-group">
  <label for="civilite">Sous quel statut souhaitez vous suivre la formation</label>
  <select class="form-control" id="statut" name='statut'>
    <option value="selection">Selectionner une valeur</option>
    <option value="continue">Formation continue</option>
    <option value="initiale">Formation initiale</option>
  </select>
</div>

<h4>LA SITUATION DE VOS ÉTUDES</h4>

<div class="form-group">
  <label for="etude">Votre niveau d'études</label>
  <select class="form-control" id="etude" name='etude'>
    <option value="selection">Selectionner une valeur</option>
    <option value="bac">BAC</option>
    <option value="bac1">BAC + 1</option>
    <option value="bac2">BAC + 2</option>
    <option value="bac3">BAC + 3</option>
    <option value="bac4">BAC + 4</option>
    <option value="bac5">BAC + 5</option>
    <option value="autres">Autre</option>
  </select>
</div>

<div class="form-group">
  <label for="discipline">Discipline du diplôme</label>
  <input type="text" class="form-control" id="discipline" name='discipline'>
</div>

<div class="form-group">
  <label for="etablissement">Etablissement, organisme</label>
  <input type="text" class="form-control" id="etablissement" name='etablissement'>
</div>

<div class="form-group">
  <label for="diplome">Dernier diplôme obtenu</label>
  <input type="text" class="form-control" id="diplome" name='diplome'>
</div>

<div class="form-group">
  <label for="annee">Année du dernier diplôme obtenu</label>
  <input type="text" class="form-control" id="annee" name='annee'>
</div>

<h4>VOTRE SITUATION PROFESSIONNELLE</h4>

<div class="form-group">
  <label for="emploi">Avez-vous un emploi ?</label>
  <select class="form-control" id="emploi" name='emploi'>
    <option value="selection">Selectionner une valeur</option>
    <option value="continue">Je suis à la recherche d'un emploi</option>
    <option value="initiale">Oui, actuellement je suis salarié</option>
  </select>
</div>

<h4>ADRESSE PERSONNELLE</h4>

<div class="form-group">
  <label for="adresse1">Votre adresse personnelle (1)</label>
  <input type="text" class="form-control" id="adresse1" name='adresse1'>
</div>

<div class="form-group">
  <label for="adresse2">Votre adresse personnelle (2)</label>
  <input type="text" class="form-control" id="adresse2" name='adresse2'>
</div>

<div class="form-group">
  <label for="code">Code postal</label>
  <input type="text" class="form-control" id="code" name='code'>
</div>

<div class="form-group">
  <label for="ville">Ville</label>
  <input type="text" class="form-control" id="ville" name='ville'>
</div>

<div class="form-group">
  <label for="pays">Pays</label>
  <input type="text" class="form-control" id="pays" name='pays'>
</div>

<h4>PLUS D'INFORMATIONS</h4>

<div class="form-group">
<script>
$(document).ready(function(e) {
$('#message').keyup(function() {
  var nombreCaractere = $(this).val().length;
    var nombreMots = jQuery.trim($(this).val()).split(' ').length;
    if($(this).val() === '') {
     	nombreMots = 0;
    }
    var msg = ' ' + nombreMots + ' mot(s) | ' + nombreCaractere + ' Caractere(s) / 200';
    $('#compteur').text(msg);
    if (nombreCaractere > 200) { $('#compteur').addClass("mauvais"); } else { $('#compteur').removeClass("mauvais"); }
  })
});
</script>
  <label for="experience">Décrivez le cas échéant votre expérience professionnelle (environ 100 mots)</label>
  <textarea id="message" name="message" cols="90" rows="3"></textarea>
  <p id="compteur">0 mots | 0 Caractere / 200</p>
</div>

<div class="form-group">
  <label for="realisation">Décrivez vos réalisation personnelles dans le domaine multimédia ou du web</label>
  <textarea type="text" class="form-control" id="realisation" name='realisation' rows="2"></textarea>
</div>

<div class="form-group">
  <label for="cv">Adresse URL de votre pressbook en ligne (indispensable)</label>
  <textarea type="text" class="form-control" id="cv" name='cv' rows="2"></textarea>
</div>

<div class="form-group">
<script>
$(document).ready(function(e) {
$('#message2').keyup(function() {
  var nombreCaractere = $(this).val().length;
    var nombreMots = jQuery.trim($(this).val()).split(' ').length;
    if($(this).val() === '') {
     	nombreMots = 0;
    }
    var msg = ' ' + nombreMots + ' mot(s) | ' + nombreCaractere + ' Caractere(s) / 200';
    $('#compteur2').text(msg);
    if (nombreCaractere > 200) { $('#compteur2').addClass("mauvais"); } else { $('#compteur2').removeClass("mauvais"); }
  })
});
</script>
  <label for="motivation">Lettre de motivation (expliquez en 200 mots minimum les raisons qui vous incitent à choisir cette formation)</label>
  <textarea id="message2" name="message2" cols="90" rows="3"></textarea>
  <p id="compteur2">0 mots | 0 Caractere / 200</p>
</div>

<div class="form-group">
  <label for="pressbook">Curriculum vitae</label>
  <textarea type="text" class="form-control" id="pressbook" name='pressbook' rows="2"></textarea>
</div>

<h4>RENSEIGNEMENTS COMPLÉMENTAIRES</h4>

<div class="form-group">
  <label for="annexe">Faites nous parvenir vos documents</label>
  <input type="file" class="form-control" id="annexe" name='annexe'>
  <small id="emailHelp" class="form-text text-muted">INFORMATION! Vous avez la possibilité de joindre un fichier au format PDF à votre dossier de candidature. Ce fichier peut contenir (Votre lettre de motivation, votre CV etc...)</small>
</div>

<div class="form-group">
  <label for="vapp">Sollicitez-vous une validation des expériences professionnelles ou acquis personnels (VAPP)</label>
  <select class="form-control" id="vapp" name='vapp'>
    <option value="selection">Selectionner une valeur</option>
    <option value="non">Non</option>
    <option value="oui">Oui</option>
  </select>
</div>

<div class="form-group">
  <label for="bourse">Sollicitez-vous une bourse</label>
  <select class="form-control" id="bourse" name='bourse'>
    <option value="selection">Selectionner une valeur</option>
    <option value="non">Non</option>
    <option value="oui">Oui</option>
  </select>
</div>

<h4>VALIDATION DE VOTRE DEMANDE</h4>
<small id="emailHelp" class="form-text text-muted">IMPORTANT! En validant votre dossier de candidature, vous certifié sur l'honneur de l'exactitude des renseignements fournis dans votre dossier.</small>

<script type="text/javascript">     d = new Date();   document.write("<p>Date de création du dossier : <span style='color:#8aa;'>");
  document.write(d.toLocaleDateString());
  document.write("</span></p>");
</script>

<input type="submit" value="Valider votre dossier de candidature">
 </form>

</div>

@include('partials.footer')
