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
                                                    <img src="<?= base_url('uploads/bukti/' . $row->bukti) ?>" style="max-width: 200px; height: auto;" alt="Bukti">
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
        <script>
        $(document).ready(function() {
        $(document).on('click', '.btn-accept, .btn-reject', function() {
            var id = $(this).data('id');
            var status = $(this).hasClass('btn-accept') ? 2 : 3;
            $.ajax({
            url: '<?= base_url("booking/change_status"); ?>',
            type: 'POST',
            data: {id: id, status: status},
            success: function(response) {
                if(response == 'success') {
                alert('Status berhasil diubah!');
                location.reload();
                } else {
                alert('Status gagal diubah!');
                }
            }
            });
        });
        });

        addEventListener('load', function () {

        $(`#jam_09`).prop('disabled', true);
        for (let i = 9; i <= 22; i++) {
            $(`#jam_${i}`).prop( "disabled", true );
        }
        });

        $("#date").change(function(){
        $(`#jam_09`).prop('disabled', true);
        for (let i = 9; i <= 22; i++) {
            $(`#jam_${i}`).prop( "disabled", true );
        }
        $("#lap_1").prop("checked", false);
        $("#lap_2").prop("checked", false);
        $("#lap_3").prop("checked", false);
        });
        function cek_lapangan(lap)
        {

        var date = $('#date').val();

        if(date){ console.log('1');
        $(`#jam_09`).prop( "disabled", false );
        $(`#jam_09`).prop('checked', false);
        for (let i = 9; i <= 22; i++) {
            $(`#jam_${i}`).prop( "disabled", false );
            $(`#jam_${i}`).prop('checked', false);
        }
        var date = $('#date').val();
        $.ajax({
        url: "/wpfutsal/user/satus/get",
        method: "post",
        data: {'date' : date, 'lap' : lap},
        success: function(data) {



            $.each( data, function( key, value ) {
        
                let string_input = value.jam;
                let match = string_input.match(/^\d{2}/);
                $(`#jam_${match[0]}`).prop( "disabled", true );
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
