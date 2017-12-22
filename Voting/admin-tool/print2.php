<?php
	include 'db.php';
	$sql = mysql_query("SELECT * FROM tb_user");
?>
<html>
<head>
	<title>Print</title>
</head>
<body>
	<table border="1" width="90%" style="border-collapse:collapse;" align="center">
    	<tr class="tableheader">
        		<th class="info">No</th>
                <th class="info">NIM</th>
                <th class="info">Nama</th>
                <th class="info">Jurusan</th>
                <th class="info">Angkatan</th>
        </tr>
        <?php $no=1; while($data = mysql_fetch_array($sql)){   ?>
        <tr id="rowHover">
        	<td ><?php echo $no ?></td>
            <td ><?php echo $data['nim'];?></td>
            <td ><?php echo $data['nama'];?></td>
            <td ><?php echo $data['jurusan'];?></td>
            <td ><?php echo $data['angkatan'];?></td>
		</tr>
        <?php $no++; } ?>
    </table>
    <script>
		window.load = print_d();
		function print_d(){
			window.print();
		}
	</script>
</body>
</html>
