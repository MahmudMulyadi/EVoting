<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
<link rel="stylesheet" href="assets/css/style.css" />
</head>
<body>
<?php
	require('db.php');
    // If form submitted, insert values into the database.
    if ( ! session_id() ) @ session_start();
    if (isset($_POST['nim'])){
		$username = $_POST['nim'];
		$password = $_POST['password'];
	//Checking is user existing in the database or not
        $query = "SELECT status,nama,status_voting FROM `tb_user` WHERE nim='$username' and password='".md5($password)."'";
		$result = mysql_query($query) or die(mysql_error());
		$rows = mysql_num_rows($result);
        if($rows==1){
        	$data = mysql_fetch_array($result);
			$_SESSION['username'] = $username;
			$_SESSION['status'] = $data['status'];
			$_SESSION['nama'] = $data['nama'];
			$_SESSION['status_voting'] = $data['status_voting'];
				//Redirect('vote/index.php', false);
			if($data['status']=='admin'){
?>
				<script> location.replace("admin-tool/index.php"); </script>
<?php
        	}else if($data['status']=='user'){
?>
        		<script> location.replace("vote/index.php"); </script>
<?php 
        	}
        }	
        else{
			echo "<div class='form'><h3>Username/password is incorrect.</h3><br/>Click here to <a href='login.php'>Login</a></div>";
		}
    	}
?>
	<div class="form">
	<h1>Log In</h1>
	<h1>Vote </h1>
	<form action="" method="post" name="login">
	<input type="text" name="nim" placeholder="Username" required />
	<input type="password" name="password" placeholder="Password" required />
	<input name="submit" type="submit" value="Login" />
	</form>


</body>
</html>
