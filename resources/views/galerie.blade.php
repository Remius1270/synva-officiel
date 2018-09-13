@include('partials.header')

<div class='content col-md-8  centered'>
  <thead>
    <style>
      img {
        max-width: 170px;
        max-height: 100px;
      }
    </style>

<<<<<<< Updated upstream
  </thead>
=======
  
>>>>>>> Stashed changes

<tbody>
  <table class="opensimphoto">
      <tr>
        <td><img id="img1" src="{{URL::asset('img/opensim/4_001.jpg')}}"></td>
        <td><img id="img2" src="{{URL::asset('img/opensim/café.jpg')}}"></td>
        <td><img id="img3" src="{{URL::asset('img/opensim/campus_004.jpg')}}"></td>
        <td><img id="img4" src="{{URL::asset('img/opensim/ethno1_001.jpg')}}"></td>
      <tr/>
      <tr>
        <td><img id="img5" src="{{URL::asset('img/opensim/euro3_001.jpg')}}"></td>
        <td><img id="img6" src="{{URL::asset('img/opensim/ever22_004.jpg')}}"></td>
        <td><img id="img7" src="{{URL::asset('img/opensim/foret1_001.jpg')}}"></td>
        <td><img id="img8" src="{{URL::asset('img/opensim/mamcs_001.jpg')}}"></td>
      <tr/>
  </table>
</tbody>
</div>

@include('partials.footer')
