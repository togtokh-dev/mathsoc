<?php include('serverV1.php'); ?>
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

 if(!empty($facebook_user_info['id']))
 {
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

}
else
{

}
?>
<?php

 echo $facebook_login_url;

echo   @$facebook_user_info['id'] ;
echo   @$name ;
echo   @$email ;
echo   '<img src="'.@$image.'" alt="">';

?>
