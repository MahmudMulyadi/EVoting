<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>|| VOTING REGISTRATION SYSTEM||</title>
<script type="text/javascript">
function confirm_vote(textfield){
if(confirm("APAKAH KAMU YAKIN AKAN MEMILIH "+textfield+" ?"))
{
return  true;
}
else {return false;
}
	 
}

function error($msg){
if(confirm("double voting "+$msg+" ?"))
{
return  true;
}
else {return false;
}
	 
}
</script>

<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="default.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style11 {font-size: 18px; font-weight: bold; }
.style13 {font-size: x-large; font-weight: bold; color: #000000; }
.style2 {	color: #FF00FF;
	font-weight: bold;
}
.style3 {
	font-size: 18px;
	color: #000000;
}
.style4 {font-size: 18px; color: #FFFFFF; }
.style5 {font-size: 12px}
.style8 {color: #990000}
-->
</style>
</head>
<body>
<div id="header">
  <table width="200" align="center">
    <tr>
      <td height="212"><img src="images/header1.jpg" alt="" width="770" height="210" /></td>
    </tr>
  </table>
</div>
<div id="menu">
	<ul>
		<li> <a href="index.html"> |  Home  |</a></li>
		<li>
		  <a href="login.php">|  Voting  |</a></li>
		<li>
		  <a href="login.php" >|  Login  |</a></li>
		<li>
		  <a href="contact.php">|  Contact Us  |</a></li>
		<li>
		  <a href="admin.php">|  Admin  |</a></li>
	</ul>
</div>
<div id="content">
	<div id="left">
    <p style="text-align:center; color:#FF0000;"><strong><marquee  behavior="scroll">
    VOTING INI BERLAKU UNTUK SELURUH WARGA SMK NEGERI 2 BANDUNG
    </marquee></strong></p>
</div>
  <th height="41" colspan="2" scope="col"><h1><center>
   </center>
   
   </h1>
  </th>
</div>
<div id="footer">
  <p><a href="logout.php">LOGOUT</a></p>
  
    <tr>
      <th width="713" height="661" scope="col"><form id="form1" method="post" action="save.php">
          <table width="671" border="0" align="center">
            <tr>
              <th width="233" align="center" bgcolor="#00FF66" scope="col"><span class="style8">KANDIDATE</span></th>
              <th width="197" align="center" bgcolor="#00FF66" scope="col"><span class="style8">NAMA</span></th>
              <th width="149" align="center" bgcolor="#00FF66" scope="col"><span class="style8">Klik To Vote</span></th>
            </tr>
            <tr>
              <td bgcolor="#FFFF00" height="151"align="center"><img src="images/shatya.jpg" alt="" width="177" height="218" /></td>
              <td bgcolor="#FFFF00"align="center">Deden Setiawan </td>
              <td bgcolor="#FFFF00"align="center"><input type="submit" name="Submit" value="Vote"  onclick="return confirm_vote('<?php echo "M. SHATYA ARIFHYANA DP SEBAGAI KETUA OSIS "; ?>')"/></td>
            </tr>
            <tr>
              <td bgcolor="#FFFF00"height="150"align="center"><img src="images/mahmud.jpg" alt="" width="180" height="182" /></td>
              <td bgcolor="#FFFF00"align="center">Mahmud Mulyadi </td>
              <td bgcolor="#FFFF00"align="center"><input type="submit" name="Submit2" value="Vote" onclick="return confirm_vote('<?php echo "MAHMUD MULYADI SEBAGAI KETUA OSIS ";  ?>')"/></td>
            </tr>
            <tr>
              <td bgcolor="#FFFF00"height="105"align="center"><img src="images/1.jpg" alt="" width="178" height="183" /></td>
              <td bgcolor="#FFFF00"align="center">Herdi Septriadi </td>
              <td bgcolor="#FFFF00"align="center"><input type="submit" name="Submit3" value="Vote" onclick="return confirm_vote('<?php echo "HERDI SEPTRIADI SEBAGAI KETUA OSIS ";  ?>')"/></td>
            </tr>
            <tr>
              <td height="105">&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
          </table>
      </form></th>
    </tr>
    <tr>
      <th height="17" scope="col">&nbsp;</th>
    </tr>
  </table>
  <p>&nbsp;</p>
	<p>&nbsp;</p>
</div>
</body>
</html>
