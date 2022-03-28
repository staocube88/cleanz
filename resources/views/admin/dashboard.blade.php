@extends('admin.layouts.cleanritemaster')


@section('css')
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/lib/jquery.vectormap/jquery-jvectormap-1.2.2.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/lib/jqvmap/jqvmap.min.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/lib/datetimepicker/css/bootstrap-datetimepicker.min.css') }}"/>
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
                  <li class="active"><a href="{{ url('admin/dashboard') }}"><i class="icon mdi mdi-home"></i><span>Dashboard</span></a>
                  </li>
                  @endif

                  <li class="divider">Staff</li>
                  <li><a href="{{ url('admin/clothes') }}"><i class="icon mdi mdi-face"></i><span>Clothes</span></a>
                  </li>
                  <li><a href="{{ url('admin/services') }}"><i class="icon mdi mdi-face"></i><span>Services</span></a>
                      </li>
                      <li><a href="{{ url('admin/customers') }}"><i class="icon mdi mdi-face"></i><span>Customers</span></a>
                      </li>
                      <li class=""><a href="{{ url('admin/POS') }}"><i class="icon mdi mdi-face"></i><span>POS</span></a>
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
        <div class="main-content container-fluid">
          <div class="row">
            <div class="col-xs-12 col-md-6 col-lg-3">
                        <div class="widget widget-tile">
                          <div id="spark1" class="chart sparkline"></div>
                          <div class="data-info">
                            <div class="desc">New Users</div>
                            <div class="value"><span class="indicator indicator-equal mdi mdi-chevron-right"></span><span data-toggle="counter" data-end="113" class="number">0</span>
                            </div>
                          </div>
                        </div>
            </div> 
            <div class="col-xs-12 col-md-6 col-lg-3">
                        <div class="widget widget-tile">
                          <div id="spark2" class="chart sparkline"></div>
                          <div class="data-info">
                            <div class="desc">Monthly Sales</div>
                            <div class="value"><span class="indicator indicator-positive mdi mdi-chevron-up"></span><span data-toggle="counter" data-end="80" data-suffix="%" class="number">0</span>
                            </div>
                          </div>
                        </div>
            </div>
            <div class="col-xs-12 col-md-6 col-lg-3">
                        <div class="widget widget-tile">
                          <div id="spark3" class="chart sparkline"></div>
                          <div class="data-info">
                            <div class="desc">Impressions</div>
                            <div class="value"><span class="indicator indicator-positive mdi mdi-chevron-up"></span><span data-toggle="counter" data-end="532" class="number">0</span>
                            </div>
                          </div>
                        </div>
            </div>
            <div class="col-xs-12 col-md-6 col-lg-3">
                        <div class="widget widget-tile">
                          <div id="spark4" class="chart sparkline"></div>
                          <div class="data-info">
                            <div class="desc">Downloads</div>
                            <div class="value"><span class="indicator indicator-negative mdi mdi-chevron-down"></span><span data-toggle="counter" data-end="113" class="number">0</span>
                            </div>
                          </div>
                        </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="widget widget-fullwidth be-loading">
                <div class="widget-head">
                  <div class="tools">
                    <div class="dropdown"><span data-toggle="dropdown" class="icon mdi mdi-more-vert visible-xs-inline-block dropdown-toggle"></span>
                      <ul role="menu" class="dropdown-menu">
                        <li><a href="#">Week</a></li>
                        <li><a href="#">Month</a></li>
                        <li><a href="#">Year</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Today</a></li>
                      </ul>
                    </div><span class="icon mdi mdi-chevron-down"></span><span class="icon toggle-loading mdi mdi-refresh-sync"></span><span class="icon mdi mdi-close"></span>
                  </div>
                  <div class="button-toolbar hidden-xs">
                    <div class="btn-group">
                      <button type="button" class="btn btn-default">Week</button>
                      <button type="button" class="btn btn-default active">Month</button>
                      <button type="button" class="btn btn-default">Year</button>
                    </div>
                    <div class="btn-group">
                      <button type="button" class="btn btn-default">Today</button>
                    </div>
                  </div><span class="title">Recent Movement</span>
                </div>
                <div class="widget-chart-container">
                  <div class="widget-chart-info">
                    <ul class="chart-legend-horizontal">
                      <li><span data-color="main-chart-color1"></span> Purchases</li>
                      <li><span data-color="main-chart-color2"></span> Plans</li>
                      <li><span data-color="main-chart-color3"></span> Services</li>
                    </ul>
                  </div>
                  <div class="widget-counter-group widget-counter-group-right">
                    <div class="counter counter-big">
                      <div class="value">25%</div>
                      <div class="desc">Purchase</div>
                    </div>
                    <div class="counter counter-big">
                      <div class="value">5%</div>
                      <div class="desc">Plans</div>
                    </div>
                    <div class="counter counter-big">
                      <div class="value">5%</div>
                      <div class="desc">Services</div>
                    </div>
                  </div>
                  <div id="main-chart" style="height: 260px;"></div>
                </div>
                <div class="be-spinner">
                  <svg width="40px" height="40px" viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg">
                    <circle fill="none" stroke-width="4" stroke-linecap="round" cx="33" cy="33" r="30" class="circle"></circle>
                  </svg>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="panel panel-default panel-table">
                <div class="panel-heading"> 
                  <div class="tools"><span class="icon mdi mdi-download"></span><span class="icon mdi mdi-more-vert"></span></div>
                  <div class="title">Purchases</div>
                </div>
                <div class="panel-body table-responsive">
                  <table class="table table-striped table-borderless">
                    <thead>
                      <tr>
                        <th style="width:40%;">Product</th>
                        <th class="number">Price</th>
                        <th style="width:20%;">Date</th>
                        <th style="width:20%;">State</th>
                        <th style="width:5%;" class="actions"></th>
                      </tr>
                    </thead>
                    <tbody class="no-border-x">
                      <tr>
                        <td>Sony Xperia M4</td>
                        <td class="number">$149</td>
                        <td>Aug 23, 2016</td>
                        <td class="text-success">Completed</td>
                        <td class="actions"><a href="#" class="icon"><i class="mdi mdi-plus-circle-o"></i></a></td>
                      </tr>
                      <tr>
                        <td>Apple iPhone 6</td>
                        <td class="number">$535</td>
                        <td>Aug 20, 2016</td>
                        <td class="text-success">Completed</td>
                        <td class="actions"><a href="#" class="icon"><i class="mdi mdi-plus-circle-o"></i></a></td>
                      </tr>
                      <tr>
                        <td>Samsung Galaxy S7</td>
                        <td class="number">$583</td>
                        <td>Aug 18, 2016</td>
                        <td class="text-warning">Pending</td>
                        <td class="actions"><a href="#" class="icon"><i class="mdi mdi-plus-circle-o"></i></a></td>
                      </tr>
                      <tr>
                        <td>HTC One M9</td>
                        <td class="number">$350</td>
                        <td>Aug 15, 2016</td>
                        <td class="text-warning">Pending</td>
                        <td class="actions"><a href="#" class="icon"><i class="mdi mdi-plus-circle-o"></i></a></td>
                      </tr>
                      <tr>
                        <td>Sony Xperia Z5</td>
                        <td class="number">$495</td>
                        <td>Aug 13, 2016</td>
                        <td class="text-danger">Cancelled</td>
                        <td class="actions"><a href="#" class="icon"><i class="mdi mdi-plus-circle-o"></i></a></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="panel panel-default panel-table">
                <div class="panel-heading">
                  <div class="tools"><span class="icon mdi mdi-download"></span><span class="icon mdi mdi-more-vert"></span></div>
                  <div class="title">Latest Commits</div>
                </div>
                <div class="panel-body table-responsive">
                  <table class="table table-striped table-hover">
                    <thead>
                      <tr>
                        <th style="width:37%;">User</th>
                        <th style="width:36%;">Commit</th>
                        <th>Date</th>
                        <th class="actions"></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="user-avatar"> <img src="{{URL::to('assets/img/avatar6.png')}}" alt="Avatar">Penelope Thornton</td>
                        <td>Topbar dropdown style</td>
                        <td>Aug 16, 2016</td>
                        <td class="actions"><a href="#" class="icon"><i class="mdi mdi-github-alt"></i></a></td>
                      </tr>
                      <tr>
                        <td class="user-avatar"> <img src="{{URL::to('assets/img/avatar4.png')}}" alt="Avatar">Benji Harper</td>
                        <td>Left sidebar adjusments</td>
                        <td>Jul 15, 2016</td>
                        <td class="actions"><a href="#" class="icon"><i class="mdi mdi-github-alt"></i></a></td>
                      </tr>
                      <tr>
                        <td class="user-avatar"> <img src="{{URL::to('assets/img/avatar5.png')}}" alt="Avatar">Justine Myranda</td>
                        <td>Main structure markup</td>
                        <td>Jul 28, 2016</td>
                        <td class="actions"><a href="#" class="icon"><i class="mdi mdi-github-alt"></i></a></td>
                      </tr>
                      <tr>
                        <td class="user-avatar"> <img src="{{URL::to('assets/img/avatar3.png')}}" alt="Avatar">Sherwood Clifford</td>
                        <td>Initial commit</td>
                        <td>Jun 30, 2016</td>
                        <td class="actions"><a href="#" class="icon"><i class="mdi mdi-github-alt"></i></a></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-12 col-md-4">
              <div class="panel panel-default">
                <div class="panel-heading panel-heading-divider xs-pb-15">Current Progress</div>
                <div class="panel-body xs-pt-25">
                  <div class="row user-progress user-progress-small">
                    <div class="col-md-5"><span class="title">Bootstrap Admin</span></div>
                    <div class="col-md-7">
                      <div class="progress">
                        <div style="width: 40%" class="progress-bar progress-bar-success"></div>
                      </div>
                    </div>
                  </div>
                  <div class="row user-progress user-progress-small">
                    <div class="col-md-5"><span class="title">Custom Work</span></div>
                    <div class="col-md-7">
                      <div class="progress">
                        <div style="width: 65%" class="progress-bar progress-bar-success"></div>
                      </div>
                    </div>
                  </div>
                  <div class="row user-progress user-progress-small">
                    <div class="col-md-5"><span class="title">Clients Module</span></div>
                    <div class="col-md-7">
                      <div class="progress">
                        <div style="width: 30%" class="progress-bar progress-bar-success"></div>
                      </div>
                    </div>
                  </div>
                  <div class="row user-progress user-progress-small">
                    <div class="col-md-5"><span class="title">Email Templates</span></div>
                    <div class="col-md-7">
                      <div class="progress">
                        <div style="width: 80%" class="progress-bar progress-bar-success"></div>
                      </div>
                    </div>
                  </div>
                  <div class="row user-progress user-progress-small">
                    <div class="col-md-5"><span class="title">Plans Module</span></div>
                    <div class="col-md-7">
                      <div class="progress">
                        <div style="width: 45%" class="progress-bar progress-bar-success"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xs-12 col-md-4">
              <div class="widget be-loading">
                <div class="widget-head">
                  <div class="tools"><span class="icon mdi mdi-chevron-down"></span><span class="icon mdi mdi-refresh-sync toggle-loading"></span><span class="icon mdi mdi-close"></span></div>
                  <div class="title">Top Sales</div>
                </div>
                <div class="widget-chart-container">
                  <div id="top-sales" style="height: 178px;"></div>
                  <div class="chart-pie-counter">36</div>
                </div>
                <div class="chart-legend">
                  <table>
                    <tr>
                      <td class="chart-legend-color"><span data-color="top-sales-color1"></span></td>
                      <td>Premium Purchases</td>
                      <td class="chart-legend-value">125</td>
                    </tr>
                    <tr>
                      <td class="chart-legend-color"><span data-color="top-sales-color2"></span></td>
                      <td>Standard Plans</td>
                      <td class="chart-legend-value">1569</td>
                    </tr>
                    <tr>
                      <td class="chart-legend-color"><span data-color="top-sales-color3"></span></td>
                      <td>Services</td>
                      <td class="chart-legend-value">824</td>
                    </tr>
                  </table>
                </div>
                <div class="be-spinner">
                  <svg width="40px" height="40px" viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg">
                    <circle fill="none" stroke-width="4" stroke-linecap="round" cx="33" cy="33" r="30" class="circle"></circle>
                  </svg>
                </div>
              </div>
            </div>
            <div class="col-xs-12 col-md-4">
              <div class="widget widget-calendar">
                <div id="calendar-widget"></div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-12 col-md-6">
              <div class="panel panel-default">
                <div class="panel-heading">Latest Activity</div>
                <div class="panel-body">
                  <ul class="user-timeline user-timeline-compact">
                    <li class="latest">
                      <div class="user-timeline-date">Just Now</div>
                      <div class="user-timeline-title">Create New Page</div>
                      <div class="user-timeline-description">Vestibulum lectus nulla, maximus in eros non, tristique.</div>
                    </li>
                    <li>
                      <div class="user-timeline-date">Today - 15:35</div>
                      <div class="user-timeline-title">Back Up Theme</div>
                      <div class="user-timeline-description">Vestibulum lectus nulla, maximus in eros non, tristique.</div>
                    </li>
                    <li>
                      <div class="user-timeline-date">Yesterday - 10:41</div>
                      <div class="user-timeline-title">Changes In The Structure</div>
                      <div class="user-timeline-description">Vestibulum lectus nulla, maximus in eros non, tristique.      </div>
                    </li>
                    <li>
                      <div class="user-timeline-date">Yesterday - 3:02</div>
                      <div class="user-timeline-title">Fix the Sidebar</div>
                      <div class="user-timeline-description">Vestibulum lectus nulla, maximus in eros non, tristique.</div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-xs-12 col-md-6">
              <div class="widget be-loading">
                <div class="widget-head">
                  <div class="tools"><span class="icon mdi mdi-chevron-down"></span><span class="icon mdi mdi-refresh-sync toggle-loading"></span><span class="icon mdi mdi-close"></span></div>
                  <div class="title">Conversions</div>
                </div>
                <div class="widget-chart-container">
                  <div class="widget-chart-info xs-mb-20">
                    <div class="indicator indicator-positive pull-right"><span class="icon mdi mdi-chevron-up"></span><span class="number">15%</span></div>
                    <div class="counter counter-inline">
                      <div class="value">156k</div>
                      <div class="desc">Impressions</div>
                    </div>
                  </div>
                  <div id="map-widget" style="height: 265px;"></div>
                </div>
                <div class="be-spinner">
                  <svg width="40px" height="40px" viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg">
                    <circle fill="none" stroke-width="4" stroke-linecap="round" cx="33" cy="33" r="30" class="circle"></circle>
                  </svg>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@stop

@section('script')
  <script src="{{ URL::to('assets/lib/jquery/jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/main.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/lib/bootstrap/dist/js/bootstrap.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/lib/jquery-flot/jquery.flot.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/lib/jquery-flot/jquery.flot.pie.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/lib/jquery-flot/jquery.flot.resize.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/lib/jquery-flot/plugins/jquery.flot.orderBars.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/lib/jquery-flot/plugins/curvedLines.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/lib/jquery.sparkline/jquery.sparkline.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/lib/countup/countUp.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/lib/jquery-ui/jquery-ui.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/lib/jqvmap/jquery.vmap.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/lib/jqvmap/maps/jquery.vmap.world.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/app-dashboard.js') }}" type="text/javascript"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        //initialize the javascript
        App.init();
        App.dashboard();
      
      });
    </script>
@stop