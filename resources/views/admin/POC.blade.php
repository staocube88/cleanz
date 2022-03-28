<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="assets/img/logo-fav.png">
    <title>Beagle</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/lib/perfect-scrollbar/css/perfect-scrollbar.min.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/lib/material-design-icons/css/material-design-iconic-font.min.css') }}"/><!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/lib/datetimepicker/css/bootstrap-datetimepicker.min.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/lib/select2/css/select2.min.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/lib/bootstrap-slider/css/bootstrap-slider.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" type="text/css"/>
  </head>
  <body>
    <div class="be-wrapper be-color-header be-fixed-sideba">
      <nav class="navbar navbar-default navbar-fixed-top be-top-header">
        <div class="container-fluid">
          <div class="navbar-header"><a href="index.html" class="navbar-brand"></a></div>
          <div class="be-right-navbar">
            <ul class="nav navbar-nav navbar-right be-user-nav">
              <li class="dropdown"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="dropdown-toggle"><img src="assets/img/avatar.png" alt="Avatar"><span class="user-name">Túpac Amaru</span></a>
                <ul role="menu" class="dropdown-menu">
                  <li>
                    <div class="user-info">
                      <div class="user-name">Túpac Amaru</div>
                      <div class="user-position online">Available</div>
                    </div>
                  </li>
                  <li><a href="#"><span class="icon mdi mdi-face"></span> Account</a></li>
                  <li><a href="#"><span class="icon mdi mdi-settings"></span> Settings</a></li>
                  <li><a href="#"><span class="icon mdi mdi-power"></span> Logout</a></li>
                </ul>
              </li>
            </ul>
            <div class="page-title"><span>Form Elements</span></div>
            <ul class="nav navbar-nav navbar-right be-icons-nav">
              <li class="dropdown"><a href="#" role="button" aria-expanded="false" class="be-toggle-right-sidebar"><span class="icon mdi mdi-settings"></span></a></li>
              <li class="dropdown"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="dropdown-toggle"><span class="icon mdi mdi-notifications"></span><span class="indicator"></span></a>
                {{-- <ul class="dropdown-menu be-notifications">
                  <li>
                    <div class="title">Notifications<span class="badge">3</span></div>
                    <div class="list">
                      <div class="be-scroller">
                        <div class="content">
                          <ul>
                            <li class="notification notification-unread"><a href="#">
                                <div class="image"><img src="assets/img/avatar2.png" alt="Avatar"></div>
                                <div class="notification-info">
                                  <div class="text"><span class="user-name">Jessica Caruso</span> accepted your invitation to join the team.</div><span class="date">2 min ago</span>
                                </div></a></li>
                            <li class="notification"><a href="#">
                                <div class="image"><img src="assets/img/avatar3.png" alt="Avatar"></div>
                                <div class="notification-info">
                                  <div class="text"><span class="user-name">Joel King</span> is now following you</div><span class="date">2 days ago</span>
                                </div></a></li>
                            <li class="notification"><a href="#">
                                <div class="image"><img src="assets/img/avatar4.png" alt="Avatar"></div>
                                <div class="notification-info">
                                  <div class="text"><span class="user-name">John Doe</span> is watching your main repository</div><span class="date">2 days ago</span>
                                </div></a></li>
                            <li class="notification"><a href="#">
                                <div class="image"><img src="assets/img/avatar5.png" alt="Avatar"></div>
                                <div class="notification-info"><span class="text"><span class="user-name">Emily Carter</span> is now following you</span><span class="date">5 days ago</span></div></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="footer"> <a href="#">View all notifications</a></div>
                  </li>
                </ul> --}}
              </li>
              {{-- <li class="dropdown"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="dropdown-toggle"><span class="icon mdi mdi-apps"></span></a> --}}
                <ul class="dropdown-menu be-connections">
                  <li>
                    <div class="list">
                      <div class="content">
                        <div class="row">
                          <div class="col-xs-4"><a href="#" class="connection-item"><img src="assets/img/github.png" alt="Github"><span>GitHub</span></a></div>
                          <div class="col-xs-4"><a href="#" class="connection-item"><img src="assets/img/bitbucket.png" alt="Bitbucket"><span>Bitbucket</span></a></div>
                          <div class="col-xs-4"><a href="#" class="connection-item"><img src="assets/img/slack.png" alt="Slack"><span>Slack</span></a></div>
                        </div>
                        <div class="row">
                          <div class="col-xs-4"><a href="#" class="connection-item"><img src="assets/img/dribbble.png" alt="Dribbble"><span>Dribbble</span></a></div>
                          <div class="col-xs-4"><a href="#" class="connection-item"><img src="assets/img/mail_chimp.png" alt="Mail Chimp"><span>Mail Chimp</span></a></div>
                          <div class="col-xs-4"><a href="#" class="connection-item"><img src="assets/img/dropbox.png" alt="Dropbox"><span>Dropbox</span></a></div>
                        </div>
                      </div>
                    </div>
                    <div class="footer"> <a href="#">More</a></div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="be-left-sidebar">
        <div class="left-sidebar-wrapper"><a href="#" class="left-sidebar-toggle">Admin Home</a>
          <div class="left-sidebar-spacer">
            <div class="left-sidebar-scroll">
              <div class="left-sidebar-content">
              <ul class="sidebar-elements">
                  @if( Auth::user()->admin == 1)
                           <li class="divider">Menu</li>
                  <li><a href="{{ url('admin/dashboard') }}"><i class="icon mdi mdi-home"></i><span>Dashboard</span></a>
                  </li>
                  @endif

                  <li class="divider">Staff</li>
                  <li><a href="{{ url('admin/clothes') }}"><i class="icon mdi mdi-face"></i><span>Clothes</span></a>
                  </li>
                  <li><a href="{{ url('admin/services') }}"><i class="icon mdi mdi-face"></i><span>Services</span></a>
                      </li>
                      <li><a href="{{ url('admin/customers') }}"><i class="icon mdi mdi-face"></i><span>Customers</span></a>
                      </li>
                      <li><a href="{{ url('admin/POS') }}"><i class="icon mdi mdi-face"></i><span>POS</span></a>
                      </li>
                      <li class="active"><a href="{{ url('admin/POC') }}"><i class="icon mdi mdi-face"></i><span>POC</span></a>
                      </li>
                      <li><a href="{{ url('admin/pricelist') }}"><i class="icon mdi mdi-face"></i><span>Price List</span></a>
                      </li>
                      <li><a href="{{ url('admin/expenses') }}"><i class="icon mdi mdi-face"></i><span>Expenses</span></a>
                      </li>
                      <li><a href="{{ url('admin/orders') }}"><i class="icon mdi mdi-face"></i><span>Orders</span></a>
                      </li>

                  <li class="divider">General</li>
                  <li class=""><a href="{{ url('admin/logout') }}"><i class="icon mdi mdi-chart-donut"></i><span>Logout</span></a>
                  <li class=""><a href="{{ url('admin/about') }}"><i class="icon mdi mdi-chart-donut"></i><span>About</span></a>
                  <li class=""><a href="{{ url('admin/help') }}"><i class="icon mdi mdi-chart-donut"></i><span>Help</span></a>

