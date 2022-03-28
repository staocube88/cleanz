@extends('admin.layouts.cleanritemaster')


@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/lib/datatables/css/dataTables.bootstrap.min.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/lib/datetimepicker/css/bootstrap-datetimepicker.min.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/lib/select2/css/select2.min.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/lib/bootstrap-slider/css/bootstrap-slider.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" type="text/css"/>
    <style type="text/css">
      .dataTables_filter, .dataTables_info{
        display: none;
      }
    </style>
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
                      <li class="active"><a href="{{ url('admin/POS') }}"><i class="icon mdi mdi-face"></i><span>POS</span></a>
                      </li>
                      <li><a href="{{ url('admin/POC') }}"><i class="icon mdi mdi-face"></i><span>POC</span></a>
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
          <h2 class="page-head-title">POS</h2>
          {{-- <ol class="breadcrumb page-head-nav">
            <li><a href="#">Home</a></li>
            
            <li> <p style="height: 20px;"><select  class="select2 form-control input-xs" id="customerName">
                        <optgroup label="Customer ID">
                        <option value="">---select---</option>
                            @foreach($customers as $customer)
                              <option value="{{ $customer->id }}">{{ $customer->name }}</option>
                            @endforeach
                        </optgroup>
                     </select></p></li>
          </ol>  --}}

        </div>
        <div class="main-content container-fluid">



        

        <div class="row">
          <!--Basic forms-->
          <div class="row">

          <div class="col-sm-5">
              <div class="panel panel-default">
                <div class="panel-heading">Basic</div>
                <div id="loader" align="center">
                  
                </div>
                <div class="tab-container">
                  <ul class="nav nav-tabs">
                    <li class="active"><a href="#selectById" data-toggle="tab">Select By ID</a></li>
                    <li><a href="#selectByName" data-toggle="tab">Select By Name</a></li>
                  {{--   <li><a href="#messages" data-toggle="tab">Messages</a></li> --}}
                  </ul>
                  <div class="tab-content">
                    <div id="selectById" class="tab-pane active cont">
                     {{--  <h4>Top Tabs</h4> --}}
                      

                      <div class="form-group xs-pt-10" style="padding: 0px;">
                      <label for="inputEmail3" class="col-sm-2 control-label">Customer ID</label>
                      <div class="col-sm-1"></div>
                       <div class="input-group col-sm-5">
                        <select  class="select2 form-control input-xs" id="customerid" style="height: 20px;">
                        <optgroup label="Customer ID">
                        <option value="0">---select---</option>
                            @foreach($customers as $customer)
                              <option value="{{ $customer->id }}">{{ $customer->customer_id }}</option>
                            @endforeach
                        </optgroup>
                     </select>

                    </div>
                    </div>

