<?php
        $sql = $koneksi->query("select kode_pelanggan from tb_pelanggan order by kode_pelanggan desc");

        $data = $sql->fetch_assoc();

        $kode_pelanggan = $data['kode_pelanggan'];

        $urut =substr($kode_pelanggan, 4, 4);

        $tambah = (int) $urut+1;

        if (strlen($tambah) == 1){

          $format="PLG-"."000".$tambah;

        }elseif (strlen($tambah) == 2){

          $format="PLG-"."00".$tambah;

        }elseif (strlen($tambah) == 3){

          $format="PLG-"."0".$tambah;

        }else{

          $format="PLG-".$tambah;

        }

?>
<div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Menambah Data Pengguna</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form method="post" >
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Kode Pelanggan</label>
                  <input class="form-control" value="<?php echo $format ?>" placeholder="PLG-0000" name="kode" readonly>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Nama</label>
                  <textarea class="form-control" rows="3" name="nama"></textarea>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">No. Telpon</label>
                  <textarea class="form-control" rows="2" name="telpon"></textarea>
                </div>
                <div class="form-group">
                  <label>Alamat</label>
                  <textarea class="form-control" rows="3" name="alamat"></textarea>
                </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
       





          <?php

            if (isset($_POST['simpan'])){
              $kode = $_POST['kode'];
              $nama = $_POST['nama'];
              $telpon =$_POST['telpon'];
              $alamat =$_POST['alamat'];

              $sql = $koneksi->query("insert into tb_pelanggan (kode_pelanggan, nama, alamat, telpon)values('$kode', '$nama','$alamat','$telpon') ");
              if ($sql){
                ?>
                    <script type="text/javascript">
                      alert("Data Berhasil Disimpan");
                      window.location.href="?page=pelanggan";
                    </script>
                <?php
              }
            }
            ?>