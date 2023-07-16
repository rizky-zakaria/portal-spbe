@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Buat Kategori</h1>
@stop

@section('content')
    <form action="{{ route('kategori.store') }}" method="post">
        @csrf
        <div class="card">
            <div class="card-header">
                <button type="submit" class="btn btn-success float-right">Simpan</button>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="menu">Pilih Menu</label>
                    <select class="form-control" id="menu" name="menu">
                        <option selected disabled>Pilih menu</option>
                        @foreach ($data as $item)
                            <option value="{{ $item->id }}">{{ $item->menu }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="kategori">Kategori</label>
                    <input type="text" name="kategori" id="kategori" class="form-control">
                </div>
            </div>
        </div>
    </form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop
