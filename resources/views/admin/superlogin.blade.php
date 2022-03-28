@extends('admin.layouts.masterpage')


@section('css')
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" type="text/css"/>
@endsection

@section('main_content')
<body class="be-splash-screen">
    <div class="be-wrapper be-login">
      <div class="be-content">
        <div class="main-content container-fluid">
          <div class="splash-container">
            <div class="panel panel-default panel-border-color panel-border-color-primary">
              <div class="panel-heading"><img src=" {{ asset('assets/img/logo-xx.png') }}" alt="logo" width="102" height="27" class="logo-img"><span class="splash-description">Please enter your user information.</span></div>

                @if (count($errors) > 0)
            <div class="alert alert-danger">
              <strong>Whoops!</strong> There were some problems with your input.<br><br>
              <ul>
                @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
          @endif


              @if(Session::has('error'))
              <div class="alert alert-danger">
              <strong>Whoops!</strong> There were some problems with your input.<br><br>
              <ul>
                {{ Session::get('error') }}
              </ul>
            </div>
              @endif


                @if(Session::has('message'))
              <div class="alert alert-success">
              <strong>Welcome!</strong>  {{ Session::get('message') }}<br>
            </div>
              @endif


              <div class="panel-body">

                <form action="{{ url('admin/superlogin') }}" method="post">
                  <div class="form-group">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input id="email" name="email" type="text" placeholder="Username" autocomplete="off" class="form-control">
                  </div>
                  <div class="form-group">
                    <input id="password" type="password" name="password" placeholder="Password" class="form-control">
                  </div>
                  <div class="form-group row login-tools">
                    <div class="col-xs-6 login-remember">
                      <div class="be-checkbox">
                        <input type="checkbox" id="remember">
                        <label for="remember">Remember Me</label>
                      </div>
                    </div>
                    <div class="col-xs-6 login-forgot-password"><a href="#">Forgot Password?</a></div>
                  </div>
                  <div class="form-group login-submit">
                    <button data-dismiss="modal" type="submit" class="btn btn-primary btn-xl">Sign me in</button>
                  </div>
                </form>
              </div>
            </div>
            <div class="splash-footer"><span>Don't have an account? <a href="#">Sign Up</a></span></div>
          </div>
        </div>
      </div>
    </div>
@stop


@section('script')
   <script src=" {{ asset('assets/lib/jquery/jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/main.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/lib/bootstrap/dist/js/bootstrap.min.js') }}" type="text/javascript"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        //initialize the javascript
        App.init();
      });
      
    </script>
@stop




