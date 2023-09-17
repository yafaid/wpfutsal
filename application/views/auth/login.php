<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Login</title>        
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
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Login</h3></div>
                                    <?=$this->session->flashdata('success') ?>
                                    <?=$this->session->flashdata('fail') ?>

                                    <div class="card-body">
                                        <form method="post" action="<?php echo base_url(); ?>login/login">                                            
                                            <div class="form-floating mb-3">
                                                <input class="form-control" name="email" id="inputEmail" type="email" placeholder="name@example.com" />
                                                <label for="inputEmail">Email address</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" name="password" id="inputPassword" type="password" placeholder="Password" />
                                                <label for="inputPassword">Password</label>
                                            </div>                                            
                                            <div class="mt-4 mb-0">
                                            <div class="d-grid"><button type="submit" class="btn btn-primary btn-xl btn-outline-dark text-uppercase">   
                                            masuk                                                                                      
                                            <i class="fas fa-right-to-bracket fa-1x"></i>
                                            </button></div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-2">
                                        <div class="btn-group d-flex text-uppercase">
                                            <a href="<?= site_url('register') ?>" class="btn btn-primary btn-xs btn-outline-dark text-uppercase w-100 text-uppercase font-weight-bold">
                                            daftar
                                            <i class="fas fa-pen-to-square"></i>
                                            </a>
                                            <a href="<?= site_url('welcome') ?>" class="btn btn-primary btn-xs btn-outline-dark text-uppercase w-100 text-uppercase">
                                            home
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