@if( Auth::user()->admin == 1)
      <li class="divider">Admin</li>{{-- 
                  <li class=""><a href="{{ url('admin/activate') }}"><i class="icon mdi mdi-dot-circle"></i><span>Activate</span></a></li>
 --}}
                  <li class=""><a href="{{ url('admin/reports') }}"><i class="icon mdi mdi-dot-circle"></i><span>Reports</span></a></li>
               {{--    <li class=""><a href="{{ url('admin/settings') }}"><i class="icon mdi mdi-dot-circle"></i><span>Settings</span></a></li> --}}
                  <li><a href="{{ url('admin/users') }}"><i class="icon mdi mdi-dot-circle"></i><span>User</span></a></li>
                  <li><a href="{{ url('admin/center') }}"><i class="icon mdi mdi-dot-circle"></i><span>Center</span></a></li>
  @endif
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="be-content">
        <div class="page-head">
          <h2 class="page-head-title">Customer Payment Table</h2>
          {{-- <ol class="breadcrumb page-head-nav">
            <li><a href="#">Home</a></li>
            <li><a href="#">Forms</a></li>
            <li class="active">Elements</li>
          </ol> --}}
        </div>
        <div class="main-content container-fluid">
          <!--Basic forms-->
          <div class="row">
           {{--  <div class="col-sm-6">
              <div class="panel panel-default panel-border-color panel-border-color-primary">
                <div class="panel-heading panel-heading-divider">Basic Form<span class="panel-subtitle">This is the default bootstrap form layout</span></div>
                <div class="panel-body">
                  <form>
                    <div class="form-group xs-pt-10">
                      <label>Email address</label>
                      <input type="email" placeholder="Enter email" class="form-control">
                    </div>
                    <div class="form-group">
                      <label>Password</label>
                      <input type="password" placeholder="Password" class="form-control">
                    </div>
                    <div class="row xs-pt-15">
                      <div class="col-xs-6">
                        <div class="be-checkbox">
                          <input id="check1" type="checkbox">
                          <label for="check1">Remember me</label>
                        </div>
                      </div>
                      <div class="col-xs-6">
                        <p class="text-right">
                          <button type="submit" class="btn btn-space btn-primary">Submit</button>
                          <button class="btn btn-space btn-default">Cancel</button>
                        </p>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div> --}}
            <div class="col-sm-6">
              <div class="panel panel-default panel-border-color panel-border-color-primary">
                <div class="panel-heading panel-heading-divider">Repayment Form{{-- <span class="panel-subtitle">This is the horizontal bootstrap layout</span> --}}</div>
                <div class="panel-body">

                <div id="loader" align="center">
                  
                </div>

                  <form class="form-horizontal">
                    <input type="hidden" id="center" value="{{ Auth::user()->center }}" class="form-control">

                  <div class="form-group xs-pt-10" style="padding: 0px;">
                      <label for="inputEmail3" class="col-sm-2 control-label">Customer ID</label>
                      {{-- <div class="col-sm-1"></div> --}}
                       <div class="col-sm-10">
                        <select  class="select2 form-control input-xs" id="customerid">
                        <optgroup label="Customer ID">
                        <option value="0">---select---</option>
                            @foreach($customers as $customer)
                              <option value="{{ $customer->id }}">{{ $customer->customer_id }}</option>
                            @endforeach
                        </optgroup>
                     </select>

                    </div>
                    </div>
                    <div class="form-group xs-mt-10">
                      <label for="inputEmail3" class="col-sm-2 control-label">Customer Name</label>
                      <div class="col-sm-10">
                        <input id="customername" type="text" placeholder="Customer Name" class="form-control input-xs" disabled>
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">Balance</label>
                      <div class="col-sm-10">
                        <input id="balance" type="text" placeholder="Balance" class="form-control input-xs" disabled>
                      </div>
                    </div>

                   {{--  <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">Total</label>
                      <div class="col-sm-10">
                        <input id="total" type="text" placeholder="Total" class="form-control input-xs" disabled>
                      </div>
                    </div> --}}

                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">Order ID</label>
                      <div class="col-sm-10">
                        <input id="orderID" type="text" placeholder="New Order ID" class="form-control input-xs" disabled>
                      </div>
                    </div>

                    <div class="form-group" style="padding: 0px;">
                      <label for="inputEmail3" class="col-sm-2 control-label">Deliver</label>
                      <div class="col-sm-10">
                        <div data-min-view="2" data-date-format="yyyy-mm-dd" class="input-group date datetimepicker">
                          <input type="text" value="" id="deliverdate" class="form-control input-xs"><span class="input-group-addon btn btn-primary"><i class="icon-th mdi mdi-calendar"></i></span>
                      </div>
                      </div>
                  </div>
      

                    <div class="form-group">
                      <label for="inputPassword3"  class="col-sm-2 control-label">Amount Paid</label>
                      <div class="col-sm-10">
                        <input id="amount_paid" type="text" placeholder="Amount Paid" class="form-control input-xs">
                      </div>
                    </div>

                    <div class="row xs-pt-15">
                      <div class="col-xs-6">
                        {{-- <div class="be-checkbox">
                          <input id="check2" type="checkbox">
                          <label for="check2">Remember me</label>
                        </div> --}}
                      </div>
                      <div class="col-xs-6">
                        <p class="text-right">
                          <button type="submit" class="btn btn-space btn-primary" id="repay">Pay</button>
                          <button class="btn btn-space btn-default">Cancel</button>
                        </p>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          </div>
      </div>
      
    </div>

    <script src="{{ asset('assets/lib/jquery/jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/main.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/lib/bootstrap/dist/js/bootstrap.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/lib/jquery-ui/jquery-ui.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/lib/jquery.nestable/jquery.nestable.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/lib/moment.js/min/moment.min.js') }}" type="text/javascript"></script>
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


      $(document).ready(function() {

        $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });
        
        $("#customerid").change(function(e){
      
      function isEmpty(value){
        return (value == null || value.length === 0);
      }

       $('#loader').append('<img src="{{ asset('assets/img/default/loading.gif') }}">');
      
      var customer_id = $('#customerid').val(); 
      var url = "/admin/customers"; 
      var balance,total;
      
     // var window.names;
  

    $.get(url + '/' + customer_id, function (data) {
          $('#customername').val(data.name);
          $('#custname').text(data.name); 
        });

    $.get('/admin/api/getTransactionID' , function (data) {
        console.log(data);
          
          var id;

        $.each(data,function(a, v){
          id = v.id;
          });
        if( isNaN(id)){
          id = 1;
        }else{
          id = id + 1;  
        }
        $('#orderID').val(id);

        })


    $.get('/admin/api/getcustomer/transaction/'+ customer_id, function (data) {
        

        $.each(data,function(a, v){
          balance = v.balance;
          total = v.total;
          });
       // console.log(balance);
        
        $('#total').val(total);
          if(isEmpty(data)){
            $('#balance').val(0);
            $('#custbal').text(balance);
          }else{
            $('#balance').val(balance);
            $('#custbal').text(balance);

        }
            
        })


    // $.get('/admin/api/getOrderID' , function (data) {
        // console.log($('#customername').val());
    //       $('#orderid').val(data);   
    //     })

        $('#loader').empty(); 

      //  $('#creditalert1').text(customername +" owes "+ (-1 * balance +"naira"));
      
        $('#creditalert').modal('show'); 

    });


    $('#repay').on('click',  function(event) {
      event.preventDefault();
      /* Act on the event */
      function isEmpty(value){
        return (value == null || value.length === 0);
      }

      if ( isEmpty($('#customerid').val()) || isEmpty($('#deliverdate').val()) || isEmpty($('#amount_paid').val())  ) {
        $('#mod-danger').modal('show');

      }else{

        var bal = $('#amount_paid').val() - $('#balance').val();

        $.ajax({
      url: '/admin/api/transaction',
      type: 'POST',
      data:  {
        order_id:    $('#orderID').val(),
        customer_id: "CLN"+$('#customerid').val(),
        amount_paid: $('#amount_paid').val(),
        balance:     bal,
        total:       $('#balance').val(),
        deliver_date:$('#deliverdate').val(),
        center:      $('#center').val(),
      },
      dataType: 'json',
      success: function(data){

        console.log(data);

        $('#customerpaid').modal('show');

        },
    });
      }
    });



      });
    </script>
  </body>
