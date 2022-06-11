<?php
  session_start();
  require_once 'api/autoload.php';
	$facebook = new \Facebook\Facebook([
		'app_id'      => '467598577547586',
		'app_secret'     => '6031c337ef22d94a6cf4dfc55975a27b',
		'default_graph_version'  => 'v8.0'
	]);
function mail_v1($to,$subject,$msg){
  require '../../php/Mail.php';
  if($subject==''){
      $subject = 'Монголын Математикийн Нийгэмлэг вэб хөгжүүлэгчээс';
  }
  $message = wordwrap($msg,70);
  $headers = 'From: webmaster@mathsoc.mn' . "\r\n" .
      'Reply-To: webmaster@mathsoc.mn' . "\r\n" .
      'MIME-Version: 1.0' . "\r\n" .
      'Content-Type: text/html; charset=utf-8' . "\r\n" .
      'X-Mailer: PHP/' . phpversion();
      ini_set ( "SMTP", "ssl://mail.mathsoc.mn" );
  mail($to, $subject, $message, $headers);
}
$db = mysqli_connect('localhost', 'mathsocm', '5N4kTQ1Jw.a5s@', 'mathsocm_db1');
$actual_link = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; date_default_timezone_set("Asia/Ulaanbaatar");
$time=(new DateTime())->format("Y-m-d G:i:s");
$time_short=(new DateTime())->format("Y-m-d");
$host_url="https://mathsoc.mn/v2/";
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

//fb
$facebook_output = '';
$facebook_helper = $facebook->getRedirectLoginHelper();
$facebook_permissions = ['email'];
$facebook_login_url_l = $facebook_helper->getLoginUrl($host_url.'login.php', $facebook_permissions);
$facebook_login_url = $facebook_helper->getLoginUrl($host_url.'profile.php', $facebook_permissions);
 ?>
