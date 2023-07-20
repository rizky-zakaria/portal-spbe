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
                            style="width: 50%; margin-bottom: 150px">Cari</button>
                    </div>
                </form>
            </center>
            {{-- </div> --}}
        </div>
    </div>
    <div class="container-information d-flex justify-content-center mt-5">
        <h3 style="font-family: 'Montserrat', sans-serif">Selamat Datang Di Website Resmi SPBE Provinsi Gorontalo</h3>
    </div>
    <div class="container-information d-flex justify-content-center mt-5">
        <div class="row">
            <h3 style="font-family: 'Montserrat', sans-serif">Dokumen SPBE</h3>
        </div>
    </div>
    <div class="container-information mt-1" style="padding-left: 100px; padding-right: 100px">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane"
                    type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Dokumen</button>
            </li>
        </ul>

        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab"
                tabindex="0">
                <ul class="list-group">
                    @foreach ($data as $item)
                        <li class="list-group-item">
                            {{ $item->konten }}
                            @if ($item->link !== '-')
                                <a href="{{ asset('uploads') . '/' . $item->link }}" class="btn btn-primary"
                                    style="float: right">lihat</a>
                            @endif
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection
