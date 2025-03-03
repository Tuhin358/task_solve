<!DOCTYPE html>
<html lang="en">
<head>

	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>Bootstrap Metro Dashboard by Dennis Ji for ARM demo</title>
	<meta name="description" content="Bootstrap Metro Dashboard">
	<meta name="author" content="Dennis Ji">
	<meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
	<!-- end: Meta -->

	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- end: Mobile Specific -->

	<!-- start: CSS -->
	<link id="bootstrap-style" href="{{ asset('admin/css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('admin/css/bootstrap-responsive.min.css') }}" rel="stylesheet">
	<link id="base-style" href="{{ asset('admin/css/style.css') }}" rel="stylesheet">
	<link id="base-style-responsive" href="{{ asset('admin/css/style-responsive.css') }}" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

	<!-- end: CSS -->


	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<link id="ie-style" href="{{ asset('admin/css/ie.css') }}" rel="stylesheet">
	<![endif]-->

	<!--[if IE 9]>
		<link id="ie9style" href="{{ asset('admin/css/ie9.css') }}" rel="stylesheet">
	<![endif]-->

	<!-- start: Favicon -->
	<link rel="shortcut icon" href="img/favicon.ico">
	<!-- end: Favicon -->




</head>

<body>
		<!-- start: Header -->
	<div class="navbar">
		<div class="navbar-inner">
			<div class="container-fluid">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a class="brand" href="{{route('dashboard')}}"><span>Metro</span></a>

				<!-- start: Header Menu -->
				<div class="nav-no-collapse header-nav">
					<ul class="nav pull-right">
						<li class="dropdown hidden-phone">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="halflings-icon white warning-sign"></i>
							</a>
							<ul class="dropdown-menu notifications">
								<li class="dropdown-menu-title">
 									<span>You have 11 notifications</span>
									<a href="#refresh"><i class="icon-repeat"></i></a>
								</li>


                                </li>

							</ul>
						</li>
						<!-- end: Message Dropdown -->


						<li>
							<a class="btn" href="#">
								<i class="halflings-icon white wrench"></i>
							</a>
						</li>
						<!-- start: User Dropdown -->
						<li class="dropdown">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="halflings-icon white user"></i>
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
								<li class="dropdown-menu-title">
 									<span>Account Settings</span>
								</li>
								<li><a href="#"><i class="halflings-icon user"></i> Profile</a></li>
								<li><a href=""><i class="halflings-icon off"></i> Logout</a></li>
							</ul>
						</li>
						<!-- end: User Dropdown -->
					</ul>
				</div>
				<!-- end: Header Menu -->

			</div>
		</div>
	</div>
	<!-- start: Header -->

		<div class="container-fluid-full">
		<div class="row-fluid">



			<!-- start: Main Menu -->



            <div id="sidebar-left" class="span2">
				<div class="nav-collapse sidebar-nav">
					<ul class="nav nav-tabs nav-stacked main-menu">

						<li><a href="{{route('dashboard') }}"><i class="icon-bar-chart"></i><span class="hidden-tablet"> Dashboard</span></a></li>
                        <li>

                            <a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet">Admin</span> </a>
							<ul>
								<li><a class="submenu" href="{{route('create.admin') }}"><i class="icon-file-alt"></i><span class="hidden-tablet"> create</span></a></li>
								<li><a class="submenu" href="{{route('alldata') }}"><i class="icon-file-alt"></i><span class="hidden-tablet"> All Data</span></a></li>
								{{--  <li><a class="submenu" href="submenu3.html"><i class="icon-file-alt"></i><span class="hidden-tablet"> Sub Menu 3</span></a></li>  --}}
							</ul>
                        </li>



                        <li>
							<a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet">User</span> </a>
							<ul>
								<li><a class="submenu" href="{{ route('create.user') }}"><i class="icon-file-alt"></i><span class="hidden-tablet"> create</span></a></li>
								<li><a class="submenu" href="{{ route('alluser.data') }}"><i class="icon-file-alt"></i><span class="hidden-tablet"> All User</span></a></li>
							</ul>
                        </li>




					</ul>
				</div>
			</div>
			<!-- end: Main Menu -->

			<noscript>
				<div class="alert alert-block span10">
					<h4 class="alert-heading">Warning!</h4>
					<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
				</div>
			</noscript>

			<!-- start: Content -->
			<div id="content" class="span10">


			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index.html">Home</a>
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">Dashboard</a></li>
			</ul>




            @yield('admin_content')




			<!--/.fluid-container-->

			<!-- end: Content -->
		</div><!--/#content.span10-->
		</div><!--/fluid-row-->

	<div class="modal hide fade" id="myModal">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">×</button>
			<h3>Settings</h3>
		</div>
		<div class="modal-body">
			<p>Here settings can be configured...</p>
		</div>
		<div class="modal-footer">
			<a href="#" class="btn" data-dismiss="modal">Close</a>
			<a href="#" class="btn btn-primary">Save changes</a>
		</div>
	</div>

	<div class="clearfix"></div>

	<footer>

		<p>
			<span style="text-align:left;float:left">&copy; 2013 <a href="http://jiji262.github.io/Bootstrap_Metro_Dashboard/" alt="Bootstrap_Metro_Dashboard">Bootstrap Metro Dashboard</a></span>

		</p>

	</footer>

	<!-- start: JavaScript-->

		<script src="{{ asset('admin/js/jquery-1.9.1.min.js') }}"></script>
	<script src="{{ asset('admin/js/jquery-migrate-1.0.0.min.js') }}"></script>

		<script src="{{ asset('admin/js/jquery-ui-1.10.0.custom.min.js') }}"></script>

		<script src="{{ asset('admin/js/jquery.ui.touch-punch.js') }}"></script>

		<script src="{{ asset('admin/js/modernizr.js') }}"></script>

		<script src="{{ asset('admin/js/bootstrap.min.js') }}"></script>

		<script src="{{ asset('admin/js/jquery.cookie.js') }}"></script>

		<script src="{{ asset('admin/js/fullcalendar.min.js') }}"></script>

		<script src="{{ asset('admin/js/jquery.dataTables.min.js') }}"></script>

		<script src="{{ asset('admin/js/excanvas.js') }}"></script>
	<script src="{{ asset('admin/js/jquery.flot.js') }}"></script>
	<script src="{{ asset('admin/js/jquery.flot.pie.js') }}"></script>
	<script src="{{ asset('admin/js/jquery.flot.stack.js') }}"></script>
	<script src="{{ asset('admin/js/jquery.flot.resize.min.js') }}"></script>

		<script src="{{ asset('admin/js/jquery.chosen.min.js') }}"></script>

		<script src="{{ asset('admin/js/jquery.uniform.min.js') }}"></script>

		<script src="{{ asset('admin/js/jquery.cleditor.min.js') }}"></script>

		<script src="{{ asset('admin/js/jquery.noty.js') }}"></script>

		<script src="{{ asset('admin/js/jquery.elfinder.min.js') }}"></script>

		<script src="{{ asset('admin/js/jquery.raty.min.js') }}"></script>

		<script src="{{ asset('admin/js/jquery.iphone.toggle.js') }}"></script>

		<script src="{{ asset('admin/js/jquery.uploadify-3.1.min.js') }}"></script>

		<script src="{{ asset('admin/js/jquery.gritter.min.js') }}"></script>

		<script src="{{ asset('admin/js/jquery.imagesloaded.js') }}"></script>

		<script src="{{ asset('admin/js/jquery.masonry.min.js') }}"></script>

		<script src="{{ asset('admin/js/jquery.knob.modified.js') }}"></script>

		<script src="{{ asset('admin/js/jquery.sparkline.min.js') }}"></script>

		<script src="{{ asset('admin/js/counter.js') }}"></script>

		<script src="{{ asset('admin/js/retina.js') }}"></script>

		<script src="{{ asset('admin/js/custom.js') }}"></script>
	<!-- end: JavaScript-->

</body>
</html>

