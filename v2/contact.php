<?php include('serverV1.php');?>
<!DOCTYPE html>
<html lang="en">
	<!--begin::Head-->
	<head><base href="">
		<meta charset="utf-8" />
		<title>Mongolian Mathematical Society</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		<meta property="fb:app_id"             content="467598577547586" />
		<meta property="og:url"                content="<?php echo $actual_link; ?>" />
		<meta property="og:type"               content="article" />
		<meta property="og:title"              content="Mongolian Mathematical Society " />
		<meta property="og:description"        content="Монголын математикийн нийгэмлэг" />
		<meta property="og:image"              content="<?php echo $host_url; ?>share.jpg" />
		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600&display=swap" rel="stylesheet">
		<!--end::Fonts-->
		<!--begin::Page Vendors Styles(used by this page)-->
		<link href="assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/custom/leaflet/leaflet.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Page Vendors Styles-->
		<!--begin::Global Theme Styles(used by all pages)-->
		<link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="assets/plugins/custom/prismjs/prismjs.bundle.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/add.css" rel="stylesheet" type="text/css" />
		<!--end::Global Theme Styles-->
		<!--begin::Layout Themes(used by all pages)-->
		<!--end::Layout Themes-->
		<link rel="shortcut icon" href="assets/media/logos/favicon.png" />
		<script src="https://polyfill.io/v3/polyfill.min.js?features=es6"></script>
		<script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>
		<?php echo $head_form; ?>
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" style="background-image: url(assets/media/bg/bg-10.jpg)" class="quick-panel-right demo-panel-right offcanvas-right header-fixed subheader-enabled page-loading">
		<!--begin::Main-->
		<!--begin::Header Mobile-->
		<div id="kt_header_mobile" class="header-mobile">
			<!--begin::Logo-->
			<a href="1">
				<img alt="Logo" src="assets/media/logos/favicon.png" class="logo-default max-h-30px" />
				<span class="pr-2 logo-default max-h-30px" style="color: #ffffff;    font-weight: 500;"> Mongolian Mathematical Society</span>
			</a>
			<!--end::Logo-->
			<!--begin::Toolbar-->
			<div class="d-flex align-items-center">
				<button class="btn p-0 burger-icon burger-icon-left ml-4" id="kt_header_mobile_toggle">
					<span></span>
				</button>
				<button class="btn btn-icon btn-hover-transparent-white p-0 ml-3" id="kt_header_mobile_topbar_toggle">
					<span class="svg-icon svg-icon-xl">
						<!--begin::Svg Icon | path:assets/media/svg/icons/General/User.svg-->
						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
							<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
								<polygon points="0 0 24 0 24 24 0 24" />
								<path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
								<path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
							</g>
						</svg>
						<!--end::Svg Icon-->
					</span>
				</button>
			</div>
			<!--end::Toolbar-->
		</div>
		<!--end::Header Mobile-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Page-->
			<div class="d-flex flex-row flex-column-fluid page">
				<!--begin::Wrapper-->
				<div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
					<!--begin::Header-->
					<div id="kt_header" class="header header-fixed">
						<!--begin::Container-->
						<div class="container d-flex align-items-stretch justify-content-between">
							<!--begin::Left-->
							<div class="d-flex align-items-stretch mr-3">
								<!--begin::Header Logo-->
								<div class="header-logo">
									<a href="1">
										<img alt="Logo" src="assets/media/logos/favicon.png" class="logo-default max-h-40px" />
										<span class="pr-2 " style="color: #ffffff;    font-weight: 500;"> Mongolian Mathematical Society</span>
										<img alt="Logo" src="assets/media/logos/favicon.png" class="logo-sticky max-h-40px" />
										<span class="pr-2 logo-sticky max-h-40px" style="color: #80808F;    font-weight: 500;"> Mongolian Mathematical Society</span>
									</a>
								</div>
								<!--end::Header Logo-->
								<!--begin::Header Menu Wrapper-->
								<div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">
									<!--begin::Header Menu-->
									<div id="kt_header_menu" class="header-menu header-menu-left header-menu-mobile header-menu-layout-default">
										<!--begin::Header Nav-->
										<ul class="menu-nav">
                      <?php
                        $results = mysqli_query($db, "SELECT * FROM menu");
                       ?>
                       <?php while ($row = mysqli_fetch_array($results)) { ?>
                         <?php if($row['url']==1){
                            echo'<li class="menu-item menu-item-open menu-item-here menu-item-submenu menu-item-rel menu-item-open menu-item-here" data-menu-toggle="click" aria-haspopup="true">';
                          }else{
                             echo' <li class="menu-item menu-item-submenu menu-item-rel" data-menu-toggle="click" aria-haspopup="true">';
                           } ?>
                         <?php
                          $one_id=$row['id'];
                          $record = mysqli_query($db, "SELECT * FROM sub_menu WHERE key_id=$one_id");
                          if (@mysqli_num_rows($record) >= 1 ){ ?>
                            <a href="javascript:;" class="menu-link menu-toggle">
                              <span class="menu-text text-center"><?php echo $row['mon_name'];  ?></span>
                              <i class="menu-arrow"></i>
                            </a>
                            <div class="menu-submenu menu-submenu-classic menu-submenu-left">
                              <ul class="menu-subnav">
                            <?php
                            while ($row = mysqli_fetch_array($record )) { ?>
                              <li class="menu-item" aria-haspopup="true">
                                <a target="_blank" href="<?php echo $row['url'];  ?>" class="menu-link">
                                  <span class="menu-text"><?php echo $row['mon_name'];  ?></span>
                                  <span class="menu-desc"></span>
                                </a>
                              </li>
                            <?php  } ?>
                              </ul>
                            </div>
                          <?php
                        } else { ?>
                          <a href="<?php echo $row['url'];  ?>" class="menu-link ">
                            <span class="menu-text text-center"><?php echo $row['mon_name'];  ?></span>
                            <i class="menu-arrow"></i>
                          </a>
                        <?php  } ?>
                        </li>
                       <?php } ?>
										</ul>
										<!--end::Header Nav-->
									</div>
									<!--end::Header Menu-->
								</div>
								<!--end::Header Menu Wrapper-->
							</div>
							<!--end::Left-->
							<!--begin::Topbar-->
							<div class="topbar">
								<!--begin::Search-->
								<div class="dropdown">
									<!--begin::Toggle-->
									<div class="topbar-item" data-toggle="dropdown" data-offset="10px,0px">
										<div class="btn btn-icon btn-hover-transparent-white btn-lg btn-dropdown mr-1">
											<span class="svg-icon svg-icon-xl">
												<!--begin::Svg Icon | path:assets/media/svg/icons/General/Search.svg-->
												<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
													<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
														<rect x="0" y="0" width="24" height="24" />
														<path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
														<path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero" />
													</g>
												</svg>
												<!--end::Svg Icon-->
											</span>
										</div>
									</div>
									<!--end::Toggle-->
									<!--begin::Dropdown-->
									<div class="dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-anim-up dropdown-menu-lg">
										<div class="quick-search quick-search-dropdown" id="kt_quick_search_dropdown">
											<!--begin:Form-->
											<form method="get" class="quick-search-form">
												<div class="input-group">
													<div class="input-group-prepend">
														<span class="input-group-text">
															<span class="svg-icon svg-icon-lg">
																<!--begin::Svg Icon | path:assets/media/svg/icons/General/Search.svg-->
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect x="0" y="0" width="24" height="24" />
																		<path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
																		<path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero" />
																	</g>
																</svg>
																<!--end::Svg Icon-->
															</span>
														</span>
													</div>
													<input type="text" class="form-control" placeholder="Хайх..." />
													<div class="input-group-append">
														<span class="input-group-text">
															<i class="quick-search-close ki ki-close icon-sm text-muted"></i>
														</span>
													</div>
												</div>
											</form>
											<!--end::Form-->
											<!--begin::Scroll-->
											<div class="quick-search-wrapper scroll" data-scroll="true" data-height="325" data-mobile-height="200"></div>
											<!--end::Scroll-->
										</div>
									</div>
									<!--end::Dropdown-->
								</div>
								<!--end::Search-->
								<!--begin::Languages-->
								<div class="dropdown">
									<!--begin::Toggle-->
									<div class="topbar-item" data-toggle="dropdown" data-offset="10px,0px">
										<div class="btn btn-icon btn-hover-transparent-white btn-dropdown btn-lg mr-1">
											<img class="h-20px w-20px rounded-sm" src="assets/media/svg/flags/226-united-states.svg" alt="" />
										</div>
									</div>
									<!--end::Toggle-->
									<!--begin::Dropdown-->
									<div class="dropdown-menu p-0 m-0 dropdown-menu-anim-up dropdown-menu-sm dropdown-menu-right">
										<!--begin::Nav-->
										<ul class="navi navi-hover py-4">
											<!--begin::Item-->
											<li class="navi-item">
												<a href="#" class="navi-link">
													<span class="symbol symbol-20 mr-3">
														<img src="assets/media/svg/flags/226-united-states.svg" alt="" />
													</span>
													<span class="navi-text">English</span>
												</a>
											</li>
											<!--end::Item-->
											<!--begin::Item-->
											<li class="navi-item active">
												<a href="#" class="navi-link">
													<span class="symbol symbol-20 mr-3">
														<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/4c/Flag_of_Mongolia.svg/800px-Flag_of_Mongolia.svg.png" alt="" />
													</span>
													<span class="navi-text">Монгол</span>
												</a>
											</li>
											<!--end::Item-->
										</ul>
										<!--end::Nav-->
									</div>
									<!--end::Dropdown-->
								</div>
								<!--end::Languages-->
							<?php  include('container/user.php'); ?>
							</div>
							<!--end::Topbar-->
						</div>
						<!--end::Container-->
					</div>
					<!--end::Header-->
					<!--begin::Content-->
					<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
						<!--begin::Subheader-->
						<div class="subheader min-h-lg-175px pt-5 pb-7 subheader-transparent" id="kt_subheader">
							<div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
								<!--begin::Details-->
								<div class="d-flex align-items-center flex-wrap mr-2">
									<!--begin::Heading-->
									<div class="d-flex flex-column">
										<!--begin::Title-->
										<h2 class="text-white font-weight-bold my-2 mr-5">ТУХАЙ</h2>
										<!--end::Title-->
										<!--begin::Breadcrumb-->
										<div class="d-flex align-items-center font-weight-bold my-2">
											<!--begin::Item-->
											<a href="#" class="opacity-75 hover-opacity-100">
												<i class="flaticon2-shelter text-white icon-1x"></i>
											</a>
											<!--end::Item-->
											<!--begin::Item-->
											<span class="label label-dot label-sm bg-white opacity-75 mx-3"></span>
											<a href="" class="text-white text-hover-white opacity-75 hover-opacity-100">Вэб</a>
											<!--end::Item-->
											<!--begin::Item-->
											<span class="label label-dot label-sm bg-white opacity-75 mx-3"></span>
											<a href="" class="text-white text-hover-white opacity-75 hover-opacity-100">Тухай</a>
											<!--end::Item-->
										</div>
										<!--end::Breadcrumb-->
									</div>
									<!--end::Heading-->
								</div>
								<!--end::Details-->
							</div>
						</div>
						<!--end::Subheader-->
						<!--begin::Entry-->
						<div class="d-flex flex-column-fluid">
							<!--begin::Container-->
							<div class="container">
								<!--begin::Dashboard-->
                <div class="row">
                  <div class="col-xl-4">
                    <div class="col-xl-12 card card-custom  text-center p-5">
											<div id="fb-root" ></div>
											<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v8.0&appId=521290251871606&autoLogAppEvents=1" nonce="1sMdvOtE"></script>
											<div class="fb-page" data-href="https://www.facebook.com/MongolianMathematicalSociety/" data-tabs="timeline" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" ><blockquote cite="https://www.facebook.com/MongolianMathematicalSociety/" class="fb-xfbml-parse-ignore" ><a href="https://www.facebook.com/MongolianMathematicalSociety/">Монголын Математикийн Нийгэмлэг</a></blockquote></div>
										</div>
                  </div>
                  <div class="col-xl-8 ">
                    <div id="kt_leaflet_4" style="height:500px;" class="img-thumbnail "></div>
                    <div class="row pt-5">
      								<div class="col-lg-4 ">
      									<!--begin::Card-->
      									<a href="#" class="card card-custom wave wave-animate-slow bg-grey-100 mb-8 mb-lg-0">
      										<!--begin::Card Body-->
      										<div class="card-body">
      											<div class="d-flex align-items-center p-6">
      												<!--begin::Icon-->
      												<div class="mr-6">
                                <span class="svg-icon svg-icon-primary svg-icon-2x"><!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo2\dist/../src/media/svg/icons\Communication\Active-call.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24"/>
                                        <path d="M13.0799676,14.7839934 L15.2839934,12.5799676 C15.8927139,11.9712471 16.0436229,11.0413042 15.6586342,10.2713269 L15.5337539,10.0215663 C15.1487653,9.25158901 15.2996742,8.3216461 15.9083948,7.71292558 L18.6411989,4.98012149 C18.836461,4.78485934 19.1530435,4.78485934 19.3483056,4.98012149 C19.3863063,5.01812215 19.4179321,5.06200062 19.4419658,5.11006808 L20.5459415,7.31801948 C21.3904962,9.0071287 21.0594452,11.0471565 19.7240871,12.3825146 L13.7252616,18.3813401 C12.2717221,19.8348796 10.1217008,20.3424308 8.17157288,19.6923882 L5.75709327,18.8875616 C5.49512161,18.8002377 5.35354162,18.5170777 5.4408655,18.2551061 C5.46541191,18.1814669 5.50676633,18.114554 5.56165376,18.0596666 L8.21292558,15.4083948 C8.8216461,14.7996742 9.75158901,14.6487653 10.5215663,15.0337539 L10.7713269,15.1586342 C11.5413042,15.5436229 12.4712471,15.3927139 13.0799676,14.7839934 Z" fill="#000000"/>
                                        <path d="M14.1480759,6.00715131 L13.9566988,7.99797396 C12.4781389,7.8558405 11.0097207,8.36895892 9.93933983,9.43933983 C8.8724631,10.5062166 8.35911588,11.9685602 8.49664195,13.4426352 L6.50528978,13.6284215 C6.31304559,11.5678496 7.03283934,9.51741319 8.52512627,8.02512627 C10.0223249,6.52792766 12.0812426,5.80846733 14.1480759,6.00715131 Z M14.4980938,2.02230302 L14.313049,4.01372424 C11.6618299,3.76737046 9.03000738,4.69181803 7.1109127,6.6109127 C5.19447112,8.52735429 4.26985715,11.1545872 4.51274152,13.802405 L2.52110319,13.985098 C2.22450978,10.7517681 3.35562581,7.53777247 5.69669914,5.19669914 C8.04101739,2.85238089 11.2606138,1.72147333 14.4980938,2.02230302 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                                    </g>
                                </svg><!--end::Svg Icon--></span>
      												</div>
      												<!--end::Icon-->
      												<!--begin::Content-->
      												<div class="d-flex flex-column">
      													<h3 class="text-dark h3 mb-3">Phone</h3>
      													<div class="text-dark-50">+976 0000000</div>
      												</div>
      												<!--end::Content-->
      											</div>
      										</div>
      										<!--end::Card Body-->
      									</a>
      									<!--end::Card-->
      								</div>
      								<div class="col-lg-4">
      									<!--begin::Card-->
      									<a href="#" class="card card-custom wave wave-animate bg-grey-100 mb-8 mb-lg-0">
      										<!--begin::Card Body-->
      										<div class="card-body">
      											<div class="d-flex align-items-center p-6">
      												<!--begin::Icon-->
      												<div class="mr-6">
                                <span class="svg-icon svg-icon-primary svg-icon-2x"><!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo2\dist/../src/media/svg/icons\Communication\Mail-attachment.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24"/>
                                        <path d="M14.8571499,13 C14.9499122,12.7223297 15,12.4263059 15,12.1190476 L15,6.88095238 C15,5.28984632 13.6568542,4 12,4 L11.7272727,4 C10.2210416,4 9,5.17258756 9,6.61904762 L10.0909091,6.61904762 C10.0909091,5.75117158 10.823534,5.04761905 11.7272727,5.04761905 L12,5.04761905 C13.0543618,5.04761905 13.9090909,5.86843034 13.9090909,6.88095238 L13.9090909,12.1190476 C13.9090909,12.4383379 13.8240964,12.7385644 13.6746497,13 L10.3253503,13 C10.1759036,12.7385644 10.0909091,12.4383379 10.0909091,12.1190476 L10.0909091,9.5 C10.0909091,9.06606198 10.4572216,8.71428571 10.9090909,8.71428571 C11.3609602,8.71428571 11.7272727,9.06606198 11.7272727,9.5 L11.7272727,11.3333333 L12.8181818,11.3333333 L12.8181818,9.5 C12.8181818,8.48747796 11.9634527,7.66666667 10.9090909,7.66666667 C9.85472911,7.66666667 9,8.48747796 9,9.5 L9,12.1190476 C9,12.4263059 9.0500878,12.7223297 9.14285008,13 L6,13 C5.44771525,13 5,12.5522847 5,12 L5,3 C5,2.44771525 5.44771525,2 6,2 L18,2 C18.5522847,2 19,2.44771525 19,3 L19,12 C19,12.5522847 18.5522847,13 18,13 L14.8571499,13 Z" fill="#000000" opacity="0.3"/>
                                        <path d="M9,10.3333333 L9,12.1190476 C9,13.7101537 10.3431458,15 12,15 C13.6568542,15 15,13.7101537 15,12.1190476 L15,10.3333333 L20.2072547,6.57253826 C20.4311176,6.4108595 20.7436609,6.46126971 20.9053396,6.68513259 C20.9668779,6.77033951 21,6.87277228 21,6.97787787 L21,17 C21,18.1045695 20.1045695,19 19,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,6.97787787 C3,6.70173549 3.22385763,6.47787787 3.5,6.47787787 C3.60510559,6.47787787 3.70753836,6.51099993 3.79274528,6.57253826 L9,10.3333333 Z M10.0909091,11.1212121 L12,12.5 L13.9090909,11.1212121 L13.9090909,12.1190476 C13.9090909,13.1315697 13.0543618,13.952381 12,13.952381 C10.9456382,13.952381 10.0909091,13.1315697 10.0909091,12.1190476 L10.0909091,11.1212121 Z" fill="#000000"/>
                                    </g>
                                </svg><!--end::Svg Icon--></span>
      												</div>
      												<!--end::Icon-->
      												<!--begin::Content-->
      												<div class="d-flex flex-column">
      													<h3 class="text-dark h3 mb-3">Email</h3>
      													<div class="text-dark-50">info@mathsoc.mn</div>
      												</div>
      												<!--end::Content-->
      											</div>
      										</div>
      										<!--end::Card Body-->
      									</a>
      									<!--end::Card-->
      								</div>
      								<div class="col-lg-4">
      									<!--begin::Card-->
      									<a href="#" class="card card-custom wave wave-animate-fast bg-grey-100">
      										<!--begin::Card Body-->
      										<div class="card-body">
      											<div class="d-flex align-items-center p-6">
      												<!--begin::Icon-->
      												<div class="mr-6">
                                <span class="svg-icon svg-icon-primary svg-icon-2x"><!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo2\dist/../src/media/svg/icons\Map\Marker1.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24"/>
                                        <path d="M5,10.5 C5,6 8,3 12.5,3 C17,3 20,6.75 20,10.5 C20,12.8325623 17.8236613,16.03566 13.470984,20.1092932 C12.9154018,20.6292577 12.0585054,20.6508331 11.4774555,20.1594925 C7.15915182,16.5078313 5,13.2880005 5,10.5 Z M12.5,12 C13.8807119,12 15,10.8807119 15,9.5 C15,8.11928813 13.8807119,7 12.5,7 C11.1192881,7 10,8.11928813 10,9.5 C10,10.8807119 11.1192881,12 12.5,12 Z" fill="#000000" fill-rule="nonzero"/>
                                    </g>
                                </svg><!--end::Svg Icon--></span>
      												</div>
      												<!--end::Icon-->
      												<!--begin::Content-->
      												<div class="d-flex flex-column">
      													<h3 class="text-dark h3 mb-3">Address</h3>
      													<div class="text-dark-50">Mongolia, Ulaanbaatar</div>
      												</div>
      												<!--end::Content-->
      											</div>
      										</div>
      										<!--end::Card Body-->
      									</a>
      									<!--end::Card-->
      								</div>
      							</div>
                  </div>
                </div>
								<!--end::Dashboard-->
							</div>
							<!--end::Container-->
						</div>
						<!--end::Entry-->
					</div>
					<!--end::Content-->
					<!--begin::Footer-->
					<div class="footer bg-white py-4 d-flex flex-lg-column" id="kt_footer">
						<!--begin::Container-->
						<div class="container d-flex flex-column flex-md-row align-items-center justify-content-between">
							<!--begin::Copyright-->
							<div class="text-dark order-2 order-md-1">
								<span class="text-muted font-weight-bold mr-2" id="footer_date"></span>
								<a href="#" target="_blank" class="text-dark-75 text-hover-primary">MATHSOC.MN</a>
							</div>
							<!--end::Copyright-->
							<!--begin::Nav-->
							<div class="nav nav-dark order-1 order-md-2">
								<a href="<?php echo $host_url; ?>about.php" target="_blank" class="nav-link pr-3 pl-0">Тухай</a>
								<a href="<?php echo $host_url; ?>contact.php" target="_blank" class="nav-link px-3">Холбоо барих</a>
								<a href="https://www.facebook.com/togtokh0" target="_blank" class="nav-link pl-3 pr-0">Вэб сайт хөгжүүлэлт</a>
							</div>
							<!--end::Nav-->
						</div>
						<!--end::Container-->
					</div>
					<!--end::Footer-->
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Page-->
		</div>
		<!--end::Main-->
		<!--begin::Quick Panel-->
		<?php // include('container/file_click.php'); ?>
		<!--end::Quick Panel-->
		<!--begin::Scrolltop-->
		<div id="kt_scrolltop" class="scrolltop">
			<span class="svg-icon">
				<!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Up-2.svg-->
				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
						<polygon points="0 0 24 0 24 24 0 24" />
						<rect fill="#000000" opacity="0.3" x="11" y="10" width="2" height="10" rx="1" />
						<path d="M6.70710678,12.7071068 C6.31658249,13.0976311 5.68341751,13.0976311 5.29289322,12.7071068 C4.90236893,12.3165825 4.90236893,11.6834175 5.29289322,11.2928932 L11.2928932,5.29289322 C11.6714722,4.91431428 12.2810586,4.90106866 12.6757246,5.26284586 L18.6757246,10.7628459 C19.0828436,11.1360383 19.1103465,11.7686056 18.7371541,12.1757246 C18.3639617,12.5828436 17.7313944,12.6103465 17.3242754,12.2371541 L12.0300757,7.38413782 L6.70710678,12.7071068 Z" fill="#000000" fill-rule="nonzero" />
					</g>
				</svg>
				<!--end::Svg Icon-->
			</span>
		</div>
		<!--end::Scrolltop-->
		<!--begin::Sticky Toolbar-->
		<ul class="sticky-toolbar nav flex-column pl-2 pr-2 pt-3 pb-3 mt-4">
			<!--begin::Item-->
			<li class="nav-item pb-1" id="kt_sticky_toolbar_chat_toggler" data-toggle="tooltip" title="Share to facebook" data-placement="left">
				<a class="btn btn-sm btn-icon btn-bg-light btn-text-primary btn-hover-primary"   id="share_fb">
					<i class="flaticon-facebook-letter-logo"></i>
				</a>
			</li>
			<!--end::Item-->
			<!--begin::Item-->
			<li class="nav-item" id="kt_sticky_toolbar_chat_toggler" data-toggle="tooltip" title="Share to twitter" data-placement="left">
				<a class="btn btn-sm btn-icon btn-bg-light btn-text-info btn-hover-info"   id="share_tw">
					<i class="flaticon-twitter-logo"></i>
				</a>
			</li>
			<!--end::Item-->
		</ul>
		<!--end::Sticky Toolbar-->
		<script>var HOST_URL = "<?php echo $host_url; ?>";</script>
		<!--begin::Global Config(global config for global JS scripts)-->
		<script>var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1200 }, "colors": { "theme": { "base": { "white": "#ffffff", "primary": "#6993FF", "secondary": "#E5EAEE", "success": "#1BC5BD", "info": "#8950FC", "warning": "#FFA800", "danger": "#F64E60", "light": "#F3F6F9", "dark": "#212121" }, "light": { "white": "#ffffff", "primary": "#E1E9FF", "secondary": "#ECF0F3", "success": "#C9F7F5", "info": "#EEE5FF", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" }, "inverse": { "white": "#ffffff", "primary": "#ffffff", "secondary": "#212121", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } }, "gray": { "gray-100": "#F3F6F9", "gray-200": "#ECF0F3", "gray-300": "#E5EAEE", "gray-400": "#D6D6E0", "gray-500": "#B5B5C3", "gray-600": "#80808F", "gray-700": "#464E5F", "gray-800": "#1B283F", "gray-900": "#212121" } }, "font-family": "Poppins" };</script>
		<!--end::Global Config-->
		<!--begin::Global Theme Bundle(used by all pages)-->
		<script src="assets/plugins/global/plugins.bundle.js"></script>
		<script src="assets/plugins/custom/prismjs/prismjs.bundle.js"></script>
		<script src="assets/js/scripts.bundle.js"></script>
		<!--end::Global Theme Bundle-->
		<!--begin::Page Vendors(used by this page)-->
		<script src="assets/plugins/custom/datatables/datatables.bundle.js"></script>
		<!--end::Page Vendors-->
		<!--begin::Page Scripts(used by this page)-->
		<script src="assets/js/pages/crud/datatables/data-sources/html.js"></script>
		<!--end::Page Vendors-->
		<!--begin::Page Scripts(used by this page)-->
		<script src="assets/js/pages/widgets.js"></script>
    <script src="assets/plugins/custom/leaflet/leaflet.bundle.js"></script>
		<script type="text/javascript">
    var d = new Date();
    document.getElementById("footer_date").innerHTML = d.getFullYear()+" ©";
		$('#share_fb').click(function() {
			var facebookWindow = window.open('https://www.facebook.com/sharer/sharer.php?u=' + document.URL, 'facebook-popup', 'height=350,width=600');
			if(facebookWindow.focus) { facebookWindow.focus(); }
		});
		$('#share_tw').click(function() {
			var twitterWindow = window.open('https://twitter.com/share?url=' + document.URL, 'twitter-popup', 'height=350,width=600');
			if(twitterWindow.focus) { twitterWindow.focus(); }
		});
		</script>
    <script type="text/javascript">
	"use strict";

	// Class definition
	var KTLeaflet = function () {


		var demo4 = function () {
			// define leaflet
			var leaflet = L.map('kt_leaflet_4', {
				center: [47.918739, 106.917656],
				zoom: 13
			})

			// set leaflet tile layer
			L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
				attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a>'
			}).addTo(leaflet);

			// set custom SVG icon marker
			var leafletIcon = L.divIcon({
				html: `<span class="svg-icon svg-icon-danger svg-icon-3x"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="24" width="24" height="0"/><path d="M5,10.5 C5,6 8,3 12.5,3 C17,3 20,6.75 20,10.5 C20,12.8325623 17.8236613,16.03566 13.470984,20.1092932 C12.9154018,20.6292577 12.0585054,20.6508331 11.4774555,20.1594925 C7.15915182,16.5078313 5,13.2880005 5,10.5 Z M12.5,12 C13.8807119,12 15,10.8807119 15,9.5 C15,8.11928813 13.8807119,7 12.5,7 C11.1192881,7 10,8.11928813 10,9.5 C10,10.8807119 11.1192881,12 12.5,12 Z" fill="#000000" fill-rule="nonzero"/></g></svg></span>`,
				bgPos: [10, 10],
				iconAnchor: [20, 37],
				popupAnchor: [0, -37],
				className: 'leaflet-marker'
			});

			// bind marker with popup
			var marker = L.marker([47.918739, 106.917656], { icon: leafletIcon }).addTo(leaflet);

			// set circle polygon
			var circle = L.circle([47.935360, 106.844529], {
				color: '#4A7DFF',
				fillColor: '#6993FF',
				fillOpacity: 0.5,
				radius: 700
			}).addTo(leaflet);

			// set polygon
			var polygon = L.polygon([
				[47.919185, 106.916584],
				[47.919386, 106.918470],
				[47.918044, 106.917821]
			]).addTo(leaflet);
		}


		return {
			// public functions
			init: function () {
				// default charts

				demo4();
			}
		};
	}();

	jQuery(document).ready(function () {
		KTLeaflet.init();
	});

	</script>
		<!--end::Page Scripts-->
	</body>
	<!--end::Body-->
</html>
