<!DOCTYPE html>
<html>
<head>
	<title>Data Pemantaun Covid19 wilayah DKI Jakarta</title>
</head>
<body>
 
	<h1>Data Pemantaun Covid19 wilayah DKI Jakarta </h1>
	<h2>Per 18 April 2020 21:38:16 (Waktu dan Jam Sekarang)</h2>
	<h2>Nama Operator/NIM</h2>
	<br/>
	<br/>
	<table border="1">
		<tr>
			<th>Positif</th>
			<th>Dirawat</th>
			<th>Sembuh</th>
			<th>Meninggal</th>
		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from db_pasien");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $d['positif']; ?></td>
				<td><?php echo $d['dirawat']; ?></td>
				<td><?php echo $d['sembuh']; ?></td>
				<td><?php echo $d['meninggal']; ?></td>
				
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>