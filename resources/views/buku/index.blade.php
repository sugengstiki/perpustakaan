@extends('layouts.main')
@push ('style')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />
@endpush
@push ('script')
<script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.7.0.js"></script>
  <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>
  <script>
    $(document).ready( function () {
    $('#example').DataTable({
            "createdRow": function( row, data, dataIndex){
                if( data[1] ==  "Sugeng"){
                    $(row).addClass('redClass');
                }
            }
        });
} );
  </script>
@endpush

@section('content')

  <h2>HTML Forms</h2>

  <a class="btn btn-primary my-4" href="{{ route('buku.create') }}">Tambah Data</a>

  <table id="example1" class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th>Title</th>
                <th>Pengarang</th>
                <th>Kategori</th>
                <th>Operasi</th>
                <th>Start date</th>
                <th>Salary</th>
            </tr>
        </thead>
        <tbody>
          @forelse ($thebook as $buku)
          <tr>
              <td>{{ $buku->title }}</td>
              <td>{{ $buku->author }}</td>
              <td>{{ $buku->cat_id }}</td>
              <td>
                <a class="btn btn-primary" href="{{ route('buku.edit', ['buku' => $buku->id]) }}">edit</a>
              </td>
              <td>2011-04-25</td>
              <td>$320,800</td>
            </tr>
                
              @empty
                Data belum ada
              @endforelse
        </tbody>
        <tfoot>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
            </tr>
        </tfoot>
    </table>
  
  
@endsection