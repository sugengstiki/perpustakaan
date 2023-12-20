@extends('layouts.main')
@section('content')
<h2>HTML Forms</h2>
@if ($errors->any())
<div class="alert alert-danger">
<ul>

  @foreach ($errors->all() as $error)
  <li>{{ $error }}</li>
  @endforeach

</ul>
</div>
@endif

<form action="{{ route('buku.store') }}" method="post">
@csrf
  <label for="fname">Judul:</label><br>
  <input type="text" id="fname" name="title" value="John"><br>
  @error('title')
  <div>
      {{ $message }}
  </div>
  @enderror

  <label for="lname">Penulis:</label><br>
  <input type="text" id="lname" name="penulis" value="{{ old('penulis') }}"><br>
  <label for="cat">Kategori:</label><br>
  <input type="text" id="cat" name="kategori" value="Doe"><br><br>
  <input type="submit" value="Submit">
</form> 

@endsection