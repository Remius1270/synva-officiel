@include('partials.admin_header')

 <p class="centered section-title" style="font-size:3em;margin-top:20px;" >Cliquer pour supprimer une image</p><br/>
 <div class='content col-md-8 centered'>
   <div class="col-md-10" >
     @foreach($images as $image)
      <a href="{{url('admin/supprimer/'.basename($image,'.png').'')}}" ><img src="{{ URL::asset($image)}}" width="100px" ></a>
     @endforeach
   </div>
  <hr/>
   <p class="centered section-title" style="font-size:3em;margin-top:20px;" >Ajouter une image</p><br/>
     <form action="{{url('admin/add_picture')}}" method="post" enctype="multipart/form-data">
       {{ csrf_field() }}
     Select image to upload:
     <input type="file" name="fileToUpload" id="fileToUpload">
     <input type="submit" value="Upload Image" name="submit">
    </form>
 </div>


@include('partials.footer')
