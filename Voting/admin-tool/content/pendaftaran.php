<form action="simpan.php" method="POST" />
    <div class="col-md-10" style="padding:0px">
      <ol class="breadcrumb" style="margin:0;border-radius:0;">
         <li><a href="#">Home</a></li>
         <li class="active">Register User</li>
      </ol>
   </div>
 <div class="col-md-10" style="min-height:600px">
         <div class="col-md-12" style="padding:10px; padding-left:0;padding-right:0;">
         </div>
		 <h1><center>Register User</h1></center></br>
            <table class="table table-bordered">
				<tr>
					<td>NIM</td>
					<td>:</td>
					<td><input type="text" name="nim" /></td> 
				</tr>
				<tr>
					<td>Nama</td>
					<td>:</td>
					<td><input type="text" name="nama" /></td> 
				</tr>
				<tr>
					<td>Jurusan</td>
					<td>:</td>
					<td><input type="text" name="jrs" /></td> 
				</tr>
				<tr>
					<td>Angkatan</td>
					<td>:</td>
					<td><input type="text" name="akt" /></td> 
				</tr>
				<tr>
					<td>Password</td>
					<td>:</td>
					<td><input type="password" name="psw" /></td> 
				</tr>
				<tr>
					<td>Login As</td>
					<td>:</td>
					<td><select name="status">
						<option>user</option>
						<option>admin</option>
						</select>	
					</td>
				</tr>
				<tr>
		<td colspan="3" align="center"><input type="submit" value="Daftar"> 
		<input type="reset" value="Batal"></td>
	</tr>
            </table>
   </div>