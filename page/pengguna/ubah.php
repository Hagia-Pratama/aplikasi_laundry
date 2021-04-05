<?php
		$di = $_GET['id'];
        $sql = $koneksi->query("select * from tb_user where id ='$di'");
        $data = $sql->fetch_assoc();

        

?>
<div class="row">
        <div class="col-md-6">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Mengotak Atik Data Pengguna</h3>
            </div>
            <form method="POST" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Username</label>
                  <input type="text" class="form-control" value="<?php echo $data['username'] ?>"name="username" readonly>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Nama</label>
                  <textarea type="text" class="form-control"  name="nama_user"><?php echo $data['nama_user'] ?> </textarea>
                </div>
                 <div class="form-group">
                  <label for="exampleInputPassword1">Foto</label>
                  <label> <img src="images/<?php echo $data['foto']?>" width="100" height="100"></label>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Foto</label>
                  <input type="file" name="foto">
                </div>
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
              $nama =$_POST['nama_user'];
              $foto=$_FILES['foto']['name'];
              $lokasi=$_FILES['foto']['tmp_name'];
              if (!empty($lokasi)){
                move_uploaded_file($lokasi, "images/".$foto);
              $sql2 = $koneksi->query("update tb_user set nama_user='$nama', foto='$foto' where id='$di'");
              if ($sql2){
                ?>
                    <script type="text/javascript">
                      alert("Data Berhasil Disimpan");
                      window.location.href="?page=pengguna";
                    </script>
                <?php
              }
            }else{
                $sql3 = $koneksi->query("update tb_user set nama_user='$nama' where id='$di'");
              if ($sql3){
                ?>
                    <script type="text/javascript">
                      alert("Data Berhasil Disimpan");
                      window.location.href="?page=pengguna";
                    </script>
                <?php
              }
            }
          
        }
            ?>