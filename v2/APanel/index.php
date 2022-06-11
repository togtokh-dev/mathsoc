<?php include('../serverV1.php');
if (!isAdmin()) {
	header('location: ../index.php');
}
if(isset($_GET['del_math'])){
	$del_id = $_GET['del_math'];
	mysqli_query($db, "DELETE FROM math_7 WHERE id=$del_id");
}
 ?>

<!DOCTYPE html>
<html lang="en">
	<!--begin::Head-->
	<head>
		<meta charset="utf-8" />
		<title>Mongolian Mathematical Society</title>
		<meta name="description" content="Bootstrap select examples" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600&display=swap" rel="stylesheet">
		<!--end::Fonts-->
		<!--begin::Global Theme Styles(used by all pages)-->
		<link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="assets/plugins/custom/prismjs/prismjs.bundle.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/add.css" rel="stylesheet" type="text/css" />
		<!--end::Global Theme Styles-->
		<!--begin::Layout Themes(used by all pages)-->
		<link href="assets/css/themes/layout/header/base/light.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/themes/layout/header/menu/light.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/themes/layout/brand/dark.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/themes/layout/aside/dark.css" rel="stylesheet" type="text/css" />
		<!--end::Layout Themes-->
		<link rel="shortcut icon" href="assets/media/logos/favicon.png" />
		<?php echo $head_form; ?>
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
		<!--begin::Main-->
		<!--begin::Header Mobile-->
		<div id="kt_header_mobile" class="header-mobile align-items-center header-mobile-fixed">
			<!--begin::Logo-->
			<a href="index.php">
				<img alt="Logo" src="assets/media/logos/logo-light.png" />
			</a>
			<!--end::Logo-->
			<!--begin::Toolbar-->
			<div class="d-flex align-items-center">
				<!--begin::Aside Mobile Toggle-->
				<button class="btn p-0 burger-icon burger-icon-left" id="kt_aside_mobile_toggle">
					<span></span>
				</button>
				<!--end::Aside Mobile Toggle-->
				<!--begin::Header Menu Mobile Toggle-->
				<button class="btn p-0 burger-icon ml-4" id="kt_header_mobile_toggle">
					<span></span>
				</button>
				<!--end::Header Menu Mobile Toggle-->
				<!--begin::Topbar Mobile Toggle-->
				<button class="btn btn-hover-text-primary p-0 ml-2" id="kt_header_mobile_topbar_toggle">
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
				<!--end::Topbar Mobile Toggle-->
			</div>
			<!--end::Toolbar-->
		</div>
		<!--end::Header Mobile-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Page-->
			<div class="d-flex flex-row flex-column-fluid page">
				<!--begin::Aside-->
				<div class="aside aside-left aside-fixed d-flex flex-column flex-row-auto" id="kt_aside">
					<!--begin::Brand-->
					<div class="brand flex-column-auto" id="kt_brand">
						<!--begin::Logo-->
						<a href="index.php" class="brand-logo">
							<img alt="Logo" src="assets/media/logos/logo-light.png" />
						</a>
						<!--end::Logo-->
						<!--begin::Toggle-->
						<button class="brand-toggle btn btn-sm px-0" id="kt_aside_toggle">
							<span class="svg-icon svg-icon svg-icon-xl">
								<!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Angle-double-left.svg-->
								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
									<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
										<polygon points="0 0 24 0 24 24 0 24" />
										<path d="M5.29288961,6.70710318 C4.90236532,6.31657888 4.90236532,5.68341391 5.29288961,5.29288961 C5.68341391,4.90236532 6.31657888,4.90236532 6.70710318,5.29288961 L12.7071032,11.2928896 C13.0856821,11.6714686 13.0989277,12.281055 12.7371505,12.675721 L7.23715054,18.675721 C6.86395813,19.08284 6.23139076,19.1103429 5.82427177,18.7371505 C5.41715278,18.3639581 5.38964985,17.7313908 5.76284226,17.3242718 L10.6158586,12.0300721 L5.29288961,6.70710318 Z" fill="#000000" fill-rule="nonzero" transform="translate(8.999997, 11.999999) scale(-1, 1) translate(-8.999997, -11.999999)" />
										<path d="M10.7071009,15.7071068 C10.3165766,16.0976311 9.68341162,16.0976311 9.29288733,15.7071068 C8.90236304,15.3165825 8.90236304,14.6834175 9.29288733,14.2928932 L15.2928873,8.29289322 C15.6714663,7.91431428 16.2810527,7.90106866 16.6757187,8.26284586 L22.6757187,13.7628459 C23.0828377,14.1360383 23.1103407,14.7686056 22.7371482,15.1757246 C22.3639558,15.5828436 21.7313885,15.6103465 21.3242695,15.2371541 L16.0300699,10.3841378 L10.7071009,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(15.999997, 11.999999) scale(-1, 1) rotate(-270.000000) translate(-15.999997, -11.999999)" />
									</g>
								</svg>
								<!--end::Svg Icon-->
							</span>
						</button>
						<!--end::Toolbar-->
					</div>
					<!--end::Brand-->
					<!--begin::Aside Menu-->
					<div class="aside-menu-wrapper flex-column-fluid" id="kt_aside_menu_wrapper">
						<!--begin::Menu Container-->
						<div id="kt_aside_menu" class="aside-menu my-4" data-menu-vertical="1" data-menu-scroll="1" data-menu-dropdown-timeout="500">
							<!--begin::Menu Nav-->
							<ul class="menu-nav">
								<li class="menu-item menu-item-open menu-item-here" aria-haspopup="true">
									<a href="index.php" class="menu-link">
										<i class="menu-icon flaticon2-architecture-and-city"></i>
										<span class="menu-text">Нүүр</span>
									</a>
								</li>
								<li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
									<a href="javascript:;" class="menu-link menu-toggle">
										<i class="menu-icon flaticon2-contract"></i>
										<span class="menu-text">Файл</span>
										<i class="menu-arrow"></i>
									</a>
									<div class="menu-submenu">
										<i class="menu-arrow"></i>
										<ul class="menu-subnav">
											<li class="menu-item menu-item-parent" aria-haspopup="true">
												<span class="menu-link">
													<span class="menu-text">Файл</span>
												</span>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="upload_image.php" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Зураг оруулах</span>
												</a>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="upload_file.php" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Бусад файл оруулах</span>
												</a>
											</li>
										</ul>
									</div>
								</li>
								<li class="menu-item menu-item-submenu " aria-haspopup="true" data-menu-toggle="hover">
									<a href="javascript:;" class="menu-link menu-toggle">
										<i class="menu-icon flaticon2-browser-2"></i>
										<span class="menu-text">Мэдээлэл</span>
										<i class="menu-arrow"></i>
									</a>
									<div class="menu-submenu">
										<i class="menu-arrow"></i>
										<ul class="menu-subnav">
											<li class="menu-item menu-item-parent" aria-haspopup="true">
												<span class="menu-link">
													<span class="menu-text">Мэдээлэл оруулах</span>
												</span>
											</li>
											<li class="menu-item " aria-haspopup="true">
												<a href="insert_post.php" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Мэдээ оруулах</span>
												</a>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="insert_math.php" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Бодлого оруулах</span>
												</a>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="del_post.php" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Мэдээ устгах</span>
												</a>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="del_math.php" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Мэдээ засвар</span>
												</a>
											</li>
										</ul>
									</div>
								</li>
							</ul>
							<!--end::Menu Nav-->
						</div>
						<!--end::Menu Container-->
					</div>
					<!--end::Aside Menu-->
				</div>
				<!--end::Aside-->
				<!--begin::Wrapper-->
				<div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
					<!--begin::Header-->
					<div id="kt_header" class="header header-fixed">
						<!--begin::Container-->
						<div class="container-fluid d-flex align-items-stretch justify-content-between">
							<!--begin::Header Menu Wrapper-->
							<div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">
								<!--begin::Header Menu-->
								<div id="kt_header_menu" class="header-menu header-menu-mobile header-menu-layout-default">
									<!--begin::Header Nav-->
									<ul class="menu-nav">
										<li class="menu-item menu-item-submenu menu-item-rel menu-item-active" data-menu-toggle="click" aria-haspopup="true">
											<a href="../" class="menu-link" target="_blank">
												<span class="menu-text">Нүүр хэсэг</span>
												<i class="menu-arrow"></i>
											</a>
										</li>
                    <li class="menu-item menu-item-submenu menu-item-rel menu-item-active" data-menu-toggle="click" aria-haspopup="true">
											<a href="../math.php" class="menu-link" target="_blank">
												<span class="menu-text">Бодлог ийн сан хэсэг</span>
												<i class="menu-arrow"></i>
											</a>
										</li>
									</ul>
									<!--end::Header Nav-->
								</div>
								<!--end::Header Menu-->
							</div>
							<!--end::Header Menu Wrapper-->
							<!--begin::Topbar-->
							<div class="topbar">
								<!--begin::Quick panel-->
								<div class="topbar-item">
									<div class="btn btn-icon btn-clean btn-lg mr-1" id="kt_quick_panel_toggle">
										<span class="svg-icon svg-icon-xl svg-icon-primary">
											<!--begin::Svg Icon | path:assets/media/svg/icons/Layout/Layout-4-blocks.svg-->
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect x="0" y="0" width="24" height="24" />
													<rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5" />
													<path d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z" fill="#000000" opacity="0.3" />
												</g>
											</svg>
											<!--end::Svg Icon-->
										</span>
									</div>
								</div>
								<!--end::Quick panel-->
								<!--begin::User-->
								<div class="topbar-item">
						      <div class="btn btn-icon w-auto btn-clean d-flex align-items-center btn-lg px-2 " id="kt_quick_user_toggle">
						        <span class="text-muted font-weight-bold font-size-base d-none d-md-inline mr-1"><?php echo $_SESSION['user_mms']['username']; ?></span>
						        <span class="symbol symbol-35">
						          <img src="<?php if($_SESSION['user_mms']['photo']=='img_null'){
						            echo $host_url."uploads/logo.png";
						          }else{
						            echo $_SESSION['user_mms']['photo'];
						          } ?>" alt="" />
						        </span>
						      </div>
						    </div>
								<!--end::User-->
							</div>
							<!--end::Topbar-->
						</div>
						<!--end::Container-->
					</div>
					<!--end::Header-->
					<!--begin::Content-->
					<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
						<!--begin::Subheader-->
						<div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
							<div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
								<!--begin::Info-->
								<div class="d-flex align-items-center flex-wrap mr-1">
									<!--begin::Page Heading-->
									<div class="d-flex align-items-baseline mr-5">
										<!--begin::Page Title-->
										<h5 class="text-dark font-weight-bold my-2 mr-5">Хяналт</h5>
										<!--end::Page Title-->
									</div>
									<!--end::Page Heading-->
								</div>
								<!--end::Info-->
								<!--begin::Toolbar-->
								<div class="d-flex align-items-center">
									<!--begin::Dropdown-->
									<div class="dropdown dropdown-inline" data-toggle="tooltip" title="Файл нэмэх" data-placement="left">
										<a href="#" class="btn btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											<span class="svg-icon svg-icon-success svg-icon-2x">
												<!--begin::Svg Icon | path:assets/media/svg/icons/Files/File-plus.svg-->
												<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
													<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
														<polygon points="0 0 24 0 24 24 0 24" />
														<path d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
														<path d="M11,14 L9,14 C8.44771525,14 8,13.5522847 8,13 C8,12.4477153 8.44771525,12 9,12 L11,12 L11,10 C11,9.44771525 11.4477153,9 12,9 C12.5522847,9 13,9.44771525 13,10 L13,12 L15,12 C15.5522847,12 16,12.4477153 16,13 C16,13.5522847 15.5522847,14 15,14 L13,14 L13,16 C13,16.5522847 12.5522847,17 12,17 C11.4477153,17 11,16.5522847 11,16 L11,14 Z" fill="#000000" />
													</g>
												</svg>
												<!--end::Svg Icon-->
											</span>
										</a>
										<div class="dropdown-menu dropdown-menu-md dropdown-menu-right p-0 m-0">
											<!--begin::Navigation-->
											<ul class="navi navi-hover">
												<li class="navi-header font-weight-bold py-4">
													<span class="font-size-lg">Сонголтууд : </span>
												</li>
												<li class="navi-separator mb-3 opacity-70"></li>
												<li class="navi-item">
													<a href="upload_image.php" class="navi-link">
														<span class="navi-text">
															<span class="label label-xl label-inline label-light-success">Зураг нэмэх</span>
														</span>
													</a>
												</li>
												<li class="navi-item">
													<a href="upload_file.php" class="navi-link">
														<span class="navi-text">
															<span class="label label-xl label-inline label-light-danger">Файл нэмэх</span>
														</span>
													</a>
												</li>
											</ul>
											<!--end::Navigation-->
										</div>
									</div>
									<!--end::Dropdown-->
								</div>
								<!--end::Toolbar-->
							</div>
						</div>
						<!--end::Subheader-->
						<!--begin::Entry-->
						<div class="d-flex flex-column-fluid">
							<!--begin::Container-->
							<div class="container">
								<div class="row">
									<div class="col-lg-6">
										<!--begin::Card-->
										<div class="card card-custom gutter-b">
											<div class="card-header">
												<div class="card-title">
													<h3 class="card-label"><?php $response = file_get_contents($host_url.'/api/user.php');
													$response_data = json_decode($response);
													$get_json = ( (array) $response_data);

													 ?> Бүртгэлийн мэдээлэл 1</h3>
												</div>
											</div>
											<div class="card-body">
												<!--begin::Chart-->
												<div id="chart_1" class="d-flex justify-content-center"></div>
												<!--end::Chart-->
											</div>
										</div>
										<!--end::Card-->
									</div>
									<div class="col-lg-6">
										<!--begin::Card-->
										<div class="card card-custom gutter-b">
											<div class="card-header">
												<div class="card-title">
													<h3 class="card-label">Бүртгэлийн мэдээлэл 2</h3>
												</div>
											</div>
											<div class="card-body">
												<!--begin::Chart-->
												<div id="chart_2" class="d-flex justify-content-center"></div>
												<!--end::Chart-->
											</div>
										</div>
										<!--end::Card-->
									</div>
									<div class="col-lg-6">
										<!--begin::Card-->
										<div class="card card-custom gutter-b">
											<div class="card-header">
												<div class="card-title">
													<h3 class="card-label">Хэрэглэгчийн мэдээлэл 1 </h3>
												</div>
											</div>
											<div class="card-body">
												<!--begin::Chart-->
												<div id="chart_3" class="d-flex justify-content-center"></div>
												<!--end::Chart-->
											</div>
										</div>
										<!--end::Card-->
									</div>
									<div class="col-lg-6">
										<!--begin::Card-->
										<div class="card card-custom gutter-b">
											<div class="card-header">
												<div class="card-title">
													<h3 class="card-label">Хэрэглэгчийн мэдээлэл 2</h3>
												</div>
											</div>
											<div class="card-body">
												<!--begin::Chart-->
												<div id="chart_4" class="d-flex justify-content-center"></div>
												<!--end::Chart-->
											</div>
										</div>
										<!--end::Card-->
									</div>
									<div class="col-lg-12">
										<!--begin::Card-->
										<div class="card card-custom">
											<div class="card-header flex-wrap border-0 pt-6 pb-0">
												<div class="card-title">
													<h3 class="card-label">Бодлогийн хариулт хүлээн авах</h3>
												</div>
											</div>
											<div class="card-body">
												<!--begin: Search Form-->
												<!--begin::Search Form-->
												<div class="mb-7">
													<div class="row align-items-center">
														<div class="col-lg-9 col-xl-8">
															<div class="row align-items-center">
																<div class="col-md-4 my-2 my-md-0">
																	<div class="input-icon">
																		<input type="text" class="form-control" placeholder="Хайх..." id="kt_datatable_search_query" />
																		<span>
																			<i class="flaticon2-search-1 text-muted"></i>
																		</span>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<!--end::Search Form-->
												<!--end: Search Form-->
												<!--begin: Datatable-->
												<div class="datatable datatable-bordered datatable-head-custom" id="kt_datatable"></div>
												<!--end: Datatable-->
											</div>
										</div>
										<!--end::Card-->
									</div>
								</div>
							</div>
							<!--end::Container-->
						</div>
						<!--end::Entry-->
					</div>
					<!--end::Content-->
					<!--begin::Footer-->
					<div class="footer bg-white py-4 d-flex flex-lg-column" id="kt_footer">
						<!--begin::Container-->
						<div class="container-fluid d-flex flex-column flex-md-row align-items-center justify-content-between">
							<!--begin::Copyright-->
							<div class="text-dark order-2 order-md-1">
								<span class="text-muted font-weight-bold mr-2" id="footer_date"></span>
								<a href="#" target="_blank" class="text-dark-75 text-hover-primary">MMS.MN</a>
							</div>
							<!--end::Copyright-->
							<!--begin::Nav-->
							<div class="nav nav-dark order-1 order-md-2">
								<a href="../about.php" target="_blank" class="nav-link pr-3 pl-0">Тухай</a>
								<a href="../contact.php" target="_blank" class="nav-link px-3">Холбоо барих</a>
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
		<!-- begin::User Panel-->
		<?php include('../container/user_p.php'); ?>
		<!-- end::User Panel-->
		<!--begin::Quick Panel-->
		<?php include('../container/file_click.php'); ?>
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
		<script>var HOST_URL = "<?php echo $host_url; ?>";</script>
		<!--begin::Global Config(global config for global JS scripts)-->
		<script>var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1200 }, "colors": { "theme": { "base": { "white": "#ffffff", "primary": "#3699FF", "secondary": "#E5EAEE", "success": "#1BC5BD", "info": "#8950FC", "warning": "#FFA800", "danger": "#F64E60", "light": "#F3F6F9", "dark": "#212121" }, "light": { "white": "#ffffff", "primary": "#E1F0FF", "secondary": "#ECF0F3", "success": "#C9F7F5", "info": "#EEE5FF", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" }, "inverse": { "white": "#ffffff", "primary": "#ffffff", "secondary": "#212121", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } }, "gray": { "gray-100": "#F3F6F9", "gray-200": "#ECF0F3", "gray-300": "#E5EAEE", "gray-400": "#D6D6E0", "gray-500": "#B5B5C3", "gray-600": "#80808F", "gray-700": "#464E5F", "gray-800": "#1B283F", "gray-900": "#212121" } }, "font-family": "Poppins" };</script>
		<!--end::Global Config-->
		<!--begin::Global Theme Bundle(used by all pages)-->
		<script src="assets/plugins/global/plugins.bundle.js"></script>
		<script src="assets/plugins/custom/prismjs/prismjs.bundle.js"></script>
		<script src="assets/js/scripts.bundle.js"></script>
		<script type="text/javascript">
		"use strict";

		// Shared Colors Definition
		const primary = '#6993FF';
		const success = '#1BC5BD';
		const info = '#8950FC';
		const warning = '#FFA800';
		const danger = '#F64E60';

		// Class definition
		function generateBubbleData(baseval, count, yrange) {
		    var i = 0;
		    var series = [];
		    while (i < count) {
		      var x = Math.floor(Math.random() * (750 - 1 + 1)) + 1;;
		      var y = Math.floor(Math.random() * (yrange.max - yrange.min + 1)) + yrange.min;
		      var z = Math.floor(Math.random() * (75 - 15 + 1)) + 15;

		      series.push([x, y, z]);
		      baseval += 86400000;
		      i++;
		    }
		    return series;
		  }

		function generateData(count, yrange) {
		    var i = 0;
		    var series = [];
		    while (i < count) {
		        var x = 'w' + (i + 1).toString();
		        var y = Math.floor(Math.random() * (yrange.max - yrange.min + 1)) + yrange.min;

		        series.push({
		            x: x,
		            y: y
		        });
		        i++;
		    }
		    return series;
		}

		var KTApexChartsDemo = function () {
			// Private functions



			var _demo1 = function () {
				const apexChart = "#chart_1";
				var options = {
					series: [<?php echo $get_json['users']-$get_json['user_save']; ?>, <?php echo $get_json['user_save']; ?>],
					chart: {
						width: 380,
						type: 'donut',
					},
					labels: ['Бусад ', 'Бүртгэлээ баталгаажуулсан'],
					responsive: [{
						breakpoint: 480,
						options: {
							chart: {
								width: 200
							},
							legend: {
								position: 'bottom'
							}
						}
					}],
					colors: [primary, success, warning, , info]
				};

				var chart = new ApexCharts(document.querySelector(apexChart), options);
				chart.render();
			}

			var _demo2 = function () {
				const apexChart = "#chart_2";
				var options = {
					series: [<?php echo $get_json['users']; ?>, <?php echo $get_json['users']-$get_json['user_save']; ?>],
					chart: {
						width: 380,
						type: 'pie',
					},
					labels: ['Бусад', 'Бүртгэлээ баталгаажуулаагүй'],
					responsive: [{
						breakpoint: 480,
						options: {
							chart: {
								width: 200
							},
							legend: {
								position: 'bottom'
							}
						}
					}],
					colors: [success, danger, info]
				};

				var chart = new ApexCharts(document.querySelector(apexChart), options);
				chart.render();
			}
			var _demo3 = function () {
				const apexChart = "#chart_4";
				var options = {
					series: [<?php echo $get_json['users']-$get_json['user_active']; ?>, <?php echo $get_json['user_active']; ?>],
					chart: {
						width: 380,
						type: 'donut',
					},
					labels: ['Бусад', 'Гишүүнчлэлтэй'],
					responsive: [{
						breakpoint: 480,
						options: {
							chart: {
								width: 200
							},
							legend: {
								position: 'bottom'
							}
						}
					}],
					colors: [success, info]
				};

				var chart = new ApexCharts(document.querySelector(apexChart), options);
				chart.render();
			}

			var _demo4 = function () {
				const apexChart = "#chart_3";
				var options = {
					series: [<?php echo $get_json['users']-$get_json['user_co']; ?>, <?php echo $get_json['user_co']; ?>],
					chart: {
						width: 380,
						type: 'pie',
					},
					labels: ['Хэрэглэгч', 'Мэдээ оруулагч'],
					responsive: [{
						breakpoint: 480,
						options: {
							chart: {
								width: 200
							},
							legend: {
								position: 'bottom'
							}
						}
					}],
					colors: [primary, success, warning, danger, info]
				};

				var chart = new ApexCharts(document.querySelector(apexChart), options);
				chart.render();
			}


			return {
				// public functions
				init: function () {
					_demo1();
					_demo2();
					_demo3();
					_demo4();
				}
			};

		}();

		jQuery(document).ready(function () {
			KTApexChartsDemo.init();
		});

		</script>
		<script type="text/javascript">
		'use strict';
		// Class definition
		var KTDatatableChildDataLocalDemo = function() {
			// Private functions

			var subTableInit = function(e) {
				$('<div/>').attr('id', 'child_data_local_' + e.data.RecordID).appendTo(e.detailCell).KTDatatable({
					data: {
						type: 'remote',
						source: {
								read: {
										url: HOST_URL+'/api/math_in.php?e='+e.data.RecordID,
								},
						},
						pageSize: 10, // display 20 records per page
					},
					// layout definition
					layout: {
						scroll: true,
						height: 400,
						footer: false,
					},

					sortable: true,

					// columns definition
					columns: [
						{
							field: 'OrderID',
							title: 'ID',
						}, {
							field: 'user',
							title: 'Хэрэглэгчийн нэр',
							width: 100,
							template: function(row) {
								return '<a href="../user/'+row.user_id+'" target="_blank">'+row.user+'\
									</a>';
							},
						}, {
							field: 'date',
							title: 'Илгээгдсэн хугцаа',
						},  {
							field: 'file_url',
							title: 'Файлын зам',
							// callback function support for column rendering
							template: function(row) {
								return '<a href="'+row.file_url+'" class="btn btn-sm btn-clean btn-icon mr-2"  target="_blank">\
											<span class="svg-icon svg-icon-md">\
													<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">\
															<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">\
																	<rect x="0" y="0" width="24" height="24"/>\
																	<path d="M5,8.6862915 L5,5 L8.6862915,5 L11.5857864,2.10050506 L14.4852814,5 L19,5 L19,9.51471863 L21.4852814,12 L19,14.4852814 L19,19 L14.4852814,19 L11.5857864,21.8994949 L8.6862915,19 L5,19 L5,15.3137085 L1.6862915,12 L5,8.6862915 Z M12,15 C13.6568542,15 15,13.6568542 15,12 C15,10.3431458 13.6568542,9 12,9 C10.3431458,9 9,10.3431458 9,12 C9,13.6568542 10.3431458,15 12,15 Z" fill="#000000"/>\
															</g>\
													</svg>\
											</span>\
									</a>';
							},
						}],
				});
			};

			// demo initializer
			var mainTableInit = function() {

				var dataJSONArray = JSON.parse(
					'[{"RecordID":1,"title":"Tommie","date":"Pee","Orders":[{"OrderID":"1","user":"togtokh","date":"2020-10-10","file_url":1}]}]');
					console.log(dataJSONArray);
				var datatable = $('#kt_datatable').KTDatatable({
					// datasource definition http://localhost/v1/mms/api/math_in.php
					data: {
						type: 'remote',
						source: {
								read: {
										url: HOST_URL+'/api/math_in.php',
								},
						},
						pageSize: 10, // display 20 records per page
					},

					// layout definition
					layout: {
						scroll: false,
						height: null,
						footer: false,
					},

					sortable: true,

					filterable: false,

					pagination: true,

					detail: {
						title: 'Load sub table',
						content: subTableInit,
					},

					search: {
						input: $('#kt_datatable_search_query'),
						key: 'generalSearch'
					},

					// columns definition
					columns: [
						{
							field: 'RecordID',
							title: '',
							sortable: false,
							width: 30,
							textAlign: 'center',
						}, {
							field: 'title',
							title: 'Бодлогийн нэр',
						}, {
							field: 'date',
							title: 'Нийтэлсэн онгоо',
						}, {
							field: 'Actions',
							width: 130,
							title: 'Хэрэглүүрүүд',
							sortable: false,
							overflow: 'visible',
							template: function(row) {
								return '\
																<a href="../math/'+row.RecordID+'" class="btn btn-sm btn-clean btn-icon mr-2" >\
																			<span class="svg-icon svg-icon-md">\
																					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">\
																							<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">\
																									<rect x="0" y="0" width="24" height="24"/>\
																									<path d="M5,8.6862915 L5,5 L8.6862915,5 L11.5857864,2.10050506 L14.4852814,5 L19,5 L19,9.51471863 L21.4852814,12 L19,14.4852814 L19,19 L14.4852814,19 L11.5857864,21.8994949 L8.6862915,19 L5,19 L5,15.3137085 L1.6862915,12 L5,8.6862915 Z M12,15 C13.6568542,15 15,13.6568542 15,12 C15,10.3431458 13.6568542,9 12,9 C10.3431458,9 9,10.3431458 9,12 C9,13.6568542 10.3431458,15 12,15 Z" fill="#000000"/>\
																							</g>\
																					</svg>\
																			</span>\
																	</a>\
															<a href="?del_math='+row.RecordID+'" class="btn btn-sm btn-clean btn-icon" title="Delete">\
																	<span class="svg-icon svg-icon-md">\
																			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">\
																					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">\
																							<rect x="0" y="0" width="24" height="24"/>\
																							<path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero"/>\
																							<path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3"/>\
																					</g>\
																			</svg>\
																	</span>\
															</a>\
													';
							},
						}],
				});

				$('#kt_datatable_search_status').on('change', function() {
					datatable.search($(this).val().toLowerCase(), 'Status');
				});

				$('#kt_datatable_search_type').on('change', function() {
					datatable.search($(this).val().toLowerCase(), 'Type');
				});

				$('#kt_datatable_search_status, #kt_datatable_search_type').selectpicker();
			};

			return {
				// Public functions
				init: function() {
					// init dmeo
					mainTableInit();
				},
			};
		}();

		jQuery(document).ready(function() {
			KTDatatableChildDataLocalDemo.init();
		});

		</script>
		<!--end::Global Theme Bundle-->
		<!--begin::Page Scripts(used by this page)-->
		<script src="assets/js/pages/crud/forms/widgets/bootstrap-select.js"></script>
    <script src="../assets/ckeditor/ckeditor.js"></script>
		<script type="text/javascript">
		var d = new Date();
    document.getElementById("footer_date").innerHTML = d.getFullYear()+" ©";

		</script>
		<!--end::Page Scripts-->
	</body>
	<!--end::Body-->
</html>