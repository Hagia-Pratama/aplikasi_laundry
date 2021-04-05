 <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div>
          <img src="images/decade-laundry.png" align="left" width="200" height="200">
        </div>
      </div>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">Menu Utama</li>
          <li><a href="index.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
          <?php if($_SESSION['admin']){ ?>
          <li><a href="?page=pengguna"><i class="fa fa-user"></i> Pengguna</a></li>
          <?php } ?>
          <li><a href="?page=pelanggan"><i class="fa fa-user-plus"></i> Pelanggan</a></li>
          <li><a href="?page=laundry"><i class="fa fa-bars"></i> Transaksi Laundry</a></li>
          <?php if($_SESSION['admin']){ ?>
          <li><a href="?page=transaksi"><i class="fa fa-money"></i> Data Transaksi</a></li>
          <?php } ?>
        </li>   
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  