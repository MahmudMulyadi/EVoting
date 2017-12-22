    <div class="col-md-10" style="padding:0px">
      <ol class="breadcrumb" style="margin:0;border-radius:0;">
         <li><a href="#">Home</a></li>
         <li class="active">Data User</li>
      </ol>
   </div>
 <div class="col-md-10" style="min-height:600px">
            <div class="col-md-12" style="padding:10px; padding-left:0;padding-right:0;">
            <a href='print.php' class="btn btn-info">Print Hasil</a>
         </div>
            <table class="table table-bordered">
               <tr>
                  <th class="info">No</th>
                  <th class="info">Nama</th>
                  <th class="info">Total Vote</th>
               </tr>
               <?php include "db.php";
  $NO=1;
  $query = mysql_query("SELECT * FROM hasil_voting");
  while ($data = mysql_fetch_array($query)) {
?>    
    <tr align="center">
    <td><?php echo $NO; ?></td>
    <td><?php echo $data['nama']; ?></td>
    <td><?php echo $data['total_vote']; ?></td>
  </tr>
    
<?php $NO=$NO+1; } ?>
            </table>
            
   </div>