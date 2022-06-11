<?php include('../serverV1.php'); ?>
<?php
$user_all = mysqli_query($db, "SELECT * FROM post");
?>
<?php
 $arrayName = array(
   'posts' => mysqli_num_rows($user_all),
 );
  echo json_encode($arrayName);
 ?>
