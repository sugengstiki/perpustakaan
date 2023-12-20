@extends('layouts.utama')

@section('judul','Daftar Karyawan')

@section('isinya')

<a class="btn btn-primary" 
   href="{{ route('dsn.create') }}">Tambah</a>

<table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Telephone</th>
      <th scope="col">Alamat</th>
      <th scope="col">Posisi</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
      @forelse ($rows as $row)
    <tr>
        <td>Mark</td>
        <td>{{$row->nama}}</td>
        <td>{{$row->telp}}</td>
        <td>{{$row->alamat}}</td>
        <td>{{$row->posisi}}</td>
        <td><a class="btn btn-primary" href="{{ route('dsn.edit', ['dosen' => $row->id]) }}">Edit</a></td>
    </tr>
    
    
    @empty
    Data belum ada
    @endforelse
    
  </tbody>
</table>
@endsection