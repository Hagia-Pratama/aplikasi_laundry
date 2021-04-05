<?php
		include "../../include/koneksi.php";
		$id=$_GET['id'];
	  $sql = $koneksi->query("select * from tb_laundry, tb_pelanggan, tb_user where tb_laundry.id_pelanggan=tb_pelanggan.kode_pelanggan and tb_laundry.kode_user=tb_user.id");
 
      $data = $sql->fetch_assoc();



?>
<script>
	
	window.print();
	window.onfocus=function(){window.close();}

</script>

<body onload="window.print()">

<table align="center">
	 <tbody>
	 	<tr>
	 		<td>Laundry Decade</td>
	 	</tr>
	 	<tr>
	 		<td>Jalan Suburaya No 555</td>
	 	</tr>
	 	<tr>
	 		<td>Telpon 08192873561</td>
	 	</tr>
	 </tbody>
</table>

<hr width="40%" align="center">

<table align="center">
	 <tbody>
	 	<tr>
	 		<td>Kasir</td>
	 		<td>:</td>
	 		<td> <?php echo $data['nama_user']?> </td>
	 	</tr>
	 	<tr>
	 		<td>Customer</td>
	 		<td>:</td>
	 		<td> <?php echo $data['nama']?> </td>
	 	</tr>

	 	<tr>
	 		<td>Tanggal Terima</td>
	 		<td>:</td>
	 		<td> <?php echo $data['tanggal_terima']?> </td>
	 	</tr>
	 	<tr>
	 		<td>Tanggal Selesai</td>
	 		<td>:</td>
	 		<td> <?php echo $data['tanggal_selesai']?> </td>
	 	</tr>

	 	<tr>
	 		<td>Jumlah PerKilo</td>
	 		<td>:</td>
	 		<td> <?php echo $data['jumlah_kiloan']?> </td>
	 	</tr>

	 	<tr>
	 		<td>Total</td>
	 		<td>:</td>
	 		<td> <?php echo $data['nominal']?> </td>
	 	</tr>

	 	<tr>
	 		<td>Status</td>
	 		<td>:</td>
	 		<td> <?php echo $data['status']?> </td>
	 	</tr>

	 	<tr>
	 		<td>Catatan</td>
	 		<td>:</td>
	 		<td > <?php echo $data['catatan']?> </td>
	 	</tr>
 </tbody>
</table align="center">

	<br><br>

		<table align="center">
			<tbody>
				<tr>
					<td> Note :</td>
				</tr>
				<tr>
					<td> Barang lebih dari 1 bulan tidak diambil bukan lagi tanggung jawab pihiak laundry</td>
				</tr>
			</tbody>
		</table>

</body>