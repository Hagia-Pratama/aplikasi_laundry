<?php
    $td = $_GET['id'];
        $sql2 = $koneksi->query("select * from tb_transaksi where kode_transaksi ='$td'");
        $data = $sql2->fetch_assoc();
?>

<div class="row">
        <div class="col-md-6">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Mengubah Transaksi</h3>
            </div>
            <form method="POST" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputPassword1">Nominal</label>
                  <input type="number" class="form-control" value="<?php echo $data['pengeluaran'] ?>" name="nominal" id="nominal">
                </div>

                 <div class="form-group">
                  <label>Catatan</label>
                  <textarea class="form-control" name="catatan"><?php echo $data['catatan'] ?></textarea>
                </div>
              <div class="box-footer">
                <button type="submit" name="simpan" rows="3" class="btn btn-primary">Simpan</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>

    <?php

            if (isset($_POST['simpan'])){
              $nominal =$_POST['nominal'];
              $catatan =$_POST['catatan'];
                 $sql2 = $koneksi->query("update tb_transaksi set pengeluaran='$nominal', catatan='$catatan' where kode_transaksi='$td'");
              if ($sql2){
                ?>
                    <script type="text/javascript">
                      alert("Data Berhasil Disimpan");
                      window.location.href="?page=transaksi";
                    </script>
                <?php
              }
            }
            ?>