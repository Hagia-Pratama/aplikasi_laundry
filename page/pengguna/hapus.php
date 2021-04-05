<?php
	$ha = $_GET['id'];

	$sql=$koneksi->query("delete from tb_user where id='$ha'");

	if ($sql) {
		?>
                    <script type="text/javascript">
                      alert("Data Berhasil anda Buang");
                      window.location.href="?page=pengguna";
                    </script>
                <?php
              }
	
?>