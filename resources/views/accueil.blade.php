@include('partials.header')

<div class='content'>
  <table class="options">
    <thead>
    </thead>

    <tbody>
      <tr>
        <td>
          <div class="block" >
            <a href="{{url('formation/presentation')}}">Présentation de la formation</a>
          </div>
        </td>
        <td>
          <div class="block" >
            <a href="{{url('formation/contenu')}}">Contenu de la formation</a>
          </div>
        </td>
        <td>
          <div class="block" >
            <a href="{{url('formation/equipe')}}">L'équipe pédagogique</a>
          </div>
        </td>
        <td>
          <div class="block" >
            <a href="{{url('formation/débouchés')}}">Débouchés</a>
          </div>
        </td>
        <td>
          <div class="block" >
            <a href="{{url('foramton/admission')}}">Admission</a>
          </div>
        </td>
      <tr/>
    </tbody>

  </table>
</div>
@include('partials.footer')
