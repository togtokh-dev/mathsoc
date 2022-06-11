<?php include('serverV1.php'); ?>
<!DOCTYPE html>
<html lang="en">
	<head><base >
		<meta charset="utf-8" />
		<title>Register</title>
		<meta property="fb:app_id"             content="467598577547586" />
		<meta property="og:url"                content="<?php echo $actual_link; ?>" />
		<meta property="og:type"               content="article" />
		<meta property="og:title"              content="Mongolian Mathematical Society " />
		<meta property="og:description"        content="Монголын математикийн нийгэмлэг" />
		<meta property="og:image"              content="<?php echo $host_url; ?>share.jpg" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
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
		<link rel="shortcut icon" href="assets/media/bg/logo.png" />
		<?php echo $head_form; ?>
	</head>
	<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
		<div class="d-flex flex-column flex-root">
			<div class="login login-5 wizard d-flex flex-column flex-lg-row flex-column-fluid">
				<div class="login-content flex-row-fluid d-flex flex-column p-10" >
					<div class="d-flex flex-row-fluid flex-center">
						<div class="login-form">
							<form class="form" id="Register"  method="post">
								<div class="pb-5 pb-lg-15">
									<h3 class="font-weight-bolder text-dark font-size-h2 font-size-h1-lg">Бүртгэлээ үүсгэнэ үү</h3>
										<div class="text-muted font-weight-bold font-size-h4">Бүртгэлтэй юу?
									<a href="login.php" class="text-primary font-weight-bolder">Нэвтрэх</a></div>
								</div>
								<div class="form-group">
									<label class="font-size-h6 font-weight-bolder text-dark">Хэрэглэгчийн нэр</label>
										<input class="form-control h-auto py-4 px-6 rounded-lg border-0" type="text" name="username" id="username" autocomplete="off" />
									<span id="username_error" class="text-danger"></span>
								</div>
								<div class="form-group">
									<label class="font-size-h6 font-weight-bolder text-dark">И-мэйл</label>
										<input class="form-control h-auto py-4 px-6 rounded-lg border-0" type="email" name="email" id="email" autocomplete="off" />
									<span id="email_error" class="text-danger"></span>
								</div>
								<div class="form-group">
									<label class="font-size-h6 font-weight-bolder text-dark pt-5">Нууц үг</label>
										<input class="form-control h-auto py-4 px-6 rounded-lg border-0 " type="password" name="password" id="password" autocomplete="off" />
									<div class="" id="cheke_console" style=" display: none;">
				            <div id="check0">
				              <i class="far fa-check-circle"></i>  <span> Урт нь 5-аас их.</span>
				            </div>
				            <div id="check1">
				              <i class="far fa-check-circle"></i>  <span> Урт нь 15-аас бага.</span>
				            </div>
				            <div id="check2">
				              <i class="far fa-check-circle"></i>  <span> Тоон тэмдэгт агуулдаг.</span>
				            </div>
				            <div id="check3">
				              <i class="far fa-check-circle"></i>   <span>Тусгай тэмдэгт агуулдаг.</span>
				            </div>
				            <div id="check4">
				              <i class="far fa-check-circle"></i>  <span>Хоосон байж болохгүй.</span>
				            </div>
				          </div>
								</div>
								<div class="form-group">
									<label class="font-size-h6 font-weight-bolder text-dark pt-5">Нууц үгээ баталгаажуулна уу</label>
										<input class="form-control h-auto py-4 px-6 rounded-lg border-0 " type="password"  name="c_password" id="c_password" autocomplete="off" />
										<input type="text" name="type" value="reg" hidden/>
									<span id="c_password_error" class="text-danger"></span>
								</div>
								<div class="form-group">
 			          	<div class="g-recaptcha" data-sitekey="6LfqLuEZAAAAAMf7Cce4UaHJxcCdMtN8xnRvUrGi"></div>
 			          	<span id="captcha_error" class="text-danger"></span>
 			         	</div>
								<div class="pb-lg-0 pb-5  ">
									<button type="submit" id="submitBtn" class="btn btn-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mr-3 ">Бүртгүүлэх</button>
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
		  var pass_cheke =false;
		  var c_pass_cheke =false;
		  $( "#password" ).keyup( function() {
				if($(this).val()===''){
					$("#cheke_console").hide();
				}else{
					$("#cheke_console").show();
				}
		    var s1 = false;
		    var s2 = false;
		    var s3 = false;
		    var s4 = false;
		    var s5 = false;
		    var s6 = false;
		    var input = $( this ).val();
		    if(input.length>=5){ s1 =true; $("#check0").css("color", "green");
		  }else{ s1 =false; $("#check0").css("color", "tomato");}

		    if(input.length<=15){s2 =true; $("#check1").css("color", "green");
		  }  else{ s2 =false; $("#check1").css("color", "tomato");}

		    if(input.match(/[0-9]/i)){s3 =true; $("#check2").css("color", "green");
		  }else{  s3 =false;  $("#check2").css("color", "tomato");  }

		    if(input.match(/[^A-Za-z0-9-' ']/i)){  s4 =true; $("#check3").css("color", "green");
		  }  else{ s4 =false; $("#check3").css("color", "tomato"); }

		    if(!input.match(' '))  {     s5 =true;  $("#check4").css("color", "green");
		  }else{  s5 =false;   $("#check4").css("color", "tomato");};
		  if(s1 && s2 && s3 && s4 && s5){
		    $("#cheke_console").hide();
		    pass_cheke = true;
				$("#password").removeClass('is-invalid');
				$("#password").addClass('is-valid');
		  } else{
		    pass_cheke = false;
				$("#password").removeClass('is-valid');
				$("#password").addClass('is-invalid');
		  }
		  });
		    $( "#c_password" ).on('input', function() {
		      var input1 = $( "#c_password" ).val();
		      var input2 = $( "#password" ).val();
		      if(input1 === input2){
		        c_pass_cheke =true;
		        $("#c_password_error").text("");
						$("#c_password").removeClass('is-invalid');
						$("#c_password").addClass('is-valid');
		      }else{
		        $("#c_password_error").text("Нууц үгээ дахиж оруулна уу.");
						$("#c_password").removeClass('is-valid');
						$("#c_password").addClass('is-invalid');
		        c_pass_cheke =false;
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
				$('#username').keyup(function(){

					if($(this).val()==='') {
						$(this).removeClass('is-valid');
						$(this).addClass('is-invalid');
					}else{
						$(this).removeClass('is-invalid');
						$(this).addClass('is-valid');
					}

				});
				<?php
				if (isset($_SESSION['user_mms'])){
					echo 'alert_center("Аль хэдийн нэвтэрсэн байна","success","index.php");';
				} ?>
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
		      $("#Register").on('submit', function(e){
						 e.preventDefault();
		        if($("#username").val() != '' && $("#email").val() !='' && pass_cheke && c_pass_cheke){
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
										$('#submitBtn').text('Бүртгүүлэх');
		                $('#submitBtn').prop('disabled', false);
		                $('#login').css("opacity","");
		                console.log(response);
		                if(response.success){
											alert_center("Бүртгүүл үүслээ","success","login.php");
		          			}else{
		          				if(response.errors.email!=true){ $('#email_error').text(response.errors.email);}else{$('#email_error').text('');}
		          				if(response.errors.captcha!=true){  $('#captcha_error').text(response.errors.captcha); }else{$('#captcha_error').text('');}
		          			}
		          		}
		          });
		        } else{
							 alert_center("Та зарим зүйлсийг орхигдуулсан байна","warning");
		        }
		      });
		</script>
	</body>
</html>
