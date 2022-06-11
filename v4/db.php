<?php
  session_start();
  require_once 'api/autoload.php';
	$facebook = new \Facebook\Facebook([
		'app_id'      => '467598577547586',
		'app_secret'     => '6031c337ef22d94a6cf4dfc55975a27b',
		'default_graph_version'  => 'v8.0'
	]);
function mail_v1($to,$subject,$msg){
 
  mail($to, $subject, $message, $headers);
}
$db = mysqli_connect('localhost', 'root', '1234', 'mathsocm_db2');
$actual_link = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; date_default_timezone_set("Asia/Ulaanbaatar");
$time=(new DateTime())->format("Y-m-d G:i:s");
$time_short=(new DateTime())->format("Y-m-d");
$host_url="https://mathsoc.mn/v4/";
if (isset($_GET['logout'])) {
  session_destroy();
  unset($_SESSION['user']);
  header('location: '.$host_url);
}
$head_form ="
<script async src=\"https://www.googletagmanager.com/gtag/js?id=G-2HK8GSNM63\"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-2HK8GSNM63');
</script>";
$page_fb ='<div class="fb-page" data-href="https://www.facebook.com/MongolianMathematicalSociety/" data-tabs="timeline" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" ><blockquote cite="https://www.facebook.com/MongolianMathematicalSociety/" class="fb-xfbml-parse-ignore" ><a href="https://www.facebook.com/MongolianMathematicalSociety/">Монголын Математикийн Нийгэмлэг</a></blockquote></div>
';
//fb
$facebook_output = '';
$facebook_helper = $facebook->getRedirectLoginHelper();
$facebook_permissions = ['email'];
$facebook_login_url_l = $facebook_helper->getLoginUrl($host_url.'login.php', $facebook_permissions);
$facebook_login_url = $facebook_helper->getLoginUrl($host_url.'profile.php', $facebook_permissions);
$title = 'Mongolian Mathematical Society';
 ?>
