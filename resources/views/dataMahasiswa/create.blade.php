@extends('layouts.app')
  
@section('title', 'Input Data')
  
@section('contents')
    <h1 class="mb-0">Tambah Data Mahasiswa</h1>
    <hr />
    <form action="{{ route('dataMahasiswa.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="NIM" class="form-control" placeholder="NIM">
            </div>
            <div class="col">
                <input type="text" name="Nama_Ayah" class="form-control" placeholder="Nama Ayah">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="Nama" class="form-control" placeholder="Nama Mahasiswa">
            </div>
            <div class="col">
                <input type="text" name="Nama_Ibu" class="form-control" placeholder="Nama Ibu">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col">
                <input type="text" name="Alamat" class="form-control" placeholder="Alamat Mahasiswa">
            </div>
        </div>
 
        <div class="mt-5 text-left">
        <button id="btn" class="btn btn-success" type="submit">Simpan Data</button>
        <a href="{{ route('dataMahasiswa') }}" id="btn-kembali" class="btn btn-secondary ml-3">Kembali</a>
        </div>
    </form>
@endsection