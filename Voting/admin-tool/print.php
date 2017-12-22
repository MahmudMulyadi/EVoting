<?php
	include 'db.php';
	$sql = mysql_query("SELECT * FROM hasil_voting");
?>
<html>
<head>
	<title>Print Document</title>
</head>
<body>
	<table border="1" width="90%" style="border-collapse:collapse;" align="center">
    	<tr class="tableheader">
        		<td>NO</td>
                <td>NPM</td>
                <td>Total Vote</td>
        </tr>
        <?php $no=1; while($data = mysql_fetch_array($sql)){   ?>
        <tr id="rowHover">
        	<td width="" id="column_padding"><?php echo $no ?></td>
            <td width="" id="column_padding"><?php echo $data['nama'];?></td>
            <td width="" id="column_padding"><?php echo $data['total_vote'];?></td>
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
