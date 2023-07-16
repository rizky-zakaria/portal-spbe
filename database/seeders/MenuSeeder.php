<?php

namespace Database\Seeders;

use App\Models\Menu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $menu = ['regulasi spbe', 'materi spbe', 'tentang spbe', 'faq', 'diskusi', 'dokumen spbe', 'laporan evaluasi spbe', 'capaian kematangan spbe', 'probis spbe', 'sop spbe', 'artikel'];

        for ($i = 0; $i < count($menu); $i++) {
            Menu::create([
                'menu' => $menu[$i]
            ]);
        }
    }
}
