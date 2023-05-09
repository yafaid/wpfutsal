<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <link rel="icon" type="image/x-icon" href="<?= base_url('assets/') ?>landing/assets/football.png" />
        <title>Daftar Akun</title>
        <link href="<?= base_url('assets/')?>home/css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">    
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-5 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Daftar</h3></div>                                    
                                    <div class="card-body">
                                        <form class="user" method="post" action="<?php echo base_url(); ?>register/proses" enctype="multipart/form-data">                                                                    
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="name" type="text" name="name" value="<?= set_value('name');?>" placeholder="Enter your first name" required="required"/>
                                                <?= form_error('name');?>                                                
                                                <label for="inputFirstName">Masukkan Nama</label>
                                            </div>                                               
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="email" type="email" name="email" value="<?= set_value('email');?>" placeholder="name@example.com" required="required"/>
                                                <?= form_error('email');?>
                                                <label for="inputEmail">Email address</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="no_hp" type="text" name="no_hp" value="<?= set_value('no_hp');?>" placeholder="085" required="required" />
                                                <?= form_error('no_hp');?>
                                                <label for="inputEmail">Nomor HP</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <label for="gambar">Foto KTP :</label>
                                                <br><br><br>
                                                <input type="file" class="btn btn-primary w-100" name="ktp" id="ktp" value="<?= set_value('ktp');?>" required="required"><br><br>   
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" name="password" id="password" type="password" value="<?= set_value('password');?>" placeholder="Create a password" required="required"/>
                                                        <label for="inputPassword">Password</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" name="passconf" id="passwordconfirm" value="<?= set_value('passconf');?>" type="password" placeholder="Confirm password" required="required"/>
                                                        <label for="inputPasswordConfirm">Confirm Password</label>
                                                    </div>
                                                </div>
                                                <input type="hidden" name="role_id" value="2">
                                                <input type="hidden" name="is_active" value="2">
                                            </div>
                                            <?=$this->session->flashdata('fail') ?>
                                            <div class="mt-4 mb-0">
                                                <div class="d-grid"><button type="submit" class="btn btn-primary btn-xl btn-outline-dark text-uppercase" value="Upload">
                                                    daftar
                                                <i class="fas fa-pen-to-square fa-1x"></i>                                                    
                                                </button></div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-2">
                                        <div class="btn-group d-flex">
                                            <a href="<?= site_url('login') ?>" class="btn btn-primary btn-xs btn-outline-dark text-uppercase w-100 text-uppercase">
                                            masuk
                                            <i class="fas fa-right-to-bracket"></i>
                                            </a>
                                            <a href="<?= site_url('welcome') ?>" class="btn btn-primary btn-xs btn-outline-dark text-uppercase w-100 text-uppercase">
                                            <i class="fas fa-house"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="<?= base_url('assets/') ?>admin/js/scripts.js"></script>
    </body>
</html>
