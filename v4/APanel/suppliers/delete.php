<?php
	include('../../db.php');
	$sql = "DELETE FROM suppliers WHERE id = '".$_POST["id"]."'";
	if(mysqli_query($db, $sql))
	{
		echo 'Нийлүүлэгчийн мэдээлэл устлаа';
	}
 ?>
