@include('partials.header')

<div class='content col-md-12  centered'>
  <thead>

  </thead>

<tbody>
  <table class="opensimphoto col-md-5 centered" style="text-align:center;display:table;">
    @foreach($images as $image)
      <tr class="galery-img-container col-md-8 centered" >
        <td><a href="{{URL::asset($image)}}" ><img src="{{ URL::asset($image)}}" class="galery-img"></a></td>
      </tr>
    @endforeach
  </table>
</tbody>
</div>

@include('partials.footer')
