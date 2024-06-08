@extends('layouts.main')
@push('css')
<style>
    .header-right {
        display: flex;
        justify-content: flex-end;
    }
</style>
@endpush
@section('content')
    <div class="container">
        <div class="card my-4">
            <div class="card">
                <div class="card-header">
                    <div class="header-right">
                        Data Mahasiswa
                    </div>
                </div>
                <div class="input-group flex-nowrap my-2">
                    <input type="text" class="form-control" placeholder="enter your username">
                    <span class="input-group-text" id="addon-wrapping"><i class="fas fa-search"></i></span>
                    <div class="ms-2">
                        <button type="button" class="btn btn-success">Cetak Data</button>
                        <button type="button" class="btn btn-primary">+Tambah</button>
                    </div>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Jurusan</th>
                            <th scope="col">NPM</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Tanggal Lahir</th>
                            <th scope="col">Foto</th>
                            <th scope="col" class="header-right">Aksi</th>
                        </tr>
                    </thead>
                    <!-- Isi tabel -->
                </table>
            </div>
        </div>
    </div>
@endsection
