<?php
  $di = $_GET['id'];
	$sql=$koneksi->query("delete from tb_transaksi where kode_transaksi='$di'");

	if ($sql) {
		?>
                    <script type="text/javascript">
                      alert("Data Berhasil anda Buang");
                      window.location.href="?page=transaksi";
                    </script>
                <?php
              }
	
?>