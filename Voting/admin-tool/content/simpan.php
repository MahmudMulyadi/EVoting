<?php
	include "db.php";
	$xnim 		= $_POST['nim'];
	$xnama 		= $_POST['nama'];
	$xjrs 		= $_POST['jrs'];
	$xank		= $_POST['akt'];
	$xpsw		= trim(md5($_POST['psw']));
	$xstat		= $_POST['status'];

	
	$sql = "INSERT INTO tb_user (nim,nama,jurusan,angkatan,password,status) VALUES
			('$xnim','$xnama','$xjrs','$xank','$xpsw','$xstat')";
			
	$query = mysql_query($sql);
	
	if ($query){
		header('location:content/user.php');
	} else {
		header('location:content/pendaftaran.php');
	}
?>