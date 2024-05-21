@extends('layouts.app')
  
@section('title', 'Detail Data')
  
@section('contents')
    <h1 class="mb-0">Detail Data Mahasiswa</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">NIM</label>
            <input type="text" name="title" class="form-control" placeholder="NIM" value="{{ $mahasiswa->NIM }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Nama Mahasiswa </label>
            <input type="text" name="Nama" class="form-control" placeholder="Nama" value="{{ $mahasiswa->Nama }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Nama Ayah</label>
            <input type="text" name="Nama_Ayah" class="form-control" placeholder="Nama Ayah" value="{{ $mahasiswa->Nama_Ayah }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Nama Ibu</label>
            <input type="text" name="Nama_Ibu" class="form-control" placeholder="Nama Ibu" value="{{ $mahasiswa->Nama_Ibu }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Alamat Mahasiswa</label>
            <textarea class="form-control" name="Alamat" placeholder="Alamat Mahasiswa" readonly>{{ $mahasiswa->Alamat }}</textarea>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $mahasiswa->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $mahasiswa->updated_at }}" readonly>
        </div>
    </div>
    <div class="mt-3 text-left">
        <a href="{{ route('dataMahasiswa') }}" id="btn-kembali" class="btn btn-secondary">Kembali</a>
    </div>
@endsection