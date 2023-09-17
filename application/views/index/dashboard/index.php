<!DOCTYPE html>
<html lang="en">     
    <body id="page-top">                                                   
        <section class="page-section portfolio" id="portfolio">
            <div class="container">
                <h3 class="text-center text-uppercase text-secondary mb-0">Ringkasan</h3>
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="far fa-futbol"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <div class="container row d-flex ">
                    <div class="card shadow-lg border-5 rounded-lg mt-5 col-md-3 col-sm-12 mb-3 ">    
                        <div class="card-header py-5"><h3 class="text-center text-uppercase">Pesanan Pending</h3></div>                                                                                        
                        <div class="card-body ">
                            <div class="row justify-content-center">
                                <h1 class="align-items-center text-center text-uppercase text-secondary mb-0"><?php echo $data2; ?></h1>                
                            </div>     
                        </div>
                    </div>    
                    <div class="card shadow-lg border-5 rounded-lg mt-5 col-md-3 col-sm-12 mb-3 ">    
                        <div class="card-header py-5"><h3 class="text-center text-uppercase">Pesanan Hari ini</h3></div>                                                                                        
                        <div class="card-body ">
                            <div class="row justify-content-center">
                                <h1 class="align-items-center text-center text-uppercase text-secondary mb-0"><?php echo $data; ?></h1>                
                            </div>     
                        </div>
                    </div>
                    <div class="card shadow-lg border-5 rounded-lg mt-5 col-md-6 col-sm-12 mb-3" data-bs-toggle="modal">   
                        <div class="card-header py-5"><h3 class="text-center text-uppercase">Profil</h3></div>                                                                                         
                        <div class="card-body">
                            <div class="row justify-content-center ">
                                <h4 class="text-center text-uppercase text-secondary mb-0"><img src="<?php echo base_url('uploads/'.$this->session->userdata('ktp'))?>" style="max-width: 200px; height: auto;"></h2>
                                <h4 class="text-left text-uppercase text-secondary mb-0">nama : <?php echo $this->session->userdata('nama'); ?></h2>
                                <h4 class="text-left  text-uppercase text-secondary mb-0">email : <?php echo $this->session->userdata('email'); ?></h2>
                                <h4 class="text-left text-uppercase text-secondary mb-0">no hp : <?php echo $this->session->userdata('no_hp'); ?></h2>
                            </div>     
                        </div>
                    </div>            
                </div>
            </div>
        </section>
    </body>
</html>
