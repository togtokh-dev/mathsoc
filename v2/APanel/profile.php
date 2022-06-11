<?php include('../serverV1.php');
if (!isAdmin()) {
		header('location: ../index.php');
} ?>
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
																		<a href="../forgot.php" class="font-weight-bold font-size-sm">Нууц үгээ мартсан ?</a>
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
		<!--end::Global Theme Bundle-->
		<!--begin::Page Scripts(used by this page)-->
		<script src="assets/js/pages/crud/forms/widgets/bootstrap-select.js"></script>
    <script src="../assets/ckeditor/ckeditor.js"></script>
		<script src="assets/js/pages/widgets.js"></script>
		<script src="assets/js/pages/crud/forms/editors/summernote.js"></script>
		<script type="text/javascript">
		var d = new Date();
    document.getElementById("footer_date").innerHTML = d.getFullYear()+" ©";
    CKEDITOR.replace('body_mon', {
			extraPlugins: 'media',
      extraPlugins: 'mathjax',
      mathJaxLib: 'https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.4/MathJax.js?config=TeX-AMS_HTML',
      height: 320,
      on: {
          instanceReady: function() {
              this.dataProcessor.htmlFilter.addRules( {
                  elements: {
                      img: function( el ) {
                          if ( !el.attributes.alt )
                              el.attributes.alt = 'An image';
                          el.addClass( 'img-fluid' );
                      },
											iframe: function( el ) {
                          if ( !el.attributes.alt )
                          el.addClass( 'img-fluid' );
                      }
                  }
              } );
          }
      }
    });
    CKEDITOR.replace('body_en', {
			extraPlugins: 'media',
      extraPlugins: 'mathjax',
      mathJaxLib: 'https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.4/MathJax.js?config=TeX-AMS_HTML',
      height: 320,
      on: {
          instanceReady: function() {
              this.dataProcessor.htmlFilter.addRules( {
                  elements: {
                      img: function( el ) {
                          if ( !el.attributes.alt )
                              el.attributes.alt = 'An image';
                          el.addClass( 'img-fluid' );
                      },
											iframe: function( el ) {
                          if ( !el.attributes.alt )
                          el.addClass( 'img-fluid' );
                      }
                  }
              } );
          }
      }
    });
			$( '#imageFile' ).keyup(function() {
					$('#preview').attr('src',$(this).val());
			});
		</script>
		<!--end::Page Scripts-->
	</body>
	<!--end::Body-->
</html>
