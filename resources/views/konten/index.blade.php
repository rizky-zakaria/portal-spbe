@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Kategori</h1>
@stop

@section('content')

    <div class="card">
        <div class="card-header">
            <a href="{{ route('konten.create') }}" class="btn btn-primary float-right">Tambah</a>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">Konten</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                        <tr>
                            <th>{{ $loop->iteration }}</th>
                            <td>{{ $item->kategori }}</td>
                            <td>{{ $item->konten }}</td>
                            <td><a href="" class="btn btn-success">ubah</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="{{ asset('vendor/datatabels/admin_custom.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/datatables/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/datatables/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/datatables/buttons.bootstrap4.min.css') }}">
@stop

@section('js')

    <script src="{{ asset('vendor/datatables/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables-bs4/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables/jszip.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables/pdfmake.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables/vfs_fonts.js') }}"></script>
    <script src="{{ asset('vendor/datatables/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables/buttons.print.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables/buttons.colVis.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables/adminlte.min.js?v=3.2.0.js') }}"></script>
    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
@stop
