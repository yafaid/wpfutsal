@extends('admin.master')
@section('judul_halaman', 'Pertemuan')
@section('header')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
@endsection
@section('konten')
    <div class="section-header">
        <h1>Presensi</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="{{ route('dbadmin') }}">Dashboard</a></div>
            <div class="breadcrumb-item">Data Absensi</div>
            <div class="breadcrumb-item">Pertemuan</div>
        </div>
    </div>
    <div class="section-body">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-primary">
                        <i class="fas fa-check-double"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Presensi</h4>
                        </div>
                        <div class="card-body">
                            Masukkan Mapel,Tanggal dan Kelas
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <form method="POST" action="{{ route('presensi.add') }}">
            @csrf
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="tanggal">Tanggal:</label>
                        <input type="date" name="tanggal" id="tanggal">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="tanggal">Kelas:</label>
                        <select class="select22" name="kode_kelas" id="kode_kelas">
                            <option value="">-- Pilih Kode Kelas --</option>
                            @foreach ($kelas as $row)
                            <option value="{{$row->id}}">{{$row->kodekelas}} - {{ $row->jurusan->kodejur }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="tanggal">Mapel:</label>
                        <select class="select22" name="kode_mapel">
                            <option value="">-- Pilih Mapel --</option>
                            @foreach ($mapel as $row)
                            <option value="{{$row->kodemapel}}">{{$row->kodemapel}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>


            <table class="table">
                <thead>
                    <tr>
                        <th>Nama Siswa</th>
                        <th>Hadir</th>
                        <th>Alpha</th>
                        <th>Izin</th>
                        <th>Sakit</th>
                    </tr>
                </thead>
                <tbody id="tbody">
                    
                </tbody>
            </table>
            <button type="submit">Simpan</button>
        </form>
    </div>

    <script>
       $('#kode_kelas').on( "change", function() {
        var val = $( this ).val();

        $.ajax({
                    url: "{{ route('get.kelas') }}",
                    method: 'POST',
                    data: {
                        kelas_id: val,
                        _token: $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response) {
                        
                        // $.each(response.data,function(index,obj){
                        //     console.log(obj.);
                        // });
                        $('#tbody').html(response.data);

                    },
                    error: function(xhr, status, error) {
                        Swal.fire({
                            title: 'Error!!',
                            text: errorMessage,
                            icon: 'error',
                            timer: 2000, // Menutup setelah 2 detik (2000 ms)
                            showConfirmButton: false // Menyembunyikan tombol OK
                        });
                    }
                });
        
      
        } );

        function disabledBox(kondisi)
        {
            switch (key) {
                case value:
                    
                    break;
            
                default:
                    break;
            }
        }
    </script>


@endsection
