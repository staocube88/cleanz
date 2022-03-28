<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/img/logo-fav.png">
    <title>Beagle</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/lib/perfect-scrollbar/css/perfect-scrollbar.min.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/lib/material-design-icons/css/material-design-iconic-font.min.css') }}"/><!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" type="text/css"/>
  </head>
  <body>
    <div class="be-wrapper">
    {{--   <nav class="navbar navbar-default navbar-fixed-top be-top-header">
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
            <div class="page-title"><span>Blank Page</span></div>
            <ul class="nav navbar-nav navbar-right be-icons-nav">
              <li class="dropdown"><a href="#" role="button" aria-expanded="false" class="be-toggle-right-sidebar"><span class="icon mdi mdi-settings"></span></a></li>
              <li class="dropdown"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="dropdown-toggle"><span class="icon mdi mdi-notifications"></span><span class="indicator"></span></a>
                <ul class="dropdown-menu be-notifications">
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
                </ul>
              </li>
              <li class="dropdown"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="dropdown-toggle"><span class="icon mdi mdi-apps"></span></a>
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
      </nav> --}}

       <nav class="navbar navbar-default navbar-fixed-top be-top-header">
        <div class="container-fluid">
          <div class="navbar-header"><a href="index.html" class="navbar-brand"></a></div>
          <div class="be-right-navbar">
            <ul class="nav navbar-nav navbar-right be-user-nav">
              <li class="dropdown"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="dropdown-toggle"><img src="{{ asset('assets/img/avatar.png') }}" alt="Avatar"><span class="user-name">Túpac Amaru</span></a>
                <ul role="menu" class="dropdown-menu">
                  <li>
                    <div class="user-info">
                      <div class="user-name">{{ Auth::user()->name }}</div>
                      <div class="user-position online">Available</div>
                    </div>
                  </li>
                  <li><a href="#"><span class="icon mdi mdi-face"></span> Account</a></li>
                  <li><a href="#"><span class="icon mdi mdi-settings"></span> Settings</a></li>
                  <li><a href="{{ url('admin/logout') }}"><span class="icon mdi mdi-power"></span> Logout</a></li>
                </ul>
              </li>
            </ul>
            <div class="page-title"><span>Admin Home</div>
            <ul class="nav navbar-nav navbar-right be-icons-nav">
              <li class="dropdown"><a href="#" role="button" aria-expanded="false" class="be-toggle-right-sidebar"><span class=""{{-- "icon mdi mdi-notifications" --}}>Welcome to {{ Auth::user()->center }} Branch</span></a></li>
             <!--  <li class="dropdown"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="dropdown-toggle"><span class="icon mdi mdi-notifications"></span><span class="indicator"></span></a>
                <ul class="dropdown-menu be-notifications">
                  <li>
                    <div class="title">Notifications<span class="badge">3</span></div>
                    <div class="list">
                      <div class="be-scroller">
                        <div class="content">
                          <ul>
                            <li class="notification notification-unread"><a href="#">
                                <div class="image"><img src="{{ asset('assets/img/avatar2.png') }}" alt="Avatar"></div>
                                <div class="notification-info">
                                  <div class="text"><span class="user-name">Jessica Caruso</span> accepted your invitation to join the team.</div><span class="date">2 min ago</span>
                                </div></a></li>
                            <li class="notification"><a href="#">
                                <div class="image"><img src="{{ asset('assets/img/avatar3.png') }}" alt="Avatar"></div>
                                <div class="notification-info">
                                  <div class="text"><span class="user-name">Joel King</span> is now following you</div><span class="date">2 days ago</span>
                                </div></a></li>
                            <li class="notification"><a href="#">
                                <div class="image"><img src="{{ asset('assets/img/avatar4.png') }}" alt="Avatar"></div>
                                <div class="notification-info">
                                  <div class="text"><span class="user-name">John Doe</span> is watching your main repository</div><span class="date">2 days ago</span>
                                </div></a></li>
                            <li class="notification"><a href="#">
                                <div class="image"><img src="{{ asset('assets/img/avatar5.png') }}" alt="Avatar"></div>
                                <div class="notification-info"><span class="text"><span class="user-name">Emily Carter</span> is now following you</span><span class="date">5 days ago</span></div></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="footer"> <a href="#">View all notifications</a></div>
                  </li>
                </ul>
              </li> -->
              <!-- <li class="dropdown"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="dropdown-toggle"><span class="icon mdi mdi-apps"></span></a>
                <ul class="dropdown-menu be-connections">
                  <li>
                    <div class="list">
                      <div class="content">
                        <div class="row">
                          <div class="col-xs-4"><a href="#" class="connection-item"><img src="{{ asset('assets/img/github.png') }}" alt="Github"><span>GitHub</span></a></div>
                          <div class="col-xs-4"><a href="#" class="connection-item"><img src="{{ asset('assets/img/bitbucket.png') }}" alt="Bitbucket"><span>Bitbucket</span></a></div>
                          <div class="col-xs-4"><a href="#" class="connection-item"><img src="{{ asset('assets/img/slack.png') }}" alt="Slack"><span>Slack</span></a></div>
                        </div>
                        <div class="row">
                          <div class="col-xs-4"><a href="#" class="connection-item"><img src="{{ asset('assets/img/dribbble.png') }}" alt="Dribbble"><span>Dribbble</span></a></div>
                          <div class="col-xs-4"><a href="#" class="connection-item"><img src="{{ asset('assets/img/mail_chimp.png') }}" alt="Mail Chimp"><span>Mail Chimp</span></a></div>
                          <div class="col-xs-4"><a href="#" class="connection-item"><img src="{{ asset('assets/img/dropbox.png') }}" alt="Dropbox"><span>Dropbox</span></a></div>
                        </div>
                      </div>
                    </div>
                    <div class="footer"> <a href="#">More</a></div>
                  </li>
                </ul>
              </li> -->
            </ul>
          </div>
        </div>
      </nav>



        <div class="be-left-sidebar">
        <div class="left-sidebar-wrapper"><a href="#" class="left-sidebar-toggle">Dashboard</a>
          <div class="left-sidebar-spacer">
            <div class="left-sidebar-scroll">
              <div class="left-sidebar-content">
                <ul class="sidebar-elements">
                  <li class="divider">Menu</li>
                  <li class=""><a href="{{ url('admin/dashboard') }}"><i class="icon mdi mdi-home"></i><span>Dashboard</span></a>
                  </li>

                  <li class="divider">Staff</li>
                  <li><a href="{{ url('admin/clothes') }}"><i class="icon mdi mdi-face"></i><span>Clothes</span></a>
                  </li>
                  <li><a href="{{ url('admin/services') }}"><i class="icon mdi mdi-face"></i><span>Services</span></a>
                      </li>
                      <li><a href="{{ url('admin/customers') }}"><i class="icon mdi mdi-face"></i><span>Customers</span></a>
                      </li>
                      <li class="active"><a href="{{ url('admin/POS') }}"><i class="icon mdi mdi-face"></i><span>POS</span></a>
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
  @endif
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
{{--       <div class="be-left-sidebar">
        <div class="left-sidebar-wrapper"><a href="#" class="left-sidebar-toggle">Blank Page</a>
          <div class="left-sidebar-spacer">
            <div class="left-sidebar-scroll">
              <div class="left-sidebar-content">
                <ul class="sidebar-elements">
                  <li class="divider">Menu</li>
                  <li><a href="index.html"><i class="icon mdi mdi-home"></i><span>Dashboard</span></a>
                  </li>
                  <li class="parent"><a href="#"><i class="icon mdi mdi-face"></i><span>UI Elements</span></a>
                    <ul class="sub-menu">
                      <li><a href="ui-alerts.html">Alerts</a>
                      </li>
                      <li><a href="ui-buttons.html">Buttons</a>
                      </li>
                      <li><a href="ui-panels.html">Panels</a>
                      </li>
                      <li><a href="ui-general.html">General</a>
                      </li>
                      <li><a href="ui-modals.html">Modals</a>
                      </li>
                      <li><a href="ui-notifications.html">Notifications</a>
                      </li>
                      <li><a href="ui-icons.html">Icons</a>
                      </li>
                      <li><a href="ui-grid.html">Grid</a>
                      </li>
                      <li><a href="ui-tabs-accordions.html">Tabs &amp; Accordions</a>
                      </li>
                      <li><a href="ui-nestable-lists.html">Nestable Lists</a>
                      </li>
                      <li><a href="ui-typography.html"><span class="label label-primary pull-right">New</span>Typography</a>
                      </li>
                    </ul>
                  </li>
                  <li class="parent"><a href="charts.html"><i class="icon mdi mdi-chart-donut"></i><span>Charts</span></a>
                    <ul class="sub-menu">
                      <li><a href="charts-flot.html">Flot</a>
                      </li>
                      <li><a href="charts-sparkline.html">Sparklines</a>
                      </li>
                      <li><a href="charts-chartjs.html">Chart.js</a>
                      </li>
                      <li><a href="charts-morris.html">Morris.js</a>
                      </li>
                    </ul>
                  </li>
                  <li class="parent"><a href="#"><i class="icon mdi mdi-dot-circle"></i><span>Forms</span></a>
                    <ul class="sub-menu">
                      <li><a href="form-elements.html">Elements</a>
                      </li>
                      <li><a href="form-validation.html">Validation</a>
                      </li>
                      <li><a href="form-wizard.html">Wizard</a>
                      </li>
                      <li><a href="form-masks.html">Input Masks</a>
                      </li>
                      <li><a href="form-wysiwyg.html">WYSIWYG Editor</a>
                      </li>
                      <li><a href="form-upload.html">Multi Upload</a>
                      </li>
                    </ul>
                  </li>
                  <li class="parent"><a href="#"><i class="icon mdi mdi-border-all"></i><span>Tables</span></a>
                    <ul class="sub-menu">
                      <li><a href="tables-general.html">General</a>
                      </li>
                      <li><a href="tables-datatables.html">Data Tables</a>
                      </li>
                    </ul>
                  </li>
                  <li class="parent"><a href="#"><i class="icon mdi mdi-layers"></i><span>Pages</span></a>
                    <ul class="sub-menu">
                      <li class="active"><a href="pages-blank.html">Blank Page</a>
                      </li>
                      <li><a href="pages-blank-header.html">Blank Page Header</a>
                      </li>
                      <li><a href="pages-login.html">Login</a>
                      </li>
                      <li><a href="pages-login2.html">Login v2</a>
                      </li>
                      <li><a href="pages-404.html">404 Page</a>
                      </li>
                      <li><a href="pages-sign-up.html">Sign Up</a>
                      </li>
                      <li><a href="pages-forgot-password.html">Forgot Password</a>
                      </li>
                      <li><a href="pages-profile.html">Profile</a>
                      </li>
                      <li><a href="pages-pricing-tables.html">Pricing Tables</a>
                      </li>
                      <li><a href="pages-pricing-tables2.html">Pricing Tables v2</a>
                      </li>
                      <li><a href="pages-timeline.html"><span class="label label-primary pull-right">New</span>Timeline</a>
                      </li>
                      <li><a href="pages-timeline2.html"><span class="label label-primary pull-right">New</span>Timeline v2</a>
                      </li>
                      <li><a href="pages-invoice.html"><span class="label label-primary pull-right">New</span>Invoice</a>
                      </li>
                      <li><a href="pages-calendar.html">Calendar</a>
                      </li>
                      <li><a href="pages-gallery.html">Gallery</a>
                      </li>
                    </ul>
                  </li>
                  <li class="divider">Features</li>
                  <li class="parent"><a href="#"><i class="icon mdi mdi-inbox"></i><span>Email</span></a>
                    <ul class="sub-menu">
                      <li><a href="email-inbox.html">Inbox</a>
                      </li>
                      <li><a href="email-read.html">Email Detail</a>
                      </li>
                      <li><a href="email-compose.html">Email Compose</a>
                      </li>
                    </ul>
                  </li>
                  <li class="parent"><a href="#"><i class="icon mdi mdi-view-web"></i><span>Layouts</span></a>
                    <ul class="sub-menu">
                      <li><a href="layouts-primary-header.html">Primary Header</a>
                      </li>
                      <li><a href="layouts-success-header.html">Success Header</a>
                      </li>
                      <li><a href="layouts-warning-header.html">Warning Header</a>
                      </li>
                      <li><a href="layouts-danger-header.html">Danger Header</a>
                      </li>
                      <li><a href="layouts-nosidebar-left.html">Without Left Sidebar</a>
                      </li>
                      <li><a href="layouts-nosidebar-right.html">Without Right Sidebar</a>
                      </li>
                      <li><a href="layouts-nosidebars.html">Without Both Sidebars</a>
                      </li>
                      <li><a href="layouts-fixed-sidebar.html">Fixed Left Sidebar</a>
                      </li>
                      <li><a href="pages-blank-aside.html">Page Aside</a>
                      </li>
                    </ul>
                  </li>
                  <li class="parent"><a href="#"><i class="icon mdi mdi-pin"></i><span>Maps</span></a>
                    <ul class="sub-menu">
                      <li><a href="maps-google.html">Google Maps</a>
                      </li>
                      <li><a href="maps-vector.html">Vector Maps</a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="progress-widget">
            <div class="progress-data"><span class="progress-value">60%</span><span class="name">Current Project</span></div>
            <div class="progress">
              <div style="width: 60%;" class="progress-bar progress-bar-primary"></div>
            </div>
          </div>
        </div>
      </div> --}}
      <div class="be-content">
        <div class="main-content container-fluid">
          {{-- <h3 class="text-center">Content goes here!</h3> --}}




                      <div class="col-sm-6">
              <!--Labels & badges-->
              <div class="panel panel-default">
                <div class="panel-heading panel-heading-divider">Customer Voucher{{-- <span class="panel-subtitle">Extended version of bootstrap labels & badges style</sp --}}</div>
                <div class="panel-body">

                
                  <table class="table">
                    <thead>
                   {{--  @foreach($customers as $customer) --}}
                      <tr>
                        <th style="width:40%;">Name:  <span> {{-- {{ $customer->name }} --}}</span></th>
                        {{-- <th class="text-center">Label</th> --}}
                        {{-- <th class="text-center">Badge</th> --}}
                      </tr>
                    </thead>
                   {{--  @endforeach --}}
                    <tbody>
                      <tr>
                      @foreach($datas as $data)
                        <td>Order ID</td>
                       {{--  <td class="text-center"><span class="label label-default">Default</span></td> --}}
                        <td class="text-center"><span class="badge">{{ $data->order_id }}</span></td>
                      </tr>
                      <tr>
                        <td>Customer ID</td>
                       {{--  <td class="text-center"><span class="label label-primary">Primary</span></td> --}}
                        <td class="text-center"><span>{{ $data->customer_id }}</span></td>
                      </tr>
                      <tr>
                        <td>Amount Paid</td>
                        {{-- <td class="text-center"><span class="label label-success">Success</span></td> --}}
                        <td class="text-center"><span >{{ $data->amount_paid }}</span></td>
                      </tr>
                      <tr>
                        <td>Total Amount</td>
                        {{-- <td class="text-center"><span class="label label-warning">Warning</span></td> --}}
                        <td class="text-center"><span >{{ $data->total }}</span></td>
                      </tr>
                      <tr>
                        <td>Balance</td>
                        {{-- <td class="text-center"><span class="label label-danger">Danger</span></td> --}}
                        <td class="text-center"><span>{{ $data->balance }}</span></td>
                      </tr>
                      <tr>
                        <td>Deliver date</td>
                        {{-- <td class="text-center"><span class="label label-danger">Danger</span></td> --}}
                        <td class="text-center"><span>{{ $data->deliver_date }}</span></td>
                      </tr>
                    </tbody>
                  </table>
                  @endforeach

                  {{-- <button class="btn btn-space btn-danger" id="" href="javascript:window.print()">print</button> --}}
                  <div align="right">
                  <a href="javascript:window.print()" type="button">Print</a>
                  </div>
                </div>
              </div>
              <!--Popovers-->
           {{--    <div class="panel panel-default">
                <div class="panel-heading panel-heading-divider">Popovers<span class="panel-subtitle">Default bootstrap popover component style</span></div>
                <div class="panel-body">
                  <div class="xs-mb-30">
                    <p>This is just an example of popover use in a paragraph content without a title written by <a href="javascript:;" data-toggle="popover" data-content="This is a popover without a title!" data-placement="top">Author</a>, also you can set a popover trigger on hover event like <a href="javascript:;" data-toggle="popover" data-trigger="hover" title="Popover on hover" data-content="This is a popover with a title!" data-placement="top">this</a> popover.</p>
                  </div>
                  <p class="xs-mb-10 text-center">
                    <button type="button" title="Popover on top" data-container="body" data-toggle="popover" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." class="btn btn-default btn-space">Popover on top</button>
                    <button type="button" title="Popover on bottom" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." class="btn btn-default btn-space">Popover on bottom</button>
                    <button type="button" title="Popover on left" data-container="body" data-toggle="popover" data-placement="left" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." class="btn btn-default btn-space">Popover on left</button>
                    <button type="button" title="Popover on right" data-container="body" data-toggle="popover" data-placement="right" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." class="btn btn-default btn-space">Popover on right</button>
                  </p>
                </div>
              </div> --}}
              <!--Images-->
           {{--    <div class="panel panel-default">
                <div class="panel-heading panel-heading-divider">Images<span class="panel-subtitle">These are the different images classes</span></div>
                <div class="panel-body">
                  <div class="xs-mt-15 xs-mb-15">
                    <div class="text-center"><img src="assets/img/140x140.png" alt="Placeholder" class="img-rounded xs-mr-10"><img src="assets/img/140x140.png" alt="Placeholder" class="img-circle xs-mr-10"><img src="assets/img/140x140.png" alt="Placeholder" class="img-thumbnail"></div>
                  </div>
                </div>
              </div> --}}
              <!--Progress bars-->
         {{--      <div class="panel panel-default">
                <div class="panel-heading panel-heading-divider">Progress Bars<span class="panel-subtitle">Default bootstrap progress bar component</span></div>
                <div class="panel-body">
                  <div class="xs-mt-15 xs-mb-10">
                    <div class="progress">
                      <div style="width: 40%" class="progress-bar progress-bar-primary">Simple 40%</div>
                    </div>
                    <div class="progress">
                      <div style="width: 60%" class="progress-bar progress-bar-primary progress-bar-striped">Striped 60%</div>
                    </div>
                    <div class="progress">
                      <div style="width: 70%" class="progress-bar progress-bar-primary progress-bar-striped active">Animated 70%</div>
                    </div>
                    <div class="progress">
                      <div style="width: 30%" class="progress-bar progress-bar-primary progress-bar-striped">Stacked<span class="sr-only">30% Complete (success)</span></div>
                      <div style="width: 20%" class="progress-bar progress-bar-success progress-bar-striped">20%<span class="sr-only">20% Complete (info)</span></div>
                      <div style="width: 25%" class="progress-bar progress-bar-warning progress-bar-striped">25%<span class="sr-only">25% Complete (warning)</span></div>
                      <div style="width: 10%" class="progress-bar progress-bar-danger progress-bar-striped">10%<span class="sr-only">10% Complete (danger)</span></div>
                    </div>
                  </div>
                </div>
              </div> --}}
            </div>
        </div>
      </div>
{{--       <nav class="be-right-sidebar">
        <div class="sb-content">
          <div class="tab-navigation">
            <ul role="tablist" class="nav nav-tabs nav-justified">
              <li role="presentation" class="active"><a href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab">Chat</a></li>
              <li role="presentation"><a href="#tab2" aria-controls="tab2" role="tab" data-toggle="tab">Todo</a></li>
              <li role="presentation"><a href="#tab3" aria-controls="tab3" role="tab" data-toggle="tab">Settings</a></li>
            </ul>
          </div>
          <div class="tab-panel">
            <div class="tab-content">
              <div id="tab1" role="tabpanel" class="tab-pane tab-chat active">
                <div class="chat-contacts">
                  <div class="chat-sections">
                    <div class="be-scroller">
                      <div class="content">
                        <h2>Recent</h2>
                        <div class="contact-list contact-list-recent">
                          <div class="user"><a href="#"><img src="assets/img/avatar1.png" alt="Avatar">
                              <div class="user-data"><span class="status away"></span><span class="name">Claire Sassu</span><span class="message">Can you share the...</span></div></a></div>
                          <div class="user"><a href="#"><img src="assets/img/avatar2.png" alt="Avatar">
                              <div class="user-data"><span class="status"></span><span class="name">Maggie jackson</span><span class="message">I confirmed the info.</span></div></a></div>
                          <div class="user"><a href="#"><img src="assets/img/avatar3.png" alt="Avatar">
                              <div class="user-data"><span class="status offline"></span><span class="name">Joel King		</span><span class="message">Ready for the meeti...</span></div></a></div>
                        </div>
                        <h2>Contacts</h2>
                        <div class="contact-list">
                          <div class="user"><a href="#"><img src="assets/img/avatar4.png" alt="Avatar">
                              <div class="user-data2"><span class="status"></span><span class="name">Mike Bolthort</span></div></a></div>
                          <div class="user"><a href="#"><img src="assets/img/avatar5.png" alt="Avatar">
                              <div class="user-data2"><span class="status"></span><span class="name">Maggie jackson</span></div></a></div>
                          <div class="user"><a href="#"><img src="assets/img/avatar6.png" alt="Avatar">
                              <div class="user-data2"><span class="status offline"></span><span class="name">Jhon Voltemar</span></div></a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="bottom-input">
                    <input type="text" placeholder="Search..." name="q"><span class="mdi mdi-search"></span>
                  </div>
                </div>
                <div class="chat-window">
                  <div class="title">
                    <div class="user"><img src="assets/img/avatar2.png" alt="Avatar">
                      <h2>Maggie jackson</h2><span>Active 1h ago</span>
                    </div><span class="icon return mdi mdi-chevron-left"></span>
                  </div>
                  <div class="chat-messages">
                    <div class="be-scroller">
                      <div class="content">
                        <ul>
                          <li class="friend">
                            <div class="msg">Hello</div>
                          </li>
                          <li class="self">
                            <div class="msg">Hi, how are you?</div>
                          </li>
                          <li class="friend">
                            <div class="msg">Good, I'll need support with my pc</div>
                          </li>
                          <li class="self">
                            <div class="msg">Sure, just tell me what is going on with your computer?</div>
                          </li>
                          <li class="friend">
                            <div class="msg">I don't know it just turns off suddenly</div>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="chat-input">
                    <div class="input-wrapper"><span class="photo mdi mdi-camera"></span>
                      <input type="text" placeholder="Message..." name="q" autocomplete="off"><span class="send-msg mdi mdi-mail-send"></span>
                    </div>
                  </div>
                </div>
              </div>
              <div id="tab2" role="tabpanel" class="tab-pane tab-todo">
                <div class="todo-container">
                  <div class="todo-wrapper">
                    <div class="be-scroller">
                      <div class="todo-content"><span class="category-title">Today</span>
                        <ul class="todo-list">
                          <li>
                            <div class="be-checkbox be-checkbox-sm"><span class="delete mdi mdi-delete"></span>
                              <input id="todo1" type="checkbox" checked="">
                              <label for="todo1">Initialize the project</label>
                            </div>
                          </li>
                          <li>
                            <div class="be-checkbox be-checkbox-sm"><span class="delete mdi mdi-delete"></span>
                              <input id="todo2" type="checkbox">
                              <label for="todo2">Create the main structure</label>
                            </div>
                          </li>
                          <li>
                            <div class="be-checkbox be-checkbox-sm"><span class="delete mdi mdi-delete"></span>
                              <input id="todo3" type="checkbox">
                              <label for="todo3">Updates changes to GitHub</label>
                            </div>
                          </li>
                        </ul><span class="category-title">Tomorrow</span>
                        <ul class="todo-list">
                          <li>
                            <div class="be-checkbox be-checkbox-sm"><span class="delete mdi mdi-delete"></span>
                              <input id="todo4" type="checkbox">
                              <label for="todo4">Initialize the project</label>
                            </div>
                          </li>
                          <li>
                            <div class="be-checkbox be-checkbox-sm"><span class="delete mdi mdi-delete"></span>
                              <input id="todo5" type="checkbox">
                              <label for="todo5">Create the main structure</label>
                            </div>
                          </li>
                          <li>
                            <div class="be-checkbox be-checkbox-sm"><span class="delete mdi mdi-delete"></span>
                              <input id="todo6" type="checkbox">
                              <label for="todo6">Updates changes to GitHub</label>
                            </div>
                          </li>
                          <li>
                            <div class="be-checkbox be-checkbox-sm"><span class="delete mdi mdi-delete"></span>
                              <input id="todo7" type="checkbox">
                              <label for="todo7" title="This task is too long to be displayed in a normal space!">This task is too long to be displayed in a normal space!</label>
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="bottom-input">
                    <input type="text" placeholder="Create new task..." name="q"><span class="mdi mdi-plus"></span>
                  </div>
                </div>
              </div>
              <div id="tab3" role="tabpanel" class="tab-pane tab-settings">
                <div class="settings-wrapper">
                  <div class="be-scroller"><span class="category-title">General</span>
                    <ul class="settings-list">
                      <li>
                        <div class="switch-button switch-button-sm">
                          <input type="checkbox" checked="" name="st1" id="st1"><span>
                            <label for="st1"></label></span>
                        </div><span class="name">Available</span>
                      </li>
                      <li>
                        <div class="switch-button switch-button-sm">
                          <input type="checkbox" checked="" name="st2" id="st2"><span>
                            <label for="st2"></label></span>
                        </div><span class="name">Enable notifications</span>
                      </li>
                      <li>
                        <div class="switch-button switch-button-sm">
                          <input type="checkbox" checked="" name="st3" id="st3"><span>
                            <label for="st3"></label></span>
                        </div><span class="name">Login with Facebook</span>
                      </li>
                    </ul><span class="category-title">Notifications</span>
                    <ul class="settings-list">
                      <li>
                        <div class="switch-button switch-button-sm">
                          <input type="checkbox" name="st4" id="st4"><span>
                            <label for="st4"></label></span>
                        </div><span class="name">Email notifications</span>
                      </li>
                      <li>
                        <div class="switch-button switch-button-sm">
                          <input type="checkbox" checked="" name="st5" id="st5"><span>
                            <label for="st5"></label></span>
                        </div><span class="name">Project updates</span>
                      </li>
                      <li>
                        <div class="switch-button switch-button-sm">
                          <input type="checkbox" checked="" name="st6" id="st6"><span>
                            <label for="st6"></label></span>
                        </div><span class="name">New comments</span>
                      </li>
                      <li>
                        <div class="switch-button switch-button-sm">
                          <input type="checkbox" name="st7" id="st7"><span>
                            <label for="st7"></label></span>
                        </div><span class="name">Chat messages</span>
                      </li>
                    </ul><span class="category-title">Workflow</span>
                    <ul class="settings-list">
                      <li>
                        <div class="switch-button switch-button-sm">
                          <input type="checkbox" name="st8" id="st8"><span>
                            <label for="st8"></label></span>
                        </div><span class="name">Deploy on commit</span>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </nav> --}}
    </div>
    <script src="{{ asset('assets/lib/jquery/jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/main.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/lib/bootstrap/dist/js/bootstrap.min.js') }}" type="text/javascript"></script>
    <script type="text/javascript">
      $(document).ready(function(){
      	//initialize the javascript
      	App.init();
      });
      
    </script>
  </body>
</html>