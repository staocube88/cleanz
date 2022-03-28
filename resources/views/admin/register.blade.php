@extends('admin.layouts.masterpage')


@section('css')
   <link rel="stylesheet" type="text/css" href="{{ asset('assets/lib/select2/css/select2.min.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/lib/bootstrap-slider/css/bootstrap-slider.css') }}"/>
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" type="text/css"/>
@endsection

@section('main_content')
  <body class="be-splash-screen">
    <div class="be-wrapper be-login be-signup">
      <div class="be-content">
        <div class="main-content container-fluid">
          <div class="splash-container sign-up">
            <div class="panel panel-default panel-border-color panel-border-color-primary">
              <div class="panel-heading"><img src="{{ asset('assets/img/logo-xx.png') }}" alt="logo" width="102" height="27" class="logo-img"><span class="splash-description">Please enter your user information.</span></div>

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
              <div class="panel-body">
                <form action="{{ url('admin/register') }}" method="post"><span class="splash-title xs-pb-20">Sign Up</span>

                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  <div class="form-group">
                    <input type="text" name="name" required="" placeholder="Name" autocomplete="off" class="form-control">
                  </div>
                  <div class="form-group">
                    <input type="email" name="email" required="" placeholder="E-mail" autocomplete="off" class="form-control">
                  </div>
                  
                  <div class="form-group">
                        <select  class="select2 form-control" id="center" name="center">
                        <optgroup label="CENTERS">
                        <option value="0">---select center---</option>
                            @foreach($centers as $center)
                              <option value="{{ $center->location }}">{{ $center->name }}</option>
                            @endforeach
                        </optgroup>
                     </select>

                    </div>

                  <div class="form-group row signup-password">
                    <div class="col-xs-6">
                      <input id="pass1" type="password" placeholder="Password" name="password" required="" class="form-control">
                    </div>
                    <div class="col-xs-6">
                      <input required="" type="password" placeholder="Confirm Password" name="password_confirmation" class="form-control">
                    </div>
                  </div>
                  <div class="form-group xs-pt-10">
                    <button type="submit" class="btn btn-block btn-primary btn-xl">Sign Up</button>
                  </div>
               <!--    <div class="title"><span class="splash-title xs-pb-15">Or</span></div>
                  <div class="form-group row social-signup">
                    <div class="col-xs-6">
                      <button type="button" class="btn btn-lg btn-block btn-social btn-facebook btn-color"><i class="mdi mdi-facebook icon icon-left"></i> Facebook</button>
                    </div>
                    <div class="col-xs-6">
                      <button type="button" class="btn btn-lg btn-block btn-social btn-google-plus btn-color"><i class="mdi mdi-google-plus icon icon-left"></i> Google Plus</button>
                    </div>
                  </div> -->
                  <div class="form-group xs-pt-10">
                    <div class="be-checkbox">
                      <input type="checkbox" id="remember">
                      <label for="remember">By creating an account, you agree the <a href="#">terms and conditions</a>.</label>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <div class="splash-footer">&copy; 2016 Your Company</div>
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
    <script src="{{ asset('assets/lib/datetimepicker/js/bootstrap-datetimepicker.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/lib/select2/js/select2.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/lib/bootstrap-slider/js/bootstrap-slider.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/app-form-elements.js') }}" type="text/javascript"></script>
    
    <script type="text/javascript">
      $(document).ready(function(){
        //initialize the javascript
        App.init();
        App.formElements();
      });
      
    </script>
@stop