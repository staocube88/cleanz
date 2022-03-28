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
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/lib/datatables/css/dataTables.bootstrap.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" type="text/css"/>
  </head>
  <body>
    <div class="be-wrapper">
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
            <div class="page-title"><span>Admin Homepage</span></div>
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
        <div class="left-sidebar-wrapper"><a href="#" class="left-sidebar-toggle">Form Elements</a>
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
                      <li><a href="{{ url('admin/POC') }}"><i class="icon mdi mdi-face"></i><span>POC</span></a>
                      </li>
                      <li><a href="{{ url('admin/pricelist') }}"><i class="icon mdi mdi-face"></i><span>Price List</span></a>
                      </li>
                      <li class="active"><a href="{{ url('admin/expenses') }}"><i class="icon mdi mdi-face"></i><span>Expenses</span></a>
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
          <h2 class="page-head-title">Expenses</h2>
          {{-- <ol class="breadcrumb page-head-nav">
            <li><a href="#">Home</a></li>
            <li><a href="#">Forms</a></li>
            <li class="active">Elements</li>
          </ol> --}}
        </div>
        <div class="main-content container-fluid">
          <!--Basic forms-->
          <div class="row">


              <div class="col-sm-12">
              <div class="panel panel-default panel-table">
                <div class="panel-heading">
                  <div class="tools"><span class="icon mdi mdi-more-vert"></span></div>
                 
                 <div class="widget-head">
                  <div class="button-toolbar hidden-xs">

                    <div class="btn-group">
                      <button class="btn btn-space btn-success" id="btn-new"><i class="icon icon-left mdi mdi-check"></i> Add New</button>
                    </div>
                  </div>
                  </div>

                </div>
                <div class="panel-body">
                  <table id="table1" class="table table-striped table-hover table-fw-widget">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Category</th>
                        <th>Amount</th>
                        <th>Description</th>
                        <th>Staff</th>
                        <th>Center</th>
                        <th>Date Created</th>
                        @if( Auth::user()->admin == 1)
                        <th>Action</th>
                        @endif
                      </tr>
                    </thead>
                    <tbody id="tableStore">
                      
                     @foreach($expenses as $expense)

                    @if($expense->id % 2 == 0)
                          <tr class="odd gradeX">
                    @endif

                    @if($expense->id % 2 == 1)
                          <tr class="even gradeC">
                    @endif
                              <td>{{ $expense->id }}</td>
                              <td>{{ $expense->title }}</td>
                              <td>{{ $expense->category }}</td>
                              <td>{{ $expense->amount }}</td>
                              <td>{{ $expense->description }}</td>
                              <td>{{ $expense->staff }}</td>
                              <td>{{ $expense->center }}</td>
                              <td class="center">{{ $expense->created_at }}</td>

                              @if( Auth::user()->admin == 1)
                               <td> <button class="btn btn-warning btn-xs btn-detail open-modal" value="{{ $expense->id}}"><i class="fa fa-edit"></i>Edit</button> 
                                                    
                             <button class="btn btn-danger btn-xs btn-delete delete-task" value="{{ $expense->id }}">Delete</button>
                              </td>
                              @endif

                            </td>
                            </tr>
                    @endforeach 
                    </tbody>
                  </table>



                   <div class="xs-mt-10">
                    <div class="list-group">
                    <a href="#" class="list-group-item active"><span class="badge badge-primary" id="result"></span> <span class="text-success mdi mdi-puzzle-piece icon"></span> TOTAL </a>
                    </div>
                  </div>



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
    <script src="{{ asset('assets/lib/datatables/js/jquery.dataTables.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/lib/datatables/js/dataTables.bootstrap.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/lib/datatables/plugins/buttons/js/dataTables.buttons.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/lib/datatables/plugins/buttons/js/buttons.html5.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/lib/datatables/plugins/buttons/js/buttons.flash.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/lib/datatables/plugins/buttons/js/buttons.print.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/lib/datatables/plugins/buttons/js/buttons.colVis.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/lib/datatables/plugins/buttons/js/buttons.bootstrap.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/app-tables-datatables.js') }}" type="text/javascript"></script>
    <script type="text/javascript">
      $(document).ready(function(){
      	//initialize the javascript
      	App.init();
        //App.dataTables();

      	App.formElements();
        
      });


       jQuery(document).ready(function($) {

        var table = $('#table1').DataTable({
          stateSave: true,
        });

    // Automatically add a first row of data
    //$('#Proceed').click();

    var url = "/admin/expenses";

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });

       // event.preventDefault();
    
    //updating button
      $('.open-modal').click(function(){
         var task_id = $(this).val();

        $.get(url + '/' + task_id, function (data) {
            //success data
           // console.log(data);
           $('#expense_id').val(data.id);
            $('#title').val(data.title);
            $('#category').val(data.category);
            $('#amount').val(data.amount);
            $('#description').val(data.description);
            $('#modaltitle').text('Update Expenses Details');
            $('#save').val("update");

            $('#mod-success').modal('show');
        }) 
    });

    //new button
    $('#btn-new').click(function(){
        $('#save').val("add");
        $('#formtask').trigger("reset");
        $('#modaltitle').text('Add New Expenses');
        $('#mod-success').modal('show');
    });

    $('#btn-success').on('click', function(event) {
          var url = "http://localhost:8000/admin/expenses";
          $(location).attr('href', url);
    });

      //delete
       $('.delete-task').click(function(){
        var expense_id = $(this).val();

        $.ajax({

            type: "DELETE",
            url: url + '/' + expense_id,
            success: function (data) {
                // var url = "http://localhost:8000/admin/clothes";
                //     $(location).attr('href', url);
                $('#information').text('Data successfully deleted!!!');
                    $('#success').modal('show'); 
            },
            error: function (data) {
                //console.log('Error:', data);
            }
        });
    });



    $('#save').on('click', function(event) {
      //event.preventDefault();
      /* Act on the event */


        //used to determine the http verb to use [add=POST], [update=PUT]
        var state = $('#save').val();

        var type = "POST"; //for creating new resource
        var expense_id = $('#expense_id').val();
        var my_url = url;

        if (state == "update"){
            type = "PUT"; //for updating existing resource
            my_url += '/' + expense_id;
        }


      

      $.ajax({
        url: my_url,
        type: type,
        data: {title: $('#title').val(),
            category: $('#category').val(),
            amount: $('#amount').val(),
            description: $('#description').val(),
            staff: $('#staff').val(),
            center: $('#center').val(),
          },
        dataType: 'json',
        success: function(data){
          // var url = "http://localhost:8000/admin/clothes";
          //           $(location).attr('href', url);

          if(state == "update"){
            $('#information').text('Data successfully updated!!!');
          }else{
            $('#information').text('Data successfully entered!!!');
          }
          $('#success').modal('show');             
        }
      })
      .done(function() {
        console.log("success");
      })
      .fail(function() {
        console.log("error");
      })
      .always(function() {
        console.log("complete");
      });

    });

  });
    </script>
  </body>
