<!DOCTYPE html>
<html lang="en">
<marquee>
  <font face="Amazon">&#128156 My Goal ?? To Make Me, Myself And My Parents PROUD &#128156 Fighting &#128156 </font>
</marquee>
<head>
</br></br>
<style>
body{ 
	background-image:url(bts3.png);
	background-size:cover;
	}
	</style>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Form Get</title>
</head>
<body>
	<form action="" method="GET">
		<table>
			<label for="">
				<tr>
					<td><font face="Comic Sans MS">Nama</font></td>
					<td>:</td>
					<td><input type="text" name="nama" placeholder="masukkan nama"></td>
				</tr>
				<tr>
					<td><font face="Comic Sans MS">Nim</font></td>
					<td>:</td>
					<td><input type="text" name="nim" placeholder="masukkan nim"></td>
				</tr>
				<tr>
					<td><font face="Comic Sans MS">Jurusan</font></td>
					<td>:</td>
					<td><input type="text" name="jurusan" placeholder="input jurusan"></td>
				</tr>
				<tr>
					<td><font face="Comic Sans MS">Kampus</font></td>
					<td>:</td>
					<td><input type="text" name="kampus" placeholder="nama kampus"></td>
				</tr>
				<tr>
					<td><font face="Comic Sans MS">Email</font></td>
					<td>:</td>
					<td><input type="text" name="email" placeholder="alamat email"></td>
				</tr>
			</label>
		</table>
					<button type="submit" name="submit" value="Kirim"><font face="Comic Sans MS">SEND</font></button>
	</form> <br><br>

	&#128156 &#128156 &#128156 &#128156 &#128156 &#128156 &#128156 &#128156 &#128156 &#128156 &#128156 &#128156 &#128156 <br>
    <?php 
		if ($_GET){
			echo "Nama 	: ". $_GET['nama']; echo "<br>";
			echo "Nim 	: ". $_GET['nim']; echo "<br>";
			echo "Jurusan 	: ". $_GET['jurusan']; echo "<br>";
			echo "Kampus	: ". $_GET['kampus']; echo "<br>";
			echo "Email 	: ". $_GET['email']; echo "<br>";
		}
	?>
	&#128156 &#128156 &#128156 &#128156 &#128156 &#128156 &#128156 &#128156 &#128156 &#128156 &#128156 &#128156 &#128156
</body>
</html>