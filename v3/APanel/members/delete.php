<?php
	include('../../db.php');
	$sql = "DELETE FROM members WHERE id = '".$_POST["id"]."'";
	if(mysqli_query($db, $sql))
	{
		echo 'Гишүүний мэдээлэл устлаа';
	}
 ?>
