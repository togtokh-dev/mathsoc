<?php include('serverV1.php'); ?>
<?php
if(isset($_GET['id'])){
  $on=$_GET['id'];
}
?>
<?php
  $post_row= mysqli_query($db, "SELECT * FROM news  where id='$on' limit 1");
  if(mysqli_num_rows($post_row)==1){
 ?>
 <?php while ($row_post = mysqli_fetch_array($post_row)) { ?>
   <?php if ($lan=='mon_name') {
    $title=$row_post['title_mon'];
    $body=$row_post['body_mon'];
  }else{
    $title=$row_post['title_en'];
    $body=$row_post['body_en'];
  } ?>
   <!DOCTYPE html>
   <html lang="en">
   	<!--begin::Head-->
   	<head><base href="">
   		<meta charset="utf-8" />
   		<title><?php  echo $title; ?></title>
   		<meta name="description" content=" Mongolian Mathematical Society монголын математикийн нийгэмлэг mathsoc mathsoc.mn  Mongolian Mathematical" />
   		<meta name="google-site-verification" content="+nxGUDJ4QpAZ5l9Bsjdi102tLVC21AIh5d1Nl23908vVuFHs34="/>
   		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
   		<meta property="fb:app_id"             content="467598577547586" />
      <meta property="og:url"                content="<?php echo $actual_link; ?>" />
  		<meta property="og:type"               content="article" />
  		<meta property="og:title"              content="<?php  echo $title; ?> " />
  		<meta property="og:description"        content="Монголын математикийн нийгэмлэг" />
  		<meta property="og:image"              content="<?php  echo $row_post['photo']; ?>" />
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
      <style media="screen">
  			.bg-warning-user {
  				background-color: <?php echo $lang[$lan]['photos']['color']; ?> !important;
  			}
  		</style>
   	</head>
   	<!--end::Head-->
   	<!--begin::Body-->
   	<body id="kt_body" style="background-image: url('<?php echo $lang[$lan]['photos']['home']; ?>');   " class="quick-panel-right demo-panel-right offcanvas-right header-fixed subheader-enabled page-loading bg-warning-user  ">
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
   		<div class="d-flex flex-column flex-root">
   			<!--begin::Page-->
   			<div class="d-flex flex-row flex-column-fluid page">
   				<!--begin::Wrapper-->
   				<div class="d-flex flex-column flex-row-fluid wrapper " id="kt_wrapper">
   					<!--begin::Header-->
   					<div id="kt_header" class="header header-fixed">
   						<!--begin::Container-->
   						<div class="container d-flex align-items-stretch justify-content-between">
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
                            <?php if($row['url']=='news.php'){
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
                                 <li class="menu-item " aria-haspopup="true">
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
   												<a href="?id=<?php echo $on; ?>&lan=en" class="navi-link">
   													<span class="symbol symbol-20 mr-3">
   														<img src="assets/media/svg/flags/226-united-states.svg" alt="" />
   													</span>
   													<span class="navi-text">English</span>
   												</a>
   											</li>
   											<!--end::Item-->
   											<!--begin::Item-->
   											<li class="navi-item active">
   												<a href="?id=<?php echo $on; ?>&lan=mon" class="navi-link">
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
   					<div class="content d-flex flex-column flex-column-fluid " id="kt_content">
   						<!--begin::Subheader-->
   						<div class="subheader min-h-lg-175px pt-5 pb-7 subheader-transparent" id="kt_subheader">
   							<div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
   								<!--begin::Details-->
   								<div class="d-flex align-items-center flex-wrap mr-2">
                    <!--begin::Heading-->
                    <div class="d-flex flex-column">
                      <!--begin::Title-->
                      <h2 class="text-white font-weight-bold my-2 mr-5"><?php  echo $title; ?></h2>
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
                        <a href="" class="text-white text-hover-white opacity-75 hover-opacity-100"><?php echo $lang[$lan]['menu_val'][3][0]; ?></a>
                        <span class="label label-dot label-sm bg-white opacity-75 mx-3"></span>
                        <a href="news.php" class="text-white text-hover-white opacity-75 hover-opacity-100"><?php echo $lang[$lan]['menu_val'][3][2]; ?></a>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <span class="label label-dot label-sm bg-white opacity-75 mx-3"></span>
                        <a href="<?php echo $actual_link; ?>" class="text-white text-hover-white opacity-75 hover-opacity-100"><?php  echo $title; ?></a>
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
   						<div class="d-flex flex-column-fluid ">
   							<!--begin::Container-->
   							<div class="container ">
   								<!--begin::Dashboard-->
   								<div class="row">
                    <div class="col-lg-6 col-xl-9 pt-5">
                      <div class="card card-custom gutter-b example example-compact " id="print_post">
                        <div class="card-header ">
                          <div class="card-title col-8">
                            <h3 class="card-label text-center"> <?php  echo $title; ?>
                            </h3>
                          </div>
                          <div class="col-3 p-5">
                            <div class="example-tools justify-content-right ">
                              <h6 class="card-label pr-5"> <small><?php  echo $row_post['time_s']; ?></small>
                              </h6>
                              <button type="button" class="btn btn-secondary " onclick="printDiv()" name="button"><span class="flaticon2-printer" ></span></button>
                            </div>
                          </div>
                        </div>
                        <div class="card-body " data-wheel-propagation="true">
                          <?php   echo htmlspecialchars_decode($body); ?>
                        </div>
                      </div>
                      <div class="col-xl-12 card card-custom example example-compact text-center p-5 text-center">
                        <div class="row">
                          <div class="col-6">
                            <a href="#" class="btn btn-primary btn-block btn-shadow font-weight-bold mr-2 share_fb"><i class="flaticon-facebook-letter-logo"></i> Facebook </a>
                          </div>
                          <div class="col-6">
                            <a href="#" class="btn btn-info btn-block btn-shadow font-weight-bold mr-2 share_tw"><i class="flaticon-twitter-logo"></i> Twitter </a>
                          </div>
                        </div>
                        <div id="fb-root"></div>
                        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v8.0&appId=521290251871606&autoLogAppEvents=1" nonce="lsVe1nSL"></script>
                        <div class="fb-comments" data-href="<?php echo $actual_link; ?>" data-numposts="5" data-width="600"></div>
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
   								<a href="https://www.byto.dev" target="_blank" class="nav-link pl-3 pr-0 text-hover-warning"><?php echo $lang[$lan]['web_dev']; ?></a>
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
   		$('#share_fb  , .share_fb').click(function() {
   			var facebookWindow = window.open('https://www.facebook.com/sharer/sharer.php?u=' + document.URL, 'facebook-popup', 'height=350,width=600');
   			if(facebookWindow.focus) { facebookWindow.focus(); }
   		});
   		$('#share_tw  , .share_tw').click(function() {
   			var twitterWindow = window.open('https://twitter.com/share?url=' + document.URL, 'twitter-popup', 'height=350,width=600');
   			if(twitterWindow.focus) { twitterWindow.focus(); }
   		});
      function printDiv() {
          var divContents = document.getElementById("print_post").innerHTML;
          var a = window.open('', '', 'height=500, width=500');
          a.document.write('<html>');
          a.document.write('<body >');
          a.document.write(divContents);
          a.document.write('</body></html>');
          a.document.close();
          a.print();
      }
   		</script>
   		<!--end::Page Scripts-->
   	</body>
   	<!--end::Body-->
   </html>
<?php } }else{?>
	<?php header("location: ../error/404"); ?>
<?php } ?>
