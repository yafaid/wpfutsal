<!DOCTYPE html>
<html lang="en">   
    <!-- CSS untuk plugin datepicker dan timepicker -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jquery-timepicker/1.10.0/jquery.timepicker.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>

    <script>
        $(document).ready(function() {
            // Aktifkan datepicker pada input dengan class "datepicker"
            $( ".datepicker" ).datepicker({
                dateFormat: "yy-mm-dd",
                maxDate:'today',
                minDate:'today'
            });
        });
        
        function checkOnlyOne(checkbox) {
        var checkboxes = document.getElementsByName('lapangan');
        checkboxes.forEach(function(current) {
            if (current !== checkbox) {
            current.checked = false;
            }
        });
        }

    </script>
    <body id="page-top">                                
        <section class="page-section portfolio" id="portfolio">
            <div class="container">
                <!-- Portfolio Section Heading-->
                <h3 class="text-center text-uppercase text-secondary mb-0">Pesan </h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="far fa-futbol"></i></div>
                    <div class="divider-custom-line"></div>
                </div>        
                <div class="container row d-flex justify-content-center">
                        <div class="card shadow-lg border-5 rounded-lg mt-5 col-md-12 col-sm-12 mb-3">      
                            <div class="row justify-content-center table table-responsive">
                            
                            <table class="table table-responsive">
                                <thead>
                                    <tr>
                                    <th>Jam</th>
                                    <th>Lapangan</th>
                                    <th></th>
                                    <!-- Tambahkan kolom-kolom lain yang diperlukan -->
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($jadwal as $row) { ?>
                                    <tr>
                                        <td><?php echo $row->jam; ?></td>
                                        <td><?php echo $row->lapangan; ?></td>
                                        <td><?php echo $row->is_active; ?>Terpesan</td>
                                        <!-- Tambahkan kolom-kolom lain yang diperlukan -->
                                    </tr>
                                    <?php } ?>
                                </tbody>
                                </table>  
                                </div>                                                                                
                        <div class="card-footer text-center py-5 ">   
                            <h3 class="text-center text-uppercase">Jadwal Hari ini</h2>                     
                        </div>
                    </div>
                </div>         
                
                <form method="post" action="<?php echo base_url('booking/process'); ?>">
                    <div class="container row d-flex justify-content-center">
                        <div class="card shadow-lg border-5 rounded-lg mt-5 col-md-3 col-sm-12 mb-3">                                                                                           
                            <div class="card-body">
                                <div class="row justify-content-center">
                                <input type="text" id="date" name="date" class="datepicker">
                            </div>     
                        </div>
                        <div class="card-footer text-center py-5 ">   
                            <h3 class="text-center text-uppercase">Tanggal </h2>                     
                        </div>
                    </div> 

                    <div class="card shadow-lg border-5 rounded-lg mt-5 col-md-9 col-sm-12 mb-3">
                        <div class="card-body">
                            <div class="row justify-content-left">
                                <h5>Siang</h5>
                                <div class="card  col-md-2 col-sm-12 mb-3">
                                <h5 class="text-center mb-1">9.00</h1>
                                <input class="mb-3" type="checkbox" name="jam[]" value="9">
                                </div>                                
                                <div class="card  col-md-2 col-sm-12 mb-3">
                                <h5 class="text-center mb-1">10.00</h1>
                                <input class="mb-3" type="checkbox" name="jam[]" value="10">
                                </div>
                                <div class="card  col-md-2 col-sm-12 mb-3">
                                <h5 class="text-center mb-1">11.00</h1>
                                <input class="mb-3" type="checkbox" name="jam[]" value="11">
                                </div>
                                <div class="card  col-md-2 col-sm-12 mb-3">
                                <h5 class="text-center mb-1">12.00</h1>
                                <input class="mb-3" type="checkbox" name="jam[]" value="12">
                                </div>
                                <div class="card  col-md-2 col-sm-12 mb-3">
                                <h5 class="text-center mb-1">13.00</h1>
                                <input class="mb-3" type="checkbox" name="jam[]" value="13">
                                </div>
                                <div class="card  col-md-2 col-sm-12 mb-3">
                                <h5 class="text-center mb-1">14.00</h1>
                                <input class="mb-3" type="checkbox" name="jam[]" value="14">
                                </div>
                                <div class="card  col-md-2 col-sm-12 mb-3">
                                <h5 class="text-center mb-1">15.00</h1>
                                <input class="mb-3" type="checkbox" name="jam[]" value="15">
                                </div>
                                <div class="card  col-md-2 col-sm-12 mb-3">
                                <h5 class="text-center mb-1">16.00</h1>
                                <input class="mb-3" type="checkbox" name="jam[]" value="16">
                                </div>
                                <div class="card  col-md-2 col-sm-12 mb-3">
                                <h5 class="text-center mb-1">17.00</h1>
                                <input class="mb-3" type="checkbox" name="jam[]" value="17">
                                </div>
                                <h5>Malam</h5>
                                <div class="card  col-md-2 col-sm-12 mb-3">
                                <h5 class="text-center mb-1">18.00</h1>
                                <input class="mb-3" type="checkbox" name="jam[]" value="18">
                                </div>
                                <div class="card  col-md-2 col-sm-12 mb-3">
                                <h5 class="text-center mb-1">19.00</h1>
                                <input class="mb-3" type="checkbox" name="jam[]" value="19">
                                </div>
                                <div class="card  col-md-2 col-sm-12 mb-3">
                                <h5 class="text-center mb-1">20.00</h1>
                                <input class="mb-3" type="checkbox" name="jam[]" value="20">
                                </div>
                                <div class="card  col-md-2 col-sm-12 mb-3">
                                <h5 class="text-center mb-1">21.00</h1>
                                <input class="mb-3" type="checkbox" name="jam[]" value="21">
                                </div>
                                <div class="card  col-md-2 col-sm-12 mb-3">
                                <h5 class="text-center mb-1">22.00</h1>
                                <input class="mb-3" type="checkbox" name="jam[]" value="22">
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-center py-5">   
                            <h3 class="text-center text-uppercase">Jam</h2>                    
                        </div>
                    </div>
                    
                    <div class="container row d-flex">
                        <div class="card shadow-lg border-5 rounded-lg mt-5 col-md-4 col-sm-12 mb-3">                                                                                           
                            <div class="card-body ">
                                <div class="row justify-content-center">
                                    <input type="checkbox" name="lapangan" value="1" onchange="checkOnlyOne(this)">                                 
                                </div>     
                            </div>
                            <div class="card-footer text-center py-5">   
                                <h3 class="text-center text-uppercase">Lapangan 1</h3>     

                            </div>
                        </div>
                        
                        <div class="card shadow-lg border-5 rounded-lg mt-5 col-md-4 col-sm-12 mb-3">                                                                                           
                            <div class="card-body">
                                <div class="row justify-content-center">
                                    <input type="checkbox" name="lapangan" value="2" onchange="checkOnlyOne(this)">
                                </div>     
                            </div>
                            <div class="card-footer text-center py-5">   
                                <h3 class="text-center text-uppercase">Lapangan 2 </h2>  
                            </div>
                        </div>

                        <div class="card shadow-lg border-5 rounded-lg mt-5 col-md-4 col-sm-12 mb-3">                                                                                           
                            <div class="card-body">
                                <div class="row justify-content-center">
                                    <input type="checkbox" name="lapangan" value="3" onchange="checkOnlyOne(this)">
                                </div>     
                            </div>
                            <div class="card-footer text-center py-5">   
                                <h3 class="text-center text-uppercase">Lapangan 3 </h2>        
                            </div>
                        </div>  
                        <input type="hidden" name="user_id" value="<?php echo $this->session->userdata('iduser'); ?>">
                        <input type="hidden" name="is_active" value="1">

                        <div class="container row justify-content-center">
                            <div class="card shadow-lg border-5 rounded-lg mt-5 col-md-6 col-sm-12 mb-3">                                                                                           
                                <div class="card-body ">
                                    <div class="row justify-content-center">  
                                    <?=$this->session->flashdata('fail') ?>  
                                    <?=$this->session->flashdata('fail2') ?>  
                                    <h3 class="text-center text-uppercase">Total Bayar</h3>
                                    <span id="total-bayar"></span>                                                                                   
                                    </div>     
                                </div>
                                <div class="card-footer text-center py-5">   
                                    <p class="text-center text-uppercase">Silahkan Upload bukti pembayaran</p>
                                    <input type="file" class="btn btn-xs btn-outline-dark w-100" name="bukti" id="bukti" value="<?= set_value('bukti');?>" required="required"> <br><br>                      
                                    <input type="submit" class="btn btn-xl btn-outline-dark" value="Submit">         
                                </div>
                            </div>
                        </div>
                </form>
            </div>
        </section>
        
        <script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>
    </body>
    </html>
    