<!DOCTYPE html>
<html lang="en">    
    <body id="page-top">
        <header class="masthead bg-primary text-white text-center">
            <div class="container d-flex align-items-center flex-column">
                <!-- <img class="masthead-avatar mb-5" src="<?= base_url('assets/') ?>home/assets/img/avataaars.svg" alt="..." /> -->
                <h1 class="masthead-heading text-uppercase mb-0">Futsal Booking system</h1>
                <br>                
                <p class="masthead-subheading font-weight-light mb-0">Menyediakan segala kebutuhan futsal anda</p>
            </div>
        </header>
        <section class="page-section bg-primary text-white mb-0" id="about">
            <div class="container">
                <h2 class="page-section-heading text-center text-uppercase text-white">Tentang kami</h2>
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="far fa-futbol"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <div class="row">
                    <div class="col-lg-4 ms-auto"><p class="lead">Freelancer is a free bootstrap theme created by Start Bootstrap. The download includes the complete source files including HTML, CSS, and JavaScript as well as optional SASS stylesheets for easy customization.</p></div>
                    <div class="col-lg-4 me-auto"><p class="lead">You can create your own custom avatar for the masthead, change the icon in the dividers, and add your email address to the contact form to make it fully functional!</p></div>
                </div>
                <div class="text-center mt-4">
                    <?php if ($this->session->userdata('role_id') == 1) { ?>
                                               
                    <?php } else if ($this->session->userdata('role_id') == 2) { ?>
                        <a class="btn btn-xl btn-outline-dark" href="<?= site_url('user/dashboard') ?>">
                        <i class="fas fa-pen-to-square"></i>
                        Pesan Lapangan
                        </a>
                    <?php } else { ?>
                        <a class="btn btn-xl btn-outline-dark" href="<?= site_url('login') ?>">
                        <i class="fas fa-pen-to-square"></i>
                        Login Sekarang
                        </a>
                    <?php } ?>                    
                </div>
            </div>
        </section>                        
    </body>
</html>
