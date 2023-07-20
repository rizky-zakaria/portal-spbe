@extends('landing.template')
@section('konten')
    <div class="main"
        style="background-image: url({{ asset('assets/img/bg-kantor-gub.jpg') }}); margin-top: 60px;  background-size: cover; background-repeat: no-repeat">
        <div class="row  d-flex justify-content-center">
            {{-- <div class="col"> --}}
            <center>
                <h1 style="margin-top: 150px; margin-bottom: 50px; font-family: 'Montserrat', sans-serif;" class="text-light">
                    SISTEM PEMERINTAHAN
                    BERBASIS ELEKTRONIK
                </h1>
                <form action="{{ url('cari') }}" method="post">
                    @csrf
                    <div class="container" style="padding-left: 100px; padding-right: 100px">
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="cari.."
                            name="cari">
                        <button type="submit" class="btn btn-success mt-1"
                            style="width: 50%; margin-bottom: 200px">Cari</button>
                    </div>
                </form>
            </center>
            {{-- </div> --}}
        </div>
    </div>
    <div class="container-information d-flex justify-content-center mt-5">
        <h3 style="font-family: 'Montserrat', sans-serif">Selamat Datang Di Website Resmi SPBE Provinsi Gorontalo</h3>
    </div>
    <div class="card" style="margin-top: 50px; margin-right: 100px; margin-left: 100px">
        <div class="card-header">
            Hasil Pencarian
        </div>
        <div class="card-body">
            <ul class="list-group">
                @foreach ($data as $item)
                    <li class="list-group-item">{{ $item->konten }}
                        @if ($item->link !== '-')
                            <a href="{{ asset('uploads/' . $item->link) }}" class="btn btn-primary"
                                style="float: right">Lihat</a>
                        @endif
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection
