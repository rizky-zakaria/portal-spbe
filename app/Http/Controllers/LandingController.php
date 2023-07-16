<?php

namespace App\Http\Controllers;

use App\Models\Konten;
use App\Models\Kunjungan;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        Kunjungan::create([
            'keterangan' => 'dikunjungi'
        ]);
        $total = count(Kunjungan::all());
        $bulan = count(Kunjungan::where('created_at', 'like', '%' . date('Y-m') . '%')->get());
        $tahun = count(Kunjungan::where('created_at', 'like', '%' . date('Y') . '%')->get());
        $hari = count(Kunjungan::where('created_at', 'like', '%' . date('Y-m-d') . '%')->get());
        return view('landing.index', compact('total', 'bulan', 'tahun', 'hari'));
    }

    public function regulasiSpbe()
    {
        $peraturan = Konten::join('kategoris', 'kategoris.id', '=', 'kontens.kategori_id')
            ->where('kategoris.slug', '=', 'peraturan')
            ->get();
        $kebijakan = Konten::join('kategoris', 'kategoris.id', '=', 'kontens.kategori_id')
            ->where('kategoris.slug', '=', 'kebijakan')
            ->get();
        $perundang = Konten::join('kategoris', 'kategoris.id', '=', 'kontens.kategori_id')
            ->where('kategoris.slug', '=', 'perundang')
            ->get();
        return view('landing.regulasi-spbe', compact('peraturan', 'kebijakan', 'perundang'));
    }

    public function tentangSpbe()
    {
        $data = Konten::join('kategoris', 'kategoris.id', '=', 'kontens.kategori_id')
            ->where('kategoris.slug', '=', 'tentang')
            ->get();
        return view('landing.tentang-spbe', compact('data'));
    }

    public function faq()
    {
        $data = Konten::join('kategoris', 'kategoris.id', '=', 'kontens.kategori_id')
            ->where('kategoris.slug', '=', 'faq')
            ->get();
        return view('landing.faq', compact('data'));
    }

    public function diskusi()
    {
        $data = Konten::join('kategoris', 'kategoris.id', '=', 'kontens.kategori_id')
            ->where('kategoris.slug', '=', 'diskusi')
            ->get();
        return view('landing.diskusi', compact('data'));
    }

    public function materiSpbe()
    {
        $data = Konten::join('kategoris', 'kategoris.id', '=', 'kontens.kategori_id')
            ->where('kategoris.slug', '=', 'materi')
            ->get();
        return view('landing.materi', compact('data'));
    }

    public function dokumenSpbe()
    {
        $data = Konten::join('kategoris', 'kategoris.id', '=', 'kontens.kategori_id')
            ->where('kategoris.slug', '=', 'dokumen')
            ->get();
        return view('landing.dokumen', compact('data'));
    }

    public function laporanEvaluasiSpbe()
    {
        $data = Konten::join('kategoris', 'kategoris.id', '=', 'kontens.kategori_id')
            ->where('kategoris.slug', '=', 'laporan')
            ->get();
        return view('landing.laporan', compact('data'));
    }

    public function capaianKematanganSpbe()
    {
        $data = Konten::join('kategoris', 'kategoris.id', '=', 'kontens.kategori_id')
            ->where('kategoris.slug', '=', 'capaian')
            ->get();
        return view('landing.capaian', compact('data'));
    }

    public function probisSpbe()
    {
        $data = Konten::join('kategoris', 'kategoris.id', '=', 'kontens.kategori_id')
            ->where('kategoris.slug', '=', 'probis')
            ->get();
        return view('landing.probis', compact('data'));
    }

    public function sopSpbe()
    {
        $data = Konten::join('kategoris', 'kategoris.id', '=', 'kontens.kategori_id')
            ->where('kategoris.slug', '=', 'sop')
            ->get();
        return view('landing.sop', compact('data'));
    }

    public function artikel()
    {
        $data = Konten::join('kategoris', 'kategoris.id', '=', 'kontens.kategori_id')
            ->where('kategoris.slug', '=', 'artikel')
            ->get();
        return view('landing.artikel', compact('data'));
    }

    public function cari(Request $request)
    {
        $data = Konten::join('kategoris', 'kategoris.id', '=', 'kontens.kategori_id')
            ->where('kontens.konten', 'like', '%' . $request->cari . '%')
            ->where('kategoris.kategori', 'like', '%' . $request->cari . '%')
            ->get();
        return view('landing.cari', compact('data'));
    }
}
