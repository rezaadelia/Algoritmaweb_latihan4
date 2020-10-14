<!DOCTYPE html>
<html lang="en">
<marquee>
  <font face="Amazon">&#128156 My Goal ?? To Make Me, Myself And My Parents PROUD &#128156 Fighting &#128156 </font>
</marquee>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Form POST</title>
</head>
<style>
body{ 
	background-image:url(bts3.png);
	background-size:cover;
	}
	</style>
<body>
	<form action="?action=edit" method="POST">
		<table>
			<label for="">
				<tr>
					<td><font face="Ink free">Nama</font></td>
					<td>:</td>
					<td><input type="text" name="nama" placeholder="masukkan nama"></td>
				</tr>
				<tr>
					<td><font face="Ink free">Nim</font></td>
					<td>:</td>
					<td><input type="text" name="nim" placeholder="masukkan nim"></td>
				</tr>
				<tr>
					<td><font face="Ink free">Jurusan</font></td>
					<td>:</td>
					<td><input type="text" name="jurusan" placeholder="input jurusan"></td>
				</tr>
				<tr>
					<td><font face="Ink free">Kampus</font></td>
					<td>:</td>
					<td><input type="text" name="kampus" placeholder="nama kampus"></td>
				</tr>
				<tr>
					<td><font face="Ink free">Email</font></td>
					<td>:</td>
					<td><input type="text" name="email" placeholder="alamat email"></td>
				</tr>
			</label>
		</table>
					<button type="submit" name="submit" value="Kirim"><font face="Ink free">SEND</font></button>
	</form> <br><br>

	&#128156 &#128156 &#128156 &#128156 &#128156 &#128156 &#128156 &#128156 &#128156 &#128156 &#128156 &#128156 &#128156 <br>
	<?php  
		if ($_POST) {
			echo "Nama 	: ". $_POST ['nama']; echo "<br>";
			echo "Nim 	: ". $_POST ['nim']; echo "<br>";
			echo "Jurusan 	: ". $_POST ['jurusan']; echo "<br>";
			echo "Kampus	: ". $_POST ['kampus']; echo "<br>";
			echo "Email 	: ". $_POST ['email']; echo "<br>";
		}

	?>
	&#128156 &#128156 &#128156 &#128156 &#128156 &#128156 &#128156 &#128156 &#128156 &#128156 &#128156 &#128156 &#128156 
</body>
</html>
