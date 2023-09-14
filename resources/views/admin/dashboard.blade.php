@extends('admin.master')
@section('judul_halaman', 'Dashboard')
@section('konten')

    <div class="section-header">
        <h1>Dashboard</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active">Dashboard</div>
            
        </div>
    </div>
    <button onclick="tampilkanToast('Ini pesan sukses', 'success')">Tampilkan Toast Sukses</button>
    <button onclick="tampilkanToast('Ini pesan galat', 'error')">Tampilkan Toast Galat</button>

    <script>
        function tampilkanToast(pesan, jenis) {
            iziToast.show({
                message: pesan,
                color: jenis,
                position: 'topRight',
                timeout: 3000
            });
        }
    </script>
@endsection
