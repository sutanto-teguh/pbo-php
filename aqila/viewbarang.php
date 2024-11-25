<?PHP 
include 'config.php'; ?>

<!DOCTYPE html>
<html>
<head>
 <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

</head>

<body>
	<div class="w3-container">
		<div class="w3-container w3-teal">
		<h1>View All Barang</h1>
	</div>
		
		<br>		
		<table class="w3-table w3-striped w3-border">
				<tr>
					<th>Nomor</th>
					<th>id</th>
					<th>Nama</th>
					<th>Harja Jual</th>
					<th>Jumlah</th>
				</tr>
			
			
				<?php 
				$batas = 15;
				$halaman = isset($_GET['halaman'])?(int)$_GET['halaman'] : 1;
				$halaman_awal = ($halaman>1) ? ($halaman * $batas) - $batas : 0;	
 
				$previous = $halaman - 1;
				
				$next = $halaman + 1;
				
				$data = mysqli_query($conn,"select * from barang");
				$jumlah_data = mysqli_num_rows($data);
				$total_halaman = ceil($jumlah_data / $batas);
 
				$data_barang = mysqli_query($conn,"select * from barang limit $halaman_awal, $batas");
				$nomor = $halaman_awal+1;
				while($d = mysqli_fetch_array($data_barang)){
					?>
					<tr>
						<td><?php echo $nomor++; ?></td>
						<td><?php echo $d['id']; ?></td>
						<td><?php echo $d['nama_barang']; ?></td>
						<td><?php echo $d['harga_jual']; ?></td>
						<td><?php echo $d['jumlah']; ?></td>
					</tr>
					<?php
				}
				?>
			
		</table>
		<br>
		<div class="w3-panel w3-padding-16 w3-teal">
		<div class="w3-bar">
		
		<a class="w3-bar-item w3-button w3-black" <?php if($halaman > 1){ echo "href='?halaman=$previous'"; } ?>>Previous</a>
		
		<?php 
				for($x=1;$x<=$total_halaman;$x++){
				?> 
					<a class="w3-bar-item w3-button w3-small w3-teal" href="?halaman=<?php echo $x ?>">
					<?php echo $x; ?></a>
				
				<?php
				}
				if($halaman < $total_halaman) { 
				echo "<a class='w3-bar-item w3-button w3-black' href='?halaman=$next'"; } 
				?>>Next</a>
					
		</div>
		</div>
		
	</div>
</body>
</HTML>