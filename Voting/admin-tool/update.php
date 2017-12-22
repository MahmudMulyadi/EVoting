<?php 

include "db.php";
if(isset($_GET['id']))
	$xno = $_GET['id'];
else
	$xno = 0;
$query = mysql_query("SELECT * FROM tb_user WHERE id='$xno'");
$data = mysql_fetch_array($query);
?>

<form action="ubah.php" method="POST" />
    <div class="col-md-10" style="padding:0px">
      <ol class="breadcrumb" style="margin:0;border-radius:0;">
         <li><a href="#">Home</a></li>
         <li class="active">Data User</li>
      </ol>
   </div>
 <div class="col-md-10" style="min-height:600px">
         <div class="col-md-12" style="padding:10px; padding-left:0;padding-right:0;">
         </div>
            <table class="table table-bordered">
				<tr>
					<td>NIM</td>
					<td>:</td>
					<td><input type="text" name="nim" value="<?php echo $data['nim'];?>"/></td> 
				</tr>
				<tr>
					<td>Nama</td>
					<td>:</td>
					<td><input type="text" name="nama" value="<?php echo $data['nama'];?>"/></td> 
				</tr>
				<tr>
					<td>Jurusan</td>
					<td>:</td>
					<td><input type="text" name="jrs" value="<?php echo $data['jurusan'];?>"/></td> 
				</tr>
				<tr>
					<td>Angkatan</td>
					<td>:</td>
					<td><input type="text" name="akt" value="<?php echo $data['angkatan'];?>"/></td> 
				</tr>
				<tr>
					<td>Password</td>
					<td>:</td>
					<td><input type="text" name="psw" value="<?php echo $data['password'];?>"/></td> 
				</tr>
				<tr>
		<td colspan="3" align="center"><input type="submit" value="Daftar"> 
		<input type="reset" value="Batal"></td>
	</tr>
            </table>
   </div>