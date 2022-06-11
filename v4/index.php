<?php include('serverV1.php'); ?>
<!DOCTYPE html>
<html lang="en">
	<!--begin::Head-->
	<head><base href="">
		<meta charset="utf-8" />
		<title><?php  echo $title; ?></title>
		<meta name="description" content=" <?php  echo $title; ?>" />
		<meta name="google-site-verification" content="+nxGUDJ4QpAZ5l9Bsjdi102tLVC21AIh5d1Nl23908vVuFHs34="/>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		<meta property="fb:app_id"             content="467598577547586" />
		<meta property="og:url"                content="<?php echo $host_url; ?>" />
		<meta property="og:type"               content="article" />
		<meta property="og:title"              content="<?php  echo $title; ?> " />
		<meta property="og:description"        content="<?php  echo $title; ?>" />
		<meta property="og:image"              content="<?php echo $host_url; ?>assets/media/logos/favicon.png" />
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
		<link rel="shortcut icon" href="assets/media/bg/logo.png" />
		<script src="https://polyfill.io/v3/polyfill.min.js?features=es6"></script>
		<script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>
		<?php echo $head_form; ?>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'G-8PBWL4H2WC');
		</script>
		<style media="screen">
			.bg-warning-user {
				background-color: <?php echo $lang[$lan]['photos']['color']; ?> !important;
			}
		</style>
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" style="background-image: url('<?php echo $lang[$lan]['photos']['home']; ?>');   " class="quick-panel-right demo-panel-right offcanvas-right header-fixed subheader-enabled page-loading bg-warning-user "  >
		<!--begin::Main-->
		<!--begin::Header Mobile-->
		<div id="kt_header_mobile" class="header-mobile">
			<!--begin::Logo-->
			<a href="<?php echo $host_url; ?>">
				<img alt="Logo" src="assets/media/logos/favicon.png" class="logo-default max-h-30px" />
				<span class="pr-2 logo-default max-h-30px" style="color: #ffffff;    font-weight: 500;"></span>
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
		<div class="d-flex flex-column flex-root" >
			<!--begin::Page-->
			<div class="d-flex flex-row flex-column-fluid page" >
				<!--begin::Wrapper-->
				<div class="d-flex flex-column flex-row-fluid wrapper " id="kt_wrapper" >
					<!--begin::Header-->
					<div id="kt_header" class="header header-fixed">
						<!--begin::Container-->
						<div class="container d-flex align-items-stretch justify-content-between " >
							<!--begin::Left-->
							<div class="d-flex align-items-stretch mr-3">
								<!--begin::Header Logo-->
								<div class="header-logo">
									<a href="<?php echo $host_url; ?>">
										<img alt="Logo" src="assets/media/logos/favicon.png" class="logo-default max-h-40px" />
										<span class="pr-2 " style="color: #ffffff;    font-weight: 500;"> </span>
										<img alt="Logo" src="assets/media/logos/favicon.png" class="logo-sticky max-h-40px" />
										<span class="pr-2 logo-sticky max-h-40px" style="color: #80808F;    font-weight: 500;"> </span>
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
                         <?php if($row['url']=='index.php'){
                            echo'<li class="menu-item menu-item-open menu-item-here menu-item-submenu menu-item-rel menu-item-open menu-item-here " data-menu-toggle="click" aria-haspopup="true">';
                          }else{
                             echo' <li class="menu-item menu-item-submenu menu-item-rel" data-menu-toggle="click" aria-haspopup="true">';
                           } ?>
                         <?php
                          $one_id=$row['id'];
                          $record = mysqli_query($db, "SELECT * FROM sub_menu WHERE key_id=$one_id");
                          if (@mysqli_num_rows($record) >= 1 ){ ?>
                            <a href="javascript:;" class="menu-link menu-toggle">
                              <span class="menu-text text-center text-hover-warning"><?php echo $row[$lan];  ?></span>
                              <i class="menu-arrow"></i>
                            </a>
                            <div class="menu-submenu menu-submenu-classic menu-submenu-left">
                              <ul class="menu-subnav">
                            <?php
                            while ($row = mysqli_fetch_array($record )) { ?>
                              <li class="menu-item" aria-haspopup="true">
                                <a target="_blank" href="<?php echo $row['url'];  ?>" class="menu-link ">
                                  <span class="menu-text text-hover-warning"><?php echo $row[$lan];  ?></span>
                                  <span class="menu-desc"></span>
                                </a>
                              </li>
                            <?php  } ?>
                              </ul>
                            </div>
                          <?php
                        } else { ?>
                          <a href="<?php echo $row['url'];  ?>" class="menu-link ">
                            <span class="menu-text text-center text-hover-warning"><?php echo $row[$lan];  ?></span>
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
													<input type="text" class="form-control" placeholder="<?php echo $lang[$lan]['search']; ?>..." />
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
											<?php if($lan=='en_name'){ ?>
											<img class="h-20px w-20px rounded-sm" src="assets/media/svg/flags/226-united-states.svg" alt="" />
											<?php }else{ ?>
												<img class="h-20px w-20px rounded-sm" src="https://www.pngrepo.com/download/248818/mongolia.png" alt="" />
											<?php } ?>
										</div>
									</div>
									<!--end::Toggle-->
									<!--begin::Dropdown-->
									<div class="dropdown-menu p-0 m-0 dropdown-menu-anim-up dropdown-menu-sm dropdown-menu-right">
										<!--begin::Nav-->
										<ul class="navi navi-hover py-4">
											<!--begin::Item-->
											<li class="navi-item">
												<a href="?lan=en" class="navi-link">
													<span class="symbol symbol-20 mr-3">
														<img src="assets/media/svg/flags/226-united-states.svg" alt="" />
													</span>
													<span class="navi-text">English</span>
												</a>
											</li>
											<!--end::Item-->
											<!--begin::Item-->
											<li class="navi-item active">
												<a href="?lan=mon" class="navi-link">
													<span class="symbol symbol-20 mr-3">
														<img src="https://www.pngrepo.com/download/248818/mongolia.png" alt="" />
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
					<div class="content d-flex flex-column flex-column-fluid " id="kt_content" >
						<!--begin::Subheader-->
						<div class="subheader min-h-lg-175px pt-5 pb-7 subheader-transparent" id="kt_subheader" >
							<div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
								<!--begin::Details-->
								<div class="d-flex align-items-center flex-wrap mr-2">
									<!--begin::Heading-->
									<div class="d-flex flex-column">
										<!--begin::Title-->
										<h2 class="text-white font-weight-bold my-2 mr-5"><?php echo $lang[$lan]['home']; ?></h2>
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
											<a href="" class="text-white text-hover-white opacity-75 hover-opacity-100"><?php echo $lang[$lan]['home']; ?></a>
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
						<div class="d-flex flex-column-fluid " >
							<!--begin::Container-->
							<div class="container ">
								<!--begin::Dashboard-->
								<div class="row">
									<div class="col-lg-9 col-xl-9  pt-5 ">
										<div class="accordion accordion-solid accordion-panel accordion-svg-toggle pb-5" id="accordionExample8">
										 <div class="card">
											<div class="card-header" id="headingOne8">
											 <div class="card-title" data-toggle="collapse" data-target="#collapseOne8">
												<div class="card-label text-warning"><?php echo $lang[$lan]['about_page']['about']; ?></div>
												<span class="svg-icon">
												 <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
													<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													 <polygon points="0 0 24 0 24 24 0 24"></polygon>
													 <path d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z" fill="#000000" fill-rule="nonzero"></path>
													 <path d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999) "></path>
													</g>
												 </svg>
												</span>
											 </div>
											</div>
											<div id="collapseOne8" class="collapse show" data-parent="#accordionExample8">
											 <div class="card-body">
												 <p><strong><?php echo $lang[$lan]['about_page']['about_in']; ?>
													</strong></p>
											 </div>
											</div>
										 </div>
										 <div class="card">
											<div class="card-header" id="headingTwo8">
											 <div class="card-title collapsed" data-toggle="collapse" data-target="#collapseTwo8">
												<div class="card-label text-warning"><?php echo $lang[$lan]['about_page']['company']; ?> </div>
												<span class="svg-icon">
												 <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
													<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													 <polygon points="0 0 24 0 24 24 0 24"></polygon>
													 <path d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z" fill="#000000" fill-rule="nonzero"></path>
													 <path d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999) "></path>
													</g>
												 </svg>
												</span>
											 </div>
											</div>
											<div id="collapseTwo8" class="collapse" data-parent="#accordionExample8">
											 <div class="card-body">
												 <div class="example-preview">
													 <div class="center-text text-center p-5">
														 <a class="btn btn-light-warning font-weight-bold " >
																<span class="nav-text">Зохион байгуулалт / Organization</span>
															</a>
													 </div>
															<ul class="nav nav-light-warning nav-pills row" id="myTab3" role="tablist">
																<li class=" col-xl-4">
																	<a class="nav-link active" id="home-tab-3" data-toggle="tab" href="#home-3">
																		<span class="nav-text">President (Ерөнхийлөгч) </span>
																	</a>
																</li>
																<li class=" col-xl-4">
																	<a class="nav-link" id="profile-tab-3" data-toggle="tab" href="#profile-3" aria-controls="profile">
																		<span class="nav-text">Managing director (Гүйцэтгэх захирал)</span>
																	</a>
																</li>
																<li class=" col-xl-4">
																	<a class="nav-link" id="contact-tab-31" data-toggle="tab" href="#contact-31" aria-controls="contact">
																		<span class="nav-text">Board members (Гишүүд)</span>
																	</a>
																</li>
															</ul>
															<div class="tab-content mt-5" id="myTabContent3">
																<div class="tab-pane fade active show" id="home-3" role="tabpanel" aria-labelledby="home-tab-3"><p><strong>
																	<p>• <?php print_r( $lang[$lan]['about_page']['company_in'][0][0]); ?></p>
																</strong></p></div>
																<div class="tab-pane fade" id="profile-3" role="tabpanel" aria-labelledby="profile-tab-3"><p><strong>
																	<p>• <?php print_r( $lang[$lan]['about_page']['company_in'][1][0]); ?></p>
																</strong></p></div>
																<div class="tab-pane fade" id="contact-31" role="tabpanel" aria-labelledby="contact-tab-31"><p><strong>
																	<p>• <?php print_r( $lang[$lan]['about_page']['company_in'][2][0]); ?></p>
																	<p>• <?php print_r( $lang[$lan]['about_page']['company_in'][2][1]); ?></p>
																	<p>• <?php print_r( $lang[$lan]['about_page']['company_in'][2][2]); ?></p>
																	<p>• <?php print_r( $lang[$lan]['about_page']['company_in'][2][3]); ?></p>
																	<p>• <?php print_r( $lang[$lan]['about_page']['company_in'][2][4]); ?></p>
																	<p>• <?php print_r( $lang[$lan]['about_page']['company_in'][2][5]); ?></p>
																	<p>• <?php print_r( $lang[$lan]['about_page']['company_in'][2][6]); ?></p>
																</strong></p></div>
															</div>
														</div>
											 </div>
											</div>
										 </div>
										 <div class="card">
											<div class="card-header" id="headingThree8">
											 <div class="card-title collapsed" data-toggle="collapse" data-target="#collapseThree8">
												<div class="card-label text-warning"><?php print_r( $lang[$lan]['about_page']['c_time_line']); ?></div>
												<span class="svg-icon">
												 <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
													<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													 <polygon points="0 0 24 0 24 24 0 24"></polygon>
													 <path d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z" fill="#000000" fill-rule="nonzero"></path>
													 <path d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999) "></path>
													</g>
												 </svg>
												</span>
											 </div>
											</div>
											<div id="collapseThree8" class="collapse" data-parent="#accordionExample8">
											 <div class="card-body">
												 <div class="timeline timeline-4">
													 <div class="timeline-bar"></div>
														 <div class="timeline-items">
																 <div class="timeline-item timeline-item-left">
																		 <div class="timeline-badge">
																			 <i class="icon-xl fas fa-handshake text-warning"></i>
																		 </div>
																		 <div class="timeline-label">
																				 <span class="text-primary font-weight-bold text-success" >1995 </span>
																		 </div>
																		 <div class="timeline-content">
																			 <?php print_r( $lang[$lan]['about_page']['c_time_line_in'][0]); ?>
																			</div>
																 </div>
																 <div class="timeline-item timeline-item-right">
																		 <div class="timeline-badge">
																				 <i class="icon-xl fas fa-handshake text-warning"></i>
																		 </div>
																		 <div class="timeline-label text-primary">
																				 <span class="text-primary font-weight-bold text-success"></span>
																		 </div>
																		 <div class="timeline-content">
																				<?php // print_r( $lang[$lan]['about_page']['c_time_line_in'][1]); ?>
																		 </div>
																 </div>
														 </div>
												 </div>
											 </div>
											</div>
										 </div>
										 <div class="card">
											<div class="card-header" id="headingfour8">
												<div class="card-title collapsed" data-toggle="collapse" data-target="#collapsefour8">
												<div class="card-label text-warning"><?php print_r( $lang[$lan]['about_page']['we_are_do'][0]); ?></div>
												<span class="svg-icon">
												 <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
													<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													 <polygon points="0 0 24 0 24 24 0 24"></polygon>
													 <path d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z" fill="#000000" fill-rule="nonzero"></path>
													 <path d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999) "></path>
													</g>
												 </svg>
												</span>
											 </div>
											</div>
											<div id="collapsefour8" class="collapse " data-parent="#accordionExample8">
											 <div class="card-body">
												 <p><strong>
													 <p><?php print_r( $lang[$lan]['about_page']['we_are_do'][1]); ?></p>
													 <p><i class="icon-md la la-angle-right text-warning"></i> <?php print_r( $lang[$lan]['about_page']['we_are_do'][2]); ?></p>
													 <p><i class="icon-md la la-angle-right text-warning"></i> <?php print_r( $lang[$lan]['about_page']['we_are_do'][3]); ?></p>
													 <p><i class="icon-md la la-angle-right text-warning"></i> <?php print_r( $lang[$lan]['about_page']['we_are_do'][4]); ?></p>
													 <p><i class="icon-md la la-angle-right text-warning"></i> <?php print_r( $lang[$lan]['about_page']['we_are_do'][5]); ?></p>
													 <p><i class="icon-md la la-angle-right text-warning"></i> <?php print_r( $lang[$lan]['about_page']['we_are_do'][6]); ?></p>
													 <p><i class="icon-md la la-angle-right text-warning"></i> <?php print_r( $lang[$lan]['about_page']['we_are_do'][7]); ?></p>
													 <p><i class="icon-md la la-angle-right text-warning"></i> <?php print_r( $lang[$lan]['about_page']['we_are_do'][8]); ?></p>
													 <p><i class="icon-md la la-angle-right text-warning"></i> <?php print_r( $lang[$lan]['about_page']['we_are_do'][9]); ?></p>
													 <p><i class="icon-md la la-angle-right text-warning"></i> <?php print_r( $lang[$lan]['about_page']['we_are_do'][10]); ?></p>
													</strong></p>
											 </div>
											</div>
										 </div>
										 <div class="card">
											<div class="card-header" id="headingfive8">
												<div class="card-title collapsed" data-toggle="collapse" data-target="#collapsefive8">
												<div class="card-label text-warning"><?php print_r( $lang[$lan]['about_page']['how_we_do'][0]); ?></div>
												<span class="svg-icon">
												 <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
													<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													 <polygon points="0 0 24 0 24 24 0 24"></polygon>
													 <path d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z" fill="#000000" fill-rule="nonzero"></path>
													 <path d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999) "></path>
													</g>
												 </svg>
												</span>
											 </div>
											</div>
											<div id="collapsefive8" class="collapse " data-parent="#accordionExample8">
											 <div class="card-body row">
												 <!-- <div class="">
													 <svg width="100px" height="100px" viewBox="0 0 700 960" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="width: 500px; height: 760px;"><g transform="matrix(1, 0, 0, 1, 0, 0)" clip-path="url(#mainClip159009)"><g transform="matrix(1, 0, 0, 1, 499.99834993662313, 695.0741203924198)"><g transform="matrix(1, 0, 0, 1, -241.6313119060626, -689.0741203924198)"><g transform="matrix(1, 0, 0, 1, 0, 0)"><path d="M 0,0 L 143.673828125,0 L 143.673828125,47.75089721679687 L 0,47.75089721679687 z" fill="#282c34" stroke="none" transform="matrix(1, 0, 0, 1, 1.75, 1.75)"></path><path d="M 0,0 L 143.673828125,0 L 143.673828125,47.75089721679687 L 0,47.75089721679687 z" fill="none" stroke="#00A9C9" stroke-width="3.5" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" transform="matrix(1, 0, 0, 1, 1.75, 1.75)"></path><g transform="matrix(1, 0, 0, 1, 0, 0)"><text x="0" y="11.906586456298829" style="font: bold 11pt Lato, Helvetica, Arial, sans-serif" text-anchor="start" fill="#F8F8F8" stroke="none" transform="matrix(1, 0, 0, 1, 9.75, 9.75)">SUPPLIERS /</text><text x="0" y="27.78203506469727" style="font: bold 11pt Lato, Helvetica, Arial, sans-serif" text-anchor="start" fill="#F8F8F8" stroke="none" transform="matrix(1, 0, 0, 1, 9.75, 9.75)">MANUFACTURERS</text></g></g><path d="M 0,0 L 147.173828125,0 L 147.173828125,8 L 0,8 z" fill="transparent" stroke="none" transform="matrix(1, 0, 0, 1, 0, 0)"></path><path d="M 0,0 L 8,0 L 8,51.25089721679687 L 0,51.25089721679687 z" fill="transparent" stroke="none" transform="matrix(1, 0, 0, 1, 0, 0)"></path><path d="M 0,0 L 8,0 L 8,51.25089721679687 L 0,51.25089721679687 z" fill="transparent" stroke="none" transform="matrix(1, 0, 0, 1, 139.173828125, 0)"></path><path d="M 0,0 L 147.173828125,0 L 147.173828125,8 L 0,8 z" fill="transparent" stroke="none" transform="matrix(1, 0, 0, 1, 0, 43.25089721679687)"></path></g><g transform="matrix(1, 0, 0, 1, -231.1326893198223, -597.9865465434101)"><g transform="matrix(1, 0, 0, 1, 0, 0)"><path d="M 0,0 L 136.1898651123047,0 L 136.1898651123047,47.75089721679687 L 0,47.75089721679687 z" fill="#282c34" stroke="none" transform="matrix(1, 0, 0, 1, 1.75, 1.75)"></path><path d="M 0,0 L 136.1898651123047,0 L 136.1898651123047,47.75089721679687 L 0,47.75089721679687 z" fill="none" stroke="#00A9C9" stroke-width="3.5" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" transform="matrix(1, 0, 0, 1, 1.75, 1.75)"></path><g transform="matrix(1, 0, 0, 1, 0, 0)"><text x="0" y="11.906586456298829" style="font: bold 11pt Lato, Helvetica, Arial, sans-serif" text-anchor="start" fill="#F8F8F8" stroke="none" transform="matrix(1, 0, 0, 1, 9.75, 9.75)">SULD UNITED LLS</text><text x="0" y="27.78203506469727" style="font: bold 11pt Lato, Helvetica, Arial, sans-serif" text-anchor="start" fill="#F8F8F8" stroke="none" transform="matrix(1, 0, 0, 1, 9.75, 9.75)">( DISTRIBUTOR )</text></g></g><path d="M 0,0 L 139.6898651123047,0 L 139.6898651123047,8 L 0,8 z" fill="transparent" stroke="none" transform="matrix(1, 0, 0, 1, 0, 0)"></path><path d="M 0,0 L 8,0 L 8,51.25089721679687 L 0,51.25089721679687 z" fill="transparent" stroke="none" transform="matrix(1, 0, 0, 1, 0, 0)"></path><path d="M 0,0 L 8,0 L 8,51.25089721679687 L 0,51.25089721679687 z" fill="transparent" stroke="none" transform="matrix(1, 0, 0, 1, 131.6898651123047, 0)"></path><path d="M 0,0 L 139.6898651123047,0 L 139.6898651123047,8 L 0,8 z" fill="transparent" stroke="none" transform="matrix(1, 0, 0, 1, 0, 43.25089721679687)"></path></g><g transform="matrix(1, 0, 0, 1, -220.60057338354306, -519.8101326790294)"><g transform="matrix(1, 0, 0, 1, 0, 0)"><path d="M 0,0 L 119.02301025390625,0 L 119.02301025390625,63.626345825195315 L 0,63.626345825195315 z" fill="#282c34" stroke="none" transform="matrix(1, 0, 0, 1, 1.75, 1.75)"></path><path d="M 0,0 L 119.02301025390625,0 L 119.02301025390625,63.626345825195315 L 0,63.626345825195315 z" fill="none" stroke="#00A9C9" stroke-width="3.5" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" transform="matrix(1, 0, 0, 1, 1.75, 1.75)"></path><g transform="matrix(1, 0, 0, 1, 0, 0)"><text x="0" y="11.906586456298829" style="font: bold 11pt Lato, Helvetica, Arial, sans-serif" text-anchor="start" fill="#F8F8F8" stroke="none" transform="matrix(1, 0, 0, 1, 9.75, 9.75)">ONLINE STORE</text><text x="0" y="27.78203506469727" style="font: bold 11pt Lato, Helvetica, Arial, sans-serif" text-anchor="start" fill="#F8F8F8" stroke="none" transform="matrix(1, 0, 0, 1, 9.75, 9.75)">( SUBSIDIARY</text><text x="0" y="43.657483673095705" style="font: bold 11pt Lato, Helvetica, Arial, sans-serif" text-anchor="start" fill="#F8F8F8" stroke="none" transform="matrix(1, 0, 0, 1, 9.75, 9.75)">COMPANY )</text></g></g><path d="M 0,0 L 122.52301025390625,0 L 122.52301025390625,8 L 0,8 z" fill="transparent" stroke="none" transform="matrix(1, 0, 0, 1, 0, 0)"></path><path d="M 0,0 L 8,0 L 8,67.12634582519532 L 0,67.12634582519532 z" fill="transparent" stroke="none" transform="matrix(1, 0, 0, 1, 0, 0)"></path><path d="M 0,0 L 8,0 L 8,67.12634582519532 L 0,67.12634582519532 z" fill="transparent" stroke="none" transform="matrix(1, 0, 0, 1, 114.52301025390625, 0)"></path><path d="M 0,0 L 122.52301025390625,0 L 122.52301025390625,8 L 0,8 z" fill="transparent" stroke="none" transform="matrix(1, 0, 0, 1, 0, 59.126345825195315)"></path></g><g transform="matrix(1, 0, 0, 1, -493.99834993662313, -464.19546025364843)"><g transform="matrix(1, 0, 0, 1, 0, 0)"><path d="M 0,0 L 163.87525939941406,0 L 163.87525939941406,47.75089721679687 L 0,47.75089721679687 z" fill="#282c34" stroke="none" transform="matrix(1, 0, 0, 1, 1.75, 1.75)"></path><path d="M 0,0 L 163.87525939941406,0 L 163.87525939941406,47.75089721679687 L 0,47.75089721679687 z" fill="none" stroke="#00A9C9" stroke-width="3.5" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" transform="matrix(1, 0, 0, 1, 1.75, 1.75)"></path><g transform="matrix(1, 0, 0, 1, 0, 0)"><text x="0" y="11.906586456298829" style="font: bold 11pt Lato, Helvetica, Arial, sans-serif" text-anchor="start" fill="#F8F8F8" stroke="none" transform="matrix(1, 0, 0, 1, 9.75, 9.75)">LOCAL DEALERS</text><text x="0" y="27.78203506469727" style="font: bold 11pt Lato, Helvetica, Arial, sans-serif" text-anchor="start" fill="#F8F8F8" stroke="none" transform="matrix(1, 0, 0, 1, 9.75, 9.75)">UNDER SULD UNITED</text></g></g><path d="M 0,0 L 167.37525939941406,0 L 167.37525939941406,8 L 0,8 z" fill="transparent" stroke="none" transform="matrix(1, 0, 0, 1, 0, 0)"></path><path d="M 0,0 L 8,0 L 8,51.25089721679687 L 0,51.25089721679687 z" fill="transparent" stroke="none" transform="matrix(1, 0, 0, 1, 0, 0)"></path><path d="M 0,0 L 8,0 L 8,51.25089721679687 L 0,51.25089721679687 z" fill="transparent" stroke="none" transform="matrix(1, 0, 0, 1, 159.37525939941406, 0)"></path><path d="M 0,0 L 167.37525939941406,0 L 167.37525939941406,8 L 0,8 z" fill="transparent" stroke="none" transform="matrix(1, 0, 0, 1, 0, 43.25089721679687)"></path></g><g transform="matrix(1, 0, 0, 1, 8.967884051157853, -464.849444901584)"><g transform="matrix(1, 0, 0, 1, 0, 0)"><path d="M 0,0 L 163.87525939941406,0 L 163.87525939941406,47.75089721679687 L 0,47.75089721679687 z" fill="#282c34" stroke="none" transform="matrix(1, 0, 0, 1, 1.75, 1.75)"></path><path d="M 0,0 L 163.87525939941406,0 L 163.87525939941406,47.75089721679687 L 0,47.75089721679687 z" fill="none" stroke="#00A9C9" stroke-width="3.5" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" transform="matrix(1, 0, 0, 1, 1.75, 1.75)"></path><g transform="matrix(1, 0, 0, 1, 0, 0)"><text x="0" y="11.906586456298829" style="font: bold 11pt Lato, Helvetica, Arial, sans-serif" text-anchor="start" fill="#F8F8F8" stroke="none" transform="matrix(1, 0, 0, 1, 9.75, 9.75)">NEXUS AFFILIATES</text><text x="0" y="27.78203506469727" style="font: bold 11pt Lato, Helvetica, Arial, sans-serif" text-anchor="start" fill="#F8F8F8" stroke="none" transform="matrix(1, 0, 0, 1, 9.75, 9.75)">UNDER SULD UNITED</text></g></g><path d="M 0,0 L 167.37525939941406,0 L 167.37525939941406,8 L 0,8 z" fill="transparent" stroke="none" transform="matrix(1, 0, 0, 1, 0, 0)"></path><path d="M 0,0 L 8,0 L 8,51.25089721679687 L 0,51.25089721679687 z" fill="transparent" stroke="none" transform="matrix(1, 0, 0, 1, 0, 0)"></path><path d="M 0,0 L 8,0 L 8,51.25089721679687 L 0,51.25089721679687 z" fill="transparent" stroke="none" transform="matrix(1, 0, 0, 1, 159.37525939941406, 0)"></path><path d="M 0,0 L 167.37525939941406,0 L 167.37525939941406,8 L 0,8 z" fill="transparent" stroke="none" transform="matrix(1, 0, 0, 1, 0, 43.25089721679687)"></path></g><g transform="matrix(1, 0, 0, 1, -226.68102033997286, -352.5542235086975)"><g transform="matrix(1, 0, 0, 1, 0, 0)"><path d="M 0,0 L 137.56793212890625,0 L 137.56793212890625,31.875448608398436 L 0,31.875448608398436 z" fill="#282c34" stroke="none" transform="matrix(1, 0, 0, 1, 1.75, 1.75)"></path><path d="M 0,0 L 137.56793212890625,0 L 137.56793212890625,31.875448608398436 L 0,31.875448608398436 z" fill="none" stroke="#00A9C9" stroke-width="3.5" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" transform="matrix(1, 0, 0, 1, 1.75, 1.75)"></path><text x="0" y="11.906586456298829" style="font: bold 11pt Lato, Helvetica, Arial, sans-serif" text-anchor="start" fill="#F8F8F8" stroke="none" transform="matrix(1, 0, 0, 1, 9.75, 9.75)">END COSTUMERS</text></g><path d="M 0,0 L 141.06793212890625,0 L 141.06793212890625,8 L 0,8 z" fill="transparent" stroke="none" transform="matrix(1, 0, 0, 1, 0, 0)"></path><path d="M 0,0 L 8,0 L 8,35.375448608398436 L 0,35.375448608398436 z" fill="transparent" stroke="none" transform="matrix(1, 0, 0, 1, 0, 0)"></path><path d="M 0,0 L 8,0 L 8,35.375448608398436 L 0,35.375448608398436 z" fill="transparent" stroke="none" transform="matrix(1, 0, 0, 1, 133.06793212890625, 0)"></path><path d="M 0,0 L 141.06793212890625,0 L 141.06793212890625,8 L 0,8 z" fill="transparent" stroke="none" transform="matrix(1, 0, 0, 1, 0, 27.375448608398436)"></path></g><g transform="matrix(1, 0, 0, 1, -178.3004105986687, -641.823223175623)"><path d="M 0,0 L 0,16.540017776160084 Q 0,19.91833831610643 3.3783205399463156,19.91833831610643 L 3.3783205399463156,19.91833831610643 Q 6.756641079892631,19.91833831610643 6.756641079892631,23.296658856052773 L 6.756641079892631,35.83667663221286" fill="none" stroke="transparent" stroke-width="8" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" transform="matrix(1, 0, 0, 1, 10.25601275510609, 4)"></path><path d="M 0,0 L 0,16.540017776160084 Q 0,19.91833831610643 3.3783205399463156,19.91833831610643 L 3.3783205399463156,19.91833831610643 Q 6.756641079892631,19.91833831610643 6.756641079892631,23.296658856052773 L 6.756641079892631,35.83667663221286" fill="none" stroke="gray" stroke-width="2" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" transform="matrix(1, 0, 0, 1, 10.25601275510609, 4)"></path><path d="M 0,0 L 8,4 L 0,8 L 2,4 z" fill="gray" stroke="none" transform="matrix(0, 1, -1, 0, 21.012653834998723, 35.83667663221286)"></path></g><g transform="matrix(1, 0, 0, 1, -423.9450535319685, -576.3610979350117)"><path d="M 179.1780309170938,0 L 5,0 Q 0,0 0,5 L 0,104.16563768136325" fill="none" stroke="transparent" stroke-width="8" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" transform="matrix(1, 0, 0, 1, 13.634333295052405, 4)"></path><path d="M 179.1780309170938,0 L 5,0 Q 0,0 0,5 L 0,104.16563768136325" fill="none" stroke="gray" stroke-width="2" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" transform="matrix(1, 0, 0, 1, 13.634333295052405, 4)"></path><path d="M 0,0 L 8,4 L 0,8 L 2,4 z" fill="gray" stroke="none" transform="matrix(0, 1, -1, 0, 17.634333295052407, 104.16563768136325)"></path></g><g transform="matrix(1, 0, 0, 1, -173.94774580518236, -550.7356493266133)"><path d="M 0,0 L 0,12.488414070251906 Q 0,13.462758323791945 0.9743442535400106,13.462758323791945 L 0.9743442535400106,13.462758323791945 Q 1.9486885070800213,13.462758323791945 1.9486885070800213,14.437102577331984 L 1.9486885070800213,22.92551664758389" fill="none" stroke="transparent" stroke-width="8" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" transform="matrix(1, 0, 0, 1, 12.659989041512395, 4)"></path><path d="M 0,0 L 0,12.488414070251906 Q 0,13.462758323791945 0.9743442535400106,13.462758323791945 L 0.9743442535400106,13.462758323791945 Q 1.9486885070800213,13.462758323791945 1.9486885070800213,14.437102577331984 L 1.9486885070800213,22.92551664758389" fill="none" stroke="gray" stroke-width="2" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" transform="matrix(1, 0, 0, 1, 12.659989041512395, 4)"></path><path d="M 0,0 L 8,4 L 0,8 L 2,4 z" fill="gray" stroke="none" transform="matrix(0, 1, -1, 0, 18.608677548592418, 22.92551664758389)"></path></g><g transform="matrix(1, 0, 0, 1, -95.44282420751762, -576.3610979350117)"><path d="M 0,0 L 179.0983379583825,0 Q 184.0983379583825,0 184.0983379583825,5 L 184.0983379583825,103.5116530334277" fill="none" stroke="transparent" stroke-width="8" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" transform="matrix(1, 0, 0, 1, 4, 4)"></path><path d="M 0,0 L 179.0983379583825,0 Q 184.0983379583825,0 184.0983379583825,5 L 184.0983379583825,103.5116530334277" fill="none" stroke="gray" stroke-width="2" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" transform="matrix(1, 0, 0, 1, 4, 4)"></path><path d="M 0,0 L 8,4 L 0,8 L 2,4 z" fill="gray" stroke="none" transform="matrix(0, 1, -1, 0, 192.0983379583825, 103.5116530334277)"></path></g><g transform="matrix(1, 0, 0, 1, -414.3107202369161, -416.94456303685155)"><path d="M 0,0 L 0,73.07806383235328 Q 0,78.07806383235328 5,78.07806383235328 L 179.62969989694324,78.07806383235328" fill="none" stroke="transparent" stroke-width="8" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" transform="matrix(1, 0, 0, 1, 4, 4)"></path><path d="M 0,0 L 0,73.07806383235328 Q 0,78.07806383235328 5,78.07806383235328 L 179.62969989694324,78.07806383235328" fill="none" stroke="gray" stroke-width="2" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" transform="matrix(1, 0, 0, 1, 4, 4)"></path><path d="M 0,0 L 8,4 L 0,8 L 2,4 z" fill="gray" stroke="none" transform="matrix(1, 0, 0, 1, 179.62969989694324, 78.07806383235328)"></path></g><g transform="matrix(1, 0, 0, 1, -89.61308821106661, -417.5985476847871)"><path d="M 178.2686019619315,0 L 178.2686019619315,73.73204848028882 Q 178.2686019619315,78.73204848028882 173.2686019619315,78.73204848028882 L 4,78.73204848028882" fill="none" stroke="transparent" stroke-width="8" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" transform="matrix(1, 0, 0, 1, 4, 4)"></path><path d="M 178.2686019619315,0 L 178.2686019619315,73.73204848028882 Q 178.2686019619315,78.73204848028882 173.2686019619315,78.73204848028882 L 4,78.73204848028882" fill="none" stroke="gray" stroke-width="2" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" transform="matrix(1, 0, 0, 1, 4, 4)"></path><path d="M 0,0 L 8,4 L 0,8 L 2,4 z" fill="gray" stroke="none" transform="matrix(-1, 0, 0, -1, 12, 86.73204848028882)"></path></g><g transform="matrix(1, 0, 0, 1, -330.62309053720907, -479.0592354622325)"><path d="M 0,31.364134095302802 L 52.01125857683297,31.364134095302802 Q 57.01125857683297,31.364134095302802 57.01125857683297,26.364134095302802 L 57.01125857683297,5 Q 57.01125857683297,0 62.01125857683297,0 L 102.022517153666,0" fill="none" stroke="transparent" stroke-width="8" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" transform="matrix(1, 0, 0, 1, 4, 4)"></path><path d="M 0,31.364134095302802 L 52.01125857683297,31.364134095302802 Q 57.01125857683297,31.364134095302802 57.01125857683297,26.364134095302802 L 57.01125857683297,5 Q 57.01125857683297,0 62.01125857683297,0 L 102.022517153666,0" fill="none" stroke="gray" stroke-width="2" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" transform="matrix(1, 0, 0, 1, 4, 4)"></path><path d="M 0,0 L 8,4 L 0,8 L 2,4 z" fill="gray" stroke="none" transform="matrix(1, 0, 0, 1, 102.022517153666, 0)"></path></g><g transform="matrix(1, 0, 0, 1, -171.37739456110725, -456.6837868538341)"><path d="M 0,0 L 0,48.4687746820332 Q 0,50.0647816725683 1.596006990535102,50.0647816725683 L 1.596006990535102,50.0647816725683 Q 3.192013981070204,50.0647816725683 3.192013981070204,51.6607886631034 L 3.192013981070204,96.1295633451366" fill="none" stroke="transparent" stroke-width="8" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" transform="matrix(1, 0, 0, 1, 12.038326304517303, 4)"></path><path d="M 0,0 L 0,48.4687746820332 Q 0,50.0647816725683 1.596006990535102,50.0647816725683 L 1.596006990535102,50.0647816725683 Q 3.192013981070204,50.0647816725683 3.192013981070204,51.6607886631034 L 3.192013981070204,96.1295633451366" fill="none" stroke="gray" stroke-width="2" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" transform="matrix(1, 0, 0, 1, 12.038326304517303, 4)"></path><path d="M 0,0 L 8,4 L 0,8 L 2,4 z" fill="gray" stroke="none" transform="matrix(0, 1, -1, 0, 19.23034028558751, 96.1295633451366)"></path></g><g transform="matrix(1, 0, 0, 1, -102.07756312963681, -501.43468407063096)"><path d="M 0,0 L 52.522723590397334,0 Q 57.522723590397334,0 57.522723590397334,5 L 57.522723590397334,37.83541861240633 Q 57.522723590397334,42.83541861240633 62.522723590397334,42.83541861240633 L 103.04544718079467,42.83541861240633" fill="none" stroke="transparent" stroke-width="8" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" transform="matrix(1, 0, 0, 1, 4, 4)"></path><path d="M 0,0 L 52.522723590397334,0 Q 57.522723590397334,0 57.522723590397334,5 L 57.522723590397334,37.83541861240633 Q 57.522723590397334,42.83541861240633 62.522723590397334,42.83541861240633 L 103.04544718079467,42.83541861240633" fill="none" stroke="gray" stroke-width="2" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" transform="matrix(1, 0, 0, 1, 4, 4)"></path><path d="M 0,0 L 8,4 L 0,8 L 2,4 z" fill="gray" stroke="none" transform="matrix(1, 0, 0, 1, 103.04544718079467, 42.83541861240633)"></path></g><g transform="matrix(1, 0, 0, 1, -330.62309053720907, -444.9449219235703)"><path d="M 0,0.6539846479355447 L 161.79548729418346,0.6539846479355447 C 161.79548729418346,-9.346015352064455 171.79548729418346,-9.346015352064455 171.79548729418346,0.6539846479355447 L 171.79548729418346,0.6539846479355447 L 171.79548729418346,0 L 331.5909745883669,0" fill="none" stroke="transparent" stroke-width="8" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" transform="matrix(1, 0, 0, 1, 4, 10.846015352064455)"></path><path d="M 0,0.6539846479355447 L 161.79548729418346,0.6539846479355447 C 161.79548729418346,-9.346015352064455 171.79548729418346,-9.346015352064455 171.79548729418346,0.6539846479355447 L 171.79548729418346,0.6539846479355447 L 171.79548729418346,0 L 331.5909745883669,0" fill="none" stroke="gray" stroke-width="2" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" transform="matrix(1, 0, 0, 1, 4, 10.846015352064455)"></path><path d="M 0,0 L 8,4 L 0,8 L 2,4 z" fill="gray" stroke="none" transform="matrix(1, 0, 0, 1, 331.5909745883669, 6.846015352064455)"></path></g><g transform="matrix(1, 0, 0, 1, -330.62309053720907, -434.69474248021095)"><path d="M 335.5909745883669,0 L 179.79548729418346,0 L 179.79548729418346,0.6539846479355447 L 172.28402228061913,0.6539846479355447 C 172.28402228061913,-9.346015352064455 162.28402228061913,-9.346015352064455 162.28402228061913,0.6539846479355447 L 4,0.6539846479355447" fill="none" stroke="transparent" stroke-width="8" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" transform="matrix(1, 0, 0, 1, 4, 10.846015352064455)"></path><path d="M 335.5909745883669,0 L 179.79548729418346,0 L 179.79548729418346,0.6539846479355447 L 172.28402228061913,0.6539846479355447 C 172.28402228061913,-9.346015352064455 162.28402228061913,-9.346015352064455 162.28402228061913,0.6539846479355447 L 4,0.6539846479355447" fill="none" stroke="gray" stroke-width="2" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" transform="matrix(1, 0, 0, 1, 4, 10.846015352064455)"></path><path d="M 0,0 L 8,4 L 0,8 L 2,4 z" fill="gray" stroke="none" transform="matrix(-1, 0, 0, -1, 12, 15.5)"></path></g><g transform="matrix(1, 0, 0, 1, -330.62309053720907, -501.43468407063096)"><path d="M 106.022517153666,0 L 54.01125857683297,0 Q 49.01125857683297,0 49.01125857683297,5 L 49.01125857683297,38.48940326034193 Q 49.01125857683297,43.48940326034193 44.01125857683297,43.48940326034193 L 4,43.48940326034193" fill="none" stroke="transparent" stroke-width="8" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" transform="matrix(1, 0, 0, 1, 4, 4)"></path><path d="M 106.022517153666,0 L 54.01125857683297,0 Q 49.01125857683297,0 49.01125857683297,5 L 49.01125857683297,38.48940326034193 Q 49.01125857683297,43.48940326034193 44.01125857683297,43.48940326034193 L 4,43.48940326034193" fill="none" stroke="gray" stroke-width="2" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" transform="matrix(1, 0, 0, 1, 4, 4)"></path><path d="M 0,0 L 8,4 L 0,8 L 2,4 z" fill="gray" stroke="none" transform="matrix(-1, 0, 0, -1, 12, 51.48940326034193)"></path></g><g transform="matrix(1, 0, 0, 1, -102.07756312963681, -479.0592354622325)"><path d="M 107.04544718079467,30.710149447367257 L 54.522723590397334,30.710149447367257 Q 49.522723590397334,30.710149447367257 49.522723590397334,25.710149447367257 L 49.522723590397334,5 Q 49.522723590397334,0 44.522723590397334,0 L 4,0" fill="none" stroke="transparent" stroke-width="8" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" transform="matrix(1, 0, 0, 1, 4, 4)"></path><path d="M 107.04544718079467,30.710149447367257 L 54.522723590397334,30.710149447367257 Q 49.522723590397334,30.710149447367257 49.522723590397334,25.710149447367257 L 49.522723590397334,5 Q 49.522723590397334,0 44.522723590397334,0 L 4,0" fill="none" stroke="gray" stroke-width="2" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" transform="matrix(1, 0, 0, 1, 4, 4)"></path><path d="M 0,0 L 8,4 L 0,8 L 2,4 z" fill="gray" stroke="none" transform="matrix(-1, 0, 0, -1, 12, 8)"></path></g></g></g><clipPath id="mainClip159009"><rect x="0" y="0" width="700px" height="960px"></rect></clipPath></svg>
												 </div> -->

											 </div>
											</div>
										 </div>
										 <!-- <div class="card">
											<div class="card-header" id="headingfour8">
												<div class="card-title collapsed" data-toggle="collapse" data-target="#collapsefour8">
												<div class="card-label text-warning">COMPANY TIMELINE</div>
												<span class="svg-icon">
												 <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
													<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													 <polygon points="0 0 24 0 24 24 0 24"></polygon>
													 <path d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z" fill="#000000" fill-rule="nonzero"></path>
													 <path d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999) "></path>
													</g>
												 </svg>
												</span>
											 </div>
											</div>
											<div id="collapsefour8" class="collapse " data-parent="#accordionExample8">
											 <div class="card-body">
												 <p><strong>
												Suld United LLC specializes in different automotive sectors in Commercial, Passenger Cars
												and Mining Sectors.<br>
												SuldUnited LLC is the first company in Mongolia to provide Management advice for the
												Automotive companies. We supply our cooperating companies not only with the spare parts, but
												we also provide all the additional Database, Strategies, Management, Solutions to support our
												clients.
													</strong></p>
											 </div>
											</div>
										 </div> -->
										</div>
										<div class="row pb-5">
											<div class="col-6">
												<a href="members.php?id_1=1">
												<div class="card card-custom wave wave-animate-slow  mb-8 mb-lg-0"  style="background-color:#FEAB75">
												 <div class="card-body">
												  <div class="d-flex align-items-center p-5">
												   <div class="mr-6">
 												    <span class="svg-icon text-white-50 svg-icon-3x" >
 															<i class="icon-3x  flaticon-users-1"></i>
 												    </span>
												   </div>
												   <div class="d-flex flex-column">
												    <div class="text-dark  font-weight-bold font-size-h4 mb-3">
												    <?php echo $lang[$lan]['suppliers']; ?>
													</div>
												    <div class="text-dark-75">
												     <?php echo $count_suppliers; ?>
												    </div>
												   </div>
												  </div>
												 </div>
												</div></a>
											</div>
											<div class="col-6">
												<a href="journal.php">
												<div class="card card-custom wave wave-animate-slow  mb-8 mb-lg-0" style="background-color:#FED675">
												 <div class="card-body">
												  <div class="d-flex align-items-center p-5">
												   <div class="mr-6">
														 <span class="svg-icon text-white-50 svg-icon-4x">
 	 														<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
 	 															<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
 	 																<rect x="0" y="0" width="24" height="24"></rect>
 	 																<path d="M13,17.0484323 L13,18 L14,18 C15.1045695,18 16,18.8954305 16,20 L8,20 C8,18.8954305 8.8954305,18 10,18 L11,18 L11,17.0482312 C6.89844817,16.5925472 3.58685702,13.3691811 3.07555009,9.22038742 C3.00799634,8.67224972 3.3975866,8.17313318 3.94572429,8.10557943 C4.49386199,8.03802567 4.99297853,8.42761593 5.06053229,8.97575363 C5.4896663,12.4577884 8.46049164,15.1035129 12.0008191,15.1035129 C15.577644,15.1035129 18.5681939,12.4043008 18.9524872,8.87772126 C19.0123158,8.32868667 19.505897,7.93210686 20.0549316,7.99193546 C20.6039661,8.05176407 21.000546,8.54534521 20.9407173,9.09437981 C20.4824216,13.3000638 17.1471597,16.5885839 13,17.0484323 Z" fill="#000000" fill-rule="nonzero"></path>
 	 																<path d="M12,14 C8.6862915,14 6,11.3137085 6,8 C6,4.6862915 8.6862915,2 12,2 C15.3137085,2 18,4.6862915 18,8 C18,11.3137085 15.3137085,14 12,14 Z M8.81595773,7.80077353 C8.79067542,7.43921955 8.47708263,7.16661749 8.11552864,7.19189981 C7.75397465,7.21718213 7.4813726,7.53077492 7.50665492,7.89232891 C7.62279197,9.55316612 8.39667037,10.8635466 9.79502238,11.7671393 C10.099435,11.9638458 10.5056723,11.8765328 10.7023788,11.5721203 C10.8990854,11.2677077 10.8117724,10.8614704 10.5073598,10.6647638 C9.4559885,9.98538454 8.90327706,9.04949813 8.81595773,7.80077353 Z" fill="#000000" opacity="0.3"></path>
 	 															</g>
 	 														</svg>
 	 													</span>
												   </div>
												   <div class="d-flex flex-column">
												    <div class="text-dark  font-weight-bold font-size-h4 mb-3">
												    <?php echo $lang[$lan]['members']; ?>
												    </div>
												    <div class="text-dark-75">
												     <?php echo $count_members; ?>
												    </div>
												   </div>
												  </div>
												 </div>
												</div>
												</a>
											</div>
										</div>
										<h3><?php echo $lang[$lan]['suppliers']; ?></h3>
										<br>
										<div class="row">
											<?php
											$post_row= mysqli_query($db, "SELECT * FROM suppliers ");
											while ($row_post = mysqli_fetch_array($post_row)) { ?>
												<a href="<?php echo $row_post['url']; ?>" class="col-xl-3 col-sm-6 col-md-4 col-lg-3 pb-3" target="_blank"><div>
													<div class="card card-custom ">
														<div class="card-body">
															<img src="<?php echo $row_post['img']; ?>" alt="" class="img-fluid" >
															<div class="text-dark-50 font-weight-bold font-size-xl text-center text-dark-75"><?php echo $row_post['name']; ?></div>
															<div class="text-dark-50 font-weight-bold font-size-lg pt-2 text-center"><?php echo $row_post['body']; ?></div>
														</div>
													</div>
												</div></a>
											<?php } ?>
										</div>
									</div>
									<div class="col-lg-3 col-xl-3 pt-5">
										<div class="col-xl-12 card card-custom  text-center p-5">
											<div id="fb-root" ></div>
											<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v8.0&appId=521290251871606&autoLogAppEvents=1" nonce="1sMdvOtE"></script>
											<?php echo $page_fb; ?>
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
					<script>
					  var div = document.createElement('div');
					  div.className = 'fb-customerchat';
					  div.setAttribute('page_id', '102294434737469');
					  div.setAttribute('ref', '');
					  document.body.appendChild(div);
					  window.fbMessengerPlugins = window.fbMessengerPlugins || {
					    init: function () {
					      FB.init({
					        appId            : '1678638095724206',
					        autoLogAppEvents : true,
					        xfbml            : true,
					        version          : 'v8.0'
					      });
					    }, callable: []
					  };
					  window.fbAsyncInit = window.fbAsyncInit || function () {
					    window.fbMessengerPlugins.callable.forEach(function (item) { item(); });
					    window.fbMessengerPlugins.init();
					  };
					  setTimeout(function () {
					    (function (d, s, id) {
					      var js, fjs = d.getElementsByTagName(s)[0];
					      if (d.getElementById(id)) { return; }
					      js = d.createElement(s);
					      js.id = id;
					      js.src = "//connect.facebook.net/en_US/sdk/xfbml.customerchat.js";
					      fjs.parentNode.insertBefore(js, fjs);
					    }(document, 'script', 'facebook-jssdk'));
					  }, 0);
					</script>
					<!--begin::Footer-->
					<div class="footer bg-white py-4 d-flex flex-lg-column" id="kt_footer">
						<!--begin::Container-->
						<div class="container d-flex flex-column flex-md-row align-items-center justify-content-between">
							<!--begin::Copyright-->
							<div class="text-dark order-2 order-md-1">
								<span class="text-muted font-weight-bold mr-2" id="footer_date"></span>
								<a href="#" target="_blank" class="text-dark-75 text-hover-warning">MATHSOC.MN</a>
							</div>
							<!--end::Copyright-->
							<!--begin::Nav-->
							<div class="nav nav-dark order-1 order-md-2">
								<a href="<?php echo $host_url; ?>about.php" target="_blank" class="nav-link pr-3 pl-0 text-hover-warning"><?php echo $lang[$lan]['about']; ?></a>
								<a href="<?php echo $host_url; ?>contact.php" target="_blank" class="nav-link px-3 text-hover-warning"><?php echo $lang[$lan]['contact']; ?></a>
								<a href="https://www.togtokh.dev" target="_blank" class="nav-link pl-3 pr-0 text-hover-warning"><?php echo $lang[$lan]['web_dev']; ?></a>
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
		<div id="kt_scrolltop" class="scrolltop ">
			<span class="svg-icon ">
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
		<script src="assets/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
		<!--end::Page Vendors-->
		<!--begin::Page Scripts(used by this page)-->
		<script src="assets/js/pages/widgets.js"></script>
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
		$('.carousel').carousel({
		  interval: 1500
		})
		</script>
		<!--end::Page Scripts-->
	</body>
	<!--end::Body-->
</html>
