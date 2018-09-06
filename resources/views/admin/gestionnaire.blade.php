@include('partials.admin_header')


<div class='content col-md-8 centered'>

  <table>
    <thead>
      <tr>
        <th>Page</th>
      </tr>
    </thead>

    <tbody>
      @foreach($pages as $page)
      <tr>
        <td class="cell">
          <a href='gestionnaire/{{$page["name"]}}'>{{$page['name']}}</a> 
        </td>
      </tr>
      @endforeach
      <tbody>

      </table>

    </div>



    @include('partials.footer')
