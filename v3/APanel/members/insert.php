<?php
include('../../db.php');
$sql = "INSERT INTO members (img, url,name,body,add_row) VALUES('".$_POST["img"]."', '".$_POST["url"]."' , '".$_POST["name"]."', '".$_POST["body"]."', '".$_POST["add_row"]."')";

if(mysqli_query($db, $sql))
{
     echo 'Гишүүний мэдээлэл нэмэгдлээ';
}else{
  echo "false";
}
 ?>
