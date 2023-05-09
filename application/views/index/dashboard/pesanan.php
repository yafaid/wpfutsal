<!DOCTYPE html>
<html lang="en">     
    <body id="page-top">                                                   
        <section class="page-section portfolio" id="portfolio">
            <div class="container">
                <h3 class="text-center text-uppercase text-secondary mb-0">Pesananmu</h3>
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="far fa-futbol"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <div class="container row d-flex justify-content-center">
                    <div class="row justify-content-center">
                        <div class="card shadow-lg border-5 rounded-lg mt-5 col-md-3 col-sm-12 mb-3 ">                                                                                           
                            <div class="card-body ">
                                <div class="row justify-content-center">
                                    <h1 class="align-items-center text-center text-uppercase text-secondary mb-0"><?php echo $data2; ?></h1>                
                                </div>     
                            </div>
                            <div class="card-footer text-center py-5">   
                                <h3 class="text-center text-uppercase">Total</h2>                     
                            </div>
                        </div>  
                        <div class="card shadow-lg border-5 rounded-lg mt-5 col-md-9 col-sm-12 mb-3 ">                                                                                           
                            <div class="card-body ">
                                <div class="row justify-content-center table table-responsive">
                                <table class="table table-responsive">
                                <thead>
                                    <tr>
                                    <th>Lapangan</th>
                                    <th>Tanggal</th>
                                    <th>Jam</th>
                                    <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    $no = 1;
                                    foreach($data as $row){ ?>
                                    <tr>
                                    <td><?= $row->lapangan_id; ?></td>
                                    <td><?= $row->tanggal; ?></td>
                                    <td><?= $row->jam; ?>.00</td>
                                    <td><?php 
                                    if($row->is_active == 1){
                                        echo 'Pending';
                                    } elseif($row->is_active == 2){
                                        echo 'Diterima';
                                    } elseif($row->is_active == 3){
                                        echo 'Gagal';
                                    }
                                    ?>
                                    </td>
                                    </tr>
                                <?php } ?>
                                </tbody>
                                </table>            
                                </div>     
                            </div>
                            <div class="card-footer text-center py-5">   
                                <h3 class="text-center text-uppercase">Daftar Pesanan </h2>                     
                            </div>
                        </div>                                  
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>
