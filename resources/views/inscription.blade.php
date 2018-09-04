@include('partials.header')

  <div class='content col-md-8 centered'>

    <form class="col-md-12 centered" method="post" action="{{url('create_candidature')}}">
      {{ csrf_field() }}
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name='mail'>
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>

  <div class="form-group" >
  <label for="comment">Comment:</label>
  <textarea class="form-control" rows="5" id="comment" name='content'></textarea>
</div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>

  </div>

@include('partials.footer')
