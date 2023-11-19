<!DOCTYPE html>
<html>
<head>
	<title>EDIT DATA</title>
</head>
<body>
 
	<h2>DATA PRODUK</h2>
	<br/>
	<a href="index.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>EDIT DATA BARANG</h3>
 
	<?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from products where id='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="update.php">
			<table>
				<tr>			
					<td>Nama Produk</td>
					<td>
						<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
						<input type="varchar" name="nama" value="<?php echo $d['name']; ?>">
					</td>
				</tr>
				<tr>
					<td>Harga</td>
					<td><input type="int" name="price" value="<?php echo $d['price']; ?>"></td>
				</tr>
				<tr>
					<td>Gambar Produk</td>
					<td><input type="varchar" name="images" value="<?php echo $d['image']; ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="SAVE"></td>
				</tr>		
			</table>
		</form>
		<?php 
	}
	?>
 
</body>
</html>