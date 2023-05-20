<!DOCTYPE html>
<html lang="en">     
    
    <body id="page-top">                                                   
        <section class="page-section">
            <div class="container">
                <h3 class="text-center text-uppercase text-secondary mb-0">Ringkasan</h3>
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="far fa-futbol"></i></div>
                    <div class="divider-custom-line"></div>
                </div>                
                
                <div class="container row d-flex ">
                    <div class="row justify-content-center">
                        <div class="card shadow-lg border-5 rounded-lg mt-5 col-md-4 col-sm-12 mb-3 ">                                                                                           
                            <div class="card-body ">
                                <div class="row justify-content-center">
                                    <h1 class="align-items-center text-center text-uppercase text-secondary mb-0"><?php echo $data2; ?></h1>                
                                </div>     
                            </div>
                            <div class="card-footer text-center py-5">   
                                <h3 class="text-center text-uppercase">Menunggu Persetujuan </h2>                     
                            </div>
                        </div>    
                        <div class="card shadow-lg border-5 rounded-lg mt-5 col-md-8 col-sm-12 mb-3 ">                                                                                           
                            <div class="card-body ">
                                <div class="row justify-content-center table table-responsive">
                                <!-- Tabel -->
                                <table class="table text-center table-responsive">
                                    <thead>
                                        <tr>
                                            <th>Lapangan</th>
                                            <th>Tanggal</th>
                                            <th>Jam</th>
                                            <th>Bukti</th>
                                            <th>Foto KTP</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        $no = 1;
                                        foreach($pending as $row){ ?>
                                        <tr>
                                            <td><?= $row->lapangan_id; ?></td>
                                            <td><?= $row->tanggal; ?></td>
                                            <td><?= $row->jam; ?>.00</td>
                                            <td>
                                                <?php if ($row->bukti): ?>
                                                    <a href="<?= base_url('uploads/bukti/' . $row->bukti) ?>">Bukti Bayar                                                      
                                                    </a>
                                                    <!-- <img src="<?= base_url('uploads/bukti/' . $row->bukti) ?>" style="max-width: 200px; height: auto;" alt="Bukti"> -->
                                                <?php endif; ?>                                           
                                            </td>
                                            <td>
                                                <?php if ($row->ktp): ?>
                                                    <a href="<?= base_url('uploads/' . $row->ktp) ?>">KTP                                                   
                                                    </a>
                                                    
                                                <?php endif; ?>
                                            </td>
                                            <td>
                                            <?php if($this->session->userdata('role_id') == 1){ ?>
                                                <button type="button" class="btn btn-success btn-accept" data-id="<?= $row->id ?>">Terima</button>
                                                <button type="button" class="btn btn-danger btn-reject" data-id="<?= $row->id ?>">Tolak</button>
                                            <?php } ?>
                                            </td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>           
                                </div>     
                            </div>    
                        </div>
                    </div>
                </div>    
        </section>
        <script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>
    </body>
</html>
