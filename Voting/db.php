<?php
$host 	= "localhost";
$userdb = "root";
$passdb = "";
$db		= "voting";

mysql_connect($host, $userdb, $passdb) or die ("Gagal Terhubung");
mysql_select_db($db) or die ("Database $db Tidak Ada");

?>