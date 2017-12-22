<?php
	include "db.php";
	$carinama = $_POST['nama'];
?>
<table border="1" align="center">
	<tr>
		<td align="center">No</td>
		<td align="center">NIM</td>
		<td align="center">Nama</td>
		<td align="center">Jurusan</td>
		<td align="center">Angkatan</td>
	</tr>
<?php
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
		</tr>
<?php $NO=$NO+1; } ?>
</table>