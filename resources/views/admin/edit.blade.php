@include('partials.admin_header')


 <div class='content col-md-8 centered'>
   <form action="{{ url('/save/page')}}" method="post">
     {{ csrf_field() }}
     <textarea class="long-text col-md-12" name="text"  >
       {{$text}}
     </textarea>
     <br/>
     <input name='page' value="{{$title}}" type="text" style="visibility:hidden;"><br/>
     <input type="submit"  value="Enregistrer" >

   </form>
 </div>


@include('partials.footer')
