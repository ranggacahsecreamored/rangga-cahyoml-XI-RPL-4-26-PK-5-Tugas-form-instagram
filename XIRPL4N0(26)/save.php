<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="save.css">
</head>
<body>
<div id="wrap">
	<div class="shape">
<table text align="CENTER">
<?php
$nohp=$_POST ['nohp'];
$nlengkap=$_POST ['nlengkap'];
$npengguna=$_POST ['npengguna'];
$password=$_POST ['password'];
$password= str_repeat("*",strlen($password));
echo "<CENTER><h3>PROSES SIMPAN DATA</h3></CENTER>";
echo "<tr>
		<td>Nomor Ponsel atau Email</td>
		<td>:</td>
		<td>$nohp</td>
		</tr>";
echo "<tr>
		<td>Nama Lengkap</td>
		<td>:</td>
		<td>$nlengkap</td>
		</tr>";
echo "<tr>
		<td>Nama Pengguna</td>
		<td>:</td>
		<td>$npengguna</td>
		</tr>";
echo "<tr>
		<td>Password</td>
		<td>:</td>
		<td>$password</td>
		</tr>";
echo "<TR><TD COLSPAN=3>";
echo "</table>";
?>
</table>
</div>
</div>
</body>
</html>

