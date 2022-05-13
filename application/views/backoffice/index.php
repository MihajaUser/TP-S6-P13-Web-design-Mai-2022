<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>Admin climat</title>

	<!-- Site favicon -->
	<link rel="apple-touch-icon" sizes="180x180"  href="<?php echo base_url() ?>/assets/vendors/images/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32"  href="<?php echo base_url() ?>/assets/vendors/images/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16"  href="<?php echo base_url() ?>/assets/vendors/images/favicon-16x16.png">

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Font -->
	<link  href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css"  href="<?php echo base_url() ?>/assets/vendors/styles/core.css">
	<link rel="stylesheet" type="text/css"  href="<?php echo base_url() ?>/assets/vendors/styles/icon-font.min.css">
	<link rel="stylesheet" type="text/css"  href="<?php echo base_url() ?>/assets/src/plugins/datatables/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" type="text/css"  href="<?php echo base_url() ?>/assets/src/plugins/datatables/css/responsive.bootstrap4.min.css">
	<link rel="stylesheet" type="text/css"  href="<?php echo base_url() ?>/assets/vendors/styles/style.css">

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-119386393-1');
	</script>
</head>
<body>
	<div class="pre-loader">
		<div class="pre-loader-box">
			<div class="loader-logo"><img src="<?php echo base_url() ?>/assets/vendors/images/deskapp-logo.svg" alt=""></div>
			<div class='loader-progress' id="progress_div">
				<div class='bar' id='bar1'></div>
			</div>
			<div class='percent' id='percent1'>0%</div>
			<div class="loading-text">
				Loading...
			</div>
		</div>
	</div>

	<div class="header">
		<div class="header-left">
			<div class="menu-icon dw dw-menu"></div>
			<div class="search-toggle-icon dw dw-search2" data-toggle="header_search"></div>
			<div class="header-search">
				<form>
					<div class="form-group mb-0">
						<i class="dw dw-search2 search-icon"></i>
						<input type="text" class="form-control search-input" placeholder="Search Here">
						<div class="dropdown">
							<a class="dropdown-toggle no-arrow"  href="<?php echo base_url() ?>/assets/#" role="button" data-toggle="dropdown">
								<i class="ion-arrow-down-c"></i>
							</a>
							<div class="dropdown-menu dropdown-menu-right">
								<div class="form-group row">
									<label class="col-sm-12 col-md-2 col-form-label">From</label>
									<div class="col-sm-12 col-md-10">
										<input class="form-control form-control-sm form-control-line" type="text">
									</div>
								</div>
								<div class="form-group row">
									<label class="col-sm-12 col-md-2 col-form-label">To</label>
									<div class="col-sm-12 col-md-10">
										<input class="form-control form-control-sm form-control-line" type="text">
									</div>
								</div>
								<div class="form-group row">
									<label class="col-sm-12 col-md-2 col-form-label">Subject</label>
									<div class="col-sm-12 col-md-10">
										<input class="form-control form-control-sm form-control-line" type="text">
									</div>
								</div>
								<div class="text-right">
									<button class="btn btn-primary">Search</button>
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
		<div class="header-right">
			<div class="dashboard-setting user-notification">
				<div class="dropdown">
					<a class="dropdown-toggle no-arrow"  href="<?php echo base_url() ?>/assets/javascript:;" data-toggle="right-sidebar">
						<i class="dw dw-settings2"></i>
					</a>
				</div>
			</div>
			<div class="user-notification">
				<div class="dropdown">
					<a class="dropdown-toggle no-arrow"  href="<?php echo base_url() ?>/assets/#" role="button" data-toggle="dropdown">
						<i class="icon-copy dw dw-notification"></i>
						<span class="badge notification-active"></span>
					</a>
					<div class="dropdown-menu dropdown-menu-right">
						<div class="notification-list mx-h-350 customscroll">
							<ul>
								<li>
									<a  href="<?php echo base_url() ?>/assets/#">
										<img src="<?php echo base_url() ?>/assets/vendors/images/img.jpg" alt="">
										<h3>John Doe</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
									</a>
								</li>
								<li>
									<a  href="<?php echo base_url() ?>/assets/#">
										<img src="<?php echo base_url() ?>/assets/vendors/images/photo1.jpg" alt="">
										<h3>Lea R. Frith</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
									</a>
								</li>
								<li>
									<a  href="<?php echo base_url() ?>/assets/#">
										<img src="<?php echo base_url() ?>/assets/vendors/images/photo2.jpg" alt="">
										<h3>Erik L. Richards</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
									</a>
								</li>
								<li>
									<a  href="<?php echo base_url() ?>/assets/#">
										<img src="<?php echo base_url() ?>/assets/vendors/images/photo3.jpg" alt="">
										<h3>John Doe</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
									</a>
								</li>
								<li>
									<a  href="<?php echo base_url() ?>/assets/#">
										<img src="<?php echo base_url() ?>/assets/vendors/images/photo4.jpg" alt="">
										<h3>Renee I. Hansen</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
									</a>
								</li>
								<li>
									<a  href="<?php echo base_url() ?>/assets/#">
										<img src="<?php echo base_url() ?>/assets/vendors/images/img.jpg" alt="">
										<h3>Vicki M. Coleman</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="user-info-dropdown">
				<div class="dropdown">
					<a class="dropdown-toggle"  href="<?php echo base_url() ?>/assets/#" role="button" data-toggle="dropdown">
						<span class="user-icon">
							<img src="<?php echo base_url() ?>/assets/vendors/images/photo1.jpg" alt="">
						</span>
						<span class="user-name">Ross C. Lopez</span>
					</a>
					<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
						<a class="dropdown-item"  href="<?php echo base_url() ?>/assets/profile.html"><i class="dw dw-user1"></i> Profile</a>
						<a class="dropdown-item"  href="<?php echo base_url() ?>/assets/profile.html"><i class="dw dw-settings2"></i> Setting</a>
						<a class="dropdown-item"  href="<?php echo base_url() ?>/assets/faq.html"><i class="dw dw-help"></i> Help</a>
						<a class="dropdown-item"  href="<?php echo base_url() ?>/assets/login.html"><i class="dw dw-logout"></i> Log Out</a>
					</div>
				</div>
			</div>
			<div class="github-link">
				<a  href="https://github.com/dropways/deskapp" target="_blank"><img src="<?php echo base_url() ?>/assets/vendors/images/github.svg" alt=""></a>
			</div>
		</div>
	</div>

	<div class="right-sidebar">
		<div class="sidebar-title">
			<h3 class="weight-600 font-16 text-blue">
				Layout Settings
				<span class="btn-block font-weight-400 font-12">User Interface Settings</span>
			</h3>
			<div class="close-sidebar" data-toggle="right-sidebar-close">
				<i class="icon-copy ion-close-round"></i>
			</div>
		</div>
		<div class="right-sidebar-body customscroll">
			<div class="right-sidebar-body-content">
				<h4 class="weight-600 font-18 pb-10">Header Background</h4>
				<div class="sidebar-btn-group pb-30 mb-10">
					<a  href="<?php echo base_url() ?>/assets/javascript:void(0);" class="btn btn-outline-primary header-white active">White</a>
					<a  href="<?php echo base_url() ?>/assets/javascript:void(0);" class="btn btn-outline-primary header-dark">Dark</a>
				</div>

				<h4 class="weight-600 font-18 pb-10">Sidebar Background</h4>
				<div class="sidebar-btn-group pb-30 mb-10">
					<a  href="<?php echo base_url() ?>/assets/javascript:void(0);" class="btn btn-outline-primary sidebar-light ">White</a>
					<a  href="<?php echo base_url() ?>/assets/javascript:void(0);" class="btn btn-outline-primary sidebar-dark active">Dark</a>
				</div>

				<h4 class="weight-600 font-18 pb-10">Menu Dropdown Icon</h4>
				<div class="sidebar-radio-group pb-10 mb-10">
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebaricon-1" name="menu-dropdown-icon" class="custom-control-input" value="icon-style-1" checked="">
						<label class="custom-control-label" for="sidebaricon-1"><i class="fa fa-angle-down"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebaricon-2" name="menu-dropdown-icon" class="custom-control-input" value="icon-style-2">
						<label class="custom-control-label" for="sidebaricon-2"><i class="ion-plus-round"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebaricon-3" name="menu-dropdown-icon" class="custom-control-input" value="icon-style-3">
						<label class="custom-control-label" for="sidebaricon-3"><i class="fa fa-angle-double-right"></i></label>
					</div>
				</div>

				<h4 class="weight-600 font-18 pb-10">Menu List Icon</h4>
				<div class="sidebar-radio-group pb-30 mb-10">
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-1" name="menu-list-icon" class="custom-control-input" value="icon-list-style-1" checked="">
						<label class="custom-control-label" for="sidebariconlist-1"><i class="ion-minus-round"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-2" name="menu-list-icon" class="custom-control-input" value="icon-list-style-2">
						<label class="custom-control-label" for="sidebariconlist-2"><i class="fa fa-circle-o" aria-hidden="true"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-3" name="menu-list-icon" class="custom-control-input" value="icon-list-style-3">
						<label class="custom-control-label" for="sidebariconlist-3"><i class="dw dw-check"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-4" name="menu-list-icon" class="custom-control-input" value="icon-list-style-4" checked="">
						<label class="custom-control-label" for="sidebariconlist-4"><i class="icon-copy dw dw-next-2"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-5" name="menu-list-icon" class="custom-control-input" value="icon-list-style-5">
						<label class="custom-control-label" for="sidebariconlist-5"><i class="dw dw-fast-forward-1"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-6" name="menu-list-icon" class="custom-control-input" value="icon-list-style-6">
						<label class="custom-control-label" for="sidebariconlist-6"><i class="dw dw-next"></i></label>
					</div>
				</div>

				<div class="reset-options pt-30 text-center">
					<button class="btn btn-danger" id="reset-settings">Reset Settings</button>
				</div>
			</div>
		</div>
	</div>

	<div class="left-side-bar">
		<div class="brand-logo">
			<a  href="<?php echo base_url() ?>/assets/index.html">
				<img src="<?php echo base_url() ?>/assets/vendors/images/deskapp-logo.svg" alt="" class="dark-logo">
				<img src="<?php echo base_url() ?>/assets/vendors/images/deskapp-logo-white.svg" alt="" class="light-logo">
			</a>
			<div class="close-sidebar" data-toggle="left-sidebar-close">
				<i class="ion-close-round"></i>
			</div>
		</div>
		<div class="menu-block customscroll">
			<div class="sidebar-menu">
				<ul id="accordion-menu">
					<li class="dropdown">
						<a  href="<?php echo base_url() ?>/assets/javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-house-1"></span><span class="mtext">Home</span>
						</a>
						<ul class="submenu">
							<li><a  href="<?php echo base_url() ?>/assets/index.html">Dashboard style 1</a></li>
							<li><a  href="<?php echo base_url() ?>/assets/index2.html">Dashboard style 2</a></li>
							<li><a  href="<?php echo base_url() ?>/assets/index3.html">Dashboard style 3</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a  href="<?php echo base_url() ?>/assets/javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-edit2"></span><span class="mtext">Forms</span>
						</a>
						<ul class="submenu">
							<li><a  href="<?php echo base_url() ?>/assets/form-basic.html">Form Basic</a></li>
							<li><a  href="<?php echo base_url() ?>/assets/advanced-components.html">Advanced Components</a></li>
							<li><a  href="<?php echo base_url() ?>/assets/form-wizard.html">Form Wizard</a></li>
							<li><a  href="<?php echo base_url() ?>/assets/html5-editor.html">HTML5 Editor</a></li>
							<li><a  href="<?php echo base_url() ?>/assets/form-pickers.html">Form Pickers</a></li>
							<li><a  href="<?php echo base_url() ?>/assets/image-cropper.html">Image Cropper</a></li>
							<li><a  href="<?php echo base_url() ?>/assets/image-dropzone.html">Image Dropzone</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a  href="<?php echo base_url() ?>/assets/javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-library"></span><span class="mtext">Tables</span>
						</a>
						<ul class="submenu">
							<li><a  href="<?php echo base_url() ?>/assets/basic-table.html">Basic Tables</a></li>
							<li><a  href="<?php echo base_url() ?>/assets/datatable.html">DataTables</a></li>
						</ul>
					</li>
					<li>
						<a  href="<?php echo base_url() ?>/assets/calendar.html" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-calendar1"></span><span class="mtext">Calendar</span>
						</a>
					</li>
					<li class="dropdown">
						<a  href="<?php echo base_url() ?>/assets/javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-apartment"></span><span class="mtext"> UI Elements </span>
						</a>
						<ul class="submenu">
							<li><a  href="<?php echo base_url() ?>/assets/ui-buttons.html">Buttons</a></li>
							<li><a  href="<?php echo base_url() ?>/assets/ui-cards.html">Cards</a></li>
							<li><a  href="<?php echo base_url() ?>/assets/ui-cards-hover.html">Cards Hover</a></li>
							<li><a  href="<?php echo base_url() ?>/assets/ui-modals.html">Modals</a></li>
							<li><a  href="<?php echo base_url() ?>/assets/ui-tabs.html">Tabs</a></li>
							<li><a  href="<?php echo base_url() ?>/assets/ui-tooltip-popover.html">Tooltip &amp; Popover</a></li>
							<li><a  href="<?php echo base_url() ?>/assets/ui-sweet-alert.html">Sweet Alert</a></li>
							<li><a  href="<?php echo base_url() ?>/assets/ui-notification.html">Notification</a></li>
							<li><a  href="<?php echo base_url() ?>/assets/ui-timeline.html">Timeline</a></li>
							<li><a  href="<?php echo base_url() ?>/assets/ui-progressbar.html">Progressbar</a></li>
							<li><a  href="<?php echo base_url() ?>/assets/ui-typography.html">Typography</a></li>
							<li><a  href="<?php echo base_url() ?>/assets/ui-list-group.html">List group</a></li>
							<li><a  href="<?php echo base_url() ?>/assets/ui-range-slider.html">Range slider</a></li>
							<li><a  href="<?php echo base_url() ?>/assets/ui-carousel.html">Carousel</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a  href="<?php echo base_url() ?>/assets/javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-paint-brush"></span><span class="mtext">Icons</span>
						</a>
						<ul class="submenu">
							<li><a  href="<?php echo base_url() ?>/assets/font-awesome.html">FontAwesome Icons</a></li>
							<li><a  href="<?php echo base_url() ?>/assets/foundation.html">Foundation Icons</a></li>
							<li><a  href="<?php echo base_url() ?>/assets/ionicons.html">Ionicons Icons</a></li>
							<li><a  href="<?php echo base_url() ?>/assets/themify.html">Themify Icons</a></li>
							<li><a  href="<?php echo base_url() ?>/assets/custom-icon.html">Custom Icons</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a  href="<?php echo base_url() ?>/assets/javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-analytics-21"></span><span class="mtext">Charts</span>
						</a>
						<ul class="submenu">
							<li><a  href="<?php echo base_url() ?>/assets/highchart.html">Highchart</a></li>
							<li><a  href="<?php echo base_url() ?>/assets/knob-chart.html">jQuery Knob</a></li>
							<li><a  href="<?php echo base_url() ?>/assets/jvectormap.html">jvectormap</a></li>
							<li><a  href="<?php echo base_url() ?>/assets/apexcharts.html">Apexcharts</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a  href="<?php echo base_url() ?>/assets/javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-right-arrow1"></span><span class="mtext">Additional Pages</span>
						</a>
						<ul class="submenu">
							<li><a  href="<?php echo base_url() ?>/assets/video-player.html">Video Player</a></li>
							<li><a  href="<?php echo base_url() ?>/assets/login.html">Login</a></li>
							<li><a  href="<?php echo base_url() ?>/assets/forgot-password.html">Forgot Password</a></li>
							<li><a  href="<?php echo base_url() ?>/assets/reset-password.html">Reset Password</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a  href="<?php echo base_url() ?>/assets/javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-browser2"></span><span class="mtext">Error Pages</span>
						</a>
						<ul class="submenu">
							<li><a  href="<?php echo base_url() ?>/assets/400.html">400</a></li>
							<li><a  href="<?php echo base_url() ?>/assets/403.html">403</a></li>
							<li><a  href="<?php echo base_url() ?>/assets/404.html">404</a></li>
							<li><a  href="<?php echo base_url() ?>/assets/500.html">500</a></li>
							<li><a  href="<?php echo base_url() ?>/assets/503.html">503</a></li>
						</ul>
					</li>

					<li class="dropdown">
						<a  href="<?php echo base_url() ?>/assets/javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-copy"></span><span class="mtext">Extra Pages</span>
						</a>
						<ul class="submenu">
							<li><a  href="<?php echo base_url() ?>/assets/blank.html">Blank</a></li>
							<li><a  href="<?php echo base_url() ?>/assets/contact-directory.html">Contact Directory</a></li>
							<li><a  href="<?php echo base_url() ?>/assets/blog.html">Blog</a></li>
							<li><a  href="<?php echo base_url() ?>/assets/blog-detail.html">Blog Detail</a></li>
							<li><a  href="<?php echo base_url() ?>/assets/product.html">Product</a></li>
							<li><a  href="<?php echo base_url() ?>/assets/product-detail.html">Product Detail</a></li>
							<li><a  href="<?php echo base_url() ?>/assets/faq.html">FAQ</a></li>
							<li><a  href="<?php echo base_url() ?>/assets/profile.html">Profile</a></li>
							<li><a  href="<?php echo base_url() ?>/assets/gallery.html">Gallery</a></li>
							<li><a  href="<?php echo base_url() ?>/assets/pricing-table.html">Pricing Tables</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a  href="<?php echo base_url() ?>/assets/javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-list3"></span><span class="mtext">Multi Level Menu</span>
						</a>
						<ul class="submenu">
							<li><a  href="<?php echo base_url() ?>/assets/javascript:;">Level 1</a></li>
							<li><a  href="<?php echo base_url() ?>/assets/javascript:;">Level 1</a></li>
							<li><a  href="<?php echo base_url() ?>/assets/javascript:;">Level 1</a></li>
							<li class="dropdown">
								<a  href="<?php echo base_url() ?>/assets/javascript:;" class="dropdown-toggle">
									<span class="micon fa fa-plug"></span><span class="mtext">Level 2</span>
								</a>
								<ul class="submenu child">
									<li><a  href="<?php echo base_url() ?>/assets/javascript:;">Level 2</a></li>
									<li><a  href="<?php echo base_url() ?>/assets/javascript:;">Level 2</a></li>
								</ul>
							</li>
							<li><a  href="<?php echo base_url() ?>/assets/javascript:;">Level 1</a></li>
							<li><a  href="<?php echo base_url() ?>/assets/javascript:;">Level 1</a></li>
							<li><a  href="<?php echo base_url() ?>/assets/javascript:;">Level 1</a></li>
						</ul>
					</li>
					<li>
						<a  href="<?php echo base_url() ?>/assets/sitemap.html" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-diagram"></span><span class="mtext">Sitemap</span>
						</a>
					</li>
					<li>
						<a  href="<?php echo base_url() ?>/assets/chat.html" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-chat3"></span><span class="mtext">Chat</span>
						</a>
					</li>
					<li>
						<a  href="<?php echo base_url() ?>/assets/invoice.html" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-invoice"></span><span class="mtext">Invoice</span>
						</a>
					</li>
					<li>
						<div class="dropdown-divider"></div>
					</li>
					<li>
						<div class="sidebar-small-cap">Extra</div>
					</li>
					<li>
						<a  href="<?php echo base_url() ?>/assets/javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-edit-2"></span><span class="mtext">Documentation</span>
						</a>
						<ul class="submenu">
							<li><a  href="<?php echo base_url() ?>/assets/introduction.html">Introduction</a></li>
							<li><a  href="<?php echo base_url() ?>/assets/getting-started.html">Getting Started</a></li>
							<li><a  href="<?php echo base_url() ?>/assets/color-settings.html">Color Settings</a></li>
							<li><a  href="<?php echo base_url() ?>/assets/third-party-plugins.html">Third Party Plugins</a></li>
						</ul>
					</li>
					<li>
						<a  href="https://dropways.github.io/deskapp-free-single-page-website-template/" target="_blank" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-paper-plane1"></span>
							<span class="mtext">Landing Page <img src="<?php echo base_url() ?>/assets/vendors/images/coming-soon.png" alt="" width="25"></span>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="mobile-menu-overlay"></div>

	<div class="main-container">
		<div class="pd-ltr-20">
			<div class="card-box pd-20 height-100-p mb-30">
				<div class="row align-items-center">
					<div class="col-md-4">
						<img src="<?php echo base_url() ?>/assets/vendors/images/banner-img.png" alt="">
					</div>
					<div class="col-md-8">
						<h4 class="font-20 weight-500 mb-10 text-capitalize">
							Welcome back <div class="weight-600 font-30 text-blue">Johnny Brown!</div>
						</h4>
						<p class="font-18 max-width-600">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde hic non repellendus debitis iure, doloremque assumenda. Autem modi, corrupti, nobis ea iure fugiat, veniam non quaerat mollitia animi error corporis.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xl-3 mb-30">
					<div class="card-box height-100-p widget-style1">
						<div class="d-flex flex-wrap align-items-center">
							<div class="progress-data">
								<div id="chart"></div>
							</div>
							<div class="widget-data">
								<div class="h4 mb-0">2020</div>
								<div class="weight-600 font-14">Contact</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 mb-30">
					<div class="card-box height-100-p widget-style1">
						<div class="d-flex flex-wrap align-items-center">
							<div class="progress-data">
								<div id="chart2"></div>
							</div>
							<div class="widget-data">
								<div class="h4 mb-0">400</div>
								<div class="weight-600 font-14">Deals</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 mb-30">
					<div class="card-box height-100-p widget-style1">
						<div class="d-flex flex-wrap align-items-center">
							<div class="progress-data">
								<div id="chart3"></div>
							</div>
							<div class="widget-data">
								<div class="h4 mb-0">350</div>
								<div class="weight-600 font-14">Campaign</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 mb-30">
					<div class="card-box height-100-p widget-style1">
						<div class="d-flex flex-wrap align-items-center">
							<div class="progress-data">
								<div id="chart4"></div>
							</div>
							<div class="widget-data">
								<div class="h4 mb-0">$6060</div>
								<div class="weight-600 font-14">Worth</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xl-8 mb-30">
					<div class="card-box height-100-p pd-20">
						<h2 class="h4 mb-20">Activity</h2>
						<div id="chart5"></div>
					</div>
				</div>
				<div class="col-xl-4 mb-30">
					<div class="card-box height-100-p pd-20">
						<h2 class="h4 mb-20">Lead Target</h2>
						<div id="chart6"></div>
					</div>
				</div>
			</div>
			<div class="card-box mb-30">
				<h2 class="h4 pd-20">Best Selling Products</h2>
				<table class="data-table table nowrap">
					<thead>
						<tr>
							<th class="table-plus datatable-nosort">Product</th>
							<th>Name</th>
							<th>Color</th>
							<th>Size</th>
							<th>Price</th>
							<th>Oty</th>
							<th class="datatable-nosort">Action</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="table-plus">
								<img src="<?php echo base_url() ?>/assets/vendors/images/product-1.jpg" width="70" height="70" alt="">
							</td>
							<td>
								<h5 class="font-16">Shirt</h5>
								by John Doe
							</td>
							<td>Black</td>
							<td>M</td>
							<td>$1000</td>
							<td>1</td>
							<td>
								<div class="dropdown">
									<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle"  href="<?php echo base_url() ?>/assets/#" role="button" data-toggle="dropdown">
										<i class="dw dw-more"></i>
									</a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
										<a class="dropdown-item"  href="<?php echo base_url() ?>/assets/#"><i class="dw dw-eye"></i> View</a>
										<a class="dropdown-item"  href="<?php echo base_url() ?>/assets/#"><i class="dw dw-edit2"></i> Edit</a>
										<a class="dropdown-item"  href="<?php echo base_url() ?>/assets/#"><i class="dw dw-delete-3"></i> Delete</a>
									</div>
								</div>
							</td>
						</tr>
						<tr>
							<td class="table-plus">
								<img src="<?php echo base_url() ?>/assets/vendors/images/product-2.jpg" width="70" height="70" alt="">
							</td>
							<td>
								<h5 class="font-16">Boots</h5>
								by Lea R. Frith
							</td>
							<td>brown</td>
							<td>9UK</td>
							<td>$900</td>
							<td>1</td>
							<td>
								<div class="dropdown">
									<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle"  href="<?php echo base_url() ?>/assets/#" role="button" data-toggle="dropdown">
										<i class="dw dw-more"></i>
									</a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
										<a class="dropdown-item"  href="<?php echo base_url() ?>/assets/#"><i class="dw dw-eye"></i> View</a>
										<a class="dropdown-item"  href="<?php echo base_url() ?>/assets/#"><i class="dw dw-edit2"></i> Edit</a>
										<a class="dropdown-item"  href="<?php echo base_url() ?>/assets/#"><i class="dw dw-delete-3"></i> Delete</a>
									</div>
								</div>
							</td>
						</tr>
						<tr>
							<td class="table-plus">
								<img src="<?php echo base_url() ?>/assets/vendors/images/product-3.jpg" width="70" height="70" alt="">
							</td>
							<td>
								<h5 class="font-16">Hat</h5>
								by Erik L. Richards
							</td>
							<td>Orange</td>
							<td>M</td>
							<td>$100</td>
							<td>4</td>
							<td>
								<div class="dropdown">
									<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle"  href="<?php echo base_url() ?>/assets/#" role="button" data-toggle="dropdown">
										<i class="dw dw-more"></i>
									</a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
										<a class="dropdown-item"  href="<?php echo base_url() ?>/assets/#"><i class="dw dw-eye"></i> View</a>
										<a class="dropdown-item"  href="<?php echo base_url() ?>/assets/#"><i class="dw dw-edit2"></i> Edit</a>
										<a class="dropdown-item"  href="<?php echo base_url() ?>/assets/#"><i class="dw dw-delete-3"></i> Delete</a>
									</div>
								</div>
							</td>
						</tr>
						<tr>
							<td class="table-plus">
								<img src="<?php echo base_url() ?>/assets/vendors/images/product-4.jpg" width="70" height="70" alt="">
							</td>
							<td>
								<h5 class="font-16">Long Dress</h5>
								by Renee I. Hansen
							</td>
							<td>Gray</td>
							<td>L</td>
							<td>$1000</td>
							<td>1</td>
							<td>
								<div class="dropdown">
									<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle"  href="<?php echo base_url() ?>/assets/#" role="button" data-toggle="dropdown">
										<i class="dw dw-more"></i>
									</a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
										<a class="dropdown-item"  href="<?php echo base_url() ?>/assets/#"><i class="dw dw-eye"></i> View</a>
										<a class="dropdown-item"  href="<?php echo base_url() ?>/assets/#"><i class="dw dw-edit2"></i> Edit</a>
										<a class="dropdown-item"  href="<?php echo base_url() ?>/assets/#"><i class="dw dw-delete-3"></i> Delete</a>
									</div>
								</div>
							</td>
						</tr>
						<tr>
							<td class="table-plus">
								<img src="<?php echo base_url() ?>/assets/vendors/images/product-5.jpg" width="70" height="70" alt="">
							</td>
							<td>
								<h5 class="font-16">Blazer</h5>
								by Vicki M. Coleman
							</td>
							<td>Blue</td>
							<td>M</td>
							<td>$1000</td>
							<td>1</td>
							<td>
								<div class="dropdown">
									<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle"  href="<?php echo base_url() ?>/assets/#" role="button" data-toggle="dropdown">
										<i class="dw dw-more"></i>
									</a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
										<a class="dropdown-item"  href="<?php echo base_url() ?>/assets/#"><i class="dw dw-eye"></i> View</a>
										<a class="dropdown-item"  href="<?php echo base_url() ?>/assets/#"><i class="dw dw-edit2"></i> Edit</a>
										<a class="dropdown-item"  href="<?php echo base_url() ?>/assets/#"><i class="dw dw-delete-3"></i> Delete</a>
									</div>
								</div>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="footer-wrap pd-20 mb-20 card-box">
				DeskApp - Bootstrap 4 Admin Template By <a  href="https://github.com/dropways" target="_blank">Ankit Hingarajiya</a>
			</div>
		</div>
	</div>
	<!-- js -->
	<script src="<?php echo base_url() ?>/assets/vendors/scripts/core.js"></script>
	<script src="<?php echo base_url() ?>/assets/vendors/scripts/script.min.js"></script>
	<script src="<?php echo base_url() ?>/assets/vendors/scripts/process.js"></script>
	<script src="<?php echo base_url() ?>/assets/vendors/scripts/layout-settings.js"></script>
	<script src="<?php echo base_url() ?>/assets/src/plugins/apexcharts/apexcharts.min.js"></script>
	<script src="<?php echo base_url() ?>/assets/src/plugins/datatables/js/jquery.dataTables.min.js"></script>
	<script src="<?php echo base_url() ?>/assets/src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
	<script src="<?php echo base_url() ?>/assets/src/plugins/datatables/js/dataTables.responsive.min.js"></script>
	<script src="<?php echo base_url() ?>/assets/src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
	<script src="<?php echo base_url() ?>/assets/vendors/scripts/dashboard.js"></script>
</body>
</html>