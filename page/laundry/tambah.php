<script type="text/javascript">
  function sum(){
      var jumlah_kiloan= document.getElementById('jumlah_kiloan').value;
      var total = parseInt(jumlah_kiloan)*7500;
      if (!isNaN(total)){
        document.getElementById('nominal').value = total;
      }
  }
</script>
<div class="row">
        <div class="col-md-6">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Menambah Data Transaksi</h3>
            </div>
            <form method="POST" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                <label>Customer</label>
                <select class="form-control select2" style="width: 100%;" name="pelanggan" required="">
                  <option value="">-=Pilih Customer=-</option>

                  <?php

                    $sql = $koneksi->query("select * from tb_pelanggan");

                    while ($data=$sql->fetch_assoc()){
                        echo "<option value='$data[kode_pelanggan]'>$data[nama]</option>";
                    }

                    ?>
                  
                </select>
              </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Tanggal Terima</label>
                  <input type="date" class="form-control" name="tanggal_terima">
                </div>
               <div class="form-group">
                  <label for="exampleInputPassword1">Tanggal Selesai</label>
                  <input type="date" class="form-control" name="tanggal_selesai">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Jumlah Kilo</label>
                  <input type="number" class="form-control" onkeyup="sum();" id="jumlah_kiloan" name="jumlah_kiloan" required="">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Total</label>
                  <input type="number" class="form-control" name="total" id="nominal" readonly="">
                </div>

                 <div class="form-group">
                <label>Status</label>
                <select class="form-control select2" style="width: 100%;" name="status" required="">
                  <option value="">-=Pilih Status=-</option>
                  <option value="Lunas">Lunas</option>
                  <option value="Belum Lunas">Belum Lunas</option>
                </select>
              </div>

                 <div class="form-group">
                  <label for="exampleInputPassword1">Catatan</label>
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
              $pelanggan = $_POST['pelanggan'];
              $tgl_terima =$_POST['tanggal_terima'];
              $tgl_selesai =$_POST['tanggal_selesai'];
              $jml_kiloan =$_POST['jumlah_kiloan'];
              $total =$_POST['total'];
              $status =$_POST['status'];
              $catatan =$_POST['catatan'];
              $sql = $koneksi->query("insert into tb_laundry (id_pelanggan, kode_user, tanggal_terima, tanggal_selesai, jumlah_kiloan, nominal, status, catatan )values('$pelanggan','$id_user','$tgl_terima','$tgl_selesai','$jml_kiloan','$total','$status','$catatan') ");
              if ($sql){
                ?>
                    <script type="text/javascript">
                      alert("Data Berhasil Disimpan");
                      window.location.href="?page=laundry";
                    </script>
                <?php
              }
              if ($status=="Lunas") {
                 $sql = $koneksi->query("insert into tb_transaksi (kode_user, tgl_transaksi, pemasukan, catatan, keterangan)values('$id_user','$tgl_terima','$total','$catatan','pemasukan') ");
              if ($sql){
                ?>
                    <script type="text/javascript">
                      alert("Data Berhasil Disimpan");
                      window.location.href="?page=laundry";
                    </script>
                <?php
              }
            }
          }
            ?>