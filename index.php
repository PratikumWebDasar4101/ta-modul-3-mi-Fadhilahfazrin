<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<table>
	<form  action="simpan.php" method="post" enctype="multipart/form-data">
		<tr>
			<td>Nama User</td>
			<td>:</td>
			<td><input type="text" name="nama"></td>
		</tr>

		<tr>
			<td>Nim	</td>
			<td>:</td>
			<td><input type="text" name="nim"></td>
		</tr>

		<tr>
			<td>Fakultas</td>
			<td>:</td>
			<td>
				<select name="fakultas">
				<option value="FIT">FIT</option>
				<option value="FIF">FIF</option>
				<option value="FRI">FRI</option>
				<option value="FIK">FIK</option>
				<option value="FEB">FEB</option>
				<option value="FKB">FKB</option>
				<option value="FTE">FTE</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td>:</td>
			<td>
				<input type="radio" name="jeniskelamin" value="Perempuan">Perempuan
				<input type="radio" name="jeniskelamin" value="Laki-laki">Laki-Laki
			</td>
		</tr>
		<tr>
			<td>Gambar</td>
			<td>:</td>
			<td>
				<input type="file" name="File_gmbr" id="gambar"/>
			</td>
		</tr>
		<tr>
			<td><input type="submit" name="upload" id="upload" values="upload"/></td>
		</tr>
		
	</form>

</table>

</body>
</html>

