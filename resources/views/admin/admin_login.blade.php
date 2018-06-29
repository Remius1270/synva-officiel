@include('partials.header')


@if(isset($suscces) && $success == flase)
  <p>Mail ou mot de passe erroné</p>
@endif

<div class="login-form content col-md-5 centered">
  <form action="login" method="post">
    {{ csrf_field() }}
      <h2 class="text-center">Log in</h2>
      <div class="form-group">
          <input type="text" class="form-control" placeholder="Username" required="required" name='mail' >
      </div>
      <div class="form-group">
          <input type="password" class="form-control" placeholder="Password" required="required" name='password'>
      </div>
      <div class="form-group">
          <button type="submit" class="btn btn-primary btn-block">Log in</button>
      </div>
      <div class="clearfix">
          <label class="pull-left checkbox-inline"><input type="checkbox"> Remember me</label>
          <a href="#" class="pull-right">Forgot Password?</a>
      </div>
  </form>
  <p class="text-center"><a href="#">Create an Account</a></p>
</div>


@include('partials.footer')
