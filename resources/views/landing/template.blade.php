<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SPBE</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400;600;700&display=swap');
    </style>
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <style>
        #backToTopBtn {
            display: none;
            position: fixed;
            bottom: 20px;
            right: 20px;
            z-index: 99;
            font-size: 20px;
            border: none;
            outline: none;
            background-color: #333;
            color: #fff;
            cursor: pointer;
            padding: 10px;
            border-radius: 4px;
            opacity: 0.7;
        }

        #backToTopBtn:hover {
            opacity: 1;
        }
    </style>
</head>

<body>
    <nav id="navbar" class="navbar navbar-expand-lg fixed-top bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="">
                <div class="row" style="margin-left: 50px">
                    <img src="{{ asset('assets/logo/gorontalo.png') }}" alt="" style="width: 50px;">
                </div>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup"
                style="margin-right: 50px">
                <div class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') }}">Beranda</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Manajemen Pengetahuan
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ url('regulasi-spbe') }}">Regulasi SPBE</a></li>
                            <li><a class="dropdown-item" href="{{ url('materi-spbe') }}">Materi SPBE</a></li>
                            <li><a class="dropdown-item" href="{{ url('tentang-spbe') }}">Tentang SPBE</a>
                            </li>
                            <li><a class="dropdown-item" href="{{ url('faq') }}">FaQ</a>
                            </li>
                            <li><a class="dropdown-item" href="{{ url('diskusi') }}">Diskusi</a>
                            </li>
                            <li><a class="dropdown-item" href="{{ url('dokumen-spbe') }}">Dokumen SPBE</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Manejemen Perubahan
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ url('laporan-evaluasi-spbe') }}">Laporan Evaluasi
                                    SPBE</a></li>
                            <li><a class="dropdown-item" href="{{ url('capaian-kematangan-spbe') }}">Capaian Kematangan
                                    SPBE</a></li>
                            <li><a class="dropdown-item" href="{{ url('probis-spbe') }}">Probis SPBE</a>
                            </li>
                            <li><a class="dropdown-item" href="{{ url('sop-spbe') }}">SOP SPBE</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('artikel') }}">Artikel SPBE</a>
                    </li>
                </div>
            </div>
        </div>
    </nav>
    <div class="content">
        @yield('konten')
        <footer style=" background-color: #f8f8f8;  padding-top: 20px; padding-bottom: 20px; margin-top: 50px">
            <div class="row" style="margin-left: 80px">
                <span style="color: rgb(rgb(95, 95, 95); font-family: 'Courier New', Courier, monospace">
                    © 2023 Badan Kepegawaian Daerah Provinsi Gorontalo. All Rights Reserved
                </span>
            </div>
        </footer>

    </div>
    <script>
        function hendelWaktuMundur() {
            const countdownDate = new Date('').getTime();
            const textSelesai = "Terima Kasih Pendfataran Telah Ditutup";
            const waktuMundur = document.getElementById("waktu-mundur");
            const waktuSelesai = document.getElementById("waktu-selesai");

            if (!countdownDate) {
                waktuSelesai.value = true;
                waktuMundur.innerText = textSelesai;
                return;
            }

            const countdownTimer = setInterval(function() {
                const now = new Date().getTime();
                const difference = countdownDate - now;

                const days = Math.floor(difference / (1000 * 60 * 60 * 24));
                const hours = Math.floor((difference % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                const minutes = Math.floor((difference % (1000 * 60 * 60)) / (1000 * 60));
                const seconds = Math.floor((difference % (1000 * 60)) / 1000);

                const countdownString = `${days} hari ${hours} jam ${minutes} menit ${seconds} detik`;

                waktuMundur.innerText = countdownString;

                if (difference < 0) {
                    clearInterval(countdownTimer);
                    waktuSelesai.value = true;
                    waktuMundur.innerText = textSelesai;
                }
            }, 1000);
        }

        // Panggil fungsi hendelWaktuMundur untuk memulai hitung mundur
        hendelWaktuMundur();
    </script>

    <button onclick="scrollToTop()" id="backToTopBtn" title="Kembali ke atas">&#8593;</button>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script>
        window.onscroll = function() {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("backToTopBtn").style.display = "block";
            } else {
                document.getElementById("backToTopBtn").style.display = "none";
            }
        }

        function scrollToTop() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
    <script src="{{ asset('assets/js/style.js') }}"></script>
</body>

</html>
