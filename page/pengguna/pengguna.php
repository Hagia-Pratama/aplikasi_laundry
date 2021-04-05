 <section class="content">
      <div class="row">
  <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Pengguna</h3>
            </div>
            <div class="box-body">
              <a href="?page=pengguna&aksi=tambah"class="btn btn-info"style="margin-bottom: 10px">Tambah</a>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Username</th>
                  <th>Nama</th>
                  <th>Passord</th>
                  <th>Level</th>
                  <th>Foto</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                  <?php

                            $no = 1;
                            $sql = $koneksi->query("select*from tb_user");

                            while ($data = $sql->fetch_assoc()) {
                              
                            
                  ?>
                <tr>
                  <td> <?php echo $no++; ?> </td>
                  <td><?php echo $data['username']?></td>
                  <td><?php echo $data['nama_user']?></td>
                  <td><?php echo $data['password']?></td>
                  <td><?php echo $data['level']?></td>
                  <td><img src="images/<?php echo $data['foto']?>" width="75" height="75"></td>
                  <td>
                    <a href="?page=pengguna&aksi=ubah&id=<?php echo $data['id'];?>" class="btn btn-success" title=""><i class="fa fa-photo"> </i> ubah foto profil</a>
                     <a onclick="return confirm('Apakah anda ingin menghapus data ini')"href="?page=pengguna&aksi=hapus&id=<?php echo $data['id'];?>" class="btn btn-danger" title=""><i class="fa fa-trash"> </i> hapus</a>  
                  </td>
                </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
