@extends('layouts.utama')

@section('judul','Tambah data Karyawan')

@section('isinya')
<form action="{{ route('dosen.store') }}" method="post" class="row g-3">
  @csrf  
  <div class="col-md-12">
    <label for="inputNama" class="form-label">Nama</label>
    <input type="text" class="form-control" id="inputNama" name="namanya">
  </div>
  <div class="col-md-12">
    <label for="inputTelp" class="form-label">Telpon</label>
    <input type="text" class="form-control" id="inputTelp" name="telpnya">
  </div>
  <div class="col-md-12">
    <label for="inputAlamat" class="form-label">Alamat</label>
    <input type="text" class="form-control" id="inputAlamat" name="alamatnya">
  </div>
  <div class="col-md-12">
    <label for="inputPosisi" class="form-label">Posisi</label>
    <input type="text" class="form-control" id="inputPosisi" name="posisinya">
  </div>
  
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Simpan</button>
  </div>
</form>
@endsection