<?php

	$sql=$koneksi->query("delete from tb_transaksi ");

	if ($sql) {
		?>
                    <script type="text/javascript">
                      alert("Data Berhasil anda Buang");
                      window.location.href="?page=transaksi";
                    </script>
                <?php
              }
	
?>