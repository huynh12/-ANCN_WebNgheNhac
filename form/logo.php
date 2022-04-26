<?php
	$noidung=mysqli_query($link,"select * from logo where id='1'");
	$row=mysqli_fetch_array($noidung);
	echo $row['noidung'];
?>