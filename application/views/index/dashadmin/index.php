<!DOCTYPE html>
<html lang="en">     
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
        // Ambil semua elemen td dengan class "jamxxxx" dari tabel
        var tdElements = document.querySelectorAll("td[class^='jam']");

        // Loop melalui setiap elemen td
        for (var i = 0; i < tdElements.length; i++) {
        var tdElement = tdElements[i];
        var jam = tdElement.classList[1]; // Dapatkan class kedua dari elemen td (misal: jam0800)
        var checkbox = document.querySelector("input[value='" + jam.substr(3) + "']"); // Cari elemen checkbox dengan value yang sama dengan jam (misal: 0800)

        // Cek apakah checkbox di-check atau tidak
        if (checkbox.checked) {
            tdElement.textContent = "Diisi"; // Jika di-check, isi kolom dengan teks "Diisi"
        } else {
            tdElement.textContent = "Kosong"; // Jika tidak di-check, isi kolom dengan teks "Kosong"
        }
        }

    </script>
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
                        <div class="card shadow-lg border-5 rounded-lg mt-5 col-md-12 col-sm-12 mb-3 ">                                                                                           
                            <div class="card-body ">
                                <div class="row justify-content-center table table-responsive">
                                <table class="table text-center table-responsive">
                                <thead>
                                    <tr>
                                    <th>Lapangan</th>
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
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    <td>Lapangan 1</td>
                                    <td class="lap1 9"></td>
                                    <td class="lap1 10"></td>
                                    <td class="lap1 11"></td>
                                    <td class="lap1 12"></td>
                                    <td class="lap1 13"></td>
                                    <td class="lap1 14"></td>
                                    <td class="lap1 15"></td>
                                    <td class="lap1 16"></td>
                                    <td class="lap1 17"></td>
                                    <td class="lap1 18"></td>
                                    <td class="lap1 19"></td>
                                    <td class="lap1 20"></td>
                                    <td class="lap1 21"></td>
                                    <td class="lap1 22"></td>                                    
                                    </tr>
                                    </tr>
                                    <tr>
                                    <td>Lapangan 2</td>
                                    <td class="lap2 jam0800"></td>
                                    <td class="lap2 jam1000"></td>
                                    <td class="lap2 jam1200"></td>
                                    <td class="lap2 jam1400"></td>
                                    <td class="lap2 jam1600"></td>
                                    <td class="lap2 jam1800"></td>
                                    <td class="lap2 jam2000"></td>
                                    <td class="lap2 jam2200"></td>
                                    <td class="lap2 jam1200"></td>
                                    <td class="lap2 jam1400"></td>
                                    <td class="lap2 jam1600"></td>
                                    <td class="lap2 jam1800"></td>
                                    <td class="lap2 jam2000"></td>
                                    <td class="lap2 jam2200"></td>
                                    </tr>
                                    <tr>
                                    <td>Lapangan 3</td>
                                    <td class="lap3 jam0800"></td>
                                    <td class="lap3 jam1000"></td>
                                    <td class="lap3 jam1200"></td>
                                    <td class="lap3 jam1400"></td>
                                    <td class="lap3 jam1600"></td>
                                    <td class="lap3 jam1800"></td>
                                    <td class="lap3 jam2000"></td>
                                    <td class="lap3 jam2200"></td>
                                    <td class="lap3 jam1200"></td>
                                    <td class="lap3 jam1400"></td>
                                    <td class="lap3 jam1600"></td>
                                    <td class="lap3 jam1800"></td>
                                    <td class="lap3 jam2000"></td>
                                    <td class="lap3 jam2200"></td>
                                    </tr>
                                </tbody>
                                </table>
                                </div>     
                            </div>
                            <div class="card-footer text-center py-5">   
                                <h3 class="text-center text-uppercase">Jadwal </h2>                     
                            </div>
                        </div>
                    </div>
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
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        $no = 1;
                                        foreach($data3 as $row){ ?>
                                        <tr>
                                            <td><?= $row->lapangan_id; ?></td>
                                            <td><?= $row->tanggal; ?></td>
                                            <td><?= $row->jam; ?>.00</td>
                                            <td><?php if($row->is_active == 1){ echo 'Pending'; } ?>
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
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="<?= base_url('assets/') ?>home/js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
        <!-- JS DataTables -->
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    </body>
</html>