</html>




 <!--Modal Alerts-->
       <div id="mod-success" tabindex="-1" role="dialog" class="modal fade colored-header colored-header-primary">
      <div class="modal-dialog custom-width">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" data-dismiss="modal" aria-hidden="true" class="close md-close"><span class="mdi mdi-close"></span></button>
            <h3 class="modal-title" id="modaltitle"></h3>
          </div>
          <form id="formtask">
          <div class="modal-body">

            <input type="hidden" id="staff" value="{{ Auth::user()->name }}" class="form-control">
             <input type="hidden" id="expense_id" value="" class="form-control">

             <input type="hidden" id="center" value="{{ Auth::user()->center }}" class="form-control">
            
            <div class="form-group">
              <label>Title</label>
              <input type="text" id="title" placeholder="Enter Title" class="form-control">
            </div>
            <div class="form-group">
              <label>Category</label>
              <input type="text" id="category" placeholder="Enter Category" class="form-control">
            </div>
            <div class="form-group">
              <label>Amount</label>
              <input type="text" id="amount" placeholder="Enter amount" class="form-control">
            </div>
            <div class="form-group">
              <label>Description</label>
              <input type="text" id="description" placeholder="Enter short Description" class="form-control">
            </div>
          </div>

          <div class="modal-footer">
          
            <button type="button" data-dismiss="modal" class="btn btn-default md-close">Cancel</button>
            <button type="button" id="save" value="" data-dismiss="modal" class="btn btn-primary md-close">Save</button>
          </div>
          </form>
        </div>

      </div>
    </div>



 {{--    //Success Information --}}

     <div id="success" tabindex="-1" role="dialog" style="" class="modal fade">
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
                
              </p>
              </strong>
              <div class="xs-mt-50">
               {{--  <button type="button" data-dismiss="modal" class="btn btn-space btn-default">Cancel</button> --}}
                <button type="button" id="btn-success" class="btn btn-space btn-success">Proceed</button>
              </div>
            </div>
          </div>
          <div class="modal-footer"></div>
        </div>
      </div>
    </div>




<div id="creditalert" tabindex="-1" role="dialog" class="modal fade">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" data-dismiss="modal" aria-hidden="true" class="close"><span class="mdi mdi-close"></span></button>
          </div>
          <div class="modal-body">
            <div class="text-center">
              <div class="text-danger"><span class="modal-main-icon mdi mdi-close-circle-o"></span></div>
              <h3>Danger!</h3>
              <p id="creditalert1"></p>
              <p></p>
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