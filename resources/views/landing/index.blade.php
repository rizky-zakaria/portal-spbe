@extends('landing.template')
@section('konten')
    <div class="main" style="background-image: url({{ asset('assets/img/bg-kantor-gub.jpg') }}); margin-top: 60px">
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
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="cari..">
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
            <h3 style="font-family: 'Montserrat', sans-serif">Statistik Kunjungan</h3>
        </div>
    </div>
    <div class="container-information d-flex justify-content-center mt-1">
        <div class="row">
            <div class="col-3">
                <div class="card">
                    <div class="card-body">
                        <center>
                            <h6 style="font-family: 'Montserrat', sans-serif">Hari Ini <br></h6>
                            <span style="font-family: 'Montserrat', sans-serif; font-size: 50px">{{ $hari }}</span>
                        </center>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card">
                    <div class="card-body">
                        <center>
                            <h6 style="font-family: 'Montserrat', sans-serif">Bulan<br></h6>
                            <span style="font-family: 'Montserrat', sans-serif; font-size: 50px">{{ $bulan }}</span>
                        </center>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card">
                    <div class="card-body">
                        <center>
                            <h6 style="font-family: 'Montserrat', sans-serif">Tahun<br></h6>
                            <span style="font-family: 'Montserrat', sans-serif; font-size: 50px">{{ $tahun }}</span>
                        </center>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card">
                    <div class="card-body">
                        <center>
                            <h6 style="font-family: 'Montserrat', sans-serif">Total<br></h6>
                            <span style="font-family: 'Montserrat', sans-serif; font-size: 50px">{{ $total }}</span>
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
