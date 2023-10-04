<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  
    <script src="{{asset('admin-assets/plugins/jquery/jquery.min.js')}}"></script>

<!-- Bootstrap 4 -->
<script src="{{asset('admin-assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<!-- AdminLTE App -->
<script src="{{asset('admin-assets/dist/js/adminlte.min.js')}}"></script>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('admin-assets/plugins/fontawesome-free/css/all.min.css')}}">

  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{asset('admin-assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">

  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('admin-assets/dist/css/adminlte.min.css')}}">



      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bug Tracking Tool</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('admin-assets/plugins/fontawesome-free/css/all.min.css')}}">

  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{asset('admin-assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">

  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('admin-assets/dist/css/adminlte.min.css')}}">
</head>

<body >

    <!-- Nav tabs -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#"> <button type="button" name="" id="" class="btn btn-success" btn-lg btn-block">Bug Track Tool</button> </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('/admin/login')}}">Sign In</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
    </ul>
    <span class="navbar-text">
      
    </span>
  </div>
</nav>



<div class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="#"><b>Bug Tracking Tool</b> (Login)</a>
  </div>

  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      
      @if(session('error'))
      <div class="text-danger text-center"> {{session('error')}} </div>
      @endif

      @if(session('success'))
      <div class="text-success text-center"> {{session('success')}} </div>
      @endif

      <p class="login-box-msg">Sign in to start your session</p>

      <form action="{{route('postLogin')}}" method="post">
        @csrf
        <div class="input-group mb-1">
          <input name="email" type="email" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        @error('email')
        <div class="text-danger"> {{$message}} </div>
        @enderror
        <div class="input-group mb-1">
          <input name="password" type="password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        @error('password')
        <div class="text-danger"> {{$message}} </div>
        @enderror
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input name="remember" type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>

          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>

          <!-- /.col -->
        </div>
      </form>


      <!-- /.social-auth-links -->

      <p class="mb-0">
        <a href="register.html" class="text-center">Create a New Account </a>
      </p>
    </div>

    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->

<script src="{{asset('admin-assets/plugins/jquery/jquery.min.js')}}"></script>

<!-- Bootstrap 4 -->
<script src="{{asset('admin-assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<!-- AdminLTE App -->
<script src="{{asset('admin-assets/dist/js/adminlte.min.js')}}"></script>



<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<center> <i class="fa fa-copyright " aria-hidden="true">Made By Nishil</i></center>
</body>


</html>
