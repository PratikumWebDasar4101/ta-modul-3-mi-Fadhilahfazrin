<?php 
session_start();
include("koneksi.php");

$sql = "SELECT * from formulir";
$result = mysql_query($sql);

if (mysql_num_rows($result)>0) {
	while ($row = mysql_fetch_array($result)) {
		echo"<br>";
		echo "<img widht='200px' src='upload/".$row["file_gmbar"]."'>";
	}
} else {
	echo "0 result";
}
?>