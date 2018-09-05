@include('partials.header')

<div class='content col-md-6 centered'>
  <table class="options">
    <thead>
    </thead>

    <tbody>
      <tr>
        <td class="squared-td">
            <a href="{{url('formation/presentation')}}">Présentation de la formation</a>
        </td>
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
