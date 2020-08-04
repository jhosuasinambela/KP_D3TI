<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login Page</title>
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/bootstrap/css/bootstrap.min.css') }} ">
  	<link rel="stylesheet" href="{{ asset('admin/assets/vendor/font-awesome/css/font-awesome.min.css') }}">
  	<link rel="stylesheet" href="{{ asset('admin/assets/vendor/linearicons/style.css')}}">
  	<link rel="stylesheet" href="{{ asset('admin/assets/vendor/chartist/css/chartist-custom.css') }}">
  	<!-- MAIN CSS -->
  	<link rel="stylesheet" href="{{ asset('admin/assets/css/main.css')}}">
  	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
  	<link rel="stylesheet" href="{{ asset('admin/assets/css/demo.css')}}">
  	<!-- GOOGLE FONTS -->
  	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
  	<!-- ICONS -->
  	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
  </head>
  <body>
    <div class="container">
      <div id="wrapper">
          <div class="vertical-align-wrap">
            <div class="vertical-align-middle">
              <div class="auth-box ">
                <div class="left">
                  <div class="content">
                    <div class="header">
                      <center>
                        <h1>Halaman Login </h1>
                      </center>
                      @if(session('failed'))
                      <div class="alert alert-danger" role="alert">
                        {{session('failed')}}
                      </div>
                      @endif
                      @if(session('sukses'))
                      <div class="alert alert-success" role="alert">
                        {{session('sukses')}}
                      </div>
                      @endif
                    </div>
                    <form class="form-auth-small" action="/postlogin" method="post">
                      {{ csrf_field() }}
                      <div class="form-group">
                        <label for="signin-nik" class="control-label sr-only">NIK</label>
                        <input name="nik" type="text" value="{{ old('nik') }}" class="form-control" id="signin-nik" placeholder="Nik..">

                        @if ($errors->has('nik'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nik') }}</strong>
                                    </span>
                        @endif
                      </div>
                      <div class="form-group">
                        <label for="signin-nik" class="control-label sr-only">Password</label>
                        <input name="password" type="password" class="form-control" id="signin-nik" placeholder="Password..">

                        @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif
                      </div>
                      <button type="submit" class="btn btn-primary btn-lg btn-block">LOGIN</button>
                      <div class="bottom">
                        <span class="helper-text"><i class="fa fa-lock"></i> <a href="/daftar">Buat akun?</a></span>
                      </div>
                    </form>
                  </div>
                </div>
                <div class="right">
                  <div class="overlay"></div>
                  <div class="content text">
                    <h1 class="heading">Website Kuesioner Kominfo Taput</h1>
                    <p>By Kominfo Taput</p>
                  </div>
                </div>
                <div class="clearfix"></div>
              </div>
            </div>
          </div>
        </div>
    </div>
    <script src="{{ asset('admin/assets/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{ asset('admin/assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('admin/assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
    <script src="{{ asset('admin/assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js')}}"></script>
    <script src="{{ asset('admin/assets/vendor/chartist/js/chartist.min.js')}}"></script>
    <script src="{{ asset('admin/assets/scripts/klorofil-common.js')}}"></script>
  </body>
</html>
