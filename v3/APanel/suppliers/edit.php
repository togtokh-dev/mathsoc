<?php
	include('../../db.php');
	$id = $_POST["id"];
	$text = $_POST["text"];
	$column_name = $_POST["column_name"];
	$sql = "UPDATE suppliers SET ".$column_name."='".$text."' WHERE id='".$id."'";
	if(mysqli_query($db, $sql))
	{
		echo 'Нийлүүлэгчийн мэдээлэл шинэчилэгдлээ';
	}
 ?>
