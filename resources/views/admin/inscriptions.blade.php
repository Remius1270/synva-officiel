@include('partials.admin_header')


<div class='content centered'>
  <table class="table">
  <thead>
    <tr>
      <th scope="col">Nom</th>
      <th scope="col">Imprimer</th>
    </tr>
  </thead>
  <tbody>
    @if(isset($liste) && !empty($liste))
    @foreach($liste as $candidature)
    <tr>
      <th scope="row">{{$candidature->mail}}</th>
      <td scope="row" ><a  class="btn btn-primary" href="{{url('admin/inscriptions/candidature/'.$candidature->id)}}" >Voir</a></td>
    </tr>
    @endforeach
    @endif
  </tbody>
</table>
</div>


@include('partials.footer')
