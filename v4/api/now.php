<?php
include('../serverV1.php');
//mail_v1('ganaa07lord@gmail.com','','togtokhooo goos');
if(isset($_SESSION['user_mms'])){
 echo json_encode($_SESSION['user_mms']);
}
unset($_SESSION['forgot']);
?>
