<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color: #042165;">
  <a href="<?= $base_url; ?>dashboard" class="brand-link">
    <img src="<?= $base_url; ?>dist/img/<?= $row_profil->logo_desa; ?>" alt="Logo" class="brand-image">
    <span class="brand-text font-weight-light">
      <?= $row_profil->nama_desa; ?>
    </span>
  </a>
  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="<?= $base_url; ?>dist/img/0.png" alt="User Image">
      </div>
      <div class="info">
        <a href="<?= $base_url; ?>dashboard" class="d-block">
          <?= $_SESSION['nama']; ?>
        </a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
         with font-awesome or any other icon font library -->
        <li class="nav-item has-treeview">
          <a href="<?= $base_url; ?>dashboard" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
            </p>
          </a>

        </li>
        <li class="nav-item has-treeview">
          <a href="<?= $base_url; ?>data_kendaraan" class="nav-link">
            <i class="nav-icon fas fa-users"></i>
            <p>
              Data Kendaraan
            </p>
          </a>
        </li>

        <li class="nav-item has-treeview">
          <a href="<?= $base_url; ?>control_panel" class="nav-link">
            <i class="nav-icon fas fa-cog"></i>
            <p>
              Control Panel
            </p>
          </a>
        </li>


      </ul>



    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>