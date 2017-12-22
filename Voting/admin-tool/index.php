<!doctype>
<html lang='ind'>
<head>
   <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="../assets/css/styles-menu-admin.css">
   <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
   <link rel="stylesheet" href="../assets/css/font-awesome.min.css">

   <script src="../assets/js/jquery.min.js"></script>
   <script src="../assets/js/bootstrap.min.js"></script>
   <script src="../assets/js/script.js"></script>
</head>
<body>
   <div class="col-md-2 colmenu" style="padding:0;">
      <div class="col-md-12" style="padding:10px;"><center><img src="../assets/images/profil.jpg" alt="" height="100px" width="100px"></center></div>
      <div class="col-md-12" style="padding:5px;padding-bottom:10px;color:#fff;"><center><?php $_SESSION['nama'] ?></center></div>
         <?php include "menu.php"; ?>  
   </div>
   <?php 
         if (isset($_GET['user'])) {
            include "content/user.php";
         }
		 elseif
			 (isset ($_GET['pendaftaran'])) {
			 include "content/pendaftaran.php";
		 }
       elseif
          (isset ($_GET['update'])) {
          include "content/update.php";
       }
       elseif
          (isset ($_GET['kandidat'])) {
          include "content/kandidat.php";
       }
       elseif
          (isset ($_GET['result'])) {
          include "content/results.php";
       }
       else if (isset($_GET['logout'])) {
            include "../login.php";
            session_destroy();
         }
         else{
            include "content/home.php";
         }
         
    ?>
  
   <div class="col-md-12" style="background:#1682ba;padding:8px;color:#fff;"><center>Create by <a href="#" style="color:#fff"></a> &copy 2017</center></div>
</body>
<html>
