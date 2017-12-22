<?php
include "db.php";

$xno = $_GET['id'];

$sql = "DELETE FROM tb_user WHERE id='$xno'";

$query = mysql_query($sql);

if ($query){
		header('location:index.php?user');
	} else {
		header('location:index.php?user?info=error&action=delete');
	}
?>