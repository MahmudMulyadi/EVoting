<?php
	include "db.php";
	$id		= $_GET['id'];
	$xnim 		= $_POST['nim'];
	$xnama 		= $_POST['nama'];
	$xjrs 		= $_POST['jurusan'];
	$xank 		= $_POST['angkatan'];
	$xpsw 		= trim(md5($_POST['password']));

	$sql = "UPDATE tb_user SET nim='$xnim',nama='$xnama',jurusan='$xjrs', angkatan='$xank',password='$xpsw' WHERE id='$id'";
			
	$query = mysql_query($sql);
	
	if ($query){
		header('location:index.php?user');
	} else {
		print "error";
	}
?>
