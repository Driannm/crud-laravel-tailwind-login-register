@extends('layouts.app')
  
@section('title', 'Data Mahasiswa')
  
@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">List Data Mahasiswa</h1>
        <a href="{{ route('dataMahasiswa.create') }}" class="btn btn-success">Tambah Data Mahasiswa</a>
    </div>
    <hr />
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th>#</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Nama Ayah</th>
                <th>Nama Ibu</th>
                <th>Tindakan</th>
            </tr>
        </thead>
        <tbody>+
            @if($mahasiswa->count() > 0)
                @foreach($mahasiswa as $mh)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $mh->NIM }}</td>
                        <td class="align-middle">{{ $mh->Nama }}</td>
                        <td class="align-middle">{{ $mh->Alamat }}</td>
                        <td class="align-middle">{{ $mh->Nama_Ayah }}</td>  
                        <td class="align-middle">{{ $mh->Nama_Ibu }}</td>  
                        <td class="align-middle">
                            <a href="{{ route('dataMahasiswa.show', $mh->id) }}" type="button" class="btn btn-primary">Detail</a>
                            <a href="{{ route('dataMahasiswa.edit', $mh->id)}}" type="button" class="btn btn-warning">Edit</a>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <form action="{{ route('dataMahasiswa.destroy', $mh->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger">Hapus</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td class="text-center" colspan="5">Data Mahasiswa Tidak Ditemukan</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection