@extends('layouts.utama')

@section('judul','Edit data Karyawan')

@section('isinya')
<form action="{{ route('dsn.update' ,['dosen' => $row->id] ) }}" method="post" class="row g-3">
  @csrf  
  @method('PUT')

  <div class="col-md-12">
    <label for="inputNama" class="form-label">Nama</label>
    <input type="text" class="form-control" id="inputNama" name="namanya" value="{{ $row->nama }}" >
  </div>
  <div class="col-md-12">
    <label for="inputTelp" class="form-label">Telpon</label>
    <input type="text" class="form-control" id="inputTelp" name="telpnya"  value="{{ $row->telp }}">
  </div>
  <div class="col-md-12">
    <label for="inputAlamat" class="form-label">Alamat</label>
    <input type="text" class="form-control" id="inputAlamat" name="alamatnya"  value="{{ $row->alamat }}">
  </div>
  <div class="col-md-12">
    <label for="inputPosisi" class="form-label">Posisi</label>
    <input type="text" class="form-control" id="inputPosisi" name="posisinya" value="{{ $row->posisi }}">
  </div>
  
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Simpan</button>
  </div>
</form>
@endsection