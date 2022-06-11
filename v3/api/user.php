<?php include('../serverV1.php'); ?>
<?php
$user_all = mysqli_query($db, "SELECT * FROM users_1");
$user_active = mysqli_query($db, "SELECT * FROM users_1");
$user_save = mysqli_query($db, "SELECT * FROM users_1 WHERE email_active=1");
$user_co = mysqli_query($db, "SELECT * FROM users_1 WHERE user_type='co_user'");
$user_admin = mysqli_query($db, "SELECT * FROM users_1 WHERE email_active='admin'");
?>
<?php
$count=0;
 while ($row = mysqli_fetch_array($user_active)) {
    if(substr($row['end_date'], 0, 4)-substr($time_short, 0, 4)<0){
      $bool_c = false;
    }else if(substr($row['end_date'], 0, 4)-substr($time_short, 0, 4)==0){
      if(substr($row['end_date'], 5, 2)-substr($time_short, 5, 2)>0){
        $bool_c = true;
      }else if (substr($row['end_date'], 5, 2)-substr($time_short, 5, 2)==0) {
        if(substr($row['end_date'], 8, 2)-substr($time_short, 8, 2)<=0){
          $bool_c = false;
        }else{
          $bool_c = true;
        }
      }else{
          $bool_c = false;
      }
    }else{
      $bool_c = true;
    }
    if($bool_c){
      $count++;
    }
 }
 $arrayName = array(
   'users' => mysqli_num_rows($user_all),
   'user_save'=> mysqli_num_rows($user_save),
   'user_co'=> mysqli_num_rows($user_co),
   'user_admin'=> mysqli_num_rows($user_admin),
   'user_active'=> $count,
 );
  echo json_encode($arrayName);
 ?>
