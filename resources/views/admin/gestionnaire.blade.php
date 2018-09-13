@include('partials.admin_header')

<p class="centered section-title" style="font-size:3em;margin-top:20px;" >Gestionnaire de pages</p>
<div class='content col-md-8 centered'>

  <table class="col-md-12" style="margin-top:20px;">
    <thead>

    </thead>

    <tbody>
      @foreach($pages as $page)
      <tr style="height:40px;" >
        <td class="cell" style="text-align:center">
          <a href='gestionnaire/{{$page["name"]}}' style="font-size:1.3em;" >{{$page['name']}}</a>
        </td>
      </tr>
      @endforeach
      <tbody>

      </table>

    </div>



    @include('partials.footer')
