  <section class="content">
      <div class="row">
  <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Transaksi</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <a href="?page=transaksi&aksi=tambah"class="btn btn-info"style="margin-bottom: 10px">Tambah</a>
              <a href="page/transaksi/cetak.php"class="btn btn-default"style="margin-bottom: 10px"><i class="fa fa-print"> </i>Cetak</a>
              <a href="?page=transaksi&aksi=hapus&id=<?php echo $data['kode_transaksi'];?>" class="btn btn-danger" style="margin-bottom: 10px"  title=""><i class="fa fa-trash"> </i> hapus semua data</a>  
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Tanggal Transaksi</th>
                  <th>Keterangan</th>
                  <th>Catatan</th>
                  <th>Kasir</th>
                  <th>Pemasukan</th>
                  <th>Pengeluaran</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                  <?php

                            $no = 1;
                            $sql = $koneksi->query("select * from tb_transaksi, tb_user where tb_transaksi.kode_user=tb_user.id");
 
                            while ($data = $sql->fetch_assoc()) {
                              
                            
                  ?>
                <tr>
                  <td> <?php echo $no++; ?> </td>
                  <td><?php echo $data['tgl_transaksi']?></td>
                  <td><?php echo $data['keterangan']?></td>
                  <td><?php echo $data['catatan']?></td>
                  <td><?php echo $data['nama_user']?></td>
                  <td><?php echo number_format($data['pemasukan'])?></td>
                  <td><?php echo number_format($data['pengeluaran'])?></td>
                  <td><?php
                      if ($data['keterangan']=="pengeluaran") {
                        
                      ?>  
                    <a href="?page=transaksi&aksi=ubah&id=<?php echo $data['kode_transaksi'];?>" class="btn btn-success" style="margin-bottom: 10px" title=""><i class="fa fa-edit"> </i> ubah</a>
                  <?php } ?>
                    <a href="?page=transaksi&aksi=hapus&id=<?php echo $data['kode_transaksi'];?>" class="btn btn-danger" style="margin-bottom: 10px"  title=""><i class="fa fa-trash"> </i> hapus</a> </td>
                </tr>
                <?php 
                $masuk = $masuk + $data['pemasukan'];
                $keluar = $keluar + $data['pengeluaran'];
                $saldo = $masuk - $keluar;
              } 
                ?>
              </tbody>
              <tr>
                <th colspan="5" style="text-align:center">Total Pemasukan dan Pengeluaran</th>
                <td><?php echo number_format($masuk) ?></td>
                <td><?php echo number_format($keluar) ?></td>
              </tr>
              <tr>
                <th colspan="5" style="text-align:center">Total Akhir</th>
                <td><?php echo number_format($saldo) ?></td>
                
              </tr>
            </table>
          </div>
        </div>
</div>
</section>