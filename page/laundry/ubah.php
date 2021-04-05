<?php
    $du = $_GET['id'];
        $sql2 = $koneksi->query("select * from tb_laundry where id_laundry ='$du'");
        $data = $sql2->fetch_assoc();
?>

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
              <h3 class="box-title">Mengubah Data Transaksi</h3>
            </div>
            <form method="POST" enctype="multipart/form-data">
              <div class="box-body">
               <div class="form-group">
                  <label for="exampleInputPassword1">Tanggal Selesai</label>
                  <input type="date" class="form-control" value="<?php echo $data['tanggal_selesai'] ?>" name="tanggal_selesai">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Jumlah Kilo</label>
                  <input type="number" class="form-control" onkeyup="sum();" id="jumlah_kiloan" value="<?php echo $data['jumlah_kiloan'] ?>" name="jumlah_kiloan" required="">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Total</label>
                  <input type="number" class="form-control" value="<?php echo $data['nominal'] ?>" name="total" id="nominal" readonly="">
                </div>  
                 <div class="form-group">
                  <label for="exampleInputPassword1">Catatan</label>
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
              $tgl_selesai =$_POST['tanggal_selesai'];
              $jml_kiloan =$_POST['jumlah_kiloan'];
              $total =$_POST['total'];
              $catatan =$_POST['catatan'];
              $sql2 = $koneksi->query("update tb_laundry set tanggal_selesai='$tgl_selesai', jumlah_kiloan='$jml_kiloan',nominal='$total', catatan='$catatan' where id_laundry='$du'");
              if ($sql2){
                ?>
                    <script type="text/javascript">
                      alert("Data Berhasil Disimpan");
                      window.location.href="?page=laundry";
                    </script>
                <?php
              }
          }
            ?>