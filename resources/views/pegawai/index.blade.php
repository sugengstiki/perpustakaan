@extends('layouts.utama')

@section('judul','Daftar Karyawan STIKI Malang')

@section('isinya')

<a class="btn btn-primary" 
   href="{{ route('peg.tambah') }}">Tambah</a>

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
      @forelse ($peg as $row)
    <tr>
        <td>{{ $loop->index + 1 }} | {{$row->id}}</td>
        <td>{{$row->nama}}</td>
        <td>{{$row->telp}}</td>
        <td>{{$row->alamat}}</td>
        <td>{{$row->posisi}}</td>
        <td>
          <a class="btn btn-primary" href="{{ route('peg.edit', ['karyawan' => $row->id]) }}">Edit</a>
          <form action="{{ route('peg.destroy',['karyawan' => $row->id]) }}" method="post">
            @csrf
            @method("DELETE")
            <button type="submit" class="btn btn-warning">Hapus</button>
          </form>
          
        </td>
    </tr>
    
    
    @empty
    Data belum ada
    @endforelse
    
  </tbody>
</table>
@endsection