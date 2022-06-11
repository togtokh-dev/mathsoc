<?php include('serverV1.php'); ?>
<!DOCTYPE html>
<html lang="en">
	<head><base >
		<meta charset="utf-8" />
		<title>Login</title>
		<meta name="description" content="Mongolian Mathematical Society монголын математикийн нийгэмлэг mathsoc mathsoc.mn  Mongolian Mathematical" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		<meta property="fb:app_id"             content="467598577547586" />
		<meta property="og:url"                content="<?php echo $actual_link; ?>" />
		<meta property="og:type"               content="article" />
		<meta property="og:title"              content="Mongolian Mathematical Society " />
		<meta property="og:description"        content="Монголын математикийн нийгэмлэг" />
		<meta property="og:image"              content="<?php echo $host_url; ?>share.jpg" />
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<link href="assets/css/pages/login/login-5.css" rel="stylesheet" type="text/css" />
		<link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="assets/plugins/custom/prismjs/prismjs.bundle.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/themes/layout/header/base/light.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/themes/layout/header/menu/light.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/themes/layout/brand/dark.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/themes/layout/aside/dark.css" rel="stylesheet" type="text/css" />
		<script src="https://www.google.com/recaptcha/api.js" async defer></script>
		<link rel="shortcut icon" href="assets/media/logos/favicon.png" />
		<?php echo $head_form; ?>
	</head>
	<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
		<div class="d-flex flex-column flex-root">
			<div class="login login-5 wizard d-flex flex-column flex-lg-row flex-column-fluid">
				<div class="login-content flex-row-fluid d-flex flex-column p-10" >
					<div class="d-flex flex-row-fluid flex-center">
						<div class="login-form">
							<form class="form" id="login" action="" method="post">
								<div class="pb-5 pb-lg-15">
									<h3 class="font-weight-bolder text-dark font-size-h2 font-size-h1-lg">Нэвтрэн орно уу</h3>
										<div class="text-muted font-weight-bold font-size-h4">Шинэ хэрэглэгч үү?
									<a href="register.php" class="text-primary font-weight-bolder">Бүртгэл үүсгэх</a></div>
								</div>
								<div class="form-group">
									<label class="font-size-h6 font-weight-bolder text-dark">И-мэйл</label>
										<input class="form-control h-auto py-4 px-6 rounded-lg border-0" type="email" name="email" id="email" autocomplete="off" />
									<span id="email_error" class="text-danger"></span>
								</div>
								<div class="form-group">
									<div class="d-flex justify-content-between mt-n5">
										<label class="font-size-h6 font-weight-bolder text-dark pt-5">Нууц үг</label>
										<a href="forgot.php" class="text-primary font-size-h6 font-weight-bolder text-hover-primary pt-5">Нууц үгээ мартсан</a>
									</div>
									<input class="form-control h-auto py-4 px-6 rounded-lg border-0 " type="password" name="password" id="password" autocomplete="off" />
									<input type="text" name="type" value="login" hidden/>
									<span id="password_error" class="text-danger"></span>
								</div>
								<div class="form-group">
 			          	<div class="g-recaptcha" data-sitekey="6LfqLuEZAAAAAMf7Cce4UaHJxcCdMtN8xnRvUrGi"></div>
 			          	<span id="captcha_error" class="text-danger"></span>
 			         	</div>
								<div class="pb-lg-0 pb-5  ">
									<button type="submit" id="submitBtn" class="btn btn-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mr-3 ">Нэвтрэх</button>
									<a href="<?php echo $facebook_login_url_l; ?>" class="btn btn-light-primary font-weight-bolder px-8 py-4 my-3 font-size-lg " id="fb_login">
									<span class="svg-icon svg-icon-md">
										<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
											 viewBox="0 0 479.28 479.28" style="enable-background:new 0 0 479.28 479.28;" xml:space="preserve">
										<path style="fill:#1D5DAA;" d="M239.008,1.576c-131.984,0-237.376,107.016-237.376,239c0,120,85.368,219.328,205.368,236.392V327.64
											h-56v-64h56v-48.832c0-53.624,32.272-82.816,80.112-82.816c22.912,0,39.888,1.704,47.888,2.472v56.032l-33.064,0.016
											c-26.008,0-30.936,12.376-30.936,30.496v42.632h59.48l-8.088,64H271v150.064c112-14.512,208.28-115.112,208.28-237.128
											C479.28,108.592,370.992,1.576,239.008,1.576z"/>
										<path style="fill:#064D93;" d="M408,71.576c-93.328-93.328-244.672-93.328-338,0l137.28,137.272
											C209.608,159.92,240.44,132,285.48,132c22.912,0,41.52,1.704,49.52,2.472v56.032l-33.064,0.016
											c-26.008,0-30.936,12.376-30.936,30.496v42.624h59.48l-8.088,64h-0.288l84.632,82.68C500.056,316.992,501.328,164.904,408,71.576z"
											/>
										<path style="fill:#3E78CC;" d="M14,254.576c0-131.984,107.024-239,239.008-239c62.432,0,119.24,23.968,161.832,63.168
											C371.16,31.304,308.568,1.576,239.008,1.576C107.024,1.576,0,108.592,0,240.576C0,310.12,29.752,372.72,77.168,416.408
											C37.976,373.824,14,317,14,254.576z"/>
										<g>
											<path style="fill:#064D93;" d="M271,325.184V442l28.736,30c29.04-7.44,55.6-21.168,79.296-38.152L271,325.184z"/>
											<polygon style="fill:#064D93;" points="207,327.64 151.232,327.64 152.288,326.216 207,377.312 	"/>
										</g>
										<g>
											<circle style="fill:#5397EA;" cx="83.832" cy="115.544" r="8.664"/>
											<circle style="fill:#5397EA;" cx="83.832" cy="173.048" r="8.664"/>
											<circle style="fill:#5397EA;" cx="145.336" cy="115.544" r="8.664"/>
										</g>
										<g>
											<circle style="fill:#1D5DAA;" cx="228.336" cy="61.544" r="8.664"/>
											<circle style="fill:#1D5DAA;" cx="393.8" cy="142.232" r="8.672"/>
											<circle style="fill:#1D5DAA;" cx="306.944" cy="77.072" r="4.832"/>
										</g>
										<circle style="fill:#5397EA;" cx="86.784" cy="353.24" r="4.832"/>
										<circle style="fill:#1D5DAA;" cx="154.28" cy="71.72" r="2.112"/>
										<g>
											<circle style="fill:#5397EA;" cx="83.832" cy="261.544" r="8.664"/>
											<path style="fill:#5397EA;" d="M87,255.248c0,1.504-2.512,2.704-4.008,2.704l0,0c-1.48,0-3.992-1.2-3.992-2.704V120.92
												c0-1.504,2.512-2.704,3.992-2.704l0,0c1.504,0,4.008,1.2,4.008,2.704V255.248z"/>
											<path style="fill:#5397EA;" d="M142.672,111.64c1.488,0,2.696,2.496,2.704,4l0,0c-0.016,1.488-1.216,4-2.704,4H88.328
												c-1.496,0-2.704-2.512-2.704-4l0,0c0-1.504,1.208-4,2.704-4H142.672z"/>
											<circle style="fill:#5397EA;" cx="125.336" cy="173.048" r="8.664"/>
											<path style="fill:#5397EA;" d="M122.064,167.64c0.984,0,1.816,2.504,1.816,4.008l0,0c-0.024,1.488-0.832,3.992-1.816,3.992H85.456
												c-1,0-1.832-2.504-1.832-3.992l0,0c0-1.504,0.832-4.008,1.832-4.008H122.064z"/>
											<circle style="fill:#5397EA;" cx="394.2" cy="363.72" r="8.672"/>
											<circle style="fill:#5397EA;" cx="332.672" cy="363.72" r="8.672"/>
											<circle style="fill:#5397EA;" cx="394.2" cy="217.72" r="8.672"/>
											<path style="fill:#5397EA;" d="M391,224.032c0-1.504,2.496-2.704,4-2.704l0,0c1.488,0,4,1.2,4,2.704V358.36
												c0,1.504-2.512,2.704-4,2.704l0,0c-1.504,0-4-1.2-4-2.704V224.032z"/>
											<path style="fill:#5397EA;" d="M335.344,367.64c-1.488,0-2.704-2.496-2.704-4l0,0c0.016-1.488,1.216-4,2.704-4h54.344
												c1.488,0,2.704,2.512,2.704,4l0,0c0,1.504-1.216,4-2.704,4H335.344z"/>
										</g>	<g>	</g>	<g>	</g>	<g>	</g>	<g>	</g>	<g>	</g>	<g>	</g>	<g>	</g>	<g></g>	<g>	</g>	<g>	</g>	<g></g>	<g></g>	<g></g><g></g><g>	</g>
										</svg>
									</span>Facebook-ээр нэвтрэх</a>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<script>var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1200 }, "colors": { "theme": { "base": { "white": "#ffffff", "primary": "#3699FF", "secondary": "#E5EAEE", "success": "#1BC5BD", "info": "#8950FC", "warning": "#FFA800", "danger": "#F64E60", "light": "#F3F6F9", "dark": "#212121" }, "light": { "white": "#ffffff", "primary": "#E1F0FF", "secondary": "#ECF0F3", "success": "#C9F7F5", "info": "#EEE5FF", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" }, "inverse": { "white": "#ffffff", "primary": "#ffffff", "secondary": "#212121", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } }, "gray": { "gray-100": "#F3F6F9", "gray-200": "#ECF0F3", "gray-300": "#E5EAEE", "gray-400": "#D6D6E0", "gray-500": "#B5B5C3", "gray-600": "#80808F", "gray-700": "#464E5F", "gray-800": "#1B283F", "gray-900": "#212121" } }, "font-family": "Poppins" };</script>
		<script src="assets/plugins/global/plugins.bundle.js"></script>
		<script src="assets/plugins/custom/prismjs/prismjs.bundle.js"></script>
		<script src="assets/js/scripts.bundle.js"></script>
		<script >
		$('#submitBtn').prop('disabled', true);
		$('#password').keyup(function(){
			if($(this).val()===''){
				$(this).removeClass('is-valid');
				$(this).addClass('is-invalid');
			}else{
				$(this).removeClass('is-invalid');
				$(this).addClass('is-valid');
			}
		});
		$('#email').keyup(function(){
			var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
			if(!regex.test($(this).val())) {
				$(this).removeClass('is-valid');
				$(this).addClass('is-invalid');
				$('#submitBtn').prop('disabled', true);
			}else{
				$(this).removeClass('is-invalid');
				$(this).addClass('is-valid');
				$('#submitBtn').prop('disabled', false);
			}

		});
		function alert_center(utga,type,url){
			Swal.fire({
								text: utga,
								icon: type,
								buttonsStyling: false,
				confirmButtonText: "Ойлголоо!",
				customClass: {
					confirmButton: "btn font-weight-bold btn-light-primary"
				}
						}).then(function() {
							if(url!=null){
								location.href = url;
							}
				KTUtil.scrollTop();
			});
		}
		<?php unset($_SESSION['access_token']);
		if (isset($_SESSION['user_mms'])){
			echo 'alert_center("Аль хэдийн нэвтэрсэн байна","success","index.php");';
		}
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

		 if($facebook_user_info['id']){
			 $fb_l=$facebook_user_info['id'];
			 $pass_cheke = mysqli_query($db, "SELECT * FROM users_1 WHERE fb_id='$fb_l'  LIMIT 1");
			 if (mysqli_num_rows($pass_cheke) == 1){
				 $logged_in_user = mysqli_fetch_assoc($pass_cheke);
				 $_SESSION['user_mms'] = $logged_in_user;
				 	echo 'alert_center("Фэйсбүүкээр амжилттай нэвтэрлээ","success","index.php");';
			 }
		 }
		}
		 ?>
		    $("#login").on('submit', function(e){
		    e.preventDefault();
		    $.ajax({
		        type: 'POST',
		        url: 'json.php',
		        data: new FormData(this),
		        dataType: 'json',
		        contentType: false,
		        cache: false,
		        processData:false,
		        beforeSend: function(){
								$('#submitBtn').text('Түр хүлээнэ үү');
								$('#submitBtn').addClass('spinner spinner-white spinner-right');
		            $('#submitBtn').prop('disabled', true);
		            $('#login').css("opacity",".5");
		        },
		        success: function(response){
		          $('#submitBtn').prop('disabled', false);
							$('#submitBtn').removeClass('spinner spinner-white spinner-right');
							$('#submitBtn').text('Нэвтрэх');
		          $('#login').css("opacity","");
		          if(response.success){
								 alert_center("Нэвтэрлээ","success","index.php");
		          }else{
								alert_center("Уучлаарай, алдаа байна. Дараа дахин оролдоно уу","warning");
		            if(response.errors.email!=true){ $('#email_error').text(response.errors.email);}else{$('#email_error').text('');}
		            if(response.errors.pass!=true){  $('#password_error').text(response.errors.pass);}else{$('#password_error').text('');}
		            if(response.errors.captcha!=true){  $('#captcha_error').text(response.errors.captcha); }else{$('#captcha_error').text('');}
		          }
		        }
		    });
		    });
		</script>
	</body>
</html>
