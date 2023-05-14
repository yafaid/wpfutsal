<!DOCTYPE html>
<html lang="en">     
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jquery-timepicker/1.10.0/jquery.timepicker.min.css">
<script>
        $(document).ready(function() {
            // Aktifkan datepicker pada input dengan class "datepicker"
            $( ".datepicker" ).datepicker({
                dateFormat: "yy-mm-dd",
                maxDate:'+2d',
                minDate:'today'
            });
        });
    </script>
    
    <body id="page-top">                                                   
        <section class="page-section">
            <div class="container">
                <h3 class="text-center text-uppercase text-secondary mb-0">Jadwal</h3>
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="far fa-futbol"></i></div>
                    <div class="divider-custom-line"></div>
                </div>                
                
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
                                <div class="card mt-5 col-md-3 col-sm-6 mb-3">
                                    <h4 class="text-center text-uppercase text-secondary mb-0"> 09.00</h4>
                                    <input type="checkbox" name="jam[]" id="jam_09"  value="9"><br>
                                </div>
                                <div class="card mt-5 col-md-3 col-sm-6 mb-3">
                                    <h4 class="text-center text-uppercase text-secondary mb-0"> 10.00</h4>
                                    <input type="checkbox" name="jam[]" id="jam_10" value="10"><br>
                                </div>
                                <div class="card mt-5 col-md-3 col-sm-6 mb-3">
                                    <h4 class="text-center text-uppercase text-secondary mb-0"> 11.00</h4>
                                    <input type="checkbox" name="jam[]" id="jam_11" value="11"><br>
                                </div>
                                <div class="card mt-5 col-md-3 col-sm-6 mb-3">
                                    <h4 class="text-center text-uppercase text-secondary mb-0"> 12.00</h4>
                                    <input type="checkbox" name="jam[]" id="jam_12" value="12"><br>
                                </div>
                                <div class="card mt-5 col-md-3 col-sm-6 mb-3">          
                                    <h4 class="text-center text-uppercase text-secondary mb-0"> 13.00</h4>                          
                                    <input type="checkbox" name="jam[]" id="jam_13" value="13"><br>
                                </div>
                                <div class="card mt-5 col-md-3 col-sm-6 mb-3">
                                    <h4 class="text-center text-uppercase text-secondary mb-0"> 14.00</h4>
                                    <input type="checkbox" name="jam[]" id="jam_14" value="14"><br>
                                </div>
                                <div class="card mt-5 col-md-3 col-sm-6 mb-3">
                                    <h4 class="text-center text-uppercase text-secondary mb-0"> 15.00</h4>
                                    <input type="checkbox" name="jam[]" id="jam_15" value="15"><br>
                                </div>
                                <div class="card mt-5 col-md-3 col-sm-6 mb-3">
                                    <h4 class="text-center text-uppercase text-secondary mb-0"> 16.00</h4>
                                    <input type="checkbox" name="jam[]" id="jam_16" value="16"><br>
                                </div>
                                <div class="card mt-5 col-md-3 col-sm-6 mb-3">
                                    <h4 class="text-center text-uppercase text-secondary mb-0"> 17.00</h4>
                                    <input type="checkbox" name="jam[]" id="jam_17" value="17"><br>
                                </div>
                                <div class="card mt-5 col-md-3 col-sm-6 mb-3">
                                    <h4 class="text-center text-uppercase text-secondary mb-0"> 18.00</h4>
                                    <input type="checkbox" name="jam[]" id="jam_18" value="18"><br>
                                </div>
                                <div class="card mt-5 col-md-3 col-sm-6 mb-3">
                                    <h4 class="text-center text-uppercase text-secondary mb-0"> 19.00</h4>
                                    <input type="checkbox" name="jam[]" id="jam_19" value="19"><br>
                                </div>
                                <div class="card mt-5 col-md-3 col-sm-6 mb-3">
                                    <h4 class="text-center text-uppercase text-secondary mb-0"> 20.00</h4>
                                    <input type="checkbox" name="jam[]" id="jam_20" value="20"><br>
                                </div>
                                <div class="card mt-5 col-md-3 col-sm-6 mb-3">
                                    <h4 class="text-center text-uppercase text-secondary mb-0"> 21.00</h4>
                                    <input type="checkbox" name="jam[]" id="jam_21" value="21"><br>
                                </div>
                                <div class="card mt-5 col-md-3 col-sm-6 mb-3">
                                    <h4 class="text-center text-uppercase text-secondary mb-0"> 22.00</h4>
                                    <input type="checkbox"  name="jam[]" id="jam_22" value="22"><br>
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
                                    <input type="radio" name="lapangan" id="lap_1" value="1" onchange="cek_lapangan('1')">                                 
                                </div>     
                            </div>
                            <div class="card-footer text-center py-5">   
                                <h3 class="text-center text-uppercase">Lapangan 1</h3>     

                            </div>
                        </div>
                        
                        <div class="card shadow-lg border-5 rounded-lg mt-5 col-md-4 col-sm-12 mb-3">                                                                                           
                            <div class="card-body">
                                <div class="row justify-content-center">
                                    <input type="radio" name="lapangan" id="lap_2" value="2"  onchange="cek_lapangan('2')">
                                </div>     
                            </div>
                            <div class="card-footer text-center py-5">   
                                <h3 class="text-center text-uppercase">Lapangan 2 </h2>  
                            </div>
                        </div>

                        <div class="card shadow-lg border-5 rounded-lg mt-5 col-md-4 col-sm-12 mb-3">                                                                                           
                            <div class="card-body">
                                <div class="row justify-content-center">
                                    <input type="radio" name="lapangan" id="lap_3" value="3"  onchange="cek_lapangan('3')">
                                </div>     
                            </div>
                            <div class="card-footer text-center py-5">   
                                <h3 class="text-center text-uppercase">Lapangan 3 </h2>        
                            </div>    
        </section>
        <script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>
        <script>

        addEventListener('load', function () {

            $(`#jam_09`).prop('disabled', true);
            for (let i = 9; i <= 22; i++) {
                $(`#jam_${i}`).prop( "disabled", true );
            }
        });

        $("#date").change(function(){
            $(`#jam_09`).prop('checked', false);
            for (let i = 9; i <= 22; i++) {
                $(`#jam_${i}`).prop('checked', false);
            }
            $("#lap_1").prop("checked", false);
            $("#lap_2").prop("checked", false);
            $("#lap_3").prop("checked", false);
        });

        function cek_lapangan(lap)
        {

        var date = $('#date').val();

        if(date){ 

                $(`#jam_09`).prop('checked', false);
                for (let i = 9; i <= 22; i++) {
                    $(`#jam_${i}`).prop('checked', false);
                }
                $.ajax({
                url: "/wpfutsal/admin/satus/get",
                method: "post",
                data: {'date' : date, 'lap' : lap},
                success: function(data) {
                    $.each( data, function( key, value ) {
                
                        let string_input = value.jam;
                        let match = string_input.match(/^\d{2}/);
                        // $(`#jam_${match[0]}`).prop( "disabled", true );
                        $(`#jam_${match[0]}`).prop( "checked", true );
                    });

                    },
                    error: function(data){
                        
                    }
                });


        }else{
            alert('Pilih tanggal dahulu');
                $("#lap_1").prop("checked", false);
                $("#lap_2").prop("checked", false);
                $("#lap_3").prop("checked", false);
        }

        }
        function get_date(){
        var today = new Date();
        var dd = String(today.getDate()).padStart(2, '0');
        var mm = String(today.getMonth() + 1).padStart(2, '0');
        var yyyy = today.getFullYear();
        return  today = yyyy + '-' + mm + '-' + dd;
        }
    </script>
    </body>
</html>
