<?php include('serverV1.php');
if (isset($_POST['f_pass'])) {
  $email =$_POST['email'];
  $ck = mysqli_query($db, "SELECT * FROM users_1 WHERE email ='$email' ");
  if(mysqli_num_rows($ck)==1){
    function user_id_rand($length = 7) {
        return substr(str_shuffle(str_repeat($x='0123456789', ceil($length/strlen($x)) )),1,$length);
    }
    $_SESSION['forgot']['email']=$email ;
    $_SESSION['forgot']['rand'] =user_id_rand();
    $html='<div style="max-width:550px; min-width:320px;  background-color: white; border: 1px solid #DDDDDD; margin-right: auto; margin-left: auto;">
      <div style="margin-left:30px;margin-right:30px">
        <p>&nbsp;</p>
        <p><a href="https://mathsoc.mn" style="text-decoration:none;font-family:Verdana, Geneva, sans-serif;font-weight: bold; color: #3D3D3D;font-size: 15px">Mathsoc.mn</a></p>
        <hr style="margin-top:10px;margin-bottom:65px;border:none;border-bottom:1px solid red"/>
        <h1 style="font-family: Tahoma, Geneva, sans-serif; font-weight: normal; color: #2A2A2A; text-align: center; margin-bottom: 65px;font-size: 20px; letter-spacing: 6px;font-weight: normal; border: 2px solid black; padding: 15px;">Нууц үг сэргээх  код : <span style="color:blue;">'.$_SESSION['forgot']['rand'].'</span> </h1>
        <table style="width:100%;">
          <th>
            <td style="width:25%"></td>
            <td style="background-color:black;with:50%;text-align:center;padding:15px"><a href="https://mathsoc.mn" style="margin-left: auto; margin-right: auto;text-decoration:none;color: white;text-align:center;font-family:Courier New, Courier, monospace;font-weight:600;letter-spacing:2px;background-color:black;">Mongolian Mathematical Society</a></td>
            <td style="width:25%"></td>
          </th>
        </table>
        <hr style="margin-top:10px;margin-top:75px"/>
        <p style="text-align:center;margin-bottom:15px"><small style="text-align:center;font-family:Courier New, Courier, monospace;font-size:10px;color#666;"> 2020 © Зохиогчийн эрх хуулиар хамгаалагдсан <a href="https://mathsoc.mn" style="color:#666">Mongolian Mathematical Society</a> | Made with <span style="color:red">&hearts;</span> in Togtokh0</small></p>
        <p>&nbsp;</p>
      </div>
    </div>';
    mail_v1($email,'Монголын Математикийн Нийгэмлэг нууц үг сэргээх',$html);

  }
}
if (isset($_GET['re_email'])) {
  if(isset($_SESSION['forgot'])){
    function user_id_rand($length = 7) {
        return substr(str_shuffle(str_repeat($x='0123456789', ceil($length/strlen($x)) )),1,$length);
    }
    $_SESSION['forgot']['rand'] =user_id_rand();
    $html='<div style="max-width:550px; min-width:320px;  background-color: white; border: 1px solid #DDDDDD; margin-right: auto; margin-left: auto;">
      <div style="margin-left:30px;margin-right:30px">
        <p>&nbsp;</p>
        <p><a href="https://mathsoc.mn" style="text-decoration:none;font-family:Verdana, Geneva, sans-serif;font-weight: bold; color: #3D3D3D;font-size: 15px">Mathsoc.mn</a></p>
        <hr style="margin-top:10px;margin-bottom:65px;border:none;border-bottom:1px solid red"/>
        <h1 style="font-family: Tahoma, Geneva, sans-serif; font-weight: normal; color: #2A2A2A; text-align: center; margin-bottom: 65px;font-size: 20px; letter-spacing: 6px;font-weight: normal; border: 2px solid black; padding: 15px;">Нууц үг сэргээх  код : <span style="color:blue;">'.$_SESSION['forgot']['rand'].'</span> </h1>
        <table style="width:100%;">
          <th>
            <td style="width:25%"></td>
            <td style="background-color:black;with:50%;text-align:center;padding:15px"><a href="https://mathsoc.mn" style="margin-left: auto; margin-right: auto;text-decoration:none;color: white;text-align:center;font-family:Courier New, Courier, monospace;font-weight:600;letter-spacing:2px;background-color:black;">Mongolian Mathematical Society</a></td>
            <td style="width:25%"></td>
          </th>
        </table>
        <hr style="margin-top:10px;margin-top:75px"/>
        <p style="text-align:center;margin-bottom:15px"><small style="text-align:center;font-family:Courier New, Courier, monospace;font-size:10px;color#666;"> 2020 © Зохиогчийн эрх хуулиар хамгаалагдсан <a href="https://mathsoc.mn" style="color:#666">Mongolian Mathematical Society</a> | Made with <span style="color:red">&hearts;</span> in Togtokh0</small></p>
        <p>&nbsp;</p>
      </div>
    </div>';
    mail_v1($_SESSION['forgot']['email'],'Монголын Математикийн Нийгэмлэг нууц үг сэргээх',$html);

  }

}
if (isset($_POST['f_pass_ck'])) {
  $email_ck =$_POST['email_ck'];
  if($email_ck==$_SESSION['forgot']['rand']){
    $email_ok =$_SESSION['forgot']['email'];
    $password=md5($_POST['password']);
    mysqli_query($db, "UPDATE users_1 SET password='$password' WHERE email='$email_ok' ");
        unset($_SESSION['forgot']);

  }
}

