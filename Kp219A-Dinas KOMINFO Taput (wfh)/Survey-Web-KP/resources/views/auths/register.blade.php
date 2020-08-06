<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Register Page</title>
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
                        <h1>Halaman Register </h1>
                      </center>
                      @if(session('gagal'))
                      <div class="alert alert-danger" role="alert">
                        {{session('gagal')}}
                      </div>
                      @endif
                    </div>
                    <form class="form-auth-small" action="/buatAkun" method="post">
                      {{ csrf_field() }}

                      <div class="form-group">
                        <label for="signin-name" class="control-label sr-only">Nama</label>
                        <input name="name" type="text" class="form-control" id="signin-name" value="{{ old('name')}}" placeholder="Masukkan Nama Anda..">

                        @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                        @endif
                      </div>

                      <div class="form-group">
                        <label for="signin-nik" class="control-label sr-only">NIK</label>
                        <input name="nik" type="text" class="form-control" id="signin-nik" value="{{ old('nik')}}" placeholder="Masukkan NIK Anda..">

                        @if ($errors->has('nik'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nik') }}</strong>
                                    </span>
                        @endif
                      </div>

                      <div class="form-group">
                        <label for="signin-password" class="control-label sr-only">Password</label>
                        <input name="password" type="password" class="form-control" id="signin-password" placeholder="Masukkan Password..">

                        @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif
                      </div>

                      <div class="form-group">
                        <label for="signin-password" class="control-label sr-only">Confirm Password</label>
                        <input name="confirm_password" type="password" class="form-control" id="signin-password" placeholder="Masukkan Ulang Password..">

                        @if ($errors->has('confirm_password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('confirm_password') }}</strong>
                                    </span>
                        @endif
                      </div>
                      <button type="submit" class="btn btn-primary btn-lg btn-block">Daftar</button>
                      <div class="bottom">
                        <span class="helper-text"><i class="fa fa-lock"></i> <a href="/login">Sudah punya akun?</a></span>
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
