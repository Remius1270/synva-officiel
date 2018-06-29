@include('partials.admin_header')


<div class='content col-md-8 centered'>
  <div id='content'>
  <label>Mail</label><br/>
  <p class='element' id="mail">{{$candidature->mail}}</p>
  <br/>
  <label>Contenu</label><br/>
  <p class='element long-text'>{{$candidature->content}}</p>
</div>
<div id="editor"></div>
  <a id="print" class='btn btn-primary' >Imprimer</a>

</div>



@include('partials.footer')
