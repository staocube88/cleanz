@extends('admin.layouts.cleanritemaster')


@section('css')
       <link rel="stylesheet" type="text/css" href="{{ asset('assets/lib/datatables/css/dataTables.bootstrap.min.css') }}"/>
       <link rel="stylesheet" type="text/css" href="{{ asset('assets/lib/select2/css/select2.min.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/lib/bootstrap-slider/css/bootstrap-slider.css') }}"/>
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
                      <li class="active"><a href="{{ url('admin/pricelist') }}"><i class="icon mdi mdi-face"></i><span>Price List</span></a>
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
          <h2 class="page-head-title">Price List</h2>
        
        </div>
        <div class="main-content container-fluid">
          <div class="row">
            <div class="col-sm-12">
              <div class="panel panel-default panel-table">
                <div class="panel-heading">
                  <div class="tools"><span class="icon mdi mdi-more-vert"></span></div>
                  
                  <div class="widget-head">
                  <div class="button-toolbar hidden-xs">

                    <div class="btn-group">
                      
                      
                      @if( Auth::user()->admin == 1)

                      <button class="btn btn-space btn-success" id="btn-new"><i class="icon icon-left mdi mdi-check"></i> Add New</button>
                      
                      @endif


                  
                   {{--    <button type="button" class="btn btn-default active">Edit</button>
                       @if( Auth::user()->admin == 1)
                      <button type="button" class="btn btn-default">Delete</button>
                      @endif --}}
                    </div>
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
                        <th>Cloth</th>
                        <th>Service</th>
                        <th>Price</th>
                        <th>Staff(s)</th>
                        <th>Created_At</th>
                        @if( Auth::user()->admin == 1)
                        <th>Action</th>
                        @endif
                      </tr>
                    </thead>
                    <tbody>
                      
                    @foreach($pricelists as $pricelist)

                    @if($pricelist->id % 2 == 0)
                          <tr class="odd gradeX">
                    @endif

                    @if($pricelist->id % 2 == 1)
                          <tr class="even gradeC">
                    @endif
                              <td>{{ $pricelist->id }}</td>
                              <td>{{ $pricelist->cloth }}</td>
                              <td>{{ $pricelist->service }}</td>
                              <td>{{ $pricelist->price }}</td>
                              <td>{{ $pricelist->staff }}</td>
                              <td class="center">{{ $pricelist->created_at }}</td>

                              @if( Auth::user()->admin == 1)
                              <td> <button class="btn btn-warning btn-xs btn-detail open-modal" value="{{$pricelist->id}}"><i class="fa fa-edit"></i>Edit</button>
                            
                             <button class="btn btn-danger btn-xs btn-delete delete-task" value="{{$pricelist->id}}">Delete</button>
                              </td>
                              @endif
                            </td>
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
    <script src="{{ asset('assets/lib/datetimepicker/js/bootstrap-datetimepicker.min.js') }}" type="text/javascript"></script>
    
    <script src="{{ asset('assets/lib/select2/js/select2.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/lib/bootstrap-slider/js/bootstrap-slider.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/app-form-elements.js') }}" type="text/javascript"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        //initialize the javascript
        App.init();
        App.dataTables();
        App.formElements();
      });



      jQuery(document).ready(function($) {
        
        var url = "/admin/pricelist";

          $.ajaxSetup({
              headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
            });

    $('#btn-new').click(function(){
        $('#save').val("add");
        $('#formtask').trigger("reset");
        $('#modaltitle').text('Add New Pricelist');
        $('#mod-success').modal('show');
    });



    $('.open-modal').click(function(){
         var task_id = $(this).val();

        $.get(url + '/' + task_id, function (data) {
            //success data
           // console.log(data);
            $('#price_id').val(data.id);
            $('#cloth').val(data.cloth);
            $('#service').val(data.service);
            $('#price').val(data.price);
            $('#modaltitle').text('Update pricelist');
            $('#save').val("update");

            $('#mod-success').modal('show');
        }) 
    });


    $('#btn-success').on('click', function(event) {
          var url = "http://localhost:8000/admin/pricelist";
          $(location).attr('href', url);
    });


    // delete

      $('.delete-task').click(function(){
        var price_id = $(this).val();

        $.ajax({

            type: "DELETE",
            url: url + '/' + price_id,
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
        var price_id = $('#price_id').val();
        var my_url = url;

        if (state == "update"){
            type = "PUT"; //for updating existing resource
            my_url += '/' + price_id;
        }


      

      $.ajax({
        url: my_url,
        type: type,
        data: { cloth: $('#cloth').val().toLowerCase(),
                service: $('#service').val().toLowerCase(),
                price: $('#price').val(),
                staff: $('#staff').val()
          },
        dataType: 'json',
        success: function(data){
          // var url = "http://localhost:8000/admin/clothes";
          //           $(location).attr('href', url);

          
            $('#information').text('Data successfully entered!!!');
            

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
            <h3 class="modal-title" id="modaltitle"></h3>
          </div>
          <form id="formtask">
          <div class="modal-body">

            <input type="hidden" id="staff" value="{{ Auth::user()->name }}" class="form-control">
             <input type="hidden" id="price_id" value="" class="form-control">
            
            <div class="form-group">
              <label>Cloth</label>
              <input type="text" id="cloth" placeholder="Enter Name" class="form-control">
            </div>
            <div class="form-group">
              <label>Service</label>
              <input type="text" id="service" placeholder="Enter description" class="form-control">
            </div>
            <div class="form-group">
              <label>Price</label>
              <input type="text" id="price" placeholder="Enter description" class="form-control">
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
