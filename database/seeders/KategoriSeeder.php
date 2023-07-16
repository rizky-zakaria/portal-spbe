<?php

namespace Database\Seeders;

use App\Models\Kategori;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kategori = ['kebijakan', 'peraturan', 'perundang', 'hasil', 'materi', 'tentang', 'faq', 'diskusi', 'dokumen', 'laporan', 'capaian', 'probis', 'sop', 'artikel'];
        for ($i = 0; $i < count($kategori); $i++) {
            $data = Kategori::create([
                'kategori' => $kategori[$i],
                'slug' => Str::slug($kategori[$i])
            ]);
        }
    }
}
