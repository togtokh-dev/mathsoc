<?php include('serverV1.php');
if (!isLoggedIn()) {
	header('location: login.php');
} ?>
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
										<h2 class="text-white font-weight-bold my-2 mr-5">Хэрэглэгчийн мэдээлэл</h2>
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
											<a href="" class="text-white text-hover-white opacity-75 hover-opacity-100">Хэрэглэгч</a>
											<!--end::Item-->
											<!--begin::Item-->
											<span class="label label-dot label-sm bg-white opacity-75 mx-3"></span>
											<a href="" class="text-white text-hover-white opacity-75 hover-opacity-100">Хэрэглэгчийн мэдээлэл</a>
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
                <div class="card card-custom">
									<!--begin::Card header-->
									<div class="card-header card-header-tabs-line nav-tabs-line-3x">
										<!--begin::Toolbar-->
										<div class="card-toolbar">
											<ul class="nav nav-tabs nav-bold nav-tabs-line nav-tabs-line-3x">
												<!--begin::Item-->
												<li class="nav-item mr-3">
													<a class="nav-link active" data-toggle="tab" href="#kt_user_edit_tab_1">
														<span class="nav-icon">
															<span class="svg-icon">
																<!--begin::Svg Icon | path:assets/media/svg/icons/Design/Layers.svg-->
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<polygon points="0 0 24 0 24 24 0 24"></polygon>
																		<path d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z" fill="#000000" fill-rule="nonzero"></path>
																		<path d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z" fill="#000000" opacity="0.3"></path>
																	</g>
																</svg>
																<!--end::Svg Icon-->
															</span>
														</span>
														<span class="nav-text font-size-lg">Профайл</span>
													</a>
												</li>
												<!--end::Item-->
												<!--begin::Item-->
												<li class="nav-item mr-3">
													<a class="nav-link" data-toggle="tab" href="#kt_user_edit_tab_2">
														<span class="nav-icon">
															<span class="svg-icon">
																<!--begin::Svg Icon | path:assets/media/svg/icons/General/User.svg-->
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<polygon points="0 0 24 0 24 24 0 24"></polygon>
																		<path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
																		<path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero"></path>
																	</g>
																</svg>
																<!--end::Svg Icon-->
															</span>
														</span>
														<span class="nav-text font-size-lg">Гишүүнчлэлийн төлөв</span>
													</a>
												</li>
												<!--end::Item-->
												<!--begin::Item-->
												<li class="nav-item mr-3">
													<a class="nav-link" data-toggle="tab" href="#kt_user_edit_tab_3">
														<span class="nav-icon">
															<span class="svg-icon">
																<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Shield-user.svg-->
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect x="0" y="0" width="24" height="24"></rect>
																		<path d="M4,4 L11.6314229,2.5691082 C11.8750185,2.52343403 12.1249815,2.52343403 12.3685771,2.5691082 L20,4 L20,13.2830094 C20,16.2173861 18.4883464,18.9447835 16,20.5 L12.5299989,22.6687507 C12.2057287,22.8714196 11.7942713,22.8714196 11.4700011,22.6687507 L8,20.5 C5.51165358,18.9447835 4,16.2173861 4,13.2830094 L4,4 Z" fill="#000000" opacity="0.3"></path>
																		<path d="M12,11 C10.8954305,11 10,10.1045695 10,9 C10,7.8954305 10.8954305,7 12,7 C13.1045695,7 14,7.8954305 14,9 C14,10.1045695 13.1045695,11 12,11 Z" fill="#000000" opacity="0.3"></path>
																		<path d="M7.00036205,16.4995035 C7.21569918,13.5165724 9.36772908,12 11.9907452,12 C14.6506758,12 16.8360465,13.4332455 16.9988413,16.5 C17.0053266,16.6221713 16.9988413,17 16.5815,17 C14.5228466,17 11.463736,17 7.4041679,17 C7.26484009,17 6.98863236,16.6619875 7.00036205,16.4995035 Z" fill="#000000" opacity="0.3"></path>
																	</g>
																</svg>
																<!--end::Svg Icon-->
															</span>
														</span>
														<span class="nav-text font-size-lg">Нууц үг солих</span>
													</a>
												</li>
												<!--end::Item-->
											</ul>
										</div>
										<!--end::Toolbar-->
									</div>
									<!--end::Card header-->
									<!--begin::Card body-->
									<div class="card-body px-0">
										<form class="form" id="kt_form" action="profile.php" method="post">
											<div class="tab-content">
												<!--begin::Tab-->
												<div class="tab-pane show active px-7" id="kt_user_edit_tab_1" role="tabpanel">
													<!--begin::Row-->
													<div class="row">
														<div class="col-xl-2"></div>
														<?php
														unset($_SESSION['access_token']);
														if(isset($_GET['code']))
														{
														 if(isset($_SESSION['access_token']))
														 {
														  $access_token = $_SESSION['access_token'];
														 }
														 else
														 {
														  $access_token = $facebook_helper->getAccessToken();

														  $_SESSION['access_token'] = $access_token;

														  $facebook->setDefaultAccessToken($_SESSION['access_token']);
														 }

														 $graph_response = $facebook->get("/me?fields=name,email", $access_token);

														 $facebook_user_info = $graph_response->getGraphUser();
														$image ='';
														$name ='';
														$email ='';
														$fb_id='';

														 if(!empty($facebook_user_info['id']))
														 {
															 $fb_id=$facebook_user_info['id'];
														  $image = 'http://graph.facebook.com/'.$facebook_user_info['id'].'/picture';
														 }

														 if(!empty($facebook_user_info['name']))
														 {
														  $name = $facebook_user_info['name'];
														 }

														 if(!empty($facebook_user_info['email']))
														 {
														  $email = $facebook_user_info['email'];
														 }
														mysqli_query($db, "UPDATE users_1 SET fb_id='$fb_id' , fb_name='$name' ,photo='$image' WHERE user_id='$user_id'");
														$_SESSION['user_mms']['photo']=$image;
														$_SESSION['user_mms']['fb_name']=$name;
														}
														if (isset($_POST['update'])) {
															if($_SESSION['user_mms']['email_active']==1){
																$bio = $_POST['bio'];
																mysqli_query($db, "UPDATE users_1 SET bio='$bio' WHERE user_id='$user_id'");
																$_SESSION['user_mms']['bio']=$bio;
															}else {
																$owog = $_POST['owog'];
																$ner = $_POST['ner'];
																$phone = $_POST['phone'];
																$mail = $_POST['e_mail'];
																$bio = $_POST['bio'];
																mysqli_query($db, "UPDATE users_1 SET f_name='$owog', l_name='$ner', phone='$phone',r_email='$mail',bio='$bio',email_active=1 WHERE user_id='$user_id'");
																$_SESSION['user_mms']['f_name']=$owog;
																$_SESSION['user_mms']['l_name']=$ner;
																$_SESSION['user_mms']['phone']=$phone;
																$_SESSION['user_mms']['r_email']=$mail;
																$_SESSION['user_mms']['bio']=$bio;
																$_SESSION['user_mms']['email_active']=1;
															}

														}
															 ?>
														<div class="col-xl-7 my-2">
															<!--begin::Row-->
															<div class="row">
																<label class="col-3"></label>
																<div class="col-9">
																	<h6 class="text-dark font-weight-bold mb-10">Хэрэглэгчийн мэдээлэл:</h6>
																</div>
															</div>
															<!--end::Row-->
															<!--begin::Group-->
															<div class="form-group row">
																<label class="col-form-label col-3 text-lg-right text-left">Хөрөг :</label>
																<div class="col-9">
																	<div class="image-input image-input-empty image-input-outline" id="kt_user_edit_avatar" style="<?php if($_SESSION['user_mms']['photo']=='img_null'){
													          echo "background-image:url('".$host_url."uploads/logo.png')";
													        }else{
													          echo "background-image:url('".$_SESSION['user_mms']['photo']."')";
													        } ?>">
																		<div class="image-input-wrapper"></div>
																		<label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
																			<i class="fa fa-pen icon-sm text-muted"></i>
																			<input type="file" name="profile_avatar" accept=".png, .jpg, .jpeg">
																			<input type="hidden" name="profile_avatar_remove">
																		</label>
																		<span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="" data-original-title="Cancel avatar">
																			<i class="ki ki-bold-close icon-xs text-muted"></i>
																		</span>
																		<span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="remove" data-toggle="tooltip" title="" data-original-title="Remove avatar">
																			<i class="ki ki-bold-close icon-xs text-muted"></i>
																		</span>
																	</div>
																</div>
															</div>
															<!--end::Group-->
															<div class="form-group row">
																<label class="col-form-label col-3 text-lg-right text-left">FB : </label>
																<div class="col-9">
																<?php if($_SESSION['user_mms']['fb_name'] == ''){ ?>
																		<a href="<?php echo $facebook_login_url; ?>" class="btn btn-primary"><i class="flaticon-facebook-letter-logo"></i>Фэйсбүүк холбох</a>
																<?php } else { ?>
																	<a href="proile.php" class="btn btn-primary"><i class="flaticon-facebook-letter-logo"></i> <?php echo $_SESSION['user_mms']['fb_name']; ?></a>
																<?php } ?>
																</div>
															</div>
															<div class="form-group row">
																<label class="col-form-label col-3 text-lg-right text-left">ID : </label>
																<div class="col-9">
																	<input class="form-control form-control-lg form-control-solid" type="text" value="<?php echo $_SESSION['user_mms']['user_id']; ?>" disabled>
																</div>
															</div>
															<!--begin::Group-->
															<div class="form-group row">
																<label class="col-form-label col-3 text-lg-right text-left">Овог : </label>
																<div class="col-9">
																	<input class="form-control form-control-lg form-control-solid" name="owog" type="text" value="<?php echo $_SESSION['user_mms']['f_name']; ?>">
																</div>
															</div>
															<!--end::Group-->
															<!--begin::Group-->
															<div class="form-group row">
																<label class="col-form-label col-3 text-lg-right text-left">Нэр :</label>
																<div class="col-9">
																	<input class="form-control form-control-lg form-control-solid" name="ner" type="text" value="<?php echo $_SESSION['user_mms']['l_name']; ?>">
																</div>
															</div>
															<!--end::Group-->
															<!--begin::Group-->
															<div class="form-group row">
																<label class="col-form-label col-3 text-lg-right text-left">Хэрэглэгчийн нэр :</label>
																<div class="col-9">
																	<input class="form-control form-control-lg form-control-solid" type="text" value="<?php echo $_SESSION['user_mms']['username']; ?>">
																</div>
															</div>
															<!--end::Group-->
															<!--begin::Group-->
															<div class="form-group row">
																<label class="col-form-label col-3 text-lg-right text-left">Холбоо барих утас</label>
																<div class="col-9">
																	<div class="input-group input-group-lg input-group-solid">
																		<div class="input-group-prepend">
																			<span class="input-group-text">
																				<i class="la la-phone"></i>
																			</span>
																		</div>
																		<input type="text" name="phone" class="form-control form-control-lg form-control-solid" value="<?php echo $_SESSION['user_mms']['phone']; ?>" placeholder="Phone">
																	</div>
																</div>
															</div>
															<!--end::Group-->
															<!--begin::Group-->
															<div class="form-group row">
																<label class="col-form-label col-3 text-lg-right text-left">Цахим хаяг</label>
																<div class="col-9">
																	<div class="input-group input-group-lg input-group-solid">
																		<div class="input-group-prepend">
																			<span class="input-group-text">
																				<i class="la la-at"></i>
																			</span>
																		</div>
																		<input type="text" class="form-control form-control-lg form-control-solid" value="<?php echo $_SESSION['user_mms']['email']; ?>" placeholder="Email">
																	</div>
																</div>
															</div>
															<!--end::Group-->
															<!--begin::Group-->
															<div class="form-group row">
																<label class="col-form-label col-3 text-lg-right text-left">Гишүүнчлэлийн цахим хаяг :</label>
																<div class="col-9">
																	<div class="input-group input-group-lg input-group-solid">
																		<input type="text" name="e_mail" class="form-control form-control-lg form-control-solid" placeholder="Username" value="<?php echo $_SESSION['user_mms']['r_email']; ?>">
																		<div class="input-group-append">
																			<a href="https://webmail.mathsoc.mn/" target="_blank">	<span class="input-group-text">@mathsoc.mn</span></a>
																		</div>
																	</div>
																</div>
															</div>
															<!--end::Group-->
															<!--begin::Group-->
															<div class="form-group row">
																<label class="col-form-label col-3 text-lg-right text-left">Bio :</label>
																<div class="col-9">
																	<textarea name="bio" class="form-control summernote"  rows="10"  id="kt_summernote_1"><?php echo $_SESSION['user_mms']['bio']; ?></textarea>
																</div>
															</div>
															<!--end::Group-->
														</div>
													</div>
													<!--end::Row-->
													<!--begin::Footer-->
													<div class="card-footer pb-0">
														<div class="row">
															<div class="col-xl-2"></div>
															<div class="col-xl-7">
																<div class="row">
																	<div class="col-3"></div>
																	<div class="col-9">
																		<input type="submit" class="btn btn-light-primary font-weight-bold" name="update" value="Шинэчлэх">
																	</div>
																</div>
															</div>
														</div>
													</div>
													<!--end::Footer-->
												</div>
												<!--end::Tab-->
												<!--begin::Tab-->
												<div class="tab-pane px-7" id="kt_user_edit_tab_2" role="tabpanel">
													<div class="card-body">
														<!--begin: Datatable-->
														<div class="alert alert-primary" role="alert">

														</div>
														<?php
														if(tolson()){ ?>
															<div class="alert alert-success" role="alert">
																	<?php echo $_SESSION['user_mms']['end_date']; ?> хүртэл гишүүнчлэлтэй
															</div>
															<?php
														}else{ ?>
															<div class="alert alert-warning" role="alert">
																		Гишүүнчлэлийн төлбөрөө төлөөгүй баайна.
															</div>
															<?php
														}

														 ?>

														<table class="table table-bordered table-hover table-checkable" id="kt_datatable" style="margin-top: 13px !important">
															<thead>
																<tr>
																	<th>Дугаар</th>
																	<th>Сунгагдсан өдөр</th>
																	<th>Төлсөн дүн</th>
																	<th>Дуусах хугцаа</th>
																</tr>
															</thead>
															<tbody>
																<?php $orders = mysqli_query($db, "SELECT * FROM gishuunchlel WHERE user_id='$user_id'");
																$t=1;
				                       ?>
				                       <?php while ($row = mysqli_fetch_array($orders)) {  ?>
																<tr>
																	<td><?php echo $t; $t++;?></td>
																	<td><?php echo $row['in_date'] ?></td>
																	<td><?php echo $row['pay_pay'] ?></td>
																	<td><?php echo $row['add_date'] ?></td>
																</tr>
															<?php } ?>
															</tbody>
														</table>
														<!--end: Datatable-->
													</div>
												</div>
												<!--end::Tab-->
												<!--begin::Tab-->
												<div class="tab-pane px-7" id="kt_user_edit_tab_3" role="tabpanel">
													<!--begin::Body-->
													<div class="card-body">
														<!--begin::Row-->
														<div class="row">
															<div class="col-xl-2"></div>
															<div class="col-xl-7">

																<!--begin::Row-->
																<div class="row">
																	<label class="col-3"></label>
																	<div class="col-9">
																		<h6 class="text-dark font-weight-bold mb-10">Нууц үгээ солих эсвэл сэргээх:</h6>
																	</div>
																</div>
																<!--end::Row-->
																<!--begin::Group-->
																<div class="form-group row">
																	<label class="col-form-label col-3 text-lg-right text-left">Одоогын Нууц Үг</label>
																	<div class="col-9">
																		<input class="form-control form-control-lg form-control-solid mb-1" type="text" value="" placeholder="Одоогын Нууц Үг">
																		<a href="forgot.php" class="font-weight-bold font-size-sm">Нууц үгээ мартсан ?</a>
																	</div>
																</div>
																<!--end::Group-->
																<!--begin::Group-->
																<div class="form-group row">
																	<label class="col-form-label col-3 text-lg-right text-left">Шинэ нууц үг</label>
																	<div class="col-9">
																		<input class="form-control form-control-lg form-control-solid" type="text" placeholder="Шинэ нууц үг">
																	</div>
																</div>
																<!--end::Group-->
																<!--begin::Group-->
																<div class="form-group row">
																	<label class="col-form-label col-3 text-lg-right text-left">Нууц үгээ баталгаажуул</label>
																	<div class="col-9">
																		<input class="form-control form-control-lg form-control-solid" type="text" placeholder="Нууц үгээ баталгаажуул">
																	</div>
																</div>
																<!--end::Group-->
															</div>
														</div>
														<!--end::Row-->
													</div>
													<!--end::Body-->
													<!--begin::Footer-->
													<div class="card-footer pb-0">
														<div class="row">
															<div class="col-xl-2"></div>
															<div class="col-xl-7">
																<div class="row">
																	<div class="col-3"></div>
																	<div class="col-9">
																		<a href="#" class="btn btn-light-primary font-weight-bold">Save changes</a>
																		<a href="#" class="btn btn-clean font-weight-bold">Cancel</a>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<!--end::Footer-->
												</div>
												<!--end::Tab-->
											</div>
										</form>
									</div>
									<!--begin::Card body-->
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
		<script src="assets/js/pages/crud/forms/editors/summernote.js"></script>
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
		<!--end::Page Scripts-->
	</body>
	<!--end::Body-->
</html>