?>

<!DOCTYPE html>
<html lang="en">
	<head><base >
		<meta charset="utf-8" />
		<title>Forgot Password</title>
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
              <?php if(isset($_SESSION['forgot'])){ ?>
							<form class="form"  action="" method="post">
                <div class="pb-5 pb-lg-15">
                  <h3 class="font-weight-bolder text-dark font-size-h2 font-size-h1-lg">Нууц үг шинэчилэх</h3>
                    <div class="text-muted font-weight-bold font-size-h4">Бүртгэлээ сансан бол?
                  <a href="login.php" class="text-primary font-weight-bolder">Нэвтрэх</a></div>
                </div>
								<div class="form-group">
									<label class="font-size-h6 font-weight-bolder text-dark">И-мэйл ээр ирсэн нэг удаагийн код</label>
										<input class="form-control h-auto py-4 px-6 rounded-lg border-0" type="text" name="email_ck"  autocomplete="off" />
									<span id="email_error" class="text-danger"></span>
								</div>
								<div class="form-group" >
									<div class="d-flex justify-content-between mt-n5">
										<label class="font-size-h6 font-weight-bolder text-dark pt-5">Шинэ нууц үг</label>
										<a href="?re_email=0" class="text-primary font-size-h6 font-weight-bolder text-hover-primary pt-5">Дахиж и-мэйл  авах</a>
									</div>
									<input class="form-control h-auto py-4 px-6 rounded-lg border-0 " type="password" name="password" id="password" autocomplete="off" />
									<input type="text" name="type" value="login" hidden/>
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
								<div class="pb-lg-0 pb-5  ">
                  <input type="submit" id="submitBtn_2" class="btn btn-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mr-3 "name="f_pass_ck" value="Илгээх">
								</div>
							</form>
              <?php } else {  ?>
                <form class="form"  action="" method="post">
  								<div class="pb-5 pb-lg-15">
  									<h3 class="font-weight-bolder text-dark font-size-h2 font-size-h1-lg">Нууц үг шинэчилэх</h3>
  										<div class="text-muted font-weight-bold font-size-h4">Бүртгэлээ сансан бол?
  									<a href="login.php" class="text-primary font-weight-bolder">Нэвтрэх</a></div>
  								</div>
  								<div class="form-group">
  									<label class="font-size-h6 font-weight-bolder text-dark">И-мэйл</label>
  										<input class="form-control h-auto py-4 px-6 rounded-lg border-0" type="email" name="email" id="email" autocomplete="off" />
  									<span id="email_error" class="text-danger"></span>
  								</div>
  								<div class="pb-lg-0 pb-5  ">
                    <input type="submit" id="submitBtn" class="btn btn-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mr-3 " name="f_pass" value="Илгээх">
  								</div>
  							</form>
              <?php } ?>
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
    $('#submitBtn_2').prop('disabled', true);
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
      $('#submitBtn_2').prop('disabled', false);
    } else{
      pass_cheke = false;
      $("#password").removeClass('is-valid');
      $("#password").addClass('is-invalid');
      $('#submitBtn_2').prop('disabled', true);
    }
    });
		</script>
	</body>
</html>
