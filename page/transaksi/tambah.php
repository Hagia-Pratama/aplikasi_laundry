
<div class="row">
        <div class="col-md-6">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Menambah Transaksi</h3>
            </div>
            <form method="POST" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputPassword1">Tanggal Terima</label>
                  <input type="date" class="form-control" name="tanggal_transaksi">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Nominal</label>
                  <input type="number" class="form-control" name="nominal" id="nominal" placeholder="Nominal dalam Rupiah (1000)">
                </div>

                 <div class="form-group">
                  <label>Catatan</label>
                  <textarea class="form-control" name="catatan"></textarea>
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
              $tgl_transaksi = $_POST['tanggal_transaksi'];
              $nominal =$_POST['nominal'];
              $catatan =$_POST['catatan'];
                 $sql = $koneksi->query("insert into tb_transaksi (kode_user, tgl_transaksi, pengeluaran, catatan, keterangan)values('$id_user','$tgl_transaksi','$nominal','$catatan','pengeluaran') ");
              if ($sql){
                ?>
                    <script type="text/javascript">
                      alert("Data Berhasil Disimpan");
                      window.location.href="?page=transaksi";
                    </script>
                <?php
              }
            }
            ?>