{{-- 
                    <div class="form-group xs-pt-10" style="padding: 0px;">
                      <label for="inputEmail3" class="col-sm-2 control-label">Customer Name</label>
                      <div class="col-sm-1"></div>
                       <div class="input-group col-sm-5">
                        <select  class="select2 form-control input-xs" id="customername" style="height: 20px;">
                        <optgroup label="Customer Name">
                        <option value="0">---select---</option>
                            @foreach($customers as $customer)
                              <option value="{{ $customer->id }}">{{ $customer->name }}</option>
                            @endforeach
                        </optgroup>
                     </select>

                    </div>
                    </div> --}}


                    <div class="form-group xs-mt-10">
                      <label for="inputEmail3" class="col-sm-2 control-label">Customer Name</label>
                      <div class="col-sm-1"></div>
                      <div class="input-group col-sm-9">
                      <input type="text" class="form-control input-xs" id="customername" value="" disabled>
                    </div>
                  </div>

                    <div class="form-group xs-mt-10">
                      <label for="inputEmail3" class="col-sm-2 control-label">Order ID</label>
                      <div class="col-sm-1"></div>
                      <div class="input-group col-sm-9">
                      <input type="text" class="form-control input-xs" id="orderid" value="" disabled>
                    </div>
                  </div>
                    <div class="form-group xs-mt-10" style="padding: 0px;">
                      <label for="inputEmail3" class="col-sm-2 control-label">Deliver</label>
                      <div class="col-sm-1"></div>
                        <div data-min-view="2" data-date-format="yyyy-mm-dd" class="col-sm-9 input-group date datetimepicker">
                          <input type="text" value="" id="deliverdate" class="form-control input-xs"><span class="input-group-addon btn btn-primary"><i class="icon-th mdi mdi-calendar"></i></span>
                      </div>
                  </div>

                  <div class="form-group xs-mt-10">
                      <label for="inputEmail3" class="col-sm-2 control-label">Balance</label>
                      <div class="col-sm-1"></div>
                      <div class="input-group col-sm-9">
                      <input type="text" class="form-control input-xs" id="balance" value="">
                    </div>
                  </div>

                   <div class="form-group xs-mt-10">
                      <label for="inputEmail3" class="col-sm-2 control-label">Discount</label>
                      <div class="col-sm-1"></div>
                      <div class="input-group col-sm-9">
                      <input type="text" class="form-control input-xs" id="discount" value="" disabled>
                      <span class="input-group-btn">
                      <a class="btn btn-default btn-xs" type="button" style="height: 30px;padding: 5px;">%</a></span>
                    </div>
                  </div>

                  </div>

                    <div id="selectByName" class="tab-pane cont">
                      


                      <div class="form-group xs-pt-10" style="padding: 0px;">
                      <label for="inputEmail3" class="col-sm-2 control-label">Customer Name</label>
                      <div class="col-sm-1"></div>
                       <div class="input-group col-sm-5">
                        <select  class="select2 form-control input-xs" id="custName" style="height: 20px;">
                        <optgroup label="Customer ID">
                        <option value="0">---select---</option>
                            @foreach($customers as $customer)
                              <option value="{{ $customer->id }}">{{ $customer->name }}</option>
                            @endforeach
                        </optgroup>
                     </select>

                    </div>
                    </div>

                   {{--  <div class="form-group xs-pt-10" style="padding: 0px;">
                      <label for="inputEmail3" class="col-sm-2 control-label">Customer Name</label>
                      <div class="col-sm-1"></div>
                       <div class="input-group col-sm-5">
                        <select  class="select2 form-control input-xs" id="custName" style="height: 20px;">
                        <optgroup label="Customer ID">
                        <option value="0">---select---</option>
                            @foreach($customers as $customer)
                              <option value="{{ $customer->id }}">{{ $customer->name }}</option>
                            @endforeach
                        </optgroup>
                     </select>

                    </div>
                    </div> --}}


                    <div class="form-group xs-mt-10">
                      <label for="inputEmail3" class="col-sm-2 control-label">Customer ID</label>
                      <div class="col-sm-1"></div>
                      <div class="input-group col-sm-9">
                      <input type="text" class="form-control input-xs" id="custID" value="" disabled>
                    </div>
                  </div>

                    <div class="form-group xs-mt-10">
                      <label for="inputEmail3" class="col-sm-2 control-label">Order ID</label>
                      <div class="col-sm-1"></div>
                      <div class="input-group col-sm-9">
                      <input type="text" class="form-control input-xs" id="orderID" value="" disabled>
                    </div>
                  </div>
                    <div class="form-group xs-mt-10" style="padding: 0px;">
                      <label for="inputEmail3" class="col-sm-2 control-label">Deliver</label>
                      <div class="col-sm-1"></div>
                        <div data-min-view="2" data-date-format="yyyy-mm-dd" class="col-sm-9 input-group date datetimepicker">
                          <input type="text" value="" id="ddate" class="form-control input-xs"><span class="input-group-addon btn btn-primary"><i class="icon-th mdi mdi-calendar"></i></span>
                      </div>
                  </div>

                  <div class="form-group xs-mt-10">
                      <label for="inputEmail3" class="col-sm-2 control-label">Balance</label>
                      <div class="col-sm-1"></div>
                      <div class="input-group col-sm-9">
                      <input type="text" class="form-control input-xs" id="custBal" value="">
                    </div>
                  </div>

                   <div class="form-group xs-mt-10">
                      <label for="inputEmail3" class="col-sm-2 control-label">Discount</label>
                      <div class="col-sm-1"></div>
                      <div class="input-group col-sm-9">
                      <input type="text" class="form-control input-xs" id="disCount" value="" disabled>
                      <span class="input-group-btn">
                      <a class="btn btn-default btn-xs" type="button" style="height: 30px;padding: 5px;">%</a></span>
                    </div>
                  </div>

                    </div>
                  </div>
                </div>
              </div>
            </div>

           {{--  <div class="col-md-5">
              <div class="panel panel-default panel-border-color panel-border-color-primary">
                <div class="panel-heading panel-heading-divider">Basic<!-- <span class="panel-subtitle">This is the default bootstrap form layout</span> -->

                </div>
                <div class="panel-body">
                <div id="loader" align="center">
                  
                </div>
                
                    <div class="form-group xs-pt-10" style="padding: 0px;">
                      <label for="inputEmail3" class="col-sm-2 control-label">Customer ID</label>
                      <div class="col-sm-1"></div>
                       <div class="input-group col-sm-5">
                        <select  class="select2 form-control input-xs" id="customerid" style="height: 20px;">
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
                      <div class="col-sm-1"></div>
                      <div class="input-group col-sm-9">
                      <input type="text" class="form-control input-xs" id="customername" value="" disabled>
                    </div>
                  </div>

                    <div class="form-group xs-mt-10">
                      <label for="inputEmail3" class="col-sm-2 control-label">Order ID</label>
                      <div class="col-sm-1"></div>
                      <div class="input-group col-sm-9">
                      <input type="text" class="form-control input-xs" id="orderid" value="" disabled>
                    </div>
                  </div>
                    <div class="form-group xs-mt-10" style="padding: 0px;">
                      <label for="inputEmail3" class="col-sm-2 control-label">Deliver</label>
                      <div class="col-sm-1"></div>
                        <div data-min-view="2" data-date-format="yyyy-mm-dd" class="col-sm-9 input-group date datetimepicker">
                          <input type="text" value="" id="deliverdate" class="form-control input-xs"><span class="input-group-addon btn btn-primary"><i class="icon-th mdi mdi-calendar"></i></span>
                      </div>
                  </div>

                  <div class="form-group xs-mt-10">
                      <label for="inputEmail3" class="col-sm-2 control-label">Balance</label>
                      <div class="col-sm-1"></div>
                      <div class="input-group col-sm-9">
                      <input type="text" class="form-control input-xs" id="balance" value="">
                    </div>
                  </div>

                   <div class="form-group xs-mt-10">
                      <label for="inputEmail3" class="col-sm-2 control-label">Discount</label>
                      <div class="col-sm-1"></div>
                      <div class="input-group col-sm-9">
                      <input type="text" class="form-control input-xs" id="discount" value="" disabled>
                      <span class="input-group-btn">
                      <a class="btn btn-default btn-xs" type="button" style="height: 30px;padding: 5px;">%</a></span>
                    </div>
                  </div>
                
                </div>
                </div>
                </div> --}}
          
            <div class="col-md-7" >
              <div class="panel panel-default panel-border-color panel-border-color-primary" style="height: 450px; padding: 40px;">
                <div class="panel-heading panel-heading-divider">Order Item<!-- <span class="panel-subtitle">This is the default bootstrap form layout</span> --></div>
                <div class="panel-body">
                  <div id="loader2" align="center">
                  
                </div>
                
                  <div class="form-inline" style="padding: 10px;">
                    <div class="form-group col-md-6">
                      <label for="inputEmail3" class="col-md-2 col-md-pull-1 control-label">Cloth</label>
                       <div class="input-group col-md-8 col-md-push-2">
                        <select class="form-control input-xs" id="clothings">

                     </select>
                    </div>
                    </div>

                  <div class="col-md-6">
                      <label for="inputEmail3" class="col-md-4 control-label">Brand</label>
                       <div class="input-group col-md-8">
                        <select class="form-control input-xs" id="brandlist">
                            <option value="">--SELECT--</option>
                            @foreach($brands as $brand)
                              <option value="{{ $brand->name }}">{{ $brand->name }}</option>
                            @endforeach
                     </select>
                     <span class="input-group-addon btn btn-danger" id="brand1">
                      <i class="glyphicon glyphicon-plus"></i>
                    </span>
                    <input type="hidden" value="brand" id="brand2">

                    </div>
                    </div>
                    </div>
  <p style="height: 10px;"></p>



                <div class="form-inline" style="padding: 10px;">
                    <div class="col-md-6">
                      <label for="inputEmail3" class="col-md-2 col-md-pull-1 control-label">Quantity</label>
                       <div class="input-group col-md-8 col-md-push-2">
                     
                     <input type="number"  value="" class="form-control input-xs" id="quantity">
                     
                    </div>
                    </div>

                  <div class="col-md-6">
                      <label for="inputEmail3" class="col-md-4 control-label">Color</label>
                       <div class="input-group col-md-8">
                        <select class="form-control input-xs" id="colorlist">
                          <option value="">--SELECT--</option>
                            @foreach($colors as $color)
                              <option value="{{ $color->name }}">{{ $color->name }}</option>
                            @endforeach
                     </select>
                      <span class="input-group-addon btn btn-danger" id="color1"><i class="glyphicon glyphicon-plus"></i>
                    </span>
                    <input type="hidden" value="color" id="color2">
                    </div>
                    </div>

                    </div>


  <p style="height: 10px;"></p>



                <div class="form-inline" style="padding: 10px;">
                    <div class="col-md-6">
                      <label for="inputEmail3" class="col-md-2 col-md-pull-1 control-label">  Service</label>
                       <div class="input-group col-md-8 col-md-push-2">
                        <select class="form-control input-xs" id="services">
                          
                     </select>
                    </div>
                    </div>

                  <div class="col-md-6">
                      <label for="inputEmail3" class="col-md-4 control-label">Fabric</label>
                       <div class="input-group col-md-8">
                     <select class="form-control input-xs" id="fabriclist">
                            <option value="">--SELECT--</option>
                            @foreach($fabrics as $fabric)
                              <option value="{{ $fabric->name }}">{{ $fabric->name }}</option>
                            @endforeach
                     </select>
                     <!-- <span class="input-group-btn">
                      <a class="btn btn-default btn-xs" type="button" style="height: 30px; padding: 5px;">Go!</a>
                    </span> -->
                  
                    <span class="input-group-addon btn btn-danger" id="fabric1"><i class="glyphicon glyphicon-plus"></i>
                    </span>
                    </div>
                    </div>
                    </div>

                    <p style="height: 10px;"></p>

                <div class="form-inline" style="padding: 10px;">
                    <div class="col-md-6">
                      <label for="inputEmail3" class="col-md-2 col-md-pull-1 control-label">Starch</label>
                       <div class="input-group col-md-8 col-md-push-2">
                        <select class="form-control input-xs" name="starch" id="starch"> 
                            <option value="0">--SELECT--</option>
                            <option value="non">NON</option>
                            <option value="low">LOW</option>
                            <option value="medium">MEDIUM</option>
                            <option value="high">HIGH</option>
                     </select>
                    <!--  <span class="input-group-btn">
                      <a class="btn btn-default btn-xs" type="button" style="height: 30px; padding: 5px;">Go!</a>
                    </span> -->
                    </div>
                    </div>

                  <div class="col-md-6">
                      <label for="inputEmail3" class="col-md-4 control-label">Unit Cost</label>
                       <div class="col-md-8 input-group">
                        <input type="text"  class="form-control input-xs" id="unitcost" disabled>
                   <span class="input-group-addon btn btn-danger" id="unitcostbtn"><i class="glyphicon glyphicon-edit"></i>
                    </span>
                    </div>
                    </div>
                    </div>
                    <p style="height: 40px;"></p>
                    <div class="row xs-pt-15">
                    <div class="col-xs-push-6">


                        <p class="text-right">
                          <button type="submit" class="btn btn-space btn-primary" id="tablesubmit" value="">Submit</button>
                          <button class="btn btn-space btn-default">Cancel</button>
                        </p>
                      </div>
                        </div>
                </div>
              </div>
            </div>
          </div>

           <div class="row">
            <div class="col-sm-12">
              <div class="panel panel-default panel-border-color panel-border-color-primary">
                <div class="panel-heading panel-heading-divider">Summary<!-- <span class="panel-subtitle">This is the horizontal bootstrap layout</span> --></div>
                <div class="panel-body">
                  <!-- <div class="alert alert-success" role="alert">
                    <strong>N 0.00</strong>
                      <span class="col-md-10"><strong>TOTAL</strong></span>
                </div> -->      
                    <!-- <p style="height: 100px"></p> -->
                    

                  

                   {{--  <div class="alert alert-success" role="alert">
                    
                      <span class="col-md-8"><strong>TOTAL</strong></span>
                      <strong class="col-md-8 col-md-push-8"><span id="result"></span></strong>
                      <!-- <strong>TOTAL</strong>
                      <div class="col-md-12 col-xs-push-10">
                      <strong><span id="result"></span></strong> -->
                  </div> --}}
                  
                </div>
                
