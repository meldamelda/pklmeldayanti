  <nav class="navbar navbar-expand navbar-dark bg-melda3 static-top">

    <a class="navbar-brand mr-1" href="<?php echo site_url('super_admin') ?>"><?php echo SITE_NAME ?></a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar Search -->
    <!--<form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
        <div class="input-group-append">
          <button class="btn btn-primary" type="button">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form> -->

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto mr-0 mr-md-0 my-2 my-md-0">
      <h6 class="text-white mt-2">Selamat Datang <?php echo $this->session->userdata('nama') ?> | </h6>
      <li class="nav-item ml-2 mt-2">
          <h6 class="logout text-white" href="#" data-toggle="modal" data-target="#logoutModal">Logout</h6>
      </li>
    </ul>

  </nav>
  