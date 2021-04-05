<?php
	$du = $_GET['id'];

	$sql=$koneksi->query("delete  from tb_laundry where id_laundry = '$du'");

	if ($sql) {
		?>
                    <script type="text/javascript">
                      alert("Data Berhasil anda Buang");
                      window.location.href="?page=laundry";
                    </script>
                <?php
              }
	
?>