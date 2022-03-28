@extends('admin.layouts.cleanritemaster')


@section('css')
       <link rel="stylesheet" type="text/css" href="{{ asset('assets/lib/datatables/css/dataTables.bootstrap.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" type="text/css"/>
@stop


@section('main_content')


  <div class="be-left-sidebar">
        <div class="left-sidebar-wrapper"><a href="#" class="left-sidebar-toggle">Dashboard</a>
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
                      <li><a href="{{ url('admin/expenses') }}"><i class="icon mdi mdi-face"></i><span>Expenses</span></a>
                      </li>
                      <li class="active"><a href="{{ url('admin/orders') }}"><i class="icon mdi mdi-face"></i><span>Orders</span></a>
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
          <h2 class="page-head-title">Services</h2>
         {{--  <ol class="breadcrumb page-head-nav">
            <li><a href="#">Home</a></li>
            <li><a href="#">Tables</a></li>
            <li class="active">Data Tables</li>
          </ol> --}}
        </div>
        <div class="main-content container-fluid">
          <div class="row">
            <div class="col-sm-12">
              <div class="panel panel-default panel-table">
                <div class="panel-heading">
                  <div class="tools">{{-- <span class="icon mdi mdi-download"></span> --}}<span class="icon mdi mdi-more-vert"></span></div>
                  
                  <div class="widget-head">
                  <div class="button-toolbar hidden-xs">
                   {{--  <div class="btn-group">
                      <button type="button" data-toggle="modal" data-target="#mod-success" class="btn btn-default">New</button>
                      <button type="button" class="btn btn-default active">Edit</button>
                      @if( Auth::user()->admin == 1)
                      <button type="button" class="btn btn-default">Delete</button>
                      @endif
                    </div> --}}
                    {{-- <div class="btn-group">
                      <button type="button" class="btn btn-default">Today</button>
                    </div> --}}
                  </div>
                  </div>

                </div>
                <div class="panel-body">
                  <table id="table1" class="table table-striped table-hover table-fw-widget">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Clothe</th>
                        <th>Service</th>
                        <th>Color</th>
                        <th>Fabric</th>
                        <th>Brand</th>
                        <th>Starch</th>
                        <th>Center</th>
                        <th>Discount</th>
                        <th>Quantity</th>
                        <th>Unit Cost</th>
                        <th>Total</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach($orders as $order)

                    @if($order->id % 2 == 0)
                          <tr class="odd gradeX">
                    @endif

                    @if($order->id % 2 == 1)
                          <tr class="even gradeC">
                    @endif
                              <td>{{ $order->id }}</td>
                              <td>{{ $order->clothe }}</td>
                              <td>{{ $order->service }}</td>
                              <td>{{ $order->color }}</td>
                              <td>{{ $order->fabric }}</td>
                              <td class="center">{{ $order->brand }}</td>
                              <td class="center">{{ $order->starch }}</td>
                              <td class="center">{{ $order->center }}</td>
                              <td class="center">{{ $order->discount }}</td>
                              <td class="center">{{ $order->quantity }}</td>
                              <td class="center">{{ $order->unit_cost }}</td>
                              <td class="center">{{ $order->total }}</td>

                    </tr>
                    @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

@stop

@section('script')
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
        App.dataTables();
      });



        jQuery(document).ready(function($) {

        // var table = $('#table1').DataTable({
        //   stateSave: true,
        // });

    // Automatically add a first row of data
    //$('#Proceed').click();

    var url = "/admin/services";

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
            $('#cloth_id').val(data.id);
            $('#name').val(data.name);
            $('#pieces').val(data.pieces);
            $('#description').val(data.description);
            $('#save').val("update");

            $('#mod-success').modal('show');
        }) 
    });

    //new button
    $('#btn-new').click(function(){
        $('#save').val("add");
        $('#formtask').trigger("reset");
        $('#mod-success').modal('show');
    });

    $('#btn-success').on('click', function(event) {
          var url = "http://localhost:8000/admin/clothes";
          $(location).attr('href', url);
    });

      //delete
       $('.delete-task').click(function(){
        var cloth_id = $(this).val();

        $.ajax({

            type: "DELETE",
            url: url + '/' + cloth_id,
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
        var cloth_id = $('#cloth_id').val();
        var my_url = url;

        if (state == "update"){
            type = "PUT"; //for updating existing resource
            my_url += '/' + cloth_id;
        }


      

      $.ajax({
        url: my_url,
        type: type,
        data: {name: $('#name').val(),
            pieces: $('#pieces').val(),
            description: $('#description').val(),
            staff: $('#staff').val(),
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
@stop


  <!--Modal Alerts-->
       <div id="mod-success" tabindex="-1" role="dialog" class="modal fade colored-header colored-header-primary">
      <div class="modal-dialog custom-width">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" data-dismiss="modal" aria-hidden="true" class="close md-close"><span class="mdi mdi-close"></span></button>
            <h3 class="modal-title">Add New Service</h3>
          </div>
          <form id="formtask">
          <div class="modal-body">

            <input type="hidden" id="staff" value="{{ Auth::user()->name }}" class="form-control">
             <input type="hidden" id="cloth_id" value="" class="form-control">
            
            <div class="form-group">
              <label>Name</label>
              <input type="text" id="name" placeholder="Enter Name" class="form-control">
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
