@include('partials.header')

<div class='content col-md-7  centered'>

  <p class="presentation">
    La réalité virtuelle et les applications immersives 3D, permet de transmettre
des informations pédagogiques à un apprenant mais aussi de l’entraîner et ainsi
consolider ses acquis.
Souvent utilisée comme reproduction du réel, pour l’entraînement, son utilisation
pour la formation est en réalité encore peu exploitée au maximum de ses
possibilités. Avec l’arrivée massive de la réalité virtuelle grand public grâce aux
casques de réalité virtuelle, il est important de se poser les bonnes questions.
  </p>

  <table class="options">
    <thead>
    </thead>

    <tbody>
      <tr>
        <td class="squared-td">
            <a href="{{url('formation/contenu')}}">Contenu de la formation</a>
        </td>
        <td class="squared-td">
            <a href="{{url('formation/equipe')}}">L'équipe pédagogique</a>
        </td>
        <td class="squared-td">
            <a href="{{url('formation/débouchés')}}">Débouchés</a>
        </td>
        <td class="squared-td">
            <a href="{{url('formation/admission')}}">Admission</a>
        </td>
      <tr/>
    </tbody>

  </table>
</div>
@include('partials.footer')
