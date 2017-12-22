<div class="col-md-10" style="padding:0px">
      <ol class="breadcrumb" style="margin:0;border-radius:0;">
         <li><a href="#">Home</a></li>
         <li class="active">Data User</li>
      </ol>
   </div>
 <div class="col-md-10" style="min-height:600px">
         <div class="col-md-12" style="padding:10px; padding-left:0;padding-right:0;">
            <a href='?pendaftaran' class="btn btn-info">Tambah</a>
            <a href='print2.php' class="btn btn-info">Print</a>
         </div>
  <form action="?user" method="POST" />
        <table align=right>  
          <tr>
            <td>Nama</td>
            <td>:</td>
            <td><input type="text" name="nama"></td>
            <td colspan="3"><input type="submit" value="Cari"></td>
          </tr>
        </table>
  </form>

            <table class="table table-bordered">
               <tr>
                  <th class="info">No</th>
                  <th class="info">NIM</th>
                  <th class="info">Nama</th>
                  <th class="info">Jurusan</th>
                  <th class="info">Angkatan</th>
                  <th class="info" colspan="2">Action</th>
               </tr>
               <?php include "db.php";
               $carinama = $_POST['nama'];
  $NO=1;
  $query = mysql_query("SELECT * FROM tb_user WHERE nama like '%$carinama%' or nim like '%$carinama%'");
  while ($data = mysql_fetch_array($query)) {
?>    
    <tr align="center">
    <td><?php echo $NO; ?></td>
    <td><?php echo $data['nim']; ?></td>
    <td><?php echo $data['nama']; ?></td>
    <td><?php echo $data['jurusan']; ?></td>
    <td><?php echo $data['angkatan']; ?></td>
    <td>
      <a href="delete.php?id=<?php echo $data['id'];?>"> <input type="button" value="Delete"/> </a>
      <a href="index.php?update&id=<?php echo $data['id'];?>"> <input type="button" value="Update"/> </a>
    </td>
  </tr>
    
<?php $NO=$NO+1; } ?>
           
            </table>
            
   </div>
