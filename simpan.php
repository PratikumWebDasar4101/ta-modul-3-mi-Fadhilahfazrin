<?php
include "koneksi.php";

$nama=$_POST['nama'];
$nim = $_POST['nim'];
$fakultas=$_POST['fakultas'];
$jeniskelamin=$_POST['jeniskelamin'];

$dir = "upload/";
$nama_file= $_FILES["File_gmbr"]['name'];
$nama_file_tmp = $_FILES["File_gmbr"]['tmp_name'];
$target = $dir . $nama_file;

$sql = "insert into formulir values('$nim','$nama','$fakultas','$jeniskelamin','$nama_file')";

if(mysql_query($sql)and move_uploaded_file($nama_file_tmp, $target)){
	echo "&nbsp; telah berhasil";
	header("Location: tampil.php");
}else{
	echo"&nbsp; gagal";
}
?>
