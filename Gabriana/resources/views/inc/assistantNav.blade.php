<header class="main-header">
    <!-- Logo -->
    <a href="/assistant" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>G</b>DS</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Gabriana</b>Dental Clinic</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        </a>
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <!-- Notifications: style can be found in dropdown.less -->
                <li class="dropdown notifications-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-bell-o"></i>
                    <span class="label label-warning">10</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="header">You have 10 notifications</li>
                        <li>
                            <!-- inner menu: contains the actual data -->
                            <ul class="menu">
                                <li>
                                    <a href="#">
                                    <i class="fa fa-users text-aqua"></i> 5 new members joined today
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                    <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the
                                    page and may cause design problems
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                    <i class="fa fa-users text-red"></i> 5 new members joined
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                    <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                    <i class="fa fa-user text-red"></i> You changed your username
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="footer"><a href="#">View all</a></li>
                    </ul>
                </li>
                <!-- Tasks: style can be found in dropdown.less -->
                
                <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <span class="hidden-xs">Dental Clinic Assistant</span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- Menu Footer-->
                        <li class="user-body">
                            <div class="pull-left">
                                <a href="#" class="btn btn-default btn-flat">Profile</a>
                            </div>

                            <div class="pull-right">
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();" class="btn btn-default btn-flat" >
                                    Logout
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </div>
                        </li>
                    </ul>
                </li>
                <!-- Control Sidebar Toggle Button -->
                <li>
                    <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                </li>
            </ul>
        </div>
    </nav>
</header>
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="image">
                <img src="{{ asset('bower_components/admin-lte/dist/img/GabrianaLogo.png') }}" class="img" alt="User Image">
            </div>
        </div>
        <!-- search form -->
        {{--  <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
                </span>
            </div>
        </form>  --}}
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <li>
                <a href="{{ url('/assistant')}}">
                    <i class="fa fa-dashboard"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-files-o"></i>
                    <span>Records</span>
                    <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu" style="display: none;">
                    <li><a href="{{ url('/assistant/patient')}}"><i class="fa fa-circle-o"></i> Active</a></li>
                    <li><a href="{{ url('/assistant/inactivePatient')}}"><i class="fa fa-circle-o"></i> Inactive</a></li>
                </ul>
            </li>
            <li>
                <a href="{{ url('/assistant/schedules')}}">
                    <i class="fa fa-calendar"></i><span>Schedule</span> 
                </a>
            </li>
            <li class="treeview">
                    <a href="#">
                        <i class="fa fa-table"></i>
                        <span>Inventory</span>
                        <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu" style="display: none;">
                        <li><a href="{{ url('/assistant/inventory')}}"><i class="fa fa-circle-o"></i> Active</a></li>
                        <li><a href="{{ url('/assistant/inactiveInventory')}}"><i class="fa fa-circle-o"></i> Inactive</a></li>
                    </ul>
                </li>
            <li>
                <a href="{{ url('/assistant/service')}}">
                    <i class="fa fa-list"></i><span>Services</span> 
                </a>
            </li>

            <li>
                <a href="{{ url('/assistant')}}">
                    <i class="fa fa-book"></i><span>Reports</span> 
                </a>
            </li>
            
<!--
            <li>
                <a href="pages/calendar.html">
                    <i class="fa fa-calendar"></i><span>Calendar</span>
                    <span class="pull-right-container">
                        <small class="label pull-right bg-red">3</small>
                        <small class="label pull-right bg-blue">17</small>
                    </span>
                </a>
            </li>
-->
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
<aside class="control-sidebar control-sidebar-dark">

	<!-- Tab panes -->
	<div class="tab-content">
		<!-- Home tab content -->
		<div class="tab-pane" id="control-sidebar-home-tab">
			<!-- /.control-sidebar-menu -->
			<h3 class="control-sidebar-heading">Tasks Progress</h3>
			<ul class="control-sidebar-menu">
				<li>
					<a href="javascript:void(0)">
						<h4 class="control-sidebar-subheading">
							Custom Template Design
							<span class="label label-danger pull-right">70%</span>
						</h4>
						<div class="progress progress-xxs">
							<div class="progress-bar progress-bar-danger" style="width: 70%"></div>
						</div>
					</a>
				</li>
				<li>
					<a href="javascript:void(0)">
						<h4 class="control-sidebar-subheading">
							Update Resume
							<span class="label label-success pull-right">95%</span>
						</h4>
						<div class="progress progress-xxs">
							<div class="progress-bar progress-bar-success" style="width: 95%"></div>
						</div>
					</a>
				</li>
				<li>
					<a href="javascript:void(0)">
						<h4 class="control-sidebar-subheading">
							Laravel Integration
							<span class="label label-warning pull-right">50%</span>
						</h4>
						<div class="progress progress-xxs">
							<div class="progress-bar progress-bar-warning" style="width: 50%"></div>
						</div>
					</a>
				</li>
				<li>
					<a href="javascript:void(0)">
						<h4 class="control-sidebar-subheading">
							Back End Framework
							<span class="label label-primary pull-right">68%</span>
						</h4>
						<div class="progress progress-xxs">
							<div class="progress-bar progress-bar-primary" style="width: 68%"></div>
						</div>
					</a>
				</li>
			</ul>
			<!-- /.control-sidebar-menu -->
		</div>
		<!-- /.tab-pane -->
		<!-- Stats tab content -->
		<div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
		<!-- /.tab-pane -->
		<!-- Settings tab content -->
		<div class="tab-pane" id="control-sidebar-settings-tab">
			<form method="post">
				<h3 class="control-sidebar-heading">General Settings</h3>
				<div class="form-group">
					<label class="control-sidebar-subheading">
					Report panel usage
					<input type="checkbox" class="pull-right" checked>
					</label>
					<p>
						Some information about this general settings option
					</p>
				</div>
				<!-- /.form-group -->
				<div class="form-group">
					<label class="control-sidebar-subheading">
					Allow mail redirect
					<input type="checkbox" class="pull-right" checked>
					</label>
					<p>
						Other sets of options are available
					</p>
				</div>
				<!-- /.form-group -->
				<div class="form-group">
					<label class="control-sidebar-subheading">
					Expose author name in posts
					<input type="checkbox" class="pull-right" checked>
					</label>
					<p>
						Allow the user to show his name in blog posts
					</p>
				</div>
				<!-- /.form-group -->
				<h3 class="control-sidebar-heading">Chat Settings</h3>
				<div class="form-group">
					<label class="control-sidebar-subheading">
					Show me as online
					<input type="checkbox" class="pull-right" checked>
					</label>
				</div>
				<!-- /.form-group -->
				<div class="form-group">
					<label class="control-sidebar-subheading">
					Turn off notifications
					<input type="checkbox" class="pull-right">
					</label>
				</div>
				<!-- /.form-group -->
				<div class="form-group">
					<label class="control-sidebar-subheading">
					Delete chat history
					<a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
					</label>
				</div>
				<!-- /.form-group -->
			</form>
		</div>
		<!-- /.tab-pane -->
	</div>
</aside>

