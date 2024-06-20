@extends('layouts.app')
@section('title')
    Create Admin
@endsection
@section('content')
    <h1>Admin</h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/dashboard">Dasboard</a></li>
            <li class="breadcrumb-item"><a href="/admin">Admin</a></li>
            <li class="breadcrumb-item active" aria-current="page">Create Admin</li>
        </ol>
    </nav>
    <hr>
    <div class="card">
        <div class="card-header">
            <div class="row align-items-center">
                <div class="col-md-6">
                    Formulir Create Admin RhScout Percetakan
                </div>
                <div class="col-md-6 text-end">
                    <a class="btn btn-primary" href="/admin" role="button">Kembali</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <form action="/saveadmin" class="row" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3 col-md-6">
                    <label for="nm" class="form-label">Nama Admin</label>
                    <input type="text" name="nama_admin" id="nm" class="form-control"
                        placeholder="Masukan Nama Admin">
                </div>
                <div class="mb-3 col-md-6">
                    <label for="jk" class="form-label">Jenis Kelamin</label>
                    <select name="jk_admin" id="jk" class="form-select">
                        <option value="">--Pilih Jenis Kelamin--</option>
                        <option value="Pria">Pria</option>
                        <option value="Wanita">Wanita</option>
                    </select>
                </div>
                <div class="mb-3 col-md-6">
                    <label for="hp" class="form-label">No. Handphone</label>
                    <input type="text" name="nohp_admin" id="hp" class="form-control"
                        placeholder="Masukan No. Handphone">
                </div>
                <div class="mb-3 col-md-6">
                    <label for="email" class="form-label">Email Admin</label>
                    <input type="email" name="email_admin" id="email" class="form-control"
                        placeholder="Masukan Email Admin">
                </div>
                <div class="mb-3 col-md-6">
                    <label for="psw" class="form-label">Password</label>
                    <input type="password" name="password_admin" id="psw" class="form-control"
                        placeholder="Masukan Password Admin">
                </div>
                <div class="mb-3 col-md-6">
                    <label for="jbt" class="form-label">Jabatan Admin</label>
                    <input type="text" name="jabatan_admin" id="jbt" class="form-control"
                        placeholder="Masukan Jabatan Admin">
                </div>
                <div class="mb-3 col-md-6">
                    <label for="alamat" class="form-label">Alamat Admin</label>
                    <textarea name="alamat_admin" id="alamat" rows="5" class="form-control" placeholder="Masukan Alamat Admin"></textarea>
                </div>
                <div class="mb-3 col-md-6">
                    <label for="foto" class="form-label">Foto Admin</label>
                    <input type="file" name="foto_admin" id="foto" class="form-control" accept="image/*">
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-danger">Save Admin</button>
                </div>
            </form>
        </div>
    </div>
@endsection
