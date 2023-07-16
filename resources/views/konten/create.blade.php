@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Buat Kategori</h1>
@stop

@section('content')
    <form action="{{ route('konten.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="card">
            <div class="card-header">
                <button type="submit" class="btn btn-success float-right">Simpan</button>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="kategori">Pilih Kategori</label>
                    <select class="form-control" id="kategori" name="kategori">
                        <option selected disabled>Pilih Kategori</option>
                        @foreach ($data as $item)
                            <option value="{{ $item->id }}">{{ $item->kategori }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="kategori">Konten</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" name="konten" rows="3"></textarea>
                </div>
                <div class="custom-file mb-3">
                    <input type="file" class="custom-file-input" id="validatedCustomFile" name="file" required>
                    <label class="custom-file-label" for="validatedCustomFile">Pilih file...</label>
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
