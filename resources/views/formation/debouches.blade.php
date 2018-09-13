@include('partials.header')
<p class="centered section-title" style="font-size:3em;margin-top:20px;" >{{$name}}</p>
<div class='content col-md-10 centered'>
  {!! $text !!}
</div>
@include('partials.footer')