</html>



<div id="creditalert" tabindex="-1" role="dialog" class="modal fade">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" data-dismiss="modal" aria-hidden="true" class="close"><span class="mdi mdi-close"></span></button>
          </div>
          <div class="modal-body">
            <div class="text-center">
              <div class="text-success"><span class="modal-main-icon mdi mdi-check"></span></div>
              <h3>Alert!</h3>
{{-- 
              <input id="custname" type="hidden" class="form-control input-xs" disabled>
              <input id="custbal" type="hidden" class="form-control input-xs" disabled>
 --}}

              <p id="custname"></p>
              <p id="custbal"></p>
              <p></p>
              <div class="xs-mt-50">
                {{-- <button type="button" data-dismiss="modal" class="btn btn-space btn-default">Cancel</button> --}}
                <button type="button" data-dismiss="modal" class="btn btn-space btn-success">Cancel</button>

              </div>
            </div>
          </div>
          <div class="modal-footer"></div>
        </div>
      </div>
    </div>


    <div id="mod-danger" tabindex="-1" role="dialog" class="modal fade">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" data-dismiss="modal" aria-hidden="true" class="close"><span class="mdi mdi-close"></span></button>
          </div>
          <div class="modal-body">
            <div class="text-center">
              <div class="text-danger"><span class="modal-main-icon mdi mdi-close-circle-o"></span></div>
              <h3>Danger!</h3>
              <p>Some Fields are Emtpy!!!.</p>
              <div class="xs-mt-50">
                {{-- <button type="button" data-dismiss="modal" class="btn btn-space btn-default">Cancel</button> --}}
                <button type="button" data-dismiss="modal" class="btn btn-space btn-danger">Cancel</button>
              </div>
            </div>
          </div>
          <div class="modal-footer"></div>
        </div>
      </div>
    </div>


    <div id="customerpaid" tabindex="-1" role="dialog" style="" class="modal fade">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" data-dismiss="modal" aria-hidden="true" class="close"><span class="mdi mdi-close"></span></button>
          </div>
          <div class="modal-body">
            <div class="text-center">
              <div class="text-success"><span class="modal-main-icon mdi mdi-check"></span></div>
              <h3>Awesome!</h3>
              <strong>
              <p id="information">
                Customer successfully paid!!!
              </p>
              </strong>
              <div class="xs-mt-50">
                <button type="button" data-dismiss="modal" class="btn btn-space btn-success">Proceed</button>
                {{-- <button type="button" id="btn-success" class="btn btn-space btn-success">Proceed</button> --}}
              </div>
            </div>
          </div>
          <div class="modal-footer"></div>
        </div>
      </div>
    </div>