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
                maxDate:'+2d',
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
    
        
        function calculateTotalBayar() {
            // Ambil nilai tanggal dari input dengan ID 'date'
            var tanggal = document.getElementById('date').value;

            // Ambil nilai jam dari checkbox dengan name 'jam[]'
            var jam = document.getElementsByName('jam[]');
            var total_jam = 0;
            for (var i = 0; i < jam.length; i++) {
                if (jam[i].checked) {
                    total_jam++;
                }
            }

            // Hitung total bayar dengan mengalikan 100 setiap satu jam yang dicentang pada checkbox jam
            var total_bayar = total_jam * 100;

            // Tampilkan hasil total bayar pada element dengan ID 'total-bayar'
            document.getElementById('total-bayar').innerHTML = 'Rp ' + total_bayar;
        }

        // Panggil fungsi calculateTotalBayar() ketika ada perubahan pada input tanggal atau checkbox jam
        var date_input = document.getElementById('date');
        date_input.addEventListener('change', calculateTotalBayar);

        var jam_input = document.getElementsByName('jam[]');
        for (var i = 0; i < jam_input.length; i++) {
            jam_input[i].addEventListener('change', calculateTotalBayar);
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
                            <div class="row justify-content-center table table-responsive">
                            <table class="table text-center">
                            <thead>
                                <th>9-10</th>
                                <th>10-11</th>
                                <th>11-12</th>
                                <th>12-13</th>
                                <th>13-14</th>
                                <th>14-15</th>
                                <th>15-16</th>
                                <th>16-17</th>
                                <th>17-18</th>
                                <th>18-19</th>
                                <th>19-20</th>
                                <th>20-21</th>
                                <th>21-22</th>
                                <th>22-23</th>
                            </thead>
                            <tbody>                        
                                <td><input type="checkbox" name="jam[]" value="9"></td>
                                <td><input type="checkbox" name="jam[]" value="10"></td>
                                <td><input type="checkbox" name="jam[]" value="11"></td>
                                <td><input type="checkbox" name="jam[]" value="12"></td>
                                <td><input type="checkbox" name="jam[]" value="13"></td>
                                <td><input type="checkbox" name="jam[]" value="14"></td>
                                <td><input type="checkbox" name="jam[]" value="15"></td>
                                <td><input type="checkbox" name="jam[]" value="16"></td>
                                <td><input type="checkbox" name="jam[]" value="17"></td>
                                <td><input type="checkbox" name="jam[]" value="18"></td>
                                <td><input type="checkbox" name="jam[]" value="19"></td>
                                <td><input type="checkbox" name="jam[]" value="20"></td>
                                <td><input type="checkbox" name="jam[]" value="21"></td>
                                <td><input type="checkbox" name="jam[]" value="22"></td>                        
                            </tbody>
                            </table>
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
                                    <h3 class="text-center text-uppercase">Total Bayar</h3>
                                    <span id="total-bayar"></span>                                                                                   
                                    </div>     
                                </div>
                                <div class="card-footer text-center py-5">   
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
    