<!-- 
                    <div class="panel-heading">Current Items
                  <div class="tools"><span class="icon mdi mdi-download"></span><span class="icon mdi mdi-more-vert"></span></div>
                </div> -->
                <div class="panel-body">
                  <table id="table3" class="table table-striped table-hover table-fw-widget">
                    <thead>
                      <tr>
                        <th>Order_ID</th>
                        <th>Customer_ID</th>
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
                      </tbody>
                  </table>
                  

                  <div class="panel-body xs-mt-15 text-right">
                  <p class="xs-mt-10 xs-mb-10">
                  <button class="btn btn-space btn-danger" id="deleterow">Delete</button>
                  </p>
                  </div>

                  <div class="xs-mt-10">
                    <div class="list-group">
                    <a href="#" class="list-group-item active"><span class="badge badge-primary" id="result"></span> <span class="text-success mdi mdi-puzzle-piece icon"></span> TOTAL </a>
                    </div>
                  </div>

                  <div class="form-inline" style="padding: 10px;">
                    <div class="col-md-8">
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label"><strong>Grand Total</strong> </label>
                      <div class="col-sm-2"></div>
                      <div class="input-group col-sm-9">
                      {{-- <input type="text" class="form-control input-xs" id="TOTAL" value="" disabled>
                      <span class="input-group-btn">
                            <button type="button" class="btn btn-primary" id="compute">Go!</button></span> --}}


                      <input type="text" value="" id="TOTAL" class="form-control input-xs"><span class="input-group-addon btn btn-primary" {{-- id="compute" --}}>Compute<i class="icon-th mdi mdi-calendar"></i></span>
                    </div>

                  </div>
                
                  <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label"><strong>Amount</strong> </label>
                      <div class="col-sm-3"></div>
                      <div class="col-sm-9">
                      <input type="text" class="form-control input-xs" placeholder="Enter amount paid" id="amount_paid" value="">
                    </div>
                  </div>
                  
                  </div>
                  </div>

                  <p style="height: 30px;"></p>

                   <input type="hidden" value="" id="testTotal">
                   <input type="hidden" value="{{ Auth::user()->center }}" id="testTotal">

                   <div class="panel-body xs-mt-15 text-left">
                    <button class="btn btn-space btn-primary btn-big" id="pay" disabled><i class="icon mdi mdi-home"></i> Pay </button>
                    <button class="btn btn-space btn-success btn-big" id="print" disabled><i class="icon mdi mdi-face"></i> Print </button>
                    <button class="btn btn-space btn-warning btn-big" id="ordering" disabled><i class="icon mdi mdi-inbox"></i> Order </button>
                  </div>
                </div>

                </div>
                   
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
    <script src="{{ asset('assets/js/app-tables-datatables.js') }}" type="text/javascript">

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

     $('#unitcostbtn').on('click', function(event) {
       event.preventDefault();
       /* Act on the event */
       var check = $('#unitcost').prop('disabled');
       //alert(check);
       if(check){
         //$('#unitcost').attr('disabled');
          $('#unitcost').removeAttr('disabled');
          //alert(1);
        }
       // $('#unitcost').attr('disabled','disabled');
        else{
        //   //alert(1);
           $('#unitcost').attr('disabled','disabled');
         }

     });


      $('#brand1').click(function(event) {

        //console.log($('#brand2').val());
        $('#title').html("ADD NEW BRAND");
        $('#addlabel').html("NAME OF BRAND");
        $('#saveplus').val('brand');
        $('#mod-form').modal('show');

      });

      $('#color1').click(function(event) {

        //console.log($('#brand2').val());
        $('#title').html("ADD NEW COLOR");
        $('#addlabel').html("NAME OF COLOR");
        $('#saveplus').val('color');
        $('#mod-form').modal('show');

      });


      $('#fabric1').click(function(event) {

        //console.log($('#brand2').val());
        $('#title').html("ADD NEW FABRIC");
        $('#addlabel').html("NAME OF FABRIC");
        $('#saveplus').val('fabric');
        $('#mod-form').modal('show');

      });


      $('#saveplus').on('click', function(event) {
        event.preventDefault();
        /* Act on the event */

        var table = $('#saveplus').val();
        var staff = $('#staff').val();
        var name =  $('#modalname').val();
        var list = "#" +table + "list";

        console.log(list);


        $.ajax({
          url: '/admin/table/'+table,
          type: 'POST',
          dataType: 'json',
          data: {name: name, staff: staff},
          success: function(data){

            $(list).empty();
          $.each(data,function(a, v){
            $(list).append("<option value="+v.name+">"+v.name+"</option>");
          });

          }
        });
        

      });







     var cloth = 0;
      $.get('/admin/cloth', function (data) {
            //success data
           console.log(data);
      //var vc = 0;
      var mc = "--SELECT--";
      $("#clothings").append("<option value=''>"+mc+"</option>");
       $.each(data,function(a, v){
          $("#clothings").append("<option value="+v.cloth+">"+v.cloth+"</option>");
          });

        })

      $.get('/admin/cloth', function (data) {
            //success data
           console.log(data);
     // var vc = 0;     
      var mc = "--SELECT--";
      $("#services").append("<option value=''>"+mc+"</option>");
       $.each(data,function(a, v){
          $("#services").append("<option value="+v.service+">"+v.service+"</option>");
          });

        })





    $("#customerid").change(function(e){
      
      function isEmpty(value){
        return (value == null || value.length === 0);
      }

       $('#loader').append('<img src="{{ asset('assets/img/default/loading.gif') }}">');
      
      var customer_id = $('#customerid').val(); 
      var url = "/admin/customers"; 
  

   $.get(url + '/' + customer_id, function (data) {
          $('#customername').val(data.name);  
          $('#discount').val(data.discount);  
        })

    $.get('/admin/api/getcustomer/transaction/'+ customer_id, function (data) {
        var balance;

        $.each(data,function(a, v){
          balance = v.balance;
          });
        console.log(balance);
        
          if(isEmpty(data)){
            $('#balance').val(0);
          }else{
            $('#balance').val(balance);    
        }
            
        })


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
        $('#orderid').val(id);

        })

        $('#loader').empty(); 
        $('#tablesubmit').val('customerid');

    });


    $("#custName").change(function(event){
      
      function isEmpty(value){
        return (value == null || value.length === 0);
      }

      //alert($("#custName").val());
       $('#loader').append('<img src="{{ asset('assets/img/default/loading.gif') }}">');
      
      var customer_id = $('#custName').val(); 
      var url = "/admin/customers"; 
  

   $.get(url + '/' + customer_id, function (data) {
          $('#custID').val(data.customer_id);  
          $('#disCount').val(data.discount);  
        })

    $.get('/admin/api/getcustomer/transaction/'+ customer_id, function (data) {
        var balance;

        $.each(data,function(a, v){
          balance = v.balance;
          });
        console.log(balance);
        
          if(isEmpty(data)){
            $('#custBal').val(0);
          }else{
            $('#custBal').val(balance);    
        }
            
        })


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

        $('#loader').empty(); 
        $('#tablesubmit').val('customername');

    });



    $("#services").on('change',function(e){
      

       $('#loader2').append('<img src="{{ asset('assets/img/default/loading.gif') }}">');
      
      var cloth = $('#clothings').val();
      var service =  $('#services').val();
      var url = "/admin/api/getdata"; 
  

   $.get(url + '/' + cloth + '/' +service, function (data) {
        //success data
        function isEmpty(value){
        return (value == null || value.length === 0);
      }
        var price;

        $.each(data,function(a, v){
          price = v.price;
          });

        if(isEmpty(price)){
          $('#pricealert').modal('show');
        }
        else{
          $('#unitcost').val(price);  
        }

        $('#loader2').empty();
        console.log(price);
        }) 

    });



    var table = $('#table3').DataTable({
      scrollY: true,
      scrollX: true,
      //scrollCollapse: true,
      paging: false,
     //bFilter: false
      bInfo: false,
      footerCallback: function ( row, data, start, end, display ) {
            var api = this.api(), data;
 
            // Remove the formatting to get integer data for summation
            var intVal = function ( i ) {
                return typeof i === 'string' ?
                    i.replace(/[\$,]/g, '')*1 :
                    typeof i === 'number' ?
                        i : 0;
            };
 
            // Total over all pages
            total = api
                .column( 12 )
                .data()
                .reduce( function (a, b) {
                    return intVal(a) + intVal(b);
                }, 0 );
                //alert(total);
 
            // Total over this page
            pageTotal = api
                .column( 12, { page: 'current'} )
                .data()
                .reduce( function (a, b) {
                    return intVal(a) + intVal(b);
                }, 0 );
              //  alert(pageTotal);
 
            // Update footer
            $( api.column( 12 ).footer() ).html(
                '$'+pageTotal +' ( $'+ total +' total)'
            );

            // var discount = ($('#discount').val() / 100) * total;
            // alert(discount);
            // var newTotal = (total + $('#balance').val()) - discount;

            $('#result').empty();
            $('#result').html(total);
            $('#testTotal').val(total);




        }
    });

 
    $('#tablesubmit').on( 'click', function () {
      // var check = ($('#result').html());

      // if(check > 0){

      // $('#pay').removeAttr('disabled');
      // $('#ordering').removeAttr('disabled');
      // $('#print').removeAttr('disabled');
      // $('#deleterow').removeAttr('disabled');

      // }

      var buttonvalue = $('#tablesubmit').val();

      function isEmpty(value){
        return (value == null || value.length === 0);
      }

      if(buttonvalue == "customerid"){
      if ( isEmpty($('#discount').val()) || isEmpty($('#clothings').val()) || isEmpty($('#services').val()) || isEmpty($('#colorlist').val()) || isEmpty($('#fabriclist').val()) || isEmpty($('#brandlist').val()) || isEmpty($('#starch').val()) || isEmpty($('#branch').val()) || isEmpty($('#quantity').val()) || isEmpty($('#unitcost').val()) || isEmpty($('#deliverdate').val()) || isEmpty($('#orderid').val())  ) {

        //alert(1);
        $('#mod-danger').modal('show');
      }else{
        table.row.add( [
            $('#orderid').val(),
            "CLN"+$('#customerid').val(),
            $('#clothings').val(),
            $('#services').val(),
            $('#colorlist').val(),
            $('#fabriclist').val(),
            $('#brandlist').val(),
            $('#starch').val(),
            $('#branch').val(),
            $('#discount').val(),
            $('#quantity').val(),
            $('#unitcost').val(),
            $('#quantity').val() * $('#unitcost').val() 
        ] ).draw( false );

      var total = $('#testTotal').val();
      var discount = ($('#discount').val() / 100) * total;
      var balance = $('#balance').val();
      //alert(discount);
      var newTotal = total - discount - (parseInt(balance));
      $('#TOTAL').val(newTotal);

      $('#pay').removeAttr('disabled');
      }
    }else{

      if ( isEmpty($('#disCount').val()) || isEmpty($('#clothings').val()) || isEmpty($('#services').val()) || isEmpty($('#colorlist').val()) || isEmpty($('#fabriclist').val()) || isEmpty($('#brandlist').val()) || isEmpty($('#starch').val()) || isEmpty($('#branch').val()) || isEmpty($('#quantity').val()) || isEmpty($('#unitcost').val()) || isEmpty($('#ddate').val()) || isEmpty($('#orderID').val())  ) {

        //alert(1);
        $('#mod-danger').modal('show');
      }else{
        table.row.add( [
            $('#orderID').val(),
            $('#custID').val(),
            $('#clothings').val(),
            $('#services').val(),
            $('#colorlist').val(),
            $('#fabriclist').val(),
            $('#brandlist').val(),
            $('#starch').val(),
            $('#branch').val(),
            $('#disCount').val(),
            $('#quantity').val(),
            $('#unitcost').val(),
            $('#quantity').val() * $('#unitcost').val() 
        ] ).draw( false );

      var total = $('#testTotal').val();
      var discount = ($('#disCount').val() / 100) * total;
      var balance = $('#custBal').val();
      //alert(discount);
      var newTotal = total - discount - (parseInt(balance));
      $('#TOTAL').val(newTotal);

      $('#pay').removeAttr('disabled');
      }


    }

    } );


    // $('#compute').on('click', function(event) {
    //   event.preventDefault();
    //   /* Act on the event */

    //   var total = $('#testTotal').val();
    //   var discount = ($('#discount').val() / 100) * total;
    //   //alert(discount);
    //   var newTotal = total - discount + parseInt($('#balance').val());
    //   $('#TOTAL').val(newTotal);

    //   $('#pay').removeAttr('disabled');

    
    // });
    
     $('#print').on('click', function(event) {
          var url = "http://localhost:8000/admin/print/" + $('#customerid').val();
          $(location).attr('href', url);
    });
 
    $('#table3 tbody').on( 'click', 'tr', function () {
        if ( $(this).hasClass('active') ) {
            $(this).removeClass('active');
        }
        else {
            table.$('tr.active').removeClass('active');
            $(this).addClass('active');
        }
         $('#deleterow').removeAttr('disabled');
    } );
 
    $('#deleterow').click( function () {
        table.row('.active').remove().draw( false );
       // $('#deleterow').addAttr('disabled');
      
    } );

    // $('#print').on('click', function(event) {
    //   event.preventDefault();
    //   /* Act on the event */

    // });

    $('#pay').on('click', function(event) {
      event.preventDefault();
      /* Act on the event */
  
      var size = table.data().length;
      var files = [size];

      for(var i = 0; i < size; i++ ){
        files[i] = table.row(i).data();
      }
    
    
    $.ajax({
      url: '/admin/api/json',
      type: 'POST',
      contentType: "application/json; charset=utf-8",
      data:  JSON.stringify(files),
      dataType: "JSON",
      success: function(data){

        console.log(data);

      //  alert('success');
        },
    });
    
    var btnval = $('#tablesubmit').val();
    var customer_id;
    var deliver_date;
    if(btnval == "customerid"){
      customer_id = "CLN"+$('#customerid').val();
      deliver_date = $('#deliverdate').val();
    }else{
      customer_id = $('#custID').val();
      deliver_date = $('#ddate').val();
    }
    

    var bal = $('#amount_paid').val() - $('#TOTAL').val();
    $.ajax({
      url: '/admin/api/transaction',
      type: 'POST',
      data:  {
        order_id:    $('#orderID').val(),
        customer_id: customer_id,
        amount_paid: $('#amount_paid').val(),
        balance:     bal,
        total:       $('#TOTAL').val(),
        deliver_date:deliver_date,
        center:      $('#branch').val(),
      },
      dataType: 'json',
      success: function(data){

        console.log(data);

        $('#customerpaid').modal('show');

        },
    });

    
    $('#print').removeAttr('disabled');
      

   });
    


  
} );
   //App.dataTables();
    </script>
