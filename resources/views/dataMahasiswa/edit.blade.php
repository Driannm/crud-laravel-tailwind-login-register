@extends('layouts.app')
  
@section('title', 'Edit Data')
  
@section('contents')
    <h1 class="mb-0">Edit Data Mahasiswa</h1>
    <hr />
    <form action="{{ route('dataMahasiswa.update', $mahasiswa->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">NIM</label>
                <input type="text" name="NIM" class="form-control" placeholder="NIM" value="{{ $mahasiswa->NIM }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Nama Mahasiswa</label> 
                <input type="text" name="Nama" class="form-control" placeholder="Nama Mahasiswa" value="{{ $mahasiswa->Nama }}" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Nama Ayah</label>
                <input type="text" name="Nama_Ayah" class="form-control" placeholder="Nama Ayah" value="{{ $mahasiswa->Nama_Ayah }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Nama Ibu</label>
                <input type="text" name="Nama_Ibu" class="form-control" placeholder="Nama Ibu" value="{{ $mahasiswa->Nama_Ibu }}" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Alamat</label>
                <textarea class="form-control" name="Alamat" placeholder="Alamat Mahasiswa" >{{ $mahasiswa->Alamat }}</textarea>
            </div>
        </div>
        <div class="mt-3 text-left">
            <a href="{{ route('dataMahasiswa') }}" id="btn-kembali" class="btn btn-info">Perbarui</a>
            <a href="{{ route('dataMahasiswa') }}" id="btn-kembali" class="btn btn-secondary ml-3">Kembali</a>
        </div>
    </form>
@endsection