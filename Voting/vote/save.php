<?php
  include "../admin-tool/db.php";
  if ( ! session_id() ) @ session_start();
  $id = $_GET['id'];
  $nim = $_SESSION['username'];
  $query = mysql_query("SELECT * FROM hasil_voting WHERE id=$id");
  $data = mysql_fetch_array($query);
  $vote = $data['total_vote'];
  $total = $vote+1;
  
  $sql = "UPDATE hasil_voting SET total_vote=$total WHERE id=$id";
  
  $query = mysql_query($sql);
  
  if ($query){
    print "Terimakasih Telah Melakukan Vote </br><a href='../login.php'> Back to Login</a>";
  } else {
    print "gagal";
  }
  
  $sql = "UPDATE tb_user SET status_voting='1' WHERE nim=$nim";
  $query = mysql_query($sql);
  
?>