@stop





   <!--Modal Alerts-->
       <div id="mod-form" tabindex="-1" role="dialog" class="modal fade colored-header colored-header-primary">
      <div class="modal-dialog custom-width">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" data-dismiss="modal" aria-hidden="true" class="close md-close"><span class="mdi mdi-close"></span></button>
            <h3 class="modal-title" id="title"></h3>
          </div>
          <form id="formtask">
          <div class="modal-body">

            <input type="hidden" id="staff" value="{{ Auth::user()->name }}" class="form-control">

            <input type="hidden" id="branch" value="{{ Auth::user()->center }}" class="form-control">
            
            <div class="form-group">
              <label id="addlabel"></label>
              <input type="text" id="modalname" placeholder="Enter Name" class="form-control">
            </div>
          </div>

          <div class="modal-footer">
            <button type="button" data-dismiss="modal" class="btn btn-default md-close">Cancel</button>
            <button type="button" id="saveplus" value="" data-dismiss="modal" class="btn btn-primary md-close">Save</button>
          </div>
          </form>
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
              <p>
                Proceed to print Customer voucher!!!
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

    <div id="pricealert" tabindex="-1" role="dialog" class="modal fade">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" data-dismiss="modal" aria-hidden="true" class="close"><span class="mdi mdi-close"></span></button>
          </div>
          <div class="modal-body">
            <div class="text-center">
              <div class="text-danger"><span class="modal-main-icon mdi mdi-close-circle-o"></span></div>
              <h3>Danger!</h3>
              <p>Price not Found!!!.</p>
              <p>Please contact Admin!!!.</p>
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