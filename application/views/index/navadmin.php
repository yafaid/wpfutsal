<!-- Navigation-->
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Futsal</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('assets/') ?>home/css/styles.css" rel="stylesheet" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Plugin datepicker dan timepicker -->
    <script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-timepicker/1.10.0/jquery.timepicker.min.js"></script>

</head>
<nav class="navbar navbar-expand-md bg-secondary text-uppercase fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand">
            <?php if ($this->session->userdata('role_id') == 1) { ?>
                Haiiii , <?php echo ($this->session->userdata('role_id') == 1) ? 'admin' : ''; ?>
            <?php } else if ($this->session->userdata('role_id') == 2){ ?>
                Haiiii ,  <?php echo $this->session->userdata('nama'); ?>
            <?php } else {?>
                Futsal Booking System
            <?php } ?>
            </a>
            <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto">                
                <?php if ($this->session->userdata('role_id') == 1) { ?>                   
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="<?= site_url('admin/jadwal') ?>">Jadwal <i class="fas fa-calendar"></i></a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="<?= site_url('admin') ?>">Reservasi <i class="fas fa-address-book"></i></a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="<?= site_url('login/logout') ?>">Logout <i class="fas fa-arrow-right-from-bracket"></i></a></li>
                <?php } else if ($this->session->userdata('role_id') == 2){ ?>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="<?= site_url('user/dashboard') ?>">Pesan</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="<?= site_url('login/logout') ?>">Logout</a></li>
                <?php } else {?>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="<?= site_url('login') ?>">Login</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="<?= site_url('register') ?>">Daftar Sekarang</a></li>
                <?php } ?>
            </ul>
        </div>
    </div>
</nav>