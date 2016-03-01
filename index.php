<!-- Header -->
<?php include 'inc/header.php' ;?>
	
		<!-- Nav -->	
		<nav class="navbar-default navbar-static-top" role="navigation">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<h1> <a class="navbar-brand" href="index.html">Minimal</a></h1>
			</div>
			<div class=" border-bottom">
				<div class="full-left">
					<section class="full-top">
						<button id="toggle"><i class="fa fa-arrows-alt"></i></button>
					</section>
					<form class=" navbar-left-right">
						<input type="text" value="Search..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search...';}">
						<input type="submit" value="" class="fa fa-search">
					</form>
					<div class="clearfix"> </div>
				</div>
			</div>

			<!-- Brand and toggle get grouped for better mobile display -->

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="drop-men">
				<ul class=" nav_1">

					<li class="dropdown at-drop">
						<a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-user-plus"></i></a>
						<ul class="dropdown-menu menu1 " role="menu">
							<li>
								<a href="#">

									<div class="user-new">
										<p>New user registered</p>
										<span>40 seconds ago</span>
									</div>
									<div class="user-new-left">

										<i class="fa fa-user-plus"></i>
									</div>
									<div class="clearfix"> </div>
								</a>
							</li>
							<li>
								<a href="#">
									<div class="user-new">
										<p>Someone special liked this</p>
										<span>3 minutes ago</span>
									</div>
									<div class="user-new-left">

										<i class="fa fa-heart"></i>
									</div>
									<div class="clearfix"> </div>
								</a>
							</li>
							<li>
								<a href="#">
									<div class="user-new">
										<p>John cancelled the event</p>
										<span>4 hours ago</span>
									</div>
									<div class="user-new-left">

										<i class="fa fa-times"></i>
									</div>
									<div class="clearfix"> </div>
								</a>
							</li>
							<li>
								<a href="#">
									<div class="user-new">
										<p>The server is status is stable</p>
										<span>yesterday at 08:30am</span>
									</div>
									<div class="user-new-left">

										<i class="fa fa-info"></i>
									</div>
									<div class="clearfix"> </div>
								</a>
							</li>
							<li>
								<a href="#">
									<div class="user-new">
										<p>New comments waiting approval</p>
										<span>Last Week</span>
									</div>
									<div class="user-new-left">

										<i class="fa fa-rss"></i>
									</div>
									<div class="clearfix"> </div>
								</a>
							</li>
							<li><a href="#" class="view">View all messages</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle dropdown-at" data-toggle="dropdown"><span class=" name-caret">Rackham<i class="caret"></i></span><img src="images/wo.jpg"></a>
						<ul class="dropdown-menu " role="menu">
							<li><a href="profile.html"><i class="fa fa-user"></i>Edit Profile</a></li>
							<li><a href="inbox.html"><i class="fa fa-envelope"></i>Inbox</a></li>
							<li><a href="calendar.html"><i class="fa fa-calendar"></i>Calender</a></li>
							<li><a href="inbox.html"><i class="fa fa-clipboard"></i>Tasks</a></li>
						</ul>
					</li>

				</ul>
			</div>
			<!-- /.navbar-collapse -->
			<div class="clearfix">

			</div>

			<div class="navbar-default sidebar" role="navigation">
				<div class="sidebar-nav navbar-collapse">
					<ul class="nav" id="side-menu">
						<li>
							<a href="index.html" id="lihat" class=" hvr-bounce-to-right"><i class="fa fa-dashboard nav_icon "></i><span class="nav-label">Semua Mahasiswa</span> </a>
						</li>
						<li>
							<a href="inbox.html" id="tambah" class=" hvr-bounce-to-right" data-toggle="modal" data-target="#create"><i class="fa fa-plus nav_icon"></i> <span class="nav-label">Tambah</span> </a>
						</li>
						<li>
							<a href="inbox.html" id="chart" class=" hvr-bounce-to-right"><i class="fa fa-inbox nav_icon"></i> <span class="nav-label">Chart</span> </a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		
		<!-- Content -->
		<div id="page-wrapper" class="gray-bg dashbard-1">
			<div id="main" class="content-main">

				<!--banner-->
				<div class="banner">
					<h2>
						<a href="index.html">Home</a>
						<i class="fa fa-angle-right"></i>
						<span>Dashboard</span>
					</h2>
				</div>
				<!--//banner-->

				<!--content-->
				<div class="content-top">

					<div class="col-md-12 chart">

					</div>
					<div class="col-md-12">
						<div class="tab-pane active text-style" id="tab1">
							<div class="inbox-right">

								<div class="mailbox-content">
<!--
									<div class="mail-toolbar clearfix">
										<div class="float-left">
											<div class="btn-group m-r-sm mail-hidden-options" style="display: inline-block;">
												<div class="btn-group">
													<a class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-folder"></i> <span class="caret"></span></a>
													<ul class="dropdown-menu dropdown-menu-right" role="menu">
														<li><a href="#">Social</a></li>
														<li><a href="#">Forums</a></li>
														<li><a href="#">Updates</a></li>

														<li><a href="#">Spam</a></li>
														<li><a href="#">Trash</a></li>

														<li><a href="#">New</a></li>
													</ul>
												</div>
												<div class="btn-group">
													<a class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-tags"></i> <span class="caret"></span></a>
													<ul class="dropdown-menu dropdown-menu-right" role="menu">
														<li><a href="#">Work</a></li>
														<li><a href="#">Family</a></li>
														<li><a href="#">Social</a></li>

														<li><a href="#">Primary</a></li>
														<li><a href="#">Promotions</a></li>
														<li><a href="#">Forums</a></li>
													</ul>
												</div>
											</div>


										</div>
										<div class="float-right">
											<div class="dropdown">
												<a href="#" title="" class="btn btn-default" data-toggle="dropdown" aria-expanded="false">
													<i class="fa fa-cog icon_8"></i>
													<i class="fa fa-chevron-down icon_8"></i>
													<div class="ripple-wrapper"></div>
												</a>
												<ul class="dropdown-menu float-right">
													<li>
														<a href="#" title="">
															<i class="fa fa-pencil-square-o icon_9"></i> Edit
														</a>
													</li>
													<li>
														<a href="#" title="">
															<i class="fa fa-calendar icon_9"></i> Schedule
														</a>
													</li>
													<li>
														<a href="#" title="">
															<i class="fa fa-download icon_9"></i> Download
														</a>
													</li>

													<li>
														<a href="#" class="font-red" title="">
															<i class="fa fa-times" icon_9=""></i> Delete
														</a>
													</li>
												</ul>
											</div>

											<div class="btn-group">
												<a class="btn btn-default"><i class="fa fa-angle-left"></i></a>
												<a class="btn btn-default"><i class="fa fa-angle-right"></i></a>
											</div>


										</div>

									</div>
-->
									<div class="preloader">
										<img src="assets/images/Preloader.gif" alt="">
									</div>
									<div id="mahasiswa">
									
										
									</div>
					
								</div>
							</div>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>

				<!-- Copyright -->
				<div class="copy">
					<p> &copy; 2016 Minimal. All Rights Reserved | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
		
<!-- footer -->
<?php include 'inc/footer.php' ;?>